<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //     DB::table('users')->insert([
        //         'name' => 'admin',
        //         'email' => 'admin.fsr@um5r.ac.ma',
        //         'password' => Hash::make('#admin@um5@2024#'),
        //         'status' => 'active',
        //         'role_name' => 'Admin',
        // ]);
    }
}
