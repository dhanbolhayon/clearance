<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
    	$students = Student::all();
    	return view('students.index', compact('students'));
    }
    public function create()
    {
    	return view('students.create');
    }
    public function store()
    {

    	request()->validate([
    		'id_number' => 'required',
    		'student_name' => 'required',
    		'course' => 'required',
    		'year' => 'required',
    		'gender' => 'required',
    		
    	]);
    	// store the model
    	$students = Student::create(request()->only([
    		'id_number', 'student_name', 'course', 'year', 'gender'
    	]));
    	// redirect to equipment index
    	return redirect('/students');
    	
    }

}
