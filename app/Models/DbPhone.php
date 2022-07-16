<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DbPhone extends Model
{
    use HasFactory;
    function getStudent(){
        return $this->belongsTo(DbStudent::class,'student_id','id');
    } 
}
