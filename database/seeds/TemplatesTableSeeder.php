<?php

use Illuminate\Database\Seeder;

class TemplatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('templates')->delete();
        
        \DB::table('templates')->insert(array (
            0 => 
            array (
                'id_templates' => 1,
                'judul' => 'Standar',
                'pembuat' => 'Lukmanul Hakim',
                'folder' => 'templates/standar',
                'aktif' => 'N',
            ),
            1 => 
            array (
                'id_templates' => 2,
                'judul' => 'Building',
                'pembuat' => 'Lukmanul Hakim',
                'folder' => 'templates/building',
                'aktif' => 'N',
            ),
            2 => 
            array (
                'id_templates' => 3,
                'judul' => 'eL jQuery',
                'pembuat' => 'Lukmanul Hakim',
                'folder' => 'templates/eljquery',
                'aktif' => 'N',
            ),
            3 => 
            array (
                'id_templates' => 4,
                'judul' => 'eL jQuery versi 2',
                'pembuat' => 'Lukmanul Hakim',
                'folder' => 'templates/eljquery2',
                'aktif' => 'N',
            ),
            4 => 
            array (
                'id_templates' => 5,
                'judul' => 'eL jQuery ala Yahoo',
                'pembuat' => 'Lukmanul Hakim',
                'folder' => 'templates/eljquery-yahoo',
                'aktif' => 'N',
            ),
            5 => 
            array (
                'id_templates' => 7,
                'judul' => 'Sandbox',
                'pembuat' => 'Ahmad Nugraha',
                'folder' => 'templates/sandbox',
                'aktif' => 'N',
            ),
            6 => 
            array (
                'id_templates' => 8,
                'judul' => 'Just Simple Blue',
                'pembuat' => 'Dian Pamungkas',
                'folder' => 'templates/blue',
                'aktif' => 'N',
            ),
            7 => 
            array (
                'id_templates' => 10,
                'judul' => 'Poeji',
                'pembuat' => 'Puji Kartono',
                'folder' => 'templates/poeji',
                'aktif' => 'N',
            ),
            8 => 
            array (
                'id_templates' => 11,
                'judul' => 'Notebook',
                'pembuat' => 'baganwildan.net',
                'folder' => 'templates/notebook',
                'aktif' => 'Y',
            ),
            9 => 
            array (
                'id_templates' => 12,
                'judul' => 'under_construction',
                'pembuat' => 'baganwildan.net',
                'folder' => 'templates/under_construction',
                'aktif' => 'N',
            ),
        ));
        
        
    }
}