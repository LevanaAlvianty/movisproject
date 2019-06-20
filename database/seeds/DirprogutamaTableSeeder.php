<?php

use Illuminate\Database\Seeder;

class DirprogutamaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('dirprogutama')->delete();
        
        \DB::table('dirprogutama')->insert(array (
            0 => 
            array (
                'id_dirprogutama' => 0,
                'dirprogutama' => 'Belum',
                'id_renstra' => NULL,
                'tahun_penetapan' => NULL,
                'status' => NULL,
            ),
            1 => 
            array (
                'id_dirprogutama' => 2,
                'dirprogutama' => '1. Peningkatan Kualitas Lulusan',
                'id_renstra' => NULL,
                'tahun_penetapan' => NULL,
                'status' => NULL,
            ),
            2 => 
            array (
                'id_dirprogutama' => 3,
                'dirprogutama' => '2. Pengembangan Program Studi',
                'id_renstra' => NULL,
                'tahun_penetapan' => NULL,
                'status' => NULL,
            ),
            3 => 
            array (
                'id_dirprogutama' => 5,
                'dirprogutama' => '1. Peningkatan kualitas dan kuantitas penelitian',
                'id_renstra' => NULL,
                'tahun_penetapan' => NULL,
                'status' => NULL,
            ),
            4 => 
            array (
                'id_dirprogutama' => 6,
                'dirprogutama' => '2. Peningkatan tindak lanjut hasil penelitian terapan dalam bentuk publikasi dan HaKI',
                'id_renstra' => NULL,
                'tahun_penetapan' => NULL,
                'status' => NULL,
            ),
            5 => 
            array (
                'id_dirprogutama' => 7,
                'dirprogutama' => '3. Peningkatan pemanfaatan  hasil penelitian di industri dan masyarakat',
                'id_renstra' => NULL,
                'tahun_penetapan' => NULL,
                'status' => NULL,
            ),
            6 => 
            array (
                'id_dirprogutama' => 9,
                'dirprogutama' => '1. Peningkatan Kualitas dan kuantitas Pengabdian',
                'id_renstra' => NULL,
                'tahun_penetapan' => NULL,
                'status' => NULL,
            ),
            7 => 
            array (
                'id_dirprogutama' => 10,
                'dirprogutama' => '2. Peningkatan tindak lanjut hasil pengabdian dalam bentuk publikasi dan HaKI',
                'id_renstra' => NULL,
                'tahun_penetapan' => NULL,
                'status' => NULL,
            ),
            8 => 
            array (
                'id_dirprogutama' => 11,
                'dirprogutama' => '3. Peningkatan peran masyarakat dalam pengabdian',
                'id_renstra' => NULL,
                'tahun_penetapan' => NULL,
                'status' => NULL,
            ),
            9 => 
            array (
                'id_dirprogutama' => 13,
                'dirprogutama' => '1. Peningkatan kualitas layanan akademik dan non akademik',
                'id_renstra' => NULL,
                'tahun_penetapan' => NULL,
                'status' => NULL,
            ),
            10 => 
            array (
                'id_dirprogutama' => 14,
                'dirprogutama' => '2. Peningkatan jaminan mutu layanan ',
                'id_renstra' => NULL,
                'tahun_penetapan' => NULL,
                'status' => NULL,
            ),
            11 => 
            array (
                'id_dirprogutama' => 15,
                'dirprogutama' => '3. Peningkatan transparansi dan akuntabilitas pengelolaan keuangan',
                'id_renstra' => NULL,
                'tahun_penetapan' => NULL,
                'status' => NULL,
            ),
            12 => 
            array (
                'id_dirprogutama' => 16,
                'dirprogutama' => '4. Peningkatan citra Polines',
                'id_renstra' => NULL,
                'tahun_penetapan' => NULL,
                'status' => NULL,
            ),
            13 => 
            array (
                'id_dirprogutama' => 18,
                'dirprogutama' => '1. Peningkatan kualitas sumber daya dosen dan tenaga kependidikan',
                'id_renstra' => NULL,
                'tahun_penetapan' => NULL,
                'status' => NULL,
            ),
            14 => 
            array (
                'id_dirprogutama' => 19,
                'dirprogutama' => '2. Peningkatan kualitas peran dosen',
                'id_renstra' => NULL,
                'tahun_penetapan' => NULL,
                'status' => NULL,
            ),
        ));
        
        
    }
}