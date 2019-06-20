<?php

use Illuminate\Database\Seeder;

class AgendaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('agenda')->delete();
        
        \DB::table('agenda')->insert(array (
            0 => 
            array (
                'id_agenda' => 30,
                'tema' => 'Seminar "Membangun Portal Berita ala Detik.com"',
                'tema_seo' => 'seminar-membangun-portal-berita-ala-detikcom',
                'isi_agenda' => 'Seminar ini akan membahas tentang konsep, proses, dan implementasi dalam membangun portal berita sekelas detik.com.<br>',
                'tempat' => 'Lab. Universitas Atmajaya Yogyakarta',
            'pengirim' => 'HMJ TI (081843092580)',
                'tgl_mulai' => '2009-03-14',
                'tgl_selesai' => '2009-03-14',
                'tgl_posting' => '2009-01-31',
                'jam' => '11.00 s/d 13.00 WIB',
                'username' => 'admin',
            ),
            1 => 
            array (
                'id_agenda' => 31,
                'tema' => 'Bedah Buku "Membongkar Trik Rahasia Master PHP"',
                'tema_seo' => 'bedah-buku-membongkar-trik-rahasia-master-php',
                'isi_agenda' => 'Acara bedah buku terbaru dari Lukmanul Hakim yang berjudul Membongkar Trik Rahasia Para Master PHP.
',
                'tempat' => 'Toko Buku Gramedia Sudirman',
            'pengirim' => 'Enda (08192839849)',
                'tgl_mulai' => '2009-10-29',
                'tgl_selesai' => '2009-10-30',
                'tgl_posting' => '2009-01-31',
                'jam' => '08.00 s/d 12.00 WIB',
                'username' => 'joko',
            ),
            2 => 
            array (
                'id_agenda' => 29,
                'tema' => 'Workshop "3 Hari Menjadi Master PHP"',
                'tema_seo' => 'workshop-3-hari-menjadi-master-php',
                'isi_agenda' => 'Workshop ini bertujuan untuk bla .. bla .. bla<br>',
                'tempat' => 'Jogja Expo Center',
            'pengirim' => 'Adi (081893274848)',
                'tgl_mulai' => '2009-02-21',
                'tgl_selesai' => '2009-02-23',
                'tgl_posting' => '2009-01-31',
                'jam' => '15.00 s/d Selesai',
                'username' => 'sinto',
            ),
            3 => 
            array (
                'id_agenda' => 36,
                'tema' => 'Workshop VBA Programming for Excel',
                'tema_seo' => 'workshop-vba-programming-for-excel',
                'isi_agenda' => 'Tes
',
                'tempat' => 'Lab. Pusat Komputer UII',
            'pengirim' => 'Aci (08189320984)',
                'tgl_mulai' => '2009-10-29',
                'tgl_selesai' => '2009-10-29',
                'tgl_posting' => '2009-10-26',
                'jam' => '09.00 s/d Selesai',
                'username' => 'wiro',
            ),
            4 => 
            array (
                'id_agenda' => 38,
                'tema' => 'Workshop Kolaborasi PHP dan jQuery',
                'tema_seo' => 'workshop-kolaborasi-php-dan-jquery',
                'isi_agenda' => 'Materinya mengenai cara mengkolaborasikan pemrograman PHP dan jQuery
',
                'tempat' => 'Hotel Santika Yogyakarta',
            'pengirim' => 'Rendy (08787768768)',
                'tgl_mulai' => '2010-01-15',
                'tgl_selesai' => '2010-01-15',
                'tgl_posting' => '2010-01-15',
                'jam' => '09.00 s/d 16.00 WIB',
                'username' => 'admin',
            ),
        ));
        
        
    }
}