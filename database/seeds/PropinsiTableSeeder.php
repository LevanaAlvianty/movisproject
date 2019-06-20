<?php

use Illuminate\Database\Seeder;

class PropinsiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('propinsi')->delete();
        
        \DB::table('propinsi')->insert(array (
            0 => 
            array (
                'idProp' => 1,
                'namaPropinsi' => 'Jawa Tengah',
            ),
            1 => 
            array (
                'idProp' => 2,
                'namaPropinsi' => 'Jawa Barat',
            ),
            2 => 
            array (
                'idProp' => 3,
                'namaPropinsi' => 'Jawa Timur',
            ),
        ));
        
        
    }
}