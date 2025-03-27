<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('abonnements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('utilisateur_id')->constrained('utilisateurs')->onDelete('cascade');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->enum('statut', ['actif', 'inactif', 'expiré']);
            $table->enum('statut_paiement', ['payé', 'en_attente', 'échoué']);
            $table->decimal('montant', 10, 2);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('abonnements');
    }
};
