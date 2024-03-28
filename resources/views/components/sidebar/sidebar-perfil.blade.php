<x-sidebar.overlay-perfil />

<aside
    class="fixed inset-y-0 z-20 right-0 flex flex-col py-4 space-y-6
        bg-white shadow-lg dark:bg-dark-eval-1"
    :class="{
        'translate-x-0 w-64': isSidebarPerfilOpen,
        // '-translate-x-full w-64 sm:translate-x-0': !isSidebarPerfilOpen,
        // '-translate-x-full w-64 md:w-16 md:translate-x-0': !isSidebarPerfilOpen,
        'w-64 sm:translate-x-0': !isSidebarPerfilOpen,
    }"
    style="transition-property: width, transform; transition-duration: 150ms;"
    {{-- x-on:mouseenter="handleSidebarPerfilHover(true)"
    x-on:mouseleave="handleSidebarPerfilHover(false)" --}}
>
<x-sidebar.header-perfil />

<x-sidebar.content-perfil/>

</aside>
