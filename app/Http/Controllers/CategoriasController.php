<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['categorias']=Categoria::paginate(5);
        return view('categorias.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosCategoria=request()->all();
        $datosCategoria=request()->except('_token');
        if($request->hasfile('Imagen')){

            $datosCategoria['Imagen']=$request->file('Imagen')->store('uploads/categorias','public');
        }

        Categoria::insert($datosCategoria);
        return redirect('categorias')->with('Mensaje','Usuario agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria $categorias
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $categoria = Categoria::findOrFail($id);
        return view('categorias.show',compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categorias
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categoria= Categoria::findOrFail($id);
        return view('categorias.edit',compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categorias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosCategoria=request()->except(['_token',"_method"]);
         
         if($request->hasfile('Foto')){
            $categoria=Categoria::findOrFail($id);
            Storage::delete('public/'.$categoria->Foto);

            $datosCategoria['Imagen']=$request->file('Imagen')->store('uploads/categorias','public');
        }


         Categoria::where('id','=',$id)->update($datosCategoria);

        // $usuario=Usuarios::findOrFail($id);
         //return view('usuarios.edit',compact('usuario'));
         return redirect('categorias')->with('Mensaje','Usuario modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categorias
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $categoria=Categoria::findOrFail($id);
        if(Storage::delete('public/'.$categoria->Imagen)){
            Categoria::destroy($id);
        }
        return redirect('categorias')->with('Mensaje','Usuario eliminado con éxito');
    }
}
