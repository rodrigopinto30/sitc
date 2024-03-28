<div class="flex items-center justify-between flex-shrink-0 px-3">
    <!-- Logo -->
    <div
        
    {{-- href="{{ route('dashboard') }}" --}}
        class="flex flex-col text-start gap-0"
    >
        {{-- <x-application-logo aria-hidden="true" class="w-10 h-auto" /> --}}

        {{-- <span class="sr-only">adawdadqw</span> --}}
        <span>
            Juan Perez
        </span>
        <span class="text-sm">
            Rol
        </span>
</div>

    <!-- Toggle button // Boton que cierra el menu lateral del perfil -->
    <x-button
        type="button"
        icon-only
        sr-text="Toggle sidebar"
        variant="perfil"
        x-show="isSidebarPerfilOpen || !isSidebarPerfilOpen"
        {{-- x-on:click="isSidebarPerfilOpen" --}}
        x-on:click="open = false"
    >
        <x-icons.close-perfil
            x-show="isSidebarPerfilOpen || !isSidebarPerfilOpen"
            aria-hidden="true"
            class="w-6 h-6 block"
        />
    </x-button>
</div>
