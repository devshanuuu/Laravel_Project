<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
       $students = Student::all();
       return view('students', compact('students')); // compact() is a PHP function used to pass variables from the controller to the view.
    }

    public function create()
    {
        return view('create-student');
    }

    public function store(Request $request)
    {
         $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'age' => 'required|integer',
        'course' => 'required',
         ]);   
    
    
         $student = new Student();

         $student->name = $request->name;
         $student->email = $request->email;
         $student->age = $request->age;
         $student->course = $request->course;

         $student->save();

         return redirect('/students');
    }

    public function edit($id)
    {
        $student = Student::findorFail($id);
        return view('edit-student', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::findorFail($id);

        $student->name = $request->name;
        $student->email = $request->email;
        $student->age = $request->age;
        $student->course = $request->course;

        $student->save();
        return redirect('/students');
    }
}
