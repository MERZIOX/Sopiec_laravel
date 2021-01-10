<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserPost;
use App\Http\Requests\UpdateUserPut;
use App\Models\User;
use Illuminate\Http\Request;

class UsersAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  GET Obtener listado de todos los usuarios
    public function index(Request $request)
    {
        // A la varuable users se  le asigna todo lo que se obtiene del modelu User mediante el metodo get().
        //Se remplaza get por paginate , el cual es un get en si mismo, pero nos trae de gratis la paginación según el numero que le pasemos como pareametro
        // $users= User::paginate(5);
        // dd($users);
        // return view('dashboard.admin.index',['users'=> $users]);


        // ============API  REST  =============\\
        // Condicional de busqueda de usuarios por nombre o cedula
        if ($request->has('txtBuscar')){
            $users = User::where('firstName','like','%'.$request->txtBuscar.'%')->orWhere ('cc','like','%'.$request->txtBuscar.'%')->get();
        }else{
            $users = User::all();
            // dd($users);
            return $users;
        }
        return $users;

      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // Cargar Avatar/foto
     private function cargarArchivo ($file){
         $nombreArchivo  = time()."." . $file->getClientOriginalExtension(); //8012021926.jpg
         $file->move(public_path('img/faces'),$nombreArchivo); //Mueve la imagen a public/img/faces
         return $nombreArchivo;
     }
    //  POST Registrar un nuevo usuario
    public function store(StoreUserPost $request)
    {
        
        // Validate es una función que recibe como parametro un objeto con las reglas de validación de los inputs
        // $request->validate([
            // 'cc' => 'required|min:5|Max:10',
            // 'area'=> 'required|min:1|max:5',
            // 'firstName'=>'required|min:3|max:45',
            // 'secondName'=>'min:3|max:45',
            // 'fLastName'=> 'required|min:3|max:45',
            // 'sLastName'=> 'required|min:3|max:45',
            // 'email' => 'required|min:3|max:45|unique:users',
            // 'password'=> 'required|min:8|max:100|unique:users'
        // ]);
        // dd($request->all());

        // Modelo con metodo create Guarda todo lo que se ha validado, en el archivo StoreUserPOst
        // User::create($request->validated());
        // return back()->with('status','Usuario registrado con exito!');


        // ============API  REST  =============\\
            // $user = User::create($request->all());
            // return $user;
            $input = $request->all();
            if($request->has('avatar'))
            $input['avatar']= $this->cargarArchivo($request->avatar); //Extraer la foto
            User::create($input);
            return response()->json([
                'res'=> true,
                'message'=> 'Registro creado correctamente'
            ],200);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //  GET Mostrar detalles de un usuario
    public function show(User $user)
    {
        // Echo "Desde el metodo Show";
        // $user = User::find($user);
        // dd($user);
           // ============API  REST  =============\\
           return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //  PUT Actualizar
    public function update(UpdateUserPut $request, User $user)
    {
        $input= $request->all();
        if($request->has('avatar'))
            $input['avatar']= $this->cargarArchivo($request->avatar);
        $user->update($input);

        return response()->json([
            'res' => true,
            'message'=> 'Registro actualizado correctamente'
         ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //  DELETE
    public function destroy($id)
    {
        // Echo "Desde el metodo Destroy";
        // $user = User::find($id);
        // dd($user);

        // ================API REST =================\\
        User::destroy($id);

        return response()->json([
            'res' => true,
            'message'=> 'Registro eliminado correctamente'
         ],200);
    }
}
