<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class viaje extends Model
{
    use HasFactory;
    protected $fillable = ['codigo', 'num_plazas', 'fecha', 'otros_datos', 'viajero_id'];

    public function viajero()
    {
        return $this->belongsTo(Viajero::class);
    }
}
