<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function mostrarCarrito()
{
    $productos = Session::get('productos', []);
    $total = 0;

    // Calcular la suma de los subtotales
    foreach ($productos as $producto) {
        $total += $producto['precio'] * $producto['cantidad'];
    }

    return view('carrito', compact('productos', 'total'));
}

    public function agregarAlCarrito(Request $request)
    {
        // Obtener los productos almacenados en la sesión
        $productos = Session::get('productos', []);

        $nombre = $request->input('nombre');
        $precio = $request->input('precio');

        // Buscar si el producto ya existe en el carrito
        $productoExistente = null;
        foreach ($productos as &$producto) {
            if ($producto['nombre'] === $nombre) {
                $productoExistente = &$producto;
                break;
            }
        }

        // Si el producto ya existe en el carrito, incrementar la cantidad
        if ($productoExistente) {
            $productoExistente['cantidad'] += 1;
        } else {
            // Agregar el nuevo producto al arreglo de productos con cantidad igual a 1
            $productos[] = [
                'nombre' => $nombre,
                'precio' => $precio,
                'cantidad' => 1,
            ];
        }

        // Almacenar los productos actualizados en la sesión
        Session::put('productos', $productos);
    }
}
