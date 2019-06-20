<?php

use Illuminate\Database\Seeder;

class SatuanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('satuan')->delete();
        
        \DB::table('satuan')->insert(array (
            0 => 
            array (
                'id_satuan' => 1,
                'satuan' => 'batang',
            ),
            1 => 
            array (
                'id_satuan' => 2,
                'satuan' => 'box',
            ),
            2 => 
            array (
                'id_satuan' => 3,
                'satuan' => 'buah',
            ),
            3 => 
            array (
                'id_satuan' => 5,
                'satuan' => 'dos',
            ),
            4 => 
            array (
                'id_satuan' => 6,
                'satuan' => 'dozen',
            ),
            5 => 
            array (
                'id_satuan' => 7,
                'satuan' => 'kaleng',
            ),
            6 => 
            array (
                'id_satuan' => 8,
                'satuan' => 'keping',
            ),
            7 => 
            array (
                'id_satuan' => 9,
                'satuan' => 'kg',
            ),
            8 => 
            array (
                'id_satuan' => 10,
                'satuan' => 'lbr',
            ),
            9 => 
            array (
                'id_satuan' => 11,
                'satuan' => 'lembar',
            ),
            10 => 
            array (
                'id_satuan' => 12,
                'satuan' => 'meter',
            ),
            11 => 
            array (
                'id_satuan' => 13,
                'satuan' => 'pack',
            ),
            12 => 
            array (
                'id_satuan' => 14,
                'satuan' => 'pak',
            ),
            13 => 
            array (
                'id_satuan' => 15,
                'satuan' => 'rim',
            ),
            14 => 
            array (
                'id_satuan' => 16,
                'satuan' => 'roll',
            ),
            15 => 
            array (
                'id_satuan' => 17,
                'satuan' => 'set',
            ),
            16 => 
            array (
                'id_satuan' => 18,
                'satuan' => 'tube',
            ),
            17 => 
            array (
                'id_satuan' => 19,
                'satuan' => 'OJ',
            ),
            18 => 
            array (
                'id_satuan' => 20,
                'satuan' => 'OB',
            ),
            19 => 
            array (
                'id_satuan' => 21,
                'satuan' => 'output penelitian / perekayasaan',
            ),
            20 => 
            array (
                'id_satuan' => 22,
                'satuan' => 'OR',
            ),
            21 => 
            array (
                'id_satuan' => 23,
                'satuan' => 'OH',
            ),
            22 => 
            array (
                'id_satuan' => 24,
                'satuan' => 'per laporan',
            ),
            23 => 
            array (
                'id_satuan' => 25,
                'satuan' => '/mhs',
            ),
            24 => 
            array (
                'id_satuan' => 26,
                'satuan' => 'orang',
            ),
            25 => 
            array (
                'id_satuan' => 27,
                'satuan' => 'per judul',
            ),
            26 => 
            array (
                'id_satuan' => 28,
                'satuan' => 'oter',
            ),
            27 => 
            array (
                'id_satuan' => 29,
                'satuan' => 'hal',
            ),
            28 => 
            array (
                'id_satuan' => 30,
                'satuan' => 'naskah',
            ),
            29 => 
            array (
                'id_satuan' => 31,
                'satuan' => '/kelas',
            ),
            30 => 
            array (
                'id_satuan' => 32,
                'satuan' => 'mhs/mt ujian',
            ),
            31 => 
            array (
                'id_satuan' => 33,
                'satuan' => 'org/mhs',
            ),
            32 => 
            array (
                'id_satuan' => 34,
                'satuan' => 'butir soal
butir soal
butir soal',
            ),
            33 => 
            array (
                'id_satuan' => 35,
                'satuan' => 'org/kali',
            ),
            34 => 
            array (
                'id_satuan' => 36,
                'satuan' => 'org/jam',
            ),
            35 => 
            array (
                'id_satuan' => 37,
                'satuan' => 'eksemplar',
            ),
            36 => 
            array (
                'id_satuan' => 38,
                'satuan' => 'hari',
            ),
            37 => 
            array (
                'id_satuan' => 39,
                'satuan' => 'OK',
            ),
            38 => 
            array (
                'id_satuan' => 41,
                'satuan' => '/tahun',
            ),
            39 => 
            array (
                'id_satuan' => 43,
                'satuan' => 'paket',
            ),
            40 => 
            array (
                'id_satuan' => 44,
                'satuan' => 'Judul',
            ),
            41 => 
            array (
                'id_satuan' => 45,
                'satuan' => 'Satuan',
            ),
            42 => 
            array (
                'id_satuan' => 46,
                'satuan' => 'Paket',
            ),
            43 => 
            array (
                'id_satuan' => 47,
                'satuan' => 'naskah',
            ),
            44 => 
            array (
                'id_satuan' => 48,
                'satuan' => 'org terbit',
            ),
            45 => 
            array (
                'id_satuan' => 49,
                'satuan' => 'org/proposal',
            ),
            46 => 
            array (
                'id_satuan' => 50,
                'satuan' => 'slop',
            ),
            47 => 
            array (
                'id_satuan' => 51,
                'satuan' => 'unit',
            ),
            48 => 
            array (
                'id_satuan' => 52,
                'satuan' => 'Orang/Mhs',
            ),
            49 => 
            array (
                'id_satuan' => 53,
                'satuan' => 'terbit',
            ),
            50 => 
            array (
                'id_satuan' => 54,
                'satuan' => 'durasi',
            ),
        ));
        
        
    }
}