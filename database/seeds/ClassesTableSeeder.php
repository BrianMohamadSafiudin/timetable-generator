<?php

use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            [
                'name' => 'AKT-1A',
                'size' => 30
            ],
            [
                'name' => 'AKT-1B',
                'size' => 30
            ],
//            [
//                'name' => 'AKT-1C',
//                'size' => 30
//            ],
            [
                'name' => 'AKT-2A',
                'size' => 30
            ],
            [
                'name' => 'AKT-2B',
                'size' => 30
            ],
//            [
//                'name' => 'AKT-2C',
//                'size' => 30
//            ],
//            [
//                'name' => 'AKT-3A',
//                'size' => 30
//            ],
//            [
//                'name' => 'AKT-3B',
//                'size' => 30
//            ],
//            [
//                'name' => 'AKT-3C',
//                'size' => 30
//            ],
//            [
//                'name' => 'AKM-1A',
//                'size' => 30
//            ],
//            [
//                'name' => 'AKM-2A',
//                'size' => 30
//            ],
//            [
//                'name' => 'AKM-3A',
//                'size' => 30
//            ],

        ]);


        for ($i = 1; $i <= 4; $i++) {
            DB::table('courses_classes')->insert([
                [
                    'course_id' => 1,
                    'class_id' => $i,
                    'meetings' => 1,
                    'academic_period_id' => 1
                ],
                [
                    'course_id' => 2,
                    'class_id' => $i,
                    'meetings' => 1,
                    'academic_period_id' => 1

                ],
                [
                    'course_id' => 3,
                    'class_id' => $i,
                    'meetings' => 2,
                    'academic_period_id' => 1
                ],
                [
                    'course_id' => 4,
                    'class_id' => $i,
                    'meetings' => 1,
                    'academic_period_id' => 1
                ],
                [
                    'course_id' => 5,
                    'class_id' => $i,
                    'meetings' => 1,
                    'academic_period_id' => 1

                ],
                [
                    'course_id' => 6,
                    'class_id' => $i,
                    'meetings' => 1,
                    'academic_period_id' => 1
                ],
                [
                    'course_id' => 7,
                    'class_id' => $i,
                    'meetings' => 2,
                    'academic_period_id' => 1
                ],
                [
                    'course_id' => 8,
                    'class_id' => $i,
                    'meetings' => 1,
                    'academic_period_id' => 1
                ],
                [
                    'course_id' => 9,
                    'class_id' => $i,
                    'meetings' => 2,
                    'academic_period_id' => 2
                ],
                [
                    'course_id' => 10,
                    'class_id' => $i,
                    'meetings' => 1,
                    'academic_period_id' => 2
                ],
                [
                    'course_id' => 11,
                    'class_id' => $i,
                    'meetings' => 1,
                    'academic_period_id' => 2
                ],
                [
                    'course_id' => 12,
                    'class_id' => $i,
                    'meetings' => 1,
                    'academic_period_id' => 2
                ],
                [
                    'course_id' => 13,
                    'class_id' => $i,
                    'meetings' => 1,
                    'academic_period_id' => 2
                ],
            ]);
        }

    }
}
