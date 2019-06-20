<?php

use Illuminate\Database\Seeder;

class TahunanggaranTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tahunanggaran')->delete();
        
        \DB::table('tahunanggaran')->insert(array (
            0 => 
            array (
                'id_tahunanggaran' => '2018',
                'tahunanggaran' => '2018',
                'aktif' => 'N',
            ),
            1 => 
            array (
                'id_tahunanggaran' => '2019',
                'tahunanggaran' => '2019',
                'aktif' => 'N',
            ),
            2 => 
            array (
                'id_tahunanggaran' => '2020',
                'tahunanggaran' => '2020',
                'aktif' => 'Y',
            ),
            3 => 
            array (
                'id_tahunanggaran' => '2021',
                'tahunanggaran' => '2021',
                'aktif' => 'N',
            ),
            4 => 
            array (
                'id_tahunanggaran' => '2022',
                'tahunanggaran' => '2022',
                'aktif' => 'N',
            ),
            5 => 
            array (
                'id_tahunanggaran' => '2023',
                'tahunanggaran' => '2023',
                'aktif' => 'N',
            ),
            6 => 
            array (
                'id_tahunanggaran' => '2024',
                'tahunanggaran' => '2024',
                'aktif' => 'N',
            ),
        ));
        
        
    }
}