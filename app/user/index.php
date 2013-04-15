<?php
    session_start();
    require_once("../include/auth.php");
    redirect_unless_login("../login.php");

    require_once("../include/smarty.php");
    $smarty->assign("title", "我的信息");
    $smarty->display("user/index.tpl");
