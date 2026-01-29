@extends('layout')

@section('tital')
    New user
@endsection

@section('content')

<form action="{{ route('users.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">User Name</label>
        <input type="text" class="form-control" name="username">
    </div>

    <div class="mb-3">
        <label class="form-label">User Email</label>
        <input type="email" class="form-control" name="useremail">
    </div>

    <div class="mb-3">
        <label class="form-label">User City</label>
        <input type="text" class="form-control" name="usercity">
    </div>

    
    <div class="mb-3">
        <label class="form-label">Phone</label>
        <input type="text" class="form-control" name="phone">
    </div>

    <div class="mb-3">
        <label class="form-label">Address</label>
        <input type="text" class="form-control" name="address">
    </div>

    <input type="submit" value="Save" class="btn btn-success">
</form>

@endsection
