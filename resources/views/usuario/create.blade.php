<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Crear usuario') }}
            </h2>
        </div>
    </x-slot>
     
    <main class="flex flex-col items-center flex-1 px-4 pt-6 sm:justify-center">
    
        <div class="w-full px-6 py-4 my-6 overflow-hidden bg-white rounded-md shadow-md sm:max-w-md dark:bg-dark-eval-1">
            
            <div class="p-6 grid grid-cols-1 justify-items-center overflow-hidden rounded-md  dark:bg-dark-eval-1">
                
                <form 
                    method="POST" 
                    action="{{ route('user.store') }}"
                    class="flex flex-col gap-7"    
                >
                    @csrf                        
                        <div class="flex flex-col selectorFlex gap-2 items-center"> 
                            <span class="w-full">Nombre</span>
                            <input class="rounded-md w-full focus:border-gray-400 focus:ring
                            focus:ring-blue-50 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                            dark:text-gray-300 dark:focus:ring-offset-dark-eval-1" 
                            type="text"
                            name="name"
                        />
                        </div>

                        <div class="flex flex-col selectorFlex gap-2 items-center">
                            <span class="w-full">Contraseña</span>
                            <input class="rounded-md w-full focus:border-gray-400 focus:ring
                            focus:ring-blue-50 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                            dark:text-gray-300 dark:focus:ring-offset-dark-eval-1" 
                            type="password"
                            name="password"    
                        />
                        </div>

                        <div class="flex flex-col selectorFlex gap-2 items-center">
                            <span class="w-full">Email</span>
                            <input class="rounded-md w-full focus:border-gray-400 focus:ring
                            focus:ring-blue-50 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                            dark:text-gray-300 dark:focus:ring-offset-dark-eval-1" 
                            type="email"
                            name="email"    
                        />
                        </div>

                        <div class="flex flex-col selectorFlex gap-2 items-center">
                            <span class="w-full">Alternar a rol</span>
                            
                            <select class="rounded-md w-full focus:border-gray-400 focus:ring
                            focus:ring-blue-50 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                            dark:text-gray-300 dark:focus:ring-offset-dark-eval-1"
                               name="rol" 
                            > 
                                @foreach ($roles as $rol)
                                    <option value="administrador bg-red-600"> {{$rol->name}}</option>
                                 @endforeach
                            </select>
                        </div> 

                        <div class="flex flex-row botonFlex gap-2 w-full">
                            <x-button class="justify-center w-full gap-2">
                                <x-feathericon-save class="w-6 h-6" aria-hidden="true" />
        
                                <span>{{ __('Guardar') }}</span>
                            </x-button>
                            <x-button class="justify-center w-full gap-2" href="index">
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