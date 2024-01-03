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
        Schema::create('ruangs', function (Blueprint $table) {
            $table->bigIncrements('ruang_id')->unsigned();
            $table->unsignedBigInteger('dokter_id');
            $table->string('nama_ruangan',50);
            $table->string('jenis_ruangan',50);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->foreign('dokter_id')->references('dokter_id')->on('dokters')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_ruang');
    }
};
