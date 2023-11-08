<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Normativa extends Model
{
    use HasFactory;
    protected $fillable = ['titulo','tipo_documento','archivo'];
    public function scopeBuscar($query, $buscar)
    {
        if ($buscar === '') {
            return;
        }
        return $query->where('titulo', 'like', '%' . $buscar . '%');
    }
}
