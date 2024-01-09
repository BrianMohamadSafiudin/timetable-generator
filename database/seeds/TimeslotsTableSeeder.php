<?php

use Illuminate\Database\Seeder;

class TimeslotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('timeslots')->insert([
            [
                'time' => '7:00 - 7:50',
                'rank' => 1
            ],
            [
                'time' => '7:50 - 8:40',
                'rank' => 2
            ],
            [
                'time' => '8:40 - 9:30',
                'rank' => 3
            ],
            [
                'time' => '9:40 - 10:30',
                'rank' => 4
            ],
            [
                'time' => '10:30 - 11:20',
                'rank' => 5
            ],
            [
                'time' => '11:20 - 12:10',
                'rank' => 6
            ],
            [
                'time' => '12:50 - 13:40',
                'rank' => 7
            ],
            [
                'time' => '13:40 - 14:30',
                'rank' => 8
            ]
        ]);
//        DB::table('timeslots')->insert([
//            [
//                'time' => '7:00 - 7:50',
//                'rank' => 1
//            ],
//            [
//                'time' => '7:50 - 8:40',
//                'rank' => 2
//            ],
//            [
//                'time' => '8:40 - 9:30',
//                'rank' => 3
//            ],
//            [
//                'time' => '9:40 - 10:30',
//                'rank' => 4
//            ],
//            [
//                'time' => '10:30 - 11:20',
//                'rank' => 5
//            ],
//            [
//                'time' => '11:20 - 12:10',
//                'rank' => 6
//            ],
//            [
//                'time' => '12:50 - 13:40',
//                'rank' => 7
//            ],
//            [
//                'time' => '13:40 - 14:30',
//                'rank' => 8
//            ],
//            [
//                'time' => '14:30 - 15:20',
//                'rank' => 9
//            ],
//            [
//                'time' => '15:30 - 16:20',
//                'rank' => 10
//            ],
//            [
//                'time' => '16:20 - 17:10',
//                'rank' => 11
//            ]
//        ]);
    }
}
