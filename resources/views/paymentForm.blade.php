<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pago') }}
        </h2>
    </x-slot>


    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                {{-- Formulario nuevo alimento --}}
                <form action="{{route('postPaymentForm')}}" method="post">
                    @csrf
                    <div class="mb-6">
                        <label for="card_no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                          Número de tarjeta:  </label>
                        <input type="text" id="card_no" name="card_no"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required>
                    </div>
                    <div class="mb-6">
                        <label for="cvv" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                          CVV:  </label>
                        <input type="number" step="0.01" id="cvv" name="cvv"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-25 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required>
                    </div>
                    <div class="mb-6">
                        <label for="mcvv" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                          Mes de expiración:  </label>
                        <input type="number" step="1" id="mcvv" name="mcvv"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-25 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="MM" required>
                    </div>
                    <div class="mb-6">
                        <label for="ycvv" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                          Año de expiración:  </label>
                        <input type="number" step="1" id="ycvv" name="ycvv"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-25 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="YYYY" required>
                    </div>
                    <div class="mb-6">
                        <label for="total" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                          Total:  </label>
                        <input type="number" step="1" id="total" name="total"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-25 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="$" >
                    </div>


                    
                    
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Agregar</button>
                </form>


            </div>
        </div>
    </div>
</x-app-layout>