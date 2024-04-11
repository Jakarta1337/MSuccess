<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teachers')->insert([
            'name' => 'teacher1',
            'email' => 'teacher1@um5r.ac.ma',
            'password' => Hash::make('#teacher1@um5@2024#'),
            'status' => 'active',
            'role_name' => 'Teachers',
        ]);
    }
}
