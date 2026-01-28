@extends('layout')

@section('tital')
    All users data
@endsection

@section('content')


<a href="{{ route('users.create')}}"class ="btn btn-success btn-sm mb-3">Add New</a>
<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>City</th>
    </tr>
                    @foreach ($users as $user)
                    <tr>
                        <td> {{ $user->id}}</td>
                        <td>  {{ $user->name}} </td>
                        <td>  {{ $user->email}} </td>
                        <td>  {{ $user->city}} </td>
                        <td><a href="{{route('users.show',$user->id)}}"class ="btn btn-primary btn-sm  "> view </a></td>
                        <td>
    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm"
            onclick="return confirm('Are you sure you want to delete this user?')">
            Delete
        </button>
    </form>
</td>

                         <td><a href="{{route('users.edit',$user->id)}}"class ="btn btn-warning btn-sm  "> Update </a></td>



                    </tr>
                    @endforeach
                </table>
    
@endsection