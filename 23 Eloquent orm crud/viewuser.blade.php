@extends('layout')

@section('tital')
    User Detail
@endsection

@section('content')



<table class="table table-bordered">
                  <tr>
                    <th>Name :</th>
                    <td>{{ $users->name}}</td>
                  </tr>
                   <tr>
                    <th>Email :</th>
                    <td>{{ $users->email}}</td>
                  </tr>
                   <tr>
                    <th>City :</th>
                    <td>{{ $users->city}}</td>
                  </tr>
                </table>
    
@endsection