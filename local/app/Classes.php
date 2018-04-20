<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    //
    protected $table = "class";
    public function subject(){
        return $this->belongsTo('App\Subject','subjectID','id');
    }
    public function exercise(){
        return $this ->hasMany('App\Exercise','classID',id);
    }
}
