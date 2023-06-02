<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}">
    <title>@yield('page_title')</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>
<body>
    @yield('header')
    @yield('hero')
    @yield('features')
    @yield('contents')
    @yield('footer')
    <script>
        var button = document.getElementById('login');
        button.onclick = function() {
            location.assign('/admin');
        }
    </script>
</body>
</html>
