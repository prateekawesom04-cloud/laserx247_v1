<!DOCTYPE html>
<html lang="en">
<head>
@include('head')
<link rel="stylesheet" href="{{asset('css')}}/admin_style.css">
@yield('head')
</head>

<body>
    @include('admin.header')
    @include('admin.navbar')
    @yield('body')
    
</body>

</html>
