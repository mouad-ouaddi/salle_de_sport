<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('utilisateur_id')->constrained('utilisateurs')->onDelete('cascade');
            $table->decimal('montant', 10, 2);
            $table->dateTime('date_paiement');
            $table->enum('methode_paiement', ['carte_bancaire', 'virement', 'espèces']);
            $table->enum('statut_paiement', ['réussi', 'échoué']);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('paiements');
    }
};