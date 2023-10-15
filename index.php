<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Form</title>
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-5 mx-auto mt-5">
                <form action="./signUp.php" method="POST">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="name">Username</label>
                                <input type="text" name="name" id="name" placeholder="Username" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label>Gender</label>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <input type="radio" name="gender" id="male" value="male">
                                        <label class="ms-1" for="male">Male</label>
                                    </div>

                                    <div class="me-3">
                                        <input type="radio" name="gender" id="gender" value="female">
                                        <span class="ms-1" id="">Female</span>
                                    </div>

                                    <div class="me-3">
                                        <input type="radio" name="gender" id="gender" value="Other">
                                        <span class="ms-1">other</span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <select name="townships" id="township" class="form-select">
                                    <option value="" disabled selected>Choose Your Township</option>
                                    <option value="yankin">Yankin</option>
                                    <option value="ookala">Ookala</option>
                                    <option value="thingangyun">Thingangyun</option>
                                </select>
                            </div>

                            <div class="form-group text-end">
                                <button class="btn btn-sm btn-primary">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>