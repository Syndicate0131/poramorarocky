<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::all();
        return view('users.list',compact('users'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.form');
    }
    public function log()
    {
        return view('users.login');
    }

    public function login(Request $request){
        $credentials = ['email' => $request->correo, 'password' => $request->clave];
        //var_dump($request->all());
        if (Auth::attempt($credentials)){
            return 'Logeo bien';
        }else{
            return 'login failed';
        }
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $msg = [];
        $reglas=[
            "nombre" => 'required|string',
            "apellido" => 'required|string',
            "numeroDocumento"=> 'required|numeric:unique:User,numeroDocumento',
            "telefono" => 'required|string',
            "clave" => 'required|min:8',
            "foto"=>'required|image',
            "tipoUsuario"=>'required|numeric',
        ];
           // 2. crear el objeto validador
        $v = Validator::make($request->all(), $reglas, $msg=[
            'required' =>'Este campo :attribute es requerido',
            'min' => 'El campo debe tener minimo :min y maximo :max caracteres',
            'numeric' => 'El campo :attribute debe ser numerico',
            'unique' =>'El dato ingresado en el campo :attribute ya existe'
        ]);
        if ($v->fails()) {
            //Validación incorrecta
            // mostrar la vista new, pero llevando los errrores
            return view('users.form')->withErrors($v);
            var_dump($v->errors());
       } else {
        $archivo= $request->foto;
        $nombre_archivo=$archivo->getClientOriginalName();
        $ruta = public_path();
        $archivo->move("$ruta/photoUser/",$nombre_archivo);
        $usuario = new User();
        $usuario->nombre=$request->nombre;
        $usuario->apellido=$request->apellido;
        $usuario->correo=$request->correo;
        $usuario->clave=Hash::make($request->clave);
        $usuario->foto=$nombre_archivo;
        $usuario->tipoUsuario=$request->tipoUsuario;
        $usuario->numeroDocumento=$request->numeroDocumento;
        $usuario->telefono=$request->telefono;
        $usuario->save();
        return redirect('usuario');
       }
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
        $users=User::findorFail($id);
        return view('users.edit')
        ->with('users' , $users);
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
        $msg = [];
        $reglas=[
            "nombre" => 'required|string',
            "apellido" => 'required|string',
            "numeroDocumento"=> 'required|numeric:unique:User,numeroDocumento',
            "telefono" => 'required|string',
            "clave" => 'required|min:8',
            "tipoUsuario"=>'required|numeric',
        ];
           // 2. crear el objeto validador
        $v = Validator::make($request->all(), $reglas, $msg=[
            'required' =>'Este campo :attribute es requerido',
            'min' => 'El campo debe tener minimo :min y maximo :max caracteres',
            'numeric' => 'El campo :attribute debe ser numerico',
            'unique' =>'El dato ingresado en el campo :attribute ya existe'
        ]);
        if ($v->fails()){
            return redirect('usuario/'. $id .'/edit')
            ->withErrors($v);
        }
       else {
        $usuario =User::findorFail($id);
        $usuario->nombre=$request->nombre;
        $usuario->apellido=$request->apellido;
        $usuario->correo=$request->correo;
        $usuario->clave=$request->clave;
        $usuario->tipoUsuario=$request->tipoUsuario;
        $usuario->numeroDocumento=$request->numeroDocumento;
        $usuario->telefono=$request->telefono;
        $usuario->save();
        return redirect('usuario');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('usuario');
        
    }
}
