<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengguna::create([
            'no_hp' => '6282108210821',
            'password' => Hash::make('kicky123'),
            'nama' => 'Kicky Maulana',
            'level' => 'operator',
            'urusan' => 'desa',
            'jenis_jabatan' => 'desa_lurah',
        ]);
    }
}
