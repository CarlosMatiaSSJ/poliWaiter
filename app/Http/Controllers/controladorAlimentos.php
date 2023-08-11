<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Intervention\Image\Facades\Image;
use App\Http\Requests\ValidadorAlimentos;


class controladorAlimentos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filtrar = $request->get('filtrar');
        $consultaAlimentos = DB::table('alimentos')->where('descripcion','like','%'.$filtrar.'%')->orderBy('descripcion')->get();
        return view('ajustesAlimentos', compact('consultaAlimentos', 'filtrar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agregarAlimento');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidadorAlimentos $request)
    {
        // Obtener la imagen del formulario
    $imagen = $request->file('imagen');
    $imagenData = file_get_contents($imagen->getRealPath());

    try {
         // Obtener la imagen del formulario
    $imagen = $request->file('imagen');

    // Comprimir la imagen antes de guardarla
    $compressedImage = Image::make($imagen)->encode('jpg', 10); // Comprimir al 10% de calidad, puedes ajustar el valor según tus necesidades

    // Obtener los bytes de la imagen comprimida
    $imagenData = $compressedImage->getEncoded();
        // Insertar el nuevo alimento en la base de datos
        DB::table('alimentos')->insert([
            "descripcion" => $request->input('descripcion'),
            "precioVenta" => $request->input('precioVenta'),
            "tipoAlimento" => $request->input('tipo'),
            "imagenAlimento" => $imagenData,
        ]);

        // Redirigir a la página deseada después de guardar
        return redirect('/menu/alimentos')->with('success', 'Alimento agregado exitosamente.');
    } catch (\Illuminate\Database\QueryException $ex) {
        // Mostrar el mensaje de error
        dd($ex->getMessage());
    }}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultaAlimento = DB::table('alimentos')->where('id', $id)->first();
        return view('mostrarAlimento',compact('consultaAlimento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $consultaAlimentos = DB::table('alimentos')->where('id',$id)->first();
        return view('editarAlimento',compact('consultaAlimentos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidadorAlimentos $request, $id)
    {
        DB::table('alimentos')->where('id',$id)->update([
            "descripcion" => $request->input('descripcion'),
            "tipoAlimento" => $request->input('tipo'),
            "precioVenta" => $request->input('precioVenta'),
        ]);
        
        return redirect('/ajustes/alimentos')->with('success_edit', '¡Se ha actualizado el alimento en la base de datos!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('alimentos')->where('id',$id)->delete();
        return redirect('/ajustes/alimentos')->with('success_delete', '¡Se ha eliminado el alimento de la base de datos!');
    }


    //Exportar los alimentos a pdf
    public function export()
    {
        $consultaAlimentos = DB::table('alimentos')->get();
    
        $pdf = \PDF::loadView('alimentosExport', compact('consultaAlimentos'));
    
        return $pdf->download('Alimentos.pdf');
    }


    //Mostrar menú completo
    public function mostrarMenuAlimentos()
    {
        $consultaAlimentos = DB::table('alimentos')->where('tipoAlimento', 1)->get();
        return view('menuAlimentos', compact('consultaAlimentos'));
    }

    public function mostrarMenuBebidas()
    {
        $consultaAlimentos = DB::table('alimentos')->where('tipoAlimento', 2)->get();
        return view('menuBebidas', compact('consultaAlimentos'));
    }
    public function mostrarMenuSnacks()
    {
        $consultaAlimentos = DB::table('alimentos')->where('tipoAlimento', 3)->get();
        return view('menuSnacks', compact('consultaAlimentos'));
    }
    
    public function carrito(){
    
    // Obtener los productos del carrito (ejemplo)
    $productos = [
        [
            'nombre' => 'Torta Jamón',
            'precio' => 20.00,
            'cantidad' => 2,
            'subtotal' => 40.00
        ],
        [
            'nombre' => 'Agua Horchata',
            'precio' => 15.00,
            'cantidad' => 1,
            'subtotal' => 15.00
        ],
        [
            'nombre' => 'Helado Limón',
            'precio' => 17.00,
            'cantidad' => 1,
            'subtotal' => 17.00
        ]
    ];

    // Calcular el total del carrito
    $total = 0;
    foreach ($productos as $producto) {
        $total += $producto['subtotal'];
    }

// Puedes agregar más lógica aquí, como agregar o eliminar productos del carrito.

// Renderiza la vista utilizando Blade
return view('carrito', compact('productos', 'total'));
}
}