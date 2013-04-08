<?php
    session_start();
    header("Content-Type: text/html; charset=utf-8");
    !isset($_SESSION["user"]) and header("Location: ../login.php");

    require_once("../class/book.class.php");

    if (isset($_GET["id"])) {
        $item_id = $_GET["id"];
        $book_instance = new Book();
        $result = (int)$book_instance->remove($item_id);

        echo "<script>location.href = 'result.php?action=delete&code=" . $result . "'</script>";
    } else {
        echo "<p>缺少id参数</p>";
        echo "<p><a href='list.php'>列表</a></p>";
    }
