<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student_Exercise extends Model
{
    //
    protected $table="student_exercise";
    public function exercise(){
        return $this->belongsTo('App\Exercise','exerciseID',id);
    }
    public function file(){
        return $this->belongsToMany('file');
    }
}
