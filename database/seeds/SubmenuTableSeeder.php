<?php

use Illuminate\Database\Seeder;

class SubmenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('submenu')->delete();
        
        \DB::table('submenu')->insert(array (
            0 => 
            array (
                'id_sub' => 2,
                'nama_sub' => 'Visi dan Misi',
                'link_sub' => 'statis-2-visidanmisi.html',
                'id_main' => 3,
                'id_submain' => 0,
                'aktif' => 'Y',
                'adminsubmenu' => 'N',
            ),
            1 => 
            array (
                'id_sub' => 3,
                'nama_sub' => 'Struktur Organisasi',
                'link_sub' => 'statis-3-strukturorganisasi.html',
                'id_main' => 3,
                'id_submain' => 0,
                'aktif' => 'Y',
                'adminsubmenu' => 'N',
            ),
            2 => 
            array (
                'id_sub' => 4,
                'nama_sub' => 'Ekonomi',
                'link_sub' => 'kategori-21-ekonomi.html',
                'id_main' => 5,
                'id_submain' => 0,
                'aktif' => 'N',
                'adminsubmenu' => 'N',
            ),
            3 => 
            array (
                'id_sub' => 5,
                'nama_sub' => 'Hiburan',
                'link_sub' => 'kategori-23-hiburan.html',
                'id_main' => 5,
                'id_submain' => 0,
                'aktif' => 'Y',
                'adminsubmenu' => 'N',
            ),
            4 => 
            array (
                'id_sub' => 6,
                'nama_sub' => 'Olahraga',
                'link_sub' => 'kategori-2-olahraga.html',
                'id_main' => 5,
                'id_submain' => 0,
                'aktif' => 'Y',
                'adminsubmenu' => 'N',
            ),
            5 => 
            array (
                'id_sub' => 7,
                'nama_sub' => 'Politik',
                'link_sub' => 'kategori-22-politik.html',
                'id_main' => 5,
                'id_submain' => 0,
                'aktif' => 'Y',
                'adminsubmenu' => 'N',
            ),
            6 => 
            array (
                'id_sub' => 8,
                'nama_sub' => 'Teknologi',
                'link_sub' => 'kategori-19-teknologi.html',
                'id_main' => 5,
                'id_submain' => 0,
                'aktif' => 'Y',
                'adminsubmenu' => 'N',
            ),
            7 => 
            array (
                'id_sub' => 11,
                'nama_sub' => 'Manajemen Modul',
                'link_sub' => '?module=modul',
                'id_main' => 14,
                'id_submain' => 0,
                'aktif' => 'N',
                'adminsubmenu' => 'Y',
            ),
            8 => 
            array (
                'id_sub' => 10,
                'nama_sub' => 'Identitas Web',
                'link_sub' => '?module=identitas',
                'id_main' => 14,
                'id_submain' => 0,
                'aktif' => 'N',
                'adminsubmenu' => 'Y',
            ),
            9 => 
            array (
                'id_sub' => 12,
                'nama_sub' => 'Manajemen User',
                'link_sub' => '?module=user',
                'id_main' => 14,
                'id_submain' => 0,
                'aktif' => 'N',
                'adminsubmenu' => 'Y',
            ),
            10 => 
            array (
                'id_sub' => 13,
                'nama_sub' => 'Manajemen Template',
                'link_sub' => '?module=templates',
                'id_main' => 14,
                'id_submain' => 0,
                'aktif' => 'N',
                'adminsubmenu' => 'Y',
            ),
            11 => 
            array (
                'id_sub' => 14,
                'nama_sub' => 'Menu Utama',
                'link_sub' => '?module=menuutama',
                'id_main' => 15,
                'id_submain' => 0,
                'aktif' => 'N',
                'adminsubmenu' => 'Y',
            ),
            12 => 
            array (
                'id_sub' => 15,
                'nama_sub' => 'Sub Menu',
                'link_sub' => '?module=submenu',
                'id_main' => 15,
                'id_submain' => 0,
                'aktif' => 'N',
                'adminsubmenu' => 'Y',
            ),
            13 => 
            array (
                'id_sub' => 16,
                'nama_sub' => 'Kategori Berita',
                'link_sub' => '?module=kategori',
                'id_main' => 16,
                'id_submain' => 0,
                'aktif' => 'N',
                'adminsubmenu' => 'Y',
            ),
            14 => 
            array (
                'id_sub' => 17,
                'nama_sub' => 'Berita',
                'link_sub' => '?module=berita',
                'id_main' => 16,
                'id_submain' => 0,
                'aktif' => 'N',
                'adminsubmenu' => 'Y',
            ),
            15 => 
            array (
                'id_sub' => 18,
                'nama_sub' => 'Komentar',
                'link_sub' => '?module=komentar',
                'id_main' => 16,
                'id_submain' => 0,
                'aktif' => 'N',
                'adminsubmenu' => 'Y',
            ),
            16 => 
            array (
                'id_sub' => 19,
                'nama_sub' => 'Halaman Statis',
                'link_sub' => '?module=halamanstatis',
                'id_main' => 16,
                'id_submain' => 0,
                'aktif' => 'N',
                'adminsubmenu' => 'Y',
            ),
            17 => 
            array (
                'id_sub' => 20,
                'nama_sub' => 'Tag / Label',
                'link_sub' => '?module=tag',
                'id_main' => 16,
                'id_submain' => 0,
                'aktif' => 'N',
                'adminsubmenu' => 'Y',
            ),
            18 => 
            array (
                'id_sub' => 21,
                'nama_sub' => 'Sensor Kata',
                'link_sub' => '?module=katajelek',
                'id_main' => 16,
                'id_submain' => 0,
                'aktif' => 'N',
                'adminsubmenu' => 'Y',
            ),
            19 => 
            array (
                'id_sub' => 22,
                'nama_sub' => 'Album',
                'link_sub' => '?module=album',
                'id_main' => 52,
                'id_submain' => 0,
                'aktif' => 'N',
                'adminsubmenu' => 'Y',
            ),
            20 => 
            array (
                'id_sub' => 23,
                'nama_sub' => 'Galeri Foto',
                'link_sub' => '?module=galerifoto',
                'id_main' => 52,
                'id_submain' => 0,
                'aktif' => 'N',
                'adminsubmenu' => 'Y',
            ),
            21 => 
            array (
                'id_sub' => 24,
                'nama_sub' => 'Download',
                'link_sub' => '?module=download',
                'id_main' => 52,
                'id_submain' => 0,
                'aktif' => 'N',
                'adminsubmenu' => 'Y',
            ),
            22 => 
            array (
                'id_sub' => 25,
                'nama_sub' => 'Agenda',
                'link_sub' => '?module=agenda',
                'id_main' => 53,
                'id_submain' => 0,
                'aktif' => 'N',
                'adminsubmenu' => 'Y',
            ),
            23 => 
            array (
                'id_sub' => 26,
                'nama_sub' => 'Poling',
                'link_sub' => '?module=poling',
                'id_main' => 53,
                'id_submain' => 0,
                'aktif' => 'N',
                'adminsubmenu' => 'Y',
            ),
            24 => 
            array (
                'id_sub' => 27,
                'nama_sub' => 'Sekilas Info',
                'link_sub' => '?module=sekilasinfo',
                'id_main' => 53,
                'id_submain' => 0,
                'aktif' => 'N',
                'adminsubmenu' => 'Y',
            ),
            25 => 
            array (
                'id_sub' => 30,
                'nama_sub' => 'ShoutBox',
                'link_sub' => '?module=shoutbox',
                'id_main' => 53,
                'id_submain' => 0,
                'aktif' => 'N',
                'adminsubmenu' => 'Y',
            ),
        ));
        
        
    }
}