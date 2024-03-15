<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Monitoreos normales') }}
            </h2>
        </div>
    </x-slot>

    <div class="p-6 bg-green-100 overflow-hidden rounded-md shadow-md dark:bg-dark-eval-1">
        <span> Estos son todos los monitoreos normales</span>
    </div>
</x-app-layout>