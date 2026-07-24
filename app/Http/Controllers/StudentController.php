<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
       $students = Student::all();
       return view('students', compact('students'));
    }

    public function create()
    {
        return view('create-student');
    }

    public function store(Request $request)
    {
         $student = new Student();

         $student->name = $request->name;
         $student->email = $request->email;
         $student->age = $request->age;
         $student->course = $request->course;

         $student->save();

         return "Student Added Successfully!";
    }
}
