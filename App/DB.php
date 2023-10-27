<?php

namespace App;

use App\Models\Student;
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
        return Student::all();
    }

    public function show($id)
    {
        return Student::where('id', $id)->first();
    }

    public function store($data)
    {
        $formData = Student::create([
            "name" => $data['name'],
            "email" => $data['email'],
            "gender" => $data['gender'],
            "dob" => $data['dob'],
        ]);

        if ($formData) {
            $current_year = date("Y");
            $student_year = explode("-", $data['dob'])[0];
            $age = $current_year - $student_year;
            header("Location: /update.view.php?id=$formData->id&age=$age");
        } else {
            dd("Fail");
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Student::destroy($id);
            header("Location: /");
        } else {
            dd("Fail");
        }
    }

    public function update($data)
    {
        $id = $data['id'];

        $formData = Student::where('id', $id)->update([
            "name" => $data['name'],
            "email" => $data['email'],
            "gender" => $data['gender'],
            "dob" => $data['dob'],
        ]);

        if ($formData) {
            $current_year = date("Y");
            $student_year = explode("-", $data['dob'])[0];
            $age = $current_year - $student_year;
            header("Location: /show.view.php?id=$id&age=$age");
        } else {
            dd("Fail");
        }
    }
}
