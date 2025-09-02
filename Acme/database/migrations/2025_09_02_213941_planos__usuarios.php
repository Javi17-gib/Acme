<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('plano_usuario', function (Blueprint $table) {
            $table->id('Id');
            $table->foreignId('id_plano')->constrained('planos');
            $table->foreignId('id_user')->constrained('users');
            $table->enum('permiso', ['ver','editar','aprobar']);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('plano_usuario');
    }
};
