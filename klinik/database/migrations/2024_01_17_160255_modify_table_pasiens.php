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
        Schema::table('pasiens', function (Blueprint $table) {
            // Ubah tipe data kolom
            $table->string('no_telp',20)->change(); // Ganti 'string' dengan tipe data yang diinginkan
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
