<?php

function dd($data = "")
{
    echo "<pre>";
    die(var_dump($data));
}

$result = "";

if (isset($_POST['calculate'])) {
    $fnum = intval($_POST["fnum"]);
    $snum = intval($_POST["snum"]);
    $mathSign = $_POST["mathSign"];
    $has_error = false;

    if (is_string($fnum) || $fnum == "") {
        $has_error = true;
    }

    if (is_string($snum) || $snum == "") {
        $has_error = true;
    }


    if ($has_error === false) {
        switch ($mathSign) {
            case '+':
                $result = $fnum + $snum;
                break;
            case '-':
                $result = $fnum - $snum;
                break;
            case '*':
                $result = $fnum * $snum;
                break;
            case '/':
                if ($fnum !== 0 || $snum !== 0) {
                    $result = $fnum / $snum;
                } else {
                    $result = "Divided Value not to be Zero";
                }
                break;
            default:
                $result = "ERROR: Your Input Must Be Number";
                break;
        }
    } else {
        $result = "ERROR: Your Input Must Be Number";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Caculator</title>
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-7 mx-auto mt-5">
                <div class="card">
                    <div class="row">
                        <div class="col">
                            <form action="" method="POST">
                                <div class="card-body d-flex">
                                    <input type="text" name="fnum" placeholder="Enter First Number" class="form-control" required>
                                    <select name="mathSign" class="form-select text-center">
                                        <option value="+">&plus;</option>
                                        <option value="-">&minus;</option>
                                        <option value="*">&times;</option>
                                        <option value="/">&divide;</option>
                                    </select>
                                    <input type="text" name="snum" placeholder="Enter Second Number" class="form-control" required>
                                    <input type="submit" name="calculate" value="Calculate" class="btn btn-sm btn-dark ms-2">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card card-body border-0">
                                <label for="result">Result</label>
                                <input type="text" name="result" id="result" class="form-control" value="<?= $result; ?>" style="height: 100px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>