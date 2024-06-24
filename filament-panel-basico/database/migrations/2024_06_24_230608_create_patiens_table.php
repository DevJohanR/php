<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();  // Crea una columna de identificación que se autoincrementa, usualmente utilizada como clave primaria.
            $table->date('date_of_birth');  // Crea una columna para almacenar la fecha de nacimiento.
            $table->string('name');  // Crea una columna para almacenar el nombre, que admite cadenas de texto.
            $table->foreignId('owner_id')->constrained('owners')->cascadeOnDelete();  // Crea una clave foránea 'owner_id' referenciada a la tabla 'owners'. Si se elimina un registro de 'owners', también se eliminan los registros relacionados en 'patients'.
            $table->string('type');  // Crea una columna para almacenar el tipo, como un campo de texto.
            $table->timestamps();  // Crea dos columnas 'created_at' y 'updated_at' para registrar automáticamente cuándo se creó o actualizó el registro.
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patiens');
    }
};
