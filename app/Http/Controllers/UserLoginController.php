<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserPost;
use Illuminate\Support\Facades\Hash;

class UserLoginController extends Controller
{
    // POST Registrar usuario de api
    public function store(StoreUserPost $request)
    {
        // ============API  REST  =============\\
            // $user = User::create($request->all());
            // return $user;
            $input = $request->all();
            $input['password'] =Hash::make($request->password);
            User::create($input);
            return response()->json([
                'res'=> true,
                'message'=> 'Registro creado correctamente'
            ],200);
    }

    // Loguear usuario de api
    public function login (Request $request)
    {
        $user = User::wherecc($request->cc)->first();
        if ( !is_null($user) && Hash::check($request->password, $user->password))
        {
            $user->api_token= Str::random(100);
            $user->save();

            return response()->json([
                'res'=> true,
                'token'=>$user->api_token,
                'message' => 'Bienvenido a la Api de SOPIEC'
            ],200);
        }
        else{
            return response()->json([
                'res'=> false,
                'message' => 'ID o contraseña incorrecta'
            ],200);
        }
    }

    public function logout(){
        
        $user = auth()->user();
        $user->api_token = null;
        $user->save();

        return response()->json([
            'res'=> true,
            'message' => 'Sesion finalizada'
        ],200);
    }
}
