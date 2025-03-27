<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('disponibilites_coachs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('coach_id')->constrained('utilisateurs')->onDelete('cascade');
            $table->enum('jour_semaine', ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche']);
            $table->time('heure_debut');
            $table->time('heure_fin');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('disponibilites_coachs');
    }
};