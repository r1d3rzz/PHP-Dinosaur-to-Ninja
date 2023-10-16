<?php


if (isset($_POST['login'])) {
    session_start();
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['password'] = $_POST['password'];

    if ($_SESSION['name'] == "rider" && $_SESSION['password'] == "rider") {
        $_SESSION['is_login'] = true;
        header("Location: profile.php");
    } else {
        dd("Username or Password is Wrong");
    }
}

?>

<div class="row">
    <div class="col-5 mx-auto mt-5">
        <div class="card card-body">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="name">Username</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>

                <div class="text-end">
                    <button class="btn btn-primary" name="login">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>