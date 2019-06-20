<?php

use Illuminate\Database\Seeder;

class StandartbiayaCopyTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('standartbiaya_copy')->delete();
        
        \DB::table('standartbiaya_copy')->insert(array (
            0 => 
            array (
                'id_standartbiaya' => 1,
                'namabarang' => 'Album Foto Besar',
                'hargasatuan' => 145500.0,
                'acuan' => 'Besar',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            1 => 
            array (
                'id_standartbiaya' => 2,
                'namabarang' => 'Amplop Coklat Polos ',
                'hargasatuan' => 1850.0,
                'acuan' => 'Airmail E312',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            2 => 
            array (
                'id_standartbiaya' => 3,
                'namabarang' => 'Amplop Putih Kabinet',
                'hargasatuan' => 18950.0,
                'acuan' => 'Paperline, Ukuran 110 x 230 mm, 80 gsm, 100 Pcs, peel & seal with security cuts, 90 PPS ',
                'id_satuan' => '5',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            3 => 
            array (
                'id_standartbiaya' => 4,
                'namabarang' => 'Amplop Putih Kecil 104.',
                'hargasatuan' => 12650.0,
                'acuan' => 'Paperline',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            4 => 
            array (
                'id_standartbiaya' => 5,
                'namabarang' => 'Arit/Sabit/bendo',
                'hargasatuan' => 135000.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            5 => 
            array (
                'id_standartbiaya' => 6,
            'namabarang' => 'Bag File (Lanscape)',
                'hargasatuan' => 9350.0,
                'acuan' => 'Eagle',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            6 => 
            array (
                'id_standartbiaya' => 7,
                'namabarang' => 'Bag file lanscape 5 warna',
                'hargasatuan' => 8500.0,
                'acuan' => 'Eagle',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            7 => 
            array (
                'id_standartbiaya' => 8,
                'namabarang' => 'Ballpoint Boxi Hitam',
                'hargasatuan' => 15600.0,
                'acuan' => 'Boxi',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            8 => 
            array (
                'id_standartbiaya' => 9,
                'namabarang' => 'Ballpoint Hitam AE7 Standard/Techno A7',
                'hargasatuan' => 15300.0,
                'acuan' => 'Standard',
                'id_satuan' => '6',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            9 => 
            array (
                'id_standartbiaya' => 10,
                'namabarang' => 'Ballpoint Hitam Faster C6/606',
                'hargasatuan' => 30750.0,
                'acuan' => 'Faster',
                'id_satuan' => '6',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            10 => 
            array (
                'id_standartbiaya' => 11,
                'namabarang' => 'Ballpoint Hitam Pentel',
                'hargasatuan' => 24250.0,
                'acuan' => 'Pentel',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            11 => 
            array (
                'id_standartbiaya' => 12,
                'namabarang' => 'Ballpoint Hitam Pilot BPPT',
                'hargasatuan' => 1950.0,
                'acuan' => 'Pilot',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            12 => 
            array (
                'id_standartbiaya' => 13,
                'namabarang' => 'Ballpoint Hitam Pilot GI',
                'hargasatuan' => 110700.0,
                'acuan' => 'Pilot',
                'id_satuan' => '6',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            13 => 
            array (
                'id_standartbiaya' => 14,
                'namabarang' => 'Ballpoint isi 4',
                'hargasatuan' => 23500.0,
                'acuan' => 'BIC',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            14 => 
            array (
                'id_standartbiaya' => 15,
                'namabarang' => 'Ballpoint merah',
                'hargasatuan' => 1375.0,
                'acuan' => 'Snowman',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            15 => 
            array (
                'id_standartbiaya' => 16,
                'namabarang' => 'Bantalan Stempel besar No. 2',
                'hargasatuan' => 57500.0,
                'acuan' => 'Artline',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            16 => 
            array (
                'id_standartbiaya' => 17,
                'namabarang' => 'Bantalan stempel No. 1 ',
                'hargasatuan' => 39000.0,
                'acuan' => 'Artline',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            17 => 
            array (
                'id_standartbiaya' => 18,
                'namabarang' => 'Bateray ',
                'hargasatuan' => 5500.0,
                'acuan' => 'Alkaline AA',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            18 => 
            array (
                'id_standartbiaya' => 19,
                'namabarang' => 'Batery AA',
                'hargasatuan' => 5500.0,
                'acuan' => 'Alkaline',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            19 => 
            array (
                'id_standartbiaya' => 20,
                'namabarang' => 'Batery AA',
                'hargasatuan' => 5500.0,
                'acuan' => 'Alkaline',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            20 => 
            array (
                'id_standartbiaya' => 21,
                'namabarang' => 'Batery AAA',
                'hargasatuan' => 5500.0,
                'acuan' => 'Alkaline',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            21 => 
            array (
                'id_standartbiaya' => 22,
                'namabarang' => 'Batery AAA',
                'hargasatuan' => 5500.0,
                'acuan' => 'Alkaline',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            22 => 
            array (
                'id_standartbiaya' => 23,
                'namabarang' => 'Batery Jam',
                'hargasatuan' => 5600.0,
                'acuan' => 'AA Alkaline ABC',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            23 => 
            array (
                'id_standartbiaya' => 24,
                'namabarang' => 'Batery Kotak',
                'hargasatuan' => 27500.0,
                'acuan' => 'Alkaline',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            24 => 
            array (
                'id_standartbiaya' => 25,
                'namabarang' => 'Batery Remote',
                'hargasatuan' => 5600.0,
                'acuan' => 'AAA Alkaline ABC',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            25 => 
            array (
                'id_standartbiaya' => 26,
                'namabarang' => 'Batery Tanggung ',
                'hargasatuan' => 3000.0,
                'acuan' => 'ABC R14C',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            26 => 
            array (
                'id_standartbiaya' => 27,
                'namabarang' => 'Batu Bateray AA/A2 Alkaline',
                'hargasatuan' => 8500.0,
                'acuan' => 'ABC',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            27 => 
            array (
                'id_standartbiaya' => 28,
                'namabarang' => 'Binder Clips No. 105',
                'hargasatuan' => 2800.0,
                'acuan' => 'Kenko',
                'id_satuan' => '5',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            28 => 
            array (
                'id_standartbiaya' => 29,
                'namabarang' => 'Binder Clips No. 111',
                'hargasatuan' => 6150.0,
                'acuan' => 'Kenko',
                'id_satuan' => '5',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            29 => 
            array (
                'id_standartbiaya' => 30,
                'namabarang' => 'Binder Clips No. 260',
                'hargasatuan' => 15375.0,
                'acuan' => 'Kenko',
                'id_satuan' => '5',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            30 => 
            array (
                'id_standartbiaya' => 31,
                'namabarang' => 'Binder Klip 107 ',
                'hargasatuan' => 3750.0,
                'acuan' => 'Joyko',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            31 => 
            array (
                'id_standartbiaya' => 32,
                'namabarang' => 'Binder Klip 155 ',
                'hargasatuan' => 6900.0,
                'acuan' => 'Joyko',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            32 => 
            array (
                'id_standartbiaya' => 33,
                'namabarang' => 'Binder Klip 200',
                'hargasatuan' => 12650.0,
                'acuan' => 'Joyko',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            33 => 
            array (
                'id_standartbiaya' => 34,
                'namabarang' => 'Blok Note',
                'hargasatuan' => 3000.0,
                'acuan' => 'Gelatik',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            34 => 
            array (
                'id_standartbiaya' => 35,
                'namabarang' => 'Bollpoint',
                'hargasatuan' => 2750.0,
                'acuan' => 'Faster',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            35 => 
            array (
                'id_standartbiaya' => 36,
                'namabarang' => 'Box File Karton',
                'hargasatuan' => 12300.0,
                'acuan' => 'Gungyu',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            36 => 
            array (
                'id_standartbiaya' => 37,
                'namabarang' => 'Box File Plastik',
                'hargasatuan' => 24600.0,
                'acuan' => 'Bantex',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            37 => 
            array (
                'id_standartbiaya' => 38,
                'namabarang' => 'Box File Plastik',
                'hargasatuan' => 16000.0,
                'acuan' => 'Bindex',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            38 => 
            array (
                'id_standartbiaya' => 39,
                'namabarang' => 'Box File Plastik',
                'hargasatuan' => 20000.0,
                'acuan' => 'Maspion',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            39 => 
            array (
                'id_standartbiaya' => 40,
            'namabarang' => 'Boxy (Merah/Hitam)',
                'hargasatuan' => 9460.0,
                'acuan' => 'Mistzubishi',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            40 => 
            array (
                'id_standartbiaya' => 41,
                'namabarang' => 'Buku Ekspedisi ',
                'hargasatuan' => 9000.0,
                'acuan' => 'Gelatik',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            41 => 
            array (
                'id_standartbiaya' => 42,
                'namabarang' => 'Buku Ekspedisi isi = 100 lembar',
                'hargasatuan' => 8800.0,
                'acuan' => 'Gelatik Kembar',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            42 => 
            array (
                'id_standartbiaya' => 43,
                'namabarang' => 'Buku Folio isi = 100 lembar',
                'hargasatuan' => 15950.0,
                'acuan' => 'Gelatik Kembar',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            43 => 
            array (
                'id_standartbiaya' => 44,
                'namabarang' => 'Buku Quarto isi = 100 lembar',
                'hargasatuan' => 8800.0,
                'acuan' => 'Gelatik Kembar',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            44 => 
            array (
                'id_standartbiaya' => 45,
                'namabarang' => 'Buku tulis folio 100 lbr',
                'hargasatuan' => 15500.0,
                'acuan' => 'Gelatik',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            45 => 
            array (
                'id_standartbiaya' => 46,
                'namabarang' => 'Buku tulis folio 100 lbr',
                'hargasatuan' => 17250.0,
                'acuan' => 'KIKI',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            46 => 
            array (
                'id_standartbiaya' => 47,
                'namabarang' => 'Buku tulis kwarto 100 lbr',
                'hargasatuan' => 6000.0,
                'acuan' => 'Mirage',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            47 => 
            array (
                'id_standartbiaya' => 48,
                'namabarang' => 'Buku tulis kwarto 100 lbr',
                'hargasatuan' => 8700.0,
                'acuan' => 'BO',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            48 => 
            array (
                'id_standartbiaya' => 49,
                'namabarang' => 'Business File',
                'hargasatuan' => 2970.0,
                'acuan' => 'Big',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            49 => 
            array (
                'id_standartbiaya' => 50,
                'namabarang' => 'Business File',
                'hargasatuan' => 3000.0,
                'acuan' => 'KJ 106',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            50 => 
            array (
                'id_standartbiaya' => 51,
                'namabarang' => 'Cairan Penghapus/Tip-ex',
                'hargasatuan' => 16000.0,
                'acuan' => 'Pentel',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            51 => 
            array (
                'id_standartbiaya' => 52,
                'namabarang' => 'Cartride Canon IP2870 Hitam',
                'hargasatuan' => 259300.0,
                'acuan' => 'Canon',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            52 => 
            array (
                'id_standartbiaya' => 53,
                'namabarang' => 'Cartride Canon IP2870 Warna',
                'hargasatuan' => 341550.0,
                'acuan' => 'Canon',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            53 => 
            array (
                'id_standartbiaya' => 54,
                'namabarang' => 'Carttrid Canon ip 2700',
                'hargasatuan' => 297250.0,
                'acuan' => 'Black',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            54 => 
            array (
                'id_standartbiaya' => 55,
                'namabarang' => 'Carttrid Canon ip 2700',
                'hargasatuan' => 360250.0,
                'acuan' => 'Colour',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            55 => 
            array (
                'id_standartbiaya' => 56,
                'namabarang' => 'Cat besi 1 kg',
                'hargasatuan' => 65000.0,
                'acuan' => '',
                'id_satuan' => '7',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            56 => 
            array (
                'id_standartbiaya' => 57,
            'namabarang' => 'Cat Pylox (hitam & putih)',
                'hargasatuan' => 26700.0,
                'acuan' => 'Pylox',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            57 => 
            array (
                'id_standartbiaya' => 58,
                'namabarang' => 'Catride Canon Pixma MP170 Hitam',
                'hargasatuan' => 283800.0,
                'acuan' => 'Canon',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            58 => 
            array (
                'id_standartbiaya' => 59,
                'namabarang' => 'Catride Canon Pixma MP170 Warna ',
                'hargasatuan' => 346500.0,
                'acuan' => 'Canon',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            59 => 
            array (
                'id_standartbiaya' => 60,
            'namabarang' => 'CD RW 80 mm - 70 MB (Blank)',
                'hargasatuan' => 4000.0,
                'acuan' => 'GT-Pro',
                'id_satuan' => '8',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            60 => 
            array (
                'id_standartbiaya' => 61,
            'namabarang' => 'CD RW 80 mm - 70 MB (casing)',
                'hargasatuan' => 16000.0,
                'acuan' => 'Verbatim',
                'id_satuan' => '8',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            61 => 
            array (
                'id_standartbiaya' => 62,
            'namabarang' => 'CD-R -80 mm - 70 MB (Blank) ',
                'hargasatuan' => 3400.0,
                'acuan' => 'GT-Pro',
                'id_satuan' => '8',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            62 => 
            array (
                'id_standartbiaya' => 63,
            'namabarang' => 'CD-R -80 mm - 70 MB (casing)',
                'hargasatuan' => 8750.0,
                'acuan' => 'Verbatim',
                'id_satuan' => '8',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            63 => 
            array (
                'id_standartbiaya' => 64,
            'namabarang' => 'CD-R -Mini (casing)',
                'hargasatuan' => 9850.0,
                'acuan' => 'Verbatim',
                'id_satuan' => '8',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            64 => 
            array (
                'id_standartbiaya' => 65,
                'namabarang' => 'CD-RW',
                'hargasatuan' => 5500.0,
                'acuan' => 'GT Pro',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            65 => 
            array (
                'id_standartbiaya' => 66,
                'namabarang' => 'Clem kabel no. 10',
                'hargasatuan' => 7500.0,
                'acuan' => '',
                'id_satuan' => '5',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            66 => 
            array (
                'id_standartbiaya' => 67,
                'namabarang' => 'Clem pvc s/b',
                'hargasatuan' => 17000.0,
                'acuan' => '',
                'id_satuan' => '5',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            67 => 
            array (
                'id_standartbiaya' => 68,
                'namabarang' => 'Clip kertas/Paper clips  No.3 ',
                'hargasatuan' => 2000.0,
                'acuan' => 'Atom',
                'id_satuan' => '5',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            68 => 
            array (
                'id_standartbiaya' => 69,
                'namabarang' => 'Clip kertas/Paper clips No.5',
                'hargasatuan' => 3700.0,
                'acuan' => 'Atom',
                'id_satuan' => '5',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            69 => 
            array (
                'id_standartbiaya' => 70,
                'namabarang' => 'Cutter Besar ',
                'hargasatuan' => 14500.0,
                'acuan' => 'Joyko L-500',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            70 => 
            array (
                'id_standartbiaya' => 71,
                'namabarang' => 'Cutter Kecil',
                'hargasatuan' => 5200.0,
                'acuan' => 'Joyko A-300',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            71 => 
            array (
                'id_standartbiaya' => 72,
                'namabarang' => 'Cutter Kecil A 100',
                'hargasatuan' => 5000.0,
                'acuan' => 'Kenko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            72 => 
            array (
                'id_standartbiaya' => 73,
                'namabarang' => 'Cutter L-500 "Kenko"',
                'hargasatuan' => 13000.0,
                'acuan' => 'Kenko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            73 => 
            array (
                'id_standartbiaya' => 74,
                'namabarang' => 'Desk Set',
                'hargasatuan' => 44200.0,
                'acuan' => 'Joyko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            74 => 
            array (
                'id_standartbiaya' => 75,
                'namabarang' => 'Double tape 1"',
                'hargasatuan' => 9900.0,
                'acuan' => 'JOYKO',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            75 => 
            array (
                'id_standartbiaya' => 76,
                'namabarang' => 'Double tape 1/2"',
                'hargasatuan' => 4950.0,
                'acuan' => 'JOYKO',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            76 => 
            array (
                'id_standartbiaya' => 77,
                'namabarang' => 'Double tape 1/4"',
                'hargasatuan' => 3075.0,
                'acuan' => 'JOYKO',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            77 => 
            array (
                'id_standartbiaya' => 78,
                'namabarang' => 'Double tape 2"',
                'hargasatuan' => 14800.0,
                'acuan' => 'JOYKO',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            78 => 
            array (
                'id_standartbiaya' => 79,
                'namabarang' => 'Double tape 24 mm x 10 Y',
                'hargasatuan' => 5000.0,
                'acuan' => 'Naichi',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            79 => 
            array (
                'id_standartbiaya' => 80,
                'namabarang' => 'Drawing Pen',
                'hargasatuan' => 7150.0,
                'acuan' => 'Snowman',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            80 => 
            array (
                'id_standartbiaya' => 81,
                'namabarang' => 'Drum Fotocopy Canon iR 2022N, Canon',
                'hargasatuan' => 2457000.0,
                'acuan' => 'Canon',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            81 => 
            array (
                'id_standartbiaya' => 82,
                'namabarang' => 'Drum Fotocopy Canon iR-2230',
                'hargasatuan' => 3610000.0,
                'acuan' => 'Canon',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            82 => 
            array (
                'id_standartbiaya' => 83,
                'namabarang' => 'DVD – R',
                'hargasatuan' => 4950.0,
                'acuan' => 'Verbatim',
                'id_satuan' => '8',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            83 => 
            array (
                'id_standartbiaya' => 84,
            'namabarang' => 'DVD - RW (casing)',
                'hargasatuan' => 22350.0,
                'acuan' => 'Verbatim',
                'id_satuan' => '8',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            84 => 
            array (
                'id_standartbiaya' => 85,
            'namabarang' => 'DVD - RW Mini (casing)',
                'hargasatuan' => 24600.0,
                'acuan' => 'Verbatim',
                'id_satuan' => '8',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            85 => 
            array (
                'id_standartbiaya' => 86,
                'namabarang' => 'DVD-RW',
                'hargasatuan' => 6900.0,
                'acuan' => 'GT Pro',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            86 => 
            array (
                'id_standartbiaya' => 87,
                'namabarang' => 'Expanding File',
                'hargasatuan' => 110000.0,
                'acuan' => 'Bantex',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            87 => 
            array (
                'id_standartbiaya' => 88,
                'namabarang' => 'Fiting lampu',
                'hargasatuan' => 14000.0,
                'acuan' => 'Broco',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            88 => 
            array (
                'id_standartbiaya' => 89,
                'namabarang' => 'Flasdisk ',
                'hargasatuan' => 94800.0,
                'acuan' => 'Thosiba 16 BG',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            89 => 
            array (
                'id_standartbiaya' => 90,
                'namabarang' => 'Flash Disk',
                'hargasatuan' => 145450.0,
                'acuan' => 'Kingstone, 16 GB',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            90 => 
            array (
                'id_standartbiaya' => 91,
                'namabarang' => 'Folio Garis',
                'hargasatuan' => 32900.0,
                'acuan' => 'Sinar Dunia',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            91 => 
            array (
                'id_standartbiaya' => 92,
                'namabarang' => 'Form. Peminjaman Alat',
                'hargasatuan' => 250.0,
                'acuan' => 'Kertas BC 1/2 folio cetak 1 muka',
                'id_satuan' => '11',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            92 => 
            array (
                'id_standartbiaya' => 93,
            'namabarang' => 'Gunting besar (u/ kertas/kain)',
                'hargasatuan' => 12000.0,
                'acuan' => 'Kenko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            93 => 
            array (
                'id_standartbiaya' => 94,
            'namabarang' => 'Gunting kecil (u/ kertas/kain)',
                'hargasatuan' => 5000.0,
                'acuan' => 'Kenko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            94 => 
            array (
                'id_standartbiaya' => 95,
                'namabarang' => 'Gunting Kertas Besar',
                'hargasatuan' => 11250.0,
                'acuan' => 'Gunindo KC-888',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            95 => 
            array (
                'id_standartbiaya' => 96,
            'namabarang' => 'Gunting sedang (u/ kertas/kain)',
                'hargasatuan' => 7500.0,
                'acuan' => 'Scissor',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            96 => 
            array (
                'id_standartbiaya' => 97,
                'namabarang' => 'Hardisk Eksternal ',
                'hargasatuan' => 1075250.0,
                'acuan' => 'Seagate Expansion 1 Tera',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            97 => 
            array (
                'id_standartbiaya' => 98,
                'namabarang' => 'Hardisk Eksternal 1 TB',
                'hargasatuan' => 1075250.0,
                'acuan' => 'Seagate',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            98 => 
            array (
                'id_standartbiaya' => 99,
            'namabarang' => 'Hole Punch No. 30 (Pelubang kertas) ',
                'hargasatuan' => 14800.0,
                'acuan' => 'Kenko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            99 => 
            array (
                'id_standartbiaya' => 100,
            'namabarang' => 'Hole Punch No. 40 (Pelubang kertas) ',
                'hargasatuan' => 24600.0,
                'acuan' => 'Kenko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            100 => 
            array (
                'id_standartbiaya' => 101,
            'namabarang' => 'Hole Punch No. 85 (Pelubang kertas) ',
                'hargasatuan' => 51200.0,
                'acuan' => 'Kenko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            101 => 
            array (
                'id_standartbiaya' => 102,
                'namabarang' => 'Isi Cutter Besar',
                'hargasatuan' => 5950.0,
                'acuan' => 'Joyko',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            102 => 
            array (
                'id_standartbiaya' => 103,
                'namabarang' => 'Isi Cutter Kecil',
                'hargasatuan' => 2850.0,
                'acuan' => 'Joyko',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            103 => 
            array (
                'id_standartbiaya' => 104,
                'namabarang' => 'Isi Stapler Besar',
                'hargasatuan' => 110650.0,
            'acuan' => 'No. 3 MAX besar ( isi 10 pak/box )',
                'id_satuan' => '2',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            104 => 
            array (
                'id_standartbiaya' => 105,
                'namabarang' => 'Isi Stapler Kecil',
                'hargasatuan' => 53600.0,
            'acuan' => 'No. 10 Max kecil ( isi 10 pak/box )',
                'id_satuan' => '2',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            105 => 
            array (
                'id_standartbiaya' => 106,
                'namabarang' => 'Isi Stapler No.10',
                'hargasatuan' => 3000.0,
                'acuan' => 'Great Wall',
                'id_satuan' => '5',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            106 => 
            array (
                'id_standartbiaya' => 107,
                'namabarang' => 'Isi Stapler No.369',
                'hargasatuan' => 5800.0,
                'acuan' => 'Great Wall',
                'id_satuan' => '5',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            107 => 
            array (
                'id_standartbiaya' => 108,
                'namabarang' => 'Isolasi 1"',
                'hargasatuan' => 5600.0,
                'acuan' => 'Daimaru',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            108 => 
            array (
                'id_standartbiaya' => 109,
                'namabarang' => 'Isolasi kecil 0,5 x 10',
                'hargasatuan' => 3100.0,
                'acuan' => 'Panfix',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            109 => 
            array (
                'id_standartbiaya' => 110,
                'namabarang' => 'Isolasi kecil 0,5 x 36',
                'hargasatuan' => 7600.0,
                'acuan' => 'Panfix',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            110 => 
            array (
                'id_standartbiaya' => 111,
                'namabarang' => 'Isolasi kecil 0,5 x 72',
                'hargasatuan' => 9950.0,
                'acuan' => 'Panfix',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            111 => 
            array (
                'id_standartbiaya' => 112,
                'namabarang' => 'Isolasi kecil 1 x 72',
                'hargasatuan' => 18650.0,
                'acuan' => 'Panfix',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            112 => 
            array (
                'id_standartbiaya' => 113,
                'namabarang' => 'Isolasi Kertas ',
                'hargasatuan' => 6000.0,
                'acuan' => 'Ekatape ukuran1 "',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            113 => 
            array (
                'id_standartbiaya' => 114,
                'namabarang' => 'Kabel ',
                'hargasatuan' => 425000.0,
                'acuan' => 'NYM, Sabut besar ',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            114 => 
            array (
                'id_standartbiaya' => 115,
                'namabarang' => 'Kabel LCD',
                'hargasatuan' => 63250.0,
                'acuan' => '5 meter',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            115 => 
            array (
                'id_standartbiaya' => 116,
                'namabarang' => 'Kabel merah, kuning, hitam',
                'hargasatuan' => 158000.0,
                'acuan' => 'NYA',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            116 => 
            array (
                'id_standartbiaya' => 117,
                'namabarang' => 'Kabel Roll',
                'hargasatuan' => 154850.0,
                'acuan' => 'UTICON, 10 meter',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            117 => 
            array (
                'id_standartbiaya' => 118,
                'namabarang' => 'Kabel Roll Uticon 15 m',
                'hargasatuan' => 176000.0,
                'acuan' => '',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            118 => 
            array (
                'id_standartbiaya' => 119,
                'namabarang' => 'Kain Majun',
                'hargasatuan' => 8500.0,
                'acuan' => '',
                'id_satuan' => '9',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            119 => 
            array (
                'id_standartbiaya' => 120,
                'namabarang' => 'Kalkulator 12 Digit',
                'hargasatuan' => 151800.0,
                'acuan' => 'Citizen CT-600',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            120 => 
            array (
                'id_standartbiaya' => 121,
                'namabarang' => 'Kantong Plastik Polines Besar ',
                'hargasatuan' => 80000.0,
            'acuan' => 'Uk. 68 x 40 cm.,Sablon  Logo Polines ( 1 pak isi 100 lbr ) ',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            121 => 
            array (
                'id_standartbiaya' => 122,
                'namabarang' => 'Kantong Plastik Polines Sedang ',
                'hargasatuan' => 67000.0,
            'acuan' => 'Uk. 58 x 33 cm., Sablon Logo Polines ( 1 pak isi 100 lbr )',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            122 => 
            array (
                'id_standartbiaya' => 123,
                'namabarang' => 'Kaos T Shirt',
                'hargasatuan' => 28350.0,
                'acuan' => 'Putih, Uk. L : 30, XL: 20',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            123 => 
            array (
                'id_standartbiaya' => 124,
                'namabarang' => 'Karet penghapus pensil ',
                'hargasatuan' => 6150.0,
                'acuan' => 'Pelikan',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            124 => 
            array (
                'id_standartbiaya' => 125,
                'namabarang' => 'Karet penghapus pensil besar',
                'hargasatuan' => 7400.0,
                'acuan' => 'Faber Castle',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            125 => 
            array (
                'id_standartbiaya' => 126,
                'namabarang' => 'Karet penghapus pensil kecil',
                'hargasatuan' => 2500.0,
                'acuan' => 'Faber Castle',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            126 => 
            array (
                'id_standartbiaya' => 127,
                'namabarang' => 'Kertas Asturo',
                'hargasatuan' => 2500.0,
                'acuan' => '',
                'id_satuan' => 'lbr',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            127 => 
            array (
                'id_standartbiaya' => 128,
                'namabarang' => 'Kertas Buram uk. Folio',
                'hargasatuan' => 22550.0,
                'acuan' => 'QQ',
                'id_satuan' => '15',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            128 => 
            array (
                'id_standartbiaya' => 129,
                'namabarang' => 'Kertas Continous Form ',
                'hargasatuan' => 271900.0,
                'acuan' => '2 Play uk.9,5" x 11", Sinar Dunia',
                'id_satuan' => '2',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            129 => 
            array (
                'id_standartbiaya' => 130,
                'namabarang' => 'Kertas Cover Bufallo A4/F4',
                'hargasatuan' => 43050.0,
                'acuan' => 'Sidu',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            130 => 
            array (
                'id_standartbiaya' => 131,
                'namabarang' => 'Kertas Cover Mika A3',
                'hargasatuan' => 86100.0,
                'acuan' => 'Sidu',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            131 => 
            array (
                'id_standartbiaya' => 132,
                'namabarang' => 'Kertas Cover Mika A4/F4',
                'hargasatuan' => 43050.0,
                'acuan' => 'Sidu',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            132 => 
            array (
                'id_standartbiaya' => 133,
                'namabarang' => 'Kertas Duplikator',
                'hargasatuan' => 41800.0,
                'acuan' => 'JITU',
                'id_satuan' => '15',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            133 => 
            array (
                'id_standartbiaya' => 134,
                'namabarang' => 'Kertas Duplikator',
                'hargasatuan' => 43850.0,
                'acuan' => 'IKA, Putih salju',
                'id_satuan' => '15',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            134 => 
            array (
                'id_standartbiaya' => 135,
                'namabarang' => 'Kertas F4/Folio 70 Gram',
                'hargasatuan' => 38500.0,
                'acuan' => 'Sinar Dunia',
                'id_satuan' => '15',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            135 => 
            array (
                'id_standartbiaya' => 136,
                'namabarang' => 'Kertas F4/Folio 80 Gram',
                'hargasatuan' => 45500.0,
                'acuan' => 'Sinar Dunia',
                'id_satuan' => '15',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            136 => 
            array (
                'id_standartbiaya' => 137,
                'namabarang' => 'Kertas folio garis',
                'hargasatuan' => 36500.0,
                'acuan' => 'Sidu',
                'id_satuan' => '15',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            137 => 
            array (
                'id_standartbiaya' => 138,
            'namabarang' => 'Kertas Foto/ Photo Paper 5760 dpi-A4(210x297mm)',
                'hargasatuan' => 43500.0,
                'acuan' => '',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            138 => 
            array (
                'id_standartbiaya' => 139,
                'namabarang' => 'Kertas Gambar ',
                'hargasatuan' => 600.0,
                'acuan' => 'BC Putih Ukuran A3',
                'id_satuan' => '11',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            139 => 
            array (
                'id_standartbiaya' => 140,
                'namabarang' => 'Kertas HVS A4 60 gram',
                'hargasatuan' => 29000.0,
                'acuan' => 'A4 60 gram',
                'id_satuan' => '15',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            140 => 
            array (
                'id_standartbiaya' => 141,
                'namabarang' => 'Kertas HVS A4 70 gram',
                'hargasatuan' => 35950.0,
                'acuan' => 'A4 70 gram',
                'id_satuan' => '15',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            141 => 
            array (
                'id_standartbiaya' => 142,
                'namabarang' => 'Kertas HVS A4 80 gram',
                'hargasatuan' => 39800.0,
                'acuan' => 'Sinar Dunia',
                'id_satuan' => '15',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            142 => 
            array (
                'id_standartbiaya' => 143,
                'namabarang' => 'Kertas HVS F4 70 gram',
                'hargasatuan' => 41000.0,
                'acuan' => 'F4 70 gram SiDU',
                'id_satuan' => '15',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            143 => 
            array (
                'id_standartbiaya' => 144,
                'namabarang' => 'Kertas HVS F4 80 gram',
                'hargasatuan' => 45500.0,
                'acuan' => 'Sinar Dunia',
                'id_satuan' => '15',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            144 => 
            array (
                'id_standartbiaya' => 145,
            'namabarang' => 'Kertas HVS Warna (Kuning Dan Merah)',
                'hargasatuan' => 58800.0,
                'acuan' => 'Sinar Dunia ukuran F4. 70 gram',
                'id_satuan' => '15',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            145 => 
            array (
                'id_standartbiaya' => 146,
                'namabarang' => 'Kertas Kalkir A3',
                'hargasatuan' => 1850.0,
                'acuan' => 'Diamant',
                'id_satuan' => '11',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            146 => 
            array (
                'id_standartbiaya' => 147,
                'namabarang' => 'Kertas Label',
                'hargasatuan' => 58000.0,
                'acuan' => 'Golden ',
                'id_satuan' => '13',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            147 => 
            array (
                'id_standartbiaya' => 148,
                'namabarang' => 'Kertas label No.103',
                'hargasatuan' => 2500.0,
                'acuan' => '3 M',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            148 => 
            array (
                'id_standartbiaya' => 149,
                'namabarang' => 'Kertas Manila putih',
                'hargasatuan' => 2460.0,
                'acuan' => '',
                'id_satuan' => '11',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            149 => 
            array (
                'id_standartbiaya' => 150,
            'namabarang' => 'Kertas Pos It warna warni 654 (5 warna) ',
                'hargasatuan' => 49200.0,
                'acuan' => '3 M',
                'id_satuan' => '17',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            150 => 
            array (
                'id_standartbiaya' => 151,
                'namabarang' => 'Kotak Tempat ATK Rak Susun',
                'hargasatuan' => 94600.0,
                'acuan' => 'V-Tec',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            151 => 
            array (
                'id_standartbiaya' => 152,
                'namabarang' => 'Kuas 2.5"',
                'hargasatuan' => 9000.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            152 => 
            array (
                'id_standartbiaya' => 153,
                'namabarang' => 'Kuas 3"',
                'hargasatuan' => 11000.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            153 => 
            array (
                'id_standartbiaya' => 154,
                'namabarang' => 'Kwitansi ',
                'hargasatuan' => 4600.0,
                'acuan' => 'Gelatik Kembar',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            154 => 
            array (
                'id_standartbiaya' => 155,
                'namabarang' => 'Lakban Hitam',
                'hargasatuan' => 15400.0,
                'acuan' => 'uk. 2" Daimaru',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            155 => 
            array (
                'id_standartbiaya' => 156,
                'namabarang' => 'Lakband Bening 2"',
                'hargasatuan' => 10000.0,
                'acuan' => 'Daimaru',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            156 => 
            array (
                'id_standartbiaya' => 157,
                'namabarang' => 'Lakband Hitam 1"',
                'hargasatuan' => 8150.0,
                'acuan' => 'Daimaru',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            157 => 
            array (
                'id_standartbiaya' => 158,
                'namabarang' => 'Lakband Hitam 1,5"',
                'hargasatuan' => 11350.0,
                'acuan' => 'Daimaru',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            158 => 
            array (
                'id_standartbiaya' => 159,
                'namabarang' => 'Lakband Hitam Besar ',
                'hargasatuan' => 15150.0,
                'acuan' => 'Daimaru ukuran 2"',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            159 => 
            array (
                'id_standartbiaya' => 160,
                'namabarang' => 'Lem Alteco',
                'hargasatuan' => 9450.0,
                'acuan' => 'Alteco 20 Gram',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            160 => 
            array (
                'id_standartbiaya' => 161,
                'namabarang' => 'Lem Castol',
                'hargasatuan' => 6250.0,
                'acuan' => 'Castol 21 ccm',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            161 => 
            array (
                'id_standartbiaya' => 162,
                'namabarang' => 'Lem Dlukol',
                'hargasatuan' => 3000.0,
                'acuan' => 'Dlukol',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            162 => 
            array (
                'id_standartbiaya' => 163,
                'namabarang' => 'Lem Kertas Besar',
                'hargasatuan' => 6350.0,
                'acuan' => 'Glukol',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            163 => 
            array (
                'id_standartbiaya' => 164,
                'namabarang' => 'Lem Pasta UHU',
                'hargasatuan' => 18400.0,
                'acuan' => 'UHU',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            164 => 
            array (
                'id_standartbiaya' => 165,
                'namabarang' => 'Lem Perekat Aica Aibon',
                'hargasatuan' => 13700.0,
                'acuan' => 'Aica Aibon',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            165 => 
            array (
                'id_standartbiaya' => 166,
                'namabarang' => 'Lem Stick',
                'hargasatuan' => 5000.0,
                'acuan' => 'Kenko 15 gr',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            166 => 
            array (
                'id_standartbiaya' => 167,
                'namabarang' => 'Lem Stick 25 gram',
                'hargasatuan' => 9850.0,
                'acuan' => 'Kenko',
                'id_satuan' => '18',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            167 => 
            array (
                'id_standartbiaya' => 168,
                'namabarang' => 'Lem Stick 8 gram',
                'hargasatuan' => 3700.0,
                'acuan' => 'Kenko',
                'id_satuan' => '18',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            168 => 
            array (
                'id_standartbiaya' => 169,
                'namabarang' => 'Map plastik kancing',
                'hargasatuan' => 3100.0,
                'acuan' => 'Eagle',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            169 => 
            array (
                'id_standartbiaya' => 170,
                'namabarang' => 'Map plastik tali',
                'hargasatuan' => 3100.0,
                'acuan' => 'Eagle',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            170 => 
            array (
                'id_standartbiaya' => 171,
                'namabarang' => 'Map Snelhecter',
                'hargasatuan' => 9450.0,
                'acuan' => 'Seagull',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            171 => 
            array (
                'id_standartbiaya' => 172,
                'namabarang' => 'Master Riso RZ330AW',
                'hargasatuan' => 1050000.0,
                'acuan' => 'Riso',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            172 => 
            array (
                'id_standartbiaya' => 173,
                'namabarang' => 'Master Risograph - RZ 330 AW',
                'hargasatuan' => 1043000.0,
                'acuan' => 'RZ',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            173 => 
            array (
                'id_standartbiaya' => 174,
                'namabarang' => 'Mouse Pad',
                'hargasatuan' => 12650.0,
                'acuan' => 'untuk Sablon Uk. A5',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            174 => 
            array (
                'id_standartbiaya' => 175,
                'namabarang' => 'Mouse PAD',
                'hargasatuan' => 22500.0,
                'acuan' => 'Microsof',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            175 => 
            array (
                'id_standartbiaya' => 176,
                'namabarang' => 'Odner Besar',
                'hargasatuan' => 18950.0,
                'acuan' => 'AKTA',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            176 => 
            array (
                'id_standartbiaya' => 177,
                'namabarang' => 'Odner Besar ',
                'hargasatuan' => 18950.0,
                'acuan' => 'Bantex',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            177 => 
            array (
                'id_standartbiaya' => 178,
                'namabarang' => 'Odner Kecil ',
                'hargasatuan' => 17700.0,
                'acuan' => 'Bantex',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            178 => 
            array (
                'id_standartbiaya' => 179,
                'namabarang' => 'Penggaris besi 1 m',
                'hargasatuan' => 33800.0,
                'acuan' => 'Kenko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            179 => 
            array (
                'id_standartbiaya' => 180,
                'namabarang' => 'Penggaris besi 30 cm',
                'hargasatuan' => 6150.0,
                'acuan' => 'Kenko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            180 => 
            array (
                'id_standartbiaya' => 181,
                'namabarang' => 'Penggaris besi 40 cm',
                'hargasatuan' => 12300.0,
                'acuan' => 'Kenko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            181 => 
            array (
                'id_standartbiaya' => 182,
                'namabarang' => 'Penggaris mika 1 m',
                'hargasatuan' => 10200.0,
                'acuan' => 'Butterfly',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            182 => 
            array (
                'id_standartbiaya' => 183,
                'namabarang' => 'Penggaris mika 30 cm',
                'hargasatuan' => 2500.0,
                'acuan' => 'Butterfly',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            183 => 
            array (
                'id_standartbiaya' => 184,
                'namabarang' => 'Penggaris mika 40 cm',
                'hargasatuan' => 7400.0,
                'acuan' => 'Butterfly',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            184 => 
            array (
                'id_standartbiaya' => 185,
                'namabarang' => 'Penghapus pensil besar',
                'hargasatuan' => 7400.0,
                'acuan' => 'Faber Castle',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            185 => 
            array (
                'id_standartbiaya' => 186,
                'namabarang' => 'Penghapus pensil kecil',
                'hargasatuan' => 2700.0,
                'acuan' => 'Faber Castle',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            186 => 
            array (
                'id_standartbiaya' => 187,
                'namabarang' => 'Penghapus pensil pelikan',
                'hargasatuan' => 6350.0,
                'acuan' => 'Pelikan',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            187 => 
            array (
                'id_standartbiaya' => 188,
                'namabarang' => 'Penghapus White Board',
                'hargasatuan' => 7450.0,
                'acuan' => 'Gunindo',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            188 => 
            array (
                'id_standartbiaya' => 189,
                'namabarang' => 'Penghapus White Board',
                'hargasatuan' => 7500.0,
                'acuan' => 'Gunindo',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            189 => 
            array (
                'id_standartbiaya' => 190,
                'namabarang' => 'Pensil 2B',
                'hargasatuan' => 3000.0,
                'acuan' => 'Steadler',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            190 => 
            array (
                'id_standartbiaya' => 191,
                'namabarang' => 'Pita Cash Register',
                'hargasatuan' => 56500.0,
            'acuan' => 'Bixolon (ABS) Model SRP-27511C Kompatible',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            191 => 
            array (
                'id_standartbiaya' => 192,
                'namabarang' => 'Pita Corection mesin ketik',
                'hargasatuan' => 6900.0,
                'acuan' => 'Fullmark',
                'id_satuan' => '15',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            192 => 
            array (
                'id_standartbiaya' => 193,
                'namabarang' => 'Pita Correction',
                'hargasatuan' => 13900.0,
                'acuan' => 'Brother 1030',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            193 => 
            array (
                'id_standartbiaya' => 194,
                'namabarang' => 'Pita Mesin Ketik Elektronik',
                'hargasatuan' => 82200.0,
                'acuan' => 'Brother EM430 Compatible',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            194 => 
            array (
                'id_standartbiaya' => 195,
                'namabarang' => 'Pita Mesin Ketik Elektronik',
                'hargasatuan' => 63250.0,
                'acuan' => 'Compact 5 DM Olympia Compatible',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            195 => 
            array (
                'id_standartbiaya' => 196,
                'namabarang' => 'Pita Mesin Ketik Elektronik ',
                'hargasatuan' => 107500.0,
                'acuan' => 'Brother 1030 original',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            196 => 
            array (
                'id_standartbiaya' => 197,
                'namabarang' => 'Pita Mesin Ketik Manual',
                'hargasatuan' => 37250.0,
                'acuan' => 'Swallow',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            197 => 
            array (
                'id_standartbiaya' => 198,
                'namabarang' => 'Pita Printer',
                'hargasatuan' => 56925.0,
                'acuan' => 'EPSON SO15632',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            198 => 
            array (
                'id_standartbiaya' => 199,
                'namabarang' => 'Pita Printer Epson LQ 2170/2180 original',
                'hargasatuan' => 127600.0,
                'acuan' => 'Epson',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            199 => 
            array (
                'id_standartbiaya' => 200,
                'namabarang' => 'Pita Printer Epson LQ 310 original',
                'hargasatuan' => 46200.0,
                'acuan' => 'Epson',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            200 => 
            array (
                'id_standartbiaya' => 201,
            'namabarang' => 'Plastik bening tebal (100 m)',
                'hargasatuan' => 350000.0,
                'acuan' => '',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            201 => 
            array (
                'id_standartbiaya' => 202,
                'namabarang' => 'Plastik Laminating Ukuran Foilo',
                'hargasatuan' => 101000.0,
                'acuan' => 'Toho',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            202 => 
            array (
                'id_standartbiaya' => 203,
            'namabarang' => 'Post it (kecil)',
                'hargasatuan' => 10000.0,
                'acuan' => 'Pronto',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            203 => 
            array (
                'id_standartbiaya' => 204,
            'namabarang' => 'Post It (Sign Here)',
                'hargasatuan' => 27150.0,
                'acuan' => 'Pos It 3M',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            204 => 
            array (
                'id_standartbiaya' => 205,
            'namabarang' => 'Rautan pensil besar  Angel-5 (meja)',
                'hargasatuan' => 49800.0,
                'acuan' => 'Kenko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            205 => 
            array (
                'id_standartbiaya' => 206,
                'namabarang' => 'Rautan pensil kecil ',
                'hargasatuan' => 2500.0,
                'acuan' => 'Kenko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            206 => 
            array (
                'id_standartbiaya' => 207,
            'namabarang' => 'Rautan pensil sedang  A-3  (meja)',
                'hargasatuan' => 36900.0,
                'acuan' => 'Kenko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            207 => 
            array (
                'id_standartbiaya' => 208,
                'namabarang' => 'Refil Spidol Marker/Permanen',
                'hargasatuan' => 12300.0,
                'acuan' => 'Snowman',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            208 => 
            array (
                'id_standartbiaya' => 209,
                'namabarang' => 'Refil Spidol Whiteboard',
                'hargasatuan' => 15800.0,
                'acuan' => 'Snowman',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            209 => 
            array (
                'id_standartbiaya' => 210,
                'namabarang' => 'Snelhecter',
                'hargasatuan' => 9350.0,
                'acuan' => 'Seagul',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            210 => 
            array (
                'id_standartbiaya' => 211,
                'namabarang' => 'Spanduk/MMT',
                'hargasatuan' => 25000.0,
                'acuan' => '',
                'id_satuan' => '12',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            211 => 
            array (
                'id_standartbiaya' => 212,
                'namabarang' => 'Spidol Besar',
                'hargasatuan' => 15400.0,
                'acuan' => 'Snowman 500',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            212 => 
            array (
                'id_standartbiaya' => 213,
            'namabarang' => 'Spidol Board marker Hitam, Biru (1 pak isi 12 bh)',
                'hargasatuan' => 85250.0,
                'acuan' => 'Snowman',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            213 => 
            array (
                'id_standartbiaya' => 214,
                'namabarang' => 'Spidol Boardmaker',
                'hargasatuan' => 7000.0,
                'acuan' => 'Hitam',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            214 => 
            array (
                'id_standartbiaya' => 215,
                'namabarang' => 'Spidol Broad Maker Biru ',
                'hargasatuan' => 91500.0,
            'acuan' => 'Snowman ( 1 pak isi 12 Buah ) ',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            215 => 
            array (
                'id_standartbiaya' => 216,
                'namabarang' => 'Spidol Broad Maker Hitam ',
                'hargasatuan' => 91500.0,
            'acuan' => 'Snowman ( 1 pak isi 12 Buah ) ',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            216 => 
            array (
                'id_standartbiaya' => 217,
                'namabarang' => 'Spidol Broad Maker Merah ',
                'hargasatuan' => 91500.0,
            'acuan' => 'Snowman ( 1 pak isi 12 Buah ) ',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            217 => 
            array (
                'id_standartbiaya' => 218,
            'namabarang' => 'Spidol Permanen  (Biru, Merah, Hitam)',
                'hargasatuan' => 6000.0,
                'acuan' => 'Snowman',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            218 => 
            array (
                'id_standartbiaya' => 219,
                'namabarang' => 'Spidol Permanent',
                'hargasatuan' => 6300.0,
                'acuan' => 'Snowman',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            219 => 
            array (
                'id_standartbiaya' => 220,
                'namabarang' => 'Spidol Permanent kecil',
                'hargasatuan' => 1250.0,
                'acuan' => 'Snowman',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            220 => 
            array (
                'id_standartbiaya' => 221,
                'namabarang' => 'Stabillo',
                'hargasatuan' => 8800.0,
                'acuan' => 'Boss',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            221 => 
            array (
                'id_standartbiaya' => 222,
                'namabarang' => 'Stapler Besar ',
                'hargasatuan' => 70800.0,
                'acuan' => 'MAX HD-50',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            222 => 
            array (
                'id_standartbiaya' => 223,
                'namabarang' => 'Stapler Besar HD 50',
                'hargasatuan' => 18150.0,
                'acuan' => 'Kenko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            223 => 
            array (
                'id_standartbiaya' => 224,
                'namabarang' => 'Stapler kecil ',
                'hargasatuan' => 17700.0,
                'acuan' => 'MAX HD-10',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            224 => 
            array (
                'id_standartbiaya' => 225,
                'namabarang' => 'Stapler Kecil HD 10',
                'hargasatuan' => 7150.0,
                'acuan' => 'Kenko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            225 => 
            array (
                'id_standartbiaya' => 226,
                'namabarang' => 'Steaker',
                'hargasatuan' => 20750.0,
                'acuan' => '3 Slot utk Laptop, BROCO',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            226 => 
            array (
                'id_standartbiaya' => 227,
            'namabarang' => 'Stecker (cop)',
                'hargasatuan' => 20750.0,
                'acuan' => 'Stop kontak lampu',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            227 => 
            array (
                'id_standartbiaya' => 228,
                'namabarang' => 'Stopmap Kertas Folio',
                'hargasatuan' => 400.0,
                'acuan' => 'Panda',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            228 => 
            array (
                'id_standartbiaya' => 229,
                'namabarang' => 'Stopmap plastik jepit',
                'hargasatuan' => 65300.0,
                'acuan' => 'Eagle',
                'id_satuan' => '5',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            229 => 
            array (
                'id_standartbiaya' => 230,
                'namabarang' => 'Stopmap plastik/clips file',
                'hargasatuan' => 6800.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            230 => 
            array (
                'id_standartbiaya' => 231,
                'namabarang' => 'T dos listrik',
                'hargasatuan' => 6000.0,
                'acuan' => 'Broco',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            231 => 
            array (
                'id_standartbiaya' => 232,
                'namabarang' => 'T Listrik/Stop Kontak',
                'hargasatuan' => 22000.0,
                'acuan' => 'BROCO',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            232 => 
            array (
                'id_standartbiaya' => 233,
                'namabarang' => 'Tali rafia 1 kg',
                'hargasatuan' => 21000.0,
                'acuan' => '',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            233 => 
            array (
                'id_standartbiaya' => 234,
                'namabarang' => 'Tempat ATK Kotak Ukuran A4',
                'hargasatuan' => 27500.0,
                'acuan' => 'Maspion',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            234 => 
            array (
                'id_standartbiaya' => 235,
                'namabarang' => 'Terminal blok listrik isi 12',
                'hargasatuan' => 135000.0,
                'acuan' => 'Legrand',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            235 => 
            array (
                'id_standartbiaya' => 236,
                'namabarang' => 'Terminal PCB isi 2',
                'hargasatuan' => 5000.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            236 => 
            array (
                'id_standartbiaya' => 237,
                'namabarang' => 'Terminal PCB isi 3',
                'hargasatuan' => 8000.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            237 => 
            array (
                'id_standartbiaya' => 238,
            'namabarang' => 'Tinta Board marker Hitam, Biru (1 pak isi 12 bh)',
                'hargasatuan' => 182150.0,
                'acuan' => 'Snowman',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            238 => 
            array (
                'id_standartbiaya' => 239,
                'namabarang' => 'Tinta Broad Maker Hitam, Biru ',
                'hargasatuan' => 194500.0,
            'acuan' => 'Snowman ( 1 pak isi 12 Buah ) ',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            239 => 
            array (
                'id_standartbiaya' => 240,
                'namabarang' => 'Tinta Epson L210',
                'hargasatuan' => 404800.0,
                'acuan' => 'Epson, 70 ml.',
                'id_satuan' => '17',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            240 => 
            array (
                'id_standartbiaya' => 241,
                'namabarang' => 'Tinta Fax KX-FA93A/KX-FA57E',
                'hargasatuan' => 75900.0,
                'acuan' => 'Panasonic',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            241 => 
            array (
                'id_standartbiaya' => 242,
                'namabarang' => 'Tinta Riso RZ330AW',
                'hargasatuan' => 570500.0,
                'acuan' => 'Riso',
                'id_satuan' => '18',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            242 => 
            array (
                'id_standartbiaya' => 243,
                'namabarang' => 'Tinta Stempel Ungu',
                'hargasatuan' => 32200.0,
                'acuan' => 'Zenith',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            243 => 
            array (
                'id_standartbiaya' => 244,
                'namabarang' => 'Tipe Dispenser',
                'hargasatuan' => 23000.0,
                'acuan' => 'Joyko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            244 => 
            array (
                'id_standartbiaya' => 245,
                'namabarang' => 'Toner Printer HP  78 A Original',
                'hargasatuan' => 1232000.0,
                'acuan' => 'HP',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            245 => 
            array (
                'id_standartbiaya' => 246,
                'namabarang' => 'Toner Printer HP 60',
                'hargasatuan' => 270000.0,
                'acuan' => 'HP',
                'id_satuan' => '5',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            246 => 
            array (
                'id_standartbiaya' => 247,
                'namabarang' => 'Toner Printer HP 78A',
                'hargasatuan' => 1125000.0,
                'acuan' => 'HP',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            247 => 
            array (
                'id_standartbiaya' => 248,
                'namabarang' => 'Toner Printer HP Laserjat Seri 12 A EIKONA',
                'hargasatuan' => 528700.0,
                'acuan' => 'EIKONA',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            248 => 
            array (
                'id_standartbiaya' => 249,
                'namabarang' => 'Toner Printer HP Laserjat Seri 12 A Original',
                'hargasatuan' => 1239000.0,
                'acuan' => 'HP',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            249 => 
            array (
                'id_standartbiaya' => 250,
                'namabarang' => 'Toner Printer HP Laserjat Seri 35 A EIKONA',
                'hargasatuan' => 528000.0,
                'acuan' => 'EIKONA',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            250 => 
            array (
                'id_standartbiaya' => 251,
                'namabarang' => 'Toner Printer HP Laserjat Seri 35 A Original',
                'hargasatuan' => 1075250.0,
                'acuan' => 'HP',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            251 => 
            array (
                'id_standartbiaya' => 252,
                'namabarang' => 'Toner Printer HP Laserjat Seri 49 A Original',
                'hargasatuan' => 1606550.0,
                'acuan' => 'HP',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            252 => 
            array (
                'id_standartbiaya' => 253,
                'namabarang' => 'Toner Printer HP Laserjat Seri 85 A EIKONA',
                'hargasatuan' => 656350.0,
                'acuan' => 'EIKONA',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            253 => 
            array (
                'id_standartbiaya' => 254,
                'namabarang' => 'Toner Printer HP Laserjat Seri 85 A Maximus',
                'hargasatuan' => 315700.0,
                'acuan' => 'Maximus',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            254 => 
            array (
                'id_standartbiaya' => 255,
                'namabarang' => 'Toner Printer HP Laserjat Seri 85 A Original',
                'hargasatuan' => 1089000.0,
                'acuan' => 'HP',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            255 => 
            array (
                'id_standartbiaya' => 256,
                'namabarang' => 'Toner Printer HP Laserjat Seri 85 X ETON',
                'hargasatuan' => 550000.0,
                'acuan' => 'Eton',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            256 => 
            array (
                'id_standartbiaya' => 257,
                'namabarang' => 'Toner Printer/fotocopy',
                'hargasatuan' => 1771000.0,
                'acuan' => 'Panasonic KX-FL8802',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            257 => 
            array (
                'id_standartbiaya' => 258,
                'namabarang' => 'Toner/Cartridge HPLaser Jet  P1102',
                'hargasatuan' => 926000.0,
                'acuan' => 'Catridge HP 85A Original',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            258 => 
            array (
                'id_standartbiaya' => 259,
                'namabarang' => 'Toner/Cartridge HPLaser Jet P 1006',
                'hargasatuan' => 935000.0,
                'acuan' => 'Catridge HP 35A Original',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            259 => 
            array (
                'id_standartbiaya' => 260,
                'namabarang' => 'Usuk 5x7x400',
                'hargasatuan' => 113150.0,
                'acuan' => 'Kruwing',
                'id_satuan' => '1 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            260 => 
            array (
                'id_standartbiaya' => 261,
                'namabarang' => 'Papan 2x20x400',
                'hargasatuan' => 157500.0,
                'acuan' => 'Kruwing',
                'id_satuan' => '11 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            261 => 
            array (
                'id_standartbiaya' => 262,
                'namabarang' => 'Kayu 6x12x400',
                'hargasatuan' => 227000.0,
                'acuan' => 'Kruwing',
                'id_satuan' => '1 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            262 => 
            array (
                'id_standartbiaya' => 263,
                'namabarang' => 'Kayu Ram 4x12x400',
                'hargasatuan' => 170700.0,
                'acuan' => 'Kruwing',
                'id_satuan' => '1 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            263 => 
            array (
                'id_standartbiaya' => 264,
                'namabarang' => 'Multiplek 18 mm',
                'hargasatuan' => 310000.0,
                'acuan' => 'Mawar',
                'id_satuan' => '3 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            264 => 
            array (
                'id_standartbiaya' => 265,
                'namabarang' => 'Multiplek 15 mm',
                'hargasatuan' => 272000.0,
                'acuan' => 'Mawar',
                'id_satuan' => '3 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            265 => 
            array (
                'id_standartbiaya' => 266,
                'namabarang' => 'Paku 2"',
                'hargasatuan' => 16200.0,
                'acuan' => '2"',
                'id_satuan' => '9 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            266 => 
            array (
                'id_standartbiaya' => 267,
                'namabarang' => 'Paku 1 1/2"',
                'hargasatuan' => 16200.0,
                'acuan' => '1 1/2"',
                'id_satuan' => '9 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            267 => 
            array (
                'id_standartbiaya' => 268,
                'namabarang' => 'Kantong Plastik 7 Kg',
                'hargasatuan' => 94850.0,
                'acuan' => '25x40x05 mm',
                'id_satuan' => '14 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            268 => 
            array (
                'id_standartbiaya' => 269,
                'namabarang' => 'Benang Tukang',
                'hargasatuan' => 6000.0,
                'acuan' => 'Nylon',
                'id_satuan' => '3 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            269 => 
            array (
                'id_standartbiaya' => 270,
                'namabarang' => 'Cat Humer Tune',
                'hargasatuan' => 88550.0,
                'acuan' => 'Kaleng',
                'id_satuan' => '9 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            270 => 
            array (
                'id_standartbiaya' => 271,
                'namabarang' => 'Mur Baut M10x25',
                'hargasatuan' => 5900.0,
                'acuan' => 'Besi',
                'id_satuan' => '3 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            271 => 
            array (
                'id_standartbiaya' => 272,
                'namabarang' => 'Masker',
                'hargasatuan' => 3000.0,
                'acuan' => 'Kain',
                'id_satuan' => '3 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            272 => 
            array (
                'id_standartbiaya' => 273,
                'namabarang' => 'Mata Gergaji Besi',
                'hargasatuan' => 16200.0,
                'acuan' => 'Sandflex',
                'id_satuan' => '3 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            273 => 
            array (
                'id_standartbiaya' => 274,
                'namabarang' => 'Paku Payung Kecil',
                'hargasatuan' => 28900.0,
                'acuan' => '1"',
                'id_satuan' => '9 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            274 => 
            array (
                'id_standartbiaya' => 275,
                'namabarang' => 'Paku Reng ',
                'hargasatuan' => 21450.0,
                'acuan' => '1"',
                'id_satuan' => '9 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            275 => 
            array (
                'id_standartbiaya' => 276,
                'namabarang' => 'Pembantu Peneliti / Perekayasa',
                'hargasatuan' => 25000.0,
                'acuan' => '-',
                'id_satuan' => '19',
                'id_akun' => 5,
                'id_kelompok' => 12,
            ),
            276 => 
            array (
                'id_standartbiaya' => 277,
                'namabarang' => 'Jilid Hard cover',
                'hargasatuan' => 20000.0,
                'acuan' => '-',
                'id_satuan' => '37',
                'id_akun' => 1,
                'id_kelompok' => 8,
            ),
            277 => 
            array (
                'id_standartbiaya' => 278,
                'namabarang' => 'Jilid Soft Cover',
                'hargasatuan' => 10000.0,
                'acuan' => '-',
                'id_satuan' => '37',
                'id_akun' => 1,
                'id_kelompok' => 8,
            ),
            278 => 
            array (
                'id_standartbiaya' => 279,
                'namabarang' => 'Jilid Sederhana',
                'hargasatuan' => 8000.0,
                'acuan' => '-',
                'id_satuan' => '37',
                'id_akun' => 1,
                'id_kelompok' => 8,
            ),
            279 => 
            array (
                'id_standartbiaya' => 280,
                'namabarang' => 'Sewa gedung Pertemua',
                'hargasatuan' => 13125000.0,
                'acuan' => '-',
                'id_satuan' => '38',
                'id_akun' => 7,
                'id_kelompok' => 30,
            ),
            280 => 
            array (
                'id_standartbiaya' => 281,
                'namabarang' => 'Honorium Nara Sumber/Pembahas',
                'hargasatuan' => 1700000.0,
                'acuan' => '-',
                'id_satuan' => '19',
                'id_akun' => 8,
                'id_kelompok' => 33,
            ),
            281 => 
            array (
                'id_standartbiaya' => 282,
                'namabarang' => 'Makan',
                'hargasatuan' => 27000.0,
                'acuan' => '-',
                'id_satuan' => '35',
                'id_akun' => 1,
                'id_kelompok' => 9,
            ),
            282 => 
            array (
                'id_standartbiaya' => 283,
            'namabarang' => 'Jamuan Makan (Prasmanan)',
                'hargasatuan' => 38000.0,
                'acuan' => '-',
                'id_satuan' => '35',
                'id_akun' => 1,
                'id_kelompok' => 9,
            ),
            283 => 
            array (
                'id_standartbiaya' => 284,
                'namabarang' => 'Jamuan Minuman dan makanan kecil',
                'hargasatuan' => 15000.0,
                'acuan' => '-',
                'id_satuan' => '35',
                'id_akun' => 1,
                'id_kelompok' => 9,
            ),
            284 => 
            array (
                'id_standartbiaya' => 285,
                'namabarang' => 'System Analis',
                'hargasatuan' => 75000.0,
                'acuan' => '-',
                'id_satuan' => '36',
                'id_akun' => 8,
                'id_kelompok' => 34,
            ),
            285 => 
            array (
                'id_standartbiaya' => 286,
                'namabarang' => 'Main Programmer',
                'hargasatuan' => 75000.0,
                'acuan' => '-',
                'id_satuan' => '36',
                'id_akun' => 8,
                'id_kelompok' => 34,
            ),
            286 => 
            array (
                'id_standartbiaya' => 287,
                'namabarang' => 'Programmer',
                'hargasatuan' => 60000.0,
                'acuan' => '-',
                'id_satuan' => '36',
                'id_akun' => 8,
                'id_kelompok' => 34,
            ),
            287 => 
            array (
                'id_standartbiaya' => 288,
                'namabarang' => 'Net Administrator',
                'hargasatuan' => 50000.0,
                'acuan' => '-',
                'id_satuan' => '36',
                'id_akun' => 8,
                'id_kelompok' => 34,
            ),
            288 => 
            array (
                'id_standartbiaya' => 289,
                'namabarang' => 'Pengarah',
                'hargasatuan' => 500000.0,
                'acuan' => '-',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 35,
            ),
            289 => 
            array (
                'id_standartbiaya' => 290,
                'namabarang' => 'Penanggung Jawab',
                'hargasatuan' => 450000.0,
                'acuan' => '-',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 35,
            ),
            290 => 
            array (
                'id_standartbiaya' => 291,
                'namabarang' => 'Ketua',
                'hargasatuan' => 400000.0,
                'acuan' => '-',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 35,
            ),
            291 => 
            array (
                'id_standartbiaya' => 292,
                'namabarang' => 'Wakil Ketua',
                'hargasatuan' => 350000.0,
                'acuan' => '-',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 35,
            ),
            292 => 
            array (
                'id_standartbiaya' => 293,
                'namabarang' => 'Sekretaris',
                'hargasatuan' => 300000.0,
                'acuan' => '-',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 35,
            ),
            293 => 
            array (
                'id_standartbiaya' => 294,
                'namabarang' => 'Anggota',
                'hargasatuan' => 300000.0,
                'acuan' => '-',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 35,
            ),
            294 => 
            array (
                'id_standartbiaya' => 295,
                'namabarang' => 'uang saku rapat golongan I dan II',
                'hargasatuan' => 300000.0,
                'acuan' => '-',
                'id_satuan' => '35',
                'id_akun' => 9,
                'id_kelompok' => 36,
            ),
            295 => 
            array (
                'id_standartbiaya' => 296,
                'namabarang' => 'uang saku rapat golongan III',
                'hargasatuan' => 350000.0,
                'acuan' => '-',
                'id_satuan' => '35',
                'id_akun' => 9,
                'id_kelompok' => 36,
            ),
            296 => 
            array (
                'id_standartbiaya' => 297,
                'namabarang' => 'uang saku rapat golongan IV',
                'hargasatuan' => 400000.0,
                'acuan' => '-',
                'id_satuan' => '35',
                'id_akun' => 9,
                'id_kelompok' => 36,
            ),
            297 => 
            array (
                'id_standartbiaya' => 298,
                'namabarang' => 'Koordinator Peneliti / Perekayasa',
                'hargasatuan' => 420000.0,
                'acuan' => '-',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 12,
            ),
            298 => 
            array (
                'id_standartbiaya' => 299,
                'namabarang' => 'Sekretariat Peneliti / Perekayasa',
                'hargasatuan' => 300000.0,
                'acuan' => '-',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 12,
            ),
            299 => 
            array (
                'id_standartbiaya' => 300,
                'namabarang' => 'Pengolah data ',
                'hargasatuan' => 1540000.0,
                'acuan' => '-',
                'id_satuan' => '21',
                'id_akun' => 5,
                'id_kelompok' => 12,
            ),
            300 => 
            array (
                'id_standartbiaya' => 301,
                'namabarang' => 'Petugas Survey',
                'hargasatuan' => 8000.0,
                'acuan' => '-',
                'id_satuan' => '22',
                'id_akun' => 5,
                'id_kelompok' => 12,
            ),
            301 => 
            array (
                'id_standartbiaya' => 302,
                'namabarang' => 'Pembantu Lapangan',
                'hargasatuan' => 80000.0,
                'acuan' => '-',
                'id_satuan' => '23',
                'id_akun' => 5,
                'id_kelompok' => 12,
            ),
            302 => 
            array (
                'id_standartbiaya' => 303,
                'namabarang' => 'Honorarium Reviewer Proposal',
                'hargasatuan' => 1000000.0,
                'acuan' => '-',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 48,
            ),
            303 => 
            array (
                'id_standartbiaya' => 304,
            'namabarang' => 'Honorarium Reviewer Keluaran penelitian (Laporan Antara)',
                'hargasatuan' => 300000.0,
                'acuan' => '-',
                'id_satuan' => '24',
                'id_akun' => 5,
                'id_kelompok' => 13,
            ),
            304 => 
            array (
                'id_standartbiaya' => 305,
                'namabarang' => 'Honorarium Reviewer Keluaran Penelitian ',
                'hargasatuan' => 500000.0,
                'acuan' => '-',
                'id_satuan' => '24',
                'id_akun' => 5,
                'id_kelompok' => 48,
            ),
            305 => 
            array (
                'id_standartbiaya' => 307,
                'namabarang' => 'coba 2',
                'hargasatuan' => 15000.0,
                'acuan' => '-',
                'id_satuan' => '0',
                'id_akun' => 28,
                'id_kelompok' => 6,
            ),
            306 => 
            array (
                'id_standartbiaya' => 309,
                'namabarang' => 'Menteri/ Pejabat setingkat Menteri/Pejabat Negara Lainnya / yang disetarakan',
                'hargasatuan' => 1700000.0,
                'acuan' => '-',
                'id_satuan' => '19',
                'id_akun' => 8,
                'id_kelompok' => 33,
            ),
            307 => 
            array (
                'id_standartbiaya' => 310,
                'namabarang' => 'Pejabat  Eselon 1 atau yang disetarakan',
                'hargasatuan' => 1400000.0,
                'acuan' => '-',
                'id_satuan' => '19',
                'id_akun' => 8,
                'id_kelompok' => 33,
            ),
            308 => 
            array (
                'id_standartbiaya' => 311,
                'namabarang' => 'Pejabat  Eselon II atau yang disetarakan',
                'hargasatuan' => 1000000.0,
                'acuan' => '-',
                'id_satuan' => '19',
                'id_akun' => 8,
                'id_kelompok' => 33,
            ),
            309 => 
            array (
                'id_standartbiaya' => 312,
                'namabarang' => 'Pejabat  Eselon III kebawah  atau yang disetarakan',
                'hargasatuan' => 900000.0,
                'acuan' => '-',
                'id_satuan' => '19',
                'id_akun' => 8,
                'id_kelompok' => 33,
            ),
            310 => 
            array (
                'id_standartbiaya' => 313,
                'namabarang' => 'Honararium Pembawa Acara',
                'hargasatuan' => 400000.0,
                'acuan' => '-',
                'id_satuan' => '35',
                'id_akun' => 5,
                'id_kelompok' => 46,
            ),
            311 => 
            array (
                'id_standartbiaya' => 314,
                'namabarang' => 'Penanggung Jawab',
                'hargasatuan' => 450000.0,
                'acuan' => '-',
                'id_satuan' => '39',
                'id_akun' => 5,
                'id_kelompok' => 45,
            ),
            312 => 
            array (
                'id_standartbiaya' => 315,
                'namabarang' => 'Ketua / Wakil Ketua',
                'hargasatuan' => 400000.0,
                'acuan' => '-',
                'id_satuan' => '39',
                'id_akun' => 5,
                'id_kelompok' => 45,
            ),
            313 => 
            array (
                'id_standartbiaya' => 316,
                'namabarang' => 'Sekretaris',
                'hargasatuan' => 300000.0,
                'acuan' => '-',
                'id_satuan' => '39',
                'id_akun' => 5,
                'id_kelompok' => 45,
            ),
            314 => 
            array (
                'id_standartbiaya' => 317,
                'namabarang' => 'Anggota',
                'hargasatuan' => 300000.0,
                'acuan' => '-',
                'id_satuan' => '39',
                'id_akun' => 5,
                'id_kelompok' => 45,
            ),
            315 => 
            array (
                'id_standartbiaya' => 318,
                'namabarang' => 'Dosen Wali / Pembimbing AKademik Kelas D3',
                'hargasatuan' => 55000.0,
                'acuan' => '-',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 17,
            ),
            316 => 
            array (
                'id_standartbiaya' => 319,
            'namabarang' => 'Dosen Wali / Pembimbing AKademik Kelas D3 (lebih dari 1 kelas)',
                'hargasatuan' => 65000.0,
                'acuan' => '-',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 17,
            ),
            317 => 
            array (
                'id_standartbiaya' => 320,
                'namabarang' => 'Snack',
                'hargasatuan' => 15000.0,
                'acuan' => '-',
                'id_satuan' => '35',
                'id_akun' => 1,
                'id_kelompok' => 0,
            ),
            318 => 
            array (
                'id_standartbiaya' => 321,
                'namabarang' => 'Snack',
                'hargasatuan' => 15000.0,
                'acuan' => '-',
                'id_satuan' => '35',
                'id_akun' => 0,
                'id_kelompok' => 0,
            ),
            319 => 
            array (
                'id_standartbiaya' => 322,
                'namabarang' => 'Snack',
                'hargasatuan' => 15000.0,
                'acuan' => '-',
                'id_satuan' => '35',
                'id_akun' => 1,
                'id_kelompok' => 9,
            ),
            320 => 
            array (
                'id_standartbiaya' => 323,
                'namabarang' => 'Penanggung Jawab',
                'hargasatuan' => 500000.0,
                'acuan' => '-',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 39,
            ),
            321 => 
            array (
                'id_standartbiaya' => 324,
                'namabarang' => 'Redaktur',
                'hargasatuan' => 450000.0,
                'acuan' => '-',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 39,
            ),
            322 => 
            array (
                'id_standartbiaya' => 325,
                'namabarang' => 'Editor',
                'hargasatuan' => 400000.0,
                'acuan' => '-',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 39,
            ),
            323 => 
            array (
                'id_standartbiaya' => 326,
                'namabarang' => 'Web Admin',
                'hargasatuan' => 350000.0,
                'acuan' => '-',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 39,
            ),
            324 => 
            array (
                'id_standartbiaya' => 327,
                'namabarang' => 'Web Developer',
                'hargasatuan' => 300000.0,
                'acuan' => '-',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 39,
            ),
            325 => 
            array (
                'id_standartbiaya' => 328,
                'namabarang' => 'Pembuat Artikel',
                'hargasatuan' => 100000.0,
                'acuan' => '-',
                'id_satuan' => '29',
                'id_akun' => 5,
                'id_kelompok' => 39,
            ),
            326 => 
            array (
                'id_standartbiaya' => 329,
                'namabarang' => 'Spidol kecil Snowman',
                'hargasatuan' => 1250.0,
                'acuan' => '-',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            327 => 
            array (
                'id_standartbiaya' => 330,
                'namabarang' => 'Foto Copy',
                'hargasatuan' => 200.0,
                'acuan' => '-',
                'id_satuan' => '10',
                'id_akun' => 1,
                'id_kelompok' => 8,
            ),
            328 => 
            array (
                'id_standartbiaya' => 331,
            'namabarang' => 'Uang transport (tdk menggunakan kendaraan dinas)',
                'hargasatuan' => 150000.0,
                'acuan' => '-',
                'id_satuan' => '39',
                'id_akun' => 33,
                'id_kelompok' => 50,
            ),
            329 => 
            array (
                'id_standartbiaya' => 332,
                'namabarang' => 'Uang saku',
                'hargasatuan' => 100000.0,
                'acuan' => '-',
                'id_satuan' => '39',
                'id_akun' => 33,
                'id_kelompok' => 50,
            ),
            330 => 
            array (
                'id_standartbiaya' => 333,
            'namabarang' => 'Dosen Wali / Pembimbing AKademik (kls kerjsama dan D4)',
                'hargasatuan' => 75000.0,
                'acuan' => '-',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 17,
            ),
            331 => 
            array (
                'id_standartbiaya' => 334,
                'namabarang' => 'Dosen Wali / Pembimbing AKademik kelas magister',
                'hargasatuan' => 100000.0,
                'acuan' => '-',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 17,
            ),
            332 => 
            array (
                'id_standartbiaya' => 335,
            'namabarang' => 'Pembimbing praktik kerja lapangan (PKL)',
                'hargasatuan' => 25000.0,
                'acuan' => '-',
                'id_satuan' => '25',
                'id_akun' => 5,
                'id_kelompok' => 17,
            ),
            333 => 
            array (
                'id_standartbiaya' => 336,
                'namabarang' => 'Dosen tamu level nasional',
                'hargasatuan' => 500000.0,
                'acuan' => '-',
                'id_satuan' => '19',
                'id_akun' => 5,
                'id_kelompok' => 17,
            ),
            334 => 
            array (
                'id_standartbiaya' => 337,
                'namabarang' => 'Dosen tamu level internasional',
                'hargasatuan' => 850000.0,
                'acuan' => '-',
                'id_satuan' => '19',
                'id_akun' => 5,
                'id_kelompok' => 17,
            ),
            335 => 
            array (
                'id_standartbiaya' => 338,
                'namabarang' => 'Pembina uji kompetensi',
                'hargasatuan' => 1000000.0,
                'acuan' => '-',
                'id_satuan' => '39',
                'id_akun' => 5,
                'id_kelompok' => 17,
            ),
            336 => 
            array (
                'id_standartbiaya' => 339,
                'namabarang' => 'Pelatih uji kompetensi',
                'hargasatuan' => 100000.0,
                'acuan' => '-',
                'id_satuan' => '26',
                'id_akun' => 5,
                'id_kelompok' => 17,
            ),
            337 => 
            array (
                'id_standartbiaya' => 340,
            'namabarang' => 'Honorarium pembimbing program kreativitas mahasiswa (PKM) yang lolos seleksi nasional',
                'hargasatuan' => 1000000.0,
                'acuan' => '-',
                'id_satuan' => '27',
                'id_akun' => 5,
                'id_kelompok' => 17,
            ),
            338 => 
            array (
                'id_standartbiaya' => 341,
                'namabarang' => 'Honorarium rohaniawan',
                'hargasatuan' => 400000.0,
                'acuan' => '-',
                'id_satuan' => '39',
                'id_akun' => 5,
                'id_kelompok' => 43,
            ),
            339 => 
            array (
                'id_standartbiaya' => 342,
                'namabarang' => 'Pengarah',
                'hargasatuan' => 500000.0,
                'acuan' => '-',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 42,
            ),
            340 => 
            array (
                'id_standartbiaya' => 343,
                'namabarang' => 'Penanggung Jawab',
                'hargasatuan' => 450000.0,
                'acuan' => '-',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 42,
            ),
            341 => 
            array (
                'id_standartbiaya' => 344,
                'namabarang' => 'Ketua',
                'hargasatuan' => 400000.0,
                'acuan' => '-',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 42,
            ),
            342 => 
            array (
                'id_standartbiaya' => 345,
                'namabarang' => 'Wakil Ketua',
                'hargasatuan' => 350000.0,
                'acuan' => '-',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 42,
            ),
            343 => 
            array (
                'id_standartbiaya' => 346,
                'namabarang' => 'Sekretaris',
                'hargasatuan' => 300000.0,
                'acuan' => '-',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 42,
            ),
            344 => 
            array (
                'id_standartbiaya' => 347,
                'namabarang' => 'Anggota',
                'hargasatuan' => 300000.0,
                'acuan' => '-',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 42,
            ),
            345 => 
            array (
                'id_standartbiaya' => 348,
                'namabarang' => 'Penanggung Jawab',
                'hargasatuan' => 500000.0,
                'acuan' => '-',
                'id_satuan' => '28',
                'id_akun' => 5,
                'id_kelompok' => 20,
            ),
            346 => 
            array (
                'id_standartbiaya' => 349,
                'namabarang' => 'Redaktur',
                'hargasatuan' => 400000.0,
                'acuan' => '-',
                'id_satuan' => '28',
                'id_akun' => 5,
                'id_kelompok' => 20,
            ),
            347 => 
            array (
                'id_standartbiaya' => 350,
                'namabarang' => 'Penyunting / Editor',
                'hargasatuan' => 300000.0,
                'acuan' => '-',
                'id_satuan' => '28',
                'id_akun' => 5,
                'id_kelompok' => 20,
            ),
            348 => 
            array (
                'id_standartbiaya' => 351,
                'namabarang' => 'Desain grafis dan fotografer',
                'hargasatuan' => 180000.0,
                'acuan' => '-',
                'id_satuan' => '28',
                'id_akun' => 5,
                'id_kelompok' => 20,
            ),
            349 => 
            array (
                'id_standartbiaya' => 352,
                'namabarang' => 'Sekretaris',
                'hargasatuan' => 150000.0,
                'acuan' => '-',
                'id_satuan' => '28',
                'id_akun' => 5,
                'id_kelompok' => 20,
            ),
            350 => 
            array (
                'id_standartbiaya' => 353,
                'namabarang' => 'Penanggung Jawab',
                'hargasatuan' => 400000.0,
                'acuan' => '-',
                'id_satuan' => '28',
                'id_akun' => 5,
                'id_kelompok' => 21,
            ),
            351 => 
            array (
                'id_standartbiaya' => 354,
                'namabarang' => 'Redaktur',
                'hargasatuan' => 300000.0,
                'acuan' => '-',
                'id_satuan' => '28',
                'id_akun' => 5,
                'id_kelompok' => 21,
            ),
            352 => 
            array (
                'id_standartbiaya' => 355,
                'namabarang' => 'Penyunting / Editor',
                'hargasatuan' => 300000.0,
                'acuan' => '-',
                'id_satuan' => '28',
                'id_akun' => 5,
                'id_kelompok' => 21,
            ),
            353 => 
            array (
                'id_standartbiaya' => 356,
                'namabarang' => 'Desain grafis dan fotografer',
                'hargasatuan' => 180000.0,
                'acuan' => '-',
                'id_satuan' => '28',
                'id_akun' => 5,
                'id_kelompok' => 21,
            ),
            354 => 
            array (
                'id_standartbiaya' => 357,
                'namabarang' => 'Sekretariat',
                'hargasatuan' => 150000.0,
                'acuan' => '-',
                'id_satuan' => '28',
                'id_akun' => 5,
                'id_kelompok' => 21,
            ),
            355 => 
            array (
                'id_standartbiaya' => 358,
                'namabarang' => 'Pembuat artikel',
                'hargasatuan' => 100000.0,
                'acuan' => '-',
                'id_satuan' => '29',
                'id_akun' => 5,
                'id_kelompok' => 21,
            ),
            356 => 
            array (
                'id_standartbiaya' => 359,
                'namabarang' => 'Pembuat soal D3 reguler',
                'hargasatuan' => 50000.0,
                'acuan' => '-',
                'id_satuan' => '30',
                'id_akun' => 5,
                'id_kelompok' => 38,
            ),
            357 => 
            array (
                'id_standartbiaya' => 360,
                'namabarang' => 'Pembuat soal D3 kerjasam / D4 /SST',
                'hargasatuan' => 75000.0,
                'acuan' => '-',
                'id_satuan' => '30',
                'id_akun' => 5,
                'id_kelompok' => 38,
            ),
            358 => 
            array (
                'id_standartbiaya' => 361,
                'namabarang' => 'Pengawas D3 reguler',
                'hargasatuan' => 26500.0,
                'acuan' => '-',
                'id_satuan' => '31',
                'id_akun' => 5,
                'id_kelompok' => 38,
            ),
            359 => 
            array (
                'id_standartbiaya' => 362,
                'namabarang' => 'Pengawas D3 kerjasana',
                'hargasatuan' => 30000.0,
                'acuan' => '-',
                'id_satuan' => '31',
                'id_akun' => 5,
                'id_kelompok' => 38,
            ),
            360 => 
            array (
                'id_standartbiaya' => 363,
                'namabarang' => 'Pengawas D3 kerjasana',
                'hargasatuan' => 30000.0,
                'acuan' => '-',
                'id_satuan' => '31',
                'id_akun' => 5,
                'id_kelompok' => 38,
            ),
            361 => 
            array (
                'id_standartbiaya' => 364,
                'namabarang' => 'Koreksi D3 reguler',
                'hargasatuan' => 750.0,
                'acuan' => '-',
                'id_satuan' => '32',
                'id_akun' => 5,
                'id_kelompok' => 38,
            ),
            362 => 
            array (
                'id_standartbiaya' => 365,
                'namabarang' => 'Koreksi D3 kerjasama',
                'hargasatuan' => 1500.0,
                'acuan' => '-',
                'id_satuan' => '32',
                'id_akun' => 5,
                'id_kelompok' => 38,
            ),
            363 => 
            array (
                'id_standartbiaya' => 366,
                'namabarang' => 'Koreksi D4 / SST',
                'hargasatuan' => 1500.0,
                'acuan' => '-',
                'id_satuan' => '32',
                'id_akun' => 5,
                'id_kelompok' => 38,
            ),
            364 => 
            array (
                'id_standartbiaya' => 367,
                'namabarang' => 'Honorarium butir soal tingkat nasional',
                'hargasatuan' => 100000.0,
                'acuan' => '-',
                'id_satuan' => '34',
                'id_akun' => 5,
                'id_kelompok' => 37,
            ),
            365 => 
            array (
                'id_standartbiaya' => 368,
                'namabarang' => 'Honorarium butir soal tingkat polines',
                'hargasatuan' => 25000.0,
                'acuan' => '-',
                'id_satuan' => '34',
                'id_akun' => 5,
                'id_kelompok' => 37,
            ),
            366 => 
            array (
                'id_standartbiaya' => 369,
            'namabarang' => 'Honorarium telaah soal butir tingkat nasional (telaah materi soal)',
                'hargasatuan' => 45000.0,
                'acuan' => '-',
                'id_satuan' => '34',
                'id_akun' => 5,
                'id_kelompok' => 37,
            ),
            367 => 
            array (
                'id_standartbiaya' => 370,
            'namabarang' => 'Honorarium telaah soal butir tingkat nasional (telaah bahasa soal)',
                'hargasatuan' => 20000.0,
                'acuan' => '-',
                'id_satuan' => '34',
                'id_akun' => 5,
                'id_kelompok' => 37,
            ),
            368 => 
            array (
                'id_standartbiaya' => 371,
            'namabarang' => 'Honorarium telaah soal butir tingkat polines (telaah materi soal)',
                'hargasatuan' => 22000.0,
                'acuan' => '-',
                'id_satuan' => '34',
                'id_akun' => 5,
                'id_kelompok' => 37,
            ),
            369 => 
            array (
                'id_standartbiaya' => 372,
            'namabarang' => 'Honorarium telaah soal butir tingkat polines (telaah bahasa soal)',
                'hargasatuan' => 10000.0,
                'acuan' => '-',
                'id_satuan' => '34',
                'id_akun' => 5,
                'id_kelompok' => 37,
            ),
            370 => 
            array (
                'id_standartbiaya' => 373,
                'namabarang' => 'Uang harian perjalanan  dinas dalam negeri ',
                'hargasatuan' => 0.0,
                'acuan' => 'Silahkan sesuaikan dengan peraturaan yang berlaku',
                'id_satuan' => '23',
                'id_akun' => 10,
                'id_kelompok' => 51,
            ),
            371 => 
            array (
                'id_standartbiaya' => 374,
                'namabarang' => 'Hotel / penginapan',
                'hargasatuan' => 0.0,
                'acuan' => 'Silahkan sesuaikan dengan peraturaan yang berlaku',
                'id_satuan' => '23',
                'id_akun' => 10,
                'id_kelompok' => 52,
            ),
            372 => 
            array (
                'id_standartbiaya' => 375,
                'namabarang' => 'taxi',
                'hargasatuan' => 0.0,
                'acuan' => 'Silahkan sesuaikan dengan peraturaan yang berlaku',
                'id_satuan' => '39',
                'id_akun' => 33,
                'id_kelompok' => 50,
            ),
            373 => 
            array (
                'id_standartbiaya' => 376,
                'namabarang' => 'Tiket bis',
                'hargasatuan' => 0.0,
                'acuan' => 'Silahkan sesuaikan dengan peraturaan yang berlaku',
                'id_satuan' => '35',
                'id_akun' => 33,
                'id_kelompok' => 53,
            ),
            374 => 
            array (
                'id_standartbiaya' => 377,
                'namabarang' => 'Tiket Kereta Api',
                'hargasatuan' => 0.0,
                'acuan' => 'Silahkan sesuaikan dengan peraturaan yang berlaku',
                'id_satuan' => '0',
                'id_akun' => 33,
                'id_kelompok' => 49,
            ),
            375 => 
            array (
                'id_standartbiaya' => 378,
                'namabarang' => 'Tiket Kereta Api',
                'hargasatuan' => 0.0,
                'acuan' => 'Silahkan sesuaikan dengan peraturaan yang berlaku',
                'id_satuan' => '35',
                'id_akun' => 10,
                'id_kelompok' => 49,
            ),
            376 => 
            array (
                'id_standartbiaya' => 379,
                'namabarang' => 'Tiket pesawat terbang',
                'hargasatuan' => 0.0,
                'acuan' => 'Silahkan sesuaikan dengan peraturaan yang berlaku',
                'id_satuan' => '35',
                'id_akun' => 10,
                'id_kelompok' => 49,
            ),
            377 => 
            array (
                'id_standartbiaya' => 380,
                'namabarang' => 'Tiket kapal laut',
                'hargasatuan' => 0.0,
                'acuan' => 'Silahkan sesuaikan dengan peraturaan yang berlaku',
                'id_satuan' => '35',
                'id_akun' => 10,
                'id_kelompok' => 49,
            ),
            378 => 
            array (
                'id_standartbiaya' => 381,
                'namabarang' => 'taxi',
                'hargasatuan' => 0.0,
                'acuan' => 'Silahkan sesuaikan dengan peraturaan yang berlaku',
                'id_satuan' => '35',
                'id_akun' => 10,
                'id_kelompok' => 49,
            ),
            379 => 
            array (
                'id_standartbiaya' => 382,
                'namabarang' => 'Tiket bis',
                'hargasatuan' => 0.0,
                'acuan' => 'Silahkan sesuaikan dengan peraturaan yang berlaku',
                'id_satuan' => '35',
                'id_akun' => 10,
                'id_kelompok' => 49,
            ),
            380 => 
            array (
                'id_standartbiaya' => 383,
                'namabarang' => 'Coba Tambah 1',
                'hargasatuan' => 123.0,
                'acuan' => '-',
                'id_satuan' => '20',
                'id_akun' => 26,
                'id_kelompok' => 1,
            ),
            381 => 
            array (
                'id_standartbiaya' => 384,
                'namabarang' => 'sewa mobil',
                'hargasatuan' => 500000.0,
                'acuan' => '-',
                'id_satuan' => '38',
                'id_akun' => 7,
                'id_kelompok' => 30,
            ),
            382 => 
            array (
                'id_standartbiaya' => 385,
            'namabarang' => 'Stabilo (merk Boss)',
                'hargasatuan' => 27.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 0,
                'id_kelompok' => 1,
            ),
            383 => 
            array (
                'id_standartbiaya' => 387,
            'namabarang' => 'Stabilo (merk Boss)',
                'hargasatuan' => 8800.0,
                'acuan' => 'SBU',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            384 => 
            array (
                'id_standartbiaya' => 388,
                'namabarang' => 'flashdisk',
                'hargasatuan' => 125000.0,
                'acuan' => '2',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            385 => 
            array (
                'id_standartbiaya' => 389,
                'namabarang' => 'kertas HVS 70 gr folio',
                'hargasatuan' => 41.0,
                'acuan' => '',
                'id_satuan' => '0',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            386 => 
            array (
                'id_standartbiaya' => 390,
                'namabarang' => 'kertas F4 70 gram ',
                'hargasatuan' => 41000.0,
                'acuan' => '',
                'id_satuan' => '15',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            387 => 
            array (
                'id_standartbiaya' => 391,
                'namabarang' => 'Cetak foto warna',
                'hargasatuan' => 3000.0,
                'acuan' => 'SBU',
                'id_satuan' => '11',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            388 => 
            array (
                'id_standartbiaya' => 392,
                'namabarang' => 'Paket fullboard meeting',
                'hargasatuan' => 0.0,
                'acuan' => 'SBM',
                'id_satuan' => '23',
                'id_akun' => 10,
                'id_kelompok' => 49,
            ),
            389 => 
            array (
                'id_standartbiaya' => 393,
                'namabarang' => 'uang saku fullboard meeint',
                'hargasatuan' => 0.0,
                'acuan' => 'SBM',
                'id_satuan' => '23',
                'id_akun' => 10,
                'id_kelompok' => 49,
            ),
        ));
        
        
    }
}