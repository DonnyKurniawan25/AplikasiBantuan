<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Rules;

class rulesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
     $data = Rules::all();
       // $data = Rules::where('id','<','192')->get();
     return view('rules.index',compact('data'));
 }

}
