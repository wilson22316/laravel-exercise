<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>這是 Apple 頁面</h1>
    <a href="{{ url('/') }}">返回首頁</a>

    <?php echo 123 ?>
    {{ $fruits }}

    @if($isLoggedIn)
    <p>已登入</p>
    @else
    <p>未登入</p>
    @endif

</body>

</html>