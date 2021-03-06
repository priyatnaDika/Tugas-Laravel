<x-template-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="border-b-2 border-gray-600 my-8 mx-4">
                <h1> {{$title}}</h1>
                <h2>NIM: {{$data['mahasiswa']['nim']}}</h2>
                <h2>NAMA: {{$data['mahasiswa']['nama']}}</h2>
            </div>
        </div>
    </div>
</x-template-layout>