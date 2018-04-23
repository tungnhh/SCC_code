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
        return view('users.subject',['subject'=>$subject]) ->with('notification',"Add Subject successfully");
    }

    public function renameSubject(Request $request, $id){
        $edit = Subject::find($id);
        $edit -> name = $request -> subject;
        $edit ->save();
    }

}
