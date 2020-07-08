<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
	// Showing All Students Data
    public function index(){
    	return view('students.index');
    }
	// Add New Student
    public function create(){
    	return view('students.create');
    }
}
