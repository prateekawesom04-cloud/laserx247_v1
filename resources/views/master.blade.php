<!DOCTYPE html>
<html lang="en">
@include('head')

<body>
    @include('header')
    @include('account-sidebar')
    @include('navbar')
    @yield('body')
    @include('footer')
    @include('js')
    <div class="loader" style="display: none !important;">
        Loading...
    </div>

    @yield('js')
</body>

</html>
