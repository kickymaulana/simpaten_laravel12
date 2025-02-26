<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pengguna>
 */
class PenggunaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'no_hp' => '6282108210821',
            'password' => Hash::make('kicky123'),
            'nama' => 'Kicky Maulana',
            'level' => 'operator',
            'urusan' => 'desa',
            'jenis_jabatan' => 'desa_lurah',
        ];
    }
}
