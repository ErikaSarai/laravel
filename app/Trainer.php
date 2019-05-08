<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    // Es importante colocar esto, para que se ejecute el almacenamiento de los datos en la base de datos
    protected $table = "trainers";


    // Esto es importante para actualizar:
    protected $fillable = ['name', 'description', 'avatar', 'slug'];


    /**
 * Get the route key for the model.
 *
 * @return string
 */
 public function getRouteKeyName()
 {
    return 'slug';
 }
}
