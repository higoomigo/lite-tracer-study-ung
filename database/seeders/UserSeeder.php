<?php

namespace Database\Seeders;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID'); // Faker dengan lokal Indonesia

        $dataProdi = [
            ['kode' => '5314', 'prodi' => 'SI',  'angkatan' => '20', 'prefix' => '531420', 'start' => 1, 'end' => 15],
            ['kode' => '5314', 'prodi' => 'SI',  'angkatan' => '19', 'prefix' => '531419', 'start' => 1, 'end' => 15],
            ['kode' => '5324', 'prodi' => 'PTI', 'angkatan' => '20', 'prefix' => '532420', 'start' => 1, 'end' => 15],
            ['kode' => '5324', 'prodi' => 'PTI', 'angkatan' => '19', 'prefix' => '532419', 'start' => 1, 'end' => 15],
        ];

        foreach ($dataProdi as $group) {
            for ($i = $group['start']; $i <= $group['end']; $i++) {
                $nimNumber = str_pad($i, 3, '0', STR_PAD_LEFT); // 001, 002, ..., 015
                $nim = $group['prefix'] . $nimNumber;

                // Semua mahasiswa status wisuda
                $status = 'Wisuda';

                // Tahun lulus random 2023 atau 2024
                $graduateYear = $faker->randomElement([2023, 2024]);
                $name = $faker->firstName() . ' ' . $faker->lastName();
                User::create([
                    'name' => $name,
                    'nim' => $nim,
                    'email' => $nim . '@example.com',
                    'prodi' => $group['prodi'],
                    'angkatan' => $group['angkatan'],
                    'status' => $status,
                    'graduate_year' => $graduateYear,
                    'role' => 'mahasiswa',
                    'password' => Hash::make($nim), // Password = NIM
                ]);
            }
        }
    }
}
