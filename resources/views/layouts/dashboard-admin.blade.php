<x-app-layout>
    <x-layouts.sidebar>
        <x-slot name="logo">
            <a href="#" class="ml-2 mb-4 w-fit text-2xl font-bold text-neutral-900 dark:text-white">
                <span class="sr-only">homepage</span>
                <h2>ADMIN</h2>
            </a>
        </x-slot>

        <x-slot name="routes">
            <x-sidebar-routes name="Início" :href="route('profile')" />
        </x-slot>
        {{ $slot }}
    </x-layouts.sidebar>

</x-app-layout>