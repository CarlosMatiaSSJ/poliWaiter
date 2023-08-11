<x-app-layout >
    <x-slot name="header" >
        <a href="{{route('agregarIngrediente')}}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Nuevo Ingrediente</a>
    </x-slot>

    
    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                

                <ul id="navMenu" class="mt-8 text-2xl font-medium text-gray-900 dark:text-white"
                    style="display: flex;
justify-content: center; margin-bottom:10px">
                    <li style=" display: inline;
    margin-left: 30px;"><a href="{{ route('ajustesAlimentos') }}"
                                > Alimentos</a>  </li>
                    <li style=" display: inline;
    margin-left: 30px;"><u><a
                            href="{{ route('ajustesIngredientes') }}" style="color:#6A75ED;">Ingredientes</a></u> </li>

                </ul>


                <div class="relative overflow-x-auto">
                     {{-- Barra búsqueda --}}
       <form class="d-flex float-right mr-3 mt-3" role="search">
    <input name="filtrar" value="{{$filtrar}}" type="search" placeholder="Filtrar" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <button class="btn btn-primary" type="submit"></button>
      </form>
      <a href="{{route('ingredientes.export')}}" type="button" class="ml-3 focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Exportar PDF</a>




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
                                    Ingrediente Extra
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Disponibilidad
                                </th>
                                <th scope="col" class="px-6 py-3">

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($consultaIngredientes as $ingrediente)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4">{{ $ingrediente->id }}</td>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $ingrediente->descripcion }}
                                    </th>
                                    <td class="px-6 py-4">
                                        ${{ $ingrediente->precioVenta }}
                                    </td>
                                    @if ($ingrediente->ingredienteExtra == 1)
                                        <td class="px-6 py-4" style="color:green">Si</td>
                                    @endif
                                    @if ($ingrediente->ingredienteExtra == 0)
                                        <td class="px-6 py-4" style="color:red">No</td>
                                    @endif
                                    @if ($ingrediente->disponibilidad == 1)
                                        <td class="px-6 py-4" style="color:green"><label class="relative inline-flex items-center mb-4 cursor-pointer">
                                            <input type="checkbox" value="" class="sr-only peer" checked>
                                            <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                            <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300"> </span>
                                            </label></td>
                                    @endif
                                    @if ($ingrediente->disponibilidad == 0)
                                        <td class="px-6 py-4" style="color:red"><label class="relative inline-flex items-center mb-4 cursor-pointer">
                                            <input type="checkbox" value="" class="sr-only peer">
                                            <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                            <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300"> </span>
                                            </label>
                                        </td>
                                    @endif
                                    
                                    <td class="px-6 py-4">
                                        <div class="btn-group" role="group" aria-label="Basic outlined example">

                                            <a href="{{route('ingredientes.edit', $ingrediente->id)}}"
                                                class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900"
                                                type="button">Actualizar</a>


                                            <a href="{{route('ingredientes.show', $ingrediente->id)}}" type="button"
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
