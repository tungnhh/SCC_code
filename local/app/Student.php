<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table = "student";
    public function student_exercise(){
        return $this->hasMany('App\Student_Exercise','studentID','id');
    }
    public  function file(){
        return $this ->hasMany('App\File','studentID','id');
    }
}
