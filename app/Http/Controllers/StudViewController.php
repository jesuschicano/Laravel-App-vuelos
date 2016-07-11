<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Student;

class StudViewController extends Controller
{
  public function index(){
    $students = Student::all();
    return view('stud_view', ['students' => $students]);
  }
}
