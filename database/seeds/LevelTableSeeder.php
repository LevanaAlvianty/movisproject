<?php

use Illuminate\Database\Seeder;

class LevelTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('level')->delete();
        
        \DB::table('level')->insert(array (
            0 => 
            array (
                'id_level' => 'admin',
                'level' => 'admin',
            ),
            1 => 
            array (
                'id_level' => 'user',
                'level' => 'user',
            ),
            2 => 
            array (
                'id_level' => 'reviewer',
                'level' => 'reviewer',
            ),
            3 => 
            array (
                'id_level' => 'adminpsi',
                'level' => 'adminpsi',
            ),
            4 => 
            array (
                'id_level' => 'adminspi',
                'level' => 'adminspi',
            ),
            5 => 
            array (
                'id_level' => 'pimpinan',
                'level' => 'pimpinan',
            ),
            6 => 
            array (
                'id_level' => 'adminkeuangan',
                'level' => 'adminkeuangan',
            ),
            7 => 
            array (
                'id_level' => 'adminsbu',
                'level' => 'adminsbu',
            ),
        ));
        
        
    }
}