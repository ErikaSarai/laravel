<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Cobtroller;
use Illuminate\Http\Request;

class PruebaController extends Controller
{
    
// Para que se refleje el parámetro de la ruta se necesita escibir param, para que sepa que se esta mandando un parámetro
// param se refiere a parámetro
// Para que aparezca en la url se necesita escribir: prueba/Erika o cualquier nombre
    public function prueba($param){
        return 'Estoy dentro de pruebaController :D y recibi este parámetro: ' .$param;
    }
}
