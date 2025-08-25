<!DOCTYPE html>
<html lang="en">
@include('head')

<body>
    @include('header')
    @include('navbar')
    @yield('body')
    @include('footer')
    @include('js')
    <div class="loader" style="display: none !important;">
        Loading...
    </div>
</body>

</html>
