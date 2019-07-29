<?php

namespace App\Exports;

use App\KegiatanPO;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KegiatanpoExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return KegiatanPO::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'AKUN',
            'SUMBER',
            'JUB',
            'URAIAN',
            'PIC',
            'REVIEWER_SPI',
            'REVIEWER_ANGGARAN',
            '521114',
            '521211',
            '521811',
            '521213',
            '521219',
            '522114',
            '522141',
            '522151',
            '524114',
            '524119',
            '532111',
            '536111',
            'TAHUN',
            'CREATED_AT',
            'UPDATED_AT',
        ];
    }
}
