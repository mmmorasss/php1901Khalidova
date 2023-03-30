<?php
$userId = $_POST['user_id'];
$articleId = $_POST['article_id'];
$comment = $_POST['comment'];
$mysqli = new mysqli("localhost", "root", "", "php1901");
$mysqli->query("INSERT INTO `comments`(`user_id`, `article_id`, `comment`) VALUES ('$userId', '$articleId', '$comment')");
header("Location: /article.php?id=$articleId");