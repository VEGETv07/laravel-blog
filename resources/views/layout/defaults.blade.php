<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="icon.png" type="image/x-icon">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('elements.header')
    {{-- <div class="h-screen"> --}}
        @yield('content')
    {{-- </div> --}}
    @include('elements.footer')
</body>
</html>