<?php

namespace App\Http\Controllers;

use App\VisitorModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomePageController extends Controller
{
    function homeIndex(){
        $UserIP=$_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $timeDate = date("Y-m-d h:i:sa");
        VisitorModel::insert(['ip_address'=>$UserIP, 'visit_time'=>$timeDate]);
        $maleFeatured = json_decode(DB::table('users')->get());

        return view('Home', ['maleFeatured' => $maleFeatured]);
    }
}
