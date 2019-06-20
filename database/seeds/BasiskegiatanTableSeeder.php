<?php

use Illuminate\Database\Seeder;

class BasiskegiatanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('basiskegiatan')->delete();
        
        \DB::table('basiskegiatan')->insert(array (
            0 => 
            array (
                'id_basis' => 1,
                'basis_kegiatan' => 'Proposal',
            ),
        ));
        
        
    }
}