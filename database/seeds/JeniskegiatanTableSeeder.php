<?php

use Illuminate\Database\Seeder;

class JeniskegiatanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jeniskegiatan')->delete();
        
        \DB::table('jeniskegiatan')->insert(array (
            0 => 
            array (
                'id_jenis' => 1,
                'jenis_kegiatan' => 'Peningkatan',
            ),
            1 => 
            array (
                'id_jenis' => 2,
                'jenis_kegiatan' => 'Pengembangan',
            ),
            2 => 
            array (
                'id_jenis' => 3,
                'jenis_kegiatan' => 'Penguatan',
            ),
            3 => 
            array (
                'id_jenis' => 4,
                'jenis_kegiatan' => 'Pengembangan SDM',
            ),
            4 => 
            array (
                'id_jenis' => 5,
                'jenis_kegiatan' => 'Perjalanan Dinas Operasional',
            ),
        ));
        
        
    }
}