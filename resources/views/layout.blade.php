<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Welcome to Workopia | Find and list jobs')</title>
</head>
<body class="bg-gray-100">
@include('partials.navbar')
<main class="container mx-auto-p x-4 py-4">
    @yield('content')

</main>
</body>
</html>