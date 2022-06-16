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

   public function participants(){
    return $this-> belongsToMany(Participant::class, 'eventos_participants');
   }

   public function categories(){
    return $this-> belongsToMany(Category::class, 'eventos_categories');
   }

   //Devuelve el listado de participantes
   public function participantsNames(){
    $participants = $this->participants;
    $names = [];

    foreach($participants as $participant){
        $names[] = $participant->fullName();
    }

    return implode(' , ', $names);
   }

    //generar URL de la imagen
    /*public function coverPath(){
        return Storage::url('eventos_img/' . $this->imagen);
    }*/
}