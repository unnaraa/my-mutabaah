<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nama' => 'Admin Unna',
                'jenis_kelamin' => 'P',
                'nomor_hp' => '082190545220',
                'email' => 'admin@mutabaah.com',
                'role' => '1', // 1 untuk admin
                'password' => bcrypt('090909'),
            ],
            [
                'nama' => 'User Unna',
                'jenis_kelamin' => 'P',
                'nomor_hp' => '08979190354',
                'email' => 'user@mutabaah.com',
                'role' => '2', // 2 untuk pengguna biasa
                'password' => bcrypt('090909'),
            ],
        ]);
    }
}