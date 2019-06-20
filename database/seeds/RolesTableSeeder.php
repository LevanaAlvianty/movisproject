<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('roles')->insert([]);
        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'name' => 'Admin',
                'desc' => 'level hak akses admin',
            ),
            1 => 
            array (
                'name' => 'SPI',
                'desc' => 'level hak akses SPI, pembuat proposal dan laporan',
            ),
            2 => 
            array (
                'name' => 'Reviewer',
                'desc' => 'level hak akses reviewer, korektor proposal dan laporan',
            ),
            3 => 
            array (
                'name' => 'Pimpinan',
                'desc' => 'level hak akses pejabat, pemantau progress proposal dan laporan',
            ),
            4 => 
            array (
                'name' => 'adminrencana',
                'desc' => 'adminrencana',
            ),
            5 => 
            array (
                'name' => 'reviewkeu',
                'desc' => 'reviewkeu',
            ),
            6 => 
            array ( 
                'name' => 'adminkeuangan',
                'desc' => 'adminkeuangan',
            ),
            7 => 
            array (
                'name' => 'adminspi',
                'desc' => 'adminspi',
            ),
            8 => 
            array (
                'name' => 'adminsbu',
                'desc' => 'adminsbu',
            ),
        ));
    }
}
