
@extends('layouts.masterLayout')

@section('content')
    <h1>Home</h1>
@endsection

@push('scripts')
    <script src="/example.js"></script>
@endpush

@prepend('style')

<style>
   .content {
        background : red;
    }
</style>
    
@endprepend