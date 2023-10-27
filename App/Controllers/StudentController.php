<?php

namespace App\Controllers;

use App\Models\Student;
use Symfony\Component\HttpFoundation\Request;

class StudentController
{
    private $query, $post;

    public function __construct()
    {
        $request =  Request::createFromGlobals();

        $this->query = $request->query;
        $this->post = $request->request;
    }

    public function index()
    {
        return view("index", [
            "students" => Student::get(),
        ]);
    }

    public function show()
    {
        $student = Student::find($this->query->get('id'));
        return view('show', [
            'student' => $student,
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        $student = Student::create($this->post->all());

        $current_year = date("Y");
        $student_year = explode("-", $student->dob)[0];
        $age = $current_year - $student_year;

        return redirect("/update?id=$student->id&age=$age");
    }

    public function update()
    {
        $student = Student::find($this->query->get('id'));

        view('update', [
            "student" => $student
        ]);
    }

    public function update_store()
    {
        $id = $this->post->get('id');
        $current_year = date("Y");
        $student_year = explode("-", $this->post->get('dob'))[0];
        $age = $current_year - $student_year;

        Student::where('id', $id)->update($this->post->all());

        return redirect("/show?id=$id&age=$age");
    }

    public function destroy()
    {
        $id = $this->query->get('id');
        Student::destroy($id);
        return redirect();
    }
}
