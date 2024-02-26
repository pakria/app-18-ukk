<?php

namespace Database\Seeders;
use App\Models\User;
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
        User::create([
            'name' => 'admin',
            'email' => 'lJ1eA@example.com',
            'password' => Hash::make('admin'),
            'role' => 'admin',
            'alamat' => 'tangerang',
            'telepon' => '4234234',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        User::create([
            'name' => 'Petugas',
            'email' => 'petugas@gmail.com',
            'password' => Hash::make('petugas'),
            'role' => 'petugas',
            'alamat' => 'tangerang',
            'telepon' => '6547567',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        User::create([
            'name' => 'Peminjam',
            'email' => 'peminjam@gmail.com',
            'password' => Hash::make('peminjam'),
            'role' => 'peminjam',
            'alamat' => 'tangerang',
            'telepon' => '5464566',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
