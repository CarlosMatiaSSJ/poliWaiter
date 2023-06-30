<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class controladorIngredientes extends Controller
{
    /**
     * Mostrar tabla ingredientes.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $filtrar = $request->get('filtrar');
        $consultaIngredientes = DB::table('ingredientes')->where('descripcion','like','%'.$filtrar.'%')->orderBy('descripcion')->get();
        return view('ajustesIngredientes', compact('consultaIngredientes', 'filtrar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agregarIngrediente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('ingredientes')->insert([
            "descripcion" => $request->input('descripcion'),
            "disponibilidad" => $request->input('disponible'),
            "ingredienteExtra" => $request->input('ingredienteExtra'),
            "precioVenta" => $request->input('precioVenta')
           
        ]);

        return redirect('/ajustes/ingredientes');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaIngredientes = DB::table('ingredientes')->where('id',$id)->first();
        return view('editarIngrediente',compact('consultaIngredientes'));
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
        DB::table('ingredientes')->where('id',$id)->update([
            "descripcion" => $request->input('descripcion'),
            "disponibilidad" => $request->input('disponible'),
            "ingredienteExtra" => $request->input('ingredienteExtra'),
            "precioVenta" => $request->input('precioVenta'),
        ]);

        return redirect('/ajustes/ingredientes')->with('actualizacion','confirmarIngrediente');
    }


     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultaIngrediente = DB::table('ingredientes')->where('id', $id)->first();
        return view('mostrarIngrediente', compact('consultaIngrediente'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('ingredientes')->where('id',$id)->delete();

        return redirect('/ajustes/ingredientes');
    }

     //Exportar los alimentos a pdf
     public function export()
     {
         $consultaIngredientes = DB::table('ingredientes')->get();
     
         $pdf = \PDF::loadView('ingredientesExport', compact('consultaIngredientes'));
     
         return $pdf->download('Ingredientes.pdf');
     }
}
