<x-app-layout >
    <x-slot name="header" >
        <a href="{{route('agregarAlimento')}}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Nuevo Alimento</a>
    </x-slot>

    
    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                

                <ul id="navMenu" class="mt-8 text-2xl font-medium text-gray-900 dark:text-white"
                    style="display: flex;
justify-content: center; margin-bottom:10px">
                    <li style=" display: inline;
    margin-left: 30px;"><u><a href="{{ route('ajustesAlimentos') }}"
                                style="color:#6A75ED;"> Alimentos</a> </u> </li>
                    <li style=" display: inline;
    margin-left: 30px;"> <a 
                            href="{{ route('ajustesIngredientes') }}">Ingredientes</a></li>

                </ul>


                <div class="relative overflow-x-auto">
                     {{-- Barra búsqueda --}}
       <form class="d-flex float-right mr-3 mt-3" role="search">
        <input name="filtrar" value="{{$filtrar}}" type="search" placeholder="Filtrar" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <button class="btn btn-primary" type="submit"></button>
          </form>
          <a href="{{route('alimento.export')}}" type="button" class="ml-3 focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Exportar PDF</a>

                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Descripción
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Precio de Venta
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tipo de Alimento
                                </th>
                                <th scope="col" class="px-6 py-3">

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($consultaAlimentos as $Alimento)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4">{{ $Alimento->id }}</td>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $Alimento->descripcion }}
                                    </th>
                                    <td class="px-6 py-4">
                                        ${{ $Alimento->precioVenta }}
                                    </td>
                                    @if ($Alimento->tipoAlimento == 1)
                                        <td class="px-6 py-4">Comida</td>
                                    @endif
                                    @if ($Alimento->tipoAlimento == 2)
                                        <td class="px-6 py-4">Bebida</td>
                                    @endif
                                    @if ($Alimento->tipoAlimento == 3)
                                        <td class="px-6 py-4">Snack</td>
                                    @endif
                                    <td class="px-6 py-4">
                                        <div class="btn-group" role="group" aria-label="Basic outlined example">

                                            <a href="{{route('alimento.edit', $Alimento->id)}}"
                                                class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900"
                                                type="button">Actualizar</a>


                                            <a href="{{route('alimento.show', $Alimento->id)}}" type="button"
                                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                                Eliminar </a>

                                        </div>
                                    </td>

                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
