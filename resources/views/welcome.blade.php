<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel with Vue 3</title>
    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <h5>Laravel Blade Page</h5>
    <div id="app"></div>

    {{-- <p>{{ $name }}</p> --}}

    {{--<a href="{{ route('apple') }}">
    <button type="button">切換到 Apple 頁面</button>
    </a>--}}
</body>

</html>