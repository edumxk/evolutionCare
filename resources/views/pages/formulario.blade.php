@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a href="/formulario">Formulário</a>
        </h2>
    </x-slot>
    <div class="align-middle m-2 justify-center">
        <form class="w-full max-w-lg mx-auto my-5" action="/formulario" method="post">
            @csrf
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="paciente">
                        Paciente
                    </label>
                    <input class="@error('paciente') is-invalid @enderror appearance-none block w-full bg-gray-200 text-gray-300 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="paciente" id="paciente" type="text" placeholder="João">
                    @error('paciente')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <p class="text-red-500 text-xs italic">Preencha o campo obrigatório.</p>
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="enfermeiro">
                        Enfermeiro
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-300 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="enfermeiro" id="enfermeiro" type="text" placeholder="Julia">
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="medico">
                        Médico
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-300 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="medico" id="medico" type="text" placeholder="Vinicius">
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="tecnico">
                        Téc. Enfermagem
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-300 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="tecnico" id="tecnico" type="text" placeholder="Vinicius">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="evolucao">
                        Evolução do Plantão
                    </label>
                    <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="evolucao" name="evolucao" rows="5" cols="33">Meu plantão foi muito bom, o paciente estava bem e não tive problemas.</textarea>
                    <p class="text-gray-400 text-xs italic">Descreva tudo sobre o plantão.</p>
                </div>
            </div>
            <div class="w-full text-center my-5">
                <button type="submit" class="w-48 text-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Salvar
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
