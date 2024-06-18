<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore</title>
    @vite('resources/css/app.scss')
</head>

<body>
    @include('common.navigation', [
    'current_page' => $current_page
])
    @yield('content')
    @yield('content-test')

    @viteReactRefresh
    @vite('resources/js/partners.jsx')
</body>

</html>