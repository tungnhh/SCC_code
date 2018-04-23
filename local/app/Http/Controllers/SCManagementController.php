<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use Auth;
class SCManagementController extends Controller
{
    //
    public function listAllSubject(){
        $subject = Subject::where('userID',Auth::user()->id)->get();
        return view('users.subject',['subject'=>$subject]);
    }
    public function addSubject(Request $request){
        $add = new Subject;
        $add -> name = $request -> subject;
        $add -> userID = Auth::user()->id;
        $add ->save();
        $subject = Subject::where('userID',Auth::user()->id)->get();
        return redirect('users/subject/list'); ;
    }

    public function renameSubject(Request $request){
        $edit = Subject::find($request->subject);
        $edit -> name = $request->subject_edit;
        $edit ->save();
        return redirect('users/subject/list');
    }

}
