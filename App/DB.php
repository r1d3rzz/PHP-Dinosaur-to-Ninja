<?php

namespace App;

use Illuminate\Database\Capsule\Manager as Capsule;

class DB
{

    public function __construct()
    {
        $capsule = new Capsule;

        $capsule->addConnection([
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'school',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ]);

        $capsule->setAsGlobal();

        $capsule->bootEloquent();
    }

    public function index()
    {
        return Capsule::table("students")->get();
    }

    public function show($id)
    {
        return Capsule::table("students")->where('id', $id)->first();
    }

    public function store($data)
    {
        $id = Capsule::table("students")->insertGetId([
            "name" => $data['name'],
            "email" => $data['email'],
            "gender" => $data['gender'],
            "dob" => $data['dob'],
        ]);

        if ($id) {
            $current_year = date("Y");
            $student_year = explode("-", $_POST['dob'])[0];
            $age = $current_year - $student_year;
            header("Location: /update.view.php?id=$id&age=$age");
        } else {
            dd("Fail");
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Capsule::table("students")->where('id', $id)->delete();
            header("Location: /");
        } else {
            dd("Fail");
        }
    }

    public function update($data)
    {
        $formData = Capsule::table("students")->where("id", $data['id'])->update([
            "name" => $data['name'],
            "email" => $data['email'],
            "gender" => $data['gender'],
            "dob" => $data['dob'],
        ]);

        if ($formData) {
            $current_year = date("Y");
            $student_year = explode("-", $data['dob'])[0];
            $age = $current_year - $student_year;
            $id = $data['id'];
            header("Location: /show.view.php?id=$id&age=$age");
        } else {
            dd("Fail");
        }
    }
}
