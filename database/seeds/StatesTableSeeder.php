<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('states')->delete();
        
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 1,
                'country_id' => 1,
                'name' => 'Peningkatan Kualitas Lulusan',
            ),
            1 => 
            array (
                'id' => 2,
                'country_id' => 1,
                'name' => 'Pengembangan Program Studi',
            ),
            2 => 
            array (
                'id' => 3,
                'country_id' => 2,
                'name' => 'Peningkatan kualitas dan kuantitas penelitian',
            ),
            3 => 
            array (
                'id' => 4,
                'country_id' => 2,
                'name' => 'Peningkatan tindak lanjut hasil penelitian terapan dalam bentuk publikasi dan HaKI',
            ),
            4 => 
            array (
                'id' => 5,
                'country_id' => 2,
                'name' => 'Peningkatan pemanfaatan  hasil penelitian di industri dan masyarakat',
            ),
        ));
        
        
    }
}