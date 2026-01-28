@extends('layout')

@section('tital')
    New user
@endsection

@section('content')


<form action="{{ route('users.store')}}" method="POST">
    @csrf
<div class="mb-3">
    <label for="username" class="form-label">User Name</label>
    <input type="text" class="form-control" name="username" >

</div>
<div class="mb-3">
    <label for="username" class="form-label">User Email</label>
    <input type="email" class="form-control" name="useremail" >

</div>
<div class="mb-3">
    <label for="username" class="form-label">User City</label>
    <input type="text" class="form-control" name="usercity" >

</div>
<div class="mb-3">
    
    <input type="submit" value="save" class="btn btn-success"  >

</div>

</form>
    
@endsection