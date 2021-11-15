<?php

namespace App\Exports;

use App\Models\loginvspn_m;
use Maatwebsite\Excel\Concerns\FromCollection;

class loginvspn_mExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return loginvspn_m::all();
    }
}
