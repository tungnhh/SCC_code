<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
class SCManagementController extends Controller
{
    //
    public function listAllSubject(){
        $subject = Subject::where('userID',9)->get();
        return view('users.subject',['subject'=>$subject]);
    }
    public function addSubject(Request $request){
        $add = new Subject;
        $add -> name = $request -> subject;
        $add -> userID = 9;
        $add ->save();
        $subject = Subject::where('userID',9)->get();
        return view('users.subject',['subject'=>$subject]) ->with('notification',"Add Subject successfully");
    }

    public function renameSubject(Request $request, $id){
        $edit = Subject::find($id);
        $edit -> name = $request -> subject;
        $edit ->save();
    }

}
