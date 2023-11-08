<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- include our  css file and tailwind as a result--}}
    @vite('resources/css/app.css')
</head>
<body >
    <div class="container py-10 mx-auto">
        <h1 class="text-xl font-bold">
            My Personal Blog
        </h1>
        @yield('content')

    </div>
</body>
</html>
