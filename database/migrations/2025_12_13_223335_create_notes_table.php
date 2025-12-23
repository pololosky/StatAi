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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->float('Valeur');
            // une autre table
            $table->string('matiere');
            // plus besoin
            $table->date('Date');
            // $table->foreignId('livre_id')->constrained('livres')->onDelete('cascade');
            $table->unsignedBigInteger('User_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};