<?php

namespace App\Http\Controllers;
use App\Models\Adoption;
use App\Models\User;
use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdoptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        //
        $adoptions = Adoption::all();
        return view('adoptions.list')->with('adoptions', $adoptions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $pets = Pet::all();
        
        return view('adoptions.form')
        ->with('pets' , $pets)
        ->with('users' , $users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $rules=[
            "numeroDocumento"=>'required|alpha_num',
            "nombre"=>'required|string|max:45|min:3',
            "apellidos"=>'required|string|max:45',
            "fechaNacimiento"=>'required|date',
            "numeroPersonasReside"=>'required|alpha_num',
            "contactoEmpresa"=>'required|alpha_num',
            "celular"=>'required|alpha_num',
            "correo"=>'required|email',
            "direccion"=>'required|max:45',
            "empresaTrabaja"=>'required|string',
            "sueldo"=>'required',
            "user" => 'required',
            "pet" => 'required',
        ];
        // 2 objeto validador
        $v=Validator::make($request->all(),$rules,$message=[
            'required' => 'el campo :attribute es requerido',
            'alpha_num' => 'el campo :attribute debe ser numerico',
            'string' => 'el campo :attribute debe ser alfabetico',
            'min' => 'el campo :attribute debe tener minimo :min caracteres',
            'max' => 'el campo :attribute debe tener maximo :max caracteres',
            'email' => 'el campo :attribute debe ser un correo valido',
            'date' => 'el campo :attribute debe ser una fecha valida',
            'mimes' => 'el campo :attribute debe ser un archivo pdf',
        ]);
        // 3 Validar
        // fails return si la validacion falla y un false si no
        if ($v->fails()){
            return redirect('formadop')
            ->withErrors($v);
        }else{
            // Registrar producto
            $adoption=new Adoption();
            $adoption->numeroDocumento=$request->numeroDocumento;
            $adoption->nombre=$request->nombre;
            $adoption->apellidos=$request->apellidos;
            $adoption->fechaNacimiento=$request->fechaNacimiento;
            $adoption->numeroPersonasReside=$request->numeroPersonasReside;
            $adoption->contactoEmpresa=$request->contactoEmpresa;
            $adoption->celular=$request->celular;
            $adoption->correo=$request->correo;
            $adoption->direccion=$request->direccion;
            $adoption->empresaTrabaja=$request->empresaTrabaja;
            $adoption->sueldo=$request->sueldo;
            $adoption->estado="Pendiente";
            $adoption->pet_id=$request->pet;
            $adoption->user_id=$request->user;
            $adoption->save();
            return redirect('adoption');
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adoptions = Adoption::findorFail($id);
        $users = User::all();
        return view('adoptions.edit')
        ->with('adoptions' , $adoptions)
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
        $rules=[
            "estado"=>'required',
            "user" => 'required',

        ];
        // 2 objeto validador
        $v=Validator::make($request->all(),$rules,$message=[
            'required' => 'el campo :attribute es requerido',
        ]);
        // 3 Validar
        // fails return si la validacion falla y un false si no
        if ($v->fails()){
            return redirect('adoption/'. $id .'/edit')
            ->withErrors($v);
        }
        else{
            // Registrar producto
            $adoption = Adoption::findorFail($id);
            $adoption->user_id=$request->user;
            $adoption->estado=$request->estado;
            $adoption->save();
            return redirect('adoption');
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
        //
    }
}