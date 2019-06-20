<?php

use Illuminate\Database\Seeder;

class KelompokTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kelompok')->delete();
        
        \DB::table('kelompok')->insert(array (
            0 => 
            array (
                'id_kelompok' => 1,
                'kelompok' => 'ATK/BHP',
            ),
            1 => 
            array (
                'id_kelompok' => 2,
                'kelompok' => 'BHP kerumahtanggaan',
            ),
            2 => 
            array (
                'id_kelompok' => 3,
                'kelompok' => 'Konsumsi rapat dinas',
            ),
            3 => 
            array (
                'id_kelompok' => 5,
                'kelompok' => 'Pengiriman surat dinas',
            ),
            4 => 
            array (
                'id_kelompok' => 6,
                'kelompok' => 'Honorarium operasional satker',
            ),
            5 => 
            array (
                'id_kelompok' => 7,
                'kelompok' => 'Operasional Satker lainnya',
            ),
            6 => 
            array (
                'id_kelompok' => 8,
                'kelompok' => 'Penggandaan/Jilid',
            ),
            7 => 
            array (
                'id_kelompok' => 9,
                'kelompok' => 'Konsumsi',
            ),
            8 => 
            array (
                'id_kelompok' => 10,
                'kelompok' => 'Dokumentasi',
            ),
            9 => 
            array (
                'id_kelompok' => 11,
                'kelompok' => 'Cetakan',
            ),
            10 => 
            array (
                'id_kelompok' => 12,
                'kelompok' => 'Honor Penunjang penelitian/perekayasaan',
            ),
            11 => 
            array (
                'id_kelompok' => 13,
                'kelompok' => 'Honor Reviewer Proposal Penelitian',
            ),
            12 => 
            array (
                'id_kelompok' => 14,
                'kelompok' => 'Honor Moderator',
            ),
            13 => 
            array (
                'id_kelompok' => 16,
                'kelompok' => 'Honor Panitia',
            ),
            14 => 
            array (
                'id_kelompok' => 17,
                'kelompok' => 'Honor Dosen yang Menyelenggarakan Kegiatan Akademik',
            ),
            15 => 
            array (
                'id_kelompok' => 18,
                'kelompok' => 'Honor Rohaniwan',
            ),
            16 => 
            array (
                'id_kelompok' => 19,
                'kelompok' => 'Honor Pelaksana Kegiatan',
            ),
            17 => 
            array (
                'id_kelompok' => 20,
                'kelompok' => 'Honor Tim Penyusun Jurnal',
            ),
            18 => 
            array (
                'id_kelompok' => 21,
                'kelompok' => 'Honor Tim Penyusun Buletin/Majalah',
            ),
            19 => 
            array (
                'id_kelompok' => 22,
                'kelompok' => 'Honor Tim Pengelola Web Site',
            ),
            20 => 
            array (
                'id_kelompok' => 23,
                'kelompok' => 'Honor Vakasi/Penyelenggaraan Ujian',
            ),
            21 => 
            array (
                'id_kelompok' => 24,
                'kelompok' => 'Honor Penulisan Soal',
            ),
            22 => 
            array (
                'id_kelompok' => 25,
            'kelompok' => 'Non Operasional Lainnya (Kegiatan)',
            ),
            23 => 
            array (
                'id_kelompok' => 26,
                'kelompok' => 'Persediaan barang Konsumsi',
            ),
            24 => 
            array (
                'id_kelompok' => 27,
                'kelompok' => 'Langganan Listrik',
            ),
            25 => 
            array (
                'id_kelompok' => 28,
                'kelompok' => 'Langganan Telepon',
            ),
            26 => 
            array (
                'id_kelompok' => 29,
                'kelompok' => 'Langganan Jasa',
            ),
            27 => 
            array (
                'id_kelompok' => 30,
                'kelompok' => 'Sewa',
            ),
            28 => 
            array (
                'id_kelompok' => 31,
                'kelompok' => 'Narasumber dan atau Pembahas',
            ),
            29 => 
            array (
                'id_kelompok' => 32,
            'kelompok' => 'Non Operasional Lainnya (Kegiatan)',
            ),
            30 => 
            array (
                'id_kelompok' => 33,
                'kelompok' => 'Honorium Nara Sumber/Pembahas',
            ),
            31 => 
            array (
                'id_kelompok' => 34,
            'kelompok' => 'Honor penyusunan, pengembangan, pemeliharaan sistem (Eksternal)',
            ),
            32 => 
            array (
                'id_kelompok' => 35,
            'kelompok' => 'penyusunan, pengembangan, pemeliharaan sistem (Internal)',
            ),
            33 => 
            array (
                'id_kelompok' => 36,
                'kelompok' => 'Uang saku rapat dalam kantor',
            ),
            34 => 
            array (
                'id_kelompok' => 37,
                'kelompok' => 'Honorarium Vakasi / Peyelenggaraan Ujian',
            ),
            35 => 
            array (
                'id_kelompok' => 38,
                'kelompok' => 'Honorarium Peyelenggara Ujian/Vakasi',
            ),
            36 => 
            array (
                'id_kelompok' => 39,
                'kelompok' => 'Honorarium Tim Pengelola Web site',
            ),
            37 => 
            array (
                'id_kelompok' => 41,
                'kelompok' => 'Honorarium Tim Penyusun Jurnal',
            ),
            38 => 
            array (
                'id_kelompok' => 42,
                'kelompok' => 'Honorarium Tim Pelaksana Kegiatan',
            ),
            39 => 
            array (
                'id_kelompok' => 44,
                'kelompok' => 'Honorarium Peyelenggaraan Kegiatan Pendidikan',
            ),
            40 => 
            array (
                'id_kelompok' => 45,
                'kelompok' => 'Honorarium Panitia',
            ),
            41 => 
            array (
                'id_kelompok' => 46,
                'kelompok' => 'Honorarium Pembawa Acara',
            ),
            42 => 
            array (
                'id_kelompok' => 47,
                'kelompok' => 'Honorarium Moderator',
            ),
            43 => 
            array (
                'id_kelompok' => 48,
                'kelompok' => 'Honorarium Reviewer Proposal Penelitian',
            ),
            44 => 
            array (
                'id_kelompok' => 49,
                'kelompok' => 'Perjalanan dinas',
            ),
            45 => 
            array (
                'id_kelompok' => 50,
                'kelompok' => 'Satuan biaya uang transport kegiatan dalam kota',
            ),
            46 => 
            array (
                'id_kelompok' => 51,
                'kelompok' => 'Uang harian perjalanan  dinas dalam negeri ',
            ),
            47 => 
            array (
                'id_kelompok' => 52,
            'kelompok' => 'Biaya penginapan perjalanan dinas dalam negeri  (hotel)',
            ),
            48 => 
            array (
                'id_kelompok' => 53,
                'kelompok' => 'Biaya transportasi darat dari ibu kota propinsi ke kota/kabupaten dalam wilayah propinsi Jawa tengah',
            ),
            49 => 
            array (
                'id_kelompok' => 54,
                'kelompok' => 'Konsultan',
            ),
            50 => 
            array (
                'id_kelompok' => 55,
                'kelompok' => 'Penelitian',
            ),
            51 => 
            array (
                'id_kelompok' => 56,
                'kelompok' => 'Pengabdian',
            ),
            52 => 
            array (
                'id_kelompok' => 57,
                'kelompok' => 'Operasional Lainnya',
            ),
            53 => 
            array (
                'id_kelompok' => 58,
                'kelompok' => 'Belanja Modal lainnya',
            ),
            54 => 
            array (
                'id_kelompok' => 59,
                'kelompok' => 'Rapat Dalam Kantor',
            ),
            55 => 
            array (
                'id_kelompok' => 60,
                'kelompok' => 'Honor Penunjang penelitian/perekayasaan',
            ),
            56 => 
            array (
                'id_kelompok' => 61,
                'kelompok' => 'Honor Reviewer Proposal Penelitian',
            ),
            57 => 
            array (
                'id_kelompok' => 62,
            'kelompok' => 'Honor Narasumber (Seminar, Raker, Rakor, Workshop, FGD, Sosialisasi, dll. Tidak termasuk diklat dan pelatihan)',
            ),
            58 => 
            array (
                'id_kelompok' => 63,
            'kelompok' => 'Honor Narasumber/Pembahas (Pakar/Praktisi/Profesional)',
            ),
            59 => 
            array (
                'id_kelompok' => 64,
                'kelompok' => 'Honor Moderator',
            ),
            60 => 
            array (
                'id_kelompok' => 65,
                'kelompok' => 'Honor Pembawa Acara',
            ),
            61 => 
            array (
                'id_kelompok' => 66,
                'kelompok' => 'Honor Panitia Kegiatan',
            ),
            62 => 
            array (
                'id_kelompok' => 67,
                'kelompok' => 'Honor Dosen yang Menyelenggarakan Kegiatan Akademik',
            ),
            63 => 
            array (
                'id_kelompok' => 68,
                'kelompok' => 'Honor Rohaniwan',
            ),
            64 => 
            array (
                'id_kelompok' => 69,
                'kelompok' => 'Honor Tim Pelaksana Kegiatan berdasar SK KPA',
            ),
            65 => 
            array (
                'id_kelompok' => 70,
                'kelompok' => 'Honor Tim Penyusun Jurnal',
            ),
            66 => 
            array (
                'id_kelompok' => 71,
                'kelompok' => 'Honor Tim Penyusun Buletin/Majalah',
            ),
            67 => 
            array (
                'id_kelompok' => 72,
                'kelompok' => 'Honor Tim Pengelola Web Site',
            ),
            68 => 
            array (
                'id_kelompok' => 73,
                'kelompok' => 'Honor Vakasi/Penyelenggaraan Ujian',
            ),
            69 => 
            array (
                'id_kelompok' => 74,
                'kelompok' => 'Honor Penulisan Soal',
            ),
            70 => 
            array (
                'id_kelompok' => 75,
            'kelompok' => 'Honor Penyusun, Pengembangan, dan Pemeliharaan Sistem (eksternal)',
            ),
            71 => 
            array (
                'id_kelompok' => 76,
                'kelompok' => 'Honor Jasa  Profesi',
            ),
            72 => 
            array (
                'id_kelompok' => 77,
                'kelompok' => 'Bantuan',
            ),
            73 => 
            array (
                'id_kelompok' => 78,
                'kelompok' => 'Honor Penyusun Buku Pedoman',
            ),
            74 => 
            array (
                'id_kelompok' => 79,
                'kelompok' => 'Honor Instruktur Senam',
            ),
            75 => 
            array (
                'id_kelompok' => 80,
                'kelompok' => 'BHP',
            ),
            76 => 
            array (
                'id_kelompok' => 81,
                'kelompok' => 'Insentif',
            ),
            77 => 
            array (
                'id_kelompok' => 82,
                'kelompok' => 'Belanja Modal',
            ),
        ));
        
        
    }
}