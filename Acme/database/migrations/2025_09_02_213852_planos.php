<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('planos', function (Blueprint $table) {
            $table->id('Id');
            $table->foreignId('id_modulo')->constrained('modulos');
            $table->string('nombre_plano', 150);
            $table->string('archivo_plano', 200);
            $table->integer('version');
            $table->foreignId('id_user')->constrained('users'); // arquitecto
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('planos');
    }
};
