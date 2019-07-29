<?php

namespace App\Imports;

use App\KegiatanPO;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Contracts\Queue\ShouldQueue; //IMPORT SHOUDLQUEUE
use Maatwebsite\Excel\Concerns\WithChunkReading; //IMPORT CHUNK READING
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

class KegiatanpoImport implements ToModel, WithHeadingRow 
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
   
    public function model(array $row)
    {
        // dd($row);
        return new KegiatanPO([
            'kode_akun' => $row['akun'],
            'sumber' => $row['sumber'],
            'id_jurbagnitpus' => $row['jub'],
            'nama_kegiatan' => $row['uraian'],
            'mak_521114' => $row['521114'],
            'mak_521211' => $row['521211'],
            'mak_521811' => $row['521811'],
            'mak_521213' => $row['521213'],
            'mak_521219' => $row['521219'],
            'mak_522114' => $row['522114'],
            'mak_522141' => $row['522141'],
            'mak_522151' => $row['522151'],
            'mak_524114' => $row['524114'],
            'mak_524119' => $row['524119'],
            'mak_532111' => $row['532111'],
            'mak_536111' => $row['536111'],
        ]);

    }

    //LIMIT CHUNKSIZE
    // public function chunkSize(): int
    // {
    //     return 1000; //ANGKA TERSEBUT PERTANDA JUMLAH BARIS YANG AKAN DIEKSEKUSI
    // }
}
