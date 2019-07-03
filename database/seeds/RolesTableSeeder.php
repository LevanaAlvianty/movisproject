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
        
        // Seeder untuk Role PIC
            $rolepic = new Role();
            $rolepic->name = 'pic';
            $rolepic->desc = 'Akun Level PCI';
            $rolepic->save();
        
        // Seeder untuk Role Reviewer Anggaran
            $rolereviewer = new Role();
            $rolereviewer->name = 'reviewer_anggaran';
            $rolereviewer->desc = 'Akun Level Reviewer';
            $rolereviewer->save();

        // Seeder untuk Role Reviewer SPI
            $rolereviewer = new Role();
            $rolereviewer->name = 'reviewer_spi';
            $rolereviewer->desc = 'Akun Level Reviewer';
            $rolereviewer->save();

        // Seeder untuk Role Pimpinan
            $rolepimpinan = new Role();
            $rolepimpinan->name = 'pimpinan';
            $rolepimpinan->desc = 'Akun Level Pimpinan';
            $rolepimpinan->save();

    }
}
