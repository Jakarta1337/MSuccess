<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            'name' => 'student1',
            'email' => 'student1@um5r.ac.ma',
            'password' => Hash::make('#student1@um5@2024#'),
            'status' => 'active',
            'role_name' => 'Student',
        ]);
    }
}
