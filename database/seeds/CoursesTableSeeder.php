<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            [
                'name' => 'PENGANTAR AKUNTANSI',
                'course_code' => 'AKT 221001'
            ],
            [
                'name' => 'PENGANTAR BISNIS',
                'course_code' => 'AKT 221002'
            ],
            [
                'name' => 'PENGANTAR EKONOMI',
                'course_code' => 'AKT 221003'
            ],
            [
                'name' => 'APLIKASI  KOMPUTER BISNIS 1',
                'course_code' => 'AKT 221004'
            ],
            [
                'name' => 'BAHASA  INGGRIS  DASAR',
                'course_code' => 'AKT 221005'
            ],
            [
                'name' => 'PENGETIKAN NIAGA',
                'course_code' => 'AKT 221006'
            ],
            [
                'name' => 'PENDIDIKAN PANCASILA',
                'course_code' => 'AKT 221007'
            ],
            [
                'name' => 'MATEMATIKA KEUANGAN',
                'course_code' => 'AKT 221008'
            ],
            [
                'name' => 'AKUNTANSI BIAYA',
                'course_code' => 'AKT 223001'
            ],
            [
                'name' => 'AKUNTANSI KEUANGAN MENENGAH 2',
                'course_code' => 'AKT 223002'
            ],
            [
                'name' => 'SISTEM  INFORMASI AKUNTANSI',
                'course_code' => 'AKT 223003'
            ],
            [
                'name' => 'AKUNTANSI SEKTOR  PUBLIK',
                'course_code' => 'AKT 223004'
            ],
            [
                'name' => 'PERPAJAKAN',
                'course_code' => 'AKT 223005'
            ],
            [
                'name' => 'APLIKASI KOMPUTER BISNIS 3',
                'course_code' => 'AKT 223006'
            ],
            [
                'name' => 'BAHASA INGGRIS BISNIS 2',
                'course_code' => 'AKT 223007'
            ],
            [
                'name' => 'BAHASA  INDONESIA',
                'course_code' => 'AKT 223008'
            ],
            [
                'name' => 'AKUNTANSI KEUANGAN LANJUTAN',
                'course_code' => 'AKT 215001'
            ],
            [
                'name' => 'PRAKTIKUM SISTEM INFORMASI AKUNTANSI',
                'course_code' => 'AKT 215002'
            ],
            [
                'name' => 'AKUNTANSI SEKTOR PUBLIK',
                'course_code' => 'AKT 215003'
            ],
            [
                'name' => 'TEKNIK AUDIT BERBANTUAN KOMPUTER',
                'course_code' => 'AKT 215004'
            ],
            [
                'name' => 'MANAJEMEN KEUANGAN',
                'course_code' => 'AKT 215005'
            ],
            [
                'name' => 'PENGANGGARAN',
                'course_code' => 'AKT 215006'
            ],
            [
                'name' => 'BAHASA INGGRIS BISNIS 2',
                'course_code' => 'AKT 215007'
            ],
            [
                'name' => 'ASPEK HUKUM DALAM BISNIS',
                'course_code' => 'AKT 215008'
            ],
            [
                'name' => 'PENGANTAR AKUNTANSI',
                'course_code' => 'AKM 231001'
            ]
        ]);
    }
}
