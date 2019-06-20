<?php

use Illuminate\Database\Seeder;

class JurbagnitpusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jurbagnitpus')->delete();
        
        \DB::table('jurbagnitpus')->insert(array (
            0 => 
            array (
                'id_jurbagnitpus' => 1,
                'jurbagnitpus' => 'Jurusan Teknik Sipil',
                'kode' => 'JCI',
                'warna' => 'HIJAU',
            ),
            1 => 
            array (
                'id_jurbagnitpus' => 2,
                'jurbagnitpus' => 'Jurusan Teknik Mesin',
                'kode' => 'JME',
                'warna' => 'HIJAU',
            ),
            2 => 
            array (
                'id_jurbagnitpus' => 3,
                'jurbagnitpus' => 'Jurusan Teknik Elektro',
                'kode' => 'JEL',
                'warna' => 'HIJAU',
            ),
            3 => 
            array (
                'id_jurbagnitpus' => 5,
                'jurbagnitpus' => 'Jurusan Administrasi Bisnis',
                'kode' => 'JAN',
                'warna' => 'HIJAU',
            ),
            4 => 
            array (
                'id_jurbagnitpus' => 6,
                'jurbagnitpus' => 'Pusat Penelitian dan Pengabdian pada Masyarakat',
                'kode' => 'P3M',
                'warna' => 'BIRU',
            ),
            5 => 
            array (
                'id_jurbagnitpus' => 7,
                'jurbagnitpus' => 'Pusat Pengembangan Pembelajaran',
                'kode' => 'PPP',
                'warna' => 'BIRU',
            ),
            6 => 
            array (
                'id_jurbagnitpus' => 8,
                'jurbagnitpus' => 'Pusat Penjaminan Mutu Pendidikan',
                'kode' => 'PMP',
                'warna' => 'BIRU',
            ),
            7 => 
            array (
                'id_jurbagnitpus' => 9,
                'jurbagnitpus' => 'UPT Bahasa',
                'kode' => 'BHS',
                'warna' => 'MERAH',
            ),
            8 => 
            array (
                'id_jurbagnitpus' => 10,
                'jurbagnitpus' => 'UPT Perpustakaan',
                'kode' => 'PUS',
                'warna' => 'MERAH',
            ),
            9 => 
            array (
                'id_jurbagnitpus' => 11,
                'jurbagnitpus' => 'UPT Perawatan & Perbaikan Sarana Pendidikan',
                'kode' => 'PPS',
                'warna' => 'MERAH',
            ),
            10 => 
            array (
                'id_jurbagnitpus' => 12,
                'jurbagnitpus' => 'UPT Kerjasama dan Pengembangan',
                'kode' => 'PKS',
                'warna' => 'MERAH',
            ),
            11 => 
            array (
                'id_jurbagnitpus' => 13,
                'jurbagnitpus' => 'UPT Teknologi Informasi dan Komunikasi',
                'kode' => 'TIK',
                'warna' => 'MERAH',
            ),
            12 => 
            array (
                'id_jurbagnitpus' => 14,
                'jurbagnitpus' => 'Bidang IV-Unit Urusan Internasional',
                'kode' => 'KUI',
                'warna' => 'MERAH',
            ),
            13 => 
            array (
                'id_jurbagnitpus' => 15,
                'jurbagnitpus' => 'Satuan Pengawasan Internal',
                'kode' => 'SPI',
                'warna' => NULL,
            ),
            14 => 
            array (
                'id_jurbagnitpus' => 16,
                'jurbagnitpus' => 'Senat Polines',
                'kode' => 'SEN',
                'warna' => NULL,
            ),
            15 => 
            array (
                'id_jurbagnitpus' => 17,
                'jurbagnitpus' => 'BAKPK-Sub bagian Akademik dan Kemahasiswaan',
                'kode' => 'SAK',
                'warna' => 'KUNING',
            ),
            16 => 
            array (
                'id_jurbagnitpus' => 18,
                'jurbagnitpus' => 'BAKPK-Sub bagian Kerjasama',
                'kode' => 'SKJ',
                'warna' => 'KUNING',
            ),
            17 => 
            array (
                'id_jurbagnitpus' => 19,
                'jurbagnitpus' => 'BAKPK-Sub bagian Perencanaan',
                'kode' => 'SPR',
                'warna' => 'KUNING',
            ),
            18 => 
            array (
                'id_jurbagnitpus' => 20,
                'jurbagnitpus' => 'BUK-Sub bagian Tata Usaha',
                'kode' => 'STU',
                'warna' => 'KUNING',
            ),
            19 => 
            array (
                'id_jurbagnitpus' => 21,
                'jurbagnitpus' => 'BUK-Sub bagian Kepegawaian',
                'kode' => 'SKP',
                'warna' => 'KUNING',
            ),
            20 => 
            array (
                'id_jurbagnitpus' => 22,
                'jurbagnitpus' => 'BUK-Sub bagian Keuangan',
                'kode' => 'SKU',
                'warna' => 'KUNING',
            ),
            21 => 
            array (
                'id_jurbagnitpus' => 23,
                'jurbagnitpus' => 'Unit Implementasi Program Hibah Kompetisi Ekternal',
                'kode' => 'PHK',
                'warna' => 'PUTIH',
            ),
            22 => 
            array (
                'id_jurbagnitpus' => 24,
                'jurbagnitpus' => 'Unit Pelaksana Kegiatan Lain',
                'kode' => 'PLS',
                'warna' => NULL,
            ),
            23 => 
            array (
                'id_jurbagnitpus' => 25,
                'jurbagnitpus' => 'Jurusan Akuntansi ',
                'kode' => 'JAK',
                'warna' => 'HIJAU',
            ),
            24 => 
            array (
                'id_jurbagnitpus' => 26,
                'jurbagnitpus' => 'Bidang IV-Unit Hubungan Industri',
                'kode' => 'UHI',
                'warna' => 'Merah',
            ),
            25 => 
            array (
                'id_jurbagnitpus' => 27,
                'jurbagnitpus' => 'Bidang IV-Kegiatan Prioritas Bidang IV',
                'kode' => 'BI4',
                'warna' => 'Merah',
            ),
            26 => 
            array (
                'id_jurbagnitpus' => 28,
                'jurbagnitpus' => 'Bidang IV-Operasional LSP',
                'kode' => 'LSP',
                'warna' => 'Merah',
            ),
            27 => 
            array (
                'id_jurbagnitpus' => 29,
                'jurbagnitpus' => 'Bidang III-Kegiatan Kemahasiswaan',
                'kode' => 'PLS',
                'warna' => 'Merah',
            ),
            28 => 
            array (
                'id_jurbagnitpus' => 30,
                'jurbagnitpus' => 'Bidang III-Kegiatan Prioritas Bidang III',
                'kode' => 'PLS',
                'warna' => 'Merah',
            ),
            29 => 
            array (
                'id_jurbagnitpus' => 31,
                'jurbagnitpus' => 'Unit Layanan Pengadaan',
                'kode' => 'PLS',
                'warna' => 'Merah',
            ),
            30 => 
            array (
                'id_jurbagnitpus' => 32,
                'jurbagnitpus' => 'Bidang I-Kegiatan Prioritas Bidang I',
                'kode' => 'PLS',
                'warna' => 'Merah',
            ),
            31 => 
            array (
                'id_jurbagnitpus' => 33,
                'jurbagnitpus' => 'Reviewer',
                'kode' => 'rev',
                'warna' => 'putih',
            ),
            32 => 
            array (
                'id_jurbagnitpus' => 34,
                'jurbagnitpus' => 'Pimpinan',
                'kode' => 'PIM',
                'warna' => NULL,
            ),
            33 => 
            array (
                'id_jurbagnitpus' => 35,
                'jurbagnitpus' => 'Bidang II Umum dan Keuangan',
                'kode' => 'BID',
                'warna' => 'putih',
            ),
        ));
        
        
    }
}