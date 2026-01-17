
@php
    $fruits = ['Apple', 'Banana', 'Orange'];
@endphp

@include('pages.header', ['names' => $fruits])

{{-- @include('pages.header') --}}
{{-- @include('pages.header',['name'=>'M']) --}}

<h1>Home : our first page</h1>

@include('pages.footer')

@includeIf('pages.content'){{-- ya error nhi da ga agr file nhi ho ge to --}}

{{-- @includeWhen($condition,'pages.header' ) ya condition chick karta ha true ho ga to print varna nhi --}}



{{-- main Directives

@include
@section
@extend
@yield --}}
