{{-- <x-layout>
    <x-slot:title>
        {{$title}} - site.com
    </x-slot>
    {{$text}}
</x-layout> --}}

<x-layout>
    <x-slot:title>
        {{$name}}
    </x-slot>
    {{$age}}
    {{$salary}}
    {{$salary}}
    <p style="{{ $style }}">12345687</p>

    <input value="{{ $value1 }}">
    <input value="{{ $value2 }}">
    <input value="{{ $value3 }}">
</x-layout>