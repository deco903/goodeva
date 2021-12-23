<?php

namespace App\Exports;

use App\Models\spnexel_M;
use Maatwebsite\Excel\Concerns\FromCollection;

class loginvspn_mExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return spnexel_M::all();
    }
}
