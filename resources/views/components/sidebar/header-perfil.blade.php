<div class="flex items-center justify-between flex-shrink-0 px-3">
    <!-- Logo -->
    <a
        href="{{ route('dashboard') }}"
        class="inline-flex items-center gap-2"
    >
        <x-application-logo aria-hidden="true" class="w-10 h-auto" />

        <span class="sr-only">Dashboard</span>
    </a>

    <!-- Toggle button -->
    <x-button
        type="button"
        icon-only
        sr-text="Toggle sidebar"
        variant="secondary"
        x-show="isSidebarPerfilOpen"
        x-on:click="isSidebarPerfilOpen "
    >
        {{-- <x-icons.menu-fold-right
            x-show="!isSidebarPerfilOpen"
            aria-hidden="true"
            class="hidden w-6 h-6 lg:block"
        />

        <x-icons.menu-fold-left
            x-show="isSidebarPerfilOpen"
            aria-hidden="true"
            class="hidden w-6 h-6 lg:block"
        />

        <x-heroicon-o-x
            aria-hidden="true"
            class="w-6 h-6 lg:hidden"
        /> --}}X
    </x-button>
</div>
