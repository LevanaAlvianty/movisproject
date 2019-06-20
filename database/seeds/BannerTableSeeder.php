<?php

use Illuminate\Database\Seeder;

class BannerTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banner')->delete();
        
        \DB::table('banner')->insert(array (
            0 => 
            array (
                'id_banner' => 8,
                'judul' => 'Kemristekdikti',
                'url' => 'http://www.ristek.go.id/',
                'gambar' => 'kemristekdikti.jpg',
                'tgl_posting' => '2015-11-17',
            ),
            1 => 
            array (
                'id_banner' => 9,
                'judul' => 'Kementerian Keuangan',
                'url' => 'http://www.kemenkeu.go.id/',
                'gambar' => 'kemkeu.jpg',
                'tgl_posting' => '2015-11-17',
            ),
        ));
        
        
    }
}