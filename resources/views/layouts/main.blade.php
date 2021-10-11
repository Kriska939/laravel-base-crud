<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}"/>
    <title>Comic Books Library</title>
</head>
<body>
    {{-- HEADER --}}

    @include('includes.header')

    {{-- CONTENT --}}
<main class="container">
    <section id="@yield('section-id')">
        <div class="card main-card my-5 p-5">

             @yield('content')

        </div>
    </section>
</main>

    @yield('scripts')
    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>