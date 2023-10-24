<?php

require "./function.php";
$pdo = require "connect.php";

$statement = $pdo->prepare("SELECT * from students");
$statement->execute();
$students = $statement->fetchAll(PDO::FETCH_OBJ);

require "index.view.php";
