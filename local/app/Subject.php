<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = "subject";
    public function classes(){
        return $this -> hasMany('App\Classes','subjectID','id');
    }
    public function report(){
        return $this ->hasMany('App\Report','subjectID','id');
    }
    public function user(){
        return $this ->belongsTo('App\User','userID','id');
    }
}
