<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes;
use App\Exercise;

class CompareController extends Controller
{
    public function getClass($idsubject)
    {
    	if($idsubject == -1){
    		echo "<option value=\"-1\">Select Class</option>";
    	}else{
    		$Class = Classes::where('subjectID', $idsubject) -> get();
    		if(count($Class) == 0)
    		{
    			echo "<option value=\"-1\">Don't Have Class</option>";
    		}else
    		{
    			foreach ($Class as $cl) {
    			echo "<option value='".$cl->id."'>".$cl->name."</option>";
    			}
    		}
    	}
    }

    public function getExercise($idClass)
    {
    	if($idClass == -1){
    		echo "<option value=\"-1\">Select Exercise</option>";
    	}else{
    		$Exercise = Exercise::where('classID', $idClass) -> get();
    		if(count($Exercise) == 0)
    		{
    			echo "<option value=\"-1\">Don't Have Exercise</option>";
    		}
    		else
    		{
    			foreach ($Exercise as $ex) {
    			echo "<option value='".$ex->id."'>".$ex->name."</option>";
    			}
    		}

    		
    	}
    }
}
?>