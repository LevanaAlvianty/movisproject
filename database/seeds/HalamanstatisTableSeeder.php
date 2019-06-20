<?php

use Illuminate\Database\Seeder;

class HalamanstatisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('halamanstatis')->delete();
        
        \DB::table('halamanstatis')->insert(array (
            0 => 
            array (
                'id_halaman' => 1,
                'judul' => 'Profil',
                'isi_halaman' => '<p>
<strong>Bukulokomedia.com</strong> merupakan website resmi dari penerbit
Lokomedia yang bermarkas di Jl. Jambon. Perum. Pesona Alam Hijau 2 Blok B-4 Kricak, Jatimulyo, Yogyakarta
55242. Dirintis pertama kali oleh Lukmanul Hakim pada tanggal 14 Maret
2008.<br />
<br />
Produk unggulan dari penerbit Lokomedia adalah buku-buku serta aksesoris bertema Web, terutama PHP (<span style="font-weight: bold; font-style: italic">PHP: Hypertext Preprocessor</span>) yang merupakan pemrograman Internet paling handal saat ini.
</p>
',
                'tgl_posting' => '2010-05-31',
                'gambar' => 'gedungku.jpg',
            ),
            1 => 
            array (
                'id_halaman' => 2,
                'judul' => 'Visi dan Misi',
                'isi_halaman' => '<p>
Visi :
</p>
<p>
&nbsp;
</p>
<p>
&nbsp;
</p>
<p>
Misi :
</p>
<p>
&nbsp;
</p>
',
                'tgl_posting' => '2010-05-31',
                'gambar' => '',
            ),
            2 => 
            array (
                'id_halaman' => 3,
                'judul' => 'Struktur Organisasi',
                'isi_halaman' => 'Isikan struktur organisasi di bagian ini
',
                'tgl_posting' => '2010-05-31',
                'gambar' => '',
            ),
        ));
        
        
    }
}