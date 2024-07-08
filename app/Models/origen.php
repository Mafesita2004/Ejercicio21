<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class origen extends Model
{
    use HasFactory;
    protected $primaryKey = 'codigo';
    protected $fillable = ['nombre', 'otros_datos'];

    public function viajes()
    {
        return $this->hasMany(Viaje::class);
    }
}
