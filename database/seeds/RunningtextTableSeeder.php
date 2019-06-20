<?php

use Illuminate\Database\Seeder;

class RunningtextTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('runningtext')->delete();
        
        \DB::table('runningtext')->insert(array (
            0 => 
            array (
                'id_trunning' => 1,
                'trunning' => 'Input TOR dan RAB Kegiatan, mulai 25 Maret S/d 9 April 2019 ',
            ),
        ));
        
        
    }
}