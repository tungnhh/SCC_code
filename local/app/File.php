<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //
    protected $table="file";
    public function student_exercise(){
        return $this ->belongsToMany('App\Student_Exercise');
    }
}
