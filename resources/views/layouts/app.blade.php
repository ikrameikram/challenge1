<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> App</title>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css">
</head>
<body>
    <header>
        <h1>Challenge </h1>
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/posts') }}">Posts</a>
        </nav>
    </header>

    <main>
        {{-- Here your page content will appear --}}
        @yield('content')
    </main>

</body>
</html>
