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

    {{$date}} <br>
    @if($city == null)
        <p>Москва</p>
    @else
    {{$city}}
    @endif
    
    @if($year == null)
        2026.
    @else
    {{$year}}
    @endif

    @if($month == null)
        02.
    @else
    {{$month}}
    @endif

    @if($day == null)
        26
    @else
    {{$day}}
    @endif
<br><br>
    <b>{{$str}}</b>
<br><br>
    @if($age > 18)
        more18
    @elseif($age == 18)
    18
    @else
    -18
    @endif
<br><br>
    @unless ($userage > 18)
	ваш возраст не подходит
@endif
<br><br>
<ul>
    <li>{{$arr[0]}}</li>
    <li>{{$arr[1]}}</li>
    <li>{{$arr[2]}}</li>
</ul>

</x-layout>