<?php

use Illuminate\Database\Seeder;

class RabTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rab')->delete();
        
        \DB::table('rab')->insert(array (
            0 => 
            array (
                'id_rab' => 1,
                'id_kegiatan' => 655,
                'id_barang' => 1,
                'harga' => 3000.0,
                'jumlah' => 3.0,
                'total' => 9000.0,
                'akun' => NULL,
                'waktu' => '2017-05-17 17:43:42',
            ),
            1 => 
            array (
                'id_rab' => 2,
                'id_kegiatan' => 657,
                'id_barang' => 2,
                'harga' => 4000.0,
                'jumlah' => 3.0,
                'total' => 12000.0,
                'akun' => NULL,
                'waktu' => '2017-05-17 17:43:49',
            ),
            2 => 
            array (
                'id_rab' => 3,
                'id_kegiatan' => 658,
                'id_barang' => 3,
                'harga' => 5000.0,
                'jumlah' => 3.0,
                'total' => 15000.0,
                'akun' => NULL,
                'waktu' => NULL,
            ),
        ));
        
        
    }
}