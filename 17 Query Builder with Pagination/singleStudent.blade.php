<h1>single sutdent detail</h1>

@foreach ($data as $id => $user )
    <h3>id : {{ $user->id}}</h3>
    <h3>Name : {{ $user->name}}</h3>
    <h3>email : {{ $user->email}}</h3>
@endforeach