<?php

use Illuminate\Database\Seeder;

class DirprogoperasionalTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('dirprogoperasional')->delete();
        
        \DB::table('dirprogoperasional')->insert(array (
            0 => 
            array (
                'id_dirprogoperasional' => 2,
                'dirprogoperasional' => 'Program Operasional Direktur Ke -2',
            ),
            1 => 
            array (
                'id_dirprogoperasional' => 3,
                'dirprogoperasional' => 'Program Operasional Direktur Ke -3',
            ),
            2 => 
            array (
                'id_dirprogoperasional' => 4,
                'dirprogoperasional' => 'Program Operasional Direktur Ke -4',
            ),
            3 => 
            array (
                'id_dirprogoperasional' => 5,
                'dirprogoperasional' => 'Program Operasional Direktur Ke -5',
            ),
            4 => 
            array (
                'id_dirprogoperasional' => 6,
                'dirprogoperasional' => 'Belum memilih',
            ),
        ));
        
        
    }
}