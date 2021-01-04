<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserPost;
use App\Models\User;
use Illuminate\Http\Request;

class UsersAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // A la varuable users se  le asigna todo lo que se obtiene del modelu User mediante el metodo get().
        //Se remplaza get por paginate , el cual es un get en si mismo, pero nos trae de gratis la paginación según el numero que le pasemos como pareametro
        $users= User::paginate(5);
        // dd($users);
        return view('dashboard.admin.index',['users'=> $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.createNewUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        User::create($request->validated());
        return back()->with('status','Usuario registrado con exito!');
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
