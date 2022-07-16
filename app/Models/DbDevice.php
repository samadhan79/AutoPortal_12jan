<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DbDevice extends Model
{
    use HasFactory;
     function getStudent(){
        return $this->belongsTo(DbStudent::class,'student_id','id');
    } 
    function getStudent1(){
        return $this->belongsToMany(DbStudent::class,'db_student_devices','device_id','student_id');
    }  
}
