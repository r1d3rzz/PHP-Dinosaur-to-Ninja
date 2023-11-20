<?php

namespace App\Controllers;

use App\Models\Student;
use Symfony\Component\HttpFoundation\Request;

class StudentController
{
    public function index()
    {
        return view("index", [
            "students" => Student::all()
        ]);
    }

    public function show($id)
    {
        $student = Student::find($id);
        return view('show', [
            'student' => $student,
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $student = Student::create($request->request->all());

        $current_year = date("Y");
        $student_year = explode("-", $student->dob)[0];
        $age = $current_year - $student_year;

        return redirect("/update/$student->id?age=$age");
    }

    public function update($id)
    {
        $student = Student::find($id);

        return view('update', [
            "student" => $student
        ]);
    }

    public function update_store(Request $request)
    {
        $id = $request->request->get('id');
        $current_year = date("Y");
        $student_year = explode("-", $request->request->get('dob'))[0];
        $age = $current_year - $student_year;

        Student::where('id', $id)->update($request->request->all());

        return redirect("/show/$id?age=$age");
    }

    public function destroy($id)
    {
        Student::destroy($id);
        return redirect();
    }
}
