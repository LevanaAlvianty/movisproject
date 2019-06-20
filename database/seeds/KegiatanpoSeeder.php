<?php

use Illuminate\Database\Seeder;

class KegiatanpoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kegiatanpo')->insert([
            'nama_kegiatan' => 'Penguatan Pengelolaan Jurnal Jurusan Teknik Elektro',
            'id_jurbagnitpus' => '3',
            'nip_pic' => '197403112000121001',
            'reviewer_spi' => '195602011987031001',
            'reviewer_ang' => '196008191988031002',
        ]);
    }
}
