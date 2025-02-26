<?php

use App\Models\Pengguna;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('halaman login harus tampil', function () {

    $response = $this->get('/login');

    $response->assertStatus(200);
});

test('Coba login', function () {

    // $this->seed([PenggunaSeeder::class]);

    // $user = Pengguna::where('no_hp', '6282108210821')->first();
    //
    $user = Pengguna::factory()->create();

    $response = $this->post('/login', [
        'no_hp' => '6282108210821',
        'password' => 'kicky123',
    ]);

    // $response->assertSessionHasNoErrors();
    $this->assertAuthenticatedAs($user);
    // $response->assertAuthenticated();
});
