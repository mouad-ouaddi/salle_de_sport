<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('utilisateur_id')->constrained('utilisateurs')->onDelete('cascade');
            $table->foreignId('cours_id')->constrained('cours')->onDelete('cascade');
            $table->dateTime('date_reservation');
            $table->enum('statut', ['réservé', 'annulé']);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('reservations');
    }
};
