{{-- <x-layout>
    <x-slot:title>
        {{$title}} - site.com
    </x-slot>
    {{$text}}
</x-layout> --}}

<x-layout>
    <x-slot:title>
        title
    </x-slot>
    {{$username}} <br>
    {{$userage}} <br>
    {{$usersalary}} <br>
    <p style="{{ $style }}">12345687</p>

    <input value="{{ $value1 }}"><br><br>
    <input value="{{ $value2 }}"><br><br>
    <input value="{{ $value3 }}"><br><br>

    <a href="{{ $href }}">{{$text}}</a><br><br>

    {{$date}} <br><br>
    {{$city}}
</x-layout>