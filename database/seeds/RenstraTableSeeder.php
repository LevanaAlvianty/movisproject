<?php

use Illuminate\Database\Seeder;

class RenstraTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('renstra')->delete();
        
        \DB::table('renstra')->insert(array (
            0 => 
            array (
                'id_renstra' => 1,
                'renstra' => 'Belum',
                'tahun_penetapan' => '2014',
                'status' => 'Y',
            ),
            1 => 
            array (
                'id_renstra' => 2,
                'renstra' => '1. Meningkatnya kualitas lulusan berbasis kompetensi, pengembangan program pembelajaran, program studi baru serta daya saing di tingkat nasional dan atau internasional',
                'tahun_penetapan' => '2014',
                'status' => 'Y',
            ),
            2 => 
            array (
                'id_renstra' => 3,
                'renstra' => '2. Meningkatnya publikasi karya ilmiah dan karya kreatif-inovatif sivitas akademika',
                'tahun_penetapan' => '2014',
                'status' => 'Y',
            ),
            3 => 
            array (
                'id_renstra' => 4,
                'renstra' => '3. Meningkatnya aktivitas berbasis rencana strategis dan jumlah mitra yang memanfaatkan karya kreatif-inovatif sivitas akademika',
                'tahun_penetapan' => '2014',
                'status' => 'Y',
            ),
            4 => 
            array (
                'id_renstra' => 5,
                'renstra' => '4. Meningkatnya kualitas layanan berbasis evaluasi bidang akademik dan non-akademik secara berkelanjutan',
                'tahun_penetapan' => '2014',
                'status' => 'Y',
            ),
            5 => 
            array (
                'id_renstra' => 6,
            'renstra' => '5. Meningkatnya kepakaran dan peran dosen terhadap pemangku kepentingan (stakeholders).',
                'tahun_penetapan' => '2014',
                'status' => 'Y',
            ),
        ));
        
        
    }
}