<?php

require "function.php";
$pdo = require "connect.php";

$id = $_GET['id'];
$statement = $pdo->prepare("DELETE FROM students WHERE id = '$id'");

if ($statement->execute()) {
    header("Location: /");
} else {
    dd("Something Wrong");
}
