<?php

require "function.php";
$pdo = require "connect.php";

$statement = $pdo->prepare(
    "INSERT INTO students (name,email,gender,dob) 
    VALUES (:name,:email,:gender,:dob)"
);

function bindParam(array $names = [])
{
    global $statement;
    foreach ($names as $name) {
        $statement->bindParam(":$name", $_POST["$name"]);
    }
};

bindParam(["name", "email", "gender", "dob"]);


if ($statement->execute()) {
    $current_year = date("Y");
    $student_year = explode("-", $_POST['dob'])[0];
    $age = $current_year - $student_year;
    $id = $pdo->lastInsertId();
    header("Location: /update.view.php?id=$id&age=$age");
} else {
    echo "fail";
}
