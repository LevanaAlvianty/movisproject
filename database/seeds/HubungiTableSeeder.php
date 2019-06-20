<?php

use Illuminate\Database\Seeder;

class HubungiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('hubungi')->delete();
        
        \DB::table('hubungi')->insert(array (
            0 => 
            array (
                'id_hubungi' => 1,
                'nama' => 'Ariawan',
                'email' => 'ariawan@gmail.com',
                'subjek' => 'Mohon Informasi',
                'pesan' => 'Mohon informasi mengenai buku yang diterbitkan oleh Lokomedia.',
                'tanggal' => '2008-02-10',
            ),
            1 => 
            array (
                'id_hubungi' => 4,
                'nama' => 'lukman',
                'email' => 'lukman@hakim',
                'subjek' => 'Request Code',
                'pesan' => 'Tolong dunk ..',
                'tanggal' => '2009-02-25',
            ),
            2 => 
            array (
                'id_hubungi' => 8,
                'nama' => 'lukman',
                'email' => 'lukman@bukulokomedia.com',
                'subjek' => 'kontak kami',
                'pesan' => 'tes modul hubungi kami',
                'tanggal' => '2010-05-16',
            ),
        ));
        
        
    }
}