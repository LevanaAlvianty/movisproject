<?php

use Illuminate\Database\Seeder;

class DirindikatorTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('dirindikator')->delete();
        
        \DB::table('dirindikator')->insert(array (
            0 => 
            array (
                'id_dirindikator' => 0,
                'dirindikator' => 'Belum memilih',
            ),
            1 => 
            array (
                'id_dirindikator' => 1,
            'dirindikator' => '1. Jumlah jam (beban) mengajar dosen per semester (teridentifikasi)[IKP 1.1.1.1.]\'),',
            ),
            2 => 
            array (
                'id_dirindikator' => 2,
            'dirindikator' => '2. Jumlah Prodi Penyelenggara Uji Kompetensi [IKP 1.1.1.2.]\'),',
        ),
        3 => 
        array (
            'id_dirindikator' => 3,
        'dirindikator' => '3. Jumlah mahasiswa yang mengikuti uji kompetensi [IKP 1.1.1.3.]\'),',
    ),
    4 => 
    array (
        'id_dirindikator' => 4,
    'dirindikator' => '4. Nilai Pengukuran Profesiensi Bhs Inggris Mahasiswa Tingkat Akhir Polines [IKP 1.1.1.4.]\'),',
),
5 => 
array (
    'id_dirindikator' => 5,
'dirindikator' => '5. Jumlah (%) Mahasiswa nilai TOEIC >=600 [IKP 1.1.1.5.]\'),',
),
6 => 
array (
    'id_dirindikator' => 6,
'dirindikator' => '6. Jumlah (%)  mahasiswa IPK >=3.00 [IKU 1]\'),',
),
7 => 
array (
    'id_dirindikator' => 7,
'dirindikator' => '7. Jumlah (%)  mahasiswa DO (DO, perpanjangan) [IKP 1.1.1.7.]\'),',
),
8 => 
array (
    'id_dirindikator' => 8,
'dirindikator' => '8. Ratio pendaftar dengan yang diterima (%) [IKP 1.1.1.8.]\'),',
),
9 => 
array (
    'id_dirindikator' => 9,
'dirindikator' => '9. Ratio SMA dengan SMK yang diterima (%)[IKP 1.1.1.9.]\'),',
),
10 => 
array (
    'id_dirindikator' => 10,
'dirindikator' => '10. Jumlah Dosen berpendidikan S2 / S3 [IKP 1.1.1.10.]\'),',
),
11 => 
array (
'id_dirindikator' => 11,
'dirindikator' => '11. Ratio perempuan dengan laki-laki yg diterima (%) [IKP 1.1.1.11.]\'),',
),
12 => 
array (
'id_dirindikator' => 12,
'dirindikator' => '12. Ratio sebaran asal mahasiswa – (%) [IKP 1.1.1.12.]\'),',
),
13 => 
array (
'id_dirindikator' => 13,
'dirindikator' => '1. Jumlah Kurikulum Prodi Sarjana Terapan berbasis KKNI (menyelenggarakan : Transfer Kredit-CTS, Pengakuan Pembelajaran Lampau-RPL / Production Base Education-PBE)[IKP 1.1.2.1.]\'),',
),
14 => 
array (
'id_dirindikator' => 14,
'dirindikator' => '2. Jumlah Kurikulum Prodi D3 berbasis KKNI (menyelenggarakan : Transfer Kredit-CTS, Pengakuan Pembelajaran Lampau-RPL / Production Base Education-PBE)[IKP 1.1.2.2.]\'),',
),
15 => 
array (
'id_dirindikator' => 15,
'dirindikator' => '3. Jumlah Prodi menyelenggarakan magang terstruktur [IKP 1.1.2.3.]\'),',
),
16 => 
array (
'id_dirindikator' => 16,
'dirindikator' => '1. Jumlah matakuliah berbasis ICT [IKP 1.1.3.1.]\'),',
),
17 => 
array (
'id_dirindikator' => 17,
'dirindikator' => '1. Jumlah partisipasi dan prestasi mahasiswa dalam kegiatan ilmiah nasional dan internasional (PKM, Pinnas, Lomba-2 lain) [IKP 1.1.4.1.]\'),',
),
18 => 
array (
'id_dirindikator' => 18,
'dirindikator' => '2.Jumlah PKM di danai Dikti [IKP 1.1.4.2. = IKU 5]\'),',
),
19 => 
array (
'id_dirindikator' => 19,
'dirindikator' => '3.Jumlah PKM lolos PIMNAS [IKP 1.1.4.3. = IKU 6]\'),',
),
20 => 
array (
'id_dirindikator' => 20,
'dirindikator' => '4. Jumlah mahasiswa penerima beasiswa dan bantuan biaya pendidikan [IKP 1.1.4.5.]\'),',
),
21 => 
array (
'id_dirindikator' => 21,
'dirindikator' => '5. Jumlah organisasi mahasiswa melaksanakan kegiatan tingkat nasional dan internasional [IKP 1.1.4.6.]\'),',
),
22 => 
array (
'id_dirindikator' => 22,
'dirindikator' => '1. Jumlah lulusan yang terdata dalam sistem penelusuran lulusan (tracer study)[IKP 1.1.5.1.]\'),',
),
23 => 
array (
'id_dirindikator' => 23,
'dirindikator' => '2. Jumlah mahasiswa yang sudah melakukan aktivitas kewirausahaan [IKP 1.1.5.2.]\'),',
),
24 => 
array (
'id_dirindikator' => 24,
'dirindikator' => '3. Masa tunggu 0 (nol) blm (Jumlah  lulusan yang langsung bekerja) [IKP 1.1.5.3.= IKK 1.4.]\'),  ',
),
25 => 
array (
'id_dirindikator' => 25,
'dirindikator' => '1. Jumlah kelas yg diselenggarakan berbasis kerjasama Industri (kelas kerjasama/ kelas khusus / CTS / RPL)\'),  ',
),
26 => 
array (
'id_dirindikator' => 26,
'dirindikator' => '1.  Jumlah Prodi Magister Terapan (Prodi Elektro, Perbankan Syariah dan Komputer Akuntasi) [IKP 1.2.1.1.= IKU 2.])\'),',
),
27 => 
array (
'id_dirindikator' => 27,
'dirindikator' => '1. Jumlah Prodi terakreditasi A [IKP 1.2.2.1.= IKU 7a.]\'),',
),
28 => 
array (
'id_dirindikator' => 28,
'dirindikator' => '2. Jumlah Prodi terakreditasi Internasional [IKP 1.2.2.5.]\'),',
),
29 => 
array (
'id_dirindikator' => 29,
'dirindikator' => '3.  Jumlah Laboratorium terakreditasi ISO 17025 [IKP 1.2.2.6.]\'),',
),
30 => 
array (
'id_dirindikator' => 30,
'dirindikator' => '1. Jumlah karya kreatif / Inovasi / produk, hasil penelitian yang dimanfaatkan pengguna / UMKM / masyarakat dan berkelanjutan (UMKM / Desa Binaan). (three parted  : Polines – Masy/UMKM-Pemda /litbang) – basis tech baku /tepat guna/ nilai manfaat di masyar',
),
31 => 
array (
'id_dirindikator' => 31,
'dirindikator' => '2. Jumlah prototipe hasil pengembangan teknologi untuk industry (three parted  : Polines – Industri /litbang – Dirjen Dikti) berkelanjutan. Penguatan/ pengembangan Hi-Tech, Medium-Tech\'),',
),
32 => 
array (
'id_dirindikator' => 32,
'dirindikator' => '3. Jumlah Judul Penelitian kerjasama dengan industri / Lembaga Litbang berkelanjutan [IKP 2.1.1.4.]\'),',
),
33 => 
array (
'id_dirindikator' => 33,
'dirindikator' => '4.  Jumlah prototipe penerapan teknologi  yg bermanfaat & berkelanjutan [IKP 2.1.1.2.]\'),',
),
34 => 
array (
'id_dirindikator' => 34,
'dirindikator' => '1. Jumlah karya ilmiah yang dipublikasikan Journal Nasional terakreditasi [IKP 2.2.1.1.= IKU 9.] \'),',
),
35 => 
array (
'id_dirindikator' => 35,
'dirindikator' => '2. Jumlah karya ilmiah yang dipublikasikan Journal  Internasional (berindex) [IKP 2.2.1.2.= IKU 10.]\'),',
),
36 => 
array (
'id_dirindikator' => 36,
'dirindikator' => '3. Jumlah HaKi yang di danai dan di daftarkan IKP 2.2.1.3.= IKU 8.\'),',
),
37 => 
array (
'id_dirindikator' => 37,
'dirindikator' => '1. Jumlah hasil penelitian yg telah ter : Indentifikasi, dokumentasi, untuk bahan promosi dan mengembangkan penelitian yg berupa prototipe yang berpotensi dimanfaatkan (orientasi profit / non profit : produktif, efisien, efektif, nilai tambah, mensejahter',
),
38 => 
array (
'id_dirindikator' => 38,
'dirindikator' => '1. Jumlah karya kreatif / Inovasi techologi / produk,  yang dimanfaatkan pengguna / UMKM / masyarakat desa binaan secara berkelanjutan.[IKP 2.1.1.5.]\'),',
),
39 => 
array (
'id_dirindikator' => 39,
'dirindikator' => '2.  Jumlah tindaklanjut kerjasama three parted ( Polines / P3M– Masy/UMKM-Pemda /litbang) – basis pemberdayaan UMKM / masyarakat menjadi objek binaan yang berkelanjutan\'),',
),
40 => 
array (
'id_dirindikator' => 40,
'dirindikator' => '3. Jumlah Judul Pengabdian masyarakat kerjasama berbasis pemberdayaan UMKM / masyarakat \'),',
),
41 => 
array (
'id_dirindikator' => 41,
'dirindikator' => '1. Jumlah karya ilmiah yang dipublikasikan Journal Nasional terakreditasi  / Journal  Internasional (berindex) \'),',
),
42 => 
array (
'id_dirindikator' => 42,
'dirindikator' => '2. Jumlah HaKi yang di danai dan di daftarkan \'),',
),
43 => 
array (
'id_dirindikator' => 43,
'dirindikator' => '1. Jumlah pengabdian masyarakat yang ter Indentifikasi, menjadi media pendampingan dan pengembangan pengabdian masyarakat yg dimanfaatkan (nilai tambah & kesejahteraan ekonomi) secara berkelanjutan.\'),',
),
44 => 
array (
'id_dirindikator' => 44,
'dirindikator' => '1.  Persentase Efektifitas Perencanaan Program, kegiatan dan penganggaran (Mekanisme distribusi anggaran kegiatan Rutin & PHK Polines, Perhit kelebihan mengajar, kesesuaian tupoksi dg reward prestasi kinerja dll) \'),',
),
45 => 
array (
'id_dirindikator' => 45,
'dirindikator' => '2. Hasil  Penilaian terhadap AKIP\'),',
),
46 => 
array (
'id_dirindikator' => 46,
'dirindikator' => '3. Pelaksanaan Audit / monev internal (APIP)\'),',
),
47 => 
array (
'id_dirindikator' => 47,
'dirindikator' => '4.Jumlah temuan (major/minor) Auditor Internal  (Tim SPI & Tim ISO)\'),',
),
48 => 
array (
'id_dirindikator' => 48,
'dirindikator' => '1. Jumlah Implementasi Standar Operational Minimum\'),',
),
49 => 
array (
'id_dirindikator' => 49,
'dirindikator' => '2. Jumlah SOP berbasis algoritma yg di implementasikan\'),',
),
50 => 
array (
'id_dirindikator' => 50,
'dirindikator' => '3. Jumlah Band Width yang tersedia\'),',
),
51 => 
array (
'id_dirindikator' => 51,
'dirindikator' => '4.  Jumlah Sistem Informasi Bidang non-akademik berbasis ICT\'),',
),
52 => 
array (
'id_dirindikator' => 52,
'dirindikator' => '1. Tingkat kepatuhan kode etik (Dosen, Tenaga kependidikan, mhs)\'),',
),
53 => 
array (
'id_dirindikator' => 53,
'dirindikator' => '2. Jumlah kegiatan (Persentase peserta) untuk menumbuhkan semangat  budaya kerja & Pelayanan prima (Service of Excellence) – (outbound dll)\'),',
),
54 => 
array (
'id_dirindikator' => 54,
'dirindikator' => '3.   Persentase peserta yg mengikuti kegiatan untuk menguatkan unit-unit kerja dlm  menjalankan seluruh fungsi-fungsi manajemen  (induksi manajemen)\'),',
),
55 => 
array (
'id_dirindikator' => 55,
'dirindikator' => '1. Jumlah identifikasi (pemetaaan) : jaringan, perbaikan, perawatan : alat /sapras , CCTV, APAR, dll\'),',
),
56 => 
array (
'id_dirindikator' => 56,
'dirindikator' => '2.   Persentase Laporan Stock Opname Gudang per semester\'),',
),
57 => 
array (
'id_dirindikator' => 57,
'dirindikator' => '4\', \'Persentase kesesuaian Implementasi pengembangan dengan RIP Institusi\'),',
),
58 => 
array (
'id_dirindikator' => 58,
'dirindikator' => '1. Jumlah Implementasi Standar Operational Minimum Bidang Akademik\'),',
),
59 => 
array (
'id_dirindikator' => 59,
'dirindikator' => '2. Jumlah  algoritma berbasis SOP yg di implementasikan \'),',
),
60 => 
array (
'id_dirindikator' => 60,
'dirindikator' => '3. Jumlah Band Width yang tersedia\'),',
),
61 => 
array (
'id_dirindikator' => 61,
'dirindikator' => '4. Jumlah Sistem Informasi Bidang Akademik berbasis ICT\'),',
),
62 => 
array (
'id_dirindikator' => 62,
'dirindikator' => '1. Persentase layanan E-library, E-journals, E-books dan dll yg terkait\'),',
),
63 => 
array (
'id_dirindikator' => 63,
'dirindikator' => '2. Jumlah layanan antar perpustakaan\'),',
),
64 => 
array (
'id_dirindikator' => 64,
'dirindikator' => '1.    Penyusunan RIP Institusi / Mater plan\'),',
),
65 => 
array (
'id_dirindikator' => 65,
'dirindikator' => '2.    Penyusunan Renstra Institusi 2016-2020, Unit Kerja & Sosialisasinya\'),',
),
66 => 
array (
'id_dirindikator' => 66,
'dirindikator' => '3.    Jumlah Hibah Kompetisi Eksternal\'),',
),
67 => 
array (
'id_dirindikator' => 67,
'dirindikator' => '4.    Jumlah Norma dan Tolok Ukur Penyelenggaraan Pendidikan (Produk Senat : statute dll)\'),',
),
68 => 
array (
'id_dirindikator' => 68,
'dirindikator' => '1. Jumlah MOA (tindaklanjut) kerjasama Pemda / litbang yg berkelanjutan (Three Parted : Polines – Masy/UMKM-Pemda / litbang) menjadi UMKM / Desa Binaan. Berbasis Simple-tech /tepat guna/ pengabdian – non profit oriented\'),',
),
69 => 
array (
'id_dirindikator' => 69,
'dirindikator' => '2. Jumlah MOA (tindaklanjut) kerjasama Industri yg berkelanjutan (Three Parted :  Polines – Industri/Litbang-Dikti) menjadi Mitra : magang, Penguatan / pengembangan kreatif-inovatif (berbasis Hi-Tech, Medium Tech).\'),',
),
70 => 
array (
'id_dirindikator' => 70,
'dirindikator' => '1.  Jumlah MOA (tindaklanjut) kerjasama berkelanjutan (Three Parted  :  Polines – PT Asing-Ristekdikti).\'),',
),
71 => 
array (
'id_dirindikator' => 71,
'dirindikator' => '2.  Jumlah kelas yg menyelenggarakan : student exchange, staff exchange, sit in, final project,  twinning dan joint degree programs, seperti: double/ dual degree programs, sandwich programs, students sharing programs, joint research, joint supervision, da',
),
72 => 
array (
'id_dirindikator' => 72,
'dirindikator' => '3.  Jumlah Prodi menyelenggarakan Klas Internasional : Prodi Bank Syariah, Prodi MBI, Telekom, Prodi Analis Keuangan\'),',
),
73 => 
array (
'id_dirindikator' => 73,
'dirindikator' => '4. Ratio mahasiswa asing\'),',
),
74 => 
array (
'id_dirindikator' => 74,
'dirindikator' => '5.  Jumlah kelas kerjasama antara Polines dg PT lain / Industri (Permata, PDD, PLN, kelas khusus dll)\'),',
),
75 => 
array (
'id_dirindikator' => 75,
'dirindikator' => 'Jumlah kegiatan  kerjasama yang melibatkan Alumni (temu alumni, kompetensi mhs / magang / nara sumber, bursa kerja, koperasi dll)\'),',
),
76 => 
array (
'id_dirindikator' => 76,
'dirindikator' => '1.  Jumlah Implementasi Standar Operational Minimum (adanya : TOR, Format Lap, kriteria Reviewer, mekanisme penilaian, Monev  dll)\'),',
),
77 => 
array (
'id_dirindikator' => 77,
'dirindikator' => '2.   Jumlah algoritma berbasis SOP yg di implementasikan\'),',
),
78 => 
array (
'id_dirindikator' => 78,
'dirindikator' => '3.   Jumlah Sistem Informasi Bidang P3M berbasis ICT\'),',
),
79 => 
array (
'id_dirindikator' => 79,
'dirindikator' => '1. Jumlah Algoritma yang diimplemtasikan berbasis Standar Operational Minimum / SOP  dan Jumlah layanan berbasis ICT bidang akademik & penunjang Akademik\'),',
),
80 => 
array (
'id_dirindikator' => 80,
'dirindikator' => '1. Persentase peran Penjaminan Mutu dalam pendampingan pelaksana Akademik dan Penunjang Akademik\'),',
),
81 => 
array (
'id_dirindikator' => 81,
'dirindikator' => '1. Jumlah Algoritma yang diimplementasikan berbasis Standar Operational Minimum / SOP dan Jumlah layanan berbasis ICT bidang Keuangan.\'),',
),
82 => 
array (
'id_dirindikator' => 82,
'dirindikator' => '1. Persentase peran SPI dalam pendampingan pelaksana kegiatan Non Akademik & Non Penunjang Akademik (Keuangan)\'),',
),
83 => 
array (
'id_dirindikator' => 83,
'dirindikator' => '1. Jumlah karya kreatif-inovatif dosen & mahasiswa untuk promosi dan pendampingan dalam pengabdian masyarakat yg dimanfaatkan (nilai tambah & kesejahteraan ekonomi) secara berkelanjutan\'),',
),
84 => 
array (
'id_dirindikator' => 84,
'dirindikator' => '1. Jumlah karya kreatif-inovatif dosen & mahasiswa  hasil/karya penelitian yg berupa prototipe yang dipromosikan & berpotensi dimanfaatkan stakeholders secara berkelanjutan \'),',
),
85 => 
array (
'id_dirindikator' => 85,
'dirindikator' => '1. Jumlah SDM Dosen & Non Dosen yang mengikuti / melaksanakan : Studi lajut, publikasi /seminar, pelatihan, magang, anggota asosiasi profesi, dan sertifikasi \'),',
),
86 => 
array (
'id_dirindikator' => 86,
'dirindikator' => '1. Jumlah karya kreatif-inovatif dosen / mahasiswa hasil penelitian yg berupa prototipe & berpotensi dimanfaatkan stakeholders secara berkelanjutan.\'),',
),
87 => 
array (
'id_dirindikator' => 87,
'dirindikator' => '1. Jumlah  pendampingan pengabdian masyarakat  hasil karya kreatif-inovatif dosen /  mahasiswa yg dimanfaatkan (nilai tambah & kesejahteraan ekonomi) secara berkelanjutan \'),',
),
88 => 
array (
'id_dirindikator' => 999,
'dirindikator' => 'Belum',
),
));
        
        
    }
}