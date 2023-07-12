

<x-app-layout >
  

    
    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                
                <ul id="navMenu" class="mt-8 text-2xl font-medium text-gray-900 dark:text-white"
                style="display: flex;
justify-content: center; margin-bottom:10px">
                <li style=" display: inline;
margin-left: 30px;"><u><a href=""
                            style="color:#6A75ED;"> Carrito de compras</a> </u> </li>
                <li style=" display: inline;
margin-left: 30px;"> <a hidden
                        href="{{ route('ajustesIngredientes') }}">Ingredientes</a></li>

            </ul>

                <div class="relative overflow-x-auto">
                
 //Cronometro
 <h1>Cronómetro</h1>
    <div id="cronometro">00:00</div>

       <script>
        // Variables para el cronómetro
        var minutos = 2;
        var segundos = 0;

        // Función para actualizar el cronómetro
        function actualizarCronometro() {
            var cronometroElemento = document.getElementById("cronometro");
            cronometroElemento.textContent = formatTime(minutos) + ":" + formatTime(segundos);
        }

        // Función para formatear los valores de tiempo a dos dígitos
        function formatTime(time) {
            return time < 10 ? "0" + time : time;
        }

        
        function redirigirAVista() {
            window.location.href = '//VISTA A LA QUE VA REDERIGIR';
        }

        // Función para actualizar el tiempo restante y comprobar si se ha alcanzado el límite
        function actualizarTiempoRestante() {
            segundos--;
            if (segundos < 0) {
                segundos = 59;
                minutos--;
            }
            if (minutos === 0 && segundos === 0) {
                redirigirAVista();
            }
            actualizarCronometro();
        }

        // Función para iniciar el cronómetro
        function iniciarCronometro() {
            actualizarCronometro();
            setInterval(actualizarTiempoRestante, 1000); 
        }

        // Iniciar el cronómetro al cargar la página
        window.onload = iniciarCronometro;
    </script>
    
    //Termina el Cornometro

      

          @if (count($productos) > 0)

                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Producto
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Precio
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Cantidad
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Subtotal
                                </th>
                                <th scope="col" class="px-6 py-3">

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($productos as $producto)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $producto['nombre'] }}
                                    </th>
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        ${{ $producto['precio'] }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $producto['cantidad']}}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        ${{ $producto['subtotal'] }}
                                    </td>
                
                                  
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
            @else
                    <p>No hay productos en el carrito.</p>
            @endif
                </div>

                <div class="d-flex float-right mr-3 mt-3 mb-3">
                    <h3>Total: ${{$total}}</h3>
                </div>
                <div class="d-flex float-right mr-3 mt-3 mb-3">
                    <a href="{{route('paymentForm')}}"
                        class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900"
                        type="button">Pagar</a>

                    
                    <a href="" type="button"
                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                        Seguir Comprando </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
