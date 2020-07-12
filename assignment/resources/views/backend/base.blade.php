<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quản trị</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    @include('backend.layout.css')
    @yield('css')
</head>
<body>
@include('backend.layout.menu')

<div class="right-panel" id="right-panel">
@include('backend.layout.header')
@yield('content')
</div>
@include('backend.layout.js')
@yield('js')
</body>
</html>