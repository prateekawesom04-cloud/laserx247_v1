<!DOCTYPE html>
<html lang="en">
@include('head')

<body>
   @include('mobile.header')
   @include('account-sidebar')
   @yield('body')
   @include('mobile.footer')
   @include('js')
   @yield('js')
</body>

</html>
