<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detalles') }}
        </h2>
    </x-slot>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <h2 class="text-xl font-bold">Mi Usuario</h2>
                    <div class="flex flex-col">
                        <h2 class="text-base font-medium">ID: {{ $user->id }}</h2>
                        <h2 class="text-base font-medium">Nombre: {{ $user->name }}</h2>
                        <h2 class="text-base font-medium">Correo: {{ $user->email }}</h2>
                        <h2 class="text-base font-medium">Telefono: {{ $user->telephone }}</h2>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>