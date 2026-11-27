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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id('id_guru');
            // $table->foreignId('id_guru')
            // ->primary()
            // ->constrained(
            //     table : 'users',
            //     indexName: 'id_guru'
            // )
            // ->onDelete('casdace');
            $table->string('name');
            $table->unsignedBigInteger('nuptk')->unique()->nullable();
            $table->unsignedBigInteger('nip')->unique();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
