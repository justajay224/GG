<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('kendaraans', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('supir');
        $table->string('foto');
        $table->enum('status', ['tersedia', 'sedang beroperasi', 'rusak']);
        $table->double('biaya');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraans');
    }
};
