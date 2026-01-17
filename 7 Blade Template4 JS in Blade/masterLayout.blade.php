<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- CSS LINK -->
    <link rel="stylesheet" href="css/style.css">
    @stack('style')
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

    <!-- ===== Main Content ===== -->
    <main class="content">
        @hasSection('content')
            @yield('content')
        @else
        <h1>no content Found</h1>    
        @endif
        
    </main>

    <!-- ===== Footer ===== -->

    @section('footer')
    <footer class="footer">
        <p>&copy; 2026 My Website</p>
    </footer>

    @show
    

    @stack('scripts')

</body>
</html>
