<?php

use Illuminate\Database\Seeder;

class UserKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('userkegiatan')->insert([
            'nip' => '197403112000121002',
            'role_id' => '1',
            'password' => bcrypt('admin23'),
        ]);


        DB::table('userkegiatan')->insert([
            'nip' => '197403112000121001',
            'role_id' => '2',
            'password' => bcrypt('pic123'),
        ]);
        
        DB::table('userkegiatan')->insert([
            'nip' => '197403112000121001',
            'role_id' => '3',
            'password' => bcrypt('reviewer123'),
        ]);

        DB::table('userkegiatan')->insert([
            'nip' => '197403112000121003',
            'role_id' => '4',
            'password' => bcrypt('pimpinan123'),
        ]);
    }
}
