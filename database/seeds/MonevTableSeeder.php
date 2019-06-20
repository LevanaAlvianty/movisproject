<?php

use Illuminate\Database\Seeder;

class MonevTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('monev')->delete();
        
        \DB::table('monev')->insert(array (
            0 => 
            array (
                'id_monev' => 50,
                'id_kegiatan' => 664,
                'id_capaian' => 2,
                'tgl_mulai' => '2017-10-11',
                'tgl_selesai' => '2017-10-11',
                'luaran' => 'rekap 1',
                'evaluasi_luaran' => 'Sesuai',
                'laporan' => 'Sudah',
                'hasil_monev' => 'dsfdfdsfds',
                'tgl_update' => '2017-10-11 14:10:03',
                'status_edit' => NULL,
            ),
            1 => 
            array (
                'id_monev' => 51,
                'id_kegiatan' => 663,
                'id_capaian' => 1,
                'tgl_mulai' => '2017-10-11',
                'tgl_selesai' => '2018-10-11',
                'luaran' => 'asdsadsadsadasdasdasda',
                'evaluasi_luaran' => 'Sesuai',
                'laporan' => 'Sudah',
                'hasil_monev' => 'ini monev untuk kegiatan siap',
                'tgl_update' => '2017-10-11 14:10:39',
                'status_edit' => NULL,
            ),
            2 => 
            array (
                'id_monev' => 52,
                'id_kegiatan' => 664,
                'id_capaian' => 1,
                'tgl_mulai' => '2017-10-11',
                'tgl_selesai' => '2017-10-11',
                'luaran' => '1',
                'evaluasi_luaran' => 'Sesuai',
                'laporan' => 'Sudah',
                'hasil_monev' => 'dsfdfdsfds',
                'tgl_update' => '2017-10-11 14:13:01',
                'status_edit' => NULL,
            ),
            3 => 
            array (
                'id_monev' => 53,
                'id_kegiatan' => 664,
                'id_capaian' => 3,
                'tgl_mulai' => '2017-10-11',
                'tgl_selesai' => '2017-10-11',
                'luaran' => '3',
                'evaluasi_luaran' => 'Sesuai',
                'laporan' => 'Sudah',
                'hasil_monev' => 'dsfdfdsfds',
                'tgl_update' => '2017-10-11 14:13:12',
                'status_edit' => NULL,
            ),
            4 => 
            array (
                'id_monev' => 54,
                'id_kegiatan' => 663,
                'id_capaian' => 3,
                'tgl_mulai' => '2017-12-20',
                'tgl_selesai' => '2017-12-20',
                'luaran' => 'ini coba monev 1',
                'evaluasi_luaran' => 'Sesuai',
                'laporan' => 'Belum',
                'hasil_monev' => 'ini monev untuk kegiatan siap',
                'tgl_update' => '2017-12-20 07:53:00',
                'status_edit' => NULL,
            ),
            5 => 
            array (
                'id_monev' => 55,
                'id_kegiatan' => 664,
                'id_capaian' => 3,
                'tgl_mulai' => '2017-12-20',
                'tgl_selesai' => '2017-12-20',
                'luaran' => 'dfdsfdsfds',
                'evaluasi_luaran' => 'Sesuai',
                'laporan' => 'Sudah',
                'hasil_monev' => 'dsfdfdsfds',
                'tgl_update' => '2017-12-20 09:31:27',
                'status_edit' => NULL,
            ),
        ));
        
        
    }
}