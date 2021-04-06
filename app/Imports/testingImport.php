<?php

namespace App\Imports;

use App\Model\testing;
use Maatwebsite\Excel\Concerns\ToModel;

class testingImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new testing([
            'id' => $row[0],
            'Nama_mhs' => $row[1], 
            'Jk' => $row[2], 
            'Ip_S1' => $row[3], 
            'Ip_S2' => $row[4], 
            'Ip_S3' => $row[5], 
            'Ip_S4' => $row[6], 
            'Ip_S5' => $row[7], 
            'Ipk' => $row[8], 
            'Ket_lulus' => $row[9], 
        ]);
    }
}
