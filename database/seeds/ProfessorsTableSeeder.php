<?php

use Illuminate\Database\Seeder;

class ProfessorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professors')->insert([
            [
                'name' => 'Andi Kusuma Indrawan, S.Kom., M.T.'
            ],
            [
                'name' => 'Drs. Apit Miharso, Ak., M.Pd'
            ],
            [
                'name' => 'Yusna, S.E., M.Si., Ak.'
            ],
            [
                'name' => 'Elvyra Handayani Soedarso, S.E., M.SA.'
            ],
            [
                'name' => 'Drs. Muhamad Muwidha, M.SI.'
            ],
            [
                'name' => 'Dr. Nurafni Eltivia, S.E., M.SA.'
            ],
            [
                'name' => 'Dr. Aang Afandi, S.E., M.M',
            ],
            [
                'name' => 'Drs. Ahmad Jarnuzi, Ak., M.SI.'
            ],
            [
                'name' => 'Andi Asdani, S.E., M.M. '
            ],
            [
                'name' => 'Dr. Dra. Anik Kusmintarti, M.M.'
            ],
            [
                'name' => 'Anik Kusnawati, S.Pd., M.Pd., Ph.D. '
            ]
        ]);

        DB::table('courses_professors')->insert([
            [
                'course_id' => 1,
                'professor_id' => 1
            ],
            [
                'course_id' => 2,
                'professor_id' => 1
            ],
            [
                'course_id' => 3,
                'professor_id' => 1
            ],
            [
                'course_id' => 4,
                'professor_id' => 2
            ],
            [
                'course_id' => 5,
                'professor_id' => 2
            ],
            [
                'course_id' => 6,
                'professor_id' => 4
            ],
            [
                'course_id' => 7,
                'professor_id' => 3
            ],
            [
                'course_id' => 8,
                'professor_id' => 6
            ],
            [
                'course_id' => 9,
                'professor_id' => 5
            ],
            [
                'course_id' => 10,
                'professor_id' => 5
            ],
            [
                'course_id' => 11,
                'professor_id' => 9
            ],
            [
                'course_id' => 12,
                'professor_id' => 10
            ],
            [
                'course_id' => 13,
                'professor_id' => 11
            ],
            [
                'course_id' => 14,
                'professor_id' => 8
            ],
            [
                'course_id' => 15,
                'professor_id' => 6
            ],
            [
                'course_id' => 16,
                'professor_id' => 9
            ],
            [
                'course_id' => 17,
                'professor_id' => 4
            ],
            [
                'course_id' => 18,
                'professor_id' => 3
            ],
            [
                'course_id' => 19,
                'professor_id' => 2
            ],
            [
                'course_id' => 20,
                'professor_id' => 1
            ],
            [
                'course_id' => 21,
                'professor_id' => 4
            ],
            [
                'course_id' => 22,
                'professor_id' => 6
            ],
            [
                'course_id' => 23,
                'professor_id' => 8
            ],
            [
                'course_id' => 24,
                'professor_id' => 10
            ],
            [
                'course_id' => 25,
                'professor_id' => 7
            ]
        ]);

        DB::table('unavailable_timeslots')->insert([
            [
                'professor_id' => 2,
                'day_id' => 1,
                'timeslot_id' => 1
            ],
            [
                'professor_id' => 6,
                'day_id' => 4,
                'timeslot_id' => 2
            ],
            [
                'professor_id' => 3,
                'day_id' => 5,
                'timeslot_id' => 2
            ],
            [
                'professor_id' => 2,
                'day_id' => 1,
                'timeslot_id' => 3
            ]
        ]);
    }
}
