<x-perfect-scrollbar
    as="nav"
    aria-label="main"
    class="flex flex-col flex-1 gap-4 px-3"
>

    <x-sidebar.link-perfil
        title="Editar perfil"
        href="{{ route('profile.edit') }}"
        :isActive="request()->routeIs('profile.edit')"
    >
        <x-slot name="icon">
            <x-feathericon-settings class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link-perfil>

    <x-sidebar.dropdown-perfil
        title="Notificaciones"
        :active="Str::startsWith(request()->route()->uri(), 'buttons')"
    > 
        <x-slot name="icon">
            <x-zondicon-notification class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink
            title="Protocolo"
            href="{{ route('dashboard') }}"
            :active="request()->routeIs('dashboard')"
        />
        <x-sidebar.sublink
            title="Manchas"
            href="{{ route('login') }}"
            :active="request()->routeIs('login')"
        />
    </x-sidebar.dropdown-perfil>

    <x-sidebar.link-perfil
    title="Rol:Admin(09)"
    href="{{ route('rol') }}"
    :isActive="request()->routeIs('rol')"
    >

        <x-slot name="icon">
            <x-bi-people-fill class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link-perfil>

    <x-sidebar.link-perfil
    title="Zafra:2023"
    href="{{ route('zafra') }}"
    :isActive="request()->routeIs('zafra')"
    >

        <x-slot name="icon">
            <x-sui-paper class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link-perfil>

    <x-sidebar.link-perfil
    title="Editar usuarios"
    href="{{ route('user.index') }}"
    :isActive="request()->routeIs('user.index')"
    >

        <x-slot name="icon">
            <x-sui-paper class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link-perfil>

    <x-sidebar.link-perfil
        title="Cerrrar sesion"
        href="{{ route('logout') }}"
        {{-- :isActive="request()->routeIs('dashboard')" --}}
    >

        <x-slot name="icon">
            <x-css-log-out class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link-perfil>

    <form 
        method="POST"
        action="{{ route('logout') }}"
        class="w-full">
    @csrf
        <a class="bg-red-700 cursor-pointer transition-all duration-300 rounded-lg w-full text-center pt-1 pb-1 text-white
            hover:bg-red-600"
            onclick="event.preventDefault(); this.closest('form').submit();"
        >
        Cerrar sesion</a>
    </form>

</x-perfect-scrollbar>
