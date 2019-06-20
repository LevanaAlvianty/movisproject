<?php

use Illuminate\Database\Seeder;

class IdentitasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('identitas')->delete();
        
        \DB::table('identitas')->insert(array (
            0 => 
            array (
                'id_identitas' => 1,
                'nama_website' => 'Sistem Informasi Perencanaan',
                'alamat_website' => 'http://sirena.polines.ac.id/adminweb/',
                'meta_deskripsi' => 'perencanaan,polines',
                'meta_keyword' => 'perencanaan,polines',
                'favicon' => 'favicon.ico',
            ),
        ));
        
        
    }
}