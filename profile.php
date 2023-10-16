<?php

session_start();

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: /");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Profile</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-5 mx-auto mt-5">
                <div class="card card-body">
                    <h1 class="h3 text-primary">Hello <?= $_SESSION['name']; ?></h1>
                    <form action="" method="POST" class="text-end">
                        <button class="btn btn-danger" name="logout">logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>