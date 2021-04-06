<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\training;
use App\Model\users;
use App\Model\testing;
use App\Model\mahasiswa;
use App\Model\temp;
use App\Model\Registrasi;

class berandaController extends Controller
{
    public function index()
    {
        $data = training::all()->count('id');
        $data1 = users::all()->count('id');
        $data2 = testing::all()->count('id');
        $data3 = mahasiswa::all()->count('id');
        $data4 = temp::all()->count('id');
        $data5 = Registrasi::all()->count('id');

        return view('Dashboard1.app1',compact('data','data1','data2','data3','data4','data5'));
    }
}
