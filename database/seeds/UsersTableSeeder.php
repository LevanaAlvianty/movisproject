<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'username' => 'admin',
                'role_id' => '1',
               'password' => bcrypt('admin123'),
                'nama_lengkap' => 'Administrator',
                'email' => 'admin@detik.com',
                'no_telp' => '08238923848',
                'level' => 'admin',
                'blokir' => 'N',
                'id_session' => 'lsfgrpvfrub27qfm0pqg22u5o7',
                'id_jurbagnitpus' => NULL,
                'reviewer' => NULL,
                'reviewer_keu' => NULL,
            ),
            1 => 
            array (
                'username' => 'perencanaan',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'polines',
                'email' => 'perencanaan@polines.ac.id',
                'no_telp' => '024',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => 'knv1nm280kj78u6gab0d128dv4',
                'id_jurbagnitpus' => 19,
                'reviewer' => NULL,
                'reviewer_keu' => NULL,
            ),
            2 => 
            array (
                'username' => 'bakpk',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'polines',
                'email' => 'bakpk@polines.ac.id',
                'no_telp' => '024',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => 'tl33akgbvcj0gba6a74htacmj4',
                'id_jurbagnitpus' => 0,
                'reviewer' => 'rudi',
                'reviewer_keu' => 'suyanti',
            ),
            3 => 
            array (
                'username' => 'UPTTIK',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'UPT-TIK',
                'email' => 'upttik@polinesac.id',
                'no_telp' => '024',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => 'fqf82qmf8pvh32bn6lh8cbi4f3',
                'id_jurbagnitpus' => 13,
                'reviewer' => 'rudi',
                'reviewer_keu' => 'etty',
            ),
            4 => 
            array (
                'username' => 'UPTPP',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'UPTPP',
                'email' => 'UPTpp@yahoo.com',
                'no_telp' => '123',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => 'jnml63bg5bs1dp942een1jht36',
                'id_jurbagnitpus' => 11,
                'reviewer' => NULL,
                'reviewer_keu' => NULL,
            ),
            5 => 
            array (
                'username' => 'edi',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'edi waluyo',
                'email' => 'edi@polines.ac.id',
                'no_telp' => '024',
                'level' => 'adminrencana',
                'blokir' => 'N',
                'id_session' => '1k0i7690ve7mp13ntjo9hhfj72',
                'id_jurbagnitpus' => NULL,
                'reviewer' => NULL,
                'reviewer_keu' => NULL,
            ),
            6 => 
            array (
                'username' => 'jci',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'Jurusan Teknik Sipil',
                'email' => 'jci@polines.ac.id',
                'no_telp' => '024',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => 'ia232ss0dk2rpsrtb0n2ls2pk4',
                'id_jurbagnitpus' => 1,
                'reviewer' => 'yusuf',
                'reviewer_keu' => 'suyanti',
            ),
            7 => 
            array (
                'username' => 'JME',
             'role_id' => '2',   'password' => '9c6bd054e8eebbc99bb4d655caad4b3c',
                'nama_lengkap' => 'Jurusan Teknik Mesin',
                'email' => 'jme@polines.ac.id',
                'no_telp' => '024',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => 'l8u12sc9m323gn6po77euskul0',
                'id_jurbagnitpus' => 2,
                'reviewer' => 'mardiyono',
                'reviewer_keu' => 'utami',
            ),
            8 => 
            array (
                'username' => 'jel',
             'role_id' => '2',   'password' => '3f0062caa096feac56117e460aa91bdd',
                'nama_lengkap' => 'jurusan teknik elektro',
                'email' => 'jel@polines.ac.id',
                'no_telp' => '024',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => 'pj8vf9su82pi2kfif031o0qfd1',
                'id_jurbagnitpus' => 3,
                'reviewer' => 'rochadi',
                'reviewer_keu' => 'mugiyono',
            ),
            9 => 
            array (
                'username' => 'jan',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'jurusan administrasi niaga',
                'email' => 'jan@polines.ac.id',
                'no_telp' => '024',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => 'v62a63pu7efu69u9asckhoed90',
                'id_jurbagnitpus' => 5,
                'reviewer' => 'yusuf',
                'reviewer_keu' => 'ratna',
            ),
            10 => 
            array (
                'username' => 'p3m',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'pusat penelitian dan pengabdian pada masyarakat',
                'email' => 'p3m@polines.ac.id',
                'no_telp' => '024',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => 'or58q8r4p49f8l5n71tsef07v7',
                'id_jurbagnitpus' => 6,
                'reviewer' => 'tutik',
                'reviewer_keu' => 'utami',
            ),
            11 => 
            array (
                'username' => 'ppp',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'pusat pengembangan pembelajaran',
                'email' => 'ppp@polines.ac.id',
                'no_telp' => '125',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => 'vcm8149s0r5qdi3n29uo3jt2u5',
                'id_jurbagnitpus' => 7,
                'reviewer' => 'tutik',
                'reviewer_keu' => 'utami',
            ),
            12 => 
            array (
                'username' => 'pmp',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'pusat penjaminan mutu pendidikan',
                'email' => 'pmp@poline.ac.id',
                'no_telp' => '024',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => 't5n9l8d11mnq4brr470a92l3v4',
                'id_jurbagnitpus' => 8,
                'reviewer' => 'mutmainah',
                'reviewer_keu' => 'suyanti',
            ),
            13 => 
            array (
                'username' => 'bhs',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'upt bahasa ',
                'email' => 'bhs@polines.ac.id',
                'no_telp' => '024',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => '7us7jm0dsiqj5grrd5hhnsp7l6',
                'id_jurbagnitpus' => 9,
                'reviewer' => 'rochadi',
                'reviewer_keu' => 'mugiyono',
            ),
            14 => 
            array (
                'username' => 'pus',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'upt perpustakaan',
                'email' => 'pus@polines.ac.id',
                'no_telp' => '024',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => 'o7beensiqofu4t7jq01ifki6c2',
                'id_jurbagnitpus' => 10,
                'reviewer' => 'mutmainah',
                'reviewer_keu' => 'suyanti',
            ),
            15 => 
            array (
                'username' => 'pps',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'upt perawatan & perbaikan sarana perbaikan',
                'email' => 'pps@polines.ac.id',
                'no_telp' => '024',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => 'rt3kdqsjkps9ia97h205pvcnr5',
                'id_jurbagnitpus' => 11,
                'reviewer' => 'mutmainah',
                'reviewer_keu' => 'suyanti',
            ),
            16 => 
            array (
                'username' => 'pks',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'polines',
                'email' => 'bakpk@polines.ac.id',
                'no_telp' => '024',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => '394d5184c9e483b34d416b0338c5b524',
                'id_jurbagnitpus' => 0,
                'reviewer' => 'rudi',
                'reviewer_keu' => NULL,
            ),
            17 => 
            array (
                'username' => 'kui',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'kantor urusan internasional',
                'email' => 'kui@polines.ac.id',
                'no_telp' => '024',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => 'mtjgb5tk1fmu0dad5iol5d44e1',
                'id_jurbagnitpus' => 14,
                'reviewer' => 'tutik',
                'reviewer_keu' => 'utami',
            ),
            18 => 
            array (
                'username' => 'spi',
                'role_id' => '2',
              'password' => bcrypt('spi123'),
                'nama_lengkap' => 'satuan pengawas internal',
                'email' => 'spi@polines.ac.id',
                'no_telp' => '024',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => 'pn4mtrnccbcv18bb90f4stuu70',
                'id_jurbagnitpus' => 15,
                'reviewer' => 'rudi',
                'reviewer_keu' => 'ratna',
            ),
            19 => 
            array (
                'username' => 'sen',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'senat polines',
                'email' => 'sen@polines.ac.id',
                'no_telp' => '024',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => 'jib65b2si8aolgklejvpbl7mt3',
                'id_jurbagnitpus' => 16,
                'reviewer' => 'rudi',
                'reviewer_keu' => 'etty',
            ),
            20 => 
            array (
                'username' => 'sak',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'bakpk-sub bagian akademi dan kemahasiswaan',
                'email' => 'sak@polines.ac.id',
                'no_telp' => '024',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => 'dnd4rd7akfa5ev5mf03uk17lt6',
                'id_jurbagnitpus' => 17,
                'reviewer' => 'mardiyono',
                'reviewer_keu' => 'etty',
            ),
            21 => 
            array (
                'username' => 'skj',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'bakpk sub bagian kerjasama',
                'email' => 'skj@polines.ac.id',
                'no_telp' => '024',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => 'rfnni5q4t8hnsqhffoff55i9u3',
                'id_jurbagnitpus' => 18,
                'reviewer' => 'tutik',
                'reviewer_keu' => 'ratna',
            ),
            22 => 
            array (
                'username' => 'spr',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'bakpk-sub bagian perencanaan ',
                'email' => 'spr@polines.ac.id',
                'no_telp' => '024',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => '1ncvisr4a16errrgad07me1sn6',
                'id_jurbagnitpus' => 19,
                'reviewer' => 'mutmainah',
                'reviewer_keu' => 'suyanti',
            ),
            23 => 
            array (
                'username' => 'stu',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'Budi Riyanto, S.E., M.M.',
                'email' => 'stu@polines.ac.id',
                'no_telp' => '024',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => 'a8ei1if7dp66p6as5s03gj1dm4',
                'id_jurbagnitpus' => 20,
                'reviewer' => 'mardiyono',
                'reviewer_keu' => 'etty',
            ),
            24 => 
            array (
                'username' => 'skp',
             'role_id' => '2',   'password' => '449d54a9352cf0cbbf829451b64509d7',
                'nama_lengkap' => 'BUK-Sub Bagian Kepegawaian',
                'email' => 'kepegpolines@gmail.com; sangkodok67@gmail.com',
                'no_telp' => '258',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => 'met3a4o3rtqqr650m18m1mfkh5',
                'id_jurbagnitpus' => 21,
                'reviewer' => 'mardiyono',
                'reviewer_keu' => 'mugiyono',
            ),
            25 => 
            array (
                'username' => 'sku',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'buk-sub bagian keuangan',
                'email' => 'sku@polines.ac.id',
                'no_telp' => '024',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => '4vv6cq6h9ascog9bqs0cuqt3d4',
                'id_jurbagnitpus' => 22,
                'reviewer' => 'tutik',
                'reviewer_keu' => 'mugiyono',
            ),
            26 => 
            array (
                'username' => 'phk',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'polines',
                'email' => 'bakpk@polines.ac.id',
                'no_telp' => '024',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => '87b9sc584ut6h5tikimb67ue46',
                'id_jurbagnitpus' => 0,
                'reviewer' => 'yusuf',
                'reviewer_keu' => NULL,
            ),
            27 => 
            array (
                'username' => 'pls',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'polines',
                'email' => 'bakpk@polines.ac.id',
                'no_telp' => '024',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => 'e8b0p2dcmiulph3qnts25ggqu5',
                'id_jurbagnitpus' => 0,
                'reviewer' => 'rudi',
                'reviewer_keu' => NULL,
            ),
            28 => 
            array (
                'username' => 'jak',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'jurusan akuntansi',
                'email' => 'jak@polines.ac.id',
                'no_telp' => '024',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => '6aooqnnnceufsqqd64c8f4n9d4',
                'id_jurbagnitpus' => 25,
                'reviewer' => 'rochadi',
                'reviewer_keu' => 'utami',
            ),
            29 => 
            array (
                'username' => 'uhi',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'Unit Hubungan Industri',
                'email' => 'uhi@polines.ac.id',
                'no_telp' => '024',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => '5l2tjlavbiil6osp3iqgfe42i1',
                'id_jurbagnitpus' => 26,
                'reviewer' => 'rochadi',
                'reviewer_keu' => 'mugiyono',
            ),
            30 => 
            array (
                'username' => 'sakm',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'BIdang III Kemahasiswaan',
                'email' => 'sakm@polines.ac.id',
                'no_telp' => '024',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => '3u46rl3nneavmititrlog6qmn7',
                'id_jurbagnitpus' => 29,
                'reviewer' => 'rochadi',
                'reviewer_keu' => 'suyanti',
            ),
            31 => 
            array (
                'username' => 'bid1',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'Bidang 1 Prioritas',
                'email' => 'bid1@polines.ac.id',
                'no_telp' => '024',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => '0kdi4purr8vd22tp9eat60crq0',
                'id_jurbagnitpus' => 32,
                'reviewer' => 'mutmainah',
                'reviewer_keu' => 'etty',
            ),
            32 => 
            array (
                'username' => 'bid4',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'Bidang 4 Prioritas',
                'email' => 'bid4@polines.ac.id',
                'no_telp' => '024',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => '7a889hp1irtllranddge2vkv61',
                'id_jurbagnitpus' => 27,
                'reviewer' => 'rudi',
                'reviewer_keu' => 'mugiyono',
            ),
            33 => 
            array (
                'username' => 'rudi',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'Rudi Handoyono, S.E., M.Si.',
                'email' => 'rudi@polines.ac.id',
                'no_telp' => '123',
                'level' => 'reviewer',
                'blokir' => 'N',
                'id_session' => '7s2kl9pa6cfj99vvoj30b6h205',
                'id_jurbagnitpus' => 15,
                'reviewer' => '0',
                'reviewer_keu' => NULL,
            ),
            34 => 
            array (
                'username' => 'tutik',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'Dra. Tutik Dwi K, S.E, M.Si.',
                'email' => 'polines@polines.ac.id',
                'no_telp' => '024',
                'level' => 'reviewer',
                'blokir' => 'N',
                'id_session' => 'lj1npa0kg93hd50112k4oi6rg5',
                'id_jurbagnitpus' => 15,
                'reviewer' => '0',
                'reviewer_keu' => NULL,
            ),
            35 => 
            array (
                'username' => 'yusuf',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'Dr. Yusuf Dewantoro H, S.T.,M.T.',
                'email' => 'yusuf@polines.ac.id',
                'no_telp' => '024',
                'level' => 'reviewer',
                'blokir' => 'N',
                'id_session' => 'iavp14fmr66ch8ieh2eu995r90',
                'id_jurbagnitpus' => 15,
                'reviewer' => '0',
                'reviewer_keu' => NULL,
            ),
            36 => 
            array (
                'username' => 'rochadi',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'Ir. Mochammad Tri Rochadi, M.T.',
                'email' => 'polines@polines.ac.id',
                'no_telp' => '024',
                'level' => 'reviewer',
                'blokir' => 'N',
                'id_session' => 'b9c41eoh3i5ui2g6hd08njnt27',
                'id_jurbagnitpus' => 15,
                'reviewer' => '0',
                'reviewer_keu' => NULL,
            ),
            37 => 
            array (
                'username' => 'mutmainah',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'Siti Mutmainah, S.E., M.Si.',
                'email' => 'polines@polines.ac.id',
                'no_telp' => '024',
                'level' => 'reviewer',
                'blokir' => 'N',
                'id_session' => 'kbsqj8p5e93t8fkrt1hrt1he05',
                'id_jurbagnitpus' => 15,
                'reviewer' => '0',
                'reviewer_keu' => NULL,
            ),
            38 => 
            array (
                'username' => 'mardiyono',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'Mardiyono, S.Kom. M.Sc.',
                'email' => 'mardiyono@polines.ac.id',
                'no_telp' => '024',
                'level' => 'reviewer',
                'blokir' => 'N',
                'id_session' => 'pgtoeqvg5t0375l4nugov0fof5',
                'id_jurbagnitpus' => 15,
                'reviewer' => '0',
                'reviewer_keu' => NULL,
            ),
            39 => 
            array (
                'username' => 'Rois',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'Muhammad Rois, S.E., M.Sc.',
                'email' => 'polines@polines.ac.id',
                'no_telp' => '024',
                'level' => 'reviewer',
                'blokir' => 'N',
                'id_session' => 'oipohpu1kae76n4um7n0na7bn2',
                'id_jurbagnitpus' => 15,
                'reviewer' => '0',
                'reviewer_keu' => NULL,
            ),
            40 => 
            array (
                'username' => 'lsp',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'LSP ',
                'email' => 'lsp@polines.ac.id',
                'no_telp' => '024',
                'level' => 'user',
                'blokir' => 'N',
                'id_session' => 'u8tcke2nhn4p76j679kalbj0n4',
                'id_jurbagnitpus' => 28,
                'reviewer' => 'rudi',
                'reviewer_keu' => 'ratna',
            ),
            41 => 
            array (
                'username' => 'utami',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'Utami S',
                'email' => 'polines@polines.ac.id',
                'no_telp' => '024',
                'level' => 'reviewkeu',
                'blokir' => 'N',
                'id_session' => 'p62bu8784mt0gg1ea3u8ni1gg4',
                'id_jurbagnitpus' => 15,
                'reviewer' => '0',
                'reviewer_keu' => NULL,
            ),
            42 => 
            array (
                'username' => 'reviewer',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'reviewer spi',
                'email' => 'reviewer@polines.ac.id',
                'no_telp' => '024',
                'level' => 'adminrencana',
                'blokir' => 'N',
                'id_session' => 'au74c2ie9uu1uu59roo4eacri2',
                'id_jurbagnitpus' => 33,
                'reviewer' => '0',
                'reviewer_keu' => NULL,
            ),
            43 => 
            array (
                'username' => 'keuangan',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'Supantp, S.E.,M.Si.',
                'email' => 'edi@polines.ac.id',
                'no_telp' => '024',
                'level' => 'adminkeuangan',
                'blokir' => 'N',
                'id_session' => '1usle114t2ue23rhkvk754dvl2',
                'id_jurbagnitpus' => NULL,
                'reviewer' => NULL,
                'reviewer_keu' => NULL,
            ),
            44 => 
            array (
                'username' => 'adminspi',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'Admin SPI',
                'email' => 'adminspi@polines.ac.id',
                'no_telp' => '024',
                'level' => 'adminspi',
                'blokir' => 'N',
                'id_session' => 'fi59sr2me7p7gsnne1iqab7r40',
                'id_jurbagnitpus' => 33,
                'reviewer' => '0',
                'reviewer_keu' => NULL,
            ),
            45 => 
            array (
                'username' => 'direktur',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'Ir. Supriyadi, M.T.',
                'email' => 'direktur@polines.ac.id',
                'no_telp' => '024',
                'level' => 'pimpinan',
                'blokir' => 'N',
                'id_session' => '4jcf00tae8n9lpf28tcesne723',
                'id_jurbagnitpus' => 34,
                'reviewer' => '0',
                'reviewer_keu' => NULL,
            ),
            46 => 
            array (
                'username' => 'adminpsi',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'Admin Perencanaan dan Sistem Informasi',
                'email' => 'psi@polines.ac.id',
                'no_telp' => '024',
                'level' => 'adminrencana',
                'blokir' => 'N',
                'id_session' => '4i7mkatvsfap01ruhv0n6r6s22',
                'id_jurbagnitpus' => NULL,
                'reviewer' => '',
                'reviewer_keu' => NULL,
            ),
            47 => 
            array (
                'username' => 'adminkeuangan',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'Supanto, S.E., M.Si.',
                'email' => 'supanto@gmail.com',
                'no_telp' => '',
                'level' => 'adminkeuangan',
                'blokir' => 'N',
                'id_session' => 'kd1ttq96pvcrkji54fh3guepp2',
                'id_jurbagnitpus' => NULL,
                'reviewer' => NULL,
                'reviewer_keu' => NULL,
            ),
            48 => 
            array (
                'username' => 'adminsbu',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'Admin SBU',
                'email' => 'adminsbu@polines.ac.id',
                'no_telp' => '024',
                'level' => 'adminsbu',
                'blokir' => 'N',
                'id_session' => '3tm2bd8bdfggem8j5esokp92q5',
                'id_jurbagnitpus' => 22,
                'reviewer' => '0',
                'reviewer_keu' => NULL,
            ),
            49 => 
            array (
                'username' => 'suyanti',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'suyanti',
                'email' => 'suyanti@polines.ac.id',
                'no_telp' => '024',
                'level' => 'reviewkeu',
                'blokir' => 'N',
                'id_session' => 'b9nm2uiji6crjtpqpqduk12b76',
                'id_jurbagnitpus' => 22,
                'reviewer' => '0',
                'reviewer_keu' => NULL,
            ),
            50 => 
            array (
                'username' => 'ratna',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'Rr. Ratna N',
                'email' => 'ratna@polines.ac.id',
                'no_telp' => '024',
                'level' => 'reviewkeu',
                'blokir' => 'N',
                'id_session' => '7hl9s66ha82p41an7tgc9q83b0',
                'id_jurbagnitpus' => 22,
                'reviewer' => '0',
                'reviewer_keu' => NULL,
            ),
            51 => 
            array (
                'username' => 'etty',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'etty P',
                'email' => 'etty@polines.ac.id',
                'no_telp' => '024',
                'level' => 'reviewkeu',
                'blokir' => 'N',
                'id_session' => 'g7p9jg6hvhstflid79ksp2h496',
                'id_jurbagnitpus' => 22,
                'reviewer' => '0',
                'reviewer_keu' => NULL,
            ),
            52 => 
            array (
                'username' => 'mugiyono',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'mugiyono',
                'email' => 'mugiyono@polines.ac.id',
                'no_telp' => '024',
                'level' => 'reviewkeu',
                'blokir' => 'N',
                'id_session' => 'ebl9stoccajm0hft1tlqb55jv1',
                'id_jurbagnitpus' => 22,
                'reviewer' => '0',
                'reviewer_keu' => NULL,
            ),
            53 => 
            array (
                'username' => 'bid2',
             'role_id' => '2',   'password' => '394d5184c9e483b34d416b0338c5b524',
                'nama_lengkap' => 'Wakil Direktur Bidang Umum dan Keuangan',
                'email' => 'bid2@polines.ac.id',
                'no_telp' => '024',
                'level' => 'pimpinan',
                'blokir' => 'N',
                'id_session' => 'u0qjpedl3nhirs1uktqmuho9m0',
                'id_jurbagnitpus' => 15,
                'reviewer' => 'rudi',
                'reviewer_keu' => NULL,
            ),
        ));
        
        
    }
}