<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\VisitorModel;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    function visitorIndex()
    {
        $visitorData = json_decode(VisitorModel::orderBy('id','desc')->take(3)->get());
        return view('Backend/visitor', ['visitorData' => $visitorData]);
    }
}
