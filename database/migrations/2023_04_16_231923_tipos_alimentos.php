<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tiposAlimentos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');

        });

        // Insertar los registros 
        DB::table('tiposAlimentos')->insert([
            ['descripcion' => 'alimento'],
            ['descripcion' => 'bebida'],
            ['descripcion' => 'snack'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiposAlimentos');
    }
};
