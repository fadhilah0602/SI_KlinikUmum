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
        Schema::create('dokters', function (Blueprint $table) {
            $table->bigIncrements('dokter_id')->unsigned();
            $table->unsignedBigInteger('user_id');
            $table->string('nip',50);
            $table->string('name',50);
            $table->string('tempat_lahir',50);
            $table->date('tgl_lahir');
            $table->enum('gender',['Laki-laki','Perempuan']);
            $table->string('alamat',100);
            $table->integer('no_telp');
            $table->integer('spesialis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokters');
    }
};
