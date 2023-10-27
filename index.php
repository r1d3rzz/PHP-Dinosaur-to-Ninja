<?php

use App\DB;
use Illuminate\Database\Eloquent\Model;

require __DIR__ . "/vendor/autoload.php";

$db = new DB;
$students = $db->index();

require "index.view.php";
