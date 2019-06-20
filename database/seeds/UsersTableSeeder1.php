<?php

use Illuminate\Database\Seeder;

class Users1TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'admin',
            'username' => 'admin_movis',
            'jk' => 'L',
            'nip' => '33416116',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'spi',
            'username' => 'spi_movis',
            'jk' => 'P',
            'nip' => '33416117',
            'email' => 'spi@gmail.com',
            'password' => bcrypt('spi123'),
        ]);

        DB::table('users')->insert([
            'role_id' => '3',
            'name' => 'reviewer',
            'username' => 'reviewer_movis',
            'jk' => 'L',
            'nip' => '33416118',
            'email' => 'reviewer@gmail.com',
            'password' => bcrypt('review123'),
        ]);

        DB::table('users')->insert([
            'role_id' => '4',
            'name' => 'wadir',
            'username' => 'wadir_movis',
            'jk' => 'L',
            'nip' => '33416119',
            'email' => 'wadir@gmail.com',
            'password' => bcrypt('wadir123'),
        ]);
    }
}
