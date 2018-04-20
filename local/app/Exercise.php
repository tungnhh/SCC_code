<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    //
    protected $table="exercise";
    public function student_exercise(){
        return $this->hasMany('App\Student_Exercise','subjectID','id');
    }
    public function file(){
        return $this->hasMany('App\File','exerciseID','id');
    }
}
