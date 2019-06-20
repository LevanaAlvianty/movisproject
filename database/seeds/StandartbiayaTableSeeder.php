<?php

use Illuminate\Database\Seeder;

class StandartbiayaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('standartbiaya')->delete();
        
        \DB::table('standartbiaya')->insert(array (
            0 => 
            array (
                'id_standartbiaya' => 1,
                'namabarang' => 'Album Foto Besar',
                'hargasatuan' => 145500.0,
                'acuan' => 'Besar',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 10,
            ),
            1 => 
            array (
                'id_standartbiaya' => 2,
                'namabarang' => 'Amplop Coklat Polos ',
                'hargasatuan' => 1950.0,
                'acuan' => 'Airmail E312',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            2 => 
            array (
                'id_standartbiaya' => 3,
                'namabarang' => 'Amplop Putih Kabinet',
                'hargasatuan' => 20200.0,
                'acuan' => 'Paperline, Ukuran 110 x 230 mm, 80 gsm, 100 Pcs, peel & seal with security cuts, 90 PPS ',
                'id_satuan' => '5',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            3 => 
            array (
                'id_standartbiaya' => 4,
                'namabarang' => 'Amplop Putih Kecil 104.',
                'hargasatuan' => 13290.0,
                'acuan' => 'Paperline',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            4 => 
            array (
                'id_standartbiaya' => 5,
                'namabarang' => 'Arit/Sabit/bendo',
                'hargasatuan' => 141750.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            5 => 
            array (
                'id_standartbiaya' => 6,
            'namabarang' => 'Bag File (Lanscape)',
                'hargasatuan' => 9820.0,
                'acuan' => 'Eagle',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            6 => 
            array (
                'id_standartbiaya' => 7,
                'namabarang' => 'Bag file lanscape 5 warna',
                'hargasatuan' => 8930.0,
                'acuan' => 'Eagle',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            7 => 
            array (
                'id_standartbiaya' => 8,
                'namabarang' => 'Ballpoint Boxi Hitam',
                'hargasatuan' => 16070.0,
                'acuan' => 'Boxi',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            8 => 
            array (
                'id_standartbiaya' => 9,
                'namabarang' => 'Ballpoint Hitam AE7 Standard/Techno A7',
                'hargasatuan' => 1340.0,
                'acuan' => 'Standard',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            9 => 
            array (
                'id_standartbiaya' => 10,
                'namabarang' => 'Ballpoint Hitam Faster C6/606',
                'hargasatuan' => 2700.0,
                'acuan' => 'Faster',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            10 => 
            array (
                'id_standartbiaya' => 11,
                'namabarang' => 'Ballpoint Hitam Pentel',
                'hargasatuan' => 25470.0,
                'acuan' => 'Pentel',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            11 => 
            array (
                'id_standartbiaya' => 12,
                'namabarang' => 'Ballpoint Hitam Pilot BPPT',
                'hargasatuan' => 2200.0,
                'acuan' => 'Pilot',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            12 => 
            array (
                'id_standartbiaya' => 13,
                'namabarang' => 'Ballpoint Hitam Pilot GI',
                'hargasatuan' => 9690.0,
                'acuan' => 'Pilot',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            13 => 
            array (
                'id_standartbiaya' => 14,
                'namabarang' => 'Ballpoint isi 4',
                'hargasatuan' => 24680.0,
                'acuan' => 'BIC',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            14 => 
            array (
                'id_standartbiaya' => 15,
            'namabarang' => 'Ballpoint (hitam/merah)',
                'hargasatuan' => 1450.0,
                'acuan' => 'Snowman',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            15 => 
            array (
                'id_standartbiaya' => 16,
                'namabarang' => 'Bantalan Stempel/Stamp pad besar No. 2',
                'hargasatuan' => 60380.0,
                'acuan' => 'Artline',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            16 => 
            array (
                'id_standartbiaya' => 17,
                'namabarang' => 'Bantalan stempel/Stamp pad No. 1 ',
                'hargasatuan' => 40950.0,
                'acuan' => 'Artline',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            17 => 
            array (
                'id_standartbiaya' => 18,
                'namabarang' => 'Batery AA Alkalin',
                'hargasatuan' => 6300.0,
                'acuan' => 'ABC',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            18 => 
            array (
                'id_standartbiaya' => 19,
                'namabarang' => 'Batery AAA Alkalin',
                'hargasatuan' => 6300.0,
                'acuan' => 'ABC',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            19 => 
            array (
                'id_standartbiaya' => 20,
                'namabarang' => 'Batery Alkalin Kotak',
                'hargasatuan' => 33710.0,
                'acuan' => 'ABC',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            20 => 
            array (
                'id_standartbiaya' => 21,
                'namabarang' => 'Batery AA',
                'hargasatuan' => 6300.0,
                'acuan' => 'ABC',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            21 => 
            array (
                'id_standartbiaya' => 23,
                'namabarang' => 'Binder Clips No. 105',
                'hargasatuan' => 2940.0,
                'acuan' => 'Kenko',
                'id_satuan' => '5',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            22 => 
            array (
                'id_standartbiaya' => 24,
                'namabarang' => 'Binder Klip 107 ',
                'hargasatuan' => 3940.0,
                'acuan' => 'Joyko',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            23 => 
            array (
                'id_standartbiaya' => 25,
                'namabarang' => 'Binder Clips No. 111',
                'hargasatuan' => 6460.0,
                'acuan' => 'Kenko',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            24 => 
            array (
                'id_standartbiaya' => 26,
                'namabarang' => 'Binder Klip 155 ',
                'hargasatuan' => 7250.0,
                'acuan' => 'Joyko',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            25 => 
            array (
                'id_standartbiaya' => 27,
                'namabarang' => 'Binder Klip 200',
                'hargasatuan' => 13290.0,
                'acuan' => 'Joyko',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            26 => 
            array (
                'id_standartbiaya' => 28,
                'namabarang' => 'Binder Clips No. 260',
                'hargasatuan' => 16150.0,
                'acuan' => 'Kenko',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            27 => 
            array (
                'id_standartbiaya' => 29,
                'namabarang' => 'Blok Note',
                'hargasatuan' => 3150.0,
                'acuan' => 'Gelatik',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            28 => 
            array (
                'id_standartbiaya' => 30,
                'namabarang' => 'Box File Karton',
                'hargasatuan' => 12920.0,
                'acuan' => 'Gungyu',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            29 => 
            array (
                'id_standartbiaya' => 31,
                'namabarang' => 'Box File Plastik besar',
                'hargasatuan' => 25830.0,
                'acuan' => 'Bantex',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            30 => 
            array (
                'id_standartbiaya' => 32,
                'namabarang' => 'Box File Plastik Kecil',
                'hargasatuan' => 16800.0,
                'acuan' => 'Bindex',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            31 => 
            array (
                'id_standartbiaya' => 33,
                'namabarang' => 'Box File Plastik',
                'hargasatuan' => 24900.0,
                'acuan' => 'Maspion',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            32 => 
            array (
                'id_standartbiaya' => 34,
            'namabarang' => 'Boxy (Merah/Hitam)',
                'hargasatuan' => 9240.0,
                'acuan' => 'Boxi Unibal',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            33 => 
            array (
                'id_standartbiaya' => 35,
            'namabarang' => 'Boxy (Merah/Hitam)',
                'hargasatuan' => 9940.0,
                'acuan' => 'Mistzubishi',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            34 => 
            array (
                'id_standartbiaya' => 36,
                'namabarang' => 'Buku Ekspedisi isi = 100 lembar',
                'hargasatuan' => 9240.0,
                'acuan' => 'Gelatik Kembar',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            35 => 
            array (
                'id_standartbiaya' => 37,
                'namabarang' => 'Buku tulis folio 100 lbr',
                'hargasatuan' => 16750.0,
                'acuan' => 'Gelatik',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            36 => 
            array (
                'id_standartbiaya' => 38,
                'namabarang' => 'Buku Tulis kuarto isi = 100 lembar',
                'hargasatuan' => 9240.0,
                'acuan' => 'Gelatik Kembar',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            37 => 
            array (
                'id_standartbiaya' => 39,
                'namabarang' => 'Buku tulis folio 100 lbr',
                'hargasatuan' => 18120.0,
                'acuan' => 'KIKI',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            38 => 
            array (
                'id_standartbiaya' => 40,
                'namabarang' => 'Buku tulis kwarto 100 lbr',
                'hargasatuan' => 6300.0,
                'acuan' => 'Mirage',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            39 => 
            array (
                'id_standartbiaya' => 41,
                'namabarang' => 'Buku tulis kwarto 100 lbr',
                'hargasatuan' => 9140.0,
                'acuan' => 'BO',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            40 => 
            array (
                'id_standartbiaya' => 42,
                'namabarang' => 'Business File',
                'hargasatuan' => 3120.0,
                'acuan' => 'Big',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            41 => 
            array (
                'id_standartbiaya' => 43,
                'namabarang' => 'Business File',
                'hargasatuan' => 3150.0,
                'acuan' => 'KJ 106',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            42 => 
            array (
                'id_standartbiaya' => 44,
                'namabarang' => 'Cairan Penghapus/Tip-ex',
                'hargasatuan' => 16800.0,
                'acuan' => 'Pentel',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            43 => 
            array (
                'id_standartbiaya' => 45,
                'namabarang' => 'Cartride Canon IP2870 Hitam',
                'hargasatuan' => 272270.0,
                'acuan' => 'Canon',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            44 => 
            array (
                'id_standartbiaya' => 46,
                'namabarang' => 'Cartride Canon IP2870 Warna',
                'hargasatuan' => 358630.0,
                'acuan' => 'Canon',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            45 => 
            array (
                'id_standartbiaya' => 47,
                'namabarang' => 'Carttrid Canon ip 2700',
                'hargasatuan' => 312120.0,
                'acuan' => 'Black',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            46 => 
            array (
                'id_standartbiaya' => 48,
                'namabarang' => 'Carttrid Canon ip 2700',
                'hargasatuan' => 378270.0,
                'acuan' => 'Colour',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            47 => 
            array (
                'id_standartbiaya' => 49,
                'namabarang' => 'Catride Canon Pixma MP170 Hitam',
                'hargasatuan' => 297990.0,
                'acuan' => 'Canon',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            48 => 
            array (
                'id_standartbiaya' => 50,
                'namabarang' => 'Catride Canon Pixma MP170 Warna ',
                'hargasatuan' => 363830.0,
                'acuan' => 'Canon',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            49 => 
            array (
                'id_standartbiaya' => 51,
            'namabarang' => 'Cartridge WF - 100 Original (hitam)',
                'hargasatuan' => 297400.0,
                'acuan' => 'Epson',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            50 => 
            array (
                'id_standartbiaya' => 52,
            'namabarang' => 'Cartridge WF - 100 Original (warna)',
                'hargasatuan' => 348500.0,
                'acuan' => 'Epson',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            51 => 
            array (
                'id_standartbiaya' => 53,
                'namabarang' => 'Cat besi 1 kg',
                'hargasatuan' => 68250.0,
                'acuan' => '',
                'id_satuan' => '7',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            52 => 
            array (
                'id_standartbiaya' => 54,
            'namabarang' => 'Cat Pylox (hitam & putih)',
                'hargasatuan' => 28040.0,
                'acuan' => 'Pylox',
                'id_satuan' => '7',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            53 => 
            array (
                'id_standartbiaya' => 55,
            'namabarang' => 'CD RW 80 mm - 70 MB (Blank)',
                'hargasatuan' => 4200.0,
                'acuan' => 'GT-Pro',
                'id_satuan' => '8',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            54 => 
            array (
                'id_standartbiaya' => 56,
            'namabarang' => 'CD RW 80 mm - 70 MB (casing)',
                'hargasatuan' => 16800.0,
                'acuan' => 'Verbatim',
                'id_satuan' => '8',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            55 => 
            array (
                'id_standartbiaya' => 57,
            'namabarang' => 'CD-R -Mini (casing)',
                'hargasatuan' => 10350.0,
                'acuan' => 'Verbatim',
                'id_satuan' => '8',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            56 => 
            array (
                'id_standartbiaya' => 58,
                'namabarang' => 'Clem kabel no. 10',
                'hargasatuan' => 7880.0,
                'acuan' => '',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            57 => 
            array (
                'id_standartbiaya' => 59,
                'namabarang' => 'Clem pvc s/b',
                'hargasatuan' => 17850.0,
                'acuan' => '',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            58 => 
            array (
                'id_standartbiaya' => 60,
                'namabarang' => 'Clip kertas/Paper clips  No.3 ',
                'hargasatuan' => 3140.0,
                'acuan' => 'Atom',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            59 => 
            array (
                'id_standartbiaya' => 61,
                'namabarang' => 'Clip kertas/Paper clips No.5',
                'hargasatuan' => 3890.0,
                'acuan' => 'Atom',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            60 => 
            array (
                'id_standartbiaya' => 62,
                'namabarang' => 'Cutter Besar  L-500',
                'hargasatuan' => 15230.0,
                'acuan' => 'Joyko ',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            61 => 
            array (
                'id_standartbiaya' => 63,
                'namabarang' => 'Cutter Kecil A-300',
                'hargasatuan' => 5460.0,
                'acuan' => 'Joyko ',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            62 => 
            array (
                'id_standartbiaya' => 64,
                'namabarang' => 'Cutter Kecil A 100',
                'hargasatuan' => 5250.0,
                'acuan' => 'Kenko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            63 => 
            array (
                'id_standartbiaya' => 65,
                'namabarang' => 'Cutter L-500 ',
                'hargasatuan' => 16100.0,
                'acuan' => 'Kenko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            64 => 
            array (
                'id_standartbiaya' => 66,
                'namabarang' => 'Desk Set',
                'hargasatuan' => 44200.0,
                'acuan' => 'Joyko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            65 => 
            array (
                'id_standartbiaya' => 67,
                'namabarang' => 'Desk Set',
                'hargasatuan' => 29700.0,
                'acuan' => 'Kenko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            66 => 
            array (
                'id_standartbiaya' => 68,
                'namabarang' => 'Double tape 1/4"',
                'hargasatuan' => 3230.0,
                'acuan' => 'JOYKO',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            67 => 
            array (
                'id_standartbiaya' => 69,
                'namabarang' => 'Double tape 1/2"',
                'hargasatuan' => 5200.0,
                'acuan' => 'JOYKO',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            68 => 
            array (
                'id_standartbiaya' => 70,
                'namabarang' => 'Double tape 1"',
                'hargasatuan' => 10400.0,
                'acuan' => 'JOYKO',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            69 => 
            array (
                'id_standartbiaya' => 71,
                'namabarang' => 'Double tape 2"',
                'hargasatuan' => 15540.0,
                'acuan' => 'JOYKO',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            70 => 
            array (
                'id_standartbiaya' => 72,
                'namabarang' => 'Double tape 24 mm x 10 Y',
                'hargasatuan' => 5250.0,
                'acuan' => 'Naichi',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            71 => 
            array (
                'id_standartbiaya' => 73,
                'namabarang' => 'Drawing Pen 0,1. 0,2. 0,3',
                'hargasatuan' => 7510.0,
                'acuan' => 'Snowman',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            72 => 
            array (
                'id_standartbiaya' => 74,
                'namabarang' => 'Drum Fotocopy Canon iR 2022N, Canon',
                'hargasatuan' => 2579850.0,
                'acuan' => 'Canon',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            73 => 
            array (
                'id_standartbiaya' => 75,
                'namabarang' => 'Drum Fotocopy Canon iR-2230',
                'hargasatuan' => 3790500.0,
                'acuan' => 'Canon',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            74 => 
            array (
                'id_standartbiaya' => 76,
                'namabarang' => 'Drum printer Laserjet series 19A',
                'hargasatuan' => 1201700.0,
                'acuan' => 'Original',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            75 => 
            array (
                'id_standartbiaya' => 77,
                'namabarang' => 'DVD – R',
                'hargasatuan' => 5200.0,
                'acuan' => 'Verbatim',
                'id_satuan' => '8',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            76 => 
            array (
                'id_standartbiaya' => 78,
            'namabarang' => 'DVD - RW (casing)',
                'hargasatuan' => 23470.0,
                'acuan' => 'Verbatim',
                'id_satuan' => '8',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            77 => 
            array (
                'id_standartbiaya' => 79,
            'namabarang' => 'DVD - RW Mini (casing)',
                'hargasatuan' => 25830.0,
                'acuan' => 'Verbatim',
                'id_satuan' => '8',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            78 => 
            array (
                'id_standartbiaya' => 80,
                'namabarang' => 'DVD-RW',
                'hargasatuan' => 7250.0,
                'acuan' => 'GT Pro',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            79 => 
            array (
                'id_standartbiaya' => 81,
                'namabarang' => 'Expanding File',
                'hargasatuan' => 115500.0,
                'acuan' => 'Bantex',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            80 => 
            array (
                'id_standartbiaya' => 82,
                'namabarang' => 'Fiting lampu',
                'hargasatuan' => 14700.0,
                'acuan' => 'Broco',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            81 => 
            array (
                'id_standartbiaya' => 83,
                'namabarang' => 'Flasdisk 16 GB',
                'hargasatuan' => 99540.0,
                'acuan' => 'Thosiba ',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            82 => 
            array (
                'id_standartbiaya' => 84,
                'namabarang' => 'Flash Disk 16 GB',
                'hargasatuan' => 99650.0,
                'acuan' => 'Kingstone',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 11,
            ),
            83 => 
            array (
                'id_standartbiaya' => 85,
                'namabarang' => 'Flash Disk 16 GB',
                'hargasatuan' => 99600.0,
                'acuan' => 'Scandisk',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            84 => 
            array (
                'id_standartbiaya' => 86,
            'namabarang' => 'Gunting besar (u/ kertas/kain)',
                'hargasatuan' => 12900.0,
                'acuan' => 'Kenko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            85 => 
            array (
                'id_standartbiaya' => 87,
            'namabarang' => 'Gunting besar (u/ kertas/kain)',
                'hargasatuan' => 11820.0,
                'acuan' => 'Gunindo KC-888',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            86 => 
            array (
                'id_standartbiaya' => 88,
            'namabarang' => 'Gunting sedang (u/ kertas/kain)',
                'hargasatuan' => 7880.0,
                'acuan' => 'Scissor',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            87 => 
            array (
                'id_standartbiaya' => 89,
                'namabarang' => 'Hardisk Eksternal Expansion 1 Tera',
                'hargasatuan' => 1075250.0,
                'acuan' => 'Seagate',
                'id_satuan' => '3',
                'id_akun' => 13,
                'id_kelompok' => 58,
            ),
            88 => 
            array (
                'id_standartbiaya' => 90,
            'namabarang' => 'Hole Punch No. 30 (Pelubang kertas) ',
                'hargasatuan' => 15540.0,
                'acuan' => 'Kenko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            89 => 
            array (
                'id_standartbiaya' => 91,
            'namabarang' => 'Hole Punch No. 40 (Pelubang kertas) ',
                'hargasatuan' => 25830.0,
                'acuan' => 'Kenko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            90 => 
            array (
                'id_standartbiaya' => 92,
            'namabarang' => 'Hole Punch No. 85 (Pelubang kertas) ',
                'hargasatuan' => 53760.0,
                'acuan' => 'Kenko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            91 => 
            array (
                'id_standartbiaya' => 93,
                'namabarang' => 'Isi Cutter Besar',
                'hargasatuan' => 6250.0,
                'acuan' => 'Joyko',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            92 => 
            array (
                'id_standartbiaya' => 94,
                'namabarang' => 'Isi Cutter Kecil',
                'hargasatuan' => 3000.0,
                'acuan' => 'Joyko',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            93 => 
            array (
                'id_standartbiaya' => 95,
                'namabarang' => 'Isi Stapler kecil No. 10',
                'hargasatuan' => 3050.0,
                'acuan' => 'Max',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            94 => 
            array (
                'id_standartbiaya' => 96,
                'namabarang' => 'Isi Stapler besar No. 369',
                'hargasatuan' => 5850.0,
                'acuan' => 'Max',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            95 => 
            array (
                'id_standartbiaya' => 97,
                'namabarang' => 'Isi Stapler No.10',
                'hargasatuan' => 3000.0,
                'acuan' => 'Great Wall',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            96 => 
            array (
                'id_standartbiaya' => 98,
                'namabarang' => 'Isi Stapler No.369',
                'hargasatuan' => 5800.0,
                'acuan' => 'Great Wall',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            97 => 
            array (
                'id_standartbiaya' => 99,
                'namabarang' => 'Isolasi 1"',
                'hargasatuan' => 5880.0,
                'acuan' => 'Daimaru',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            98 => 
            array (
                'id_standartbiaya' => 100,
                'namabarang' => 'Isolasi kecil 0,5 x 10',
                'hargasatuan' => 3260.0,
                'acuan' => 'Panfix',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            99 => 
            array (
                'id_standartbiaya' => 101,
                'namabarang' => 'Isolasi kecil 0,5 x 36',
                'hargasatuan' => 7980.0,
                'acuan' => 'Panfix',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            100 => 
            array (
                'id_standartbiaya' => 102,
                'namabarang' => 'Isolasi kecil 0,5 x 72',
                'hargasatuan' => 10450.0,
                'acuan' => 'Panfix',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            101 => 
            array (
                'id_standartbiaya' => 103,
                'namabarang' => 'Isolasi kecil 1 x 72',
                'hargasatuan' => 19590.0,
                'acuan' => 'Panfix',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            102 => 
            array (
                'id_standartbiaya' => 104,
                'namabarang' => 'Isolasi Kertas uk. 1*',
                'hargasatuan' => 6300.0,
                'acuan' => 'Ekatape ukuran1 "',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            103 => 
            array (
                'id_standartbiaya' => 105,
                'namabarang' => 'Kabel ',
                'hargasatuan' => 425000.0,
                'acuan' => 'NYM, Sabut besar ',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            104 => 
            array (
                'id_standartbiaya' => 106,
                'namabarang' => 'Kabel LCD',
                'hargasatuan' => 14540.0,
                'acuan' => '5 meter',
                'id_satuan' => '12',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            105 => 
            array (
                'id_standartbiaya' => 107,
                'namabarang' => 'Kabel merah, kuning, hitam',
                'hargasatuan' => 165900.0,
                'acuan' => 'NYA',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            106 => 
            array (
                'id_standartbiaya' => 108,
                'namabarang' => 'Kabel Roll',
                'hargasatuan' => 162600.0,
                'acuan' => 'UTICON, 10 meter',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            107 => 
            array (
                'id_standartbiaya' => 109,
                'namabarang' => 'Kain Majun',
                'hargasatuan' => 8930.0,
                'acuan' => '',
                'id_satuan' => '9',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            108 => 
            array (
                'id_standartbiaya' => 110,
                'namabarang' => 'Kalkulator 12 Digit',
                'hargasatuan' => 159390.0,
                'acuan' => 'Citizen CT-600',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            109 => 
            array (
                'id_standartbiaya' => 111,
                'namabarang' => 'Karet penghapus pensil ',
                'hargasatuan' => 6460.0,
                'acuan' => 'Pelikan',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            110 => 
            array (
                'id_standartbiaya' => 112,
                'namabarang' => 'Karet penghapus pensil besar',
                'hargasatuan' => 7770.0,
                'acuan' => 'Faber Castle',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            111 => 
            array (
                'id_standartbiaya' => 113,
                'namabarang' => 'Karet penghapus pensil kecil',
                'hargasatuan' => 2630.0,
                'acuan' => 'Faber Castle',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            112 => 
            array (
                'id_standartbiaya' => 114,
                'namabarang' => 'Kertas Asturo',
                'hargasatuan' => 2630.0,
                'acuan' => '',
                'id_satuan' => '10',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            113 => 
            array (
                'id_standartbiaya' => 115,
                'namabarang' => 'Kertas Buram uk. Folio',
                'hargasatuan' => 22670.0,
                'acuan' => 'QQ',
                'id_satuan' => '15',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            114 => 
            array (
                'id_standartbiaya' => 116,
                'namabarang' => 'Kertas Continous Form 2 play, 9,5" x 11"',
                'hargasatuan' => 285500.0,
                'acuan' => 'Sinar Dunia',
                'id_satuan' => '2',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            115 => 
            array (
                'id_standartbiaya' => 117,
                'namabarang' => 'Kertas Cover Bufallo A4/F4',
                'hargasatuan' => 45210.0,
                'acuan' => 'Sidu',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            116 => 
            array (
                'id_standartbiaya' => 118,
                'namabarang' => 'Kertas Cover Mika A3',
                'hargasatuan' => 90410.0,
                'acuan' => 'Sidu',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            117 => 
            array (
                'id_standartbiaya' => 119,
                'namabarang' => 'Kertas Cover Mika A4/F4',
                'hargasatuan' => 45210.0,
                'acuan' => 'Sidu',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            118 => 
            array (
                'id_standartbiaya' => 120,
                'namabarang' => 'Kertas Duplikator',
                'hargasatuan' => 43890.0,
                'acuan' => 'JITU',
                'id_satuan' => '15',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            119 => 
            array (
                'id_standartbiaya' => 121,
                'namabarang' => 'Kertas Duplikator',
                'hargasatuan' => 46050.0,
                'acuan' => 'IKA, Putih salju',
                'id_satuan' => '15',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            120 => 
            array (
                'id_standartbiaya' => 122,
                'namabarang' => 'Kertas HVS F4/Folio 70 Gram',
                'hargasatuan' => 57750.0,
                'acuan' => 'Sinar Dunia',
                'id_satuan' => '15',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            121 => 
            array (
                'id_standartbiaya' => 123,
                'namabarang' => 'Kertas HVS F4/Folio 80 Gram',
                'hargasatuan' => 59850.0,
                'acuan' => 'Sinar Dunia',
                'id_satuan' => '15',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            122 => 
            array (
                'id_standartbiaya' => 124,
                'namabarang' => 'Kertas folio garis',
                'hargasatuan' => 38330.0,
                'acuan' => 'Sinar Dunia',
                'id_satuan' => '15',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            123 => 
            array (
                'id_standartbiaya' => 125,
            'namabarang' => 'Kertas Foto/ Photo Paper 5760 dpi-A4(210x297mm)',
                'hargasatuan' => 45680.0,
                'acuan' => '',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            124 => 
            array (
                'id_standartbiaya' => 126,
                'namabarang' => 'Kertas Gambar ',
                'hargasatuan' => 630.0,
                'acuan' => 'BC Putih Ukuran A3',
                'id_satuan' => '10',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            125 => 
            array (
                'id_standartbiaya' => 127,
                'namabarang' => 'Kertas HVS A4 60 gram',
                'hargasatuan' => 47250.0,
                'acuan' => 'Sinar Dunia',
                'id_satuan' => '15',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            126 => 
            array (
                'id_standartbiaya' => 128,
                'namabarang' => 'Kertas HVS A4 70 gram',
                'hargasatuan' => 51450.0,
                'acuan' => 'Sinar Dunia',
                'id_satuan' => '15',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            127 => 
            array (
                'id_standartbiaya' => 129,
                'namabarang' => 'Kertas HVS A4 80 gram',
                'hargasatuan' => 58380.0,
                'acuan' => 'Sinar Dunia',
                'id_satuan' => '15',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            128 => 
            array (
                'id_standartbiaya' => 130,
            'namabarang' => 'Kertas HVS Warna (Kuning Dan Merah)',
                'hargasatuan' => 61740.0,
                'acuan' => 'Sinar Dunia ukuran F4. 70 gram',
                'id_satuan' => '15',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            129 => 
            array (
                'id_standartbiaya' => 131,
                'namabarang' => 'Kertas Kalkir A3',
                'hargasatuan' => 1950.0,
                'acuan' => 'Diamant',
                'id_satuan' => '11',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            130 => 
            array (
                'id_standartbiaya' => 132,
                'namabarang' => 'Kertas Label',
                'hargasatuan' => 60900.0,
                'acuan' => 'Golden ',
                'id_satuan' => '13',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            131 => 
            array (
                'id_standartbiaya' => 133,
                'namabarang' => 'Kertas label No.103',
                'hargasatuan' => 2630.0,
                'acuan' => '3 M',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            132 => 
            array (
                'id_standartbiaya' => 134,
                'namabarang' => 'Kertas Manila putih',
                'hargasatuan' => 2590.0,
                'acuan' => '',
                'id_satuan' => '11',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            133 => 
            array (
                'id_standartbiaya' => 135,
            'namabarang' => 'Kertas Pos It warna 654 (5 warna/set) ',
                'hargasatuan' => 51660.0,
                'acuan' => '3 M',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            134 => 
            array (
                'id_standartbiaya' => 136,
                'namabarang' => 'Kuas 2.5"',
                'hargasatuan' => 9450.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            135 => 
            array (
                'id_standartbiaya' => 137,
                'namabarang' => 'Kuas 3"',
                'hargasatuan' => 11550.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            136 => 
            array (
                'id_standartbiaya' => 138,
                'namabarang' => 'Kwitansi ',
                'hargasatuan' => 4830.0,
                'acuan' => 'Gelatik Kembar',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            137 => 
            array (
                'id_standartbiaya' => 139,
                'namabarang' => 'Lakband Bening 2"',
                'hargasatuan' => 10500.0,
                'acuan' => 'Daimaru',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            138 => 
            array (
                'id_standartbiaya' => 140,
                'namabarang' => 'Lakban Hitam 2"',
                'hargasatuan' => 16170.0,
                'acuan' => 'Daimaru',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            139 => 
            array (
                'id_standartbiaya' => 141,
                'namabarang' => 'Lakband Hitam 1,5"',
                'hargasatuan' => 11920.0,
                'acuan' => 'Daimaru',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            140 => 
            array (
                'id_standartbiaya' => 142,
                'namabarang' => 'Lakband Hitam 1"',
                'hargasatuan' => 8560.0,
                'acuan' => 'Daimaru',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            141 => 
            array (
                'id_standartbiaya' => 143,
                'namabarang' => 'Lem Alteco',
                'hargasatuan' => 9930.0,
                'acuan' => 'Alteco 20 Gram',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            142 => 
            array (
                'id_standartbiaya' => 144,
                'namabarang' => 'Lem Castol',
                'hargasatuan' => 6570.0,
                'acuan' => 'Castol 21 ccm',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            143 => 
            array (
                'id_standartbiaya' => 145,
                'namabarang' => 'Lem kertas tanggung',
                'hargasatuan' => 3150.0,
                'acuan' => 'Glukol',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            144 => 
            array (
                'id_standartbiaya' => 146,
                'namabarang' => 'Lem Kertas Besar',
                'hargasatuan' => 6670.0,
                'acuan' => 'Glukol',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            145 => 
            array (
                'id_standartbiaya' => 147,
                'namabarang' => 'Lem Pasta UHU',
                'hargasatuan' => 18320.0,
                'acuan' => 'UHU',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            146 => 
            array (
                'id_standartbiaya' => 148,
                'namabarang' => 'Lem Perekat Aica Aibon',
                'hargasatuan' => 14390.0,
                'acuan' => 'Aica Aibon',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            147 => 
            array (
                'id_standartbiaya' => 149,
                'namabarang' => 'Lem Stick 15 gram',
                'hargasatuan' => 5250.0,
                'acuan' => 'Kenko ',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            148 => 
            array (
                'id_standartbiaya' => 150,
                'namabarang' => 'Lem Stick 25 gram',
                'hargasatuan' => 10350.0,
                'acuan' => 'Kenko',
                'id_satuan' => '18',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            149 => 
            array (
                'id_standartbiaya' => 151,
                'namabarang' => 'Lem Stick 8 gram',
                'hargasatuan' => 3890.0,
                'acuan' => 'Kenko',
                'id_satuan' => '18',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            150 => 
            array (
                'id_standartbiaya' => 152,
                'namabarang' => 'Map Karton',
                'hargasatuan' => 420.0,
                'acuan' => 'Melodi',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            151 => 
            array (
                'id_standartbiaya' => 153,
                'namabarang' => 'Map plastik Jepit',
                'hargasatuan' => 0.0,
                'acuan' => 'Eagle',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            152 => 
            array (
                'id_standartbiaya' => 154,
                'namabarang' => 'Map plastik kancing',
                'hargasatuan' => 9870.0,
                'acuan' => 'Eagle',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            153 => 
            array (
                'id_standartbiaya' => 155,
                'namabarang' => 'Map plastik tali',
                'hargasatuan' => 9870.0,
                'acuan' => 'Eagle',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            154 => 
            array (
                'id_standartbiaya' => 156,
                'namabarang' => 'Map Snelhecter',
                'hargasatuan' => 9870.0,
                'acuan' => 'Seagull',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            155 => 
            array (
                'id_standartbiaya' => 157,
                'namabarang' => 'Master Risograph - RZ 330 AW',
                'hargasatuan' => 1205300.0,
                'acuan' => 'Riso',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            156 => 
            array (
                'id_standartbiaya' => 158,
                'namabarang' => 'MMT/Spanduk',
                'hargasatuan' => 25000.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            157 => 
            array (
                'id_standartbiaya' => 159,
                'namabarang' => 'Mouse PAD',
                'hargasatuan' => 23630.0,
                'acuan' => 'Microsof',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            158 => 
            array (
                'id_standartbiaya' => 160,
                'namabarang' => 'Odner Besar ',
                'hargasatuan' => 19900.0,
                'acuan' => 'Bantex/AKTA',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            159 => 
            array (
                'id_standartbiaya' => 161,
                'namabarang' => 'Odner Kecil ',
                'hargasatuan' => 18590.0,
                'acuan' => 'Bantex',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            160 => 
            array (
                'id_standartbiaya' => 162,
                'namabarang' => 'Penggaris besi 1 m',
                'hargasatuan' => 35490.0,
                'acuan' => 'Kenko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            161 => 
            array (
                'id_standartbiaya' => 163,
                'namabarang' => 'Penggaris besi 30 cm',
                'hargasatuan' => 6460.0,
                'acuan' => 'Kenko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            162 => 
            array (
                'id_standartbiaya' => 164,
                'namabarang' => 'Penggaris besi 40 cm',
                'hargasatuan' => 12920.0,
                'acuan' => 'Kenko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            163 => 
            array (
                'id_standartbiaya' => 165,
                'namabarang' => 'Penggaris mika 1 m',
                'hargasatuan' => 10710.0,
                'acuan' => 'Butterfly',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            164 => 
            array (
                'id_standartbiaya' => 166,
                'namabarang' => 'Penggaris mika 30 cm',
                'hargasatuan' => 2630.0,
                'acuan' => 'Butterfly',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            165 => 
            array (
                'id_standartbiaya' => 167,
                'namabarang' => 'Penggaris mika 40 cm',
                'hargasatuan' => 7770.0,
                'acuan' => 'Butterfly',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            166 => 
            array (
                'id_standartbiaya' => 168,
                'namabarang' => 'Penghapus pensil besar',
                'hargasatuan' => 7770.0,
                'acuan' => 'Faber Castle',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            167 => 
            array (
                'id_standartbiaya' => 169,
                'namabarang' => 'Penghapus pensil kecil',
                'hargasatuan' => 2840.0,
                'acuan' => 'Faber Castle',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            168 => 
            array (
                'id_standartbiaya' => 170,
                'namabarang' => 'Penghapus pensil pelikan',
                'hargasatuan' => 6670.0,
                'acuan' => 'Pelikan',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            169 => 
            array (
                'id_standartbiaya' => 171,
                'namabarang' => 'Penghapus White Board',
                'hargasatuan' => 8190.0,
                'acuan' => 'Gunindo',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            170 => 
            array (
                'id_standartbiaya' => 172,
                'namabarang' => 'Pengharum ruangan',
                'hargasatuan' => 13230.0,
            'acuan' => 'Stella (all in one)',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            171 => 
            array (
                'id_standartbiaya' => 173,
                'namabarang' => 'Pensil 2B',
                'hargasatuan' => 3680.0,
                'acuan' => 'Steadler',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            172 => 
            array (
                'id_standartbiaya' => 174,
                'namabarang' => 'Pita Cash Register',
                'hargasatuan' => 59330.0,
            'acuan' => 'Bixolon (ABS) Model SRP-27511C Kompatible',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            173 => 
            array (
                'id_standartbiaya' => 175,
                'namabarang' => 'Pita Corection mesin ketik',
                'hargasatuan' => 7250.0,
                'acuan' => 'Fullmark',
                'id_satuan' => '15',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            174 => 
            array (
                'id_standartbiaya' => 176,
                'namabarang' => 'Pita Correction 1030',
                'hargasatuan' => 14600.0,
                'acuan' => 'Brother 1030',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            175 => 
            array (
                'id_standartbiaya' => 177,
                'namabarang' => 'Pita Mesin Ketik Elektrik EM430 Compatble',
                'hargasatuan' => 81590.0,
                'acuan' => 'Brother EM430 Compatible',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            176 => 
            array (
                'id_standartbiaya' => 178,
                'namabarang' => 'Pita Mesin Ketik Elektrik ',
                'hargasatuan' => 49770.0,
                'acuan' => 'Compact 5 DM Olympia Compatible',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            177 => 
            array (
                'id_standartbiaya' => 179,
                'namabarang' => 'Pita Mesin Ketik Elektronik 1030 original',
                'hargasatuan' => 98910.0,
                'acuan' => 'Brother 1030 original',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            178 => 
            array (
                'id_standartbiaya' => 180,
                'namabarang' => 'Pita Mesin Ketik Manual',
                'hargasatuan' => 37170.0,
                'acuan' => 'Swallow',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            179 => 
            array (
                'id_standartbiaya' => 181,
                'namabarang' => 'Pita Printer SO 15632',
                'hargasatuan' => 59780.0,
                'acuan' => 'EPSON SO15632',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            180 => 
            array (
                'id_standartbiaya' => 182,
                'namabarang' => 'Pita Printer Epson LQ 2170/2180 original',
                'hargasatuan' => 97020.0,
                'acuan' => 'Epson',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            181 => 
            array (
                'id_standartbiaya' => 183,
                'namabarang' => 'Pita Printer Epson LQ 310 original',
                'hargasatuan' => 48510.0,
                'acuan' => 'Epson',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            182 => 
            array (
                'id_standartbiaya' => 184,
            'namabarang' => 'Plastik bening tebal (100 m)',
                'hargasatuan' => 368500.0,
                'acuan' => '',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            183 => 
            array (
                'id_standartbiaya' => 185,
                'namabarang' => 'Plastik Laminating Ukuran Foilo',
                'hargasatuan' => 106050.0,
                'acuan' => 'Toho',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            184 => 
            array (
                'id_standartbiaya' => 186,
            'namabarang' => 'Post it (kecil)',
                'hargasatuan' => 10500.0,
                'acuan' => 'Pronto',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            185 => 
            array (
                'id_standartbiaya' => 187,
            'namabarang' => 'Post It (Sign Here)',
                'hargasatuan' => 16940.0,
                'acuan' => '3M',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            186 => 
            array (
                'id_standartbiaya' => 188,
            'namabarang' => 'Rautan pensil besar  Angel-5 (meja)',
                'hargasatuan' => 52290.0,
                'acuan' => 'Kenko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            187 => 
            array (
                'id_standartbiaya' => 189,
                'namabarang' => 'Rautan pensil kecil ',
                'hargasatuan' => 2630.0,
                'acuan' => 'Kenko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            188 => 
            array (
                'id_standartbiaya' => 190,
            'namabarang' => 'Rautan pensil sedang  A-3  (meja)',
                'hargasatuan' => 38750.0,
                'acuan' => 'Kenko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            189 => 
            array (
                'id_standartbiaya' => 191,
                'namabarang' => 'Refil Spidol Marker/Permanen',
                'hargasatuan' => 12920.0,
                'acuan' => 'Snowman',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            190 => 
            array (
                'id_standartbiaya' => 192,
                'namabarang' => 'Refil Spidol Whiteboard',
                'hargasatuan' => 16590.0,
                'acuan' => 'Snowman',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            191 => 
            array (
                'id_standartbiaya' => 193,
                'namabarang' => 'Spidol Permanen Besar 500 ',
                'hargasatuan' => 16170.0,
                'acuan' => 'Snowman ',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            192 => 
            array (
                'id_standartbiaya' => 194,
                'namabarang' => 'Spidol White Board Marker Hitam, Biru, Merah',
                'hargasatuan' => 8140.0,
                'acuan' => 'Snowman',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            193 => 
            array (
                'id_standartbiaya' => 195,
            'namabarang' => 'Spidol Permanen  (Biru, Merah, Hitam)',
                'hargasatuan' => 6620.0,
                'acuan' => 'Snowman',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            194 => 
            array (
                'id_standartbiaya' => 196,
                'namabarang' => 'Spidol Permanent kecil',
                'hargasatuan' => 1320.0,
                'acuan' => 'Snowman',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            195 => 
            array (
                'id_standartbiaya' => 197,
            'namabarang' => 'Spidol kecil (biru, merah, hitam)',
                'hargasatuan' => 1260.0,
                'acuan' => 'Snowman',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            196 => 
            array (
                'id_standartbiaya' => 198,
            'namabarang' => 'Spidol Permanen  (Silver, putih)',
                'hargasatuan' => 14020.0,
                'acuan' => 'Snowman',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            197 => 
            array (
                'id_standartbiaya' => 199,
                'namabarang' => 'Stabillo',
                'hargasatuan' => 9240.0,
                'acuan' => 'Boss',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            198 => 
            array (
                'id_standartbiaya' => 200,
                'namabarang' => 'Stapler Besar HD 50',
                'hargasatuan' => 71930.0,
                'acuan' => 'MAX HD-50',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            199 => 
            array (
                'id_standartbiaya' => 201,
                'namabarang' => 'Stapler Besar HD 50',
                'hargasatuan' => 72770.0,
                'acuan' => 'Kenko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            200 => 
            array (
                'id_standartbiaya' => 202,
                'namabarang' => 'Stapler Kecil HD 10',
                'hargasatuan' => 18800.0,
                'acuan' => 'MAX HD-10',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            201 => 
            array (
                'id_standartbiaya' => 203,
                'namabarang' => 'Stapler Kecil HD 10',
                'hargasatuan' => 19110.0,
                'acuan' => 'Kenko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            202 => 
            array (
                'id_standartbiaya' => 204,
            'namabarang' => 'Steaker (3 slot u/ Laptop)',
                'hargasatuan' => 21790.0,
                'acuan' => 'BROCO',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            203 => 
            array (
                'id_standartbiaya' => 205,
            'namabarang' => 'Stecker (cop) ',
                'hargasatuan' => 21790.0,
                'acuan' => 'BROCO',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            204 => 
            array (
                'id_standartbiaya' => 206,
                'namabarang' => 'Stopmap Kertas Folio',
                'hargasatuan' => 420.0,
                'acuan' => 'Panda',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            205 => 
            array (
                'id_standartbiaya' => 207,
                'namabarang' => 'Stopmap Kertas Folio',
                'hargasatuan' => 480.0,
                'acuan' => 'Melody',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            206 => 
            array (
                'id_standartbiaya' => 208,
                'namabarang' => 'Stopmap plastik jepit',
                'hargasatuan' => 5720.0,
                'acuan' => 'Eagle',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            207 => 
            array (
                'id_standartbiaya' => 209,
                'namabarang' => 'Stopmap plastik kancing  ',
                'hargasatuan' => 4410.0,
                'acuan' => 'Eagle',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            208 => 
            array (
                'id_standartbiaya' => 210,
                'namabarang' => 'Stopmap plastik/clips file',
                'hargasatuan' => 7140.0,
                'acuan' => 'Eagle',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            209 => 
            array (
                'id_standartbiaya' => 211,
                'namabarang' => 'T dos listrik',
                'hargasatuan' => 6000.0,
                'acuan' => 'BROCO',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            210 => 
            array (
                'id_standartbiaya' => 212,
                'namabarang' => 'T Listrik/Stop Kontak',
                'hargasatuan' => 22000.0,
                'acuan' => 'BROCO',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            211 => 
            array (
                'id_standartbiaya' => 213,
                'namabarang' => 'Tali rafia 1 kg',
                'hargasatuan' => 21000.0,
                'acuan' => '',
                'id_satuan' => '16',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            212 => 
            array (
                'id_standartbiaya' => 214,
                'namabarang' => 'Tempat ATK Kotak Ukuran A4',
                'hargasatuan' => 27500.0,
                'acuan' => 'Maspion',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            213 => 
            array (
                'id_standartbiaya' => 215,
                'namabarang' => 'Terminal blok listrik isi 12',
                'hargasatuan' => 135000.0,
                'acuan' => 'Legrand',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            214 => 
            array (
                'id_standartbiaya' => 216,
                'namabarang' => 'Terminal PCB isi 2',
                'hargasatuan' => 5000.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            215 => 
            array (
                'id_standartbiaya' => 217,
                'namabarang' => 'Terminal PCB isi 3',
                'hargasatuan' => 8000.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            216 => 
            array (
                'id_standartbiaya' => 218,
            'namabarang' => 'Tinta Broad Maker (isi 12 botol)',
                'hargasatuan' => 191260.0,
                'acuan' => 'Snowman',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            217 => 
            array (
                'id_standartbiaya' => 219,
                'namabarang' => 'Tinta Epson L210',
                'hargasatuan' => 404800.0,
                'acuan' => 'Epson, 70 ml.',
                'id_satuan' => '17',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            218 => 
            array (
                'id_standartbiaya' => 220,
                'namabarang' => 'Tinta Fax KX-FA93A/KX-FA57E',
                'hargasatuan' => 75900.0,
                'acuan' => 'Panasonic',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            219 => 
            array (
                'id_standartbiaya' => 221,
                'namabarang' => 'Toner Riso RZ330AW',
                'hargasatuan' => 570500.0,
                'acuan' => 'Riso',
                'id_satuan' => '18',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            220 => 
            array (
                'id_standartbiaya' => 222,
                'namabarang' => 'Tinta Stempel Ungu',
                'hargasatuan' => 32200.0,
                'acuan' => 'Zenith',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            221 => 
            array (
                'id_standartbiaya' => 223,
                'namabarang' => 'Tinta printer L310',
                'hargasatuan' => 455400.0,
                'acuan' => 'Epson',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            222 => 
            array (
                'id_standartbiaya' => 224,
                'namabarang' => 'Tipe Dispenser',
                'hargasatuan' => 23000.0,
                'acuan' => 'Joyko',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            223 => 
            array (
                'id_standartbiaya' => 225,
                'namabarang' => 'Tip-ex',
                'hargasatuan' => 0.0,
                'acuan' => 'Penthel',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            224 => 
            array (
                'id_standartbiaya' => 226,
                'namabarang' => 'Tissu 120 play',
                'hargasatuan' => 15100.0,
                'acuan' => '',
                'id_satuan' => '14',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            225 => 
            array (
                'id_standartbiaya' => 227,
                'namabarang' => 'Toner Fotocopy  NPG-51',
                'hargasatuan' => 1222300.0,
                'acuan' => 'Canon',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            226 => 
            array (
                'id_standartbiaya' => 228,
                'namabarang' => 'Toner Printer HP  78 A Original',
                'hargasatuan' => 1181250.0,
                'acuan' => 'HP',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            227 => 
            array (
                'id_standartbiaya' => 229,
                'namabarang' => 'Toner Printer HP  17 A Original',
                'hargasatuan' => 1169490.0,
                'acuan' => 'HP',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            228 => 
            array (
                'id_standartbiaya' => 230,
                'namabarang' => 'Toner Printer HP Laserjat Seri 12 A Original',
                'hargasatuan' => 1300950.0,
                'acuan' => 'HP',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            229 => 
            array (
                'id_standartbiaya' => 231,
                'namabarang' => 'Toner Printer HP Laserjat Seri 35 A Original',
                'hargasatuan' => 1129020.0,
                'acuan' => 'HP',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            230 => 
            array (
                'id_standartbiaya' => 232,
                'namabarang' => 'Toner Printer HP Laserjat Seri 49 A Original',
                'hargasatuan' => 1606550.0,
                'acuan' => 'HP',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            231 => 
            array (
                'id_standartbiaya' => 233,
                'namabarang' => 'Toner Printer HP Laserjat Seri 85 A Original',
                'hargasatuan' => 1143450.0,
                'acuan' => 'HP',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            232 => 
            array (
                'id_standartbiaya' => 234,
                'namabarang' => 'Toner Printer Laserjat Seri 12 A ',
                'hargasatuan' => 528700.0,
                'acuan' => 'EIKONA',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            233 => 
            array (
                'id_standartbiaya' => 235,
                'namabarang' => 'Toner Printer Laserjat Seri 35 A ',
                'hargasatuan' => 528000.0,
                'acuan' => 'EIKONA',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            234 => 
            array (
                'id_standartbiaya' => 236,
                'namabarang' => 'Toner Printer Laserjat Seri 35 A ',
                'hargasatuan' => 417400.0,
                'acuan' => 'Qualiva',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            235 => 
            array (
                'id_standartbiaya' => 237,
                'namabarang' => 'Toner Printer Laserjat Seri 85 A ',
                'hargasatuan' => 531300.0,
                'acuan' => 'EIKONA',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            236 => 
            array (
                'id_standartbiaya' => 238,
                'namabarang' => 'Toner Printer Laserjat Seri 85 A ',
                'hargasatuan' => 321400.0,
                'acuan' => 'Maximus',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            237 => 
            array (
                'id_standartbiaya' => 239,
                'namabarang' => 'Toner Printer Laserjat Seri 85A  ',
                'hargasatuan' => 577500.0,
                'acuan' => 'ETON',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            238 => 
            array (
                'id_standartbiaya' => 240,
                'namabarang' => 'Toner Printer Laserjat Seri 85A  ',
                'hargasatuan' => 569200.0,
                'acuan' => 'Qualiva',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            239 => 
            array (
                'id_standartbiaya' => 241,
            'namabarang' => 'Toner Printer Warna 410A (1 set 4 warna)',
                'hargasatuan' => 7400000.0,
                'acuan' => 'HP',
                'id_satuan' => '17',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            240 => 
            array (
                'id_standartbiaya' => 242,
                'namabarang' => 'Kayu Usuk 5 x 7 x 400',
                'hargasatuan' => 118810.0,
                'acuan' => 'Kruwing',
                'id_satuan' => '1 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            241 => 
            array (
                'id_standartbiaya' => 243,
                'namabarang' => 'Kaya Papan 2 x 20 x 400',
                'hargasatuan' => 165380.0,
                'acuan' => 'Kruwing',
                'id_satuan' => '11 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            242 => 
            array (
                'id_standartbiaya' => 244,
                'namabarang' => 'Kayu 6 x 12 x 400',
                'hargasatuan' => 238350.0,
                'acuan' => 'Kruwing',
                'id_satuan' => '1 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            243 => 
            array (
                'id_standartbiaya' => 245,
                'namabarang' => 'Kayu Ram 4 x 12 x 400',
                'hargasatuan' => 179240.0,
                'acuan' => 'Kruwing',
                'id_satuan' => '1 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            244 => 
            array (
                'id_standartbiaya' => 246,
                'namabarang' => 'Multiplek 18 mm',
                'hargasatuan' => 325500.0,
                'acuan' => 'Mawar',
                'id_satuan' => '3 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            245 => 
            array (
                'id_standartbiaya' => 247,
                'namabarang' => 'Multiplek 15 mm',
                'hargasatuan' => 285600.0,
                'acuan' => 'Mawar',
                'id_satuan' => '3 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            246 => 
            array (
                'id_standartbiaya' => 248,
                'namabarang' => 'Paku 2"',
                'hargasatuan' => 17330.0,
                'acuan' => '2"',
                'id_satuan' => '9 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            247 => 
            array (
                'id_standartbiaya' => 249,
                'namabarang' => 'Paku 1 1/2"',
                'hargasatuan' => 17010.0,
                'acuan' => '1 1/2"',
                'id_satuan' => '9 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            248 => 
            array (
                'id_standartbiaya' => 250,
                'namabarang' => 'Kantong Plastik 7 Kg',
                'hargasatuan' => 99600.0,
                'acuan' => '25x40x05 mm',
                'id_satuan' => '14 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            249 => 
            array (
                'id_standartbiaya' => 251,
                'namabarang' => 'Benang Tukang',
                'hargasatuan' => 6300.0,
                'acuan' => 'Nylon',
                'id_satuan' => '3 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            250 => 
            array (
                'id_standartbiaya' => 252,
                'namabarang' => 'Cat Humer Tune',
                'hargasatuan' => 92980.0,
                'acuan' => 'Kaleng',
                'id_satuan' => '9 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            251 => 
            array (
                'id_standartbiaya' => 253,
                'namabarang' => 'Mur Baut M10 x 25',
                'hargasatuan' => 6200.0,
                'acuan' => 'Besi',
                'id_satuan' => '3 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            252 => 
            array (
                'id_standartbiaya' => 254,
                'namabarang' => 'Masker',
                'hargasatuan' => 3150.0,
                'acuan' => 'Kain',
                'id_satuan' => '3 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            253 => 
            array (
                'id_standartbiaya' => 255,
                'namabarang' => 'Mata Gergaji Besi',
                'hargasatuan' => 17010.0,
                'acuan' => 'Sandflex',
                'id_satuan' => '3 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            254 => 
            array (
                'id_standartbiaya' => 256,
                'namabarang' => 'Paku Payung Kecil 1"',
                'hargasatuan' => 30350.0,
                'acuan' => '',
                'id_satuan' => '9 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            255 => 
            array (
                'id_standartbiaya' => 257,
                'namabarang' => 'Paku Reng 1"',
                'hargasatuan' => 22530.0,
                'acuan' => '',
                'id_satuan' => '9 ',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            256 => 
            array (
                'id_standartbiaya' => 258,
                'namabarang' => 'Jilid Hard cover',
                'hargasatuan' => 20000.0,
                'acuan' => '-',
                'id_satuan' => '37',
                'id_akun' => 1,
                'id_kelompok' => 8,
            ),
            257 => 
            array (
                'id_standartbiaya' => 259,
                'namabarang' => 'Jilid Soft Cover',
                'hargasatuan' => 10000.0,
                'acuan' => '-',
                'id_satuan' => '37',
                'id_akun' => 1,
                'id_kelompok' => 8,
            ),
            258 => 
            array (
                'id_standartbiaya' => 260,
                'namabarang' => 'Jilid Sederhana',
                'hargasatuan' => 8000.0,
                'acuan' => '-',
                'id_satuan' => '37',
                'id_akun' => 1,
                'id_kelompok' => 8,
            ),
            259 => 
            array (
                'id_standartbiaya' => 261,
                'namabarang' => 'Sewa gedung Pertemua',
                'hargasatuan' => 13125000.0,
                'acuan' => '-',
                'id_satuan' => '38',
                'id_akun' => 7,
                'id_kelompok' => 30,
            ),
            260 => 
            array (
                'id_standartbiaya' => 262,
                'namabarang' => 'Makan',
                'hargasatuan' => 27000.0,
                'acuan' => '-',
                'id_satuan' => '35',
                'id_akun' => 1,
                'id_kelompok' => 9,
            ),
            261 => 
            array (
                'id_standartbiaya' => 263,
            'namabarang' => 'Jamuan Makan (Prasmanan)',
                'hargasatuan' => 38000.0,
                'acuan' => '-',
                'id_satuan' => '35',
                'id_akun' => 1,
                'id_kelompok' => 9,
            ),
            262 => 
            array (
                'id_standartbiaya' => 264,
                'namabarang' => 'Jamuan Minuman dan makanan kecil',
                'hargasatuan' => 15000.0,
                'acuan' => '-',
                'id_satuan' => '35',
                'id_akun' => 1,
                'id_kelompok' => 9,
            ),
            263 => 
            array (
                'id_standartbiaya' => 265,
                'namabarang' => 'uang saku rapat golongan I dan II',
                'hargasatuan' => 300000.0,
                'acuan' => '-',
                'id_satuan' => '35',
                'id_akun' => 9,
                'id_kelompok' => 36,
            ),
            264 => 
            array (
                'id_standartbiaya' => 266,
                'namabarang' => 'uang saku rapat golongan III',
                'hargasatuan' => 350000.0,
                'acuan' => '-',
                'id_satuan' => '35',
                'id_akun' => 9,
                'id_kelompok' => 36,
            ),
            265 => 
            array (
                'id_standartbiaya' => 267,
                'namabarang' => 'uang saku rapat golongan IV',
                'hargasatuan' => 400000.0,
                'acuan' => '-',
                'id_satuan' => '35',
                'id_akun' => 9,
                'id_kelompok' => 36,
            ),
            266 => 
            array (
                'id_standartbiaya' => 268,
                'namabarang' => 'Snack',
                'hargasatuan' => 15000.0,
                'acuan' => '-',
                'id_satuan' => '35',
                'id_akun' => 1,
                'id_kelompok' => 9,
            ),
            267 => 
            array (
                'id_standartbiaya' => 269,
                'namabarang' => 'Foto Copy',
                'hargasatuan' => 200.0,
                'acuan' => '-',
                'id_satuan' => '10',
                'id_akun' => 1,
                'id_kelompok' => 8,
            ),
            268 => 
            array (
                'id_standartbiaya' => 270,
            'namabarang' => 'Uang transport (tdk menggunakan kendaraan dinas)',
                'hargasatuan' => 150000.0,
                'acuan' => '-',
                'id_satuan' => '39',
                'id_akun' => 33,
                'id_kelompok' => 50,
            ),
            269 => 
            array (
                'id_standartbiaya' => 271,
                'namabarang' => 'Uang saku',
                'hargasatuan' => 100000.0,
                'acuan' => 'terkait dengan kegiatan yang bersifat kedinasan dan melekat pada tupoksi',
                'id_satuan' => '39',
                'id_akun' => 33,
                'id_kelompok' => 50,
            ),
            270 => 
            array (
                'id_standartbiaya' => 272,
                'namabarang' => 'Hotel / penginapan',
                'hargasatuan' => 0.0,
                'acuan' => 'Silahkan sesuaikan dengan peraturaan yang berlaku',
                'id_satuan' => '23',
                'id_akun' => 10,
                'id_kelompok' => 52,
            ),
            271 => 
            array (
                'id_standartbiaya' => 273,
                'namabarang' => 'taxi',
                'hargasatuan' => 0.0,
                'acuan' => 'Silahkan sesuaikan dengan peraturaan yang berlaku',
                'id_satuan' => '39',
                'id_akun' => 33,
                'id_kelompok' => 50,
            ),
            272 => 
            array (
                'id_standartbiaya' => 274,
                'namabarang' => 'Perjalanan Dinas Tiket Darat ',
                'hargasatuan' => 0.0,
                'acuan' => 'Silahkan sesuaikan dengan peraturaan yang berlaku',
                'id_satuan' => '35',
                'id_akun' => 10,
                'id_kelompok' => 49,
            ),
            273 => 
            array (
                'id_standartbiaya' => 275,
                'namabarang' => 'Tiket Kereta Api',
                'hargasatuan' => 0.0,
                'acuan' => 'Silahkan sesuaikan dengan peraturaan yang berlaku',
                'id_satuan' => '0',
                'id_akun' => 33,
                'id_kelompok' => 49,
            ),
            274 => 
            array (
                'id_standartbiaya' => 276,
                'namabarang' => 'Perjalanan Dinas Tiket pesawat terbang',
                'hargasatuan' => 0.0,
                'acuan' => 'Silahkan sesuaikan dengan peraturaan yang berlaku',
                'id_satuan' => '35',
                'id_akun' => 10,
                'id_kelompok' => 49,
            ),
            275 => 
            array (
                'id_standartbiaya' => 277,
                'namabarang' => 'Perjalanan Dinas Tiket Kapal Laut',
                'hargasatuan' => 0.0,
                'acuan' => 'Silahkan sesuaikan dengan peraturaan yang berlaku',
                'id_satuan' => '35',
                'id_akun' => 10,
                'id_kelompok' => 49,
            ),
            276 => 
            array (
                'id_standartbiaya' => 278,
                'namabarang' => 'sewa mobil',
                'hargasatuan' => 0.0,
                'acuan' => '-',
                'id_satuan' => '38',
                'id_akun' => 7,
                'id_kelompok' => 30,
            ),
            277 => 
            array (
                'id_standartbiaya' => 279,
                'namabarang' => 'Stampel Biasa',
                'hargasatuan' => 35000.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            278 => 
            array (
                'id_standartbiaya' => 280,
                'namabarang' => 'Cocard mika',
                'hargasatuan' => 2500.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            279 => 
            array (
                'id_standartbiaya' => 281,
                'namabarang' => 'Tali Cocard',
                'hargasatuan' => 700.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            280 => 
            array (
                'id_standartbiaya' => 282,
                'namabarang' => 'Poster Ukuran A2',
                'hargasatuan' => 4000.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 11,
            ),
            281 => 
            array (
                'id_standartbiaya' => 283,
                'namabarang' => 'X-Banner',
                'hargasatuan' => 150000.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 11,
            ),
            282 => 
            array (
                'id_standartbiaya' => 284,
                'namabarang' => 'Bendera merah putih ukuran besar',
                'hargasatuan' => 400000.0,
                'acuan' => 'harga pasar th 2018',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 2,
            ),
            283 => 
            array (
                'id_standartbiaya' => 285,
                'namabarang' => 'slayer',
                'hargasatuan' => 15000.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 25,
                'id_kelompok' => 2,
            ),
            284 => 
            array (
                'id_standartbiaya' => 286,
                'namabarang' => 'Dahrem',
                'hargasatuan' => 35000.0,
                'acuan' => '',
                'id_satuan' => '17',
                'id_akun' => 25,
                'id_kelompok' => 1,
            ),
            285 => 
            array (
                'id_standartbiaya' => 287,
                'namabarang' => 'Kaos Tangan',
                'hargasatuan' => 15000.0,
                'acuan' => '',
                'id_satuan' => '17',
                'id_akun' => 25,
                'id_kelompok' => 1,
            ),
            286 => 
            array (
                'id_standartbiaya' => 288,
                'namabarang' => 'fotocopy warna',
                'hargasatuan' => 2000.0,
                'acuan' => 'SBU',
                'id_satuan' => '11',
                'id_akun' => 1,
                'id_kelompok' => 8,
            ),
            287 => 
            array (
                'id_standartbiaya' => 289,
                'namabarang' => 'topi',
                'hargasatuan' => 40000.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 80,
            ),
            288 => 
            array (
                'id_standartbiaya' => 290,
                'namabarang' => 'selang APAR',
                'hargasatuan' => 120000.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 2,
            ),
            289 => 
            array (
                'id_standartbiaya' => 291,
                'namabarang' => 'sarung tangan pemadam',
                'hargasatuan' => 275000.0,
                'acuan' => '',
                'id_satuan' => '17',
                'id_akun' => 1,
                'id_kelompok' => 2,
            ),
            290 => 
            array (
                'id_standartbiaya' => 292,
                'namabarang' => 'Flash disk 32 GB Toshiba',
                'hargasatuan' => 211000.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            291 => 
            array (
                'id_standartbiaya' => 293,
                'namabarang' => 'Cetak Sertifikat',
                'hargasatuan' => 5000.0,
                'acuan' => '',
                'id_satuan' => '10',
                'id_akun' => 1,
                'id_kelompok' => 11,
            ),
            292 => 
            array (
                'id_standartbiaya' => 294,
                'namabarang' => 'Plakat',
                'hargasatuan' => 100000.0,
                'acuan' => '',
                'id_satuan' => '0',
                'id_akun' => 25,
                'id_kelompok' => 1,
            ),
            293 => 
            array (
                'id_standartbiaya' => 295,
                'namabarang' => 'Sewa Partisi',
                'hargasatuan' => 70000.0,
                'acuan' => '',
                'id_satuan' => '12',
                'id_akun' => 7,
                'id_kelompok' => 30,
            ),
            294 => 
            array (
                'id_standartbiaya' => 296,
                'namabarang' => 'Canting batik',
                'hargasatuan' => 5000.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            295 => 
            array (
                'id_standartbiaya' => 297,
            'namabarang' => 'Kain katun prima (meteran)',
                'hargasatuan' => 15000.0,
                'acuan' => '',
                'id_satuan' => '12',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            296 => 
            array (
                'id_standartbiaya' => 298,
            'namabarang' => 'Malam (lilin)',
                'hargasatuan' => 30000.0,
                'acuan' => '',
                'id_satuan' => '9',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            297 => 
            array (
                'id_standartbiaya' => 299,
                'namabarang' => 'Cap batik kecil',
                'hargasatuan' => 60000.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            298 => 
            array (
                'id_standartbiaya' => 300,
                'namabarang' => 'Kompor batik',
                'hargasatuan' => 300000.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            299 => 
            array (
                'id_standartbiaya' => 301,
                'namabarang' => 'Naptol',
                'hargasatuan' => 8000.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            300 => 
            array (
                'id_standartbiaya' => 302,
                'namabarang' => 'Parafin',
                'hargasatuan' => 25000.0,
                'acuan' => '',
                'id_satuan' => '9',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            301 => 
            array (
                'id_standartbiaya' => 303,
                'namabarang' => 'Tabel Pewarna',
                'hargasatuan' => 17500.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            302 => 
            array (
                'id_standartbiaya' => 304,
            'namabarang' => 'Tinggi (Untuk Pewarna Alami)',
                'hargasatuan' => 25000.0,
                'acuan' => '',
                'id_satuan' => '9',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            303 => 
            array (
                'id_standartbiaya' => 305,
            'namabarang' => 'Secang (untuk pewarna alami)',
                'hargasatuan' => 35600.0,
                'acuan' => '',
                'id_satuan' => '13',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            304 => 
            array (
                'id_standartbiaya' => 306,
                'namabarang' => 'Mangkok Stainless 18 inch',
                'hargasatuan' => 10000.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            305 => 
            array (
                'id_standartbiaya' => 307,
                'namabarang' => 'Panci 30 cm',
                'hargasatuan' => 62000.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            306 => 
            array (
                'id_standartbiaya' => 308,
                'namabarang' => 'Panci 26 cm',
                'hargasatuan' => 36300.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            307 => 
            array (
                'id_standartbiaya' => 309,
                'namabarang' => 'Panci kecil',
                'hargasatuan' => 29500.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            308 => 
            array (
                'id_standartbiaya' => 310,
                'namabarang' => 'Gayung plastik',
                'hargasatuan' => 9500.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            309 => 
            array (
                'id_standartbiaya' => 311,
                'namabarang' => 'Sarung tangan plastik',
                'hargasatuan' => 12000.0,
                'acuan' => '',
                'id_satuan' => '6',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            310 => 
            array (
                'id_standartbiaya' => 312,
                'namabarang' => 'Wajan Kecil',
                'hargasatuan' => 9000.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            311 => 
            array (
                'id_standartbiaya' => 313,
                'namabarang' => 'Pengaduk Kayu Besar',
                'hargasatuan' => 20500.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            312 => 
            array (
                'id_standartbiaya' => 314,
                'namabarang' => 'Saringan',
                'hargasatuan' => 9000.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            313 => 
            array (
                'id_standartbiaya' => 315,
                'namabarang' => 'Nampan Plastik',
                'hargasatuan' => 35000.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            314 => 
            array (
                'id_standartbiaya' => 316,
                'namabarang' => 'Serbet',
                'hargasatuan' => 4250.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            315 => 
            array (
                'id_standartbiaya' => 317,
                'namabarang' => 'Busa ',
                'hargasatuan' => 40000.0,
                'acuan' => '',
                'id_satuan' => '12',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            316 => 
            array (
                'id_standartbiaya' => 318,
                'namabarang' => 'Lampen',
                'hargasatuan' => 10800.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            317 => 
            array (
                'id_standartbiaya' => 319,
                'namabarang' => 'Penjepit Jemuran',
                'hargasatuan' => 4000.0,
                'acuan' => '',
                'id_satuan' => '13',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            318 => 
            array (
                'id_standartbiaya' => 320,
                'namabarang' => 'Ember besar',
                'hargasatuan' => 25000.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            319 => 
            array (
                'id_standartbiaya' => 321,
                'namabarang' => 'Tampah',
                'hargasatuan' => 25000.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            320 => 
            array (
                'id_standartbiaya' => 322,
                'namabarang' => 'Bola sepak',
                'hargasatuan' => 85000.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            321 => 
            array (
                'id_standartbiaya' => 323,
                'namabarang' => 'Shuttlecock ',
                'hargasatuan' => 110000.0,
                'acuan' => '',
                'id_satuan' => '13',
                'id_akun' => 1,
                'id_kelompok' => 80,
            ),
            322 => 
            array (
                'id_standartbiaya' => 324,
                'namabarang' => 'Bola tenis',
                'hargasatuan' => 6000.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            323 => 
            array (
                'id_standartbiaya' => 325,
                'namabarang' => 'Kelereng',
                'hargasatuan' => 500.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            324 => 
            array (
                'id_standartbiaya' => 326,
                'namabarang' => 'Cetak Warna',
                'hargasatuan' => 4000.0,
                'acuan' => 'sbu',
                'id_satuan' => '11',
                'id_akun' => 1,
                'id_kelompok' => 8,
            ),
            325 => 
            array (
                'id_standartbiaya' => 327,
                'namabarang' => 'Brosur warna',
                'hargasatuan' => 2000.0,
                'acuan' => 'Folio 70 gr',
                'id_satuan' => '11',
                'id_akun' => 1,
                'id_kelompok' => 11,
            ),
            326 => 
            array (
                'id_standartbiaya' => 328,
                'namabarang' => 'Buku Tamu',
                'hargasatuan' => 15500.0,
                'acuan' => 'SBU',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            327 => 
            array (
                'id_standartbiaya' => 329,
                'namabarang' => 'Cetak Undangan ',
                'hargasatuan' => 2000.0,
                'acuan' => 'SBU',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 11,
            ),
            328 => 
            array (
                'id_standartbiaya' => 330,
                'namabarang' => 'Tratak',
                'hargasatuan' => 400000.0,
                'acuan' => 'SBU',
                'id_satuan' => '3',
                'id_akun' => 7,
                'id_kelompok' => 30,
            ),
            329 => 
            array (
                'id_standartbiaya' => 331,
                'namabarang' => 'cetak Foto Ukuran 5R',
                'hargasatuan' => 2500.0,
                'acuan' => 'sbu',
                'id_satuan' => '10',
                'id_akun' => 1,
                'id_kelompok' => 10,
            ),
            330 => 
            array (
                'id_standartbiaya' => 332,
                'namabarang' => 'spanduk',
                'hargasatuan' => 25000.0,
                'acuan' => 'sbu',
                'id_satuan' => '12',
                'id_akun' => 1,
                'id_kelompok' => 10,
            ),
            331 => 
            array (
                'id_standartbiaya' => 333,
                'namabarang' => 'Sewa Bus',
                'hargasatuan' => 2500000.0,
                'acuan' => '',
                'id_satuan' => '38',
                'id_akun' => 7,
                'id_kelompok' => 30,
            ),
            332 => 
            array (
                'id_standartbiaya' => 334,
                'namabarang' => 'Atribut dan Seragam Paduan Suara',
                'hargasatuan' => 40000.0,
                'acuan' => '',
                'id_satuan' => '0',
                'id_akun' => 6,
                'id_kelompok' => 1,
            ),
            333 => 
            array (
                'id_standartbiaya' => 335,
                'namabarang' => 'Paket meeting Fullboard di luar kantor di luar kota',
                'hargasatuan' => 675000.0,
                'acuan' => '',
                'id_satuan' => '23',
                'id_akun' => 10,
                'id_kelompok' => 49,
            ),
            334 => 
            array (
                'id_standartbiaya' => 336,
                'namabarang' => 'Paket meeting Fullday di luar kantor',
                'hargasatuan' => 263000.0,
                'acuan' => '',
                'id_satuan' => '23',
                'id_akun' => 9,
                'id_kelompok' => 49,
            ),
            335 => 
            array (
                'id_standartbiaya' => 337,
                'namabarang' => 'Paket meeting halfday di luar kantor',
                'hargasatuan' => 191000.0,
                'acuan' => '',
                'id_satuan' => '23',
                'id_akun' => 9,
                'id_kelompok' => 49,
            ),
            336 => 
            array (
                'id_standartbiaya' => 338,
                'namabarang' => 'Pembantu peneliti',
                'hargasatuan' => 25000.0,
                'acuan' => 'SBU',
                'id_satuan' => '19',
                'id_akun' => 5,
                'id_kelompok' => 60,
            ),
            337 => 
            array (
                'id_standartbiaya' => 339,
                'namabarang' => 'Koordinator peneliti',
                'hargasatuan' => 420000.0,
                'acuan' => 'SBU',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 60,
            ),
            338 => 
            array (
                'id_standartbiaya' => 340,
                'namabarang' => 'Sekretariat peneliti',
                'hargasatuan' => 300000.0,
                'acuan' => 'SBU',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 60,
            ),
            339 => 
            array (
                'id_standartbiaya' => 341,
                'namabarang' => 'Pengolah data',
                'hargasatuan' => 1540000.0,
                'acuan' => 'SBU',
                'id_satuan' => '21',
                'id_akun' => 5,
                'id_kelompok' => 60,
            ),
            340 => 
            array (
                'id_standartbiaya' => 342,
                'namabarang' => 'Petugas survey',
                'hargasatuan' => 8000.0,
                'acuan' => 'SBU',
                'id_satuan' => '26',
                'id_akun' => 5,
                'id_kelompok' => 60,
            ),
            341 => 
            array (
                'id_standartbiaya' => 343,
                'namabarang' => 'Pembantu lapangan',
                'hargasatuan' => 80000.0,
                'acuan' => 'SBU',
                'id_satuan' => '23',
                'id_akun' => 5,
                'id_kelompok' => 60,
            ),
            342 => 
            array (
                'id_standartbiaya' => 344,
                'namabarang' => 'Reviewer proposal',
                'hargasatuan' => 150000.0,
                'acuan' => 'SBU',
                'id_satuan' => '49',
                'id_akun' => 5,
                'id_kelompok' => 61,
            ),
            343 => 
            array (
                'id_standartbiaya' => 345,
            'namabarang' => 'Reviewer keluaran penelitian (laporan antara)',
                'hargasatuan' => 500000.0,
                'acuan' => 'SBU',
                'id_satuan' => '24',
                'id_akun' => 5,
                'id_kelompok' => 61,
            ),
            344 => 
            array (
                'id_standartbiaya' => 346,
            'namabarang' => 'Reviewer keluaran penelitian (laporan akhir)',
                'hargasatuan' => 1000000.0,
                'acuan' => 'SBU',
                'id_satuan' => '24',
                'id_akun' => 5,
                'id_kelompok' => 61,
            ),
            345 => 
            array (
                'id_standartbiaya' => 347,
                'namabarang' => 'Menteri/pejabat setingkat menteri/pejabat lainnya yang disetarakan',
                'hargasatuan' => 1700000.0,
                'acuan' => 'SBU',
                'id_satuan' => '19',
                'id_akun' => 8,
                'id_kelompok' => 62,
            ),
            346 => 
            array (
                'id_standartbiaya' => 348,
                'namabarang' => 'Pejabat eselon I atau yang disetarakan',
                'hargasatuan' => 1400000.0,
                'acuan' => 'SBU',
                'id_satuan' => '19',
                'id_akun' => 8,
                'id_kelompok' => 62,
            ),
            347 => 
            array (
                'id_standartbiaya' => 349,
                'namabarang' => 'Pejabat eselon II atau yang disetarakan',
                'hargasatuan' => 1000000.0,
                'acuan' => 'SBU',
                'id_satuan' => '19',
                'id_akun' => 8,
                'id_kelompok' => 62,
            ),
            348 => 
            array (
                'id_standartbiaya' => 350,
                'namabarang' => 'Pejabat eselon III kebawah atau yang disetarakan',
                'hargasatuan' => 900000.0,
                'acuan' => 'SBU',
                'id_satuan' => '19',
                'id_akun' => 8,
                'id_kelompok' => 62,
            ),
            349 => 
            array (
                'id_standartbiaya' => 351,
                'namabarang' => 'Honor narasumber pakar/praktisi/profesional',
                'hargasatuan' => 0.0,
                'acuan' => 'SBU',
                'id_satuan' => '19',
                'id_akun' => 8,
                'id_kelompok' => 63,
            ),
            350 => 
            array (
                'id_standartbiaya' => 352,
                'namabarang' => 'Moderator Seminar/Workshop/dll',
                'hargasatuan' => 700000.0,
                'acuan' => 'SBU',
                'id_satuan' => '39',
                'id_akun' => 5,
                'id_kelompok' => 64,
            ),
            351 => 
            array (
                'id_standartbiaya' => 353,
                'namabarang' => 'Pembawa Acara Seminar/Workshop/dll.',
                'hargasatuan' => 400000.0,
                'acuan' => 'SBU',
                'id_satuan' => '39',
                'id_akun' => 5,
                'id_kelompok' => 65,
            ),
            352 => 
            array (
                'id_standartbiaya' => 354,
                'namabarang' => 'Penanggung Jawab',
                'hargasatuan' => 450000.0,
                'acuan' => 'SBU',
                'id_satuan' => '39',
                'id_akun' => 5,
                'id_kelompok' => 66,
            ),
            353 => 
            array (
                'id_standartbiaya' => 355,
                'namabarang' => 'Ketua/Wakil Ketua',
                'hargasatuan' => 400000.0,
                'acuan' => 'SBU',
                'id_satuan' => '39',
                'id_akun' => 5,
                'id_kelompok' => 66,
            ),
            354 => 
            array (
                'id_standartbiaya' => 356,
                'namabarang' => 'Sekretaris',
                'hargasatuan' => 300000.0,
                'acuan' => 'SBU',
                'id_satuan' => '39',
                'id_akun' => 5,
                'id_kelompok' => 66,
            ),
            355 => 
            array (
                'id_standartbiaya' => 357,
                'namabarang' => 'Anggota',
                'hargasatuan' => 300000.0,
                'acuan' => 'SBU',
                'id_satuan' => '39',
                'id_akun' => 5,
                'id_kelompok' => 66,
            ),
            356 => 
            array (
                'id_standartbiaya' => 358,
                'namabarang' => 'Dosen Wali / Pembimbing Akademik',
                'hargasatuan' => 100000.0,
                'acuan' => 'SBU',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 67,
            ),
            357 => 
            array (
                'id_standartbiaya' => 359,
            'namabarang' => 'Pembimbing Praktik Kerja Lapangan (PKL)',
                'hargasatuan' => 25000.0,
                'acuan' => 'SBU',
                'id_satuan' => '25',
                'id_akun' => 5,
                'id_kelompok' => 67,
            ),
            358 => 
            array (
                'id_standartbiaya' => 360,
                'namabarang' => 'Dosen tamu level Nasional',
                'hargasatuan' => 500000.0,
                'acuan' => 'SBU',
                'id_satuan' => '19',
                'id_akun' => 5,
                'id_kelompok' => 67,
            ),
            359 => 
            array (
                'id_standartbiaya' => 361,
                'namabarang' => 'Dosen tamu level Internasional',
                'hargasatuan' => 850000.0,
                'acuan' => 'SBU',
                'id_satuan' => '19',
                'id_akun' => 5,
                'id_kelompok' => 67,
            ),
            360 => 
            array (
                'id_standartbiaya' => 362,
                'namabarang' => 'Pembina uji kompetensi',
                'hargasatuan' => 1000000.0,
                'acuan' => 'SBU',
                'id_satuan' => '39',
                'id_akun' => 5,
                'id_kelompok' => 67,
            ),
            361 => 
            array (
                'id_standartbiaya' => 363,
                'namabarang' => 'Pelatih uji kompetensi',
                'hargasatuan' => 100000.0,
                'acuan' => 'SBU',
                'id_satuan' => '26',
                'id_akun' => 5,
                'id_kelompok' => 67,
            ),
            362 => 
            array (
                'id_standartbiaya' => 364,
            'namabarang' => 'Pembimbing Pembimbing Program Kreativitas Mahasiswa (PKM) yang lolos seleksi nasional',
                'hargasatuan' => 1000000.0,
                'acuan' => 'SBU',
                'id_satuan' => '27',
                'id_akun' => 5,
                'id_kelompok' => 67,
            ),
            363 => 
            array (
                'id_standartbiaya' => 365,
                'namabarang' => 'Rohaniwan',
                'hargasatuan' => 400000.0,
                'acuan' => 'SBU',
                'id_satuan' => '39',
                'id_akun' => 5,
                'id_kelompok' => 68,
            ),
            364 => 
            array (
                'id_standartbiaya' => 366,
                'namabarang' => 'Pengarah',
                'hargasatuan' => 500000.0,
                'acuan' => 'SBU',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 69,
            ),
            365 => 
            array (
                'id_standartbiaya' => 367,
                'namabarang' => 'Penanggung Jawab',
                'hargasatuan' => 450000.0,
                'acuan' => 'SBU',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 69,
            ),
            366 => 
            array (
                'id_standartbiaya' => 368,
                'namabarang' => 'Ketua',
                'hargasatuan' => 400000.0,
                'acuan' => 'SBU',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 69,
            ),
            367 => 
            array (
                'id_standartbiaya' => 369,
                'namabarang' => 'Wakil ketua',
                'hargasatuan' => 350000.0,
                'acuan' => 'SBU',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 69,
            ),
            368 => 
            array (
                'id_standartbiaya' => 370,
                'namabarang' => 'Sekretaris',
                'hargasatuan' => 300000.0,
                'acuan' => 'SBU',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 69,
            ),
            369 => 
            array (
                'id_standartbiaya' => 371,
                'namabarang' => 'Anggota',
                'hargasatuan' => 300000.0,
                'acuan' => 'SBU',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 69,
            ),
            370 => 
            array (
                'id_standartbiaya' => 372,
                'namabarang' => 'Penanggung Jawab',
                'hargasatuan' => 500000.0,
                'acuan' => 'SBU',
                'id_satuan' => '48',
                'id_akun' => 5,
                'id_kelompok' => 70,
            ),
            371 => 
            array (
                'id_standartbiaya' => 373,
                'namabarang' => 'Redaktur',
                'hargasatuan' => 400000.0,
                'acuan' => 'SBU',
                'id_satuan' => '48',
                'id_akun' => 5,
                'id_kelompok' => 70,
            ),
            372 => 
            array (
                'id_standartbiaya' => 374,
                'namabarang' => 'Editor',
                'hargasatuan' => 300000.0,
                'acuan' => 'SBU',
                'id_satuan' => '48',
                'id_akun' => 5,
                'id_kelompok' => 70,
            ),
            373 => 
            array (
                'id_standartbiaya' => 375,
                'namabarang' => 'Desain Grafis/Photographer',
                'hargasatuan' => 180000.0,
                'acuan' => 'SBU',
                'id_satuan' => '48',
                'id_akun' => 5,
                'id_kelompok' => 70,
            ),
            374 => 
            array (
                'id_standartbiaya' => 376,
                'namabarang' => 'Sekretariat',
                'hargasatuan' => 150000.0,
                'acuan' => 'SBU',
                'id_satuan' => '48',
                'id_akun' => 5,
                'id_kelompok' => 70,
            ),
            375 => 
            array (
                'id_standartbiaya' => 377,
                'namabarang' => 'Pembuat Artikel',
                'hargasatuan' => 200000.0,
                'acuan' => 'SBU',
                'id_satuan' => '29',
                'id_akun' => 5,
                'id_kelompok' => 70,
            ),
            376 => 
            array (
                'id_standartbiaya' => 378,
                'namabarang' => 'Penanggung Jawab',
                'hargasatuan' => 400000.0,
                'acuan' => 'SBU',
                'id_satuan' => '48',
                'id_akun' => 5,
                'id_kelompok' => 71,
            ),
            377 => 
            array (
                'id_standartbiaya' => 379,
                'namabarang' => 'Redaktur',
                'hargasatuan' => 300000.0,
                'acuan' => 'SBU',
                'id_satuan' => '48',
                'id_akun' => 5,
                'id_kelompok' => 71,
            ),
            378 => 
            array (
                'id_standartbiaya' => 380,
                'namabarang' => 'Editor',
                'hargasatuan' => 250000.0,
                'acuan' => 'SBU',
                'id_satuan' => '48',
                'id_akun' => 5,
                'id_kelompok' => 71,
            ),
            379 => 
            array (
                'id_standartbiaya' => 381,
                'namabarang' => 'Desain Grafis/Photographer',
                'hargasatuan' => 180000.0,
                'acuan' => 'SBU',
                'id_satuan' => '48',
                'id_akun' => 5,
                'id_kelompok' => 71,
            ),
            380 => 
            array (
                'id_standartbiaya' => 382,
                'namabarang' => 'Sekretariat',
                'hargasatuan' => 150000.0,
                'acuan' => 'SBU',
                'id_satuan' => '48',
                'id_akun' => 5,
                'id_kelompok' => 71,
            ),
            381 => 
            array (
                'id_standartbiaya' => 383,
                'namabarang' => 'Pembuat Artikel',
                'hargasatuan' => 100000.0,
                'acuan' => 'SBU',
                'id_satuan' => '29',
                'id_akun' => 5,
                'id_kelompok' => 71,
            ),
            382 => 
            array (
                'id_standartbiaya' => 384,
                'namabarang' => 'Penanggung Jawab',
                'hargasatuan' => 500000.0,
                'acuan' => 'SBU',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 72,
            ),
            383 => 
            array (
                'id_standartbiaya' => 385,
                'namabarang' => 'Redaktur',
                'hargasatuan' => 450000.0,
                'acuan' => 'SBU',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 72,
            ),
            384 => 
            array (
                'id_standartbiaya' => 386,
                'namabarang' => 'Editor',
                'hargasatuan' => 400000.0,
                'acuan' => 'SBU',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 72,
            ),
            385 => 
            array (
                'id_standartbiaya' => 387,
                'namabarang' => 'Web Admin',
                'hargasatuan' => 350000.0,
                'acuan' => 'SBU',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 72,
            ),
            386 => 
            array (
                'id_standartbiaya' => 388,
                'namabarang' => 'Web Developer',
                'hargasatuan' => 300000.0,
                'acuan' => 'SBU',
                'id_satuan' => '20',
                'id_akun' => 5,
                'id_kelompok' => 72,
            ),
            387 => 
            array (
                'id_standartbiaya' => 389,
                'namabarang' => 'Pembuat Artikel',
                'hargasatuan' => 100000.0,
                'acuan' => 'SBU',
                'id_satuan' => '29',
                'id_akun' => 5,
                'id_kelompok' => 72,
            ),
            388 => 
            array (
                'id_standartbiaya' => 390,
                'namabarang' => 'Pembuat soal D3 Reguler dan SST',
                'hargasatuan' => 75000.0,
                'acuan' => 'SBU',
                'id_satuan' => '47',
                'id_akun' => 5,
                'id_kelompok' => 73,
            ),
            389 => 
            array (
                'id_standartbiaya' => 391,
                'namabarang' => 'Pembuat soal D3 Kerjasama dan MST',
                'hargasatuan' => 100000.0,
                'acuan' => 'SBU',
                'id_satuan' => '47',
                'id_akun' => 5,
                'id_kelompok' => 73,
            ),
            390 => 
            array (
                'id_standartbiaya' => 392,
                'namabarang' => 'Pengawas D3 Reguler dan SST',
                'hargasatuan' => 30000.0,
                'acuan' => 'SBU',
                'id_satuan' => '31',
                'id_akun' => 5,
                'id_kelompok' => 73,
            ),
            391 => 
            array (
                'id_standartbiaya' => 393,
                'namabarang' => 'Pengawas D3 Kerjasama dan MST',
                'hargasatuan' => 50000.0,
                'acuan' => 'SBU',
                'id_satuan' => '31',
                'id_akun' => 5,
                'id_kelompok' => 73,
            ),
            392 => 
            array (
                'id_standartbiaya' => 394,
                'namabarang' => 'Koreksi D3 Reguler / Kerjasama / dan SST',
                'hargasatuan' => 1500.0,
                'acuan' => 'SBU',
                'id_satuan' => '32',
                'id_akun' => 5,
                'id_kelompok' => 73,
            ),
            393 => 
            array (
                'id_standartbiaya' => 395,
                'namabarang' => 'Koreksi MST',
                'hargasatuan' => 5000.0,
                'acuan' => 'SBU',
                'id_satuan' => '32',
                'id_akun' => 5,
                'id_kelompok' => 73,
            ),
            394 => 
            array (
                'id_standartbiaya' => 396,
                'namabarang' => 'Pembimbing TA D3 Reguler',
                'hargasatuan' => 75000.0,
                'acuan' => 'SBU',
                'id_satuan' => '33',
                'id_akun' => 5,
                'id_kelompok' => 73,
            ),
            395 => 
            array (
                'id_standartbiaya' => 397,
                'namabarang' => 'Pembimbing TA D3 Kerjasama, SST',
                'hargasatuan' => 100000.0,
                'acuan' => 'SBU',
                'id_satuan' => '33',
                'id_akun' => 5,
                'id_kelompok' => 73,
            ),
            396 => 
            array (
                'id_standartbiaya' => 398,
                'namabarang' => 'Penguji TA D3 Reguler , Kerjasama, dan SST ',
                'hargasatuan' => 75000.0,
                'acuan' => 'SBU',
                'id_satuan' => '33',
                'id_akun' => 5,
                'id_kelompok' => 73,
            ),
            397 => 
            array (
                'id_standartbiaya' => 399,
                'namabarang' => 'Soal Tingkat Nasional',
                'hargasatuan' => 100000.0,
                'acuan' => 'SBU',
                'id_satuan' => '34',
                'id_akun' => 5,
                'id_kelompok' => 74,
            ),
            398 => 
            array (
                'id_standartbiaya' => 400,
                'namabarang' => 'Soal Tingkat Polines',
                'hargasatuan' => 25000.0,
                'acuan' => 'SBU',
                'id_satuan' => '34',
                'id_akun' => 5,
                'id_kelompok' => 74,
            ),
            399 => 
            array (
                'id_standartbiaya' => 401,
                'namabarang' => 'Telaah Materi Soal Nasional',
                'hargasatuan' => 45000.0,
                'acuan' => 'SBU',
                'id_satuan' => '34',
                'id_akun' => 5,
                'id_kelompok' => 74,
            ),
            400 => 
            array (
                'id_standartbiaya' => 402,
                'namabarang' => 'Telaah Materi Soal Polines',
                'hargasatuan' => 22000.0,
                'acuan' => 'SBU',
                'id_satuan' => '34',
                'id_akun' => 5,
                'id_kelompok' => 74,
            ),
            401 => 
            array (
                'id_standartbiaya' => 403,
                'namabarang' => 'Telaah Bahasa Soal Nasional',
                'hargasatuan' => 20000.0,
                'acuan' => 'SBU',
                'id_satuan' => '34',
                'id_akun' => 5,
                'id_kelompok' => 74,
            ),
            402 => 
            array (
                'id_standartbiaya' => 404,
                'namabarang' => 'Telaah Bahasa Soal Polines',
                'hargasatuan' => 10000.0,
                'acuan' => 'SBU',
                'id_satuan' => '34',
                'id_akun' => 5,
                'id_kelompok' => 74,
            ),
            403 => 
            array (
                'id_standartbiaya' => 405,
                'namabarang' => 'Sistem analys',
                'hargasatuan' => 75000.0,
                'acuan' => 'SBU',
                'id_satuan' => '19',
                'id_akun' => 8,
                'id_kelompok' => 75,
            ),
            404 => 
            array (
                'id_standartbiaya' => 406,
                'namabarang' => 'Main programmer',
                'hargasatuan' => 75000.0,
                'acuan' => 'SBU',
                'id_satuan' => '19',
                'id_akun' => 8,
                'id_kelompok' => 75,
            ),
            405 => 
            array (
                'id_standartbiaya' => 407,
                'namabarang' => 'Programmer',
                'hargasatuan' => 60000.0,
                'acuan' => 'SBU',
                'id_satuan' => '19',
                'id_akun' => 8,
                'id_kelompok' => 75,
            ),
            406 => 
            array (
                'id_standartbiaya' => 408,
                'namabarang' => 'Net administrator',
                'hargasatuan' => 50000.0,
                'acuan' => 'SBU',
                'id_satuan' => '19',
                'id_akun' => 8,
                'id_kelompok' => 75,
            ),
            407 => 
            array (
                'id_standartbiaya' => 838,
                'namabarang' => 'Uang harian paket fullboard luar kota Prov. Jawa Tengah',
                'hargasatuan' => 130000.0,
                'acuan' => '',
                'id_satuan' => '23',
                'id_akun' => 10,
                'id_kelompok' => 49,
            ),
            408 => 
            array (
                'id_standartbiaya' => 839,
                'namabarang' => 'Jasa Gambar',
                'hargasatuan' => 3604000.0,
                'acuan' => 'Standar Peraturan Gubernur',
                'id_satuan' => '20',
                'id_akun' => 8,
                'id_kelompok' => 76,
            ),
            409 => 
            array (
                'id_standartbiaya' => 840,
                'namabarang' => 'Paket meeting Fullboard di luar kantor di dalam kota',
                'hargasatuan' => 675000.0,
                'acuan' => 'SBU 2019',
                'id_satuan' => '23',
                'id_akun' => 9,
                'id_kelompok' => 49,
            ),
            410 => 
            array (
                'id_standartbiaya' => 841,
                'namabarang' => 'Paket meeting Fullday di luar kantor di luar kota',
                'hargasatuan' => 263000.0,
                'acuan' => 'SBU 2019',
                'id_satuan' => '23',
                'id_akun' => 10,
                'id_kelompok' => 49,
            ),
            411 => 
            array (
                'id_standartbiaya' => 842,
                'namabarang' => 'Uang harian diklat luar kota Prov. Jawa Tengah',
                'hargasatuan' => 110000.0,
                'acuan' => 'SBU 2019',
                'id_satuan' => '23',
                'id_akun' => 10,
                'id_kelompok' => 49,
            ),
            412 => 
            array (
                'id_standartbiaya' => 843,
                'namabarang' => 'Uang Harian Perjalanan Dinas',
                'hargasatuan' => 0.0,
                'acuan' => 'SBU 2019',
                'id_satuan' => '23',
                'id_akun' => 10,
                'id_kelompok' => 49,
            ),
            413 => 
            array (
                'id_standartbiaya' => 844,
                'namabarang' => 'taxi',
                'hargasatuan' => 0.0,
                'acuan' => 'SBU',
                'id_satuan' => '26',
                'id_akun' => 9,
                'id_kelompok' => 49,
            ),
            414 => 
            array (
                'id_standartbiaya' => 845,
                'namabarang' => 'taxi ',
                'hargasatuan' => 0.0,
                'acuan' => 'SBU',
                'id_satuan' => '26',
                'id_akun' => 10,
                'id_kelompok' => 49,
            ),
            415 => 
            array (
                'id_standartbiaya' => 846,
                'namabarang' => 'Souvenir',
                'hargasatuan' => 0.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 0,
                'id_kelompok' => 0,
            ),
            416 => 
            array (
                'id_standartbiaya' => 847,
                'namabarang' => 'Souvenir tas',
                'hargasatuan' => 0.0,
            'acuan' => 'Sesuai Harga Di Pasaran (sewajarnya)',
                'id_satuan' => '3',
                'id_akun' => 6,
                'id_kelompok' => 1,
            ),
            417 => 
            array (
                'id_standartbiaya' => 848,
                'namabarang' => 'Cetak Katalog',
                'hargasatuan' => 0.0,
            'acuan' => 'Sesuai Harga Di Pasaran (sewajarnya)',
                'id_satuan' => '37',
                'id_akun' => 6,
                'id_kelompok' => 11,
            ),
            418 => 
            array (
                'id_standartbiaya' => 849,
                'namabarang' => 'Souvenir gantungan kunci',
                'hargasatuan' => 10000.0,
                'acuan' => '',
                'id_satuan' => '0',
                'id_akun' => 0,
                'id_kelompok' => 0,
            ),
            419 => 
            array (
                'id_standartbiaya' => 850,
                'namabarang' => 'Souvenir gantungan kunci',
                'hargasatuan' => 0.0,
            'acuan' => 'Sesuai Harga Di Pasaran (sewajarnya)',
                'id_satuan' => '3',
                'id_akun' => 6,
                'id_kelompok' => 1,
            ),
            420 => 
            array (
                'id_standartbiaya' => 851,
                'namabarang' => 'Kontrak Surveillence ',
                'hargasatuan' => 45000000.0,
                'acuan' => '',
                'id_satuan' => '46',
                'id_akun' => 0,
                'id_kelompok' => 0,
            ),
            421 => 
            array (
                'id_standartbiaya' => 852,
                'namabarang' => 'Kontrak Surveillence',
                'hargasatuan' => 45000000.0,
                'acuan' => 'harga pasar',
                'id_satuan' => '46',
                'id_akun' => 6,
                'id_kelompok' => 54,
            ),
            422 => 
            array (
                'id_standartbiaya' => 853,
                'namabarang' => 'Bantuan ',
                'hargasatuan' => 0.0,
            'acuan' => 'Sesuai Harga Di Pasaran (sewajarnya)',
                'id_satuan' => '25',
                'id_akun' => 6,
                'id_kelompok' => 77,
            ),
            423 => 
            array (
                'id_standartbiaya' => 854,
                'namabarang' => 'Souvenir',
                'hargasatuan' => 0.0,
            'acuan' => 'Sesuai Harga Di Pasaran (sewajarnya)',
                'id_satuan' => '3',
                'id_akun' => 6,
                'id_kelompok' => 1,
            ),
            424 => 
            array (
                'id_standartbiaya' => 855,
            'namabarang' => 'Hole Punch (pelubang kertas) no.85 ',
                'hargasatuan' => 53760.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 0,
                'id_kelompok' => 0,
            ),
            425 => 
            array (
                'id_standartbiaya' => 856,
            'namabarang' => 'Hole Punch (pelubang kertas) no.85 ',
                'hargasatuan' => 53760.0,
                'acuan' => 'SBU',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            426 => 
            array (
                'id_standartbiaya' => 857,
                'namabarang' => 'Honor instruktur senam',
                'hargasatuan' => 0.0,
            'acuan' => 'Sesuai Harga Di Pasaran (sewajarnya)',
                'id_satuan' => '26',
                'id_akun' => 5,
                'id_kelompok' => 19,
            ),
            427 => 
            array (
                'id_standartbiaya' => 858,
                'namabarang' => 'Honor Auditor Internal',
                'hargasatuan' => 300000.0,
                'acuan' => 'kepatutan anggaran',
                'id_satuan' => '39',
                'id_akun' => 5,
                'id_kelompok' => 76,
            ),
            428 => 
            array (
                'id_standartbiaya' => 859,
                'namabarang' => 'Bola Tenis Lapangan',
                'hargasatuan' => 90000.0,
                'acuan' => '',
                'id_satuan' => '50',
                'id_akun' => 0,
                'id_kelompok' => 0,
            ),
            429 => 
            array (
                'id_standartbiaya' => 860,
                'namabarang' => 'Bola Tenis Lapangan',
                'hargasatuan' => 90000.0,
            'acuan' => 'Sesuai Harga Di Pasaran (sewajarnya)',
                'id_satuan' => '50',
                'id_akun' => 1,
                'id_kelompok' => 0,
            ),
            430 => 
            array (
                'id_standartbiaya' => 861,
                'namabarang' => 'Bola Tenis Lapangan',
                'hargasatuan' => 90000.0,
            'acuan' => 'Sesuai Harga Di Pasaran (sewajarnya)',
                'id_satuan' => '50',
                'id_akun' => 1,
                'id_kelompok' => 80,
            ),
            431 => 
            array (
                'id_standartbiaya' => 862,
                'namabarang' => 'Net Tenis Lapangan',
                'hargasatuan' => 825000.0,
            'acuan' => 'Sesuai Harga Di Pasaran (sewajarnya)',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 80,
            ),
            432 => 
            array (
                'id_standartbiaya' => 863,
                'namabarang' => 'Belanja Perjalanan Dinas Paket Meeting Dalam Kota',
                'hargasatuan' => 100000.0,
                'acuan' => 'SBU',
                'id_satuan' => '26',
                'id_akun' => 9,
                'id_kelompok' => 50,
            ),
            433 => 
            array (
                'id_standartbiaya' => 864,
                'namabarang' => 'Sewa Stand',
                'hargasatuan' => 0.0,
            'acuan' => 'Sesuai Harga Di Pasaran (sewajarnya)',
                'id_satuan' => '46',
                'id_akun' => 7,
                'id_kelompok' => 30,
            ),
            434 => 
            array (
                'id_standartbiaya' => 865,
                'namabarang' => 'Sewa Dekorasi Stand',
                'hargasatuan' => 0.0,
            'acuan' => 'Sesuai Harga Di Pasaran (sewajarnya)',
                'id_satuan' => '46',
                'id_akun' => 7,
                'id_kelompok' => 30,
            ),
            435 => 
            array (
                'id_standartbiaya' => 866,
                'namabarang' => 'Suttlecock ',
                'hargasatuan' => 85000.0,
            'acuan' => 'Sesuai Harga Di Pasaran (sewajarnya)',
                'id_satuan' => '50',
                'id_akun' => 1,
                'id_kelompok' => 80,
            ),
            436 => 
            array (
                'id_standartbiaya' => 867,
                'namabarang' => 'Net Badminton',
                'hargasatuan' => 250000.0,
            'acuan' => 'Sesuai Harga Di Pasaran (sewajarnya)',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 80,
            ),
            437 => 
            array (
                'id_standartbiaya' => 868,
                'namabarang' => 'Bola Futsal',
                'hargasatuan' => 350000.0,
                'acuan' => '',
                'id_satuan' => '3',
                'id_akun' => 0,
                'id_kelompok' => 0,
            ),
            438 => 
            array (
                'id_standartbiaya' => 869,
                'namabarang' => 'Bola Futsal',
                'hargasatuan' => 350000.0,
            'acuan' => 'Sesuai Harga Di Pasaran (sewajarnya)',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 80,
            ),
            439 => 
            array (
                'id_standartbiaya' => 870,
                'namabarang' => 'Bola Volly',
                'hargasatuan' => 550000.0,
            'acuan' => 'Sesuai Harga Di Pasaran (sewajarnya)',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 80,
            ),
            440 => 
            array (
                'id_standartbiaya' => 871,
                'namabarang' => 'Net Bola Volly',
                'hargasatuan' => 550000.0,
            'acuan' => 'Sesuai Harga Di Pasaran (sewajarnya)',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 80,
            ),
            441 => 
            array (
                'id_standartbiaya' => 872,
                'namabarang' => 'Mic Wireless',
                'hargasatuan' => 500000.0,
            'acuan' => 'Sesuai Harga Di Pasaran (sewajarnya)',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 80,
            ),
            442 => 
            array (
                'id_standartbiaya' => 873,
                'namabarang' => 'Kaos Olahraga',
                'hargasatuan' => 0.0,
            'acuan' => 'Sesuai Harga Di Pasaran (sewajarnya)',
                'id_satuan' => '3',
                'id_akun' => 6,
                'id_kelompok' => 80,
            ),
            443 => 
            array (
                'id_standartbiaya' => 874,
                'namabarang' => 'Peket Meeting Fullday diluar kantor',
                'hargasatuan' => 130000.0,
                'acuan' => 'harga corporate hotel',
                'id_satuan' => '23',
                'id_akun' => 9,
                'id_kelompok' => 49,
            ),
            444 => 
            array (
                'id_standartbiaya' => 875,
                'namabarang' => 'Uang harian Fullboard dan Fullday/Halfday dalam kota',
                'hargasatuan' => 95000.0,
                'acuan' => 'SBU 2019',
                'id_satuan' => '23',
                'id_akun' => 9,
                'id_kelompok' => 49,
            ),
            445 => 
            array (
                'id_standartbiaya' => 876,
                'namabarang' => 'Kontribusi Pelatihan',
                'hargasatuan' => 0.0,
                'acuan' => 'Brosur/ penawaran/ biaya pelatihan',
                'id_satuan' => '39',
                'id_akun' => 6,
                'id_kelompok' => 57,
            ),
            446 => 
            array (
                'id_standartbiaya' => 877,
                'namabarang' => 'pengadaan bahan pustaka',
                'hargasatuan' => 0.0,
                'acuan' => 'sbu',
                'id_satuan' => '46',
                'id_akun' => 11,
                'id_kelompok' => 58,
            ),
            447 => 
            array (
                'id_standartbiaya' => 878,
                'namabarang' => 'pengadaan e jurnal ',
                'hargasatuan' => 0.0,
                'acuan' => 'sbu',
                'id_satuan' => '46',
                'id_akun' => 6,
                'id_kelompok' => 80,
            ),
            448 => 
            array (
                'id_standartbiaya' => 880,
                'namabarang' => 'Insentif Pengajuan Pemeriksaan Substantif Paten Sederhana',
                'hargasatuan' => 0.0,
            'acuan' => 'Sesuai Harga Di Pasaran (sewajarnya)',
                'id_satuan' => '44',
                'id_akun' => 6,
                'id_kelompok' => 81,
            ),
            449 => 
            array (
                'id_standartbiaya' => 881,
                'namabarang' => 'Insentif Pengajuan Pemeriksaan Substantif Paten',
                'hargasatuan' => 0.0,
            'acuan' => 'Sesuai Harga Di Pasaran (sewajarnya)',
                'id_satuan' => '44',
                'id_akun' => 6,
                'id_kelompok' => 81,
            ),
            450 => 
            array (
                'id_standartbiaya' => 882,
                'namabarang' => 'uang saku kegiatan diluar kantor dalam kota',
                'hargasatuan' => 0.0,
                'acuan' => 'sbu 2019 uang saku keg kedinasan akun 524113',
                'id_satuan' => '23',
                'id_akun' => 9,
                'id_kelompok' => 49,
            ),
            451 => 
            array (
                'id_standartbiaya' => 883,
                'namabarang' => 'Belanja Modal',
                'hargasatuan' => 0.0,
            'acuan' => 'Sesuai Harga Di Pasaran (sewajarnya)',
                'id_satuan' => '3',
                'id_akun' => 37,
                'id_kelompok' => 82,
            ),
            452 => 
            array (
                'id_standartbiaya' => 884,
                'namabarang' => 'Sewa Kursi',
                'hargasatuan' => 0.0,
            'acuan' => 'Sesuai Harga Di Pasaran (sewajarnya)',
                'id_satuan' => '3',
                'id_akun' => 7,
                'id_kelompok' => 30,
            ),
            453 => 
            array (
                'id_standartbiaya' => 885,
                'namabarang' => 'Sewa Lapangan Olahraga',
                'hargasatuan' => 0.0,
            'acuan' => 'Sesuai Harga Di Pasaran (sewajarnya)',
                'id_satuan' => '51',
                'id_akun' => 7,
                'id_kelompok' => 30,
            ),
            454 => 
            array (
                'id_standartbiaya' => 886,
                'namabarang' => 'Biaya Sertifikasi',
                'hargasatuan' => 0.0,
            'acuan' => 'Sesuai Harga Di Pasaran (sewajarnya)',
                'id_satuan' => '52',
                'id_akun' => 6,
                'id_kelompok' => 57,
            ),
            455 => 
            array (
                'id_standartbiaya' => 887,
                'namabarang' => 'Buku Agenda',
                'hargasatuan' => 7500.0,
            'acuan' => 'Sesuai Harga Di Pasaran (sewajarnya)',
                'id_satuan' => '3',
                'id_akun' => 1,
                'id_kelompok' => 1,
            ),
            456 => 
            array (
                'id_standartbiaya' => 888,
                'namabarang' => 'Tikar',
                'hargasatuan' => 50000.0,
            'acuan' => 'Sesuai Harga Pasaran (sewajarnya)',
                'id_satuan' => '11',
                'id_akun' => 7,
                'id_kelompok' => 30,
            ),
            457 => 
            array (
                'id_standartbiaya' => 889,
                'namabarang' => 'Meja Prasmanan',
                'hargasatuan' => 0.0,
            'acuan' => 'Sesuai Harga Pasaran (sewajarnya)',
                'id_satuan' => '3',
                'id_akun' => 7,
                'id_kelompok' => 30,
            ),
            458 => 
            array (
                'id_standartbiaya' => 890,
                'namabarang' => 'Kursi',
                'hargasatuan' => 0.0,
            'acuan' => 'Sesuai Harga Pasaran (sewajarnya)',
                'id_satuan' => '3',
                'id_akun' => 7,
                'id_kelompok' => 30,
            ),
            459 => 
            array (
                'id_standartbiaya' => 891,
                'namabarang' => 'Cover Kursi/Meja',
                'hargasatuan' => 0.0,
            'acuan' => 'Sesuai Harga Pasaran (sewajarnya)',
                'id_satuan' => '3',
                'id_akun' => 7,
                'id_kelompok' => 30,
            ),
            460 => 
            array (
                'id_standartbiaya' => 892,
                'namabarang' => 'Tratag',
                'hargasatuan' => 0.0,
            'acuan' => 'Sesuai Harga Pasaran (sewajarnya)',
                'id_satuan' => '51',
                'id_akun' => 7,
                'id_kelompok' => 30,
            ),
            461 => 
            array (
                'id_standartbiaya' => 893,
                'namabarang' => 'pemasangan iklan di media massa',
                'hargasatuan' => 0.0,
            'acuan' => 'sesuai harga pasaran(sewajarnya)',
                'id_satuan' => '53',
                'id_akun' => 6,
                'id_kelompok' => 57,
            ),
            462 => 
            array (
                'id_standartbiaya' => 894,
                'namabarang' => 'Pembuatan Video',
                'hargasatuan' => 0.0,
                'acuan' => 'Harga Pasaran Sewajarnya',
                'id_satuan' => '54',
                'id_akun' => 6,
                'id_kelompok' => 57,
            ),
        ));
        
        
    }
}