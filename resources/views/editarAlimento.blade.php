
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Alimento') }}
        </h2>
    </x-slot>


    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg" style="padding: 18px;">
                {{-- Formulario nuevo alimento --}}

                <form action="{{route('alimento.update', $consultaAlimentos->id)}}" method="post">
                    @csrf
                    @method('put')

                                {{-- Alerta de errores --}}
                                @if ($errors->any())
                                <div id="alert-border-4" class="flex items-center p-4 mb-4 text-yellow-800 border-t-4 border-yellow-300 bg-yellow-50 dark:text-yellow-300 dark:bg-gray-800 dark:border-yellow-800" role="alert">
                                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                    </svg>
                                    <div class="ml-3 text-sm font-medium">
                                        ¡Ups! Hubo un problema. Revisa que todos los campos estén rellenos.
                                        @foreach ($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                        @endforeach
                                    </div>
                                    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-yellow-50 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5 hover:bg-yellow-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-yellow-400 dark:hover:bg-gray-700" onclick="document.getElementById('alert-border-4').style.display = 'none'" aria-label="Close">
                                        <span class="sr-only">Dismiss</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                    </button>
                                </div>
                                @endif

                                {{-- Fin de la alerta de errores --}}

                    <div class="mb-6">
                        <select required id="countries" name="tipo"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="1" selected  disabled>Tipo de alimento</option>
                            <option value="1">Comida</option>
                            <option value="2">Bebida</option>
                            <option value="3">Snack</option>
                        </select>
                    </div>
                    
                    <div class="mb-6">
                        <label for="Nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Descripción:  </label>
                        <input type="text" id="Nombre" name="descripcion"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required value="{{ old('descripcion', $consultaAlimentos->descripcion) }}">
                            @error('descripcion')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="mb-6">
                        <label for="precioVenta" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Precio de venta:  </label>
                        <input type="text" id="precioVenta" name="precioVenta"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required value="{{ old('precioVenta', $consultaAlimentos->precioVenta) }}">
                            @error('precioVenta')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                    </div>
                    
                    
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Actualizar</button>
                </form>


            </div>
        </div>
    </div>
</x-app-layout>
