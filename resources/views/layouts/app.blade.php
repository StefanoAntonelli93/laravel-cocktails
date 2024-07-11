<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel-boolando</title>
    <!-- Includiamo gli assets con la direttiva vite-->
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container py-4">

        @include('shared.header')

        <main>
            @yield('main')
        </main>

        @include('shared.footer')


    </div>

</body>

</html>
