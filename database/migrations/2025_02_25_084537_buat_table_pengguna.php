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
            $table->string('username', 20);
            $table->string('nama');
            $table->enum('level', [
                'kepala_urusan',
                'kepala_desa',
                'camat',
                'sekretaris_camat',
                'kepala_seksi',
                'masyarakat',
                'admin',
            ])->default('masyarakat');
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
