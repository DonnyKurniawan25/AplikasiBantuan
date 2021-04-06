<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\temp;
use App\Model\testing;

class tempController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $temp = temp::all();
        $testing = testing::all();
        return view('temp.index',compact('temp','testing'));
    }
}
