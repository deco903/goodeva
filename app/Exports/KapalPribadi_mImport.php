<?php

namespace App\Exports;

use App\Models\kapalpribadi;
use Maatwebsite\Excel\Concerns\FromCollection;

class KapalPribadi_mImport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return kapalpribadi::all();
    }
}
