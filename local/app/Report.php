<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //
    protected $table="report";
    public function subject(){
        return $this -> belongsTo('App\Subject','subjectID','id');
    }
}
