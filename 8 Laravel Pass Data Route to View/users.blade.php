<h1>users page</h1>

{{-- <h2>hello {{$user}}</h2>
<h2>city :{{ !empty($city) ? $city : 'no city'}}</h2> --}}

@foreach ($user as $id => $u )
    <h3>{{$id}}  {{$u['name']}} | {{$u['city']}}

        <a href="{{route('view.user', $id)}}">Show</a>
    </h3>

    
@endforeach