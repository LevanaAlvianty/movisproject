<?php

use Illuminate\Database\Seeder;

class SatuanbiayaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('satuanbiaya')->delete();
        
        \DB::table('satuanbiaya')->insert(array (
            0 => 
            array (
                'id_satuanbiaya' => 1,
                'namabarang' => 'Tisu gulung',
                'id_satuan' => 0,
                'hargasatuan' => 10000.0,
                'acuan' => 'mittu',
            ),
            1 => 
            array (
                'id_satuanbiaya' => 3,
                'namabarang' => 'komputer',
                'id_satuan' => 0,
                'hargasatuan' => 12000.0,
                'acuan' => 'erere',
            ),
        ));
        
        
    }
}