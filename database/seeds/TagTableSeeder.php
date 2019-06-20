<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tag')->delete();
        
        \DB::table('tag')->insert(array (
            0 => 
            array (
                'id_tag' => 1,
                'nama_tag' => 'Palestina',
                'tag_seo' => 'palestina',
                'count' => 7,
            ),
            1 => 
            array (
                'id_tag' => 2,
                'nama_tag' => 'Gaza',
                'tag_seo' => 'gaza',
                'count' => 11,
            ),
            2 => 
            array (
                'id_tag' => 9,
                'nama_tag' => 'Tenis',
                'tag_seo' => 'tenis',
                'count' => 5,
            ),
            3 => 
            array (
                'id_tag' => 10,
                'nama_tag' => 'Sepakbola',
                'tag_seo' => 'sepakbola',
                'count' => 7,
            ),
            4 => 
            array (
                'id_tag' => 8,
                'nama_tag' => 'Laskar Pelangi',
                'tag_seo' => 'laskar-pelangi',
                'count' => 2,
            ),
            5 => 
            array (
                'id_tag' => 11,
                'nama_tag' => 'Amerika',
                'tag_seo' => 'amerika',
                'count' => 18,
            ),
            6 => 
            array (
                'id_tag' => 12,
                'nama_tag' => 'George Bush',
                'tag_seo' => 'george-bush',
                'count' => 3,
            ),
            7 => 
            array (
                'id_tag' => 13,
                'nama_tag' => 'Browser',
                'tag_seo' => 'browser',
                'count' => 9,
            ),
            8 => 
            array (
                'id_tag' => 14,
                'nama_tag' => 'Google',
                'tag_seo' => 'google',
                'count' => 3,
            ),
            9 => 
            array (
                'id_tag' => 15,
                'nama_tag' => 'Israel',
                'tag_seo' => 'israel',
                'count' => 5,
            ),
            10 => 
            array (
                'id_tag' => 16,
                'nama_tag' => 'Komputer',
                'tag_seo' => 'komputer',
                'count' => 24,
            ),
            11 => 
            array (
                'id_tag' => 17,
                'nama_tag' => 'Film',
                'tag_seo' => 'film',
                'count' => 9,
            ),
            12 => 
            array (
                'id_tag' => 19,
                'nama_tag' => 'Mobil',
                'tag_seo' => 'mobil',
                'count' => 0,
            ),
            13 => 
            array (
                'id_tag' => 21,
                'nama_tag' => 'Gayus',
                'tag_seo' => 'gayus',
                'count' => 2,
            ),
        ));
        
        
    }
}