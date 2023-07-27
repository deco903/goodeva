<?php

namespace App\Imports;

use App\Models\pribadi;
use Maatwebsite\Excel\Concerns\ToModel;

class KapalPribadi_mImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new pribadi([
            'customer' => $row[1],
            'nama_kapal' => $row[2],
            'keberangkatan' => $row[3],
            'nama_kru' => $row[4],
            'tujuan' => $row[5],
            'nama_penyewa' => $row[6],
            'mulai_sewa' => $row[7],
            'harga_sewa_customer' => $row[8],
            'sewa_selsai' => $row[9],
            'keterangan' => $row[10],
        ]);
    }
}
