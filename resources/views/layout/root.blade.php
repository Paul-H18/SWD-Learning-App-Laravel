<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Learn-App</title>
    @vite(['resources/scss/app.scss', 'resources/js/navbar/app.js'])
    @yield('head')
</head>
<body>
    <div id="navbar">
        <Navbar>

        </Navbar>
    </div>
    @yield('content')
</body>
</html>
