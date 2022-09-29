<?php

namespace App\Exports;

use App\Models\data_anggota;
use Maatwebsite\Excel\Concerns\FromCollection;

class anggotaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return data_anggota::all();
    }
}
