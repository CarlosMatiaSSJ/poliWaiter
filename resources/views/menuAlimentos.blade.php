<x-app-layout>
    <x-slot name="header">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Menú de Alimentos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <x-menuAlimentos />
            </div>
        </div>
    </div>
</x-app-layout>
