<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\training;

class trainingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = training::all();
        return view('training.index',compact('data'));
    }
}
