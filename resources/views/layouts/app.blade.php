<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
{{--app()->getLocale() 获取的是 config/app.php 中的 locale 选项，因为我们在前面章节中做了修改，所以此选项的值应为 zh-CN。--}}
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--前段获取 令牌--}}

    <title>@yield('title', 'LaraBBS') - Laravel 进阶教程</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div id="app" class="page">

    @include('layouts._header')

    <div class="container" style="width: 100%;height: 400px;">

        @yield('content')

    </div>

    @include('layouts._footer')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>