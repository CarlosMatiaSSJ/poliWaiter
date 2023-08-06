<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        
        Schema::create('alimentos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->float('precioVenta');
            //$table->integer('tipoAlimento')->unsigned();
            $table->foreignId('tipoAlimento')->constrained('tiposAlimentos');
            $table->binary('imagenAlimento', 4294967295)->nullable();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alimentos');
    }
};
