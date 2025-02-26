<?php

use App\Models\Pengguna;
use Database\Seeders\PenggunaSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('isi user dummy', function () {

    $response = $this->seed([PenggunaSeeder::class]);

    $pengguna = Pengguna::count();

    $this->assertEquals(1, $pengguna);

});
