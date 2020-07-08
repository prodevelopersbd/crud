<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Student;

class StudentController extends Controller
{
	// Showing All Students Data
    public function index(){

    	$all_data =  Student::latest()->get();
    	return view('students.index',[
    		'all_students'		=> $all_data,
    	]);
    }
	// Add New Student
    public function create(){
    	return view('students.create');
    }
	// Student Data Store
    public function submit(Request $val){

    	if($val ->hasFile('photo')  ){
    		$img =  $val -> file('photo');
    		$file_unique_name = md5(time().rand()).'.'.$img->getClientOriginalExtension();
    		$img -> move(public_path('media/students/'),$file_unique_name);
    	}

    	$this  -> validate($val,[
    		'name'		=>'required',
    		'email'		=>'required | unique:students',
    		'cell'		=>'required | unique:students',
    	],
    	[
    		'name.required' => "Name den nai ken?",
    		'email.required' => "email den nai ken?",
    		'cell.required' => "cell den nai ken?",
    	],
    );
    	Student::create([
    		'name'			=> $val -> name,
    		'email'			=> $val -> email,
    		'cell'			=> $val -> cell,
    		'age'			=> $val -> age,
    		'address'		=> $val -> address,
    		'photo'		    => $file_unique_name,
    	]);

    	return redirect() -> back()->with('success','Student added successfully!!');
    }

    // Showing single student data
    public function view($id){

    	$single_student_data = Student::findOrFail($id);

    	return view('students.show',compact('single_student_data'));

    }
}
