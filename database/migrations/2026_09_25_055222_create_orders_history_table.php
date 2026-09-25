<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders_history', function (Blueprint $table) {
            $table->id('id_order_history');

            $table->unsignedBigInteger('id_menu');
            $table->unsignedBigInteger('id_pelanggan');
            $table->unsignedBigInteger('id_meja');
            $table->unsignedBigInteger('id_karyawan');
            $table->unsignedBigInteger('id_reservasi')->nullable();

            $table->enum('tipe_order', [
                'dine_in',
                'takeaway',
            ]);

            $table->dateTime('tgl_order');

            $table->enum('status_order', [
                'diproses',
                'selesai',
                'dibatalkan',
            ]);

            $table->decimal('total_harga', 12, 2);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders_history');
    }
};