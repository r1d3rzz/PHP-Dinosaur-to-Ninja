<?php

require "function.php";
$pdo = require "connect.php";
$statement = $pdo->prepare(
    "UPDATE students 
    SET name = :name, email = :email, gender = :gender, dob = :dob 
    WHERE id = :id"
);

function bindParam(array $names = [])
{
    global $statement;
    foreach ($names as $name) {
        $statement->bindParam(":$name", $_POST["$name"]);
    }
};

bindParam(['name', 'email', 'gender', 'dob', 'id']);


if ($statement->execute()) {
    $current_year = date("Y");
    $student_year = explode("-", $_POST['dob'])[0];
    $age = $current_year - $student_year;
    $id = $_POST['id'];
    header("Location: /show.view.php?id=$id&age=$age");
} else {
    echo "fail";
}
