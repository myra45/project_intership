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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->text('nama_event');
            $table->date('tanggal');
            $table->time('jam_mulai');
            $table->text('tempat');
            $table->timestamps();

            $table->unsignedBigInteger('extracurricular_id');
            
            // Menambahkan foreign key constraints
            $table->foreign('extracurricular_id')
                  ->references('id')->on('extracurriculars')
                  ->onDelete('cascade'); // Menghapus event jika extracurricular dihapus

            $table->timestamps(); // Menambahkan kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
