<?php

use Illuminate\Database\Seeder;

class PejabatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('pejabats')->delete();
        
        \DB::table('pejabats')->insert(array (
            0 => 
            array (
                'name' => 'Dr.Amin Suharjono, S.T., MT.',
                'nip' => '197210271999031002',
                'jabatan' => 'Ketua Jurusan Teknik Elektro',
            ),
            1 => 
            array (
                'name' => 'Saniman Widodo, S.E., M. M.',
                'nip' => '196202191990031001',
                'jabatan' => 'Wadir Umum & Keuangan',
            ),
            2 => 
            array (
                'name' => 'Ir. Endro Wasito, M. Kom.',
                'nip' => '196104241989031001',
                'jabatan' => 'Wadir Akademik',
            ),
            3 => 
            array (
                'name' => 'Ir. Supriyadi, M.T.',
                'nip' => '195909061987031002',
                'jabatan' => 'Direktur',
            ),
        ));
    }
}
