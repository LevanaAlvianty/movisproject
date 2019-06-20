<?php

use Illuminate\Database\Seeder;

class AkunTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('akun')->delete();
        
        \DB::table('akun')->insert(array (
            0 => 
            array (
                'id_akun' => 1,
                'akun' => '521211',
                'nama_akun' => 'Belanja bahan',
            'ket_akun' => 'Digunakan untuk membiayai bahan pendukung kegiatan (yang habis dipakai) cth; Alat tulis kantor (ATK), konsumsi/bahan makanan, bahan cetakan, dokumentasi, spanduk, biaya fotocopy yang diperlukan dalam ',
            ),
            1 => 
            array (
                'id_akun' => 5,
                'akun' => '521213',
                'nama_akun' => 'Honor Output Kegiatan',
                'ket_akun' => 'Dibayarkan kepada pegawai yang melaksanakan kegiatan dan terkait dengan output',
            ),
            2 => 
            array (
                'id_akun' => 6,
                'akun' => '521219',
                'nama_akun' => 'Belanja Barang Non Operasional Lainnya',
                'ket_akun' => 'Digunakan Untuk Pengeluaran Yang Tidak Tertampung Dalam Akun 521211',
            ),
            3 => 
            array (
                'id_akun' => 7,
                'akun' => '522141',
                'nama_akun' => 'Belanja jasa sewa',
            'ket_akun' => 'Digunakan untuk pembayaran sewa (misalnya : sewa kantor/gedung/ruangan atau sewa lainnya)',
            ),
            4 => 
            array (
                'id_akun' => 8,
                'akun' => '522151',
                'nama_akun' => 'Belanja jasa profesi',
                'ket_akun' => 'Belanja untuk pembayaran jasa atas kealian yang dimiliki dan diberikan kepada pegawai PNS non PNS sebagai narasumber, pembicara praktisi, pakar dalama kegiatan diluar direktorat atau eselon 1 pegawai ',
            ),
            5 => 
            array (
                'id_akun' => 9,
                'akun' => '524114',
                'nama_akun' => 'Belanja perjalanan dinas paket meeting dalam kota',
                'ket_akun' => 'Pengeluaran untuk perjalanan dinas dalam rangka kegiatan rapat, seminar, dan sejenisnya yang dilaksanakan didalam kota satker peyelenggara dan dibiayai seluruhnya oleh satker peyelenggara, serta yang ',
            ),
            6 => 
            array (
                'id_akun' => 10,
                'akun' => '524119',
                'nama_akun' => 'Belanja Perjalanan lainnya dalam negeri',
                'ket_akun' => 'pengeluaran untuk Perjalanan lainnya dalam rangka pedukung kegiatan kementerian negara/lembaga yang tidak tertampung didalam pos belanja biasa anatar lain biaya perjalanan teknis operasional kegiatan',
            ),
            7 => 
            array (
                'id_akun' => 11,
                'akun' => '536111',
                'nama_akun' => 'Belanja modal fisik lainnya',
                'ket_akun' => 'Pengeluaran untuk memperoleh gedung dan bangunan secara kontraktual sampai dengan gedung dan bangunan siap digunakan meliputi biaya pembelian atau biaya konstruksi, ternasuk biaya MB, notaris dan paja',
            ),
            8 => 
            array (
                'id_akun' => 12,
                'akun' => '523111',
                'nama_akun' => 'Belanja biaya pemeliharaan gedung dan bangunan',
                'ket_akun' => 'Belanja biaya pemeliharaan gedung dan bangunan',
            ),
            9 => 
            array (
                'id_akun' => 13,
                'akun' => '532111',
                'nama_akun' => 'Belanja modal peralatan dan mesin',
                'ket_akun' => 'digunakan untuk membiayai pengadan peralatan dan mesin yang digunakan dalam pelaksanaan kegiatan anatar lain biaya pembelian,biaya pengangkutan, biaya installasi serta baiaya langsung lainnya untuk me',
            ),
            10 => 
            array (
                'id_akun' => 14,
                'akun' => '511111',
                'nama_akun' => 'Belanja Gaji Pokok PNS',
                'ket_akun' => NULL,
            ),
            11 => 
            array (
                'id_akun' => 15,
                'akun' => '511119',
                'nama_akun' => 'Belanja Pembulatan Gaji PNS',
                'ket_akun' => NULL,
            ),
            12 => 
            array (
                'id_akun' => 16,
                'akun' => '511121',
                'nama_akun' => 'Belanja Tunjangan Suami/Istri PNS',
                'ket_akun' => NULL,
            ),
            13 => 
            array (
                'id_akun' => 17,
                'akun' => '511122',
                'nama_akun' => 'Belanja Tunjangan Anak PNS',
                'ket_akun' => NULL,
            ),
            14 => 
            array (
                'id_akun' => 18,
                'akun' => '511123',
                'nama_akun' => 'Belanja Tunjangan Struktural PNS',
                'ket_akun' => NULL,
            ),
            15 => 
            array (
                'id_akun' => 19,
                'akun' => '511124',
                'nama_akun' => 'Belanja Tunjangan Fungsional PNS',
                'ket_akun' => NULL,
            ),
            16 => 
            array (
                'id_akun' => 20,
                'akun' => '511125',
                'nama_akun' => 'Belanja Tunjangan PPH PNS',
                'ket_akun' => NULL,
            ),
            17 => 
            array (
                'id_akun' => 21,
                'akun' => '511126',
                'nama_akun' => 'Belanja Tunjangan Beras PNS',
                'ket_akun' => NULL,
            ),
            18 => 
            array (
                'id_akun' => 22,
                'akun' => '511129',
                'nama_akun' => 'Belanja Uang Makan PNS',
                'ket_akun' => NULL,
            ),
            19 => 
            array (
                'id_akun' => 23,
                'akun' => '511151',
                'nama_akun' => 'Belanja Tunjangan Umum PNS',
                'ket_akun' => NULL,
            ),
            20 => 
            array (
                'id_akun' => 24,
                'akun' => '511153',
                'nama_akun' => 'Belanja Tunjangan Profesi Dosen',
                'ket_akun' => NULL,
            ),
            21 => 
            array (
                'id_akun' => 25,
                'akun' => '512211',
                'nama_akun' => 'Belanja Uang Lembur',
                'ket_akun' => NULL,
            ),
            22 => 
            array (
                'id_akun' => 26,
                'akun' => '521111',
                'nama_akun' => 'Belanja Keperluan Perkantoran',
                'ket_akun' => NULL,
            ),
            23 => 
            array (
                'id_akun' => 27,
                'akun' => '521114',
                'nama_akun' => 'Belanja Pengiriman Surat Dinas Pos Pusat',
                'ket_akun' => NULL,
            ),
            24 => 
            array (
                'id_akun' => 28,
                'akun' => '521115',
                'nama_akun' => 'Honor Operasional Satuan Kerja',
                'ket_akun' => NULL,
            ),
            25 => 
            array (
                'id_akun' => 30,
                'akun' => '522111',
                'nama_akun' => 'Belanja Langganan Listrik',
                'ket_akun' => NULL,
            ),
            26 => 
            array (
                'id_akun' => 31,
                'akun' => '522112',
                'nama_akun' => 'Belanja Langganan Telepon',
                'ket_akun' => NULL,
            ),
            27 => 
            array (
                'id_akun' => 32,
                'akun' => '522119',
                'nama_akun' => 'Belanja Langganan Daya dan Jasa Lainnya',
                'ket_akun' => NULL,
            ),
            28 => 
            array (
                'id_akun' => 34,
                'akun' => '521811',
                'nama_akun' => '521811',
                'ket_akun' => '521811',
            ),
            29 => 
            array (
                'id_akun' => 35,
                'akun' => '524111',
                'nama_akun' => '524111',
                'ket_akun' => '524111',
            ),
            30 => 
            array (
                'id_akun' => 36,
                'akun' => '524113',
                'nama_akun' => 'Belanja perjalanan dinas paket meeting dalam kota',
                'ket_akun' => 'Pengeluaran untuk perjalanan dinas dalam rangka kegiatan rapat, seminar, dan sejenisnya yang dilaksanakan didalam kota satker peyelenggara dan dibiayai seluruhnya oleh satker peyelenggara, serta yang',
            ),
            31 => 
            array (
                'id_akun' => 37,
                'akun' => '532111',
                'nama_akun' => 'Belanja Modal Peralatan dan Mesin',
                'ket_akun' => 'Digunakan untuk membiayai pengadaan peralatan dan mesin yang digunakan dalam pelaksanaan kegiatan',
            ),
        ));
        
        
    }
}