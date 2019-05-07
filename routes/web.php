<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Enviamos el parámetro {name} que es mi nombre
Route::get('prueba/{name}', 'PruebaController@prueba');


// Crear una ruta con un Controlador resource varias funciones y métodos, 
Route::resource('trainers', 'TrainerController');



// Para concatenar se usa el punto (.)
// Con esto podemos crear una ruta con parámetros, es decir se coloca en la url:/name/Erika/lastname/González,
// Y esto es lo que colocara en la vista de la página: Hola soy ErikaGonzález

// Esta opción indica que es opcional, es decir que si no colocamos nada en la url lo aceptara, si esto no se coloca 
// dara un error  404 {email?} $email = null

// También podemos agregarle un dato por defecto. Ejemplo: $email = "hola", y aparcecera: Hola soy ErikaGonzálezemail

Route::get('/name/{name}/lastname/{lastname}/email/{email?}', function($name, $lastname, $email = 'email') {
    return "Hola soy ".$name  .$lastname .$email;
});

Route::get('/mi_primera_ruta', function () {
    return "Hello world, esta es mi primera ruta" ;
});
