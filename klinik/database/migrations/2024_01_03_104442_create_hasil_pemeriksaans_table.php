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
        Schema::create('hasil_pemeriksaans', function (Blueprint $table) {
            $table->bigIncrements('hasil_pemeriksaan_id')->unsigned();
            $table->unsignedBigInteger('dokter_id');
            $table->unsignedBigInteger('pasien_id');
            $table->string('jenis_pemeriksaan',50);
            $table->string('diagnosa',50);
            $table->string('obat',50);
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
        Schema::dropIfExists('hasil_pemeriksaans');
    }
};
