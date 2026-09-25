<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id('id_karyawan');
            $table->string('nama', 100);
            $table->string('jabatan', 50);
            $table->string('no_hp', 20)->nullable();
            $table->text('alamat')->nullable();
            $table->date('tgl_masuk')->nullable();
            $table->enum('status', ['aktif', 'nonaktif'])->default('aktif');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('karyawan');
    }
};
