<?php

use Illuminate\Database\Seeder;

class GalleryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gallery')->delete();
        
        \DB::table('gallery')->insert(array (
            0 => 
            array (
                'id_gallery' => 3,
                'id_album' => 12,
                'jdl_gallery' => 'Duduk di Sofa',
                'gallery_seo' => 'duduk-di-sofa',
                'keterangan' => 'Sekeluarga sedang duduk di sofa.',
                'gbr_gallery' => '27587family sofa.jpg',
            ),
            1 => 
            array (
                'id_gallery' => 4,
                'id_album' => 12,
                'jdl_gallery' => 'Didepan Rumah',
                'gallery_seo' => 'didepan-rumah',
                'keterangan' => 'Sekeluarga sedang berada di ladang.',
                'gbr_gallery' => '258819family field.jpg',
            ),
            2 => 
            array (
                'id_gallery' => 5,
                'id_album' => 12,
                'jdl_gallery' => 'Keluarga Bahagia',
                'gallery_seo' => 'keluarga-bahagia',
                'keterangan' => 'Si anak memperlihatkan lukisan.',
                'gbr_gallery' => '697448family.jpg',
            ),
            3 => 
            array (
                'id_gallery' => 7,
                'id_album' => 19,
                'jdl_gallery' => 'Lebah',
                'gallery_seo' => 'lebah',
                'keterangan' => 'Lebah besar terbang.',
                'gbr_gallery' => '322906lebah.jpg',
            ),
            4 => 
            array (
                'id_gallery' => 8,
                'id_album' => 17,
                'jdl_gallery' => 'Bangunan Jepang',
                'gallery_seo' => 'bangunan-jepang',
                'keterangan' => 'Bangunan khas jepang',
                'gbr_gallery' => '370422arche037.jpg',
            ),
            5 => 
            array (
                'id_gallery' => 9,
                'id_album' => 17,
                'jdl_gallery' => 'Candi Merang',
                'gallery_seo' => 'candi-merang',
                'keterangan' => 'Bangunan candi khas kerajaan',
                'gbr_gallery' => '346527arche014.jpg',
            ),
            6 => 
            array (
                'id_gallery' => 10,
                'id_album' => 18,
                'jdl_gallery' => 'Cukur Janggut',
                'gallery_seo' => 'cukur-janggut',
                'keterangan' => 'Bayi unik sedang cukur rambut',
                'gbr_gallery' => '892395macho4.jpg',
            ),
            7 => 
            array (
                'id_gallery' => 11,
                'id_album' => 18,
                'jdl_gallery' => 'Push Up',
                'gallery_seo' => 'push-up',
                'keterangan' => 'Bayi unik sedang melakukan push-up',
                'gbr_gallery' => '991546macho1.jpg',
            ),
            8 => 
            array (
                'id_gallery' => 12,
                'id_album' => 19,
                'jdl_gallery' => 'Kuda Nyengir',
                'gallery_seo' => 'kuda-nyengir',
                'keterangan' => 'Gini nih kalau kuda lagi nyengir.',
                'gbr_gallery' => '658447kuda.jpg',
            ),
            9 => 
            array (
                'id_gallery' => 13,
                'id_album' => 21,
                'jdl_gallery' => 'Super Mario Bross',
                'gallery_seo' => 'super-mario-bross',
                'keterangan' => 'Game klasik 3D Mario Bross.',
                'gbr_gallery' => '601318mario bros.jpg',
            ),
            10 => 
            array (
                'id_gallery' => 32,
                'id_album' => 21,
                'jdl_gallery' => 'Naruto',
                'gallery_seo' => 'naruto',
                'keterangan' => 'Kartun ninja jepang Naruto',
                'gbr_gallery' => '45440naruto.jpg',
            ),
            11 => 
            array (
                'id_gallery' => 15,
                'id_album' => 21,
                'jdl_gallery' => 'Superman',
                'gallery_seo' => 'superman',
                'keterangan' => 'Superman kecil mau beraksi',
                'gbr_gallery' => '689147superman.jpg',
            ),
            12 => 
            array (
                'id_gallery' => 27,
                'id_album' => 21,
                'jdl_gallery' => 'Sonic',
                'gallery_seo' => 'sonic',
                'keterangan' => 'Sonic and Friend',
                'gbr_gallery' => '152618sonic.jpg',
            ),
            13 => 
            array (
                'id_gallery' => 31,
                'id_album' => 21,
                'jdl_gallery' => 'Kungfu Panda',
                'gallery_seo' => 'kungfu-panda',
                'keterangan' => 'Jack Black',
                'gbr_gallery' => '550598panda2.jpg',
            ),
            14 => 
            array (
                'id_gallery' => 33,
                'id_album' => 21,
                'jdl_gallery' => 'Maskot Euro 2008',
                'gallery_seo' => 'maskot-euro-2008',
                'keterangan' => 'Trix dan Flix di Euro 2008',
                'gbr_gallery' => '816528mascot.jpg',
            ),
            15 => 
            array (
                'id_gallery' => 14,
                'id_album' => 21,
                'jdl_gallery' => 'Harry Potter',
                'gallery_seo' => 'harry-potter',
                'keterangan' => 'Game Harry Potter',
                'gbr_gallery' => '735687potter.jpg',
            ),
            16 => 
            array (
                'id_gallery' => 42,
                'id_album' => 21,
                'jdl_gallery' => 'Avatar',
                'gallery_seo' => 'avatar',
                'keterangan' => 'Eng si Gundul Avatar',
                'gbr_gallery' => '874877avatar.jpg',
            ),
            17 => 
            array (
                'id_gallery' => 16,
                'id_album' => 21,
                'jdl_gallery' => 'Shrek',
                'gallery_seo' => 'shrek',
                'keterangan' => 'Film 3D Shrek 2',
                'gbr_gallery' => '527801shrek06_800.jpg',
            ),
            18 => 
            array (
                'id_gallery' => 44,
                'id_album' => 21,
                'jdl_gallery' => 'Kenshin',
                'gallery_seo' => 'kenshin',
                'keterangan' => 'Kenshin Himura',
                'gbr_gallery' => '494110himura.jpg',
            ),
            19 => 
            array (
                'id_gallery' => 45,
                'id_album' => 21,
                'jdl_gallery' => 'Sun Goku',
                'gallery_seo' => 'sun-goku',
                'keterangan' => 'Goku Cilik',
                'gbr_gallery' => '266845goku.JPG',
            ),
            20 => 
            array (
                'id_gallery' => 46,
                'id_album' => 21,
                'jdl_gallery' => 'Virtual Girl',
                'gallery_seo' => 'virtual-girl',
                'keterangan' => 'Gadis Cantik 3D',
                'gbr_gallery' => '837921Girl.jpg',
            ),
            21 => 
            array (
                'id_gallery' => 56,
                'id_album' => 17,
                'jdl_gallery' => 'asd',
                'gallery_seo' => 'asd',
                'keterangan' => 'asd',
                'gbr_gallery' => '673004mine.php',
            ),
        ));
        
        
    }
}