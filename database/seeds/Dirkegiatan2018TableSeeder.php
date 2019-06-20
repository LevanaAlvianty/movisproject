<?php

use Illuminate\Database\Seeder;

class Dirkegiatan2018TableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('dirkegiatan_2018')->delete();
        
        \DB::table('dirkegiatan_2018')->insert(array (
            0 => 
            array (
                'id_dirkegiatan' => 2,
            'dirkegiatan' => '1. IKK1-(1) (IKU 1) IPK mahasiswa  ? 3,00',
                'keterangan' => '',
            ),
            1 => 
            array (
                'id_dirkegiatan' => 3,
            'dirkegiatan' => '2. IKU1-a (IKK 1.1) Rerata IPK lulusan',
                'keterangan' => '1. PK DIR Menteri',
            ),
            2 => 
            array (
                'id_dirkegiatan' => 4,
                'dirkegiatan' => '3. IKK 1.2 Jumlah lulusan yang tepat waktu',
                'keterangan' => '',
            ),
            3 => 
            array (
                'id_dirkegiatan' => 5,
                'dirkegiatan' => '4. IKU1-b Persentase  lulusan tepat waktu',
                'keterangan' => '',
            ),
            4 => 
            array (
                'id_dirkegiatan' => 6,
                'dirkegiatan' => '5. IKU1-c Rata-rata lama studi lulusan D3, STr dan MTr',
                'keterangan' => '2. PK DIR Menteri',
            ),
            5 => 
            array (
                'id_dirkegiatan' => 7,
            'dirkegiatan' => '6. IKU1-01 (IKK 1.3) Persentase lulusan bersertifikat kompetensi dan profesi',
                'keterangan' => '3. PK DIR Menteri',
            ),
            6 => 
            array (
                'id_dirkegiatan' => 8,
            'dirkegiatan' => '7. IKU1-02 (IKK 1.4) Persentase lulusan yang langsung bekerja sesuai bidangnya',
                'keterangan' => '4. PK DIR Menteri',
            ),
            7 => 
            array (
                'id_dirkegiatan' => 9,
                'dirkegiatan' => '8. IKK 1.5 Jumlah lulusan dari program studi kerjasama luar negeri',
                'keterangan' => '',
            ),
            8 => 
            array (
                'id_dirkegiatan' => 10,
                'dirkegiatan' => '9. IKK 1.6 Jumlah lulusan yang dari program studi kerjasama dalam negeri',
                'keterangan' => '',
            ),
            9 => 
            array (
                'id_dirkegiatan' => 11,
            'dirkegiatan' => '10. IKK1-(2) (IKU 4.a) Waktu tunggu lulusan diploma tiga kerja pertama kali',
                'keterangan' => '',
            ),
            10 => 
            array (
                'id_dirkegiatan' => 12,
            'dirkegiatan' => '11. IKK-(3) (IKU 4.b) Waktu tunggu lulusan sarjana terapan kerja pertama kali',
                'keterangan' => '',
            ),
            11 => 
            array (
                'id_dirkegiatan' => 13,
                'dirkegiatan' => '12. IKK 1.10 Waktu tunggu lulusan magister terapan kerja pertama kali',
                'keterangan' => '',
            ),
            12 => 
            array (
                'id_dirkegiatan' => 14,
                'dirkegiatan' => '13. IKK 1.11 Waktu tunggu lulusan doktor terapan kerja pertama kali',
                'keterangan' => '',
            ),
            13 => 
            array (
                'id_dirkegiatan' => 15,
            'dirkegiatan' => '14. IKK1-(4) (IKU 5) Jumlah program kreatifitas  mahasiswa (PKM) yang didanai ',
                'keterangan' => '',
            ),
            14 => 
            array (
                'id_dirkegiatan' => 16,
            'dirkegiatan' => '15. IKK1-(5) (IKU 6) Jumlah program kreatifitas mahasiswa (PKM) yang masuk PIMNAS',
                'keterangan' => '',
            ),
            15 => 
            array (
                'id_dirkegiatan' => 17,
            'dirkegiatan' => '16. IKU1-03 (IKK 1.12) Jumlah mahasiswa berprestasi',
                'keterangan' => '5. PK DIR Menteri',
            ),
            16 => 
            array (
                'id_dirkegiatan' => 18,
                'dirkegiatan' => '17. IKU1-d Persentase mahasiswa penerima beasiswa',
                'keterangan' => '',
            ),
            17 => 
            array (
                'id_dirkegiatan' => 21,
                'dirkegiatan' => '18. IKU1-04 Jumlah mahasiswa yang berwirausaha',
                'keterangan' => '6. PK DIR Menteri',
            ),
            18 => 
            array (
                'id_dirkegiatan' => 22,
                'dirkegiatan' => '1. IKK 1.7 Jumlah prodi diploma tiga',
                'keterangan' => '',
            ),
            19 => 
            array (
                'id_dirkegiatan' => 23,
                'dirkegiatan' => '2. IKK 1.8 Jumlah prodi sarjana terapan',
                'keterangan' => '',
            ),
            20 => 
            array (
                'id_dirkegiatan' => 24,
            'dirkegiatan' => '3. IKK1-(6) (IKU 2) Jumlah prodi magister terapan',
                'keterangan' => '7. PK DIR Menteri',
            ),
            21 => 
            array (
                'id_dirkegiatan' => 25,
                'dirkegiatan' => '4. IKK 1.9 Jumlah prodi doktor terapan',
                'keterangan' => '',
            ),
            22 => 
            array (
                'id_dirkegiatan' => 26,
            'dirkegiatan' => '5. IKK1-(7) (IKU 3) Jumlah prodi kelas internasional',
                'keterangan' => '8. PK DIR Menteri',
            ),
            23 => 
            array (
                'id_dirkegiatan' => 27,
                'dirkegiatan' => '6. IKK1.13 Jumlah pendaftar dari dalam provinsi Jawa Tengah',
                'keterangan' => '',
            ),
            24 => 
            array (
                'id_dirkegiatan' => 28,
                'dirkegiatan' => '7. IKK1.14 Jumlah pendaftar dari luar provinsi Jawa Tengah',
                'keterangan' => '',
            ),
            25 => 
            array (
                'id_dirkegiatan' => 29,
                'dirkegiatan' => '8. IKK1.15 Jumlah pendaftar berasal dari SMA/MA',
                'keterangan' => '',
            ),
            26 => 
            array (
                'id_dirkegiatan' => 30,
                'dirkegiatan' => '9. IKK1.16 Jumlah pendaftar berasal dari SMK',
                'keterangan' => '',
            ),
            27 => 
            array (
                'id_dirkegiatan' => 31,
                'dirkegiatan' => '10. IKU1-e Jumlah program studi berakreditasi internasional',
                'keterangan' => '',
            ),
            28 => 
            array (
                'id_dirkegiatan' => 32,
            'dirkegiatan' => '11. IKK1-(8) (IKU 7.a) Jumlah program studi berakreditasi unggul (A)',
                'keterangan' => '',
            ),
            29 => 
            array (
                'id_dirkegiatan' => 33,
            'dirkegiatan' => '12. IKU1-05 (IKU 7.b) Persentase program studi terakreditasi minimal B',
                'keterangan' => '9. PK DIR Menteri',
            ),
            30 => 
            array (
                'id_dirkegiatan' => 34,
                'dirkegiatan' => '13. IKK 1.18 Jumlah laboratorium/bengkel/studio terakreditasi.',
                'keterangan' => '',
            ),
            31 => 
            array (
                'id_dirkegiatan' => 35,
            'dirkegiatan' => '1. IKU2-01 Jumlah Pusat Unggulan Iptek (PUI)',
                'keterangan' => '',
            ),
            32 => 
            array (
                'id_dirkegiatan' => 36,
                'dirkegiatan' => '2. IKU2-02 Jumlah prototipe R & D',
                'keterangan' => '',
            ),
            33 => 
            array (
                'id_dirkegiatan' => 37,
                'dirkegiatan' => '3. IKU2-03 Jumlah prototipe industri',
                'keterangan' => '',
            ),
            34 => 
            array (
                'id_dirkegiatan' => 38,
                'dirkegiatan' => '4. IKU2-04 Jumlah produk inovasi',
                'keterangan' => '',
            ),
            35 => 
            array (
                'id_dirkegiatan' => 39,
                'dirkegiatan' => '5. IKK 2.1 Jumlah judul penelitian',
                'keterangan' => '',
            ),
            36 => 
            array (
                'id_dirkegiatan' => 40,
            'dirkegiatan' => '1. IKU2-05 (IKU 8) Jumlah HKI yang didaftarkan',
                'keterangan' => '10. PK DIR Menteri',
            ),
            37 => 
            array (
                'id_dirkegiatan' => 41,
            'dirkegiatan' => '2. IKU2-a (IKU 9) Jumlah publikasi nasional',
                'keterangan' => '11. PK DIR Menteri',
            ),
            38 => 
            array (
                'id_dirkegiatan' => 42,
            'dirkegiatan' => '3. IKU2-06 (IKU 10) Jumlah publikasi internasional',
                'keterangan' => '12. PK DIR Menteri',
            ),
            39 => 
            array (
                'id_dirkegiatan' => 43,
                'dirkegiatan' => '4. IKU2-07 Jumlah Sitasi Karya Ilmiah',
                'keterangan' => '13. PK DIR Menteri',
            ),
            40 => 
            array (
                'id_dirkegiatan' => 44,
                'dirkegiatan' => '1. IKU2-b Jumlah Penelitian yang dimanfaatkan Industri dan Masyarakat',
                'keterangan' => '14. PK DIR Menteri',
            ),
            41 => 
            array (
                'id_dirkegiatan' => 45,
                'dirkegiatan' => '1. IKK 3.1 Jumlah judul pengabdian internal Polines',
                'keterangan' => '',
            ),
            42 => 
            array (
                'id_dirkegiatan' => 46,
                'dirkegiatan' => '2. IKK 3.2 Jumlah judul pengabdian bernilai manfaat ke masyarakat',
                'keterangan' => '',
            ),
            43 => 
            array (
                'id_dirkegiatan' => 47,
            'dirkegiatan' => '3. IKU3-a (IKU 11) Jumlah pengabdian yang dimanfaatkan oleh masyarakat',
                'keterangan' => '',
            ),
            44 => 
            array (
                'id_dirkegiatan' => 48,
                'dirkegiatan' => '4. IKK 3.3 Jumlah judul pengabdian bernilai pendapatan',
                'keterangan' => '',
            ),
            45 => 
            array (
                'id_dirkegiatan' => 49,
                'dirkegiatan' => '1. IKK 3.4 Jumlah mitra binaan berskala lokal',
                'keterangan' => '',
            ),
            46 => 
            array (
                'id_dirkegiatan' => 50,
                'dirkegiatan' => '2. IKK 3.5 Jumlah mitra binaan berskala nasional',
                'keterangan' => '',
            ),
            47 => 
            array (
                'id_dirkegiatan' => 51,
                'dirkegiatan' => '3. IKK 3.6 Jumlah mitra binaan berskala internasional',
                'keterangan' => '',
            ),
            48 => 
            array (
                'id_dirkegiatan' => 52,
            'dirkegiatan' => '1. IKK 3.7 Jumlah buku karya dosen Polines (ISBN)',
                'keterangan' => '',
            ),
            49 => 
            array (
                'id_dirkegiatan' => 53,
            'dirkegiatan' => '2. IKK3-(1) (IKU 12) Jumlah prototipe hasil pengembangan teknologi untuk Industri Berkelanjutan',
                'keterangan' => '15. PK DIR Menteri',
            ),
            50 => 
            array (
                'id_dirkegiatan' => 54,
            'dirkegiatan' => '1. IKK4-(2) (IKU 14) Jumlah layanan akademik dan non akademik berbasis teknologi ',
                'keterangan' => '',
            ),
            51 => 
            array (
                'id_dirkegiatan' => 55,
                'dirkegiatan' => '2. IIKK 4.2 Kapasitas total bandwidth internet',
                'keterangan' => '',
            ),
            52 => 
            array (
                'id_dirkegiatan' => 56,
                'dirkegiatan' => '3. IKK 4-01  Revitalisasi Penguatan dan Pengembangan Sarana dan Prasarana Fasilitas Umum       Pembelajaran dan Laboratorium',
                'keterangan' => '',
            ),
            53 => 
            array (
                'id_dirkegiatan' => 57,
                'dirkegiatan' => '4. IKK 4-02 Penguatan karakter dan budaya kerja',
                'keterangan' => '',
            ),
            54 => 
            array (
                'id_dirkegiatan' => 58,
                'dirkegiatan' => '1. IKK 4.3 Indeks kepuasan layanan akademikdan non akademik ',
                'keterangan' => '',
            ),
            55 => 
            array (
                'id_dirkegiatan' => 59,
            'dirkegiatan' => '1. IKK4-(1) (IKU 13) Persentase e5fisiensi perencanaan dan penganggaran ',
                'keterangan' => '',
            ),
            56 => 
            array (
                'id_dirkegiatan' => 60,
                'dirkegiatan' => '2. IKK 4.1 Jumlah peneriman anggaran PNBP/tahun ',
                'keterangan' => '',
            ),
            57 => 
            array (
                'id_dirkegiatan' => 61,
            'dirkegiatan' => '1. IKK4-(3) (IKU 15) Hasil Penilaian terhadap AKIP ',
                'keterangan' => '',
            ),
            58 => 
            array (
                'id_dirkegiatan' => 62,
                'dirkegiatan' => '2. IKU4-01 Rangking Perguruan Tinggi Nasional ',
                'keterangan' => '16. PK DIR Menteri',
            ),
            59 => 
            array (
                'id_dirkegiatan' => 63,
            'dirkegiatan' => '3. IKU4-a (IKK 1.17) Hasil akreditasi institusi Polines ',
                'keterangan' => '17. PK DIR Menteri',
            ),
            60 => 
            array (
                'id_dirkegiatan' => 64,
            'dirkegiatan' => '1. IKK5-(1) (IKU 17) Jumlah dosen berpendidikan S3',
                'keterangan' => '',
            ),
            61 => 
            array (
                'id_dirkegiatan' => 65,
                'dirkegiatan' => '2. IKU5-01 Presentase dosen berkualifikasi S3',
                'keterangan' => '18. PK DIR Menteri',
            ),
            62 => 
            array (
                'id_dirkegiatan' => 66,
                'dirkegiatan' => '3. IKU5-02 Presentase dosen bersertifikat pendidik',
                'keterangan' => '19. PK DIR Menteri',
            ),
            63 => 
            array (
                'id_dirkegiatan' => 67,
            'dirkegiatan' => '4. IKU5-a Persentase tenaga kependidikan dengan sertifikat kompetensi\'),',
            'keterangan' => '',
        ),
        64 => 
        array (
            'id_dirkegiatan' => 68,
            'dirkegiatan' => '5. IKK 5.1 Jumlah tenaga pendidik yang studi lanjut S3',
            'keterangan' => '',
        ),
        65 => 
        array (
            'id_dirkegiatan' => 69,
        'dirkegiatan' => '6. IKU5-b (IKK 5.2) Jumlah dosen dengan jabatan lektor kepala',
            'keterangan' => '',
        ),
        66 => 
        array (
            'id_dirkegiatan' => 70,
            'dirkegiatan' => '7. IKU5-c Rasio jumlah dosen terhadap mahasiswa',
            'keterangan' => '',
        ),
        67 => 
        array (
            'id_dirkegiatan' => 71,
            'dirkegiatan' => '8. IKU5-d Rasio dosen tetap terhadap jumlah dosen',
            'keterangan' => '',
        ),
        68 => 
        array (
            'id_dirkegiatan' => 72,
        'dirkegiatan' => '9. IKU5-e (IKK 5.3) Persentase dosen dengan jabatan guru besar',
            'keterangan' => '',
        ),
        69 => 
        array (
            'id_dirkegiatan' => 73,
            'dirkegiatan' => '1. IKK 5.4 Jumlah dosen sebagai anggota organisasi profesi',
            'keterangan' => '',
        ),
        70 => 
        array (
            'id_dirkegiatan' => 74,
        'dirkegiatan' => '2. IKK 5.5 Jumlah dosen yang mempunyai jabatan di luar institusi (kepemimpinan publik).',
            'keterangan' => '',
        ),
        71 => 
        array (
            'id_dirkegiatan' => 19,
            'dirkegiatan' => '19. IKKI.19 Presentase implementasi kurikulum basis KKNI',
            'keterangan' => NULL,
        ),
        72 => 
        array (
            'id_dirkegiatan' => 20,
            'dirkegiatan' => '20. IKKI-20 Persentase penguatan & pengembangan perpustakaan  berbasis ICT yang terintegrasi',
            'keterangan' => NULL,
        ),
    ));
        
        
    }
}