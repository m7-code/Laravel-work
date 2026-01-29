@extends('layout')

@section('tital')
    User Detail
@endsection

@section('content')

<table class="table table-bordered">
    <tr>
        <th>Name :</th>
        <td>{{ $users->name }}</td>
    </tr>
    <tr>
        <th>Email :</th>
        <td>{{ $users->email }}</td>
    </tr>
    <tr>
        <th>City :</th>
        <td>{{ $users->city }}</td>
    </tr>
    
    <tr>
        <th>Phone :</th>
        <td>{{ optional($users->profile)->phone }}</td>
    </tr>
    <tr>
        <th>Address :</th>
        <td>{{ optional($users->profile)->address }}</td>
    </tr>
</table>

@endsection
