<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>

<body class="min-h-screen bg-gray-100 flex flex-col items-center justify-center">

    <!-- @section('sidebar')

    This is the master sidebar.

    @show -->



    <div class="container">

        @yield('content')

    </div>

</body>

</html>