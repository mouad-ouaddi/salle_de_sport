<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('plannings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cours_id')->constrained('cours')->onDelete('cascade');
            $table->foreignId('coach_id')->constrained('utilisateurs')->onDelete('cascade');
            $table->dateTime('heure_debut');
            $table->dateTime('heure_fin');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('plannings');
    }
};
