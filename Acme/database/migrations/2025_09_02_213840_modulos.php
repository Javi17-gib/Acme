<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('modulos', function (Blueprint $table) {
            $table->id('Id');
            $table->foreignId('id_proyecto')->constrained('proyectos');
            $table->string('codigo_modulo', 50);
            $table->string('nombre_modulo', 100);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('modulos');
    }
};
