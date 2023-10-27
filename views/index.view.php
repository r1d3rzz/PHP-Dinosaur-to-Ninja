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
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header bg-info text-light d-flex justify-content-between align-items-center">
                        <div>
                            <div class="fs-4">Students List</div>
                            <?php if (count($students) > 0) : ?>
                                <div class="fw-bold">Total: <?= count($students); ?> students</div>
                            <?php endif; ?>
                        </div>
                        <div><a href="/create" class="btn btn-sm btn-primary">Add Student</a></div>
                    </div>
                    <div class="card-body">
                        <?php if (count($students) > 0) : ?>
                            <table class="table align-middle mb-0 bg-white">
                                <thead class="bg-light">
                                    <tr>
                                        <th class="fw-bold">ID</th>
                                        <th class="fw-bold">Name</th>
                                        <th class="fw-bold">Eamil</th>
                                        <th class="fw-bold">Gender</th>
                                        <th class="fw-bold">Date of Birth</th>
                                        <th class="fw-bold">Age</th>
                                        <th class="fw-bold" colspan="2" style="text-align: center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($students as $student) : ?>
                                        <?php
                                        $current_year = date("Y");
                                        $student_year = explode("-", $student->dob)[0];
                                        $dob = $current_year - $student_year;
                                        ?>
                                        <tr>
                                            <td><?= $student->id; ?></td>
                                            <td><?= $student->name; ?></td>
                                            <td><?= $student->email; ?></td>
                                            <td><?= ucfirst($student->gender); ?></td>
                                            <td><?= $student->dob; ?></td>
                                            <td><?= $dob; ?></td>
                                            <td>
                                                <a href="/show?id=<?= $student->id; ?>&age=<?= $dob; ?>" class="btn btn-sm btn-dark">Detail</a>
                                                <a href="/destroy?id=<?= $student->id; ?>" class="btn btn-sm btn-danger">Detail</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        <?php else : ?>
                            <div class="alert alert-danger text-center p-2">
                                Empty Students
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>