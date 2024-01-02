<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Domain Test</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    <main class="container">
        @yield('content')
    </main>

@stack('script')
</body>
</html>
