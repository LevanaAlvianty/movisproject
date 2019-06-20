<?php

use Illuminate\Database\Seeder;

class KategoriTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kategori')->delete();
        
        \DB::table('kategori')->insert(array (
            0 => 
            array (
                'id_kategori' => 19,
                'nama_kategori' => 'Teknologi',
                'kategori_seo' => 'teknologi',
                'aktif' => 'Y',
            ),
            1 => 
            array (
                'id_kategori' => 2,
                'nama_kategori' => 'Olahraga',
                'kategori_seo' => 'olahraga',
                'aktif' => 'Y',
            ),
            2 => 
            array (
                'id_kategori' => 22,
                'nama_kategori' => 'Politik',
                'kategori_seo' => 'politik',
                'aktif' => 'Y',
            ),
            3 => 
            array (
                'id_kategori' => 23,
                'nama_kategori' => 'Hiburan',
                'kategori_seo' => 'hiburan',
                'aktif' => 'Y',
            ),
        ));
        
        
    }
}