<?php

require "function.php";

// echo phpinfo();

if (isset($_SESSION)) {
    session_start();
    if ($_SESSION['is_login']) {
        header("Location: profile.php");
        // dd($_SESSION);
    } else {
        header("Location: /");
        // dd("false");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Session</title>
</head>

<body>
    <div class="container">
        <?php error_reporting(1);
        if (!isset($_SESSION) && $_SESSION['is_login'] == false) : ?>
            <?php require "login.php"; ?>
        <?php endif; ?>
    </div>
</body>

</html>