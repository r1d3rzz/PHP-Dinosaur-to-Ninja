<?php
require __DIR__ . "/vendor/autoload.php";

use App\DB;

$db = new DB;

$students = $db->index();

require "index.view.php";
