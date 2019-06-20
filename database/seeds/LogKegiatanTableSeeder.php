<?php

use Illuminate\Database\Seeder;

class LogKegiatanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('log_kegiatan')->delete();
        
        \DB::table('log_kegiatan')->insert(array (
            0 => 
            array (
                'id_log' => 1,
                'id_user' => '0',
                'id_kegiatan' => NULL,
                'action' => '1',
                'tgl_input' => '2019-03-21 09:30:51',
            ),
            1 => 
            array (
                'id_log' => 2,
                'id_user' => 'UPTTIK',
                'id_kegiatan' => NULL,
                'action' => '1',
                'tgl_input' => '2019-03-21 09:33:32',
            ),
            2 => 
            array (
                'id_log' => 3,
                'id_user' => 'Rois',
                'id_kegiatan' => NULL,
                'action' => '3',
                'tgl_input' => '2019-03-21 09:51:12',
            ),
            3 => 
            array (
                'id_log' => 4,
                'id_user' => 'Rois',
                'id_kegiatan' => NULL,
                'action' => '6',
                'tgl_input' => '2019-03-21 09:51:12',
            ),
            4 => 
            array (
                'id_log' => 5,
                'id_user' => 'utami',
                'id_kegiatan' => NULL,
                'action' => '8',
                'tgl_input' => '2019-03-21 09:53:26',
            ),
            5 => 
            array (
                'id_log' => 6,
                'id_user' => 'direktur',
                'id_kegiatan' => NULL,
                'action' => '1',
                'tgl_input' => '2019-03-21 09:58:32',
            ),
            6 => 
            array (
                'id_log' => 7,
                'id_user' => 'direktur',
                'id_kegiatan' => 0,
                'action' => '2',
                'tgl_input' => '2019-03-21 10:02:21',
            ),
            7 => 
            array (
                'id_log' => 8,
                'id_user' => 'direktur',
                'id_kegiatan' => 1023,
                'action' => '3',
                'tgl_input' => '2019-03-21 10:03:37',
            ),
            8 => 
            array (
                'id_log' => 9,
                'id_user' => 'UPTTIK',
                'id_kegiatan' => NULL,
                'action' => '1',
                'tgl_input' => '2019-03-21 10:09:49',
            ),
            9 => 
            array (
                'id_log' => 10,
                'id_user' => 'Rois',
                'id_kegiatan' => 1023,
                'action' => '2',
                'tgl_input' => '2019-03-21 10:10:54',
            ),
            10 => 
            array (
                'id_log' => 11,
                'id_user' => 'UPTTIK',
                'id_kegiatan' => NULL,
                'action' => '1',
                'tgl_input' => '2019-03-21 10:11:15',
            ),
            11 => 
            array (
                'id_log' => 12,
                'id_user' => 'Rois',
                'id_kegiatan' => 1023,
                'action' => '3',
                'tgl_input' => '2019-03-21 10:11:50',
            ),
            12 => 
            array (
                'id_log' => 13,
                'id_user' => 'Rois',
                'id_kegiatan' => 1023,
                'action' => '6',
                'tgl_input' => '2019-03-21 10:11:50',
            ),
            13 => 
            array (
                'id_log' => 14,
                'id_user' => 'utami',
                'id_kegiatan' => NULL,
                'action' => '7',
                'tgl_input' => '2019-03-21 10:13:53',
            ),
            14 => 
            array (
                'id_log' => 15,
                'id_user' => 'utami',
                'id_kegiatan' => 1023,
                'action' => '8',
                'tgl_input' => '2019-03-21 10:15:01',
            ),
            15 => 
            array (
                'id_log' => 16,
                'id_user' => 'UPTTIK',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-03-21 11:37:37',
            ),
            16 => 
            array (
                'id_log' => 17,
                'id_user' => 'Rois',
                'id_kegiatan' => 1024,
                'action' => '3',
                'tgl_input' => '2019-03-21 11:40:36',
            ),
            17 => 
            array (
                'id_log' => 18,
                'id_user' => 'Rois',
                'id_kegiatan' => 1024,
                'action' => '6',
                'tgl_input' => '2019-03-21 11:40:36',
            ),
            18 => 
            array (
                'id_log' => 19,
                'id_user' => 'utami',
                'id_kegiatan' => 1024,
                'action' => '8',
                'tgl_input' => '2019-03-21 11:42:00',
            ),
            19 => 
            array (
                'id_log' => 20,
                'id_user' => 'direktur',
                'id_kegiatan' => 1024,
                'action' => '1',
                'tgl_input' => '2019-03-21 11:43:45',
            ),
            20 => 
            array (
                'id_log' => 21,
                'id_user' => 'UPTTIK',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-03-22 16:11:59',
            ),
            21 => 
            array (
                'id_log' => 22,
                'id_user' => 'Rois',
                'id_kegiatan' => 1025,
                'action' => '2',
                'tgl_input' => '2019-03-22 16:14:12',
            ),
            22 => 
            array (
                'id_log' => 23,
                'id_user' => 'UPTTIK',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-03-22 16:14:46',
            ),
            23 => 
            array (
                'id_log' => 24,
                'id_user' => 'Rois',
                'id_kegiatan' => 1025,
                'action' => '3',
                'tgl_input' => '2019-03-22 16:15:27',
            ),
            24 => 
            array (
                'id_log' => 25,
                'id_user' => 'Rois',
                'id_kegiatan' => 1025,
                'action' => '6',
                'tgl_input' => '2019-03-22 16:15:27',
            ),
            25 => 
            array (
                'id_log' => 26,
                'id_user' => 'utami',
                'id_kegiatan' => 1025,
                'action' => '7',
                'tgl_input' => '2019-03-22 16:17:13',
            ),
            26 => 
            array (
                'id_log' => 27,
                'id_user' => 'UPTTIK',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-03-22 16:18:03',
            ),
            27 => 
            array (
                'id_log' => 28,
                'id_user' => 'utami',
                'id_kegiatan' => 1025,
                'action' => '8',
                'tgl_input' => '2019-03-22 16:20:37',
            ),
            28 => 
            array (
                'id_log' => 29,
                'id_user' => 'direktur',
                'id_kegiatan' => 1025,
                'action' => '1',
                'tgl_input' => '2019-03-22 16:22:11',
            ),
            29 => 
            array (
                'id_log' => 30,
                'id_user' => 'UPTTIK',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-03-22 16:26:08',
            ),
            30 => 
            array (
                'id_log' => 31,
                'id_user' => 'Rois',
                'id_kegiatan' => 1001,
                'action' => '2',
                'tgl_input' => '2019-03-24 19:42:01',
            ),
            31 => 
            array (
                'id_log' => 32,
                'id_user' => 'UPTTIK',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-03-24 19:59:11',
            ),
            32 => 
            array (
                'id_log' => 33,
                'id_user' => 'Rois',
                'id_kegiatan' => 1027,
                'action' => '2',
                'tgl_input' => '2019-03-24 19:59:59',
            ),
            33 => 
            array (
                'id_log' => 34,
                'id_user' => 'UPTTIK',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-03-25 11:42:28',
            ),
            34 => 
            array (
                'id_log' => 35,
                'id_user' => 'rudi',
                'id_kegiatan' => 1028,
                'action' => '2',
                'tgl_input' => '2019-03-25 13:58:28',
            ),
            35 => 
            array (
                'id_log' => 36,
                'id_user' => 'UPTTIK',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-03-25 14:00:44',
            ),
            36 => 
            array (
                'id_log' => 37,
                'id_user' => 'rudi',
                'id_kegiatan' => 1028,
                'action' => '2',
                'tgl_input' => '2019-03-25 14:01:17',
            ),
            37 => 
            array (
                'id_log' => 38,
                'id_user' => 'UPTTIK',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-03-25 14:03:08',
            ),
            38 => 
            array (
                'id_log' => 39,
                'id_user' => 'rudi',
                'id_kegiatan' => 1028,
                'action' => '3',
                'tgl_input' => '2019-03-25 14:05:07',
            ),
            39 => 
            array (
                'id_log' => 40,
                'id_user' => 'rudi',
                'id_kegiatan' => 1028,
                'action' => '6',
                'tgl_input' => '2019-03-25 14:05:07',
            ),
            40 => 
            array (
                'id_log' => 41,
                'id_user' => 'UPTTIK',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-03-25 14:18:35',
            ),
            41 => 
            array (
                'id_log' => 42,
                'id_user' => 'utami',
                'id_kegiatan' => 1028,
                'action' => '7',
                'tgl_input' => '2019-03-25 15:53:35',
            ),
            42 => 
            array (
                'id_log' => 43,
                'id_user' => 'UPTTIK',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-03-25 16:04:00',
            ),
            43 => 
            array (
                'id_log' => 44,
                'id_user' => 'utami',
                'id_kegiatan' => 1028,
                'action' => '8',
                'tgl_input' => '2019-03-25 16:05:19',
            ),
            44 => 
            array (
                'id_log' => 45,
                'id_user' => 'spr',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-03-26 11:51:12',
            ),
            45 => 
            array (
                'id_log' => 46,
                'id_user' => 'spr',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-03-26 16:14:43',
            ),
            46 => 
            array (
                'id_log' => 47,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1029,
                'action' => '2',
                'tgl_input' => '2019-03-27 12:42:46',
            ),
            47 => 
            array (
                'id_log' => 48,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1035,
                'action' => '2',
                'tgl_input' => '2019-03-27 15:18:21',
            ),
            48 => 
            array (
                'id_log' => 49,
                'id_user' => 'spr',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-03-28 14:30:03',
            ),
            49 => 
            array (
                'id_log' => 50,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-03-31 21:25:19',
            ),
            50 => 
            array (
                'id_log' => 51,
                'id_user' => 'ppp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-03-31 23:54:12',
            ),
            51 => 
            array (
                'id_log' => 52,
                'id_user' => 'ppp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-03-31 23:54:19',
            ),
            52 => 
            array (
                'id_log' => 53,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 09:02:44',
            ),
            53 => 
            array (
                'id_log' => 54,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 09:11:32',
            ),
            54 => 
            array (
                'id_log' => 55,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 09:22:26',
            ),
            55 => 
            array (
                'id_log' => 56,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 09:29:40',
            ),
            56 => 
            array (
                'id_log' => 57,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1095,
                'action' => '2',
                'tgl_input' => '2019-04-01 09:49:10',
            ),
            57 => 
            array (
                'id_log' => 58,
                'id_user' => 'spr',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 10:07:26',
            ),
            58 => 
            array (
                'id_log' => 59,
                'id_user' => 'sku',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 10:12:21',
            ),
            59 => 
            array (
                'id_log' => 60,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 11:33:57',
            ),
            60 => 
            array (
                'id_log' => 61,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 11:34:28',
            ),
            61 => 
            array (
                'id_log' => 62,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 11:34:38',
            ),
            62 => 
            array (
                'id_log' => 63,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 12:25:05',
            ),
            63 => 
            array (
                'id_log' => 64,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 12:25:19',
            ),
            64 => 
            array (
                'id_log' => 65,
                'id_user' => 'UPTTIK',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 14:56:27',
            ),
            65 => 
            array (
                'id_log' => 66,
                'id_user' => 'skj',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 15:37:42',
            ),
            66 => 
            array (
                'id_log' => 67,
                'id_user' => 'skj',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 15:37:47',
            ),
            67 => 
            array (
                'id_log' => 68,
                'id_user' => 'skj',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 15:37:52',
            ),
            68 => 
            array (
                'id_log' => 69,
                'id_user' => 'skj',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 15:37:56',
            ),
            69 => 
            array (
                'id_log' => 70,
                'id_user' => 'skj',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 15:38:05',
            ),
            70 => 
            array (
                'id_log' => 71,
                'id_user' => 'skj',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 15:38:12',
            ),
            71 => 
            array (
                'id_log' => 72,
                'id_user' => 'skj',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 15:38:16',
            ),
            72 => 
            array (
                'id_log' => 73,
                'id_user' => 'skj',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 15:38:21',
            ),
            73 => 
            array (
                'id_log' => 74,
                'id_user' => 'UPTTIK',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 15:40:57',
            ),
            74 => 
            array (
                'id_log' => 75,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1093,
                'action' => '9',
                'tgl_input' => '2019-04-01 15:55:39',
            ),
            75 => 
            array (
                'id_log' => 76,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1093,
                'action' => '9',
                'tgl_input' => '2019-04-01 15:57:53',
            ),
            76 => 
            array (
                'id_log' => 77,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:05:25',
            ),
            77 => 
            array (
                'id_log' => 78,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:05:48',
            ),
            78 => 
            array (
                'id_log' => 79,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:06:14',
            ),
            79 => 
            array (
                'id_log' => 80,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:06:48',
            ),
            80 => 
            array (
                'id_log' => 81,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:07:07',
            ),
            81 => 
            array (
                'id_log' => 82,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:07:29',
            ),
            82 => 
            array (
                'id_log' => 83,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:07:53',
            ),
            83 => 
            array (
                'id_log' => 84,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:08:30',
            ),
            84 => 
            array (
                'id_log' => 85,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:09:01',
            ),
            85 => 
            array (
                'id_log' => 86,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:30:46',
            ),
            86 => 
            array (
                'id_log' => 87,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:31:11',
            ),
            87 => 
            array (
                'id_log' => 88,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:31:23',
            ),
            88 => 
            array (
                'id_log' => 89,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:31:56',
            ),
            89 => 
            array (
                'id_log' => 90,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:32:39',
            ),
            90 => 
            array (
                'id_log' => 91,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:32:58',
            ),
            91 => 
            array (
                'id_log' => 92,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:33:12',
            ),
            92 => 
            array (
                'id_log' => 93,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:33:44',
            ),
            93 => 
            array (
                'id_log' => 94,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:34:03',
            ),
            94 => 
            array (
                'id_log' => 95,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:34:47',
            ),
            95 => 
            array (
                'id_log' => 96,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:35:25',
            ),
            96 => 
            array (
                'id_log' => 97,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:36:09',
            ),
            97 => 
            array (
                'id_log' => 98,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:36:29',
            ),
            98 => 
            array (
                'id_log' => 99,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:36:51',
            ),
            99 => 
            array (
                'id_log' => 100,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:37:16',
            ),
            100 => 
            array (
                'id_log' => 101,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:37:41',
            ),
            101 => 
            array (
                'id_log' => 102,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:40:42',
            ),
            102 => 
            array (
                'id_log' => 103,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:41:06',
            ),
            103 => 
            array (
                'id_log' => 104,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:41:29',
            ),
            104 => 
            array (
                'id_log' => 105,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:41:53',
            ),
            105 => 
            array (
                'id_log' => 106,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:42:17',
            ),
            106 => 
            array (
                'id_log' => 107,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:42:35',
            ),
            107 => 
            array (
                'id_log' => 108,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:43:01',
            ),
            108 => 
            array (
                'id_log' => 109,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:43:23',
            ),
            109 => 
            array (
                'id_log' => 110,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:43:41',
            ),
            110 => 
            array (
                'id_log' => 111,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:44:03',
            ),
            111 => 
            array (
                'id_log' => 112,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:45:13',
            ),
            112 => 
            array (
                'id_log' => 113,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 16:45:32',
            ),
            113 => 
            array (
                'id_log' => 114,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 19:16:38',
            ),
            114 => 
            array (
                'id_log' => 115,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 21:22:04',
            ),
            115 => 
            array (
                'id_log' => 116,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-01 23:52:34',
            ),
            116 => 
            array (
                'id_log' => 117,
                'id_user' => 'ppp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 03:38:30',
            ),
            117 => 
            array (
                'id_log' => 118,
                'id_user' => 'ppp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 05:27:33',
            ),
            118 => 
            array (
                'id_log' => 119,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 07:50:23',
            ),
            119 => 
            array (
                'id_log' => 120,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 08:41:48',
            ),
            120 => 
            array (
                'id_log' => 121,
                'id_user' => 'sku',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 09:44:28',
            ),
            121 => 
            array (
                'id_log' => 122,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 09:55:34',
            ),
            122 => 
            array (
                'id_log' => 123,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1079,
                'action' => '2',
                'tgl_input' => '2019-04-02 10:02:22',
            ),
            123 => 
            array (
                'id_log' => 124,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1076,
                'action' => '2',
                'tgl_input' => '2019-04-02 10:14:24',
            ),
            124 => 
            array (
                'id_log' => 125,
                'id_user' => 'ratna',
                'id_kegiatan' => 1038,
                'action' => '7',
                'tgl_input' => '2019-04-02 10:22:45',
            ),
            125 => 
            array (
                'id_log' => 126,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1094,
                'action' => '7',
                'tgl_input' => '2019-04-02 10:28:15',
            ),
            126 => 
            array (
                'id_log' => 127,
                'id_user' => 'ppp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 10:30:07',
            ),
            127 => 
            array (
                'id_log' => 128,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 10:37:08',
            ),
            128 => 
            array (
                'id_log' => 129,
                'id_user' => 'ppp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 10:44:42',
            ),
            129 => 
            array (
                'id_log' => 130,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 10:47:09',
            ),
            130 => 
            array (
                'id_log' => 131,
                'id_user' => 'ratna',
                'id_kegiatan' => 1036,
                'action' => '7',
                'tgl_input' => '2019-04-02 11:04:14',
            ),
            131 => 
            array (
                'id_log' => 132,
                'id_user' => 'ratna',
                'id_kegiatan' => 1032,
                'action' => '7',
                'tgl_input' => '2019-04-02 11:34:37',
            ),
            132 => 
            array (
                'id_log' => 133,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 11:40:52',
            ),
            133 => 
            array (
                'id_log' => 134,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 11:41:34',
            ),
            134 => 
            array (
                'id_log' => 135,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 11:42:14',
            ),
            135 => 
            array (
                'id_log' => 136,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 11:42:58',
            ),
            136 => 
            array (
                'id_log' => 137,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 11:43:15',
            ),
            137 => 
            array (
                'id_log' => 138,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 11:43:31',
            ),
            138 => 
            array (
                'id_log' => 139,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 11:45:25',
            ),
            139 => 
            array (
                'id_log' => 140,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 11:45:38',
            ),
            140 => 
            array (
                'id_log' => 141,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 12:17:26',
            ),
            141 => 
            array (
                'id_log' => 142,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 12:17:41',
            ),
            142 => 
            array (
                'id_log' => 143,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 12:17:51',
            ),
            143 => 
            array (
                'id_log' => 144,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 12:18:11',
            ),
            144 => 
            array (
                'id_log' => 145,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 12:33:53',
            ),
            145 => 
            array (
                'id_log' => 146,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 12:34:21',
            ),
            146 => 
            array (
                'id_log' => 147,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 12:35:10',
            ),
            147 => 
            array (
                'id_log' => 148,
                'id_user' => 'spi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 12:49:29',
            ),
            148 => 
            array (
                'id_log' => 149,
                'id_user' => 'rudi',
                'id_kegiatan' => 1075,
                'action' => '2',
                'tgl_input' => '2019-04-02 12:59:59',
            ),
            149 => 
            array (
                'id_log' => 150,
                'id_user' => 'spi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 13:10:28',
            ),
            150 => 
            array (
                'id_log' => 151,
                'id_user' => 'rudi',
                'id_kegiatan' => 1062,
                'action' => '2',
                'tgl_input' => '2019-04-02 13:41:20',
            ),
            151 => 
            array (
                'id_log' => 152,
                'id_user' => 'spi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 13:41:55',
            ),
            152 => 
            array (
                'id_log' => 153,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 13:44:12',
            ),
            153 => 
            array (
                'id_log' => 154,
                'id_user' => 'spi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 14:01:32',
            ),
            154 => 
            array (
                'id_log' => 155,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 14:05:50',
            ),
            155 => 
            array (
                'id_log' => 156,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 14:05:56',
            ),
            156 => 
            array (
                'id_log' => 157,
                'id_user' => 'rudi',
                'id_kegiatan' => 1136,
                'action' => '3',
                'tgl_input' => '2019-04-02 14:16:26',
            ),
            157 => 
            array (
                'id_log' => 158,
                'id_user' => 'rudi',
                'id_kegiatan' => 1136,
                'action' => '6',
                'tgl_input' => '2019-04-02 14:16:26',
            ),
            158 => 
            array (
                'id_log' => 159,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1094,
                'action' => '7',
                'tgl_input' => '2019-04-02 14:25:17',
            ),
            159 => 
            array (
                'id_log' => 160,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 14:28:13',
            ),
            160 => 
            array (
                'id_log' => 161,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 14:29:58',
            ),
            161 => 
            array (
                'id_log' => 162,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 14:30:08',
            ),
            162 => 
            array (
                'id_log' => 163,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 14:30:48',
            ),
            163 => 
            array (
                'id_log' => 164,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1097,
                'action' => '2',
                'tgl_input' => '2019-04-02 14:37:35',
            ),
            164 => 
            array (
                'id_log' => 165,
                'id_user' => 'skj',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 14:38:50',
            ),
            165 => 
            array (
                'id_log' => 166,
                'id_user' => 'skj',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 14:38:58',
            ),
            166 => 
            array (
                'id_log' => 167,
                'id_user' => 'skj',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 14:39:05',
            ),
            167 => 
            array (
                'id_log' => 168,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1096,
                'action' => '2',
                'tgl_input' => '2019-04-02 14:58:07',
            ),
            168 => 
            array (
                'id_log' => 169,
                'id_user' => 'sku',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 14:59:48',
            ),
            169 => 
            array (
                'id_log' => 170,
                'id_user' => 'sku',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 15:00:00',
            ),
            170 => 
            array (
                'id_log' => 171,
                'id_user' => 'sku',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 15:00:16',
            ),
            171 => 
            array (
                'id_log' => 172,
                'id_user' => 'sku',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 15:00:23',
            ),
            172 => 
            array (
                'id_log' => 173,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1096,
                'action' => '7',
                'tgl_input' => '2019-04-02 15:01:50',
            ),
            173 => 
            array (
                'id_log' => 174,
                'id_user' => 'uhi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 15:04:19',
            ),
            174 => 
            array (
                'id_log' => 175,
                'id_user' => 'uhi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 15:04:28',
            ),
            175 => 
            array (
                'id_log' => 176,
                'id_user' => 'uhi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 15:04:37',
            ),
            176 => 
            array (
                'id_log' => 177,
                'id_user' => 'uhi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 15:04:40',
            ),
            177 => 
            array (
                'id_log' => 178,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1094,
                'action' => '2',
                'tgl_input' => '2019-04-02 15:20:28',
            ),
            178 => 
            array (
                'id_log' => 179,
                'id_user' => 'spi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 15:23:27',
            ),
            179 => 
            array (
                'id_log' => 180,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 15:33:22',
            ),
            180 => 
            array (
                'id_log' => 181,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 15:33:44',
            ),
            181 => 
            array (
                'id_log' => 182,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 15:33:54',
            ),
            182 => 
            array (
                'id_log' => 183,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 15:34:00',
            ),
            183 => 
            array (
                'id_log' => 184,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 15:34:07',
            ),
            184 => 
            array (
                'id_log' => 185,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 15:34:13',
            ),
            185 => 
            array (
                'id_log' => 186,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 15:34:19',
            ),
            186 => 
            array (
                'id_log' => 187,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 15:34:25',
            ),
            187 => 
            array (
                'id_log' => 188,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 15:34:30',
            ),
            188 => 
            array (
                'id_log' => 189,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 15:34:36',
            ),
            189 => 
            array (
                'id_log' => 190,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 15:34:46',
            ),
            190 => 
            array (
                'id_log' => 191,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 15:34:56',
            ),
            191 => 
            array (
                'id_log' => 192,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1093,
                'action' => '2',
                'tgl_input' => '2019-04-02 15:37:10',
            ),
            192 => 
            array (
                'id_log' => 193,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1092,
                'action' => '3',
                'tgl_input' => '2019-04-02 15:44:25',
            ),
            193 => 
            array (
                'id_log' => 194,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1092,
                'action' => '6',
                'tgl_input' => '2019-04-02 15:44:25',
            ),
            194 => 
            array (
                'id_log' => 195,
                'id_user' => 'spi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 15:53:06',
            ),
            195 => 
            array (
                'id_log' => 196,
                'id_user' => 'spi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 15:54:02',
            ),
            196 => 
            array (
                'id_log' => 197,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1093,
                'action' => '8',
                'tgl_input' => '2019-04-02 16:09:49',
            ),
            197 => 
            array (
                'id_log' => 198,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1093,
                'action' => '11',
                'tgl_input' => '2019-04-02 16:09:49',
            ),
            198 => 
            array (
                'id_log' => 199,
                'id_user' => 'ppp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 16:17:49',
            ),
            199 => 
            array (
                'id_log' => 200,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 16:33:17',
            ),
            200 => 
            array (
                'id_log' => 201,
                'id_user' => 'spr',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 16:35:32',
            ),
            201 => 
            array (
                'id_log' => 202,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1090,
                'action' => '2',
                'tgl_input' => '2019-04-02 16:39:15',
            ),
            202 => 
            array (
                'id_log' => 203,
                'id_user' => 'spr',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 16:48:38',
            ),
            203 => 
            array (
                'id_log' => 204,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1089,
                'action' => '2',
                'tgl_input' => '2019-04-02 16:53:35',
            ),
            204 => 
            array (
                'id_log' => 205,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1088,
                'action' => '2',
                'tgl_input' => '2019-04-02 16:58:41',
            ),
            205 => 
            array (
                'id_log' => 206,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 17:33:16',
            ),
            206 => 
            array (
                'id_log' => 207,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 17:33:35',
            ),
            207 => 
            array (
                'id_log' => 208,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 17:33:54',
            ),
            208 => 
            array (
                'id_log' => 209,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 17:34:11',
            ),
            209 => 
            array (
                'id_log' => 210,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 17:34:23',
            ),
            210 => 
            array (
                'id_log' => 211,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 17:34:24',
            ),
            211 => 
            array (
                'id_log' => 212,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 17:34:38',
            ),
            212 => 
            array (
                'id_log' => 213,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 17:34:39',
            ),
            213 => 
            array (
                'id_log' => 214,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 17:34:55',
            ),
            214 => 
            array (
                'id_log' => 215,
                'id_user' => 'ppp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 17:36:21',
            ),
            215 => 
            array (
                'id_log' => 216,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 19:57:08',
            ),
            216 => 
            array (
                'id_log' => 217,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 21:44:27',
            ),
            217 => 
            array (
                'id_log' => 218,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 21:46:43',
            ),
            218 => 
            array (
                'id_log' => 219,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 21:46:51',
            ),
            219 => 
            array (
                'id_log' => 220,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 21:46:58',
            ),
            220 => 
            array (
                'id_log' => 221,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 22:06:27',
            ),
            221 => 
            array (
                'id_log' => 222,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 22:07:43',
            ),
            222 => 
            array (
                'id_log' => 223,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 22:12:15',
            ),
            223 => 
            array (
                'id_log' => 224,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 22:14:21',
            ),
            224 => 
            array (
                'id_log' => 225,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 22:26:14',
            ),
            225 => 
            array (
                'id_log' => 226,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 22:32:18',
            ),
            226 => 
            array (
                'id_log' => 227,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 22:37:07',
            ),
            227 => 
            array (
                'id_log' => 228,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 22:43:49',
            ),
            228 => 
            array (
                'id_log' => 229,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 22:51:19',
            ),
            229 => 
            array (
                'id_log' => 230,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 22:56:28',
            ),
            230 => 
            array (
                'id_log' => 231,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 23:12:00',
            ),
            231 => 
            array (
                'id_log' => 232,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 23:29:00',
            ),
            232 => 
            array (
                'id_log' => 233,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 23:43:03',
            ),
            233 => 
            array (
                'id_log' => 234,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 23:51:18',
            ),
            234 => 
            array (
                'id_log' => 235,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-02 23:55:20',
            ),
            235 => 
            array (
                'id_log' => 236,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 02:17:33',
            ),
            236 => 
            array (
                'id_log' => 237,
                'id_user' => 'rudi',
                'id_kegiatan' => 1054,
                'action' => '2',
                'tgl_input' => '2019-04-03 05:47:03',
            ),
            237 => 
            array (
                'id_log' => 238,
                'id_user' => 'rudi',
                'id_kegiatan' => 1051,
                'action' => '2',
                'tgl_input' => '2019-04-03 06:06:30',
            ),
            238 => 
            array (
                'id_log' => 239,
                'id_user' => 'rudi',
                'id_kegiatan' => 1196,
                'action' => '2',
                'tgl_input' => '2019-04-03 06:21:55',
            ),
            239 => 
            array (
                'id_log' => 240,
                'id_user' => 'spi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 06:45:54',
            ),
            240 => 
            array (
                'id_log' => 241,
                'id_user' => 'rudi',
                'id_kegiatan' => 1196,
                'action' => '3',
                'tgl_input' => '2019-04-03 06:47:42',
            ),
            241 => 
            array (
                'id_log' => 242,
                'id_user' => 'rudi',
                'id_kegiatan' => 1196,
                'action' => '6',
                'tgl_input' => '2019-04-03 06:47:42',
            ),
            242 => 
            array (
                'id_log' => 243,
                'id_user' => 'rudi',
                'id_kegiatan' => 1179,
                'action' => '2',
                'tgl_input' => '2019-04-03 07:03:24',
            ),
            243 => 
            array (
                'id_log' => 244,
                'id_user' => 'spi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 07:50:58',
            ),
            244 => 
            array (
                'id_log' => 245,
                'id_user' => 'rudi',
                'id_kegiatan' => 1179,
                'action' => '3',
                'tgl_input' => '2019-04-03 07:53:01',
            ),
            245 => 
            array (
                'id_log' => 246,
                'id_user' => 'rudi',
                'id_kegiatan' => 1179,
                'action' => '6',
                'tgl_input' => '2019-04-03 07:53:01',
            ),
            246 => 
            array (
                'id_log' => 247,
                'id_user' => 'rudi',
                'id_kegiatan' => 1189,
                'action' => '2',
                'tgl_input' => '2019-04-03 07:58:59',
            ),
            247 => 
            array (
                'id_log' => 248,
                'id_user' => 'spi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 08:09:21',
            ),
            248 => 
            array (
                'id_log' => 249,
                'id_user' => 'rudi',
                'id_kegiatan' => 1185,
                'action' => '2',
                'tgl_input' => '2019-04-03 08:11:29',
            ),
            249 => 
            array (
                'id_log' => 250,
                'id_user' => 'spi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 08:16:16',
            ),
            250 => 
            array (
                'id_log' => 251,
                'id_user' => 'spi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 08:16:34',
            ),
            251 => 
            array (
                'id_log' => 252,
                'id_user' => 'rudi',
                'id_kegiatan' => 1189,
                'action' => '3',
                'tgl_input' => '2019-04-03 08:17:54',
            ),
            252 => 
            array (
                'id_log' => 253,
                'id_user' => 'rudi',
                'id_kegiatan' => 1189,
                'action' => '6',
                'tgl_input' => '2019-04-03 08:17:54',
            ),
            253 => 
            array (
                'id_log' => 254,
                'id_user' => 'rudi',
                'id_kegiatan' => 1185,
                'action' => '3',
                'tgl_input' => '2019-04-03 08:18:39',
            ),
            254 => 
            array (
                'id_log' => 255,
                'id_user' => 'rudi',
                'id_kegiatan' => 1185,
                'action' => '6',
                'tgl_input' => '2019-04-03 08:18:39',
            ),
            255 => 
            array (
                'id_log' => 256,
                'id_user' => 'spi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 09:10:20',
            ),
            256 => 
            array (
                'id_log' => 257,
                'id_user' => 'rudi',
                'id_kegiatan' => 1197,
                'action' => '2',
                'tgl_input' => '2019-04-03 09:12:43',
            ),
            257 => 
            array (
                'id_log' => 258,
                'id_user' => 'spi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 09:15:14',
            ),
            258 => 
            array (
                'id_log' => 259,
                'id_user' => 'rudi',
                'id_kegiatan' => 1197,
                'action' => '3',
                'tgl_input' => '2019-04-03 09:16:14',
            ),
            259 => 
            array (
                'id_log' => 260,
                'id_user' => 'rudi',
                'id_kegiatan' => 1197,
                'action' => '6',
                'tgl_input' => '2019-04-03 09:16:14',
            ),
            260 => 
            array (
                'id_log' => 261,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 10:02:14',
            ),
            261 => 
            array (
                'id_log' => 262,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 10:45:14',
            ),
            262 => 
            array (
                'id_log' => 263,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 10:45:58',
            ),
            263 => 
            array (
                'id_log' => 264,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 10:46:08',
            ),
            264 => 
            array (
                'id_log' => 265,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 10:46:17',
            ),
            265 => 
            array (
                'id_log' => 266,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 10:46:29',
            ),
            266 => 
            array (
                'id_log' => 267,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 10:46:36',
            ),
            267 => 
            array (
                'id_log' => 268,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 10:46:43',
            ),
            268 => 
            array (
                'id_log' => 269,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 10:46:50',
            ),
            269 => 
            array (
                'id_log' => 270,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 10:46:58',
            ),
            270 => 
            array (
                'id_log' => 271,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 14:04:06',
            ),
            271 => 
            array (
                'id_log' => 272,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 14:44:55',
            ),
            272 => 
            array (
                'id_log' => 273,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 15:45:51',
            ),
            273 => 
            array (
                'id_log' => 274,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 15:51:21',
            ),
            274 => 
            array (
                'id_log' => 275,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 15:53:35',
            ),
            275 => 
            array (
                'id_log' => 276,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 16:09:14',
            ),
            276 => 
            array (
                'id_log' => 277,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 16:09:28',
            ),
            277 => 
            array (
                'id_log' => 278,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 16:09:40',
            ),
            278 => 
            array (
                'id_log' => 279,
                'id_user' => 'spr',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 16:17:42',
            ),
            279 => 
            array (
                'id_log' => 280,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 16:33:22',
            ),
            280 => 
            array (
                'id_log' => 281,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 16:33:59',
            ),
            281 => 
            array (
                'id_log' => 282,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 16:34:12',
            ),
            282 => 
            array (
                'id_log' => 283,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 16:34:29',
            ),
            283 => 
            array (
                'id_log' => 284,
                'id_user' => 'sak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 17:25:50',
            ),
            284 => 
            array (
                'id_log' => 285,
                'id_user' => 'sak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 17:25:58',
            ),
            285 => 
            array (
                'id_log' => 286,
                'id_user' => 'sak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 17:26:05',
            ),
            286 => 
            array (
                'id_log' => 287,
                'id_user' => 'sak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 17:26:12',
            ),
            287 => 
            array (
                'id_log' => 288,
                'id_user' => 'sak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 17:26:18',
            ),
            288 => 
            array (
                'id_log' => 289,
                'id_user' => 'sak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 17:26:24',
            ),
            289 => 
            array (
                'id_log' => 290,
                'id_user' => 'sak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 17:26:34',
            ),
            290 => 
            array (
                'id_log' => 291,
                'id_user' => 'sak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 17:26:44',
            ),
            291 => 
            array (
                'id_log' => 292,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 17:34:59',
            ),
            292 => 
            array (
                'id_log' => 293,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 18:08:44',
            ),
            293 => 
            array (
                'id_log' => 294,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 18:08:54',
            ),
            294 => 
            array (
                'id_log' => 295,
                'id_user' => 'tutik',
                'id_kegiatan' => 1053,
                'action' => '2',
                'tgl_input' => '2019-04-03 19:10:37',
            ),
            295 => 
            array (
                'id_log' => 296,
                'id_user' => 'tutik',
                'id_kegiatan' => 1053,
                'action' => '2',
                'tgl_input' => '2019-04-03 19:10:37',
            ),
            296 => 
            array (
                'id_log' => 297,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 19:42:31',
            ),
            297 => 
            array (
                'id_log' => 298,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 19:42:44',
            ),
            298 => 
            array (
                'id_log' => 299,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 20:09:27',
            ),
            299 => 
            array (
                'id_log' => 300,
                'id_user' => 'tutik',
                'id_kegiatan' => 1052,
                'action' => '2',
                'tgl_input' => '2019-04-03 20:21:54',
            ),
            300 => 
            array (
                'id_log' => 301,
                'id_user' => 'tutik',
                'id_kegiatan' => 1050,
                'action' => '2',
                'tgl_input' => '2019-04-03 21:05:20',
            ),
            301 => 
            array (
                'id_log' => 302,
                'id_user' => 'tutik',
                'id_kegiatan' => 1049,
                'action' => '2',
                'tgl_input' => '2019-04-03 21:30:50',
            ),
            302 => 
            array (
                'id_log' => 303,
                'id_user' => 'tutik',
                'id_kegiatan' => 1046,
                'action' => '2',
                'tgl_input' => '2019-04-03 21:48:36',
            ),
            303 => 
            array (
                'id_log' => 304,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 21:54:01',
            ),
            304 => 
            array (
                'id_log' => 305,
                'id_user' => 'tutik',
                'id_kegiatan' => 1216,
                'action' => '2',
                'tgl_input' => '2019-04-03 22:18:04',
            ),
            305 => 
            array (
                'id_log' => 306,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 22:29:31',
            ),
            306 => 
            array (
                'id_log' => 307,
                'id_user' => 'tutik',
                'id_kegiatan' => 1215,
                'action' => '2',
                'tgl_input' => '2019-04-03 22:32:45',
            ),
            307 => 
            array (
                'id_log' => 308,
                'id_user' => 'tutik',
                'id_kegiatan' => 1214,
                'action' => '2',
                'tgl_input' => '2019-04-03 22:46:32',
            ),
            308 => 
            array (
                'id_log' => 309,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 22:49:43',
            ),
            309 => 
            array (
                'id_log' => 310,
                'id_user' => 'spr',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-03 22:55:54',
            ),
            310 => 
            array (
                'id_log' => 311,
                'id_user' => 'tutik',
                'id_kegiatan' => 1048,
                'action' => '2',
                'tgl_input' => '2019-04-03 23:04:02',
            ),
            311 => 
            array (
                'id_log' => 312,
                'id_user' => 'tutik',
                'id_kegiatan' => 1109,
                'action' => '2',
                'tgl_input' => '2019-04-03 23:16:52',
            ),
            312 => 
            array (
                'id_log' => 313,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-04 05:35:14',
            ),
            313 => 
            array (
                'id_log' => 314,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-04 05:36:23',
            ),
            314 => 
            array (
                'id_log' => 315,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-04 05:47:24',
            ),
            315 => 
            array (
                'id_log' => 316,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-04 06:49:49',
            ),
            316 => 
            array (
                'id_log' => 317,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-04 06:53:22',
            ),
            317 => 
            array (
                'id_log' => 318,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-04 07:06:23',
            ),
            318 => 
            array (
                'id_log' => 319,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-04 07:37:16',
            ),
            319 => 
            array (
                'id_log' => 320,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-04 07:37:44',
            ),
            320 => 
            array (
                'id_log' => 321,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-04 07:37:55',
            ),
            321 => 
            array (
                'id_log' => 322,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-04 07:38:19',
            ),
            322 => 
            array (
                'id_log' => 323,
                'id_user' => 'edi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-04 07:38:49',
            ),
            323 => 
            array (
                'id_log' => 324,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1092,
                'action' => '7',
                'tgl_input' => '2019-04-04 08:21:59',
            ),
            324 => 
            array (
                'id_log' => 325,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1094,
                'action' => '7',
                'tgl_input' => '2019-04-04 08:33:45',
            ),
            325 => 
            array (
                'id_log' => 326,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1096,
                'action' => '7',
                'tgl_input' => '2019-04-04 08:39:33',
            ),
            326 => 
            array (
                'id_log' => 327,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 0,
                'action' => '2',
                'tgl_input' => '2019-04-04 08:46:52',
            ),
            327 => 
            array (
                'id_log' => 328,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 0,
                'action' => '2',
                'tgl_input' => '2019-04-04 08:46:55',
            ),
            328 => 
            array (
                'id_log' => 329,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1089,
                'action' => '7',
                'tgl_input' => '2019-04-04 09:02:53',
            ),
            329 => 
            array (
                'id_log' => 330,
                'id_user' => 'ratna',
                'id_kegiatan' => 1030,
                'action' => '7',
                'tgl_input' => '2019-04-04 09:12:03',
            ),
            330 => 
            array (
                'id_log' => 331,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1088,
                'action' => '7',
                'tgl_input' => '2019-04-04 09:22:47',
            ),
            331 => 
            array (
                'id_log' => 332,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1090,
                'action' => '7',
                'tgl_input' => '2019-04-04 09:38:32',
            ),
            332 => 
            array (
                'id_log' => 333,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1088,
                'action' => '3',
                'tgl_input' => '2019-04-04 10:34:22',
            ),
            333 => 
            array (
                'id_log' => 334,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1088,
                'action' => '6',
                'tgl_input' => '2019-04-04 10:34:22',
            ),
            334 => 
            array (
                'id_log' => 335,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1093,
                'action' => '3',
                'tgl_input' => '2019-04-04 10:42:32',
            ),
            335 => 
            array (
                'id_log' => 336,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1093,
                'action' => '6',
                'tgl_input' => '2019-04-04 10:42:32',
            ),
            336 => 
            array (
                'id_log' => 337,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1090,
                'action' => '3',
                'tgl_input' => '2019-04-04 10:44:56',
            ),
            337 => 
            array (
                'id_log' => 338,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1090,
                'action' => '6',
                'tgl_input' => '2019-04-04 10:44:56',
            ),
            338 => 
            array (
                'id_log' => 339,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1089,
                'action' => '3',
                'tgl_input' => '2019-04-04 10:48:29',
            ),
            339 => 
            array (
                'id_log' => 340,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1089,
                'action' => '6',
                'tgl_input' => '2019-04-04 10:48:29',
            ),
            340 => 
            array (
                'id_log' => 341,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1113,
                'action' => '2',
                'tgl_input' => '2019-04-04 11:29:31',
            ),
            341 => 
            array (
                'id_log' => 342,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1251,
                'action' => '3',
                'tgl_input' => '2019-04-04 11:50:31',
            ),
            342 => 
            array (
                'id_log' => 343,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1251,
                'action' => '6',
                'tgl_input' => '2019-04-04 11:50:31',
            ),
            343 => 
            array (
                'id_log' => 344,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1093,
                'action' => '9',
                'tgl_input' => '2019-04-04 12:40:40',
            ),
            344 => 
            array (
                'id_log' => 345,
                'id_user' => 'ratna',
                'id_kegiatan' => 1038,
                'action' => '7',
                'tgl_input' => '2019-04-04 12:49:35',
            ),
            345 => 
            array (
                'id_log' => 346,
                'id_user' => 'ratna',
                'id_kegiatan' => 1036,
                'action' => '7',
                'tgl_input' => '2019-04-04 12:52:26',
            ),
            346 => 
            array (
                'id_log' => 347,
                'id_user' => 'ratna',
                'id_kegiatan' => 1032,
                'action' => '7',
                'tgl_input' => '2019-04-04 12:53:56',
            ),
            347 => 
            array (
                'id_log' => 348,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1158,
                'action' => '7',
                'tgl_input' => '2019-04-04 13:17:51',
            ),
            348 => 
            array (
                'id_log' => 349,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1127,
                'action' => '7',
                'tgl_input' => '2019-04-04 13:36:17',
            ),
            349 => 
            array (
                'id_log' => 350,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1089,
                'action' => '7',
                'tgl_input' => '2019-04-04 13:36:39',
            ),
            350 => 
            array (
                'id_log' => 351,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1090,
                'action' => '7',
                'tgl_input' => '2019-04-04 13:41:37',
            ),
            351 => 
            array (
                'id_log' => 352,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1088,
                'action' => '7',
                'tgl_input' => '2019-04-04 13:42:52',
            ),
            352 => 
            array (
                'id_log' => 353,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1251,
                'action' => '9',
                'tgl_input' => '2019-04-04 13:46:15',
            ),
            353 => 
            array (
                'id_log' => 354,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1124,
                'action' => '7',
                'tgl_input' => '2019-04-04 13:59:21',
            ),
            354 => 
            array (
                'id_log' => 355,
                'id_user' => 'adminspi',
                'id_kegiatan' => 1162,
                'action' => '2',
                'tgl_input' => '2019-04-04 14:23:16',
            ),
            355 => 
            array (
                'id_log' => 356,
                'id_user' => 'adminspi',
                'id_kegiatan' => 1162,
                'action' => '2',
                'tgl_input' => '2019-04-04 14:25:11',
            ),
            356 => 
            array (
                'id_log' => 357,
                'id_user' => 'etty',
                'id_kegiatan' => 1228,
                'action' => '7',
                'tgl_input' => '2019-04-04 14:34:18',
            ),
            357 => 
            array (
                'id_log' => 358,
                'id_user' => 'adminspi',
                'id_kegiatan' => 1107,
                'action' => '2',
                'tgl_input' => '2019-04-04 14:44:27',
            ),
            358 => 
            array (
                'id_log' => 359,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1106,
                'action' => '2',
                'tgl_input' => '2019-04-04 15:15:07',
            ),
            359 => 
            array (
                'id_log' => 360,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1103,
                'action' => '2',
                'tgl_input' => '2019-04-04 15:33:15',
            ),
            360 => 
            array (
                'id_log' => 361,
                'id_user' => 'etty',
                'id_kegiatan' => 1227,
                'action' => '7',
                'tgl_input' => '2019-04-04 15:39:27',
            ),
            361 => 
            array (
                'id_log' => 362,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1102,
                'action' => '2',
                'tgl_input' => '2019-04-04 15:53:05',
            ),
            362 => 
            array (
                'id_log' => 363,
                'id_user' => 'etty',
                'id_kegiatan' => 1125,
                'action' => '7',
                'tgl_input' => '2019-04-04 16:08:17',
            ),
            363 => 
            array (
                'id_log' => 364,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1101,
                'action' => '2',
                'tgl_input' => '2019-04-04 16:18:46',
            ),
            364 => 
            array (
                'id_log' => 365,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1100,
                'action' => '2',
                'tgl_input' => '2019-04-04 16:35:59',
            ),
            365 => 
            array (
                'id_log' => 366,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1098,
                'action' => '2',
                'tgl_input' => '2019-04-04 16:45:46',
            ),
            366 => 
            array (
                'id_log' => 367,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1091,
                'action' => '2',
                'tgl_input' => '2019-04-04 17:06:15',
            ),
            367 => 
            array (
                'id_log' => 368,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1068,
                'action' => '2',
                'tgl_input' => '2019-04-04 19:59:17',
            ),
            368 => 
            array (
                'id_log' => 369,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1252,
                'action' => '2',
                'tgl_input' => '2019-04-05 06:52:16',
            ),
            369 => 
            array (
                'id_log' => 370,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1250,
                'action' => '2',
                'tgl_input' => '2019-04-05 06:56:28',
            ),
            370 => 
            array (
                'id_log' => 371,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1249,
                'action' => '2',
                'tgl_input' => '2019-04-05 07:02:07',
            ),
            371 => 
            array (
                'id_log' => 372,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1248,
                'action' => '2',
                'tgl_input' => '2019-04-05 07:12:13',
            ),
            372 => 
            array (
                'id_log' => 373,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1247,
                'action' => '2',
                'tgl_input' => '2019-04-05 07:16:59',
            ),
            373 => 
            array (
                'id_log' => 374,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1223,
                'action' => '2',
                'tgl_input' => '2019-04-05 07:19:26',
            ),
            374 => 
            array (
                'id_log' => 375,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1142,
                'action' => '2',
                'tgl_input' => '2019-04-05 07:27:37',
            ),
            375 => 
            array (
                'id_log' => 376,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1139,
                'action' => '2',
                'tgl_input' => '2019-04-05 07:29:52',
            ),
            376 => 
            array (
                'id_log' => 377,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1093,
                'action' => '8',
                'tgl_input' => '2019-04-05 08:13:09',
            ),
            377 => 
            array (
                'id_log' => 378,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1093,
                'action' => '11',
                'tgl_input' => '2019-04-05 08:13:09',
            ),
            378 => 
            array (
                'id_log' => 379,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1251,
                'action' => '8',
                'tgl_input' => '2019-04-05 08:20:00',
            ),
            379 => 
            array (
                'id_log' => 380,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1251,
                'action' => '11',
                'tgl_input' => '2019-04-05 08:20:00',
            ),
            380 => 
            array (
                'id_log' => 381,
                'id_user' => 'adminspi',
                'id_kegiatan' => 1058,
                'action' => '2',
                'tgl_input' => '2019-04-05 09:15:33',
            ),
            381 => 
            array (
                'id_log' => 382,
                'id_user' => 'etty',
                'id_kegiatan' => 1121,
                'action' => '7',
                'tgl_input' => '2019-04-05 09:19:21',
            ),
            382 => 
            array (
                'id_log' => 383,
                'id_user' => 'etty',
                'id_kegiatan' => 1120,
                'action' => '7',
                'tgl_input' => '2019-04-05 09:42:51',
            ),
            383 => 
            array (
                'id_log' => 384,
                'id_user' => 'etty',
                'id_kegiatan' => 1119,
                'action' => '7',
                'tgl_input' => '2019-04-05 09:54:41',
            ),
            384 => 
            array (
                'id_log' => 385,
                'id_user' => 'adminspi',
                'id_kegiatan' => 1061,
                'action' => '2',
                'tgl_input' => '2019-04-05 09:58:53',
            ),
            385 => 
            array (
                'id_log' => 386,
                'id_user' => 'etty',
                'id_kegiatan' => 1112,
                'action' => '7',
                'tgl_input' => '2019-04-05 10:08:51',
            ),
            386 => 
            array (
                'id_log' => 387,
                'id_user' => 'etty',
                'id_kegiatan' => 1045,
                'action' => '9',
                'tgl_input' => '2019-04-05 10:14:03',
            ),
            387 => 
            array (
                'id_log' => 388,
                'id_user' => 'adminspi',
                'id_kegiatan' => 1067,
                'action' => '2',
                'tgl_input' => '2019-04-05 10:43:18',
            ),
            388 => 
            array (
                'id_log' => 389,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1211,
                'action' => '7',
                'tgl_input' => '2019-04-05 10:48:08',
            ),
            389 => 
            array (
                'id_log' => 390,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-05 10:48:56',
            ),
            390 => 
            array (
                'id_log' => 391,
                'id_user' => 'adminspi',
                'id_kegiatan' => 1066,
                'action' => '2',
                'tgl_input' => '2019-04-05 10:59:43',
            ),
            391 => 
            array (
                'id_log' => 392,
                'id_user' => 'adminspi',
                'id_kegiatan' => 1065,
                'action' => '2',
                'tgl_input' => '2019-04-05 11:20:38',
            ),
            392 => 
            array (
                'id_log' => 393,
                'id_user' => 'adminspi',
                'id_kegiatan' => 1064,
                'action' => '2',
                'tgl_input' => '2019-04-05 11:36:11',
            ),
            393 => 
            array (
                'id_log' => 394,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-05 11:56:43',
            ),
            394 => 
            array (
                'id_log' => 395,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-05 11:56:51',
            ),
            395 => 
            array (
                'id_log' => 396,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-05 11:56:56',
            ),
            396 => 
            array (
                'id_log' => 397,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-05 11:57:06',
            ),
            397 => 
            array (
                'id_log' => 398,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-05 11:57:13',
            ),
            398 => 
            array (
                'id_log' => 399,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-05 11:57:19',
            ),
            399 => 
            array (
                'id_log' => 400,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-05 14:28:39',
            ),
            400 => 
            array (
                'id_log' => 401,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1096,
                'action' => '9',
                'tgl_input' => '2019-04-05 14:37:48',
            ),
            401 => 
            array (
                'id_log' => 402,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-05 14:39:59',
            ),
            402 => 
            array (
                'id_log' => 403,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1094,
                'action' => '7',
                'tgl_input' => '2019-04-05 14:42:50',
            ),
            403 => 
            array (
                'id_log' => 404,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1089,
                'action' => '9',
                'tgl_input' => '2019-04-05 14:48:05',
            ),
            404 => 
            array (
                'id_log' => 405,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1092,
                'action' => '7',
                'tgl_input' => '2019-04-05 14:56:13',
            ),
            405 => 
            array (
                'id_log' => 406,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1090,
                'action' => '7',
                'tgl_input' => '2019-04-05 15:10:41',
            ),
            406 => 
            array (
                'id_log' => 407,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1088,
                'action' => '7',
                'tgl_input' => '2019-04-05 15:12:28',
            ),
            407 => 
            array (
                'id_log' => 408,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1229,
                'action' => '2',
                'tgl_input' => '2019-04-05 15:27:07',
            ),
            408 => 
            array (
                'id_log' => 409,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1043,
                'action' => '2',
                'tgl_input' => '2019-04-05 15:36:49',
            ),
            409 => 
            array (
                'id_log' => 410,
                'id_user' => 'etty',
                'id_kegiatan' => 1120,
                'action' => '7',
                'tgl_input' => '2019-04-05 15:42:08',
            ),
            410 => 
            array (
                'id_log' => 411,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1177,
                'action' => '7',
                'tgl_input' => '2019-04-05 15:50:42',
            ),
            411 => 
            array (
                'id_log' => 412,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1029,
                'action' => '2',
                'tgl_input' => '2019-04-05 15:54:42',
            ),
            412 => 
            array (
                'id_log' => 413,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1035,
                'action' => '3',
                'tgl_input' => '2019-04-05 16:01:59',
            ),
            413 => 
            array (
                'id_log' => 414,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1035,
                'action' => '6',
                'tgl_input' => '2019-04-05 16:01:59',
            ),
            414 => 
            array (
                'id_log' => 415,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-05 16:03:58',
            ),
            415 => 
            array (
                'id_log' => 416,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-05 16:04:11',
            ),
            416 => 
            array (
                'id_log' => 417,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-05 16:04:18',
            ),
            417 => 
            array (
                'id_log' => 418,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-05 16:04:30',
            ),
            418 => 
            array (
                'id_log' => 419,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-05 16:04:41',
            ),
            419 => 
            array (
                'id_log' => 420,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-05 16:04:52',
            ),
            420 => 
            array (
                'id_log' => 421,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-05 16:04:59',
            ),
            421 => 
            array (
                'id_log' => 422,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-05 16:05:05',
            ),
            422 => 
            array (
                'id_log' => 423,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-05 16:05:12',
            ),
            423 => 
            array (
                'id_log' => 424,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-05 16:05:21',
            ),
            424 => 
            array (
                'id_log' => 425,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-05 16:05:30',
            ),
            425 => 
            array (
                'id_log' => 426,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-05 16:05:47',
            ),
            426 => 
            array (
                'id_log' => 427,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-05 16:06:03',
            ),
            427 => 
            array (
                'id_log' => 428,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-05 16:07:27',
            ),
            428 => 
            array (
                'id_log' => 429,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1209,
                'action' => '2',
                'tgl_input' => '2019-04-05 16:08:46',
            ),
            429 => 
            array (
                'id_log' => 430,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1181,
                'action' => '7',
                'tgl_input' => '2019-04-05 16:10:22',
            ),
            430 => 
            array (
                'id_log' => 431,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1094,
                'action' => '3',
                'tgl_input' => '2019-04-05 16:11:32',
            ),
            431 => 
            array (
                'id_log' => 432,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1094,
                'action' => '6',
                'tgl_input' => '2019-04-05 16:11:32',
            ),
            432 => 
            array (
                'id_log' => 433,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1210,
                'action' => '2',
                'tgl_input' => '2019-04-05 16:19:01',
            ),
            433 => 
            array (
                'id_log' => 434,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1210,
                'action' => '2',
                'tgl_input' => '2019-04-05 16:19:23',
            ),
            434 => 
            array (
                'id_log' => 435,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1143,
                'action' => '7',
                'tgl_input' => '2019-04-05 16:25:16',
            ),
            435 => 
            array (
                'id_log' => 436,
                'id_user' => 'adminspi',
                'id_kegiatan' => 1180,
                'action' => '2',
                'tgl_input' => '2019-04-05 16:31:24',
            ),
            436 => 
            array (
                'id_log' => 437,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1198,
                'action' => '9',
                'tgl_input' => '2019-04-05 16:32:29',
            ),
            437 => 
            array (
                'id_log' => 438,
                'id_user' => 'pps',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-05 16:32:34',
            ),
            438 => 
            array (
                'id_log' => 439,
                'id_user' => 'pps',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-05 16:32:46',
            ),
            439 => 
            array (
                'id_log' => 440,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1128,
                'action' => '7',
                'tgl_input' => '2019-04-05 16:36:38',
            ),
            440 => 
            array (
                'id_log' => 441,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-05 16:44:06',
            ),
            441 => 
            array (
                'id_log' => 442,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-05 16:44:32',
            ),
            442 => 
            array (
                'id_log' => 443,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-05 16:44:43',
            ),
            443 => 
            array (
                'id_log' => 444,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-05 16:44:55',
            ),
            444 => 
            array (
                'id_log' => 445,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-05 16:45:02',
            ),
            445 => 
            array (
                'id_log' => 446,
                'id_user' => 'tutik',
                'id_kegiatan' => 1108,
                'action' => '2',
                'tgl_input' => '2019-04-05 23:14:43',
            ),
            446 => 
            array (
                'id_log' => 447,
                'id_user' => 'tutik',
                'id_kegiatan' => 1038,
                'action' => '2',
                'tgl_input' => '2019-04-05 23:48:28',
            ),
            447 => 
            array (
                'id_log' => 448,
                'id_user' => 'tutik',
                'id_kegiatan' => 1036,
                'action' => '2',
                'tgl_input' => '2019-04-06 00:33:20',
            ),
            448 => 
            array (
                'id_log' => 449,
                'id_user' => 'tutik',
                'id_kegiatan' => 1032,
                'action' => '2',
                'tgl_input' => '2019-04-06 00:44:51',
            ),
            449 => 
            array (
                'id_log' => 450,
                'id_user' => 'tutik',
                'id_kegiatan' => 1030,
                'action' => '2',
                'tgl_input' => '2019-04-06 01:01:51',
            ),
            450 => 
            array (
                'id_log' => 451,
                'id_user' => 'tutik',
                'id_kegiatan' => 1084,
                'action' => '2',
                'tgl_input' => '2019-04-06 01:33:45',
            ),
            451 => 
            array (
                'id_log' => 452,
                'id_user' => 'tutik',
                'id_kegiatan' => 1083,
                'action' => '2',
                'tgl_input' => '2019-04-06 01:47:01',
            ),
            452 => 
            array (
                'id_log' => 453,
                'id_user' => 'tutik',
                'id_kegiatan' => 1081,
                'action' => '2',
                'tgl_input' => '2019-04-06 01:55:17',
            ),
            453 => 
            array (
                'id_log' => 454,
                'id_user' => 'tutik',
                'id_kegiatan' => 1080,
                'action' => '2',
                'tgl_input' => '2019-04-06 02:00:50',
            ),
            454 => 
            array (
                'id_log' => 455,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1175,
                'action' => '2',
                'tgl_input' => '2019-04-06 06:17:27',
            ),
            455 => 
            array (
                'id_log' => 456,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1173,
                'action' => '2',
                'tgl_input' => '2019-04-06 07:02:45',
            ),
            456 => 
            array (
                'id_log' => 457,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1172,
                'action' => '2',
                'tgl_input' => '2019-04-06 07:17:24',
            ),
            457 => 
            array (
                'id_log' => 458,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1171,
                'action' => '2',
                'tgl_input' => '2019-04-06 07:29:22',
            ),
            458 => 
            array (
                'id_log' => 459,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1170,
                'action' => '2',
                'tgl_input' => '2019-04-06 07:47:42',
            ),
            459 => 
            array (
                'id_log' => 460,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-06 07:48:13',
            ),
            460 => 
            array (
                'id_log' => 461,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1169,
                'action' => '2',
                'tgl_input' => '2019-04-06 08:35:12',
            ),
            461 => 
            array (
                'id_log' => 462,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1167,
                'action' => '2',
                'tgl_input' => '2019-04-06 09:13:33',
            ),
            462 => 
            array (
                'id_log' => 463,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1163,
                'action' => '2',
                'tgl_input' => '2019-04-06 09:19:51',
            ),
            463 => 
            array (
                'id_log' => 464,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1161,
                'action' => '2',
                'tgl_input' => '2019-04-06 09:39:55',
            ),
            464 => 
            array (
                'id_log' => 465,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1160,
                'action' => '2',
                'tgl_input' => '2019-04-06 09:45:36',
            ),
            465 => 
            array (
                'id_log' => 466,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-06 09:48:17',
            ),
            466 => 
            array (
                'id_log' => 467,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-06 09:48:22',
            ),
            467 => 
            array (
                'id_log' => 468,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-06 09:48:30',
            ),
            468 => 
            array (
                'id_log' => 469,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-06 09:48:43',
            ),
            469 => 
            array (
                'id_log' => 470,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-06 09:48:53',
            ),
            470 => 
            array (
                'id_log' => 471,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-06 09:49:05',
            ),
            471 => 
            array (
                'id_log' => 472,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-06 09:49:13',
            ),
            472 => 
            array (
                'id_log' => 473,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-06 09:49:24',
            ),
            473 => 
            array (
                'id_log' => 474,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1159,
                'action' => '2',
                'tgl_input' => '2019-04-06 09:49:40',
            ),
            474 => 
            array (
                'id_log' => 475,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1157,
                'action' => '2',
                'tgl_input' => '2019-04-06 09:54:17',
            ),
            475 => 
            array (
                'id_log' => 476,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-06 10:05:18',
            ),
            476 => 
            array (
                'id_log' => 477,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-06 10:05:42',
            ),
            477 => 
            array (
                'id_log' => 478,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-06 10:06:06',
            ),
            478 => 
            array (
                'id_log' => 479,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-06 10:06:15',
            ),
            479 => 
            array (
                'id_log' => 480,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-06 10:06:20',
            ),
            480 => 
            array (
                'id_log' => 481,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-06 10:06:25',
            ),
            481 => 
            array (
                'id_log' => 482,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-06 10:06:46',
            ),
            482 => 
            array (
                'id_log' => 483,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-07 08:32:55',
            ),
            483 => 
            array (
                'id_log' => 484,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-07 16:20:42',
            ),
            484 => 
            array (
                'id_log' => 485,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-07 18:03:36',
            ),
            485 => 
            array (
                'id_log' => 486,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-07 23:33:05',
            ),
            486 => 
            array (
                'id_log' => 487,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 01:15:55',
            ),
            487 => 
            array (
                'id_log' => 488,
                'id_user' => 'lsp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 05:25:05',
            ),
            488 => 
            array (
                'id_log' => 489,
                'id_user' => 'lsp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 05:25:27',
            ),
            489 => 
            array (
                'id_log' => 490,
                'id_user' => 'lsp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 05:25:36',
            ),
            490 => 
            array (
                'id_log' => 491,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1150,
                'action' => '2',
                'tgl_input' => '2019-04-08 06:09:37',
            ),
            491 => 
            array (
                'id_log' => 492,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1149,
                'action' => '2',
                'tgl_input' => '2019-04-08 06:17:32',
            ),
            492 => 
            array (
                'id_log' => 493,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1141,
                'action' => '2',
                'tgl_input' => '2019-04-08 06:28:12',
            ),
            493 => 
            array (
                'id_log' => 494,
                'id_user' => 'sku',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 08:09:24',
            ),
            494 => 
            array (
                'id_log' => 495,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1094,
                'action' => '7',
                'tgl_input' => '2019-04-08 08:55:00',
            ),
            495 => 
            array (
                'id_log' => 496,
                'id_user' => 'skj',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 09:25:01',
            ),
            496 => 
            array (
                'id_log' => 497,
                'id_user' => 'skj',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 09:25:37',
            ),
            497 => 
            array (
                'id_log' => 498,
                'id_user' => 'skj',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 09:25:52',
            ),
            498 => 
            array (
                'id_log' => 499,
                'id_user' => 'skj',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 09:25:58',
            ),
            499 => 
            array (
                'id_log' => 500,
                'id_user' => 'sku',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 09:26:59',
            ),
        ));
        \DB::table('log_kegiatan')->insert(array (
            0 => 
            array (
                'id_log' => 501,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1263,
                'action' => '7',
                'tgl_input' => '2019-04-08 09:27:09',
            ),
            1 => 
            array (
                'id_log' => 502,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1198,
                'action' => '8',
                'tgl_input' => '2019-04-08 09:34:35',
            ),
            2 => 
            array (
                'id_log' => 503,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1198,
                'action' => '11',
                'tgl_input' => '2019-04-08 09:34:35',
            ),
            3 => 
            array (
                'id_log' => 504,
                'id_user' => 'skj',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 09:39:49',
            ),
            4 => 
            array (
                'id_log' => 505,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 09:40:59',
            ),
            5 => 
            array (
                'id_log' => 506,
                'id_user' => 'skj',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 09:43:46',
            ),
            6 => 
            array (
                'id_log' => 507,
                'id_user' => 'sku',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 09:46:58',
            ),
            7 => 
            array (
                'id_log' => 508,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 09:49:09',
            ),
            8 => 
            array (
                'id_log' => 509,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 09:49:15',
            ),
            9 => 
            array (
                'id_log' => 510,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 09:49:38',
            ),
            10 => 
            array (
                'id_log' => 511,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 09:54:16',
            ),
            11 => 
            array (
                'id_log' => 512,
                'id_user' => 'spr',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 10:04:39',
            ),
            12 => 
            array (
                'id_log' => 513,
                'id_user' => 'spr',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 10:05:46',
            ),
            13 => 
            array (
                'id_log' => 514,
                'id_user' => 'skj',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 10:17:43',
            ),
            14 => 
            array (
                'id_log' => 515,
                'id_user' => 'sku',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 10:19:09',
            ),
            15 => 
            array (
                'id_log' => 516,
                'id_user' => 'pus',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 10:28:16',
            ),
            16 => 
            array (
                'id_log' => 517,
                'id_user' => 'pus',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 10:28:23',
            ),
            17 => 
            array (
                'id_log' => 518,
                'id_user' => 'pus',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 10:28:29',
            ),
            18 => 
            array (
                'id_log' => 519,
                'id_user' => 'pus',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 10:28:34',
            ),
            19 => 
            array (
                'id_log' => 520,
                'id_user' => 'skj',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 10:43:31',
            ),
            20 => 
            array (
                'id_log' => 521,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 10:51:53',
            ),
            21 => 
            array (
                'id_log' => 522,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 10:52:06',
            ),
            22 => 
            array (
                'id_log' => 523,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 10:52:09',
            ),
            23 => 
            array (
                'id_log' => 524,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 10:52:12',
            ),
            24 => 
            array (
                'id_log' => 525,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 10:52:18',
            ),
            25 => 
            array (
                'id_log' => 526,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 10:52:23',
            ),
            26 => 
            array (
                'id_log' => 527,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 10:52:31',
            ),
            27 => 
            array (
                'id_log' => 528,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 10:52:35',
            ),
            28 => 
            array (
                'id_log' => 529,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 10:52:41',
            ),
            29 => 
            array (
                'id_log' => 530,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 10:52:50',
            ),
            30 => 
            array (
                'id_log' => 531,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 10:52:56',
            ),
            31 => 
            array (
                'id_log' => 532,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 10:53:01',
            ),
            32 => 
            array (
                'id_log' => 533,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 10:53:06',
            ),
            33 => 
            array (
                'id_log' => 534,
                'id_user' => 'pps',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 11:10:43',
            ),
            34 => 
            array (
                'id_log' => 535,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 11:26:06',
            ),
            35 => 
            array (
                'id_log' => 536,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 11:26:25',
            ),
            36 => 
            array (
                'id_log' => 537,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 11:46:28',
            ),
            37 => 
            array (
                'id_log' => 538,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 11:46:43',
            ),
            38 => 
            array (
                'id_log' => 539,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 11:46:54',
            ),
            39 => 
            array (
                'id_log' => 540,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1043,
                'action' => '7',
                'tgl_input' => '2019-04-08 11:57:55',
            ),
            40 => 
            array (
                'id_log' => 541,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1263,
                'action' => '9',
                'tgl_input' => '2019-04-08 11:59:35',
            ),
            41 => 
            array (
                'id_log' => 542,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1180,
                'action' => '7',
                'tgl_input' => '2019-04-08 12:12:18',
            ),
            42 => 
            array (
                'id_log' => 543,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1175,
                'action' => '7',
                'tgl_input' => '2019-04-08 12:15:33',
            ),
            43 => 
            array (
                'id_log' => 544,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1035,
                'action' => '9',
                'tgl_input' => '2019-04-08 12:19:53',
            ),
            44 => 
            array (
                'id_log' => 545,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 12:22:43',
            ),
            45 => 
            array (
                'id_log' => 546,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 12:25:55',
            ),
            46 => 
            array (
                'id_log' => 547,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1161,
                'action' => '7',
                'tgl_input' => '2019-04-08 12:29:35',
            ),
            47 => 
            array (
                'id_log' => 548,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1160,
                'action' => '7',
                'tgl_input' => '2019-04-08 12:30:29',
            ),
            48 => 
            array (
                'id_log' => 549,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1159,
                'action' => '7',
                'tgl_input' => '2019-04-08 12:32:00',
            ),
            49 => 
            array (
                'id_log' => 550,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1157,
                'action' => '7',
                'tgl_input' => '2019-04-08 12:32:30',
            ),
            50 => 
            array (
                'id_log' => 551,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 12:32:57',
            ),
            51 => 
            array (
                'id_log' => 552,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1094,
                'action' => '9',
                'tgl_input' => '2019-04-08 12:33:18',
            ),
            52 => 
            array (
                'id_log' => 553,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1163,
                'action' => '7',
                'tgl_input' => '2019-04-08 12:36:13',
            ),
            53 => 
            array (
                'id_log' => 554,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 12:39:06',
            ),
            54 => 
            array (
                'id_log' => 555,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1167,
                'action' => '7',
                'tgl_input' => '2019-04-08 12:40:44',
            ),
            55 => 
            array (
                'id_log' => 556,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1169,
                'action' => '7',
                'tgl_input' => '2019-04-08 12:43:13',
            ),
            56 => 
            array (
                'id_log' => 557,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1171,
                'action' => '9',
                'tgl_input' => '2019-04-08 12:46:50',
            ),
            57 => 
            array (
                'id_log' => 558,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1172,
                'action' => '7',
                'tgl_input' => '2019-04-08 12:50:41',
            ),
            58 => 
            array (
                'id_log' => 559,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1097,
                'action' => '2',
                'tgl_input' => '2019-04-08 13:46:27',
            ),
            59 => 
            array (
                'id_log' => 560,
                'id_user' => 'utami',
                'id_kegiatan' => 1153,
                'action' => '9',
                'tgl_input' => '2019-04-08 14:05:15',
            ),
            60 => 
            array (
                'id_log' => 561,
                'id_user' => 'ratna',
                'id_kegiatan' => 1036,
                'action' => '9',
                'tgl_input' => '2019-04-08 14:05:21',
            ),
            61 => 
            array (
                'id_log' => 562,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1153,
                'action' => '8',
                'tgl_input' => '2019-04-08 14:06:32',
            ),
            62 => 
            array (
                'id_log' => 563,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1153,
                'action' => '11',
                'tgl_input' => '2019-04-08 14:06:32',
            ),
            63 => 
            array (
                'id_log' => 564,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1140,
                'action' => '2',
                'tgl_input' => '2019-04-08 14:08:02',
            ),
            64 => 
            array (
                'id_log' => 565,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1036,
                'action' => '8',
                'tgl_input' => '2019-04-08 14:08:43',
            ),
            65 => 
            array (
                'id_log' => 566,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1036,
                'action' => '11',
                'tgl_input' => '2019-04-08 14:08:43',
            ),
            66 => 
            array (
                'id_log' => 567,
                'id_user' => 'utami',
                'id_kegiatan' => 1152,
                'action' => '9',
                'tgl_input' => '2019-04-08 14:11:12',
            ),
            67 => 
            array (
                'id_log' => 568,
                'id_user' => 'ratna',
                'id_kegiatan' => 1032,
                'action' => '9',
                'tgl_input' => '2019-04-08 14:12:03',
            ),
            68 => 
            array (
                'id_log' => 569,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1152,
                'action' => '8',
                'tgl_input' => '2019-04-08 14:12:18',
            ),
            69 => 
            array (
                'id_log' => 570,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1152,
                'action' => '11',
                'tgl_input' => '2019-04-08 14:12:18',
            ),
            70 => 
            array (
                'id_log' => 571,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1139,
                'action' => '2',
                'tgl_input' => '2019-04-08 14:12:24',
            ),
            71 => 
            array (
                'id_log' => 572,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1032,
                'action' => '8',
                'tgl_input' => '2019-04-08 14:13:52',
            ),
            72 => 
            array (
                'id_log' => 573,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1032,
                'action' => '11',
                'tgl_input' => '2019-04-08 14:13:52',
            ),
            73 => 
            array (
                'id_log' => 574,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1173,
                'action' => '7',
                'tgl_input' => '2019-04-08 14:14:18',
            ),
            74 => 
            array (
                'id_log' => 575,
                'id_user' => 'ratna',
                'id_kegiatan' => 1030,
                'action' => '9',
                'tgl_input' => '2019-04-08 14:16:42',
            ),
            75 => 
            array (
                'id_log' => 576,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1170,
                'action' => '7',
                'tgl_input' => '2019-04-08 14:16:59',
            ),
            76 => 
            array (
                'id_log' => 577,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1030,
                'action' => '8',
                'tgl_input' => '2019-04-08 14:18:21',
            ),
            77 => 
            array (
                'id_log' => 578,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1030,
                'action' => '11',
                'tgl_input' => '2019-04-08 14:18:21',
            ),
            78 => 
            array (
                'id_log' => 579,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1184,
                'action' => '2',
                'tgl_input' => '2019-04-08 14:21:20',
            ),
            79 => 
            array (
                'id_log' => 580,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1135,
                'action' => '2',
                'tgl_input' => '2019-04-08 14:25:33',
            ),
            80 => 
            array (
                'id_log' => 581,
                'id_user' => 'kui',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 14:28:03',
            ),
            81 => 
            array (
                'id_log' => 582,
                'id_user' => 'kui',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 14:28:06',
            ),
            82 => 
            array (
                'id_log' => 583,
                'id_user' => 'kui',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 14:28:09',
            ),
            83 => 
            array (
                'id_log' => 584,
                'id_user' => 'kui',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 14:28:12',
            ),
            84 => 
            array (
                'id_log' => 585,
                'id_user' => 'kui',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 14:28:16',
            ),
            85 => 
            array (
                'id_log' => 586,
                'id_user' => 'spr',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 14:29:30',
            ),
            86 => 
            array (
                'id_log' => 587,
                'id_user' => 'spr',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 14:37:37',
            ),
            87 => 
            array (
                'id_log' => 588,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1134,
                'action' => '2',
                'tgl_input' => '2019-04-08 14:47:42',
            ),
            88 => 
            array (
                'id_log' => 589,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1263,
                'action' => '2',
                'tgl_input' => '2019-04-08 14:47:42',
            ),
            89 => 
            array (
                'id_log' => 590,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1133,
                'action' => '2',
                'tgl_input' => '2019-04-08 14:56:55',
            ),
            90 => 
            array (
                'id_log' => 591,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1168,
                'action' => '7',
                'tgl_input' => '2019-04-08 15:01:36',
            ),
            91 => 
            array (
                'id_log' => 592,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1132,
                'action' => '2',
                'tgl_input' => '2019-04-08 15:02:43',
            ),
            92 => 
            array (
                'id_log' => 593,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1183,
                'action' => '2',
                'tgl_input' => '2019-04-08 15:05:27',
            ),
            93 => 
            array (
                'id_log' => 594,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1131,
                'action' => '2',
                'tgl_input' => '2019-04-08 15:10:58',
            ),
            94 => 
            array (
                'id_log' => 595,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1130,
                'action' => '2',
                'tgl_input' => '2019-04-08 15:14:26',
            ),
            95 => 
            array (
                'id_log' => 596,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1129,
                'action' => '2',
                'tgl_input' => '2019-04-08 15:29:44',
            ),
            96 => 
            array (
                'id_log' => 597,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1122,
                'action' => '2',
                'tgl_input' => '2019-04-08 15:31:27',
            ),
            97 => 
            array (
                'id_log' => 598,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1042,
                'action' => '2',
                'tgl_input' => '2019-04-08 15:33:07',
            ),
            98 => 
            array (
                'id_log' => 599,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1113,
                'action' => '2',
                'tgl_input' => '2019-04-08 15:37:57',
            ),
            99 => 
            array (
                'id_log' => 600,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1229,
                'action' => '3',
                'tgl_input' => '2019-04-08 15:39:18',
            ),
            100 => 
            array (
                'id_log' => 601,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1229,
                'action' => '6',
                'tgl_input' => '2019-04-08 15:39:18',
            ),
            101 => 
            array (
                'id_log' => 602,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1209,
                'action' => '3',
                'tgl_input' => '2019-04-08 15:40:22',
            ),
            102 => 
            array (
                'id_log' => 603,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1209,
                'action' => '6',
                'tgl_input' => '2019-04-08 15:40:22',
            ),
            103 => 
            array (
                'id_log' => 604,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1060,
                'action' => '2',
                'tgl_input' => '2019-04-08 15:41:20',
            ),
            104 => 
            array (
                'id_log' => 605,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1043,
                'action' => '3',
                'tgl_input' => '2019-04-08 15:41:41',
            ),
            105 => 
            array (
                'id_log' => 606,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1043,
                'action' => '6',
                'tgl_input' => '2019-04-08 15:41:41',
            ),
            106 => 
            array (
                'id_log' => 607,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1059,
                'action' => '2',
                'tgl_input' => '2019-04-08 15:52:51',
            ),
            107 => 
            array (
                'id_log' => 608,
                'id_user' => 'ratna',
                'id_kegiatan' => 1038,
                'action' => '9',
                'tgl_input' => '2019-04-08 15:54:58',
            ),
            108 => 
            array (
                'id_log' => 609,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1038,
                'action' => '8',
                'tgl_input' => '2019-04-08 15:57:05',
            ),
            109 => 
            array (
                'id_log' => 610,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1038,
                'action' => '11',
                'tgl_input' => '2019-04-08 15:57:05',
            ),
            110 => 
            array (
                'id_log' => 611,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1057,
                'action' => '2',
                'tgl_input' => '2019-04-08 16:05:32',
            ),
            111 => 
            array (
                'id_log' => 612,
                'id_user' => 'pps',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 16:06:34',
            ),
            112 => 
            array (
                'id_log' => 613,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1056,
                'action' => '2',
                'tgl_input' => '2019-04-08 16:12:38',
            ),
            113 => 
            array (
                'id_log' => 614,
                'id_user' => 'phk',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 16:33:11',
            ),
            114 => 
            array (
                'id_log' => 615,
                'id_user' => 'UPTTIK',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 16:54:23',
            ),
            115 => 
            array (
                'id_log' => 616,
                'id_user' => 'spr',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 17:03:40',
            ),
            116 => 
            array (
                'id_log' => 617,
                'id_user' => 'phk',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 20:13:53',
            ),
            117 => 
            array (
                'id_log' => 618,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1263,
                'action' => '10',
                'tgl_input' => '2019-04-08 21:11:06',
            ),
            118 => 
            array (
                'id_log' => 619,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1171,
                'action' => '10',
                'tgl_input' => '2019-04-08 21:14:55',
            ),
            119 => 
            array (
                'id_log' => 620,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1096,
                'action' => '10',
                'tgl_input' => '2019-04-08 21:17:05',
            ),
            120 => 
            array (
                'id_log' => 621,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1094,
                'action' => '10',
                'tgl_input' => '2019-04-08 21:20:33',
            ),
            121 => 
            array (
                'id_log' => 622,
                'id_user' => 'phk',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 21:21:24',
            ),
            122 => 
            array (
                'id_log' => 623,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1089,
                'action' => '8',
                'tgl_input' => '2019-04-08 21:26:50',
            ),
            123 => 
            array (
                'id_log' => 624,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1089,
                'action' => '11',
                'tgl_input' => '2019-04-08 21:26:50',
            ),
            124 => 
            array (
                'id_log' => 625,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1045,
                'action' => '8',
                'tgl_input' => '2019-04-08 21:30:48',
            ),
            125 => 
            array (
                'id_log' => 626,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1045,
                'action' => '11',
                'tgl_input' => '2019-04-08 21:30:48',
            ),
            126 => 
            array (
                'id_log' => 627,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1035,
                'action' => '8',
                'tgl_input' => '2019-04-08 21:36:41',
            ),
            127 => 
            array (
                'id_log' => 628,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1035,
                'action' => '11',
                'tgl_input' => '2019-04-08 21:36:41',
            ),
            128 => 
            array (
                'id_log' => 629,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1284,
                'action' => '2',
                'tgl_input' => '2019-04-08 21:38:17',
            ),
            129 => 
            array (
                'id_log' => 630,
                'id_user' => 'rudi',
                'id_kegiatan' => 1194,
                'action' => '2',
                'tgl_input' => '2019-04-08 21:41:38',
            ),
            130 => 
            array (
                'id_log' => 631,
                'id_user' => 'rudi',
                'id_kegiatan' => 1190,
                'action' => '2',
                'tgl_input' => '2019-04-08 21:54:06',
            ),
            131 => 
            array (
                'id_log' => 632,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1283,
                'action' => '2',
                'tgl_input' => '2019-04-08 22:03:25',
            ),
            132 => 
            array (
                'id_log' => 633,
                'id_user' => 'phk',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 22:09:49',
            ),
            133 => 
            array (
                'id_log' => 634,
                'id_user' => 'phk',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 22:10:04',
            ),
            134 => 
            array (
                'id_log' => 635,
                'id_user' => 'phk',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 22:10:10',
            ),
            135 => 
            array (
                'id_log' => 636,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1285,
                'action' => '2',
                'tgl_input' => '2019-04-08 22:26:28',
            ),
            136 => 
            array (
                'id_log' => 637,
                'id_user' => 'rudi',
                'id_kegiatan' => 1188,
                'action' => '2',
                'tgl_input' => '2019-04-08 22:28:41',
            ),
            137 => 
            array (
                'id_log' => 638,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1284,
                'action' => '2',
                'tgl_input' => '2019-04-08 22:29:28',
            ),
            138 => 
            array (
                'id_log' => 639,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1283,
                'action' => '2',
                'tgl_input' => '2019-04-08 22:31:50',
            ),
            139 => 
            array (
                'id_log' => 640,
                'id_user' => 'rudi',
                'id_kegiatan' => 1085,
                'action' => '2',
                'tgl_input' => '2019-04-08 22:41:13',
            ),
            140 => 
            array (
                'id_log' => 641,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1286,
                'action' => '2',
                'tgl_input' => '2019-04-08 22:45:35',
            ),
            141 => 
            array (
                'id_log' => 642,
                'id_user' => 'tutik',
                'id_kegiatan' => 1226,
                'action' => '2',
                'tgl_input' => '2019-04-08 22:51:45',
            ),
            142 => 
            array (
                'id_log' => 643,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 23:06:18',
            ),
            143 => 
            array (
                'id_log' => 644,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 23:07:03',
            ),
            144 => 
            array (
                'id_log' => 645,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 23:08:33',
            ),
            145 => 
            array (
                'id_log' => 646,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 23:09:13',
            ),
            146 => 
            array (
                'id_log' => 647,
                'id_user' => 'phk',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 23:34:35',
            ),
            147 => 
            array (
                'id_log' => 648,
                'id_user' => 'phk',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 23:34:44',
            ),
            148 => 
            array (
                'id_log' => 649,
                'id_user' => 'phk',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 23:34:56',
            ),
            149 => 
            array (
                'id_log' => 650,
                'id_user' => 'phk',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 23:35:07',
            ),
            150 => 
            array (
                'id_log' => 651,
                'id_user' => 'phk',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 23:35:14',
            ),
            151 => 
            array (
                'id_log' => 652,
                'id_user' => 'phk',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-08 23:35:21',
            ),
            152 => 
            array (
                'id_log' => 653,
                'id_user' => 'tutik',
                'id_kegiatan' => 1078,
                'action' => '2',
                'tgl_input' => '2019-04-08 23:38:40',
            ),
            153 => 
            array (
                'id_log' => 654,
                'id_user' => 'tutik',
                'id_kegiatan' => 1077,
                'action' => '2',
                'tgl_input' => '2019-04-09 00:33:38',
            ),
            154 => 
            array (
                'id_log' => 655,
                'id_user' => 'tutik',
                'id_kegiatan' => 1225,
                'action' => '2',
                'tgl_input' => '2019-04-09 00:49:57',
            ),
            155 => 
            array (
                'id_log' => 656,
                'id_user' => 'tutik',
                'id_kegiatan' => 1222,
                'action' => '2',
                'tgl_input' => '2019-04-09 01:12:46',
            ),
            156 => 
            array (
                'id_log' => 657,
                'id_user' => 'tutik',
                'id_kegiatan' => 1221,
                'action' => '2',
                'tgl_input' => '2019-04-09 01:30:30',
            ),
            157 => 
            array (
                'id_log' => 658,
                'id_user' => 'tutik',
                'id_kegiatan' => 1219,
                'action' => '2',
                'tgl_input' => '2019-04-09 01:38:07',
            ),
            158 => 
            array (
                'id_log' => 659,
                'id_user' => 'tutik',
                'id_kegiatan' => 1218,
                'action' => '2',
                'tgl_input' => '2019-04-09 01:48:22',
            ),
            159 => 
            array (
                'id_log' => 660,
                'id_user' => 'tutik',
                'id_kegiatan' => 1217,
                'action' => '2',
                'tgl_input' => '2019-04-09 01:56:19',
            ),
            160 => 
            array (
                'id_log' => 661,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 03:52:24',
            ),
            161 => 
            array (
                'id_log' => 662,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 03:53:09',
            ),
            162 => 
            array (
                'id_log' => 663,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 03:54:35',
            ),
            163 => 
            array (
                'id_log' => 664,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 03:54:52',
            ),
            164 => 
            array (
                'id_log' => 665,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 03:56:18',
            ),
            165 => 
            array (
                'id_log' => 666,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 03:57:39',
            ),
            166 => 
            array (
                'id_log' => 667,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 03:58:02',
            ),
            167 => 
            array (
                'id_log' => 668,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 03:58:57',
            ),
            168 => 
            array (
                'id_log' => 669,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 04:04:19',
            ),
            169 => 
            array (
                'id_log' => 670,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 04:05:13',
            ),
            170 => 
            array (
                'id_log' => 671,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 04:07:10',
            ),
            171 => 
            array (
                'id_log' => 672,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 04:11:04',
            ),
            172 => 
            array (
                'id_log' => 673,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 07:20:03',
            ),
            173 => 
            array (
                'id_log' => 674,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 07:37:10',
            ),
            174 => 
            array (
                'id_log' => 675,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 07:37:22',
            ),
            175 => 
            array (
                'id_log' => 676,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 07:37:54',
            ),
            176 => 
            array (
                'id_log' => 677,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 07:38:07',
            ),
            177 => 
            array (
                'id_log' => 678,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 07:38:20',
            ),
            178 => 
            array (
                'id_log' => 679,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 07:38:30',
            ),
            179 => 
            array (
                'id_log' => 680,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 07:39:03',
            ),
            180 => 
            array (
                'id_log' => 681,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 07:39:16',
            ),
            181 => 
            array (
                'id_log' => 682,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 07:39:27',
            ),
            182 => 
            array (
                'id_log' => 683,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1263,
                'action' => '9',
                'tgl_input' => '2019-04-09 08:09:56',
            ),
            183 => 
            array (
                'id_log' => 684,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1043,
                'action' => '7',
                'tgl_input' => '2019-04-09 08:12:12',
            ),
            184 => 
            array (
                'id_log' => 685,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1171,
                'action' => '9',
                'tgl_input' => '2019-04-09 08:15:12',
            ),
            185 => 
            array (
                'id_log' => 686,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1094,
                'action' => '9',
                'tgl_input' => '2019-04-09 08:17:17',
            ),
            186 => 
            array (
                'id_log' => 687,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1096,
                'action' => '9',
                'tgl_input' => '2019-04-09 08:18:17',
            ),
            187 => 
            array (
                'id_log' => 688,
                'id_user' => 'pus',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 08:23:32',
            ),
            188 => 
            array (
                'id_log' => 689,
                'id_user' => 'pus',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 08:28:09',
            ),
            189 => 
            array (
                'id_log' => 690,
                'id_user' => 'pus',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 08:28:38',
            ),
            190 => 
            array (
                'id_log' => 691,
                'id_user' => 'pus',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 08:30:09',
            ),
            191 => 
            array (
                'id_log' => 692,
                'id_user' => 'spr',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 09:07:33',
            ),
            192 => 
            array (
                'id_log' => 693,
                'id_user' => 'spr',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 09:20:42',
            ),
            193 => 
            array (
                'id_log' => 694,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1043,
                'action' => '9',
                'tgl_input' => '2019-04-09 09:22:13',
            ),
            194 => 
            array (
                'id_log' => 695,
                'id_user' => 'ratna',
                'id_kegiatan' => 1197,
                'action' => '7',
                'tgl_input' => '2019-04-09 09:27:35',
            ),
            195 => 
            array (
                'id_log' => 696,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1088,
                'action' => '9',
                'tgl_input' => '2019-04-09 09:29:11',
            ),
            196 => 
            array (
                'id_log' => 697,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1090,
                'action' => '9',
                'tgl_input' => '2019-04-09 09:36:53',
            ),
            197 => 
            array (
                'id_log' => 698,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1092,
                'action' => '7',
                'tgl_input' => '2019-04-09 09:41:55',
            ),
            198 => 
            array (
                'id_log' => 699,
                'id_user' => 'ratna',
                'id_kegiatan' => 1196,
                'action' => '7',
                'tgl_input' => '2019-04-09 09:43:10',
            ),
            199 => 
            array (
                'id_log' => 700,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 09:44:23',
            ),
            200 => 
            array (
                'id_log' => 701,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 09:44:30',
            ),
            201 => 
            array (
                'id_log' => 702,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 09:44:36',
            ),
            202 => 
            array (
                'id_log' => 703,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1229,
                'action' => '7',
                'tgl_input' => '2019-04-09 09:47:50',
            ),
            203 => 
            array (
                'id_log' => 704,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1209,
                'action' => '7',
                'tgl_input' => '2019-04-09 09:52:03',
            ),
            204 => 
            array (
                'id_log' => 705,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1160,
                'action' => '7',
                'tgl_input' => '2019-04-09 09:56:15',
            ),
            205 => 
            array (
                'id_log' => 706,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1159,
                'action' => '7',
                'tgl_input' => '2019-04-09 09:58:06',
            ),
            206 => 
            array (
                'id_log' => 707,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1157,
                'action' => '7',
                'tgl_input' => '2019-04-09 09:59:38',
            ),
            207 => 
            array (
                'id_log' => 708,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 10:05:49',
            ),
            208 => 
            array (
                'id_log' => 709,
                'id_user' => 'ratna',
                'id_kegiatan' => 1189,
                'action' => '7',
                'tgl_input' => '2019-04-09 10:08:01',
            ),
            209 => 
            array (
                'id_log' => 710,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1263,
                'action' => '2',
                'tgl_input' => '2019-04-09 10:08:07',
            ),
            210 => 
            array (
                'id_log' => 711,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1264,
                'action' => '2',
                'tgl_input' => '2019-04-09 10:08:44',
            ),
            211 => 
            array (
                'id_log' => 712,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1261,
                'action' => '2',
                'tgl_input' => '2019-04-09 10:12:43',
            ),
            212 => 
            array (
                'id_log' => 713,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1184,
                'action' => '2',
                'tgl_input' => '2019-04-09 10:14:10',
            ),
            213 => 
            array (
                'id_log' => 714,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1183,
                'action' => '2',
                'tgl_input' => '2019-04-09 10:18:05',
            ),
            214 => 
            array (
                'id_log' => 715,
                'id_user' => 'ratna',
                'id_kegiatan' => 1185,
                'action' => '7',
                'tgl_input' => '2019-04-09 10:20:21',
            ),
            215 => 
            array (
                'id_log' => 716,
                'id_user' => 'phk',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 10:20:21',
            ),
            216 => 
            array (
                'id_log' => 717,
                'id_user' => 'phk',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 10:20:28',
            ),
            217 => 
            array (
                'id_log' => 718,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1257,
                'action' => '2',
                'tgl_input' => '2019-04-09 10:21:03',
            ),
            218 => 
            array (
                'id_log' => 719,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1122,
                'action' => '2',
                'tgl_input' => '2019-04-09 10:23:00',
            ),
            219 => 
            array (
                'id_log' => 720,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1116,
                'action' => '7',
                'tgl_input' => '2019-04-09 10:24:46',
            ),
            220 => 
            array (
                'id_log' => 721,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1113,
                'action' => '2',
                'tgl_input' => '2019-04-09 10:25:08',
            ),
            221 => 
            array (
                'id_log' => 722,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1210,
                'action' => '2',
                'tgl_input' => '2019-04-09 10:26:57',
            ),
            222 => 
            array (
                'id_log' => 723,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1029,
                'action' => '3',
                'tgl_input' => '2019-04-09 10:28:27',
            ),
            223 => 
            array (
                'id_log' => 724,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1029,
                'action' => '6',
                'tgl_input' => '2019-04-09 10:28:27',
            ),
            224 => 
            array (
                'id_log' => 725,
                'id_user' => 'pps',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 10:31:45',
            ),
            225 => 
            array (
                'id_log' => 726,
                'id_user' => 'ratna',
                'id_kegiatan' => 1179,
                'action' => '7',
                'tgl_input' => '2019-04-09 10:36:47',
            ),
            226 => 
            array (
                'id_log' => 727,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 10:46:24',
            ),
            227 => 
            array (
                'id_log' => 728,
                'id_user' => 'ratna',
                'id_kegiatan' => 1136,
                'action' => '7',
                'tgl_input' => '2019-04-09 10:48:26',
            ),
            228 => 
            array (
                'id_log' => 729,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 10:51:43',
            ),
            229 => 
            array (
                'id_log' => 730,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1267,
                'action' => '2',
                'tgl_input' => '2019-04-09 10:57:58',
            ),
            230 => 
            array (
                'id_log' => 731,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 11:02:54',
            ),
            231 => 
            array (
                'id_log' => 732,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 11:03:00',
            ),
            232 => 
            array (
                'id_log' => 733,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 11:03:09',
            ),
            233 => 
            array (
                'id_log' => 734,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 11:03:20',
            ),
            234 => 
            array (
                'id_log' => 735,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 11:03:29',
            ),
            235 => 
            array (
                'id_log' => 736,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1265,
                'action' => '2',
                'tgl_input' => '2019-04-09 11:10:00',
            ),
            236 => 
            array (
                'id_log' => 737,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1115,
                'action' => '7',
                'tgl_input' => '2019-04-09 11:10:07',
            ),
            237 => 
            array (
                'id_log' => 738,
                'id_user' => 'spr',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 11:12:02',
            ),
            238 => 
            array (
                'id_log' => 739,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1092,
                'action' => '9',
                'tgl_input' => '2019-04-09 11:12:54',
            ),
            239 => 
            array (
                'id_log' => 740,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1262,
                'action' => '2',
                'tgl_input' => '2019-04-09 11:23:06',
            ),
            240 => 
            array (
                'id_log' => 741,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1260,
                'action' => '2',
                'tgl_input' => '2019-04-09 11:29:54',
            ),
            241 => 
            array (
                'id_log' => 742,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 11:35:39',
            ),
            242 => 
            array (
                'id_log' => 743,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 11:35:44',
            ),
            243 => 
            array (
                'id_log' => 744,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 11:35:48',
            ),
            244 => 
            array (
                'id_log' => 745,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 11:35:53',
            ),
            245 => 
            array (
                'id_log' => 746,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 11:35:56',
            ),
            246 => 
            array (
                'id_log' => 747,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 11:36:00',
            ),
            247 => 
            array (
                'id_log' => 748,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 11:36:04',
            ),
            248 => 
            array (
                'id_log' => 749,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 11:36:07',
            ),
            249 => 
            array (
                'id_log' => 750,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 11:36:12',
            ),
            250 => 
            array (
                'id_log' => 751,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 11:36:16',
            ),
            251 => 
            array (
                'id_log' => 752,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 11:36:25',
            ),
            252 => 
            array (
                'id_log' => 753,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 11:36:33',
            ),
            253 => 
            array (
                'id_log' => 754,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 11:36:41',
            ),
            254 => 
            array (
                'id_log' => 755,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1246,
                'action' => '2',
                'tgl_input' => '2019-04-09 11:38:05',
            ),
            255 => 
            array (
                'id_log' => 756,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 11:42:00',
            ),
            256 => 
            array (
                'id_log' => 757,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 11:43:00',
            ),
            257 => 
            array (
                'id_log' => 758,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1238,
                'action' => '2',
                'tgl_input' => '2019-04-09 11:43:59',
            ),
            258 => 
            array (
                'id_log' => 759,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1237,
                'action' => '2',
                'tgl_input' => '2019-04-09 11:47:38',
            ),
            259 => 
            array (
                'id_log' => 760,
                'id_user' => 'spi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 11:57:25',
            ),
            260 => 
            array (
                'id_log' => 761,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 12:01:34',
            ),
            261 => 
            array (
                'id_log' => 762,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 12:01:42',
            ),
            262 => 
            array (
                'id_log' => 763,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 12:01:48',
            ),
            263 => 
            array (
                'id_log' => 764,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 12:01:55',
            ),
            264 => 
            array (
                'id_log' => 765,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 12:02:40',
            ),
            265 => 
            array (
                'id_log' => 766,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 12:02:49',
            ),
            266 => 
            array (
                'id_log' => 767,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 12:02:59',
            ),
            267 => 
            array (
                'id_log' => 768,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 12:03:06',
            ),
            268 => 
            array (
                'id_log' => 769,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 12:03:14',
            ),
            269 => 
            array (
                'id_log' => 770,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 12:03:22',
            ),
            270 => 
            array (
                'id_log' => 771,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 12:03:34',
            ),
            271 => 
            array (
                'id_log' => 772,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 12:03:55',
            ),
            272 => 
            array (
                'id_log' => 773,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 12:04:04',
            ),
            273 => 
            array (
                'id_log' => 774,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 12:04:27',
            ),
            274 => 
            array (
                'id_log' => 775,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 12:50:46',
            ),
            275 => 
            array (
                'id_log' => 776,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 12:51:17',
            ),
            276 => 
            array (
                'id_log' => 777,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 12:51:32',
            ),
            277 => 
            array (
                'id_log' => 778,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 12:51:49',
            ),
            278 => 
            array (
                'id_log' => 779,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1273,
                'action' => '2',
                'tgl_input' => '2019-04-09 13:01:07',
            ),
            279 => 
            array (
                'id_log' => 780,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1270,
                'action' => '2',
                'tgl_input' => '2019-04-09 13:05:37',
            ),
            280 => 
            array (
                'id_log' => 781,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1268,
                'action' => '2',
                'tgl_input' => '2019-04-09 13:10:12',
            ),
            281 => 
            array (
                'id_log' => 782,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1149,
                'action' => '3',
                'tgl_input' => '2019-04-09 13:12:57',
            ),
            282 => 
            array (
                'id_log' => 783,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1149,
                'action' => '6',
                'tgl_input' => '2019-04-09 13:12:57',
            ),
            283 => 
            array (
                'id_log' => 784,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1258,
                'action' => '2',
                'tgl_input' => '2019-04-09 13:14:03',
            ),
            284 => 
            array (
                'id_log' => 785,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1223,
                'action' => '3',
                'tgl_input' => '2019-04-09 13:15:04',
            ),
            285 => 
            array (
                'id_log' => 786,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1223,
                'action' => '6',
                'tgl_input' => '2019-04-09 13:15:04',
            ),
            286 => 
            array (
                'id_log' => 787,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1134,
                'action' => '3',
                'tgl_input' => '2019-04-09 13:16:52',
            ),
            287 => 
            array (
                'id_log' => 788,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1134,
                'action' => '6',
                'tgl_input' => '2019-04-09 13:16:52',
            ),
            288 => 
            array (
                'id_log' => 789,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1256,
                'action' => '2',
                'tgl_input' => '2019-04-09 13:17:28',
            ),
            289 => 
            array (
                'id_log' => 790,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1255,
                'action' => '2',
                'tgl_input' => '2019-04-09 13:23:25',
            ),
            290 => 
            array (
                'id_log' => 791,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1254,
                'action' => '2',
                'tgl_input' => '2019-04-09 13:25:20',
            ),
            291 => 
            array (
                'id_log' => 792,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1224,
                'action' => '2',
                'tgl_input' => '2019-04-09 13:29:39',
            ),
            292 => 
            array (
                'id_log' => 793,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1212,
                'action' => '2',
                'tgl_input' => '2019-04-09 13:47:52',
            ),
            293 => 
            array (
                'id_log' => 794,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1236,
                'action' => '2',
                'tgl_input' => '2019-04-09 13:55:01',
            ),
            294 => 
            array (
                'id_log' => 795,
                'id_user' => 'spi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 13:58:17',
            ),
            295 => 
            array (
                'id_log' => 796,
                'id_user' => 'spi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 14:02:29',
            ),
            296 => 
            array (
                'id_log' => 797,
                'id_user' => 'sku',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 14:04:55',
            ),
            297 => 
            array (
                'id_log' => 798,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1235,
                'action' => '2',
                'tgl_input' => '2019-04-09 14:18:26',
            ),
            298 => 
            array (
                'id_log' => 799,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1232,
                'action' => '2',
                'tgl_input' => '2019-04-09 14:31:54',
            ),
            299 => 
            array (
                'id_log' => 800,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1253,
                'action' => '2',
                'tgl_input' => '2019-04-09 14:32:17',
            ),
            300 => 
            array (
                'id_log' => 801,
                'id_user' => 'spi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 14:36:27',
            ),
            301 => 
            array (
                'id_log' => 802,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1245,
                'action' => '2',
                'tgl_input' => '2019-04-09 14:41:35',
            ),
            302 => 
            array (
                'id_log' => 803,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1231,
                'action' => '2',
                'tgl_input' => '2019-04-09 14:46:15',
            ),
            303 => 
            array (
                'id_log' => 804,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1208,
                'action' => '2',
                'tgl_input' => '2019-04-09 14:46:21',
            ),
            304 => 
            array (
                'id_log' => 805,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1244,
                'action' => '2',
                'tgl_input' => '2019-04-09 14:51:49',
            ),
            305 => 
            array (
                'id_log' => 806,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1230,
                'action' => '3',
                'tgl_input' => '2019-04-09 14:52:53',
            ),
            306 => 
            array (
                'id_log' => 807,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1230,
                'action' => '6',
                'tgl_input' => '2019-04-09 14:52:53',
            ),
            307 => 
            array (
                'id_log' => 808,
                'id_user' => 'UPTTIK',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 14:56:07',
            ),
            308 => 
            array (
                'id_log' => 809,
                'id_user' => 'spi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 15:01:24',
            ),
            309 => 
            array (
                'id_log' => 810,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 15:01:28',
            ),
            310 => 
            array (
                'id_log' => 811,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 15:01:52',
            ),
            311 => 
            array (
                'id_log' => 812,
                'id_user' => 'kui',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 15:02:21',
            ),
            312 => 
            array (
                'id_log' => 813,
                'id_user' => 'kui',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 15:02:25',
            ),
            313 => 
            array (
                'id_log' => 814,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1201,
                'action' => '2',
                'tgl_input' => '2019-04-09 15:02:58',
            ),
            314 => 
            array (
                'id_log' => 815,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1243,
                'action' => '2',
                'tgl_input' => '2019-04-09 15:03:54',
            ),
            315 => 
            array (
                'id_log' => 816,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 15:06:37',
            ),
            316 => 
            array (
                'id_log' => 817,
                'id_user' => 'ratna',
                'id_kegiatan' => 1197,
                'action' => '9',
                'tgl_input' => '2019-04-09 15:13:10',
            ),
            317 => 
            array (
                'id_log' => 818,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1200,
                'action' => '2',
                'tgl_input' => '2019-04-09 15:13:33',
            ),
            318 => 
            array (
                'id_log' => 819,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1197,
                'action' => '8',
                'tgl_input' => '2019-04-09 15:14:39',
            ),
            319 => 
            array (
                'id_log' => 820,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1197,
                'action' => '11',
                'tgl_input' => '2019-04-09 15:14:39',
            ),
            320 => 
            array (
                'id_log' => 821,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1242,
                'action' => '2',
                'tgl_input' => '2019-04-09 15:19:22',
            ),
            321 => 
            array (
                'id_log' => 822,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1199,
                'action' => '2',
                'tgl_input' => '2019-04-09 15:29:36',
            ),
            322 => 
            array (
                'id_log' => 823,
                'id_user' => 'kui',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 15:30:08',
            ),
            323 => 
            array (
                'id_log' => 824,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1241,
                'action' => '2',
                'tgl_input' => '2019-04-09 15:36:48',
            ),
            324 => 
            array (
                'id_log' => 825,
                'id_user' => 'kui',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 15:43:10',
            ),
            325 => 
            array (
                'id_log' => 826,
                'id_user' => 'ratna',
                'id_kegiatan' => 1196,
                'action' => '7',
                'tgl_input' => '2019-04-09 15:44:24',
            ),
            326 => 
            array (
                'id_log' => 827,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 15:44:50',
            ),
            327 => 
            array (
                'id_log' => 828,
                'id_user' => 'lsp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 15:55:56',
            ),
            328 => 
            array (
                'id_log' => 829,
                'id_user' => 'ratna',
                'id_kegiatan' => 1189,
                'action' => '7',
                'tgl_input' => '2019-04-09 15:56:39',
            ),
            329 => 
            array (
                'id_log' => 830,
                'id_user' => 'sku',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 15:59:48',
            ),
            330 => 
            array (
                'id_log' => 831,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1290,
                'action' => '7',
                'tgl_input' => '2019-04-09 16:01:26',
            ),
            331 => 
            array (
                'id_log' => 832,
                'id_user' => 'kui',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 16:03:11',
            ),
            332 => 
            array (
                'id_log' => 833,
                'id_user' => 'ratna',
                'id_kegiatan' => 1185,
                'action' => '7',
                'tgl_input' => '2019-04-09 16:06:32',
            ),
            333 => 
            array (
                'id_log' => 834,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1060,
                'action' => '7',
                'tgl_input' => '2019-04-09 16:06:37',
            ),
            334 => 
            array (
                'id_log' => 835,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1059,
                'action' => '7',
                'tgl_input' => '2019-04-09 16:11:20',
            ),
            335 => 
            array (
                'id_log' => 836,
                'id_user' => 'ratna',
                'id_kegiatan' => 1136,
                'action' => '7',
                'tgl_input' => '2019-04-09 16:12:58',
            ),
            336 => 
            array (
                'id_log' => 837,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1057,
                'action' => '7',
                'tgl_input' => '2019-04-09 16:13:29',
            ),
            337 => 
            array (
                'id_log' => 838,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1056,
                'action' => '7',
                'tgl_input' => '2019-04-09 16:15:30',
            ),
            338 => 
            array (
                'id_log' => 839,
                'id_user' => 'spi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 16:49:04',
            ),
            339 => 
            array (
                'id_log' => 840,
                'id_user' => 'lsp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 16:56:28',
            ),
            340 => 
            array (
                'id_log' => 841,
                'id_user' => 'lsp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 17:34:32',
            ),
            341 => 
            array (
                'id_log' => 842,
                'id_user' => 'bhs',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 20:18:16',
            ),
            342 => 
            array (
                'id_log' => 843,
                'id_user' => 'bhs',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 20:18:22',
            ),
            343 => 
            array (
                'id_log' => 844,
                'id_user' => 'bhs',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 20:18:28',
            ),
            344 => 
            array (
                'id_log' => 845,
                'id_user' => 'bhs',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 20:18:34',
            ),
            345 => 
            array (
                'id_log' => 846,
                'id_user' => 'bhs',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 20:18:45',
            ),
            346 => 
            array (
                'id_log' => 847,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 20:58:15',
            ),
            347 => 
            array (
                'id_log' => 848,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 21:08:51',
            ),
            348 => 
            array (
                'id_log' => 849,
                'id_user' => 'tutik',
                'id_kegiatan' => 1053,
                'action' => '3',
                'tgl_input' => '2019-04-09 21:18:55',
            ),
            349 => 
            array (
                'id_log' => 850,
                'id_user' => 'tutik',
                'id_kegiatan' => 1053,
                'action' => '6',
                'tgl_input' => '2019-04-09 21:18:55',
            ),
            350 => 
            array (
                'id_log' => 851,
                'id_user' => 'tutik',
                'id_kegiatan' => 1052,
                'action' => '2',
                'tgl_input' => '2019-04-09 21:27:55',
            ),
            351 => 
            array (
                'id_log' => 852,
                'id_user' => 'tutik',
                'id_kegiatan' => 1050,
                'action' => '2',
                'tgl_input' => '2019-04-09 21:38:10',
            ),
            352 => 
            array (
                'id_log' => 853,
                'id_user' => 'tutik',
                'id_kegiatan' => 1049,
                'action' => '2',
                'tgl_input' => '2019-04-09 21:47:30',
            ),
            353 => 
            array (
                'id_log' => 854,
                'id_user' => 'tutik',
                'id_kegiatan' => 1046,
                'action' => '2',
                'tgl_input' => '2019-04-09 21:55:16',
            ),
            354 => 
            array (
                'id_log' => 855,
                'id_user' => 'tutik',
                'id_kegiatan' => 1038,
                'action' => '2',
                'tgl_input' => '2019-04-09 22:05:49',
            ),
            355 => 
            array (
                'id_log' => 856,
                'id_user' => 'tutik',
                'id_kegiatan' => 1036,
                'action' => '3',
                'tgl_input' => '2019-04-09 22:10:04',
            ),
            356 => 
            array (
                'id_log' => 857,
                'id_user' => 'tutik',
                'id_kegiatan' => 1036,
                'action' => '6',
                'tgl_input' => '2019-04-09 22:10:04',
            ),
            357 => 
            array (
                'id_log' => 858,
                'id_user' => 'tutik',
                'id_kegiatan' => 1032,
                'action' => '3',
                'tgl_input' => '2019-04-09 22:11:38',
            ),
            358 => 
            array (
                'id_log' => 859,
                'id_user' => 'tutik',
                'id_kegiatan' => 1032,
                'action' => '6',
                'tgl_input' => '2019-04-09 22:11:38',
            ),
            359 => 
            array (
                'id_log' => 860,
                'id_user' => 'tutik',
                'id_kegiatan' => 1030,
                'action' => '3',
                'tgl_input' => '2019-04-09 22:16:31',
            ),
            360 => 
            array (
                'id_log' => 861,
                'id_user' => 'tutik',
                'id_kegiatan' => 1030,
                'action' => '6',
                'tgl_input' => '2019-04-09 22:16:31',
            ),
            361 => 
            array (
                'id_log' => 862,
                'id_user' => 'tutik',
                'id_kegiatan' => 1084,
                'action' => '3',
                'tgl_input' => '2019-04-09 22:18:08',
            ),
            362 => 
            array (
                'id_log' => 863,
                'id_user' => 'tutik',
                'id_kegiatan' => 1084,
                'action' => '6',
                'tgl_input' => '2019-04-09 22:18:08',
            ),
            363 => 
            array (
                'id_log' => 864,
                'id_user' => 'tutik',
                'id_kegiatan' => 1083,
                'action' => '3',
                'tgl_input' => '2019-04-09 22:19:57',
            ),
            364 => 
            array (
                'id_log' => 865,
                'id_user' => 'tutik',
                'id_kegiatan' => 1083,
                'action' => '6',
                'tgl_input' => '2019-04-09 22:19:57',
            ),
            365 => 
            array (
                'id_log' => 866,
                'id_user' => 'tutik',
                'id_kegiatan' => 1081,
                'action' => '3',
                'tgl_input' => '2019-04-09 22:22:22',
            ),
            366 => 
            array (
                'id_log' => 867,
                'id_user' => 'tutik',
                'id_kegiatan' => 1081,
                'action' => '6',
                'tgl_input' => '2019-04-09 22:22:22',
            ),
            367 => 
            array (
                'id_log' => 868,
                'id_user' => 'tutik',
                'id_kegiatan' => 1080,
                'action' => '2',
                'tgl_input' => '2019-04-09 22:27:44',
            ),
            368 => 
            array (
                'id_log' => 869,
                'id_user' => 'tutik',
                'id_kegiatan' => 1078,
                'action' => '3',
                'tgl_input' => '2019-04-09 22:30:55',
            ),
            369 => 
            array (
                'id_log' => 870,
                'id_user' => 'tutik',
                'id_kegiatan' => 1078,
                'action' => '6',
                'tgl_input' => '2019-04-09 22:30:55',
            ),
            370 => 
            array (
                'id_log' => 871,
                'id_user' => 'tutik',
                'id_kegiatan' => 1077,
                'action' => '3',
                'tgl_input' => '2019-04-09 22:34:49',
            ),
            371 => 
            array (
                'id_log' => 872,
                'id_user' => 'tutik',
                'id_kegiatan' => 1077,
                'action' => '6',
                'tgl_input' => '2019-04-09 22:34:49',
            ),
            372 => 
            array (
                'id_log' => 873,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 22:45:34',
            ),
            373 => 
            array (
                'id_log' => 874,
                'id_user' => 'sku',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 22:53:52',
            ),
            374 => 
            array (
                'id_log' => 875,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1029,
                'action' => '7',
                'tgl_input' => '2019-04-09 23:03:46',
            ),
            375 => 
            array (
                'id_log' => 876,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 23:11:27',
            ),
            376 => 
            array (
                'id_log' => 877,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1176,
                'action' => '7',
                'tgl_input' => '2019-04-09 23:15:32',
            ),
            377 => 
            array (
                'id_log' => 878,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1282,
                'action' => '9',
                'tgl_input' => '2019-04-09 23:16:18',
            ),
            378 => 
            array (
                'id_log' => 879,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1271,
                'action' => '9',
                'tgl_input' => '2019-04-09 23:16:45',
            ),
            379 => 
            array (
                'id_log' => 880,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1246,
                'action' => '9',
                'tgl_input' => '2019-04-09 23:17:39',
            ),
            380 => 
            array (
                'id_log' => 881,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1232,
                'action' => '7',
                'tgl_input' => '2019-04-09 23:22:26',
            ),
            381 => 
            array (
                'id_log' => 882,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1164,
                'action' => '9',
                'tgl_input' => '2019-04-09 23:23:42',
            ),
            382 => 
            array (
                'id_log' => 883,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1166,
                'action' => '7',
                'tgl_input' => '2019-04-09 23:27:21',
            ),
            383 => 
            array (
                'id_log' => 884,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-09 23:51:36',
            ),
            384 => 
            array (
                'id_log' => 885,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1187,
                'action' => '2',
                'tgl_input' => '2019-04-10 02:39:23',
            ),
            385 => 
            array (
                'id_log' => 886,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1176,
                'action' => '2',
                'tgl_input' => '2019-04-10 02:51:17',
            ),
            386 => 
            array (
                'id_log' => 887,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1174,
                'action' => '2',
                'tgl_input' => '2019-04-10 03:15:09',
            ),
            387 => 
            array (
                'id_log' => 888,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1164,
                'action' => '2',
                'tgl_input' => '2019-04-10 03:27:02',
            ),
            388 => 
            array (
                'id_log' => 889,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1156,
                'action' => '2',
                'tgl_input' => '2019-04-10 03:40:17',
            ),
            389 => 
            array (
                'id_log' => 890,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1166,
                'action' => '2',
                'tgl_input' => '2019-04-10 03:55:25',
            ),
            390 => 
            array (
                'id_log' => 891,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 07:39:43',
            ),
            391 => 
            array (
                'id_log' => 892,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 07:51:02',
            ),
            392 => 
            array (
                'id_log' => 893,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 07:52:01',
            ),
            393 => 
            array (
                'id_log' => 894,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1078,
                'action' => '9',
                'tgl_input' => '2019-04-10 07:56:32',
            ),
            394 => 
            array (
                'id_log' => 895,
                'id_user' => 'ratna',
                'id_kegiatan' => 1036,
                'action' => '9',
                'tgl_input' => '2019-04-10 08:10:19',
            ),
            395 => 
            array (
                'id_log' => 896,
                'id_user' => 'ratna',
                'id_kegiatan' => 1036,
                'action' => '9',
                'tgl_input' => '2019-04-10 08:15:48',
            ),
            396 => 
            array (
                'id_log' => 897,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1034,
                'action' => '7',
                'tgl_input' => '2019-04-10 08:26:17',
            ),
            397 => 
            array (
                'id_log' => 898,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1033,
                'action' => '7',
                'tgl_input' => '2019-04-10 08:32:05',
            ),
            398 => 
            array (
                'id_log' => 899,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1083,
                'action' => '9',
                'tgl_input' => '2019-04-10 08:39:55',
            ),
            399 => 
            array (
                'id_log' => 900,
                'id_user' => 'ratna',
                'id_kegiatan' => 1036,
                'action' => '9',
                'tgl_input' => '2019-04-10 08:40:56',
            ),
            400 => 
            array (
                'id_log' => 901,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 08:41:46',
            ),
            401 => 
            array (
                'id_log' => 902,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1156,
                'action' => '9',
                'tgl_input' => '2019-04-10 08:43:29',
            ),
            402 => 
            array (
                'id_log' => 903,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1084,
                'action' => '9',
                'tgl_input' => '2019-04-10 08:45:07',
            ),
            403 => 
            array (
                'id_log' => 904,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1166,
                'action' => '9',
                'tgl_input' => '2019-04-10 08:46:43',
            ),
            404 => 
            array (
                'id_log' => 905,
                'id_user' => 'ratna',
                'id_kegiatan' => 1036,
                'action' => '9',
                'tgl_input' => '2019-04-10 08:49:55',
            ),
            405 => 
            array (
                'id_log' => 906,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1036,
                'action' => '8',
                'tgl_input' => '2019-04-10 08:52:31',
            ),
            406 => 
            array (
                'id_log' => 907,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1036,
                'action' => '11',
                'tgl_input' => '2019-04-10 08:52:31',
            ),
            407 => 
            array (
                'id_log' => 908,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 09:00:52',
            ),
            408 => 
            array (
                'id_log' => 909,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 09:05:55',
            ),
            409 => 
            array (
                'id_log' => 910,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1077,
                'action' => '9',
                'tgl_input' => '2019-04-10 09:50:50',
            ),
            410 => 
            array (
                'id_log' => 911,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1210,
                'action' => '3',
                'tgl_input' => '2019-04-10 09:56:02',
            ),
            411 => 
            array (
                'id_log' => 912,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1210,
                'action' => '6',
                'tgl_input' => '2019-04-10 09:56:02',
            ),
            412 => 
            array (
                'id_log' => 913,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1210,
                'action' => '3',
                'tgl_input' => '2019-04-10 10:02:44',
            ),
            413 => 
            array (
                'id_log' => 914,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1210,
                'action' => '6',
                'tgl_input' => '2019-04-10 10:02:44',
            ),
            414 => 
            array (
                'id_log' => 915,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1096,
                'action' => '2',
                'tgl_input' => '2019-04-10 10:10:54',
            ),
            415 => 
            array (
                'id_log' => 916,
                'id_user' => 'spr',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 10:12:37',
            ),
            416 => 
            array (
                'id_log' => 917,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1263,
                'action' => '3',
                'tgl_input' => '2019-04-10 10:14:03',
            ),
            417 => 
            array (
                'id_log' => 918,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1263,
                'action' => '6',
                'tgl_input' => '2019-04-10 10:14:03',
            ),
            418 => 
            array (
                'id_log' => 919,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1166,
                'action' => '2',
                'tgl_input' => '2019-04-10 10:24:18',
            ),
            419 => 
            array (
                'id_log' => 920,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1282,
                'action' => '8',
                'tgl_input' => '2019-04-10 10:30:52',
            ),
            420 => 
            array (
                'id_log' => 921,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1282,
                'action' => '11',
                'tgl_input' => '2019-04-10 10:30:52',
            ),
            421 => 
            array (
                'id_log' => 922,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1271,
                'action' => '8',
                'tgl_input' => '2019-04-10 10:41:55',
            ),
            422 => 
            array (
                'id_log' => 923,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1271,
                'action' => '11',
                'tgl_input' => '2019-04-10 10:41:55',
            ),
            423 => 
            array (
                'id_log' => 924,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1263,
                'action' => '8',
                'tgl_input' => '2019-04-10 10:44:48',
            ),
            424 => 
            array (
                'id_log' => 925,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1263,
                'action' => '11',
                'tgl_input' => '2019-04-10 10:44:48',
            ),
            425 => 
            array (
                'id_log' => 926,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1246,
                'action' => '10',
                'tgl_input' => '2019-04-10 10:46:06',
            ),
            426 => 
            array (
                'id_log' => 927,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1155,
                'action' => '2',
                'tgl_input' => '2019-04-10 10:47:00',
            ),
            427 => 
            array (
                'id_log' => 928,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1171,
                'action' => '8',
                'tgl_input' => '2019-04-10 10:48:26',
            ),
            428 => 
            array (
                'id_log' => 929,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1171,
                'action' => '11',
                'tgl_input' => '2019-04-10 10:48:26',
            ),
            429 => 
            array (
                'id_log' => 930,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1166,
                'action' => '8',
                'tgl_input' => '2019-04-10 10:51:03',
            ),
            430 => 
            array (
                'id_log' => 931,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1166,
                'action' => '11',
                'tgl_input' => '2019-04-10 10:51:03',
            ),
            431 => 
            array (
                'id_log' => 932,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1164,
                'action' => '10',
                'tgl_input' => '2019-04-10 10:53:07',
            ),
            432 => 
            array (
                'id_log' => 933,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1156,
                'action' => '8',
                'tgl_input' => '2019-04-10 10:54:33',
            ),
            433 => 
            array (
                'id_log' => 934,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1156,
                'action' => '11',
                'tgl_input' => '2019-04-10 10:54:33',
            ),
            434 => 
            array (
                'id_log' => 935,
                'id_user' => 'keuangan',
                'id_kegiatan' => 0,
                'action' => '10',
                'tgl_input' => '2019-04-10 10:58:05',
            ),
            435 => 
            array (
                'id_log' => 936,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1096,
                'action' => '8',
                'tgl_input' => '2019-04-10 11:00:06',
            ),
            436 => 
            array (
                'id_log' => 937,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1096,
                'action' => '11',
                'tgl_input' => '2019-04-10 11:00:06',
            ),
            437 => 
            array (
                'id_log' => 938,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1094,
                'action' => '8',
                'tgl_input' => '2019-04-10 11:02:38',
            ),
            438 => 
            array (
                'id_log' => 939,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1094,
                'action' => '11',
                'tgl_input' => '2019-04-10 11:02:38',
            ),
            439 => 
            array (
                'id_log' => 940,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1034,
                'action' => '2',
                'tgl_input' => '2019-04-10 11:04:35',
            ),
            440 => 
            array (
                'id_log' => 941,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1092,
                'action' => '8',
                'tgl_input' => '2019-04-10 11:05:18',
            ),
            441 => 
            array (
                'id_log' => 942,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1092,
                'action' => '11',
                'tgl_input' => '2019-04-10 11:05:18',
            ),
            442 => 
            array (
                'id_log' => 943,
                'id_user' => 'keuangan',
                'id_kegiatan' => 0,
                'action' => '10',
                'tgl_input' => '2019-04-10 11:06:38',
            ),
            443 => 
            array (
                'id_log' => 944,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1090,
                'action' => '10',
                'tgl_input' => '2019-04-10 11:06:48',
            ),
            444 => 
            array (
                'id_log' => 945,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1088,
                'action' => '10',
                'tgl_input' => '2019-04-10 11:07:01',
            ),
            445 => 
            array (
                'id_log' => 946,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1084,
                'action' => '10',
                'tgl_input' => '2019-04-10 11:07:09',
            ),
            446 => 
            array (
                'id_log' => 947,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1083,
                'action' => '10',
                'tgl_input' => '2019-04-10 11:07:17',
            ),
            447 => 
            array (
                'id_log' => 948,
                'id_user' => 'keuangan',
                'id_kegiatan' => 0,
                'action' => '10',
                'tgl_input' => '2019-04-10 11:08:10',
            ),
            448 => 
            array (
                'id_log' => 949,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1078,
                'action' => '8',
                'tgl_input' => '2019-04-10 11:08:21',
            ),
            449 => 
            array (
                'id_log' => 950,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1078,
                'action' => '11',
                'tgl_input' => '2019-04-10 11:08:21',
            ),
            450 => 
            array (
                'id_log' => 951,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1077,
                'action' => '8',
                'tgl_input' => '2019-04-10 11:08:32',
            ),
            451 => 
            array (
                'id_log' => 952,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1077,
                'action' => '11',
                'tgl_input' => '2019-04-10 11:08:32',
            ),
            452 => 
            array (
                'id_log' => 953,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1043,
                'action' => '8',
                'tgl_input' => '2019-04-10 11:08:51',
            ),
            453 => 
            array (
                'id_log' => 954,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1043,
                'action' => '11',
                'tgl_input' => '2019-04-10 11:08:51',
            ),
            454 => 
            array (
                'id_log' => 955,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1033,
                'action' => '2',
                'tgl_input' => '2019-04-10 11:26:05',
            ),
            455 => 
            array (
                'id_log' => 956,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1234,
                'action' => '2',
                'tgl_input' => '2019-04-10 11:33:47',
            ),
            456 => 
            array (
                'id_log' => 957,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1210,
                'action' => '7',
                'tgl_input' => '2019-04-10 11:38:15',
            ),
            457 => 
            array (
                'id_log' => 958,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1282,
                'action' => '2',
                'tgl_input' => '2019-04-10 11:41:13',
            ),
            458 => 
            array (
                'id_log' => 959,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1233,
                'action' => '2',
                'tgl_input' => '2019-04-10 11:52:18',
            ),
            459 => 
            array (
                'id_log' => 960,
                'id_user' => 'spi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 12:02:46',
            ),
            460 => 
            array (
                'id_log' => 961,
                'id_user' => 'spi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 12:03:05',
            ),
            461 => 
            array (
                'id_log' => 962,
                'id_user' => 'spi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 12:03:13',
            ),
            462 => 
            array (
                'id_log' => 963,
                'id_user' => 'spi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 12:03:30',
            ),
            463 => 
            array (
                'id_log' => 964,
                'id_user' => 'skj',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 12:08:49',
            ),
            464 => 
            array (
                'id_log' => 965,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 13:18:24',
            ),
            465 => 
            array (
                'id_log' => 966,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 13:19:02',
            ),
            466 => 
            array (
                'id_log' => 967,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 13:19:45',
            ),
            467 => 
            array (
                'id_log' => 968,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 13:20:25',
            ),
            468 => 
            array (
                'id_log' => 969,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 13:22:53',
            ),
            469 => 
            array (
                'id_log' => 970,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 13:29:57',
            ),
            470 => 
            array (
                'id_log' => 971,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 13:32:48',
            ),
            471 => 
            array (
                'id_log' => 972,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 13:32:58',
            ),
            472 => 
            array (
                'id_log' => 973,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 13:34:02',
            ),
            473 => 
            array (
                'id_log' => 974,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 13:41:58',
            ),
            474 => 
            array (
                'id_log' => 975,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 13:43:51',
            ),
            475 => 
            array (
                'id_log' => 976,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 13:46:44',
            ),
            476 => 
            array (
                'id_log' => 977,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1281,
                'action' => '2',
                'tgl_input' => '2019-04-10 13:50:25',
            ),
            477 => 
            array (
                'id_log' => 978,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 13:56:03',
            ),
            478 => 
            array (
                'id_log' => 979,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1252,
                'action' => '3',
                'tgl_input' => '2019-04-10 14:04:55',
            ),
            479 => 
            array (
                'id_log' => 980,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1252,
                'action' => '6',
                'tgl_input' => '2019-04-10 14:04:55',
            ),
            480 => 
            array (
                'id_log' => 981,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1029,
                'action' => '9',
                'tgl_input' => '2019-04-10 14:05:26',
            ),
            481 => 
            array (
                'id_log' => 982,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1280,
                'action' => '2',
                'tgl_input' => '2019-04-10 14:06:33',
            ),
            482 => 
            array (
                'id_log' => 983,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1250,
                'action' => '3',
                'tgl_input' => '2019-04-10 14:06:33',
            ),
            483 => 
            array (
                'id_log' => 984,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1250,
                'action' => '6',
                'tgl_input' => '2019-04-10 14:06:33',
            ),
            484 => 
            array (
                'id_log' => 985,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1033,
                'action' => '9',
                'tgl_input' => '2019-04-10 14:07:29',
            ),
            485 => 
            array (
                'id_log' => 986,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1249,
                'action' => '3',
                'tgl_input' => '2019-04-10 14:08:01',
            ),
            486 => 
            array (
                'id_log' => 987,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1249,
                'action' => '6',
                'tgl_input' => '2019-04-10 14:08:01',
            ),
            487 => 
            array (
                'id_log' => 988,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1034,
                'action' => '9',
                'tgl_input' => '2019-04-10 14:08:59',
            ),
            488 => 
            array (
                'id_log' => 989,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1248,
                'action' => '2',
                'tgl_input' => '2019-04-10 14:09:22',
            ),
            489 => 
            array (
                'id_log' => 990,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1240,
                'action' => '2',
                'tgl_input' => '2019-04-10 14:09:32',
            ),
            490 => 
            array (
                'id_log' => 991,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1084,
                'action' => '9',
                'tgl_input' => '2019-04-10 14:09:58',
            ),
            491 => 
            array (
                'id_log' => 992,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1084,
                'action' => '9',
                'tgl_input' => '2019-04-10 14:10:25',
            ),
            492 => 
            array (
                'id_log' => 993,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1247,
                'action' => '3',
                'tgl_input' => '2019-04-10 14:11:06',
            ),
            493 => 
            array (
                'id_log' => 994,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1247,
                'action' => '6',
                'tgl_input' => '2019-04-10 14:11:06',
            ),
            494 => 
            array (
                'id_log' => 995,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1084,
                'action' => '9',
                'tgl_input' => '2019-04-10 14:11:32',
            ),
            495 => 
            array (
                'id_log' => 996,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1079,
                'action' => '2',
                'tgl_input' => '2019-04-10 14:13:40',
            ),
            496 => 
            array (
                'id_log' => 997,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1271,
                'action' => '2',
                'tgl_input' => '2019-04-10 14:16:02',
            ),
            497 => 
            array (
                'id_log' => 998,
                'id_user' => 'ratna',
                'id_kegiatan' => 1196,
                'action' => '7',
                'tgl_input' => '2019-04-10 14:17:53',
            ),
            498 => 
            array (
                'id_log' => 999,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1154,
                'action' => '2',
                'tgl_input' => '2019-04-10 14:18:04',
            ),
            499 => 
            array (
                'id_log' => 1000,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1076,
                'action' => '2',
                'tgl_input' => '2019-04-10 14:19:20',
            ),
        ));
        \DB::table('log_kegiatan')->insert(array (
            0 => 
            array (
                'id_log' => 1001,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1074,
                'action' => '2',
                'tgl_input' => '2019-04-10 14:21:44',
            ),
            1 => 
            array (
                'id_log' => 1002,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1146,
                'action' => '3',
                'tgl_input' => '2019-04-10 14:24:00',
            ),
            2 => 
            array (
                'id_log' => 1003,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1146,
                'action' => '6',
                'tgl_input' => '2019-04-10 14:24:00',
            ),
            3 => 
            array (
                'id_log' => 1004,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1084,
                'action' => '9',
                'tgl_input' => '2019-04-10 14:25:04',
            ),
            4 => 
            array (
                'id_log' => 1005,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1073,
                'action' => '2',
                'tgl_input' => '2019-04-10 14:26:43',
            ),
            5 => 
            array (
                'id_log' => 1006,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1269,
                'action' => '2',
                'tgl_input' => '2019-04-10 14:34:20',
            ),
            6 => 
            array (
                'id_log' => 1007,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1144,
                'action' => '2',
                'tgl_input' => '2019-04-10 14:35:47',
            ),
            7 => 
            array (
                'id_log' => 1008,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1290,
                'action' => '9',
                'tgl_input' => '2019-04-10 14:39:04',
            ),
            8 => 
            array (
                'id_log' => 1009,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1246,
                'action' => '9',
                'tgl_input' => '2019-04-10 14:39:31',
            ),
            9 => 
            array (
                'id_log' => 1010,
                'id_user' => 'kui',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 14:39:34',
            ),
            10 => 
            array (
                'id_log' => 1011,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1180,
                'action' => '9',
                'tgl_input' => '2019-04-10 14:40:53',
            ),
            11 => 
            array (
                'id_log' => 1012,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1176,
                'action' => '9',
                'tgl_input' => '2019-04-10 14:44:43',
            ),
            12 => 
            array (
                'id_log' => 1013,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1138,
                'action' => '2',
                'tgl_input' => '2019-04-10 14:45:34',
            ),
            13 => 
            array (
                'id_log' => 1014,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1175,
                'action' => '9',
                'tgl_input' => '2019-04-10 14:45:38',
            ),
            14 => 
            array (
                'id_log' => 1015,
                'id_user' => 'kui',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 14:45:52',
            ),
            15 => 
            array (
                'id_log' => 1016,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1164,
                'action' => '9',
                'tgl_input' => '2019-04-10 14:46:22',
            ),
            16 => 
            array (
                'id_log' => 1017,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1133,
                'action' => '3',
                'tgl_input' => '2019-04-10 14:48:10',
            ),
            17 => 
            array (
                'id_log' => 1018,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1133,
                'action' => '6',
                'tgl_input' => '2019-04-10 14:48:10',
            ),
            18 => 
            array (
                'id_log' => 1019,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1088,
                'action' => '9',
                'tgl_input' => '2019-04-10 14:50:02',
            ),
            19 => 
            array (
                'id_log' => 1020,
                'id_user' => 'kui',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 14:50:42',
            ),
            20 => 
            array (
                'id_log' => 1021,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1090,
                'action' => '9',
                'tgl_input' => '2019-04-10 14:50:44',
            ),
            21 => 
            array (
                'id_log' => 1022,
                'id_user' => 'kui',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 14:51:26',
            ),
            22 => 
            array (
                'id_log' => 1023,
                'id_user' => 'ratna',
                'id_kegiatan' => 1189,
                'action' => '7',
                'tgl_input' => '2019-04-10 14:52:00',
            ),
            23 => 
            array (
                'id_log' => 1024,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1247,
                'action' => '9',
                'tgl_input' => '2019-04-10 14:53:51',
            ),
            24 => 
            array (
                'id_log' => 1025,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1130,
                'action' => '2',
                'tgl_input' => '2019-04-10 14:54:18',
            ),
            25 => 
            array (
                'id_log' => 1026,
                'id_user' => 'ratna',
                'id_kegiatan' => 1185,
                'action' => '7',
                'tgl_input' => '2019-04-10 14:56:59',
            ),
            26 => 
            array (
                'id_log' => 1027,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1129,
                'action' => '3',
                'tgl_input' => '2019-04-10 14:57:05',
            ),
            27 => 
            array (
                'id_log' => 1028,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1129,
                'action' => '6',
                'tgl_input' => '2019-04-10 14:57:05',
            ),
            28 => 
            array (
                'id_log' => 1029,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1081,
                'action' => '7',
                'tgl_input' => '2019-04-10 14:59:30',
            ),
            29 => 
            array (
                'id_log' => 1030,
                'id_user' => 'ratna',
                'id_kegiatan' => 1179,
                'action' => '9',
                'tgl_input' => '2019-04-10 14:59:48',
            ),
            30 => 
            array (
                'id_log' => 1031,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1207,
                'action' => '2',
                'tgl_input' => '2019-04-10 15:02:59',
            ),
            31 => 
            array (
                'id_log' => 1032,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1157,
                'action' => '9',
                'tgl_input' => '2019-04-10 15:05:04',
            ),
            32 => 
            array (
                'id_log' => 1033,
                'id_user' => 'ratna',
                'id_kegiatan' => 1136,
                'action' => '7',
                'tgl_input' => '2019-04-10 15:06:42',
            ),
            33 => 
            array (
                'id_log' => 1034,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1159,
                'action' => '9',
                'tgl_input' => '2019-04-10 15:07:47',
            ),
            34 => 
            array (
                'id_log' => 1035,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1205,
                'action' => '2',
                'tgl_input' => '2019-04-10 15:08:36',
            ),
            35 => 
            array (
                'id_log' => 1036,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1160,
                'action' => '9',
                'tgl_input' => '2019-04-10 15:08:59',
            ),
            36 => 
            array (
                'id_log' => 1037,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1204,
                'action' => '2',
                'tgl_input' => '2019-04-10 15:16:47',
            ),
            37 => 
            array (
                'id_log' => 1038,
                'id_user' => 'uhi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 15:37:34',
            ),
            38 => 
            array (
                'id_log' => 1039,
                'id_user' => 'uhi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 15:37:40',
            ),
            39 => 
            array (
                'id_log' => 1040,
                'id_user' => 'uhi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 15:37:43',
            ),
            40 => 
            array (
                'id_log' => 1041,
                'id_user' => 'uhi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 15:37:48',
            ),
            41 => 
            array (
                'id_log' => 1042,
                'id_user' => 'uhi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 15:37:53',
            ),
            42 => 
            array (
                'id_log' => 1043,
                'id_user' => 'uhi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 15:37:56',
            ),
            43 => 
            array (
                'id_log' => 1044,
                'id_user' => 'uhi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 15:37:59',
            ),
            44 => 
            array (
                'id_log' => 1045,
                'id_user' => 'uhi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 15:38:01',
            ),
            45 => 
            array (
                'id_log' => 1046,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 15:40:24',
            ),
            46 => 
            array (
                'id_log' => 1047,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 15:41:06',
            ),
            47 => 
            array (
                'id_log' => 1048,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1161,
                'action' => '9',
                'tgl_input' => '2019-04-10 15:44:26',
            ),
            48 => 
            array (
                'id_log' => 1049,
                'id_user' => 'pus',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 15:46:27',
            ),
            49 => 
            array (
                'id_log' => 1050,
                'id_user' => 'pus',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 15:46:33',
            ),
            50 => 
            array (
                'id_log' => 1051,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1163,
                'action' => '7',
                'tgl_input' => '2019-04-10 15:46:52',
            ),
            51 => 
            array (
                'id_log' => 1052,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 15:52:44',
            ),
            52 => 
            array (
                'id_log' => 1053,
                'id_user' => 'sku',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 15:53:16',
            ),
            53 => 
            array (
                'id_log' => 1054,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1081,
                'action' => '9',
                'tgl_input' => '2019-04-10 15:56:02',
            ),
            54 => 
            array (
                'id_log' => 1055,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1173,
                'action' => '7',
                'tgl_input' => '2019-04-10 15:58:06',
            ),
            55 => 
            array (
                'id_log' => 1056,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1084,
                'action' => '9',
                'tgl_input' => '2019-04-10 16:02:04',
            ),
            56 => 
            array (
                'id_log' => 1057,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1083,
                'action' => '9',
                'tgl_input' => '2019-04-10 16:03:07',
            ),
            57 => 
            array (
                'id_log' => 1058,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1060,
                'action' => '9',
                'tgl_input' => '2019-04-10 16:03:55',
            ),
            58 => 
            array (
                'id_log' => 1059,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1059,
                'action' => '9',
                'tgl_input' => '2019-04-10 16:04:57',
            ),
            59 => 
            array (
                'id_log' => 1060,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1057,
                'action' => '9',
                'tgl_input' => '2019-04-10 16:05:12',
            ),
            60 => 
            array (
                'id_log' => 1061,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1056,
                'action' => '9',
                'tgl_input' => '2019-04-10 16:05:34',
            ),
            61 => 
            array (
                'id_log' => 1062,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1072,
                'action' => '2',
                'tgl_input' => '2019-04-10 16:11:05',
            ),
            62 => 
            array (
                'id_log' => 1063,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1071,
                'action' => '2',
                'tgl_input' => '2019-04-10 16:16:35',
            ),
            63 => 
            array (
                'id_log' => 1064,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1211,
                'action' => '2',
                'tgl_input' => '2019-04-10 16:22:08',
            ),
            64 => 
            array (
                'id_log' => 1065,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1198,
                'action' => '2',
                'tgl_input' => '2019-04-10 16:27:10',
            ),
            65 => 
            array (
                'id_log' => 1066,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1181,
                'action' => '2',
                'tgl_input' => '2019-04-10 16:30:49',
            ),
            66 => 
            array (
                'id_log' => 1067,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1177,
                'action' => '2',
                'tgl_input' => '2019-04-10 16:38:52',
            ),
            67 => 
            array (
                'id_log' => 1068,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1168,
                'action' => '2',
                'tgl_input' => '2019-04-10 16:44:35',
            ),
            68 => 
            array (
                'id_log' => 1069,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1143,
                'action' => '2',
                'tgl_input' => '2019-04-10 16:54:15',
            ),
            69 => 
            array (
                'id_log' => 1070,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1128,
                'action' => '2',
                'tgl_input' => '2019-04-10 16:56:31',
            ),
            70 => 
            array (
                'id_log' => 1071,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1284,
                'action' => '2',
                'tgl_input' => '2019-04-10 21:19:48',
            ),
            71 => 
            array (
                'id_log' => 1072,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1283,
                'action' => '2',
                'tgl_input' => '2019-04-10 21:28:54',
            ),
            72 => 
            array (
                'id_log' => 1073,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1283,
                'action' => '2',
                'tgl_input' => '2019-04-10 21:29:20',
            ),
            73 => 
            array (
                'id_log' => 1074,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1285,
                'action' => '2',
                'tgl_input' => '2019-04-10 21:47:08',
            ),
            74 => 
            array (
                'id_log' => 1075,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1286,
                'action' => '2',
                'tgl_input' => '2019-04-10 21:54:37',
            ),
            75 => 
            array (
                'id_log' => 1076,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1155,
                'action' => '7',
                'tgl_input' => '2019-04-10 21:54:53',
            ),
            76 => 
            array (
                'id_log' => 1077,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1174,
                'action' => '7',
                'tgl_input' => '2019-04-10 22:05:59',
            ),
            77 => 
            array (
                'id_log' => 1078,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1287,
                'action' => '2',
                'tgl_input' => '2019-04-10 22:08:14',
            ),
            78 => 
            array (
                'id_log' => 1079,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1172,
                'action' => '9',
                'tgl_input' => '2019-04-10 22:08:55',
            ),
            79 => 
            array (
                'id_log' => 1080,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1170,
                'action' => '9',
                'tgl_input' => '2019-04-10 22:12:09',
            ),
            80 => 
            array (
                'id_log' => 1081,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1169,
                'action' => '7',
                'tgl_input' => '2019-04-10 22:16:38',
            ),
            81 => 
            array (
                'id_log' => 1082,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1288,
                'action' => '2',
                'tgl_input' => '2019-04-10 22:19:30',
            ),
            82 => 
            array (
                'id_log' => 1083,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1167,
                'action' => '7',
                'tgl_input' => '2019-04-10 22:22:46',
            ),
            83 => 
            array (
                'id_log' => 1084,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1291,
                'action' => '2',
                'tgl_input' => '2019-04-10 22:25:04',
            ),
            84 => 
            array (
                'id_log' => 1085,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1292,
                'action' => '2',
                'tgl_input' => '2019-04-10 22:30:27',
            ),
            85 => 
            array (
                'id_log' => 1086,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1187,
                'action' => '7',
                'tgl_input' => '2019-04-10 22:32:29',
            ),
            86 => 
            array (
                'id_log' => 1087,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1199,
                'action' => '7',
                'tgl_input' => '2019-04-10 22:36:10',
            ),
            87 => 
            array (
                'id_log' => 1088,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1200,
                'action' => '7',
                'tgl_input' => '2019-04-10 22:42:36',
            ),
            88 => 
            array (
                'id_log' => 1089,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1201,
                'action' => '7',
                'tgl_input' => '2019-04-10 22:45:36',
            ),
            89 => 
            array (
                'id_log' => 1090,
                'id_user' => 'spi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 22:52:37',
            ),
            90 => 
            array (
                'id_log' => 1091,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1230,
                'action' => '7',
                'tgl_input' => '2019-04-10 22:59:02',
            ),
            91 => 
            array (
                'id_log' => 1092,
                'id_user' => 'spi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-10 23:10:04',
            ),
            92 => 
            array (
                'id_log' => 1093,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1142,
                'action' => '3',
                'tgl_input' => '2019-04-11 03:31:09',
            ),
            93 => 
            array (
                'id_log' => 1094,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1142,
                'action' => '6',
                'tgl_input' => '2019-04-11 03:31:09',
            ),
            94 => 
            array (
                'id_log' => 1095,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1130,
                'action' => '3',
                'tgl_input' => '2019-04-11 03:40:35',
            ),
            95 => 
            array (
                'id_log' => 1096,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1130,
                'action' => '6',
                'tgl_input' => '2019-04-11 03:40:35',
            ),
            96 => 
            array (
                'id_log' => 1097,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1140,
                'action' => '3',
                'tgl_input' => '2019-04-11 03:42:32',
            ),
            97 => 
            array (
                'id_log' => 1098,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1140,
                'action' => '6',
                'tgl_input' => '2019-04-11 03:42:32',
            ),
            98 => 
            array (
                'id_log' => 1099,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1203,
                'action' => '2',
                'tgl_input' => '2019-04-11 03:55:52',
            ),
            99 => 
            array (
                'id_log' => 1100,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1202,
                'action' => '2',
                'tgl_input' => '2019-04-11 04:02:17',
            ),
            100 => 
            array (
                'id_log' => 1101,
                'id_user' => 'etty',
                'id_kegiatan' => 1112,
                'action' => '9',
                'tgl_input' => '2019-04-11 04:04:33',
            ),
            101 => 
            array (
                'id_log' => 1102,
                'id_user' => 'etty',
                'id_kegiatan' => 1119,
                'action' => '9',
                'tgl_input' => '2019-04-11 04:14:26',
            ),
            102 => 
            array (
                'id_log' => 1103,
                'id_user' => 'etty',
                'id_kegiatan' => 1120,
                'action' => '9',
                'tgl_input' => '2019-04-11 04:18:22',
            ),
            103 => 
            array (
                'id_log' => 1104,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 04:44:23',
            ),
            104 => 
            array (
                'id_log' => 1105,
                'id_user' => 'tutik',
                'id_kegiatan' => 1052,
                'action' => '3',
                'tgl_input' => '2019-04-11 07:27:26',
            ),
            105 => 
            array (
                'id_log' => 1106,
                'id_user' => 'tutik',
                'id_kegiatan' => 1052,
                'action' => '6',
                'tgl_input' => '2019-04-11 07:27:26',
            ),
            106 => 
            array (
                'id_log' => 1107,
                'id_user' => 'tutik',
                'id_kegiatan' => 1050,
                'action' => '3',
                'tgl_input' => '2019-04-11 07:28:29',
            ),
            107 => 
            array (
                'id_log' => 1108,
                'id_user' => 'tutik',
                'id_kegiatan' => 1050,
                'action' => '6',
                'tgl_input' => '2019-04-11 07:28:29',
            ),
            108 => 
            array (
                'id_log' => 1109,
                'id_user' => 'tutik',
                'id_kegiatan' => 1049,
                'action' => '3',
                'tgl_input' => '2019-04-11 07:29:24',
            ),
            109 => 
            array (
                'id_log' => 1110,
                'id_user' => 'tutik',
                'id_kegiatan' => 1049,
                'action' => '6',
                'tgl_input' => '2019-04-11 07:29:24',
            ),
            110 => 
            array (
                'id_log' => 1111,
                'id_user' => 'tutik',
                'id_kegiatan' => 1046,
                'action' => '3',
                'tgl_input' => '2019-04-11 07:31:03',
            ),
            111 => 
            array (
                'id_log' => 1112,
                'id_user' => 'tutik',
                'id_kegiatan' => 1046,
                'action' => '6',
                'tgl_input' => '2019-04-11 07:31:03',
            ),
            112 => 
            array (
                'id_log' => 1113,
                'id_user' => 'tutik',
                'id_kegiatan' => 1038,
                'action' => '3',
                'tgl_input' => '2019-04-11 07:33:07',
            ),
            113 => 
            array (
                'id_log' => 1114,
                'id_user' => 'tutik',
                'id_kegiatan' => 1038,
                'action' => '6',
                'tgl_input' => '2019-04-11 07:33:07',
            ),
            114 => 
            array (
                'id_log' => 1115,
                'id_user' => 'tutik',
                'id_kegiatan' => 1080,
                'action' => '3',
                'tgl_input' => '2019-04-11 07:34:17',
            ),
            115 => 
            array (
                'id_log' => 1116,
                'id_user' => 'tutik',
                'id_kegiatan' => 1080,
                'action' => '6',
                'tgl_input' => '2019-04-11 07:34:17',
            ),
            116 => 
            array (
                'id_log' => 1117,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1117,
                'action' => '2',
                'tgl_input' => '2019-04-11 07:40:03',
            ),
            117 => 
            array (
                'id_log' => 1118,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1116,
                'action' => '2',
                'tgl_input' => '2019-04-11 07:41:51',
            ),
            118 => 
            array (
                'id_log' => 1119,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1115,
                'action' => '2',
                'tgl_input' => '2019-04-11 07:43:16',
            ),
            119 => 
            array (
                'id_log' => 1120,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1279,
                'action' => '2',
                'tgl_input' => '2019-04-11 07:46:23',
            ),
            120 => 
            array (
                'id_log' => 1121,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1227,
                'action' => '2',
                'tgl_input' => '2019-04-11 07:51:48',
            ),
            121 => 
            array (
                'id_log' => 1122,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1192,
                'action' => '2',
                'tgl_input' => '2019-04-11 07:53:56',
            ),
            122 => 
            array (
                'id_log' => 1123,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1186,
                'action' => '2',
                'tgl_input' => '2019-04-11 07:57:42',
            ),
            123 => 
            array (
                'id_log' => 1124,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1178,
                'action' => '2',
                'tgl_input' => '2019-04-11 08:00:08',
            ),
            124 => 
            array (
                'id_log' => 1125,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1262,
                'action' => '7',
                'tgl_input' => '2019-04-11 08:00:33',
            ),
            125 => 
            array (
                'id_log' => 1126,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1165,
                'action' => '2',
                'tgl_input' => '2019-04-11 08:03:32',
            ),
            126 => 
            array (
                'id_log' => 1127,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1260,
                'action' => '7',
                'tgl_input' => '2019-04-11 08:04:08',
            ),
            127 => 
            array (
                'id_log' => 1128,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1125,
                'action' => '2',
                'tgl_input' => '2019-04-11 08:06:49',
            ),
            128 => 
            array (
                'id_log' => 1129,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1232,
                'action' => '7',
                'tgl_input' => '2019-04-11 08:13:05',
            ),
            129 => 
            array (
                'id_log' => 1130,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1121,
                'action' => '2',
                'tgl_input' => '2019-04-11 08:14:25',
            ),
            130 => 
            array (
                'id_log' => 1131,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1120,
                'action' => '2',
                'tgl_input' => '2019-04-11 08:17:25',
            ),
            131 => 
            array (
                'id_log' => 1132,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1119,
                'action' => '2',
                'tgl_input' => '2019-04-11 08:20:11',
            ),
            132 => 
            array (
                'id_log' => 1133,
                'id_user' => 'UPTTIK',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 08:23:02',
            ),
            133 => 
            array (
                'id_log' => 1134,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1112,
                'action' => '2',
                'tgl_input' => '2019-04-11 08:23:14',
            ),
            134 => 
            array (
                'id_log' => 1135,
                'id_user' => 'UPTTIK',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 08:25:08',
            ),
            135 => 
            array (
                'id_log' => 1136,
                'id_user' => 'UPTTIK',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 08:26:18',
            ),
            136 => 
            array (
                'id_log' => 1137,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1045,
                'action' => '2',
                'tgl_input' => '2019-04-11 08:26:18',
            ),
            137 => 
            array (
                'id_log' => 1138,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1131,
                'action' => '3',
                'tgl_input' => '2019-04-11 08:31:55',
            ),
            138 => 
            array (
                'id_log' => 1139,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1131,
                'action' => '6',
                'tgl_input' => '2019-04-11 08:31:55',
            ),
            139 => 
            array (
                'id_log' => 1140,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1290,
                'action' => '10',
                'tgl_input' => '2019-04-11 08:36:04',
            ),
            140 => 
            array (
                'id_log' => 1141,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 08:36:23',
            ),
            141 => 
            array (
                'id_log' => 1142,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1195,
                'action' => '2',
                'tgl_input' => '2019-04-11 08:43:44',
            ),
            142 => 
            array (
                'id_log' => 1143,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1247,
                'action' => '8',
                'tgl_input' => '2019-04-11 08:45:33',
            ),
            143 => 
            array (
                'id_log' => 1144,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1247,
                'action' => '11',
                'tgl_input' => '2019-04-11 08:45:33',
            ),
            144 => 
            array (
                'id_log' => 1145,
                'id_user' => 'etty',
                'id_kegiatan' => 1121,
                'action' => '9',
                'tgl_input' => '2019-04-11 08:49:09',
            ),
            145 => 
            array (
                'id_log' => 1146,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1191,
                'action' => '2',
                'tgl_input' => '2019-04-11 08:50:14',
            ),
            146 => 
            array (
                'id_log' => 1147,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1246,
                'action' => '8',
                'tgl_input' => '2019-04-11 08:50:30',
            ),
            147 => 
            array (
                'id_log' => 1148,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1236,
                'action' => '7',
                'tgl_input' => '2019-04-11 08:50:30',
            ),
            148 => 
            array (
                'id_log' => 1149,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1246,
                'action' => '11',
                'tgl_input' => '2019-04-11 08:50:30',
            ),
            149 => 
            array (
                'id_log' => 1150,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1180,
                'action' => '8',
                'tgl_input' => '2019-04-11 08:52:00',
            ),
            150 => 
            array (
                'id_log' => 1151,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1180,
                'action' => '11',
                'tgl_input' => '2019-04-11 08:52:00',
            ),
            151 => 
            array (
                'id_log' => 1152,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1179,
                'action' => '8',
                'tgl_input' => '2019-04-11 08:52:11',
            ),
            152 => 
            array (
                'id_log' => 1153,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1179,
                'action' => '11',
                'tgl_input' => '2019-04-11 08:52:11',
            ),
            153 => 
            array (
                'id_log' => 1154,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1176,
                'action' => '8',
                'tgl_input' => '2019-04-11 08:52:29',
            ),
            154 => 
            array (
                'id_log' => 1155,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1176,
                'action' => '11',
                'tgl_input' => '2019-04-11 08:52:29',
            ),
            155 => 
            array (
                'id_log' => 1156,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1290,
                'action' => '7',
                'tgl_input' => '2019-04-11 08:53:03',
            ),
            156 => 
            array (
                'id_log' => 1157,
                'id_user' => 'keuangan',
                'id_kegiatan' => 0,
                'action' => '10',
                'tgl_input' => '2019-04-11 08:54:59',
            ),
            157 => 
            array (
                'id_log' => 1158,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1158,
                'action' => '2',
                'tgl_input' => '2019-04-11 08:55:05',
            ),
            158 => 
            array (
                'id_log' => 1159,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1175,
                'action' => '8',
                'tgl_input' => '2019-04-11 08:56:48',
            ),
            159 => 
            array (
                'id_log' => 1160,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1175,
                'action' => '11',
                'tgl_input' => '2019-04-11 08:56:48',
            ),
            160 => 
            array (
                'id_log' => 1161,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1175,
                'action' => '8',
                'tgl_input' => '2019-04-11 08:58:11',
            ),
            161 => 
            array (
                'id_log' => 1162,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1175,
                'action' => '11',
                'tgl_input' => '2019-04-11 08:58:11',
            ),
            162 => 
            array (
                'id_log' => 1163,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1172,
                'action' => '8',
                'tgl_input' => '2019-04-11 08:59:59',
            ),
            163 => 
            array (
                'id_log' => 1164,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1172,
                'action' => '11',
                'tgl_input' => '2019-04-11 08:59:59',
            ),
            164 => 
            array (
                'id_log' => 1165,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1170,
                'action' => '8',
                'tgl_input' => '2019-04-11 09:01:56',
            ),
            165 => 
            array (
                'id_log' => 1166,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1170,
                'action' => '11',
                'tgl_input' => '2019-04-11 09:01:56',
            ),
            166 => 
            array (
                'id_log' => 1167,
                'id_user' => 'ratna',
                'id_kegiatan' => 1185,
                'action' => '7',
                'tgl_input' => '2019-04-11 09:04:21',
            ),
            167 => 
            array (
                'id_log' => 1168,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1127,
                'action' => '2',
                'tgl_input' => '2019-04-11 09:04:22',
            ),
            168 => 
            array (
                'id_log' => 1169,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1164,
                'action' => '10',
                'tgl_input' => '2019-04-11 09:05:36',
            ),
            169 => 
            array (
                'id_log' => 1170,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1155,
                'action' => '7',
                'tgl_input' => '2019-04-11 09:07:35',
            ),
            170 => 
            array (
                'id_log' => 1171,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1161,
                'action' => '8',
                'tgl_input' => '2019-04-11 09:08:09',
            ),
            171 => 
            array (
                'id_log' => 1172,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1161,
                'action' => '11',
                'tgl_input' => '2019-04-11 09:08:09',
            ),
            172 => 
            array (
                'id_log' => 1173,
                'id_user' => 'etty',
                'id_kegiatan' => 1125,
                'action' => '9',
                'tgl_input' => '2019-04-11 09:10:26',
            ),
            173 => 
            array (
                'id_log' => 1174,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1126,
                'action' => '2',
                'tgl_input' => '2019-04-11 09:12:12',
            ),
            174 => 
            array (
                'id_log' => 1175,
                'id_user' => 'ratna',
                'id_kegiatan' => 1136,
                'action' => '7',
                'tgl_input' => '2019-04-11 09:13:59',
            ),
            175 => 
            array (
                'id_log' => 1176,
                'id_user' => 'keuangan',
                'id_kegiatan' => 0,
                'action' => '10',
                'tgl_input' => '2019-04-11 09:14:30',
            ),
            176 => 
            array (
                'id_log' => 1177,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1160,
                'action' => '8',
                'tgl_input' => '2019-04-11 09:14:40',
            ),
            177 => 
            array (
                'id_log' => 1178,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1160,
                'action' => '11',
                'tgl_input' => '2019-04-11 09:14:40',
            ),
            178 => 
            array (
                'id_log' => 1179,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1159,
                'action' => '8',
                'tgl_input' => '2019-04-11 09:14:48',
            ),
            179 => 
            array (
                'id_log' => 1180,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1159,
                'action' => '11',
                'tgl_input' => '2019-04-11 09:14:48',
            ),
            180 => 
            array (
                'id_log' => 1181,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1157,
                'action' => '8',
                'tgl_input' => '2019-04-11 09:15:02',
            ),
            181 => 
            array (
                'id_log' => 1182,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1157,
                'action' => '11',
                'tgl_input' => '2019-04-11 09:15:02',
            ),
            182 => 
            array (
                'id_log' => 1183,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1164,
                'action' => '7',
                'tgl_input' => '2019-04-11 09:15:35',
            ),
            183 => 
            array (
                'id_log' => 1184,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1125,
                'action' => '10',
                'tgl_input' => '2019-04-11 09:18:25',
            ),
            184 => 
            array (
                'id_log' => 1185,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1121,
                'action' => '8',
                'tgl_input' => '2019-04-11 09:20:45',
            ),
            185 => 
            array (
                'id_log' => 1186,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1121,
                'action' => '11',
                'tgl_input' => '2019-04-11 09:20:45',
            ),
            186 => 
            array (
                'id_log' => 1187,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1120,
                'action' => '8',
                'tgl_input' => '2019-04-11 09:22:30',
            ),
            187 => 
            array (
                'id_log' => 1188,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1120,
                'action' => '11',
                'tgl_input' => '2019-04-11 09:22:30',
            ),
            188 => 
            array (
                'id_log' => 1189,
                'id_user' => 'UPTTIK',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 09:22:43',
            ),
            189 => 
            array (
                'id_log' => 1190,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1119,
                'action' => '8',
                'tgl_input' => '2019-04-11 09:22:45',
            ),
            190 => 
            array (
                'id_log' => 1191,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1119,
                'action' => '11',
                'tgl_input' => '2019-04-11 09:22:45',
            ),
            191 => 
            array (
                'id_log' => 1192,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1112,
                'action' => '8',
                'tgl_input' => '2019-04-11 09:23:01',
            ),
            192 => 
            array (
                'id_log' => 1193,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1112,
                'action' => '11',
                'tgl_input' => '2019-04-11 09:23:01',
            ),
            193 => 
            array (
                'id_log' => 1194,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1090,
                'action' => '8',
                'tgl_input' => '2019-04-11 09:24:04',
            ),
            194 => 
            array (
                'id_log' => 1195,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1090,
                'action' => '11',
                'tgl_input' => '2019-04-11 09:24:04',
            ),
            195 => 
            array (
                'id_log' => 1196,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1088,
                'action' => '8',
                'tgl_input' => '2019-04-11 09:24:59',
            ),
            196 => 
            array (
                'id_log' => 1197,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1088,
                'action' => '11',
                'tgl_input' => '2019-04-11 09:24:59',
            ),
            197 => 
            array (
                'id_log' => 1198,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1084,
                'action' => '8',
                'tgl_input' => '2019-04-11 09:25:18',
            ),
            198 => 
            array (
                'id_log' => 1199,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1084,
                'action' => '11',
                'tgl_input' => '2019-04-11 09:25:18',
            ),
            199 => 
            array (
                'id_log' => 1200,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1083,
                'action' => '8',
                'tgl_input' => '2019-04-11 09:25:31',
            ),
            200 => 
            array (
                'id_log' => 1201,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1083,
                'action' => '11',
                'tgl_input' => '2019-04-11 09:25:31',
            ),
            201 => 
            array (
                'id_log' => 1202,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1081,
                'action' => '8',
                'tgl_input' => '2019-04-11 09:26:39',
            ),
            202 => 
            array (
                'id_log' => 1203,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1081,
                'action' => '11',
                'tgl_input' => '2019-04-11 09:26:39',
            ),
            203 => 
            array (
                'id_log' => 1204,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1060,
                'action' => '8',
                'tgl_input' => '2019-04-11 09:26:59',
            ),
            204 => 
            array (
                'id_log' => 1205,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1060,
                'action' => '11',
                'tgl_input' => '2019-04-11 09:26:59',
            ),
            205 => 
            array (
                'id_log' => 1206,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1059,
                'action' => '8',
                'tgl_input' => '2019-04-11 09:27:32',
            ),
            206 => 
            array (
                'id_log' => 1207,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1059,
                'action' => '11',
                'tgl_input' => '2019-04-11 09:27:32',
            ),
            207 => 
            array (
                'id_log' => 1208,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1057,
                'action' => '8',
                'tgl_input' => '2019-04-11 09:28:03',
            ),
            208 => 
            array (
                'id_log' => 1209,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1057,
                'action' => '11',
                'tgl_input' => '2019-04-11 09:28:03',
            ),
            209 => 
            array (
                'id_log' => 1210,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1056,
                'action' => '8',
                'tgl_input' => '2019-04-11 09:28:46',
            ),
            210 => 
            array (
                'id_log' => 1211,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1056,
                'action' => '11',
                'tgl_input' => '2019-04-11 09:28:46',
            ),
            211 => 
            array (
                'id_log' => 1212,
                'id_user' => 'spr',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 09:28:54',
            ),
            212 => 
            array (
                'id_log' => 1213,
                'id_user' => 'etty',
                'id_kegiatan' => 1165,
                'action' => '7',
                'tgl_input' => '2019-04-11 09:29:19',
            ),
            213 => 
            array (
                'id_log' => 1214,
                'id_user' => 'etty',
                'id_kegiatan' => 1125,
                'action' => '9',
                'tgl_input' => '2019-04-11 09:30:10',
            ),
            214 => 
            array (
                'id_log' => 1215,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1209,
                'action' => '9',
                'tgl_input' => '2019-04-11 09:30:55',
            ),
            215 => 
            array (
                'id_log' => 1216,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1034,
                'action' => '10',
                'tgl_input' => '2019-04-11 09:35:15',
            ),
            216 => 
            array (
                'id_log' => 1217,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1209,
                'action' => '8',
                'tgl_input' => '2019-04-11 09:35:42',
            ),
            217 => 
            array (
                'id_log' => 1218,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1209,
                'action' => '11',
                'tgl_input' => '2019-04-11 09:35:42',
            ),
            218 => 
            array (
                'id_log' => 1219,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1033,
                'action' => '8',
                'tgl_input' => '2019-04-11 09:36:09',
            ),
            219 => 
            array (
                'id_log' => 1220,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1033,
                'action' => '11',
                'tgl_input' => '2019-04-11 09:36:09',
            ),
            220 => 
            array (
                'id_log' => 1221,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1029,
                'action' => '8',
                'tgl_input' => '2019-04-11 09:38:12',
            ),
            221 => 
            array (
                'id_log' => 1222,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1029,
                'action' => '11',
                'tgl_input' => '2019-04-11 09:38:12',
            ),
            222 => 
            array (
                'id_log' => 1223,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1034,
                'action' => '7',
                'tgl_input' => '2019-04-11 09:38:29',
            ),
            223 => 
            array (
                'id_log' => 1224,
                'id_user' => 'etty',
                'id_kegiatan' => 1178,
                'action' => '7',
                'tgl_input' => '2019-04-11 09:39:32',
            ),
            224 => 
            array (
                'id_log' => 1225,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 09:41:00',
            ),
            225 => 
            array (
                'id_log' => 1226,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 09:41:29',
            ),
            226 => 
            array (
                'id_log' => 1227,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 09:41:51',
            ),
            227 => 
            array (
                'id_log' => 1228,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 09:42:03',
            ),
            228 => 
            array (
                'id_log' => 1229,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 09:42:12',
            ),
            229 => 
            array (
                'id_log' => 1230,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 09:42:35',
            ),
            230 => 
            array (
                'id_log' => 1231,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1125,
                'action' => '10',
                'tgl_input' => '2019-04-11 09:42:41',
            ),
            231 => 
            array (
                'id_log' => 1232,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 09:42:44',
            ),
            232 => 
            array (
                'id_log' => 1233,
                'id_user' => 'etty',
                'id_kegiatan' => 1125,
                'action' => '7',
                'tgl_input' => '2019-04-11 09:45:23',
            ),
            233 => 
            array (
                'id_log' => 1234,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1080,
                'action' => '7',
                'tgl_input' => '2019-04-11 09:48:13',
            ),
            234 => 
            array (
                'id_log' => 1235,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 09:51:02',
            ),
            235 => 
            array (
                'id_log' => 1236,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 09:51:11',
            ),
            236 => 
            array (
                'id_log' => 1237,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1124,
                'action' => '2',
                'tgl_input' => '2019-04-11 09:57:38',
            ),
            237 => 
            array (
                'id_log' => 1238,
                'id_user' => 'spr',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 10:03:34',
            ),
            238 => 
            array (
                'id_log' => 1239,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1123,
                'action' => '2',
                'tgl_input' => '2019-04-11 10:05:18',
            ),
            239 => 
            array (
                'id_log' => 1240,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1249,
                'action' => '7',
                'tgl_input' => '2019-04-11 10:06:50',
            ),
            240 => 
            array (
                'id_log' => 1241,
                'id_user' => 'spr',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 10:10:23',
            ),
            241 => 
            array (
                'id_log' => 1242,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 10:11:02',
            ),
            242 => 
            array (
                'id_log' => 1243,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1111,
                'action' => '2',
                'tgl_input' => '2019-04-11 10:11:53',
            ),
            243 => 
            array (
                'id_log' => 1244,
                'id_user' => 'etty',
                'id_kegiatan' => 1186,
                'action' => '7',
                'tgl_input' => '2019-04-11 10:12:38',
            ),
            244 => 
            array (
                'id_log' => 1245,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 10:15:36',
            ),
            245 => 
            array (
                'id_log' => 1246,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 10:20:09',
            ),
            246 => 
            array (
                'id_log' => 1247,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1250,
                'action' => '7',
                'tgl_input' => '2019-04-11 10:23:07',
            ),
            247 => 
            array (
                'id_log' => 1248,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1055,
                'action' => '2',
                'tgl_input' => '2019-04-11 10:25:16',
            ),
            248 => 
            array (
                'id_log' => 1249,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 10:26:44',
            ),
            249 => 
            array (
                'id_log' => 1250,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 10:28:55',
            ),
            250 => 
            array (
                'id_log' => 1251,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1039,
                'action' => '2',
                'tgl_input' => '2019-04-11 10:29:10',
            ),
            251 => 
            array (
                'id_log' => 1252,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 10:32:50',
            ),
            252 => 
            array (
                'id_log' => 1253,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 10:36:08',
            ),
            253 => 
            array (
                'id_log' => 1254,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1060,
                'action' => '2',
                'tgl_input' => '2019-04-11 10:37:02',
            ),
            254 => 
            array (
                'id_log' => 1255,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1059,
                'action' => '2',
                'tgl_input' => '2019-04-11 10:40:26',
            ),
            255 => 
            array (
                'id_log' => 1256,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 10:43:30',
            ),
            256 => 
            array (
                'id_log' => 1257,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1057,
                'action' => '2',
                'tgl_input' => '2019-04-11 10:43:40',
            ),
            257 => 
            array (
                'id_log' => 1258,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1056,
                'action' => '2',
                'tgl_input' => '2019-04-11 10:47:45',
            ),
            258 => 
            array (
                'id_log' => 1259,
                'id_user' => 'spi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 10:49:32',
            ),
            259 => 
            array (
                'id_log' => 1260,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1184,
                'action' => '3',
                'tgl_input' => '2019-04-11 11:08:02',
            ),
            260 => 
            array (
                'id_log' => 1261,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1184,
                'action' => '6',
                'tgl_input' => '2019-04-11 11:08:02',
            ),
            261 => 
            array (
                'id_log' => 1262,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 11:20:40',
            ),
            262 => 
            array (
                'id_log' => 1263,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1183,
                'action' => '2',
                'tgl_input' => '2019-04-11 11:21:47',
            ),
            263 => 
            array (
                'id_log' => 1264,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1164,
                'action' => '7',
                'tgl_input' => '2019-04-11 11:23:56',
            ),
            264 => 
            array (
                'id_log' => 1265,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 11:24:11',
            ),
            265 => 
            array (
                'id_log' => 1266,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1155,
                'action' => '7',
                'tgl_input' => '2019-04-11 11:25:36',
            ),
            266 => 
            array (
                'id_log' => 1267,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 11:26:47',
            ),
            267 => 
            array (
                'id_log' => 1268,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 11:27:00',
            ),
            268 => 
            array (
                'id_log' => 1269,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 11:27:12',
            ),
            269 => 
            array (
                'id_log' => 1270,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 11:27:20',
            ),
            270 => 
            array (
                'id_log' => 1271,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 11:27:46',
            ),
            271 => 
            array (
                'id_log' => 1272,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1174,
                'action' => '9',
                'tgl_input' => '2019-04-11 11:30:36',
            ),
            272 => 
            array (
                'id_log' => 1273,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 11:31:33',
            ),
            273 => 
            array (
                'id_log' => 1274,
                'id_user' => 'tutik',
                'id_kegiatan' => 1048,
                'action' => '3',
                'tgl_input' => '2019-04-11 11:34:33',
            ),
            274 => 
            array (
                'id_log' => 1275,
                'id_user' => 'tutik',
                'id_kegiatan' => 1048,
                'action' => '6',
                'tgl_input' => '2019-04-11 11:34:33',
            ),
            275 => 
            array (
                'id_log' => 1276,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 11:37:47',
            ),
            276 => 
            array (
                'id_log' => 1277,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1210,
                'action' => '9',
                'tgl_input' => '2019-04-11 11:38:19',
            ),
            277 => 
            array (
                'id_log' => 1278,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1229,
                'action' => '9',
                'tgl_input' => '2019-04-11 11:40:33',
            ),
            278 => 
            array (
                'id_log' => 1279,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 11:42:47',
            ),
            279 => 
            array (
                'id_log' => 1280,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1229,
                'action' => '8',
                'tgl_input' => '2019-04-11 11:44:29',
            ),
            280 => 
            array (
                'id_log' => 1281,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1229,
                'action' => '11',
                'tgl_input' => '2019-04-11 11:44:29',
            ),
            281 => 
            array (
                'id_log' => 1282,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1210,
                'action' => '8',
                'tgl_input' => '2019-04-11 11:44:43',
            ),
            282 => 
            array (
                'id_log' => 1283,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1210,
                'action' => '11',
                'tgl_input' => '2019-04-11 11:44:43',
            ),
            283 => 
            array (
                'id_log' => 1284,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1174,
                'action' => '8',
                'tgl_input' => '2019-04-11 11:44:55',
            ),
            284 => 
            array (
                'id_log' => 1285,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1174,
                'action' => '11',
                'tgl_input' => '2019-04-11 11:44:55',
            ),
            285 => 
            array (
                'id_log' => 1286,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 11:56:10',
            ),
            286 => 
            array (
                'id_log' => 1287,
                'id_user' => 'spi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 11:58:16',
            ),
            287 => 
            array (
                'id_log' => 1288,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 12:17:28',
            ),
            288 => 
            array (
                'id_log' => 1289,
                'id_user' => 'spi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 12:48:13',
            ),
            289 => 
            array (
                'id_log' => 1290,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 13:12:49',
            ),
            290 => 
            array (
                'id_log' => 1291,
                'id_user' => 'tutik',
                'id_kegiatan' => 1214,
                'action' => '3',
                'tgl_input' => '2019-04-11 13:24:13',
            ),
            291 => 
            array (
                'id_log' => 1292,
                'id_user' => 'tutik',
                'id_kegiatan' => 1214,
                'action' => '6',
                'tgl_input' => '2019-04-11 13:24:13',
            ),
            292 => 
            array (
                'id_log' => 1293,
                'id_user' => 'UPTTIK',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 13:24:25',
            ),
            293 => 
            array (
                'id_log' => 1294,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1163,
                'action' => '9',
                'tgl_input' => '2019-04-11 13:33:55',
            ),
            294 => 
            array (
                'id_log' => 1295,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 13:41:41',
            ),
            295 => 
            array (
                'id_log' => 1296,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1236,
                'action' => '9',
                'tgl_input' => '2019-04-11 13:46:47',
            ),
            296 => 
            array (
                'id_log' => 1297,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1184,
                'action' => '7',
                'tgl_input' => '2019-04-11 13:52:23',
            ),
            297 => 
            array (
                'id_log' => 1298,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 13:55:43',
            ),
            298 => 
            array (
                'id_log' => 1299,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1199,
                'action' => '9',
                'tgl_input' => '2019-04-11 13:56:58',
            ),
            299 => 
            array (
                'id_log' => 1300,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1135,
                'action' => '3',
                'tgl_input' => '2019-04-11 13:57:35',
            ),
            300 => 
            array (
                'id_log' => 1301,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1135,
                'action' => '6',
                'tgl_input' => '2019-04-11 13:57:35',
            ),
            301 => 
            array (
                'id_log' => 1302,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1232,
                'action' => '9',
                'tgl_input' => '2019-04-11 13:58:46',
            ),
            302 => 
            array (
                'id_log' => 1303,
                'id_user' => 'spi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 14:00:04',
            ),
            303 => 
            array (
                'id_log' => 1304,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1132,
                'action' => '3',
                'tgl_input' => '2019-04-11 14:00:12',
            ),
            304 => 
            array (
                'id_log' => 1305,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1132,
                'action' => '6',
                'tgl_input' => '2019-04-11 14:00:12',
            ),
            305 => 
            array (
                'id_log' => 1306,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 14:00:16',
            ),
            306 => 
            array (
                'id_log' => 1307,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1201,
                'action' => '9',
                'tgl_input' => '2019-04-11 14:01:17',
            ),
            307 => 
            array (
                'id_log' => 1308,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1260,
                'action' => '9',
                'tgl_input' => '2019-04-11 14:02:26',
            ),
            308 => 
            array (
                'id_log' => 1309,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1200,
                'action' => '9',
                'tgl_input' => '2019-04-11 14:04:36',
            ),
            309 => 
            array (
                'id_log' => 1310,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 14:07:51',
            ),
            310 => 
            array (
                'id_log' => 1311,
                'id_user' => 'pus',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 14:08:23',
            ),
            311 => 
            array (
                'id_log' => 1312,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1187,
                'action' => '7',
                'tgl_input' => '2019-04-11 14:10:37',
            ),
            312 => 
            array (
                'id_log' => 1313,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1262,
                'action' => '9',
                'tgl_input' => '2019-04-11 14:12:00',
            ),
            313 => 
            array (
                'id_log' => 1314,
                'id_user' => 'utami',
                'id_kegiatan' => 1148,
                'action' => '9',
                'tgl_input' => '2019-04-11 14:18:59',
            ),
            314 => 
            array (
                'id_log' => 1315,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1230,
                'action' => '7',
                'tgl_input' => '2019-04-11 14:22:58',
            ),
            315 => 
            array (
                'id_log' => 1316,
                'id_user' => 'utami',
                'id_kegiatan' => 1148,
                'action' => '9',
                'tgl_input' => '2019-04-11 14:29:10',
            ),
            316 => 
            array (
                'id_log' => 1317,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 14:49:56',
            ),
            317 => 
            array (
                'id_log' => 1318,
                'id_user' => 'sku',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 14:53:22',
            ),
            318 => 
            array (
                'id_log' => 1319,
                'id_user' => 'ppp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 14:54:15',
            ),
            319 => 
            array (
                'id_log' => 1320,
                'id_user' => 'ppp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 15:01:01',
            ),
            320 => 
            array (
                'id_log' => 1321,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 15:02:05',
            ),
            321 => 
            array (
                'id_log' => 1322,
                'id_user' => 'tutik',
                'id_kegiatan' => 1108,
                'action' => '3',
                'tgl_input' => '2019-04-11 15:03:39',
            ),
            322 => 
            array (
                'id_log' => 1323,
                'id_user' => 'tutik',
                'id_kegiatan' => 1108,
                'action' => '6',
                'tgl_input' => '2019-04-11 15:03:39',
            ),
            323 => 
            array (
                'id_log' => 1324,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1252,
                'action' => '7',
                'tgl_input' => '2019-04-11 15:03:50',
            ),
            324 => 
            array (
                'id_log' => 1325,
                'id_user' => 'tutik',
                'id_kegiatan' => 1109,
                'action' => '3',
                'tgl_input' => '2019-04-11 15:05:50',
            ),
            325 => 
            array (
                'id_log' => 1326,
                'id_user' => 'tutik',
                'id_kegiatan' => 1109,
                'action' => '6',
                'tgl_input' => '2019-04-11 15:05:50',
            ),
            326 => 
            array (
                'id_log' => 1327,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1080,
                'action' => '9',
                'tgl_input' => '2019-04-11 15:06:44',
            ),
            327 => 
            array (
                'id_log' => 1328,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 15:36:01',
            ),
            328 => 
            array (
                'id_log' => 1329,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 15:36:18',
            ),
            329 => 
            array (
                'id_log' => 1330,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 15:50:13',
            ),
            330 => 
            array (
                'id_log' => 1331,
                'id_user' => 'UPTTIK',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 15:52:28',
            ),
            331 => 
            array (
                'id_log' => 1332,
                'id_user' => 'pus',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 15:52:30',
            ),
            332 => 
            array (
                'id_log' => 1333,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 15:59:16',
            ),
            333 => 
            array (
                'id_log' => 1334,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 16:11:13',
            ),
            334 => 
            array (
                'id_log' => 1335,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1262,
                'action' => '8',
                'tgl_input' => '2019-04-11 16:34:56',
            ),
            335 => 
            array (
                'id_log' => 1336,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1262,
                'action' => '11',
                'tgl_input' => '2019-04-11 16:34:56',
            ),
            336 => 
            array (
                'id_log' => 1337,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1260,
                'action' => '8',
                'tgl_input' => '2019-04-11 16:35:09',
            ),
            337 => 
            array (
                'id_log' => 1338,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1260,
                'action' => '11',
                'tgl_input' => '2019-04-11 16:35:09',
            ),
            338 => 
            array (
                'id_log' => 1339,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1236,
                'action' => '8',
                'tgl_input' => '2019-04-11 16:35:17',
            ),
            339 => 
            array (
                'id_log' => 1340,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1236,
                'action' => '11',
                'tgl_input' => '2019-04-11 16:35:17',
            ),
            340 => 
            array (
                'id_log' => 1341,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1232,
                'action' => '8',
                'tgl_input' => '2019-04-11 16:35:28',
            ),
            341 => 
            array (
                'id_log' => 1342,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1232,
                'action' => '11',
                'tgl_input' => '2019-04-11 16:35:28',
            ),
            342 => 
            array (
                'id_log' => 1343,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1201,
                'action' => '8',
                'tgl_input' => '2019-04-11 16:35:37',
            ),
            343 => 
            array (
                'id_log' => 1344,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1201,
                'action' => '11',
                'tgl_input' => '2019-04-11 16:35:37',
            ),
            344 => 
            array (
                'id_log' => 1345,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1200,
                'action' => '8',
                'tgl_input' => '2019-04-11 16:35:48',
            ),
            345 => 
            array (
                'id_log' => 1346,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1200,
                'action' => '11',
                'tgl_input' => '2019-04-11 16:35:48',
            ),
            346 => 
            array (
                'id_log' => 1347,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1199,
                'action' => '8',
                'tgl_input' => '2019-04-11 16:35:56',
            ),
            347 => 
            array (
                'id_log' => 1348,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1199,
                'action' => '11',
                'tgl_input' => '2019-04-11 16:35:56',
            ),
            348 => 
            array (
                'id_log' => 1349,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1163,
                'action' => '8',
                'tgl_input' => '2019-04-11 16:36:04',
            ),
            349 => 
            array (
                'id_log' => 1350,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1163,
                'action' => '11',
                'tgl_input' => '2019-04-11 16:36:04',
            ),
            350 => 
            array (
                'id_log' => 1351,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1148,
                'action' => '8',
                'tgl_input' => '2019-04-11 16:36:13',
            ),
            351 => 
            array (
                'id_log' => 1352,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1148,
                'action' => '11',
                'tgl_input' => '2019-04-11 16:36:13',
            ),
            352 => 
            array (
                'id_log' => 1353,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1080,
                'action' => '8',
                'tgl_input' => '2019-04-11 16:36:24',
            ),
            353 => 
            array (
                'id_log' => 1354,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1080,
                'action' => '11',
                'tgl_input' => '2019-04-11 16:36:24',
            ),
            354 => 
            array (
                'id_log' => 1355,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 16:51:24',
            ),
            355 => 
            array (
                'id_log' => 1356,
                'id_user' => 'uhi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 17:28:14',
            ),
            356 => 
            array (
                'id_log' => 1357,
                'id_user' => 'uhi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 17:28:44',
            ),
            357 => 
            array (
                'id_log' => 1358,
                'id_user' => 'uhi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 17:29:00',
            ),
            358 => 
            array (
                'id_log' => 1359,
                'id_user' => 'uhi',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 17:29:16',
            ),
            359 => 
            array (
                'id_log' => 1360,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 19:04:35',
            ),
            360 => 
            array (
                'id_log' => 1361,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 19:08:09',
            ),
            361 => 
            array (
                'id_log' => 1362,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 19:09:30',
            ),
            362 => 
            array (
                'id_log' => 1363,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 19:14:34',
            ),
            363 => 
            array (
                'id_log' => 1364,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 19:29:06',
            ),
            364 => 
            array (
                'id_log' => 1365,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 19:59:22',
            ),
            365 => 
            array (
                'id_log' => 1366,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 20:10:53',
            ),
            366 => 
            array (
                'id_log' => 1367,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 20:57:01',
            ),
            367 => 
            array (
                'id_log' => 1368,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 21:07:16',
            ),
            368 => 
            array (
                'id_log' => 1369,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 23:29:01',
            ),
            369 => 
            array (
                'id_log' => 1370,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-11 23:53:19',
            ),
            370 => 
            array (
                'id_log' => 1371,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 00:02:59',
            ),
            371 => 
            array (
                'id_log' => 1372,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 00:04:12',
            ),
            372 => 
            array (
                'id_log' => 1373,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 00:06:43',
            ),
            373 => 
            array (
                'id_log' => 1374,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 00:09:23',
            ),
            374 => 
            array (
                'id_log' => 1375,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 08:10:18',
            ),
            375 => 
            array (
                'id_log' => 1376,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 08:13:30',
            ),
            376 => 
            array (
                'id_log' => 1377,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 08:15:15',
            ),
            377 => 
            array (
                'id_log' => 1378,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 08:16:15',
            ),
            378 => 
            array (
                'id_log' => 1379,
                'id_user' => 'ratna',
                'id_kegiatan' => 1196,
                'action' => '7',
                'tgl_input' => '2019-04-12 08:30:50',
            ),
            379 => 
            array (
                'id_log' => 1380,
                'id_user' => 'ratna',
                'id_kegiatan' => 1189,
                'action' => '7',
                'tgl_input' => '2019-04-12 08:37:37',
            ),
            380 => 
            array (
                'id_log' => 1381,
                'id_user' => 'ratna',
                'id_kegiatan' => 1185,
                'action' => '7',
                'tgl_input' => '2019-04-12 08:43:52',
            ),
            381 => 
            array (
                'id_log' => 1382,
                'id_user' => 'tutik',
                'id_kegiatan' => 1222,
                'action' => '3',
                'tgl_input' => '2019-04-12 13:19:03',
            ),
            382 => 
            array (
                'id_log' => 1383,
                'id_user' => 'tutik',
                'id_kegiatan' => 1222,
                'action' => '6',
                'tgl_input' => '2019-04-12 13:19:03',
            ),
            383 => 
            array (
                'id_log' => 1384,
                'id_user' => 'tutik',
                'id_kegiatan' => 1221,
                'action' => '3',
                'tgl_input' => '2019-04-12 13:21:13',
            ),
            384 => 
            array (
                'id_log' => 1385,
                'id_user' => 'tutik',
                'id_kegiatan' => 1221,
                'action' => '6',
                'tgl_input' => '2019-04-12 13:21:13',
            ),
            385 => 
            array (
                'id_log' => 1386,
                'id_user' => 'tutik',
                'id_kegiatan' => 1219,
                'action' => '3',
                'tgl_input' => '2019-04-12 13:24:57',
            ),
            386 => 
            array (
                'id_log' => 1387,
                'id_user' => 'tutik',
                'id_kegiatan' => 1219,
                'action' => '6',
                'tgl_input' => '2019-04-12 13:24:57',
            ),
            387 => 
            array (
                'id_log' => 1388,
                'id_user' => 'tutik',
                'id_kegiatan' => 1218,
                'action' => '2',
                'tgl_input' => '2019-04-12 13:29:47',
            ),
            388 => 
            array (
                'id_log' => 1389,
                'id_user' => 'tutik',
                'id_kegiatan' => 1217,
                'action' => '3',
                'tgl_input' => '2019-04-12 13:31:58',
            ),
            389 => 
            array (
                'id_log' => 1390,
                'id_user' => 'tutik',
                'id_kegiatan' => 1217,
                'action' => '6',
                'tgl_input' => '2019-04-12 13:31:58',
            ),
            390 => 
            array (
                'id_log' => 1391,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1183,
                'action' => '2',
                'tgl_input' => '2019-04-12 13:34:46',
            ),
            391 => 
            array (
                'id_log' => 1392,
                'id_user' => 'tutik',
                'id_kegiatan' => 1216,
                'action' => '3',
                'tgl_input' => '2019-04-12 13:34:54',
            ),
            392 => 
            array (
                'id_log' => 1393,
                'id_user' => 'tutik',
                'id_kegiatan' => 1216,
                'action' => '6',
                'tgl_input' => '2019-04-12 13:34:54',
            ),
            393 => 
            array (
                'id_log' => 1394,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1278,
                'action' => '2',
                'tgl_input' => '2019-04-12 13:36:36',
            ),
            394 => 
            array (
                'id_log' => 1395,
                'id_user' => 'tutik',
                'id_kegiatan' => 1215,
                'action' => '3',
                'tgl_input' => '2019-04-12 13:39:07',
            ),
            395 => 
            array (
                'id_log' => 1396,
                'id_user' => 'tutik',
                'id_kegiatan' => 1215,
                'action' => '6',
                'tgl_input' => '2019-04-12 13:39:07',
            ),
            396 => 
            array (
                'id_log' => 1397,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1154,
                'action' => '2',
                'tgl_input' => '2019-04-12 13:39:11',
            ),
            397 => 
            array (
                'id_log' => 1398,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1277,
                'action' => '2',
                'tgl_input' => '2019-04-12 13:40:47',
            ),
            398 => 
            array (
                'id_log' => 1399,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1276,
                'action' => '2',
                'tgl_input' => '2019-04-12 13:42:24',
            ),
            399 => 
            array (
                'id_log' => 1400,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1150,
                'action' => '2',
                'tgl_input' => '2019-04-12 13:46:55',
            ),
            400 => 
            array (
                'id_log' => 1401,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1122,
                'action' => '2',
                'tgl_input' => '2019-04-12 13:47:10',
            ),
            401 => 
            array (
                'id_log' => 1402,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1275,
                'action' => '2',
                'tgl_input' => '2019-04-12 13:47:22',
            ),
            402 => 
            array (
                'id_log' => 1403,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1144,
                'action' => '3',
                'tgl_input' => '2019-04-12 13:48:43',
            ),
            403 => 
            array (
                'id_log' => 1404,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1144,
                'action' => '6',
                'tgl_input' => '2019-04-12 13:48:43',
            ),
            404 => 
            array (
                'id_log' => 1405,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1274,
                'action' => '2',
                'tgl_input' => '2019-04-12 13:49:28',
            ),
            405 => 
            array (
                'id_log' => 1406,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1141,
                'action' => '2',
                'tgl_input' => '2019-04-12 13:53:51',
            ),
            406 => 
            array (
                'id_log' => 1407,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1272,
                'action' => '2',
                'tgl_input' => '2019-04-12 13:57:34',
            ),
            407 => 
            array (
                'id_log' => 1408,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1139,
                'action' => '2',
                'tgl_input' => '2019-04-12 14:02:35',
            ),
            408 => 
            array (
                'id_log' => 1409,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1180,
                'action' => '2',
                'tgl_input' => '2019-04-12 14:02:58',
            ),
            409 => 
            array (
                'id_log' => 1410,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1268,
                'action' => '2',
                'tgl_input' => '2019-04-12 14:03:20',
            ),
            410 => 
            array (
                'id_log' => 1411,
                'id_user' => 'ratna',
                'id_kegiatan' => 1136,
                'action' => '7',
                'tgl_input' => '2019-04-12 14:04:15',
            ),
            411 => 
            array (
                'id_log' => 1412,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1173,
                'action' => '2',
                'tgl_input' => '2019-04-12 14:05:06',
            ),
            412 => 
            array (
                'id_log' => 1413,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1138,
                'action' => '3',
                'tgl_input' => '2019-04-12 14:05:39',
            ),
            413 => 
            array (
                'id_log' => 1414,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1138,
                'action' => '6',
                'tgl_input' => '2019-04-12 14:05:39',
            ),
            414 => 
            array (
                'id_log' => 1415,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1171,
                'action' => '3',
                'tgl_input' => '2019-04-12 14:06:22',
            ),
            415 => 
            array (
                'id_log' => 1416,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1171,
                'action' => '6',
                'tgl_input' => '2019-04-12 14:06:22',
            ),
            416 => 
            array (
                'id_log' => 1417,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1266,
                'action' => '2',
                'tgl_input' => '2019-04-12 14:07:23',
            ),
            417 => 
            array (
                'id_log' => 1418,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1042,
                'action' => '3',
                'tgl_input' => '2019-04-12 14:10:16',
            ),
            418 => 
            array (
                'id_log' => 1419,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1042,
                'action' => '6',
                'tgl_input' => '2019-04-12 14:10:16',
            ),
            419 => 
            array (
                'id_log' => 1420,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1261,
                'action' => '2',
                'tgl_input' => '2019-04-12 14:13:26',
            ),
            420 => 
            array (
                'id_log' => 1421,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1290,
                'action' => '9',
                'tgl_input' => '2019-04-12 14:13:48',
            ),
            421 => 
            array (
                'id_log' => 1422,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1169,
                'action' => '2',
                'tgl_input' => '2019-04-12 14:14:08',
            ),
            422 => 
            array (
                'id_log' => 1423,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1170,
                'action' => '3',
                'tgl_input' => '2019-04-12 14:14:41',
            ),
            423 => 
            array (
                'id_log' => 1424,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1170,
                'action' => '6',
                'tgl_input' => '2019-04-12 14:14:41',
            ),
            424 => 
            array (
                'id_log' => 1425,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1060,
                'action' => '3',
                'tgl_input' => '2019-04-12 14:18:17',
            ),
            425 => 
            array (
                'id_log' => 1426,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1060,
                'action' => '6',
                'tgl_input' => '2019-04-12 14:18:17',
            ),
            426 => 
            array (
                'id_log' => 1427,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1169,
                'action' => '9',
                'tgl_input' => '2019-04-12 14:19:55',
            ),
            427 => 
            array (
                'id_log' => 1428,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1167,
                'action' => '7',
                'tgl_input' => '2019-04-12 14:23:51',
            ),
            428 => 
            array (
                'id_log' => 1429,
                'id_user' => 'ppp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 14:30:38',
            ),
            429 => 
            array (
                'id_log' => 1430,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1173,
                'action' => '9',
                'tgl_input' => '2019-04-12 14:31:03',
            ),
            430 => 
            array (
                'id_log' => 1431,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1170,
                'action' => '9',
                'tgl_input' => '2019-04-12 14:33:40',
            ),
            431 => 
            array (
                'id_log' => 1432,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1171,
                'action' => '9',
                'tgl_input' => '2019-04-12 14:34:35',
            ),
            432 => 
            array (
                'id_log' => 1433,
                'id_user' => 'utami',
                'id_kegiatan' => 1053,
                'action' => '7',
                'tgl_input' => '2019-04-12 14:45:13',
            ),
            433 => 
            array (
                'id_log' => 1434,
                'id_user' => 'utami',
                'id_kegiatan' => 1109,
                'action' => '7',
                'tgl_input' => '2019-04-12 14:55:27',
            ),
            434 => 
            array (
                'id_log' => 1435,
                'id_user' => 'ppp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 14:57:52',
            ),
            435 => 
            array (
                'id_log' => 1436,
                'id_user' => 'ppp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 14:58:05',
            ),
            436 => 
            array (
                'id_log' => 1437,
                'id_user' => 'ppp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 14:58:17',
            ),
            437 => 
            array (
                'id_log' => 1438,
                'id_user' => 'ppp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 14:58:27',
            ),
            438 => 
            array (
                'id_log' => 1439,
                'id_user' => 'ppp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 14:58:52',
            ),
            439 => 
            array (
                'id_log' => 1440,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1172,
                'action' => '2',
                'tgl_input' => '2019-04-12 15:04:24',
            ),
            440 => 
            array (
                'id_log' => 1441,
                'id_user' => 'utami',
                'id_kegiatan' => 1139,
                'action' => '7',
                'tgl_input' => '2019-04-12 15:05:32',
            ),
            441 => 
            array (
                'id_log' => 1442,
                'id_user' => 'utami',
                'id_kegiatan' => 1147,
                'action' => '7',
                'tgl_input' => '2019-04-12 15:11:22',
            ),
            442 => 
            array (
                'id_log' => 1443,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1060,
                'action' => '9',
                'tgl_input' => '2019-04-12 15:12:51',
            ),
            443 => 
            array (
                'id_log' => 1444,
                'id_user' => 'tutik',
                'id_kegiatan' => 1153,
                'action' => '2',
                'tgl_input' => '2019-04-12 15:26:38',
            ),
            444 => 
            array (
                'id_log' => 1445,
                'id_user' => 'utami',
                'id_kegiatan' => 1052,
                'action' => '7',
                'tgl_input' => '2019-04-12 15:28:53',
            ),
            445 => 
            array (
                'id_log' => 1446,
                'id_user' => 'ppp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 15:48:58',
            ),
            446 => 
            array (
                'id_log' => 1447,
                'id_user' => 'ppp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 15:49:07',
            ),
            447 => 
            array (
                'id_log' => 1448,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 15:52:18',
            ),
            448 => 
            array (
                'id_log' => 1449,
                'id_user' => 'adminkeuangan',
                'id_kegiatan' => 1060,
                'action' => '8',
                'tgl_input' => '2019-04-12 15:52:59',
            ),
            449 => 
            array (
                'id_log' => 1450,
                'id_user' => 'adminkeuangan',
                'id_kegiatan' => 1060,
                'action' => '11',
                'tgl_input' => '2019-04-12 15:52:59',
            ),
            450 => 
            array (
                'id_log' => 1451,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1060,
                'action' => '9',
                'tgl_input' => '2019-04-12 15:53:22',
            ),
            451 => 
            array (
                'id_log' => 1452,
                'id_user' => 'utami',
                'id_kegiatan' => 1219,
                'action' => '7',
                'tgl_input' => '2019-04-12 16:01:17',
            ),
            452 => 
            array (
                'id_log' => 1453,
                'id_user' => 'ppp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 16:04:03',
            ),
            453 => 
            array (
                'id_log' => 1454,
                'id_user' => 'utami',
                'id_kegiatan' => 1213,
                'action' => '7',
                'tgl_input' => '2019-04-12 16:10:50',
            ),
            454 => 
            array (
                'id_log' => 1455,
                'id_user' => 'sen',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 16:14:50',
            ),
            455 => 
            array (
                'id_log' => 1456,
                'id_user' => 'utami',
                'id_kegiatan' => 1221,
                'action' => '7',
                'tgl_input' => '2019-04-12 16:17:00',
            ),
            456 => 
            array (
                'id_log' => 1457,
                'id_user' => 'sen',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 16:20:14',
            ),
            457 => 
            array (
                'id_log' => 1458,
                'id_user' => 'utami',
                'id_kegiatan' => 1214,
                'action' => '7',
                'tgl_input' => '2019-04-12 16:20:58',
            ),
            458 => 
            array (
                'id_log' => 1459,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1167,
                'action' => '9',
                'tgl_input' => '2019-04-12 16:22:48',
            ),
            459 => 
            array (
                'id_log' => 1460,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1290,
                'action' => '8',
                'tgl_input' => '2019-04-12 16:29:19',
            ),
            460 => 
            array (
                'id_log' => 1461,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1290,
                'action' => '11',
                'tgl_input' => '2019-04-12 16:29:19',
            ),
            461 => 
            array (
                'id_log' => 1462,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1173,
                'action' => '8',
                'tgl_input' => '2019-04-12 16:29:45',
            ),
            462 => 
            array (
                'id_log' => 1463,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1173,
                'action' => '11',
                'tgl_input' => '2019-04-12 16:29:45',
            ),
            463 => 
            array (
                'id_log' => 1464,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1171,
                'action' => '8',
                'tgl_input' => '2019-04-12 16:30:38',
            ),
            464 => 
            array (
                'id_log' => 1465,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1171,
                'action' => '11',
                'tgl_input' => '2019-04-12 16:30:38',
            ),
            465 => 
            array (
                'id_log' => 1466,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1170,
                'action' => '8',
                'tgl_input' => '2019-04-12 16:31:21',
            ),
            466 => 
            array (
                'id_log' => 1467,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1170,
                'action' => '11',
                'tgl_input' => '2019-04-12 16:31:21',
            ),
            467 => 
            array (
                'id_log' => 1468,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1169,
                'action' => '8',
                'tgl_input' => '2019-04-12 16:31:39',
            ),
            468 => 
            array (
                'id_log' => 1469,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1169,
                'action' => '11',
                'tgl_input' => '2019-04-12 16:31:39',
            ),
            469 => 
            array (
                'id_log' => 1470,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1167,
                'action' => '8',
                'tgl_input' => '2019-04-12 16:31:55',
            ),
            470 => 
            array (
                'id_log' => 1471,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1167,
                'action' => '11',
                'tgl_input' => '2019-04-12 16:31:55',
            ),
            471 => 
            array (
                'id_log' => 1472,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1060,
                'action' => '8',
                'tgl_input' => '2019-04-12 16:32:34',
            ),
            472 => 
            array (
                'id_log' => 1473,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1060,
                'action' => '11',
                'tgl_input' => '2019-04-12 16:32:34',
            ),
            473 => 
            array (
                'id_log' => 1474,
                'id_user' => 'utami',
                'id_kegiatan' => 1218,
                'action' => '7',
                'tgl_input' => '2019-04-12 16:33:22',
            ),
            474 => 
            array (
                'id_log' => 1475,
                'id_user' => 'UPTTIK',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 16:34:20',
            ),
            475 => 
            array (
                'id_log' => 1476,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 16:36:39',
            ),
            476 => 
            array (
                'id_log' => 1477,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 16:36:53',
            ),
            477 => 
            array (
                'id_log' => 1478,
                'id_user' => 'utami',
                'id_kegiatan' => 1048,
                'action' => '7',
                'tgl_input' => '2019-04-12 16:40:29',
            ),
            478 => 
            array (
                'id_log' => 1479,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 16:49:20',
            ),
            479 => 
            array (
                'id_log' => 1480,
                'id_user' => 'ppp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 17:12:34',
            ),
            480 => 
            array (
                'id_log' => 1481,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 17:48:52',
            ),
            481 => 
            array (
                'id_log' => 1482,
                'id_user' => 'utami',
                'id_kegiatan' => 1046,
                'action' => '7',
                'tgl_input' => '2019-04-12 19:43:42',
            ),
            482 => 
            array (
                'id_log' => 1483,
                'id_user' => 'utami',
                'id_kegiatan' => 1182,
                'action' => '9',
                'tgl_input' => '2019-04-12 19:54:16',
            ),
            483 => 
            array (
                'id_log' => 1484,
                'id_user' => 'utami',
                'id_kegiatan' => 1213,
                'action' => '9',
                'tgl_input' => '2019-04-12 19:58:55',
            ),
            484 => 
            array (
                'id_log' => 1485,
                'id_user' => 'utami',
                'id_kegiatan' => 1147,
                'action' => '9',
                'tgl_input' => '2019-04-12 20:05:12',
            ),
            485 => 
            array (
                'id_log' => 1486,
                'id_user' => 'utami',
                'id_kegiatan' => 1109,
                'action' => '9',
                'tgl_input' => '2019-04-12 20:09:29',
            ),
            486 => 
            array (
                'id_log' => 1487,
                'id_user' => 'utami',
                'id_kegiatan' => 1108,
                'action' => '9',
                'tgl_input' => '2019-04-12 20:12:21',
            ),
            487 => 
            array (
                'id_log' => 1488,
                'id_user' => 'utami',
                'id_kegiatan' => 1217,
                'action' => '7',
                'tgl_input' => '2019-04-12 20:21:40',
            ),
            488 => 
            array (
                'id_log' => 1489,
                'id_user' => 'utami',
                'id_kegiatan' => 1216,
                'action' => '7',
                'tgl_input' => '2019-04-12 20:31:37',
            ),
            489 => 
            array (
                'id_log' => 1490,
                'id_user' => 'utami',
                'id_kegiatan' => 1215,
                'action' => '7',
                'tgl_input' => '2019-04-12 20:37:08',
            ),
            490 => 
            array (
                'id_log' => 1491,
                'id_user' => 'pus',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 20:37:58',
            ),
            491 => 
            array (
                'id_log' => 1492,
                'id_user' => 'utami',
                'id_kegiatan' => 1223,
                'action' => '7',
                'tgl_input' => '2019-04-12 20:45:31',
            ),
            492 => 
            array (
                'id_log' => 1493,
                'id_user' => 'utami',
                'id_kegiatan' => 1222,
                'action' => '7',
                'tgl_input' => '2019-04-12 20:53:26',
            ),
            493 => 
            array (
                'id_log' => 1494,
                'id_user' => 'utami',
                'id_kegiatan' => 1149,
                'action' => '9',
                'tgl_input' => '2019-04-12 20:57:19',
            ),
            494 => 
            array (
                'id_log' => 1495,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 21:00:19',
            ),
            495 => 
            array (
                'id_log' => 1496,
                'id_user' => 'utami',
                'id_kegiatan' => 1146,
                'action' => '7',
                'tgl_input' => '2019-04-12 21:02:22',
            ),
            496 => 
            array (
                'id_log' => 1497,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 21:03:19',
            ),
            497 => 
            array (
                'id_log' => 1498,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 21:05:09',
            ),
            498 => 
            array (
                'id_log' => 1499,
                'id_user' => 'utami',
                'id_kegiatan' => 1144,
                'action' => '9',
                'tgl_input' => '2019-04-12 21:05:56',
            ),
            499 => 
            array (
                'id_log' => 1500,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1258,
                'action' => '2',
                'tgl_input' => '2019-04-12 21:07:22',
            ),
        ));
        \DB::table('log_kegiatan')->insert(array (
            0 => 
            array (
                'id_log' => 1501,
                'id_user' => 'utami',
                'id_kegiatan' => 1140,
                'action' => '7',
                'tgl_input' => '2019-04-12 21:12:15',
            ),
            1 => 
            array (
                'id_log' => 1502,
                'id_user' => 'pus',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 21:14:50',
            ),
            2 => 
            array (
                'id_log' => 1503,
                'id_user' => 'utami',
                'id_kegiatan' => 1138,
                'action' => '7',
                'tgl_input' => '2019-04-12 21:17:59',
            ),
            3 => 
            array (
                'id_log' => 1504,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 21:19:22',
            ),
            4 => 
            array (
                'id_log' => 1505,
                'id_user' => 'pus',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 21:19:51',
            ),
            5 => 
            array (
                'id_log' => 1506,
                'id_user' => 'utami',
                'id_kegiatan' => 1142,
                'action' => '9',
                'tgl_input' => '2019-04-12 21:21:20',
            ),
            6 => 
            array (
                'id_log' => 1507,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1257,
                'action' => '2',
                'tgl_input' => '2019-04-12 21:22:46',
            ),
            7 => 
            array (
                'id_log' => 1508,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 21:24:48',
            ),
            8 => 
            array (
                'id_log' => 1509,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1256,
                'action' => '3',
                'tgl_input' => '2019-04-12 21:24:53',
            ),
            9 => 
            array (
                'id_log' => 1510,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1256,
                'action' => '6',
                'tgl_input' => '2019-04-12 21:24:53',
            ),
            10 => 
            array (
                'id_log' => 1511,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 21:26:05',
            ),
            11 => 
            array (
                'id_log' => 1512,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1255,
                'action' => '2',
                'tgl_input' => '2019-04-12 21:30:11',
            ),
            12 => 
            array (
                'id_log' => 1513,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1254,
                'action' => '2',
                'tgl_input' => '2019-04-12 21:33:46',
            ),
            13 => 
            array (
                'id_log' => 1514,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1253,
                'action' => '2',
                'tgl_input' => '2019-04-12 21:36:46',
            ),
            14 => 
            array (
                'id_log' => 1515,
                'id_user' => 'utami',
                'id_kegiatan' => 1141,
                'action' => '7',
                'tgl_input' => '2019-04-12 21:39:14',
            ),
            15 => 
            array (
                'id_log' => 1516,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1186,
                'action' => '2',
                'tgl_input' => '2019-04-12 21:40:14',
            ),
            16 => 
            array (
                'id_log' => 1517,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1211,
                'action' => '2',
                'tgl_input' => '2019-04-12 21:46:44',
            ),
            17 => 
            array (
                'id_log' => 1518,
                'id_user' => 'utami',
                'id_kegiatan' => 1135,
                'action' => '7',
                'tgl_input' => '2019-04-12 21:47:30',
            ),
            18 => 
            array (
                'id_log' => 1519,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 21:49:20',
            ),
            19 => 
            array (
                'id_log' => 1520,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 21:52:12',
            ),
            20 => 
            array (
                'id_log' => 1521,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1198,
                'action' => '2',
                'tgl_input' => '2019-04-12 21:54:56',
            ),
            21 => 
            array (
                'id_log' => 1522,
                'id_user' => 'utami',
                'id_kegiatan' => 1134,
                'action' => '7',
                'tgl_input' => '2019-04-12 21:55:01',
            ),
            22 => 
            array (
                'id_log' => 1523,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 21:56:29',
            ),
            23 => 
            array (
                'id_log' => 1524,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 21:59:19',
            ),
            24 => 
            array (
                'id_log' => 1525,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 21:59:43',
            ),
            25 => 
            array (
                'id_log' => 1526,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1117,
                'action' => '2',
                'tgl_input' => '2019-04-12 22:00:15',
            ),
            26 => 
            array (
                'id_log' => 1527,
                'id_user' => 'utami',
                'id_kegiatan' => 1133,
                'action' => '7',
                'tgl_input' => '2019-04-12 22:01:38',
            ),
            27 => 
            array (
                'id_log' => 1528,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 22:02:29',
            ),
            28 => 
            array (
                'id_log' => 1529,
                'id_user' => 'sak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 22:04:27',
            ),
            29 => 
            array (
                'id_log' => 1530,
                'id_user' => 'utami',
                'id_kegiatan' => 1132,
                'action' => '7',
                'tgl_input' => '2019-04-12 22:05:54',
            ),
            30 => 
            array (
                'id_log' => 1531,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 22:06:58',
            ),
            31 => 
            array (
                'id_log' => 1532,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 22:09:37',
            ),
            32 => 
            array (
                'id_log' => 1533,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 22:09:39',
            ),
            33 => 
            array (
                'id_log' => 1534,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 22:12:26',
            ),
            34 => 
            array (
                'id_log' => 1535,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 22:12:35',
            ),
            35 => 
            array (
                'id_log' => 1536,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 22:12:46',
            ),
            36 => 
            array (
                'id_log' => 1537,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1045,
                'action' => '2',
                'tgl_input' => '2019-04-12 22:13:46',
            ),
            37 => 
            array (
                'id_log' => 1538,
                'id_user' => 'utami',
                'id_kegiatan' => 1131,
                'action' => '7',
                'tgl_input' => '2019-04-12 22:16:06',
            ),
            38 => 
            array (
                'id_log' => 1539,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1120,
                'action' => '2',
                'tgl_input' => '2019-04-12 22:17:38',
            ),
            39 => 
            array (
                'id_log' => 1540,
                'id_user' => 'utami',
                'id_kegiatan' => 1130,
                'action' => '7',
                'tgl_input' => '2019-04-12 22:20:52',
            ),
            40 => 
            array (
                'id_log' => 1541,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1073,
                'action' => '2',
                'tgl_input' => '2019-04-12 22:21:16',
            ),
            41 => 
            array (
                'id_log' => 1542,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1128,
                'action' => '3',
                'tgl_input' => '2019-04-12 22:22:36',
            ),
            42 => 
            array (
                'id_log' => 1543,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1128,
                'action' => '6',
                'tgl_input' => '2019-04-12 22:22:36',
            ),
            43 => 
            array (
                'id_log' => 1544,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1116,
                'action' => '3',
                'tgl_input' => '2019-04-12 22:23:59',
            ),
            44 => 
            array (
                'id_log' => 1545,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1116,
                'action' => '6',
                'tgl_input' => '2019-04-12 22:23:59',
            ),
            45 => 
            array (
                'id_log' => 1546,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1115,
                'action' => '2',
                'tgl_input' => '2019-04-12 22:27:01',
            ),
            46 => 
            array (
                'id_log' => 1547,
                'id_user' => 'utami',
                'id_kegiatan' => 1129,
                'action' => '7',
                'tgl_input' => '2019-04-12 22:28:28',
            ),
            47 => 
            array (
                'id_log' => 1548,
                'id_user' => 'utami',
                'id_kegiatan' => 1050,
                'action' => '9',
                'tgl_input' => '2019-04-12 22:30:13',
            ),
            48 => 
            array (
                'id_log' => 1549,
                'id_user' => 'utami',
                'id_kegiatan' => 1049,
                'action' => '9',
                'tgl_input' => '2019-04-12 22:31:49',
            ),
            49 => 
            array (
                'id_log' => 1550,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 22:39:27',
            ),
            50 => 
            array (
                'id_log' => 1551,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1290,
                'action' => '2',
                'tgl_input' => '2019-04-12 22:43:12',
            ),
            51 => 
            array (
                'id_log' => 1552,
                'id_user' => 'utami',
                'id_kegiatan' => 1042,
                'action' => '9',
                'tgl_input' => '2019-04-12 22:44:02',
            ),
            52 => 
            array (
                'id_log' => 1553,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 22:44:08',
            ),
            53 => 
            array (
                'id_log' => 1554,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1167,
                'action' => '2',
                'tgl_input' => '2019-04-12 22:44:40',
            ),
            54 => 
            array (
                'id_log' => 1555,
                'id_user' => 'utami',
                'id_kegiatan' => 1256,
                'action' => '7',
                'tgl_input' => '2019-04-12 22:47:25',
            ),
            55 => 
            array (
                'id_log' => 1556,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 22:47:49',
            ),
            56 => 
            array (
                'id_log' => 1557,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 22:54:25',
            ),
            57 => 
            array (
                'id_log' => 1558,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-12 23:08:59',
            ),
            58 => 
            array (
                'id_log' => 1559,
                'id_user' => 'tutik',
                'id_kegiatan' => 1153,
                'action' => '3',
                'tgl_input' => '2019-04-13 08:12:02',
            ),
            59 => 
            array (
                'id_log' => 1560,
                'id_user' => 'tutik',
                'id_kegiatan' => 1153,
                'action' => '6',
                'tgl_input' => '2019-04-13 08:12:02',
            ),
            60 => 
            array (
                'id_log' => 1561,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 08:14:02',
            ),
            61 => 
            array (
                'id_log' => 1562,
                'id_user' => 'tutik',
                'id_kegiatan' => 1152,
                'action' => '3',
                'tgl_input' => '2019-04-13 08:16:21',
            ),
            62 => 
            array (
                'id_log' => 1563,
                'id_user' => 'tutik',
                'id_kegiatan' => 1152,
                'action' => '6',
                'tgl_input' => '2019-04-13 08:16:21',
            ),
            63 => 
            array (
                'id_log' => 1564,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 08:20:39',
            ),
            64 => 
            array (
                'id_log' => 1565,
                'id_user' => 'tutik',
                'id_kegiatan' => 1148,
                'action' => '2',
                'tgl_input' => '2019-04-13 08:42:34',
            ),
            65 => 
            array (
                'id_log' => 1566,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 08:55:22',
            ),
            66 => 
            array (
                'id_log' => 1567,
                'id_user' => 'tutik',
                'id_kegiatan' => 1147,
                'action' => '2',
                'tgl_input' => '2019-04-13 08:59:15',
            ),
            67 => 
            array (
                'id_log' => 1568,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 09:02:32',
            ),
            68 => 
            array (
                'id_log' => 1569,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 09:03:35',
            ),
            69 => 
            array (
                'id_log' => 1570,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 09:10:23',
            ),
            70 => 
            array (
                'id_log' => 1571,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 09:11:08',
            ),
            71 => 
            array (
                'id_log' => 1572,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 09:15:52',
            ),
            72 => 
            array (
                'id_log' => 1573,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 09:17:12',
            ),
            73 => 
            array (
                'id_log' => 1574,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 09:24:53',
            ),
            74 => 
            array (
                'id_log' => 1575,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 09:32:15',
            ),
            75 => 
            array (
                'id_log' => 1576,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 09:34:04',
            ),
            76 => 
            array (
                'id_log' => 1577,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 09:37:02',
            ),
            77 => 
            array (
                'id_log' => 1578,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1161,
                'action' => '2',
                'tgl_input' => '2019-04-13 09:37:25',
            ),
            78 => 
            array (
                'id_log' => 1579,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1160,
                'action' => '2',
                'tgl_input' => '2019-04-13 09:38:13',
            ),
            79 => 
            array (
                'id_log' => 1580,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 09:38:52',
            ),
            80 => 
            array (
                'id_log' => 1581,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1159,
                'action' => '2',
                'tgl_input' => '2019-04-13 09:39:06',
            ),
            81 => 
            array (
                'id_log' => 1582,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1157,
                'action' => '2',
                'tgl_input' => '2019-04-13 09:40:13',
            ),
            82 => 
            array (
                'id_log' => 1583,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1230,
                'action' => '9',
                'tgl_input' => '2019-04-13 09:41:18',
            ),
            83 => 
            array (
                'id_log' => 1584,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1187,
                'action' => '9',
                'tgl_input' => '2019-04-13 09:42:27',
            ),
            84 => 
            array (
                'id_log' => 1585,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 09:42:33',
            ),
            85 => 
            array (
                'id_log' => 1586,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 09:45:37',
            ),
            86 => 
            array (
                'id_log' => 1587,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 09:46:19',
            ),
            87 => 
            array (
                'id_log' => 1588,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 09:46:28',
            ),
            88 => 
            array (
                'id_log' => 1589,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 09:46:40',
            ),
            89 => 
            array (
                'id_log' => 1590,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 09:46:50',
            ),
            90 => 
            array (
                'id_log' => 1591,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1066,
                'action' => '2',
                'tgl_input' => '2019-04-13 09:49:28',
            ),
            91 => 
            array (
                'id_log' => 1592,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1187,
                'action' => '9',
                'tgl_input' => '2019-04-13 09:49:42',
            ),
            92 => 
            array (
                'id_log' => 1593,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1103,
                'action' => '3',
                'tgl_input' => '2019-04-13 09:51:15',
            ),
            93 => 
            array (
                'id_log' => 1594,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1103,
                'action' => '6',
                'tgl_input' => '2019-04-13 09:51:15',
            ),
            94 => 
            array (
                'id_log' => 1595,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1100,
                'action' => '3',
                'tgl_input' => '2019-04-13 09:52:20',
            ),
            95 => 
            array (
                'id_log' => 1596,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1100,
                'action' => '6',
                'tgl_input' => '2019-04-13 09:52:20',
            ),
            96 => 
            array (
                'id_log' => 1597,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 09:54:14',
            ),
            97 => 
            array (
                'id_log' => 1598,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 09:55:26',
            ),
            98 => 
            array (
                'id_log' => 1599,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 09:57:26',
            ),
            99 => 
            array (
                'id_log' => 1600,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 09:57:32',
            ),
            100 => 
            array (
                'id_log' => 1601,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 09:57:51',
            ),
            101 => 
            array (
                'id_log' => 1602,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 09:58:05',
            ),
            102 => 
            array (
                'id_log' => 1603,
                'id_user' => 'bhs',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 09:58:29',
            ),
            103 => 
            array (
                'id_log' => 1604,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1173,
                'action' => '2',
                'tgl_input' => '2019-04-13 10:01:12',
            ),
            104 => 
            array (
                'id_log' => 1605,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 10:02:05',
            ),
            105 => 
            array (
                'id_log' => 1606,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1175,
                'action' => '2',
                'tgl_input' => '2019-04-13 10:04:08',
            ),
            106 => 
            array (
                'id_log' => 1607,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 10:04:54',
            ),
            107 => 
            array (
                'id_log' => 1608,
                'id_user' => 'sen',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 10:05:15',
            ),
            108 => 
            array (
                'id_log' => 1609,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1180,
                'action' => '2',
                'tgl_input' => '2019-04-13 10:06:41',
            ),
            109 => 
            array (
                'id_log' => 1610,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 10:07:01',
            ),
            110 => 
            array (
                'id_log' => 1611,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1248,
                'action' => '3',
                'tgl_input' => '2019-04-13 10:08:48',
            ),
            111 => 
            array (
                'id_log' => 1612,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1248,
                'action' => '6',
                'tgl_input' => '2019-04-13 10:08:48',
            ),
            112 => 
            array (
                'id_log' => 1613,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1139,
                'action' => '3',
                'tgl_input' => '2019-04-13 10:11:10',
            ),
            113 => 
            array (
                'id_log' => 1614,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1139,
                'action' => '6',
                'tgl_input' => '2019-04-13 10:11:10',
            ),
            114 => 
            array (
                'id_log' => 1615,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 10:12:07',
            ),
            115 => 
            array (
                'id_log' => 1616,
                'id_user' => 'ratna',
                'id_kegiatan' => 1103,
                'action' => '7',
                'tgl_input' => '2019-04-13 10:12:28',
            ),
            116 => 
            array (
                'id_log' => 1617,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 10:12:48',
            ),
            117 => 
            array (
                'id_log' => 1618,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 10:14:14',
            ),
            118 => 
            array (
                'id_log' => 1619,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 10:15:06',
            ),
            119 => 
            array (
                'id_log' => 1620,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 10:15:55',
            ),
            120 => 
            array (
                'id_log' => 1621,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 10:16:04',
            ),
            121 => 
            array (
                'id_log' => 1622,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 10:16:17',
            ),
            122 => 
            array (
                'id_log' => 1623,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1290,
                'action' => '3',
                'tgl_input' => '2019-04-13 10:17:13',
            ),
            123 => 
            array (
                'id_log' => 1624,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1290,
                'action' => '6',
                'tgl_input' => '2019-04-13 10:17:13',
            ),
            124 => 
            array (
                'id_log' => 1625,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1175,
                'action' => '3',
                'tgl_input' => '2019-04-13 10:17:50',
            ),
            125 => 
            array (
                'id_log' => 1626,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1175,
                'action' => '6',
                'tgl_input' => '2019-04-13 10:17:50',
            ),
            126 => 
            array (
                'id_log' => 1627,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1208,
                'action' => '2',
                'tgl_input' => '2019-04-13 10:21:01',
            ),
            127 => 
            array (
                'id_log' => 1628,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1207,
                'action' => '3',
                'tgl_input' => '2019-04-13 10:23:17',
            ),
            128 => 
            array (
                'id_log' => 1629,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1207,
                'action' => '6',
                'tgl_input' => '2019-04-13 10:23:17',
            ),
            129 => 
            array (
                'id_log' => 1630,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1268,
                'action' => '3',
                'tgl_input' => '2019-04-13 10:23:27',
            ),
            130 => 
            array (
                'id_log' => 1631,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1268,
                'action' => '6',
                'tgl_input' => '2019-04-13 10:23:27',
            ),
            131 => 
            array (
                'id_log' => 1632,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1173,
                'action' => '2',
                'tgl_input' => '2019-04-13 10:23:47',
            ),
            132 => 
            array (
                'id_log' => 1633,
                'id_user' => 'tutik',
                'id_kegiatan' => 1213,
                'action' => '3',
                'tgl_input' => '2019-04-13 10:24:02',
            ),
            133 => 
            array (
                'id_log' => 1634,
                'id_user' => 'tutik',
                'id_kegiatan' => 1213,
                'action' => '6',
                'tgl_input' => '2019-04-13 10:24:02',
            ),
            134 => 
            array (
                'id_log' => 1635,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1258,
                'action' => '3',
                'tgl_input' => '2019-04-13 10:25:35',
            ),
            135 => 
            array (
                'id_log' => 1636,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1258,
                'action' => '6',
                'tgl_input' => '2019-04-13 10:25:35',
            ),
            136 => 
            array (
                'id_log' => 1637,
                'id_user' => 'tutik',
                'id_kegiatan' => 1182,
                'action' => '3',
                'tgl_input' => '2019-04-13 10:27:35',
            ),
            137 => 
            array (
                'id_log' => 1638,
                'id_user' => 'tutik',
                'id_kegiatan' => 1182,
                'action' => '6',
                'tgl_input' => '2019-04-13 10:27:35',
            ),
            138 => 
            array (
                'id_log' => 1639,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1255,
                'action' => '2',
                'tgl_input' => '2019-04-13 10:27:56',
            ),
            139 => 
            array (
                'id_log' => 1640,
                'id_user' => 'ppp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 10:28:48',
            ),
            140 => 
            array (
                'id_log' => 1641,
                'id_user' => 'tutik',
                'id_kegiatan' => 1218,
                'action' => '3',
                'tgl_input' => '2019-04-13 10:30:49',
            ),
            141 => 
            array (
                'id_log' => 1642,
                'id_user' => 'tutik',
                'id_kegiatan' => 1218,
                'action' => '6',
                'tgl_input' => '2019-04-13 10:30:49',
            ),
            142 => 
            array (
                'id_log' => 1643,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1254,
                'action' => '3',
                'tgl_input' => '2019-04-13 10:31:20',
            ),
            143 => 
            array (
                'id_log' => 1644,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1254,
                'action' => '6',
                'tgl_input' => '2019-04-13 10:31:20',
            ),
            144 => 
            array (
                'id_log' => 1645,
                'id_user' => 'ratna',
                'id_kegiatan' => 1100,
                'action' => '7',
                'tgl_input' => '2019-04-13 10:32:01',
            ),
            145 => 
            array (
                'id_log' => 1646,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 10:37:12',
            ),
            146 => 
            array (
                'id_log' => 1647,
                'id_user' => 'utami',
                'id_kegiatan' => 1218,
                'action' => '7',
                'tgl_input' => '2019-04-13 10:40:17',
            ),
            147 => 
            array (
                'id_log' => 1648,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1253,
                'action' => '2',
                'tgl_input' => '2019-04-13 10:40:52',
            ),
            148 => 
            array (
                'id_log' => 1649,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 10:40:54',
            ),
            149 => 
            array (
                'id_log' => 1650,
                'id_user' => 'tutik',
                'id_kegiatan' => 1148,
                'action' => '3',
                'tgl_input' => '2019-04-13 10:41:50',
            ),
            150 => 
            array (
                'id_log' => 1651,
                'id_user' => 'tutik',
                'id_kegiatan' => 1148,
                'action' => '6',
                'tgl_input' => '2019-04-13 10:41:50',
            ),
            151 => 
            array (
                'id_log' => 1652,
                'id_user' => 'utami',
                'id_kegiatan' => 1213,
                'action' => '9',
                'tgl_input' => '2019-04-13 10:42:08',
            ),
            152 => 
            array (
                'id_log' => 1653,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1211,
                'action' => '2',
                'tgl_input' => '2019-04-13 10:43:55',
            ),
            153 => 
            array (
                'id_log' => 1654,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 10:44:01',
            ),
            154 => 
            array (
                'id_log' => 1655,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 10:45:31',
            ),
            155 => 
            array (
                'id_log' => 1656,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 10:46:06',
            ),
            156 => 
            array (
                'id_log' => 1657,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 10:46:50',
            ),
            157 => 
            array (
                'id_log' => 1658,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 10:47:19',
            ),
            158 => 
            array (
                'id_log' => 1659,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1126,
                'action' => '2',
                'tgl_input' => '2019-04-13 10:48:32',
            ),
            159 => 
            array (
                'id_log' => 1660,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1045,
                'action' => '3',
                'tgl_input' => '2019-04-13 10:48:46',
            ),
            160 => 
            array (
                'id_log' => 1661,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1045,
                'action' => '6',
                'tgl_input' => '2019-04-13 10:48:46',
            ),
            161 => 
            array (
                'id_log' => 1662,
                'id_user' => 'utami',
                'id_kegiatan' => 1268,
                'action' => '7',
                'tgl_input' => '2019-04-13 10:51:39',
            ),
            162 => 
            array (
                'id_log' => 1663,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 10:52:01',
            ),
            163 => 
            array (
                'id_log' => 1664,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 10:53:22',
            ),
            164 => 
            array (
                'id_log' => 1665,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 10:53:34',
            ),
            165 => 
            array (
                'id_log' => 1666,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 10:55:02',
            ),
            166 => 
            array (
                'id_log' => 1667,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1094,
                'action' => '2',
                'tgl_input' => '2019-04-13 10:56:01',
            ),
            167 => 
            array (
                'id_log' => 1668,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 10:56:20',
            ),
            168 => 
            array (
                'id_log' => 1669,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1266,
                'action' => '3',
                'tgl_input' => '2019-04-13 10:57:40',
            ),
            169 => 
            array (
                'id_log' => 1670,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1266,
                'action' => '6',
                'tgl_input' => '2019-04-13 10:57:40',
            ),
            170 => 
            array (
                'id_log' => 1671,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 10:59:00',
            ),
            171 => 
            array (
                'id_log' => 1672,
                'id_user' => 'utami',
                'id_kegiatan' => 1258,
                'action' => '7',
                'tgl_input' => '2019-04-13 10:59:25',
            ),
            172 => 
            array (
                'id_log' => 1673,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1098,
                'action' => '3',
                'tgl_input' => '2019-04-13 11:00:06',
            ),
            173 => 
            array (
                'id_log' => 1674,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1098,
                'action' => '6',
                'tgl_input' => '2019-04-13 11:00:06',
            ),
            174 => 
            array (
                'id_log' => 1675,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 11:00:56',
            ),
            175 => 
            array (
                'id_log' => 1676,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1205,
                'action' => '2',
                'tgl_input' => '2019-04-13 11:01:00',
            ),
            176 => 
            array (
                'id_log' => 1677,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 11:01:09',
            ),
            177 => 
            array (
                'id_log' => 1678,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 11:04:29',
            ),
            178 => 
            array (
                'id_log' => 1679,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 11:04:41',
            ),
            179 => 
            array (
                'id_log' => 1680,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 11:08:12',
            ),
            180 => 
            array (
                'id_log' => 1681,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1212,
                'action' => '2',
                'tgl_input' => '2019-04-13 11:10:27',
            ),
            181 => 
            array (
                'id_log' => 1682,
                'id_user' => 'utami',
                'id_kegiatan' => 1266,
                'action' => '7',
                'tgl_input' => '2019-04-13 11:11:17',
            ),
            182 => 
            array (
                'id_log' => 1683,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1068,
                'action' => '2',
                'tgl_input' => '2019-04-13 11:12:23',
            ),
            183 => 
            array (
                'id_log' => 1684,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1091,
                'action' => '2',
                'tgl_input' => '2019-04-13 11:14:53',
            ),
            184 => 
            array (
                'id_log' => 1685,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 11:14:57',
            ),
            185 => 
            array (
                'id_log' => 1686,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 11:15:48',
            ),
            186 => 
            array (
                'id_log' => 1687,
                'id_user' => 'pus',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 11:17:00',
            ),
            187 => 
            array (
                'id_log' => 1688,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 11:17:10',
            ),
            188 => 
            array (
                'id_log' => 1689,
                'id_user' => 'utami',
                'id_kegiatan' => 1254,
                'action' => '7',
                'tgl_input' => '2019-04-13 11:17:28',
            ),
            189 => 
            array (
                'id_log' => 1690,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 11:21:07',
            ),
            190 => 
            array (
                'id_log' => 1691,
                'id_user' => 'utami',
                'id_kegiatan' => 0,
                'action' => '7',
                'tgl_input' => '2019-04-13 11:21:32',
            ),
            191 => 
            array (
                'id_log' => 1692,
                'id_user' => 'utami',
                'id_kegiatan' => 0,
                'action' => '7',
                'tgl_input' => '2019-04-13 11:22:01',
            ),
            192 => 
            array (
                'id_log' => 1693,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 11:23:21',
            ),
            193 => 
            array (
                'id_log' => 1694,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1204,
                'action' => '2',
                'tgl_input' => '2019-04-13 11:25:26',
            ),
            194 => 
            array (
                'id_log' => 1695,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1204,
                'action' => '2',
                'tgl_input' => '2019-04-13 11:25:51',
            ),
            195 => 
            array (
                'id_log' => 1696,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 11:44:16',
            ),
            196 => 
            array (
                'id_log' => 1697,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 11:45:59',
            ),
            197 => 
            array (
                'id_log' => 1698,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 11:53:50',
            ),
            198 => 
            array (
                'id_log' => 1699,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1128,
                'action' => '7',
                'tgl_input' => '2019-04-13 11:54:36',
            ),
            199 => 
            array (
                'id_log' => 1700,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1184,
                'action' => '9',
                'tgl_input' => '2019-04-13 11:55:37',
            ),
            200 => 
            array (
                'id_log' => 1701,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 11:57:23',
            ),
            201 => 
            array (
                'id_log' => 1702,
                'id_user' => 'pmp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 11:57:34',
            ),
            202 => 
            array (
                'id_log' => 1703,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1094,
                'action' => '3',
                'tgl_input' => '2019-04-13 11:58:47',
            ),
            203 => 
            array (
                'id_log' => 1704,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1094,
                'action' => '6',
                'tgl_input' => '2019-04-13 11:58:47',
            ),
            204 => 
            array (
                'id_log' => 1705,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 11:58:49',
            ),
            205 => 
            array (
                'id_log' => 1706,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 12:00:36',
            ),
            206 => 
            array (
                'id_log' => 1707,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 12:01:08',
            ),
            207 => 
            array (
                'id_log' => 1708,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 12:04:54',
            ),
            208 => 
            array (
                'id_log' => 1709,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 12:11:01',
            ),
            209 => 
            array (
                'id_log' => 1710,
                'id_user' => 'pus',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 12:25:27',
            ),
            210 => 
            array (
                'id_log' => 1711,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 12:29:31',
            ),
            211 => 
            array (
                'id_log' => 1712,
                'id_user' => 'ppp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 12:30:10',
            ),
            212 => 
            array (
                'id_log' => 1713,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 13:54:08',
            ),
            213 => 
            array (
                'id_log' => 1714,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1205,
                'action' => '3',
                'tgl_input' => '2019-04-13 13:54:26',
            ),
            214 => 
            array (
                'id_log' => 1715,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1205,
                'action' => '6',
                'tgl_input' => '2019-04-13 13:54:26',
            ),
            215 => 
            array (
                'id_log' => 1716,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 13:56:49',
            ),
            216 => 
            array (
                'id_log' => 1717,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1203,
                'action' => '2',
                'tgl_input' => '2019-04-13 14:00:49',
            ),
            217 => 
            array (
                'id_log' => 1718,
                'id_user' => 'utami',
                'id_kegiatan' => 1256,
                'action' => '7',
                'tgl_input' => '2019-04-13 14:01:57',
            ),
            218 => 
            array (
                'id_log' => 1719,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 14:02:52',
            ),
            219 => 
            array (
                'id_log' => 1720,
                'id_user' => 'utami',
                'id_kegiatan' => 1223,
                'action' => '7',
                'tgl_input' => '2019-04-13 14:07:22',
            ),
            220 => 
            array (
                'id_log' => 1721,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1202,
                'action' => '2',
                'tgl_input' => '2019-04-13 14:07:24',
            ),
            221 => 
            array (
                'id_log' => 1722,
                'id_user' => 'utami',
                'id_kegiatan' => 1213,
                'action' => '9',
                'tgl_input' => '2019-04-13 14:08:40',
            ),
            222 => 
            array (
                'id_log' => 1723,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1278,
                'action' => '2',
                'tgl_input' => '2019-04-13 14:11:51',
            ),
            223 => 
            array (
                'id_log' => 1724,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1191,
                'action' => '2',
                'tgl_input' => '2019-04-13 14:12:11',
            ),
            224 => 
            array (
                'id_log' => 1725,
                'id_user' => 'utami',
                'id_kegiatan' => 1146,
                'action' => '7',
                'tgl_input' => '2019-04-13 14:14:42',
            ),
            225 => 
            array (
                'id_log' => 1726,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1158,
                'action' => '2',
                'tgl_input' => '2019-04-13 14:14:46',
            ),
            226 => 
            array (
                'id_log' => 1727,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1127,
                'action' => '2',
                'tgl_input' => '2019-04-13 14:17:14',
            ),
            227 => 
            array (
                'id_log' => 1728,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1277,
                'action' => '3',
                'tgl_input' => '2019-04-13 14:18:02',
            ),
            228 => 
            array (
                'id_log' => 1729,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1277,
                'action' => '6',
                'tgl_input' => '2019-04-13 14:18:02',
            ),
            229 => 
            array (
                'id_log' => 1730,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1276,
                'action' => '3',
                'tgl_input' => '2019-04-13 14:20:22',
            ),
            230 => 
            array (
                'id_log' => 1731,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1276,
                'action' => '6',
                'tgl_input' => '2019-04-13 14:20:22',
            ),
            231 => 
            array (
                'id_log' => 1732,
                'id_user' => 'tutik',
                'id_kegiatan' => 1147,
                'action' => '3',
                'tgl_input' => '2019-04-13 14:24:03',
            ),
            232 => 
            array (
                'id_log' => 1733,
                'id_user' => 'tutik',
                'id_kegiatan' => 1147,
                'action' => '6',
                'tgl_input' => '2019-04-13 14:24:03',
            ),
            233 => 
            array (
                'id_log' => 1734,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 14:25:42',
            ),
            234 => 
            array (
                'id_log' => 1735,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 14:26:38',
            ),
            235 => 
            array (
                'id_log' => 1736,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 14:27:24',
            ),
            236 => 
            array (
                'id_log' => 1737,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1275,
                'action' => '3',
                'tgl_input' => '2019-04-13 14:27:25',
            ),
            237 => 
            array (
                'id_log' => 1738,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1275,
                'action' => '6',
                'tgl_input' => '2019-04-13 14:27:25',
            ),
            238 => 
            array (
                'id_log' => 1739,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 14:27:30',
            ),
            239 => 
            array (
                'id_log' => 1740,
                'id_user' => 'utami',
                'id_kegiatan' => 1139,
                'action' => '9',
                'tgl_input' => '2019-04-13 14:27:37',
            ),
            240 => 
            array (
                'id_log' => 1741,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 14:27:40',
            ),
            241 => 
            array (
                'id_log' => 1742,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 14:28:40',
            ),
            242 => 
            array (
                'id_log' => 1743,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 14:28:46',
            ),
            243 => 
            array (
                'id_log' => 1744,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 14:28:59',
            ),
            244 => 
            array (
                'id_log' => 1745,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1274,
                'action' => '3',
                'tgl_input' => '2019-04-13 14:31:02',
            ),
            245 => 
            array (
                'id_log' => 1746,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1274,
                'action' => '6',
                'tgl_input' => '2019-04-13 14:31:02',
            ),
            246 => 
            array (
                'id_log' => 1747,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 14:32:04',
            ),
            247 => 
            array (
                'id_log' => 1748,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 14:32:52',
            ),
            248 => 
            array (
                'id_log' => 1749,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 14:33:08',
            ),
            249 => 
            array (
                'id_log' => 1750,
                'id_user' => 'utami',
                'id_kegiatan' => 1277,
                'action' => '7',
                'tgl_input' => '2019-04-13 14:33:25',
            ),
            250 => 
            array (
                'id_log' => 1751,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1272,
                'action' => '2',
                'tgl_input' => '2019-04-13 14:35:42',
            ),
            251 => 
            array (
                'id_log' => 1752,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1126,
                'action' => '3',
                'tgl_input' => '2019-04-13 14:35:53',
            ),
            252 => 
            array (
                'id_log' => 1753,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1126,
                'action' => '6',
                'tgl_input' => '2019-04-13 14:35:53',
            ),
            253 => 
            array (
                'id_log' => 1754,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 14:36:09',
            ),
            254 => 
            array (
                'id_log' => 1755,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 14:38:36',
            ),
            255 => 
            array (
                'id_log' => 1756,
                'id_user' => 'utami',
                'id_kegiatan' => 1276,
                'action' => '7',
                'tgl_input' => '2019-04-13 14:38:56',
            ),
            256 => 
            array (
                'id_log' => 1757,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1264,
                'action' => '2',
                'tgl_input' => '2019-04-13 14:42:22',
            ),
            257 => 
            array (
                'id_log' => 1758,
                'id_user' => 'utami',
                'id_kegiatan' => 1275,
                'action' => '7',
                'tgl_input' => '2019-04-13 14:43:44',
            ),
            258 => 
            array (
                'id_log' => 1759,
                'id_user' => 'sakm',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 14:44:40',
            ),
            259 => 
            array (
                'id_log' => 1760,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1261,
                'action' => '2',
                'tgl_input' => '2019-04-13 14:45:02',
            ),
            260 => 
            array (
                'id_log' => 1761,
                'id_user' => 'utami',
                'id_kegiatan' => 1274,
                'action' => '7',
                'tgl_input' => '2019-04-13 14:47:17',
            ),
            261 => 
            array (
                'id_log' => 1762,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1257,
                'action' => '2',
                'tgl_input' => '2019-04-13 14:47:33',
            ),
            262 => 
            array (
                'id_log' => 1763,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1255,
                'action' => '2',
                'tgl_input' => '2019-04-13 14:49:55',
            ),
            263 => 
            array (
                'id_log' => 1764,
                'id_user' => 'sak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 14:50:01',
            ),
            264 => 
            array (
                'id_log' => 1765,
                'id_user' => 'sak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 14:50:55',
            ),
            265 => 
            array (
                'id_log' => 1766,
                'id_user' => 'sak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 14:51:07',
            ),
            266 => 
            array (
                'id_log' => 1767,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 14:51:14',
            ),
            267 => 
            array (
                'id_log' => 1768,
                'id_user' => 'sak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 14:51:23',
            ),
            268 => 
            array (
                'id_log' => 1769,
                'id_user' => 'sak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 14:51:34',
            ),
            269 => 
            array (
                'id_log' => 1770,
                'id_user' => 'sak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 14:51:45',
            ),
            270 => 
            array (
                'id_log' => 1771,
                'id_user' => 'sak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 14:52:03',
            ),
            271 => 
            array (
                'id_log' => 1772,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 14:52:09',
            ),
            272 => 
            array (
                'id_log' => 1773,
                'id_user' => 'sak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 14:52:19',
            ),
            273 => 
            array (
                'id_log' => 1774,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1161,
                'action' => '3',
                'tgl_input' => '2019-04-13 14:52:21',
            ),
            274 => 
            array (
                'id_log' => 1775,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1161,
                'action' => '6',
                'tgl_input' => '2019-04-13 14:52:21',
            ),
            275 => 
            array (
                'id_log' => 1776,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1253,
                'action' => '2',
                'tgl_input' => '2019-04-13 14:52:25',
            ),
            276 => 
            array (
                'id_log' => 1777,
                'id_user' => 'sak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 14:52:31',
            ),
            277 => 
            array (
                'id_log' => 1778,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1253,
                'action' => '2',
                'tgl_input' => '2019-04-13 14:52:32',
            ),
            278 => 
            array (
                'id_log' => 1779,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1160,
                'action' => '3',
                'tgl_input' => '2019-04-13 14:52:57',
            ),
            279 => 
            array (
                'id_log' => 1780,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1160,
                'action' => '6',
                'tgl_input' => '2019-04-13 14:52:57',
            ),
            280 => 
            array (
                'id_log' => 1781,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1159,
                'action' => '3',
                'tgl_input' => '2019-04-13 14:53:23',
            ),
            281 => 
            array (
                'id_log' => 1782,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1159,
                'action' => '6',
                'tgl_input' => '2019-04-13 14:53:23',
            ),
            282 => 
            array (
                'id_log' => 1783,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1157,
                'action' => '3',
                'tgl_input' => '2019-04-13 14:53:44',
            ),
            283 => 
            array (
                'id_log' => 1784,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1157,
                'action' => '6',
                'tgl_input' => '2019-04-13 14:53:44',
            ),
            284 => 
            array (
                'id_log' => 1785,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 14:56:00',
            ),
            285 => 
            array (
                'id_log' => 1786,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 14:56:32',
            ),
            286 => 
            array (
                'id_log' => 1787,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1169,
                'action' => '3',
                'tgl_input' => '2019-04-13 14:57:33',
            ),
            287 => 
            array (
                'id_log' => 1788,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1169,
                'action' => '6',
                'tgl_input' => '2019-04-13 14:57:33',
            ),
            288 => 
            array (
                'id_log' => 1789,
                'id_user' => 'utami',
                'id_kegiatan' => 1214,
                'action' => '7',
                'tgl_input' => '2019-04-13 14:59:19',
            ),
            289 => 
            array (
                'id_log' => 1790,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1172,
                'action' => '3',
                'tgl_input' => '2019-04-13 15:01:36',
            ),
            290 => 
            array (
                'id_log' => 1791,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1172,
                'action' => '6',
                'tgl_input' => '2019-04-13 15:01:36',
            ),
            291 => 
            array (
                'id_log' => 1792,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1167,
                'action' => '3',
                'tgl_input' => '2019-04-13 15:04:05',
            ),
            292 => 
            array (
                'id_log' => 1793,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1167,
                'action' => '6',
                'tgl_input' => '2019-04-13 15:04:05',
            ),
            293 => 
            array (
                'id_log' => 1794,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 15:04:39',
            ),
            294 => 
            array (
                'id_log' => 1795,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1163,
                'action' => '3',
                'tgl_input' => '2019-04-13 15:04:43',
            ),
            295 => 
            array (
                'id_log' => 1796,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1163,
                'action' => '6',
                'tgl_input' => '2019-04-13 15:04:43',
            ),
            296 => 
            array (
                'id_log' => 1797,
                'id_user' => 'bhs',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 15:06:46',
            ),
            297 => 
            array (
                'id_log' => 1798,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1107,
                'action' => '3',
                'tgl_input' => '2019-04-13 15:09:27',
            ),
            298 => 
            array (
                'id_log' => 1799,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1107,
                'action' => '6',
                'tgl_input' => '2019-04-13 15:09:27',
            ),
            299 => 
            array (
                'id_log' => 1800,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1106,
                'action' => '3',
                'tgl_input' => '2019-04-13 15:10:00',
            ),
            300 => 
            array (
                'id_log' => 1801,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1106,
                'action' => '6',
                'tgl_input' => '2019-04-13 15:10:00',
            ),
            301 => 
            array (
                'id_log' => 1802,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1101,
                'action' => '3',
                'tgl_input' => '2019-04-13 15:10:49',
            ),
            302 => 
            array (
                'id_log' => 1803,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1101,
                'action' => '6',
                'tgl_input' => '2019-04-13 15:10:49',
            ),
            303 => 
            array (
                'id_log' => 1804,
                'id_user' => 'utami',
                'id_kegiatan' => 1108,
                'action' => '9',
                'tgl_input' => '2019-04-13 15:12:23',
            ),
            304 => 
            array (
                'id_log' => 1805,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 15:13:45',
            ),
            305 => 
            array (
                'id_log' => 1806,
                'id_user' => 'utami',
                'id_kegiatan' => 1042,
                'action' => '7',
                'tgl_input' => '2019-04-13 15:14:39',
            ),
            306 => 
            array (
                'id_log' => 1807,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 15:17:24',
            ),
            307 => 
            array (
                'id_log' => 1808,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 15:20:19',
            ),
            308 => 
            array (
                'id_log' => 1809,
                'id_user' => 'utami',
                'id_kegiatan' => 1223,
                'action' => '7',
                'tgl_input' => '2019-04-13 15:20:37',
            ),
            309 => 
            array (
                'id_log' => 1810,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1058,
                'action' => '2',
                'tgl_input' => '2019-04-13 15:22:20',
            ),
            310 => 
            array (
                'id_log' => 1811,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 15:23:54',
            ),
            311 => 
            array (
                'id_log' => 1812,
                'id_user' => 'utami',
                'id_kegiatan' => 1149,
                'action' => '9',
                'tgl_input' => '2019-04-13 15:25:08',
            ),
            312 => 
            array (
                'id_log' => 1813,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1064,
                'action' => '3',
                'tgl_input' => '2019-04-13 15:27:08',
            ),
            313 => 
            array (
                'id_log' => 1814,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1064,
                'action' => '6',
                'tgl_input' => '2019-04-13 15:27:08',
            ),
            314 => 
            array (
                'id_log' => 1815,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1091,
                'action' => '2',
                'tgl_input' => '2019-04-13 15:30:03',
            ),
            315 => 
            array (
                'id_log' => 1816,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 15:30:16',
            ),
            316 => 
            array (
                'id_log' => 1817,
                'id_user' => 'bhs',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 15:30:19',
            ),
            317 => 
            array (
                'id_log' => 1818,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1068,
                'action' => '2',
                'tgl_input' => '2019-04-13 15:30:55',
            ),
            318 => 
            array (
                'id_log' => 1819,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1162,
                'action' => '2',
                'tgl_input' => '2019-04-13 15:31:47',
            ),
            319 => 
            array (
                'id_log' => 1820,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 15:33:47',
            ),
            320 => 
            array (
                'id_log' => 1821,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 15:39:19',
            ),
            321 => 
            array (
                'id_log' => 1822,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 15:40:38',
            ),
            322 => 
            array (
                'id_log' => 1823,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1248,
                'action' => '9',
                'tgl_input' => '2019-04-13 15:41:26',
            ),
            323 => 
            array (
                'id_log' => 1824,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 15:43:23',
            ),
            324 => 
            array (
                'id_log' => 1825,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 15:43:30',
            ),
            325 => 
            array (
                'id_log' => 1826,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1102,
                'action' => '2',
                'tgl_input' => '2019-04-13 15:45:26',
            ),
            326 => 
            array (
                'id_log' => 1827,
                'id_user' => 'ratna',
                'id_kegiatan' => 1098,
                'action' => '7',
                'tgl_input' => '2019-04-13 15:46:19',
            ),
            327 => 
            array (
                'id_log' => 1828,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1068,
                'action' => '3',
                'tgl_input' => '2019-04-13 15:47:11',
            ),
            328 => 
            array (
                'id_log' => 1829,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1068,
                'action' => '6',
                'tgl_input' => '2019-04-13 15:47:11',
            ),
            329 => 
            array (
                'id_log' => 1830,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1067,
                'action' => '3',
                'tgl_input' => '2019-04-13 15:48:06',
            ),
            330 => 
            array (
                'id_log' => 1831,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1067,
                'action' => '6',
                'tgl_input' => '2019-04-13 15:48:06',
            ),
            331 => 
            array (
                'id_log' => 1832,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 15:49:14',
            ),
            332 => 
            array (
                'id_log' => 1833,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 15:50:45',
            ),
            333 => 
            array (
                'id_log' => 1834,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 15:51:17',
            ),
            334 => 
            array (
                'id_log' => 1835,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 15:51:34',
            ),
            335 => 
            array (
                'id_log' => 1836,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1173,
                'action' => '2',
                'tgl_input' => '2019-04-13 15:52:17',
            ),
            336 => 
            array (
                'id_log' => 1837,
                'id_user' => 'ratna',
                'id_kegiatan' => 1107,
                'action' => '7',
                'tgl_input' => '2019-04-13 15:53:17',
            ),
            337 => 
            array (
                'id_log' => 1838,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1162,
                'action' => '2',
                'tgl_input' => '2019-04-13 15:54:24',
            ),
            338 => 
            array (
                'id_log' => 1839,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1091,
                'action' => '3',
                'tgl_input' => '2019-04-13 15:55:02',
            ),
            339 => 
            array (
                'id_log' => 1840,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1091,
                'action' => '6',
                'tgl_input' => '2019-04-13 15:55:02',
            ),
            340 => 
            array (
                'id_log' => 1841,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1066,
                'action' => '2',
                'tgl_input' => '2019-04-13 15:56:25',
            ),
            341 => 
            array (
                'id_log' => 1842,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1126,
                'action' => '7',
                'tgl_input' => '2019-04-13 15:56:45',
            ),
            342 => 
            array (
                'id_log' => 1843,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1065,
                'action' => '3',
                'tgl_input' => '2019-04-13 15:57:22',
            ),
            343 => 
            array (
                'id_log' => 1844,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1065,
                'action' => '6',
                'tgl_input' => '2019-04-13 15:57:22',
            ),
            344 => 
            array (
                'id_log' => 1845,
                'id_user' => 'ratna',
                'id_kegiatan' => 1106,
                'action' => '7',
                'tgl_input' => '2019-04-13 16:01:20',
            ),
            345 => 
            array (
                'id_log' => 1846,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1205,
                'action' => '7',
                'tgl_input' => '2019-04-13 16:01:24',
            ),
            346 => 
            array (
                'id_log' => 1847,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 16:03:42',
            ),
            347 => 
            array (
                'id_log' => 1848,
                'id_user' => 'bhs',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 16:04:31',
            ),
            348 => 
            array (
                'id_log' => 1849,
                'id_user' => 'ratna',
                'id_kegiatan' => 1103,
                'action' => '9',
                'tgl_input' => '2019-04-13 16:04:46',
            ),
            349 => 
            array (
                'id_log' => 1850,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 16:07:22',
            ),
            350 => 
            array (
                'id_log' => 1851,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 16:09:23',
            ),
            351 => 
            array (
                'id_log' => 1852,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 16:10:27',
            ),
            352 => 
            array (
                'id_log' => 1853,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1207,
                'action' => '7',
                'tgl_input' => '2019-04-13 16:11:24',
            ),
            353 => 
            array (
                'id_log' => 1854,
                'id_user' => 'ratna',
                'id_kegiatan' => 1101,
                'action' => '7',
                'tgl_input' => '2019-04-13 16:12:02',
            ),
            354 => 
            array (
                'id_log' => 1855,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 16:13:17',
            ),
            355 => 
            array (
                'id_log' => 1856,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 16:15:08',
            ),
            356 => 
            array (
                'id_log' => 1857,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 16:15:20',
            ),
            357 => 
            array (
                'id_log' => 1858,
                'id_user' => 'ratna',
                'id_kegiatan' => 1100,
                'action' => '9',
                'tgl_input' => '2019-04-13 16:16:01',
            ),
            358 => 
            array (
                'id_log' => 1859,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 16:17:18',
            ),
            359 => 
            array (
                'id_log' => 1860,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 16:19:27',
            ),
            360 => 
            array (
                'id_log' => 1861,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 16:25:01',
            ),
            361 => 
            array (
                'id_log' => 1862,
                'id_user' => 'ratna',
                'id_kegiatan' => 1098,
                'action' => '7',
                'tgl_input' => '2019-04-13 16:25:04',
            ),
            362 => 
            array (
                'id_log' => 1863,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1127,
                'action' => '7',
                'tgl_input' => '2019-04-13 16:31:34',
            ),
            363 => 
            array (
                'id_log' => 1864,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 16:32:01',
            ),
            364 => 
            array (
                'id_log' => 1865,
                'id_user' => 'ratna',
                'id_kegiatan' => 1091,
                'action' => '7',
                'tgl_input' => '2019-04-13 16:33:27',
            ),
            365 => 
            array (
                'id_log' => 1866,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 16:38:18',
            ),
            366 => 
            array (
                'id_log' => 1867,
                'id_user' => 'utami',
                'id_kegiatan' => 1130,
                'action' => '7',
                'tgl_input' => '2019-04-13 16:39:08',
            ),
            367 => 
            array (
                'id_log' => 1868,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 16:40:56',
            ),
            368 => 
            array (
                'id_log' => 1869,
                'id_user' => 'ratna',
                'id_kegiatan' => 1068,
                'action' => '7',
                'tgl_input' => '2019-04-13 16:46:16',
            ),
            369 => 
            array (
                'id_log' => 1870,
                'id_user' => 'utami',
                'id_kegiatan' => 1048,
                'action' => '9',
                'tgl_input' => '2019-04-13 16:46:39',
            ),
            370 => 
            array (
                'id_log' => 1871,
                'id_user' => 'utami',
                'id_kegiatan' => 1256,
                'action' => '9',
                'tgl_input' => '2019-04-13 16:48:24',
            ),
            371 => 
            array (
                'id_log' => 1872,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 16:49:01',
            ),
            372 => 
            array (
                'id_log' => 1873,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 16:49:10',
            ),
            373 => 
            array (
                'id_log' => 1874,
                'id_user' => 'utami',
                'id_kegiatan' => 1048,
                'action' => '9',
                'tgl_input' => '2019-04-13 16:52:22',
            ),
            374 => 
            array (
                'id_log' => 1875,
                'id_user' => 'utami',
                'id_kegiatan' => 1256,
                'action' => '9',
                'tgl_input' => '2019-04-13 16:53:17',
            ),
            375 => 
            array (
                'id_log' => 1876,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 16:54:19',
            ),
            376 => 
            array (
                'id_log' => 1877,
                'id_user' => 'ratna',
                'id_kegiatan' => 1067,
                'action' => '7',
                'tgl_input' => '2019-04-13 16:55:23',
            ),
            377 => 
            array (
                'id_log' => 1878,
                'id_user' => 'utami',
                'id_kegiatan' => 1214,
                'action' => '9',
                'tgl_input' => '2019-04-13 16:56:12',
            ),
            378 => 
            array (
                'id_log' => 1879,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 16:56:34',
            ),
            379 => 
            array (
                'id_log' => 1880,
                'id_user' => 'utami',
                'id_kegiatan' => 1223,
                'action' => '9',
                'tgl_input' => '2019-04-13 16:59:31',
            ),
            380 => 
            array (
                'id_log' => 1881,
                'id_user' => 'utami',
                'id_kegiatan' => 1222,
                'action' => '7',
                'tgl_input' => '2019-04-13 17:02:18',
            ),
            381 => 
            array (
                'id_log' => 1882,
                'id_user' => 'utami',
                'id_kegiatan' => 1221,
                'action' => '7',
                'tgl_input' => '2019-04-13 17:06:00',
            ),
            382 => 
            array (
                'id_log' => 1883,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1116,
                'action' => '7',
                'tgl_input' => '2019-04-13 17:08:51',
            ),
            383 => 
            array (
                'id_log' => 1884,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1180,
                'action' => '2',
                'tgl_input' => '2019-04-13 17:10:27',
            ),
            384 => 
            array (
                'id_log' => 1885,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1058,
                'action' => '3',
                'tgl_input' => '2019-04-13 17:11:48',
            ),
            385 => 
            array (
                'id_log' => 1886,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1058,
                'action' => '6',
                'tgl_input' => '2019-04-13 17:11:48',
            ),
            386 => 
            array (
                'id_log' => 1887,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1162,
                'action' => '3',
                'tgl_input' => '2019-04-13 17:12:32',
            ),
            387 => 
            array (
                'id_log' => 1888,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1162,
                'action' => '6',
                'tgl_input' => '2019-04-13 17:12:32',
            ),
            388 => 
            array (
                'id_log' => 1889,
                'id_user' => 'utami',
                'id_kegiatan' => 1219,
                'action' => '9',
                'tgl_input' => '2019-04-13 17:12:47',
            ),
            389 => 
            array (
                'id_log' => 1890,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 17:14:36',
            ),
            390 => 
            array (
                'id_log' => 1891,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1102,
                'action' => '2',
                'tgl_input' => '2019-04-13 17:15:09',
            ),
            391 => 
            array (
                'id_log' => 1892,
                'id_user' => 'utami',
                'id_kegiatan' => 1218,
                'action' => '7',
                'tgl_input' => '2019-04-13 17:16:08',
            ),
            392 => 
            array (
                'id_log' => 1893,
                'id_user' => 'utami',
                'id_kegiatan' => 1217,
                'action' => '9',
                'tgl_input' => '2019-04-13 17:18:40',
            ),
            393 => 
            array (
                'id_log' => 1894,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 17:18:50',
            ),
            394 => 
            array (
                'id_log' => 1895,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 17:23:03',
            ),
            395 => 
            array (
                'id_log' => 1896,
                'id_user' => 'utami',
                'id_kegiatan' => 1219,
                'action' => '9',
                'tgl_input' => '2019-04-13 17:24:43',
            ),
            396 => 
            array (
                'id_log' => 1897,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 17:25:30',
            ),
            397 => 
            array (
                'id_log' => 1898,
                'id_user' => 'utami',
                'id_kegiatan' => 1219,
                'action' => '9',
                'tgl_input' => '2019-04-13 17:25:46',
            ),
            398 => 
            array (
                'id_log' => 1899,
                'id_user' => 'utami',
                'id_kegiatan' => 1216,
                'action' => '9',
                'tgl_input' => '2019-04-13 17:27:43',
            ),
            399 => 
            array (
                'id_log' => 1900,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 17:27:50',
            ),
            400 => 
            array (
                'id_log' => 1901,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 17:29:15',
            ),
            401 => 
            array (
                'id_log' => 1902,
                'id_user' => 'utami',
                'id_kegiatan' => 1215,
                'action' => '9',
                'tgl_input' => '2019-04-13 17:29:30',
            ),
            402 => 
            array (
                'id_log' => 1903,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 17:32:28',
            ),
            403 => 
            array (
                'id_log' => 1904,
                'id_user' => 'utami',
                'id_kegiatan' => 1146,
                'action' => '9',
                'tgl_input' => '2019-04-13 17:33:17',
            ),
            404 => 
            array (
                'id_log' => 1905,
                'id_user' => 'utami',
                'id_kegiatan' => 1140,
                'action' => '9',
                'tgl_input' => '2019-04-13 17:36:26',
            ),
            405 => 
            array (
                'id_log' => 1906,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 17:36:41',
            ),
            406 => 
            array (
                'id_log' => 1907,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 17:40:30',
            ),
            407 => 
            array (
                'id_log' => 1908,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1278,
                'action' => '2',
                'tgl_input' => '2019-04-13 17:40:33',
            ),
            408 => 
            array (
                'id_log' => 1909,
                'id_user' => 'utami',
                'id_kegiatan' => 1138,
                'action' => '9',
                'tgl_input' => '2019-04-13 17:41:11',
            ),
            409 => 
            array (
                'id_log' => 1910,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 17:42:42',
            ),
            410 => 
            array (
                'id_log' => 1911,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1256,
                'action' => '8',
                'tgl_input' => '2019-04-13 17:44:04',
            ),
            411 => 
            array (
                'id_log' => 1912,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1256,
                'action' => '11',
                'tgl_input' => '2019-04-13 17:44:04',
            ),
            412 => 
            array (
                'id_log' => 1913,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 17:44:06',
            ),
            413 => 
            array (
                'id_log' => 1914,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 17:44:27',
            ),
            414 => 
            array (
                'id_log' => 1915,
                'id_user' => 'utami',
                'id_kegiatan' => 1135,
                'action' => '7',
                'tgl_input' => '2019-04-13 17:44:37',
            ),
            415 => 
            array (
                'id_log' => 1916,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1248,
                'action' => '8',
                'tgl_input' => '2019-04-13 17:45:58',
            ),
            416 => 
            array (
                'id_log' => 1917,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1248,
                'action' => '11',
                'tgl_input' => '2019-04-13 17:45:58',
            ),
            417 => 
            array (
                'id_log' => 1918,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1230,
                'action' => '8',
                'tgl_input' => '2019-04-13 17:46:26',
            ),
            418 => 
            array (
                'id_log' => 1919,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1230,
                'action' => '11',
                'tgl_input' => '2019-04-13 17:46:26',
            ),
            419 => 
            array (
                'id_log' => 1920,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 17:46:56',
            ),
            420 => 
            array (
                'id_log' => 1921,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1223,
                'action' => '10',
                'tgl_input' => '2019-04-13 17:49:00',
            ),
            421 => 
            array (
                'id_log' => 1922,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1182,
                'action' => '8',
                'tgl_input' => '2019-04-13 17:49:24',
            ),
            422 => 
            array (
                'id_log' => 1923,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1182,
                'action' => '11',
                'tgl_input' => '2019-04-13 17:49:24',
            ),
            423 => 
            array (
                'id_log' => 1924,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1147,
                'action' => '8',
                'tgl_input' => '2019-04-13 17:49:35',
            ),
            424 => 
            array (
                'id_log' => 1925,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1147,
                'action' => '11',
                'tgl_input' => '2019-04-13 17:49:35',
            ),
            425 => 
            array (
                'id_log' => 1926,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1109,
                'action' => '8',
                'tgl_input' => '2019-04-13 17:49:50',
            ),
            426 => 
            array (
                'id_log' => 1927,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1109,
                'action' => '11',
                'tgl_input' => '2019-04-13 17:49:50',
            ),
            427 => 
            array (
                'id_log' => 1928,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1108,
                'action' => '8',
                'tgl_input' => '2019-04-13 17:50:04',
            ),
            428 => 
            array (
                'id_log' => 1929,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1108,
                'action' => '11',
                'tgl_input' => '2019-04-13 17:50:04',
            ),
            429 => 
            array (
                'id_log' => 1930,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1213,
                'action' => '8',
                'tgl_input' => '2019-04-13 17:50:28',
            ),
            430 => 
            array (
                'id_log' => 1931,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1213,
                'action' => '11',
                'tgl_input' => '2019-04-13 17:50:28',
            ),
            431 => 
            array (
                'id_log' => 1932,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 17:55:12',
            ),
            432 => 
            array (
                'id_log' => 1933,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 17:55:36',
            ),
            433 => 
            array (
                'id_log' => 1934,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1272,
                'action' => '2',
                'tgl_input' => '2019-04-13 17:56:31',
            ),
            434 => 
            array (
                'id_log' => 1935,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 18:00:55',
            ),
            435 => 
            array (
                'id_log' => 1936,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1272,
                'action' => '2',
                'tgl_input' => '2019-04-13 18:01:46',
            ),
            436 => 
            array (
                'id_log' => 1937,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 18:03:16',
            ),
            437 => 
            array (
                'id_log' => 1938,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1272,
                'action' => '3',
                'tgl_input' => '2019-04-13 18:03:36',
            ),
            438 => 
            array (
                'id_log' => 1939,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1272,
                'action' => '6',
                'tgl_input' => '2019-04-13 18:03:36',
            ),
            439 => 
            array (
                'id_log' => 1940,
                'id_user' => 'ratna',
                'id_kegiatan' => 1098,
                'action' => '9',
                'tgl_input' => '2019-04-13 19:31:08',
            ),
            440 => 
            array (
                'id_log' => 1941,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 19:32:29',
            ),
            441 => 
            array (
                'id_log' => 1942,
                'id_user' => 'ratna',
                'id_kegiatan' => 1101,
                'action' => '7',
                'tgl_input' => '2019-04-13 19:36:28',
            ),
            442 => 
            array (
                'id_log' => 1943,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1154,
                'action' => '3',
                'tgl_input' => '2019-04-13 19:39:36',
            ),
            443 => 
            array (
                'id_log' => 1944,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1154,
                'action' => '6',
                'tgl_input' => '2019-04-13 19:39:36',
            ),
            444 => 
            array (
                'id_log' => 1945,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1141,
                'action' => '3',
                'tgl_input' => '2019-04-13 19:42:43',
            ),
            445 => 
            array (
                'id_log' => 1946,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1141,
                'action' => '6',
                'tgl_input' => '2019-04-13 19:42:43',
            ),
            446 => 
            array (
                'id_log' => 1947,
                'id_user' => 'ratna',
                'id_kegiatan' => 1162,
                'action' => '7',
                'tgl_input' => '2019-04-13 19:43:04',
            ),
            447 => 
            array (
                'id_log' => 1948,
                'id_user' => 'ratna',
                'id_kegiatan' => 1107,
                'action' => '7',
                'tgl_input' => '2019-04-13 19:47:48',
            ),
            448 => 
            array (
                'id_log' => 1949,
                'id_user' => 'sen',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 19:54:42',
            ),
            449 => 
            array (
                'id_log' => 1950,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1219,
                'action' => '10',
                'tgl_input' => '2019-04-13 19:58:19',
            ),
            450 => 
            array (
                'id_log' => 1951,
                'id_user' => 'ratna',
                'id_kegiatan' => 1106,
                'action' => '7',
                'tgl_input' => '2019-04-13 20:04:13',
            ),
            451 => 
            array (
                'id_log' => 1952,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 20:07:30',
            ),
            452 => 
            array (
                'id_log' => 1953,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 20:09:15',
            ),
            453 => 
            array (
                'id_log' => 1954,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 20:13:11',
            ),
            454 => 
            array (
                'id_log' => 1955,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 20:14:23',
            ),
            455 => 
            array (
                'id_log' => 1956,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1208,
                'action' => '3',
                'tgl_input' => '2019-04-13 20:15:10',
            ),
            456 => 
            array (
                'id_log' => 1957,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1208,
                'action' => '6',
                'tgl_input' => '2019-04-13 20:15:10',
            ),
            457 => 
            array (
                'id_log' => 1958,
                'id_user' => 'utami',
                'id_kegiatan' => 1223,
                'action' => '9',
                'tgl_input' => '2019-04-13 20:15:20',
            ),
            458 => 
            array (
                'id_log' => 1959,
                'id_user' => 'ratna',
                'id_kegiatan' => 1091,
                'action' => '9',
                'tgl_input' => '2019-04-13 20:15:21',
            ),
            459 => 
            array (
                'id_log' => 1960,
                'id_user' => 'utami',
                'id_kegiatan' => 1135,
                'action' => '9',
                'tgl_input' => '2019-04-13 20:16:42',
            ),
            460 => 
            array (
                'id_log' => 1961,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1224,
                'action' => '3',
                'tgl_input' => '2019-04-13 20:17:15',
            ),
            461 => 
            array (
                'id_log' => 1962,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1224,
                'action' => '6',
                'tgl_input' => '2019-04-13 20:17:15',
            ),
            462 => 
            array (
                'id_log' => 1963,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1217,
                'action' => '8',
                'tgl_input' => '2019-04-13 20:19:45',
            ),
            463 => 
            array (
                'id_log' => 1964,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1217,
                'action' => '11',
                'tgl_input' => '2019-04-13 20:19:45',
            ),
            464 => 
            array (
                'id_log' => 1965,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 20:23:02',
            ),
            465 => 
            array (
                'id_log' => 1966,
                'id_user' => 'ratna',
                'id_kegiatan' => 1067,
                'action' => '7',
                'tgl_input' => '2019-04-13 20:23:04',
            ),
            466 => 
            array (
                'id_log' => 1967,
                'id_user' => 'ratna',
                'id_kegiatan' => 1101,
                'action' => '9',
                'tgl_input' => '2019-04-13 20:25:13',
            ),
            467 => 
            array (
                'id_log' => 1968,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 20:28:56',
            ),
            468 => 
            array (
                'id_log' => 1969,
                'id_user' => 'utami',
                'id_kegiatan' => 1141,
                'action' => '9',
                'tgl_input' => '2019-04-13 20:30:22',
            ),
            469 => 
            array (
                'id_log' => 1970,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1223,
                'action' => '8',
                'tgl_input' => '2019-04-13 20:32:10',
            ),
            470 => 
            array (
                'id_log' => 1971,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1223,
                'action' => '11',
                'tgl_input' => '2019-04-13 20:32:10',
            ),
            471 => 
            array (
                'id_log' => 1972,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 20:33:57',
            ),
            472 => 
            array (
                'id_log' => 1973,
                'id_user' => 'utami',
                'id_kegiatan' => 1154,
                'action' => '7',
                'tgl_input' => '2019-04-13 20:34:44',
            ),
            473 => 
            array (
                'id_log' => 1974,
                'id_user' => 'ratna',
                'id_kegiatan' => 1065,
                'action' => '7',
                'tgl_input' => '2019-04-13 20:36:00',
            ),
            474 => 
            array (
                'id_log' => 1975,
                'id_user' => 'utami',
                'id_kegiatan' => 1272,
                'action' => '7',
                'tgl_input' => '2019-04-13 20:40:18',
            ),
            475 => 
            array (
                'id_log' => 1976,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 20:41:35',
            ),
            476 => 
            array (
                'id_log' => 1977,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 20:49:23',
            ),
            477 => 
            array (
                'id_log' => 1978,
                'id_user' => 'ratna',
                'id_kegiatan' => 1064,
                'action' => '7',
                'tgl_input' => '2019-04-13 20:49:25',
            ),
            478 => 
            array (
                'id_log' => 1979,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1149,
                'action' => '8',
                'tgl_input' => '2019-04-13 20:49:38',
            ),
            479 => 
            array (
                'id_log' => 1980,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1149,
                'action' => '11',
                'tgl_input' => '2019-04-13 20:49:38',
            ),
            480 => 
            array (
                'id_log' => 1981,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1146,
                'action' => '8',
                'tgl_input' => '2019-04-13 20:50:29',
            ),
            481 => 
            array (
                'id_log' => 1982,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1146,
                'action' => '11',
                'tgl_input' => '2019-04-13 20:50:29',
            ),
            482 => 
            array (
                'id_log' => 1983,
                'id_user' => 'utami',
                'id_kegiatan' => 1221,
                'action' => '9',
                'tgl_input' => '2019-04-13 20:50:43',
            ),
            483 => 
            array (
                'id_log' => 1984,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1144,
                'action' => '8',
                'tgl_input' => '2019-04-13 20:51:13',
            ),
            484 => 
            array (
                'id_log' => 1985,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1144,
                'action' => '11',
                'tgl_input' => '2019-04-13 20:51:13',
            ),
            485 => 
            array (
                'id_log' => 1986,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1142,
                'action' => '8',
                'tgl_input' => '2019-04-13 20:51:35',
            ),
            486 => 
            array (
                'id_log' => 1987,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1142,
                'action' => '11',
                'tgl_input' => '2019-04-13 20:51:35',
            ),
            487 => 
            array (
                'id_log' => 1988,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1141,
                'action' => '8',
                'tgl_input' => '2019-04-13 20:52:18',
            ),
            488 => 
            array (
                'id_log' => 1989,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1141,
                'action' => '11',
                'tgl_input' => '2019-04-13 20:52:18',
            ),
            489 => 
            array (
                'id_log' => 1990,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1140,
                'action' => '10',
                'tgl_input' => '2019-04-13 20:53:29',
            ),
            490 => 
            array (
                'id_log' => 1991,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1139,
                'action' => '8',
                'tgl_input' => '2019-04-13 20:54:02',
            ),
            491 => 
            array (
                'id_log' => 1992,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1139,
                'action' => '11',
                'tgl_input' => '2019-04-13 20:54:02',
            ),
            492 => 
            array (
                'id_log' => 1993,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1138,
                'action' => '8',
                'tgl_input' => '2019-04-13 20:54:54',
            ),
            493 => 
            array (
                'id_log' => 1994,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1138,
                'action' => '11',
                'tgl_input' => '2019-04-13 20:54:54',
            ),
            494 => 
            array (
                'id_log' => 1995,
                'id_user' => 'skp',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 20:56:47',
            ),
            495 => 
            array (
                'id_log' => 1996,
                'id_user' => 'utami',
                'id_kegiatan' => 1219,
                'action' => '9',
                'tgl_input' => '2019-04-13 20:56:47',
            ),
            496 => 
            array (
                'id_log' => 1997,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1135,
                'action' => '10',
                'tgl_input' => '2019-04-13 20:57:12',
            ),
            497 => 
            array (
                'id_log' => 1998,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1042,
                'action' => '8',
                'tgl_input' => '2019-04-13 20:57:59',
            ),
            498 => 
            array (
                'id_log' => 1999,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1042,
                'action' => '11',
                'tgl_input' => '2019-04-13 20:57:59',
            ),
            499 => 
            array (
                'id_log' => 2000,
                'id_user' => 'utami',
                'id_kegiatan' => 1218,
                'action' => '7',
                'tgl_input' => '2019-04-13 21:00:50',
            ),
        ));
        \DB::table('log_kegiatan')->insert(array (
            0 => 
            array (
                'id_log' => 2001,
                'id_user' => 'ratna',
                'id_kegiatan' => 1058,
                'action' => '7',
                'tgl_input' => '2019-04-13 21:02:58',
            ),
            1 => 
            array (
                'id_log' => 2002,
                'id_user' => 'utami',
                'id_kegiatan' => 1140,
                'action' => '9',
                'tgl_input' => '2019-04-13 21:03:16',
            ),
            2 => 
            array (
                'id_log' => 2003,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1249,
                'action' => '7',
                'tgl_input' => '2019-04-13 21:07:02',
            ),
            3 => 
            array (
                'id_log' => 2004,
                'id_user' => 'utami',
                'id_kegiatan' => 1135,
                'action' => '9',
                'tgl_input' => '2019-04-13 21:10:30',
            ),
            4 => 
            array (
                'id_log' => 2005,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 21:11:04',
            ),
            5 => 
            array (
                'id_log' => 2006,
                'id_user' => 'ratna',
                'id_kegiatan' => 1162,
                'action' => '7',
                'tgl_input' => '2019-04-13 21:12:35',
            ),
            6 => 
            array (
                'id_log' => 2007,
                'id_user' => 'ratna',
                'id_kegiatan' => 1107,
                'action' => '7',
                'tgl_input' => '2019-04-13 21:16:27',
            ),
            7 => 
            array (
                'id_log' => 2008,
                'id_user' => 'utami',
                'id_kegiatan' => 1133,
                'action' => '9',
                'tgl_input' => '2019-04-13 21:17:14',
            ),
            8 => 
            array (
                'id_log' => 2009,
                'id_user' => 'ratna',
                'id_kegiatan' => 1106,
                'action' => '7',
                'tgl_input' => '2019-04-13 21:21:36',
            ),
            9 => 
            array (
                'id_log' => 2010,
                'id_user' => 'utami',
                'id_kegiatan' => 1129,
                'action' => '9',
                'tgl_input' => '2019-04-13 21:23:30',
            ),
            10 => 
            array (
                'id_log' => 2011,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1050,
                'action' => '8',
                'tgl_input' => '2019-04-13 21:23:58',
            ),
            11 => 
            array (
                'id_log' => 2012,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1050,
                'action' => '11',
                'tgl_input' => '2019-04-13 21:23:58',
            ),
            12 => 
            array (
                'id_log' => 2013,
                'id_user' => 'ratna',
                'id_kegiatan' => 1067,
                'action' => '7',
                'tgl_input' => '2019-04-13 21:24:51',
            ),
            13 => 
            array (
                'id_log' => 2014,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1049,
                'action' => '8',
                'tgl_input' => '2019-04-13 21:27:12',
            ),
            14 => 
            array (
                'id_log' => 2015,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1049,
                'action' => '11',
                'tgl_input' => '2019-04-13 21:27:12',
            ),
            15 => 
            array (
                'id_log' => 2016,
                'id_user' => 'ratna',
                'id_kegiatan' => 1068,
                'action' => '7',
                'tgl_input' => '2019-04-13 21:30:21',
            ),
            16 => 
            array (
                'id_log' => 2017,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1135,
                'action' => '10',
                'tgl_input' => '2019-04-13 21:31:06',
            ),
            17 => 
            array (
                'id_log' => 2018,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1140,
                'action' => '10',
                'tgl_input' => '2019-04-13 21:33:22',
            ),
            18 => 
            array (
                'id_log' => 2019,
                'id_user' => 'utami',
                'id_kegiatan' => 1140,
                'action' => '7',
                'tgl_input' => '2019-04-13 21:34:18',
            ),
            19 => 
            array (
                'id_log' => 2020,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 21:34:50',
            ),
            20 => 
            array (
                'id_log' => 2021,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1133,
                'action' => '10',
                'tgl_input' => '2019-04-13 21:36:47',
            ),
            21 => 
            array (
                'id_log' => 2022,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1129,
                'action' => '8',
                'tgl_input' => '2019-04-13 21:37:56',
            ),
            22 => 
            array (
                'id_log' => 2023,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1129,
                'action' => '11',
                'tgl_input' => '2019-04-13 21:37:56',
            ),
            23 => 
            array (
                'id_log' => 2024,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1103,
                'action' => '10',
                'tgl_input' => '2019-04-13 21:40:13',
            ),
            24 => 
            array (
                'id_log' => 2025,
                'id_user' => 'utami',
                'id_kegiatan' => 1134,
                'action' => '7',
                'tgl_input' => '2019-04-13 21:40:27',
            ),
            25 => 
            array (
                'id_log' => 2026,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1101,
                'action' => '8',
                'tgl_input' => '2019-04-13 21:41:06',
            ),
            26 => 
            array (
                'id_log' => 2027,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1101,
                'action' => '11',
                'tgl_input' => '2019-04-13 21:41:06',
            ),
            27 => 
            array (
                'id_log' => 2028,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 21:42:10',
            ),
            28 => 
            array (
                'id_log' => 2029,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1100,
                'action' => '8',
                'tgl_input' => '2019-04-13 21:42:15',
            ),
            29 => 
            array (
                'id_log' => 2030,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1100,
                'action' => '11',
                'tgl_input' => '2019-04-13 21:42:15',
            ),
            30 => 
            array (
                'id_log' => 2031,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1098,
                'action' => '8',
                'tgl_input' => '2019-04-13 21:43:05',
            ),
            31 => 
            array (
                'id_log' => 2032,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1098,
                'action' => '11',
                'tgl_input' => '2019-04-13 21:43:05',
            ),
            32 => 
            array (
                'id_log' => 2033,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1091,
                'action' => '8',
                'tgl_input' => '2019-04-13 21:44:18',
            ),
            33 => 
            array (
                'id_log' => 2034,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1091,
                'action' => '11',
                'tgl_input' => '2019-04-13 21:44:18',
            ),
            34 => 
            array (
                'id_log' => 2035,
                'id_user' => 'utami',
                'id_kegiatan' => 1133,
                'action' => '7',
                'tgl_input' => '2019-04-13 21:44:38',
            ),
            35 => 
            array (
                'id_log' => 2036,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1221,
                'action' => '8',
                'tgl_input' => '2019-04-13 21:44:42',
            ),
            36 => 
            array (
                'id_log' => 2037,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1221,
                'action' => '11',
                'tgl_input' => '2019-04-13 21:44:42',
            ),
            37 => 
            array (
                'id_log' => 2038,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1219,
                'action' => '8',
                'tgl_input' => '2019-04-13 21:45:04',
            ),
            38 => 
            array (
                'id_log' => 2039,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1219,
                'action' => '11',
                'tgl_input' => '2019-04-13 21:45:04',
            ),
            39 => 
            array (
                'id_log' => 2040,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1215,
                'action' => '8',
                'tgl_input' => '2019-04-13 21:45:41',
            ),
            40 => 
            array (
                'id_log' => 2041,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1215,
                'action' => '11',
                'tgl_input' => '2019-04-13 21:45:41',
            ),
            41 => 
            array (
                'id_log' => 2042,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1048,
                'action' => '10',
                'tgl_input' => '2019-04-13 21:48:55',
            ),
            42 => 
            array (
                'id_log' => 2043,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1216,
                'action' => '8',
                'tgl_input' => '2019-04-13 21:49:55',
            ),
            43 => 
            array (
                'id_log' => 2044,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1216,
                'action' => '11',
                'tgl_input' => '2019-04-13 21:49:55',
            ),
            44 => 
            array (
                'id_log' => 2045,
                'id_user' => 'utami',
                'id_kegiatan' => 1131,
                'action' => '7',
                'tgl_input' => '2019-04-13 21:50:48',
            ),
            45 => 
            array (
                'id_log' => 2046,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1214,
                'action' => '8',
                'tgl_input' => '2019-04-13 21:50:51',
            ),
            46 => 
            array (
                'id_log' => 2047,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1214,
                'action' => '11',
                'tgl_input' => '2019-04-13 21:50:51',
            ),
            47 => 
            array (
                'id_log' => 2048,
                'id_user' => 'ratna',
                'id_kegiatan' => 1103,
                'action' => '7',
                'tgl_input' => '2019-04-13 21:51:08',
            ),
            48 => 
            array (
                'id_log' => 2049,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1187,
                'action' => '8',
                'tgl_input' => '2019-04-13 21:51:56',
            ),
            49 => 
            array (
                'id_log' => 2050,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1187,
                'action' => '11',
                'tgl_input' => '2019-04-13 21:51:56',
            ),
            50 => 
            array (
                'id_log' => 2051,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1184,
                'action' => '8',
                'tgl_input' => '2019-04-13 21:52:35',
            ),
            51 => 
            array (
                'id_log' => 2052,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1184,
                'action' => '11',
                'tgl_input' => '2019-04-13 21:52:35',
            ),
            52 => 
            array (
                'id_log' => 2053,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 21:52:37',
            ),
            53 => 
            array (
                'id_log' => 2054,
                'id_user' => 'utami',
                'id_kegiatan' => 1048,
                'action' => '9',
                'tgl_input' => '2019-04-13 21:54:14',
            ),
            54 => 
            array (
                'id_log' => 2055,
                'id_user' => 'ratna',
                'id_kegiatan' => 1064,
                'action' => '7',
                'tgl_input' => '2019-04-13 21:56:00',
            ),
            55 => 
            array (
                'id_log' => 2056,
                'id_user' => 'ratna',
                'id_kegiatan' => 1058,
                'action' => '7',
                'tgl_input' => '2019-04-13 21:58:05',
            ),
            56 => 
            array (
                'id_log' => 2057,
                'id_user' => 'utami',
                'id_kegiatan' => 1135,
                'action' => '7',
                'tgl_input' => '2019-04-13 22:01:10',
            ),
            57 => 
            array (
                'id_log' => 2058,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 22:02:57',
            ),
            58 => 
            array (
                'id_log' => 2059,
                'id_user' => 'utami',
                'id_kegiatan' => 1222,
                'action' => '7',
                'tgl_input' => '2019-04-13 22:04:00',
            ),
            59 => 
            array (
                'id_log' => 2060,
                'id_user' => 'ratna',
                'id_kegiatan' => 1065,
                'action' => '7',
                'tgl_input' => '2019-04-13 22:08:16',
            ),
            60 => 
            array (
                'id_log' => 2061,
                'id_user' => 'mugiyono',
                'id_kegiatan' => 1250,
                'action' => '7',
                'tgl_input' => '2019-04-13 22:08:23',
            ),
            61 => 
            array (
                'id_log' => 2062,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 22:09:48',
            ),
            62 => 
            array (
                'id_log' => 2063,
                'id_user' => 'ratna',
                'id_kegiatan' => 1068,
                'action' => '7',
                'tgl_input' => '2019-04-13 22:12:09',
            ),
            63 => 
            array (
                'id_log' => 2064,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 22:19:17',
            ),
            64 => 
            array (
                'id_log' => 2065,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 22:22:17',
            ),
            65 => 
            array (
                'id_log' => 2066,
                'id_user' => 'ratna',
                'id_kegiatan' => 1103,
                'action' => '7',
                'tgl_input' => '2019-04-13 22:22:44',
            ),
            66 => 
            array (
                'id_log' => 2067,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 22:25:21',
            ),
            67 => 
            array (
                'id_log' => 2068,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 22:25:52',
            ),
            68 => 
            array (
                'id_log' => 2069,
                'id_user' => 'ratna',
                'id_kegiatan' => 1107,
                'action' => '9',
                'tgl_input' => '2019-04-13 22:26:36',
            ),
            69 => 
            array (
                'id_log' => 2070,
                'id_user' => 'ratna',
                'id_kegiatan' => 1162,
                'action' => '9',
                'tgl_input' => '2019-04-13 22:27:25',
            ),
            70 => 
            array (
                'id_log' => 2071,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 22:28:06',
            ),
            71 => 
            array (
                'id_log' => 2072,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 22:30:20',
            ),
            72 => 
            array (
                'id_log' => 2073,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 22:30:47',
            ),
            73 => 
            array (
                'id_log' => 2074,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 22:33:13',
            ),
            74 => 
            array (
                'id_log' => 2075,
                'id_user' => 'ratna',
                'id_kegiatan' => 1058,
                'action' => '9',
                'tgl_input' => '2019-04-13 22:34:41',
            ),
            75 => 
            array (
                'id_log' => 2076,
                'id_user' => 'bhs',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 22:39:22',
            ),
            76 => 
            array (
                'id_log' => 2077,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 22:39:55',
            ),
            77 => 
            array (
                'id_log' => 2078,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 22:42:16',
            ),
            78 => 
            array (
                'id_log' => 2079,
                'id_user' => 'ratna',
                'id_kegiatan' => 1064,
                'action' => '7',
                'tgl_input' => '2019-04-13 22:42:28',
            ),
            79 => 
            array (
                'id_log' => 2080,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1102,
                'action' => '3',
                'tgl_input' => '2019-04-13 22:45:26',
            ),
            80 => 
            array (
                'id_log' => 2081,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1102,
                'action' => '6',
                'tgl_input' => '2019-04-13 22:45:26',
            ),
            81 => 
            array (
                'id_log' => 2082,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1066,
                'action' => '3',
                'tgl_input' => '2019-04-13 22:46:05',
            ),
            82 => 
            array (
                'id_log' => 2083,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1066,
                'action' => '6',
                'tgl_input' => '2019-04-13 22:46:05',
            ),
            83 => 
            array (
                'id_log' => 2084,
                'id_user' => 'ratna',
                'id_kegiatan' => 1103,
                'action' => '7',
                'tgl_input' => '2019-04-13 22:47:55',
            ),
            84 => 
            array (
                'id_log' => 2085,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 22:48:46',
            ),
            85 => 
            array (
                'id_log' => 2086,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1173,
                'action' => '2',
                'tgl_input' => '2019-04-13 22:49:57',
            ),
            86 => 
            array (
                'id_log' => 2087,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1180,
                'action' => '3',
                'tgl_input' => '2019-04-13 22:50:58',
            ),
            87 => 
            array (
                'id_log' => 2088,
                'id_user' => 'yusuf',
                'id_kegiatan' => 1180,
                'action' => '6',
                'tgl_input' => '2019-04-13 22:50:58',
            ),
            88 => 
            array (
                'id_log' => 2089,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 22:55:42',
            ),
            89 => 
            array (
                'id_log' => 2090,
                'id_user' => 'bhs',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 22:57:36',
            ),
            90 => 
            array (
                'id_log' => 2091,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-13 23:15:14',
            ),
            91 => 
            array (
                'id_log' => 2092,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1278,
                'action' => '2',
                'tgl_input' => '2019-04-14 08:27:40',
            ),
            92 => 
            array (
                'id_log' => 2093,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1273,
                'action' => '2',
                'tgl_input' => '2019-04-14 08:34:16',
            ),
            93 => 
            array (
                'id_log' => 2094,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1270,
                'action' => '2',
                'tgl_input' => '2019-04-14 08:36:56',
            ),
            94 => 
            array (
                'id_log' => 2095,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1264,
                'action' => '2',
                'tgl_input' => '2019-04-14 08:39:25',
            ),
            95 => 
            array (
                'id_log' => 2096,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1212,
                'action' => '3',
                'tgl_input' => '2019-04-14 08:40:31',
            ),
            96 => 
            array (
                'id_log' => 2097,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1212,
                'action' => '6',
                'tgl_input' => '2019-04-14 08:40:31',
            ),
            97 => 
            array (
                'id_log' => 2098,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1204,
                'action' => '3',
                'tgl_input' => '2019-04-14 08:42:16',
            ),
            98 => 
            array (
                'id_log' => 2099,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1204,
                'action' => '6',
                'tgl_input' => '2019-04-14 08:42:16',
            ),
            99 => 
            array (
                'id_log' => 2100,
                'id_user' => 'jak',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-14 08:43:17',
            ),
            100 => 
            array (
                'id_log' => 2101,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1191,
                'action' => '3',
                'tgl_input' => '2019-04-14 08:44:03',
            ),
            101 => 
            array (
                'id_log' => 2102,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1191,
                'action' => '6',
                'tgl_input' => '2019-04-14 08:44:03',
            ),
            102 => 
            array (
                'id_log' => 2103,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1261,
                'action' => '2',
                'tgl_input' => '2019-04-14 08:46:16',
            ),
            103 => 
            array (
                'id_log' => 2104,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1257,
                'action' => '2',
                'tgl_input' => '2019-04-14 08:48:50',
            ),
            104 => 
            array (
                'id_log' => 2105,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1111,
                'action' => '3',
                'tgl_input' => '2019-04-14 08:49:44',
            ),
            105 => 
            array (
                'id_log' => 2106,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1111,
                'action' => '6',
                'tgl_input' => '2019-04-14 08:49:44',
            ),
            106 => 
            array (
                'id_log' => 2107,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1255,
                'action' => '3',
                'tgl_input' => '2019-04-14 08:52:44',
            ),
            107 => 
            array (
                'id_log' => 2108,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1255,
                'action' => '6',
                'tgl_input' => '2019-04-14 08:52:44',
            ),
            108 => 
            array (
                'id_log' => 2109,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1253,
                'action' => '3',
                'tgl_input' => '2019-04-14 08:53:51',
            ),
            109 => 
            array (
                'id_log' => 2110,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1253,
                'action' => '6',
                'tgl_input' => '2019-04-14 08:53:51',
            ),
            110 => 
            array (
                'id_log' => 2111,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1243,
                'action' => '2',
                'tgl_input' => '2019-04-14 08:58:57',
            ),
            111 => 
            array (
                'id_log' => 2112,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1123,
                'action' => '2',
                'tgl_input' => '2019-04-14 08:59:27',
            ),
            112 => 
            array (
                'id_log' => 2113,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1241,
                'action' => '2',
                'tgl_input' => '2019-04-14 09:01:32',
            ),
            113 => 
            array (
                'id_log' => 2114,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1124,
                'action' => '3',
                'tgl_input' => '2019-04-14 09:03:51',
            ),
            114 => 
            array (
                'id_log' => 2115,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1124,
                'action' => '6',
                'tgl_input' => '2019-04-14 09:03:51',
            ),
            115 => 
            array (
                'id_log' => 2116,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1240,
                'action' => '2',
                'tgl_input' => '2019-04-14 09:04:35',
            ),
            116 => 
            array (
                'id_log' => 2117,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1079,
                'action' => '2',
                'tgl_input' => '2019-04-14 09:09:48',
            ),
            117 => 
            array (
                'id_log' => 2118,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1076,
                'action' => '2',
                'tgl_input' => '2019-04-14 09:14:13',
            ),
            118 => 
            array (
                'id_log' => 2119,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1127,
                'action' => '2',
                'tgl_input' => '2019-04-14 09:15:16',
            ),
            119 => 
            array (
                'id_log' => 2120,
                'id_user' => 'mardiyono',
                'id_kegiatan' => 1073,
                'action' => '2',
                'tgl_input' => '2019-04-14 09:17:39',
            ),
            120 => 
            array (
                'id_log' => 2121,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-14 09:20:59',
            ),
            121 => 
            array (
                'id_log' => 2122,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-14 09:27:57',
            ),
            122 => 
            array (
                'id_log' => 2123,
                'id_user' => 'jel',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-14 09:45:40',
            ),
            123 => 
            array (
                'id_log' => 2124,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1180,
                'action' => '7',
                'tgl_input' => '2019-04-16 15:02:19',
            ),
            124 => 
            array (
                'id_log' => 2125,
                'id_user' => 'suyanti',
                'id_kegiatan' => 1160,
                'action' => '7',
                'tgl_input' => '2019-04-16 15:10:39',
            ),
            125 => 
            array (
                'id_log' => 2126,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-16 15:21:54',
            ),
            126 => 
            array (
                'id_log' => 2127,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-16 15:25:45',
            ),
            127 => 
            array (
                'id_log' => 2128,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-16 15:39:53',
            ),
            128 => 
            array (
                'id_log' => 2129,
                'id_user' => 'JME',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-16 15:48:03',
            ),
            129 => 
            array (
                'id_log' => 2130,
                'id_user' => 'ratna',
                'id_kegiatan' => 1106,
                'action' => '7',
                'tgl_input' => '2019-04-16 16:11:06',
            ),
            130 => 
            array (
                'id_log' => 2131,
                'id_user' => 'ratna',
                'id_kegiatan' => 1067,
                'action' => '9',
                'tgl_input' => '2019-04-16 16:17:12',
            ),
            131 => 
            array (
                'id_log' => 2132,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1162,
                'action' => '10',
                'tgl_input' => '2019-04-16 16:20:04',
            ),
            132 => 
            array (
                'id_log' => 2133,
                'id_user' => 'ratna',
                'id_kegiatan' => 1064,
                'action' => '9',
                'tgl_input' => '2019-04-16 16:20:24',
            ),
            133 => 
            array (
                'id_log' => 2134,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1107,
                'action' => '8',
                'tgl_input' => '2019-04-16 16:20:37',
            ),
            134 => 
            array (
                'id_log' => 2135,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1107,
                'action' => '11',
                'tgl_input' => '2019-04-16 16:20:37',
            ),
            135 => 
            array (
                'id_log' => 2136,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1048,
                'action' => '10',
                'tgl_input' => '2019-04-16 16:21:43',
            ),
            136 => 
            array (
                'id_log' => 2137,
                'id_user' => 'ratna',
                'id_kegiatan' => 1065,
                'action' => '7',
                'tgl_input' => '2019-04-16 16:22:41',
            ),
            137 => 
            array (
                'id_log' => 2138,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1058,
                'action' => '10',
                'tgl_input' => '2019-04-16 16:24:05',
            ),
            138 => 
            array (
                'id_log' => 2139,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1064,
                'action' => '8',
                'tgl_input' => '2019-04-16 16:25:13',
            ),
            139 => 
            array (
                'id_log' => 2140,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1064,
                'action' => '11',
                'tgl_input' => '2019-04-16 16:25:13',
            ),
            140 => 
            array (
                'id_log' => 2141,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1067,
                'action' => '8',
                'tgl_input' => '2019-04-16 16:26:36',
            ),
            141 => 
            array (
                'id_log' => 2142,
                'id_user' => 'keuangan',
                'id_kegiatan' => 1067,
                'action' => '11',
                'tgl_input' => '2019-04-16 16:26:36',
            ),
            142 => 
            array (
                'id_log' => 2143,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1123,
                'action' => '3',
                'tgl_input' => '2019-04-18 15:03:20',
            ),
            143 => 
            array (
                'id_log' => 2144,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1123,
                'action' => '6',
                'tgl_input' => '2019-04-18 15:03:20',
            ),
            144 => 
            array (
                'id_log' => 2145,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-18 16:00:11',
            ),
            145 => 
            array (
                'id_log' => 2146,
                'id_user' => 'p3m',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-18 16:11:49',
            ),
            146 => 
            array (
                'id_log' => 2147,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-21 10:53:16',
            ),
            147 => 
            array (
                'id_log' => 2148,
                'id_user' => 'jan',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-21 11:14:29',
            ),
            148 => 
            array (
                'id_log' => 2149,
                'id_user' => 'stu',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-22 10:14:32',
            ),
            149 => 
            array (
                'id_log' => 2150,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1183,
                'action' => '3',
                'tgl_input' => '2019-04-22 14:41:57',
            ),
            150 => 
            array (
                'id_log' => 2151,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1183,
                'action' => '6',
                'tgl_input' => '2019-04-22 14:41:57',
            ),
            151 => 
            array (
                'id_log' => 2152,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1122,
                'action' => '2',
                'tgl_input' => '2019-04-22 14:48:04',
            ),
            152 => 
            array (
                'id_log' => 2153,
                'id_user' => 'mutmainah',
                'id_kegiatan' => 1113,
                'action' => '2',
                'tgl_input' => '2019-04-22 14:53:38',
            ),
            153 => 
            array (
                'id_log' => 2154,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1234,
                'action' => '3',
                'tgl_input' => '2019-04-22 14:57:34',
            ),
            154 => 
            array (
                'id_log' => 2155,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1234,
                'action' => '6',
                'tgl_input' => '2019-04-22 14:57:34',
            ),
            155 => 
            array (
                'id_log' => 2156,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1233,
                'action' => '2',
                'tgl_input' => '2019-04-22 15:03:55',
            ),
            156 => 
            array (
                'id_log' => 2157,
                'id_user' => 'rochadi',
                'id_kegiatan' => 1200,
                'action' => '2',
                'tgl_input' => '2019-04-22 15:07:26',
            ),
            157 => 
            array (
                'id_log' => 2158,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-22 16:51:43',
            ),
            158 => 
            array (
                'id_log' => 2159,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-22 16:52:04',
            ),
            159 => 
            array (
                'id_log' => 2160,
                'id_user' => 'jci',
                'id_kegiatan' => 0,
                'action' => '1',
                'tgl_input' => '2019-04-22 16:52:27',
            ),
        ));
        
        
    }
}