<?php

use Illuminate\Database\Seeder;

class ShoutboxTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shoutbox')->delete();
        
        \DB::table('shoutbox')->insert(array (
            0 => 
            array (
                'id_shoutbox' => 1,
                'nama' => 'lukman',
                'website' => 'lukman.com',
            'pesan' => 'tes :-) aja ;-D ha ha ha <:D>',
            'tanggal' => '2009-11-02',
            'jam' => '00:00:00',
            'aktif' => 'Y',
        ),
        1 => 
        array (
            'id_shoutbox' => 2,
            'nama' => 'hakim',
            'website' => 'hakim.com',
        'pesan' => 'tes :-) aja ;-D ha ha ha <:D>
dfa
fdas
fdsa
fdasf
:-(',
            'tanggal' => '2009-11-02',
            'jam' => '00:00:00',
            'aktif' => 'Y',
        ),
        2 => 
        array (
            'id_shoutbox' => 3,
            'nama' => 'daryono',
            'website' => 'bukulokomedia.com',
            'pesan' => 'ku tes lagi<br>
tes :-) aja ;-D ha ha ha &lt;:D&gt;<br>
keren euy<br>
:-(',
            'tanggal' => '2009-11-02',
            'jam' => '13:55:00',
            'aktif' => 'Y',
        ),
        3 => 
        array (
            'id_shoutbox' => 5,
            'nama' => 'iin',
            'website' => 'uin-suka.ac.id',
            'pesan' => 'tes aja euy ;-D boi',
            'tanggal' => '2009-11-03',
            'jam' => '11:36:06',
            'aktif' => 'Y',
        ),
    ));
        
        
    }
}