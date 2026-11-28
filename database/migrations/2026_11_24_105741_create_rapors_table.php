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
        Schema::create('rapor', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('tahun_ajaran');
            $table->string('kelas');
            $table->integer('id_siswa');
            $table->foreignId('wali_id')->constrained(
                table: 'gurus',
                column: 'id_guru'
            );
            $table->string('semester');
            $table->float('nilai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rapors');
    }
};
