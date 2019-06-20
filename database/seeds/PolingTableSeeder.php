<?php

use Illuminate\Database\Seeder;

class PolingTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('poling')->delete();
        
        \DB::table('poling')->insert(array (
            0 => 
            array (
                'id_poling' => 1,
                'pilihan' => 'Internet Explorer',
                'status' => 'Jawaban',
                'rating' => 23,
                'aktif' => 'Y',
            ),
            1 => 
            array (
                'id_poling' => 2,
                'pilihan' => 'Mozilla Firefox',
                'status' => 'Jawaban',
                'rating' => 81,
                'aktif' => 'Y',
            ),
            2 => 
            array (
                'id_poling' => 3,
                'pilihan' => 'Google Chrome',
                'status' => 'Jawaban',
                'rating' => 21,
                'aktif' => 'Y',
            ),
            3 => 
            array (
                'id_poling' => 4,
                'pilihan' => 'Opera',
                'status' => 'Jawaban',
                'rating' => 22,
                'aktif' => 'Y',
            ),
            4 => 
            array (
                'id_poling' => 8,
                'pilihan' => 'Apa Browser Favorit Anda?',
                'status' => 'Pertanyaan',
                'rating' => 0,
                'aktif' => 'Y',
            ),
        ));
        
        
    }
}