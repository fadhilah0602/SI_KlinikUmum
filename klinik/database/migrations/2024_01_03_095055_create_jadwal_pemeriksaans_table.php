<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jadwal_pemeriksaans', function (Blueprint $table) {
            $table->bigIncrements('jadwal_pemeriksaan_id')->unsigned();
            $table->unsignedBigInteger('dokter_id');
            $table->unsignedBigInteger('pasien_id');
            $table->string('hari',20);
            $table->date('waktu');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->foreign('dokter_id')->references('dokter_id')->on('dokters')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pasien_id')->references('pasien_id')->on('pasiens')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_pemeriksaans');
    }
};
