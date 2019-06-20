<?php

use Illuminate\Database\Seeder;

class IndikatorTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('indikator')->delete();
        
        \DB::table('indikator')->insert(array (
            0 => 
            array (
                'id_indikator' => 949,
                'id_kegiatan' => 416,
                'indikator' => 'Obat - obatan',
                'baseline' => '100 jenis',
                'target' => '110 jenis',
            ),
            1 => 
            array (
                'id_indikator' => 950,
                'id_kegiatan' => 417,
                'indikator' => '1. Usulan DUPAK Dosen, Kenaikan jabatan Dosen dan kenaikan pangkat dosen',
                'baseline' => '5 DUPAK Dosen',
                'target' => '5 DUPAK Dosen',
            ),
            2 => 
            array (
                'id_indikator' => 953,
                'id_kegiatan' => 420,
                'indikator' => '•	Terlaksanakannya serangkaian kegiatan sarasehan tahunan',
                'baseline' => '1 laporan',
                'target' => '•	Laporan kegiatan penyelenggaraan sarahan Polines 2018',
            ),
            3 => 
            array (
                'id_indikator' => 954,
                'id_kegiatan' => 421,
                'indikator' => 'Sejumlah 1626 mahasiswa baru memperoleh sertifikasi ',
                'baseline' => '1626',
                'target' => '1626',
            ),
            4 => 
            array (
                'id_indikator' => 955,
                'id_kegiatan' => 422,
                'indikator' => '•	Terlaksanakannya serangkaian kegiatan sarasehan tahunan.',
                'baseline' => '1 laporan',
                'target' => '•	Laporan kegiatan penyelenggaraan sarahan Polines 2018',
            ),
            5 => 
            array (
                'id_indikator' => 956,
                'id_kegiatan' => 423,
                'indikator' => '•	Terlaksanakannya ujian akhir semester gasal dan genap tahun akademik 2017/2018',
                'baseline' => '-',
                'target' => '•	Nilai prestasi mahasiswa',
            ),
            6 => 
            array (
                'id_indikator' => 960,
                'id_kegiatan' => 428,
                'indikator' => 'JUMLAH DOKUMEN RPKPS DAN SILABUS',
                'baseline' => '80',
                'target' => '150',
            ),
            7 => 
            array (
                'id_indikator' => 962,
                'id_kegiatan' => 430,
                'indikator' => 'Ketepatan Waktur hadir kuliah',
                'baseline' => '96 %',
                'target' => '98%',
            ),
            8 => 
            array (
                'id_indikator' => 963,
                'id_kegiatan' => 430,
                'indikator' => 'Ketepatan waktu pengumpulan tugas',
                'baseline' => '95%',
                'target' => '98%',
            ),
            9 => 
            array (
                'id_indikator' => 964,
                'id_kegiatan' => 430,
                'indikator' => 'Pelanggaran aturan Polines',
                'baseline' => '93%',
                'target' => '94%',
            ),
            10 => 
            array (
                'id_indikator' => 965,
                'id_kegiatan' => 431,
                'indikator' => 'Jumlah dokumen program kerja BAKPK.',
                'baseline' => 'Dokumen program kerja belum komprehensif.',
            'target' => 'Satu dokumen program kerja BAKPK th 2018 (anggaran, non anggaran/matrik progja, dan SKP seluruh staf).  ',
            ),
            11 => 
            array (
                'id_indikator' => 969,
                'id_kegiatan' => 435,
                'indikator' => 'Jumlah SDM Terlatih',
                'baseline' => '64',
                'target' => '86',
            ),
            12 => 
            array (
                'id_indikator' => 970,
                'id_kegiatan' => 436,
                'indikator' => 'jumlah peserta seminar',
                'baseline' => '100',
                'target' => '150',
            ),
            13 => 
            array (
                'id_indikator' => 971,
                'id_kegiatan' => 436,
                'indikator' => 'jumlah narasumber',
                'baseline' => '2',
                'target' => '2',
            ),
            14 => 
            array (
                'id_indikator' => 972,
                'id_kegiatan' => 437,
                'indikator' => 'Jumlah Mahasiswa ',
                'baseline' => '45',
                'target' => '50',
            ),
            15 => 
            array (
                'id_indikator' => 973,
                'id_kegiatan' => 438,
                'indikator' => 'Dokumen borang akreditasi dan evaluasi diri ',
                'baseline' => '0',
                'target' => '1',
            ),
            16 => 
            array (
                'id_indikator' => 976,
                'id_kegiatan' => 440,
                'indikator' => 'Jumlah narasumber ',
                'baseline' => '1',
                'target' => '2',
            ),
            17 => 
            array (
                'id_indikator' => 977,
                'id_kegiatan' => 440,
                'indikator' => 'JUMLAH PESERTA',
                'baseline' => '85',
                'target' => '85',
            ),
            18 => 
            array (
                'id_indikator' => 978,
                'id_kegiatan' => 441,
                'indikator' => 'JUMLAH KARYA INOVATIF MAHASISWA',
                'baseline' => '30',
                'target' => '50',
            ),
            19 => 
            array (
                'id_indikator' => 979,
                'id_kegiatan' => 442,
                'indikator' => 'Jumlah dosen yg mengikuti kegiatan ',
                'baseline' => '10',
                'target' => '20',
            ),
            20 => 
            array (
                'id_indikator' => 982,
                'id_kegiatan' => 448,
                'indikator' => 'Dokumen simulasi borang akreditasi  prodi',
                'baseline' => '5',
                'target' => '5',
            ),
            21 => 
            array (
                'id_indikator' => 985,
                'id_kegiatan' => 450,
                'indikator' => 'jumlah peserta seminar',
                'baseline' => '84',
                'target' => '84',
            ),
            22 => 
            array (
                'id_indikator' => 987,
                'id_kegiatan' => 452,
                'indikator' => 'jumlah peserta seminar',
                'baseline' => '84',
                'target' => '84',
            ),
            23 => 
            array (
                'id_indikator' => 988,
                'id_kegiatan' => 453,
                'indikator' => 'Sejumlah 300 mahasiswa mengikuti seminar tematik',
                'baseline' => '250',
                'target' => '300',
            ),
            24 => 
            array (
                'id_indikator' => 989,
                'id_kegiatan' => 454,
                'indikator' => 'dokumen data evaluasi diri',
                'baseline' => '1',
                'target' => '1',
            ),
            25 => 
            array (
                'id_indikator' => 990,
                'id_kegiatan' => 455,
                'indikator' => 'dokumen data evaluasi diri',
                'baseline' => '1',
                'target' => '1',
            ),
            26 => 
            array (
                'id_indikator' => 992,
                'id_kegiatan' => 456,
                'indikator' => 'Jumlah PNS yang diterima',
                'baseline' => '0 CPNS',
                'target' => '13 CPNS',
            ),
            27 => 
            array (
                'id_indikator' => 995,
                'id_kegiatan' => 459,
                'indikator' => 'semua pegawai dan civitas akademik mengikuti sarasehan',
                'baseline' => '600',
                'target' => '600',
            ),
            28 => 
            array (
                'id_indikator' => 996,
                'id_kegiatan' => 460,
                'indikator' => 'Jumlah mahasiswa yang mewakili lomba seleksi NUDC',
                'baseline' => '3',
                'target' => '6',
            ),
            29 => 
            array (
                'id_indikator' => 997,
                'id_kegiatan' => 460,
                'indikator' => 'Jumlah partisipasi mahasiswa dalam kegiatan nasional',
                'baseline' => '3',
                'target' => '6',
            ),
            30 => 
            array (
                'id_indikator' => 998,
                'id_kegiatan' => 461,
                'indikator' => 'peserta sosialisasi dan workshop',
                'baseline' => '604 pegawai',
                'target' => '604 pegawai',
            ),
            31 => 
            array (
                'id_indikator' => 1001,
                'id_kegiatan' => 464,
                'indikator' => 'Jumlah pegawai yang mendapat bantuan pendidikan',
                'baseline' => '650 pegawai',
                'target' => '650 pegawai',
            ),
            32 => 
            array (
                'id_indikator' => 1003,
                'id_kegiatan' => 462,
                'indikator' => 'peserta seminar/workshop dan  diklat bersertifikasi',
                'baseline' => '200 tenaga kependidikan',
                'target' => '200 tenaga kependidikan',
            ),
            33 => 
            array (
                'id_indikator' => 1004,
                'id_kegiatan' => 466,
                'indikator' => '40 peserta memahami masalah Renip, Renstra, Renop, SOTK dll',
                'baseline' => 'belum ada',
                'target' => '40 peserta',
            ),
            34 => 
            array (
                'id_indikator' => 1005,
                'id_kegiatan' => 467,
                'indikator' => 'dokumen data evaluasi diri',
                'baseline' => '1',
                'target' => '1',
            ),
            35 => 
            array (
                'id_indikator' => 1006,
                'id_kegiatan' => 468,
                'indikator' => 'dokumen profil kompetensi pegawai',
                'baseline' => '0 dokumen',
                'target' => '1 dokumen',
            ),
            36 => 
            array (
                'id_indikator' => 1007,
                'id_kegiatan' => 469,
                'indikator' => 'jumlah peserta seminar',
                'baseline' => '84',
                'target' => '84',
            ),
            37 => 
            array (
                'id_indikator' => 1008,
                'id_kegiatan' => 469,
                'indikator' => 'jumlah narasumber',
                'baseline' => '2',
                'target' => '2',
            ),
            38 => 
            array (
                'id_indikator' => 1009,
                'id_kegiatan' => 469,
                'indikator' => '',
                'baseline' => '',
                'target' => '',
            ),
            39 => 
            array (
                'id_indikator' => 1010,
                'id_kegiatan' => 470,
                'indikator' => 'Terwujudnya laporan evaluasi program dan anggaran thn 2017',
                'baseline' => 'belum ada',
            'target' => '1 (satu) dokumen laporan',
            ),
            40 => 
            array (
                'id_indikator' => 1014,
                'id_kegiatan' => 474,
                'indikator' => 'Dokumen Polines Dalam Angka Tahun 2018',
                'baseline' => '3 dokumen',
            'target' => 'Tersedia 4 dokumen Polines Dalam Angka (PDA) di tahun 2018',
            ),
            41 => 
            array (
                'id_indikator' => 1016,
                'id_kegiatan' => 476,
                'indikator' => 'Tercapainya laporan kinerja jurusan, pusat, bagian dan unit pelaksana teknis',
                'baseline' => 'belum ada',
                'target' => '23 laporan kinerja',
            ),
            42 => 
            array (
                'id_indikator' => 1017,
                'id_kegiatan' => 477,
                'indikator' => 'pegawai sehat jasmani dan rohlani',
                'baseline' => '604 pegawai',
                'target' => '604 pegawai',
            ),
            43 => 
            array (
                'id_indikator' => 1020,
                'id_kegiatan' => 473,
                'indikator' => 'pedoman penilaian kinerja pegawaio',
                'baseline' => '0 domumen pedoman penilaian kinerja pegawai',
                'target' => '1 dokumen pedoman penilaian kinerja pegawai',
            ),
            44 => 
            array (
                'id_indikator' => 1021,
                'id_kegiatan' => 479,
                'indikator' => 'Persentase efisiensi perencanaan dan penganggaran',
                'baseline' => '86 %',
                'target' => '87 %',
            ),
            45 => 
            array (
                'id_indikator' => 1022,
                'id_kegiatan' => 480,
                'indikator' => 'Ada Ada sejumlah proposal lolos secara Nasional',
                'baseline' => '3',
                'target' => '4',
            ),
            46 => 
            array (
                'id_indikator' => 1023,
                'id_kegiatan' => 480,
                'indikator' => 'Prestasi mahasiswa yang mengikuti kompetisi tingkat Nasional',
                'baseline' => '3',
                'target' => '4',
            ),
            47 => 
            array (
                'id_indikator' => 1024,
                'id_kegiatan' => 481,
                'indikator' => 'Prosentase mahasiswa daftar ulang semester gasal dan genap',
                'baseline' => 'Mahasiswa ulang 100 %',
                'target' => 'Mahasiswa ulang 100 %',
            ),
            48 => 
            array (
                'id_indikator' => 1025,
                'id_kegiatan' => 482,
                'indikator' => 'Prosentase efisensi perencanaan dan penganggaran',
                'baseline' => '87',
                'target' => '88',
            ),
            49 => 
            array (
                'id_indikator' => 1026,
                'id_kegiatan' => 483,
            'indikator' => 'Penguatan Karakter dan Budaya Kerja (kegiatan)',
                'baseline' => '4',
                'target' => '4',
            ),
            50 => 
            array (
                'id_indikator' => 1027,
                'id_kegiatan' => 484,
                'indikator' => 'Prosentase efisensi perencanaan dan penganggaran',
                'baseline' => '87',
                'target' => '88',
            ),
            51 => 
            array (
                'id_indikator' => 1029,
                'id_kegiatan' => 486,
                'indikator' => 'Jumlah mahasiswa yang tersertifikasi',
                'baseline' => '0',
                'target' => '20 mahasiswa',
            ),
            52 => 
            array (
                'id_indikator' => 1037,
                'id_kegiatan' => 491,
                'indikator' => 'Terlaksananya FGD Tata Kelola Keuangan',
                'baseline' => '1 kegiatan',
                'target' => '1 kegiatan',
            ),
            53 => 
            array (
                'id_indikator' => 1038,
                'id_kegiatan' => 490,
                'indikator' => 'Ter-updatenya SOP Layanan Keuangan',
                'baseline' => '',
                'target' => '',
            ),
            54 => 
            array (
                'id_indikator' => 1039,
                'id_kegiatan' => 488,
                'indikator' => 'Terwujudnya 1 Buku Pedoman dan SBI 2019',
                'baseline' => '1 buah',
                'target' => '1 buah',
            ),
            55 => 
            array (
                'id_indikator' => 1040,
                'id_kegiatan' => 487,
                'indikator' => 'Persedianya Dokumen Bukti Potong sebagai bahan Penyusunan Laporan Pajak PPh Pribadi',
                'baseline' => '1 bendel',
                'target' => '1 bendel',
            ),
            56 => 
            array (
                'id_indikator' => 1041,
                'id_kegiatan' => 485,
                'indikator' => 'Tervalidasinya Data SIMAN dan SAIBA Polines',
                'baseline' => '2 dokumen',
                'target' => '2 dokumen',
            ),
            57 => 
            array (
                'id_indikator' => 1042,
                'id_kegiatan' => 484,
                'indikator' => 'Terwujudnya Laporan keuangan Polines',
                'baseline' => '2 dokumen',
                'target' => '2 dokumen',
            ),
            58 => 
            array (
                'id_indikator' => 1043,
                'id_kegiatan' => 482,
                'indikator' => 'Terwujudnya Dokumen Monitoring Laporan Kinerja Serapan Polines',
                'baseline' => '1 sistem',
                'target' => '1 sistem',
            ),
            59 => 
            array (
                'id_indikator' => 1048,
                'id_kegiatan' => 494,
                'indikator' => 'Mou',
                'baseline' => '5',
                'target' => '6',
            ),
            60 => 
            array (
                'id_indikator' => 1049,
                'id_kegiatan' => 492,
                'indikator' => 'Indeks Kepuasan Layanan',
                'baseline' => 'target 3,33 riil 2,67',
                'target' => '3,34',
            ),
            61 => 
            array (
                'id_indikator' => 1050,
                'id_kegiatan' => 495,
            'indikator' => 'Laporan Kinerja Instansi Pemerintah (LKjIP) Politeknik Negeri Semarang',
                'baseline' => '2017',
                'target' => '1',
            ),
            62 => 
            array (
                'id_indikator' => 1052,
                'id_kegiatan' => 498,
                'indikator' => 'jumlah peserta seminar',
                'baseline' => '30',
                'target' => '50',
            ),
            63 => 
            array (
                'id_indikator' => 1053,
                'id_kegiatan' => 498,
                'indikator' => 'jumlah artikel ilmiah',
                'baseline' => '20',
                'target' => '25',
            ),
            64 => 
            array (
                'id_indikator' => 1055,
                'id_kegiatan' => 500,
                'indikator' => 'Jumlah PKM yang didanai kemenristek',
                'baseline' => '36',
                'target' => '25',
            ),
            65 => 
            array (
                'id_indikator' => 1056,
                'id_kegiatan' => 502,
                'indikator' => 'Jumlah Program Studi yang terakreditasi A',
                'baseline' => '1',
                'target' => '2',
            ),
            66 => 
            array (
                'id_indikator' => 1057,
                'id_kegiatan' => 501,
                'indikator' => 'Persentase efisiensi perencanaan dan penganggaran ',
                'baseline' => '87 per th',
                'target' => '88 per th.',
            ),
            67 => 
            array (
                'id_indikator' => 1058,
                'id_kegiatan' => 503,
                'indikator' => 'jumlah lulusan yang memiliki sertfikat kompetensi',
                'baseline' => '0',
                'target' => '100',
            ),
            68 => 
            array (
                'id_indikator' => 1059,
                'id_kegiatan' => 504,
                'indikator' => '4 kategori lomba yang diikuti',
                'baseline' => '4',
                'target' => '2',
            ),
            69 => 
            array (
                'id_indikator' => 1060,
                'id_kegiatan' => 505,
                'indikator' => 'Jumlah Program Studi yang terakreditasi A',
                'baseline' => '1',
                'target' => '2',
            ),
            70 => 
            array (
                'id_indikator' => 1061,
                'id_kegiatan' => 506,
                'indikator' => 'jumlah artikel ilmiah',
                'baseline' => '2',
                'target' => '5',
            ),
            71 => 
            array (
                'id_indikator' => 1064,
                'id_kegiatan' => 509,
                'indikator' => 'Jumlah Program Studi yang terakreditasi A',
                'baseline' => '1',
                'target' => '2',
            ),
            72 => 
            array (
                'id_indikator' => 1065,
                'id_kegiatan' => 510,
                'indikator' => 'Laporan Hasil Audit SDM',
                'baseline' => '1 Dok 2016 & 1 Dok 2017',
                'target' => '1 Dok 2018',
            ),
            73 => 
            array (
                'id_indikator' => 1073,
                'id_kegiatan' => 521,
            'indikator' => 'Waktu tunggu 0 (nol) bulan, jumlah alumni yang langsung bekerja',
                'baseline' => '140 org',
                'target' => '175 org',
            ),
            74 => 
            array (
                'id_indikator' => 1074,
                'id_kegiatan' => 523,
                'indikator' => 'Dokumen Pedoman Pengendalian Gratifikasi di lingkungan Polines',
                'baseline' => '0',
                'target' => '1 dokumen',
            ),
            75 => 
            array (
                'id_indikator' => 1078,
                'id_kegiatan' => 525,
            'indikator' => 'Dokumen hasil AMI Periode i dan II (minor dan OFI)',
                'baseline' => '105 dan 45',
                'target' => '100 dan 43',
            ),
            76 => 
            array (
                'id_indikator' => 1079,
                'id_kegiatan' => 525,
                'indikator' => 'Temuan Major',
                'baseline' => '10',
                'target' => '9',
            ),
            77 => 
            array (
                'id_indikator' => 1086,
                'id_kegiatan' => 527,
                'indikator' => 'Dokumen Raker',
                'baseline' => '1',
                'target' => '1',
            ),
            78 => 
            array (
                'id_indikator' => 1092,
                'id_kegiatan' => 536,
                'indikator' => 'Peningkatan Prosentase Mahasiswa yang mencapai skor TOEIC >=600',
                'baseline' => '450',
                'target' => '600',
            ),
            79 => 
            array (
                'id_indikator' => 1097,
                'id_kegiatan' => 538,
                'indikator' => 'Memperoleh data skor TOEIC prediction untuk baseline bagi semua prodi',
                'baseline' => '350',
                'target' => '450',
            ),
            80 => 
            array (
                'id_indikator' => 1111,
                'id_kegiatan' => 528,
                'indikator' => 'Promosi',
                'baseline' => '7 Frekuensi Tayangan',
                'target' => '8 Frekuensi Tayangan',
            ),
            81 => 
            array (
                'id_indikator' => 1112,
                'id_kegiatan' => 528,
                'indikator' => 'Pameran',
                'baseline' => '5 Kegiatan',
                'target' => '5 Kegiatan',
            ),
            82 => 
            array (
                'id_indikator' => 1144,
                'id_kegiatan' => 544,
                'indikator' => 'Jumlah dosen yang menulis di jurnal nasional',
                'baseline' => '0',
                'target' => '5 %',
            ),
            83 => 
            array (
                'id_indikator' => 1146,
                'id_kegiatan' => 548,
                'indikator' => 'Mahasiswa yang mengikuti kuliah umum',
                'baseline' => '70 %',
                'target' => '75 %',
            ),
            84 => 
            array (
                'id_indikator' => 1147,
                'id_kegiatan' => 551,
                'indikator' => 'Jumlah Proposal yang tereview',
                'baseline' => '199',
                'target' => '235',
            ),
            85 => 
            array (
                'id_indikator' => 1151,
                'id_kegiatan' => 555,
                'indikator' => '-	Borang UPPS terupdate',
                'baseline' => '1',
                'target' => '1',
            ),
            86 => 
            array (
                'id_indikator' => 1155,
                'id_kegiatan' => 549,
                'indikator' => 'Terbitnya jurnal reka prima',
                'baseline' => '0',
                'target' => '1',
            ),
            87 => 
            array (
                'id_indikator' => 1159,
                'id_kegiatan' => 546,
                'indikator' => 'Proposal PKM',
                'baseline' => '0',
                'target' => '1',
            ),
            88 => 
            array (
                'id_indikator' => 1160,
                'id_kegiatan' => 560,
                'indikator' => 'Judul Jurnal ilmiah sesuai dengan kebutuhan jurusan dan prodi di Politeknik Negeri Semarang.',
                'baseline' => '',
                'target' => '4000',
            ),
            89 => 
            array (
                'id_indikator' => 1163,
                'id_kegiatan' => 562,
                'indikator' => 'Meningkatnya Skor TOEIC International',
                'baseline' => '450',
                'target' => '600',
            ),
            90 => 
            array (
                'id_indikator' => 1165,
                'id_kegiatan' => 564,
                'indikator' => 'Proceeding publikasi hasil penelitian dan pengabdian',
                'baseline' => '11',
                'target' => '1',
            ),
            91 => 
            array (
                'id_indikator' => 1166,
                'id_kegiatan' => 565,
                'indikator' => 'Peningkatan jumlah pengunjung SAC',
                'baseline' => '1500',
                'target' => '2000',
            ),
            92 => 
            array (
                'id_indikator' => 1167,
                'id_kegiatan' => 567,
                'indikator' => 'Dokumen Audit Internal BMN',
                'baseline' => '1 Dok 2017 1 Dok 2018',
                'target' => '1 Dok 2018',
            ),
            93 => 
            array (
                'id_indikator' => 1168,
                'id_kegiatan' => 568,
                'indikator' => 'Jumlah Peserta workshop dan Jumlah Publikasi yang diberi reward',
                'baseline' => '8',
                'target' => '12',
            ),
            94 => 
            array (
                'id_indikator' => 1169,
                'id_kegiatan' => 569,
                'indikator' => 'Ada 65 orang dosen wali kelas 1 Tahun 2018 terlatih membimbing mahasiswa, bidang akademis maupun non akademis. .',
                'baseline' => '65',
                'target' => '65',
            ),
            95 => 
            array (
                'id_indikator' => 1170,
                'id_kegiatan' => 570,
                'indikator' => 'Pustakawan terlatih melakukan layanan prima dalam mengelola keluhan pelanggan',
                'baseline' => '0',
                'target' => '12 ',
            ),
            96 => 
            array (
                'id_indikator' => 1171,
                'id_kegiatan' => 572,
                'indikator' => 'Juara lomba berbahasa Inggris tingkat Polines',
                'baseline' => '0',
                'target' => '3',
            ),
            97 => 
            array (
                'id_indikator' => 1172,
                'id_kegiatan' => 573,
                'indikator' => ' Jumlah Peserta Workshop, ',
                'baseline' => '50',
                'target' => '50',
            ),
            98 => 
            array (
                'id_indikator' => 1173,
                'id_kegiatan' => 573,
                'indikator' => 'Jumlah Proposal Penelitian dan Pengabdian',
                'baseline' => '217',
                'target' => '227',
            ),
            99 => 
            array (
                'id_indikator' => 1175,
                'id_kegiatan' => 575,
                'indikator' => 'Jumlah Jurnal yang terakreditasi',
                'baseline' => '0',
                'target' => '3',
            ),
            100 => 
            array (
                'id_indikator' => 1176,
                'id_kegiatan' => 576,
                'indikator' => 'Mahasiswa pengelola perpustakaan di jurusan terlatih mengelola perpustakaan di jurusan',
                'baseline' => '0',
                'target' => '50',
            ),
            101 => 
            array (
                'id_indikator' => 1177,
                'id_kegiatan' => 472,
                'indikator' => 'Dokumen Uraian Tugas Unit kerja di Polines',
                'baseline' => '0 dokumen',
                'target' => '1 Dokumen Uraian Tugas Unit Kerja',
            ),
            102 => 
            array (
                'id_indikator' => 1179,
                'id_kegiatan' => 578,
                'indikator' => 'Jumlah Peserta Workshop  Penguatan Lembaga Meliputi Pengembangan Pusat Studi dan Inkubator Bisnis',
                'baseline' => '50',
                'target' => '50',
            ),
            103 => 
            array (
                'id_indikator' => 1180,
                'id_kegiatan' => 578,
                'indikator' => 'Desain inkubator bisnis',
                'baseline' => '0',
                'target' => '5',
            ),
            104 => 
            array (
                'id_indikator' => 1181,
                'id_kegiatan' => 579,
                'indikator' => 'Jumlah HAKI',
                'baseline' => '8',
                'target' => '12',
            ),
            105 => 
            array (
                'id_indikator' => 1182,
                'id_kegiatan' => 580,
                'indikator' => 'Proceeding Seminar Internasional',
                'baseline' => '1',
                'target' => '1',
            ),
            106 => 
            array (
                'id_indikator' => 1194,
                'id_kegiatan' => 530,
                'indikator' => 'peningkatan kualitas Layanan Akademik & Non akademik',
                'baseline' => '85%',
                'target' => '100%',
            ),
            107 => 
            array (
                'id_indikator' => 1196,
                'id_kegiatan' => 558,
                'indikator' => 'Jumlah Dosen S3',
                'baseline' => '4',
                'target' => '6',
            ),
            108 => 
            array (
                'id_indikator' => 1199,
                'id_kegiatan' => 534,
                'indikator' => 'Jumlah layanan akademik berbasis teknologi',
                'baseline' => '4',
                'target' => '6',
            ),
            109 => 
            array (
                'id_indikator' => 1200,
                'id_kegiatan' => 533,
                'indikator' => 'Jumlah layanan akademik berbasis teknologi',
                'baseline' => '4',
                'target' => '6',
            ),
            110 => 
            array (
                'id_indikator' => 1201,
                'id_kegiatan' => 529,
                'indikator' => 'Jumlah stakeholder yang terdata untuk ditindaklanjuti proses kerjasama yang berkelanjutan',
                'baseline' => '-',
                'target' => '15',
            ),
            111 => 
            array (
                'id_indikator' => 1202,
                'id_kegiatan' => 583,
                'indikator' => 'Jumlah proposal dan laporan penelitian',
                'baseline' => '78',
                'target' => '113',
            ),
            112 => 
            array (
                'id_indikator' => 1204,
                'id_kegiatan' => 584,
                'indikator' => 'Jumlah proposal pengabdian',
                'baseline' => '78',
                'target' => '79',
            ),
            113 => 
            array (
                'id_indikator' => 1205,
                'id_kegiatan' => 585,
                'indikator' => 'Pengadaan E-Jurnal',
                'baseline' => '1',
                'target' => '2 paket',
            ),
            114 => 
            array (
                'id_indikator' => 1206,
                'id_kegiatan' => 586,
                'indikator' => 'Pengadaan bahan pustaka buku',
                'baseline' => '31.052 Eks buku',
                'target' => '400 eks buku',
            ),
            115 => 
            array (
                'id_indikator' => 1207,
                'id_kegiatan' => 587,
                'indikator' => 'Laporan BA persediaan SMT 1 dan 2',
                'baseline' => '2 dokumen',
                'target' => '2 dokumen',
            ),
            116 => 
            array (
                'id_indikator' => 1208,
                'id_kegiatan' => 588,
                'indikator' => 'Jumlah perjalanan dinas',
                'baseline' => '15',
                'target' => '17',
            ),
            117 => 
            array (
                'id_indikator' => 1210,
                'id_kegiatan' => 590,
                'indikator' => 'dokumen laporan kegiatan 2018',
                'baseline' => '1 dokumen',
                'target' => '1 dokumen',
            ),
            118 => 
            array (
                'id_indikator' => 1213,
                'id_kegiatan' => 593,
                'indikator' => 'laporan sikd',
                'baseline' => '1000 surat',
                'target' => '1500 surat',
            ),
            119 => 
            array (
                'id_indikator' => 1224,
                'id_kegiatan' => 606,
                'indikator' => 'Jumlah mahasiswa peserta sosialisasi PMW',
                'baseline' => '150',
                'target' => '150',
            ),
            120 => 
            array (
                'id_indikator' => 1226,
                'id_kegiatan' => 606,
                'indikator' => 'Jumlah Kelompok PMW yang termonev',
                'baseline' => '90%',
                'target' => '90%',
            ),
            121 => 
            array (
                'id_indikator' => 1227,
                'id_kegiatan' => 608,
                'indikator' => 'Jumlah Kelompok PMW terdanai',
                'baseline' => '16',
                'target' => '18',
            ),
            122 => 
            array (
                'id_indikator' => 1228,
                'id_kegiatan' => 608,
                'indikator' => 'Jumlah mahasiswa yang melakukan wirausaha',
                'baseline' => '39',
                'target' => '49',
            ),
            123 => 
            array (
                'id_indikator' => 1231,
                'id_kegiatan' => 610,
                'indikator' => 'Jumlah Mahasiswa peserta Expo KMI',
                'baseline' => '5',
                'target' => '5',
            ),
            124 => 
            array (
                'id_indikator' => 1232,
                'id_kegiatan' => 610,
                'indikator' => 'Jumlah mahsiswa Expo KMI',
                'baseline' => '1',
                'target' => '1',
            ),
            125 => 
            array (
                'id_indikator' => 1238,
                'id_kegiatan' => 611,
                'indikator' => 'Jumlah mahasiswa yang wirausaha',
                'baseline' => '10',
                'target' => '6',
            ),
            126 => 
            array (
                'id_indikator' => 1241,
                'id_kegiatan' => 520,
                'indikator' => 'Jumlah Artikel yang submit ke jurnal Internasional',
                'baseline' => '0',
                'target' => '3',
            ),
            127 => 
            array (
                'id_indikator' => 1243,
                'id_kegiatan' => 614,
                'indikator' => 'Lolos Seleksi Awal Tahap I dan II',
                'baseline' => '4',
                'target' => '4',
            ),
            128 => 
            array (
                'id_indikator' => 1245,
                'id_kegiatan' => 614,
                'indikator' => 'Mempeoleh Tiket Kompetisi Nasional',
                'baseline' => '3',
                'target' => '3',
            ),
            129 => 
            array (
                'id_indikator' => 1251,
                'id_kegiatan' => 617,
                'indikator' => 'Jumlah mahasiswa berprestasi polines',
                'baseline' => '15',
                'target' => '10',
            ),
            130 => 
            array (
                'id_indikator' => 1252,
                'id_kegiatan' => 554,
                'indikator' => '312 dosen terevaluasi beban kinerjanya tahun 2017',
                'baseline' => '302',
                'target' => '312',
            ),
            131 => 
            array (
                'id_indikator' => 1253,
                'id_kegiatan' => 618,
                'indikator' => 'Reno[p Jurusan Akuntansi',
            'baseline' => '1 ( periode 2015-2018)',
            'target' => '2 (periode 2015-2018) dan (periode 2019-2022',
            ),
            132 => 
            array (
                'id_indikator' => 1254,
                'id_kegiatan' => 594,
                'indikator' => 'Pedoman Teknis Pembuatan Surat Tugas dan Surat Keputusan Direktur Polines',
                'baseline' => '0 pedoman',
                'target' => '2 pedoman',
            ),
            133 => 
            array (
                'id_indikator' => 1255,
                'id_kegiatan' => 553,
                'indikator' => '46 dosen menyusun bahan ajar berbasis elearning.',
                'baseline' => '0',
                'target' => '46',
            ),
            134 => 
            array (
                'id_indikator' => 1257,
                'id_kegiatan' => 582,
                'indikator' => '25 dosen mengikuti pembekalan peningkatan proses pembelajaran',
                'baseline' => '25',
                'target' => '25',
            ),
            135 => 
            array (
                'id_indikator' => 1259,
                'id_kegiatan' => 547,
                'indikator' => '10 orang dosen tersertifikasi ppelatihan AA dan pekerti',
                'baseline' => '0',
                'target' => '10',
            ),
            136 => 
            array (
                'id_indikator' => 1262,
                'id_kegiatan' => 621,
                'indikator' => 'Terbentuk kelas transfer angakatan 2018',
                'baseline' => '0',
                'target' => '1',
            ),
            137 => 
            array (
                'id_indikator' => 1263,
                'id_kegiatan' => 591,
                'indikator' => 'Terselenggaranya upacara Hari Pendidikan Nasional, hari Kemerdekaan RI ke 73, hari Sumpah Pemuda ke 90, hari Pahlawan ke Pahlawan',
                'baseline' => '75% pegawai yang hadir',
                'target' => '80% pegawai yg hadir',
            ),
            138 => 
            array (
                'id_indikator' => 1265,
                'id_kegiatan' => 620,
                'indikator' => 'Program Studi Keuangan dan Perbankan Akreditasi A',
                'baseline' => 'Akreditasi A',
                'target' => 'Akreditasi A',
            ),
            139 => 
            array (
                'id_indikator' => 1266,
                'id_kegiatan' => 630,
                'indikator' => 'Terselenggaranya kuliah kelas internasional',
                'baseline' => '0',
                'target' => '1',
            ),
            140 => 
            array (
                'id_indikator' => 1271,
                'id_kegiatan' => 632,
                'indikator' => 'Tersusunnya manajemen informasi dan dokumen',
                'baseline' => '0',
                'target' => '1',
            ),
            141 => 
            array (
                'id_indikator' => 1273,
                'id_kegiatan' => 634,
                'indikator' => 'Tersusunnya dokumen Borang prodi',
                'baseline' => '1',
                'target' => '2',
            ),
            142 => 
            array (
                'id_indikator' => 1275,
                'id_kegiatan' => 637,
                'indikator' => 'modul praktek',
                'baseline' => '0',
                'target' => '12',
            ),
            143 => 
            array (
                'id_indikator' => 1276,
                'id_kegiatan' => 545,
                'indikator' => 'Jumlah artikel jurnal internasional',
                'baseline' => '1',
                'target' => '2',
            ),
            144 => 
            array (
                'id_indikator' => 1284,
                'id_kegiatan' => 642,
                'indikator' => 'Dosen tersertifikasi',
                'baseline' => '',
                'target' => '',
            ),
            145 => 
            array (
                'id_indikator' => 1285,
                'id_kegiatan' => 643,
                'indikator' => 'Dosen tersertifikasi',
                'baseline' => '',
                'target' => '',
            ),
            146 => 
            array (
                'id_indikator' => 1286,
                'id_kegiatan' => 644,
                'indikator' => 'Tersedianya bahan praktik mahasiswa',
                'baseline' => '',
                'target' => '',
            ),
            147 => 
            array (
                'id_indikator' => 1287,
                'id_kegiatan' => 645,
                'indikator' => 'Tersedianya sarana prasana pendidikan',
                'baseline' => '',
                'target' => '',
            ),
            148 => 
            array (
                'id_indikator' => 1288,
                'id_kegiatan' => 557,
                'indikator' => 'Persentase Dosen dan Tenaga kependidikan bersertifikat kompetensi',
                'baseline' => '85%',
                'target' => '100%',
            ),
            149 => 
            array (
                'id_indikator' => 1291,
                'id_kegiatan' => 541,
                'indikator' => 'jumlah prodi kelas internasional',
                'baseline' => '1',
                'target' => '1',
            ),
            150 => 
            array (
                'id_indikator' => 1293,
                'id_kegiatan' => 540,
                'indikator' => 'Bertambahnya brosur prodi berbahasa inggris ',
                'baseline' => '2',
                'target' => '4',
            ),
            151 => 
            array (
                'id_indikator' => 1294,
                'id_kegiatan' => 540,
                'indikator' => 'terupdatenya konten website',
                'baseline' => '1',
                'target' => '1',
            ),
            152 => 
            array (
                'id_indikator' => 1311,
                'id_kegiatan' => 519,
                'indikator' => 'Terealisasinya MoU dengan industri',
                'baseline' => '22 MoU',
                'target' => '2 MoU',
            ),
            153 => 
            array (
                'id_indikator' => 1312,
                'id_kegiatan' => 511,
                'indikator' => 'Terealisasinya Job Fair',
                'baseline' => '1 Kegiatan',
                'target' => '1 Kegiatan',
            ),
            154 => 
            array (
                'id_indikator' => 1313,
                'id_kegiatan' => 666,
                'indikator' => 'Jumlah partisipasi dan prestasi mahasiswa dalam kegiatan ilmiah nasional dan internasional',
                'baseline' => '20 kegiatan delegasi',
                'target' => '22 kegiatan delegasi',
            ),
            155 => 
            array (
                'id_indikator' => 1315,
                'id_kegiatan' => 668,
                'indikator' => 'Dokumen Pemetaan Prestasi Non Akademik ',
                'baseline' => 'Belum ada',
                'target' => 'Tersedianya 1 dokumen',
            ),
            156 => 
            array (
                'id_indikator' => 1316,
                'id_kegiatan' => 427,
                'indikator' => 'Dokumen sarmut dan program kerja',
                'baseline' => '1',
                'target' => '1',
            ),
            157 => 
            array (
                'id_indikator' => 1317,
                'id_kegiatan' => 667,
                'indikator' => 'Menghasilkan 10 mata kuliah yang sudah mengimplementasikan sistem E-learning',
                'baseline' => '3 Mata Kuliah sudah mengimplementasikan sistem E-learning',
                'target' => '13 mata kuliah yang sudah mengimplementasikan sistem E-learning',
            ),
            158 => 
            array (
                'id_indikator' => 1325,
                'id_kegiatan' => 419,
                'indikator' => 'Peningkatan kompetensi sesuai dengan bidangnya ditunjukkan adanya sertifikat pelatihan',
                'baseline' => '11',
                'target' => '15',
            ),
            159 => 
            array (
                'id_indikator' => 1326,
                'id_kegiatan' => 671,
                'indikator' => 'menghasilkan 3 mata kuliah yang silabus/RPKPS-nya berisi materi ICT',
                'baseline' => '3 mata kuliah yang silabus/RPKPS-nya berisi materi ICT',
                'target' => '6 mata kuliah yang silabus/RPKPS-nya berisi materi ICT',
            ),
            160 => 
            array (
                'id_indikator' => 1328,
                'id_kegiatan' => 649,
                'indikator' => 'Draft Revisi kurikulum Program Studi Sarjana Terapan TMPP tahun 2014 menjadi kurikulum berbasis KKNI berdasarkan hasil evaluasi magang industri dan masukan dari industri',
                'baseline' => 'Kurikulum Program Studi Sarjana Terapan TMPP Tahun 2014',
                'target' => 'Capaian Pembelajaran Berbasis KKNI dan Draft Kurikulum Program Studi Sarjana Terapan TMPP berbasis KKNI	',
            ),
            161 => 
            array (
                'id_indikator' => 1329,
                'id_kegiatan' => 418,
                'indikator' => 'Terpasangnya kwhmeter',
                'baseline' => '15 alat',
                'target' => '21 alat',
            ),
            162 => 
            array (
                'id_indikator' => 1332,
                'id_kegiatan' => 478,
                'indikator' => 'Tersedianya prosedur mutu',
                'baseline' => '2',
                'target' => '5',
            ),
            163 => 
            array (
                'id_indikator' => 1334,
                'id_kegiatan' => 429,
                'indikator' => 'jumlah peserta seminar',
                'baseline' => '84',
                'target' => '84',
            ),
            164 => 
            array (
                'id_indikator' => 1346,
                'id_kegiatan' => 496,
                'indikator' => 'Jumlah lulusan',
                'baseline' => '4',
                'target' => '8',
            ),
            165 => 
            array (
                'id_indikator' => 1353,
                'id_kegiatan' => 521,
            'indikator' => 'Jumlah lulusan yang terdata dalam sistem penelusuran lulusan (tracer study)',
                'baseline' => '500 org',
                'target' => '700 org',
            ),
            166 => 
            array (
                'id_indikator' => 1354,
                'id_kegiatan' => 516,
                'indikator' => 'Modul/job sheet pengembangan model pembelajaran praktek',
                'baseline' => '0',
                'target' => '1',
            ),
            167 => 
            array (
                'id_indikator' => 1355,
                'id_kegiatan' => 539,
                'indikator' => 'Dokumen hasil surveillance',
                'baseline' => '4 minor',
                'target' => '5 minor',
            ),
            168 => 
            array (
                'id_indikator' => 1357,
                'id_kegiatan' => 526,
                'indikator' => 'Ter upditnya profile Polines',
                'baseline' => '35 karya yang tertuang di dalam 200 eks katalog dan 200 keping CD ',
                'target' => '40 karya yang tertuang di dalam 200 eks katalog dan 200 keping CD',
            ),
            169 => 
            array (
                'id_indikator' => 1358,
                'id_kegiatan' => 524,
                'indikator' => 'Memperoeh sertifikat ISO 9001:2015',
                'baseline' => '-',
                'target' => '1',
            ),
            170 => 
            array (
                'id_indikator' => 1359,
                'id_kegiatan' => 524,
                'indikator' => 'Hasil surveillance',
                'baseline' => '4 minor',
                'target' => '5',
            ),
            171 => 
            array (
                'id_indikator' => 1362,
                'id_kegiatan' => 426,
                'indikator' => 'Jumlah dokumen Laporan Kemajuan Pembelajaran Polines tahun 2018',
                'baseline' => '1 dokumen laporan',
            'target' => '1 (satu) dokumen laporan',
            ),
            172 => 
            array (
                'id_indikator' => 1363,
                'id_kegiatan' => 425,
                'indikator' => 'Terselenggaranya penyuluhan sehingga mahasiswa mendapatkan pencerahan dan tidak mengulangi masalah ',
                'baseline' => '40 mahasiswa',
                'target' => '40 mahasiswa',
            ),
            173 => 
            array (
                'id_indikator' => 1365,
                'id_kegiatan' => 424,
                'indikator' => 'Terlaksanakannya Foto Kartu Tanda Mahasiswa, Pengadaan buku PERAK, Tes Kesehatan camaba, Penyusunan buku pedoman, penyusunan buku induk mhs angkatan 2018',
                'baseline' => '1 dokumen mahasiswa baru',
                'target' => '1 dokumen mahasiswa baru 2018/2019',
            ),
            174 => 
            array (
                'id_indikator' => 1367,
                'id_kegiatan' => 433,
                'indikator' => 'Usulan rencana peningkatan layanan SDM BAKPKs',
                'baseline' => '0',
                'target' => '1',
            ),
            175 => 
            array (
                'id_indikator' => 1368,
                'id_kegiatan' => 447,
                'indikator' => 'Dokumen kinerja BAKPKs',
                'baseline' => '0',
                'target' => '1',
            ),
            176 => 
            array (
                'id_indikator' => 1369,
                'id_kegiatan' => 676,
                'indikator' => 'Pedoman Umum Peraturan Akademik Polines',
                'baseline' => '-',
                'target' => '1 Dokumen',
            ),
            177 => 
            array (
                'id_indikator' => 1370,
                'id_kegiatan' => 676,
                'indikator' => 'Pedoman Penerimaan Dosen Tetap Non PNS, Dosen Luar Biasa dan Tenaga Kependidikan',
                'baseline' => '-',
                'target' => '1 Dokumen',
            ),
            178 => 
            array (
                'id_indikator' => 1371,
                'id_kegiatan' => 676,
                'indikator' => 'Pedoman Umum Tindak Lanjut Hasil Penelitian dan Pengabdian Masyarakat',
                'baseline' => '-',
                'target' => '1 Dokumen',
            ),
            179 => 
            array (
                'id_indikator' => 1374,
                'id_kegiatan' => 596,
                'indikator' => 'Laporan evaluasi mahasiswa terhadap dosen',
                'baseline' => '2 laporan',
                'target' => '2 laporan',
            ),
            180 => 
            array (
                'id_indikator' => 1375,
                'id_kegiatan' => 597,
                'indikator' => 'Tersusunnya kalender akademik',
                'baseline' => '1',
                'target' => '1',
            ),
            181 => 
            array (
                'id_indikator' => 1376,
                'id_kegiatan' => 676,
            'indikator' => ' IKU4-a (IKK 1.17) Hasil Akreditasi Institusi Polines ',
                'baseline' => 'A',
                'target' => 'A',
            ),
            182 => 
            array (
                'id_indikator' => 1377,
                'id_kegiatan' => 598,
                'indikator' => 'Dukumen pemetaan pendaftar per jalur pendaftaran',
                'baseline' => '0',
                'target' => '1 dokumen',
            ),
            183 => 
            array (
                'id_indikator' => 1378,
                'id_kegiatan' => 600,
                'indikator' => 'Tersusunnya SOP dan IK',
                'baseline' => '0',
                'target' => '1',
            ),
            184 => 
            array (
                'id_indikator' => 1379,
                'id_kegiatan' => 603,
                'indikator' => 'Sejumlah staf BAKPKs mengikuti pelatihan',
                'baseline' => '0',
                'target' => '40 peserta',
            ),
            185 => 
            array (
                'id_indikator' => 1381,
                'id_kegiatan' => 605,
                'indikator' => 'Sejumlah staf BAKPKs mengikuti pelatihan karakter building',
                'baseline' => '0',
                'target' => '1 kegiatan',
            ),
            186 => 
            array (
                'id_indikator' => 1385,
                'id_kegiatan' => 506,
                'indikator' => 'Dokumen borang akreditasi jurnal',
                'baseline' => '0',
                'target' => '1',
            ),
            187 => 
            array (
                'id_indikator' => 1386,
                'id_kegiatan' => 441,
                'indikator' => 'Jumlah karya yang dimanfaatkan masyarakat',
                'baseline' => '0',
                'target' => '5',
            ),
            188 => 
            array (
                'id_indikator' => 1387,
                'id_kegiatan' => 451,
                'indikator' => 'kenaikan jabatan dan pangkat JFT',
                'baseline' => '6 surat keputusan',
                'target' => '12 surat keputusan',
            ),
            189 => 
            array (
                'id_indikator' => 1388,
                'id_kegiatan' => 626,
                'indikator' => 'Program Studi Akuntansi terakreditasi A',
                'baseline' => 'Areditasi A',
                'target' => 'Areditasi A',
            ),
            190 => 
            array (
                'id_indikator' => 1389,
                'id_kegiatan' => 675,
                'indikator' => 'Galery yang siap digunakan untuk promosi karya teknologi Polines',
                'baseline' => '0',
                'target' => '1 Galery',
            ),
            191 => 
            array (
                'id_indikator' => 1390,
                'id_kegiatan' => 675,
                'indikator' => 'Jumlah karya teknologi yang berpeluang diproduksi bersama mitra',
                'baseline' => '0',
                'target' => '2 Karya teknologi',
            ),
            192 => 
            array (
                'id_indikator' => 1391,
                'id_kegiatan' => 675,
                'indikator' => 'SOP manajemen kerjasama',
                'baseline' => '0',
                'target' => '1 SOP',
            ),
            193 => 
            array (
                'id_indikator' => 1393,
                'id_kegiatan' => 646,
                'indikator' => 'Terbinan SDM yang berdedikasi Tinggi',
                'baseline' => '',
                'target' => '',
            ),
            194 => 
            array (
                'id_indikator' => 1397,
                'id_kegiatan' => 674,
                'indikator' => 'MoU dan PKS dengan Pemkot Pekalongan dan Pemkot Magelang',
                'baseline' => '0',
                'target' => '2 MoU dan 2 PKS',
            ),
            195 => 
            array (
                'id_indikator' => 1398,
                'id_kegiatan' => 674,
                'indikator' => 'Program pengembangan wilayah atau kawasan binaan Kota Pekalongan dan Kota Magelang',
                'baseline' => '0',
                'target' => '2 Program',
            ),
            196 => 
            array (
                'id_indikator' => 1399,
                'id_kegiatan' => 674,
                'indikator' => 'SOP atau Peraturan Direktur',
                'baseline' => '0',
                'target' => '1 SOP',
            ),
            197 => 
            array (
                'id_indikator' => 1400,
                'id_kegiatan' => 514,
                'indikator' => 'Jumlah Mahasiswa berwirausaha',
                'baseline' => '0',
                'target' => '4',
            ),
            198 => 
            array (
                'id_indikator' => 1402,
                'id_kegiatan' => 543,
                'indikator' => 'Terselenggaranya Summer Camp',
                'baseline' => '1',
                'target' => '1',
            ),
            199 => 
            array (
                'id_indikator' => 1406,
                'id_kegiatan' => 531,
                'indikator' => 'Dokumen Evaluasi',
                'baseline' => '0',
                'target' => '1 dokumen',
            ),
            200 => 
            array (
                'id_indikator' => 1408,
                'id_kegiatan' => 670,
                'indikator' => 'Jumlah mahasiswa berprestasi polines',
                'baseline' => '25',
                'target' => '20',
            ),
            201 => 
            array (
                'id_indikator' => 1412,
                'id_kegiatan' => 548,
                'indikator' => 'Jumlah nar sumber',
                'baseline' => '0',
                'target' => '4',
            ),
            202 => 
            array (
                'id_indikator' => 1413,
                'id_kegiatan' => 591,
                'indikator' => 'Dokumentasi pelaksanaan upacara tahun 2018',
                'baseline' => '',
                'target' => '',
            ),
            203 => 
            array (
                'id_indikator' => 1414,
                'id_kegiatan' => 591,
                'indikator' => '',
                'baseline' => '',
                'target' => '',
            ),
            204 => 
            array (
                'id_indikator' => 1415,
                'id_kegiatan' => 592,
                'indikator' => 'Dokumen kompetensi jabatan tenaga kependidikan',
                'baseline' => '0 dokumen Anjab',
                'target' => '1 dokumen Anjab',
            ),
            205 => 
            array (
                'id_indikator' => 1416,
                'id_kegiatan' => 544,
                'indikator' => 'jumlah peseerta seminar',
                'baseline' => '25 Dosen polines',
                'target' => '30 dosen polines',
            ),
            206 => 
            array (
                'id_indikator' => 1417,
                'id_kegiatan' => 544,
                'indikator' => 'Jumlah peserta seminar',
                'baseline' => '5 dosen di luar poines',
                'target' => '7 dosen diluar polines',
            ),
            207 => 
            array (
                'id_indikator' => 1418,
                'id_kegiatan' => 544,
                'indikator' => 'Jumlah narasumber',
                'baseline' => '2',
                'target' => '2',
            ),
            208 => 
            array (
                'id_indikator' => 1419,
                'id_kegiatan' => 544,
                'indikator' => 'Jumlah narasumber',
                'baseline' => '2',
                'target' => '2',
            ),
            209 => 
            array (
                'id_indikator' => 1420,
                'id_kegiatan' => 546,
                'indikator' => 'Peserta pelatihan',
                'baseline' => '0',
                'target' => '25 mahasiswa',
            ),
            210 => 
            array (
                'id_indikator' => 1421,
                'id_kegiatan' => 677,
                'indikator' => 'Staf yg mengikuti pelatihan',
                'baseline' => '25 %',
                'target' => '30 %',
            ),
            211 => 
            array (
                'id_indikator' => 1422,
                'id_kegiatan' => 678,
                'indikator' => 'Alat dan bahan praktek',
                'baseline' => '0',
                'target' => '1',
            ),
            212 => 
            array (
                'id_indikator' => 1423,
                'id_kegiatan' => 552,
                'indikator' => '10 buku ajar ber ISBN selesai dibuat',
                'baseline' => '45',
                'target' => '10',
            ),
            213 => 
            array (
                'id_indikator' => 1426,
                'id_kegiatan' => 512,
                'indikator' => 'Jumlah mahasiswa tesertifikasi',
                'baseline' => '200',
                'target' => '400',
            ),
            214 => 
            array (
                'id_indikator' => 1428,
                'id_kegiatan' => 497,
                'indikator' => 'Jumlah mahasiswa kelas permata dalam kredit learning',
                'baseline' => '20',
                'target' => '40',
            ),
            215 => 
            array (
                'id_indikator' => 1429,
                'id_kegiatan' => 516,
                'indikator' => 'Terbentuknya laboratorium organik sebagai embrio inkubasi bisnis',
                'baseline' => '0',
                'target' => '1',
            ),
            216 => 
            array (
                'id_indikator' => 1430,
                'id_kegiatan' => 517,
                'indikator' => 'Dokumen evaluasi PBM',
                'baseline' => '1 paket',
                'target' => '2 paket',
            ),
            217 => 
            array (
                'id_indikator' => 1432,
                'id_kegiatan' => 518,
                'indikator' => 'Jumlah MoU dengan perusahaan/industri',
                'baseline' => '10',
                'target' => '15',
            ),
            218 => 
            array (
                'id_indikator' => 1433,
                'id_kegiatan' => 518,
                'indikator' => 'Jumlah mahasiswa langsung bekerja sebelum lulus',
                'baseline' => '20%',
                'target' => '40%',
            ),
            219 => 
            array (
                'id_indikator' => 1434,
                'id_kegiatan' => 522,
                'indikator' => 'Brosur/leaflet/mug/stopmap dan buku agenda',
                'baseline' => '0',
                'target' => '1 paket',
            ),
            220 => 
            array (
                'id_indikator' => 1435,
                'id_kegiatan' => 581,
                'indikator' => 'Tersusun Kontrak perkuliahan sebanyak 23 mata kuliah',
                'baseline' => '0',
                'target' => '23',
            ),
            221 => 
            array (
                'id_indikator' => 1437,
                'id_kegiatan' => 612,
                'indikator' => 'dokumen evaluasi diri prodi D3 teknik mesin 2018',
                'baseline' => ' Data evaluasi diri jurusan 2017',
                'target' => 'data evaluasi diri prodi 2018',
            ),
            222 => 
            array (
                'id_indikator' => 1439,
                'id_kegiatan' => 602,
                'indikator' => 'Dokumen draft kurikulum KKNI dengan konsep PBE',
                'baseline' => 'Kurikulum KKNI',
                'target' => 'KurikulumKKNI dengan konsep PBE',
            ),
            223 => 
            array (
                'id_indikator' => 1441,
                'id_kegiatan' => 624,
                'indikator' => 'Perpanjangan dan penambahan MOU dengan industri',
                'baseline' => '9 MOU',
                'target' => '12 MOU',
            ),
            224 => 
            array (
                'id_indikator' => 1442,
                'id_kegiatan' => 650,
                'indikator' => 'dokumen / produk kerja jurusan ',
                'baseline' => 'dokumen raker 2017',
                'target' => 'dokumen rapat kerja 2018',
            ),
            225 => 
            array (
                'id_indikator' => 1443,
                'id_kegiatan' => 623,
                'indikator' => 'Tatanan dokumen prodi D3 yang sesuai standar baku',
                'baseline' => 'dokumen 2017',
                'target' => 'dokumen 2018',
            ),
            226 => 
            array (
                'id_indikator' => 1445,
                'id_kegiatan' => 654,
                'indikator' => 'Lulusan prodi bersertifikat',
                'baseline' => '11%',
                'target' => '100%',
            ),
            227 => 
            array (
                'id_indikator' => 1447,
                'id_kegiatan' => 653,
                'indikator' => 'Bahan ajar E-Learning',
                'baseline' => '0',
                'target' => '10',
            ),
            228 => 
            array (
                'id_indikator' => 1448,
                'id_kegiatan' => 653,
                'indikator' => 'IPK > 3.00',
                'baseline' => '80%',
                'target' => '85%',
            ),
            229 => 
            array (
                'id_indikator' => 1449,
                'id_kegiatan' => 656,
                'indikator' => 'Dokumen borang akreditasi',
                'baseline' => '0',
                'target' => '1',
            ),
            230 => 
            array (
                'id_indikator' => 1451,
                'id_kegiatan' => 680,
            'indikator' => '-	Dokumen evaluasi prestasi akademik mahasiswa dari  Jalur Penerimaan (PMDKPN, SPA, UMPNn UM) Tahun Akademik  2017/2018  ',
                'baseline' => '2',
                'target' => '3',
            ),
            231 => 
            array (
                'id_indikator' => 1452,
                'id_kegiatan' => 681,
                'indikator' => 'Dokumen peta pendaftar calon mahasiswa baru Politeknik Negeri Semarang',
                'baseline' => '2',
                'target' => '3',
            ),
            232 => 
            array (
                'id_indikator' => 1453,
                'id_kegiatan' => 682,
                'indikator' => 'Jumlah Soal teknik dan tataniaga',
            'baseline' => '2 set (800 soal)',
            'target' => '2 set (800 soal)',
            ),
            233 => 
            array (
                'id_indikator' => 1454,
                'id_kegiatan' => 683,
                'indikator' => '-	Jumlah dokumen hasil analisis kehandalan tes masuk politeknik negeri semarang ',
                'baseline' => '2 set ',
                'target' => '-	Jumlah dokumen hasil analisis kehandalan tes masuk politeknik negeri semarang ',
            ),
            234 => 
            array (
                'id_indikator' => 1455,
                'id_kegiatan' => 684,
                'indikator' => 'Tersedianya dokumen Perak 2018',
                'baseline' => '1 dokumen',
                'target' => '2 Dokumen',
            ),
            235 => 
            array (
                'id_indikator' => 1456,
                'id_kegiatan' => 595,
                'indikator' => 'Jumlah rekaman kamera CCTV yang berfungsi sebagai media penyampaian informasi',
                'baseline' => '173',
                'target' => '185',
            ),
            236 => 
            array (
                'id_indikator' => 1457,
                'id_kegiatan' => 589,
                'indikator' => 'Dokumen laporan pemutakhiran dan penghapusan BMN',
                'baseline' => 'Dokumen 2017',
                'target' => 'Dokumen 2018',
            ),
            237 => 
            array (
                'id_indikator' => 1458,
                'id_kegiatan' => 508,
                'indikator' => 'Jumlah personel menguasai penggunaan APAR dan HYDRANT',
                'baseline' => '27 person',
                'target' => '37 person',
            ),
            238 => 
            array (
                'id_indikator' => 1459,
                'id_kegiatan' => 679,
                'indikator' => 'Jumlah total pemenang akademsi berprestasi',
                'baseline' => '18 orang',
                'target' => '18 orang',
            ),
            239 => 
            array (
                'id_indikator' => 1460,
                'id_kegiatan' => 493,
                'indikator' => 'Terevaluasinya Dokumen Monev Perencanaan',
                'baseline' => '1 Dokumen',
                'target' => '1 Dokumen',
            ),
            240 => 
            array (
                'id_indikator' => 1461,
                'id_kegiatan' => 493,
                'indikator' => 'Terevaluasinya Dokumen Pelaksanaan',
                'baseline' => '1 Dokumen',
                'target' => '1 Dokumen',
            ),
            241 => 
            array (
                'id_indikator' => 1462,
                'id_kegiatan' => 493,
                'indikator' => 'Terevaluasinya Dokumen Hasil & Pelaporan',
                'baseline' => '1 Dokumen',
                'target' => '1 Dokumen',
            ),
            242 => 
            array (
                'id_indikator' => 1463,
                'id_kegiatan' => 493,
            'indikator' => 'IKK 4-(3)(IKU 15) Hasil Penilaian AKIP',
                'baseline' => 'A',
                'target' => 'A',
            ),
            243 => 
            array (
                'id_indikator' => 1467,
                'id_kegiatan' => 641,
                'indikator' => 'Jumlah mahasiswa semester akhir mengikuti pelatihan',
                'baseline' => '0',
                'target' => '400 mhs bidang Tata Niaga',
            ),
            244 => 
            array (
                'id_indikator' => 1468,
                'id_kegiatan' => 686,
                'indikator' => 'Terlisensinya skema sertifikasi',
                'baseline' => '3',
                'target' => '3',
            ),
            245 => 
            array (
                'id_indikator' => 1470,
                'id_kegiatan' => 609,
                'indikator' => 'Dokumen hasil evaluasi ketidak hadiran mahasiswa',
                'baseline' => '0',
                'target' => '1 dokumen',
            ),
            246 => 
            array (
                'id_indikator' => 1472,
                'id_kegiatan' => 566,
                'indikator' => 'Dokumen hasil pengukuran kepuasan Mahasiswa dan Dosen terhadap Layanan Staf BAKP',
                'baseline' => '1',
                'target' => '1 dokumen',
            ),
            247 => 
            array (
                'id_indikator' => 1474,
                'id_kegiatan' => 651,
                'indikator' => 'Tersedianya data IP dan IPK  per kelas per prodi',
                'baseline' => '0',
                'target' => '1 dokumen',
            ),
            248 => 
            array (
                'id_indikator' => 1475,
                'id_kegiatan' => 522,
                'indikator' => 'MOA dengan Industri dan mitra',
                'baseline' => '5',
                'target' => '2',
            ),
            249 => 
            array (
                'id_indikator' => 1476,
                'id_kegiatan' => 635,
                'indikator' => 'Tersedianya mahasiswa yang terserifikasi kompetensi 	',
                'baseline' => '108',
                'target' => '200',
            ),
            250 => 
            array (
                'id_indikator' => 1478,
                'id_kegiatan' => 633,
                'indikator' => 'Tersedianya asesor kompetensi yang terupgrade',
                'baseline' => '60',
                'target' => '11',
            ),
            251 => 
            array (
                'id_indikator' => 1480,
                'id_kegiatan' => 574,
            'indikator' => 'Civitas Akademika terlatih mendelay (menggunakan program sitasi)',
                'baseline' => '0',
                'target' => '100 Orang',
            ),
            252 => 
            array (
                'id_indikator' => 1481,
                'id_kegiatan' => 688,
                'indikator' => '1. Modul Praktek Bengkel Perkerasan Jalan',
                'baseline' => '0',
                'target' => '1',
            ),
            253 => 
            array (
                'id_indikator' => 1482,
                'id_kegiatan' => 515,
                'indikator' => 'Mengikuti lomba tingkat nasional',
                'baseline' => '',
                'target' => '5 orang',
            ),
            254 => 
            array (
                'id_indikator' => 1483,
                'id_kegiatan' => 622,
                'indikator' => 'Pendirian TUK Lab. Las',
                'baseline' => 'Sarana Laboratorium las 2017',
                'target' => 'Sarana laboratorium las standart TUK',
            ),
            255 => 
            array (
                'id_indikator' => 1484,
                'id_kegiatan' => 613,
                'indikator' => 'Pendirian TUK Lab. Perancangan',
                'baseline' => 'Sarana Laboratorium perancangan 2017',
                'target' => 'Sarana laboratorium perancangan standart TUK',
            ),
            256 => 
            array (
                'id_indikator' => 1486,
                'id_kegiatan' => 571,
                'indikator' => '10 Melengkapai pemberkasan serdos',
                'baseline' => '312',
                'target' => '10',
            ),
            257 => 
            array (
                'id_indikator' => 1487,
                'id_kegiatan' => 561,
                'indikator' => 'jumlah hasil penelitian dan pengabdian yang terdiseminasi',
                'baseline' => '217',
                'target' => '217',
            ),
            258 => 
            array (
                'id_indikator' => 1488,
                'id_kegiatan' => 561,
                'indikator' => 'Dokumen kumpulan abstrak diseminasi',
                'baseline' => '1',
                'target' => '1',
            ),
            259 => 
            array (
                'id_indikator' => 1489,
                'id_kegiatan' => 647,
                'indikator' => 'Mahasiswa yang tergabung dalam ORMAWA mengikuti temu akademik',
                'baseline' => '0',
                'target' => '200 mahasiswa',
            ),
            260 => 
            array (
                'id_indikator' => 1491,
                'id_kegiatan' => 535,
                'indikator' => 'Jumlah pertemuan alumni dengan industri/perusahaan sebanyak 6 pertemuan',
                'baseline' => '5',
                'target' => '6',
            ),
            261 => 
            array (
                'id_indikator' => 1492,
                'id_kegiatan' => 532,
            'indikator' => 'Jumlah pengembangan dokumen mutu Polines (terintegrasi) base line 3, target 4',
                'baseline' => '',
                'target' => '',
            ),
            262 => 
            array (
                'id_indikator' => 1493,
                'id_kegiatan' => 532,
                'indikator' => 'Jumlah standar base line 97 Target 110',
                'baseline' => '',
                'target' => '',
            ),
            263 => 
            array (
                'id_indikator' => 1495,
                'id_kegiatan' => 520,
                'indikator' => 'Jumlah Nara Sumber',
                'baseline' => '0',
                'target' => '2',
            ),
            264 => 
            array (
                'id_indikator' => 1496,
                'id_kegiatan' => 520,
                'indikator' => 'Jumlah Peserta Workshop',
                'baseline' => '0',
                'target' => '50',
            ),
            265 => 
            array (
                'id_indikator' => 1497,
                'id_kegiatan' => 520,
                'indikator' => '',
                'baseline' => '',
                'target' => '',
            ),
            266 => 
            array (
                'id_indikator' => 1498,
                'id_kegiatan' => 517,
                'indikator' => 'Tindak lanjut dan pelaksanaan temuan GKM perbaikan tata kelola di Jurusan AB',
                'baseline' => '0',
                'target' => '2',
            ),
            267 => 
            array (
                'id_indikator' => 1499,
                'id_kegiatan' => 542,
                'indikator' => 'Jumlah  bendel hasil analisis layanan akademik dan stakeholders sebanyak 2 bendel',
                'baseline' => '2',
                'target' => '2',
            ),
            268 => 
            array (
                'id_indikator' => 1500,
                'id_kegiatan' => 542,
                'indikator' => 'Indeks Kepuasan Pelanggan Akademik base line 3,4 target 3,42',
                'baseline' => '3,4',
                'target' => '3,42',
            ),
            269 => 
            array (
                'id_indikator' => 1501,
                'id_kegiatan' => 556,
                'indikator' => 'Jumlah judul Penelitian  dan pengabdian  yang dimonev',
                'baseline' => '217',
                'target' => '227',
            ),
            270 => 
            array (
                'id_indikator' => 1502,
                'id_kegiatan' => 555,
            'indikator' => 'Hasil evaluasi /Penilaian asesor Internal terhadap Borang UPPS (3b), base line 361 Target 365',
                'baseline' => '361',
                'target' => '365',
            ),
            271 => 
            array (
                'id_indikator' => 1503,
                'id_kegiatan' => 559,
                'indikator' => 'Jumlah dokumen evaluasi diri terupdate Base line 1',
                'baseline' => '1',
                'target' => '1',
            ),
            272 => 
            array (
                'id_indikator' => 1504,
                'id_kegiatan' => 559,
                'indikator' => 'Hasil evaluasi/penilaian asesor internal terhadap Evaluasi diri target 361',
                'baseline' => '-',
                'target' => '361',
            ),
            273 => 
            array (
                'id_indikator' => 1505,
                'id_kegiatan' => 577,
                'indikator' => 'Tersusunnya dokumen borang akreditasi perpustakaan.',
                'baseline' => '0',
                'target' => '1 Dokumen',
            ),
            274 => 
            array (
                'id_indikator' => 1506,
                'id_kegiatan' => 537,
                'indikator' => 'Dokumen peningkatan impementasi SPMI, Base line 1, Target 2',
                'baseline' => '1',
                'target' => '2',
            ),
            275 => 
            array (
                'id_indikator' => 1507,
                'id_kegiatan' => 537,
                'indikator' => 'Jumlah Peserta pelatihan, base line 40, Target 50',
                'baseline' => '40',
                'target' => '50',
            ),
            276 => 
            array (
                'id_indikator' => 1508,
                'id_kegiatan' => 482,
                'indikator' => '2. Terwujudnya dokumen Laporan Kinerja Serapan Anggaran',
                'baseline' => '1 dokumen per triwulan',
                'target' => '1 dokumen per tri wulan',
            ),
            277 => 
            array (
                'id_indikator' => 1509,
                'id_kegiatan' => 482,
                'indikator' => '',
                'baseline' => '',
                'target' => '',
            ),
            278 => 
            array (
                'id_indikator' => 1510,
                'id_kegiatan' => 563,
                'indikator' => 'Jumlah Auditor Internal, base line 30, Target 50',
                'baseline' => '30',
                'target' => '50',
            ),
            279 => 
            array (
                'id_indikator' => 1511,
                'id_kegiatan' => 483,
                'indikator' => '2. Staf Keuangan yang telah mengikuti Kegiatan Karakter Building',
                'baseline' => '0',
                'target' => '13 orang',
            ),
            280 => 
            array (
                'id_indikator' => 1512,
                'id_kegiatan' => 513,
                'indikator' => 'Jumlah judul PKM',
                'baseline' => '0',
                'target' => '5',
            ),
            281 => 
            array (
                'id_indikator' => 1513,
                'id_kegiatan' => 513,
                'indikator' => 'Jumlah Prposal PKM',
                'baseline' => '0',
                'target' => '2',
            ),
            282 => 
            array (
                'id_indikator' => 1514,
                'id_kegiatan' => 485,
                'indikator' => 'Dokumen Register Rekonsiliasi',
                'baseline' => '2 dokumen per semester',
                'target' => '2 dokumen per semester',
            ),
            283 => 
            array (
                'id_indikator' => 1515,
                'id_kegiatan' => 485,
                'indikator' => 'Berita Acara Rekonsiliasi',
                'baseline' => '2 dokumen per semester',
                'target' => '2 dokumen per semester',
            ),
            284 => 
            array (
                'id_indikator' => 1516,
                'id_kegiatan' => 646,
                'indikator' => 'Tersertifikasi dosen dan tenaga administrasi',
                'baseline' => '50',
                'target' => '104',
            ),
            285 => 
            array (
                'id_indikator' => 1518,
                'id_kegiatan' => 491,
                'indikator' => '2. Staf Keuangan yang telah mengikuti pemahami peraturan terbaru bidang keuangan',
                'baseline' => '0',
                'target' => '13 staf keuangan',
            ),
            286 => 
            array (
                'id_indikator' => 1520,
                'id_kegiatan' => 509,
                'indikator' => '2.  Dokumen Borang Akreditasi',
                'baseline' => '0',
                'target' => '1',
            ),
            287 => 
            array (
                'id_indikator' => 1521,
                'id_kegiatan' => 509,
                'indikator' => '',
                'baseline' => '',
                'target' => '',
            ),
            288 => 
            array (
                'id_indikator' => 1523,
                'id_kegiatan' => 509,
                'indikator' => '',
                'baseline' => '',
                'target' => '',
            ),
            289 => 
            array (
                'id_indikator' => 1524,
                'id_kegiatan' => 505,
                'indikator' => '2.  Dokumen Borang Akreditasi',
                'baseline' => '0',
                'target' => '1',
            ),
            290 => 
            array (
                'id_indikator' => 1525,
                'id_kegiatan' => 505,
                'indikator' => '',
                'baseline' => '',
                'target' => '',
            ),
            291 => 
            array (
                'id_indikator' => 1526,
                'id_kegiatan' => 502,
                'indikator' => '2.  Dokumen Borang Akreditasi',
                'baseline' => '0',
                'target' => '1',
            ),
            292 => 
            array (
                'id_indikator' => 1527,
                'id_kegiatan' => 502,
                'indikator' => '',
                'baseline' => '',
                'target' => '',
            ),
            293 => 
            array (
                'id_indikator' => 1532,
                'id_kegiatan' => 636,
                'indikator' => 'Tersedianya MUK skema sertifikasi yang terverifikasi',
                'baseline' => '28',
                'target' => '5',
            ),
            294 => 
            array (
                'id_indikator' => 1533,
                'id_kegiatan' => 638,
                'indikator' => 'Tersedianya asesor yang tersertifikasi uji teknis kompetensi',
                'baseline' => '0',
                'target' => '20',
            ),
            295 => 
            array (
                'id_indikator' => 1534,
                'id_kegiatan' => 686,
                'indikator' => 'Terupgradenya lisensi skema sertifikasi',
                'baseline' => '3',
                'target' => '3',
            ),
            296 => 
            array (
                'id_indikator' => 1535,
                'id_kegiatan' => 521,
            'indikator' => 'Jumlah lulusan yang terdata dalam sistem penelusuran lulusan (tracer study)',
                'baseline' => '500 org',
                'target' => '1100 org',
            ),
            297 => 
            array (
                'id_indikator' => 1536,
                'id_kegiatan' => 629,
                'indikator' => 'Jumlah pembicara seminar',
                'baseline' => '3',
                'target' => '3',
            ),
            298 => 
            array (
                'id_indikator' => 1537,
                'id_kegiatan' => 629,
                'indikator' => 'Jumlah peserta seminar',
                'baseline' => '76',
                'target' => '85',
            ),
            299 => 
            array (
                'id_indikator' => 1538,
                'id_kegiatan' => 432,
                'indikator' => 'Jumlah Mahasiswa Baru',
                'baseline' => '1551',
                'target' => '1551',
            ),
            300 => 
            array (
                'id_indikator' => 1539,
                'id_kegiatan' => 434,
                'indikator' => 'Peningkatan kualitas akademik dan non akademik',
                'baseline' => '75',
                'target' => '75',
            ),
            301 => 
            array (
                'id_indikator' => 1540,
                'id_kegiatan' => 446,
                'indikator' => 'Mahasiswa berwawasan dan berpengalaman tentang teknologi dan bisnis ',
                'baseline' => '400',
                'target' => '400',
            ),
            302 => 
            array (
                'id_indikator' => 1541,
                'id_kegiatan' => 449,
                'indikator' => 'Jumlah mahasiswa berprestasi polines',
                'baseline' => '15',
                'target' => '20',
            ),
            303 => 
            array (
                'id_indikator' => 1542,
                'id_kegiatan' => 449,
                'indikator' => 'Jumlah Mahasiswa berprestasi Nasional',
                'baseline' => '1',
                'target' => '1',
            ),
            304 => 
            array (
                'id_indikator' => 1543,
                'id_kegiatan' => 457,
                'indikator' => 'Jumlah mahasiswa 8 orang mengikuti kontes mobil listrik',
                'baseline' => '8',
                'target' => '8',
            ),
            305 => 
            array (
                'id_indikator' => 1544,
                'id_kegiatan' => 458,
                'indikator' => 'Jumlah mahasiswa yang mewakili lomba',
                'baseline' => '6',
                'target' => '6',
            ),
            306 => 
            array (
                'id_indikator' => 1545,
                'id_kegiatan' => 458,
                'indikator' => 'Jumlah partisipasi mahasiswa dalam kegiatan nasional',
                'baseline' => '3',
                'target' => '3',
            ),
            307 => 
            array (
                'id_indikator' => 1546,
                'id_kegiatan' => 463,
                'indikator' => 'Jumlah mahasiswa berprestasi polines',
                'baseline' => '4',
                'target' => '4',
            ),
            308 => 
            array (
                'id_indikator' => 1547,
                'id_kegiatan' => 465,
                'indikator' => 'Terpilihnya mahasiswa untuk maju ke tingkat nasional',
                'baseline' => '4',
                'target' => '4',
            ),
            309 => 
            array (
                'id_indikator' => 1548,
                'id_kegiatan' => 471,
                'indikator' => 'Sejumlah 50 mahasiswa berprestasi secara nasional dan internasional',
                'baseline' => '25',
                'target' => '50',
            ),
            310 => 
            array (
                'id_indikator' => 1549,
                'id_kegiatan' => 471,
                'indikator' => 'Prestasi mahasiswa yang mengikuti kompetisi tingkat nasional',
                'baseline' => '10',
                'target' => '10',
            ),
            311 => 
            array (
                'id_indikator' => 1550,
                'id_kegiatan' => 475,
                'indikator' => 'Jumlah mahasiswa aktif dalam UKM Sport',
                'baseline' => '210',
                'target' => '250',
            ),
            312 => 
            array (
                'id_indikator' => 1551,
                'id_kegiatan' => 489,
                'indikator' => 'sejumlah 25 mahasiswa menjadi delegasi peksimida',
                'baseline' => '25',
                'target' => '25',
            ),
            313 => 
            array (
                'id_indikator' => 1552,
                'id_kegiatan' => 489,
                'indikator' => 'Prestasi mahasiswa yang mengikuti Kompetisi tingkat Nasional ',
                'baseline' => '0',
                'target' => '3',
            ),
            314 => 
            array (
                'id_indikator' => 1553,
                'id_kegiatan' => 507,
                'indikator' => 'Jumlah PKM yang didanai kementrian',
                'baseline' => '13',
                'target' => '13',
            ),
            315 => 
            array (
                'id_indikator' => 1554,
                'id_kegiatan' => 604,
                'indikator' => '2 kategori lomba yang diikuti',
                'baseline' => '0',
                'target' => '2',
            ),
            316 => 
            array (
                'id_indikator' => 1555,
                'id_kegiatan' => 606,
                'indikator' => 'Jumlah kelompok PMW terseleksi',
                'baseline' => '10',
                'target' => '13',
            ),
            317 => 
            array (
                'id_indikator' => 1556,
                'id_kegiatan' => 614,
                'indikator' => 'Memperoleh Tiket Kompetisi Regional',
                'baseline' => '4',
                'target' => '4',
            ),
            318 => 
            array (
                'id_indikator' => 1557,
                'id_kegiatan' => 615,
                'indikator' => 'Jumlah Mahasiswa berprestasi di bidangnya 	',
                'baseline' => '1',
                'target' => '1',
            ),
            319 => 
            array (
                'id_indikator' => 1558,
                'id_kegiatan' => 616,
                'indikator' => 'Prestasi yang diraih oleh Delegasi Porseni',
                'baseline' => '6',
                'target' => '7',
            ),
            320 => 
            array (
                'id_indikator' => 1559,
                'id_kegiatan' => 619,
                'indikator' => 'Jumlah mahasiswa berpartisipasi dalam kegiatan non akademik',
                'baseline' => '0',
                'target' => '25',
            ),
            321 => 
            array (
                'id_indikator' => 1560,
                'id_kegiatan' => 670,
                'indikator' => 'Jumlah mahasiswa berprestasi polines',
                'baseline' => '0',
                'target' => '1',
            ),
            322 => 
            array (
                'id_indikator' => 1561,
                'id_kegiatan' => 672,
                'indikator' => 'Jumlah mahasiswa yang dapat beasiswa',
                'baseline' => '25 %',
                'target' => '30%',
            ),
            323 => 
            array (
                'id_indikator' => 1562,
                'id_kegiatan' => 657,
                'indikator' => 'Performa server meningkat dengan indikasi rerata beban kerja menurun menjadi 70%',
                'baseline' => '90%',
                'target' => '70%',
            ),
            324 => 
            array (
                'id_indikator' => 1563,
                'id_kegiatan' => 657,
                'indikator' => 'Performa server meningkat dengan indikasi rerata waktu pengaksesan server menurun menjadi 0,30 ms',
                'baseline' => '0,63 ms',
                'target' => '0,30 ms',
            ),
            325 => 
            array (
                'id_indikator' => 1564,
                'id_kegiatan' => 655,
                'indikator' => 'Kapasitas jaringan data meningkat dengan indikasi luas wilayah yang terhubung oleh jaringan data menjadi 74%',
                'baseline' => '66%',
                'target' => '74%',
            ),
            326 => 
            array (
                'id_indikator' => 1565,
                'id_kegiatan' => 655,
                'indikator' => 'Kualitas jaringan data meningkat dengan indikasi rerata kecepatan akses pengguna ke Internet menjadi 256 kbps',
                'baseline' => '128 kbps',
                'target' => '256 kbps',
            ),
            327 => 
            array (
                'id_indikator' => 1566,
                'id_kegiatan' => 655,
                'indikator' => 'Kualitas jaringan data meningkat dengan indikasi reliabilitas jaringan data menjadi 80%',
                'baseline' => '70%',
                'target' => '80%',
            ),
            328 => 
            array (
                'id_indikator' => 1567,
                'id_kegiatan' => 658,
                'indikator' => 'Kapasitas website meningkat dengan indikasi jumlah artikel berbahasa Indonesia dalam satu tahun menjadi 160 artikel',
                'baseline' => '150',
                'target' => '160',
            ),
            329 => 
            array (
                'id_indikator' => 1569,
                'id_kegiatan' => 658,
                'indikator' => 'Kapasitas website meningkat dengan indikasi jumlah artikel berbahasa Inggris dalam satu tahun menjadi 60 artikel',
                'baseline' => '50',
                'target' => '60',
            ),
            330 => 
            array (
                'id_indikator' => 1570,
                'id_kegiatan' => 658,
                'indikator' => 'Kualitas website meningkat dengan indikasi penurunan waktu pengaksesan menjadi 0,20 detik',
                'baseline' => '0,27',
                'target' => '0,20',
            ),
            331 => 
            array (
                'id_indikator' => 1571,
                'id_kegiatan' => 659,
                'indikator' => 'Termutakhirnya pelaporan PD DIKTI menjadi 100%',
                'baseline' => '100%',
                'target' => '100%',
            ),
            332 => 
            array (
                'id_indikator' => 1572,
                'id_kegiatan' => 660,
                'indikator' => 'Termutakhirnya SIRENA melalui peningkatan jumlah modul menjadi 18',
                'baseline' => '16',
                'target' => '18',
            ),
            333 => 
            array (
                'id_indikator' => 1573,
                'id_kegiatan' => 661,
                'indikator' => 'Terupdatenya SILAPOR melalui penambahan jumlah modul menjadi 2',
                'baseline' => '1',
                'target' => '2',
            ),
            334 => 
            array (
                'id_indikator' => 1574,
                'id_kegiatan' => 662,
                'indikator' => 'Terintegrasinya jumlah sistem informasi menjadi 14 sistem',
                'baseline' => '2',
                'target' => '14',
            ),
            335 => 
            array (
                'id_indikator' => 1575,
                'id_kegiatan' => 663,
                'indikator' => 'Tersedianya Sistem Informasi Akreditasi Polines sejumlah 1 sistem',
                'baseline' => '0',
                'target' => '1',
            ),
            336 => 
            array (
                'id_indikator' => 1576,
                'id_kegiatan' => 664,
                'indikator' => 'Tersedianya Sistem Informasi Kemahasiswaan sejumlah 1 sistem',
                'baseline' => '0',
                'target' => '1',
            ),
            337 => 
            array (
                'id_indikator' => 1579,
                'id_kegiatan' => 499,
                'indikator' => '	Peningkatan jumlah penerimaan PNBP',
                'baseline' => '	Rp. 27.642.650.000',
                'target' => '	Rp. 27.890.250.000',
            ),
            338 => 
            array (
                'id_indikator' => 1580,
                'id_kegiatan' => 689,
                'indikator' => 'tambah modul',
                'baseline' => '1',
                'target' => '2',
            ),
            339 => 
            array (
                'id_indikator' => 1581,
                'id_kegiatan' => 690,
                'indikator' => '1',
                'baseline' => '1',
                'target' => '2',
            ),
            340 => 
            array (
                'id_indikator' => 1582,
                'id_kegiatan' => 691,
                'indikator' => '2',
                'baseline' => '2',
                'target' => '3',
            ),
            341 => 
            array (
                'id_indikator' => 1583,
                'id_kegiatan' => 692,
                'indikator' => '1',
                'baseline' => '1',
                'target' => '2',
            ),
            342 => 
            array (
                'id_indikator' => 1584,
                'id_kegiatan' => 693,
                'indikator' => '1',
                'baseline' => '1',
                'target' => '2',
            ),
            343 => 
            array (
                'id_indikator' => 1585,
                'id_kegiatan' => 694,
                'indikator' => '12',
                'baseline' => '1',
                'target' => '2',
            ),
            344 => 
            array (
                'id_indikator' => 1586,
                'id_kegiatan' => 695,
                'indikator' => 'aaa',
                'baseline' => '300',
                'target' => '300',
            ),
            345 => 
            array (
                'id_indikator' => 1587,
                'id_kegiatan' => 696,
                'indikator' => 'coba iku 20',
                'baseline' => '1',
                'target' => '2',
            ),
            346 => 
            array (
                'id_indikator' => 1591,
                'id_kegiatan' => 701,
                'indikator' => 'Dokumen Polines Dalam Angka Tahun 2019',
                'baseline' => 'Dokumen PDA Tahun 2018',
            'target' => 'Dokumen  Polines  Dalam  Angka (PDA)  di tahun 2019',
            ),
            347 => 
            array (
                'id_indikator' => 1600,
                'id_kegiatan' => 709,
                'indikator' => 'Meningkatnya penerimaan PNBP Polines tahun 2020',
                'baseline' => 'Rp. 29.739.000.000,-',
                'target' => 'Rp. 30.483.239.000,-',
            ),
            348 => 
            array (
                'id_indikator' => 1601,
                'id_kegiatan' => 709,
                'indikator' => 'Proposal TRPNBP tahun 2020',
                'baseline' => '1 dokumen',
                'target' => '1 dokumen',
            ),
            349 => 
            array (
                'id_indikator' => 1603,
                'id_kegiatan' => 710,
                'indikator' => '1.	Output  Jumlah mahasiswa yang mewakili lomba NPEO 2018 ',
                'baseline' => '5 mahasiswa',
                'target' => '5 mahasiswa',
            ),
            350 => 
            array (
                'id_indikator' => 1604,
                'id_kegiatan' => 710,
                'indikator' => ' 2.	Outcome IKP 1.1.4.1  Jumlah partisipasi mahasiswa dalam kegiatan nasional',
                'baseline' => '5 mahasiswa',
                'target' => '5 mahasiswa',
            ),
            351 => 
            array (
                'id_indikator' => 1605,
                'id_kegiatan' => 711,
                'indikator' => '1.	Output  Jumlah mahasiswa yang mewakili lomba Seleksi NUDC yang diselenggarakan oleh KOPERTIS VI Jawa Tengah  ',
                'baseline' => '3 mahasiswa',
                'target' => '3 mahasiswa',
            ),
            352 => 
            array (
                'id_indikator' => 1606,
                'id_kegiatan' => 711,
                'indikator' => '2. Outcome IKP 1.1.4.1  Jumlah partisipasi mahasiswa dalam kegiatan nasional',
                'baseline' => '3 mahasiswa',
                'target' => '3 mahasiswa',
            ),
            353 => 
            array (
                'id_indikator' => 1608,
                'id_kegiatan' => 712,
                'indikator' => 'Jumlah PKM yang didanai kementerian',
                'baseline' => '36',
                'target' => '25',
            ),
            354 => 
            array (
                'id_indikator' => 1609,
                'id_kegiatan' => 713,
                'indikator' => 'Output Data base Jurusan Berbasis Borang',
                'baseline' => 'blm mempunyai database jurusan akuntansi tahun 2018',
                'target' => 'terwujudnya database jurusan akuntansi di tahun 2019',
            ),
            355 => 
            array (
                'id_indikator' => 1610,
                'id_kegiatan' => 716,
                'indikator' => 'Jumlah PKM yang masuk PMNAS',
                'baseline' => '12',
                'target' => '10',
            ),
            356 => 
            array (
                'id_indikator' => 1611,
                'id_kegiatan' => 717,
                'indikator' => 'Jumlah mahasiswa berprestasi Polines',
                'baseline' => '25',
                'target' => '25',
            ),
            357 => 
            array (
                'id_indikator' => 1612,
                'id_kegiatan' => 717,
                'indikator' => 'Jumlah finalis mahasiswa berprestasi Nasional',
                'baseline' => '5',
                'target' => '4',
            ),
            358 => 
            array (
                'id_indikator' => 1613,
                'id_kegiatan' => 718,
            'indikator' => 'Lolos Evaluasi Awal Tahap I dan II Membuat 3 set robot untuk KRAI (2 robot), KRPAI berkaki ( 1 robot) dan KRSBI beroda (3 robot). Jumlah keseluruhan robot : 6 buah.6',
                'baseline' => '',
                'target' => '3',
            ),
            359 => 
            array (
                'id_indikator' => 1614,
                'id_kegiatan' => 718,
                'indikator' => '',
                'baseline' => '',
                'target' => '',
            ),
            360 => 
            array (
                'id_indikator' => 1616,
                'id_kegiatan' => 720,
                'indikator' => 'Jumlah mahasiswa 8 orang',
                'baseline' => '8',
                'target' => '5',
            ),
            361 => 
            array (
                'id_indikator' => 1617,
                'id_kegiatan' => 721,
                'indikator' => 'Lomba Typing Speed Lomba Filling Contest Lomba  Secretarial Contest Lomba Corporate Meeting Planning Lomba Web Design Contest  Lomba Presentation Skill Contest Lomba Master of Ceremony',
                'baseline' => '1',
                'target' => '1',
            ),
            362 => 
            array (
                'id_indikator' => 1618,
                'id_kegiatan' => 721,
                'indikator' => 'Lomba Typing Speed Lomba Filling Contest Lomba  Secretarial Contest Lomba Corporate Meeting Planning Lomba Web Design Contest  Lomba Presentation Skill Contest Lomba Master of Ceremony',
                'baseline' => '',
                'target' => '',
            ),
            363 => 
            array (
                'id_indikator' => 1619,
                'id_kegiatan' => 722,
                'indikator' => 'sejumlah 200 mahasiswa mengikuti seminar tematik',
                'baseline' => '250',
                'target' => '15',
            ),
            364 => 
            array (
                'id_indikator' => 1620,
                'id_kegiatan' => 722,
                'indikator' => 'Prestasi mahasiswa yang mengikuti Kompetisi tingkat Nasional  ',
                'baseline' => '40',
                'target' => '20',
            ),
            365 => 
            array (
                'id_indikator' => 1623,
                'id_kegiatan' => 724,
                'indikator' => 'sejumlah 5 mahasiswa mengikuti lomba bidang akuntansi tingkat nasional di Politeknik Negeri Batam',
                'baseline' => '4',
                'target' => '4',
            ),
            366 => 
            array (
                'id_indikator' => 1624,
                'id_kegiatan' => 724,
                'indikator' => 'Prestasi mahasiswa yang mengikuti Kompetisi tingkat Nasional  ',
                'baseline' => '4',
                'target' => '4',
            ),
            367 => 
            array (
                'id_indikator' => 1628,
                'id_kegiatan' => 727,
                'indikator' => 'Terwujudnya Laporan Keuangan yang baik dan akuntabel',
                'baseline' => '90%',
                'target' => '98%',
            ),
            368 => 
            array (
                'id_indikator' => 1629,
                'id_kegiatan' => 728,
                'indikator' => 'Ketepatan Data antara SIMAK BMN dengan SAIBA setiap bulanya',
                'baseline' => '95%',
                'target' => '98%',
            ),
            369 => 
            array (
                'id_indikator' => 1630,
                'id_kegiatan' => 732,
                'indikator' => 'Terwujudnya dokumen usulan  anggaran dan data dukung 2019',
                'baseline' => 'Dokumen usulan program dan anggaran thn 2018',
                'target' => '2 dokumen (usulan program dan anggaran serta dokumen pendukung 2019.',
                ),
                370 => 
                array (
                    'id_indikator' => 1631,
                    'id_kegiatan' => 733,
                    'indikator' => 'Terwujudnya dokumen RKT, RKAT dan PK 2020',
                    'baseline' => 'Belum ada',
                    'target' => '2 dokumen (RKT, RKAT dan PK 2017',
                    ),
                    371 => 
                    array (
                        'id_indikator' => 1638,
                        'id_kegiatan' => 737,
                        'indikator' => 'Jumlah dosen yang mengajukan DUPAK',
                        'baseline' => '5 dosen',
                        'target' => '5 dosen',
                    ),
                    372 => 
                    array (
                        'id_indikator' => 1644,
                        'id_kegiatan' => 739,
                        'indikator' => 'Ada sejumlah 4 proposal  lolos  secara Nasional maupun Internasional',
                        'baseline' => '4',
                        'target' => '4',
                    ),
                    373 => 
                    array (
                        'id_indikator' => 1645,
                        'id_kegiatan' => 739,
                        'indikator' => 'Mahasiswa yang mengikuti Kompetisi tingkat Nasional  ',
                        'baseline' => '2',
                        'target' => '2',
                    ),
                    374 => 
                    array (
                        'id_indikator' => 1646,
                        'id_kegiatan' => 740,
                        'indikator' => 'Ada sejumlah 15 mahasiswa yang mengikuti lomba MTQMN',
                        'baseline' => '17',
                        'target' => '5',
                    ),
                    375 => 
                    array (
                        'id_indikator' => 1647,
                        'id_kegiatan' => 740,
                        'indikator' => 'Mahasiswa yang mengikuti kompetisi tingkat Nasional dan Internasional ',
                        'baseline' => '17',
                        'target' => '5',
                    ),
                    376 => 
                    array (
                        'id_indikator' => 1648,
                        'id_kegiatan' => 741,
                    'indikator' => 'Tersedianya topologi dan layout jaringan listrik (as built drawing) Politeknik Negeri Semarang',
                        'baseline' => '0',
                        'target' => '2 gedung',
                    ),
                    377 => 
                    array (
                        'id_indikator' => 1649,
                        'id_kegiatan' => 742,
                        'indikator' => 'Jumlah mahasiswa berprestasi Polines',
                        'baseline' => '60',
                        'target' => '10',
                    ),
                    378 => 
                    array (
                        'id_indikator' => 1651,
                        'id_kegiatan' => 743,
                        'indikator' => 'Terselenggaranya rapat kerja di Jurusan Akuntansi tahun 2019',
                        'baseline' => '1',
                        'target' => '1',
                    ),
                    379 => 
                    array (
                        'id_indikator' => 1652,
                        'id_kegiatan' => 744,
                        'indikator' => '15 orang personil keuangan tersosialisasi',
                        'baseline' => '',
                        'target' => '15 orang personil keuangan',
                    ),
                    380 => 
                    array (
                        'id_indikator' => 1653,
                        'id_kegiatan' => 745,
                        'indikator' => 'Terselenggaranya upacara bendera hari Pendidikan Nasional, hari Kebangkitan Nasional, hari lahirnya Pancasila, hari Kemerdekaan RI, hari Kesaktian Pancasila, hari Sumpah Pemuda, hari Pahlawan, hari Ko',
                        'baseline' => '75%',
                        'target' => '80%',
                    ),
                    381 => 
                    array (
                        'id_indikator' => 1654,
                        'id_kegiatan' => 746,
                        'indikator' => 'Mahasiswa pengurus Ormawa di lingkungan Polines mengikuti pelatihan Administrasi',
                        'baseline' => '22 ',
                        'target' => '22',
                    ),
                    382 => 
                    array (
                        'id_indikator' => 1655,
                        'id_kegiatan' => 746,
                        'indikator' => 'Setiap Ormawa lebih mampu dan siap menjadi MC, mengelola surat menyurat dan kearsipan  ',
                        'baseline' => '22',
                        'target' => '22',
                    ),
                    383 => 
                    array (
                        'id_indikator' => 1656,
                        'id_kegiatan' => 747,
                        'indikator' => 'Kenaikan Jabatan dan pangkat Jabatan Fungsional Tenaga Kepedidikan',
                        'baseline' => '5 pegawai',
                        'target' => '5 pegawai',
                    ),
                    384 => 
                    array (
                        'id_indikator' => 1657,
                        'id_kegiatan' => 751,
                        'indikator' => '1.	Jumlah mahasiswa aktif dalam UKM sport 2.	Jumlah mahasiswa aktif dalam UKM Seni 3.	Jumlah Even Olah raga dan seni yang diikuti 4.	IKU 1.14 Prestasi Mahasiswa Mengikuti kompetisi Tingkat Nasional',
                        'baseline' => '',
                        'target' => '',
                    ),
                    385 => 
                    array (
                        'id_indikator' => 1659,
                        'id_kegiatan' => 728,
                    'indikator' => 'Dokumen Berita Acara Rekonsiliasi (BAR) internal antara SIMAK BMN dengan SAIBA',
                        'baseline' => '95%',
                        'target' => '98%',
                    ),
                    386 => 
                    array (
                        'id_indikator' => 1660,
                        'id_kegiatan' => 728,
                    'indikator' => 'Dokumen Berita Acara Rekonsiliasi (BAR) ekasternal antara SAIBA dengan E-ROKON KPPN dan antara BMN dengan SIMAN KPKNL',
                        'baseline' => '95%',
                        'target' => '98%',
                    ),
                    387 => 
                    array (
                        'id_indikator' => 1662,
                        'id_kegiatan' => 758,
                        'indikator' => 'Ada sejumlah 25 mahasiswa menjadi delegasi peksimida',
                        'baseline' => '25',
                        'target' => '10',
                    ),
                    388 => 
                    array (
                        'id_indikator' => 1663,
                        'id_kegiatan' => 758,
                        'indikator' => 'Prestasi mahasiswa yang mengikuti Kompetisi tingkat Nasional  ',
                        'baseline' => '25',
                        'target' => '10',
                    ),
                    389 => 
                    array (
                        'id_indikator' => 1667,
                        'id_kegiatan' => 764,
                        'indikator' => 'Tersedianya SPM Bidang kepegawaian',
                        'baseline' => '0',
                        'target' => '5',
                    ),
                    390 => 
                    array (
                        'id_indikator' => 1670,
                        'id_kegiatan' => 769,
                        'indikator' => 'Sejumlah 1626 mahasiswa baru memperoleh sertifikasi kegiatan ',
                        'baseline' => '1540',
                        'target' => '',
                    ),
                    391 => 
                    array (
                        'id_indikator' => 1672,
                        'id_kegiatan' => 771,
                        'indikator' => 'Tersusunnya Kalender Akademik',
                        'baseline' => '1',
                        'target' => '1',
                    ),
                    392 => 
                    array (
                        'id_indikator' => 1673,
                        'id_kegiatan' => 773,
                        'indikator' => 'sejumlah  mahasiswa mengikuti seminar Nasional Himpunan Mahasiswa Jurusan',
                        'baseline' => '400',
                        'target' => '400',
                    ),
                    393 => 
                    array (
                        'id_indikator' => 1674,
                        'id_kegiatan' => 773,
                        'indikator' => 'Prestasi mahasiswa yang mengikuti Kompetisi tingkat Nasional  ',
                        'baseline' => '15',
                        'target' => '10',
                    ),
                    394 => 
                    array (
                        'id_indikator' => 1675,
                        'id_kegiatan' => 774,
                        'indikator' => 'Dokumen evaluasi sasaran mutu 2018',
                        'baseline' => '5 dokumen',
                        'target' => '5 dokumen',
                    ),
                    395 => 
                    array (
                        'id_indikator' => 1676,
                        'id_kegiatan' => 774,
                        'indikator' => 'Dokumen sasaran mutu & renop 2019',
                        'baseline' => '5 dokumen',
                        'target' => '5 dokumen',
                    ),
                    396 => 
                    array (
                        'id_indikator' => 1679,
                        'id_kegiatan' => 777,
                        'indikator' => 'civitas akademik dan pegawai yang hadir sarasehan',
                        'baseline' => '90 %',
                        'target' => '95 %',
                    ),
                    397 => 
                    array (
                        'id_indikator' => 1681,
                        'id_kegiatan' => 779,
                        'indikator' => 'Jumlah pegawai yang hadir mengikuti sosialisasi',
                        'baseline' => '90 %',
                        'target' => '95%',
                    ),
                    398 => 
                    array (
                        'id_indikator' => 1683,
                        'id_kegiatan' => 784,
                        'indikator' => 'Jumlah personel dapat menguasai penggunaan APAR dan Hydrant',
                        'baseline' => '37 person',
                        'target' => '47 person',
                    ),
                    399 => 
                    array (
                        'id_indikator' => 1684,
                        'id_kegiatan' => 785,
                        'indikator' => 'a.	4 kategori lomba yang diikuti',
                        'baseline' => '4',
                        'target' => '2',
                    ),
                    400 => 
                    array (
                        'id_indikator' => 1685,
                        'id_kegiatan' => 781,
                        'indikator' => 'Dokumen Analisis Beban Kerja Tenaga Kependidikan.',
                        'baseline' => '0 dokumen',
                        'target' => '1 dokumen',
                    ),
                    401 => 
                    array (
                        'id_indikator' => 1686,
                        'id_kegiatan' => 788,
                        'indikator' => 'terbentuknya tim efektif keprotokolan',
                        'baseline' => '0',
                        'target' => '15',
                    ),
                    402 => 
                    array (
                        'id_indikator' => 1687,
                        'id_kegiatan' => 789,
                        'indikator' => 'dokumen SPM Sub bagian tata usaha',
                        'baseline' => '0',
                        'target' => '1',
                    ),
                    403 => 
                    array (
                        'id_indikator' => 1689,
                        'id_kegiatan' => 787,
                        'indikator' => 'Laporan BA stok opname persediaan SMT 1 dan 2',
                        'baseline' => '2 Dokumen',
                        'target' => '2 Dokumen',
                    ),
                    404 => 
                    array (
                        'id_indikator' => 1694,
                        'id_kegiatan' => 755,
                        'indikator' => 'Proposal penelitian dan pengabdian yang direview',
                        'baseline' => '343',
                        'target' => '360',
                    ),
                    405 => 
                    array (
                        'id_indikator' => 1696,
                        'id_kegiatan' => 755,
                        'indikator' => 'Proposal penelitian dan pengabdian yang  didanai',
                        'baseline' => '280',
                        'target' => '283',
                    ),
                    406 => 
                    array (
                        'id_indikator' => 1699,
                        'id_kegiatan' => 793,
                        'indikator' => 'Tersusunnya Laporan Kemajuan Pembelajaran dan Kemahasiswaan',
                        'baseline' => '1 laporan',
                        'target' => '1 laporan',
                    ),
                    407 => 
                    array (
                        'id_indikator' => 1701,
                        'id_kegiatan' => 794,
                        'indikator' => 'Terevaluasinya dokumen Monev Perencanaan',
                        'baseline' => '1 Dokumen',
                        'target' => '1 Dokumen',
                    ),
                    408 => 
                    array (
                        'id_indikator' => 1702,
                        'id_kegiatan' => 794,
                        'indikator' => 'Terevaluasinya dokumen Monev Pelaksanaan',
                        'baseline' => '1 Dokumen',
                        'target' => '1 Dokumen',
                    ),
                    409 => 
                    array (
                        'id_indikator' => 1703,
                        'id_kegiatan' => 794,
                        'indikator' => 'Terevaluasinya dokumen Monev Hasil dan Laporan',
                        'baseline' => '1 Dokumen',
                        'target' => '1 Dokumen',
                    ),
                    410 => 
                    array (
                        'id_indikator' => 1704,
                        'id_kegiatan' => 794,
                    'indikator' => 'IKK 4 -(3) (IKU 15) Hasil Penilaian terhadap AKIP',
                        'baseline' => '1 Dokumen',
                        'target' => '1 Dokumen',
                    ),
                    411 => 
                    array (
                        'id_indikator' => 1705,
                        'id_kegiatan' => 796,
                        'indikator' => 'Jumlah Pembina kemahasiswaan',
                        'baseline' => '20',
                        'target' => '20',
                    ),
                    412 => 
                    array (
                        'id_indikator' => 1706,
                        'id_kegiatan' => 797,
                        'indikator' => 'Dokumen Evaluasi Diri Prodi AKMEN',
                        'baseline' => 'Evaluasi Diri 2015',
                        'target' => '1 Dokumen Evaluasi Diri 2019',
                    ),
                    413 => 
                    array (
                        'id_indikator' => 1707,
                        'id_kegiatan' => 799,
                        'indikator' => 'Tersedianya obat-obatan untuk para civitas akademik',
                        'baseline' => '50 macam obat - obatan',
                        'target' => '50 macam obat - obatan',
                    ),
                    414 => 
                    array (
                        'id_indikator' => 1708,
                        'id_kegiatan' => 795,
                    'indikator' => 'Jumlah lulusan yang terdata dalam sistem penelusuran lulusan (tracer study)',
                        'baseline' => '1384 org',
                        'target' => '1343 org',
                    ),
                    415 => 
                    array (
                        'id_indikator' => 1709,
                        'id_kegiatan' => 795,
                    'indikator' => 'Waktu tunggu 0 (nol) bulan, jumlah alumni yang langsung bekerja',
                        'baseline' => '160 org',
                        'target' => '180 org',
                    ),
                    416 => 
                    array (
                        'id_indikator' => 1711,
                        'id_kegiatan' => 801,
                        'indikator' => 'Jumlah tenaga kependidikan yang mengikuti diklat',
                        'baseline' => '90%',
                        'target' => '95%',
                    ),
                    417 => 
                    array (
                        'id_indikator' => 1712,
                        'id_kegiatan' => 800,
                        'indikator' => 'Jumlah tenaga kependidikan yang mendapat bantuan pendidikan',
                        'baseline' => '90%',
                        'target' => '95%',
                    ),
                    418 => 
                    array (
                        'id_indikator' => 1714,
                        'id_kegiatan' => 803,
                    'indikator' => 'Terealisasi nya dokumen Laporan Hasil Audit (LHA) bidang Manajemen Sumber Daya Manusia di Polines   ',
                        'baseline' => '1 Dokumen	',
                        'target' => '1 Dokumen	',
                    ),
                    419 => 
                    array (
                        'id_indikator' => 1715,
                        'id_kegiatan' => 803,
                        'indikator' => 'Penguatan karakter dan budaya kerja',
                        'baseline' => '6',
                        'target' => '7',
                    ),
                    420 => 
                    array (
                        'id_indikator' => 1719,
                        'id_kegiatan' => 805,
                        'indikator' => 'Jumlah karya kreatif-inovatif dosen & mahasiswa, hasil/karya penelitian yg berupa prototipe yang dipromosikan & berpotensi dimanfaatkan stakeholder secara berkelanjutan yang ditampilkan dalam profil P',
                        'baseline' => '40 karya yang tertuang di dalam 100 eks katalog dan 100 keping CD',
                        'target' => '45 karya yang tertuang di dalam 100 eks katalog dan 100 keping CD',
                    ),
                    421 => 
                    array (
                        'id_indikator' => 1721,
                        'id_kegiatan' => 806,
                        'indikator' => 'Jumlah MoU yang ditindaklanjuti',
                        'baseline' => '24',
                        'target' => '25',
                    ),
                    422 => 
                    array (
                        'id_indikator' => 1722,
                        'id_kegiatan' => 754,
                        'indikator' => 'Sosialisasi dan Laporan SPT PPh Ps.21',
                        'baseline' => '496 pegawai',
                        'target' => '515 pegawai',
                    ),
                    423 => 
                    array (
                        'id_indikator' => 1723,
                        'id_kegiatan' => 808,
                        'indikator' => 'Staf yang mengikuti pelatihan peningkatan karakter dan berbudaya kerja',
                        'baseline' => '0',
                        'target' => '15',
                    ),
                    424 => 
                    array (
                        'id_indikator' => 1729,
                        'id_kegiatan' => 719,
                        'indikator' => 'Laporan serapan anggaran tiap bulan',
                        'baseline' => '12 bulan',
                        'target' => '12 bulan',
                    ),
                    425 => 
                    array (
                        'id_indikator' => 1733,
                        'id_kegiatan' => 812,
                        'indikator' => 'Terupdate masa berlaku sertifikat asesor kompetensi',
                        'baseline' => '47',
                        'target' => '74',
                    ),
                    426 => 
                    array (
                        'id_indikator' => 1734,
                        'id_kegiatan' => 813,
                        'indikator' => 'mahasiwa tersertifikasi',
                        'baseline' => '308',
                        'target' => '508',
                    ),
                    427 => 
                    array (
                        'id_indikator' => 1735,
                        'id_kegiatan' => 814,
                        'indikator' => 'Jumlah asesor kompetensi',
                        'baseline' => '74',
                        'target' => '94',
                    ),
                    428 => 
                    array (
                        'id_indikator' => 1736,
                        'id_kegiatan' => 815,
                        'indikator' => 'Asesor yang memiliki sertifikat kompetensi teknis',
                        'baseline' => '0',
                        'target' => '20',
                    ),
                    429 => 
                    array (
                        'id_indikator' => 1737,
                        'id_kegiatan' => 816,
                        'indikator' => 'LSP Polines memiliki website',
                        'baseline' => '0',
                        'target' => '1',
                    ),
                    430 => 
                    array (
                        'id_indikator' => 1739,
                        'id_kegiatan' => 829,
                        'indikator' => 'Perpanjangan dan penambahan MOU dengan industri',
                        'baseline' => '9 MOU',
                        'target' => '12 MOU',
                    ),
                    431 => 
                    array (
                        'id_indikator' => 1742,
                        'id_kegiatan' => 832,
                        'indikator' => 'Waku tunggu luusan',
                        'baseline' => '4 bulan ',
                        'target' => '3 bulan',
                    ),
                    432 => 
                    array (
                        'id_indikator' => 1743,
                        'id_kegiatan' => 832,
                        'indikator' => 'Jumlah mahasiswa perpanjangan',
                        'baseline' => '4 %',
                        'target' => '3.5 %',
                    ),
                    433 => 
                    array (
                        'id_indikator' => 1744,
                        'id_kegiatan' => 833,
                        'indikator' => 'Mahasiswa bersertifikat kompetensi',
                        'baseline' => '20',
                        'target' => '30',
                    ),
                    434 => 
                    array (
                        'id_indikator' => 1745,
                        'id_kegiatan' => 834,
                        'indikator' => 'Modul Lab struktur utk Prodi Ks',
                        'baseline' => '0',
                        'target' => '1',
                    ),
                    435 => 
                    array (
                        'id_indikator' => 1746,
                        'id_kegiatan' => 835,
                        'indikator' => 'Jumlah Kegiatan yng melibatkan alumni ',
                        'baseline' => '2',
                        'target' => '3',
                    ),
                    436 => 
                    array (
                        'id_indikator' => 1747,
                        'id_kegiatan' => 835,
                        'indikator' => 'Jumlah dosen yang mengikuti seminar',
                        'baseline' => '35',
                        'target' => '40',
                    ),
                    437 => 
                    array (
                        'id_indikator' => 1749,
                        'id_kegiatan' => 798,
                        'indikator' => 'mahasiswa bidikmisi angkatan 2018/2019 mengikuti pelatihan softskillang',
                        'baseline' => '160',
                        'target' => '160',
                    ),
                    438 => 
                    array (
                        'id_indikator' => 1750,
                        'id_kegiatan' => 798,
                        'indikator' => 'Meningkatnya prestasi mahasiswa mengikuti kompetisi nasional',
                        'baseline' => '160',
                        'target' => '160',
                    ),
                    439 => 
                    array (
                        'id_indikator' => 1751,
                        'id_kegiatan' => 750,
                        'indikator' => 'didaptkannya data BMN terkini, untuk mendukung penyusunan laporan keuangan dan Tata Kelola BMN',
                        'baseline' => '50%',
                        'target' => '70%',
                    ),
                    440 => 
                    array (
                        'id_indikator' => 1752,
                        'id_kegiatan' => 844,
                        'indikator' => 'Polines merupakan jembatan antara IKA HMJ/UKM dan perwakilan wilayah sehingga tercipta sinergi yang dapat mendukung kegiatan-kegiatan di dalam Polines',
                        'baseline' => '',
                        'target' => '',
                    ),
                    441 => 
                    array (
                        'id_indikator' => 1753,
                        'id_kegiatan' => 707,
                        'indikator' => 'Presentasi efesiensi perencanaan dan penganggaran kegiatan',
                        'baseline' => '',
                        'target' => 'Dokumen buku pedoman keuangan dan standar biaya  Polines thn 2020',
                    ),
                    442 => 
                    array (
                        'id_indikator' => 1754,
                        'id_kegiatan' => 821,
                        'indikator' => 'Terekrutnya tenaga-tenaga terampil yang telah diluluskan oleh Politeknik Negeri Semarang oleh perusahaan–perusahaan yang tengah membutuhkan mereka',
                        'baseline' => '1200',
                        'target' => '800',
                    ),
                    443 => 
                    array (
                        'id_indikator' => 1758,
                        'id_kegiatan' => 776,
                        'indikator' => 'Kategori lomba yang diikuti',
                        'baseline' => '0',
                        'target' => '2',
                    ),
                    444 => 
                    array (
                        'id_indikator' => 1759,
                        'id_kegiatan' => 817,
                        'indikator' => 'Persentasi lulusan tepat waktu',
                        'baseline' => '96 %',
                        'target' => '98%',
                    ),
                    445 => 
                    array (
                        'id_indikator' => 1765,
                        'id_kegiatan' => 822,
                        'indikator' => '    Sejumlah  mahasiswa baru yang beragama Islam telah mengikuti kegiatan dan mendapatkan sertifikat PESIMA',
                        'baseline' => '1550',
                        'target' => '1550',
                    ),
                    446 => 
                    array (
                        'id_indikator' => 1766,
                        'id_kegiatan' => 857,
                        'indikator' => '65 orang dosen wali tingkat I mengikuti kegiatan pembekalan ',
                        'baseline' => 'Tahun 2018 = 65 dosen',
                        'target' => 'Tahun 2019 = 65 dosen',
                    ),
                    447 => 
                    array (
                        'id_indikator' => 1767,
                        'id_kegiatan' => 858,
                        'indikator' => 'Pengadaaan Bahan Pustaka Buku dan Jurnal',
                        'baseline' => '',
                        'target' => '',
                    ),
                    448 => 
                    array (
                        'id_indikator' => 1769,
                        'id_kegiatan' => 860,
                        'indikator' => 'Dokumen peta jalan riset unggulan jurusan dan prodi',
                        'baseline' => '0',
                        'target' => '7',
                    ),
                    449 => 
                    array (
                        'id_indikator' => 1770,
                        'id_kegiatan' => 861,
                        'indikator' => '46 Dosen menguasai pembelajaran E-Learning dan meningkatnya mutu lembaga',
                        'baseline' => 'Tahun 2018 = 46 orang',
                        'target' => 'Tahun 2019 = 46 orang',
                    ),
                    450 => 
                    array (
                        'id_indikator' => 1771,
                        'id_kegiatan' => 766,
                        'indikator' => 'Draft HKI yang terdaftar',
                        'baseline' => '6',
                        'target' => '10',
                    ),
                    451 => 
                    array (
                        'id_indikator' => 1772,
                        'id_kegiatan' => 819,
                        'indikator' => 'Terjadi perubahan mind set mahasiswa khususnya dalam budaya belajar dan sikap di lingkungan kehidupan kampus',
                        'baseline' => '',
                        'target' => '',
                    ),
                    452 => 
                    array (
                        'id_indikator' => 1773,
                        'id_kegiatan' => 819,
                        'indikator' => 'Mahasiswa mampu mengetahui baik analisa SWOT atas dirinya dan mampu membangun konsep diri bagi pengembangan dirinya ke depan',
                        'baseline' => '',
                        'target' => '',
                    ),
                    453 => 
                    array (
                        'id_indikator' => 1774,
                        'id_kegiatan' => 819,
                        'indikator' => 'mampu mengenal potensi dirinya dengan baik',
                        'baseline' => '',
                        'target' => '',
                    ),
                    454 => 
                    array (
                        'id_indikator' => 1775,
                        'id_kegiatan' => 819,
                    'indikator' => 'Mehasiswa semenjak awal dapat merancang pencapaian target / tujuan diri (life mamping-blue print) dimasa yang akan datang',
                        'baseline' => '',
                        'target' => '',
                    ),
                    455 => 
                    array (
                        'id_indikator' => 1776,
                        'id_kegiatan' => 862,
                        'indikator' => '12 dosen menguasai AA/Pekerti dan meningkatnya mutu lembaga',
                        'baseline' => 'Tahun 2018 = 12 orang',
                        'target' => 'Tahun 2019 = 12 orang',
                    ),
                    456 => 
                    array (
                        'id_indikator' => 1777,
                        'id_kegiatan' => 851,
                    'indikator' => 'Peraturan Senat (tata tertib , Sidang Senat dll)',
                        'baseline' => '0',
                        'target' => '1',
                    ),
                    457 => 
                    array (
                        'id_indikator' => 1778,
                        'id_kegiatan' => 851,
                        'indikator' => 'Pedoman Pengembangan Kurikulum dan evaluasinya',
                        'baseline' => '0',
                        'target' => '1',
                    ),
                    458 => 
                    array (
                        'id_indikator' => 1779,
                        'id_kegiatan' => 851,
                        'indikator' => 'Pedoman Calon Anggota Dewan Pertimbangan dari unsur Senat Akademik dan Pedoman Penilaian Atas Kinerja Dewan Pertimbangan',
                        'baseline' => '0',
                        'target' => '1',
                    ),
                    459 => 
                    array (
                        'id_indikator' => 1780,
                        'id_kegiatan' => 851,
                        'indikator' => 'Pedoman/ Norma kerjasama Akademik',
                        'baseline' => '0',
                        'target' => '1',
                    ),
                    460 => 
                    array (
                        'id_indikator' => 1781,
                        'id_kegiatan' => 851,
                        'indikator' => '',
                        'baseline' => '',
                        'target' => '',
                    ),
                    461 => 
                    array (
                        'id_indikator' => 1782,
                        'id_kegiatan' => 864,
                        'indikator' => 'Pengadaan E-Jurnal',
                        'baseline' => '2 Paket',
                        'target' => '1 Paket',
                    ),
                    462 => 
                    array (
                        'id_indikator' => 1785,
                        'id_kegiatan' => 868,
                        'indikator' => 'Jumlah nara sumber',
                        'baseline' => '1',
                        'target' => '1',
                    ),
                    463 => 
                    array (
                        'id_indikator' => 1789,
                        'id_kegiatan' => 869,
                        'indikator' => 'Dokumen hasil pemeriksaan bidang Keuangan',
                        'baseline' => '- ',
                        'target' => '1 Dokumen',
                    ),
                    464 => 
                    array (
                        'id_indikator' => 1790,
                        'id_kegiatan' => 869,
                    'indikator' => 'IKK 4-1, (IKU 15) Presentase efisiensi perencanaan dan penganggaran',
                        'baseline' => '87% per tahun',
                        'target' => '88% per tahun',
                    ),
                    465 => 
                    array (
                        'id_indikator' => 1792,
                        'id_kegiatan' => 772,
                    'indikator' => 'Pameran ISD ( Indonesia Science Day)',
                        'baseline' => '3 Produk',
                        'target' => '5 produk',
                    ),
                    466 => 
                    array (
                        'id_indikator' => 1793,
                        'id_kegiatan' => 874,
                        'indikator' => 'Indeks Kepuasan Layanan',
                        'baseline' => 'target 3,33',
                        'target' => '3,35',
                    ),
                    467 => 
                    array (
                        'id_indikator' => 1795,
                        'id_kegiatan' => 877,
                        'indikator' => 'Dokumen Audit non akademik BMN',
                        'baseline' => '1 Dokumen',
                        'target' => '1 Dokumen',
                    ),
                    468 => 
                    array (
                        'id_indikator' => 1799,
                        'id_kegiatan' => 881,
                        'indikator' => 'Dokumen usulan prodi baru terupload di silemkerma',
                        'baseline' => '0',
                        'target' => '2',
                    ),
                    469 => 
                    array (
                        'id_indikator' => 1800,
                        'id_kegiatan' => 882,
                        'indikator' => 'Dokumen usulan prodi baru terupload di silemkerma',
                        'baseline' => '0',
                        'target' => '1',
                    ),
                    470 => 
                    array (
                        'id_indikator' => 1803,
                        'id_kegiatan' => 885,
                        'indikator' => 'dokumen evaluasi diri prodi Elektronika tahun 2019',
                        'baseline' => '1',
                        'target' => '1',
                    ),
                    471 => 
                    array (
                        'id_indikator' => 1804,
                        'id_kegiatan' => 897,
                        'indikator' => 'dokumen evaluasi diri prodi Informatika tahun 2019',
                        'baseline' => '1',
                        'target' => '1',
                    ),
                    472 => 
                    array (
                        'id_indikator' => 1805,
                        'id_kegiatan' => 900,
                        'indikator' => 'Jumlah karya yang dipamerkan ',
                        'baseline' => '50',
                        'target' => '60',
                    ),
                    473 => 
                    array (
                        'id_indikator' => 1806,
                        'id_kegiatan' => 901,
                        'indikator' => 'dokumen evaluasi diri prodi Listrik tahun 2019',
                        'baseline' => '1',
                        'target' => '1',
                    ),
                    474 => 
                    array (
                        'id_indikator' => 1807,
                        'id_kegiatan' => 880,
                        'indikator' => 'RPKPS',
                        'baseline' => '',
                        'target' => '2 semester',
                    ),
                    475 => 
                    array (
                        'id_indikator' => 1808,
                        'id_kegiatan' => 748,
                        'indikator' => 'SOP yang telah sesuai dengan Format Standar Layanan Publik Program Revormasi Birokrasi',
                        'baseline' => '0',
                        'target' => '8',
                    ),
                    476 => 
                    array (
                        'id_indikator' => 1813,
                        'id_kegiatan' => 849,
                        'indikator' => '313 dosen mengisi BKD tahun 2019',
                        'baseline' => 'Tahun 2018 = 307',
                        'target' => 'tahun 2019 = 307 + 6 = 313',
                    ),
                    477 => 
                    array (
                        'id_indikator' => 1815,
                        'id_kegiatan' => 888,
                        'indikator' => 'Jumlah mahasiswa langsung bekerja sebelum lulus',
                        'baseline' => '20%',
                        'target' => '30%',
                    ),
                    478 => 
                    array (
                        'id_indikator' => 1817,
                        'id_kegiatan' => 909,
                        'indikator' => 'Nilai Akreditasi prodi T Telekomunikasi STr  ',
                        'baseline' => 'B',
                        'target' => 'A',
                    ),
                    479 => 
                    array (
                        'id_indikator' => 1818,
                        'id_kegiatan' => 909,
                        'indikator' => 'Adanya Evaluasi Kurikulum',
                        'baseline' => '0',
                        'target' => '1',
                    ),
                    480 => 
                    array (
                        'id_indikator' => 1819,
                        'id_kegiatan' => 908,
                        'indikator' => 'Tersedia 1 bendel dokumen instrumen penilaian kinerja prodi',
                        'baseline' => 'Tahun 2018 = 0 ',
                        'target' => 'Tahun 2019 tersedia 1 bendel dokumen instrumen penilaian kinerja prodi',
                    ),
                    481 => 
                    array (
                        'id_indikator' => 1821,
                        'id_kegiatan' => 735,
                        'indikator' => 'Jumlah kajian ilmiah',
                        'baseline' => '0',
                        'target' => '6',
                    ),
                    482 => 
                    array (
                        'id_indikator' => 1822,
                        'id_kegiatan' => 911,
                        'indikator' => 'Jumlah dosen mengikuti seminar/pelatihan/sertifikasi',
                        'baseline' => '20',
                        'target' => '20',
                    ),
                    483 => 
                    array (
                        'id_indikator' => 1823,
                        'id_kegiatan' => 911,
                        'indikator' => 'Evaluasi Kurikulum',
                        'baseline' => '01',
                        'target' => '1',
                    ),
                    484 => 
                    array (
                        'id_indikator' => 1824,
                        'id_kegiatan' => 911,
                        'indikator' => 'Evaluasi Kurikulum',
                        'baseline' => '01',
                        'target' => '01',
                    ),
                    485 => 
                    array (
                        'id_indikator' => 1826,
                        'id_kegiatan' => 913,
                        'indikator' => 'SDM dalam seminar/pelatihan/sertifikasi',
                        'baseline' => '20',
                        'target' => '30',
                    ),
                    486 => 
                    array (
                        'id_indikator' => 1827,
                        'id_kegiatan' => 913,
                        'indikator' => 'Dokumen Evaluasi kurikulum',
                        'baseline' => '0',
                        'target' => '1',
                    ),
                    487 => 
                    array (
                        'id_indikator' => 1829,
                        'id_kegiatan' => 912,
                    'indikator' => 'Pedoman Pengembangan Rencana Pembelajaran Semester (RPS)',
                    'baseline' => '1 (Edisi RPKPS - 2012)',
                    'target' => '1 (Edisi RPS Berbasis KKNI - 2019)',
                    ),
                    488 => 
                    array (
                        'id_indikator' => 1830,
                        'id_kegiatan' => 912,
                    'indikator' => 'Rencana Pembelajaran Semester (RPS)',
                        'baseline' => '',
                    'target' => '46 RPS (2 RPS per Prodi)',
                    ),
                    489 => 
                    array (
                        'id_indikator' => 1831,
                        'id_kegiatan' => 915,
                        'indikator' => 'Jumlah RPS mata kuliah yang sesuai dengan standart KKNI dan SN-Dikti.',
                        'baseline' => '0',
                        'target' => '42',
                    ),
                    490 => 
                    array (
                        'id_indikator' => 1832,
                        'id_kegiatan' => 916,
                        'indikator' => 'Jumlah lab terlayani',
                        'baseline' => '16',
                        'target' => '16',
                    ),
                    491 => 
                    array (
                        'id_indikator' => 1833,
                        'id_kegiatan' => 917,
                        'indikator' => 'Rapat Kerja Jurusan',
                        'baseline' => '0',
                        'target' => '1',
                    ),
                    492 => 
                    array (
                        'id_indikator' => 1834,
                        'id_kegiatan' => 918,
                        'indikator' => 'Laboratorium yang diremajakan',
                        'baseline' => '16',
                        'target' => '16',
                    ),
                    493 => 
                    array (
                        'id_indikator' => 1839,
                        'id_kegiatan' => 922,
                        'indikator' => 'Terwujudnya laporan kinerja Jurusan, Bagian, Pusat, Unit dan Satuan',
                        'baseline' => 'Belum ada',
                    'target' => '22 (satu) dokumen laporan kinerja Jurusan,bagian,unit dan pusat tahun 2019.',
                    ),
                    494 => 
                    array (
                        'id_indikator' => 1842,
                        'id_kegiatan' => 840,
                        'indikator' => 'Jumlah undangan yang dapat dihadiri Tim manajerial',
                        'baseline' => '4',
                        'target' => '6',
                    ),
                    495 => 
                    array (
                        'id_indikator' => 1845,
                        'id_kegiatan' => 919,
                        'indikator' => 'Dokumen KBK',
                        'baseline' => '0',
                        'target' => '1',
                    ),
                    496 => 
                    array (
                        'id_indikator' => 1848,
                        'id_kegiatan' => 923,
                        'indikator' => 'Indek Kepuasan Stake holders',
                        'baseline' => '3,24',
                        'target' => '3,25',
                    ),
                    497 => 
                    array (
                        'id_indikator' => 1850,
                        'id_kegiatan' => 925,
                        'indikator' => 'Prosentase IK lama terupdate',
                        'baseline' => '0',
                        'target' => '100',
                    ),
                    498 => 
                    array (
                        'id_indikator' => 1851,
                        'id_kegiatan' => 925,
                        'indikator' => 'Jumlah IK baru',
                        'baseline' => '0',
                        'target' => '50',
                    ),
                    499 => 
                    array (
                        'id_indikator' => 1852,
                        'id_kegiatan' => 926,
                        'indikator' => 'Tersedianya bahan praktek',
                        'baseline' => '0',
                        'target' => '1',
                    ),
                ));
        \DB::table('indikator')->insert(array (
            0 => 
            array (
                'id_indikator' => 1853,
                'id_kegiatan' => 927,
                'indikator' => 'Jumlah Ka Prodi terlatih instrumen baru',
                'baseline' => '0',
                'target' => '24',
            ),
            1 => 
            array (
                'id_indikator' => 1854,
                'id_kegiatan' => 928,
                'indikator' => 'Jumlah Pimpinan polines mengikuti pemahaman SPMI',
                'baseline' => '0',
                'target' => '60',
            ),
            2 => 
            array (
                'id_indikator' => 1855,
                'id_kegiatan' => 928,
                'indikator' => 'Pengiriman SDM',
                'baseline' => '20',
                'target' => '30',
            ),
            3 => 
            array (
                'id_indikator' => 1856,
                'id_kegiatan' => 929,
                'indikator' => 'Pengiriman SDM',
                'baseline' => '15',
                'target' => '20',
            ),
            4 => 
            array (
                'id_indikator' => 1859,
                'id_kegiatan' => 930,
                'indikator' => 'Pengiriman dosen',
                'baseline' => '15',
                'target' => '20',
            ),
            5 => 
            array (
                'id_indikator' => 1860,
                'id_kegiatan' => 890,
                'indikator' => 'Mengikuti lomba tingkat nasional',
                'baseline' => '5',
                'target' => '10',
            ),
            6 => 
            array (
                'id_indikator' => 1862,
                'id_kegiatan' => 932,
                'indikator' => 'Indeks layanan',
                'baseline' => '3',
                'target' => '4',
            ),
            7 => 
            array (
                'id_indikator' => 1863,
                'id_kegiatan' => 889,
                'indikator' => 'Dokumen evaluasi PBM',
                'baseline' => '2',
                'target' => '4',
            ),
            8 => 
            array (
                'id_indikator' => 1866,
                'id_kegiatan' => 935,
                'indikator' => 'Pengadaan alat',
                'baseline' => '0',
                'target' => '1',
            ),
            9 => 
            array (
                'id_indikator' => 1871,
                'id_kegiatan' => 895,
                'indikator' => 'Dokumen untuk Pendirian Program MST',
                'baseline' => '0',
                'target' => '1',
            ),
            10 => 
            array (
                'id_indikator' => 1878,
                'id_kegiatan' => 765,
                'indikator' => 'Jumlah Jurnal terindex DOAJ',
                'baseline' => '3',
                'target' => '5',
            ),
            11 => 
            array (
                'id_indikator' => 1879,
                'id_kegiatan' => 765,
                'indikator' => 'Peningkatan Jumlah Dosen yang memiliki AKUN SINTA',
                'baseline' => '229',
                'target' => '321',
            ),
            12 => 
            array (
                'id_indikator' => 1880,
                'id_kegiatan' => 765,
                'indikator' => 'Peningkatan level akreditasi jurnal di SINTA',
                'baseline' => '6',
                'target' => '4',
            ),
            13 => 
            array (
                'id_indikator' => 1886,
                'id_kegiatan' => 757,
                'indikator' => 'Jumlah judul penelitian dan pengabdian yang sudah dimonev',
                'baseline' => '280',
                'target' => '283',
            ),
            14 => 
            array (
                'id_indikator' => 1888,
                'id_kegiatan' => 761,
                'indikator' => 'Jumlah judul penelitian yang terpublikasi dalam buku Profil hasil-hasil penelitian dan pengabdian kepada masyarakat',
                'baseline' => '22',
                'target' => '25',
            ),
            15 => 
            array (
                'id_indikator' => 1889,
                'id_kegiatan' => 761,
                'indikator' => 'Publikasi hasil-hasil penelitian dalam bentuk movie guide',
                'baseline' => '0',
                'target' => '1',
            ),
            16 => 
            array (
                'id_indikator' => 1890,
                'id_kegiatan' => 756,
                'indikator' => 'Jumlah judul penelitian dan pengabdian yang sudah mengikuti diseminasi',
                'baseline' => '280',
                'target' => '283',
            ),
            17 => 
            array (
                'id_indikator' => 1891,
                'id_kegiatan' => 756,
                'indikator' => '',
                'baseline' => '',
                'target' => '',
            ),
            18 => 
            array (
                'id_indikator' => 1892,
                'id_kegiatan' => 763,
                'indikator' => 'Jumlah proposal penelitian  dan pengabdian',
                'baseline' => '293',
                'target' => '300',
            ),
            19 => 
            array (
                'id_indikator' => 1895,
                'id_kegiatan' => 842,
                'indikator' => 'tersedianya BHP dan ATK praktik di jurusan',
                'baseline' => '1 paket kebutuhan BHP dan ATK praktik',
                'target' => '1 paket kebutuhan BHP dan ATK praktik',
            ),
            20 => 
            array (
                'id_indikator' => 1901,
                'id_kegiatan' => 743,
                'indikator' => 'Dokumen Usulan Program kerja tahun 2020-2021',
                'baseline' => '0',
                'target' => '1 dokumen',
            ),
            21 => 
            array (
                'id_indikator' => 1902,
                'id_kegiatan' => 836,
                'indikator' => 'Dokumen  alumni dan kompetensi lulusan yang dibutuhkan industri',
                'baseline' => '0',
                'target' => '1',
            ),
            22 => 
            array (
                'id_indikator' => 1903,
                'id_kegiatan' => 841,
                'indikator' => 'Jumlah dosen peserta Seminar ',
                'baseline' => '0',
                'target' => '80',
            ),
            23 => 
            array (
                'id_indikator' => 1904,
                'id_kegiatan' => 841,
                'indikator' => 'Jumlah Jurnal Jurusan yang terbit',
                'baseline' => '0',
                'target' => '2 ',
            ),
            24 => 
            array (
                'id_indikator' => 1905,
                'id_kegiatan' => 907,
                'indikator' => 'Indek Kepuasan kepuasan layanan akademik',
                'baseline' => '3,24',
                'target' => '3,26',
            ),
            25 => 
            array (
                'id_indikator' => 1908,
                'id_kegiatan' => 906,
                'indikator' => 'Laporan Evaluasi diri terupdate 2019',
                'baseline' => '1',
                'target' => '1',
            ),
            26 => 
            array (
                'id_indikator' => 1910,
                'id_kegiatan' => 941,
                'indikator' => 'Jumlah partisipasi dan prestasi mahasiswa dalam kegiatan ilmiah nasional dan internasional',
                'baseline' => '22 kegiatan delegasi',
                'target' => '25 kegiatan delegasi',
            ),
            27 => 
            array (
                'id_indikator' => 1912,
                'id_kegiatan' => 824,
                'indikator' => 'Penyelenggaraan workshop penyusunan Program Kerja IKA Polines merupan jembatan antara Polines dan IKA HMJ/UKM dan perwakilan wilayah sehingga tercipta sinergi yang dapat mendukung kegiatan-kegiatan di',
                'baseline' => '',
                'target' => '',
            ),
            28 => 
            array (
                'id_indikator' => 1913,
                'id_kegiatan' => 825,
                'indikator' => 'Penentuan jumlah tim yang lolos dan didanai ',
                'baseline' => '35',
                'target' => '10',
            ),
            29 => 
            array (
                'id_indikator' => 1914,
                'id_kegiatan' => 762,
                'indikator' => 'Jumlah Publikasi Internasional',
                'baseline' => '',
                'target' => '',
            ),
            30 => 
            array (
                'id_indikator' => 1915,
                'id_kegiatan' => 863,
                'indikator' => 'Jumlah judul Penelitian Terapan',
                'baseline' => '80',
                'target' => '82',
            ),
            31 => 
            array (
                'id_indikator' => 1916,
                'id_kegiatan' => 871,
                'indikator' => 'Jumlah Judul Pengabdian bernilai manfaat ke masyarakat',
                'baseline' => '60',
                'target' => '62',
            ),
            32 => 
            array (
                'id_indikator' => 1917,
                'id_kegiatan' => 826,
                'indikator' => 'Jumlah Mahasiswa peserta sosialisasi',
                'baseline' => '150',
                'target' => '140',
            ),
            33 => 
            array (
                'id_indikator' => 1918,
                'id_kegiatan' => 826,
                'indikator' => '',
                'baseline' => '',
                'target' => '',
            ),
            34 => 
            array (
                'id_indikator' => 1919,
                'id_kegiatan' => 933,
            'indikator' => '6 (enam) instrument indikator kunci borang akreditasi perpustakaan Perguruan TInggi',
            'baseline' => '3 (tiga) instrument indikator kunci',
            'target' => '6 (enam) instrument kunci',
            ),
            35 => 
            array (
                'id_indikator' => 1920,
                'id_kegiatan' => 827,
                'indikator' => 'Seluruh tim yang didanai telah berhasil mengimplementasikan Business Plannya ',
                'baseline' => '',
                'target' => '',
            ),
            36 => 
            array (
                'id_indikator' => 1921,
                'id_kegiatan' => 827,
                'indikator' => 'Pelaksanaan expo di Polines, Visitasi, dan evaluasi presentasi mahasiswa',
                'baseline' => '',
                'target' => '',
            ),
            37 => 
            array (
                'id_indikator' => 1923,
                'id_kegiatan' => 896,
                'indikator' => 'Jumlah artikel yang siap publikasi',
                'baseline' => '16',
                'target' => '12',
            ),
            38 => 
            array (
                'id_indikator' => 1924,
                'id_kegiatan' => 893,
                'indikator' => 'Penyusunan Bahan Pembelajaran e-learning',
                'baseline' => '10',
                'target' => '30',
            ),
            39 => 
            array (
                'id_indikator' => 1925,
                'id_kegiatan' => 892,
                'indikator' => ' 	Jumlah dosen yang mengikuti seminar',
                'baseline' => '12',
                'target' => '15',
            ),
            40 => 
            array (
                'id_indikator' => 1926,
                'id_kegiatan' => 891,
                'indikator' => ' 	Jumlah lulusan yang tersertifikasi',
                'baseline' => '235',
                'target' => '160',
            ),
            41 => 
            array (
                'id_indikator' => 1927,
                'id_kegiatan' => 888,
                'indikator' => 'Jumlah MoU dengan Perusahan/Industri',
                'baseline' => '12',
                'target' => '3',
            ),
            42 => 
            array (
                'id_indikator' => 1930,
                'id_kegiatan' => 887,
                'indikator' => 'Jumlah mahasiswa kelas permata dalam kredit learning',
                'baseline' => '40',
                'target' => '20',
            ),
            43 => 
            array (
                'id_indikator' => 1931,
                'id_kegiatan' => 886,
                'indikator' => ' 	Jumlah lulusan peserta kredit transfer',
                'baseline' => '8',
                'target' => '2',
            ),
            44 => 
            array (
                'id_indikator' => 1932,
                'id_kegiatan' => 872,
                'indikator' => '1.	Tersusunnya buku pedoman kompetisi inovasi teknologi bidang teknik dan tata niaga 2.	Dihasilkannya karya inovatif teknologi mahasiswa yang dapat diterapkan langsung untuk kepentingan dan kesejahter',
                'baseline' => '',
                'target' => '',
            ),
            45 => 
            array (
                'id_indikator' => 1933,
                'id_kegiatan' => 873,
                'indikator' => 'sejumlah mahasiswa mendapat kejuaraan tingakat nasional',
                'baseline' => '',
                'target' => '',
            ),
            46 => 
            array (
                'id_indikator' => 1934,
                'id_kegiatan' => 786,
                'indikator' => 'Dokumen inventarisasi permasalahan di BUK',
                'baseline' => '1 dokumen',
                'target' => '1 dokumen',
            ),
            47 => 
            array (
                'id_indikator' => 1935,
                'id_kegiatan' => 786,
                'indikator' => 'Rencana kegiatan BUK tahun 2020',
                'baseline' => '1 dokumen',
                'target' => '1 dokumen',
            ),
            48 => 
            array (
                'id_indikator' => 1936,
                'id_kegiatan' => 734,
                'indikator' => 'Tersusun dokumen evaluasi diri Prodi Komputerisasi Akuntansi',
            'baseline' => '1 dokumen evaluasi diri lama (tahun 2015)',
                'target' => '1 dokumen evaluasi diri tahun 2019',
            ),
            49 => 
            array (
                'id_indikator' => 1938,
                'id_kegiatan' => 820,
                'indikator' => 'jumlah mahasiswa terlatih MENWA ',
                'baseline' => '25',
                'target' => '25',
            ),
            50 => 
            array (
                'id_indikator' => 1944,
                'id_kegiatan' => 704,
                'indikator' => 'Tereliasasinya MoU dengan industri',
                'baseline' => '2 MoU',
                'target' => '3 MoU',
            ),
            51 => 
            array (
                'id_indikator' => 1951,
                'id_kegiatan' => 938,
                'indikator' => 'Tersedianya jobsheet dalam bahasa Inggris',
                'baseline' => '0',
                'target' => '3 jobsheet bahasa Inggris ',
            ),
            52 => 
            array (
                'id_indikator' => 1952,
                'id_kegiatan' => 942,
                'indikator' => 'Terwujudnya Renstra Polines periode 2020 - 2014',
                'baseline' => '1 dokumen',
                'target' => '2 dokumen',
            ),
            53 => 
            array (
                'id_indikator' => 1953,
                'id_kegiatan' => 942,
                'indikator' => ' Terwujudnya Renstra Jur/bag/nit/pusat/satuan',
                'baseline' => ' 17 dokumen',
                'target' => '18 dokumen',
            ),
            54 => 
            array (
                'id_indikator' => 1957,
                'id_kegiatan' => 698,
                'indikator' => 'Pelaporan PDDIKTI semester gasal 2017/2018 terunggah 90%',
                'baseline' => '100%',
                'target' => '90%',
            ),
            55 => 
            array (
                'id_indikator' => 1958,
                'id_kegiatan' => 698,
                'indikator' => 'Pelaporan PDDIKTI semester genap 2017/2018 terunggah 90%',
                'baseline' => '100%',
                'target' => '90%',
            ),
            56 => 
            array (
                'id_indikator' => 1959,
                'id_kegiatan' => 699,
            'indikator' => 'Jumlah pengguna captive portal (pegawai dan mahasiswa) menjadi 100%',
                'baseline' => '0%',
                'target' => '100%',
            ),
            57 => 
            array (
                'id_indikator' => 1960,
                'id_kegiatan' => 699,
                'indikator' => 'Rerata kecepatan akses pengguna ke jaringan Internet menjadi 512 Kbps',
                'baseline' => '400 Kbps',
                'target' => '512 Kbps',
            ),
            58 => 
            array (
                'id_indikator' => 1961,
                'id_kegiatan' => 850,
                'indikator' => 'Peringkat webometrics nasional kategori Politeknik menjadi peringkat 10',
                'baseline' => '13',
                'target' => '10',
            ),
            59 => 
            array (
                'id_indikator' => 1962,
                'id_kegiatan' => 850,
                'indikator' => 'Jumlah artikel di website Polines menjadi 300 artikel',
                'baseline' => '272',
                'target' => '300',
            ),
            60 => 
            array (
                'id_indikator' => 1963,
                'id_kegiatan' => 852,
                'indikator' => 'Jumlah modul di SIRENA menjadi 18 modul',
                'baseline' => '16 modul',
                'target' => '18 modul',
            ),
            61 => 
            array (
                'id_indikator' => 1966,
                'id_kegiatan' => 934,
                'indikator' => 'Jumlah sistem menjadi 1 sistem',
                'baseline' => '0',
                'target' => '1',
            ),
            62 => 
            array (
                'id_indikator' => 1968,
                'id_kegiatan' => 939,
                'indikator' => 'Jumlah modul di SIMPEG menjadi 3 modul',
                'baseline' => '2 modul',
                'target' => '3 modul',
            ),
            63 => 
            array (
                'id_indikator' => 1973,
                'id_kegiatan' => 944,
                'indikator' => 'Dokumen PO Revisi',
                'baseline' => '4 dokumen',
                'target' => '5 dokumen',
            ),
            64 => 
            array (
                'id_indikator' => 1974,
                'id_kegiatan' => 944,
                'indikator' => 'Dokumen DIPA Revisi',
                'baseline' => '6 dokumen',
                'target' => '6 dokumen',
            ),
            65 => 
            array (
                'id_indikator' => 1975,
                'id_kegiatan' => 738,
                'indikator' => 'Peningkatan pengetahuan dan pemahaman K3 laboratorium',
                'baseline' => '0',
                'target' => '68 orang',
            ),
            66 => 
            array (
                'id_indikator' => 1977,
                'id_kegiatan' => 937,
                'indikator' => 'Jumlah dokumen yang diperbarui menjadi 1 dokumen',
                'baseline' => '0 dokumen',
                'target' => '1 dokumen',
            ),
            67 => 
            array (
                'id_indikator' => 1978,
                'id_kegiatan' => 731,
            'indikator' => 'Persentase dosen dengan sertifikat kompetensi (TOEFL)',
                'baseline' => '0',
                'target' => '5%',
            ),
            68 => 
            array (
                'id_indikator' => 1979,
                'id_kegiatan' => 731,
                'indikator' => 'Persentase kehadiran dosen dalam pelatihan dan uji kompetensi.',
                'baseline' => '0',
                'target' => '100%',
            ),
            69 => 
            array (
                'id_indikator' => 1980,
                'id_kegiatan' => 817,
                'indikator' => 'Mahasiswa peserta LDK',
                'baseline' => '1548',
                'target' => '1548',
            ),
            70 => 
            array (
                'id_indikator' => 1981,
                'id_kegiatan' => 940,
                'indikator' => 'Jumlah modul yang disempurnakan sejumlah 2 modul',
                'baseline' => '0 modul',
                'target' => '2 modul',
            ),
            71 => 
            array (
                'id_indikator' => 1982,
                'id_kegiatan' => 936,
                'indikator' => 'Jumlah sistem yang dibangun kembali menjadi 1 sistem',
                'baseline' => '0 sistem',
                'target' => '1 sistem',
            ),
            72 => 
            array (
                'id_indikator' => 1983,
                'id_kegiatan' => 769,
                'indikator' => 'Mahasiswa baru siap menjalani proses pembelajaran',
                'baseline' => '1540',
                'target' => '',
            ),
            73 => 
            array (
                'id_indikator' => 1984,
                'id_kegiatan' => 769,
                'indikator' => '',
                'baseline' => '',
                'target' => '',
            ),
            74 => 
            array (
                'id_indikator' => 1985,
                'id_kegiatan' => 865,
                'indikator' => 'jumlah mahasiswa yang mengikuti kuliah umum',
                'baseline' => '150',
                'target' => '175',
            ),
            75 => 
            array (
                'id_indikator' => 1988,
                'id_kegiatan' => 870,
                'indikator' => 'jumlah dosen yang mengikuti seminar',
                'baseline' => '80',
                'target' => '80',
            ),
            76 => 
            array (
                'id_indikator' => 1989,
                'id_kegiatan' => 875,
                'indikator' => 'jumlah dosen yang mengikuti seminar',
                'baseline' => '80',
                'target' => '80',
            ),
            77 => 
            array (
                'id_indikator' => 1990,
                'id_kegiatan' => 879,
                'indikator' => 'Jumlah Dosen yang mengikuti Seminar',
                'baseline' => '80',
                'target' => '80',
            ),
            78 => 
            array (
                'id_indikator' => 1991,
                'id_kegiatan' => 878,
                'indikator' => 'Jumlah Dosen yang mengikuti Seminar',
                'baseline' => '80',
                'target' => '80',
            ),
            79 => 
            array (
                'id_indikator' => 1993,
                'id_kegiatan' => 729,
                'indikator' => 'Ada sejumlah 50 mahasiswa berprestasi secara Nasional maupun Internasional',
                'baseline' => '25',
                'target' => '25',
            ),
            80 => 
            array (
                'id_indikator' => 1994,
                'id_kegiatan' => 729,
                'indikator' => 'Prestasi mahasiswa yang mengikuti Kompetisi tingkat Nasional',
                'baseline' => '10',
                'target' => '10',
            ),
            81 => 
            array (
                'id_indikator' => 1995,
                'id_kegiatan' => 729,
                'indikator' => '',
                'baseline' => '',
                'target' => '',
            ),
            82 => 
            array (
                'id_indikator' => 1996,
                'id_kegiatan' => 774,
                'indikator' => 'Dokumen susunan KBK Jurusan',
                'baseline' => '0 dokumen',
                'target' => '1 dokumen',
            ),
            83 => 
            array (
                'id_indikator' => 1997,
                'id_kegiatan' => 774,
                'indikator' => '',
                'baseline' => '',
                'target' => '',
            ),
            84 => 
            array (
                'id_indikator' => 1998,
                'id_kegiatan' => 921,
                'indikator' => 'Tempat kerjasama industri',
                'baseline' => '12',
                'target' => '14',
            ),
            85 => 
            array (
                'id_indikator' => 1999,
                'id_kegiatan' => 920,
                'indikator' => 'Dokumen  yg berisi modul e leraning',
                'baseline' => '0 dokumen',
                'target' => '1 dokumen',
            ),
            86 => 
            array (
                'id_indikator' => 2000,
                'id_kegiatan' => 703,
                'indikator' => 'Jumlah Temu Alumni di Perusahaan/ Instansi Pemerintah',
                'baseline' => '11 pertemuan dengan alumni',
                'target' => '7 pertemuan dengan alumni',
            ),
            87 => 
            array (
                'id_indikator' => 2002,
                'id_kegiatan' => 715,
                'indikator' => 'Tersedianya kurikulum dalam bahasa Inggis',
                'baseline' => '0',
                'target' => '1 Dokumen',
            ),
            88 => 
            array (
                'id_indikator' => 2003,
                'id_kegiatan' => 715,
                'indikator' => 'Tersedianya silabi dalam bahasa Inggris',
                'baseline' => '0',
                'target' => 'Silabi dalam bahasa Inggris kls 1&2',
            ),
            89 => 
            array (
                'id_indikator' => 2004,
                'id_kegiatan' => 788,
                'indikator' => 'pedoman layanan keprotokolan',
                'baseline' => '0',
                'target' => '1 dokumen',
            ),
            90 => 
            array (
                'id_indikator' => 2005,
                'id_kegiatan' => 759,
                'indikator' => 'Jumlah formasi untuk tendik dan kependidikan 20 pegawai',
                'baseline' => '3 formasi CPNS dosen tahun 2017',
                'target' => '20 formasi CPNS ',
            ),
            91 => 
            array (
                'id_indikator' => 2006,
                'id_kegiatan' => 943,
                'indikator' => 'Jumlah Tenaga kependidikan yang mengikuti Diklat',
                'baseline' => '150 pegawai',
                'target' => '193 pegawai',
            ),
            92 => 
            array (
                'id_indikator' => 2007,
                'id_kegiatan' => 804,
                'indikator' => 'Jumlah Slogan yang terpasang di Polines',
                'baseline' => '0 spanduk',
                'target' => '50 spanduk',
            ),
            93 => 
            array (
                'id_indikator' => 2010,
                'id_kegiatan' => 811,
                'indikator' => '1 buah desain Website KUI berbahasa Inggris yang sudah diupdate/diperbaiki',
                'baseline' => '1',
                'target' => '1',
            ),
            94 => 
            array (
                'id_indikator' => 2012,
                'id_kegiatan' => 811,
                'indikator' => 'Buku Profil Polines dan Prodi',
                'baseline' => '5',
                'target' => '100',
            ),
            95 => 
            array (
                'id_indikator' => 2013,
                'id_kegiatan' => 811,
                'indikator' => 'Brosur Prodi Berbahasa Inggris',
                'baseline' => '30',
                'target' => '100',
            ),
            96 => 
            array (
                'id_indikator' => 2015,
                'id_kegiatan' => 811,
                'indikator' => 'Souvenir Unit Urusan Internasional',
                'baseline' => '0',
                'target' => '1000',
            ),
            97 => 
            array (
                'id_indikator' => 2017,
                'id_kegiatan' => 809,
                'indikator' => 'Jumlah negara peserta/asal negara peserta ',
                'baseline' => '4',
                'target' => '5',
            ),
            98 => 
            array (
                'id_indikator' => 2018,
                'id_kegiatan' => 809,
                'indikator' => 'Jumlah kerjasama internasional',
                'baseline' => '8',
                'target' => '10',
            ),
            99 => 
            array (
                'id_indikator' => 2023,
                'id_kegiatan' => 883,
                'indikator' => 'Seminar Internasional ',
                'baseline' => '0',
                'target' => '1',
            ),
            100 => 
            array (
                'id_indikator' => 2025,
                'id_kegiatan' => 790,
                'indikator' => 'Tercapainya percepatan layanan di Bidang akademik dan Kemahasiswaan',
                'baseline' => '2 hari',
                'target' => '1 hari',
            ),
            101 => 
            array (
                'id_indikator' => 2027,
                'id_kegiatan' => 904,
                'indikator' => 'Kegiatan benchmaking ke universitas mitra',
                'baseline' => '3',
                'target' => '4',
            ),
            102 => 
            array (
                'id_indikator' => 2028,
                'id_kegiatan' => 904,
                'indikator' => 'Kegiatan yang dilakukan bersama / sharing kegiatan dengan universitas mitra',
                'baseline' => '2',
                'target' => '3',
            ),
            103 => 
            array (
                'id_indikator' => 2029,
                'id_kegiatan' => 883,
                'indikator' => 'Kurikulum internasional dari Prodi untuk kelas internasional dengan skema credit transfer dan double degree',
                'baseline' => '2',
                'target' => '3',
            ),
            104 => 
            array (
                'id_indikator' => 2030,
                'id_kegiatan' => 855,
                'indikator' => 'Tersedia Buku ber-ISBN',
                'baseline' => 'Tahun 2018 = 10 Buku',
                'target' => 'Tahun 2019 = 10 Buku',
            ),
            105 => 
            array (
                'id_indikator' => 2031,
                'id_kegiatan' => 828,
                'indikator' => 'Dokumen fokus jurusan',
                'baseline' => 'Dokumen raker 2018',
                'target' => 'Dokumen rapat kerja 2019',
            ),
            106 => 
            array (
                'id_indikator' => 2034,
                'id_kegiatan' => 830,
                'indikator' => 'Penyelenggaraan kelas kerjasama, dari hasil tindak lanjut bidang UHI dengan PT Mekar Armada Jaya',
                'baseline' => '0',
                'target' => '1 kelas kejasama',
            ),
            107 => 
            array (
                'id_indikator' => 2035,
                'id_kegiatan' => 831,
            'indikator' => 'Pendirian TUK Lab. Kontrol Fluida (Pneumatik)',
                'baseline' => 'Sarana Laboratorium Kontrol Fluida tahun 2018',
                'target' => 'Sarana Laboraturium Kontrol Fluida standart TUK',
            ),
            108 => 
            array (
                'id_indikator' => 2036,
                'id_kegiatan' => 847,
            'indikator' => 'Pendirian TUK Lab. Perancangan (Solidwork)',
                'baseline' => 'Sarana Laboratorium Perancangan tahun 2018',
                'target' => 'Sarana Laboraturium perancangan standart TUK',
            ),
            109 => 
            array (
                'id_indikator' => 2038,
                'id_kegiatan' => 854,
                'indikator' => 'Penambahan jumlah mata kuliah yang mengimplementasikan sistem E-Learning',
                'baseline' => '10 mata kuliah sudah mengimplementasikan E-learning',
                'target' => '15 mata kuliah sudah mengemplementasikan E-learning',
            ),
            110 => 
            array (
                'id_indikator' => 2039,
                'id_kegiatan' => 859,
                'indikator' => 'Kurikulum D3 Teknik Konversi Energi mengacu KKNI dan SN DIKTI',
                'baseline' => 'Kurikulum lama ',
                'target' => 'Kurikulum mengacu KKNI dan SN DIKTI',
            ),
            111 => 
            array (
                'id_indikator' => 2040,
                'id_kegiatan' => 867,
                'indikator' => 'MoU antara Polines dengan Industri terkait prodi',
                'baseline' => '4 MoU',
                'target' => '6 MoU',
            ),
            112 => 
            array (
                'id_indikator' => 2041,
                'id_kegiatan' => 876,
                'indikator' => 'Evaluasi diri 2019 terupdate',
                'baseline' => 'Evaluasi diri 2089',
                'target' => 'Evaluasi diri 2019',
            ),
            113 => 
            array (
                'id_indikator' => 2042,
                'id_kegiatan' => 727,
                'indikator' => 'Dokumen Laporan Keuangan Semester I dan Laporan Keuangan Audited',
                'baseline' => '8 buah Laporan Keuangan',
                'target' => '6 Buah Laporan Keuangan',
            ),
            114 => 
            array (
                'id_indikator' => 2045,
                'id_kegiatan' => 725,
                'indikator' => 'Persentase mahasiswa yang memperoleh skor TOEIC prediction >=600 ',
                'baseline' => '0',
                'target' => '30%',
            ),
            115 => 
            array (
                'id_indikator' => 2046,
                'id_kegiatan' => 725,
                'indikator' => 'Jumlah kehadiran mahaiswa dalam pelatihan',
                'baseline' => '0',
                'target' => '100%',
            ),
            116 => 
            array (
                'id_indikator' => 2047,
                'id_kegiatan' => 725,
                'indikator' => 'Tingkat kesiapan mahasiswa menghadapi TOEIC Internasional',
                'baseline' => '0',
                'target' => '75%',
            ),
            117 => 
            array (
                'id_indikator' => 2050,
                'id_kegiatan' => 730,
                'indikator' => 'Jumlah layanan belajar daring SAC - UPT Bahasa',
                'baseline' => '0',
                'target' => '1',
            ),
            118 => 
            array (
                'id_indikator' => 2051,
                'id_kegiatan' => 730,
                'indikator' => 'Jumlah materi pembelajaran daring SAC',
                'baseline' => '0',
            'target' => '4 (paket)',
            ),
            119 => 
            array (
                'id_indikator' => 2052,
                'id_kegiatan' => 730,
                'indikator' => 'JUmlah pengunjung SAC',
                'baseline' => '0',
            'target' => '600 (org)',
            ),
            120 => 
            array (
                'id_indikator' => 2053,
                'id_kegiatan' => 708,
                'indikator' => 'Terwujudnya LKjIP 2019 dan data dukung',
                'baseline' => '',
                'target' => '',
            ),
            121 => 
            array (
                'id_indikator' => 2058,
                'id_kegiatan' => 775,
                'indikator' => 'Dokumen SOP / PM up todate Bidang Akademik ',
                'baseline' => '0',
                'target' => '1 dokumen',
            ),
            122 => 
            array (
                'id_indikator' => 2060,
                'id_kegiatan' => 902,
                'indikator' => 'dokumen hasil audit mutu internal seluruh unit, bag, jur, dan prodi periode 1 dan 2 tahun 2016',
                'baseline' => ' 42 dokumen',
                'target' => ' 42 dokumen',
            ),
            123 => 
            array (
                'id_indikator' => 2061,
                'id_kegiatan' => 903,
            'indikator' => 'dokumen hasil surveillance (PT SGS) dari unit bagian, jurusan yang di pilih/ditetapkan pada periode 1 dan 2 tahun 2019',
                'baseline' => '1 dokumen',
                'target' => '1 dokumen',
            ),
            124 => 
            array (
                'id_indikator' => 2062,
                'id_kegiatan' => 903,
                'indikator' => '-	Jumlah temuan minor',
                'baseline' => '8',
                'target' => '7',
            ),
            125 => 
            array (
                'id_indikator' => 2068,
                'id_kegiatan' => 907,
                'indikator' => 'Dokumen yang berisi hasil  analisis layanan bidang akademik',
                'baseline' => '1 dokumen',
                'target' => '1 dokumen',
            ),
            126 => 
            array (
                'id_indikator' => 2070,
                'id_kegiatan' => 923,
                'indikator' => 'dokumen hasil analisis tentang kepuasan layanan stake holders ',
                'baseline' => '1 dokumen',
                'target' => '1 dokumen',
            ),
            127 => 
            array (
                'id_indikator' => 2075,
                'id_kegiatan' => 905,
                'indikator' => 'Satu borang UPPS program dipoloma tersusun dan ter update',
                'baseline' => '1 dokumen',
                'target' => '1 dokumen',
            ),
            128 => 
            array (
                'id_indikator' => 2077,
                'id_kegiatan' => 905,
                'indikator' => 'Nilai asesmen borang UPPS Oleh asesor internal',
                'baseline' => '364',
                'target' => '367',
            ),
            129 => 
            array (
                'id_indikator' => 2080,
                'id_kegiatan' => 928,
            'indikator' => 'Dampak: IKU4-a (IKK 1.17) Hasil akreditasi institusi Polines',
                'baseline' => 'A',
                'target' => 'A',
            ),
            130 => 
            array (
                'id_indikator' => 2081,
                'id_kegiatan' => 927,
            'indikator' => 'Dampak: IKK1-(8) (IKU 7.a) Jumlah program studi berakreditasi unggul A',
                'baseline' => '13',
                'target' => '14',
            ),
            131 => 
            array (
                'id_indikator' => 2082,
                'id_kegiatan' => 924,
                'indikator' => 'Dokumen pengembangan SPMI Tahun 2019',
                'baseline' => '0',
                'target' => '1 dokumen',
            ),
            132 => 
            array (
                'id_indikator' => 2083,
                'id_kegiatan' => 924,
            'indikator' => 'Dampak: IKK1-(8) (IKU 7.a) Jumlah program studi berakreditasi unggul A',
                'baseline' => '13',
                'target' => '14',
            ),
            133 => 
            array (
                'id_indikator' => 2084,
                'id_kegiatan' => 906,
            'indikator' => 'Dampak: IKK1-(8) (IKU 7.a) Jumlah program studi berakreditasi unggul A',
                'baseline' => '13',
                'target' => '14',
            ),
            134 => 
            array (
                'id_indikator' => 2085,
                'id_kegiatan' => 905,
            'indikator' => 'Dampak: IKK1-(8) (IKU 7.a) Jumlah program studi berakreditasi unggul A',
                'baseline' => '13',
                'target' => '14',
            ),
            135 => 
            array (
                'id_indikator' => 2086,
                'id_kegiatan' => 903,
            'indikator' => 'Dampak: IKU4-a (IKK 1.17) Hasil akreditasi institusi Polines',
                'baseline' => 'A',
                'target' => 'A',
            ),
            136 => 
            array (
                'id_indikator' => 2087,
                'id_kegiatan' => 902,
            'indikator' => 'Dampak: IKK1-(8) (IKU 7.a) Jumlah program studi berakreditasi unggul A',
                'baseline' => '13',
                'target' => '14',
            ),
            137 => 
            array (
                'id_indikator' => 2090,
                'id_kegiatan' => 807,
                'indikator' => 'Terealisasinya dokumen evaluasi dan revisi atas dokumen pendukung Peta Reformasi Birokrasi bidang Pengawasan',
                'baseline' => '1 Dokumen',
                'target' => '1 Dokumen',
            ),
            138 => 
            array (
                'id_indikator' => 2091,
                'id_kegiatan' => 809,
            'indikator' => 'Jumlah peserta Leadership Camp (orang)',
                'baseline' => '15',
                'target' => '35',
            ),
            139 => 
            array (
                'id_indikator' => 2092,
                'id_kegiatan' => 948,
                'indikator' => 'Jumlah dosen peserta seminar',
                'baseline' => '0',
                'target' => '80',
            ),
            140 => 
            array (
                'id_indikator' => 2094,
                'id_kegiatan' => 884,
                'indikator' => 'jumlah lab bersertifikat kompetensi',
                'baseline' => '0',
                'target' => '3',
            ),
            141 => 
            array (
                'id_indikator' => 2095,
                'id_kegiatan' => 780,
                'indikator' => 'Kepuasan mahasiswa terhadap layanan staf pengajar dalam proses belajar mengajar',
                'baseline' => '90%',
                'target' => '95%',
            ),
            142 => 
            array (
                'id_indikator' => 2100,
                'id_kegiatan' => 914,
                'indikator' => 'Profil lulusan',
                'baseline' => '0',
                'target' => '1',
            ),
            143 => 
            array (
                'id_indikator' => 2102,
                'id_kegiatan' => 914,
                'indikator' => 'Capaian Pembelajaran',
                'baseline' => '0',
                'target' => '1',
            ),
            144 => 
            array (
                'id_indikator' => 2103,
                'id_kegiatan' => 914,
                'indikator' => 'Matrik Bahan Kajian',
                'baseline' => '0',
                'target' => '1',
            ),
            145 => 
            array (
                'id_indikator' => 2104,
                'id_kegiatan' => 914,
                'indikator' => 'Matrik Mata Kuliah',
                'baseline' => '0',
                'target' => '1',
            ),
            146 => 
            array (
                'id_indikator' => 2105,
                'id_kegiatan' => 914,
                'indikator' => '',
                'baseline' => '',
                'target' => '',
            ),
            147 => 
            array (
                'id_indikator' => 2106,
                'id_kegiatan' => 910,
                'indikator' => 'Profil Lulusan',
                'baseline' => '0',
                'target' => '1',
            ),
            148 => 
            array (
                'id_indikator' => 2107,
                'id_kegiatan' => 910,
                'indikator' => 'Capaian Pembelajaran',
                'baseline' => '0',
                'target' => '1',
            ),
            149 => 
            array (
                'id_indikator' => 2108,
                'id_kegiatan' => 910,
                'indikator' => 'Matrik Bahan Kajian',
                'baseline' => '0',
                'target' => '1',
            ),
            150 => 
            array (
                'id_indikator' => 2109,
                'id_kegiatan' => 910,
                'indikator' => 'Matrik Mata Kuliah',
                'baseline' => '0',
                'target' => '1',
            ),
            151 => 
            array (
                'id_indikator' => 2110,
                'id_kegiatan' => 910,
                'indikator' => '',
                'baseline' => '',
                'target' => '',
            ),
            152 => 
            array (
                'id_indikator' => 2112,
                'id_kegiatan' => 845,
                'indikator' => 'Terwujudnya layanan aplikasi mobile',
                'baseline' => '',
                'target' => '1 Aplikasi',
            ),
            153 => 
            array (
                'id_indikator' => 2113,
                'id_kegiatan' => 753,
                'indikator' => 'Dokumen hasil evaluasi kurikulum',
                'baseline' => '0',
                'target' => '1 Dokumen',
            ),
            154 => 
            array (
                'id_indikator' => 2114,
                'id_kegiatan' => 899,
                'indikator' => 'Dokumen Panduan Magang Bagi Calon Wirausaha',
                'baseline' => '0',
                'target' => '1',
            ),
            155 => 
            array (
                'id_indikator' => 2118,
                'id_kegiatan' => 770,
                'indikator' => 'Ruang Inkubator yang representatif',
                'baseline' => '1',
                'target' => '1',
            ),
            156 => 
            array (
                'id_indikator' => 2122,
                'id_kegiatan' => 770,
                'indikator' => 'jumlah prototipe R & D dan produk inovasi',
                'baseline' => '18',
                'target' => '6',
            ),
            157 => 
            array (
                'id_indikator' => 2123,
                'id_kegiatan' => 770,
                'indikator' => 'jumlah prototipe yang dimanfaatkan industri dan masyarakat',
                'baseline' => '7',
                'target' => '8',
            ),
            158 => 
            array (
                'id_indikator' => 2124,
                'id_kegiatan' => 770,
                'indikator' => 'Jumlah tenant',
                'baseline' => '1',
                'target' => '5',
            ),
            159 => 
            array (
                'id_indikator' => 2125,
                'id_kegiatan' => 810,
                'indikator' => 'Mahasiswa pengelola perpustakaan di jurusan terlatih mengelola perpustakaan di jurusan',
            'baseline' => '50 orang (per jurusan 10 orang)',
            'target' => '50 orang (per jurusan 10 orang)',
            ),
            160 => 
            array (
                'id_indikator' => 2126,
                'id_kegiatan' => 853,
                'indikator' => 'Dosen tersertifikasi tahun 2019 sebanyak 5 orang',
                'baseline' => 'Tahun 2018 = 330 orang',
                'target' => 'Tahun 2019 = 5 orang',
            ),
            161 => 
            array (
                'id_indikator' => 2127,
                'id_kegiatan' => 843,
                'indikator' => 'Tersedianya sarana prasarana pendidikan sesuai usulan kegiatan',
                'baseline' => '1 paket kebutuhan sarana prasarana pendidikan',
                'target' => '1 paket kebutuhan sarana prasarana pendidikan',
            ),
            162 => 
            array (
                'id_indikator' => 2128,
                'id_kegiatan' => 840,
                'indikator' => 'Jumlah perusahaan yang mampu dikunjungi menjadi tempat KKL selama tahun 2019',
                'baseline' => '17 perusakaan',
                'target' => '17 perusahaan',
            ),
            163 => 
            array (
                'id_indikator' => 2129,
                'id_kegiatan' => 840,
                'indikator' => 'Jumlah perusahaan tempat magang yang divisit',
                'baseline' => '15 perusahaan',
                'target' => '50 perusahaan',
            ),
            164 => 
            array (
                'id_indikator' => 2130,
                'id_kegiatan' => 839,
                'indikator' => 'JUmlah dosen yang mengikuti program pengembangan SDM',
                'baseline' => '25',
                'target' => '25',
            ),
            165 => 
            array (
                'id_indikator' => 2131,
                'id_kegiatan' => 899,
                'indikator' => 'Jumlah mahasiswa yang magang wirausaha',
                'baseline' => '0',
                'target' => '15',
            ),
            166 => 
            array (
                'id_indikator' => 2134,
                'id_kegiatan' => 894,
                'indikator' => 'Dokumen Kurikulum Prodi ABT Kurikulum Prodi ABT',
                'baseline' => '0',
                'target' => '1',
            ),
            167 => 
            array (
                'id_indikator' => 2135,
                'id_kegiatan' => 894,
                'indikator' => 'Dokumen RPS dan Kontrak Kuliah Prodi ABT',
                'baseline' => '0',
                'target' => '1',
            ),
            168 => 
            array (
                'id_indikator' => 2137,
                'id_kegiatan' => 947,
                'indikator' => 'Mahasiswa yang terlibat dalam organisasi mahasiswa mengikuti temu akademik tahun 2019',
                'baseline' => '0',
                'target' => '120 anggota ormawa',
            ),
            169 => 
            array (
                'id_indikator' => 2138,
                'id_kegiatan' => 767,
                'indikator' => 'Dokumen hasil evaluasi akademik tahun 2018/2019',
                'baseline' => '0',
                'target' => '1 dokumen',
            ),
            170 => 
            array (
                'id_indikator' => 2139,
                'id_kegiatan' => 838,
                'indikator' => '1. Peserta workshop ',
                'baseline' => '0',
                'target' => '40',
            ),
            171 => 
            array (
                'id_indikator' => 2140,
                'id_kegiatan' => 838,
                'indikator' => '2. Jumlah RPS Berbasis E- Learning',
                'baseline' => '0',
                'target' => '12',
            ),
            172 => 
            array (
                'id_indikator' => 2141,
                'id_kegiatan' => 838,
                'indikator' => '3. Implementasi RPS Berbasis E- Learning',
                'baseline' => '0',
                'target' => '12',
            ),
            173 => 
            array (
                'id_indikator' => 2142,
                'id_kegiatan' => 760,
                'indikator' => 'Dokumen layanan akademik untuk mahasiswa baru: 1. Tes kesehatan mata, 2. Buku Pedoman, 3. Buku Perak, 4. Buku Induk, 5. Foto untuk KTM',
                'baseline' => '1. 644, 2. 1544 Buku Pedoman, 3. 1544 Buku Perak, 4. 5 Buku Induk, 5. 1544 Kartu Tanda Mahasiswa',
                'target' => '1. 668, 2. 1566 Buku Pedoman, 3. 1566 Buku Perak, 4. 5 Buku Induk, 5. 1566 Kartu Tanda Mahasiswa',
            ),
            174 => 
            array (
                'id_indikator' => 2143,
                'id_kegiatan' => 752,
            'indikator' => 'Jumlah Civitas Akademika (Dosen dan Mahasiswa) yang mengikuti Sarasehan Akademik',
                'baseline' => '250',
                'target' => '300',
            ),
            175 => 
            array (
                'id_indikator' => 2144,
                'id_kegiatan' => 768,
                'indikator' => 'Hasil evaluasi program kerja 2018, terealisasinya program kerja tahun 2019 dan tersusunnya program kerja tahun 2020',
                'baseline' => '1 dokumen',
                'target' => '1 dokumen',
            ),
            176 => 
            array (
                'id_indikator' => 2145,
                'id_kegiatan' => 778,
                'indikator' => 'Jumlah mahasiswa bermasalah yang mengikuti kegiatan Layanan Bimbingan dan Konseling',
                'baseline' => '150',
                'target' => '150',
            ),
            177 => 
            array (
                'id_indikator' => 2146,
                'id_kegiatan' => 946,
                'indikator' => 'Status Mahasiswa  kelas 1 s.d kelas 3 untuk yang Program Diploma III dan kelas 1 s.d 4 untuk Program Diploma IV',
                'baseline' => '4741',
                'target' => '4741',
            ),
            178 => 
            array (
                'id_indikator' => 2147,
                'id_kegiatan' => 706,
                'indikator' => 'Jumlah Kegiatan Pameran',
                'baseline' => '5 Kegiatan',
                'target' => '5 Kegiatan',
            ),
            179 => 
            array (
                'id_indikator' => 2148,
                'id_kegiatan' => 706,
                'indikator' => 'Jumlah Kegiatan Promosi',
                'baseline' => '7 Kegiatan',
                'target' => '9 Kegiatan',
            ),
            180 => 
            array (
                'id_indikator' => 2149,
                'id_kegiatan' => 705,
                'indikator' => 'Jumlah Kegiatan Job fair',
                'baseline' => '1 Kegiatan job fair',
                'target' => '1 Kegiatan job fair',
            ),
            181 => 
            array (
                'id_indikator' => 2151,
                'id_kegiatan' => 705,
                'indikator' => 'Jumlah perusahaan yang berpartisipasi job fair',
                'baseline' => '11 Perusahaan bertaraf nasional',
                'target' => '15 Perusahaan bertaraf nasional',
            ),
            182 => 
            array (
                'id_indikator' => 2154,
                'id_kegiatan' => 723,
                'indikator' => 'Persentase mahasiswa yang mencapai skor >=600',
                'baseline' => '10%',
                'target' => '20%',
            ),
            183 => 
            array (
                'id_indikator' => 2155,
                'id_kegiatan' => 723,
                'indikator' => 'Jumlah peserta uji TOEIC internasional',
                'baseline' => '1306',
                'target' => '1418',
            ),
            184 => 
            array (
                'id_indikator' => 2156,
                'id_kegiatan' => 726,
                'indikator' => 'Persentase mahasiswa yang mencapai skor 600 atau lebih',
                'baseline' => '',
                'target' => '',
            ),
            185 => 
            array (
                'id_indikator' => 2157,
                'id_kegiatan' => 726,
                'indikator' => 'Jumlah mahasiswa yang mengikuti tes',
                'baseline' => '1418',
                'target' => '1560',
            ),
            186 => 
            array (
                'id_indikator' => 2158,
                'id_kegiatan' => 726,
                'indikator' => 'Jumlah mahasiswa yang mengikuti TOEIC predictio',
                'baseline' => '1515',
                'target' => '1560',
            ),
            187 => 
            array (
                'id_indikator' => 2159,
                'id_kegiatan' => 949,
                'indikator' => 'Jumlah dosen peserta workshop ',
                'baseline' => '0',
                'target' => '20',
            ),
            188 => 
            array (
                'id_indikator' => 2160,
                'id_kegiatan' => 949,
                'indikator' => 'Jumlah Jurnal Jurusan yang terbit secara cetak dan online dengan OJS',
                'baseline' => '0',
                'target' => '3',
            ),
            189 => 
            array (
                'id_indikator' => 2161,
                'id_kegiatan' => 987,
                'indikator' => 'asasa',
                'baseline' => '1',
                'target' => '2',
            ),
            190 => 
            array (
                'id_indikator' => 2162,
                'id_kegiatan' => 988,
                'indikator' => 'indikator 1',
                'baseline' => '1',
                'target' => '2',
            ),
            191 => 
            array (
                'id_indikator' => 2163,
                'id_kegiatan' => 988,
                'indikator' => 'indikator 2',
                'baseline' => '2',
                'target' => '3',
            ),
            192 => 
            array (
                'id_indikator' => 2164,
                'id_kegiatan' => 988,
                'indikator' => '212121',
                'baseline' => '22',
                'target' => '23',
            ),
            193 => 
            array (
                'id_indikator' => 2165,
                'id_kegiatan' => 989,
                'indikator' => 'dsdsad',
                'baseline' => '1',
                'target' => '2',
            ),
            194 => 
            array (
                'id_indikator' => 2166,
                'id_kegiatan' => 990,
                'indikator' => 'i1',
                'baseline' => '2',
                'target' => '3',
            ),
            195 => 
            array (
                'id_indikator' => 2167,
                'id_kegiatan' => 991,
                'indikator' => 'i2',
                'baseline' => '3',
                'target' => '4',
            ),
            196 => 
            array (
                'id_indikator' => 2168,
                'id_kegiatan' => 992,
                'indikator' => 'dfdsfds',
                'baseline' => '1',
                'target' => '2',
            ),
            197 => 
            array (
                'id_indikator' => 2169,
                'id_kegiatan' => 993,
                'indikator' => 'indikator 3',
                'baseline' => '3',
                'target' => '5',
            ),
            198 => 
            array (
                'id_indikator' => 2170,
                'id_kegiatan' => 994,
                'indikator' => 'i 2',
                'baseline' => '1',
                'target' => '3',
            ),
            199 => 
            array (
                'id_indikator' => 2173,
                'id_kegiatan' => 997,
                'indikator' => 'indikator output 1',
                'baseline' => '1',
                'target' => '2',
            ),
            200 => 
            array (
                'id_indikator' => 2176,
                'id_kegiatan' => 999,
                'indikator' => 'Indikator Output 1',
                'baseline' => '1',
                'target' => '2',
            ),
            201 => 
            array (
                'id_indikator' => 2177,
                'id_kegiatan' => 999,
                'indikator' => 'indikator output 2',
                'baseline' => '3',
                'target' => '6',
            ),
            202 => 
            array (
                'id_indikator' => 2178,
                'id_kegiatan' => 999,
                'indikator' => 'indikator 3',
                'baseline' => '1',
                'target' => '2',
            ),
            203 => 
            array (
                'id_indikator' => 2179,
                'id_kegiatan' => 1000,
                'indikator' => 'indi 1',
                'baseline' => '1',
                'target' => '2',
            ),
            204 => 
            array (
                'id_indikator' => 2180,
                'id_kegiatan' => 1001,
                'indikator' => 'indi out',
                'baseline' => '12',
                'target' => '14',
            ),
            205 => 
            array (
                'id_indikator' => 2181,
                'id_kegiatan' => 1023,
                'indikator' => 'Indikator 1',
                'baseline' => '1',
                'target' => '2',
            ),
            206 => 
            array (
                'id_indikator' => 2182,
                'id_kegiatan' => 1023,
                'indikator' => 'Indiaktor 2',
                'baseline' => '2',
                'target' => '3',
            ),
            207 => 
            array (
                'id_indikator' => 2183,
                'id_kegiatan' => 1024,
                'indikator' => 'indikator 1',
                'baseline' => '12',
                'target' => '14',
            ),
            208 => 
            array (
                'id_indikator' => 2184,
                'id_kegiatan' => 1024,
                'indikator' => 'modul',
                'baseline' => '2',
                'target' => '3',
            ),
            209 => 
            array (
                'id_indikator' => 2185,
                'id_kegiatan' => 1025,
                'indikator' => 'modul',
                'baseline' => '1',
                'target' => '2',
            ),
            210 => 
            array (
                'id_indikator' => 2186,
                'id_kegiatan' => 1025,
                'indikator' => 'buku manual ',
                'baseline' => '0',
                'target' => '1',
            ),
            211 => 
            array (
                'id_indikator' => 2187,
                'id_kegiatan' => 1026,
                'indikator' => 'fdgfdgdf',
                'baseline' => '1',
                'target' => '2',
            ),
            212 => 
            array (
                'id_indikator' => 2188,
                'id_kegiatan' => 1027,
                'indikator' => 'dsfsdf',
                'baseline' => '1',
                'target' => '2',
            ),
            213 => 
            array (
                'id_indikator' => 2189,
                'id_kegiatan' => 1028,
                'indikator' => 'uio',
                'baseline' => 'iuo',
                'target' => 'iuo',
            ),
            214 => 
            array (
                'id_indikator' => 2190,
                'id_kegiatan' => 1029,
                'indikator' => 'Laporan Kinerja Polines 2020',
                'baseline' => '1',
                'target' => '1',
            ),
            215 => 
            array (
                'id_indikator' => 2194,
                'id_kegiatan' => 1031,
                'indikator' => 'modul ',
                'baseline' => '1',
                'target' => '2',
            ),
            216 => 
            array (
                'id_indikator' => 2196,
                'id_kegiatan' => 1033,
                'indikator' => 'Jumlah mahasiswa peserta Latihan Ketrampilan Manajemen Mahasiswa',
                'baseline' => '22 ormawa',
                'target' => '22 mahasiswa',
            ),
            217 => 
            array (
                'id_indikator' => 2197,
                'id_kegiatan' => 1036,
                'indikator' => 'Jumlah MoU yang ditindaklanjuti',
                'baseline' => '25',
                'target' => '30',
            ),
            218 => 
            array (
                'id_indikator' => 2203,
                'id_kegiatan' => 1035,
            'indikator' => 'Dokumen Rencana Kinerja Tahunan (RKT) dan PK 2020',
                'baseline' => '2',
                'target' => '2',
            ),
            219 => 
            array (
                'id_indikator' => 2206,
                'id_kegiatan' => 1042,
                'indikator' => 'Sertifikat Network Administrator',
                'baseline' => '0',
                'target' => '4org',
            ),
            220 => 
            array (
                'id_indikator' => 2207,
                'id_kegiatan' => 1042,
                'indikator' => 'Buku Panduan Manajemen User LAN',
                'baseline' => '0',
                'target' => '1',
            ),
            221 => 
            array (
                'id_indikator' => 2210,
                'id_kegiatan' => 1029,
                'indikator' => 'Dokumen data dukung Laporan Kinerja 2020',
                'baseline' => '1',
                'target' => '1',
            ),
            222 => 
            array (
                'id_indikator' => 2218,
                'id_kegiatan' => 1048,
            'indikator' => '4 jurnal terakreditasi Nasional (SINTA)',
                'baseline' => '2',
                'target' => '4',
            ),
            223 => 
            array (
                'id_indikator' => 2230,
                'id_kegiatan' => 1054,
                'indikator' => 'Jumlah artikel yang diupload di website  ',
                'baseline' => '300',
                'target' => '350',
            ),
            224 => 
            array (
                'id_indikator' => 2231,
                'id_kegiatan' => 1054,
                'indikator' => 'Peringkat  PT versi webometrics kategori politeknik ',
                'baseline' => '12',
                'target' => '10',
            ),
            225 => 
            array (
                'id_indikator' => 2232,
                'id_kegiatan' => 1055,
                'indikator' => 'Sasaran mutu jurusan 2019-2020.',
                'baseline' => '1',
                'target' => '1',
            ),
            226 => 
            array (
                'id_indikator' => 2233,
                'id_kegiatan' => 1056,
                'indikator' => 'Jumlah Temu Alumni di Perusahaan/ Instansi Pemerintah',
                'baseline' => '11 pertemuan dengan alumni',
                'target' => '7 pertemuan dengan alumni',
            ),
            227 => 
            array (
                'id_indikator' => 2234,
                'id_kegiatan' => 1057,
                'indikator' => 'Tereliasasinya MoU dengan industri',
                'baseline' => ' 2 MoU',
                'target' => '3 MoU, 9 kunjungan industri',
            ),
            228 => 
            array (
                'id_indikator' => 2235,
                'id_kegiatan' => 1058,
                'indikator' => 'Borang Akreditasi Prodi A',
                'baseline' => 'Terakreditasi B',
                'target' => 'Terakreditasi A',
            ),
            229 => 
            array (
                'id_indikator' => 2236,
                'id_kegiatan' => 1059,
                'indikator' => 'Terealisasinya Job Fair',
                'baseline' => '1 Kegiatan job fair dengan peserta per kegiatan 13 perusahaan yang bertaraf nasional',
                'target' => '1 Kegiatan job fair dengan peserta per kegiatan 17 perusahaan yang bertaraf nasional',
            ),
            230 => 
            array (
                'id_indikator' => 2237,
                'id_kegiatan' => 1060,
                'indikator' => 'Pameran',
                'baseline' => '5 Kegiatan',
                'target' => '5 Kegiatan',
            ),
            231 => 
            array (
                'id_indikator' => 2238,
                'id_kegiatan' => 1060,
                'indikator' => 'Promosi',
                'baseline' => '7 Frekuensi Tayangan',
                'target' => '9 Frekuensi Tayangan',
            ),
            232 => 
            array (
                'id_indikator' => 2241,
                'id_kegiatan' => 1064,
                'indikator' => 'Dokumen Kurikulum Prodi AB',
                'baseline' => 'Kurikulum KKNI 2016',
                'target' => 'Kurikulum KKNI 2020',
            ),
            233 => 
            array (
                'id_indikator' => 2245,
                'id_kegiatan' => 1071,
                'indikator' => 'Output Dosen yang mengikuti sarasehan',
                'baseline' => '250',
                'target' => '250',
            ),
            234 => 
            array (
                'id_indikator' => 2246,
                'id_kegiatan' => 1072,
                'indikator' => 'Hasil evaluasi program kerja 2019, realisasi program kerja 2020, dan tersusunnya program kerja tahun 2021',
                'baseline' => '1',
                'target' => '1',
            ),
            235 => 
            array (
                'id_indikator' => 2247,
                'id_kegiatan' => 1073,
                'indikator' => 'Dokumen pemutakhiran data mahasiswa yang menginformasikan status mahasiswa Smt Gasal dan Genap TA 2020/2021',
                'baseline' => '4775',
                'target' => '4775',
            ),
            236 => 
            array (
                'id_indikator' => 2248,
                'id_kegiatan' => 1074,
                'indikator' => 'Dokumen SOP / PM up todate Bidang Akademik ',
                'baseline' => '0',
                'target' => '1',
            ),
            237 => 
            array (
                'id_indikator' => 2249,
                'id_kegiatan' => 1076,
                'indikator' => 'Tersusunnya laporan kemajuan pembelajaran dan kemahasiswaan',
                'baseline' => '1',
                'target' => '1',
            ),
            238 => 
            array (
                'id_indikator' => 2252,
                'id_kegiatan' => 1079,
                'indikator' => 'Dokumen layanan akademik Mahasiswa Baru : Tes kesehatan mata, Buku pedoman, Buku Perak, Buku Induk, Foto untuk KTM',
                'baseline' => '644 Tes kesehatan mata, 1666 Buku pedoman, 1661 Buku Perak, 5 Buku Induk, 1666 Foto untuk KTM',
                'target' => '644 Tes kesehatan mata, 1666 Buku pedoman, 1661 Buku Perak, 5 Buku Induk, 1666 Foto untuk KTM',
            ),
            239 => 
            array (
                'id_indikator' => 2253,
                'id_kegiatan' => 1080,
                'indikator' => 'Laporan SPT Tahunan PPh Ps.21 Wajib Pajak Orang Pribadi Tahun 2019 Pegawai pada Politeknik Negeri Semarang',
                'baseline' => '',
                'target' => '',
            ),
            240 => 
            array (
                'id_indikator' => 2258,
                'id_kegiatan' => 1088,
            'indikator' => '1.	42 area audit (jurusan, prodi, bagian, pusat, unit)',
                'baseline' => '42',
                'target' => '42',
            ),
            241 => 
            array (
                'id_indikator' => 2259,
                'id_kegiatan' => 1088,
                'indikator' => 'Output 2.	         Jumlah temuan mayor',
                'baseline' => '20',
                'target' => '22',
            ),
            242 => 
            array (
                'id_indikator' => 2260,
                'id_kegiatan' => 1088,
                'indikator' => 'Outcome: Persentase peran penjaminan mutu dalam pendampingan  pelaksanaan akademik  dan  penunjang akademik  mutu internal seluruh unit',
                'baseline' => '90 %',
                'target' => '92 %',
            ),
            243 => 
            array (
                'id_indikator' => 2263,
                'id_kegiatan' => 1089,
                'indikator' => 'Sertifikasi ISO 9001:2015 ',
                'baseline' => 'Dilanjutkan',
                'target' => 'Dilanjutkan',
            ),
            244 => 
            array (
                'id_indikator' => 2264,
                'id_kegiatan' => 1089,
                'indikator' => 'Ketidaksesuaian Major',
                'baseline' => '1',
                'target' => '0',
            ),
            245 => 
            array (
                'id_indikator' => 2265,
                'id_kegiatan' => 1089,
                'indikator' => 'Ketidaksesuaian Minor',
                'baseline' => '1',
                'target' => '1',
            ),
            246 => 
            array (
                'id_indikator' => 2270,
                'id_kegiatan' => 1093,
                'indikator' => ' Indek Kepuasan kepuasan layanan akademi',
                'baseline' => '3,24',
                'target' => '3.25',
            ),
            247 => 
            array (
                'id_indikator' => 2277,
                'id_kegiatan' => 1108,
                'indikator' => 'Dosen yang menguasai pembelajaran e-Learning',
                'baseline' => '48 Dosen tahun 2019',
                'target' => '48 Dosen tahun 2020',
            ),
            248 => 
            array (
                'id_indikator' => 2278,
                'id_kegiatan' => 1109,
                'indikator' => 'Dosen bersertifikat pendidik',
            'baseline' => '329 Dosen (pensiun dan meninggal dunia 23)',
                'target' => '339 Dosen',
            ),
            249 => 
            array (
                'id_indikator' => 2279,
                'id_kegiatan' => 1035,
                'indikator' => 'Dokumen Rencana Anggaran 2020',
                'baseline' => '1',
                'target' => '1',
            ),
            250 => 
            array (
                'id_indikator' => 2280,
                'id_kegiatan' => 1111,
                'indikator' => 'JUMLAH PESERTA KULIAH TAMU',
                'baseline' => '280',
                'target' => '300',
            ),
            251 => 
            array (
                'id_indikator' => 2284,
                'id_kegiatan' => 1112,
                'indikator' => 'Dokumen inventarisasi permasalahan BUK',
                'baseline' => '1 dokumen',
                'target' => '1 dokumen',
            ),
            252 => 
            array (
                'id_indikator' => 2285,
                'id_kegiatan' => 1112,
                'indikator' => 'Rencana kegiatan BUK tahun 2021',
                'baseline' => '1 dokumen',
                'target' => '1 dokumen',
            ),
            253 => 
            array (
                'id_indikator' => 2287,
                'id_kegiatan' => 1115,
                'indikator' => 'jumlah pegawai mengikuti olahraga bersama',
                'baseline' => '115',
                'target' => '120',
            ),
            254 => 
            array (
                'id_indikator' => 2288,
                'id_kegiatan' => 1116,
                'indikator' => ' Prosentase kehadiran pegawai',
                'baseline' => '90 %',
                'target' => '95%',
            ),
            255 => 
            array (
                'id_indikator' => 2290,
                'id_kegiatan' => 1118,
                'indikator' => 'Tertatanya arsip berdasarkan klasifikasi arsip',
                'baseline' => '0',
                'target' => '6 m3',
            ),
            256 => 
            array (
                'id_indikator' => 2291,
                'id_kegiatan' => 1119,
            'indikator' => 'Tercapaina penguatan karakter dan budaya kerja (IKK 4.02)',
                'baseline' => '80%',
                'target' => '80%',
            ),
            257 => 
            array (
                'id_indikator' => 2293,
                'id_kegiatan' => 1121,
            'indikator' => 'Tercapainya penguatan budaya kerja (IKK.4.02)',
                'baseline' => '0',
                'target' => '100%',
            ),
            258 => 
            array (
                'id_indikator' => 2294,
                'id_kegiatan' => 1085,
                'indikator' => 'Sistem Informasi',
                'baseline' => '0',
                'target' => '1',
            ),
            259 => 
            array (
                'id_indikator' => 2295,
                'id_kegiatan' => 1086,
                'indikator' => 'Sistem Informasi',
                'baseline' => '0',
                'target' => '1',
            ),
            260 => 
            array (
                'id_indikator' => 2298,
                'id_kegiatan' => 1032,
                'indikator' => 'Jumlah karya kreatif-inovatif dosen & mahasiswa, hasil/karya penelitian yg berupa prototipe yang dipromosikan & berpotensi dimanfaatkan stakeholder secara berkelanjutan yang ditampilkan dalam profil ',
                'baseline' => '45 karya yang tertuang di dalam 100 eks katalog dan 100 keping CD',
                'target' => '50 karya yang tertuang di dalam 100 eks katalog dan 100 keping CD',
            ),
            261 => 
            array (
                'id_indikator' => 2299,
                'id_kegiatan' => 1124,
                'indikator' => 'Jumlah peserta terdesiminasi 85 orang dan 267 mahasiswa',
                'baseline' => 'Jumlah peserta terdesiminasi 253 orang mahasiswa dan 50 dosen',
                'target' => 'Jumlah peserta terdesiminasi 85 orang dan 267 mahasiswa',
            ),
            262 => 
            array (
                'id_indikator' => 2300,
                'id_kegiatan' => 1126,
                'indikator' => 'JUMLAH KURIKULUM KKNI',
                'baseline' => '5',
                'target' => '5',
            ),
            263 => 
            array (
                'id_indikator' => 2301,
                'id_kegiatan' => 1128,
                'indikator' => 'Jumlah dosen mengajukan  DUPAK',
                'baseline' => '5 dosesn',
                'target' => '5 dosen',
            ),
            264 => 
            array (
                'id_indikator' => 2302,
                'id_kegiatan' => 1136,
                'indikator' => 'Dokumen Renstra dan Renop SPI',
                'baseline' => '-',
            'target' => '1(satu) Dokumen',
            ),
            265 => 
            array (
                'id_indikator' => 2303,
                'id_kegiatan' => 1143,
                'indikator' => 'Jumlah DUPAK Tendik',
                'baseline' => '5',
                'target' => '5',
            ),
            266 => 
            array (
                'id_indikator' => 2304,
                'id_kegiatan' => 1092,
                'indikator' => '1. Jumlah auditor terlatih AMIberbasis SPMI SN DIKTI dan Berbasis Resiko',
                'baseline' => '0',
                'target' => '30',
            ),
            267 => 
            array (
                'id_indikator' => 2305,
                'id_kegiatan' => 1092,
                'indikator' => '2. Peningkatan ketrampilan mengaudit AMI Berbasis SPMI SN Dikti dan Manajemen Resiko',
                'baseline' => '0',
                'target' => 'nilai >75',
            ),
            268 => 
            array (
                'id_indikator' => 2308,
                'id_kegiatan' => 1151,
                'indikator' => 'Terpenuhinya usulan pengadaan Alat pendidikan dan pendukung pembelajaran/sarana prasarana pembelajaran Jurusan',
                'baseline' => 'Inventarisasi Sarpras 2019',
                'target' => 'Penambahan dan Penggantian yang rusak Sarpras 2020',
            ),
            269 => 
            array (
                'id_indikator' => 2309,
                'id_kegiatan' => 1152,
                'indikator' => 'Jumlah buku ajar ber-ISBN terbitan Polines',
                'baseline' => '10 tahun 2019',
                'target' => '10 tahun 2020',
            ),
            270 => 
            array (
                'id_indikator' => 2311,
                'id_kegiatan' => 1154,
                'indikator' => 'Jumlah dosen peserta pelatihan dan workshop ',
                'baseline' => '0',
                'target' => '70 orang',
            ),
            271 => 
            array (
                'id_indikator' => 2312,
                'id_kegiatan' => 1154,
                'indikator' => 'Materi pembelajaran non bahasa Inggris yang disiapkan menggunakan introduction Bahasa Inggris',
                'baseline' => '0',
                'target' => '12',
            ),
            272 => 
            array (
                'id_indikator' => 2313,
                'id_kegiatan' => 1064,
                'indikator' => '2. Dokumen Kurikulum Prodi MP ',
                'baseline' => 'Kurikulum tahun 2016',
                'target' => 'Kurikulum 2020',
            ),
            273 => 
            array (
                'id_indikator' => 2318,
                'id_kegiatan' => 1155,
                'indikator' => 'Mendapatkan  kejuaraan Lomba Administrasi Bisnis Tingkat Nasional',
                'baseline' => '5 mahasiswa',
                'target' => '4 mahasiswa',
            ),
            274 => 
            array (
                'id_indikator' => 2319,
                'id_kegiatan' => 1034,
                'indikator' => 'sejumlah 400 mahasiswa mengikuti seminar Nasional Himpunan Mahasiswa Jurusan',
                'baseline' => '400 mahasiswa',
                'target' => '400 mahasiswa',
            ),
            275 => 
            array (
                'id_indikator' => 2320,
                'id_kegiatan' => 1156,
                'indikator' => 'sejumlah 3 mahasiswa mengikuti lomba bidang akuntansi tingkat nasional',
                'baseline' => '3 mhs',
                'target' => ' 3 mhs',
            ),
            276 => 
            array (
                'id_indikator' => 2328,
                'id_kegiatan' => 1158,
                'indikator' => 'Meningkatnya nilai akreditasi Program Studi Teknik Elektronika',
                'baseline' => 'Dokumen Evaluasi diri borang akreditasi 2018',
                'target' => 'Dokumen Evaluasi diri tahun 2020 terisi lengkap',
            ),
            277 => 
            array (
                'id_indikator' => 2335,
                'id_kegiatan' => 1164,
                'indikator' => 'Sejumlah 1645 mahasiswa baru yang di LDK',
                'baseline' => '1645 MABA',
                'target' => '1645',
            ),
            278 => 
            array (
                'id_indikator' => 2337,
                'id_kegiatan' => 1166,
                'indikator' => '3 mahasiswa mengukuti lomba tingkat nasional 3 mahasiswa sebagai cadangan lomba',
                'baseline' => '3 mhs',
                'target' => '3 mhs',
            ),
            279 => 
            array (
                'id_indikator' => 2343,
                'id_kegiatan' => 1125,
                'indikator' => 'Tercapainya jumlah layanan informasi akademik',
                'baseline' => '0',
                'target' => '8 layanan informasi',
            ),
            280 => 
            array (
                'id_indikator' => 2348,
                'id_kegiatan' => 1170,
            'indikator' => 'Kerjasama Industri (MOU)',
                'baseline' => '6',
                'target' => '8',
            ),
            281 => 
            array (
                'id_indikator' => 2349,
                'id_kegiatan' => 1125,
                'indikator' => 'Tercapainya jumlah layanan informasi non akademik',
                'baseline' => '0',
                'target' => '8',
            ),
            282 => 
            array (
                'id_indikator' => 2355,
                'id_kegiatan' => 1174,
            'indikator' => 'Sejumlah 1550 mahasiswa baru memperoleh sertifikasi kegiatan dan 3 (tiga) materi tentang pemahaman terhadap kelembagaan Polines, budaya kehidupan akademis perguruan tinggi, serta dinamika kegiatan mah',
                'baseline' => '1645 MABA',
                'target' => '1645',
            ),
            283 => 
            array (
                'id_indikator' => 2357,
                'id_kegiatan' => 1175,
                'indikator' => 'jumlah Publikasi Nasional',
                'baseline' => '12',
                'target' => '15',
            ),
            284 => 
            array (
                'id_indikator' => 2358,
                'id_kegiatan' => 1176,
                'indikator' => 'Ada sejumlah 90 mahasiswa baru non Muslim mengikuti  Pendidikan Karakter Spritual',
                'baseline' => '90 mhs',
                'target' => ' 90 mhs',
            ),
            285 => 
            array (
                'id_indikator' => 2371,
                'id_kegiatan' => 1182,
                'indikator' => 'Buku Pedoman Magang Industri Terstruktur Bagi Mahasiswa Politeknik Negeri Semarang yang disahkan oleh Senat Akademik Polines',
                'baseline' => '-',
                'target' => '1 Buku Pedoman',
            ),
            286 => 
            array (
                'id_indikator' => 2375,
                'id_kegiatan' => 1101,
                'indikator' => 'Terlaksananya Visitasi Prodi ABT',
                'baseline' => 'Akreditasi B',
                'target' => 'Akreditasi A',
            ),
            287 => 
            array (
                'id_indikator' => 2376,
                'id_kegiatan' => 1186,
                'indikator' => 'Pimpinan dan staf Polines memahami Permenristekdikti No 23 tahun 2018',
                'baseline' => '0',
                'target' => '80 orang',
            ),
            288 => 
            array (
                'id_indikator' => 2378,
                'id_kegiatan' => 1185,
                'indikator' => 'Indeks Kepuasan Layanan',
                'baseline' => '3,35',
                'target' => '3,35',
            ),
            289 => 
            array (
                'id_indikator' => 2388,
                'id_kegiatan' => 1142,
                'indikator' => 'Dokumen Program Kerja Tahun 2021',
                'baseline' => '0',
                'target' => '9 program kerja berbasis kinerja',
            ),
            290 => 
            array (
                'id_indikator' => 2389,
                'id_kegiatan' => 1191,
                'indikator' => 'Jumlah peserta terdesiminasi 85 orang dosen dan 70 orang mahasiswa',
                'baseline' => '150',
                'target' => '155',
            ),
            291 => 
            array (
                'id_indikator' => 2395,
                'id_kegiatan' => 1192,
                'indikator' => 'Meningkatnya kualitas SDM Kearsipan',
                'baseline' => '70%',
                'target' => '80%',
            ),
            292 => 
            array (
                'id_indikator' => 2399,
                'id_kegiatan' => 1195,
                'indikator' => '',
                'baseline' => '',
                'target' => '',
            ),
            293 => 
            array (
                'id_indikator' => 2400,
                'id_kegiatan' => 1196,
                'indikator' => 'Laporan Hasil Audit SDM Manusia',
                'baseline' => '1',
                'target' => '1',
            ),
            294 => 
            array (
                'id_indikator' => 2402,
                'id_kegiatan' => 1198,
                'indikator' => 'Jumlah personel yang mengikuti kegiatan ',
                'baseline' => '9 person',
                'target' => '9 Person',
            ),
            295 => 
            array (
                'id_indikator' => 2403,
                'id_kegiatan' => 1199,
                'indikator' => 'Jumlah anggota Menwa terlatih',
                'baseline' => '12',
                'target' => '12',
            ),
            296 => 
            array (
                'id_indikator' => 2405,
                'id_kegiatan' => 1201,
                'indikator' => 'sejumlah 300 mahasiswa mengikuti seminar tematik, Jumlah mahasiswa berprestasi tingkat Nasional dan Internasional',
                'baseline' => '250',
                'target' => '250',
            ),
            297 => 
            array (
                'id_indikator' => 2406,
                'id_kegiatan' => 1202,
                'indikator' => 'Dokumen evaluasi diri PS TTPMT',
                'baseline' => '0',
                'target' => '1',
            ),
            298 => 
            array (
                'id_indikator' => 2407,
                'id_kegiatan' => 1203,
                'indikator' => '	Meningkatnya nilai akreditasi Program Studi Teknik Listrik',
                'baseline' => 'Dokumen Evaluasi diri borang akreditasi 2018',
                'target' => 'Dokumen Evaluasi diri borang akreditasi 2020',
            ),
            299 => 
            array (
                'id_indikator' => 2412,
                'id_kegiatan' => 1204,
            'indikator' => 'Peserta Lomba (orang)',
                'baseline' => '0',
                'target' => '30',
            ),
            300 => 
            array (
                'id_indikator' => 2413,
                'id_kegiatan' => 1204,
            'indikator' => 'Peserta seminar (orang)',
                'baseline' => '0',
                'target' => '30',
            ),
            301 => 
            array (
                'id_indikator' => 2414,
                'id_kegiatan' => 1204,
                'indikator' => 'Produk yang dipamerkan',
                'baseline' => '40',
                'target' => '50',
            ),
            302 => 
            array (
                'id_indikator' => 2416,
                'id_kegiatan' => 1205,
                'indikator' => 'Jumlah tempat magang Prodi MST Teknik Telekomunikasi',
                'baseline' => '2',
                'target' => '5',
            ),
            303 => 
            array (
                'id_indikator' => 2418,
                'id_kegiatan' => 1208,
                'indikator' => 'Jumlah publikasi ilmiah mahasiswa Magister Terapan Teknik Telekomunikasi',
                'baseline' => '2',
                'target' => '10',
            ),
            304 => 
            array (
                'id_indikator' => 2419,
                'id_kegiatan' => 1209,
                'indikator' => 'Jumlah Penerimaan PNBP Polines',
                'baseline' => 'Rp.  31.168.000.000',
                'target' => 'Rp.  32.690.039.000',
            ),
            305 => 
            array (
                'id_indikator' => 2421,
                'id_kegiatan' => 1210,
                'indikator' => 'Dokumen usulan program dan anggaran tahun 2021',
                'baseline' => '1',
                'target' => '1',
            ),
            306 => 
            array (
                'id_indikator' => 2422,
                'id_kegiatan' => 1210,
                'indikator' => 'Data dukung berupa rencana kegiatan untuk anggaran tahun 2021',
                'baseline' => '1',
                'target' => '1',
            ),
            307 => 
            array (
                'id_indikator' => 2423,
                'id_kegiatan' => 1211,
                'indikator' => 'Jumlah tim yang mengikuti kejuaraan',
                'baseline' => '10',
                'target' => '10',
            ),
            308 => 
            array (
                'id_indikator' => 2424,
                'id_kegiatan' => 1207,
                'indikator' => 'Dokumen VMTS',
                'baseline' => '0',
                'target' => '1',
            ),
            309 => 
            array (
                'id_indikator' => 2425,
                'id_kegiatan' => 1207,
                'indikator' => 'Instrumen survey layanan manajemen',
                'baseline' => '0',
                'target' => '1',
            ),
            310 => 
            array (
                'id_indikator' => 2426,
                'id_kegiatan' => 1207,
                'indikator' => 'Instumen survey layanan pendidikan',
                'baseline' => '0',
                'target' => '1',
            ),
            311 => 
            array (
                'id_indikator' => 2427,
                'id_kegiatan' => 1212,
                'indikator' => 'banyaknya praktisi industri yang diundang',
                'baseline' => '0',
                'target' => '1',
            ),
            312 => 
            array (
                'id_indikator' => 2428,
                'id_kegiatan' => 1213,
                'indikator' => 'Buku Pedoman Tugas Akhir, Skripsi, dan Thesis Politeknik Negeri Semarang yang disahkan oleh Senat Akademik Polines',
                'baseline' => '1 Pedoman Umum',
                'target' => '1 Buku Pedoman yang terinci tiap Program Studi dan jenjang pendidikan',
            ),
            313 => 
            array (
                'id_indikator' => 2438,
                'id_kegiatan' => 1218,
                'indikator' => 'Pemeliharaan paten',
                'baseline' => '1',
                'target' => '1',
            ),
            314 => 
            array (
                'id_indikator' => 2439,
                'id_kegiatan' => 1218,
                'indikator' => 'Peningkatan kualitas dan kuantitas HKI',
                'baseline' => '10 Hak Cipta, 0 paten ',
                'target' => '25 Hak cipta, 1 Paten ',
            ),
            315 => 
            array (
                'id_indikator' => 2445,
                'id_kegiatan' => 1221,
                'indikator' => 'Publikasi Ilmiah Internasional',
                'baseline' => '10',
                'target' => '15',
            ),
            316 => 
            array (
                'id_indikator' => 2449,
                'id_kegiatan' => 1222,
                'indikator' => 'Publikasi artikel Ilmiah Internasional',
                'baseline' => '5',
                'target' => '10',
            ),
            317 => 
            array (
                'id_indikator' => 2450,
                'id_kegiatan' => 1222,
                'indikator' => 'Publikasi artikel Ilmiah Nasional',
                'baseline' => '3',
                'target' => '8',
            ),
            318 => 
            array (
                'id_indikator' => 2451,
                'id_kegiatan' => 1222,
                'indikator' => 'Jumlah Sitasi Karya ilmiah',
                'baseline' => '950',
                'target' => '975',
            ),
            319 => 
            array (
                'id_indikator' => 2453,
                'id_kegiatan' => 1129,
                'indikator' => 'Tersedianya Silabus dan RPS matakuliah semeter 1,2 dan 3 pada 5 prodi ',
                'baseline' => '0',
                'target' => '120 mata kuliah',
            ),
            320 => 
            array (
                'id_indikator' => 2456,
                'id_kegiatan' => 1107,
                'indikator' => 'Kerja dengan Industri',
                'baseline' => '10',
                'target' => '15',
            ),
            321 => 
            array (
                'id_indikator' => 2462,
                'id_kegiatan' => 1131,
                'indikator' => 'draft dokumen akreditasi internasional',
                'baseline' => '0',
                'target' => '1',
            ),
            322 => 
            array (
                'id_indikator' => 2463,
                'id_kegiatan' => 1196,
                'indikator' => 'Laporan Hasil Audit bidang SDM',
                'baseline' => '3',
                'target' => '4',
            ),
            323 => 
            array (
                'id_indikator' => 2464,
                'id_kegiatan' => 1225,
                'indikator' => 'Jumlah Penelitian yang bermanfaat bagi industri dan masyarakat',
                'baseline' => '220',
                'target' => '225',
            ),
            324 => 
            array (
                'id_indikator' => 2465,
                'id_kegiatan' => 1179,
                'indikator' => 'Laporan Hasil Audit bidang tata kelola BMN',
                'baseline' => '3',
                'target' => '4',
            ),
            325 => 
            array (
                'id_indikator' => 2466,
                'id_kegiatan' => 1189,
                'indikator' => 'Dokumen monitoring dan evaluasi kegiatan Polines',
                'baseline' => '4 Dokumen',
                'target' => '5 Dokumen',
            ),
            326 => 
            array (
                'id_indikator' => 2467,
                'id_kegiatan' => 1197,
                'indikator' => 'Dokumen Laporan Hasil Pemeriksaan Bidang Keuangan',
                'baseline' => '1 Dokumen',
                'target' => '2 Dokumen',
            ),
            327 => 
            array (
                'id_indikator' => 2469,
                'id_kegiatan' => 1228,
                'indikator' => 'Dokumen Analisis Beban Kerja Tenaga Kependidikan Politeknik Negeri Semarang',
                'baseline' => '1',
                'target' => '1',
            ),
            328 => 
            array (
                'id_indikator' => 2473,
                'id_kegiatan' => 1090,
                'indikator' => 'Laporan Kinerja dan Laporan Evaluasi Diri Pengelola Program Studi ',
                'baseline' => '0',
                'target' => '24 ',
            ),
            329 => 
            array (
                'id_indikator' => 2474,
                'id_kegiatan' => 1090,
                'indikator' => 'Laporan Kinerja dan Laporan Evaluasi Diri Institusi',
                'baseline' => '0',
                'target' => '1',
            ),
            330 => 
            array (
                'id_indikator' => 2475,
                'id_kegiatan' => 1229,
                'indikator' => 'POK Internal',
                'baseline' => '1  Dokumen POI tahun 2019 ',
                'target' => '1 Dokumen POI tahun 2020',
            ),
            331 => 
            array (
                'id_indikator' => 2476,
                'id_kegiatan' => 1229,
                'indikator' => 'POK Internal Revisi',
                'baseline' => '4  Dokumen POI tahun 2019 ',
                'target' => '4 Dokumen POI tahun 2020',
            ),
            332 => 
            array (
                'id_indikator' => 2477,
                'id_kegiatan' => 1229,
                'indikator' => 'Dokumen DIPA Revisi',
                'baseline' => '6 Dokumen DPA Revisi tahun 2019',
                'target' => '4 Dokumen DPA Revisi tahun 2020',
            ),
            333 => 
            array (
                'id_indikator' => 2478,
                'id_kegiatan' => 1230,
                'indikator' => '1.	Jumlah mahasiswa berprestasi Polines',
                'baseline' => '5',
                'target' => '5',
            ),
            334 => 
            array (
                'id_indikator' => 2479,
                'id_kegiatan' => 1230,
                'indikator' => ' 2.	Jumlah mahasiswa berprestasi Nasional',
                'baseline' => '1',
                'target' => '1',
            ),
            335 => 
            array (
                'id_indikator' => 2480,
                'id_kegiatan' => 1231,
                'indikator' => 'Jumlah Mahasiswa Berprestasi  Tingkat Nasional dan Internasional',
                'baseline' => '',
                'target' => '',
            ),
            336 => 
            array (
                'id_indikator' => 2481,
                'id_kegiatan' => 1232,
                'indikator' => 'mahasiswa berprestasi secara Nasional maupun Internasional',
                'baseline' => '',
                'target' => '',
            ),
            337 => 
            array (
                'id_indikator' => 2482,
                'id_kegiatan' => 1232,
                'indikator' => 'mahasiswa berprestasi secara Nasional maupun Internasional',
                'baseline' => '',
                'target' => '',
            ),
            338 => 
            array (
                'id_indikator' => 2483,
                'id_kegiatan' => 1233,
            'indikator' => '1.	Tahap Pra Evaluasi (internal PT) : Administrasi dan kesesuaian dengan pedoman 2.	Tahap I Reviewer Nasional, Administrasi dan kesesuaian dengan pedoman : Kesesuaian bidang, kesegaran topik, unsur kr',
                'baseline' => '',
                'target' => '',
            ),
            339 => 
            array (
                'id_indikator' => 2484,
                'id_kegiatan' => 1234,
                'indikator' => 'Jumlah PKM yang masuk PIMNAS',
                'baseline' => '',
                'target' => '',
            ),
            340 => 
            array (
                'id_indikator' => 2485,
                'id_kegiatan' => 1235,
                'indikator' => 'proposal  lolos secara Nasional maupun Internasional',
                'baseline' => '',
                'target' => '',
            ),
            341 => 
            array (
                'id_indikator' => 2486,
                'id_kegiatan' => 1236,
                'indikator' => '1.	Lolos Evaluasi Awal Tahap I dan II 2.	Ikut Evaluasi Regional  Memperoleh Tiket Kompetisi Regional 3.	Ikut Evaluasi Nasional  Memperoleh Tiket Kompetisi Nasional',
                'baseline' => '',
                'target' => '',
            ),
            342 => 
            array (
                'id_indikator' => 2487,
                'id_kegiatan' => 1237,
                'indikator' => '1.	Jumlah mahasiswa yang mewakili lomba NPEO',
                'baseline' => '',
                'target' => '',
            ),
            343 => 
            array (
                'id_indikator' => 2488,
                'id_kegiatan' => 1237,
                'indikator' => '2.	Jumlah partisipasi mahasiswa dalam kegiatan nasional',
                'baseline' => '',
                'target' => '',
            ),
            344 => 
            array (
                'id_indikator' => 2489,
                'id_kegiatan' => 1238,
                'indikator' => '1.	Jumlah mahasiswa yang mewakili lomba Seleksi NUDC yang diselenggarakan oleh KOPERTIS VI Jawa Tengah',
                'baseline' => '',
                'target' => '',
            ),
            345 => 
            array (
                'id_indikator' => 2490,
                'id_kegiatan' => 1238,
                'indikator' => '2.	Jumlah partisipasi mahasiswa dalam kegiatan nasional',
                'baseline' => '',
                'target' => '',
            ),
            346 => 
            array (
                'id_indikator' => 2492,
                'id_kegiatan' => 1240,
                'indikator' => 'Dokumen hasil evaluasi akademik tahun 2020/2021',
                'baseline' => '1',
                'target' => '1',
            ),
            347 => 
            array (
                'id_indikator' => 2493,
                'id_kegiatan' => 1241,
                'indikator' => 'Tersusunnya kalender akademik',
                'baseline' => '1',
                'target' => '1',
            ),
            348 => 
            array (
                'id_indikator' => 2494,
                'id_kegiatan' => 1242,
                'indikator' => 'Terevaluasinya kepuasan layanan dosen terhadap mahasiswa ',
                'baseline' => '1',
                'target' => '1',
            ),
            349 => 
            array (
                'id_indikator' => 2495,
                'id_kegiatan' => 1243,
                'indikator' => 'Terlaksananya kegiatan temu akademik dengan ormawa',
                'baseline' => '1',
                'target' => '1',
            ),
            350 => 
            array (
                'id_indikator' => 2496,
                'id_kegiatan' => 1244,
                'indikator' => 'Jumlah mahasiswa yang bermasalah mengikuti kegiatan Peningkatan Layanan Mahasiswa Melalui Penyuluhan Bimbingan dan Konseling',
                'baseline' => '150',
                'target' => '100',
            ),
            351 => 
            array (
                'id_indikator' => 2497,
                'id_kegiatan' => 1245,
                'indikator' => 'Indeks Kepuasan Layanan',
                'baseline' => '0',
                'target' => '60%',
            ),
            352 => 
            array (
                'id_indikator' => 2498,
                'id_kegiatan' => 1246,
                'indikator' => 'Jumlah partisipasi dan prestasi mahasiswa dalam kegiatan ilmiah nasional dan internasional',
                'baseline' => '22 kegiatan delegasi',
                'target' => '25 kegiatan delegasi',
            ),
            353 => 
            array (
                'id_indikator' => 2499,
                'id_kegiatan' => 1195,
                'indikator' => 'Nilai Akreditasi Prodi Sarjana Terapan Teknik Telekomunikasi',
                'baseline' => 'B',
                'target' => 'A',
            ),
            354 => 
            array (
                'id_indikator' => 2500,
                'id_kegiatan' => 1247,
                'indikator' => 'Mahasiswa yang mengikuti pengukuran / sertifikasi TOEIC sebanyak 1650 orang.',
                'baseline' => '473',
                'target' => '550',
            ),
            355 => 
            array (
                'id_indikator' => 2505,
                'id_kegiatan' => 1249,
                'indikator' => 'Mahasiswa yang mengikuti TEP sebanyak 1650',
                'baseline' => '425',
                'target' => '450',
            ),
            356 => 
            array (
                'id_indikator' => 2507,
                'id_kegiatan' => 1250,
                'indikator' => 'Jumlah dosen yang mengikuti peningkatan kompetensi public speaking',
                'baseline' => '0',
                'target' => '20',
            ),
            357 => 
            array (
                'id_indikator' => 2508,
                'id_kegiatan' => 1251,
                'indikator' => 'Jumlah Sistem Informasi Laporan Kinerja yang terintegrasi',
                'baseline' => '0',
                'target' => '1 sistem informasi',
            ),
            358 => 
            array (
                'id_indikator' => 2509,
                'id_kegiatan' => 1133,
                'indikator' => 'Dokumen kinerja dan Evaluasi Diri Prodi Akuntansi Manajerial',
                'baseline' => '0',
                'target' => '1',
            ),
            359 => 
            array (
                'id_indikator' => 2510,
                'id_kegiatan' => 1252,
            'indikator' => '9 orang juara (1,2, dan 3) dari 3 kategori : Speech, Storytelling dan News Casting',
                'baseline' => '0',
                'target' => '9',
            ),
            360 => 
            array (
                'id_indikator' => 2511,
                'id_kegiatan' => 1134,
            'indikator' => 'Dokumen akreditasi prodi  KA (pengukuran Kinerja dan Evaluasi diri) siap kirim  ',
                'baseline' => '0',
                'target' => '1 set dokumen Akreditasi siap kirim',
            ),
            361 => 
            array (
                'id_indikator' => 2512,
                'id_kegiatan' => 1223,
                'indikator' => 'Dokumen akreditasi prodi PS  siap kirim',
                'baseline' => '0',
                'target' => '1 set dokumen Akreditasi siap kirim',
            ),
            362 => 
            array (
                'id_indikator' => 2519,
                'id_kegiatan' => 1256,
                'indikator' => 'MoU antara Polines dan Industri terkait prodi',
                'baseline' => '6 MoU',
                'target' => '8 MoU',
            ),
            363 => 
            array (
                'id_indikator' => 2525,
                'id_kegiatan' => 1260,
                'indikator' => 'Jumlah mahasiswa 8 orang',
                'baseline' => '8',
                'target' => '8',
            ),
            364 => 
            array (
                'id_indikator' => 2527,
                'id_kegiatan' => 1262,
                'indikator' => 'Mahasiswa dapat memperoleh pengalaman dan prestasi dalam pertandingan, untuk target perolehan medali',
                'baseline' => '5',
                'target' => '5',
            ),
            365 => 
            array (
                'id_indikator' => 2528,
                'id_kegiatan' => 1094,
            'indikator' => 'Indek Kepuasan Stake holders ( Industri)',
                'baseline' => 'Skill; Pengetahuan dan Sikap Tergolong Baik',
                'target' => 'Skill; Pengetahuan dan Sikap Tergolong Sangat Baik',
            ),
            366 => 
            array (
                'id_indikator' => 2529,
                'id_kegiatan' => 1263,
                'indikator' => 'Alat Pemantau Konsumsi Daya Listrik DIgital',
                'baseline' => '23',
                'target' => '33',
            ),
            367 => 
            array (
                'id_indikator' => 2531,
                'id_kegiatan' => 1265,
                'indikator' => '1.	Jumlah perlombaan dan kompetisi ',
                'baseline' => '2',
                'target' => '2',
            ),
            368 => 
            array (
                'id_indikator' => 2532,
                'id_kegiatan' => 1265,
                'indikator' => '2.	Prestasi juara lomba',
                'baseline' => '2',
                'target' => '2',
            ),
            369 => 
            array (
                'id_indikator' => 2534,
                'id_kegiatan' => 1267,
                'indikator' => '1.	Tersusunnya buku pedoman kompetensi inovasi teknologi bidang teknik dan tata niaga. ',
                'baseline' => '',
                'target' => '',
            ),
            370 => 
            array (
                'id_indikator' => 2535,
                'id_kegiatan' => 1267,
                'indikator' => '2.	Dihasilkannya karya inovatif teknologi mahasiswa yang dapat diterapkan langsung untuk kepentingan dan kesejahteraan',
                'baseline' => '',
                'target' => '',
            ),
            371 => 
            array (
                'id_indikator' => 2537,
                'id_kegiatan' => 1269,
            'indikator' => 'Proposal Lomba Mahasiswa (Komurindo)',
                'baseline' => '2',
                'target' => '2',
            ),
            372 => 
            array (
                'id_indikator' => 2538,
                'id_kegiatan' => 1271,
                'indikator' => '1.	Jumlah kelompok KWU yang didanai ',
                'baseline' => '20',
                'target' => '20',
            ),
            373 => 
            array (
                'id_indikator' => 2539,
                'id_kegiatan' => 1271,
                'indikator' => '2.	Jumlah mahasiswa yang melakukan wirausaha',
                'baseline' => '60',
                'target' => '60',
            ),
            374 => 
            array (
                'id_indikator' => 2543,
                'id_kegiatan' => 1273,
                'indikator' => 'Jobsheet praktek',
                'baseline' => '',
                'target' => 'Semester 1 dan 3',
            ),
            375 => 
            array (
                'id_indikator' => 2555,
                'id_kegiatan' => 1140,
                'indikator' => 'Jumlah PT Peserta Lomba ',
                'baseline' => '0',
                'target' => '10 ',
            ),
            376 => 
            array (
                'id_indikator' => 2556,
                'id_kegiatan' => 1150,
                'indikator' => 'Jumlah mahasiswa berprestasi Nasional',
                'baseline' => '6',
                'target' => '8',
            ),
            377 => 
            array (
                'id_indikator' => 2559,
                'id_kegiatan' => 1138,
                'indikator' => '1. Jumlah vidio profil Jurusan Akuntansi',
                'baseline' => '0',
                'target' => '1 buah',
            ),
            378 => 
            array (
                'id_indikator' => 2560,
                'id_kegiatan' => 1138,
                'indikator' => 'jumlah  exemplar profil Jurusan Akuntansi yang dicetak',
                'baseline' => '0',
                'target' => '100 eks',
            ),
            379 => 
            array (
                'id_indikator' => 2561,
                'id_kegiatan' => 1138,
                'indikator' => 'Jumlah media informasi dan sosialisasi penguat budaya Akademik  Jurusan',
                'baseline' => '0',
                'target' => '10 set',
            ),
            380 => 
            array (
                'id_indikator' => 2562,
                'id_kegiatan' => 1138,
                'indikator' => 'Jumlah event yang dipublikasikan di media publikasi  cetak/online',
                'baseline' => '0',
                'target' => '10',
            ),
            381 => 
            array (
                'id_indikator' => 2563,
                'id_kegiatan' => 1138,
                'indikator' => ' GKM kebersihan yang terbentuk',
                'baseline' => '0',
                'target' => '4 buah GKM ( Dosen, Laboran, Mahasiswa dan  Pembantu Umum',
                ),
                382 => 
                array (
                    'id_indikator' => 2564,
                    'id_kegiatan' => 1141,
                    'indikator' => 'jumlah peserta Seminar & Workshop',
                    'baseline' => ' 0',
                    'target' => '80 orang',
                ),
                383 => 
                array (
                    'id_indikator' => 2565,
                    'id_kegiatan' => 1141,
                    'indikator' => 'Jumlah pembicara dari  Industri',
                    'baseline' => '2',
                    'target' => '2',
                ),
                384 => 
                array (
                    'id_indikator' => 2566,
                    'id_kegiatan' => 1141,
                    'indikator' => 'Jumlah Peserta dari PT lain',
                    'baseline' => '0',
                    'target' => '5 buah',
                ),
                385 => 
                array (
                    'id_indikator' => 2567,
                    'id_kegiatan' => 1149,
                    'indikator' => 'Dokumen Data Alumni Jurusan Akuntansi Tahun 2016 sd 2019',
                    'baseline' => '0',
                    'target' => '1 set dokumen lengkap',
                ),
                386 => 
                array (
                    'id_indikator' => 2568,
                    'id_kegiatan' => 1149,
                    'indikator' => 'Jumlah peserta dalam temu Alumni ',
                    'baseline' => '0',
                    'target' => '150 orang',
                ),
                387 => 
                array (
                    'id_indikator' => 2569,
                    'id_kegiatan' => 1146,
                    'indikator' => 'Jumlah Jurnal yang terindeks nasional',
                    'baseline' => '0',
                    'target' => '1 Jurnal',
                ),
                388 => 
                array (
                    'id_indikator' => 2570,
                    'id_kegiatan' => 1146,
                    'indikator' => 'Jumlah Jurnal  ber E-ISSN d',
                    'baseline' => '1',
                    'target' => '3 Jurnal',
                ),
                389 => 
                array (
                    'id_indikator' => 2571,
                    'id_kegiatan' => 1080,
                    'indikator' => 'Output : Sosialisasi dan Laporan E-SPT PPh . 21',
                    'baseline' => '516 pegawai',
                    'target' => '496 pegawai',
                ),
                390 => 
                array (
                    'id_indikator' => 2572,
                    'id_kegiatan' => 1080,
                    'indikator' => 'Outcome : Laporan E-SPT Tahunan PPh.21',
                    'baseline' => '496 pegawai',
                    'target' => '570 pegawai',
                ),
                391 => 
                array (
                    'id_indikator' => 2573,
                    'id_kegiatan' => 1081,
                    'indikator' => 'Laporan Keuangan semester I TA 2020',
                    'baseline' => '2 Laporan Keuangan dari 2 DIPA',
                    'target' => '2 Laporan Keuangan dari 2 DIPA',
                ),
                392 => 
                array (
                    'id_indikator' => 2574,
                    'id_kegiatan' => 1081,
                    'indikator' => 'Laporan Keuangan TA 2020',
                    'baseline' => '2 Laporan Keuangan dari 2 DIPA',
                    'target' => '2 Laporan Keuangan dari 2 DIPA',
                ),
                393 => 
                array (
                    'id_indikator' => 2575,
                    'id_kegiatan' => 1084,
                    'indikator' => 'Peserta tersosialisasi Peraturan keuangan terbaru dan penggunaan BAS',
                    'baseline' => '27 Peserta Tersosialisasi di Tahun 2019',
                    'target' => '35 Peserta Tersosialisasi di Tahun 2020',
                ),
                394 => 
                array (
                    'id_indikator' => 2576,
                    'id_kegiatan' => 1043,
                    'indikator' => 'Dokumen Polines Dalam Angka Tahun 2020',
                    'baseline' => 'Dokumen PDA Tahun 2019',
                'target' => 'Dokumen  Polines  Dalam  Angka (PDA)  di tahun 2020',
                ),
                395 => 
                array (
                    'id_indikator' => 2582,
                    'id_kegiatan' => 1030,
                'indikator' => 'Dokumen Tracer Study (jumlah lulusan yang terdata dalam sistem penelusuran lulusan/ tracer study)',
                    'baseline' => '355 org lulusan',
                    'target' => '1343 lulusan',
                ),
                396 => 
                array (
                    'id_indikator' => 2583,
                    'id_kegiatan' => 1030,
                'indikator' => 'waktu tunggu 0 (nol) bulan, jumlah alumni yang langsung bekerja',
                    'baseline' => '189 org lulusan',
                    'target' => '500 org lulusan',
                ),
                397 => 
                array (
                    'id_indikator' => 2584,
                    'id_kegiatan' => 1030,
                    'indikator' => 'Alumni yang langsung bekerja sesuai bidangnya',
                    'baseline' => '100 org lulusan',
                    'target' => '500 org lulusan',
                ),
                398 => 
                array (
                    'id_indikator' => 2586,
                    'id_kegiatan' => 1280,
                    'indikator' => 'Jumlah mahasiswa yang melakukan wirausaha',
                    'baseline' => '',
                    'target' => '',
                ),
                399 => 
                array (
                    'id_indikator' => 2587,
                    'id_kegiatan' => 1083,
                    'indikator' => '1. Laporan Monitoring serapan anggaran semester I TA 2020',
                    'baseline' => '1 laporan th 2019',
                    'target' => '1 laporan 2020',
                ),
                400 => 
                array (
                    'id_indikator' => 2588,
                    'id_kegiatan' => 1083,
                    'indikator' => '2. Laporan Monitoring serapan anggaran semester II TA 2020',
                    'baseline' => '1 laporan th 2019',
                    'target' => '1 laporan 2020',
                ),
                401 => 
                array (
                    'id_indikator' => 2589,
                    'id_kegiatan' => 1083,
                    'indikator' => '3. Laporan monitoring serapan anggaran per Unit Jurusan Bagian dalam bentuk charta selama TA 2020',
                    'baseline' => '0',
                    'target' => '1 laporan 2020',
                ),
                402 => 
                array (
                    'id_indikator' => 2590,
                    'id_kegiatan' => 1184,
                    'indikator' => 'Pengadaan E-Jurnal',
                    'baseline' => '2 Paket',
                    'target' => '2 Paket',
                ),
                403 => 
                array (
                    'id_indikator' => 2591,
                    'id_kegiatan' => 1281,
                    'indikator' => '1.	Jumlah mahasiswa tersosialisasi Kwu dan KBMI',
                    'baseline' => '150 mhs',
                    'target' => '150 mhs',
                ),
                404 => 
                array (
                    'id_indikator' => 2592,
                    'id_kegiatan' => 1281,
                    'indikator' => ' 2.	Jumlah mahasiswa KWU dan KBMI terseleksi  ',
                    'baseline' => '25',
                    'target' => '50',
                ),
                405 => 
                array (
                    'id_indikator' => 2593,
                    'id_kegiatan' => 1281,
                    'indikator' => '3.	Jumlah Mahasiswa peserta expo KMI nasional ',
                    'baseline' => '5',
                    'target' => '6',
                ),
                406 => 
                array (
                    'id_indikator' => 2594,
                    'id_kegiatan' => 1281,
                    'indikator' => '4.	Jumlah mahasiswa yang berwirausaha',
                    'baseline' => '40',
                    'target' => '50',
                ),
                407 => 
                array (
                    'id_indikator' => 2595,
                    'id_kegiatan' => 1282,
                    'indikator' => 'ikut lomba tingkat nasional',
                    'baseline' => '',
                    'target' => '',
                ),
                408 => 
                array (
                    'id_indikator' => 2597,
                    'id_kegiatan' => 1130,
                    'indikator' => 'Dokumen Evaluasi diri dan Kinerja Jurusan tahun 2017 sd 2019',
                    'baseline' => '0',
                    'target' => '1 set dokumen',
                ),
                409 => 
                array (
                    'id_indikator' => 2600,
                    'id_kegiatan' => 1283,
                    'indikator' => '1. Tersusunnya dokumen renstra jurbagnitpus yang SMART',
                    'baseline' => '0',
                    'target' => '16 Renstra Jurbagnitpus',
                ),
                410 => 
                array (
                    'id_indikator' => 2601,
                    'id_kegiatan' => 1284,
                    'indikator' => '1. Tersusunnya dokumen RENOP 2020-2024',
                    'baseline' => 'o dokumen',
                    'target' => '1 Dokumen RENOP Polines',
                ),
                411 => 
                array (
                    'id_indikator' => 2602,
                    'id_kegiatan' => 1285,
                    'indikator' => 'Jumlah mahasiswa/lulusan dari program kerjasama dengan mitra perguruan tinggi  asing',
                    'baseline' => '6 mahasiswa inbound 6 mahasiswa outbod',
                    'target' => '14 mmahasiswa inbound dan 14 mahasiswa outbond',
                ),
                412 => 
                array (
                    'id_indikator' => 2606,
                    'id_kegiatan' => 1286,
                    'indikator' => 'jumlah kelas join degree kerjasama dengan PT Asing',
                    'baseline' => '0 kelas',
                    'target' => '1 kelas',
                ),
                413 => 
                array (
                    'id_indikator' => 2607,
                    'id_kegiatan' => 1287,
                    'indikator' => 'Jumlah produk inovatif kreatif  dihilirisasi',
                    'baseline' => '0 produk',
                    'target' => '1 produk',
                ),
                414 => 
                array (
                    'id_indikator' => 2608,
                    'id_kegiatan' => 1288,
                    'indikator' => 'jumlah dosen  politeknik dari industri',
                    'baseline' => '2 orang',
                    'target' => '5 orang',
                ),
                415 => 
                array (
                    'id_indikator' => 2612,
                    'id_kegiatan' => 1135,
                    'indikator' => 'Tambahan Jumlah Modul ber ISBN di Tahun 2020',
                    'baseline' => '',
                    'target' => '18',
                ),
                416 => 
                array (
                    'id_indikator' => 2613,
                    'id_kegiatan' => 1135,
                    'indikator' => 'Jumlah Modul Ber ISBN ',
                    'baseline' => '8',
                    'target' => '26',
                ),
                417 => 
                array (
                    'id_indikator' => 2622,
                    'id_kegiatan' => 1075,
                    'indikator' => 'Penambahan Modul',
                    'baseline' => '',
                    'target' => '',
                ),
                418 => 
                array (
                    'id_indikator' => 2625,
                    'id_kegiatan' => 1171,
                    'indikator' => 'Prosentase Lulusan Bersertifikat Profesi',
                    'baseline' => '40%',
                    'target' => '45%',
                ),
                419 => 
                array (
                    'id_indikator' => 2628,
                    'id_kegiatan' => 1172,
                    'indikator' => '	jumlah Publikasi Nasional',
                    'baseline' => '12 publikasi',
                    'target' => '15 publikasi',
                ),
                420 => 
                array (
                    'id_indikator' => 2636,
                    'id_kegiatan' => 1291,
                    'indikator' => 'jumlah mahasiswa kerjasama dengan prodil lain dalam negeri',
                    'baseline' => '6 mhsw outbond 10 mhsw inbound',
                    'target' => '12 mahasiswa outpund 2 mhsw inbound',
                ),
                421 => 
                array (
                    'id_indikator' => 2637,
                    'id_kegiatan' => 1150,
                    'indikator' => 'Jumlah Proposal Wirausaha',
                    'baseline' => '10',
                    'target' => '20',
                ),
                422 => 
                array (
                    'id_indikator' => 2638,
                    'id_kegiatan' => 1150,
                    'indikator' => 'Jumlah Proposal PKM',
                    'baseline' => '5',
                    'target' => '20',
                ),
                423 => 
                array (
                    'id_indikator' => 2639,
                    'id_kegiatan' => 1292,
                    'indikator' => 'jumlah industri dan instansi pemerintah memberikan bantuan hibah kerjasama',
                    'baseline' => '5 MOU',
                    'target' => '5 MOA dan PKS',
                ),
                424 => 
                array (
                    'id_indikator' => 2642,
                    'id_kegiatan' => 1157,
                    'indikator' => 'Dokumen evaluasi diri ',
                    'baseline' => '1 dokumen th 2015',
                    'target' => '1 dokumen tahun 2020',
                ),
                425 => 
                array (
                    'id_indikator' => 2643,
                    'id_kegiatan' => 1159,
                    'indikator' => 'Dokumen evaluasi diri ',
                    'baseline' => '1 dokumen th 2016',
                    'target' => '1 dokumen tahun 2020',
                ),
                426 => 
                array (
                    'id_indikator' => 2644,
                    'id_kegiatan' => 1160,
                    'indikator' => 'Dokumen evaluasi diri ',
                    'baseline' => '1 dokumen th 2016',
                    'target' => '1 dokumen tahun 2020',
                ),
                427 => 
                array (
                    'id_indikator' => 2645,
                    'id_kegiatan' => 1161,
                    'indikator' => 'Dokumen evaluasi diri ',
                    'baseline' => '1 dokumen th 2016',
                    'target' => '1 dokumen tahun 2020',
                ),
                428 => 
                array (
                    'id_indikator' => 2646,
                    'id_kegiatan' => 1290,
                    'indikator' => 'Dokumen Borang Akreditasi',
                    'baseline' => '1 dokumen akreditasi 2016',
                    'target' => '1 dokumen akrditasi 2021',
                ),
                429 => 
                array (
                    'id_indikator' => 2647,
                    'id_kegiatan' => 1163,
                    'indikator' => 'Dokumen Penetapan bahan kajian semester 3 dan 4',
                    'baseline' => '0 dokumen',
                    'target' => '1 dokumen',
                ),
                430 => 
                array (
                    'id_indikator' => 2648,
                    'id_kegiatan' => 1163,
                    'indikator' => 'Dokumen penetapan mata kuliah dan RPS semester 1 dan 2',
                    'baseline' => '0 dokumen',
                    'target' => '1 dokumen',
                ),
                431 => 
                array (
                    'id_indikator' => 2649,
                    'id_kegiatan' => 1167,
                    'indikator' => 'Dokumen Penetapan Bahan Kajian Semester 3 dan 4',
                    'baseline' => '0 dokumen',
                    'target' => '1 dokumen',
                ),
                432 => 
                array (
                    'id_indikator' => 2650,
                    'id_kegiatan' => 1167,
                    'indikator' => 'Dokumen penetapan mata kuliah dan RPS semester 1 dan 2',
                    'baseline' => '0 dokumen',
                    'target' => '1 dokumen',
                ),
                433 => 
                array (
                    'id_indikator' => 2651,
                    'id_kegiatan' => 1169,
                    'indikator' => 'Dokumen penyamaan materi pembelajaran semester gasal',
                    'baseline' => '0 dokumen',
                    'target' => '1 dokumen',
                ),
                434 => 
                array (
                    'id_indikator' => 2652,
                    'id_kegiatan' => 1172,
                    'indikator' => 'Jumlah peserta seminar',
                    'baseline' => '100 orang',
                    'target' => '100 orang',
                ),
                435 => 
                array (
                    'id_indikator' => 2653,
                    'id_kegiatan' => 1173,
                    'indikator' => 'Dokumen RKT Jurusan Sipil',
                    'baseline' => '1 dokumen th 2019',
                    'target' => '1 dokumen th 2020',
                ),
                436 => 
                array (
                    'id_indikator' => 2654,
                    'id_kegiatan' => 1180,
                    'indikator' => 'Dokumen keg GKM JCI',
                    'baseline' => '1 dokumen th 2019',
                    'target' => '1 dokumen tahun 2020',
                ),
                437 => 
                array (
                    'id_indikator' => 2655,
                    'id_kegiatan' => 1096,
                    'indikator' => 'SOP Menpan RB untuk mendukung SPMI sekaligus melengkapi SOP yang secara realistis diterapkan di Polines.',
                    'baseline' => '0 %',
                    'target' => '50 %',
                ),
                438 => 
                array (
                    'id_indikator' => 2656,
                    'id_kegiatan' => 1096,
                    'indikator' => 'Dokumen SPMI Polines Perbaikan',
                    'baseline' => '0',
                    'target' => '1',
                ),
                439 => 
                array (
                    'id_indikator' => 2657,
                    'id_kegiatan' => 1096,
                    'indikator' => 'Jumlah Prodi Terakreditasi Uanggul A',
                    'baseline' => '10',
                    'target' => '13',
                ),
                440 => 
                array (
                    'id_indikator' => 2660,
                    'id_kegiatan' => 1078,
                    'indikator' => 'Terwujudnya Buku Pedoman Keuangan Tahun 2021 ke setiap Jur/Bag/Unit',
                    'baseline' => 'Pembagian 70 Buku Pedoman Keuangan dan Standar Biaya Tahun 2020',
                    'target' => 'Terwujudnya 80 Buku Pedoman Keuangan dan Standar Biaya Tahun 2021',
                ),
                441 => 
                array (
                    'id_indikator' => 2662,
                    'id_kegiatan' => 1046,
                    'indikator' => 'Bertambahnya jumlah kerjasama internasional',
                    'baseline' => '30',
                    'target' => '34',
                ),
                442 => 
                array (
                    'id_indikator' => 2663,
                    'id_kegiatan' => 1046,
                    'indikator' => 'Jumlah Peserta ',
                    'baseline' => '0',
                    'target' => '35',
                ),
                443 => 
                array (
                    'id_indikator' => 2664,
                    'id_kegiatan' => 1046,
                    'indikator' => 'Jumlah negara peserta/asal negara peserta',
                    'baseline' => '0',
                    'target' => '4',
                ),
                444 => 
                array (
                    'id_indikator' => 2666,
                    'id_kegiatan' => 1049,
                    'indikator' => 'jumlah dosen luar negeri yang mengajar dalam kegiatan internasional',
                    'baseline' => '15',
                    'target' => '18',
                ),
                445 => 
                array (
                    'id_indikator' => 2667,
                    'id_kegiatan' => 1049,
                    'indikator' => 'Kurikulum untuk prodi dengan kelas internasional',
                    'baseline' => '4',
                    'target' => '5',
                ),
                446 => 
                array (
                    'id_indikator' => 2669,
                    'id_kegiatan' => 1050,
                    'indikator' => 'rancangan kegiatan internasional yang melibatkan mahasiswa asing di Polines',
                    'baseline' => '3',
                    'target' => '4',
                ),
                447 => 
                array (
                    'id_indikator' => 2671,
                    'id_kegiatan' => 1188,
                    'indikator' => 'Jmlah mahasiswa yang  tersertifikasi dari BNSP',
                    'baseline' => '400',
                    'target' => '800',
                ),
                448 => 
                array (
                    'id_indikator' => 2674,
                    'id_kegiatan' => 1077,
                    'indikator' => 'Tersosialisasinya Laporan Serapan Anggaran dengan sumber dana Rupiah Murni,BOPTN dan PNBP Tahun 2020 Semester I sebagai bahan evaluasi',
                    'baseline' => 'Sebelumnya belum ada sosialisasi laporan serapan',
                    'target' => '35 Peserta tersosialisasi Laporan Serapan Anggaran Semester I Tahun 2020',
                ),
                449 => 
                array (
                    'id_indikator' => 2675,
                    'id_kegiatan' => 1052,
                    'indikator' => 'Buku Profil Polines Dalam Bahasa Inggris',
                    'baseline' => '0',
                    'target' => '250 eks',
                ),
                450 => 
                array (
                    'id_indikator' => 2676,
                    'id_kegiatan' => 1052,
                    'indikator' => 'Website Unit Urusan Internasional yang sudah diupdate',
                    'baseline' => '1',
                'target' => '1 (terupdate)',
                ),
                451 => 
                array (
                    'id_indikator' => 2677,
                    'id_kegiatan' => 1293,
                    'indikator' => 'Manual Book Standar Sistem Manajemen Keamanan Informasi ISO 27001',
                    'baseline' => '0',
                    'target' => '1',
                ),
                452 => 
                array (
                    'id_indikator' => 2678,
                    'id_kegiatan' => 1053,
                    'indikator' => 'pedoman pembuatan dokumen kerjasama internasional',
                    'baseline' => '0',
                    'target' => '1 dokumen',
                ),
                453 => 
                array (
                    'id_indikator' => 2679,
                    'id_kegiatan' => 1053,
                    'indikator' => 'SOP kegiatan internasional',
                    'baseline' => '0',
                    'target' => '1 dokumen',
                ),
                454 => 
                array (
                    'id_indikator' => 2680,
                    'id_kegiatan' => 1053,
                    'indikator' => 'Buku pedoman',
                    'baseline' => '0',
                    'target' => '50 eks',
                ),
                455 => 
                array (
                    'id_indikator' => 2684,
                    'id_kegiatan' => 1295,
                    'indikator' => 'sasaran mutu upt tik 2020-2021',
                    'baseline' => '1',
                    'target' => '1',
                ),
                456 => 
                array (
                    'id_indikator' => 2685,
                    'id_kegiatan' => 1295,
                    'indikator' => 'Rencana kegiatan kerja',
                    'baseline' => '0',
                    'target' => '7',
                ),
                457 => 
                array (
                    'id_indikator' => 2686,
                    'id_kegiatan' => 1190,
                    'indikator' => 'Jumlah asesor kompetensi yang aktif',
                    'baseline' => '56',
                    'target' => '76',
                ),
                458 => 
                array (
                    'id_indikator' => 2687,
                    'id_kegiatan' => 1194,
                    'indikator' => 'Jumlah asesor kompetensi aktif',
                    'baseline' => '96',
                    'target' => '116',
                ),
                459 => 
                array (
                    'id_indikator' => 2688,
                    'id_kegiatan' => 1248,
                'indikator' => 'Mahasiswa yang mengikuti pelatihan profisiensi (TOEIC) adalah seluruh mahasiswa tingkat akhir TA 2019/2020 sejumlah 1650 orang',
                    'baseline' => '480',
                    'target' => '500',
                ),
                460 => 
                array (
                    'id_indikator' => 2689,
                    'id_kegiatan' => 1129,
                'indikator' => 'Tersedianya perangkat pembelajaran (silabus dan RPS) untuk mata kuliah di semester 1,2 dan 3 ',
                    'baseline' => '0',
                    'target' => '120 set perangkat pembelajaran',
                ),
                461 => 
                array (
                    'id_indikator' => 2690,
                    'id_kegiatan' => 1129,
                    'indikator' => 'Terbitnya SK Direktur tentang Kurikulum KKNI tahun 2020 bagi Jurusan Akuntansi',
                    'baseline' => '0',
                    'target' => '1 set ',
                ),
                462 => 
                array (
                    'id_indikator' => 2691,
                    'id_kegiatan' => 1144,
                    'indikator' => 'Jumlah pertemuah ilmiah KBK per tahun',
                    'baseline' => '3',
                    'target' => '6',
                ),
                463 => 
                array (
                    'id_indikator' => 2692,
                    'id_kegiatan' => 1144,
                    'indikator' => 'Jumlah artikel ilmiah yang disubmit di jurnal terindeks nasional  oleh forum KBK',
                    'baseline' => '0',
                    'target' => '6',
                ),
                464 => 
                array (
                    'id_indikator' => 2694,
                    'id_kegiatan' => 1038,
                    'indikator' => 'Jumlah Pedoman Kerjasama',
                'baseline' => '1 pedoman (tahun 2016, seperti yang dijelaskan di latar belakang)',
                'target' => '1 pedoman (tahun 2020)',
                ),
                465 => 
                array (
                    'id_indikator' => 2695,
                    'id_kegiatan' => 1034,
                    'indikator' => 'Prestasi mahasiswa yang mengkuti kompetisi Nasional atau Internasional',
                    'baseline' => '15',
                    'target' => '10',
                ),
                466 => 
                array (
                    'id_indikator' => 2696,
                    'id_kegiatan' => 1050,
                    'indikator' => 'Universitas mitra yang melakukan kegiatan kolaborasi',
                    'baseline' => '0 universitas',
                    'target' => '3 universitas',
                ),
                467 => 
                array (
                    'id_indikator' => 2697,
                    'id_kegiatan' => 1140,
                    'indikator' => 'Jumlah jenis kompetensi yang dilombakan',
                    'baseline' => '0',
                    'target' => '3',
                ),
                468 => 
                array (
                    'id_indikator' => 2698,
                    'id_kegiatan' => 1140,
                    'indikator' => '',
                    'baseline' => '',
                    'target' => '',
                ),
                469 => 
                array (
                    'id_indikator' => 2699,
                    'id_kegiatan' => 1087,
                    'indikator' => 'Server Monitoring dan Peringatan Dini',
                    'baseline' => '0',
                    'target' => '1',
                ),
                470 => 
                array (
                    'id_indikator' => 2701,
                    'id_kegiatan' => 1294,
                    'indikator' => 'Buku Petunjuk Manajemen Layanan',
                    'baseline' => '0',
                    'target' => '1',
                ),
                471 => 
                array (
                    'id_indikator' => 2704,
                    'id_kegiatan' => 1268,
                    'indikator' => 'Akreditasi Prodi  Prodi Sarjana Terapan Teknologi Rekayasa Pembangki Energi',
                    'baseline' => 'Belum Terakreditasi',
                    'target' => 'Target B',
                ),
                472 => 
                array (
                    'id_indikator' => 2705,
                    'id_kegiatan' => 1165,
                    'indikator' => 'Jumlah arsip yang telah direkonstruksi',
                    'baseline' => '6 m3 ',
                    'target' => '12 m3 arsip',
                ),
                473 => 
                array (
                    'id_indikator' => 2707,
                    'id_kegiatan' => 1178,
                    'indikator' => 'Memutakhirkan data arsip dinamis di record center',
                    'baseline' => '100 berkas',
                    'target' => '400 berkas',
                ),
                474 => 
                array (
                    'id_indikator' => 2708,
                    'id_kegiatan' => 1132,
                    'indikator' => 'Jumlah tambahan mata kuliah menggunakan E-learning tahun 2020',
                    'baseline' => '',
                    'target' => '18 mata kuliah',
                ),
                475 => 
                array (
                    'id_indikator' => 2709,
                    'id_kegiatan' => 1132,
                    'indikator' => 'Mata kuliah menggunakan E-learning tahun 2020',
                    'baseline' => '18',
                    'target' => '36 mata kuliah',
                ),
                476 => 
                array (
                    'id_indikator' => 2710,
                    'id_kegiatan' => 1139,
                    'indikator' => 'Tambahan Jumlah dokumen kurikulum prodi Analis Keuangan ',
                    'baseline' => '',
                    'target' => '1 dokumen kurikulum',
                ),
                477 => 
                array (
                    'id_indikator' => 2711,
                    'id_kegiatan' => 1139,
                    'indikator' => 'Jumlah dokumen kurikulum prodi Analis Keuangan',
                'baseline' => '2 dokumen  (Kurikulum tahun 2013 & 2017)',
                    'target' => '3 dokumen kurikulum ( Kurikulum 2013, 2017, 2020',
                    ),
                    478 => 
                    array (
                        'id_indikator' => 2714,
                        'id_kegiatan' => 1214,
                        'indikator' => 'Jumlah Judul Penelitian ',
                        'baseline' => '167',
                        'target' => '173',
                    ),
                    479 => 
                    array (
                        'id_indikator' => 2715,
                        'id_kegiatan' => 1214,
                        'indikator' => 'Jumlah Judul Pengabdian ',
                        'baseline' => '102',
                        'target' => '110',
                    ),
                    480 => 
                    array (
                        'id_indikator' => 2716,
                        'id_kegiatan' => 1293,
                        'indikator' => 'SOP Manajemen keamanan sistem informasi',
                        'baseline' => '0',
                        'target' => '3',
                    ),
                    481 => 
                    array (
                        'id_indikator' => 2717,
                        'id_kegiatan' => 1122,
                        'indikator' => 'UPT Perpustakaan Polines terakreditasi',
                        'baseline' => '0',
                        'target' => 'A',
                    ),
                    482 => 
                    array (
                        'id_indikator' => 2721,
                        'id_kegiatan' => 1108,
                        'indikator' => 'Materi ajar e-learning ter-upload',
                    'baseline' => '63 materi ajar (tahun 2019)',
                    'target' => '96 materi ajar (tahun 2020)',
                    ),
                    483 => 
                    array (
                        'id_indikator' => 2724,
                        'id_kegiatan' => 1051,
                        'indikator' => 'Laporan PD Dikti Semester Gasal dan Genap terunggah di laman forlap.dikti.go.id',
                        'baseline' => '0',
                        'target' => '24',
                    ),
                    484 => 
                    array (
                        'id_indikator' => 2726,
                        'id_kegiatan' => 1120,
                        'indikator' => 'Dokumen Stok Opname Barang Persediaan Tahun 2020',
                        'baseline' => '1 Dokumen',
                        'target' => '1 Dokumen ',
                    ),
                    485 => 
                    array (
                        'id_indikator' => 2729,
                        'id_kegiatan' => 1139,
                        'indikator' => '',
                        'baseline' => '',
                        'target' => '',
                    ),
                    486 => 
                    array (
                        'id_indikator' => 2730,
                        'id_kegiatan' => 1215,
                        'indikator' => 'Proposal penelitian dan pengabdian yang direview',
                        'baseline' => '365',
                        'target' => '368',
                    ),
                    487 => 
                    array (
                        'id_indikator' => 2731,
                        'id_kegiatan' => 1215,
                        'indikator' => 'Proposal penelitian dan pengabdian yang didanai',
                        'baseline' => '269',
                        'target' => '283',
                    ),
                    488 => 
                    array (
                        'id_indikator' => 2732,
                        'id_kegiatan' => 1216,
                        'indikator' => 'Jumlah judul penelitian dan pengabdian',
                        'baseline' => '269',
                        'target' => '283',
                    ),
                    489 => 
                    array (
                        'id_indikator' => 2733,
                        'id_kegiatan' => 1217,
                        'indikator' => 'LAporan Hasil desiminasi penelitian dan pengabdian',
                        'baseline' => '269',
                        'target' => '283',
                    ),
                    490 => 
                    array (
                        'id_indikator' => 2734,
                        'id_kegiatan' => 1219,
                        'indikator' => 'Jumlah jenis profil ',
                        'baseline' => '2',
                        'target' => '3',
                    ),
                    491 => 
                    array (
                        'id_indikator' => 2735,
                        'id_kegiatan' => 1221,
                        'indikator' => '2. Jumlah sitasi',
                        'baseline' => '933',
                        'target' => '950',
                    ),
                    492 => 
                    array (
                        'id_indikator' => 2736,
                        'id_kegiatan' => 1222,
                        'indikator' => 'Jumlah mitra binaan internasional ',
                        'baseline' => '0',
                        'target' => '1',
                    ),
                    493 => 
                    array (
                        'id_indikator' => 2737,
                        'id_kegiatan' => 1226,
                        'indikator' => 'Jumlah judul pengabdian kepada masyarakat',
                        'baseline' => '118',
                        'target' => '125',
                    ),
                    494 => 
                    array (
                        'id_indikator' => 2738,
                        'id_kegiatan' => 1153,
                        'indikator' => 'Jumlah Dosen wali mahasiswa kelas satu yang dilatih',
                        'baseline' => '65 Dosen tahun 2019',
                        'target' => '65 Dosen tahun 2020',
                    ),
                    495 => 
                    array (
                        'id_indikator' => 2740,
                        'id_kegiatan' => 1039,
                        'indikator' => 'Jumlah judul penelitian',
                        'baseline' => '4',
                        'target' => '5',
                    ),
                    496 => 
                    array (
                        'id_indikator' => 2741,
                        'id_kegiatan' => 1266,
                        'indikator' => ' dokumen Diskripsi dan capaian pembelajaran 69 mata kuliah dari kurikulum KKNI',
                        'baseline' => '15 mata kuliah  dari Kurikulum KKNI',
                        'target' => '69 mata kuliah',
                    ),
                    497 => 
                    array (
                        'id_indikator' => 2742,
                        'id_kegiatan' => 1224,
                        'indikator' => 'Jumlah Judul Penelitian per tahun',
                        'baseline' => '4',
                        'target' => '6',
                    ),
                    498 => 
                    array (
                        'id_indikator' => 2743,
                        'id_kegiatan' => 1224,
                        'indikator' => '',
                        'baseline' => '',
                        'target' => '',
                    ),
                    499 => 
                    array (
                        'id_indikator' => 2746,
                        'id_kegiatan' => 1100,
                        'indikator' => 'Pelaksanaan PBM berbasis E-Learning untuk 100 mata kuliah',
                        'baseline' => '50 mata kuliah berbasis E-Learning pada 2019',
                        'target' => '100 mata kuliah berbasis E-Learning pada 2019',
                    ),
                ));
        \DB::table('indikator')->insert(array (
            0 => 
            array (
                'id_indikator' => 2748,
                'id_kegiatan' => 1098,
                'indikator' => 'Tersusunnya RPS',
                'baseline' => '122 RPS ditahun 2019',
                'target' => '220 RPS ditahun 2020',
            ),
            1 => 
            array (
                'id_indikator' => 2749,
                'id_kegiatan' => 1098,
                'indikator' => 'Tersusunnya Job Sheet',
                'baseline' => '12 Job Sheet ditahun 2019',
                'target' => '40 Job Sheet ditahun 2020',
            ),
            2 => 
            array (
                'id_indikator' => 2751,
                'id_kegiatan' => 1277,
                'indikator' => 'dokumen daftar jumlah lulusan dan waktu tunggu sarjana terapan TMPP yang terserap di Industri/BUMN .',
                'baseline' => '0',
                'target' => '80 alumni yang sudah bekerja',
            ),
            3 => 
            array (
                'id_indikator' => 2752,
                'id_kegiatan' => 1277,
                'indikator' => '',
                'baseline' => '',
                'target' => '',
            ),
            4 => 
            array (
                'id_indikator' => 2757,
                'id_kegiatan' => 1113,
            'indikator' => 'Tersusunnya buku pedoman pengelolaan bahan pustaka (buku) sebagai salah  satu penunjang akreditasi perpustakaan',
                'baseline' => '0',
                'target' => '	2 Eksemplar Buku Pedoman',
            ),
            5 => 
            array (
                'id_indikator' => 2758,
                'id_kegiatan' => 1117,
                'indikator' => 'Jumlah Jenis obat obatan di poliklinik polines',
                'baseline' => '60',
                'target' => '60',
            ),
            6 => 
            array (
                'id_indikator' => 2759,
                'id_kegiatan' => 1127,
                'indikator' => 'Meningkatnya Nilai akreditasi Program studi Teknik Informatika',
                'baseline' => 'Dokumen Laporan  Evaluasi diri Prodi TI tahun 2018',
                'target' => 'Dokumen Laporan Evaluasi Diri tahun 2020',
            ),
            7 => 
            array (
                'id_indikator' => 2760,
                'id_kegiatan' => 1233,
                'indikator' => 'Jumlah mahasiswa yang mengikuti workshop penyusunan proposal PKM',
                'baseline' => '800',
                'target' => '1000',
            ),
            8 => 
            array (
                'id_indikator' => 2761,
                'id_kegiatan' => 1233,
                'indikator' => 'Jumlah proposal PKM yang mengikuti evaluasi internal',
                'baseline' => '320',
                'target' => '350',
            ),
            9 => 
            array (
                'id_indikator' => 2762,
                'id_kegiatan' => 1233,
                'indikator' => 'Jumlah proposal PKM yang lolos evaluasi internal ',
                'baseline' => '229',
                'target' => '240',
            ),
            10 => 
            array (
                'id_indikator' => 2764,
                'id_kegiatan' => 1091,
                'indikator' => 'Siap diterbitkannya karya ilmiah di Jurnal nasional',
                'baseline' => '2 karya ilmiah di jurnal terakreditasi nasional',
                'target' => '5 karya ilmiah di jurnal terakreditasi nasional',
            ),
            11 => 
            array (
                'id_indikator' => 2765,
                'id_kegiatan' => 1091,
                'indikator' => 'Siap diterbitkannya karya ilmiah di Jurnal internasional',
                'baseline' => '1 karya ilmiah di jurnal terakreditasi internasional',
                'target' => '3 karya ilmiah di jurnal terakreditasi internasional',
            ),
            12 => 
            array (
                'id_indikator' => 2766,
                'id_kegiatan' => 1162,
                'indikator' => 'Sertifikat Kompetensi',
                'baseline' => '300 mahasiswa',
                'target' => '500 mahasiswa',
            ),
            13 => 
            array (
                'id_indikator' => 2767,
                'id_kegiatan' => 1103,
                'indikator' => '1 Kali Ekspo KWU dan 10 proposal Wira usaha siap diajukan dalm program PMW',
                'baseline' => '10 telah menjadi wira usaha',
                'target' => ' 15 mahasiswa menjadi wirausaha',
            ),
            14 => 
            array (
                'id_indikator' => 2769,
                'id_kegiatan' => 1066,
                'indikator' => 'Terlaksananya kegiatan Pertukaran Mahaisiwa Permata',
                'baseline' => '12 mahasiswa telah mengikuti program permata ditahun 2019',
                'target' => '16 mahasiswa telah mengikuti program permata ditahun 2020',
            ),
            15 => 
            array (
                'id_indikator' => 2770,
                'id_kegiatan' => 1067,
                'indikator' => 'Meraih Juara pada Perlombaan base tk Nasional',
                'baseline' => '4 orang',
                'target' => '6 orang',
            ),
            16 => 
            array (
                'id_indikator' => 2771,
                'id_kegiatan' => 1123,
                'indikator' => 'Jumah penelitian dosen di Program Studi teknik Informatika meningkat',
                'baseline' => '5',
                'target' => '7',
            ),
            17 => 
            array (
                'id_indikator' => 2772,
                'id_kegiatan' => 1123,
                'indikator' => '',
                'baseline' => '',
                'target' => '',
            ),
            18 => 
            array (
                'id_indikator' => 2774,
                'id_kegiatan' => 1045,
                'indikator' => 'Dokumen Pemutakhiran data sarpras gedung dan/atau bangunan di lingkungan Politeknik Negeri Semarang',
                'baseline' => '0',
                'target' => '1',
            ),
            19 => 
            array (
                'id_indikator' => 2775,
                'id_kegiatan' => 1148,
                'indikator' => 'Jumlah dosen yang mengisi dan terevaluasi BKD',
                'baseline' => '316 Dosen Tahun 2019',
                'target' => '326 Dosen Tahun 2020',
            ),
            20 => 
            array (
                'id_indikator' => 2777,
                'id_kegiatan' => 1258,
                'indikator' => 'RPS',
                'baseline' => '23 KKNI',
                'target' => '21 KKNI',
            ),
            21 => 
            array (
                'id_indikator' => 2778,
                'id_kegiatan' => 1065,
                'indikator' => 'Tersusunnya Modul Mata kUliah Praktek',
                'baseline' => '3 Modul Praktek ditahun 2019',
                'target' => '5 Modul Praktek ditahun 2020',
            ),
            22 => 
            array (
                'id_indikator' => 2779,
                'id_kegiatan' => 1065,
                'indikator' => 'Terbaharuinya Modul Mata kUliah Praktek',
                'baseline' => '0 Modul Praktek ditahun 2019',
                'target' => '4 Modul Praktek ditahun 2020',
            ),
            23 => 
            array (
                'id_indikator' => 2781,
                'id_kegiatan' => 1254,
                'indikator' => 'RPS',
                'baseline' => '0',
                'target' => '34 mata kuliah berbasis KKNI',
            ),
            24 => 
            array (
                'id_indikator' => 2782,
                'id_kegiatan' => 1274,
                'indikator' => 'Perpanjangan dan Penambahan MoU dengan Industri',
                'baseline' => '7 MoU',
                'target' => '!3 MoU',
            ),
            25 => 
            array (
                'id_indikator' => 2783,
                'id_kegiatan' => 1198,
                'indikator' => 'Jumlah layanan kepegawaian ',
                'baseline' => '',
                'target' => '',
            ),
            26 => 
            array (
                'id_indikator' => 2785,
                'id_kegiatan' => 1147,
                'indikator' => 'Jumlah dosen yang telah mengikuti dan bersertifikat PEKERTI/AA',
                'baseline' => '10 Dosen tahun 2019',
                'target' => '25 Dosen tahun 2020',
            ),
            27 => 
            array (
                'id_indikator' => 2786,
                'id_kegiatan' => 1275,
                'indikator' => 'Jumlah Jobsheet Sesuai Standart Nasional dan Internasional',
                'baseline' => '5 set jobsheet',
                'target' => '8 set job sheet',
            ),
            28 => 
            array (
                'id_indikator' => 2787,
                'id_kegiatan' => 1275,
                'indikator' => '',
                'baseline' => '',
                'target' => '',
            ),
            29 => 
            array (
                'id_indikator' => 2789,
                'id_kegiatan' => 1183,
                'indikator' => 'Pengadaaan Bahan Pustaka Buku',
                'baseline' => '37.575 eksemplar',
                'target' => '1.128 eksemplar',
            ),
            30 => 
            array (
                'id_indikator' => 2790,
                'id_kegiatan' => 1183,
                'indikator' => 'Pengadaaan Bahan Pustaka Jurnal cetak',
                'baseline' => '3.518 eksemplar',
                'target' => '106 eksemplar',
            ),
            31 => 
            array (
                'id_indikator' => 2791,
                'id_kegiatan' => 1276,
                'indikator' => 'Silabus dan RPSmata kuliah  Berbasis Kurikulum KKNI',
                'baseline' => '13 mata kuliah',
                'target' => '69 mata kuliah',
            ),
            32 => 
            array (
                'id_indikator' => 2792,
                'id_kegiatan' => 1276,
                'indikator' => '',
                'baseline' => '',
                'target' => '',
            ),
            33 => 
            array (
                'id_indikator' => 2793,
                'id_kegiatan' => 1062,
                'indikator' => 'perbaikan penyempurnaan, maupun penambahan modul baru',
                'baseline' => '30',
                'target' => '40',
            ),
            34 => 
            array (
                'id_indikator' => 2794,
                'id_kegiatan' => 1106,
                'indikator' => 'Proposal yang siap diajukan untuk ijin pendirian Prodi MST',
            'baseline' => '1 set dokumen pendukung penyusunan Proposal Pendirian Prodi baru (2019)',
            'target' => '1 Proposal Pendirian Prodi MST yang siap diajukan (2020)',
            ),
            35 => 
            array (
                'id_indikator' => 2795,
                'id_kegiatan' => 1168,
                'indikator' => 'Jumlah formasi CPNS dosen',
                'baseline' => '12',
                'target' => '12',
            ),
            36 => 
            array (
                'id_indikator' => 2796,
                'id_kegiatan' => 1168,
                'indikator' => 'Jumlah formasi CPNS Tendik',
                'baseline' => '11',
                'target' => '12',
            ),
            37 => 
            array (
                'id_indikator' => 2797,
                'id_kegiatan' => 1200,
                'indikator' => 'Mahasiswa pengurus ormawa di lingkungan Polines mengikutin pelatihan Administrasi sehingga lebih mampu mengelola dan siap menjadi MC, surat-menyurat, kearsipan, mekanisme/prosedur surat-menyurat dan a',
                'baseline' => '150 mahasiswa',
                'target' => '150 mahasiswa',
            ),
            38 => 
            array (
                'id_indikator' => 2799,
                'id_kegiatan' => 1253,
                'indikator' => 'Dokumen evaluasi kerja',
                'baseline' => '1',
                'target' => '1',
            ),
            39 => 
            array (
                'id_indikator' => 2800,
                'id_kegiatan' => 1253,
                'indikator' => 'Dokumen rencana kerja',
                'baseline' => '1',
                'target' => '1',
            ),
            40 => 
            array (
                'id_indikator' => 2801,
                'id_kegiatan' => 1255,
                'indikator' => 'MOU antara prodi D3 Teknik Mesin Polines dengan Industri',
                'baseline' => '9 MOU',
                'target' => '12 MOU',
            ),
            41 => 
            array (
                'id_indikator' => 2802,
                'id_kegiatan' => 1257,
                'indikator' => 'RPS',
                'baseline' => '0',
                'target' => '22 ',
            ),
            42 => 
            array (
                'id_indikator' => 2808,
                'id_kegiatan' => 1261,
                'indikator' => 'RPS',
                'baseline' => '0',
                'target' => '22',
            ),
            43 => 
            array (
                'id_indikator' => 2809,
                'id_kegiatan' => 1068,
                'indikator' => 'Dokumen Laporan Kinerja program studi',
                'baseline' => '1',
                'target' => '3',
            ),
            44 => 
            array (
                'id_indikator' => 2810,
                'id_kegiatan' => 1068,
                'indikator' => 'Dokumen identifikasi masalah',
                'baseline' => '0',
                'target' => '3',
            ),
            45 => 
            array (
                'id_indikator' => 2811,
                'id_kegiatan' => 1068,
                'indikator' => 'Dokumen analisis dan pemecahan masalah',
                'baseline' => '0',
                'target' => '3',
            ),
            46 => 
            array (
                'id_indikator' => 2812,
                'id_kegiatan' => 1264,
                'indikator' => 'Dokumen LKPS dan LED Prodi ',
                'baseline' => '1',
                'target' => '1',
            ),
            47 => 
            array (
                'id_indikator' => 2814,
                'id_kegiatan' => 1102,
                'indikator' => 'Dokumen evaluasi kerja dan rencana kerja Jurusan AB.',
                'baseline' => '0',
                'target' => '1 dokumen',
            ),
            48 => 
            array (
                'id_indikator' => 2815,
                'id_kegiatan' => 1270,
                'indikator' => 'Dokumen MoU kerjasama antara Polines dan Industri',
                'baseline' => '0',
                'target' => '2',
            ),
            49 => 
            array (
                'id_indikator' => 2816,
                'id_kegiatan' => 1227,
                'indikator' => 'Pegawai Pranata Laboratorium Pendidikan, Teknisi dan Dosen dapat melakukan penanggulangan kebakaran secara mandiri',
                'baseline' => '54',
                'target' => '64',
            ),
            50 => 
            array (
                'id_indikator' => 2817,
                'id_kegiatan' => 1273,
                'indikator' => 'Jumlah Jobsheet Sesuai KKNI',
                'baseline' => '0',
                'target' => '8 jobsheet',
            ),
            51 => 
            array (
                'id_indikator' => 2818,
                'id_kegiatan' => 1273,
                'indikator' => '',
                'baseline' => '',
                'target' => '',
            ),
            52 => 
            array (
                'id_indikator' => 2819,
                'id_kegiatan' => 1227,
                'indikator' => 'Jumlah Hydrant',
                'baseline' => '18',
                'target' => '18',
            ),
            53 => 
            array (
                'id_indikator' => 2820,
                'id_kegiatan' => 1227,
                'indikator' => 'Jumlah Apar',
                'baseline' => '45',
                'target' => '45',
            ),
            54 => 
            array (
                'id_indikator' => 2823,
                'id_kegiatan' => 1272,
                'indikator' => 'Jumlah artikel yang disubmit ke jurnal internasional',
                'baseline' => '11',
                'target' => '13',
            ),
            55 => 
            array (
                'id_indikator' => 2824,
                'id_kegiatan' => 1272,
                'indikator' => '',
                'baseline' => '',
                'target' => '',
            ),
            56 => 
            array (
                'id_indikator' => 2825,
                'id_kegiatan' => 1259,
                'indikator' => 'Pedoman pengawasan kebijakan pelaksanaan Tri Darma',
                'baseline' => '4',
                'target' => '6',
            ),
            57 => 
            array (
                'id_indikator' => 2826,
                'id_kegiatan' => 1279,
                'indikator' => 'Terbentuknya tim satgas germas polines',
                'baseline' => '0',
                'target' => '1',
            ),
            58 => 
            array (
                'id_indikator' => 2827,
                'id_kegiatan' => 1177,
                'indikator' => 'Jumlah  peserta Tendik yang mengikuti ujian Penyesuaian Ijazah',
                'baseline' => '0',
                'target' => '7',
            ),
            59 => 
            array (
                'id_indikator' => 2828,
                'id_kegiatan' => 1181,
                'indikator' => 'umlah formasi PPPK dosen',
                'baseline' => '0',
                'target' => '91',
            ),
            60 => 
            array (
                'id_indikator' => 2829,
                'id_kegiatan' => 1181,
                'indikator' => 'Jumlah formasi PPPK Tendik',
                'baseline' => '0',
                'target' => '90',
            ),
            61 => 
            array (
                'id_indikator' => 2830,
                'id_kegiatan' => 1278,
                'indikator' => 'Dokumen evaluasi kurikulum sesuai KKNI dan SN Dikti Prodi D3 Teknik Mesin ',
                'baseline' => '0',
                'target' => '1',
            ),
        ));
        
        
    }
}