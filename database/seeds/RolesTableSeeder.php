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
            $rolerevieweranggaran = new Role();
            $rolerevieweranggaran->name = 'reviewer_anggaran';
            $rolerevieweranggaran->desc = 'Akun Level Reviewer';
            $rolerevieweranggaran->save();

        // Seeder untuk Role Reviewer SPI
            $rolereviewerspi = new Role();
            $rolereviewerspi->name = 'reviewer_spi';
            $rolereviewerspi->desc = 'Akun Level Reviewer';
            $rolereviewerspi->save();

        // Seeder untuk Role Pimpinan
            $rolepimpinan = new Role();
            $rolepimpinan->name = 'pimpinan';
            $rolepimpinan->desc = 'Akun Level Pimpinan';
            $rolepimpinan->save();

        // Seeder untuk Role Admin Perencanaan
            $roleadminperencanaan = new Role();
            $roleadminperencanaan->name = 'admin_perencanaan';
            $roleadminperencanaan->desc = 'Akun Level Admin Perencanaan';
            $roleadminperencanaan->save();
     
        // Seeder untuk Admin SPI
            $roleadminspi = new Role();
            $roleadminspi->name = 'admin_spi';
            $roleadminspi->desc = 'Akun Level Admin SPI';
            $roleadminspi->save();

    }
}
