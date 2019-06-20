<?php

use Illuminate\Database\Seeder;

class SekilasinfoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sekilasinfo')->delete();
        
        \DB::table('sekilasinfo')->insert(array (
            0 => 
            array (
                'id_sekilas' => 1,
                'info' => 'Anak yang mengalami gangguan tidur, cenderung memakai obat2an dan alkohol berlebih saat dewasa.',
                'tgl_posting' => '2010-04-11',
                'gambar' => 'news5.jpg',
            ),
            1 => 
            array (
                'id_sekilas' => 2,
                'info' => 'WHO merilis, 30 persen anak-anak di dunia kecanduan menonton televisi dan bermain komputer.',
                'tgl_posting' => '2010-04-11',
                'gambar' => 'news4.jpg',
            ),
            2 => 
            array (
                'id_sekilas' => 3,
                'info' => 'Menurut peneliti di Detroit, orang yang selalu tersenyum lebar cenderung hidup lebih lama.',
                'tgl_posting' => '2010-04-11',
                'gambar' => 'news3.jpg',
            ),
            3 => 
            array (
                'id_sekilas' => 4,
                'info' => 'Menurut United Stated Trade Representatives, 25% obat yang beredar di Indonesia adalah palsu.',
                'tgl_posting' => '2010-04-11',
                'gambar' => 'news2.jpg',
            ),
            4 => 
            array (
                'id_sekilas' => 5,
                'info' => 'Presiden AS Barack Obama memesan Nasi Goreng di restoran Bali langsung dari Amerika',
                'tgl_posting' => '2010-04-11',
                'gambar' => 'news1.jpg',
            ),
        ));
        
        
    }
}