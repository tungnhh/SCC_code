<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table='student';
    public function file(){
        return $this->hasMany('App\File','studentID','id');
    }
    public function student_exercise(){
        return $this->belongsTo('App\Student_Exercise','studentID','id');
    }
}
