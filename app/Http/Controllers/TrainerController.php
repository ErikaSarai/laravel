<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

//  Es importante colocar el modelo que se esta usando en este caso Trainer
use App\Trainer;
use Illuminate\Http\Request;
use Iluminate\Support\Facades\Storage;

// Se debe incluir el request que creamos 
use App\Http\Requests\StoreTrainerPost;

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

    //  El Request se sustituira por el nuevo request que creamos: StoreTrainerRequest
    public function store(StoreTrainerPost $request)
    {
        // Con esto se hacen las validaciones, pero usaremos un método con los form request
        // $validatedData = $request->validate([
        //     'name' => 'required|max: 10',
        //     'description' => 'required|max: 50',
        //     'avatar' => 'required|image',
        // ]);

        // Vamos a usar un método all() para guardar la información que se envie de los formularios
        // Y con esto nos devolvera el name y el token en un arreglo
        // return $request->all();
        // Con este otro método podemos traer algo en específico. Ejemplo

        // return $request->input('name');

        // Con esto tendremos una instancia en nuestro modelo Trainer y podremos almacenar los datos
        $trainer = new Trainer();

        if($request->hasFile('avatar')){

            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
    
        }
       
        $trainer->name = $request->input('name');
        $trainer->slug = ($request->input('name')).time();
        // $trainer->slug = $request->input('name');
        $trainer->description = $request->input('description');
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

    // show(Trainer $trainer) Este es el método implicit binding se coloca el modelo y la varibale que se creo
    // el método de slug  show($slug)
    public function show(Trainer $trainer)
    {
        // return 'Tengo que retornar el recurso con su nombre ' .$id;
        
        // Elementos de eloquent para almacenar a nuestro entrenador y llevarlo a la vista de show. 
        // Necesita su $id
        // $trainer = Trainer::find($id);
       
        // $trainer = Trainer::where('slug', '=' , $slug)->firstOrFail();
        // return $trainer;

        // Compact nos sirve para compartir información con nuestras vistas
        return view ('trainers.show', compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {

        return view ('trainers.edit', compact('trainer'));
        // return $trainer;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        // fill es para actualizar los datos que este recibiendo
        // except me dice que va a usar todo menos lo que tiene en los parentesis.
        // $trainer->fill($request->all());
        $trainer->fill($request->except('avatar'));
        $trainer->slug = ($request->input('name')).time();
        // $trainer->slug = $request->input('name');
        if($request->hasFile('avatar')){

            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            // Esto es para que se pueda actualizar la foto en nuestra base de datos
            $trainer->avatar = $name;
            $file->move(public_path().'/images/',$name);
    
        }
        $trainer->save();
        return view('trainers.update');

        // return $request;
        // return $trainer;    
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
