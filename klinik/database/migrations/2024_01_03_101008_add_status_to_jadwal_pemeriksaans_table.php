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
        Schema::table('jadwal_pemeriksaans', function (Blueprint $table) {
            $table->enum('status', ['Pending', 'Approved', 'Rejected']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jadwal_pemeriksaans', function (Blueprint $table) {
            //
        });
    }
};
