<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
       $student = new Student();
       
       $student->name = "Shanu";
       $student->email = "shanu@gmail.com";
       $student->age = 23;
       $student->course = "BTECH";

       $student->save();
    
    
       
       return "Student Added Successfully";
    }
}
