<?php

use Illuminate\Database\Seeder;

class TtdTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ttd')->delete();
        
        \DB::table('ttd')->insert(array (
            0 => 
            array (
                'id_ttd' => 1,
                'id_jurbagnitpus' => 2,
                'nip' => '197706142000121001',
            ),
            1 => 
            array (
                'id_ttd' => 2,
                'id_jurbagnitpus' => 4,
                'nip' => '197706142000121002',
            ),
            2 => 
            array (
                'id_ttd' => 3,
                'id_jurbagnitpus' => 13,
                'nip' => '197710092005011001',
            ),
        ));
        
        
    }
}