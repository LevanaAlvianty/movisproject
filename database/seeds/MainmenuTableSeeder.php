<?php

use Illuminate\Database\Seeder;

class MainmenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mainmenu')->delete();
        
        \DB::table('mainmenu')->insert(array (
            0 => 
            array (
                'id_main' => 2,
                'nama_menu' => 'Beranda',
                'link' => 'http://localhost/perkeu/',
                'aktif' => 'Y',
                'adminmenu' => 'N',
            ),
            1 => 
            array (
                'id_main' => 3,
                'nama_menu' => 'Profil',
                'link' => 'statis-1-profil.html',
                'aktif' => 'Y',
                'adminmenu' => 'N',
            ),
            2 => 
            array (
                'id_main' => 4,
                'nama_menu' => 'Agenda',
                'link' => 'semua-agenda.html',
                'aktif' => 'Y',
                'adminmenu' => 'N',
            ),
            3 => 
            array (
                'id_main' => 5,
                'nama_menu' => 'Berita',
                'link' => 'semua-berita.html',
                'aktif' => 'Y',
                'adminmenu' => 'N',
            ),
            4 => 
            array (
                'id_main' => 6,
                'nama_menu' => 'Download',
                'link' => 'semua-download.html',
                'aktif' => 'Y',
                'adminmenu' => 'N',
            ),
            5 => 
            array (
                'id_main' => 7,
                'nama_menu' => 'Galeri Foto',
                'link' => 'semua-album.html',
                'aktif' => 'Y',
                'adminmenu' => 'N',
            ),
            6 => 
            array (
                'id_main' => 8,
                'nama_menu' => 'Hubungi Kami',
                'link' => 'hubungi-kami.html',
                'aktif' => 'Y',
                'adminmenu' => 'N',
            ),
            7 => 
            array (
                'id_main' => 14,
                'nama_menu' => 'Setting Web',
                'link' => '',
                'aktif' => 'N',
                'adminmenu' => 'Y',
            ),
            8 => 
            array (
                'id_main' => 15,
                'nama_menu' => 'Setting Menu',
                'link' => '',
                'aktif' => 'N',
                'adminmenu' => 'Y',
            ),
            9 => 
            array (
                'id_main' => 16,
                'nama_menu' => 'Manajemen Berita',
                'link' => '',
                'aktif' => 'N',
                'adminmenu' => 'Y',
            ),
            10 => 
            array (
                'id_main' => 54,
                'nama_menu' => 'Hubungi Kami',
                'link' => '?module=hubungi',
                'aktif' => 'N',
                'adminmenu' => 'Y',
            ),
            11 => 
            array (
                'id_main' => 53,
                'nama_menu' => 'Interaksi',
                'link' => '',
                'aktif' => 'N',
                'adminmenu' => 'Y',
            ),
            12 => 
            array (
                'id_main' => 52,
                'nama_menu' => 'Media',
                'link' => '',
                'aktif' => 'N',
                'adminmenu' => 'Y',
            ),
            13 => 
            array (
                'id_main' => 59,
                'nama_menu' => 'Banner',
                'link' => '?module=banner',
                'aktif' => 'N',
                'adminmenu' => 'Y',
            ),
            14 => 
            array (
                'id_main' => 61,
                'nama_menu' => 'login',
                'link' => 'http://sirena.polines.ac.id/adminweb/',
                'aktif' => 'Y',
                'adminmenu' => 'N',
            ),
        ));
        
        
    }
}