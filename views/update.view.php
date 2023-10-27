<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>CRUD</title>
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-5 mx-auto">
                <div class="card">
                    <div class="card-header bg-warning text-light d-flex justify-content-between align-items-center">
                        <h2 class="h4">Update Student</h2>
                        <div>
                            <a class="btn btn-danger btn-sm" href="/">Home</a>
                            <a class="btn btn-primary btn-sm" href="/show?id=<?= $student->id; ?>&age=<?= $_GET['age'] ?>">Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/update_store" method="POST">
                            <input hidden type="text" name="id" value="<?= $student->id; ?>">
                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input value="<?= $student->name; ?>" type="text" name="name" id="name" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="name">Eamil</label>
                                <input value="<?= $student->email; ?>" type="email" name="email" id="email" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="gender">Gender</label>
                                <select name="gender" id="gender" class="form-select">
                                    <option disabled selected>Select Your Gender</option>
                                    <option value="male" <?php if ($student->gender === 'male') {
                                                                echo 'selected';
                                                            } ?>>Male</option>
                                    <option value="female" <?php if ($student->gender === 'female') {
                                                                echo 'selected';
                                                            } ?>>Female</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="dob">Date of Birth</label>
                                <input value="<?= $student->dob; ?>" type="date" name="dob" id="dob" class="form-control">
                            </div>

                            <div class="">
                                <button class="btn btn-dark">
                                    <span class="">Update Student Data</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>