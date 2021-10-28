<?php



namespace App\Http\Controllers;


use App\Mail\InterviewPlace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Student;



class StudentPageController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        
        $i=1;
        $students = Student::take(8)->get();
        return view('student-page')->with('student', $students,$i);
        


        

    

    }



}