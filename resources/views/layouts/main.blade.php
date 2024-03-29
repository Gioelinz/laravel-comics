<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('styles')
    <title>Comics</title>
</head>

<body>
    @include('includes.header')
    <main>
        <div class="jumbo-img">
            <div class="container">
                @yield('tag')
            </div>
        </div>
        @yield('content')
    </main>
    @include('includes.links')
    @include('includes.footer')
    @include('includes.bottom-footer')
</body>

</html>
