<?php

try {
    return new PDO(
        "mysql:host=localhost;dbname=school",
        "root",
        ""
    );
} catch (PDOException $e) {
    echo $e->getMessage();
}
