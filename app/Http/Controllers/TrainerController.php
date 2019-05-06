<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

//  Es importante colocar el modelo que se esta usando en este caso Trainer
use App\Trainer;

use Illuminate\Http\Request;



class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // all() lo que hace es ver todos los registros que hay y traerlos de vuelta

        $trainers = Trainer::all();
        // compact coloca en un arreglo todos los registros
        return view ('trainers.index', compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Se coloca asi la vista porque esta dentro de una carpeta en view asi que se coloca 'nombre_de_la_carpeta.nombre_view'
        return view ('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Vamos a usar un método all() para guardar la información que se envie de los formularios
        // Y con esto nos devolvera el name y el token en un arreglo
        // return $request->all();
        // Con este otro método podemos traer algo en específico. Ejemplo

        // return $request->input('name');

        // Con esto tendremos una instancia en nuestro modelo Trainer y podremos almacenar los datos
     
        if($request->hasFile('avatar')){

            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
    
        }

        $trainer = new Trainer();
        $trainer->name = $request->input('name');
        $trainer->avatar = $name;
        $trainer->save();
        return view ('trainers.save');
        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
