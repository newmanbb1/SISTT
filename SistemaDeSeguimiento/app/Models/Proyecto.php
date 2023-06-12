<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Proyecto extends Model
{
    use HasFactory;
    protected $fillable = ['titulo','resumen','fecha','estado','archivo','avance','estudiante_id','modalidad_id'];

    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'estudiante_id','id') ;
    }
    public function modalidad()
    {
        return $this->belongsTo(Modalidad::class, 'modalidad_id','id') ;
    }

}
