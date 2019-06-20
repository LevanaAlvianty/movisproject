<?php

use Illuminate\Database\Seeder;

class CapaianTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('capaian')->delete();
        
        \DB::table('capaian')->insert(array (
            0 => 
            array (
                'id_capaian' => 1,
                'capaian' => 'Proposal kegiatan 20%',
            ),
            1 => 
            array (
                'id_capaian' => 2,
                'capaian' => 'Proposal Kegiatan di ACC 30%',
            ),
            2 => 
            array (
                'id_capaian' => 3,
            'capaian' => 'Pencarian Uang Muka (UM) 40%',
            ),
            3 => 
            array (
                'id_capaian' => 4,
                'capaian' => 'Persiapan Pelaksanaan 60%',
            ),
            4 => 
            array (
                'id_capaian' => 5,
                'capaian' => 'Pelaksanaan 80%',
            ),
            5 => 
            array (
                'id_capaian' => 6,
                'capaian' => 'Pelaporan 90%',
            ),
            6 => 
            array (
                'id_capaian' => 7,
                'capaian' => 'Pencarian Dana 100%',
            ),
        ));
        
        
    }
}