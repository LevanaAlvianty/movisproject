<?php

use Illuminate\Database\Seeder;

class KatajelekTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('katajelek')->delete();
        
        \DB::table('katajelek')->insert(array (
            0 => 
            array (
                'id_jelek' => 4,
                'kata' => 'sex',
                'ganti' => 's**',
            ),
            1 => 
            array (
                'id_jelek' => 2,
                'kata' => 'bajingan',
                'ganti' => 'b*******',
            ),
            2 => 
            array (
                'id_jelek' => 3,
                'kata' => 'bangsat',
                'ganti' => 'b******',
            ),
        ));
        
        
    }
}