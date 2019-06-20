<?php

use Illuminate\Database\Seeder;

class AlbumTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('album')->delete();
        
        \DB::table('album')->insert(array (
            0 => 
            array (
                'id_album' => 21,
                'jdl_album' => 'Kartun',
                'album_seo' => 'kartun',
                'gbr_album' => '476928sonic.jpg',
                'aktif' => 'Y',
            ),
            1 => 
            array (
                'id_album' => 20,
                'jdl_album' => 'Pernikahan',
                'album_seo' => 'pernikahan',
                'gbr_album' => '146667nikah.jpg',
                'aktif' => 'Y',
            ),
            2 => 
            array (
                'id_album' => 18,
                'jdl_album' => 'Bayi',
                'album_seo' => 'bayi',
                'gbr_album' => '246551silvestree.jpg',
                'aktif' => 'Y',
            ),
            3 => 
            array (
                'id_album' => 12,
                'jdl_album' => 'Ilustrator',
                'album_seo' => 'ilustrator',
                'gbr_album' => '987701family.jpg',
                'aktif' => 'Y',
            ),
            4 => 
            array (
                'id_album' => 19,
                'jdl_album' => 'Binatang',
                'album_seo' => 'binatang',
                'gbr_album' => '391479burung.jpg',
                'aktif' => 'Y',
            ),
            5 => 
            array (
                'id_album' => 17,
                'jdl_album' => 'Arsitektur',
                'album_seo' => 'arsitektur',
                'gbr_album' => '741638arche090.jpg',
                'aktif' => 'Y',
            ),
        ));
        
        
    }
}