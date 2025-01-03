<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{$title ?? 'Welcome to Workopia!'}}</title>
</head>
<body class="bg-gray-100">
<x-header/>
<main class="container mx-auto-p x-4 py-4">
    {{$slot}}
</main>
</body>
</html>
