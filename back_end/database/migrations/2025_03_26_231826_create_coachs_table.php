<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('coachs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('utilisateur_id')->constrained('utilisateurs')->onDelete('cascade');
            $table->string('specialite');
            $table->text('biographie')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('coachs');
    }
};