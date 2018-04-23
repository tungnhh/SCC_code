<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Report;
use App\Subject;

class ReportController extends Controller
{
    public function getSubject(){
    	$Subject = Subject::where('userID', Auth::user()->id)->get();
    	return view('users.report', ['subject'=> $Subject]);
    }
}
