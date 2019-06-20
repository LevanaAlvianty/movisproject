<?php

use Illuminate\Database\Seeder;

class KabTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kab')->delete();
        
        \DB::table('kab')->insert(array (
            0 => 
            array (
                'idKab' => '1',
                'namaKabupaten' => 'Kab. A',
                'idProp' => '1',
            ),
            1 => 
            array (
                'idKab' => '2',
                'namaKabupaten' => 'Kab. B',
                'idProp' => '1',
            ),
            2 => 
            array (
                'idKab' => '3',
                'namaKabupaten' => 'Kab. C',
                'idProp' => '1',
            ),
            3 => 
            array (
                'idKab' => '4',
                'namaKabupaten' => 'Kab. D',
                'idProp' => '2',
            ),
            4 => 
            array (
                'idKab' => '5',
                'namaKabupaten' => 'Kab. E',
                'idProp' => '2',
            ),
            5 => 
            array (
                'idKab' => '6',
                'namaKabupaten' => 'Kab. F',
                'idProp' => '2',
            ),
            6 => 
            array (
                'idKab' => '7',
                'namaKabupaten' => 'Kab. G',
                'idProp' => '3',
            ),
        ));
        
        
    }
}