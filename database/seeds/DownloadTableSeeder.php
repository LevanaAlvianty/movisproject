<?php

use Illuminate\Database\Seeder;

class DownloadTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('download')->delete();
        
        \DB::table('download')->insert(array (
            0 => 
            array (
                'id_download' => 11,
                'judul' => 'Panduan RKT',
                'nama_file' => 'PANDUAN UMUM RKT.docx',
                'tgl_posting' => '2016-03-25',
                'hits' => 100,
            ),
            1 => 
            array (
                'id_download' => 12,
                'judul' => 'PETUNJUK PENGGUNAAN APLIKASI SIRENA',
                'nama_file' => 'PETUNJUK PENGGUNAAN APLIKASI SIRENA.pdf',
                'tgl_posting' => '2016-05-18',
                'hits' => 178,
            ),
        ));
        
        
    }
}