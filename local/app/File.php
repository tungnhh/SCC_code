<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //
    protected $table="file";
    public function exercise(){
        return $this->belongsTo('App\Exercise','exerciseID','id');
    }
    public function student(){
        return $this->belongsTo('App\Student','studentID','id');
    }
}
