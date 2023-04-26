@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a href="/formulario">Formulário</a>
        </h2>
        <div class="container vw-100 p-5">
            <button class="btn btn-success">Bootstrap ON</button>
        </div>
    </x-slot>
</x-app-layout>
