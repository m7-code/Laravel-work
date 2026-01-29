@extends('layout')

@section('tital')
    Update
@endsection

@section('content')

<form action="{{ route('users.update', $users->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">User Name</label>
        <input type="text" value="{{ $users->name }}" class="form-control" name="username">
    </div>

    <div class="mb-3">
        <label class="form-label">User Email</label>
        <input type="email" value="{{ $users->email }}" class="form-control" name="useremail">
    </div>

    <div class="mb-3">
        <label class="form-label">User City</label>
        <input type="text" value="{{ $users->city }}" class="form-control" name="usercity">
    </div>

  
    <div class="mb-3">
        <label class="form-label">Phone</label>
        <input type="text" value="{{ optional($users->profile)->phone }}" class="form-control" name="phone">
    </div>

    <div class="mb-3">
        <label class="form-label">Address</label>
        <input type="text" value="{{ optional($users->profile)->address }}" class="form-control" name="address">
    </div>

    <input type="submit" value="Save" class="btn btn-success">
</form>

@endsection
