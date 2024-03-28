<nav
    aria-label="secondary"
    x-data="{ open: false }"
    class="sticky top-0 z-10 flex items-center justify-between 
        px-4 py-4 sm:px-6 transition-transform duration-500 bg-white 
        dark:bg-dark-eval-1"
    :class="{
        '-translate-y-full': scrollingDown,
        'translate-y-0': scrollingUp,
    }">
    <div class="text-[90%] sm:text-[100%]">
        Servicio Nacional de Sanidad y Calidad Agroalimentaria.
    </div>
    <div class="flex items-center gap-3">
        <x-button
            type="button"
            class="md:hidden"
            icon-only
            variant="secondary"
            sr-text="Toggle dark mode"
            x-on:click="toggleTheme"
        >
            <x-heroicon-o-moon
                x-show="!isDarkMode"
                aria-hidden="true"
                class="w-6 h-6"
            />

            <x-heroicon-o-sun
                x-show="isDarkMode"
                aria-hidden="true"
                class="w-6 h-6"
            />
        </x-button>
    </div>

    <div class="flex items-center gap-3">
        <x-button
            type="button"
            class="hidden md:inline-flex"
            icon-only
            variant="secondary"
            sr-text="Toggle dark mode"
            x-on:click="toggleTheme"
        >
            <x-heroicon-o-moon
                x-show="!isDarkMode"
                aria-hidden="true"
                class="w-6 h-6"
            />

            <x-heroicon-o-sun
                x-show="isDarkMode"
                aria-hidden="true"
                class="w-6 h-6"
            />
        </x-button>
        <x-dropdown-perfil align="right" width="48">
            {{-- Boton que activa el menu de perfil --}}
            <x-slot name="trigger">
                <x-button
                    type="button"
                    icon-only
                    sr-text="Toggle sidebar"
                    variant="perfil"
                    x-show="isSidebarPerfilOpen || !isSidebarPerfilOpen"
                    size="sm"
                    {{-- x-on:click="isSidebarPerfilOpen = !isSidebarPerfilOpen" --}}
                    open="false"
                    {{-- x-on:click="isSidebarOpen = !isSidebarOpen" --}}
                >
                    {{-- <div>{{ Auth::user()->name }}</div> --}}

                    <div class="ml-1">
                        <svg
                            class="w-4 h-4 fill-current"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                </x-button>
            </x-slot>

            <x-slot name="content">
                <x-sidebar.sidebar-perfil />
 
                {{-- <!-- Perfil -->
                <x-dropdown-link
                    :href="route('profile.edit')"
                >
                    {{ __('Perfil') }}
                </x-dropdown-link>

                <!-- Notificaciones de algo-->
                <sidebar-perfil
                    :href="route('dashboard')"
                >
                    {{ __('Notificaciones') }}
                </sidebar-perfil>

                <!-- Cerrrar sesion -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link
                        :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();"
                    >
                        {{ __('Salir') }}
                    </x-dropdown-link>
                </form> --}}
            </x-slot>
        </x-dropdown-perfil>
    </div>
</nav>

<!-- Mobile bottom bar -->
{{-- <div
    class="fixed inset-x-0 bottom-0 flex items-center justify-between px-4 py-4 sm:px-6 transition-transform duration-500 bg-white md:hidden dark:bg-dark-eval-1"
    :class="{
        'translate-y-full': scrollingDown,
        'translate-y-0': scrollingUp,
    }"
>
    <x-button
        type="button"
        icon-only
        variant="secondary"
        sr-text="Search"
    >
        <svg
            class="w-4 h-4 fill-current"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
            >
            <path
                fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"
            />
        </svg>
    </x-button>

    <a href="{{ route('dashboard') }}">
        <x-application-logo aria-hidden="true" class="w-10 h-10" />    
    </a>

    <x-button
        type="button"
        icon-only
        variant="secondary"
        sr-text="Open main menu"
        x-on:click="isSidebarOpen = !isSidebarOpen"
    > 
        <svg
            class="w-4 h-4 fill-current"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
            >
            <path
                fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"
            />
        </svg>
    </x-button>
</div> --}}
