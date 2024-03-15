<x-perfect-scrollbar
    as="nav"
    aria-label="main"
    class="flex flex-col flex-1 gap-4 px-3"
>

    <x-sidebar.link
        title="Inicio"
        href="{{ route('dashboard') }}"
        :isActive="request()->routeIs('dashboard')"
    >
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.dropdown
        title="Monitoreos"
        :active="Str::startsWith(request()->route()->uri(), 'buttons')"
    >
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink
            title="Informar plan"
            href="{{ route('monitoreo-plan') }}"
            :active="request()->routeIs('monitoreo-plan')"
        />
        <x-sidebar.sublink
            title="Monitoreo normal"
            href="{{ route('monitoreo-normal') }}"
            :active="request()->routeIs('monitoreo-normal')"
        />
        <x-sidebar.sublink
            title="Monitoreo mosca"
            href="{{ route('monitoreo-mosca') }}"
            :active="request()->routeIs('monitoreo-mosca')"
        />
    </x-sidebar.dropdown>

    <x-sidebar.dropdown
        title="Detecciones"
        :active="Str::startsWith(request()->route()->uri(), 'buttons')"
    >
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink
            title="Eventos"
            href="{{ route('evento') }}"
            :active="request()->routeIs('evento')"
        />
        <x-sidebar.sublink
            title="Inhabilitaciones"
            href="{{ route('inhabilitacion') }}"
            :active="request()->routeIs('inhabilitacion')"
        />
        <x-sidebar.sublink
            title="Consultas"
            href="{{ route('consulta') }}"
            :active="request()->routeIs('consulta')"
        />
        <x-sidebar.sublink
            title="Informes"
            href="{{ route('informe') }}"
            :active="request()->routeIs('informe')"
        />
    </x-sidebar.dropdown>

    {{-- <div
        x-transition
        x-show="isSidebarOpen || isSidebarHovered"
        class="text-sm text-gray-500"
    >
        Dummy Links
    </div>

    @php
        $links = array_fill(0, 20, '');
    @endphp

    @foreach ($links as $index => $link)
        <x-sidebar.link title="Dummy link {{ $index + 1 }}" href="#" />
    @endforeach --}}

</x-perfect-scrollbar>
