<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Patient extends Model
{
    use HasFactory; // Permite utilizar fábricas para la creación de instancias de Patient para pruebas.

    // Define una relación de pertenencia a un Owner.
    public function owner(): BelongsTo
    {
        return $this->belongsTo(Owner::class); // Esta relación es crucial para identificar al propietario del paciente.
    }

    // Define una relación de tener muchos Treatments.
    public function treatments(): HasMany
    {
        return $this->hasMany(Treatment::class); // Permite gestionar múltiples tratamientos asociados a un solo paciente.
    }
}