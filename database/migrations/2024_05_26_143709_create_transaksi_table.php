<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('kendaraan_id');
            $table->unsignedBigInteger('destinasi_id');
            $table->string('nomor_telepon');
            $table->date('tanggal_keberangkatan');
            $table->integer('jumlah_penumpang');
            $table->double('total_pembayaran');
            $table->enum('metode_pembayaran', ['QRIS', 'DANA', 'GOPAY', 'Transfer Bank']);
            $table->enum('status', ['pending', 'dibayar', 'selesai'])->default('pending');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('kendaraan_id')->references('id')->on('kendaraans')->onDelete('cascade');
            $table->foreign('destinasi_id')->references('id')->on('destinasi')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}

