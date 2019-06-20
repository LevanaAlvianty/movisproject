<?php

use Illuminate\Database\Seeder;

class TahunTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tahun')->delete();
        
        \DB::table('tahun')->insert(array (
            0 => 
            array (
                'id_tahun' => '2014',
                'tahun' => '2014',
            ),
            1 => 
            array (
                'id_tahun' => '2015',
                'tahun' => '2015',
            ),
            2 => 
            array (
                'id_tahun' => '2016',
                'tahun' => '2016',
            ),
            3 => 
            array (
                'id_tahun' => '2017',
                'tahun' => '2017',
            ),
            4 => 
            array (
                'id_tahun' => '2018',
                'tahun' => '2018',
            ),
            5 => 
            array (
                'id_tahun' => '2019',
                'tahun' => '2019',
            ),
        ));
        
        
    }
}