<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Evento extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $table = 'eventos';
   protected $fillable = [
       'nombre',
       'siglas',
       'descripcion',
       'areas',
       'capacidad',
       'duracion',
       'costo',
       'localizacion',
   ];

    //generar URL de la imagen
    /*public function coverPath(){
        return Storage::url('eventos_img/' . $this->imagen);
    }*/
}