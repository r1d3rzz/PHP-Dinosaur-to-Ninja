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
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header bg-info text-light d-flex justify-content-between align-items-center">
                        <h2 class="h4">
                            <a href="/update/<?= $student->id; ?>?age=<?= $_GET['age']; ?>" class="btn btn-warning">Update Student</a>
                            <a onclick="return confirm('Are you sure to delete it?')" href="/destroy/<?= $student->id; ?>" class="btn btn-danger">Remove Student</a>
                        </h2>
                        <div><a href="/" class="btn btn-sm btn-primary">Back</a></div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th class="fw-bold">ID</th>
                                <td><?= $student->id; ?></td>
                            </tr>
                            <tr>
                                <th class="fw-bold">Name</th>
                                <td><?= $student->name; ?></td>
                            </tr>
                            <tr>
                                <th class="fw-bold">Email</th>
                                <td><?= $student->email; ?></td>
                            </tr>
                            <tr>
                                <th class="fw-bold">Gender</th>
                                <td><?= ucfirst($student->gender); ?></td>
                            </tr>
                            <tr>
                                <th class="fw-bold">Date of Birth</th>
                                <td><?= $student->dob; ?></td>
                            </tr>
                            <tr>
                                <th class="fw-bold">Age</th>
                                <td><?= $_GET['age']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>