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
        return new KegiatanPO([
            'nama_kegiatan' => $row['nama_kegiatan'],
            'id_jurbagnitpus' => $row['pelaksana'],
            'pimpinan' => $row['pimpinan'],
            'nip_pic' => $row['pic'],
            'reviewer_spi' => $row['reviewer_spi'],
            'reviewer_ang' => $row['reviewer_anggaran'],
            'kode' => $row['kode'],
            'volume' => $row['volume'],
            'satuan' => $row['satuan'],
            '521114' => $row['521114'],
            '521211' => $row['521211'],
            '521811' => $row['521811'],
            '521213' => $row['521213'],
            '521219' => $row['521219'],
            '522141' => $row['522141'],
            '522151' => $row['522151'],
            '524114' => $row['524114'],
            '524119' => $row['524119'],
            '532111' => $row['532111'],
            '536111' => $row['536111'],
            'total' => $row['total']
        ]);
    }


    //LIMIT CHUNKSIZE
    // public function chunkSize(): int
    // {
    //     return 1000; //ANGKA TERSEBUT PERTANDA JUMLAH BARIS YANG AKAN DIEKSEKUSI
    // }
}
