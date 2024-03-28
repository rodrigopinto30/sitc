<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Zafra') }}
            </h2>
        </div>
    </x-slot>
    
    <main class="flex flex-col items-center flex-1 px-4 pt-6 sm:justify-center">
        
        <div class="w-full px-6 py-4 my-6 overflow-hidden bg-white rounded-md shadow-md sm:max-w-md dark:bg-dark-eval-1">
            
            <div class="p-6 overflow-hidden rounded-md  dark:bg-dark-eval-1">
                <form 
                    method="POST" 
                    action="{{ route('login') }}"
                    class="flex flex-col gap-7"    
                >
                    @csrf
                    <div class="text-center">
                        <span class="text-xl"> Operadores - Alternar Zafra </span>
                    </div>
                        <div class="flex flex-row selectorFlex gap-5 items-center">
                            <span>Zafra</span>
                            <select class="rounded-md w-full focus:border-gray-400 focus:ring
                            focus:ring-blue-50 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                            dark:text-gray-300 dark:focus:ring-offset-dark-eval-1"> 
                                <option value="administrador bg-red-600">2023</option>
                                <option value="empacador" selected>2024</option>
                            </select>
                        </div>
                        <div class="flex flex-row gap-2 botonFlex w-full">
                            <x-button class="justify-center w-full gap-2">
                                <x-feathericon-save class="w-6 h-6" aria-hidden="true" />
        
                                <span>{{ __('Guardar') }}</span>
                            </x-button>
                            <x-button class="justify-center w-full gap-2" href="dashboard">
                                <x-icons.close-perfil class="w-6 h-6" aria-hidden="true" />
        
                                <span>{{ __('Cancelar') }}</span>
                            </x-button>
                        </div>
                    </div>
                </form>
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