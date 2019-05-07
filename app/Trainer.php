<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    // Es importante colocar esto, para que se ejecute el almacenamiento de los datos en la base de datos
    protected $table = "trainers";
}
