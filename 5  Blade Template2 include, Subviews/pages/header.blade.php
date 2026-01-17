{{-- <h1>Header page</h1> --}}

{{-- <p>{{ $name ?? ''}}</p> --}}
{{-- <p>{{ $name }}</p> --}}

{{-- @foreach ($names as $n)
    <p>{{$n}}</p>
@endforeach --}}

{{-- @forelse ($names as $n )
    <p>{{$n}}</p>
@empty
    <p>no value</p>
@endforelse --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- CSS LINK -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- ===== Header / Navbar ===== -->
    <header class="header">
        <h1>My Website</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/post">Posts</a>
        </nav>
    </header>