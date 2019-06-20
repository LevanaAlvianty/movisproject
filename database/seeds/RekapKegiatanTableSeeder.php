<?php

use Illuminate\Database\Seeder;

class RekapKegiatanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rekap_kegiatan')->delete();
        
        \DB::table('rekap_kegiatan')->insert(array (
            0 => 
            array (
                'id_rekap' => 2,
                'rekap' => 'Kegiatan dalam proses pembuatan',
                'tabel' => 'kegiatan',
                'field' => 'status_kirim',
                'value' => '0',
                'urutan' => 1,
            ),
            1 => 
            array (
                'id_rekap' => 3,
                'rekap' => 'Kegiatan dalam proses review SPI',
                'tabel' => 'kegiatan',
                'field' => 'status_kirim',
                'value' => '1',
                'urutan' => 2,
            ),
            2 => 
            array (
                'id_rekap' => 4,
                'rekap' => 'Kegiatan disetujui oleh SPI',
                'tabel' => 'kegiatan',
                'field' => 'status_kirim',
                'value' => '3',
                'urutan' => 3,
            ),
            3 => 
            array (
                'id_rekap' => 5,
                'rekap' => 'Kegiatan dalam proses review Keuangan',
                'tabel' => 'kegiatan',
                'field' => 'status_kirimkeu',
                'value' => '6',
                'urutan' => 6,
            ),
            4 => 
            array (
                'id_rekap' => 6,
                'rekap' => 'Kegiatan disetujui oleh keuangan',
                'tabel' => 'kegiatan',
                'field' => 'status_kirimkeu',
                'value' => '8',
                'urutan' => 7,
            ),
            5 => 
            array (
                'id_rekap' => 7,
                'rekap' => 'Kegiatan dibatalkan',
                'tabel' => 'kegiatan',
                'field' => 'id_keputusan',
                'value' => '3',
                'urutan' => 9,
            ),
            6 => 
            array (
                'id_rekap' => 8,
                'rekap' => 'Kegiatan perlu penjelasan ',
                'tabel' => 'kegiatan',
                'field' => 'id_keputusan',
                'value' => '2',
                'urutan' => 10,
            ),
            7 => 
            array (
                'id_rekap' => 9,
                'rekap' => 'Kegiatan disetujui Pimpinan',
                'tabel' => 'kegiatan',
                'field' => 'id_keputusan',
                'value' => '1',
                'urutan' => 11,
            ),
            8 => 
            array (
                'id_rekap' => 10,
                'rekap' => '---------------------------------------------------------------------',
                'tabel' => NULL,
                'field' => NULL,
                'value' => NULL,
                'urutan' => 4,
            ),
            9 => 
            array (
                'id_rekap' => 11,
                'rekap' => '---------------------------------------------------------------------',
                'tabel' => NULL,
                'field' => NULL,
                'value' => NULL,
                'urutan' => 8,
            ),
            10 => 
            array (
                'id_rekap' => 13,
                'rekap' => 'Proses Pembetulan RAB',
                'tabel' => 'kegiatan',
                'field' => 'status_kirimkeu',
                'value' => '7',
                'urutan' => 5,
            ),
            11 => 
            array (
                'id_rekap' => 14,
                'rekap' => 'Kegiatan dalam proses Perbaikan',
                'tabel' => 'kegiatan',
                'field' => 'status_kirim',
                'value' => '2',
                'urutan' => NULL,
            ),
        ));
        
        
    }
}