<?php

namespace App\Http\Controllers;
use Mail;
use App\Student;
use App\Mail\StudentExam;


use Illuminate\Http\Request;

class ExamController extends Controller
{
	public function sendExam(Request $request){

		if (!empty($request['id'])){
			foreach ($request['id'] as $key => $id) {
			$student = Student::find($id);
		    Mail:: to($student->email)->send(new StudentExam($student));				
			}

			return back();

		}else{
			echo "Please check box only one more multi";
		}

		
	}

	public function gerSendMail(){

		$student= Student::all();
		return view ('student.list', compact('student'));
	}
    
}
