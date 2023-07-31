<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorIngredientes;
use App\Http\Controllers\controladorAlimentos;
use App\Http\Controllers\StripePaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    //Menús
    Route::get('/menu/alimentos',[controladorAlimentos::class,'mostrarMenu'])->name('menuAlimentos');


    Route::get('/menuBebidas', function () {
        return view('menuBebidas');
    })->name('menuBebidas');

    Route::get('/menuSnacks', function () {
        return view('menuSnacks');
    })->name('menuSnacks');


    //Stripe
    //Formulario pago 
    Route::get('/pagar',[StripePaymentController::class,'paymentStripe'
    ])->name('paymentForm');
    //Procesar Pago
    Route::post('/pagado',[StripePaymentController::class,'postPaymentStripe'
    ])->name('postPaymentForm');

    






    
    // Alimentos
    //index
    Route::get('/ajustes/alimentos',[controladorAlimentos::class,'index'])->name('ajustesAlimentos');
    //create
    Route::get('/ajustes/alimentos/create',[controladorAlimentos::class,'create'])->name('agregarAlimento');
    //Store
    Route::post('agregarAlimento',[controladorAlimentos::class,'store'])->name('alimento.store');
    //Edit
    Route::get('alimentos/editar/{id}',[controladorAlimentos::class,'edit'])->name('alimento.edit');
    //Update
    Route::put('alimentos/actualizar/{id}',[controladorAlimentos::class,'update'])->name('alimento.update');
    //show
    Route::get('alimentos/eliminar/{id}',[controladorAlimentos::class,'show'])->name('alimento.show');
    //Delete
    Route::delete('alimentos/eliminar/{id}',[controladorAlimentos::class,'destroy'])->name('alimento.destroy');
    //Export
    Route::get('alimentos/exportar',[controladorAlimentos::class,'export'])->name('alimento.export');
    //Carrito
    Route::get('carrito',[controladorAlimentos::class,'carrito'])->name('carrito');


    //Ingredientes
        //index
        Route::get('/ajustes/ingredientes',[controladorIngredientes::class,'index'])->name('ajustesIngredientes');
        //create
        Route::get('/ajustes/ingredientes/create',[controladorIngredientes::class,'create'])->name('agregarIngrediente');
        //Store
        Route::post('agregarIngrediente',[controladorIngredientes::class,'store'])->name('ingrediente.store');
        //Edit
        Route::get('ingredientes/editar/{id}',[controladorIngredientes::class,'edit'])->name('ingredientes.edit');
        //Update
        Route::put('ingredientes/actualizar/{id}',[controladorIngredientes::class,'update'])->name('ingredientes.update');
        //show
        Route::get('ingredientes/show/{id}',[controladorIngredientes::class,'show'])->name('ingredientes.show');
        //Delete
        Route::delete('ingredientes/eliminar/{id}',[controladorIngredientes::class,'destroy'])->name('ingredientes.destroy');
        //Export
        Route::get('ingredientes/exportar',[controladorIngredientes::class,'export'])->name('ingredientes.export');

});
