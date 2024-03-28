<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Usuarios') }}
            </h2>
        </div>
    </x-slot>

    <main class="flex flex-col items-center flex-1 px-4 pt-6 sm:justify-center">

        <div class="w-full px-6 py-4 my-6 overflow-hidden bg-white rounded-md shadow-md sm:max-w-md dark:bg-dark-eval-1">
            
            <div class="w-full text-initial">
                <a 
                    href="{{ route('user.create') }}" 
                    class="bg-green-200 rounded-md border-2 border-green-200 transition duration-300 hover:bg-green-800 hover:text-white text-black p-2 hover:border-gray-200"
                    > Crear usuario </a>
            </div>

            <div class="p-6 grid grid-cols-1 justify-items-center overflow-hidden rounded-md  dark:bg-dark-eval-1">
                
                @foreach ($operadores as $operador)
                    <span> {{$operador->name}}</span>
                @endforeach
                
            </div>            
        </div>

    </main>

</x-app-layout>

<style>
    @media screen and (max-width: 468px){
        .botonFlex {
            flex-direction: column;
        }

        .selectorFlex {
            flex-direction: column;
        }
    }
</style>