<?php

use Illuminate\Database\Seeder;

class DaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $days = [
            [
                'name' => 'Senin',
                'short_name' => 'Sen'
            ],
            [
                'name' => 'Selasa',
                'short_name' => 'Sel'
            ],
            [
                'name' => 'Rabu',
                'short_name' => 'Rab'
            ],
            [
                'name' => 'Kamis',
                'short_name' => 'Kam'
            ],
            [
                'name' => 'Jumat',
                'short_name' => 'Jum'
            ],
            [
                'name' => 'Sabtu',
                'short_name' => 'Sab'
            ],
            [
                'name' => 'Minggu',
                'short_name' => 'Min'
            ]
        ];

        foreach ($days as $day) {
            $existing = DB::table('days')->where('name', $day['name'])->first();

            if (!$existing) {
                DB::table('days')->insert($day);
            }
        }
    }
}
