<?php

use Illuminate\Database\Seeder;

class DirtujuanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('dirtujuan')->delete();
        
        \DB::table('dirtujuan')->insert(array (
            0 => 
            array (
                'id_dirtujuan' => 1,
                'tujuan' => 'Belum memilih',
                'tahun_penetapan' => '2014',
                'status' => 'Y',
            ),
            1 => 
            array (
                'id_dirtujuan' => 2,
                'tujuan' => '1. Menghasilkan lulusan yang memiliki keahlian di bidang teknologi dan bisnis yang diakui dunia industri melalui pola pendidikan berbasis produksi',
                'tahun_penetapan' => '',
                'status' => NULL,
            ),
            2 => 
            array (
                'id_dirtujuan' => 3,
                'tujuan' => '2. Mengembangkan pengetahuan terapan bidang teknologi dan bisnis yang memajukan penerapan teknologi di industri dan masyarakat',
                'tahun_penetapan' => '2014',
                'status' => 'Y',
            ),
            3 => 
            array (
                'id_dirtujuan' => 4,
                'tujuan' => '3. Meningkatkan budaya akademik, organisasi, dan kerja yang sehat dan dinamis sebagai basis kerja sama dengan pemangku kepentingan guna mengembangkan penerapan teknologi dan memajukan kemandirian masyarakat',
                'tahun_penetapan' => '2014',
                'status' => 'Y',
            ),
            4 => 
            array (
                'id_dirtujuan' => 5,
                'tujuan' => '4. Menerapkan manajemen perguruan tinggi modern dalam pengelolaan pendidikan, penelitian dan pengabdian kepada masyarakat',
                'tahun_penetapan' => '2014',
                'status' => 'Y',
            ),
            5 => 
            array (
                'id_dirtujuan' => 6,
                'tujuan' => '5. Mewujudkan kepakaran bidang teknologi dan bisnis yang bermanfaat dan diakui secara nasional dan internasional',
                'tahun_penetapan' => '2014',
                'status' => 'Y',
            ),
        ));
        
        
    }
}