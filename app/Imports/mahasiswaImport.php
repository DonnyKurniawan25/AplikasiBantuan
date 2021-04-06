<?php

namespace App\Imports;

use App\Model\mahasiswa;
use Maatwebsite\Excel\Concerns\ToModel;

class mahasiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new mahasiswa([
           'Nim' => $row[1],
           'Nama_mhs' => $row[2], 
           'Jk' => $row[3], 
           'Ip_S1' => $row[3], 
           'Ip_S2' => $row[5], 
           'Ip_S3' => $row[6], 
           'Ip_S4' => $row[7], 
           'Ip_S5' => $row[8], 
           'Ipk' => $row[9], 
           'Ket_lulus' => $row[10], 
       ]);
    }
}
