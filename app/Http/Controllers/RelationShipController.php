<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DbStudent;
use App\Models\DbPhone;
use App\Models\DbDevice;
class RelationShipController extends Controller
{
    public function OneToOne()
    {
       // return $phone = DbStudent::find(3)->getPhone;
        return $user = DbPhone::find(2)->getStudent;
    }

    function OneToMany(){
          //return $device = DbStudent::find(1)->getDevice;
          return $student = DbDevice::find(3)->getStudent;
    }
    public function ManyToMany()
    {
          // return $device = DbStudent::find(1)->getDevice1;
        return $student = DbDevice::find(1)->getStudent1;
    }
}
