<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\testing;
use App\Model\training;
use App\Model\Rules;
use App\c45;
use App\Model\temp;
use App\Imports\testingImport;
class testingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $tes = testing::all();
        return view('testing.index',compact('tes'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $nim = $request->Nim;
        $valid = temp::where('Nim',$nim)->first();

        if($valid) {

            return redirect()->route('testing.index')->with('gagal','Nim Sudah Pernah Diinputkan');

        }else{

            $data = training::all();

            $data2 = [];

            $attributes = [1 => "Jk", 2 => "Ips1", 3 => "Ips2", 4 => "Ips3", 5 => "Ips4", 6 => "Ips5", 7 => "Ipk"]; 

            $no = 0;
            foreach ($data as $dt_train) {
                $data2[$no][0] = $dt_train->Jk;
                $data2[$no][1] = $dt_train->Ip_S1;
                $data2[$no][2] = $dt_train->Ip_S2;
                $data2[$no][3] = $dt_train->Ip_S3;
                $data2[$no][4] = $dt_train->Ip_S4;
                $data2[$no][5] = $dt_train->Ip_S5;
                $data2[$no][6] = $dt_train->Ipk;
                $data2[$no][7] = $dt_train->Ket_lulus;
                $no++;
            }  

            $c45 = new C45; 

            $c45->setData($data2)->setAttributes($attributes); 

            $c45->hitung(); 

            $Jk = $request->Jk;
            $Ip_S1 = $request->Ip_S1;
            $Ip_S2 = $request->Ip_S2;
            $Ip_S3 = $request->Ip_S3;
            $Ip_S4 = $request->Ip_S4;
            $Ip_S5 = $request->Ip_S5;
            $Ipk = $request->Ipk;


            if ($Ip_S1 >= 3.50) {
                $Ip_S1 = 'DENGAN PUJIAN';
            }elseif ($Ip_S1 >= 2.99) {
                $Ip_S1 = 'MEMUASKAN';
            }elseif ($Ip_S1 >= 2.50) {
                $Ip_S1 = 'CUKUP';
            }elseif ($Ip_S1 >= 0) {
                $Ip_S1 = 'CUKUP';
            }

            if ($Ip_S2 >= 3.50) {
                $Ip_S2 = 'DENGAN PUJIAN';
            }elseif ($Ip_S2 >= 2.99) {
                $Ip_S2 = 'MEMUASKAN';
            }elseif ($Ip_S2 >= 2.50) {
                $Ip_S2 = 'CUKUP';
            }elseif ($Ip_S2 >= 0) {
                $Ip_S2 = 'KURANG';
            }

            if ($Ip_S3 >= 3.50) {
                $Ip_S3 = 'DENGAN PUJIAN';
            }elseif ($Ip_S3 >= 2.99) {
                $Ip_S3 = 'MEMUASKAN';
            }elseif ($Ip_S3 >= 2.50) {
                $Ip_S3 = 'CUKUP';
            }elseif ($Ip_S3 >= 0) {
                $Ip_S3 = 'KURANG';
            }

            if ($Ip_S4 >= 3.50) {
                $Ip_S4 = 'DENGAN PUJIAN';
            }elseif ($Ip_S4 >= 2.99) {
                $Ip_S4 = 'MEMUASKAN';
            }elseif ($Ip_S4 >= 2.50) {
                $Ip_S4 = 'CUKUP';
            }elseif ($Ip_S4 >= 0) {
                $Ip_S4 = 'KURANG';
            }

            if ($Ip_S5 >= 3.50) {
                $Ip_S5 = "DENGAN PUJIAN";
            }elseif ($Ip_S5 >= 2.99) {
                $Ip_S5 = "MEMUASKAN";
            }elseif ($Ip_S5 >= 2.50) {
                $Ip_S5 = "CUKUP";
            }elseif ($Ip_S5 >= 0) {
                $Ip_S5 = "KURANG";
            }

            if ($Ipk >= 3.50) {
                $Ipk = 'DENGAN PUJIAN';
            }elseif ($Ipk >= 2.99) {
                $Ipk = 'MEMUASKAN';
            }elseif ($Ipk >= 2.50) {
                $Ipk = 'CUKUP';
            }elseif ($Ipk >= 0) {
                $Ipk = 'KURANG';
            }

            $data_testing = [$Jk, $Ip_S1, $Ip_S2, $Ip_S3, $Ip_S4, $Ip_S5, $Ipk]; 

            $keputusan = $c45->predictDataTesting($data_testing);        

            $testing = testing::create([
                'id' => $request->Nim,
                'Nama_mhs' => $request->Nama_mhs,
                'Jk' => $Jk,
                'Ip_S1' => $Ip_S1,
                'Ip_S2' => $Ip_S2,
                'Ip_S3' => $Ip_S3,
                'Ip_S4' => $Ip_S4,
                'Ip_S5' => $Ip_S5,
                'Ipk' => $Ipk,
                'Ket_lulus' => $keputusan
            ]);

            $temp = temp::create([
                'Nim' => $request->Nim,
                'Nama_mhs' => $request->Nama_mhs,
                'Jk' => $request->Jk,
                'Ip_S1' => $request->Ip_S1,
                'Ip_S2' => $request->Ip_S2,
                'Ip_S3' => $request->Ip_S3,
                'Ip_S4' => $request->Ip_S4,
                'Ip_S5' => $request->Ip_S5,
                'Ipk' => $request->Ipk
            ]);

            return redirect()->route('testing.index')->with('success','Data Berhasil Ditambahkan');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = temp::where('Nim',$id)->first();
        return view('testing.edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
     $data = training::all();

     $data2 = [];

     $attributes = [1 => "Jk", 2 => "Ips1", 3 => "Ips2", 4 => "Ips3", 5 => "Ips4", 6 => "Ips5", 7 => "Ipk"]; 

     $no = 0;
     foreach ($data as $dt_train) {
        $data2[$no][0] = $dt_train->Jk;
        $data2[$no][1] = $dt_train->Ip_S1;
        $data2[$no][2] = $dt_train->Ip_S2;
        $data2[$no][3] = $dt_train->Ip_S3;
        $data2[$no][4] = $dt_train->Ip_S4;
        $data2[$no][5] = $dt_train->Ip_S5;
        $data2[$no][6] = $dt_train->Ipk;
        $data2[$no][7] = $dt_train->Ket_lulus;
        $no++;
    }  

    $c45 = new C45; 

    $c45->setData($data2)->setAttributes($attributes); 

    $c45->hitung(); 

    $Jk = $request->Jk;
    $Ip_S1 = $request->Ip_S1;
    $Ip_S2 = $request->Ip_S2;
    $Ip_S3 = $request->Ip_S3;
    $Ip_S4 = $request->Ip_S4;
    $Ip_S5 = $request->Ip_S5;
    $Ipk = $request->Ipk;


    if ($Ip_S1 >= 3.50) {
        $Ip_S1 = 'DENGAN PUJIAN';
    }elseif ($Ip_S1 >= 2.99) {
        $Ip_S1 = 'MEMUASKAN';
    }elseif ($Ip_S1 >= 2.50) {
        $Ip_S1 = 'CUKUP';
    }elseif ($Ip_S1 >= 0) {
        $Ip_S1 = 'CUKUP';
    }

    if ($Ip_S2 >= 3.50) {
        $Ip_S2 = 'DENGAN PUJIAN';
    }elseif ($Ip_S2 >= 2.99) {
        $Ip_S2 = 'MEMUASKAN';
    }elseif ($Ip_S2 >= 2.50) {
        $Ip_S2 = 'CUKUP';
    }elseif ($Ip_S2 >= 0) {
        $Ip_S2 = 'KURANG';
    }

    if ($Ip_S3 >= 3.50) {
        $Ip_S3 = 'DENGAN PUJIAN';
    }elseif ($Ip_S3 >= 2.99) {
        $Ip_S3 = 'MEMUASKAN';
    }elseif ($Ip_S3 >= 2.50) {
        $Ip_S3 = 'CUKUP';
    }elseif ($Ip_S3 >= 0) {
        $Ip_S3 = 'KURANG';
    }

    if ($Ip_S4 >= 3.50) {
        $Ip_S4 = 'DENGAN PUJIAN';
    }elseif ($Ip_S4 >= 2.99) {
        $Ip_S4 = 'MEMUASKAN';
    }elseif ($Ip_S4 >= 2.50) {
        $Ip_S4 = 'CUKUP';
    }elseif ($Ip_S4 >= 0) {
        $Ip_S4 = 'KURANG';
    }

    if ($Ip_S5 >= 3.50) {
        $Ip_S5 = 'DENGAN PUJIAN';
    }elseif ($Ip_S5 >= 2.99) {
        $Ip_S5 = 'MEMUASKAN';
    }elseif ($Ip_S5 >= 2.50) {
        $Ip_S5 = 'CUKUP';
    }elseif ($Ip_S5 >= 0) {
        $Ip_S5 = 'KURANG';
    }

    if ($Ipk >= 3.50) {
        $Ipk = 'DENGAN PUJIAN';
    }elseif ($Ipk >= 2.99) {
        $Ipk = 'MEMUASKAN';
    }elseif ($Ipk >= 2.50) {
        $Ipk = 'CUKUP';
    }elseif ($Ipk >= 0) {
        $Ipk = 'KURANG';
    }

    $data_testing = [$Jk,$Ip_S1,$Ip_S2,$Ip_S3,$Ip_S4,$Ip_S5,$Ipk]; 

    $keputusan = $c45->predictDataTesting($data_testing); 

    $ubah = testing::where('id',$id)->update([
        'id' => $request->Nim,
        'Nama_mhs' => $request->Nama_mhs,
        'Jk' => $Jk,
        'Ip_S1' => $Ip_S1,
        'Ip_S2' => $Ip_S2,
        'Ip_S3' => $Ip_S3,
        'Ip_S4' => $Ip_S4,
        'Ip_S5' => $Ip_S5,
        'Ipk' => $Ipk,
        'Ket_lulus' => $keputusan
    ]);

    $temp = temp::where('Nim',$id)->update([
        'Nim' => $request->Nim,
        'Nama_mhs' => $request->Nama_mhs,
        'Jk' => $request->Jk,
        'Ip_S1' => $request->Ip_S1,
        'Ip_S2' => $request->Ip_S2,
        'Ip_S3' => $request->Ip_S3,
        'Ip_S4' => $request->Ip_S4,
        'Ip_S5' => $request->Ip_S5,
        'Ipk' => $request->Ipk

    ]);

    return redirect()->route('testing.index')->with('success','DATA BERHASIL DI UPDATE');

}

public function destroy($id)
{
    testing::where('id',$id)->delete();
    temp::where('Nim',$id)->delete();

    return redirect()->route('testing.index')->with('success','Data Berhasil Dihapus');
}
}
