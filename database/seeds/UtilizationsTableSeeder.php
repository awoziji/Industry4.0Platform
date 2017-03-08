<?php

use Illuminate\Database\Seeder;

class UtilizationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('utilizations')->delete();
        
        \DB::table('utilizations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'machine_id' => 1,
                'busyTimer' => 2.0,
                'idleTimer' => 20.0,
                'alarmTimer' => 2.0,
                'offTimer' => 0.0,
                'date' => '2016-11-01',
                'created_at' => '2016-12-12 16:29:10',
                'updated_at' => '2016-12-12 16:29:10',
                'order_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'machine_id' => 1,
                'busyTimer' => 3.0,
                'idleTimer' => 20.0,
                'alarmTimer' => 1.0,
                'offTimer' => 0.0,
                'date' => '2016-11-02',
                'created_at' => '2016-12-12 16:29:24',
                'updated_at' => '2016-12-12 16:29:24',
                'order_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'machine_id' => 2,
                'busyTimer' => 20.0,
                'idleTimer' => 1.0,
                'alarmTimer' => 1.0,
                'offTimer' => 2.0,
                'date' => '2016-12-13',
                'created_at' => '2016-12-13 15:05:07',
                'updated_at' => '2016-12-13 15:05:07',
                'order_id' => 2,
            ),
            3 => 
            array (
                'id' => 4,
                'machine_id' => 1,
                'busyTimer' => 20.0,
                'idleTimer' => 1.0,
                'alarmTimer' => 1.0,
                'offTimer' => 2.0,
                'date' => '2016-12-13',
                'created_at' => '2016-12-13 15:05:32',
                'updated_at' => '2016-12-13 15:05:32',
                'order_id' => 3,
            ),
            4 => 
            array (
                'id' => 5,
                'machine_id' => 1,
                'busyTimer' => 18.0,
                'idleTimer' => 3.0,
                'alarmTimer' => 2.0,
                'offTimer' => 1.0,
                'date' => '2016-11-03',
                'created_at' => '2016-12-13 21:51:13',
                'updated_at' => '2016-12-13 21:51:13',
                'order_id' => 1,
            ),
            5 => 
            array (
                'id' => 37,
                'machine_id' => 1,
                'busyTimer' => 17.0,
                'idleTimer' => 6.0,
                'alarmTimer' => 0.0,
                'offTimer' => 1.0,
                'date' => '2016-11-04',
                'created_at' => '2016-12-13 14:08:48',
                'updated_at' => '2016-12-13 14:08:48',
                'order_id' => 1,
            ),
            6 => 
            array (
                'id' => 38,
                'machine_id' => 1,
                'busyTimer' => 17.0,
                'idleTimer' => 1.0,
                'alarmTimer' => 0.0,
                'offTimer' => 1.0,
                'date' => '2016-11-05',
                'created_at' => '2016-12-13 14:08:48',
                'updated_at' => '2016-12-13 14:08:48',
                'order_id' => 1,
            ),
            7 => 
            array (
                'id' => 39,
                'machine_id' => 1,
                'busyTimer' => 18.0,
                'idleTimer' => 3.0,
                'alarmTimer' => 3.0,
                'offTimer' => 0.0,
                'date' => '2016-11-06',
                'created_at' => '2016-12-13 14:08:49',
                'updated_at' => '2016-12-13 14:08:49',
                'order_id' => 1,
            ),
            8 => 
            array (
                'id' => 40,
                'machine_id' => 1,
                'busyTimer' => 19.0,
                'idleTimer' => 5.0,
                'alarmTimer' => 0.0,
                'offTimer' => 0.0,
                'date' => '2016-11-07',
                'created_at' => '2016-12-13 14:08:49',
                'updated_at' => '2016-12-13 14:08:49',
                'order_id' => 1,
            ),
            9 => 
            array (
                'id' => 41,
                'machine_id' => 1,
                'busyTimer' => 21.0,
                'idleTimer' => 2.0,
                'alarmTimer' => 0.0,
                'offTimer' => 0.0,
                'date' => '2016-11-08',
                'created_at' => '2016-12-13 14:08:49',
                'updated_at' => '2016-12-13 14:08:49',
                'order_id' => 1,
            ),
            10 => 
            array (
                'id' => 42,
                'machine_id' => 1,
                'busyTimer' => 17.0,
                'idleTimer' => 5.0,
                'alarmTimer' => 1.0,
                'offTimer' => 1.0,
                'date' => '2016-11-09',
                'created_at' => '2016-12-13 14:08:49',
                'updated_at' => '2016-12-13 14:08:49',
                'order_id' => 1,
            ),
            11 => 
            array (
                'id' => 43,
                'machine_id' => 1,
                'busyTimer' => 18.0,
                'idleTimer' => 0.0,
                'alarmTimer' => 2.0,
                'offTimer' => 1.0,
                'date' => '2016-11-10',
                'created_at' => '2016-12-13 14:08:49',
                'updated_at' => '2016-12-13 14:08:49',
                'order_id' => 1,
            ),
            12 => 
            array (
                'id' => 44,
                'machine_id' => 1,
                'busyTimer' => 18.0,
                'idleTimer' => 1.0,
                'alarmTimer' => 5.0,
                'offTimer' => 0.0,
                'date' => '2016-11-11',
                'created_at' => '2016-12-13 14:08:49',
                'updated_at' => '2016-12-13 14:08:49',
                'order_id' => 1,
            ),
            13 => 
            array (
                'id' => 45,
                'machine_id' => 1,
                'busyTimer' => 18.0,
                'idleTimer' => 5.0,
                'alarmTimer' => 1.0,
                'offTimer' => 0.0,
                'date' => '2016-11-12',
                'created_at' => '2016-12-13 14:08:49',
                'updated_at' => '2016-12-13 14:08:49',
                'order_id' => 1,
            ),
            14 => 
            array (
                'id' => 46,
                'machine_id' => 1,
                'busyTimer' => 17.0,
                'idleTimer' => 0.0,
                'alarmTimer' => 4.0,
                'offTimer' => 0.0,
                'date' => '2016-11-13',
                'created_at' => '2016-12-13 14:08:49',
                'updated_at' => '2016-12-13 14:08:49',
                'order_id' => 1,
            ),
            15 => 
            array (
                'id' => 47,
                'machine_id' => 1,
                'busyTimer' => 21.0,
                'idleTimer' => 0.0,
                'alarmTimer' => 1.0,
                'offTimer' => 2.0,
                'date' => '2016-11-14',
                'created_at' => '2016-12-13 14:08:49',
                'updated_at' => '2016-12-13 14:08:49',
                'order_id' => 1,
            ),
            16 => 
            array (
                'id' => 48,
                'machine_id' => 1,
                'busyTimer' => 18.0,
                'idleTimer' => 1.0,
                'alarmTimer' => 2.0,
                'offTimer' => 2.0,
                'date' => '2016-11-15',
                'created_at' => '2016-12-13 14:08:49',
                'updated_at' => '2016-12-13 14:08:49',
                'order_id' => 1,
            ),
            17 => 
            array (
                'id' => 49,
                'machine_id' => 1,
                'busyTimer' => 20.0,
                'idleTimer' => 0.0,
                'alarmTimer' => 3.0,
                'offTimer' => 0.0,
                'date' => '2016-11-16',
                'created_at' => '2016-12-13 14:08:49',
                'updated_at' => '2016-12-13 14:08:49',
                'order_id' => 1,
            ),
            18 => 
            array (
                'id' => 50,
                'machine_id' => 1,
                'busyTimer' => 19.0,
                'idleTimer' => 1.0,
                'alarmTimer' => 4.0,
                'offTimer' => 0.0,
                'date' => '2016-11-17',
                'created_at' => '2016-12-13 14:08:49',
                'updated_at' => '2016-12-13 14:08:49',
                'order_id' => 1,
            ),
            19 => 
            array (
                'id' => 51,
                'machine_id' => 1,
                'busyTimer' => 18.0,
                'idleTimer' => 3.0,
                'alarmTimer' => 3.0,
                'offTimer' => 0.0,
                'date' => '2016-11-18',
                'created_at' => '2016-12-13 14:08:49',
                'updated_at' => '2016-12-13 14:08:49',
                'order_id' => 1,
            ),
            20 => 
            array (
                'id' => 52,
                'machine_id' => 1,
                'busyTimer' => 19.0,
                'idleTimer' => 0.0,
                'alarmTimer' => 5.0,
                'offTimer' => 0.0,
                'date' => '2016-11-19',
                'created_at' => '2016-12-13 14:08:49',
                'updated_at' => '2016-12-13 14:08:49',
                'order_id' => 1,
            ),
            21 => 
            array (
                'id' => 53,
                'machine_id' => 1,
                'busyTimer' => 19.0,
                'idleTimer' => 5.0,
                'alarmTimer' => 0.0,
                'offTimer' => 0.0,
                'date' => '2016-11-20',
                'created_at' => '2016-12-13 14:08:49',
                'updated_at' => '2016-12-13 14:08:49',
                'order_id' => 1,
            ),
            22 => 
            array (
                'id' => 54,
                'machine_id' => 1,
                'busyTimer' => 17.0,
                'idleTimer' => 3.0,
                'alarmTimer' => 0.0,
                'offTimer' => 2.0,
                'date' => '2016-11-21',
                'created_at' => '2016-12-13 14:08:49',
                'updated_at' => '2016-12-13 14:08:49',
                'order_id' => 1,
            ),
            23 => 
            array (
                'id' => 55,
                'machine_id' => 1,
                'busyTimer' => 18.0,
                'idleTimer' => 1.0,
                'alarmTimer' => 3.0,
                'offTimer' => 2.0,
                'date' => '2016-11-22',
                'created_at' => '2016-12-13 14:08:49',
                'updated_at' => '2016-12-13 14:08:49',
                'order_id' => 1,
            ),
            24 => 
            array (
                'id' => 56,
                'machine_id' => 1,
                'busyTimer' => 21.0,
                'idleTimer' => 3.0,
                'alarmTimer' => 0.0,
                'offTimer' => 0.0,
                'date' => '2016-11-23',
                'created_at' => '2016-12-13 14:08:49',
                'updated_at' => '2016-12-13 14:08:49',
                'order_id' => 1,
            ),
            25 => 
            array (
                'id' => 57,
                'machine_id' => 1,
                'busyTimer' => 18.0,
                'idleTimer' => 0.0,
                'alarmTimer' => 0.0,
                'offTimer' => 6.0,
                'date' => '2016-11-24',
                'created_at' => '2016-12-13 14:08:49',
                'updated_at' => '2016-12-13 14:08:49',
                'order_id' => 1,
            ),
            26 => 
            array (
                'id' => 58,
                'machine_id' => 1,
                'busyTimer' => 21.0,
                'idleTimer' => 1.0,
                'alarmTimer' => 0.0,
                'offTimer' => 1.0,
                'date' => '2016-11-25',
                'created_at' => '2016-12-13 14:08:49',
                'updated_at' => '2016-12-13 14:08:49',
                'order_id' => 1,
            ),
            27 => 
            array (
                'id' => 59,
                'machine_id' => 1,
                'busyTimer' => 17.0,
                'idleTimer' => 2.0,
                'alarmTimer' => 0.0,
                'offTimer' => 2.0,
                'date' => '2016-11-26',
                'created_at' => '2016-12-13 14:08:49',
                'updated_at' => '2016-12-13 14:08:49',
                'order_id' => 1,
            ),
            28 => 
            array (
                'id' => 60,
                'machine_id' => 1,
                'busyTimer' => 20.0,
                'idleTimer' => 2.0,
                'alarmTimer' => 2.0,
                'offTimer' => 0.0,
                'date' => '2016-11-27',
                'created_at' => '2016-12-13 14:08:49',
                'updated_at' => '2016-12-13 14:08:49',
                'order_id' => 1,
            ),
            29 => 
            array (
                'id' => 61,
                'machine_id' => 1,
                'busyTimer' => 20.0,
                'idleTimer' => 2.0,
                'alarmTimer' => 1.0,
                'offTimer' => 1.0,
                'date' => '2016-11-28',
                'created_at' => '2016-12-13 14:08:49',
                'updated_at' => '2016-12-13 14:08:49',
                'order_id' => 1,
            ),
            30 => 
            array (
                'id' => 62,
                'machine_id' => 1,
                'busyTimer' => 21.0,
                'idleTimer' => 0.0,
                'alarmTimer' => 1.0,
                'offTimer' => 0.0,
                'date' => '2016-11-29',
                'created_at' => '2016-12-13 14:08:49',
                'updated_at' => '2016-12-13 14:08:49',
                'order_id' => 1,
            ),
            31 => 
            array (
                'id' => 63,
                'machine_id' => 1,
                'busyTimer' => 20.0,
                'idleTimer' => 3.0,
                'alarmTimer' => 1.0,
                'offTimer' => 0.0,
                'date' => '2016-11-30',
                'created_at' => '2016-12-13 14:08:49',
                'updated_at' => '2016-12-13 14:08:49',
                'order_id' => 1,
            ),
            32 => 
            array (
                'id' => 64,
                'machine_id' => 1,
                'busyTimer' => 20.0,
                'idleTimer' => 3.0,
                'alarmTimer' => 1.0,
                'offTimer' => 0.0,
                'date' => '2016-12-14',
                'created_at' => '2016-12-13 23:47:54',
                'updated_at' => '2016-12-13 23:47:54',
                'order_id' => 3,
            ),
            33 => 
            array (
                'id' => 75,
                'machine_id' => 1,
                'busyTimer' => 18.0,
                'idleTimer' => 4.0,
                'alarmTimer' => 1.0,
                'offTimer' => 1.0,
                'date' => '2016-12-02',
                'created_at' => '2016-12-14 17:45:07',
                'updated_at' => '2016-12-14 17:45:07',
                'order_id' => 1,
            ),
            34 => 
            array (
                'id' => 76,
                'machine_id' => 1,
                'busyTimer' => 17.0,
                'idleTimer' => 3.0,
                'alarmTimer' => 1.0,
                'offTimer' => 1.0,
                'date' => '2016-12-01',
                'created_at' => '2016-12-14 17:45:21',
                'updated_at' => '2016-12-14 17:45:21',
                'order_id' => 1,
            ),
            35 => 
            array (
                'id' => 77,
                'machine_id' => 1,
                'busyTimer' => 20.0,
                'idleTimer' => 3.0,
                'alarmTimer' => 1.0,
                'offTimer' => 0.0,
                'date' => '2016-12-03',
                'created_at' => '2016-12-14 17:45:30',
                'updated_at' => '2016-12-14 17:45:30',
                'order_id' => 1,
            ),
            36 => 
            array (
                'id' => 78,
                'machine_id' => 1,
                'busyTimer' => 21.0,
                'idleTimer' => 2.0,
                'alarmTimer' => 1.0,
                'offTimer' => 0.0,
                'date' => '2016-12-04',
                'created_at' => '2016-12-14 17:45:37',
                'updated_at' => '2016-12-14 17:45:37',
                'order_id' => 1,
            ),
            37 => 
            array (
                'id' => 79,
                'machine_id' => 3,
                'busyTimer' => 21.0,
                'idleTimer' => 3.0,
                'alarmTimer' => 0.0,
                'offTimer' => 0.0,
                'date' => '2016-11-01',
                'created_at' => '2016-12-15 07:42:24',
                'updated_at' => '2016-12-15 07:42:24',
                'order_id' => 1,
            ),
            38 => 
            array (
                'id' => 80,
                'machine_id' => 3,
                'busyTimer' => 18.0,
                'idleTimer' => 6.0,
                'alarmTimer' => 0.0,
                'offTimer' => 0.0,
                'date' => '2016-11-02',
                'created_at' => '2016-12-15 07:42:24',
                'updated_at' => '2016-12-15 07:42:24',
                'order_id' => 1,
            ),
            39 => 
            array (
                'id' => 81,
                'machine_id' => 3,
                'busyTimer' => 23.0,
                'idleTimer' => 0.0,
                'alarmTimer' => 1.0,
                'offTimer' => 0.0,
                'date' => '2016-11-03',
                'created_at' => '2016-12-15 07:42:24',
                'updated_at' => '2016-12-15 07:42:24',
                'order_id' => 1,
            ),
            40 => 
            array (
                'id' => 82,
                'machine_id' => 3,
                'busyTimer' => 19.0,
                'idleTimer' => 0.0,
                'alarmTimer' => 4.0,
                'offTimer' => 1.0,
                'date' => '2016-11-04',
                'created_at' => '2016-12-15 07:42:24',
                'updated_at' => '2016-12-15 07:42:24',
                'order_id' => 1,
            ),
            41 => 
            array (
                'id' => 83,
                'machine_id' => 3,
                'busyTimer' => 17.0,
                'idleTimer' => 3.0,
                'alarmTimer' => 2.0,
                'offTimer' => 1.0,
                'date' => '2016-11-05',
                'created_at' => '2016-12-15 07:42:24',
                'updated_at' => '2016-12-15 07:42:24',
                'order_id' => 1,
            ),
            42 => 
            array (
                'id' => 84,
                'machine_id' => 3,
                'busyTimer' => 23.0,
                'idleTimer' => 1.0,
                'alarmTimer' => 0.0,
                'offTimer' => 0.0,
                'date' => '2016-11-06',
                'created_at' => '2016-12-15 07:42:24',
                'updated_at' => '2016-12-15 07:42:24',
                'order_id' => 1,
            ),
            43 => 
            array (
                'id' => 85,
                'machine_id' => 3,
                'busyTimer' => 17.0,
                'idleTimer' => 0.0,
                'alarmTimer' => 4.0,
                'offTimer' => 1.0,
                'date' => '2016-11-07',
                'created_at' => '2016-12-15 07:42:24',
                'updated_at' => '2016-12-15 07:42:24',
                'order_id' => 1,
            ),
            44 => 
            array (
                'id' => 86,
                'machine_id' => 3,
                'busyTimer' => 20.0,
                'idleTimer' => 3.0,
                'alarmTimer' => 1.0,
                'offTimer' => 0.0,
                'date' => '2016-11-08',
                'created_at' => '2016-12-15 07:42:24',
                'updated_at' => '2016-12-15 07:42:24',
                'order_id' => 1,
            ),
            45 => 
            array (
                'id' => 87,
                'machine_id' => 3,
                'busyTimer' => 19.0,
                'idleTimer' => 5.0,
                'alarmTimer' => 0.0,
                'offTimer' => 0.0,
                'date' => '2016-11-09',
                'created_at' => '2016-12-15 07:42:24',
                'updated_at' => '2016-12-15 07:42:24',
                'order_id' => 1,
            ),
            46 => 
            array (
                'id' => 88,
                'machine_id' => 3,
                'busyTimer' => 22.0,
                'idleTimer' => 2.0,
                'alarmTimer' => 0.0,
                'offTimer' => 0.0,
                'date' => '2016-11-10',
                'created_at' => '2016-12-15 07:42:24',
                'updated_at' => '2016-12-15 07:42:24',
                'order_id' => 1,
            ),
            47 => 
            array (
                'id' => 89,
                'machine_id' => 3,
                'busyTimer' => 17.0,
                'idleTimer' => 6.0,
                'alarmTimer' => 1.0,
                'offTimer' => 0.0,
                'date' => '2016-11-11',
                'created_at' => '2016-12-15 07:42:24',
                'updated_at' => '2016-12-15 07:42:24',
                'order_id' => 1,
            ),
            48 => 
            array (
                'id' => 90,
                'machine_id' => 3,
                'busyTimer' => 22.0,
                'idleTimer' => 2.0,
                'alarmTimer' => 0.0,
                'offTimer' => 0.0,
                'date' => '2016-11-12',
                'created_at' => '2016-12-15 07:42:24',
                'updated_at' => '2016-12-15 07:42:24',
                'order_id' => 1,
            ),
            49 => 
            array (
                'id' => 91,
                'machine_id' => 3,
                'busyTimer' => 21.0,
                'idleTimer' => 1.0,
                'alarmTimer' => 1.0,
                'offTimer' => 1.0,
                'date' => '2016-11-13',
                'created_at' => '2016-12-15 07:42:24',
                'updated_at' => '2016-12-15 07:42:24',
                'order_id' => 1,
            ),
            50 => 
            array (
                'id' => 92,
                'machine_id' => 3,
                'busyTimer' => 18.0,
                'idleTimer' => 2.0,
                'alarmTimer' => 1.0,
                'offTimer' => 0.0,
                'date' => '2016-11-14',
                'created_at' => '2016-12-15 07:42:24',
                'updated_at' => '2016-12-15 07:42:24',
                'order_id' => 1,
            ),
            51 => 
            array (
                'id' => 93,
                'machine_id' => 3,
                'busyTimer' => 22.0,
                'idleTimer' => 1.0,
                'alarmTimer' => 1.0,
                'offTimer' => 0.0,
                'date' => '2016-11-15',
                'created_at' => '2016-12-15 07:42:24',
                'updated_at' => '2016-12-15 07:42:24',
                'order_id' => 1,
            ),
            52 => 
            array (
                'id' => 94,
                'machine_id' => 3,
                'busyTimer' => 20.0,
                'idleTimer' => 2.0,
                'alarmTimer' => 0.0,
                'offTimer' => 0.0,
                'date' => '2016-11-16',
                'created_at' => '2016-12-15 07:42:24',
                'updated_at' => '2016-12-15 07:42:24',
                'order_id' => 1,
            ),
            53 => 
            array (
                'id' => 95,
                'machine_id' => 3,
                'busyTimer' => 21.0,
                'idleTimer' => 3.0,
                'alarmTimer' => 0.0,
                'offTimer' => 0.0,
                'date' => '2016-11-17',
                'created_at' => '2016-12-15 07:42:24',
                'updated_at' => '2016-12-15 07:42:24',
                'order_id' => 1,
            ),
            54 => 
            array (
                'id' => 96,
                'machine_id' => 3,
                'busyTimer' => 22.0,
                'idleTimer' => 1.0,
                'alarmTimer' => 0.0,
                'offTimer' => 0.0,
                'date' => '2016-11-18',
                'created_at' => '2016-12-15 07:42:24',
                'updated_at' => '2016-12-15 07:42:24',
                'order_id' => 1,
            ),
            55 => 
            array (
                'id' => 97,
                'machine_id' => 3,
                'busyTimer' => 20.0,
                'idleTimer' => 0.0,
                'alarmTimer' => 0.0,
                'offTimer' => 1.0,
                'date' => '2016-11-19',
                'created_at' => '2016-12-15 07:42:24',
                'updated_at' => '2016-12-15 07:42:24',
                'order_id' => 1,
            ),
            56 => 
            array (
                'id' => 98,
                'machine_id' => 3,
                'busyTimer' => 21.0,
                'idleTimer' => 1.0,
                'alarmTimer' => 0.0,
                'offTimer' => 1.0,
                'date' => '2016-11-20',
                'created_at' => '2016-12-15 07:42:24',
                'updated_at' => '2016-12-15 07:42:24',
                'order_id' => 1,
            ),
            57 => 
            array (
                'id' => 99,
                'machine_id' => 3,
                'busyTimer' => 20.0,
                'idleTimer' => 0.0,
                'alarmTimer' => 4.0,
                'offTimer' => 0.0,
                'date' => '2016-11-21',
                'created_at' => '2016-12-15 07:42:24',
                'updated_at' => '2016-12-15 07:42:24',
                'order_id' => 1,
            ),
            58 => 
            array (
                'id' => 100,
                'machine_id' => 3,
                'busyTimer' => 22.0,
                'idleTimer' => 0.0,
                'alarmTimer' => 1.0,
                'offTimer' => 1.0,
                'date' => '2016-11-22',
                'created_at' => '2016-12-15 07:42:24',
                'updated_at' => '2016-12-15 07:42:24',
                'order_id' => 1,
            ),
            59 => 
            array (
                'id' => 101,
                'machine_id' => 3,
                'busyTimer' => 17.0,
                'idleTimer' => 5.0,
                'alarmTimer' => 0.0,
                'offTimer' => 1.0,
                'date' => '2016-11-23',
                'created_at' => '2016-12-15 07:42:24',
                'updated_at' => '2016-12-15 07:42:24',
                'order_id' => 1,
            ),
            60 => 
            array (
                'id' => 102,
                'machine_id' => 3,
                'busyTimer' => 17.0,
                'idleTimer' => 0.0,
                'alarmTimer' => 5.0,
                'offTimer' => 0.0,
                'date' => '2016-11-24',
                'created_at' => '2016-12-15 07:42:24',
                'updated_at' => '2016-12-15 07:42:24',
                'order_id' => 1,
            ),
            61 => 
            array (
                'id' => 103,
                'machine_id' => 3,
                'busyTimer' => 17.0,
                'idleTimer' => 4.0,
                'alarmTimer' => 3.0,
                'offTimer' => 0.0,
                'date' => '2016-11-25',
                'created_at' => '2016-12-15 07:42:24',
                'updated_at' => '2016-12-15 07:42:24',
                'order_id' => 1,
            ),
            62 => 
            array (
                'id' => 104,
                'machine_id' => 3,
                'busyTimer' => 17.0,
                'idleTimer' => 0.0,
                'alarmTimer' => 5.0,
                'offTimer' => 0.0,
                'date' => '2016-11-26',
                'created_at' => '2016-12-15 07:42:24',
                'updated_at' => '2016-12-15 07:42:24',
                'order_id' => 1,
            ),
            63 => 
            array (
                'id' => 105,
                'machine_id' => 3,
                'busyTimer' => 19.0,
                'idleTimer' => 1.0,
                'alarmTimer' => 4.0,
                'offTimer' => 0.0,
                'date' => '2016-11-27',
                'created_at' => '2016-12-15 07:42:24',
                'updated_at' => '2016-12-15 07:42:24',
                'order_id' => 1,
            ),
            64 => 
            array (
                'id' => 106,
                'machine_id' => 3,
                'busyTimer' => 22.0,
                'idleTimer' => 0.0,
                'alarmTimer' => 0.0,
                'offTimer' => 0.0,
                'date' => '2016-11-28',
                'created_at' => '2016-12-15 07:42:24',
                'updated_at' => '2016-12-15 07:42:24',
                'order_id' => 1,
            ),
            65 => 
            array (
                'id' => 107,
                'machine_id' => 3,
                'busyTimer' => 21.0,
                'idleTimer' => 3.0,
                'alarmTimer' => 0.0,
                'offTimer' => 0.0,
                'date' => '2016-11-29',
                'created_at' => '2016-12-15 07:42:24',
                'updated_at' => '2016-12-15 07:42:24',
                'order_id' => 1,
            ),
            66 => 
            array (
                'id' => 108,
                'machine_id' => 3,
                'busyTimer' => 22.0,
                'idleTimer' => 1.0,
                'alarmTimer' => 1.0,
                'offTimer' => 0.0,
                'date' => '2016-11-30',
                'created_at' => '2016-12-15 07:42:24',
                'updated_at' => '2016-12-15 07:42:24',
                'order_id' => 1,
            ),
        ));
        
        
    }
}