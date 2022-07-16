<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DbStudent extends Model
{
    use HasFactory;
    function getPhone(){
        return $this->hasOne(DbPhone::class,'student_id','id');
    }   
    function getDevice(){
        return $this->hasMany(DbDevice::class,'student_id','id');
    }   

    function getDevice1(){
        return $this->belongsToMany(DbDevice::class,'db_student_devices','student_id','device_id');
    }   
}
