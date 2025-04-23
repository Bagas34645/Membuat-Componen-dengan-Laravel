<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

        <h1>{{ $category['name'] }}</h1>
        <hr>
        <p>
            {{ $category['description'] }}
        </p>
</x-layout>