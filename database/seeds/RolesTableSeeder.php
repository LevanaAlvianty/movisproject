<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seeder untuk Role Admin
            $roleadmin = new Role();
            $roleadmin->name = 'admin';
            $roleadmin->desc = 'Akun Level Admin';
            $roleadmin->save();
        
        // Seeder untuk Role Admin
            $rolepic = new Role();
            $rolepic->name = 'pic';
            $rolepic->desc = 'Akun Level PCI';
            $rolepic->save();
        
        // Seeder untuk Role Admin
            $rolereviewer = new Role();
            $rolereviewer->name = 'reviewer';
            $rolereviewer->desc = 'Akun Level Reviewer';
            $rolereviewer->save();

        // Seeder untuk Role Admin
            $rolepimpinan = new Role();
            $rolepimpinan->name = 'pimpinan';
            $rolepimpinan->desc = 'Akun Level Pimpinan';
            $rolepimpinan->save();

        // \DB::table('roles')->delete();
        
        // \DB::table('roles')->insert(array (
        //     0 => 
        //     array (
        //         'name' => 'Admin',
        //         'desc' => 'level hak akses admin',
        //     ),
        //     1 => 
        //     array (
        //         'name' => 'SPI',
        //         'desc' => 'level hak akses SPI, pembuat proposal dan laporan',
        //     ),
        //     2 => 
        //     array (
        //         'name' => 'Reviewer',
        //         'desc' => 'level hak akses reviewer, korektor proposal dan laporan',
        //     ),
        //     3 => 
        //     array (
        //         'name' => 'Pimpinan',
        //         'desc' => 'level hak akses pejabat, pemantau progress proposal dan laporan',
        //     ),
        //     4 => 
        //     array (
        //         'name' => 'adminrencana',
        //         'desc' => 'adminrencana',
        //     ),
        //     5 => 
        //     array (
        //         'name' => 'reviewkeu',
        //         'desc' => 'reviewkeu',
        //     ),
        //     6 => 
        //     array ( 
        //         'name' => 'adminkeuangan',
        //         'desc' => 'adminkeuangan',
        //     ),
        //     7 => 
        //     array (
        //         'name' => 'adminspi',
        //         'desc' => 'adminspi',
        //     ),
        //     8 => 
        //     array (
        //         'name' => 'adminsbu',
        //         'desc' => 'adminsbu',
        //     ),
        // ));
    }
}
