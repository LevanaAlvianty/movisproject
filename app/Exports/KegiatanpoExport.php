<?php

namespace App\Exports;

use App\KegiatanPO;
use Maatwebsite\Excel\Concerns\FromCollection;

class KegiatanpoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return KegiatanPO::all();
    }
}
