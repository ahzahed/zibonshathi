<?php

namespace App\Http\Controllers;

use App\VisitorModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function homeIndex(){
        $UserIP=$_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $timeDate = date("Y-m-d h:i:sa");
        VisitorModel::insert(['ip_address'=>$UserIP, 'visit_time'=>$timeDate]);
        return view('Home');
    }
}
