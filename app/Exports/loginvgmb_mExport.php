<?php

namespace App\Exports;

use App\Models\gmbexel_M;
use Maatwebsite\Excel\Concerns\FromCollection;

class loginvgmb_mExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return gmbexel_M::all();
    }
}
