<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
          integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    @vite('resources/css/app.css')
    <title>{{$title ?? 'Welcome to Workopia!'}}</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body class="bg-gray-100">
<x-header/>
@if(request()->is('/'))
    <x-hero/>
    <x-top-banner />
@endif
<main class="container block mx-auto-p px-4 py-4">
    {{$slot}}
</main>
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>
