<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Meningkatnya kualitas lulusan berbasis kompetensi, pengembangan program pembelajaran, program studi baru serta daya saing di tingkat nasional dan atau internasional',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Meningkatnya publikasi karya ilmiah dan karya kreatif-inovatif sivitas akademika',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Meningkatnya aktivitas berbasis rencana strategis dan jumlah mitra yang memanfaatkan karya kreatif-inovatif sivitas akademika',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Meningkatnya kualitas layanan berbasis evaluasi bidang akademik dan non-akademik secara berkelanjutan',
            ),
            4 => 
            array (
                'id' => 5,
            'name' => ' Meningkatnya kepakaran dan peran dosen terhadap pemangku kepentingan (stakeholders)',
            ),
        ));
        
        
    }
}