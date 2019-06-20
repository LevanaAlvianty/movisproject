<?php

use Illuminate\Database\Seeder;

class SatuanbiayaDraftAwalTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('satuanbiaya_draft_awal')->delete();
        
        \DB::table('satuanbiaya_draft_awal')->insert(array (
            0 => 
            array (
                'id_satuanbiaya' => 1,
                'namabarang' => 'Snack',
                'id_satuan' => 'dos',
                'hargasatuan' => 15000000.0,
                'acuan' => 'Snack',
                'akun' => '521211',
                'kelompok' => 'Konsumsi',
            ),
            1 => 
            array (
                'id_satuanbiaya' => 3,
                'namabarang' => 'Makan',
                'id_satuan' => 'dos',
                'hargasatuan' => 27000.0,
                'acuan' => 'Makan',
                'akun' => '521211',
                'kelompok' => 'Konsumsi',
            ),
            2 => 
            array (
                'id_satuanbiaya' => 4,
            'namabarang' => 'Toner Printer HP Laserjet Series 13 A (1300)',
                'id_satuan' => 'dos',
                'hargasatuan' => 1188300.0,
                'acuan' => 'Barang 1',
                'akun' => '521211',
                'kelompok' => 'ATK dan BHP',
            ),
            3 => 
            array (
                'id_satuanbiaya' => 5,
                'namabarang' => 'Snelhecter Platik/spring file',
                'id_satuan' => 'buah',
                'hargasatuan' => 5200.0,
                'acuan' => 'Barang 2',
                'akun' => '521211',
                'kelompok' => 'ATK dan BHP',
            ),
            4 => 
            array (
                'id_satuanbiaya' => 6,
                'namabarang' => 'Bollpoint Boxy hitam',
                'id_satuan' => 'buah',
                'hargasatuan' => 15600.0,
                'acuan' => 'Barang 3',
                'akun' => '521211',
                'kelompok' => 'ATK dan BHP',
            ),
            5 => 
            array (
                'id_satuanbiaya' => 7,
                'namabarang' => 'Block Note',
                'id_satuan' => 'buah',
                'hargasatuan' => 3000.0,
                'acuan' => '3000',
                'akun' => '521211',
                'kelompok' => 'ATK dan BHP',
            ),
            6 => 
            array (
                'id_satuanbiaya' => 8,
                'namabarang' => 'Pensil 2B Steadler',
                'id_satuan' => 'buah',
                'hargasatuan' => 10004.0,
                'acuan' => 'Barang 5',
                'akun' => '521211',
                'kelompok' => 'ATK dan BHP',
            ),
            7 => 
            array (
                'id_satuanbiaya' => 9,
                'namabarang' => 'Stabillo Bos',
                'id_satuan' => 'buah',
                'hargasatuan' => 9500.0,
                'acuan' => 'Barang 6',
                'akun' => '521211',
                'kelompok' => 'ATK dan BHP',
            ),
            8 => 
            array (
                'id_satuanbiaya' => 10,
                'namabarang' => 'Kertas HVS F4 70 gr Sidu',
                'id_satuan' => 'rim',
                'hargasatuan' => 38500.0,
                'acuan' => 'Barang 7',
                'akun' => '521211',
                'kelompok' => 'ATK dan BHP',
            ),
            9 => 
            array (
                'id_satuanbiaya' => 11,
            'namabarang' => 'Rautan Pensil Besar Angel-5 (meja) "kenko"',
                'id_satuan' => 'buah',
                'hargasatuan' => 49800.0,
                'acuan' => 'Barang 8',
                'akun' => '521211',
                'kelompok' => 'ATK dan BHP',
            ),
            10 => 
            array (
                'id_satuanbiaya' => 12,
                'namabarang' => 'Odner Besar Gungyu',
                'id_satuan' => 'buah',
                'hargasatuan' => 18900.0,
                'acuan' => 'Barang 9',
                'akun' => '521211',
                'kelompok' => 'ATK dan BHP',
            ),
            11 => 
            array (
                'id_satuanbiaya' => 13,
                'namabarang' => 'Amplop putih standar polos No. 90 jaya',
                'id_satuan' => 'dos',
                'hargasatuan' => 19700.0,
                'acuan' => 'Barang 10',
                'akun' => '521211',
                'kelompok' => 'ATK dan BHP',
            ),
            12 => 
            array (
                'id_satuanbiaya' => 14,
                'namabarang' => 'Foto Copy',
                'id_satuan' => 'lbr',
                'hargasatuan' => 200.0,
                'acuan' => 'Barang 11',
                'akun' => '521211',
                'kelompok' => 'Penggadaan',
            ),
            13 => 
            array (
                'id_satuanbiaya' => 15,
                'namabarang' => 'Jilid',
                'id_satuan' => 'eks',
                'hargasatuan' => 8000.0,
                'acuan' => 'Barang 12',
                'akun' => '521211',
                'kelompok' => 'Penggadaan',
            ),
            14 => 
            array (
                'id_satuanbiaya' => 16,
                'namabarang' => 'Analys System',
                'id_satuan' => 'org',
                'hargasatuan' => 75000.0,
                'acuan' => 'Barang 13',
                'akun' => '521213',
                'kelompok' => 'HONOR PROGRAMMER',
            ),
            15 => 
            array (
                'id_satuanbiaya' => 17,
                'namabarang' => 'Main Programmer',
                'id_satuan' => 'org',
                'hargasatuan' => 75000.0,
                'acuan' => 'Barang 14',
                'akun' => '521213',
                'kelompok' => 'HONOR PROGRAMMER',
            ),
            16 => 
            array (
                'id_satuanbiaya' => 18,
                'namabarang' => 'Programmer',
                'id_satuan' => 'org',
                'hargasatuan' => 60000.0,
                'acuan' => 'Barang 15',
                'akun' => '521213',
                'kelompok' => 'HONOR PROGRAMMER',
            ),
            17 => 
            array (
                'id_satuanbiaya' => 19,
                'namabarang' => 'Net Administrator',
                'id_satuan' => 'org',
                'hargasatuan' => 50000.0,
                'acuan' => 'Barang 16',
                'akun' => '521213',
                'kelompok' => 'HONOR PROGRAMMER',
            ),
            18 => 
            array (
                'id_satuanbiaya' => 20,
                'namabarang' => 'Snack',
                'id_satuan' => 'dos',
                'hargasatuan' => 15000.0,
                'acuan' => 'Snack',
                'akun' => '521219',
                'kelompok' => 'Konsumsi',
            ),
            19 => 
            array (
                'id_satuanbiaya' => 21,
                'namabarang' => 'Makan',
                'id_satuan' => 'dos',
                'hargasatuan' => 27000.0,
                'acuan' => 'Makan',
                'akun' => '521219',
                'kelompok' => 'Konsumsi',
            ),
            20 => 
            array (
                'id_satuanbiaya' => 22,
            'namabarang' => 'Toner Printer HP Laserjet Series 13 A (1300)',
                'id_satuan' => 'dos',
                'hargasatuan' => 1188300.0,
                'acuan' => 'Barang 1',
                'akun' => '521219',
                'kelompok' => 'ATK dan BHP',
            ),
            21 => 
            array (
                'id_satuanbiaya' => 23,
                'namabarang' => 'Snelhecter Platik/spring file',
                'id_satuan' => 'buah',
                'hargasatuan' => 5200.0,
                'acuan' => 'Barang 2',
                'akun' => '521219',
                'kelompok' => 'ATK dan BHP',
            ),
            22 => 
            array (
                'id_satuanbiaya' => 24,
                'namabarang' => 'Bollpoint Boxy hitam',
                'id_satuan' => 'buah',
                'hargasatuan' => 15600.0,
                'acuan' => 'Barang 3',
                'akun' => '521219',
                'kelompok' => 'ATK dan BHP',
            ),
            23 => 
            array (
                'id_satuanbiaya' => 25,
                'namabarang' => 'Block Note',
                'id_satuan' => 'buah',
                'hargasatuan' => 3000.0,
                'acuan' => '3000',
                'akun' => '521219',
                'kelompok' => 'ATK dan BHP',
            ),
            24 => 
            array (
                'id_satuanbiaya' => 26,
                'namabarang' => 'Pensil 2B Steadler',
                'id_satuan' => 'buah',
                'hargasatuan' => 10004.0,
                'acuan' => 'Barang 5',
                'akun' => '521219',
                'kelompok' => 'ATK dan BHP',
            ),
            25 => 
            array (
                'id_satuanbiaya' => 27,
                'namabarang' => 'Stabillo Bos',
                'id_satuan' => 'buah',
                'hargasatuan' => 9500.0,
                'acuan' => 'Barang 6',
                'akun' => '521219',
                'kelompok' => 'ATK dan BHP',
            ),
            26 => 
            array (
                'id_satuanbiaya' => 28,
                'namabarang' => 'Kertas HVS F4 70 gr Sidu',
                'id_satuan' => 'rim',
                'hargasatuan' => 38500.0,
                'acuan' => 'Barang 7',
                'akun' => '521219',
                'kelompok' => 'ATK dan BHP',
            ),
            27 => 
            array (
                'id_satuanbiaya' => 29,
            'namabarang' => 'Rautan Pensil Besar Angel-5 (meja) "kenko"',
                'id_satuan' => 'buah',
                'hargasatuan' => 49800.0,
                'acuan' => 'Barang 8',
                'akun' => '521219',
                'kelompok' => 'ATK dan BHP',
            ),
            28 => 
            array (
                'id_satuanbiaya' => 30,
                'namabarang' => 'Odner Besar Gungyu',
                'id_satuan' => 'buah',
                'hargasatuan' => 18900.0,
                'acuan' => 'Barang 9',
                'akun' => '521219',
                'kelompok' => 'ATK dan BHP',
            ),
            29 => 
            array (
                'id_satuanbiaya' => 31,
                'namabarang' => 'Amplop putih standar polos No. 90 jaya',
                'id_satuan' => 'dos',
                'hargasatuan' => 19700.0,
                'acuan' => 'Barang 10',
                'akun' => '521219',
                'kelompok' => 'ATK dan BHP',
            ),
            30 => 
            array (
                'id_satuanbiaya' => 32,
                'namabarang' => 'Foto Copy',
                'id_satuan' => 'lbr',
                'hargasatuan' => 200.0,
                'acuan' => 'Barang 11',
                'akun' => '521219',
                'kelompok' => 'Penggadaan',
            ),
            31 => 
            array (
                'id_satuanbiaya' => 33,
                'namabarang' => 'Jilid',
                'id_satuan' => 'eks',
                'hargasatuan' => 8000.0,
                'acuan' => 'Barang 12',
                'akun' => '521219',
                'kelompok' => 'Penggadaan',
            ),
            32 => 
            array (
                'id_satuanbiaya' => 34,
                'namabarang' => 'Biaya taxi',
                'id_satuan' => 'org',
                'hargasatuan' => NULL,
                'acuan' => NULL,
                'akun' => '524119',
                'kelompok' => NULL,
            ),
            33 => 
            array (
                'id_satuanbiaya' => 35,
                'namabarang' => 'Biaya penginapan',
                'id_satuan' => 'org',
                'hargasatuan' => NULL,
                'acuan' => NULL,
                'akun' => '524119',
                'kelompok' => NULL,
            ),
            34 => 
            array (
                'id_satuanbiaya' => 36,
                'namabarang' => 'Biaya Trasnsport PP',
                'id_satuan' => 'org',
                'hargasatuan' => NULL,
                'acuan' => NULL,
                'akun' => '524119',
                'kelompok' => NULL,
            ),
            35 => 
            array (
                'id_satuanbiaya' => 37,
                'namabarang' => 'Sewa gedung',
                'id_satuan' => 'Hari',
                'hargasatuan' => 1000000.0,
                'acuan' => 'Sewa property',
                'akun' => '522141',
                'kelompok' => 'Sewa ',
            ),
            36 => 
            array (
                'id_satuanbiaya' => 38,
                'namabarang' => 'Sewa mobil',
                'id_satuan' => 'Hari',
                'hargasatuan' => 1000000.0,
                'acuan' => 'Sewa property',
                'akun' => '522141',
                'kelompok' => 'Sewa ',
            ),
            37 => 
            array (
                'id_satuanbiaya' => 39,
                'namabarang' => 'Sewa ruangan',
                'id_satuan' => 'Hari',
                'hargasatuan' => 1000000.0,
                'acuan' => 'Sewa property',
                'akun' => '522141',
                'kelompok' => 'Sewa ',
            ),
            38 => 
            array (
                'id_satuanbiaya' => 40,
                'namabarang' => 'Narasumber',
                'id_satuan' => 'Jam',
                'hargasatuan' => 500000.0,
                'acuan' => NULL,
                'akun' => '522151',
                'kelompok' => 'Tenaga Ahli',
            ),
            39 => 
            array (
                'id_satuanbiaya' => 41,
                'namabarang' => 'Pembicara',
                'id_satuan' => 'Jam',
                'hargasatuan' => 500000.0,
                'acuan' => NULL,
                'akun' => '522151',
                'kelompok' => 'Tenaga Ahli',
            ),
            40 => 
            array (
                'id_satuanbiaya' => 42,
                'namabarang' => 'Pakar',
                'id_satuan' => 'Jam',
                'hargasatuan' => 500000.0,
                'acuan' => NULL,
                'akun' => '522151',
                'kelompok' => 'Tenaga Ahli',
            ),
            41 => 
            array (
                'id_satuanbiaya' => 43,
                'namabarang' => 'Biaya taxi',
                'id_satuan' => 'org',
                'hargasatuan' => 100000.0,
                'acuan' => '',
                'akun' => '524114',
                'kelompok' => 'Perjalanan Dinas',
            ),
            42 => 
            array (
                'id_satuanbiaya' => 44,
                'namabarang' => 'Biaya penginapan',
                'id_satuan' => 'org',
                'hargasatuan' => 100000.0,
                'acuan' => '',
                'akun' => '524114',
                'kelompok' => 'Perjalanan Dinas',
            ),
            43 => 
            array (
                'id_satuanbiaya' => 45,
                'namabarang' => 'Biaya Trasnsport PP',
                'id_satuan' => 'org',
                'hargasatuan' => 100000.0,
                'acuan' => '',
                'akun' => '524114',
                'kelompok' => 'Perjalanan Dinas',
            ),
            44 => 
            array (
                'id_satuanbiaya' => 46,
                'namabarang' => 'Biaya Notaris',
                'id_satuan' => 'dokumen',
                'hargasatuan' => 25000000.0,
                'acuan' => NULL,
                'akun' => '536111',
                'kelompok' => 'Biaya Pembagunan gedung',
            ),
            45 => 
            array (
                'id_satuanbiaya' => 47,
                'namabarang' => 'Biaya IMB',
                'id_satuan' => 'dokumen',
                'hargasatuan' => 25000000.0,
                'acuan' => NULL,
                'akun' => '536111',
                'kelompok' => 'Biaya Pembagunan gedung',
            ),
            46 => 
            array (
                'id_satuanbiaya' => 48,
                'namabarang' => 'BIaya Mendirikan Bangunan',
                'id_satuan' => 'lantai',
                'hargasatuan' => 2500000000.0,
                'acuan' => NULL,
                'akun' => '536111',
                'kelompok' => 'Biaya Pembagunan gedung',
            ),
            47 => 
            array (
                'id_satuanbiaya' => 49,
                'namabarang' => 'Pengecatan Gedung',
                'id_satuan' => 'Meter persegi',
                'hargasatuan' => 100000.0,
                'acuan' => NULL,
                'akun' => '523111',
                'kelompok' => 'Biaya Perawatan Gedung',
            ),
            48 => 
            array (
                'id_satuanbiaya' => 50,
                'namabarang' => 'perbaikan Keramik',
                'id_satuan' => 'Meter persegi',
                'hargasatuan' => 100000.0,
                'acuan' => NULL,
                'akun' => '523111',
                'kelompok' => 'Biaya Perawatan Gedung',
            ),
            49 => 
            array (
                'id_satuanbiaya' => 51,
                'namabarang' => 'Pebaikan Saluran Air',
                'id_satuan' => 'Meter persegi',
                'hargasatuan' => 100000.0,
                'acuan' => NULL,
                'akun' => '523111',
                'kelompok' => 'Biaya Perawatan Gedung',
            ),
            50 => 
            array (
                'id_satuanbiaya' => 52,
                'namabarang' => 'Beli Mesin Foto Copy',
                'id_satuan' => 'buah',
                'hargasatuan' => 10000000.0,
                'acuan' => NULL,
                'akun' => '532111',
                'kelompok' => 'Belanja Modal',
            ),
            51 => 
            array (
                'id_satuanbiaya' => 53,
                'namabarang' => 'Jasa Angkut',
                'id_satuan' => 'koli',
                'hargasatuan' => 10000.0,
                'acuan' => NULL,
                'akun' => '532111',
                'kelompok' => 'Belanja Modal',
            ),
            52 => 
            array (
                'id_satuanbiaya' => 54,
                'namabarang' => 'Jasa Installasi',
                'id_satuan' => 'paket',
                'hargasatuan' => 5000000.0,
                'acuan' => NULL,
                'akun' => '532111',
                'kelompok' => 'Belanja Modal',
            ),
        ));
        
        
    }
}