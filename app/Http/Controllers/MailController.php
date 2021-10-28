<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Mail\InterviewPlace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function sendEmail()
    {
        $students = Student::take(8)->get();
       
        
        Mail::to("mann1122334455@gmail.com")->send(new InterviewPlace());
        return view('email')->with('student', $students);
    }
}
