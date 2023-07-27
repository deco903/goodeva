<?php

namespace App\Exports;

use App\Models\pribadi;
use Maatwebsite\Excel\Concerns\FromCollection;

class KapalPribadi_mExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return pribadi::all();
    }
}
