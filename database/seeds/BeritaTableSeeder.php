<?php

use Illuminate\Database\Seeder;

class BeritaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('berita')->delete();
        
        \DB::table('berita')->insert(array (
            0 => 
            array (
                'id_berita' => 76,
                'id_kategori' => 23,
                'username' => 'joko',
                'judul' => 'Laskar Pelangi Pecahkan Rekor',
                'judul_seo' => 'laskar-pelangi-pecahkan-rekor',
                'headline' => 'Y',
            'isi_berita' => 'Sukses film Laskar Pelangi dalam memecahkan rekor jumlah penonton memberi pembelajaran bahwa penonton film Indonesia bisa menerima inovasi. Mira Lesmana dari Miles Films yang memproduksi film ini mengatakan, sampai Rabu (12/11), pemutaran Laskar Pelangi di 100 layar bioskop di 25 kota menyedot lebih dari 4,4 juta penonton. Padahal, Kamis kemarin, jumlah kota yang memutar film itu bertambah dengan Padang, Tasikmalaya, dan Ambon. Sebelumnya, Ayat-ayat Cinta ditonton 3,7 juta penonton (Kompas, 26/10).<br><br>Jumlah penonton itu belum termasuk penonton layar tancap untuk menjangkau penonton di daerah yang belum memiliki gedung bioskop.<br><br>Menurut Mira, layar tancap di tiga lokasi di Belitung, tempat cerita berlokasi, menyedot penonton lebih dari 60.000 penonton dan di Bangka sekitar 80.000-an orang. Pemutaran layar tancap juga dilakukan di Rantau (Sumatera Utara) dan akan dilakukan di Natuna, Aceh (enam lokasi), Lombok, serta Papua di Timika, Sorong, dan Jayapura.<br><br>Kabar gembira lainnya, film ini menjadi salah satu film yang terpilih untuk menjadi bagian dari Berlin International Film Festival atau Berlinale 2009. Festival ini adalah sebuah peristiwa budaya terpenting di Jerman yang juga adalah salah satu festival film internasional paling bergengsi di dunia.<br><br>Film Laskar Pelangi diangkat dari novel berjudul sama karya Andrea Hirata. Film ini mengangkat realitas sosial masyarakat Belitung, tentang persahabatan, kegigihan dan harapan, dalam bingkai kemiskinan dan ketimpangan kelas sosial.<br><br>"Jumlah penonton dan panjangnya masa pemutaran film sejak 25 September memperlihatkan penonton butuh sesuatu yang baru, yang inovatif, walau yang ditampilkan realitas tidak gemerlap," papar Mira.<br><br>Selama ini, kebanyakan film Indonesia bertema drama cinta, horor, dan komedi, sementara Miles Films dalam empat film terakhirnya menggarap tema realisme sosial-politik.<br><br>Mira mengakui, inovasi itu tidak selalu berhasil secara komersial. Contohnya Gie, juga produksi Miles Films. Meskipun dari sisi kritik film dan kreativitas bagus, tetapi tidak sesukses Laskar Pelangi dalam pemasaran.<br><br>Produksi film ini menghabiskan biaya Rp 9 miliar dan 90 persen dikerjakan di dalam negeri. "Sound mixing dengan sistem Dolby dan transfer optis untuk suara belum bisa dikerjakan di dalam negeri," ujar Mira.<br><br>Miles Films dan para investor, antara lain Mizan Publishing, kini bersiap memproduksi lanjutan Laskar Pelangi. Sang Pemimpi adalah bagian novel tetralogi Andrea Hirata. (sumber: kompas.com)<br>',
                'hari' => 'Minggu',
                'tanggal' => '2009-02-01',
                'jam' => '14:31:58',
                'gambar' => '76laskarpelangi.jpg',
                'dibaca' => 1,
                'tag' => 'laskar-pelangi',
            ),
            1 => 
            array (
                'id_berita' => 69,
                'id_kategori' => 22,
                'username' => 'admin',
                'judul' => 'Gelombang Solidaritas untuk Palestina',
                'judul_seo' => 'gelombang-solidaritas-untuk-palestina',
                'headline' => 'Y',
            'isi_berita' => 'Serangan Israel kepada Palestina yang terjadi mulai akhir Desember 2008 silam telah menewaskan hampir seribu nyawa manusia. Warga sipil yang kebanyakan perempuan dan anak-anak menjadi korban keganasan tentara Israel. Warga dunia pun marah. Saat ini, hampir setiap hari sejumlah unjuk rasa mengecam kebiadaban Israel terjadi di seluruh belahan dunia. Kejahatan Israel adalah kejahatan kemanusiaan dan sudah menjadi isu bersama umat manusia.<br><br>Kecaman tidak hanya datang dari umat Islam, tapi juga dari umat agama lain. Lihat saja sejumlah biksu yang tergabung dalam Perwakilan Umat Buddha Indonesia (Walubi), kemudian Persatuan Tionghoa Indonesia serta Dewan Pemuda Kristen Indonesia.<br><br>Mereka semua ikut berpatisipasi dalam aksi solidaritas untuk Palestina yang dilaksanakan di lapangan Monas, Jakarta Ahad (11/1/2009) lalu. Mereka mengutuk kebiadaban Israel. (sumber: sabili.co.id)<br>',
                'hari' => 'Sabtu',
                'tanggal' => '2009-01-31',
                'jam' => '14:34:18',
                'gambar' => '11solidaritas.jpg',
                'dibaca' => 19,
                'tag' => 'gaza,israel,palestina',
            ),
            2 => 
            array (
                'id_berita' => 141,
                'id_kategori' => 19,
                'username' => 'admin',
                'judul' => 'Polines Raih 3 Gelar Kompetisi Mobil Listrik Indonesia',
                'judul_seo' => 'polines-raih-3-gelar-kompetisi-mobil-listrik-indonesia',
                'headline' => 'Y',
            'isi_berita' => '<p><span>Prestasi kembali ditorehkan mahasiswa Politeknik Negeri Semarang (Polines). Tim&nbsp;</span><a title="mobil" href="http://jabar.tribunnews.com/tag/mobil/">mobil</a><span>listrik dari Polines berhasil meraih tiga gelar di ajang Kompetisi&nbsp;</span><a title="mobil" href="http://jabar.tribunnews.com/tag/mobil/">Mobil</a><span>&nbsp;Listrik Indonesia (KMLI) VII yang berlangsung di kampus Politeknik Negeri Bandung (Polban), Minggu (15/11). Tim yang berjuluk &ldquo;PML-4&rdquo; berhasil meraih juara ke-2 Uji Kecepatan, juara ke-3 Uji Percepatan/Akselerasi, dan Juara ke-3 Uji Perlambatan/Deselerasi.</span><br /><br /><span>Direktur Polines, Ir. Supriyadi, MT mengaku bangga atas prestasi yang telah diraih tim mobil listrik Polines. &ldquo;Prestasi ini sangat membanggakan,&rdquo; ujarnya saat menerima tim mobil listrik di kampus Polines, Tembalang, Senin (16/11). Prestasi ini turut meningkatkan citra lembaga. Polines mendorong dan mendukung mahasiswa untuk ikut dalam berbagai lomba maupun kompetisi. Hal ini penting untuk meningkatkan kemampuan&nbsp;</span><em>soft skill</em><span>&nbsp;di luar kampus. &ldquo;Kemampuan komunikasi dan interaksi dengan lingkungan sangat diperlukan saat masuk dunia kerja,&rdquo; jelasnya. Nilai kerjasama, peduli, empati, perilaku dan kreativitas dapat diperoleh saat mahasiswa ikut kegiatan. Sehingga keunggulan akademik saja tidak cukup.</span><br /><span>Ketua Tim Polines, M. Nur Syahid mengucap syukur atas prestasi yang telah diraih. &ldquo;Ini buah kerja keras tim, ujarnya. Tanpa dukungan dan kerjasama tim yang solid, mustahil bisa berhasil maksimal. Meski dengan waktu persiapan yang mepet, dapat berangkat ikut kompetisi dengan hasil yang tidak mengecewakan. &nbsp;&nbsp;</span><br /><br /><span>Sedangkan Alif Wardani, selaku&nbsp;</span><em>driver</em><span>&nbsp;tim mobil listrik Polines mengaku puas atas hasil yang diraih. &ldquo;Terbayar lunas,&rdquo; ungkapnya bangga. Tanggung jawab besar dipikul dipundaknya. Sebagai driver, ia punya peran dalam hal menyajikan penampilan terbaik mobil listrik hasil kerja tim. Semua lini, baik bidang permesinan maupun kelistrikan bersinergi untuk menghasilkan performa terbaik. Dengan jarak tempuh 10 km, berhasil ditempuh dalam waktu 13 menit, dan meraih juara III uji kecepatan. Margana,ST,MEng, selaku dosen pembimbing berharap kepada mahasiswa untuk terus berkarya. &ldquo;Jangan puas sampai disini,&rdquo; ungkapnya. Meski prestasi tahun ini meningkat dibanding tahun kemarin, namun kedepan persaingan tentu semakin ketat. Evaluasi dan persiapan perlu dimulai jauh-jauh hari,&rsquo; ungkapnya</span></p>',
                'hari' => 'Selasa',
                'tanggal' => '2015-11-17',
                'jam' => '14:19:50',
                'gambar' => '1617112015-1.jpg',
                'dibaca' => 15,
                'tag' => '',
            ),
            3 => 
            array (
                'id_berita' => 71,
                'id_kategori' => 2,
                'username' => 'admin',
                'judul' => 'Ronaldo "CR7" Pecahkan Transfer Termahal',
                'judul_seo' => 'ronaldo-cr7-pecahkan-transfer-termahal',
                'headline' => 'Y',
            'isi_berita' => 'Cristiano Ronaldo segera menjadi pemain termahal dunia, menumbangkan rekor Zinedine Zidane. Agen Ronaldo menyebut bahwa kliennya terikat pra kontrak 91 juta poundsterling dengan Real Madrid. Dengan transfer senilai Rp 1,5 triliun itu, maka CR7 dipastikan akan menjadi pemain termahal dunia. Tapi, itu mungkin baru terealisasi musim depan alias musim panas nanti.<br><br>Sport melansir bahwa Pemain Terbaik Dunia 2008 itu terikat kontrak dengan Madrid untuk jangka panjang. Bahkan, juga disebutkan bahwa agen Ronaldo, Jorge Mendes, akan terkena klausul penalti (penalty clause) 20 juta euro (18 juta pounds) jika Ronaldo tak hadir di Santiago Bernabeu, musim depan.<br><br>Sebelumnya, pemain berusia 23 tahun ini dikabarkan juga terikat kontrak dengan mantan presiden Madrid, Florentino Perez. Ronaldo akan menjadi alat kampanye Perez dalam pemilihan presiden Madrid, pertengahan Juli 2009.<br><br>Rekor pemain termahal dunia kini masih dipegang Zinedine Zidane dengan 46 juta poundsterling pada 2001. Perez juga menjadi aktor di balik kedatangan maestro asal Prancis itu dari Juventus ke Madrid.<br><br>Demikian juga runner up pemain termahal dunia, Luis Figo. Perez membajaknya dari rival bebuyutan Barcelona pada 2000 dengan nilai 38,7 juta pounds. Saat itu, Figo juga jadi alat kampanye Perez. (sumber: vivanews.com)<br>',
                'hari' => 'Sabtu',
                'tanggal' => '2009-01-31',
                'jam' => '14:41:25',
                'gambar' => '97cristiano-ronaldo.jpg',
                'dibaca' => 38,
                'tag' => 'sepakbola',
            ),
            4 => 
            array (
                'id_berita' => 72,
                'id_kategori' => 22,
                'username' => 'admin',
                'judul' => 'Belajar Dari Krisis Amerika',
                'judul_seo' => 'belajar-dari-krisis-amerika',
                'headline' => 'Y',
            'isi_berita' => 'Ibarat karena nila setitik, rusak susu sebelanga. Dan di kolam susu inilah tampaknya warga dunia tengah menunggu kapan giliran nila itu datang yang akan benar-benar melumpuhkan sendi perekonomian di negaranya masing-masing, tak terkecuali kita di Indonesia.<br><br>Dan kini kita paham bahwa kondisi yang cukup serius kali ini memang awalnya bermula dari krisis nasional di AS, yang kemudian menyebar dengan cepat ke seluruh dunia. Namun jelas bahwa ia bukanlah penyebab utamanya seperti yang dituding oleh sejumlah media (lihat \'Runtuhnya Pusat Kapitalisme\', Editorial Harian Radar Bogor, 27/09/08).<br><br>Yang menjadi benang merah dari rentetan krisis ini justru adalah penerapan globalisasi dimana roda perekonomian banyak negara di dunia digantungkan. Sebab dalam sistem ekonomi global yang tengah dipraktikkan banyak negara saat ini, krisis yang dialami suatu negara akan menular bak virus ke negara-negara lain, khususnya bila krisis itu bermula dari negara-negara maju dan yang punya otoritas dalam peta perkonomian dunia.<br><br>Meski belum memiliki definisi yang mapan, istilah globalisasi banyak dihubungkan dengan peningkatan keterkaitan dan ketergantungan antarbangsa dan antarmanusia di seluruh dunia dunia melalui perdagangan, investasi, perjalanan, budaya populer, dan bentuk-bentuk interaksi yang lain sehingga batas-batas suatu negara menjadi bias (wikipedia.com).<br><br>Di alam globalisasi inilah, kesalingbergantungan antara negara satu dengan negara lain terjalin begitu kuat. Dengan begitu, sebuah negara yang telah maju diharapkan akan merangsang perekonomian negara-negara yang sedang berkembang lewat sistem pasar bebas yang saling terhubung dan kompetitif. Tak heran bila globalisasi dipercaya akan mampu membawa kemaslahatan pada segenap umat manusia di dunia.<br><br>Sebuah niat yang kedengarannya cukup mulia memang. Dan sejak diterapkan pada era 80-an, globalisasi menjadi sistem ekonomi (mencakup juga aspek sosial, budaya, dan komunikasi) yang populer di banyak negara. Tak terkecuali bagi negara kita tercinta yang kala itu berada di bawah rezim Orde Baru.<br><br>Tapi dengan adanya krisis global ini, untuk pertama kalinya kita disadarkan, betapa sistem globalisasi yang tengah dipraktikkan kebanyakan negara saat ini, ternyata juga berpotensi membawa umat manusia pada krisis berkepanjangan. Ditambah lagi betapa globalisasi ekonomi dunia kian hari kita lihat semu dan banal, yakni di mana triliunan dollar AS diperjualbelikan dan dipermainkan di pasar modal, tetapi hanya sebagian saja diantaranya yang benar-benar menyentuh sektor riil.<br><br>Dengan kondisi kesalingterhubungan dan kesalingbergantungan inilah globalisasi ekonomi menciptakan budaya ekonomi sebagai jaringan terbuka (open network) yang rawan terhadap kemacetan di suatu titik jaringan dan serangan virus ke seluruh jaringan. Serangan virus (semisal kemacetan likuiditas) di sebuah titik jaringan (seperti AS) dengan cepat menjalar ke seluruh jejaring global tanpa ada yang tersisa.<br><br>Maka di titik ini pulalah kita sadar betapa Indonesia sebagai salah satu peserta yang turut serta dalam sistem ekonomi global, cukup rentan terkena dampak krisis ini.<br><br>Sejatinya, krisis global ini memang lebih banyak berpengaruh pada industri keuangan, khususnya pasar modal. Ruang gerak pasar modal itu sendiri belum meluas bagi usaha dan bisnis yang dijalankan bagi kebanyakan masyarakat Indonesia.<br><br>Bisa disimak bahwa roda perekonomian di Kota Bogor sendiri lebih banyak digerakkan oleh sektor riil dan usaha kecil menengah (UKM). Kebanyakan dari mereka menjalankan usaha yang tak memiliki persinggungan langsung dengan investor, juga dikerjakan oleh SDM dari dalam negeri sendiri.<br><br>Karenanya, kita selaku warga Bogor patut menjadikan peristiwa krisis global saat ini sebagai momentum dalam mendukung segenap pelaku bisnis dan UKM kota Bogor. Sebab, sejarah negeri ini telah membuktikan bahwa para pelaku bisnis dan UKM-lah yang mampu bertahan ketika krisis menerpa Indonesia di tahun 1998.<br><br>Dan kepada merekalah kita bisa berharap krisis global kali ini takkan mampir ke Indonesia. (sumber: http://prys3107.blogspot.com/)<br>',
                'hari' => 'Sabtu',
                'tanggal' => '2009-01-31',
                'jam' => '14:48:09',
                'gambar' => '44amerika.jpg',
                'dibaca' => 15,
                'tag' => 'amerika',
            ),
            5 => 
            array (
                'id_berita' => 74,
                'id_kategori' => 19,
                'username' => 'admin',
                'judul' => 'Google Chrome Susupi Microsoft',
                'judul_seo' => 'google-chrome-susupi-microsoft',
                'headline' => 'Y',
                'isi_berita' => '<p>
Browser Microsoft, Internet Explorer (IE), bisa mendominasi karena tersedia secara default pada banyak komputer di pasaran. Google Chrome akan menggoyang dengan menyusup di lahan yang sama. Google rupanya sudah bersiap-siap menawarkan Google Chrome secara default pada komputer-komputer baru. 
</p>
<p>
Pichai juga menjanjikan Chrome akan keluar dari versi Beta (uji coba) pada awal 2009. 
Jika Google berhasil menyusupkan Chrome dalam lahan yang selama ini jadi &#39;mainan&#39; Microsoft, lanskap perang browser akan mengalami perubahan. 
</p>
<p>
Saat ini Microsoft masih mendominasi pada kisaran 70 persen lewat Internet Explorer-nya, sedangkan Firefox menguasai sekitar 20 persen. (sumber: <a href="http://detikinet.com" target="_blank">detikinet.com</a>)
</p>
',
                'hari' => 'Sabtu',
                'tanggal' => '2009-01-31',
                'jam' => '13:34:25',
                'gambar' => '25chrome.jpg',
                'dibaca' => 4341,
                'tag' => 'browser,google',
            ),
            6 => 
            array (
                'id_berita' => 60,
                'id_kategori' => 19,
                'username' => 'admin',
                'judul' => 'Digerus Firefox, IE Makin Melempem',
                'judul_seo' => 'digerus-firefox-ie-makin-melempem',
                'headline' => 'Y',
            'isi_berita' => 'Browser Mozilla Firefox sepertinya makin berkibar. Berdasarkan data terbaru dari biro penelitian Net Applications, Firefox menapak naik dengan menguasai 20,78 persen pangsa pasar browser pada bulan November, naik dari angka 19,97 persen di bulan Oktober.<br><br>Dikutip detikINET dari Afterdawn, Selasa (2/1/2/2008), Firefox kemungkinan sukses menggaet user yang sebelumnya mengandalkan browser Internet Explorer (IE) besutan Microsoft. Pasalnya, masih menurut data Net Applications, pangsa pasar IE kini menurun di bawah 70 persen untuk kali pertama sejak tahun 1998. IE sekarang menguasai 69,8 persen pangsa pasar dari sebelumnya 71,3 persen di bulan Oktober.<br><br>Padahal di masa jayanya di tahun 2003, IE pernah begitu dominan dengan menguasai 95 persen pasaran browser. Penurunan pangsa pasar IE ini disinyalir juga terkait musim liburan di AS di mana banyak perusahaan libur. Padahal browser IE banyak dipakai oleh kalangan perusahaan.<br><br>Adapun produk browser lainnya menunjukkan tren peningkatan. Apple Safari kini punya pangsa 7,13 persen dan Google Chrome sebesar 0,83 persen dari yang sebelumnya 0,74 persen. Sementara pangsa pasar Opera mengalami penurunan dari yang sebelumnya 0,75 persen menjadi 0,71 persen saja. (sumber: <a target="_blank" title="http://detikinet.com" href="http://detikinet.com">detikinet.com</a>)<br>',
                'hari' => 'Sabtu',
                'tanggal' => '2009-01-31',
                'jam' => '13:58:31',
                'gambar' => '47firefox.jpg',
                'dibaca' => 11,
                'tag' => 'browser',
            ),
            7 => 
            array (
                'id_berita' => 61,
                'id_kategori' => 22,
                'username' => 'admin',
                'judul' => 'Sepatu Melayang Saat Bush Berpidato di Irak',
                'judul_seo' => 'sepatu-melayang-saat-bush-berpidato-di-irak',
                'headline' => 'Y',
            'isi_berita' => 'Apakah pemerintah AS sakit hati karena Presiden Bush ditimpuk sepatu? Sudah pasti. Tapi di Irak, sepatu melayang itu sebagai pamitan terindah untuk Bush. Muntazer Al Zaidi dieluk-elukkan di Irak. Tuntutan masyarakat agar dia dibebaskan juga semakin kencang. Mereka menilai tindakan Al Zaidi menimpuk Bush dengan sepatunya sebagai tindakan paling berani.<br><br>Sahabat Al Zaidi di stasiun TV Al Baghdadia, mengungkapkan betapa bencinya Al Zaidi pada Bush. Dia menganggap Bush sebagai tokoh yang memerintahkan perang di Irak.<br><br>"Melempari sepatu pada Bush merupakan ciuman pamitan terbaik hingga sejauh ini ... itu merupakan ungkapan bagaimana rakyat Irak dan bangsa Arab lainnya membenci Bush," tulis Musa Barhoumeh, editor koran independen Yordania, Al-Gahd, Selasa (16/12).<br><br>Di Washington, Al Zaidi dicap sebagai orang yang cuma mencari perhatian.<br><br>"Tak diketahui apa motivasi orang itu, ia tampaknya jelas hanya berusaha mendapatkan perhatian atas dirinya," kata Jurubicara Deplu AS, Roberet Wood, kepada para wartawan.<br><br>Pemerintah Irak mencap tindakan Zaidi sebagai \'memalukan\' dan menuntut permintaan maaf dari pemimpin redaksinya yang berkerdudukan di Kairo. Namun Bos Al Zaidi malah menuntut pembebasan reporternya itu. (sumber: <a target="_blank" title="http://inilah.com" href="http://inilah.com">inilah.com</a>)<br>',
                'hari' => 'Sabtu',
                'tanggal' => '2009-01-31',
                'jam' => '14:04:27',
                'gambar' => '38bush.jpg',
                'dibaca' => 12076,
                'tag' => 'amerika,george-bush',
            ),
            8 => 
            array (
                'id_berita' => 62,
                'id_kategori' => 22,
                'username' => 'admin',
                'judul' => 'Monumen Menghormati Pelempar Sepatu Bush',
                'judul_seo' => 'monumen-menghormati-pelempar-sepatu-bush',
                'headline' => 'Y',
            'isi_berita' => 'Wartawan pelempar sepatu ke arah mantan Presiden Amerika Serikat George W Bush Desember lalu, benar-benar menjadi pahlawan. Sebuah kota di Irak bahkan membuatkan monumen sepatu untuk menghormatinya. Seperti diberitakan Reuters, Jumat (30/1/2009), monumen sepatu yang terletak di kota Tikrit Irak tersebut diresmikan Kamis kemarin. Sepatu sepanjang dua meter itu dilapis material berwarna perunggu.<br><br>"Muntazar: Puasa (bicara) hingga pedang menyayat kebisuan dengan darah. Sunyi hingga mulut kami menyuarakan kebenaran," demikian tertulis di monument itu. Saat melemparkan sepatunya ke Bush dalam sebuah konferensi pers di Baghdad, wartawan televisi Al Baghdadia itu mengucapkan bahwa Bush merupakan orang yang bertangung jawab atas kematian ribuan warga Irak. Zaidi juga menyebut Bush dengan kata "anjing".<br><br>Sejak insiden itu Zaidi medekam di penjara Baghdad. Dia menghadapi tuntutan penyerangan terhadap tamu negara dengan ancaman hukuman penjara hingga 15 tahun.<br><br>Pimpinan rumah yatim piatu dan organisasi kesejahteraan anak Tikrit Fatin Abdul Qader mengatakan monumen itu didesain oleh Laith Al Amiri dengan bobot keseluruhan sekira 1,2 ton. Tema monumen tersebut adalah "Patung Semangat dan Kedermawanan".<br><br>"Monumen ini merupakan ekspresi penghargaan dan apresiasi kami untuk Muntazhar Zaidi akrena hati orang-orang Irak akan tenang dengan leparan sepatunya," kata Fatin. (sumber: <a target="_blank" title="http://sabili.co..id" href="http://sabili.co..id">sabili.co.id</a>)<br>',
                'hari' => 'Sabtu',
                'tanggal' => '2009-01-31',
                'jam' => '14:11:28',
                'gambar' => '91bushet.jpg',
                'dibaca' => 12,
                'tag' => 'amerika,george-bush',
            ),
            9 => 
            array (
                'id_berita' => 75,
                'id_kategori' => 22,
                'username' => 'admin',
                'judul' => 'Krisis Ekonomi Amerika, Bukti Gagalnya Kapitalisme',
                'judul_seo' => 'krisis-ekonomi-amerika-bukti-gagalnya-kapitalisme',
                'headline' => 'Y',
                'isi_berita' => '<p>
Presiden Ekuador, Rafael Correa menilai krisis yang terjadi di Amerika menjadi bukti kegagalan sistem kapitalis dan periode Kapitalisme telah berakhir serta ekonomi Amerika sebagai pasar terbesar dunia telah dililit krisis. (Kantor Berita Fars Prensa Latina Kuba).
</p>
<p>
Correa menambahkan, apa yang terjadi di Amerika tidak terbatas pada krisis keuangan, namun bukti kebuntuan sebuah sistem yang dibangun tanpa dicermati secara serius. 
</p>
<p>
Menurut Correa, solusi krisis sistem keuangan Amerika tidak akan bisa selesai dengan menyuntikkan dana 700 miliar dolar kepada bank-bank yang telah bangkrut, namun yang lebih penting lagi adalah Amerika harus melakukan perubahan fundamental. (sumber: hidayatullah.com)
</p>
',
                'hari' => 'Sabtu',
                'tanggal' => '2009-01-31',
                'jam' => '14:13:52',
                'gambar' => '54RafelKarera.jpg',
                'dibaca' => 27,
                'tag' => 'amerika',
            ),
            10 => 
            array (
                'id_berita' => 79,
                'id_kategori' => 22,
                'username' => 'admin',
                'judul' => 'Ahmadinejad: Gaza Akan Jadi Kuburan Israel',
                'judul_seo' => 'ahmadinejad-gaza-akan-jadi-kuburan-israel',
                'headline' => 'Y',
            'isi_berita' => 'Iran dan Israel tampaknya tidak akan pernah melakukan genjatan senjata. Presiden Iran Mahmoud Ahmadinejad melontarkan kata-kata serangan terhadap Israel dengan menyebut negara Yahudi itu akan segera lenyap dari bumi. "<span style="font-weight: bold; font-style: italic;">Kejahatan yang dilakukan rejim Zionis (Israel) terjadi karena mereka sadar sudah sampai di akhir dan segera lenyap dari muka bumi</span>," kata Ahmadinejad dalam pawai anti-Israel yang berlangsung di Teheran, seperti dilaporkan kantor berita Mehr dan dikutip DPA, Sabtu (13/12).<br><br>Dia mengatakan Israel sudah kehilangan arah dan kian sadar bahwa kelompok negara-negara kuat makin ragu untuk menunjukkan dukungan untuk negara Yahudi itu.<br><br>Ahmadinejad juga mengatakan bahwa kejahatan Israel di Gaza bertujuan mengganti pemimpin politik di wilayah itu agar sesuai dengan kepentingan politik Israel. (sumber: <a target="_blank" title="Situs Berita Inilah.com" href="http://inilah.com">inilah.com</a>)<br>',
                'hari' => 'Senin',
                'tanggal' => '2009-02-02',
                'jam' => '14:23:39',
                'gambar' => '22ahmadinejad.jpg',
                'dibaca' => 3001,
                'tag' => 'gaza,israel,palestina',
            ),
            11 => 
            array (
                'id_berita' => 65,
                'id_kategori' => 23,
                'username' => 'admin',
                'judul' => 'Michael Heart "Song for Gaza"',
                'judul_seo' => 'michael-heart-song-for-gaza',
                'headline' => 'Y',
            'isi_berita' => 'Banyak cara untuk men-support perjuangan rakyat Palestina di Gaza, salah satunya dengan lagu. Seorang penyanyi di Los Angeles Amerika Serikat - Michael Heart yang bernama asli Annas Allaf kelahiran Syiria, membuat sebuah lagu khusus yang dia tujukan untuk rakyat Gaza yang sampai saat ini masih jadi sasaran pembantaian oleh Zionis Israel.<br><br>Sejak dia merilis lagu yang berjudul "We will not go down" (Song for Gaza), lagu tersebut mendapat banyak respon, berupa komentar dukungan, sampai ia sendiri kewalahan menjawab dan membalas berbagai email yang masuk.<br><br>Michael Heart menggambarkan kondisi rakyat Gaza akan gempuran Zionis Israel dalam lagunya itu membuat kita merasa tersindir dan sedih akan nasib rakyat Gaza. Walaupun lagu itu baru di rilis, namun telah ratusan ribu orang melihatnya di youtube dan mendownload MP3 nya.<br><br>Awalnya dia berencana dengan menjual CD lagu MP3 nya itu dan hasil penjualannya akan dia donasikan untuk kepentingan amal kemanusiaan untuk penduduk Gaza, tapi karena dia merasa sulit kalau harus sendiri mendonasikan hasil penjualan CD MP3 nya, akhirnya dia memutuskan semua orang bisa mendownload gratis lagu tersebut. Dan dia berharap, setelah mendengarkan lagu itu, orang-orang akan tergerak hatinya untuk membantu rakyat Palestina di Gaza dengan mendonasikan uangnya ke lembaga-lembaga kemanusiaan yang ada atau organisasi yang didedikasikan untuk meringankan penderitaan rakyat Palestina.<br><br>Sebagai musisi Michael Heart sangat berterima kasih atas dukungan yang diberikan kepada dia atas lagu tersebut. Dan dia berharap setiap orang yang masih mempunyai hati nurani, mendukung perjuangan rakyat Palestina dan membantu mereka walau hanya dengan berupa doa.<br><br><br><span style="font-weight: bold;">WE WILL NOT GO DOWN (Song for Gaza)</span><br style="font-weight: bold;"><br style="font-style: italic;"><span style="font-style: italic;">A blinding flash of white light</span><br style="font-style: italic;"><span style="font-style: italic;">Lit up the sky over Gaza tonight</span><br style="font-style: italic;"><span style="font-style: italic;">People running for cover</span><br style="font-style: italic;"><span style="font-style: italic;">Not knowing whether they\'re dead or alive</span><br style="font-style: italic;"><br style="font-style: italic;"><span style="font-style: italic;">They came with their tanks and their planes</span><br style="font-style: italic;"><span style="font-style: italic;">With ravaging fiery flames</span><br style="font-style: italic;"><span style="font-style: italic;">And nothing remains</span><br style="font-style: italic;"><span style="font-style: italic;">Just a voice rising up in the smoky haze</span><br style="font-style: italic;"><br style="font-style: italic;"><span style="font-style: italic;">We will not go down</span><br style="font-style: italic;"><span style="font-style: italic;">In the night, without a fight</span><br style="font-style: italic;"><span style="font-style: italic;">You can burn up our mosques and our homes and our schools</span><br style="font-style: italic;"><span style="font-style: italic;">But our spirit will never die</span><br style="font-style: italic;"><span style="font-style: italic;">We will not go down</span><br style="font-style: italic;"><span style="font-style: italic;">In Gaza tonight</span><br style="font-style: italic;"><br style="font-style: italic;"><span style="font-style: italic;">Women and children alike</span><br style="font-style: italic;"><span style="font-style: italic;">Murdered and massacred night after night</span><br style="font-style: italic;"><span style="font-style: italic;">While the so-called leaders of countries afar</span><br style="font-style: italic;"><span style="font-style: italic;">Debated on who\'s wrong or right</span><br style="font-style: italic;"><br style="font-style: italic;"><span style="font-style: italic;">But their powerless words were in vain</span><br style="font-style: italic;"><span style="font-style: italic;">And the bombs fell down like acid rain</span><br style="font-style: italic;"><span style="font-style: italic;">But through the tears and the blood and the pain</span><br style="font-style: italic;"><span style="font-style: italic;">You can still hear that voice through the smoky haze</span><br style="font-style: italic;"><br style="font-style: italic;"><span style="font-style: italic;">We will not go down</span><br style="font-style: italic;"><span style="font-style: italic;">In the night, without a fight</span><br style="font-style: italic;"><span style="font-style: italic;">You can burn up our mosques and our homes and our schools</span><br style="font-style: italic;"><span style="font-style: italic;">But our spirit will never die</span><br style="font-style: italic;"><span style="font-style: italic;">We will not go down</span><br style="font-style: italic;"><span style="font-style: italic;">In Gaza tonight </span><br><br>(sumber: detik.com)<br>',
                'hari' => 'Sabtu',
                'tanggal' => '2009-01-31',
                'jam' => '14:26:40',
                'gambar' => '24michaelheart.jpg',
                'dibaca' => 33,
                'tag' => 'gaza,israel,palestina',
            ),
            12 => 
            array (
                'id_berita' => 66,
                'id_kategori' => 22,
                'username' => 'admin',
                'judul' => 'Demo Kecam Israel Warnai Ibukota',
                'judul_seo' => 'demo-kecam-israel-warnai-ibukota',
                'headline' => 'Y',
            'isi_berita' => 'Aksi unjuk rasa menentang agresi militer Israel ke Jalur Gaza, Palestina kembali mewarnai Jakarta. Unjuk rasa kali ini dilakukan oleh Ormas Islam Hizbut Thahrir di kawasan Silang Monas, Jakarta. Sejak Minggu (4/1) pagi, para pengunjuk rasa nampak berbondong-bondong membawa karton besar bertuliskan \'Save Palestine\' dan foto anak-anak serta perempuan Palestina yang menjadi korban tak berdosa dari serangan biadab militer Israel.<br><br>Kepada warga Jakarta yang berolahraga di sekitar kawasan Monas, para pengunjuk rasa juga mengedarkan kotak sumbangan untuk didonasikan kepada korban warga Palestina.<br><br>Aksi unjuk rasa dan banyaknya warga Jakarta yang rutin berolahraga di kawasan Silang Monas setiap Minggu pagi, membuat kawasan itu cukup padat untuk dilalui kendaraan bermotor.<br><br>Serangan udara Israel yang dimulai pada 27 Desember 2008 sudah terjadi selama sepekan di Jalur Gaza dan menewaskan lebih 420 orang.<br><br>Meski mendapat kutukan keras dari dunia Internasional, termasuk Indonesia, Israel sampai saat ini belum menunjukkan tanda-tanda akan menghentikan aksi militernya. (sumber: inilah.com)<br>',
                'hari' => 'Sabtu',
                'tanggal' => '2009-01-31',
                'jam' => '14:29:16',
                'gambar' => '32demo.jpg',
                'dibaca' => 29,
                'tag' => 'gaza,israel,palestina',
            ),
            13 => 
            array (
                'id_berita' => 67,
                'id_kategori' => 2,
                'username' => 'admin',
                'judul' => 'Ana Ivanovic Dinobatkan Sebagai Ratu Tenis 2008',
                'judul_seo' => 'ana-ivanovic-dinobatkan-sebagai-ratu-tenis-2008',
                'headline' => 'Y',
                'isi_berita' => 'Ana Ivanovic, dara kelahiran Belgrade pada tanggal 6 November 1987 sudah mulai bermain tenis sejak umur 5 tahun sesudah menonton Monica Seles di TV, mengingat nomor telpon sekolah tenis lokal dan memohon kepada orang tuanya untuk mengajak pergi ke sekolah itu. Kemudian di acara ulang tahunnnya yang ke-5, orang tuanya memberi hadiah berupa raket tenis dan sejak itu dia mulai jatuh cinta dengan dunia tenis. Kemudian Ana mulai berlatih tenis secara intens dengan Scott Byrnes pada bulan juli 2006.<br><br>Dragana, ibunya adalah seorang pengacara, sedangkan Miroslav bapaknya adalah seorang pebisnis, Milos kakaknya adalah seorang pemain basket dan seluruh keluarganya menyukai olahraga, tetapi tidak ada yang menyukai tenis seperti ana.<br><br>Senjata utamanya di tenis adalah pukulan forehand-nya, dan dia bisa main di segala jenis lapangan. Hobinya adalah menonton film di bioskop atau menonton DVD di rumah. Ana juga suka membaca, khususnya tentang Mitologi dan Sejarah Yunani. Ana juga senang sekali mendengarkan musik.<br><br>Pada tahun 2008 ini, setelah menjuarai Roland Garros prancis dengan mengalahkan Dinara safina dari rusia di final, maka saat ini peringkat Ana Ivanovic naik menjadi peringkat 1 dunia untuk petenis putri.<br>',
                'hari' => 'Sabtu',
                'tanggal' => '2009-01-31',
                'jam' => '14:30:48',
                'gambar' => '20anaivanovic.jpg',
                'dibaca' => 14,
                'tag' => 'tenis',
            ),
            14 => 
            array (
                'id_berita' => 73,
                'id_kategori' => 2,
                'username' => 'admin',
                'judul' => 'Maria Kirilenko, Petenis Terseksi Versi WTA',
                'judul_seo' => 'maria-kirilenko-petenis-terseksi-versi-wta',
                'headline' => 'Y',
            'isi_berita' => 'Pesona kecantikan Maria Sharapova dan Ana Ivanovic sepertinya sudah mendapat saingan baru. Tidak jauh-jauh, nama Maria Kirilenko tiba-tiba menyeruak di daftar petenis terseksi pilihan responden WTA. Artinya, Maria sukses merengkuh gelar yang musim lalu diraih Maria Sharapova.<br><br>Setengah dari 7 ribu responden yang masuk ke WTA menyebut, kalau Maria adalah sosok petenis ideal dan paling proporsional di level bentuk tubuh. Meski hanya berperingkat 18 dunia, namun pesonanya di atas lapangan tenis menjadi daya tarik tersendiri.<br><br>"Tubuhnya sangat indah, siluetnya membuat setiap pria pasti penasaran ingin melihat lebih dekat. Yang jelas, ia memiliki kepribadian baik yang makin menyempurnakan pesona fisiknya," tulis seorang responden. Di kalangan petenis putri sendiri, sudah lama Maria menjadi saingan berat Masha dan Ana ivanovic.<br><br>Di situs pribadinya, petenis bernama asli Maria Yuryevna Kirilenko ini mengaku selalu menjaga proporsi tubuh dengan senam dan renang, selain tentu berlatih fisik tenis. "Olahraga adalah cermin hidupku, jika tak olahraga sehari saja, kadang membuat tubuhku terasa lemas dan tak bergairah," ujar Maria.&nbsp; (persda network/bud)<br><br>Meksi bersaing di lapangan dan dunia mode, namun ternyata sosok Maria Kirilenko adalah sobat sejati Maria Sharapova. Bukan hanya karena sama-sama berasal dari Rusia, namun gaya hidup mereka berdualah yang membuat Maria-Masha banyak memiliki kecocokan.<br>Selain suka fotografi, mereka berdua juga memiliki hobi berbelanja, terutama fashion dan perhiasan. Bukan untuk pamer memang, tapi mereka melakukan itu untuk tabungan dan investasi.<br><br>Di beberapa turnamen, Masha dan Maria memang tampak bersama tatkala berada di luar lapangan. Mereka biasanya menyingkir dari rombongan pemain lain, dan memilih berburu barang kesukaan mereka dengan menyisir bagian kota tempat mereka tengah bertanding. "Aku dan Masha seperti kakak beradik, bagiku dia lebih dari sekedar sahabat, dia begitu dewasa, apalagi saat kami berdua saling curhat," sebut Maria, di tennisnews. <br><br>Daftar petenis terseksi WTA:<br><ol><li>Maria Kirilenko (Russia)</li><li>Maria Sharapova (Russia)</li><li>Ana Ivanovic (Serbian)</li><li>Caroline Wozniacki (Danish)</li><li>Nicole Vaidisova (Czech)</li><li>Sania Mirza (Indian)</li><li>Ashley Harkleroad (American)</li><li>Gisela Dulko (Argentinian)</li><li>Samantha Stosur (Australian)<br></li></ol>',
                'hari' => 'Sabtu',
                'tanggal' => '2009-01-31',
                'jam' => '15:01:49',
                'gambar' => '14mariakirilenko.jpg',
                'dibaca' => 86,
                'tag' => 'tenis',
            ),
            15 => 
            array (
                'id_berita' => 77,
                'id_kategori' => 2,
                'username' => 'sinto',
                'judul' => 'Sharapova, Petenis Wanita Berpenghasilan Tertinggi',
                'judul_seo' => 'sharapova-petenis-wanita-berpenghasilan-tertinggi',
                'headline' => 'Y',
                'isi_berita' => 'Petenis asal Rusia, Maria Sharapova dengan penghasilan 26 juta dolar AS merupakan petenis wanita berpenghasilan tertinggi. Ia pernah menempati peringkat satu dunia, pasca mundurnya Justine Henin. Ia juga memiliki prestasi dengan menjuarai turnamen grand slam Australia Terbuka dan AS Terbuka. Namun, sebagian besar penghasilannya didapat dari kontrak iklannya bersama Pepsi, Colgate-Palmolive, Nike dan Motorola.<br><br>Berikutnya disusul Williams bersaudara dari Amerika, yaitu Serena Williams dengan penghasilan 14 juta dolar AS. Ia meraih tiga gelar juara tiap tahunnya semenjak tahun 2005. Ia juga merupakan model dari produk Hawlett-Packard, Nike, dan Kraft. Sedangkan kakak kandungnya, yaitu Venus Williams berpenghasilan 13 juta dolar AS. Ia mengalahkan adiknya di final Wimbledon tahun 2008. Ia memiliki dan menjalankan sendiri usaha fashion Eleven.<br><br>Di peringkat ke empat dan kelima adalah petenis Belgia yaitu Justine Henin dengan penghasilan 12,5 juta dolar AS. Dan petenis asal Serbia, yaitu Ana Ivanovic dengan penghasilan 6,5 juta dolar AS.<br>',
                'hari' => 'Minggu',
                'tanggal' => '2009-02-01',
                'jam' => '19:58:16',
                'gambar' => '89sharapova.jpg',
                'dibaca' => 1,
                'tag' => 'tenis',
            ),
            16 => 
            array (
                'id_berita' => 68,
                'id_kategori' => 2,
                'username' => 'admin',
                'judul' => 'Roger Federer, Petenis Legenda Abad Ini',
                'judul_seo' => 'roger-federer-petenis-legenda-abad-ini',
                'headline' => 'Y',
            'isi_berita' => 'Siapa yang tak kenal dengan Roger Federer saat ini? Masih muda, ganteng, namun sudah jadi legenda. Bayangkan, dalam usia belum menginjak 26 tahun, ia sudah memecahkan rekor bertahan sebagai peringkat pertama dunia tenis selama 161 pekan berturut-turut. Ia memecahkan rekor Jimmy Connor yang sudah bertahan puluhan tahun. <br><br>Itu baru satu rekor. Sebelumnya, ia juga mendapat penghargaan Bagel Award, yakni penghargaan sebagai petenis paling banyak memenangkan set tenis dengan angka sempurna 6-0. "Saya hanya berusaha melakukan yang terbaik dan tidak berhenti memperbaiki kesalahan-kesalahan saya,"sebut Federer merendah tentang prestasinya itu.<br><br>Dengan kerendahhatian dan semangat untuk terus memperbaiki diri, pria keturunan campuran Swiss, German, dan Afrika Selatan ini sepertinya akan terus mengukir prestasi. Sebab, mengingat usia yang masih muda dan jarak nilai ATP dengan peringkat kedua dunia Rafael Nadal, cukup jauh, ia akan bisa terus bertahan di rangking satu dunia. Apalagi jika ia nantinya bisa memenangkan satu-satunya gelar tenis Grand Slam yang belum diraih, Perancis Terbuka. Ia akan jadi satu-satunya petenis pria yang bisa mengawinkan semua gelar tenis Grand Slam.<br><br>Roger Federer memang sepertinya terlahir untuk jadi legenda. Bahkan, menurut pengakuannya, sejak kecil ia sudah disebut banyak orang punya bakat gemilang di bidang olahraga. Tapi, menurut dirinya, bukan bakat yang membuatnya seperti sekarang. Kerja keras, ketekunan berlatih, dan keuletan di lapangan lah yang membuat dia bisa jadi juara sejati. "Saya terus berlatih untuk meningkatkan teknik permainan saya dan menambah kekuatan saya. Proses ini saya jalani sampai hari ini dan bahkan makin saya tingkatkan sejak saya jadi juara. Ini saya lakukan karena saya yakin masih banyak perbaikan yang harus terus dilakukan."<br><br>Dengan tekad untuk terus melakukan perbaikan itu, Roger Federer terus meretas jalan untuk mengukir rekor-rekor lainnya. Namun, semua rekor dan kemenangan yang diperolehnya, ternyata bukan hanya untuk kebanggaan dirinya. Melalui sebuah yayasan yang diberi nama seperti dirinya, Roger Federer Foundation, ia membantu anak-anak kurang beruntung di dunia terutama di Afrika Selatan. Sebagian hadiah yang diperoleh dari kemenangannya di kejuaraan tenis, digunakan untuk membantu anak-anak itu. Ia juga berperan banyak saat terjadi tsunami akhir tahun 2005. Saat itu, ia terpilih menjadi duta UNICEF, untuk membantu anak-anak yang jadi korban tsunami di Tamil Nadu, India. Ia juga berjanji untuk mengukir lebih banyak kemenangan guna mengumpulkan lebih banyak dana untuk yayasannya. Ia juga merelakan beberapa raketnya untuk dilelang guna disumbangkan melalui UNICEF. Roger Federer telah membuktikan, dengan kerja keras, semangat pantang menyerah, tekad kuat, dan kepedulian terhadap sesama, telah menjadikannya sebagai juara sejati.<br><br>Dari kisah sukses Roger Federer ini, kita dapat mengambil pelajaran bahwa dengan kerja keras disertai semangat pantang menyerahlah kita bisa mewujudkan cita-cita. Selain itu, kepedulian kepada sesama juga selayaknya dapat mendorong semangat kita untuk terus mengukir prestasi. (sumber: andriewongso.com)<br>',
                'hari' => 'Sabtu',
                'tanggal' => '2009-01-31',
                'jam' => '18:59:14',
                'gambar' => '33federer.jpg',
                'dibaca' => 23,
                'tag' => 'tenis',
            ),
            17 => 
            array (
                'id_berita' => 70,
                'id_kategori' => 19,
                'username' => 'admin',
                'judul' => 'Kisah Sukses Google',
                'judul_seo' => 'kisah-sukses-google',
                'headline' => 'Y',
            'isi_berita' => 'Dalam daftar orang terkaya di Amerika baru-baru ini, terselip dua nama yang cukup fenomenal. Masih muda, usianya baru di awal 30-an, namun kekayaannya mencapai miliaran dolar. Nama kedua orang itu adalah Larry Page dan Sergey Brin. Mereka adalah pendiri Google, situs pencari data di internet paling terkenal saat ini.<br><br>Terlepas dari jumlah kekayaan mereka, ada beberapa hal yang perlu dicontoh dari kisah sukses mereka. Satu hal yang pertama, yang disebut Sergey Brin, yang kini menjabat sebagai Presiden Teknologi Google, yakni tentang kekuatan kesederhanaan. Menurutnya, simplicity web adalah hal yang disukai penjelajah internet. Dan, Google berhasil karena menggunakan filosofi tersebut, menghadirkan web yang bukan saja mudah untuk mencari informasi, namun juga menyenangkan orang.<br><br>Kunci sukses kedua adalah integritas mereka dalam mewujudkan impiannya. Mereka rela drop out dari program doktor mereka di Stanford University untuk mengembangkan google. Mereka pun pada awalnya tidak mencari keuntungan dari proyek tersebut. Malah, kedua orang itu berangkat dari sebuah ide sederhana. Yakni, bagaimana membantu banyak orang untuk mempermudah mencari sumber informasi dan data di dunia maya. Mereka sangat yakin, ide mereka akan sangat berguna bagi banyak orang untuk mempermudah mencari data apa saja di internet.<br><br>Kunci sukses lainnya yaitu mereka tidak melupakan jasa orang-orang yang mendukung kesuksesan mereka. Larry dan Sergey sangat memerhatikan kesejahteraan SDM di Google. Kantornya yang diberi nama Googleplex dinobatkan sebagai tempat bekerja terbaik di Amerika tahun 2007 oleh majalah Fortune. Di sana suasananya sangat kekeluargaan, ada makanan gratis tiga kali sehari, ada tempat perawatan bagi bayi ibu muda, bahkan sampai kursi pijat elektronik pun tersedia. Mereka sadar, di balik sukses inovasi yang dilakukan Google, ada banyak doktor matematika dan lulusan terbaik dari berbagai universitas yang membantu mereka.<br><br>Larry dan Sergey memang tak pernah menduga Google akan sesukses sekarang. Kedua orang yang terlahir dari keluarga ilmuwan ÃƒÂ¢Ã¢â€šÂ¬Ã¢â‚¬Å“ ayah Sergey adalah doktor matematika, sedangkan Larry adalah putra almarhum doktor pertama komputer di Amerika ÃƒÂ¢Ã¢â€šÂ¬Ã¢â‚¬Å“ ini memang hanya berangkat dari sebuah masalah sederhana. Mereka berusaha memecahkan masalah tersebut, dan berbagi dengan orang lain. Namun, justru dengan kesederhanaan dan integritas mereka, mampu membuat Google saat ini menjadi mesin pencari terdepan, dikunjungi lebih dari 300 juta orang perhari. Diterjemahkan dalam 88 bahasa dengan nilai saham mencapai lebih dari 500 dolar AS per lembar, membuat sebuah kesederhanaan menjelma menjadi kekuatan yang luar biasa.<br><br>Sebuah niat mulia, meski sesederhana apapun, jika dilandasi kerja keras dan integritas yang tinggi, akan menghasilkan sesuatu yang istimewa. Hal tersebut nampak dari contoh kisah sukses Larry Page dan Sergey Brin di atas. Google yang mereka dirikan terbukti telah membantu banyak orang untuk bisa mendapatkan apa saja dari internet. Dan kini, mereka pun mendapatkan imbalan yang bahkan tak diduga mereka sebelumnya. Kesuksesan sejati memang akan terasa saat kita bisa berbagi. Dan, Larry serta Sergey membuktikannya sendiri. (sumber: andriewongso.com)<br>',
                'hari' => 'Minggu',
                'tanggal' => '2009-01-25',
                'jam' => '20:26:26',
                'gambar' => '73google.jpg',
                'dibaca' => 14,
                'tag' => 'google',
            ),
            18 => 
            array (
                'id_berita' => 64,
                'id_kategori' => 19,
                'username' => 'wiro',
                'judul' => 'Browser Safari Diklaim Paling Handal di Windows',
                'judul_seo' => 'browser-safari-diklaim-paling-handal-di-windows',
                'headline' => 'Y',
            'isi_berita' => 'Dibandingkan browser Internet lainnya, Apple mengklaim browser web Safari buatannya adalah yang paling handal digunakan jika digunkan di atas sistem operasi Windows. Hal tersebut disampaikan CEO Apple Steve Jobs saat mengumumkan versi terbaru Safari yang dapat berjalan di Windows.<br><br>"Kami kira para pengguna Windows akan benar-benar terkejut saat melihat begitu cepat dan menariknya berselancar di Internet menggunakan Safari," ujar Steve Jobs di acara Worldwide Developer Conference Apple di San Fransisco, AS, Senin (11/6). Ia mengklaim browser Safari dapat membuka sebuah halaman web dua kali lebih cepat dibandingkan Internet Explorer 7 di Windows dan masih lebih cepat dibandingkan Opera maupun Firefox.<br><br>Kehadiran Safari untuk para pengguna Windows akan semakin menyemarakkan persaingan browser web. Steve Jobs berharap peluncuran ini akan meningkatkan popularitas Safari yang baru mencapai 4,9 persen pangsa pasar browser web. Persaingan browser web saat ini masih didominasi IE dengan pangsa pasar 78 persen menyusul Firefox. Versi tes Safari 3 untuk Windows XP, Vista, dan Apple Macs OSX sudah dapat di-download dari situs Apple sejak Senin (11/6). (sumber: bbc.co.uk)<br>',
                'hari' => 'Minggu',
                'tanggal' => '2009-01-25',
                'jam' => '20:35:26',
                'gambar' => '18safari.jpg',
                'dibaca' => 1,
                'tag' => 'browser',
            ),
            19 => 
            array (
                'id_berita' => 58,
                'id_kategori' => 23,
                'username' => 'sinto',
                'judul' => 'Pelajaran Moral dari Film Laskar Pelangi',
                'judul_seo' => 'pelajaran-moral-dari-film-laskar-pelangi',
                'headline' => 'Y',
            'isi_berita' => '"Kalau Nak Pintar, Belajar! Kalau Nak Berhasil, Usaha!" Itulah mantra yang diberikan Tuk Bayan Tula kepada anak-anak laskar pelangi saat mau menghadapi ujian. Berikut beberapa fakta mengapa saya sangat menyukai film Laskar Pelangi (Petik hikmahnya ya):<br><br>1. Pelajaran itu bisa didapatkan dimana saja<br><br>Para Laskar Pelangi menimba ilmu di sekolah reot yang sangat tidak layak, kegigihan untuk menimba ilmu dan mengubah sejarah hidup membuat mereka mampu bangkit dan membuktikan bahwa mereka bisa menjadi yang terbaik. Sebagai blogger, belajarlah dari siapapun, baik master ataupun newbie, anda tidak akan rugi. Saya selalu senang belajar dari semua orang :)<br><br>2. Keinginan untuk memberi.<br><br>Keinginan untuk memberi akan membuat kita kuat dan bahagia. Berbagi itu Indah (seperti paman gober yang berbagi PR dengan saya). Semangat untuk memberikan yang terbaik akan membuat kita berusaha sekuat mungkin. Dari apa yang kita berikan pada orang lain, kitapun akan memetik hasilnya. Jangan takut kehilangan karena berbagi.<br><br>3. Semangat komunitas, lihat bagaimana mereka membangun tim.<br>Team building, walaupun saya seorang blogger, di BlogicThink saya bekerja bersama. Ada perbedaan sikap dalam menghadapi suatu masalah, dan tim yang baik akan menemukan jalan keluarnya. Saksikan bagaimana Laskar Pelangi memenangkan karnaval dan cerdas cermat. Terima kasih kepada Mas Ary yang mau berbagi dengan saya.<br><br>4. Kalau Nak Pintar, Belajar! Kalau Nak Berhasil, Usaha!<br>Saya suka bagian ini. Laskar pelangi mendatangi dukun untuk lulus dalam ujian. Sang Dukun yang bertempat di pilau terpencil mengngatkan untuk membaca mantra itu dipagi hari. Para Laskar pelangipun menurutinya. Dibawalah selembar mantra tersebut, dibaca didepan sekolah bersama keras-keras : Kalau Nak Pintar, Belajar! Kalau Nak Berhasil, Usaha!<br><br>Yups, suatu pelajaran bagi kita untuk tidak pendek akal ketika ingin menjadi blogger sukses. Saya memilih mewawancara Mas Jimmy, ketimbang membeli resep kebut semalam. Terima kasih untuk Mas Jimmy atas PRnya.<br><br>5. Gunakan waktu, mumpung masih muda<br><br>Ketika saya menonton Laskar Pelangi, saya ingat umur. Saya mengagumi mereka yang memiliki tekad belajar yang kuat, cerita tentang anak-anak kelas 5 SD ini memang mengagumkan. Saya jadi teringat Kawan Blogger saya Ruzdee yang mengenal internet saat kelas 5 SD, suatu kesempatan yang hebat. Semoga sukses kawan :)<br><br>6. Buku kucel mereka, adalah awal dari masa depan.<br><br>9 Laskar pelangi berkumpul dikelas saat sekolah mau dibuka, masih kurang 1 anak. Dalam suasana menunggu Ditampilkan buku kucel yang membuat haru penonton, efek dramatis berhasil dimunculkan. Melihat buku itu saya teringat buku catatan saya, saya memiliki buku catatan yang selalu habis dalam waktu kurang dari satu bulan, isinya adalah ide-ide bisnis.<br><br>Saya jadi ingat spydeey yang menjadikan blognya sebagai oret-oretan catatan belajar komputer dan internet, thanks atas PRnya Bro :)<br><br>7. Lintang, sang jenius yang tak berhenti bermimpi<br><br>Melihat lintang membuat saya melakukan refleksi. Saya tau rasanya putus sekolah. Dan saya tahu rasanya kehilangan kesempatan kuliah karena masalah biaya. Bagi saya itu bukan hambatan. Saya tahu saya akan berhasi. walau kadang dunia tak adil, sekarang saya coba menjawabn setiap permasalahan, dan saya bahagia.<br><br>8. Sekolah kecil itu mengalahkan sekolah dengan modal besar<br><br>Karena sekolah memang bukan soal modal. Pendidikan sejatinya bukan masalah hitung-hitungan material. Ini masalah nilai-nilai. SD Para Laskar Pelangi mengalahkan SD berfasilitas lengkap, karena mereka memiliki cita-cita, semangat, harapan dan kebijaksanaan seorang pendidik.<br><br>Saya adalah seorang trainer di organisasi saya dulu ketika mahasiswa. Anehnya, saya tidak suka sekolah, saya menganggapnya mengungkung pemikiran saya. Ada terlalu banyak pemikiran kaku dan tertinggal disana yang saya tidak sukai.<br><br>9. Ajari saya bermimpi<br><br>Seandainya kondisi membuat saya mundur, maka saya telah tertinggal sejak lama. Banting setir ke dunia bisnis adalah pilihan dari kesulitan ekonomi dan ketidakmampuan untuk melanjutkan kuliah. Awalnya saya down, namun saya tidak mau berlama-lama. Saya coba berusaha bangkit. Hari ini, saya dapat bangga akan ilmu manajemen pemasaran yang saya miliki. Bahkan ketika bertemu dengan kawan-kawan saya dibangku kuliah dulu. Beruntung, walaupun tidak bekerja seperti mereka, saya bangga menjadi seorang blogger dan bukan buruh orang lain. Btw, Om jadul ngasih PR ( Blognya kok suspend Om?)<br><br>10. Seperti Ikal saya berniat sekolah di Perancis<br><br>Jika Ikal pergi ke sorbonne dan berkeliling dunia saya berniat untuk belajar di Universitas Frankfurt, mungkinkah? kita tunggu saja nanti. (sumber: blogicthink.com)<br>',
                'hari' => 'Minggu',
                'tanggal' => '2009-01-25',
                'jam' => '21:10:44',
                'gambar' => '46laskar.jpg',
                'dibaca' => 1,
                'tag' => 'laskar-pelangi',
            ),
            20 => 
            array (
                'id_berita' => 85,
                'id_kategori' => 19,
                'username' => 'admin',
                'judul' => 'Windows 7 Gantikan Windows Vista',
                'judul_seo' => 'windows-7-gantikan-windows-vista',
                'headline' => 'Y',
                'isi_berita' => '<p>
Microsoft  ingin memudahkan rencana para administrator komputer yang akan bermigrasi ke Windows 7, namun sebuah tulisan di blog salam satu anggota tim Windows 7 berkata sebaliknya.
Skenario uji coba terbaru menunjukkan, sebagian besar pengguna, proses upgrading akan menyulitkan, mengambil waktu kira-kira 30 menit. 
</p>
<p>
Prosentasi terbesar pengguna menyebut, migrasi butuh waktu hingga 21 jam.
Salah satu anggota tim Windows dari Microsoft, Chris Hernandez, mengungkap hasi pengetesan timnya dengan berbagai merek komputer dan konfigurasi tipikal pengguna lewat simulasi pada tingkatan berbeda dari proses migrasi Vista ke Windwos pada Jumat akhir pekan lalu.
</p>
<p>
Tujuan simulasi untuk memastikan apakah upgrade dari Vista Service Pack (SP) 1 ke Windows 7, dalam lima persen percobaan utama, lebih cepat ketimbang upgrade dari Vista SP1 ke Vista SP2, ujar Chris.
Proses dari Vista SP1 ke Vista SP2 dipilih karena itu opsi instalasi paling umum digunakan Microsoft Product Support Services, yakni skenario repair (perbaikan ulang) di mana prosedur yang paling dianjurkan adalah melakukan re-instalasi sistem operasi (OS) yang sudah ada di komputer saat itu. 
</p>
<p>
Chris menampilkan hasil tes dalam blognya.
Tim mengetes konfigurasi komputer khusus hadware, merentang dari kategori hardware low-end (spesifikasi rendah), mid-range (spesifikasi menengah) dan high-end (spesifikasi atas). Kategori itu berlawanan dengan skenario pengguna pada umumnya yang berbasis pertanyaan seperti, berapa besar set data yang dibutuhkan pengguna dan bagaimana macam aplikasi tersebut diinstall.
</p>
<p>
Untuk kategori komputer spesifikasi atas, Chris dan timnya mendefinisikan komputer dengan sistem operasi 32 bit dan memiliki CPU berprosesor Inter Core 2 Quad, yang bejalan di 2,4 GHz, memori 4GB dan hardisk 1 Terabyte .
Sementara, pengguna umumnya memiliki data sebesar 125 GB yang terikat dalam format dokumen, musik dan gambar dengan 40 aplikasi yang diinstal di komputer mereka.
Kinerja upgrade Vista SP1 ke Windows 7 pada hardware spesifikasi atas dengan konfigurasi pemilik pengguna kelas berat, membutuhkan 160 menit, atau sekitar 2,7 jam. 
</p>
<p>
Sebagai perbandingan, upgrade repair (perbaikan) dari Vista SP1 ke Vista SP1 dengan hadware yang sama dan penggunaan bera membutuhkan 176 menit, atau 2,9 jam.
Skenario terburuk muncul pada konfigurasi hadware kelas menengah, yakni CPU 32 bit namun dengan software dan konfigurasi &quot;pengguna super&quot;. Proses upgrading akan butuh waktu hingga 1.220 menit alias 20,3 jam. Padahal yang dianggap hadware kelas menengah, memiliki spesifikasi setara memory 2GB RAM, prosesor dual core, Athlon 64 X2, pada 2,6GHz dan hardisk 1 Terabyte.
</p>
<p>
Mereka yang dianggap pengguna super, memiliki profil lebih sadis dalam istilah penggunaan data, ketimbang pengguna kelas berat pada umumnya. Sebagai contoh, tim penguji menyebut pengguna super memiliki 650 GB data dan 40 aplikasi lebih yang terinstal dalam komputer mereka.
Lalu pada kelas rendah, pengguna medium, dengan 70 GB data dan 20 aplikasi, dengan memori sekitar 1 GB, prosesor 64 bit, AMD Athlon pada kecepatan 2,2 GHz, bakal butuh waktu bermigrasi sekitar 175 menit. Hardware yang lebih bertenaga, secara umum membutuhkan waktu instalasi lebih singkat.
</p>
<p>
Microsoft tidak selalu bisa mencapai target lima persen tujuan tim Chris yang telah dijanjikan. Dalam satu contoh, instalasi bersih (instalasi pertama pada komputer baru tanpa OS) Windows 7 pada hardware spesifikasi menengah membutuhkan 30 menit sementara instalasi bersih Vista SP1 butuhk 31 menit. Hanya saja, secara keseluruhan, tidak ada instalasi Windows 7 yang lebih lambat dibandingkan Vista.
</p>
<p>
Pertanyaan tersisa, apakah para toko dan ritel software akan mendengar rayuan Microsoft dan memutuskan hijrah ke Windows 7 lebih cepat? Tradisi yang berlaku, ritel IT akan cenderung menunggu Service Pack I sebelum mendatangkan versi terbaru Windows.
Waktu yang akan menjadi sumber menentukan apakah kalangan profesional IT akan berpindah, sehingga Vista tak lagi menarik bagi ritel dan toko software. Jadi kehijrahan mereka ke Windows 7 dengan segera, menandakan pula, apakah para profesional IT suka dengan hasil pengujian waktu instal yang dilakukan Chris Hernandez.  internetnews/itz.
</p>
',
                'hari' => 'Minggu',
                'tanggal' => '2009-10-25',
                'jam' => '07:25:22',
                'gambar' => '19windows7.jpg',
                'dibaca' => 25,
                'tag' => 'komputer',
            ),
            21 => 
            array (
                'id_berita' => 92,
                'id_kategori' => 23,
                'username' => 'admin',
                'judul' => 'Pemilik Facebook akan Dibuat Filmnya',
                'judul_seo' => 'pemilik-facebook-akan-dibuat-filmnya',
                'headline' => 'Y',
                'isi_berita' => '<p>
Sutradara David Fincher nampak jeli melihat peluang di tengah booming fenomena Facebook. Fincher akan menghadirkan sebuah film yang menceritakan tentang Mark Zuckerberg dan Facebook bagi para pencinta film dan Facebook tentunya.
</p>
<p>
Fincher mengaku rencana pembuatan film ini masih dinegosiasikan dengan pihak Zuckerberg. Dia hanya menyebutkan, filmya akan fokus menceritakan Mark Zuckerberg yang awalnya merancang Facebook sebatas untuk keperluan mahasiswa Universitas Harvard.
</p>
<p>
Film ini memaparkan bagaimana setelah itu Facebook kemudian berkembang menjadi fenomena yang mendunia sejak diluncurkan pada 2004.
</p>
<p>
Dalam penggarapan film ini, Fincher mengajak serta orang-orang kompeten di bidang film. Antara lain Aaron Sorkin, yang merupakan penulis naskah acara serial televisi ternama The West Wing.
</p>
<p>
Sementara itu, Columbia Pictures yang menamai film ini &quot;The Social Network&quot; dipercaya untuk memulai produksi film pada akhir tahun ini.
</p>
<p>
Sebagian orang menilai kehadiran film ini nantinya akan mengorek kembali kasus lama dimana tiga teman Zuckerberg, Cameron dan Tyler Winklevoss serta Divya Narendra mengklaim Zuckerberg telah mencuri ide mereka untuk membuat Facebook.
</p>
<p>
Pada saat Zuckerberg meluncurkan Facebook, mereka menuntut perkara atas Zuckerberg. Awal tahun ini, pengadilan AS memutuskan Facebook harus membayar USD65 juta untuk melunasi perkara ini.
</p>
',
                'hari' => 'Minggu',
                'tanggal' => '2009-10-25',
                'jam' => '07:36:47',
                'gambar' => '17mark_zuckerberg.jpg',
                'dibaca' => 28,
                'tag' => 'film',
            ),
            22 => 
            array (
                'id_berita' => 90,
                'id_kategori' => 19,
                'username' => 'admin',
                'judul' => 'Ferrari 458 Polesan Teknologi Jepang',
                'judul_seo' => 'ferrari-458-polesan-teknologi-jepang',
                'headline' => 'Y',
                'isi_berita' => '<p>
Barangkali hanya Jepang (diluar Italia) yang berani memoles bodi mobil dari Ferrari, sekaligus mengumumkan hasilnya kepada publik. Seperti dilakukan rumah modifikasi ASI terhadap Ferrari 458 yang oleh pabrikannya di Italia baru di launching.
</p>
<p>
ASI dengan keberaniannya menggarap proyek berisiko tinggi. Beberapa mobil berharga miliaran rupiah pernah digarap dan membuat tampilan mobil lebih sporty dan tambah dinamis dari versi standar.
</p>
<p>
Sebut saja, Bentley Continental GT (yang diberi julukan The ASI Tetsu GTR) dan Ferrari 430. Bahkan Ferrari milik seorang pengusaha muda di Indonesia pernah juga dimodifikasi (body) di Jepang pada 2007.
</p>
<p>
CEO ASI Satoshi Kondo menjelaskan, bahwa tim rekayasanya telah bekerja keras memproduksi aerokit untuk Ferrari 458. ASI, katanya sengaja mengeluarkan sketsa dari hasil kerja mereka dengan terus melakukan finalisasi prototype yang ada, dan menghindari pencurian desain.
</p>
<p>
Sentuhan pada bagian depan dari kuda jingkrak menjadi salah satu yang menonjol. Di antaranya moncong yang baru, lubang udara lebih besar, dan dilanjutkan pada bagian roda. Dari sketsa gambar tampak terpasang sayap baru di bagian belakang.
</p>
<p>
Paket body kit dari ASI mempertegas tampilan Ferrari sebagai hasil kawin silang dari gaya tuner Jepang dengan kendaraan eksotis khas Italia. ASI mengklaim, adanya perubahan dan penambahan pada bodi tidak mengurangi performa standar. Bahkan bobot kendaraan lebih ringan dari asli. (sumber: kompas.com)
</p>
',
                'hari' => 'Minggu',
                'tanggal' => '2009-10-25',
                'jam' => '07:44:05',
                'gambar' => '4ferrari458.jpg',
                'dibaca' => 11,
                'tag' => 'mobil',
            ),
            23 => 
            array (
                'id_berita' => 86,
                'id_kategori' => 22,
                'username' => 'admin',
                'judul' => 'Program 100 Hari Menkominfo Tifatul',
                'judul_seo' => 'program-100-hari-menkominfo-tifatul',
                'headline' => 'Y',
                'isi_berita' => '<p>
Belum juga resmi diumumkan masuk jajaran kabinet, sejumlah calon menteri sudah berani membeberkan programnya. Salah satunya, Tifatul Sembiring. Tifatul disebut-sebut sebagai calon kuat Menkominfo (Menteri Komunikasi dan Informasi).
</p>
<p>
Apa saja program Tifatul? &quot;100 Hari pertama? Kita targetkan sampai 2014 itu ada 10 ribu desa komputer. Presiden menargetkan tiga bulan ini ada 100 desa komputer harus tercapai,&quot; kata Tifatul di Gedung MPR/DPR, Jakarta, Selasa 20 Oktober 2009.
</p>
<p>
Komputer-komputer ini, kata dia, bisa dimasukkan ke lembaga pendidikan untuk meningkatkan sumber daya manusia. Bagaimana SDM Indonesia bisa masuk ke bisnis supaya Indonesia bisa bersaing dengan negara-negara lain. Selain itu juga untuk meningkatkan e-goverment untuk meminimalisir korupsi, kolusi, kolusi dan nepotisme.
</p>
<p>
Dengan e-goverment, kata dia, maka nantinya semua urusan menjadi less paper. Artinya pegawai di tingkat pemda dan kecamatan, tidak lagi menerima uang tunai. &quot;Tapi cukup menerima resi, sehingga sogok menyogok bisa diminimalisir,&quot; kata dia.
</p>
<p>
Tifatul sendiri mengaku tidak begitu asing dengan dunia Kominfo karena latar belakang pendidikannya cukup mendukung. Gelar sarjana strata satunya di bidang Informatika dan Komunikasi. Ia juga mengaju pernah bekerja selama delapan tahun di sistem informatika dan komunikasi PT Perusahaan Listrik Negara.
</p>
<p>
Sementara strata duanya di bidang politik internasional di Islamabad, Pakistan. &quot;Itu saja sih, pinter ya belum, diupayakan sesuai,&quot; kata dia.
</p>
<p>
Namun ia berharap bisa menembus tantangan Kominfo ke depan, yakni perbedaan kemudahan akses di kota besar dan desa. Selain itu juga soal infrastruktur yang masih lemah. Masalah lain, kurangnya tayangan edukatif di bidang informasi. &quot;Dalam satu riset dikatakan 10 dari 75 tayangan di TV, radio masih bermasalah,&quot; kata dia.
</p>
<p>
Dia menambahkan, pelayanan informasi di Indonesia juga masih  lemah. Karena itu ia akan mengusahakan peningkatan layanan informasi ini. (Sumber: vivanews.com)
</p>
',
                'hari' => 'Minggu',
                'tanggal' => '2009-10-25',
                'jam' => '07:49:46',
                'gambar' => '27tifatul_sembiring.jpg',
                'dibaca' => 23,
                'tag' => 'komputer',
            ),
            24 => 
            array (
                'id_berita' => 142,
                'id_kategori' => 19,
                'username' => 'admin',
                'judul' => 'Polines - Hanze University of Applied Science, Groningen, Belanda Jajaki Kerjasama',
                'judul_seo' => 'polines--hanze-university-of-applied-science-groningen-belanda-jajaki-kerjasama',
                'headline' => 'Y',
            'isi_berita' => '<p align="justify">Tim Hanze University of Applied Science, Groningen, Belanda mengadakan kunjungan ke kampus Politeknik Negeri Semarang (Polines). Kunjungan tamu dari Belanda dipimpin oleh Simon J.van der Wal MSc, International Marketing Manager Hanze University of Applied Science, Groningen di terima langsung oleh Direktur Polines, Ir. Supriyadi, MT, didampingi jajaran pimpinan Polines, bertempat di Ruang Sidang Direktur, Kampus Polines, Tembalang, belum lama ini.&nbsp;<br /><br />Dalam sambutannya, Direktur Polines, Ir. Supriyadi, MT, sangat terbuka bagi perguruan tinggi dalam maupun luar negeri untuk saling bermitra sinergis antar lembaga. &ldquo;Jejaring kerjasama akan terus kami tingkatkan,&rdquo;ungkapnya.&nbsp;<br /><br />Sedangkan&nbsp; Simon J.van der Wal MSc, International Marketing Manager Hanze University of Applied Science, Groningen, menjelaskan maksud dan tujuan kedatangan ke Polines. Yakni penjajakan kerjasama antar lembaga dalam bidang pendidikan, program double degree, dan program alih jenjang. &ldquo;Kiranya kunjungan ini dapat berlanjut ke tingkat kerjasama yang lebih konkret,&rdquo; ungkap Simon.<br /><br />Pertemuan dua lembaga pendidikan ini berawal dari keikutsertaan Dra.Lusia M Silitonga, M.Pd selaku Kepala Kantor Urusan Internasional Polines dalam pameran pendidikan EAIE Glasgow 2015, September lalu.</p>
<p align="justify">Dalam pertemuan ini dibahas ini tentang kemungkinan kerjasama seperti&nbsp;<em>double degree</em>dan alih jenjang dari diploma3 ke diploma 4 bagi jurusanTeknik Elektro, Teknik Mesin, Teknik Sipil, Akuntansi , dan Administrasi Bisnis.&nbsp; Selanjutnya pembicaraan secara teknis akan dilanjutkan pada waktu kunjungan Tim Muhibah Seni Polines ke Hanze University pada 24 November&nbsp; yang akandatang. Kerjasama ini juga diinisiasi oleh Atase Pendidikan KBRI di Belanda. Sedangkan penandatanganan MoU direncanakan&nbsp; pada tahun 2016.</p>',
                'hari' => 'Selasa',
                'tanggal' => '2015-11-17',
                'jam' => '14:21:27',
                'gambar' => '2112112015-2.jpg',
                'dibaca' => 25,
                'tag' => '',
            ),
            25 => 
            array (
                'id_berita' => 91,
                'id_kategori' => 2,
                'username' => 'admin',
                'judul' => 'Manchester United Incar Zidane Baru',
                'judul_seo' => 'manchester-united-incar-zidane-baru',
                'headline' => 'Y',
                'isi_berita' => '<p>
Manchester United sedang mengincar pemain muda Perancis berdarah Aljazair. Pemain itu adalah Sofiane Feghouli yang baru berusia 19 tahun.
</p>
<p>
Sofiane Feghouli saat ini memperkuat tim Liga Perancis, Grenoble Foot 38. Posisinya adalah di lapangan tengah.
</p>
<p>
Pemain yang punya tinggi badan 178 cm itu disebut punya gaya bermain yang serupa dengan Zinedine Zidane. Feghouli sudah masuk dalam tim nasional Perancis U-21.
</p>
<p>
Tak hanya MU yang menginginkan pemain yang pernah ditolak Paris Saint-Germain itu. Tim-tim besar macam Barcelona, Liverpool dan Inter Milan juga sedang mengambil ancang-ancang untuk mengajukan tawaran.
</p>
<p>
Seperti diberitakan Tribalfootball, MU sudah berencana untuk melakukan transaksi dengan Grenoble bulan Januari nanti. (Sumber: vivanews.com)
</p>
',
                'hari' => 'Minggu',
                'tanggal' => '2009-10-25',
                'jam' => '13:58:18',
                'gambar' => '62sofiane.jpg',
                'dibaca' => 34,
                'tag' => 'sepakbola',
            ),
            26 => 
            array (
                'id_berita' => 99,
                'id_kategori' => 19,
                'username' => 'admin',
                'judul' => 'Editor TextArea Ala Ms Word',
                'judul_seo' => 'editor-textarea-ala-ms-word',
                'headline' => 'Y',
                'isi_berita' => '<div style="text-align: center">
</div>
<div style="text-align: center">
</div>
<div style="text-align: center">
</div>
<p>
Secara standar, textarea akan ditampilkan apa adanya, artinya teks yang diketik tidak bisa diatur formatnya, misalnya apabila kita ingin kalimat tertentu ditebalkan, dimiringkan atau diatur jenis dan ukuran hurufnya. Hal ini tidak bisa dilakukan dalam textarea standar, kecuali Anda hapal perintah HTML, kemudian menuliskannya secara manual di textarea tersebut, namun bagi reporter atau user yang awam tentu hal ini cukup menyulitkan mereka.<br />
<br />
Solusinya, gunakan editor <strong>WYSIWYG</strong> (<em>What You See Is What You Get</em>) &ndash; Apa yang kau lihat adalah apa yang kau dapatkan. Menurut pengertian dari Wikipedia, WYSIWYG adalah suatu editor yang memungkinkan user untuk menentukan format, ukuran dan jenis huruf, menambahkan hyperlink dan tabel, dan juga bisa mengupload file, gambar, animasi flash, dan video.<br />
</p>
<div style="text-align: center">
<img src="http://localhost./lokomedia/tinymcpuk/gambar/Image/cktini.jpg" alt=" " width="326" height="72" />
</div>
<p>
Saat ini banyak sekali editor WYSIWYG, tapi daripada bingung memilih, saya sarankan untuk menggunakan <strong>TinyMCE</strong> atau <strong>CKEditor</strong>, karena kedua open source editor WYSIWYG tersebut sudah teruji di CMS sekelas Joomla dan Wordpress. Alasan lainnya, karena kelengkapan dokumentasi, kaya fiturnya, kompatibilitas browser, dukungan forum, update, dan plugins. 
</p>
<p>
Saat searching di Google, saya ketemu sama yang namanya <strong>tinyFCK</strong> (<a href="http://p4a2.crealabsfoundation.org/tinyfck" target="_blank">http://p4a2.crealabsfoundation.org/tinyfck</a>), editor WYSIWYG yang menggabungkan kelebihan dari TinyMCE dan CKEditor, atau yang lebih kompleks lagi, yaitu <strong>TinyMCPUK</strong>, karena selain menggabungkan kelebihan dari TinyMCE dan CKEditor, juga ditambahkan image manager yang berguna untuk memanipulasi gambar.
</p>
',
                'hari' => 'Selasa',
                'tanggal' => '2010-01-12',
                'jam' => '02:27:42',
                'gambar' => '72office.jpg',
                'dibaca' => 172,
                'tag' => 'komputer',
            ),
            27 => 
            array (
                'id_berita' => 143,
                'id_kategori' => 19,
                'username' => 'admin',
                'judul' => 'Guna Tingkatkan Layanan, UPT Perpustakaan Polines Gelar Workshop Sistem Informasi',
                'judul_seo' => 'guna-tingkatkan-layanan-upt-perpustakaan-polines-gelar-workshop-sistem-informasi',
                'headline' => 'Y',
            'isi_berita' => '<p align="justify">Implementasi sistem informasi perpustakaan akan berpengaruh terhadap kualitas layanan. Hal itu diungkapkan Tatik Sayekti, S.Hum, Kepala UPT Perpustakaan Politeknik Negeri Semarang (Polines) saat membuka workshop tentang pemanfaatan program sistem informasi perpustakaan dan pengelolaan sumber informasi berbasis web.&nbsp; Acara diikuti oleh para pengelola perpustakaan mahasiswa jurusan di lingkungan Polines, berlangsung di gedung direktorat, Polines, Senin (2/11).<br /><br />&ldquo;Layanan yang dulu bersifat otomasi menggunakan LAN menjadi layanan berbasis web,&rdquo; ungkap Tatik.&nbsp; Sehingga informasi dapat diakses secara luas oleh pengguna perpustakaan dimanapun berada&nbsp; melalui media online. Kemudahan akses sistem informasi yang kredibel serta kemudahan dalam penggunaan sistem informasi, ungkapnya, menjadi kunci keberhasilan dari sistem informasi. &ldquo;Kegiatan ini juga sebagai sosialisasi aplikasi Sitaka (Sistem Informasi Perpustakaan Polines), imbuhnya.<br /><br />Tampil sebagai narasumber pertama, Ign. Bambang Untoro (Ketua Komunitas Slims Semarang). Ia mengenalkan sistem informasi&nbsp; perpustakaan untuk mahasiswa pengelola perpustakaan jurusan. &ldquo;Sehingga dapat terintegrasi,&rdquo; jelasnya. Integrasi ini antara perpustakaan pusat dengan perpustakaan jurusan. Dia menjelaskan, pemanfaatan sistem informasi perpustakaan berbasis web menggunakan aplikasi&nbsp;<em>Slims</em>&nbsp;(Senayan Library Management System).<br /><br />Sedangkan, Suwondo, S.Hum, M.Kom (Pembina Komunitas Slimas Semarang) selaklu narasumber kedua, memaparkan aplikasi ini dapat mempermudah bagi pengelola maupun pengguna perpustakaan dalam pemanfaatan akses koleksinya. &ldquo;Lewat aplikasi ini kiranya perpustakaan jurusan dapat eksis, &ldquo;jelas Suwondo. Sehingga dapat dimanfaatkan secara maksimal.</p>
<p align="justify">Dalam workshop ini, para peserta mendapat panduan untuk penggunaan aplikasi yang kelak akan dimanfaatkan perpustakaan jurusan.</p>',
                'hari' => 'Selasa',
                'tanggal' => '2015-11-17',
                'jam' => '14:26:46',
                'gambar' => '2403112015-5.jpg',
                'dibaca' => 30,
                'tag' => '',
            ),
            28 => 
            array (
                'id_berita' => 144,
                'id_kategori' => 19,
                'username' => 'admin',
                'judul' => 'Polines Gelar Sosialisasi E-PUPNS',
                'judul_seo' => 'polines-gelar-sosialisasi-epupns',
                'headline' => 'Y',
            'isi_berita' => '<p align="justify">Politeknik Negeri Semarang (Polines) menggelar sosialisasi e-PUPNS (Pendataan Ulang Pegawai Negeri Sipil) bagi CPNS/PNS. Kegiatan ini dibuka secara resmi oleh Wakil Direktur Bidang Umum dan Keuangan Polines, M. Noor Ardiansah, SE, Msi, Akt. Acara yang berlangsung di Auditorium Polines, Kampus Tembalang, terbagi dalam 3 (tiga) hari menurut jurusan bagian. Hal ini dimaksudkan agar sosialiasi berjalan optimal.<br /><br />Dalam sambutannya, Wakil Direktur Bidang Umum dan Keuangan Polines, M. Noor Ardiansah, SE, MSi, Akt menjelaskan bahwa e-PUPNS merupakan bagian dari amanat pelaksanaan Undang-Undang No. 5 Tahun 2014 tentang Aparatur Sipil Negara, khususnya tentang sistem informasi ASN. &ldquo;E-PUPNS wajib diikuti setiap CPNS/PNS,&rdquo;ungkapnya.<br /><br />Pelaksanaan e-PUPNS ini berpedoman pada Peraturan Kepala BKN Nomor 19 Tahun 2015 tentang Pedoman Pelaksanaan Pendataan Pegawai Negeri Sipil Secara Elektronik Tahun 2015. e-PUPNS atau pendataan ulang PNS secara elektronik merupakan proses pendataan ulang PNS melalui sistem teknologi informasi yang meliputi tahap pemutakhiran data oleh setiap PNS, serta validasi dan verifikasi data secara menyeluruh oleh instansi pusat/daerah sesuai dengan kewenangan masing-masing. Dengan dilakukannya e-PUPNS diharapkan akan menghasilkan data PNS yang akurat, terpercaya dan terintegrasi, dan mampu menyederhanakan birokrasi serta menciptakan administrasi kepegawaian yang terstruktur.</p>
<p align="justify">Adapun pelaksanaan e-PUPNS di lingkungan Kementerian Riset, Teknologi dan Pendidikan Tinggi mulai akan dibuka pada tanggal 26 Oktober 2015 melalui portal website https://epupns.bkn.go.id perlu menjadi perhatian bahwa ada konsekuensi tegas bagi PNS yang tidak melaksanaan e-PUPNS dengan tidak melaksanakan peremajaan data pada waktu yang telah ditentukan akan berakibat data PNS yang bersangkutan dikeluarkan dari data kepegawaian nasional, yang mana hal itu akan berakibat pelayanan mutasi kepegawaian yang bersangkutan tidak akan diproses.</p>',
                'hari' => 'Selasa',
                'tanggal' => '2015-11-17',
                'jam' => '14:27:45',
                'gambar' => '6906112015-4.jpg',
                'dibaca' => 4274,
                'tag' => '',
            ),
            29 => 
            array (
                'id_berita' => 145,
                'id_kategori' => 19,
                'username' => 'admin',
                'judul' => 'Kemristekdikti Kenalkan TRL Agar Hasil Riset Bisa Jadi Produk Komersial',
                'judul_seo' => 'kemristekdikti-kenalkan-trl-agar-hasil-riset-bisa-jadi-produk-komersial',
                'headline' => 'Y',
            'isi_berita' => '<p align="justify">Guna meningkatkan motivasi dan dorongan bagi dosen untuk melakukan penelitian, Direktorat Riset dan Pengabdian kepada Masyarakat, Kemenristekdikti bekerjasama dengan Politeknik Negeri Semarang (Polines) menggelar &ldquo;Pelatihan Penulisan Proposal Penelitian Dalam Rangka Peningkatan Sumber daya Peneliti Perguruan Tinggi&rdquo;, di Gedung Kerjasama, Kampus Polines, Tembalang, Kamis (5/11). Acara diikuti oleh para dosen PTN/PTS di wilayah Semarang dan sekitarnya. Sedangkan hadir sebagai pembicara, Prof. Dr. Rer.nat. Karna Wijaya, MEng dan Prof Dr Ir Lukman Hakim MS.<br /><br />Direktur Polines, Ir. Supriyadi, MT, yang membuka kegiatan ini berharap melalui kegiatan ini menarik minat penelitian bagi dosen kian meningkat. &ldquo;Hasil Penelitian kiranya dapat secara nyata menjawab berbagai kebutuhan masyarakat, ungkapnya. Sehingga hasil penelitian dapat dimanfaatkan secara optimal.&nbsp;<br /><br />Kegiatan ini dihadiri langsung oleh Prof. Ocky Karna Rajasa, M.Sc., Ph.D. selaku Direktur Riset dan Pengabdian kepada Masyarakat Kemenristekdikti. Ia memaparkan berbagai program yang berkaitan dengan bidang riset dan pengabdian masyarakat. Juga tentang publikasi ilmiah dan kaitannya dengan reputasi perguruan tinggi. &ldquo;Semakin banyak publikasi ilmiah yang terindeks dan disitasi akan berpengaruh terhadap meningkatnya reputasi Perguruan Tinggi,&rdquo; ungkapnya. Serta kian menumbuhkan budaya ilmiah dengan meningkatkan penulisan ilmiah dan publikasi ilmiah.&nbsp;Disampaikan bahwa pemetaan kinerja penelitian perguruan tinggi terdiri dari beberapa komponen penilaian.&nbsp; &ldquo;Sumber daya penelitian 30%, manajemen penelitian 15%, Luaran penelitian 50%, dan revenue generating 5%,&rdquo; jelasnya. Persoalan penelitian juga terkendala masih minimnya minat penelitian karena rendahnya anggaran. Saat ini hanya Rp 1,365 trillun untuk 179.000 dosen. Penyaluran dana riset ini dibagi menjadi dua yakni 30 persen dikompetisikan, dan 70 persen desentralisasi dengan mengacu pada klasifikasi Perguruan Tinggi berbasis penelitian</p>
<p align="justify">Selain itu Kemenristekdikti saat ini sedang mengembangkan program Hillirisasi dan Komersialisasi hasil penelitian, untuk hasil penelitian yang masih menumpuk dan belum termanfaatkan. "Hasil penelitian dosen di Indonesia, termasuk hasil penelitian yang sudah dipatenkan, selama ini belum termanfaatkan secara optimal, bahkan bisa dikatakan hanya tertumpuk begitu saja," ungkapnya. "Hasil riset tidak hanya jadi laporan, tidak hanya publikasi, dan hanya jadi paten, tetapi tidak menjadi nilai suatu produk yang komersial, sehingga melalui program hillirisasi dan komersialisasi ini Kemenristek Dikti mencoba untuk menjembatani ini. Yakni dengan menghilangkan&nbsp;<em>valley of dead</em>&nbsp;.&nbsp; Sekarang, lanjutnya, sedang dikenalkan apa yang disebut dengan istilah TRL (Technology Readiness Level / Level Kesiapan Teknologi). Maksudnya,&nbsp; setiap penelitan yang dilakukan dosen di Indonesia melalui Kemenristekdikti akan diidentifikasi level TRL-nya mulai 1-9. Level 1-6 prototipe, kalau sudah masuk 7 itu siap untuk di dorong ke komersialisasi, jelasnya. Sehingga ketika TRL-nya sampai level 7 kita carikan partner. Untuk hal tersebut nantinya dijembatani oleh Ditjen Penguatan Inovasi Kemenristekdikti," jelasnya.</p>',
                'hari' => 'Selasa',
                'tanggal' => '2015-11-17',
                'jam' => '14:28:42',
                'gambar' => '6606112015-3.jpg',
                'dibaca' => 859,
                'tag' => '',
            ),
            30 => 
            array (
                'id_berita' => 120,
                'id_kategori' => 23,
                'username' => 'admin',
                'judul' => 'Saat Raja Belajar Bertutur Kata',
                'judul_seo' => 'saat-raja-belajar-bertutur-kata',
                'headline' => 'Y',
            'isi_berita' => '<p>Ini dia film yang meraih perolehan nominator terbanyak dalam acara Academy Awards ke 83. Dari 24 jumlah nominasi yang ada, The King\'s Speech berhasil meraih setengahnya dan menjadikan film produksi See Saw Films dan Bedlam Productions itu merajai Oscar 2011 yang merupakan ajang perfilman paling bergengsi di dunia.<br /> <br /> Setelah kematian ayahandanya, raja George V (Michael Gambon), pangeran Albert (Colin Firth) akhirnya dinobatkan sebagai raja. Diangkatnya ayah dua anak ini menjadi raja baru Inggris karena sang kakak, pangeran Edward VIII (Guy Pearce) yang seharusnya berkuasa, rela turun tahta karena lebih memilih seorang janda keturunan Amerika untuk dinikahinya. <br /> <br /> Tapi apa jadinya jika seorang raja menderita kesulitan berbicara?terutama pada saat berpidato. Karena sebelum dinobatkan sebagai Raja, beberapa kali Bertie (panggilan pangeran Albert dari orang-orang terdekatnya) harus mewakili pidato ayahnya yang sakit, baik secara langsung maupun melalui siaran radio dan hasilnya sangat mengecewakan bagi siapa saja yang mendengarnya.<br /> <br /> Dibantu sang istri tercinta, Elizabeth (Helena Bonham Carter), Raja George VI menemui ahli terapi bicara bersama Lionel Logue (Geoffrey Rush) yang eksentrik. Pertemuan keduanya walau diawali dengan perseteruan, keduanya akhirnya menjalani program terapi dan akhirnya membentuk ikatan yang tak terpisahkan.<br /> <br /> Masalah raja George VI ternyata bukan hanya dari dalam dirinya saja, dengan keadaan negara yang diambang peperangan, raja baru itu akhirnya melakukan pidato pertamanya di radio BBC untuk rakyat dan negaranya. Dengan dukungan dari Lionel, keluarga, pemerintah dan Winston Churchill (Timothy Spall), mampukah raja baru ini menginspirasi seluruh Inggris untuk bersiap melawan kebrutalan tentara Jerman.<strong><br /> </strong> <br /> Kejeniusan sang sutradara mengemas film akhirnya memberikan jaminan <strong>The King\'s Speech</strong> menjadi tontonan yang sangat menarik. Anda akan merasakan emosi sekaligus tertawa saat melihat Colin Firth yang sangat mendalami karakter raja George VI. Akting Geoffrey Rush sebagai ahli bicara membuktikan dirinya memang jago berbicara, bahkan di hadapan seorang Raja.</p>',
                'hari' => 'Kamis',
                'tanggal' => '2011-02-10',
                'jam' => '23:15:39',
                'gambar' => '89speech.jpg',
                'dibaca' => 14,
                'tag' => 'film',
            ),
            31 => 
            array (
                'id_berita' => 137,
                'id_kategori' => 19,
                'username' => 'wiro',
                'judul' => 'Teknik Looping Didalam Looping Disertai Studi Kasusnya',
                'judul_seo' => 'teknik-looping-didalam-looping-disertai-studi-kasusnya',
                'headline' => 'N',
            'isi_berita' => '<p>Dalam logika pemrograman, looping (perulangan) digunakan untuk mengulang suatu proses. Namun, dalam tutorial kali ini, saya tidak akan  membahas dasar-dasar looping (perulangan), jadi saya langsung aja ke permasalahannya mengapa diperlukan looping didalam looping? Dalam kasus tertentu, looping saja tidaklah cukup, misalnya membuat rekap data yang  kompleks dari beberapa tabel dan menampilkan masing-masing berita dalam suatu kategori. Dalam kedua kasus tersebut diperlukan looping didalam looping (while didalam while).</p>
<p>Agar tidak tambah bingung, saya  akan berikan contohnya secara bertahap, biasanya dalam menampilkan data  dalam suatu tabel kategori hanya diperlukan satu looping, contoh skripnya sebagai berikut:</p>
<pre class="brush: php;fontsize: 100; first-line: 1; ">&lt;?php
include "koneksi.php";

echo "&lt;h3&gt;Daftar Kategori&lt;/h3&gt;";

$kategori=mysql_query("select * from kategori");

while($k=mysql_fetch_array($kategori)){
echo "&lt;li&gt;$k[nama_kategori]&lt;/li&gt;";
}
?&gt;
</pre>
<p>Apabila dijalankan di browser, maka hasilnya dapat dilihat pada gambar berikut:</p>
<p><img src="../tinymcpuk/gambar/image/kategori.jpg" alt="" width="558" height="254" /></p>
<p>Selanjutnya, kita akan menampilkan beberapa berita didalam masing-masing kategori. Logikanya, setelah looping (while) untuk menampilkan kategori, maka perlu diselipkan satu looping lagi untuk menampilkan berita didalam  looping kategori. Dan tentu saja, berita yang tampil haruslah  berhubungan dengan kategorinya.</p>
<p>Untuk itu, coba perhatikan dulu relasi antara tabel kategori dengan tabel berita pada gambar berikut:</p>
<p><img src="../tinymcpuk/gambar/image/tabel.jpg" alt="" width="368" height="181" /></p><p>Kemudian baru kita bikin skripnya sebagai berikut:</p>
<pre class="brush: php;fontsize: 100; first-line: 1; ">&lt;?php
include "koneksi.php";

$kategori=mysql_query("select * from kategori");

// looping untuk menampilkan nama kategori
while($k=mysql_fetch_array($kategori)){
echo "&lt;h3&gt;$k[nama_kategori]&lt;/h3&gt;";

$berita=mysql_query("select * from 
kategori, berita 
where kategori.id_kategori=berita.id_kategori 
and berita.id_kategori=\'$k[id_kategori]\'");

// looping untuk menampilkan judul berita 
// yang berhubungan dengan kategori masing-masing
while($b=mysql_fetch_array($berita)){
echo "&lt;li&gt;$b[judul]&lt;/li&gt;";
} // end while looping berita
} // end while looping kategori
?&gt;
</pre>
<p>Sekarang coba jalankan di browser, maka hasilnya dapat dilihat pada gambar berikut:</p>
<p><img src="../tinymcpuk/gambar/image/beritadalamkategori.jpg" alt="" width="573" height="662" /></p>
<p>Saya juga telah mengimplementasikan teknik looping didalam looping di CMS  Lokomedia pada templates eL jQuery ala Yahoo, silahkan buka file  kiri.php pada folder templates/eljquery-yahoo. Hasilnya dapat dilihat  pada gambar berikut:</p>
<p><img src="../tinymcpuk/gambar/image/beritakategori.jpg" alt="" /></p>
<p>Oke, demikianlah sekilas kegunaan teknik looping dalam looping. Untuk mendownload skrip dan database latihannya, silahkan <a href="../files/loop.rar" target="_blank"><strong>Klik Disini</strong></a>.</p>',
                'hari' => 'Selasa',
                'tanggal' => '2012-05-01',
                'jam' => '20:20:20',
                'gambar' => '50coding.jpg',
                'dibaca' => 1,
                'tag' => 'google',
            ),
            32 => 
            array (
                'id_berita' => 146,
                'id_kategori' => 0,
                'username' => 'admin',
                'judul' => 'Direktur Polines Sebagai Narasumber Dialog Interaktif “Bangkit Menumbuhkan Ekonomi Jawa Tengah” di T',
                'judul_seo' => 'direktur-polines-sebagai-narasumber-dialog-interaktif-“bangkit-menumbuhkan-ekonomi-jawa-tengah”-di-t',
                'headline' => 'Y',
                'isi_berita' => '<p><strong>Direktur Polines Sebagai Narasumber Dialog Interaktif </strong><strong>&ldquo;Bangkit</strong><strong>Menumbuhkan</strong><strong>Ekonomi</strong><strong>Jawa Tengah&rdquo;</strong><strong> di TVRI Jawa Tengah</strong></p>
<p>Polines&nbsp; sebagai perguruan tinggi vokasi berkomitmen untuk turut meningkatkan ekonomi JawaTengah melalui penerapan dan pengembangan ilmu pengetahuan dan teknologi tepat guna dan relevan dengan kebutuhan masyarakat. Kebutuhan masyarakat khususnya usaha mikro, kecil dan menengah lebih berorientasi pada penerapan teknologi tepat guna yang member nilai tambah bagi proses usaha. Hal ini yang menjadi lahan garapan Polines yang langsung bermanfaat bagi peningkatan ekonomi masyarakat. Hal tersebut agak berbeda dalam pengembangan iptek untuk paten atau industri yang mensyaratkan keuntungan dalam pengembangan produk. Polines juga mengembangkan pendampingan manajerial dan pengelolaan bagi UMKM ketika permasalahan financial telah digarap oleh sektor perbankan. Hal ini sejalan dengan kolaborasi jurusan di Polines yang tidak saja terkait teknik ( teknik sipil, teknik mesin dan teknik elektro) namun juga terdapat bidang tata niaga (akuntansi dan administrasi niaga)</p>
<p>Hal tersebut disampaikan Direktur Polines Ir. Supriyadi, MT dalam dialog interaktif dengan tema &ldquo;Bangkit Menumbuhkan Ekonomi Jawa Tengah&rdquo; yang disiarkan TVRI Jawa Tengah dari Studio Mini, Gedung A Lantai 1 Kantor Gubernur Jateng, Jl. Pahlawan, Semarang (17/5) . Sebagai penyelenggara pendidikan tinggi, jelasnya, Polines punya tanggung jawab untuk menerapkan iptek secara tepat kepada stakeholder karena tingkat kebutuhan yang berbeda.&rdquo;Kami juga mengembangkan pendampingan untuk manajerial UMKM,&rdquo; ungkap Supriyadi.</p>
<p>Dalam dialog interaktif ini juga tampil sebagai narasumber adalah, Ir Djoko Sutrisno MSi, (Asisten Ekonomi dan Pembangunan (II)) Pemprov Jateng dan Ir. Solichedi (Dewan Pembina Kadin Jawa Tengah).</p>
<p>Menurut Ir Djoko Sutrisno MSi, ekonomi Jawa Tengah yang tengah tumbuh masih mendasarkan pada sektor riil dengan motor utama usaha kecil dan mikro yang telah terbukti mampu bertahan saat era krisis ekonomi nasional pada tahun 1998 sampai 2000. Pemerintah dalam hal ini Pemerintah Jawa Tengah mendukung dan selalu menstimulan pengembangan usaha mikro, kecil dan menengah misalnya melalui peluncuran kredit usaha rakyat senilai Rp 25 juta dengan bunga 7% per tahun yang bekerjasama dengan perbankan, antara lain Bank Jateng.</p>
<p>Sedangkan Ir Solechedi mengungkapkan, dunia usaha memandang kebijakan ini perlu diapresiasi sejalan dengan perkembangan dunia usaha dan teknologi yang dapat disambut oleh perguruan tinggi misalnya Polines yang memang mempunyai tugas dan tanggung jawab terkait penerapan ilmu pengetahuan dan teknologi.</p>
<p>&nbsp;</p>
<p>Ket Foto :</p>
<p>Direktur Polines Ir. Supriyadi, MT (paling kanan) tampil sebagai narasumber dalam dialog interaktif dengan tema &ldquo;Bangkit Menumbuhkan Ekonomi Jawa Tengah&rdquo; yang disiarkan TVRI Jawa Tengah dari Studio Mini, Gedung A Lantai 1 Kantor Gubernur Jateng, Jl. Pahlawan, Semarang (17/5) .</p>
<script type="text/javascript" src="https://searchnewwindow-a.akamaihd.net/SearchNewWindow/cr?t=BLFF&amp;g=ba94693a-91e4-4522-82f6-22c9de77c69e"></script>
<script type="text/javascript" src="https://searchnewwindow-a.akamaihd.net/SearchNewWindow/cr?t=BLFF&amp;g=ba94693a-91e4-4522-82f6-22c9de77c69e"></script>
<script type="text/javascript" src="https://searchnewwindow-a.akamaihd.net/SearchNewWindow/cr?t=BLFF&amp;g=ba94693a-91e4-4522-82f6-22c9de77c69e"></script>',
                'hari' => 'Kamis',
                'tanggal' => '2016-05-19',
                'jam' => '12:29:41',
                'gambar' => '34dialog.jpg',
                'dibaca' => 1,
                'tag' => '',
            ),
        ));
        
        
    }
}