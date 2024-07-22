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
    @include('shared.header')

    <div class="container py-4">


        <main>
            @yield('main')
        </main>

    </div>

    @include('shared.footer')


</body>

</html>
