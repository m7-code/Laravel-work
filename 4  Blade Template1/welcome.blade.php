<h1>Home : our first page</h1>


{{3+2}}

<br><br>

{{"hello world"}}
<br>
{{"<h1>heloo</h1>"}}
{!!"<h1>heloo</h1>"!!} {{--same for java code--}}

@php
    $user = "M";
@endphp

{{$user}}

@php
    $name = ["a","b","c","d"];
@endphp

<ol>
@foreach ($name as $n)

<li>{{$n}}</li>

@endforeach
</ol>

<ul>
@foreach ($name as $n)

<li>{{$n}}</li>

@endforeach
</ul>

<ul>
@foreach ($name as $n)

<li>{{$loop->index}} - {{$n}}</li>

@endforeach
</ul>

<ul>
@foreach ($name as $n)

@if ($loop->first)
    <li style="color: red">{{$n}}</li>
@else
    <li>{{$n}}</li>
@endif

@endforeach
</ul>
