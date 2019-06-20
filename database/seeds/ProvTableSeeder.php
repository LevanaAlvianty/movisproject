<?php

use Illuminate\Database\Seeder;

class ProvTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('prov')->delete();
        
        \DB::table('prov')->insert(array (
            0 => 
            array (
                'id_prov' => 11,
                'nama_prov' => 'Aceh',
            ),
            1 => 
            array (
                'id_prov' => 12,
                'nama_prov' => 'Sumatera Utara',
            ),
            2 => 
            array (
                'id_prov' => 13,
                'nama_prov' => 'Sumatera Barat',
            ),
            3 => 
            array (
                'id_prov' => 14,
                'nama_prov' => 'Riau',
            ),
            4 => 
            array (
                'id_prov' => 15,
                'nama_prov' => 'Jambi',
            ),
            5 => 
            array (
                'id_prov' => 16,
                'nama_prov' => 'Sumatera Selatan',
            ),
            6 => 
            array (
                'id_prov' => 17,
                'nama_prov' => 'Bengkulu',
            ),
            7 => 
            array (
                'id_prov' => 18,
                'nama_prov' => 'Lampung',
            ),
            8 => 
            array (
                'id_prov' => 19,
                'nama_prov' => 'Kepulauan Bangka Belitung',
            ),
            9 => 
            array (
                'id_prov' => 21,
                'nama_prov' => 'Kepulauan Riau',
            ),
            10 => 
            array (
                'id_prov' => 31,
                'nama_prov' => 'DKI Jakarta',
            ),
            11 => 
            array (
                'id_prov' => 32,
                'nama_prov' => 'Jawa Barat',
            ),
            12 => 
            array (
                'id_prov' => 33,
                'nama_prov' => 'Jawa Tengah',
            ),
            13 => 
            array (
                'id_prov' => 34,
                'nama_prov' => 'DI Yogyakarta',
            ),
            14 => 
            array (
                'id_prov' => 35,
                'nama_prov' => 'Jawa Timur',
            ),
            15 => 
            array (
                'id_prov' => 36,
                'nama_prov' => 'Banten',
            ),
            16 => 
            array (
                'id_prov' => 51,
                'nama_prov' => 'Bali',
            ),
            17 => 
            array (
                'id_prov' => 52,
                'nama_prov' => 'Nusa Tenggara Barat',
            ),
            18 => 
            array (
                'id_prov' => 53,
                'nama_prov' => 'Nusa Tenggara Timur',
            ),
            19 => 
            array (
                'id_prov' => 61,
                'nama_prov' => 'Kalimantan Barat',
            ),
            20 => 
            array (
                'id_prov' => 62,
                'nama_prov' => 'Kalimantan Tengah',
            ),
            21 => 
            array (
                'id_prov' => 63,
                'nama_prov' => 'Kalimantan Selatan',
            ),
            22 => 
            array (
                'id_prov' => 64,
                'nama_prov' => 'Kalimantan Timur',
            ),
            23 => 
            array (
                'id_prov' => 71,
                'nama_prov' => 'Sulawesi Utara',
            ),
            24 => 
            array (
                'id_prov' => 72,
                'nama_prov' => 'Sulawesi Tengah',
            ),
            25 => 
            array (
                'id_prov' => 73,
                'nama_prov' => 'Sulawesi Selatan',
            ),
            26 => 
            array (
                'id_prov' => 74,
                'nama_prov' => 'Sulawesi Tenggara',
            ),
            27 => 
            array (
                'id_prov' => 75,
                'nama_prov' => 'Gorontalo',
            ),
            28 => 
            array (
                'id_prov' => 76,
                'nama_prov' => 'Sulawesi Barat',
            ),
            29 => 
            array (
                'id_prov' => 81,
                'nama_prov' => 'Maluku',
            ),
            30 => 
            array (
                'id_prov' => 82,
                'nama_prov' => 'Maluku Utara',
            ),
            31 => 
            array (
                'id_prov' => 91,
                'nama_prov' => 'Papua Barat',
            ),
            32 => 
            array (
                'id_prov' => 94,
                'nama_prov' => 'Papua',
            ),
        ));
        
        
    }
}