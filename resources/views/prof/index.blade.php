<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Prof Dashboard') }}
        </h2>
    </x-slot>

                <x-indexprofessor :turmas="$turmas"/>
                

</x-app-layout>
