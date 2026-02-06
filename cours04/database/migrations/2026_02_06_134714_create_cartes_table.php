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
        // id, name, description, price, count, image_path, categorie_id
        Schema::create('cartes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description')
                ->nullable();
            $table->decimal('prix');
            $table->integer('nb_cartes');
            $table->string('imagePath')
                ->nullable();
            $table->foreignId('categorie_id')
                ->constrained()
                ->restrictOnDelete()
                ->restrictOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cartes');
    }
};
