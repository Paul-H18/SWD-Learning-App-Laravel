<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Learn-App</title>
    @vite(['resources/scss/app.scss'])
    @yield('head')
</head>
<body>

    @yield('content')

</body>
</html>
