<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('historial_planos', function (Blueprint $table) {
            $table->id('Id');
            $table->foreignId('id_plano')->constrained('planos');
            $table->integer('version');
            $table->string('archivo_anterior', 200);
            $table->timestamp('fecha_modificacion')->useCurrent();
            $table->foreignId('id_user')->constrained('users'); // arquitecto
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('historial_planos');
    }
};
