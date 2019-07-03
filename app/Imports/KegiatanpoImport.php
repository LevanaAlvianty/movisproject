<?php

namespace App\Imports;

use App\KegiatanPO;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Contracts\Queue\ShouldQueue; //IMPORT SHOUDLQUEUE
use Maatwebsite\Excel\Concerns\WithChunkReading; //IMPORT CHUNK READING
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

class KegiatanpoImport implements ToModel, WithHeadingRow , WithChunkReading, ShouldQueue
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
            'id_jurbagnitus' => $row['unit_pelaksana'],
            'nip_pic' => $row['pic'],
            'reviewer_spi' => $row['reviewer_spi'],
            'reviewer_ang' => $row['reviewer_anggaran']
        ]);
    }

    //LIMIT CHUNKSIZE
    public function chunkSize(): int
    {
        return 1000; //ANGKA TERSEBUT PERTANDA JUMLAH BARIS YANG AKAN DIEKSEKUSI
    }
}
