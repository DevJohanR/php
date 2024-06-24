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
        Schema::create('treatments', function (Blueprint $table) {
            $table->id();  // Crea una columna de identificación autoincremental, típicamente utilizada como clave primaria.
            $table->string('description');  // Crea una columna de tipo cadena para almacenar una descripción del tratamiento.
            $table->text('notes')->nullable();  // Crea una columna de texto para notas adicionales sobre el tratamiento. Esta columna puede contener NULL.
            $table->foreignId('patient_id')->constrained('patients')->cascadeOnDelete();  // Establece una clave foránea 'patient_id' que hace referencia a la tabla 'patients'. Elimina en cascada los tratamientos si el paciente correspondiente es eliminado.
            $table->unsignedInteger('price')->nullable();  // Crea una columna de tipo entero sin signo para el precio del tratamiento. Esta columna puede contener NULL.
            $table->timestamps();  // Agrega las columnas 'created_at' y 'updated_at' para registrar automáticamente la creación y última modificación de los registros.
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treatments');
    }
};
