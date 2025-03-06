<?php

use App\Models\Employer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//PARA CREAR UNA NUEVA MIGRACION ES php artisan make:migration
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //UP == APLICAR LA OPERACION (cambiar, añadir o eliminar)
    public function up(): void
    {
        Schema::create('trabajos', function (Blueprint $table) {
            $table->id();
            //FK: para que cada trabajador tenga un trabajo(dos formas de hacerlo)
           //1. $table->unsignedBigInteger('employer_id');
           //2.
            $table->foreignIdFor(Employer::class);
            $table->string('title');
            $table->string('salary');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    //DOWN == DESHACE LA OPERACIÓN
    public function down(): void
    {
        Schema::dropIfExists('trabajos');
    }
};
