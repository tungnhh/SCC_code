<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes;
use App\Exercise;
use App\Student;
use App\File;
use Storage;

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

    public function getStudent($exerciseID)
    {

    	$student = File::where('exerciseID', $exerciseID) -> get();

    	if(count($student) == 0)
    	{
    		echo "<tr class=\"row100 body\">
									<td class=\"cell100 column1\"></td>
									<td class=\"cell100 column2\"><i>Don't have student!</i></td>
									<td class=\"cell100 column4\">

									</td>

					</tr>";
    	}else{
    		foreach ($student as $st) {
    			echo "<tr class=\"row100 body\">
									<td class=\"cell100 column1\">".$st->name."</td>
									<td class=\"cell100 column2\">".$st->id."</td>
									<td class=\"cell100 column4\">
										<label class=\"tasks-list-item\">
        								<input type=\"checkbox\" name=\"studentID[]\" value='".$st->id."'' class=\"tasks-list-cb\">
        								<span class=\"tasks-list-mark\"></span>

      									</label>
									</td>

					</tr>";
    		}
    	}


    }

    public function compare(Request $request)
    {
    	if($request->has('studentID'))
    	{
    		$data = array(array("language" => "java"));

    		
    		
    		$studentID = $request->input('studentID');
    		foreach ($studentID as $studentID) {
    		
    			array_push($data, ["fileID" => $studentID]);
    			
    		}


   			 $data_string = json_encode($data);                                                                                   



    		$url = 'localhost:3000/get_php_data';
    
    		$ch = curl_init($url);  

    		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
    		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
    		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
    		curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
        	'Content-Type: application/json',                                                                                
        	'Content-Length: ' . strlen($data_string))                                                                 
   			 );;    

    		$output=curl_exec($ch);
            ini_set('max_execution_time', 300);
            
    		curl_close($ch);


    		$array = json_decode($output, true);

    		$ReportID;

    		foreach ($array['ReportID'] as $i => $v) {
    			$ReportID = $v['max'];
    			
    		}

    		// foreach($array['reportData'] as $i => $v)
    		// {
    		// 	$reportDetail = $v[$i];
    		// 	// echo "<span style=\"white-space: pre-line\">" ,($reportDetail[2][0][0]), "</span>";

    		// 	echo serialize($reportDetail);
    			
    			
    		// }
    		
    		// echo serialize($array['reportData'][0][1][2]);

    		$reportData = $array['reportData'];
    		$colorcode = array("#000000", "#FF0000", "#DF7401", "#FFFF00", "#BFFF00", "#00FF00", "#00FFBF", "#0080FF", "#0101DF", "#7401DF", "#8904B1","#F781F3", "#8A0868", "#4B8A08", "#088A85","#5858FA","#F7BE81","#0B0B61", "#0000FF","#ea2a44", "#DF0101", "#8A0808", "#21610B", "#0B3861", "#29088A", "#0B3B24", "#2ECCFA", "#FF0040", "#5E610B","#A901DB","#FF00FF", "#8A0886", "#DF013A", "#5F4C0B", "#04B4AE", "#210B61","#088A29","#088A4B","#610B0B","#8A2908","#61380B","#3A2F0B","#21610B","#000000", "#FF0000", "#DF7401", "#FFFF00", "#BFFF00", "#00FF00", "#00FFBF", "#0080FF", "#0101DF", "#7401DF", "#8904B1","#F781F3", "#8A0868", "#4B8A08", "#088A85","#5858FA","#F7BE81","#0B0B61", "#0000FF","#ea2a44", "#DF0101", "#8A0808", "#21610B", "#0B3861", "#29088A", "#0B3B24", "#2ECCFA", "#FF0040", "#5E610B","#A901DB","#FF00FF", "#8A0886", "#DF013A", "#5F4C0B", "#04B4AE", "#210B61","#088A29","#088A4B","#610B0B","#8A2908","#61380B","#3A2F0B","#21610B","#000000", "#FF0000", "#DF7401", "#FFFF00", "#BFFF00", "#00FF00", "#00FFBF", "#0080FF", "#0101DF", "#7401DF", "#8904B1","#F781F3", "#8A0868", "#4B8A08", "#088A85","#5858FA","#F7BE81","#0B0B61", "#0000FF","#ea2a44", "#DF0101", "#8A0808", "#21610B", "#0B3861", "#29088A", "#0B3B24", "#2ECCFA", "#FF0040", "#5E610B","#A901DB","#FF00FF", "#8A0886", "#DF013A", "#5F4C0B", "#04B4AE", "#210B61","#088A29","#088A4B","#610B0B","#8A2908","#61380B","#3A2F0B","#21610B","#000000", "#FF0000", "#DF7401", "#FFFF00", "#BFFF00", "#00FF00", "#00FFBF", "#0080FF", "#0101DF", "#7401DF", "#8904B1","#F781F3", "#8A0868", "#4B8A08", "#088A85","#5858FA","#F7BE81","#0B0B61", "#0000FF","#ea2a44", "#DF0101", "#8A0808", "#21610B", "#0B3861", "#29088A", "#0B3B24", "#2ECCFA", "#FF0040", "#5E610B","#A901DB","#FF00FF", "#8A0886", "#DF013A", "#5F4C0B", "#04B4AE", "#210B61","#088A29","#088A4B","#610B0B","#8A2908","#61380B","#3A2F0B","#21610B");

    		$Report_Color = [$reportData, $colorcode];



    		Storage::put($ReportID.'.json', $output);

    		return view('users.reportdetail', ["Report_Color" => $Report_Color]);

    	}
    }

}
?>