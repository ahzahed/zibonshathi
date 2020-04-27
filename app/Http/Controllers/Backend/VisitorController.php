<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\VisitorModel;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    function visitorIndex()
    {
        $visitorData = json_decode(VisitorModel::All());
        return view('Backend/visitor', ['visitorData' => $visitorData]);
    }
}
