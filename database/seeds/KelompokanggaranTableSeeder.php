<?php

use Illuminate\Database\Seeder;

class KelompokanggaranTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kelompokanggaran')->delete();
        
        \DB::table('kelompokanggaran')->insert(array (
            0 => 
            array (
                'id_kelang' => 1,
                'kelompokanggaran' => 'PNBP',
            ),
            1 => 
            array (
                'id_kelang' => 2,
                'kelompokanggaran' => 'BOPTN',
            ),
            2 => 
            array (
                'id_kelang' => 3,
                'kelompokanggaran' => 'RM',
            ),
        ));
        
        
    }
}