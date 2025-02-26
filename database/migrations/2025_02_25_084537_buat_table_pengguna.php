<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->string('no_hp', 20)->unique();
            $table->string('password');
            $table->string('nama');
            $table->enum('level', [
                'operator',
                'sekretaris',
                'kepala_seksi',
                'kepala',
                'admin',
                'user',
            ])->default('user');
            $table->enum('urusan', [
                'desa',
                'kecamatan',
            ])->default('desa');
            $table->enum('jenis_jabatan', [
                'desa_lurah',
                'kecamatan',
                'camat',
                'kasi_pemerintahan',
                'kasi_kebersihan',
                'kasi_keamanan_dan_ketertiban',
                'kasi_kesejahteraan_sosial',
                'kasi_pemberdayaan_masyarakat_desa',
            ])->default('desa_lurah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('pengguna');
    }
};
