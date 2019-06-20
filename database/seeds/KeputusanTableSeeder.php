<?php

use Illuminate\Database\Seeder;

class KeputusanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('keputusan')->delete();
        
        \DB::table('keputusan')->insert(array (
            0 => 
            array (
                'id_keputusan' => 1,
                'keputusan' => 'Setuju',
            ),
            1 => 
            array (
                'id_keputusan' => 2,
                'keputusan' => 'Perlu Penjelasan',
            ),
            2 => 
            array (
                'id_keputusan' => 3,
                'keputusan' => 'Batal',
            ),
        ));
        
        
    }
}