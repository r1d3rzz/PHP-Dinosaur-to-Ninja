<?php

use App\DB;

require __DIR__ . "/vendor/autoload.php";

$db = new DB;

$db->update($_POST);
