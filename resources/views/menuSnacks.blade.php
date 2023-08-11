<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function agregarAlCarrito(nombre, precio) {
        const formData = new FormData();
        formData.append('nombre', nombre);
        formData.append('precio', precio);

        fetch('/agregar-al-carrito', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
            })
            .then(response => response.text()) // Obtener el contenido de la respuesta como texto
            .then(data => {
                console.log(data); // Imprimir el contenido para verificar
                mostrarAlerta('¡Producto Agregado!', 'El producto ha sido agregado al carrito.', 'success');
            })
            .catch(error => {
                console.error('Error al agregar al carrito:', error);
            });
    }

    function mostrarAlerta(titulo, mensaje, tipo) {
        Swal.fire({
            title: titulo,
            text: mensaje,
            icon: tipo,
            confirmButtonColor: '#6A75ED',
        });
    }
</script>

<x-app-layout>
    <x-slot name="header">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Menú de Snacks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-orangess-800 overflow-hidden shadow-xl sm:rounded-lg">
                @if (session()->has('pagado'))
                    {!! "<script>Swal.fire(
                                                                                                                                'Pago Procesado!',
                                                                                                                                '¡Verifica el estado de tu orden en Mis Pedidos!',
                                                                                                                                'success'
                                                                                                                            )</script>" !!}
                @endif

                <ul id="navMenu" class="mt-8 text-2xl font-medium text-gray-900 dark:text-white"
                    style="display: flex;
justify-content: center; margin-bottom:10px">
                    <li style=" display: inline;
    margin-left: 30px;color:black"><a href="{{ route('menuAlimentos') }}">
                            Alimentos</a> </li>
                    <li style=" display: inline;
    margin-left: 30px;color:black"> <a
                            href="{{ route('menuBebidas') }}">Bebidas</a></li>
                    <li style=" display: inline;
    margin-left: 30px;"><a href="{{ route('menuSnacks') }}"
                            style="color:#6A75ED;"><u>Snacks</u></a>
                    </li>
                </ul>

                    {{-- Cards del menú --}}
                    <div class="container p-3 mb-5">
                        <div class="row">
                            <ul style="display: flex; justify-content: center; margin-bottom: 35px">
                            @foreach ($consultaAlimentos as $index => $alimento)
                                <div class="cardsMenu" style="display: flex; justify-content: center; margin: 10px;">
                                    <div class="tarjeta"
                                                style="display: flex; flex-direction: column; justify-content: space-between; width: 300px;
                                                border: 1px solid lightgray; box-shadow: 2px 2px 8px 4px #d3d3d3d1; border-radius: 15px; font-family: sans-serif;">
                                        <div class="titulo"
                                                style="font-size: 24px; padding: 10px 10px 0 10px; background: #6A75ED;
                                                border-radius: 15px 15px 0 0; color: white; text-align: center;">
                                                {{ $alimento->descripcion }}
                                        </div>
                                        <div class="cuerpo" style="display: flex; justify-content: center;">
                                            <!-- Convierte el contenido BLOB en una URL válida para la imagen -->
                                            @php
                                                $imagenBase64 = base64_encode($alimento->imagenAlimento);
                                                $imagenUrl = 'data:image/png;base64,' . $imagenBase64;
                                            @endphp
                                            <img src="{{ $imagenUrl }}" alt="muestra" style="width: 350px; height: 350px;">
                                        </div>
                                        <div class="pie"
                                                style="background: #6A75ED; border-radius: 0 0 15px 15px; padding: 10px; text-align: center;
                                                color: white;">
                                            <a href="#"
                                                onclick="agregarAlCarrito('{{ $alimento->descripcion }}', '{{ $alimento->precioVenta }}')">Agregar
                                                al carrito </a>
                                        </div>
                                    </div>
                                </div>

                                    <!-- Añadir un nuevo div de fila después de cada grupo de 3 alimentos -->
                                    @if (($index + 1) % 3 === 0)
                        </div>
                                        <div class="cardsContainer" style="display: flex; flex-wrap: wrap; justify-content: center;">
                                    @endif
                            @endforeach
                                        </div>
                    </div>
                {{-- Fin Cards del menú --}}
            </div>
        </div>
    </div>
</x-app-layout>
