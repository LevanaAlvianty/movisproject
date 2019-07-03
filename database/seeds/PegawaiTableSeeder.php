<?php

use Illuminate\Database\Seeder;

class PegawaiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pegawai')->delete();
        
        \DB::table('pegawai')->insert(array (
            0 => 
            array (
                'id_pegawai' => 553,
                'nip' => '196307211989021001',
                'nama' => 'A. KRISTIANUS MARYONO',
                'golongan' => 'III/b',
                'jabatan' => 'PENGADMINISTRASI UMUM',
                'password' => bcrypt('admin123'),
            ),
            1 => 
            array (
                'id_pegawai' => 554,
                'nip' => '197505032007011001',
                'nama' => 'ABDUL SUNARNO',
                'golongan' => 'II/a',
                'jabatan' => 'PRAMU BAKTI',
                'password' => bcrypt('admin23'),
            ),
            2 => 
            array (
                'id_pegawai' => 555,
                'nip' => '197405272007011002',
                'nama' => 'ACHMAD NASOKAH',
                'golongan' => 'II/a',
                'jabatan' => 'PRAMU BAKTI',
                'password' => bcrypt('admin23'),
            ),
            3 => 
            array (
                'id_pegawai' => 556,
                'nip' => '196602151989021001',
                'nama' => 'ACHRONI',
                'golongan' => 'III/b',
                'jabatan' => 'PENGADMINISTRASI AKADEMIK',
                'password' => bcrypt('admin23'),
            ),
            4 => 
            array (
                'id_pegawai' => 557,
                'nip' => '197706221999031009',
                'nama' => 'ADANG KURNIAWAN, S.T.',
                'golongan' => 'III/c',
                'jabatan' => 'PRANATA LABORATORIUM PENDIDIKAN MUDA ',
                'password' => bcrypt('admin23'),
            ),
            5 => 
            array (
                'id_pegawai' => 558,
                'nip' => '196803011989021001',
                'nama' => 'ADI KUSMANTO',
                'golongan' => 'III/c',
                'jabatan' => 'PRANATA LABORATORIUM PENDIDIKAN PENYELIA ',
                'password' => bcrypt('admin23'),
            ),
            6 => 
            array (
                'id_pegawai' => 559,
                'nip' => '196011151990031004',
                'nama' => 'AGUNG NUGROHO, Sm.Hk.',
                'golongan' => 'III/b',
                'jabatan' => 'PENGADMINISTRASI UMUM',
                'password' => bcrypt('admin23'),
            ),
            7 => 
            array (
                'id_pegawai' => 560,
                'nip' => '196708171990031005',
                'nama' => 'AGUS HARYONO PUTRO',
                'golongan' => 'II/c',
                'jabatan' => 'PENGADMINISTRASI UMUM',
                'password' => bcrypt('admin23'),
            ),
            8 => 
            array (
                'id_pegawai' => 561,
                'nip' => '197803261999031003',
                'nama' => 'AHMAD BUSYAIRUDDIN',
                'golongan' => 'III/a',
                'jabatan' => 'TEKNISI SARANA DAN PRASARANA PENDIDIKAN',
                'password' => bcrypt('admin23'),
            ),
            9 => 
            array (
                'id_pegawai' => 562,
                'nip' => '198108032005012001',
                'nama' => 'ANYS SURYANING FITRIYATI, A. Md.',
                'golongan' => 'III/b',
                'jabatan' => 'TEKNISI LABORATORIUM',
                'password' => bcrypt('admin23'),
            ),
            10 => 
            array (
                'id_pegawai' => 563,
                'nip' => '198501052009121002',
                'nama' => 'ARI MURSANDHI, A. Md.',
                'golongan' => 'II/d',
                'jabatan' => 'PETUGAS TEKNOLOGI INFORMASI KOMPUTER',
                'password' => bcrypt('admin23'),
            ),
            11 => 
            array (
                'id_pegawai' => 564,
                'nip' => '198608132010121003',
                'nama' => 'ARIF WIDI HATMOJO, A. Md.',
                'golongan' => 'II/d',
                'jabatan' => 'TEKNISI LABORATORIUM',
                'password' => bcrypt('admin23'),
            ),
            12 => 
            array (
                'id_pegawai' => 565,
                'nip' => '197106232005011001',
                'nama' => 'ARIFIN ALIEF HIDAYAT, S.E.',
                'golongan' => 'III/c',
                'jabatan' => 'PENGELOLA KEMAHASISWAAN/ ALUMNI',
                'password' => bcrypt('admin23'),
            ),
            13 => 
            array (
                'id_pegawai' => 566,
                'nip' => '197308172001121003',
                'nama' => 'ARIS NURYOKO, S. Kom.',
                'golongan' => 'III/b',
                'jabatan' => 'BENDAHARA',
                'password' => bcrypt('admin23'),
            ),
            14 => 
            array (
                'id_pegawai' => 567,
                'nip' => '198904062010121005',
                'nama' => 'ARKO PAMBUDI, A. Md.',
                'golongan' => 'II/d',
                'jabatan' => 'PUSTAKAWAN PELAKSANA LANJUTAN',
                'password' => bcrypt('admin23'),
            ),
            15 => 
            array (
                'id_pegawai' => 568,
                'nip' => '198307112014041002',
                'nama' => 'ATMAN RISNENDI, A.Md.',
                'golongan' => 'II/c',
                'jabatan' => 'PETUGAS TEKNOLOGI INFORMASI KOMPUTER',
                'password' => bcrypt('admin23'),
            ),
            16 => 
            array (
                'id_pegawai' => 569,
                'nip' => '196106271989021001',
                'nama' => 'AZIS, S. T.',
                'golongan' => 'III/c',
                'jabatan' => 'PRANATA LABORATORIUM PENDIDIKAN MUDA ',
                'password' => bcrypt('admin23'),
            ),
            17 => 
            array (
                'id_pegawai' => 570,
                'nip' => '196509161990031002',
                'nama' => 'BADRI',
                'golongan' => 'II/c',
                'jabatan' => 'PRAMU BAKTI',
                'password' => bcrypt('admin23'),
            ),
            18 => 
            array (
                'id_pegawai' => 571,
                'nip' => '197301312009101002',
                'nama' => 'BEJO PRIHATIN',
                'golongan' => 'II/a',
                'jabatan' => 'PRAMU BAKTI',
                'password' => bcrypt('admin23'),
            ),
            19 => 
            array (
                'id_pegawai' => 572,
                'nip' => '197705272009101002',
                'nama' => 'BUDI PRAYETNO',
                'golongan' => 'II/b',
                'jabatan' => 'TEKNISI LABORATORIUM',
                'password' => bcrypt('admin23'),
            ),
            20 => 
            array (
                'id_pegawai' => 573,
                'nip' => '196304291985031003',
                'nama' => 'BUDI RIYANTO, S.E, M. Si.',
                'golongan' => 'IV/a',
                'jabatan' => 'Kepala Subbagian Kerja Sama',
                'password' => bcrypt('admin23'),
            ),
            21 => 
            array (
                'id_pegawai' => 574,
                'nip' => '198104112008011008',
                'nama' => 'BUDI SUPRIANTO, A.Md',
                'golongan' => 'III/a',
                'jabatan' => 'TEKNISI LABORATORIUM',
                'password' => bcrypt('admin23'),
            ),
            22 => 
            array (
                'id_pegawai' => 575,
                'nip' => '196607112007011001',
                'nama' => 'BUDIMAN',
                'golongan' => 'I/c',
                'jabatan' => 'PENGEMUDI',
                'password' => bcrypt('admin23'),
            ),
            23 => 
            array (
                'id_pegawai' => 576,
                'nip' => '196201201988031002',
                'nama' => 'BUDIYONO',
                'golongan' => 'II/d',
                'jabatan' => 'PETUGAS KEAMANAN',
                'password' => bcrypt('admin23'),
            ),
            24 => 
            array (
                'id_pegawai' => 577,
                'nip' => '198510012009121002',
                'nama' => 'CANDRA KURNIAWAN',
                'golongan' => 'II/b',
                'jabatan' => 'TEKNISI LABORATORIUM',
                'password' => bcrypt('admin23'),
            ),
            25 => 
            array (
                'id_pegawai' => 578,
                'nip' => '197503052007011001',
                'nama' => 'CHONDORI',
                'golongan' => 'II/a',
                'jabatan' => 'PRAMU BAKTI',
                'password' => bcrypt('admin23'),
            ),
            26 => 
            array (
                'id_pegawai' => 579,
                'nip' => '196507021989021001',
                'nama' => 'DARYANTO',
                'golongan' => 'II/d',
                'jabatan' => 'PENGADMINISTRASI AKADEMIK',
                'password' => bcrypt('admin23'),
            ),
            27 => 
            array (
                'id_pegawai' => 580,
                'nip' => '196902241990031003',
                'nama' => 'DARYANTO, SE',
                'golongan' => 'III/c',
                'jabatan' => 'PUSTAKAWAN MUDA',
                'password' => bcrypt('admin23'),
            ),
            28 => 
            array (
                'id_pegawai' => 581,
                'nip' => '197903102005011003',
                'nama' => 'DIDIT AGUS TRIYONO, S. Kom.',
                'golongan' => 'III/b',
                'jabatan' => 'PENGADMINISTRASI AKADEMIK',
                'password' => bcrypt('admin23'),
            ),
            29 => 
            array (
                'id_pegawai' => 582,
                'nip' => '196906081995022001',
                'nama' => 'DIYAH PUSPITORINI',
                'golongan' => 'III/b',
                'jabatan' => 'PENGADMINISTRASI KEPEGAWAIAN',
                'password' => bcrypt('admin23'),
            ),
            30 => 
            array (
                'id_pegawai' => 583,
                'nip' => '197706242007011001',
                'nama' => 'DWI TRIYONO',
                'golongan' => 'II/a',
                'jabatan' => 'PENGEMUDI',
                'password' => bcrypt('admin23'),
            ),
            31 => 
            array (
                'id_pegawai' => 584,
                'nip' => '197603212001121002',
                'nama' => 'EDI WALUYO, S. Kom.',
                'golongan' => 'III/b',
                'jabatan' => 'PENGELOLA DATA PELAKSANAAN PROGRAM DAN ANGGARAN',
                'password' => bcrypt('admin23'),
            ),
            32 => 
            array (
                'id_pegawai' => 585,
                'nip' => '196209011990031002',
                'nama' => 'EDWI NAIRI HASTUTIONO, Amd.',
                'golongan' => 'III/b',
                'jabatan' => 'TEKNISI LABORATORIUM',
                'password' => bcrypt('admin23'),
            ),
            33 => 
            array (
                'id_pegawai' => 586,
                'nip' => '197907292008121001',
                'nama' => 'EKO NARIMO, A. Md.',
                'golongan' => 'III/a',
                'jabatan' => 'TEKNISI LABORATORIUM',
                'password' => bcrypt('admin23'),
            ),
            34 => 
            array (
                'id_pegawai' => 587,
                'nip' => '196711111999031002',
                'nama' => 'EKO SETYAWAN, S. Kom.',
                'golongan' => 'III/d',
                'jabatan' => 'KEPALA SUBBAGIAN TATA USAHA',
                'password' => bcrypt('admin23'),
            ),
            35 => 
            array (
                'id_pegawai' => 588,
                'nip' => '198610182009121006',
                'nama' => 'EKO SUPRIYANTO',
                'golongan' => 'II/b',
                'jabatan' => 'TEKNISI SARANA DAN PRASARANA PENDIDIKAN',
                'password' => bcrypt('admin23'),
            ),
            36 => 
            array (
                'id_pegawai' => 589,
                'nip' => '197006192001122002',
                'nama' => 'ENDANG BUDY ASTUTI',
                'golongan' => 'III/c',
                'jabatan' => 'TEKNISI LABORATORIUM',
                'password' => bcrypt('admin23'),
            ),
            37 => 
            array (
                'id_pegawai' => 590,
                'nip' => '197012032003122001',
                'nama' => 'ENY WIDOWATI',
                'golongan' => 'II/d',
                'jabatan' => 'PENGADMINISTRASI KEUANGAN',
                'password' => bcrypt('admin23'),
            ),
            38 => 
            array (
                'id_pegawai' => 591,
                'nip' => '196707191990032002',
                'nama' => 'ERY WIDYOWATI, S.E',
                'golongan' => 'III/d',
                'jabatan' => 'PENGELOLA INFORMASI AKADEMIK',
                'password' => bcrypt('admin23'),
            ),
            39 => 
            array (
                'id_pegawai' => 592,
                'nip' => '198311102008122002',
                'nama' => 'ETTY PUJIASTUTI, A. Md.',
                'golongan' => 'III/a',
                'jabatan' => 'PENGELOLA DATABASE SURAT PERINTAH MEMBAYAR',
                'password' => bcrypt('admin23'),
            ),
            40 => 
            array (
                'id_pegawai' => 593,
                'nip' => '198109202005011003',
                'nama' => 'FAIZAL ISMAIL, S.S.',
                'golongan' => 'III/d',
                'jabatan' => 'PUSTAKAWAN MUDA',
                'password' => bcrypt('admin23'),
            ),
            41 => 
            array (
                'id_pegawai' => 594,
                'nip' => '197810142003122002',
                'nama' => 'FERA AYU DIAH KUSUMO DEWI, S. Pd.M.I.Kom',
                'golongan' => 'III/b',
                'jabatan' => 'PENGELOLA INFORMASI KERJASAMA',
                'password' => bcrypt('admin23'),
            ),
            42 => 
            array (
                'id_pegawai' => 595,
                'nip' => '196504141988031002',
                'nama' => 'GUNADI',
                'golongan' => 'III/c',
                'jabatan' => 'PRANATA LABORATORIUM PENDIDIKAN PENYELIA ',
                'password' => bcrypt('admin23'),
            ),
            43 => 
            array (
                'id_pegawai' => 596,
                'nip' => '197012251995011001',
                'nama' => 'HADI PURWANTO',
                'golongan' => 'III/b',
                'jabatan' => 'TEKNISI SARANA DAN PRASARANA PENDIDIKAN',
                'password' => bcrypt('admin23'),
            ),
            44 => 
            array (
                'id_pegawai' => 597,
                'nip' => '197411081996011001',
                'nama' => 'HARI DWI CAHYONO',
                'golongan' => 'III/b',
                'jabatan' => 'TEKNISI SARANA DAN PRASARANA PENDIDIKAN',
                'password' => bcrypt('admin23'),
            ),
            45 => 
            array (
                'id_pegawai' => 598,
                'nip' => '196906222005011001',
                'nama' => 'HARYAMTO',
                'golongan' => 'II/d',
                'jabatan' => 'PETUGAS KEAMANAN',
                'password' => bcrypt('admin23'),
            ),
            46 => 
            array (
                'id_pegawai' => 599,
                'nip' => '196706111990031002',
                'nama' => 'HARYONO',
                'golongan' => 'III/b',
                'jabatan' => 'PENGADMINISTRASI AKADEMIK',
                'password' => bcrypt('admin23'),
            ),
            47 => 
            array (
                'id_pegawai' => 600,
                'nip' => '197006252001122001',
                'nama' => 'HENING VIDININGRUM, S.S.',
                'golongan' => 'III/d',
                'jabatan' => 'PUSTAKAWAN MUDA',
                'password' => bcrypt('admin23'),
            ),
            48 => 
            array (
                'id_pegawai' => 601,
                'nip' => '197201021999031001',
                'nama' => 'HERY PURNOMO, S.T.',
                'golongan' => 'III/d',
                'jabatan' => 'Pengelola Pengadaan Barang dan Jasa  Muda',
                'password' => bcrypt('admin23'),
            ),
            49 => 
            array (
                'id_pegawai' => 602,
                'nip' => '197802022005011001',
                'nama' => 'IRWAN SULIYONO, A. Md.',
                'golongan' => 'III/b',
                'jabatan' => 'TEKNISI LABORATORIUM',
                'password' => bcrypt('admin23'),
            ),
            50 => 
            array (
                'id_pegawai' => 603,
                'nip' => '196803032007011001',
                'nama' => 'JAKIMIN',
                'golongan' => 'II/a',
                'jabatan' => 'PRAMU BAKTI',
                'password' => bcrypt('admin23'),
            ),
            51 => 
            array (
                'id_pegawai' => 604,
                'nip' => '196508271989021002',
                'nama' => 'JAROT PRAMANA',
                'golongan' => 'III/b',
                'jabatan' => 'PENGADMINISTRASI KEUANGAN',
                'password' => bcrypt('admin23'),
            ),
            52 => 
            array (
                'id_pegawai' => 605,
                'nip' => '196302031989021001',
                'nama' => 'JOKO MUJIHARTONO, A. Md',
                'golongan' => 'III/c',
                'jabatan' => 'PRANATA LABORATORIUM PENDIDIKAN AHLI PERTAMA ',
                'password' => bcrypt('admin23'),
            ),
            53 => 
            array (
                'id_pegawai' => 606,
                'nip' => '197408132001121001',
                'nama' => 'JOKO MUSTOFA, S. Hum',
                'golongan' => 'III/c',
                'jabatan' => 'PUSTAKAWAN MUDA',
                'password' => bcrypt('admin23'),
            ),
            54 => 
            array (
                'id_pegawai' => 607,
                'nip' => '196402011989021001',
                'nama' => 'JOKO PRIYONO',
                'golongan' => 'III/b',
                'jabatan' => 'PENGADMINISTRASI AKADEMIK',
                'password' => bcrypt('admin23'),
            ),
            55 => 
            array (
                'id_pegawai' => 608,
                'nip' => '196509031990031001',
                'nama' => 'JOKO SUDIGDO',
                'golongan' => 'III/c',
                'jabatan' => 'PRANATA HUMAS PENYELIA',
                'password' => bcrypt('admin23'),
            ),
            56 => 
            array (
                'id_pegawai' => 609,
                'nip' => '196409031995011001',
                'nama' => 'JOKO TRI HADI',
                'golongan' => 'III/c',
                'jabatan' => 'PENGADMINISTRASI AKADEMIK',
                'password' => bcrypt('admin23'),
            ),
            57 => 
            array (
                'id_pegawai' => 610,
                'nip' => '197507121999031006',
                'nama' => 'JULI WIDIYANTO, SAP.',
                'golongan' => 'III/b',
                'jabatan' => 'PENGADMINISTRASI PERSURATAN',
                'password' => bcrypt('admin23'),
            ),
            58 => 
            array (
                'id_pegawai' => 611,
                'nip' => '197707072009121002',
                'nama' => 'KARIYANTO, S. Kom',
                'golongan' => 'III/a',
                'jabatan' => 'TEKNISI LABORATORIUM',
                'password' => bcrypt('admin23'),
            ),
            59 => 
            array (
                'id_pegawai' => 612,
                'nip' => '196008031989021001',
                'nama' => 'KARYADI',
                'golongan' => 'II/d',
                'jabatan' => 'PRAMU BAKTI',
                'password' => bcrypt('admin23'),
            ),
            60 => 
            array (
                'id_pegawai' => 613,
                'nip' => '196506091990031003',
                'nama' => 'KASMADI, S.H.',
                'golongan' => 'III/d',
                'jabatan' => 'Pengelola Pengadaan Barang dan Jasa  Muda',
                'password' => bcrypt('admin23'),
            ),
            61 => 
            array (
                'id_pegawai' => 614,
                'nip' => '197103102005011002',
                'nama' => 'KASTARI',
                'golongan' => 'II/d',
                'jabatan' => 'PENGADMINISTRASI AKADEMIK',
                'password' => bcrypt('admin23'),
            ),
            62 => 
            array (
                'id_pegawai' => 615,
                'nip' => '196801252007011001',
                'nama' => 'KEMAD',
                'golongan' => 'I/c',
                'jabatan' => 'PRAMU BAKTI',
                'password' => bcrypt('admin23'),
            ),
            63 => 
            array (
                'id_pegawai' => 616,
                'nip' => '197505192006042006',
                'nama' => 'KHOMSATUN ARTATI, S.E., Akt',
                'golongan' => 'III/c',
                'jabatan' => 'TEKNISI LABORATORIUM',
                'password' => bcrypt('admin23'),
            ),
            64 => 
            array (
                'id_pegawai' => 617,
                'nip' => '196109091990121001',
                'nama' => 'KUNTARA',
                'golongan' => 'III/b',
                'jabatan' => 'PENGADMINISTRASI UMUM',
                'password' => bcrypt('admin23'),
            ),
            65 => 
            array (
                'id_pegawai' => 618,
                'nip' => '196311251989022001',
                'nama' => 'KUNTARTI, S. E.',
                'golongan' => 'III/d',
                'jabatan' => 'PENGELOLA INFORMASI AKADEMIK',
                'password' => bcrypt('admin23'),
            ),
            66 => 
            array (
                'id_pegawai' => 619,
                'nip' => '196102081988031001',
                'nama' => 'LARMIN',
                'golongan' => 'III/c',
                'jabatan' => 'PRANATA LABORATORIUM PENDIDIKAN PENYELIA ',
                'password' => bcrypt('admin23'),
            ),
            67 => 
            array (
                'id_pegawai' => 620,
                'nip' => '196109251988112001',
                'nama' => 'LUSIA SRI RETNANINGSIH, S.E.',
                'golongan' => 'III/c',
                'jabatan' => 'ARSIPARIS MUDA',
                'password' => bcrypt('admin23'),
            ),
            68 => 
            array (
                'id_pegawai' => 621,
                'nip' => '196202041989021001',
                'nama' => 'MARIMAN',
                'golongan' => 'III/b',
                'jabatan' => 'PENGADMINISTRASI AKADEMIK',
                'password' => bcrypt('admin23'),
            ),
            69 => 
            array (
                'id_pegawai' => 622,
                'nip' => '197008142007011001',
                'nama' => 'MOCRONI',
                'golongan' => 'I/c',
                'jabatan' => 'PENGEMUDI',
                'password' => bcrypt('admin23'),
            ),
            70 => 
            array (
                'id_pegawai' => 623,
                'nip' => '198007142005011002',
                'nama' => 'MOHAMAD SYAM SURYANTO, S.Sos.',
                'golongan' => 'III/d',
                'jabatan' => 'PUSTAKAWAN MUDA',
                'password' => bcrypt('admin23'),
            ),
            71 => 
            array (
                'id_pegawai' => 624,
                'nip' => '196304141987031001',
                'nama' => 'MUGIYONO, SAP',
                'golongan' => 'III/b',
                'jabatan' => 'PENGELOLA KEUANGAN',
                'password' => bcrypt('admin23'),
            ),
            72 => 
            array (
                'id_pegawai' => 625,
                'nip' => '198010092005011005',
                'nama' => 'MUHADJIRIN, S.E',
                'golongan' => 'III/c',
                'jabatan' => 'TEKNISI LABORATORIUM',
                'password' => bcrypt('admin23'),
            ),
            73 => 
            array (
                'id_pegawai' => 626,
                'nip' => '199201122014041001',
                'nama' => 'MUHAMAD BAGUS SATRIAWAN, A.Md.',
                'golongan' => 'II/c',
                'jabatan' => 'TEKNISI LABORATORIUM',
                'password' => bcrypt('admin23'),
            ),
            74 => 
            array (
                'id_pegawai' => 627,
                'nip' => '197906222010121002',
                'nama' => 'MUHAMMAD LUKITARJO, A. Md.',
                'golongan' => 'II/d',
                'jabatan' => 'TEKNISI LABORATORIUM',
                'password' => bcrypt('admin23'),
            ),
            75 => 
            array (
                'id_pegawai' => 628,
                'nip' => '196404211990031003',
                'nama' => 'MUHYORI',
                'golongan' => 'II/d',
                'jabatan' => 'PENGADMINISTRASI UMUM',
                'password' => bcrypt('admin23'),
            ),
            76 => 
            array (
                'id_pegawai' => 629,
                'nip' => '196311151989022001',
                'nama' => 'MUJIYATI',
                'golongan' => 'III/b',
                'jabatan' => 'PENGADMINISTRASI UMUM',
                'password' => bcrypt('admin23'),
            ),
            77 => 
            array (
                'id_pegawai' => 630,
                'nip' => '197810212001121001',
                'nama' => 'MULYONO',
                'golongan' => 'II/d',
                'jabatan' => 'PRANATA LABORATORIUM PENDIDIKAN PELAKSANA ',
                'password' => bcrypt('admin23'),
            ),
            78 => 
            array (
                'id_pegawai' => 631,
                'nip' => '196607121990031002',
                'nama' => 'MUNADI, S.H.',
                'golongan' => 'III/d',
                'jabatan' => 'ARSIPARIS MUDA',
                'password' => bcrypt('admin23'),
            ),
            79 => 
            array (
                'id_pegawai' => 632,
                'nip' => '196801141989031002',
                'nama' => 'MURDI',
                'golongan' => 'III/b',
                'jabatan' => 'PETUGAS KEAMANAN',
                'password' => bcrypt('admin23'),
            ),
            80 => 
            array (
                'id_pegawai' => 633,
                'nip' => '196102101987031004',
                'nama' => 'NARDI',
                'golongan' => 'II/d',
                'jabatan' => 'PENGADMINISTRASI UMUM',
                'password' => bcrypt('admin23'),
            ),
            81 => 
            array (
                'id_pegawai' => 634,
                'nip' => '198911282014042001',
                'nama' => 'NISA AULIA DALILA, A.Md',
                'golongan' => 'II/c',
                'jabatan' => 'PETUGAS TEKNOLOGI INFORMASI KOMPUTER',
                'password' => bcrypt('admin23'),
            ),
            82 => 
            array (
                'id_pegawai' => 635,
                'nip' => '196702131990031002',
                'nama' => 'NOOR KUNTONO, S.H.',
                'golongan' => 'III/d',
                'jabatan' => 'KEPALA SUBBAGIAN KEPEGAWAIAN',
                'password' => bcrypt('admin23'),
            ),
            83 => 
            array (
                'id_pegawai' => 636,
                'nip' => '197706142000121001',
                'nama' => 'NUGROHO JOKO USITO,  S. Kom.',
                'golongan' => 'III/b',
                'jabatan' => 'PENGELOLA SISTEM DAN JARINGAN',
                'password' => bcrypt('admin23'),
            ),
            84 => 
            array (
                'id_pegawai' => 637,
                'nip' => '196704012001122001',
                'nama' => 'NURUL QURNIATI, S. Sos.',
                'golongan' => 'III/d',
                'jabatan' => 'PUSTAKAWAN MUDA',
                'password' => bcrypt('admin23'),
            ),
            85 => 
            array (
                'id_pegawai' => 638,
                'nip' => '197101312007011002',
                'nama' => 'NYOTO',
                'golongan' => 'II/a',
                'jabatan' => 'PRAMU BAKTI',
                'password' => bcrypt('admin23'),
            ),
            86 => 
            array (
                'id_pegawai' => 639,
                'nip' => '197002072007011001',
                'nama' => 'PARDIYO',
                'golongan' => 'II/a',
                'jabatan' => 'TEKNISI LABORATORIUM',
                'password' => bcrypt('admin23'),
            ),
            87 => 
            array (
                'id_pegawai' => 640,
                'nip' => '196210231989021001',
                'nama' => 'PARYONO',
                'golongan' => 'III/b',
                'jabatan' => 'TEKNISI PERALATAN KANTOR',
                'password' => bcrypt('admin23'),
            ),
            88 => 
            array (
                'id_pegawai' => 641,
                'nip' => '197212191998031003',
                'nama' => 'PURNAWAN BUDIYANTO, S.T.',
                'golongan' => 'III/d',
                'jabatan' => 'TEKNISI LABORATORIUM',
                'password' => bcrypt('admin23'),
            ),
            89 => 
            array (
                'id_pegawai' => 642,
                'nip' => '196212151989031004',
                'nama' => 'PURNOMO, S.H, M. Si.',
                'golongan' => 'IV/b',
                'jabatan' => 'KEPALA BAGIAN UMUM DAN KEUANGAN',
                'password' => bcrypt('admin23'),
            ),
            90 => 
            array (
                'id_pegawai' => 643,
                'nip' => '197509062007011001',
                'nama' => 'PURWANTO',
                'golongan' => 'II/a',
                'jabatan' => 'PRAMU BAKTI',
                'password' => bcrypt('admin23'),
            ),
            91 => 
            array (
                'id_pegawai' => 644,
                'nip' => '197601121999031001',
                'nama' => 'RADEN ADHI WICAKSANA, S.E.',
                'golongan' => 'III/b',
                'jabatan' => 'ANALIS SUMBER DAYA MANUSIA APARATUR',
                'password' => bcrypt('admin23'),
            ),
            92 => 
            array (
                'id_pegawai' => 645,
                'nip' => '196402031989031004',
                'nama' => 'RADI',
                'golongan' => 'II/c',
                'jabatan' => 'PRAMU BAKTI',
                'password' => bcrypt('admin23'),
            ),
            93 => 
            array (
                'id_pegawai' => 646,
                'nip' => '196511111990032001',
                'nama' => 'RAHAYU KUSUMASTUTI, S.A.B.',
                'golongan' => 'III/c',
                'jabatan' => 'PENGADMINISTRASI PERSURATAN',
                'password' => bcrypt('admin23'),
            ),
            94 => 
            array (
                'id_pegawai' => 647,
                'nip' => '196607131989021001',
                'nama' => 'RAMELAN',
                'golongan' => 'II/c',
                'jabatan' => 'PRAMU BAKTI',
                'password' => bcrypt('admin23'),
            ),
            95 => 
            array (
                'id_pegawai' => 648,
                'nip' => '196212051989021001',
                'nama' => 'RAMELI',
                'golongan' => 'III/a',
                'jabatan' => 'PENGADMINISTRASI UMUM',
                'password' => bcrypt('admin23'),
            ),
            96 => 
            array (
                'id_pegawai' => 649,
                'nip' => '197009252001122001',
                'nama' => 'RATNA HANDAYANI',
                'golongan' => 'III/d',
                'jabatan' => 'PUSTAKAWAN PENYELIA',
                'password' => bcrypt('admin23'),
            ),
            97 => 
            array (
                'id_pegawai' => 650,
                'nip' => '197210282005011001',
                'nama' => 'RAVIQ HIDAYAT',
                'golongan' => 'II/d',
                'jabatan' => 'TEKNISI SARANA DAN PRASARANA PENDIDIKAN',
                'password' => bcrypt('admin23'),
            ),
            98 => 
            array (
                'id_pegawai' => 651,
                'nip' => '197910152009102001',
                'nama' => 'RETNO MADE VITA EVI, SE',
                'golongan' => 'III/b',
                'jabatan' => 'TEKNISI LABORATORIUM',
                'password' => bcrypt('admin23'),
            ),
            99 => 
            array (
                'id_pegawai' => 652,
                'nip' => '197205302009101001',
                'nama' => 'RIJANTO',
                'golongan' => 'II/a',
                'jabatan' => 'PRAMU BAKTI',
                'password' => bcrypt('admin23'),
            ),
            100 => 
            array (
                'id_pegawai' => 653,
                'nip' => '196809162002122001',
                'nama' => 'RINI WINARNI, A. Md.',
                'golongan' => 'III/b',
                'jabatan' => 'PENGADMINISTRASI AKADEMIK',
                'password' => bcrypt('admin23'),
            ),
            101 => 
            array (
                'id_pegawai' => 654,
                'nip' => '196610051990032003',
                'nama' => 'RISGIARINI',
                'golongan' => 'III/b',
                'jabatan' => 'ANALIS KEPEGAWAIAN PELAKSANA LANJUTAN',
                'password' => bcrypt('admin23'),
            ),
            102 => 
            array (
                'id_pegawai' => 655,
                'nip' => '197309042007011001',
                'nama' => 'RIYANTO',
                'golongan' => 'II/a',
                'jabatan' => 'PRAMU BAKTI',
                'password' => bcrypt('admin23'),
            ),
            103 => 
            array (
                'id_pegawai' => 656,
                'nip' => '196204281989021001',
                'nama' => 'ROBERTUS MULYANTO',
                'golongan' => 'III/b',
                'jabatan' => 'PENGADMINISTRASI KEPEGAWAIAN',
                'password' => bcrypt('admin23'),
            ),
            104 => 
            array (
                'id_pegawai' => 657,
                'nip' => '197107271995012001',
                'nama' => 'Rr. RATNA NUSWANTARI, S.E.',
                'golongan' => 'III/c',
                'jabatan' => 'PENGELOLA KEUANGAN',
                'password' => bcrypt('admin23'),
            ),
            105 => 
            array (
                'id_pegawai' => 658,
                'nip' => '196505101989022001',
                'nama' => 'Rr. SARWENDAH P, S. Sos.',
                'golongan' => 'III/c',
                'jabatan' => 'ARSIPARIS PERTAMA',
                'password' => bcrypt('admin23'),
            ),
            106 => 
            array (
                'id_pegawai' => 659,
                'nip' => '197809202001121001',
                'nama' => 'RUDY HARYANTO',
                'golongan' => 'II/d',
                'jabatan' => 'PRANATA LABORATORIUM PENDIDIKAN PELAKSANA LANJUTAN ',
                'password' => bcrypt('admin23'),
            ),
            107 => 
            array (
                'id_pegawai' => 660,
                'nip' => '196807172001121001',
                'nama' => 'RUSLI',
                'golongan' => 'II/d',
                'jabatan' => 'PENGADMINISTRASI AKADEMIK',
                'password' => bcrypt('admin23'),
            ),
            108 => 
            array (
                'id_pegawai' => 661,
                'nip' => '197308142007011001',
                'nama' => 'S U K I N O',
                'golongan' => 'II/a',
                'jabatan' => 'PENGADMINISTRASI UMUM',
                'password' => bcrypt('admin23'),
            ),
            109 => 
            array (
                'id_pegawai' => 662,
                'nip' => '196309201990031004',
                'nama' => 'S.R. CAHYONO',
                'golongan' => 'II/c',
                'jabatan' => 'PETUGAS PENGGANDAAN',
                'password' => bcrypt('admin23'),
            ),
            110 => 
            array (
                'id_pegawai' => 663,
                'nip' => '197111231998031002',
                'nama' => 'SADIK BUDI SANTOSO, S.T.',
                'golongan' => 'III/c',
                'jabatan' => 'TEKNISI SARANA DAN PRASARANA PENDIDIKAN',
                'password' => bcrypt('admin23'),
            ),
            111 => 
            array (
                'id_pegawai' => 664,
                'nip' => '196512191990031003',
                'nama' => 'SENTOT SUTARTO',
                'golongan' => 'III/c',
                'jabatan' => 'PRANATA LABORATORIUM PENDIDIKAN PENYELIA ',
                'password' => bcrypt('admin23'),
            ),
            112 => 
            array (
                'id_pegawai' => 665,
                'nip' => '196403261990031002',
                'nama' => 'SETIJAKA, SST.',
                'golongan' => 'III/b',
                'jabatan' => 'TEKNISI LABORATORIUM',
                'password' => bcrypt('admin23'),
            ),
            113 => 
            array (
                'id_pegawai' => 666,
                'nip' => '197409082005011001',
                'nama' => 'SIGIT TRI HARYANTO',
                'golongan' => 'II/d',
                'jabatan' => 'PENGADMINISTRASI AKADEMIK',
                'password' => bcrypt('admin23'),
            ),
            114 => 
            array (
                'id_pegawai' => 667,
                'nip' => '196208051989021001',
                'nama' => 'SISWOYO',
                'golongan' => 'III/c',
                'jabatan' => 'PRANATA LABORATORIUM PENDIDIKAN PENYELIA ',
                'password' => bcrypt('admin23'),
            ),
            115 => 
            array (
                'id_pegawai' => 668,
                'nip' => '196208051990032002',
                'nama' => 'SITI HARYANI',
                'golongan' => 'III/c',
                'jabatan' => 'PENGADMINISTRASI KEUANGAN',
                'password' => bcrypt('admin23'),
            ),
            116 => 
            array (
                'id_pegawai' => 669,
                'nip' => '198108222008102001',
                'nama' => 'SITI LATIFAH, S.E.',
                'golongan' => 'III/a',
                'jabatan' => 'TEKNISI LABORATORIUM',
                'password' => bcrypt('admin23'),
            ),
            117 => 
            array (
                'id_pegawai' => 670,
                'nip' => '196611251990032001',
                'nama' => 'SITI SUBAKHIROH',
                'golongan' => 'II/d',
                'jabatan' => 'PENGADMINISTRASI UMUM',
                'password' => bcrypt('admin23'),
            ),
            118 => 
            array (
                'id_pegawai' => 671,
                'nip' => '197005191990032001',
                'nama' => 'SITI WIDAYATUN',
                'golongan' => 'III/b',
                'jabatan' => 'PENGADMINISTRASI UMUM',
                'password' => bcrypt('admin23'),
            ),
            119 => 
            array (
                'id_pegawai' => 672,
                'nip' => '196804271990031003',
                'nama' => 'SLAMET',
                'golongan' => 'II/d',
                'jabatan' => 'PENGADMINISTRASI UMUM',
                'password' => bcrypt('admin23'),
            ),
            120 => 
            array (
                'id_pegawai' => 673,
                'nip' => '197409142008101001',
                'nama' => 'SLAMET RIYANTO',
                'golongan' => 'I/c',
                'jabatan' => 'PRAMU BAKTI',
                'password' => bcrypt('admin23'),
            ),
            121 => 
            array (
                'id_pegawai' => 674,
                'nip' => '196709062007101001',
                'nama' => 'SOFWAN',
                'golongan' => 'II/a',
                'jabatan' => 'PRAMU BAKTI',
                'password' => bcrypt('admin23'),
            ),
            122 => 
            array (
                'id_pegawai' => 675,
                'nip' => '198208102010122003',
                'nama' => 'SRI ASTUTI NURHAYATI, SE',
                'golongan' => 'III/a',
                'jabatan' => 'TEKNISI LABORATORIUM',
                'password' => bcrypt('admin23'),
            ),
            123 => 
            array (
                'id_pegawai' => 676,
                'nip' => '196810232002122001',
                'nama' => 'SRI HERPATINAH',
                'golongan' => 'II/d',
                'jabatan' => 'PENGADMINISTRASI AKADEMIK',
                'password' => bcrypt('admin23'),
            ),
            124 => 
            array (
                'id_pegawai' => 677,
                'nip' => '197607182003122002',
                'nama' => 'SRI KUSMIYULISTITI',
                'golongan' => 'II/d',
                'jabatan' => 'PENGADMINISTRASI AKADEMIK',
                'password' => bcrypt('admin23'),
            ),
            125 => 
            array (
                'id_pegawai' => 678,
                'nip' => '197507222000032001',
                'nama' => 'SRI LESTARI, S. Kom.',
                'golongan' => 'III/d',
                'jabatan' => 'PENGELOLA SISTEM INFORMASI',
                'password' => bcrypt('admin23'),
            ),
            126 => 
            array (
                'id_pegawai' => 679,
                'nip' => '197503032001122001',
                'nama' => 'SRI MARYANTI',
                'golongan' => 'III/b',
                'jabatan' => 'PENGADMINISTRASI PERSURATAN',
                'password' => bcrypt('admin23'),
            ),
            127 => 
            array (
                'id_pegawai' => 680,
                'nip' => '197110012000122001',
                'nama' => 'SRI RUWIYANTI, S.E.',
                'golongan' => 'III/c',
                'jabatan' => 'PENGADMINISTRASI AKADEMIK',
                'password' => bcrypt('admin23'),
            ),
            128 => 
            array (
                'id_pegawai' => 681,
                'nip' => '197001011990032010',
                'nama' => 'SRI SUMARSIH, S. Sos, M.IP.',
                'golongan' => 'IV/a',
                'jabatan' => 'PUSTAKAWAN MADYA',
                'password' => bcrypt('admin23'),
            ),
            129 => 
            array (
                'id_pegawai' => 682,
                'nip' => '197202152002122001',
                'nama' => 'SRI SUYAMI',
                'golongan' => 'II/d',
                'jabatan' => 'PENGADMINISTRASI AKADEMIK',
                'password' => bcrypt('admin23'),
            ),
            130 => 
            array (
                'id_pegawai' => 683,
                'nip' => '196007171988032001',
                'nama' => 'SRI WAHYUNI',
                'golongan' => 'III/b',
                'jabatan' => 'PENGADMINISTRASI UMUM',
                'password' => bcrypt('admin23'),
            ),
            131 => 
            array (
                'id_pegawai' => 684,
                'nip' => '197302282008101001',
                'nama' => 'SRI WIDODO',
                'golongan' => 'II/a',
                'jabatan' => 'PRAMU BAKTI',
                'password' => bcrypt('admin23'),
            ),
            132 => 
            array (
                'id_pegawai' => 685,
                'nip' => '196604221989022001',
                'nama' => 'SRI YATI, S.E, M. Si.',
                'golongan' => 'IV/a',
                'jabatan' => 'Kepala Subbagian Perencanaan',
                'password' => bcrypt('admin23'),
            ),
            133 => 
            array (
                'id_pegawai' => 686,
                'nip' => '197005232007011001',
                'nama' => 'SRIJATNO',
                'golongan' => 'II/a',
                'jabatan' => 'PRAMU BAKTI',
                'password' => bcrypt('admin23'),
            ),
            134 => 
            array (
                'id_pegawai' => 687,
                'nip' => '196606031990032001',
                'nama' => 'SUBARGIYATI, S.E.',
                'golongan' => 'III/c',
                'jabatan' => 'PENGADMINISTRASI KEMAHASISWAAN DAN ALUMNI',
                'password' => bcrypt('admin23'),
            ),
            135 => 
            array (
                'id_pegawai' => 688,
                'nip' => '196410261989021001',
                'nama' => 'SUDARTO',
                'golongan' => 'III/c',
                'jabatan' => 'PRANATA LABORATORIUM PENDIDIKAN PENYELIA ',
                'password' => bcrypt('admin23'),
            ),
            136 => 
            array (
                'id_pegawai' => 689,
                'nip' => '196108201989021001',
                'nama' => 'SUDIRO',
                'golongan' => 'II/d',
                'jabatan' => 'PRAMU BAKTI',
                'password' => bcrypt('admin23'),
            ),
            137 => 
            array (
                'id_pegawai' => 690,
                'nip' => '197211281999031001',
                'nama' => 'SUDJATMIKO',
                'golongan' => 'III/a',
                'jabatan' => 'TEKNISI SARANA DAN PRASARANA PENDIDIKAN',
                'password' => bcrypt('admin23'),
            ),
            138 => 
            array (
                'id_pegawai' => 691,
                'nip' => '196906171995011001',
                'nama' => 'SUGENG SUTOPO',
                'golongan' => 'III/c',
                'jabatan' => 'PENGELOLA KEUANGAN',
                'password' => bcrypt('admin23'),
            ),
            139 => 
            array (
                'id_pegawai' => 692,
                'nip' => '196010221989101001',
                'nama' => 'SUGIYANTO',
                'golongan' => 'II/d',
                'jabatan' => 'TEKNISI PERALATAN KANTOR',
                'password' => bcrypt('admin23'),
            ),
            140 => 
            array (
                'id_pegawai' => 693,
                'nip' => '196803152002122001',
                'nama' => 'SUGIYARTI',
                'golongan' => 'II/d',
                'jabatan' => 'PENGADMINISTRASI AKADEMIK',
                'password' => bcrypt('admin23'),
            ),
            141 => 
            array (
                'id_pegawai' => 694,
                'nip' => '196505291989031003',
                'nama' => 'SUGIYONO',
                'golongan' => 'III/c',
                'jabatan' => 'PRANATA LABORATORIUM PENDIDIKAN PENYELIA ',
                'password' => bcrypt('admin23'),
            ),
            142 => 
            array (
                'id_pegawai' => 695,
                'nip' => '197106252005011001',
                'nama' => 'SUHARDJO',
                'golongan' => 'II/d',
                'jabatan' => 'PENGADMINISTRASI AKADEMIK',
                'password' => bcrypt('admin23'),
            ),
            143 => 
            array (
                'id_pegawai' => 696,
                'nip' => '196407071989021001',
                'nama' => 'SUHARNO, S.H.',
                'golongan' => 'III/d',
                'jabatan' => 'KEPALA SUBBAGIAN AKADEMIK DAN KEMAHASISWAAN',
                'password' => bcrypt('admin23'),
            ),
            144 => 
            array (
                'id_pegawai' => 697,
                'nip' => '197412132000031001',
                'nama' => 'SUHARYANTO, S. Kom.',
                'golongan' => 'III/d',
                'jabatan' => 'PENYUSUN PROGRAM ANGGARAN DAN PELAPORAN',
                'password' => bcrypt('admin23'),
            ),
            145 => 
            array (
                'id_pegawai' => 698,
                'nip' => '196407061989022001',
                'nama' => 'SUISTINI',
                'golongan' => 'III/b',
                'jabatan' => 'PENGADMINISTRASI AKADEMIK',
                'password' => bcrypt('admin23'),
            ),
            146 => 
            array (
                'id_pegawai' => 699,
                'nip' => '196608081989021001',
                'nama' => 'SUJARTO',
                'golongan' => 'II/c',
                'jabatan' => 'PRAMU BAKTI',
                'password' => bcrypt('admin23'),
            ),
            147 => 
            array (
                'id_pegawai' => 700,
                'nip' => '196512101989021001',
                'nama' => 'SUKADI',
                'golongan' => 'III/a',
                'jabatan' => 'PENGADMINISTRASI AKADEMIK',
                'password' => bcrypt('admin23'),
            ),
            148 => 
            array (
                'id_pegawai' => 701,
                'nip' => '196708241999031001',
                'nama' => 'SUKAERI',
                'golongan' => 'III/a',
                'jabatan' => 'TEKNISI LABORATORIUM',
                'password' => bcrypt('admin23'),
            ),
            149 => 
            array (
                'id_pegawai' => 702,
                'nip' => '197309151999031001',
                'nama' => 'SUKARDI, S.T.',
                'golongan' => 'III/d',
                'jabatan' => 'TEKNISI SARANA DAN PRASARANA PENDIDIKAN',
                'password' => bcrypt('admin23'),
            ),
            150 => 
            array (
                'id_pegawai' => 703,
                'nip' => '196207251989021001',
                'nama' => 'SUKARMAN, S.T.',
                'golongan' => 'III/D',
                'jabatan' => 'PRANATA LABORATORIUM PENDIDIKAN MUDA ',
                'password' => bcrypt('admin23'),
            ),
            151 => 
            array (
                'id_pegawai' => 704,
                'nip' => '196812041990031002',
                'nama' => 'SUKIJO',
                'golongan' => 'III/b',
                'jabatan' => 'PETUGAS KEAMANAN',
                'password' => bcrypt('admin23'),
            ),
            152 => 
            array (
                'id_pegawai' => 705,
                'nip' => '196008191988031002',
                'nama' => 'SUKINO',
                'golongan' => 'III/b',
                'jabatan' => 'PENGADMINISTRASI KEUANGAN',
                'password' => bcrypt('admin23'),
            ),
            153 => 
            array (
                'id_pegawai' => 706,
                'nip' => '196007161989021001',
                'nama' => 'SUMONO',
                'golongan' => 'II/c',
                'jabatan' => 'PETUGAS PENGGANDAAN',
                'password' => bcrypt('admin23'),
            ),
            154 => 
            array (
                'id_pegawai' => 707,
                'nip' => '196307171989021001',
                'nama' => 'SUNARTO, S.T.',
                'golongan' => 'III/d',
                'jabatan' => 'PRANATA LABORATORIUM PENDIDIKAN MUDA ',
                'password' => bcrypt('admin23'),
            ),
            155 => 
            array (
                'id_pegawai' => 708,
                'nip' => '197706132000031002',
                'nama' => 'SUPANTO, S.E, M. Si.',
                'golongan' => 'III/d',
                'jabatan' => 'KEPALA SUBBAGIAN KEUANGAN',
                'password' => bcrypt('admin23'),
            ),
            156 => 
            array (
                'id_pegawai' => 709,
                'nip' => '196906252008101001',
                'nama' => 'SUPARDJO',
                'golongan' => 'II/a',
                'jabatan' => 'PETUGAS KEAMANAN',
                'password' => bcrypt('admin23'),
            ),
            157 => 
            array (
                'id_pegawai' => 710,
                'nip' => '196303281989021001',
                'nama' => 'SUPIYONO',
                'golongan' => 'III/c',
                'jabatan' => 'PRANATA LABORATORIUM PENDIDIKAN PENYELIA ',
                'password' => bcrypt('admin23'),
            ),
            158 => 
            array (
                'id_pegawai' => 711,
                'nip' => '196803041989021001',
                'nama' => 'SURAJI',
                'golongan' => 'II/d',
                'jabatan' => 'PENGADMINISTRASI AKADEMIK',
                'password' => bcrypt('admin23'),
            ),
            159 => 
            array (
                'id_pegawai' => 712,
                'nip' => '196007231989021001',
                'nama' => 'SURATMIN',
                'golongan' => 'III/b',
                'jabatan' => 'TEKNISI LABORATORIUM',
                'password' => bcrypt('admin23'),
            ),
            160 => 
            array (
                'id_pegawai' => 713,
                'nip' => '196304011987031002',
                'nama' => 'SURATNO',
                'golongan' => 'II/c',
                'jabatan' => 'PRAMU BAKTI',
                'password' => bcrypt('admin23'),
            ),
            161 => 
            array (
                'id_pegawai' => 714,
                'nip' => '197203012007011001',
                'nama' => 'SURONO',
                'golongan' => 'II/a',
                'jabatan' => 'PRAMU BAKTI',
                'password' => bcrypt('admin23'),
            ),
            162 => 
            array (
                'id_pegawai' => 715,
                'nip' => '196303241989021001',
                'nama' => 'SURYANI',
                'golongan' => 'III/b',
                'jabatan' => 'PENGEMUDI',
                'password' => bcrypt('admin23'),
            ),
            163 => 
            array (
                'id_pegawai' => 716,
                'nip' => '197812112005012002',
                'nama' => 'SUTARTI, S.E., Akt',
                'golongan' => 'III/c',
                'jabatan' => 'TEKNISI LABORATORIUM',
                'password' => bcrypt('admin23'),
            ),
            164 => 
            array (
                'id_pegawai' => 717,
                'nip' => '196306161989021001',
                'nama' => 'SUTARTO',
                'golongan' => 'III/c',
                'jabatan' => 'PRANATA LABORATORIUM PENDIDIKAN PENYELIA ',
                'password' => bcrypt('admin23'),
            ),
            165 => 
            array (
                'id_pegawai' => 718,
                'nip' => '196908281990031002',
                'nama' => 'SUTIYO',
                'golongan' => 'II/c',
                'jabatan' => 'PRAMU BAKTI',
                'password' => bcrypt('admin23'),
            ),
            166 => 
            array (
                'id_pegawai' => 719,
                'nip' => '196209241989021001',
                'nama' => 'SUTOPO',
                'golongan' => 'II/d',
                'jabatan' => 'PETUGAS KEAMANAN',
                'password' => bcrypt('admin23'),
            ),
            167 => 
            array (
                'id_pegawai' => 720,
                'nip' => '196102141989021001',
                'nama' => 'SUWANDI',
                'golongan' => 'II/c',
                'jabatan' => 'PRAMU BAKTI',
                'password' => bcrypt('admin23'),
            ),
            168 => 
            array (
                'id_pegawai' => 721,
                'nip' => '197810232001121001',
                'nama' => 'SUWARNO, S. Sos, M.I.Kom',
                'golongan' => 'III/d',
                'jabatan' => 'PUSTAKAWAN MUDA',
                'password' => bcrypt('admin23'),
            ),
            169 => 
            array (
                'id_pegawai' => 722,
                'nip' => '197306182000032001',
                'nama' => 'SUYANTI',
                'golongan' => 'III/a',
            'jabatan' => 'PENGELOLA GAJI (PENDIDIKAN D III)',
                'password' => bcrypt('admin23'),
            ),
            170 => 
            array (
                'id_pegawai' => 723,
                'nip' => '196308141990031002',
                'nama' => 'TAMTOMO SIDI, Drs.',
                'golongan' => 'III/c',
                'jabatan' => 'TEKNISI LABORATORIUM',
                'password' => bcrypt('admin23'),
            ),
            171 => 
            array (
                'id_pegawai' => 724,
                'nip' => '196112271988031002',
                'nama' => 'TARMIDI',
                'golongan' => 'II/d',
                'jabatan' => 'PETUGAS KEAMANAN',
                'password' => bcrypt('admin23'),
            ),
            172 => 
            array (
                'id_pegawai' => 725,
                'nip' => '196302021990032001',
                'nama' => 'TATIK SAYEKTI, S. Hum',
                'golongan' => 'III/d',
                'jabatan' => 'PUSTAKAWAN MUDA',
                'password' => bcrypt('admin23'),
            ),
            173 => 
            array (
                'id_pegawai' => 726,
                'nip' => '197703081999031009',
                'nama' => 'TEGUH BUDI RAHARJO, A.Md.',
                'golongan' => 'III/c',
                'jabatan' => 'TEKNISI SARANA DAN PRASARANA PENDIDIKAN',
                'password' => bcrypt('admin23'),
            ),
            174 => 
            array (
                'id_pegawai' => 727,
                'nip' => '197312141999032003',
                'nama' => 'TIAS MINTANING LESTARIANI, S.E.',
                'golongan' => 'III/c',
                'jabatan' => 'BENDAHARA',
                'password' => bcrypt('admin23'),
            ),
            175 => 
            array (
                'id_pegawai' => 728,
                'nip' => '198003202009121002',
                'nama' => 'TOTOK EDI PRAYITNO',
                'golongan' => 'II/b',
                'jabatan' => 'TEKNISI SARANA DAN PRASARANA PENDIDIKAN',
                'password' => bcrypt('admin23'),
            ),
            176 => 
            array (
                'id_pegawai' => 729,
                'nip' => '196702281990031006',
                'nama' => 'TRIATMO SUGIH HARDONO, S.T.',
                'golongan' => 'III/b',
                'jabatan' => 'TEKNISI LABORATORIUM',
                'password' => bcrypt('admin23'),
            ),
            177 => 
            array (
                'id_pegawai' => 730,
                'nip' => '196010041989101001',
                'nama' => 'TRINOTO WIDODO, S.E, M. M.',
                'golongan' => 'IV/b',
                'jabatan' => 'KEPALA BAGIAN AKADEMIK, KEMAHASISWAAN, PERENCANAAN, DAN KERJA SAMA',
                'password' => bcrypt('admin23'),
            ),
            178 => 
            array (
                'id_pegawai' => 731,
                'nip' => '197005072005012002',
                'nama' => 'TRISNI SUGHIYATMI',
                'golongan' => 'II/d',
                'jabatan' => 'PENGADMINISTRASI AKADEMIK',
                'password' => bcrypt('admin23'),
            ),
            179 => 
            array (
                'id_pegawai' => 732,
                'nip' => '196406111988031001',
                'nama' => 'TRIYANTO',
                'golongan' => 'II/d',
                'jabatan' => 'PENGADMINISTRASI UMUM',
                'password' => bcrypt('admin23'),
            ),
            180 => 
            array (
                'id_pegawai' => 733,
                'nip' => '196809251989021001',
                'nama' => 'TUGIJANTO',
                'golongan' => 'III/b',
                'jabatan' => 'PENGADMINISTRASI AKADEMIK',
                'password' => bcrypt('admin23'),
            ),
            181 => 
            array (
                'id_pegawai' => 734,
                'nip' => '197611171999031003',
                'nama' => 'TULUS SETIAWAN, A.Md.',
                'golongan' => 'III/b',
                'jabatan' => 'PRANATA LABORATORIUM PENDIDIKAN PELAKSANA LANJUTAN ',
                'password' => bcrypt('admin23'),
            ),
            182 => 
            array (
                'id_pegawai' => 735,
                'nip' => '197308012003122001',
                'nama' => 'UMI SALAMAH',
                'golongan' => 'III/b',
                'jabatan' => 'TEKNISI LABORATORIUM',
                'password' => bcrypt('admin23'),
            ),
            183 => 
            array (
                'id_pegawai' => 736,
                'nip' => '196210121988032001',
                'nama' => 'UMIYATI',
                'golongan' => 'III/b',
                'jabatan' => 'PENGADMINISTRASI PROGRAM DAN KERJASAMA',
                'password' => bcrypt('admin23'),
            ),
            184 => 
            array (
                'id_pegawai' => 737,
                'nip' => '197709232001122001',
                'nama' => 'UTAMI SULISTYOWATI',
                'golongan' => 'III/b',
                'jabatan' => 'PENGELOLA KEUANGAN',
                'password' => bcrypt('admin23'),
            ),
            185 => 
            array (
                'id_pegawai' => 738,
                'nip' => '197602212002121002',
                'nama' => 'WAKHID ROCHAYADI',
                'golongan' => 'III/a',
                'jabatan' => 'PRANATA LABORATORIUM PENDIDIKAN PELAKSANA LANJUTAN ',
                'password' => bcrypt('admin23'),
            ),
            186 => 
            array (
                'id_pegawai' => 739,
                'nip' => '198107202009122001',
                'nama' => 'WARIDASRI SUSANTI, A. Md.',
                'golongan' => 'II/d',
                'jabatan' => 'TEKNISI LABORATORIUM',
                'password' => bcrypt('admin23'),
            ),
            187 => 
            array (
                'id_pegawai' => 740,
                'nip' => '197504272008101001',
                'nama' => 'WELASIMAN',
                'golongan' => 'II/a',
                'jabatan' => 'PRAMU BAKTI',
                'password' => bcrypt('admin23'),
            ),
            188 => 
            array (
                'id_pegawai' => 741,
                'nip' => '196306281989021001',
                'nama' => 'WIDODO',
                'golongan' => 'III/c',
                'jabatan' => 'PRANATA LABORATORIUM PENDIDIKAN PENYELIA ',
                'password' => bcrypt('admin23'),
            ),
            189 => 
            array (
                'id_pegawai' => 742,
                'nip' => '198303012009102003',
                'nama' => 'WINARSIH',
                'golongan' => 'II/c',
                'jabatan' => 'PENGADMINISTRASI PERSURATAN',
                'password' => bcrypt('admin23'),
            ),
            190 => 
            array (
                'id_pegawai' => 743,
                'nip' => '196111231988031002',
                'nama' => 'WISETYO NUGROHO',
                'golongan' => 'III/b',
                'jabatan' => 'PENGADMINISTRASI KEPEGAWAIAN',
                'password' => bcrypt('admin23'),
            ),
            191 => 
            array (
                'id_pegawai' => 744,
                'nip' => '196106212006041006',
                'nama' => 'YOHANNES BAPTISTA SUDARYANTO',
                'golongan' => 'II/c',
                'jabatan' => 'PENGADMINISTRASI UMUM',
                'password' => bcrypt('admin23'),
            ),
            192 => 
            array (
                'id_pegawai' => 745,
                'nip' => '196608152001121001',
                'nama' => 'ZAENAL ARIFIN',
                'golongan' => 'II/d',
                'jabatan' => 'PENGADMINISTRASI AKADEMIK',
                'password' => bcrypt('admin23'),
            ),
            193 => 
            array (
                'id_pegawai' => 746,
                'nip' => '195705151989031002',
                'nama' => 'ADILISTIONO, S.E, M.M, Akt.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            194 => 
            array (
                'id_pegawai' => 747,
                'nip' => '197612062002121003',
                'nama' => 'AFIAT SADIDA, S.Kom, M.M.',
                'golongan' => 'III/b',
                'jabatan' => 'ASISTEN AHLI',
                'password' => bcrypt('admin23'),
            ),
            195 => 
            array (
                'id_pegawai' => 748,
                'nip' => '197304252005011001',
                'nama' => 'AGUS SUWONDO, S. Kom. M. Kom',
                'golongan' => 'III/a',
                'jabatan' => 'ASISTEN AHLI',
                'password' => bcrypt('admin23'),
            ),
            196 => 
            array (
                'id_pegawai' => 749,
                'nip' => '196502221992031002',
                'nama' => 'ARIS SUNINDYO, S.E, M.M.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            197 => 
            array (
                'id_pegawai' => 750,
                'nip' => '196005271988031002',
                'nama' => 'BOEDIONO,S.E, M.M.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            198 => 
            array (
                'id_pegawai' => 751,
                'nip' => '196205261988112001',
                'nama' => 'BUDHI ADHIANI C, Dra, M. Sc',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            199 => 
            array (
                'id_pegawai' => 752,
                'nip' => '195908301988032001',
                'nama' => 'CHRISTINA RETNO G, S.E, M. Si.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            200 => 
            array (
                'id_pegawai' => 753,
                'nip' => '196203261989032002',
                'nama' => 'DEWI SRI MARSANTI, S.E, M.M.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            201 => 
            array (
                'id_pegawai' => 754,
                'nip' => '196506011988031001',
                'nama' => 'DIDIEK SUSILO TAMTOMO, S.E, M. Si, Akt.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            202 => 
            array (
                'id_pegawai' => 755,
                'nip' => '196405141990031001',
                'nama' => 'EDI WIJAYANTO, S.E, M. Si.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            203 => 
            array (
                'id_pegawai' => 756,
                'nip' => '196705181993032001',
                'nama' => 'EKA MURTIASRI, S.E, M. Si.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            204 => 
            array (
                'id_pegawai' => 757,
                'nip' => '195911271993032001',
                'nama' => 'EMBUN DURIANY SOEMARSO, Dra, M.M.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            205 => 
            array (
                'id_pegawai' => 758,
                'nip' => '196101271989101001',
                'nama' => 'HARTONO, S.E, M.M.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            206 => 
            array (
                'id_pegawai' => 759,
                'nip' => '196103031991031001',
                'nama' => 'I. NYOMAN ROMANGSI, Drs, M. Pd.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            207 => 
            array (
                'id_pegawai' => 760,
                'nip' => '195904211988032002',
                'nama' => 'IDA SAVITRI KUSMARGIANI, Dra, M.M.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            208 => 
            array (
                'id_pegawai' => 761,
                'nip' => '198410192010121003',
                'nama' => 'IWAN BUDIYONO, S.E, M. Si, Akt.',
                'golongan' => 'III/b',
                'jabatan' => 'ASISTEN AHLI',
                'password' => bcrypt('admin23'),
            ),
            209 => 
            array (
                'id_pegawai' => 762,
                'nip' => '196403121992032001',
                'nama' => 'JATI HANDAYANI, S.E, MSI',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            210 => 
            array (
                'id_pegawai' => 763,
                'nip' => '195811091991031001',
                'nama' => 'JUSMI, S.E, M. Si. Dr.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            211 => 
            array (
                'id_pegawai' => 764,
                'nip' => '196110261989031002',
                'nama' => 'KUSMAYADI, S.E, M. Si, Akt.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            212 => 
            array (
                'id_pegawai' => 765,
                'nip' => '196405111990032001',
                'nama' => 'LARDIN KORAWIJAYANTI, Dra, M.M.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            213 => 
            array (
                'id_pegawai' => 766,
                'nip' => '196804281993032002',
                'nama' => 'LILIS MARDIANA A, S.H, M. Kn.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            214 => 
            array (
                'id_pegawai' => 767,
                'nip' => '196302151992032001',
                'nama' => 'MANAROTUL FATATI, S.E, M.M.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            215 => 
            array (
                'id_pegawai' => 768,
                'nip' => '196307161990032002',
                'nama' => 'MARDINAWATI, Dra, M.M.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            216 => 
            array (
                'id_pegawai' => 769,
                'nip' => '196708211993032003',
                'nama' => 'MARIA THERESIA HENI W, S.E, M. Si.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            217 => 
            array (
                'id_pegawai' => 770,
                'nip' => '197603192001122001',
                'nama' => 'MARLIYATI, S.E, M. Si, Akt.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            218 => 
            array (
                'id_pegawai' => 771,
                'nip' => '195906221989031002',
                'nama' => 'MOCHAMAD ABDUL KODIR, S.E, M.M.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            219 => 
            array (
                'id_pegawai' => 772,
                'nip' => '196208081992031002',
                'nama' => 'MOH MUSLIKH, Drs.M.Pd',
                'golongan' => 'III/a',
                'jabatan' => 'ASISTEN AHLI',
                'password' => bcrypt('admin23'),
            ),
            220 => 
            array (
                'id_pegawai' => 773,
                'nip' => '196904051998021001',
                'nama' => 'MOH. HARIS, S.E. M. Si',
                'golongan' => 'III/a',
                'jabatan' => 'ASISTEN AHLI',
                'password' => bcrypt('admin23'),
            ),
            221 => 
            array (
                'id_pegawai' => 774,
                'nip' => '197608012000121001',
                'nama' => 'MOHAMAD HASANUDIN, S.E, M. Si.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            222 => 
            array (
                'id_pegawai' => 775,
                'nip' => '197609152000031001',
                'nama' => 'MUH NOOR ARDIANSAH, S.E, M.Si, Akt.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            223 => 
            array (
                'id_pegawai' => 776,
                'nip' => '196202161990031001',
                'nama' => 'MUHAMMAD ASRORI, Drs, M.Si.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            224 => 
            array (
                'id_pegawai' => 777,
                'nip' => '196008151990031001',
                'nama' => 'MUHAMMAD ROIS, S.E, M. Sc.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            225 => 
            array (
                'id_pegawai' => 778,
                'nip' => '196609261992032002',
                'nama' => 'MUSTIKA WIDOWATI, S.E, M. Si.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            226 => 
            array (
                'id_pegawai' => 779,
                'nip' => '197302141997032001',
                'nama' => 'NIKMATUNIAYAH, S.E, M. Si. Akt',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            227 => 
            array (
                'id_pegawai' => 780,
                'nip' => '196605031992032001',
                'nama' => 'NINA WOELAN SOEBROTO, S.E, M.M.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            228 => 
            array (
                'id_pegawai' => 781,
                'nip' => '196511201992032001',
                'nama' => 'NURUL HAMIDA, Dra, M. Pd.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            229 => 
            array (
                'id_pegawai' => 782,
                'nip' => '197008051998021001',
                'nama' => 'NYATA NUGRAHA, S.E, M.Si, Akt.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            230 => 
            array (
                'id_pegawai' => 783,
                'nip' => '196110241990031002',
                'nama' => 'PANDIYA, Drs, M. Pd',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            231 => 
            array (
                'id_pegawai' => 784,
                'nip' => '195410131989101001',
                'nama' => 'PETRUS MAHARSI, S.E, M.M.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            232 => 
            array (
                'id_pegawai' => 785,
                'nip' => '197607172006042002',
                'nama' => 'PRIHATININGSIH, S.E, M.M.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            233 => 
            array (
                'id_pegawai' => 786,
                'nip' => '196106181988031002',
                'nama' => 'R. GUNAWAN SETIANEGARA, S.E, M.M.',
                'golongan' => 'III/b',
                'jabatan' => 'ASISTEN AHLI',
                'password' => bcrypt('admin23'),
            ),
            234 => 
            array (
                'id_pegawai' => 787,
                'nip' => '1,98707E+17',
                'nama' => 'RANI RAHARJANTI, SE., M.Si.',
                'golongan' => 'III/b',
                'jabatan' => 'ASISTEN AHLI',
                'password' => bcrypt('admin23'),
            ),
            235 => 
            array (
                'id_pegawai' => 788,
                'nip' => '197211021998022001',
                'nama' => 'RESI YUDHANINGSIH, S.E, M. Si.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            236 => 
            array (
                'id_pegawai' => 789,
                'nip' => '196009161990112001',
                'nama' => 'RETNO WINARTI HANDAYANI, Dra, M.M.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            237 => 
            array (
                'id_pegawai' => 790,
                'nip' => '196407081990031002',
                'nama' => 'RUDI HANDOYONO, S.E, M. Si.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            238 => 
            array (
                'id_pegawai' => 791,
                'nip' => '196710251997021003',
                'nama' => 'SAM\'ANI, S.E, M.M.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            239 => 
            array (
                'id_pegawai' => 792,
                'nip' => '196202191990031001',
                'nama' => 'SANIMAN WIDODO, S.E, M.M.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            240 => 
            array (
                'id_pegawai' => 793,
                'nip' => '196304261989031001',
                'nama' => 'SARANA, S.E, M. Si.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            241 => 
            array (
                'id_pegawai' => 794,
                'nip' => '196108191990031001',
                'nama' => 'SARTONO, Dr. S.E. M. Si.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            242 => 
            array (
                'id_pegawai' => 795,
                'nip' => '196412301990032002',
                'nama' => 'SITI ARBAINAH, S.E, M.M.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            243 => 
            array (
                'id_pegawai' => 796,
                'nip' => '197111042008012008',
                'nama' => 'SITI HASANAH, M. Ag.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            244 => 
            array (
                'id_pegawai' => 797,
                'nip' => '196703221994032001',
                'nama' => 'SITI MUTMAINAH, S.E, M. Si.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            245 => 
            array (
                'id_pegawai' => 798,
                'nip' => '196005151990032001',
                'nama' => 'SRI HARDININGSIH HS, Dr. Dra, M. Hum, ',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            246 => 
            array (
                'id_pegawai' => 799,
                'nip' => '196112271989032002',
                'nama' => 'SRI MURTINI, S.E, M. Si.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            247 => 
            array (
                'id_pegawai' => 800,
                'nip' => '196507191990032001',
                'nama' => 'SRI RAHAYU ZEES, Dra, M. Ed.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            248 => 
            array (
                'id_pegawai' => 801,
                'nip' => '196002291988032004',
                'nama' => 'SRI WIDIYATI, Dra, M. Si.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            249 => 
            array (
                'id_pegawai' => 802,
                'nip' => '195909061988112001',
                'nama' => 'SUGIARTI, Dra, M. Si.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            250 => 
            array (
                'id_pegawai' => 803,
                'nip' => '196010131988031002',
                'nama' => 'SUKO RAHARJO, Drs., M. Hum',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            251 => 
            array (
                'id_pegawai' => 804,
                'nip' => '196004221990031001',
                'nama' => 'SULISTIYO, Drs, M.M.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            252 => 
            array (
                'id_pegawai' => 805,
                'nip' => '196207191993031002',
                'nama' => 'SUMANTO, S.H, M.H.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            253 => 
            array (
                'id_pegawai' => 806,
                'nip' => '196604011992032002',
                'nama' => 'SURYANI SRI LESTARI, S.E, M. Bus.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            254 => 
            array (
                'id_pegawai' => 807,
                'nip' => '195503251986031001',
                'nama' => 'SUSANTO DIAMANDJOJO, Drs, M.M.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            255 => 
            array (
                'id_pegawai' => 808,
                'nip' => '195611051993031001',
                'nama' => 'SUSENA, Drs, M.S.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            256 => 
            array (
                'id_pegawai' => 809,
                'nip' => '196102241990031001',
                'nama' => 'TEGUH BUDI SANTOSA, SE, MM',
                'golongan' => 'III/b',
                'jabatan' => 'ASISTEN AHLI',
                'password' => bcrypt('admin23'),
            ),
            257 => 
            array (
                'id_pegawai' => 810,
                'nip' => '196406151990032003',
                'nama' => 'THERESIA TYAS LISTYANI, S.E, M. Si.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            258 => 
            array (
                'id_pegawai' => 811,
                'nip' => '196302261992031001',
                'nama' => 'TONI HARTONO, Drs, M. Pd.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            259 => 
            array (
                'id_pegawai' => 812,
                'nip' => '195708211988111001',
                'nama' => 'TRIBEKTI MARYANTO A, Drs, M. Pd.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            260 => 
            array (
                'id_pegawai' => 813,
                'nip' => '196602101994032003',
                'nama' => 'TUTIK DWI KARYANTI, Dra, M. Si, Akt',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            261 => 
            array (
                'id_pegawai' => 814,
                'nip' => '196808271994032003',
                'nama' => 'ULFAH HIDAYATI, S.E, M. Si, Akt.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            262 => 
            array (
                'id_pegawai' => 815,
                'nip' => '196010261989102001',
                'nama' => 'UTAMI TRI SULISTYORINI, S.E, MBA, Dr.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            263 => 
            array (
                'id_pegawai' => 816,
                'nip' => '196802251993032003',
                'nama' => 'WINARNI, S.E, M.M.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            264 => 
            array (
                'id_pegawai' => 817,
                'nip' => '197305271999031002',
                'nama' => 'ACHMAD ZAENUDDIN, S.E, M. Si.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            265 => 
            array (
                'id_pegawai' => 818,
                'nip' => '195708251988111001',
                'nama' => 'AGUS SURATNO, Drs, M.M.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            266 => 
            array (
                'id_pegawai' => 819,
                'nip' => '197607202008011011',
                'nama' => 'ANDI SETIAWAN, S.E, M.M.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            267 => 
            array (
                'id_pegawai' => 820,
                'nip' => '198312232006042001',
                'nama' => 'AZIZAH, S Kom, M. Kom',
                'golongan' => 'III/a',
                'jabatan' => 'ASISTEN AHLI',
                'password' => bcrypt('admin23'),
            ),
            268 => 
            array (
                'id_pegawai' => 821,
                'nip' => '196111171989031003',
                'nama' => 'BUDI PRASETYA, Drs. M. Si.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            269 => 
            array (
                'id_pegawai' => 822,
                'nip' => '196308111990031002',
                'nama' => 'DODY SETYADI, S.E, M.Si. ',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            270 => 
            array (
                'id_pegawai' => 823,
                'nip' => '197403042006042001',
                'nama' => 'ENDANG SULISTIYANI, S.E, M.M.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            271 => 
            array (
                'id_pegawai' => 824,
                'nip' => '195910131989032002',
                'nama' => 'ERIKA DEVIE, Dra, M. Ed. M.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            272 => 
            array (
                'id_pegawai' => 825,
                'nip' => '195811151989031003',
                'nama' => 'FATCHUN HASYIM, Drs, M. Si.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            273 => 
            array (
                'id_pegawai' => 826,
                'nip' => '196405041992032001',
                'nama' => 'HADIAHTI UTAMI, S.E, M.M.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            274 => 
            array (
                'id_pegawai' => 827,
                'nip' => '197110032000032001',
                'nama' => 'INAYAH, S. Psi, M. Sc.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            275 => 
            array (
                'id_pegawai' => 828,
                'nip' => '196606051993032001',
                'nama' => 'ISNAINI NURKHAYATI, S.E, M.M.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            276 => 
            array (
                'id_pegawai' => 829,
                'nip' => '197704292001121001',
                'nama' => 'IWAN HERMAWAN, S. Kom, M.T.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            277 => 
            array (
                'id_pegawai' => 830,
                'nip' => '197006142005012001',
                'nama' => 'JUMI, Dr. S. Kom, M. Kom.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            278 => 
            array (
                'id_pegawai' => 831,
                'nip' => '196404141990031002',
                'nama' => 'KARNOWAHADI, Dr. S.E, M.M. ',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            279 => 
            array (
                'id_pegawai' => 832,
                'nip' => '196512011999031001',
                'nama' => 'KHAIRUL SALEH, Drs, M.S.I.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            280 => 
            array (
                'id_pegawai' => 833,
                'nip' => '196201231989032001',
                'nama' => 'KURNIANI, S.E, M.M.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            281 => 
            array (
                'id_pegawai' => 834,
                'nip' => '197212152000031001',
                'nama' => 'LUQMAN KHAKIM, S.Sos, MFM.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            282 => 
            array (
                'id_pegawai' => 835,
                'nip' => '196303251992032001',
                'nama' => 'LUSIA M. SILITONGA, Dra, M. Pd.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            283 => 
            array (
                'id_pegawai' => 836,
                'nip' => '196403281990031002',
                'nama' => 'M. NAHAR, Drs, M. Pd.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            284 => 
            array (
                'id_pegawai' => 837,
                'nip' => '196105271988031002',
                'nama' => 'MAKMUN RIYANTO, S.E, M.M.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            285 => 
            array (
                'id_pegawai' => 838,
                'nip' => '196503311992032002',
                'nama' => 'NOOR SUROIJA, S.E, M.M.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            286 => 
            array (
                'id_pegawai' => 839,
                'nip' => '196108231988112001',
                'nama' => 'NUR RINI, Dra, M. Pd.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            287 => 
            array (
                'id_pegawai' => 840,
                'nip' => '196010051988031003',
                'nama' => 'PANIYA, Drs, M. Pd.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            288 => 
            array (
                'id_pegawai' => 841,
                'nip' => '195806101988111001',
                'nama' => 'PUTUT HARIBOWO, S.E, M.M.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            289 => 
            array (
                'id_pegawai' => 842,
                'nip' => '196405201992032001',
                'nama' => 'RARA RIRIN BUDI U, Dra, M. Si.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            290 => 
            array (
                'id_pegawai' => 843,
                'nip' => '196207171990032002',
                'nama' => 'RIF\'AH DWI ASTUTI, Dra. M.M',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            291 => 
            array (
                'id_pegawai' => 844,
                'nip' => '196002011988111001',
                'nama' => 'RIYADI, DRS, M.M.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            292 => 
            array (
                'id_pegawai' => 845,
                'nip' => '195610081982032002',
                'nama' => 'RUSMINI, Dra, M.M.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            293 => 
            array (
                'id_pegawai' => 846,
                'nip' => '196506151993031001',
                'nama' => 'RUSTONO, S.E, M.M.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            294 => 
            array (
                'id_pegawai' => 847,
                'nip' => '196012021990031001',
                'nama' => 'SANDI SUPAYA, Drs, M.M.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            295 => 
            array (
                'id_pegawai' => 848,
                'nip' => '196311271990032001',
                'nama' => 'SAPTIANING, Dra, M.M.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            296 => 
            array (
                'id_pegawai' => 849,
                'nip' => '196303161990032002',
                'nama' => 'SITI NUR BAROKAH, Dra, M.M.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            297 => 
            array (
                'id_pegawai' => 850,
                'nip' => '196402111989032002',
                'nama' => 'SRI EKA SADRIATWATI, S. Sos, M.M.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            298 => 
            array (
                'id_pegawai' => 851,
                'nip' => '196304151990032001',
                'nama' => 'SRI MARHAENI SALSIYAH, Dra, M.M.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            299 => 
            array (
                'id_pegawai' => 852,
                'nip' => '196307211989032002',
                'nama' => 'SRI WAHYUNI, S.E, M.M.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            300 => 
            array (
                'id_pegawai' => 853,
                'nip' => '196004151992031001',
                'nama' => 'SUBANDI, Drs. MM.Par',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            301 => 
            array (
                'id_pegawai' => 854,
                'nip' => '196502011992031001',
                'nama' => 'SUGIYANTA, S.E, M. Pd.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            302 => 
            array (
                'id_pegawai' => 855,
                'nip' => '196312271999031001',
                'nama' => 'SUHARMANTO, Drs, M.Si',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            303 => 
            array (
                'id_pegawai' => 856,
                'nip' => '195710231989031001',
                'nama' => 'SURYADI POERBO, S.E, M.M.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            304 => 
            array (
                'id_pegawai' => 857,
                'nip' => '196211261990111001',
                'nama' => 'SUWARDI, S.E, M.M.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            305 => 
            array (
                'id_pegawai' => 858,
                'nip' => '196412021992032001',
                'nama' => 'TAVIYASTUTI, Dra, M.M.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            306 => 
            array (
                'id_pegawai' => 859,
                'nip' => '196204161990031002',
                'nama' => 'UMAR FAROUK, Drs, M. Si.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            307 => 
            array (
                'id_pegawai' => 860,
                'nip' => '196001061989101001',
                'nama' => 'WINARTO, S.E, M.M.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            308 => 
            array (
                'id_pegawai' => 861,
                'nip' => '196307071990031004',
                'nama' => 'YULI SUDARSO, S.E, M.M.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            309 => 
            array (
                'id_pegawai' => 862,
                'nip' => '198101312006041003',
                'nama' => 'YUSMAR ARDHI HIDAYAT, S.E, M. Si.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            310 => 
            array (
                'id_pegawai' => 863,
                'nip' => '195912091985031003',
                'nama' => 'ANUNG SUWARNO, SST. M.T.',
                'golongan' => 'III/d',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            311 => 
            array (
                'id_pegawai' => 864,
                'nip' => '198006052005011003',
                'nama' => 'ARIEF SUBAKTI ARIYANTO, S.T.M.T.',
                'golongan' => 'III/a',
                'jabatan' => 'ASISTEN AHLI',
                'password' => bcrypt('admin23'),
            ),
            312 => 
            array (
                'id_pegawai' => 865,
                'nip' => '195911271988031002',
                'nama' => 'BASUKI SETIYO BUDI, S.T, M.T.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            313 => 
            array (
                'id_pegawai' => 866,
                'nip' => '196006071991031002',
                'nama' => 'DADIYONO AMAT PAWIRO, Ing. HTL, MT',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            314 => 
            array (
                'id_pegawai' => 867,
                'nip' => '197712062001121001',
                'nama' => 'DEDI BUDI SETIAWAN, S.T, M.T.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            315 => 
            array (
                'id_pegawai' => 868,
                'nip' => '197009041995012001',
                'nama' => 'DIANITA RATNA K, S.T, M.T.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            316 => 
            array (
                'id_pegawai' => 869,
                'nip' => '196006171987031005',
                'nama' => 'EDY SUHARTONO, Dr. Drs, M. Si. ',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            317 => 
            array (
                'id_pegawai' => 870,
                'nip' => '196708121990031003',
                'nama' => 'GARUP LAMBANG GORO, S.T, M.T.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            318 => 
            array (
                'id_pegawai' => 871,
                'nip' => '195708291985031003',
                'nama' => 'HADI WIBOWO, S.T. M.T.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            319 => 
            array (
                'id_pegawai' => 872,
                'nip' => '195401051984031002',
                'nama' => 'HARTONO, SST. M.Si',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            320 => 
            array (
                'id_pegawai' => 873,
                'nip' => '196002111984031002',
                'nama' => 'HERRY LUDIRO WAHYONO, S.T, M.T.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            321 => 
            array (
                'id_pegawai' => 874,
                'nip' => '196212021988031001',
                'nama' => 'IMAM NURHADI, SST. M.Si',
                'golongan' => 'III/a',
                'jabatan' => 'ASISTEN AHLI',
                'password' => bcrypt('admin23'),
            ),
            322 => 
            array (
                'id_pegawai' => 875,
                'nip' => '197301212000031001',
                'nama' => 'JUNAIDI, S.T, M. Eng.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            323 => 
            array (
                'id_pegawai' => 876,
                'nip' => '196407251990031002',
                'nama' => 'KARNAWAN JOKO S, S.T, M.T.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            324 => 
            array (
                'id_pegawai' => 877,
                'nip' => '195604111984031001',
                'nama' => 'KUSDIYONO, Drs, M. T.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            325 => 
            array (
                'id_pegawai' => 878,
                'nip' => '197406122005012001',
                'nama' => 'LEILY FATMAWATI, S.T, M.T.',
                'golongan' => 'III/d',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            326 => 
            array (
                'id_pegawai' => 879,
                'nip' => '195906211988031001',
                'nama' => 'LILIK SATRIYADI, S.T. M.T.',
                'golongan' => 'III/d',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            327 => 
            array (
                'id_pegawai' => 880,
                'nip' => '195504041987031001',
                'nama' => 'MARCHUS BUDI UTOMO, Drs. M.T.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            328 => 
            array (
                'id_pegawai' => 881,
                'nip' => '196912302001121001',
                'nama' => 'MARSUDI, S.T, M.T.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            329 => 
            array (
                'id_pegawai' => 882,
                'nip' => '195707171987031002',
                'nama' => 'MARTONO, Drs, M.T.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            330 => 
            array (
                'id_pegawai' => 883,
                'nip' => '195812291987031003',
                'nama' => 'MAWARDI, Drs, M. Si.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            331 => 
            array (
                'id_pegawai' => 884,
                'nip' => '195602011987031001',
                'nama' => 'MOCHAMMAD TRI ROCHADI, Ir, M.T.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            332 => 
            array (
                'id_pegawai' => 885,
                'nip' => '196804261993031001',
                'nama' => 'Muhamad Mukhlisin, Dr, Ir, M.T.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            333 => 
            array (
                'id_pegawai' => 886,
                'nip' => '197011062000031001',
                'nama' => 'NUR SETIAJI PAMUNGKAS, S.T, M.T.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            334 => 
            array (
                'id_pegawai' => 887,
                'nip' => '196008141986031001',
                'nama' => 'PARHADI, Drs, MT',
                'golongan' => 'III/d',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            335 => 
            array (
                'id_pegawai' => 888,
                'nip' => '195611241984031001',
                'nama' => 'PENTARDI RAHARDJO, Drs, M. T.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            336 => 
            array (
                'id_pegawai' => 889,
                'nip' => '197409032005012001',
                'nama' => 'PUJI WAHYUMI, S.H, M. Kn.',
                'golongan' => 'III/d',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            337 => 
            array (
                'id_pegawai' => 890,
                'nip' => '196205221988031001',
                'nama' => 'RISMAN, S.T.,M.T.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            338 => 
            array (
                'id_pegawai' => 891,
                'nip' => '195901101987031002',
                'nama' => 'ROYSWAN ISGANDHI, Drs, M. Pd.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            339 => 
            array (
                'id_pegawai' => 892,
                'nip' => '195404151985031001',
                'nama' => 'SETIO UTOMO, Drs, M.M.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            340 => 
            array (
                'id_pegawai' => 893,
                'nip' => '196104041991032001',
                'nama' => 'SRI WAHYUNINGSIH S, Dra, M. Pd.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            341 => 
            array (
                'id_pegawai' => 894,
                'nip' => '195807311987031002',
                'nama' => 'STEFANUS SANTOSA, Dr. Drs, M. Kom.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            342 => 
            array (
                'id_pegawai' => 895,
                'nip' => '196504051990031004',
                'nama' => 'SUDARMONO, S.T, M.T.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            343 => 
            array (
                'id_pegawai' => 896,
                'nip' => '195601011984031003',
                'nama' => 'SUGIHARTO, Drs, M.M.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            344 => 
            array (
                'id_pegawai' => 897,
                'nip' => '195506071988031001',
                'nama' => 'SUKARDI, S.T, M.T.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            345 => 
            array (
                'id_pegawai' => 898,
                'nip' => '196812221998021001',
                'nama' => 'SUKOYO, Ir, M.T.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            346 => 
            array (
                'id_pegawai' => 899,
                'nip' => '195409051984031002',
                'nama' => 'SUPARDJO, Drs.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            347 => 
            array (
                'id_pegawai' => 900,
                'nip' => '196604101990031003',
                'nama' => 'SUPARMAN, ST, M.T.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            348 => 
            array (
                'id_pegawai' => 901,
                'nip' => '196002171986031002',
                'nama' => 'SUPRIYADI, Drs, M.T.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            349 => 
            array (
                'id_pegawai' => 902,
                'nip' => '195909061987031002',
                'nama' => 'SUPRIYADI, Ir. M.T.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            350 => 
            array (
                'id_pegawai' => 903,
                'nip' => '196508061990031003',
                'nama' => 'SUPRIYO, S.T, M.T.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            351 => 
            array (
                'id_pegawai' => 904,
                'nip' => '196511051994031002',
                'nama' => 'SUROSO, Drs, M. Sc.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            352 => 
            array (
                'id_pegawai' => 905,
                'nip' => '195706101987031001',
                'nama' => 'SUTARNO, Drs, M.M.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            353 => 
            array (
                'id_pegawai' => 906,
                'nip' => '196107011990031001',
                'nama' => 'SUWARTO, S.T, M.T.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            354 => 
            array (
                'id_pegawai' => 907,
                'nip' => '196409071993031001',
                'nama' => 'TEDJO MULYONO, Ir, M.T.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            355 => 
            array (
                'id_pegawai' => 908,
                'nip' => '196111201988031002',
                'nama' => 'TJOKRO HADI, SST, M.T.',
                'golongan' => 'III/d',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            356 => 
            array (
                'id_pegawai' => 909,
                'nip' => '196010181988031001',
                'nama' => 'TRIWARDAYA, S.T, M.T.',
                'golongan' => 'III/d',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            357 => 
            array (
                'id_pegawai' => 910,
                'nip' => '195607061988111001',
                'nama' => 'UKIMAN, S.T, M.T.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            358 => 
            array (
                'id_pegawai' => 911,
                'nip' => '196009241990031001',
                'nama' => 'WAHJOEDI, Ir, M.T.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            359 => 
            array (
                'id_pegawai' => 912,
                'nip' => '196203121988032002',
                'nama' => 'WARSITI, S.T, M.T.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            360 => 
            array (
                'id_pegawai' => 913,
                'nip' => '196010031988031002',
                'nama' => 'WASINO, S.T, M.T.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            361 => 
            array (
                'id_pegawai' => 914,
                'nip' => '196302171996011001',
                'nama' => 'WILDANA LATIF MAHMUDI,Drs.  M.Pd.i',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            362 => 
            array (
                'id_pegawai' => 915,
                'nip' => '196110061988112001',
                'nama' => 'YUSETYOWATI, Dra, M. Pd.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            363 => 
            array (
                'id_pegawai' => 916,
                'nip' => '195904301984031002',
                'nama' => 'YUSTINUS EKA WIYANA, S.T, M.T.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            364 => 
            array (
                'id_pegawai' => 917,
                'nip' => '196506071990031001',
                'nama' => 'ABU HASAN, S.T, M.T.',
                'golongan' => 'III/a',
                'jabatan' => 'ASISTEN AHLI',
                'password' => bcrypt('admin23'),
            ),
            365 => 
            array (
                'id_pegawai' => 918,
                'nip' => '196307181992031002',
                'nama' => 'ACHMAD  HARDITO, B. Tech, M. Kom',
                'golongan' => 'III/d',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            366 => 
            array (
                'id_pegawai' => 919,
                'nip' => '196401221991031002',
                'nama' => 'ADI WASONO, B.Eng,, M. Eng.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            367 => 
            array (
                'id_pegawai' => 920,
                'nip' => '195904141988031004',
                'nama' => 'ADI WISAKSONO, S.T, M.M.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            368 => 
            array (
                'id_pegawai' => 921,
                'nip' => '196009131987031001',
                'nama' => 'AGUS ADIWISMONO, Drs. MT',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            369 => 
            array (
                'id_pegawai' => 922,
                'nip' => '196008241988031001',
                'nama' => 'AGUS ROCHADI, S.T, M.M.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            370 => 
            array (
                'id_pegawai' => 923,
                'nip' => '196402141990031001',
                'nama' => 'AJI HARI RIYADI, S.T, M.T.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            371 => 
            array (
                'id_pegawai' => 924,
                'nip' => '196203231985031004',
                'nama' => 'AKHMAD JAMAAH, S.T, M. Eng.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            372 => 
            array (
                'id_pegawai' => 925,
                'nip' => '197210271999031002',
                'nama' => 'AMIN SUHARJONO, Dr. S.T, M.T.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            373 => 
            array (
                'id_pegawai' => 926,
                'nip' => '195901121987031001',
                'nama' => 'AMIR SUBAGYO, Drs, M.M.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            374 => 
            array (
                'id_pegawai' => 927,
                'nip' => '195903101986121002',
                'nama' => 'ARI SANTOSO, Drs, SST, M. Eng.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            375 => 
            array (
                'id_pegawai' => 928,
                'nip' => '197409042005011001',
                'nama' => 'ARI SRIYANTO NUGROHO, S.T.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            376 => 
            array (
                'id_pegawai' => 929,
                'nip' => '196107171986031001',
                'nama' => 'ARIF NURSYAHID, Drs, M.T.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            377 => 
            array (
                'id_pegawai' => 930,
                'nip' => '195612091988031001',
                'nama' => 'BAMBANG EKO S, Drs, MMT.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            378 => 
            array (
                'id_pegawai' => 931,
                'nip' => '195507281984031001',
                'nama' => 'BAMBANG SARJONO, Drs, M.M.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            379 => 
            array (
                'id_pegawai' => 932,
                'nip' => '196307071992031005',
                'nama' => 'BAMBANG SUPRIYO, BSEE, M.Eng.Sc. Ph.D',
                'golongan' => 'III/d',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            380 => 
            array (
                'id_pegawai' => 933,
                'nip' => '195910111985031004',
                'nama' => 'BANGUN KRISHNA, S.T.M. Eng',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            381 => 
            array (
                'id_pegawai' => 934,
                'nip' => '196209111989031002',
                'nama' => 'BUDI BASUKI SUBAGIO, ST, M. Eng',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            382 => 
            array (
                'id_pegawai' => 935,
                'nip' => '197610032003121002',
                'nama' => 'BUDI SUYANTO, S.T, M. Eng.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            383 => 
            array (
                'id_pegawai' => 936,
                'nip' => '196206101986031004',
                'nama' => 'DADI, S.T, M. Eng.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            384 => 
            array (
                'id_pegawai' => 937,
                'nip' => '195806091986031001',
                'nama' => 'DAENG SUPRIYADI P, Drs. S.T, M. Eng',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            385 => 
            array (
                'id_pegawai' => 938,
                'nip' => '198208312005012001',
                'nama' => 'DEWI ANGGRAENI, S. Pd. M. Pd.',
                'golongan' => 'III/a',
                'jabatan' => 'ASISTEN AHLI',
                'password' => bcrypt('admin23'),
            ),
            386 => 
            array (
                'id_pegawai' => 939,
                'nip' => '196312221991031005',
                'nama' => 'DJODI ANTONO, B.Tech, M. Eng.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            387 => 
            array (
                'id_pegawai' => 940,
                'nip' => '197203112000031002',
                'nama' => 'Dr. Eng. Sidiq Syamsul Hidayat,S.T.,M.T.',
                'golongan' => 'III/b',
                'jabatan' => 'ASISTEN AHLI',
                'password' => bcrypt('admin23'),
            ),
            388 => 
            array (
                'id_pegawai' => 941,
                'nip' => '195604261984031001',
                'nama' => 'EDDY TRIYONO, Dr. Drs, M.T. ',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            389 => 
            array (
                'id_pegawai' => 942,
                'nip' => '195511211984031002',
                'nama' => 'EDY SUWARTO, Ir. M.T.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            390 => 
            array (
                'id_pegawai' => 943,
                'nip' => '196902012000121001',
                'nama' => 'EKO SUPRIYANTO, S.T, M.T.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            391 => 
            array (
                'id_pegawai' => 944,
                'nip' => '195910201987031003',
                'nama' => 'EKO WIDIARTO, S.T, M. Eng.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            392 => 
            array (
                'id_pegawai' => 945,
                'nip' => '196008221989032001',
                'nama' => 'ENDANG TRIYANI, Dra, M. Pd.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            393 => 
            array (
                'id_pegawai' => 946,
                'nip' => '196104241989031001',
                'nama' => 'ENDRO WASITO, H., Ir. M. Kom',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            394 => 
            array (
                'id_pegawai' => 947,
                'nip' => '197409282000032001',
                'nama' => 'ENI DWI WARDIHANI, Dr.  S.T, M.T.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            395 => 
            array (
                'id_pegawai' => 948,
                'nip' => '196005121986121001',
                'nama' => 'HARIS SANTOSA, S.T. M. Si',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            396 => 
            array (
                'id_pegawai' => 949,
                'nip' => '197908102006041001',
                'nama' => 'HELMY, ST. M. Eng',
                'golongan' => 'III/a',
                'jabatan' => 'ASISTEN AHLI',
                'password' => bcrypt('admin23'),
            ),
            397 => 
            array (
                'id_pegawai' => 950,
                'nip' => '195705141986031012',
                'nama' => 'HERY PURNOMO, Drs, M. Pd.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            398 => 
            array (
                'id_pegawai' => 951,
                'nip' => '195905041988031001',
                'nama' => 'HERY SETIJASA, S.T, M.T.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            399 => 
            array (
                'id_pegawai' => 952,
                'nip' => '197711192008012013',
                'nama' => 'IDHAWATI HESTININGSIH, S. Kom, M. Kom.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            400 => 
            array (
                'id_pegawai' => 953,
                'nip' => '196209051985031003',
                'nama' => 'ILHAM SAYEKTI, S.T, M. Kom.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            401 => 
            array (
                'id_pegawai' => 954,
                'nip' => '196106051987031003',
                'nama' => 'IMAN SUROSO, Drs, M. Pd.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            402 => 
            array (
                'id_pegawai' => 955,
                'nip' => '197912272003122001',
                'nama' => 'ISWANTI, S.Si, M. Sc.',
                'golongan' => 'III/d',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            403 => 
            array (
                'id_pegawai' => 956,
                'nip' => '195908071987031003',
                'nama' => 'JUWARTA, Drs, M.M.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            404 => 
            array (
                'id_pegawai' => 957,
                'nip' => '197206102000031001',
                'nama' => 'KHAMAMI, S. Ag, M.M.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            405 => 
            array (
                'id_pegawai' => 958,
                'nip' => '197904262003122002',
                'nama' => 'KURNIANINGSIH, S.T, M.T.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            406 => 
            array (
                'id_pegawai' => 959,
                'nip' => '196003281986121001',
                'nama' => 'KUSNO UTOMO, S.T.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            407 => 
            array (
                'id_pegawai' => 960,
                'nip' => '198404202015041003',
                'nama' => 'LILIEK TRIYONO, ST. M.Kom',
                'golongan' => 'III/b',
                'jabatan' => 'ASISTEN AHLI',
                'password' => bcrypt('admin23'),
            ),
            408 => 
            array (
                'id_pegawai' => 961,
                'nip' => '196204061991031002',
                'nama' => 'LILIK EKO NURYANTO, B. Eng, M. Kom.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            409 => 
            array (
                'id_pegawai' => 962,
                'nip' => '196005061986031001',
                'nama' => 'MAKHFUD, Drs, M.T.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            410 => 
            array (
                'id_pegawai' => 963,
                'nip' => '197403112000121001',
                'nama' => 'MARDIYONO, S.Kom, M. Sc.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('pic123'),
            ),
            411 => 
            array (
                'id_pegawai' => 964,
                'nip' => '196204201987031002',
                'nama' => 'MOCHAMMAD MUQORROBIN, Ir, M. Eng.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            412 => 
            array (
                'id_pegawai' => 965,
                'nip' => '196306101991031003',
                'nama' => 'MOHAMMAD KHAMBALI, B.Eng, M. Kom.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            413 => 
            array (
                'id_pegawai' => 966,
                'nip' => '197710092005011001',
                'nama' => 'MUHAMMAD ANIF, S.T, M. Eng.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            414 => 
            array (
                'id_pegawai' => 967,
                'nip' => '197911252006042001',
                'nama' => 'MUHLASAH NOVITASARI MARA, S.Si, M. Si',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            415 => 
            array (
                'id_pegawai' => 968,
                'nip' => '196107101988112001',
                'nama' => 'NETTY NURDIYANI, Dra, M. Hum.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            416 => 
            array (
                'id_pegawai' => 969,
                'nip' => '196008221988031001',
                'nama' => 'PARSUMO RAHARDJO, Drs, M. Kom.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            417 => 
            array (
                'id_pegawai' => 970,
                'nip' => '198504102014041002',
                'nama' => 'PRAYITNO, S.ST., M.T.',
                'golongan' => 'III/b',
                'jabatan' => 'ASISTEN AHLI',
                'password' => bcrypt('admin23'),
            ),
            418 => 
            array (
                'id_pegawai' => 971,
                'nip' => '196404121996011001',
                'nama' => 'SAMUEL BETA K, Dr, Ing.Tech, M.T.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            419 => 
            array (
                'id_pegawai' => 972,
                'nip' => '196403091991031003',
                'nama' => 'SARONO WIDODO, S.T, M. Kom.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            420 => 
            array (
                'id_pegawai' => 973,
                'nip' => '195901191988031001',
                'nama' => 'SASONGKO, Drs, M. Hum.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            421 => 
            array (
                'id_pegawai' => 974,
                'nip' => '196007291988031001',
                'nama' => 'SETYOKO, Ir, M.M.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            422 => 
            array (
                'id_pegawai' => 975,
                'nip' => '196012281986021001',
                'nama' => 'SIHONO, S.T, M. Eng.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            423 => 
            array (
                'id_pegawai' => 976,
                'nip' => '196301251991031001',
                'nama' => 'SINDUNG HADWI WS., BSEE, M.Eng. Sc.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            424 => 
            array (
                'id_pegawai' => 977,
                'nip' => '197501302001121001',
                'nama' => 'SLAMET HANDOKO, S. Kom, M. Kom.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            425 => 
            array (
                'id_pegawai' => 978,
                'nip' => '196005101984031001',
                'nama' => 'SLAMET WIDODO, Ir, M. Eng.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            426 => 
            array (
                'id_pegawai' => 979,
                'nip' => '196710171997022001',
                'nama' => 'SRI ANGGRAENI KADIRAN, S.T, M. Eng.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            427 => 
            array (
                'id_pegawai' => 980,
                'nip' => '196206251988032001',
                'nama' => 'SRI ASTUTI, Dra, M.M.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            428 => 
            array (
                'id_pegawai' => 981,
                'nip' => '197102102005012001',
                'nama' => 'SRI KUSUMASTUTI, S.T, M. Eng.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            429 => 
            array (
                'id_pegawai' => 982,
                'nip' => '195508041984031001',
                'nama' => 'SUGIJONO, S.T, M.T.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            430 => 
            array (
                'id_pegawai' => 983,
                'nip' => '195709051988031001',
                'nama' => 'SUHENDRO, Drs, M.M.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            431 => 
            array (
                'id_pegawai' => 984,
                'nip' => '197101172003121001',
                'nama' => 'SUKAMTO, S.Kom, M.T.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            432 => 
            array (
                'id_pegawai' => 985,
                'nip' => '195803061987031001',
                'nama' => 'SULISTYO WARJONO, Drs, M. Eng.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            433 => 
            array (
                'id_pegawai' => 986,
                'nip' => '196108141988112001',
                'nama' => 'SUPRIYATI, S.T. M. Si',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            434 => 
            array (
                'id_pegawai' => 987,
                'nip' => '196201291989031001',
                'nama' => 'SURYONO, S.T, M. Eng.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            435 => 
            array (
                'id_pegawai' => 988,
                'nip' => '195508281986031003',
                'nama' => 'SUWINARDI, Drs, M.M.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            436 => 
            array (
                'id_pegawai' => 989,
                'nip' => '198010082005011001',
                'nama' => 'SYAHID, S.T, M. Eng.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            437 => 
            array (
                'id_pegawai' => 990,
                'nip' => '197307082005011001',
                'nama' => 'TAUFIQ YULIANTO, S.H, M.H.',
                'golongan' => 'III/a',
                'jabatan' => 'ASISTEN AHLI',
                'password' => bcrypt('admin23'),
            ),
            438 => 
            array (
                'id_pegawai' => 991,
                'nip' => '197203292000031001',
                'nama' => 'THOMAS AGUNG S, S.T, M.T.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            439 => 
            array (
                'id_pegawai' => 992,
                'nip' => '196810252000121001',
                'nama' => 'TRI RAHARJO YUDANTORO, S.Kom, M. Kom.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            440 => 
            array (
                'id_pegawai' => 993,
                'nip' => '196009291985031005',
                'nama' => 'TRIYONO, S.T, M. Eng.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            441 => 
            array (
                'id_pegawai' => 994,
                'nip' => '196306161992011001',
                'nama' => 'TULUS PRAMUJI. B.Eng. E.E, M.T.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            442 => 
            array (
                'id_pegawai' => 995,
                'nip' => '197704012005011001',
                'nama' => 'WAHYU SULISTIYO, S.T, M. Kom.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            443 => 
            array (
                'id_pegawai' => 996,
                'nip' => '197503132006041001',
                'nama' => 'YUSNAN BADRUZZAMAN, S.T, M. Eng.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            444 => 
            array (
                'id_pegawai' => 997,
                'nip' => '197005051999031002',
                'nama' => 'ABDUL SYUKUR ALFAUZI, S.T, M.T.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            445 => 
            array (
                'id_pegawai' => 998,
                'nip' => '196210041988031003',
                'nama' => 'ADHY PURNOMO, S.T. M.T',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            446 => 
            array (
                'id_pegawai' => 999,
                'nip' => '195908171988031002',
                'nama' => 'AGUS PRAMONO, S.T, M.T.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            447 => 
            array (
                'id_pegawai' => 1000,
                'nip' => '195708171985031028',
                'nama' => 'AGUS SLAMET, Ir, M.T.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            448 => 
            array (
                'id_pegawai' => 1001,
                'nip' => '195510231987031001',
                'nama' => 'AHMAD SUPRIYADI, Drs, M.T.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            449 => 
            array (
                'id_pegawai' => 1002,
                'nip' => '196612281990031001',
                'nama' => 'AMPALA KHORYANTON, S.T, M.T.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            450 => 
            array (
                'id_pegawai' => 1003,
                'nip' => '198701252014042001',
                'nama' => 'ANIS ROIHATIN, S.T. MT',
                'golongan' => 'III/b',
                'jabatan' => 'ASISTEN AHLI',
                'password' => bcrypt('admin23'),
            ),
            451 => 
            array (
                'id_pegawai' => 1004,
                'nip' => '195804231987031002',
                'nama' => 'ANWAR SUKITO ARDJO, Dr, Drs, M Kom',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            452 => 
            array (
                'id_pegawai' => 1005,
                'nip' => '197606242001121001',
                'nama' => 'ARIAWAN WAHYU PRATOMO, S.T, M. Eng',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            453 => 
            array (
                'id_pegawai' => 1006,
                'nip' => '195904081989031002',
                'nama' => 'ARYO SATITO, S.T, M. Eng.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            454 => 
            array (
                'id_pegawai' => 1007,
                'nip' => '195601261984031001',
                'nama' => 'BAMBANG KUSWANTO, Drs, SST, M.T.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            455 => 
            array (
                'id_pegawai' => 1008,
                'nip' => '196210011987031002',
                'nama' => 'BAMBANG SUMIYARSO, S.T, M.T.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            456 => 
            array (
                'id_pegawai' => 1009,
                'nip' => '196210261997021001',
                'nama' => 'BAMBANG TJAHJONO, S. T, M.T.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            457 => 
            array (
                'id_pegawai' => 1010,
                'nip' => '195401311986032001',
                'nama' => 'BONDAN WISMANDANIKUNG, Ir. M.M.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            458 => 
            array (
                'id_pegawai' => 1011,
                'nip' => '195903231986031004',
                'nama' => 'BONO, Drs, S.T, M. Eng.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            459 => 
            array (
                'id_pegawai' => 1012,
                'nip' => '196304071988031002',
                'nama' => 'BUDHI PRASETYO,ST, MT.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            460 => 
            array (
                'id_pegawai' => 1013,
                'nip' => '196101031985031001',
                'nama' => 'CARLI, S.T, M.T.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            461 => 
            array (
                'id_pegawai' => 1014,
                'nip' => '195803041988031001',
                'nama' => 'DARYADI, Drs, M.T.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            462 => 
            array (
                'id_pegawai' => 1015,
                'nip' => '196908141998022001',
                'nama' => 'DWIANA HENDRAWATI, S.T. M.T.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            463 => 
            array (
                'id_pegawai' => 1016,
                'nip' => '195804291989031001',
                'nama' => 'EKO ARMANTO, S.T, M.T.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            464 => 
            array (
                'id_pegawai' => 1017,
                'nip' => '196109061988031001',
                'nama' => 'F. GATOT SUMARNO, S.T, M.T.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            465 => 
            array (
                'id_pegawai' => 1018,
                'nip' => '195803111989101001',
                'nama' => 'GATOT SUWOTO, Ir, M.T.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            466 => 
            array (
                'id_pegawai' => 1019,
                'nip' => '196010251987031001',
                'nama' => 'GUTOMO, Drs. M.T.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            467 => 
            array (
                'id_pegawai' => 1020,
                'nip' => '195612041984031002',
                'nama' => 'HARIYANTO, S.T, M. Eng.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            468 => 
            array (
                'id_pegawai' => 1021,
                'nip' => '195903281989031001',
                'nama' => 'HARTONO, S.T, M.T.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            469 => 
            array (
                'id_pegawai' => 1022,
                'nip' => '195709221987031001',
                'nama' => 'HERU SAPTONO, Ir, M. Eng.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            470 => 
            array (
                'id_pegawai' => 1023,
                'nip' => '197207272000121001',
                'nama' => 'HERY TRISTIJANTO, S.T, M. Eng.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            471 => 
            array (
                'id_pegawai' => 1024,
                'nip' => '196309251990101001',
                'nama' => 'IGNATIUS GUNAWAN WIDODO, ST, M.T.',
                'golongan' => 'III/d',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            472 => 
            array (
                'id_pegawai' => 1025,
                'nip' => '195809011989031001',
                'nama' => 'ISMIN TAUKHID RAHYONO, Ir. M.T.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            473 => 
            array (
                'id_pegawai' => 1026,
                'nip' => '195804301988031001',
                'nama' => 'KUNTO PURBONO. Drs, M. Sc.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            474 => 
            array (
                'id_pegawai' => 1027,
                'nip' => '195706031986031004',
                'nama' => 'LORENTIUS YOSEF SUTADI, S.T.M.T.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            475 => 
            array (
                'id_pegawai' => 1028,
                'nip' => '196309221988031001',
                'nama' => 'MARGANA, S.T, M. Eng.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            476 => 
            array (
                'id_pegawai' => 1029,
                'nip' => '197405142005011002',
                'nama' => 'MOCHAMAD DENNY SURINDRA, S.T, M.T.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            477 => 
            array (
                'id_pegawai' => 1030,
                'nip' => '196212181990031003',
                'nama' => 'MULYONO, Ir. M.T.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            478 => 
            array (
                'id_pegawai' => 1031,
                'nip' => '196505301990031001',
                'nama' => 'NANANG BUDI SRIYANTO, S.T, M. Eng.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            479 => 
            array (
                'id_pegawai' => 1032,
                'nip' => '197112042000032001',
                'nama' => 'NUR HIDAYATI, S.H, M.H.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            480 => 
            array (
                'id_pegawai' => 1033,
                'nip' => '195704041987032001',
                'nama' => 'NUR SAADA, Dra, M.M.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            481 => 
            array (
                'id_pegawai' => 1034,
                'nip' => '196003011986031002',
                'nama' => 'PARYONO, Drs. SST, MT',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            482 => 
            array (
                'id_pegawai' => 1035,
                'nip' => '195707311989031001',
                'nama' => 'POEDJI HARYANTO, Drs, SST, M.T.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            483 => 
            array (
                'id_pegawai' => 1036,
                'nip' => '196709031994031001',
                'nama' => 'RILES MELVY WATTIMENA, Ir, M.T.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            484 => 
            array (
                'id_pegawai' => 1037,
                'nip' => '195810121988031001',
                'nama' => 'ROFARSYAM, S.T, M. Sc.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            485 => 
            array (
                'id_pegawai' => 1038,
                'nip' => '197005121996011001',
                'nama' => 'SAHID, S.T, M.T.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            486 => 
            array (
                'id_pegawai' => 1039,
                'nip' => '195501071984031003',
                'nama' => 'SISWORO,Drs, MT',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            487 => 
            array (
                'id_pegawai' => 1040,
                'nip' => '196109191989031003',
                'nama' => 'SLAMET PRIYOATMOJO, Ir, M.T.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            488 => 
            array (
                'id_pegawai' => 1041,
                'nip' => '196204181989031001',
                'nama' => 'SRI HARMANTO, S.T, M.T.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            489 => 
            array (
                'id_pegawai' => 1042,
                'nip' => '196711051994032002',
                'nama' => 'SRI MULYATI, S.Si, M.M.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            490 => 
            array (
                'id_pegawai' => 1043,
                'nip' => '196311131991031002',
                'nama' => 'SUGENG ARIYONO, Dr. B. Eng, M. Eng.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            491 => 
            array (
                'id_pegawai' => 1044,
                'nip' => '196405251994031001',
                'nama' => 'SUGENG IRIYANTO, Drs, M. Pd.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            492 => 
            array (
                'id_pegawai' => 1045,
                'nip' => '195807131988031002',
                'nama' => 'SUHARTO, Dr. Ir, M. Pd.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            493 => 
            array (
                'id_pegawai' => 1046,
                'nip' => '195311131986032001',
                'nama' => 'SULASIH, Ir, M.M.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            494 => 
            array (
                'id_pegawai' => 1047,
                'nip' => '196308071990031001',
                'nama' => 'SUNARTO, S.T, M. Eng.',
                'golongan' => 'III/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            495 => 
            array (
                'id_pegawai' => 1048,
                'nip' => '195706011986031003',
                'nama' => 'SUNARWO, Drs. M.T.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            496 => 
            array (
                'id_pegawai' => 1049,
                'nip' => '195907201986031003',
                'nama' => 'SUPANDI, Drs, M.M.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            497 => 
            array (
                'id_pegawai' => 1050,
                'nip' => '195510061984032001',
                'nama' => 'SUPARNI SETYOWATI R, Dr. Dra, M. Si.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            498 => 
            array (
                'id_pegawai' => 1051,
                'nip' => '196304241993031001',
                'nama' => 'SUPRIYO, S.T, M.T.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            499 => 
            array (
                'id_pegawai' => 1052,
                'nip' => '195411171985031001',
                'nama' => 'SURYANTO Drs, M. Pd.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
        ));
        \DB::table('pegawai')->insert(array (
            0 => 
            array (
                'id_pegawai' => 1053,
                'nip' => '196307071988032001',
                'nama' => 'SUWARTI, S.T, M.T.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            1 => 
            array (
                'id_pegawai' => 1054,
                'nip' => '196405261990031002',
                'nama' => 'SUYADI, S.T, M.T.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            2 => 
            array (
                'id_pegawai' => 1055,
                'nip' => '195610271985031001',
                'nama' => 'TEGUH HARIJONO MULUD, Drs, M.T.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            3 => 
            array (
                'id_pegawai' => 1056,
                'nip' => '196204271991031001',
                'nama' => 'TOTOK PRASETYO, Dr, B. Eng, M.T.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            4 => 
            array (
                'id_pegawai' => 1057,
                'nip' => '195504021982112001',
                'nama' => 'VONNY SITI ANGGRAHINI B, Dra, M.M.',
                'golongan' => 'IV/c',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            5 => 
            array (
                'id_pegawai' => 1058,
                'nip' => '195511041985031001',
                'nama' => 'WAHJU DJALMONO PUTRO, Ir, M. Sc.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            6 => 
            array (
                'id_pegawai' => 1059,
                'nip' => '196009041988031002',
                'nama' => 'WAHYONO, S.T, M.T.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            7 => 
            array (
                'id_pegawai' => 1060,
                'nip' => '196311131990032002',
                'nama' => 'WIWIK PURWATI WIDYANINGSIH, S.T, M. Eng.',
                'golongan' => 'IV/b',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            8 => 
            array (
                'id_pegawai' => 1061,
                'nip' => '197805022001121003',
                'nama' => 'YUSUF DEWANTORO H, S.T, M.T.',
                'golongan' => 'IV/a',
                'jabatan' => 'LEKTOR KEPALA',
                'password' => bcrypt('admin23'),
            ),
            9 => 
            array (
                'id_pegawai' => 1062,
                'nip' => '196109261986021001',
                'nama' => 'ZAENAL ABIDIN, S.T, M.T.',
                'golongan' => 'III/d',
                'jabatan' => 'LEKTOR',
                'password' => bcrypt('admin23'),
            ),
            10 => 
            array (
                'id_pegawai' => 1063,
                'nip' => '0',
                'nama' => 'Belum DI pilih',
                'golongan' => NULL,
                'jabatan' => NULL,
                'password' => bcrypt('admin23'),
            ),
        ));
        
        
    }
}