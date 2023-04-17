<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="@yield('favIcon')" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/404.css')}}">
</head>
<body>
@yield('content')
</body>
</html>
