<!DOCTYPE html>
<html lang="en">
@include('head')

<body>
   @include('mobile.header')
   @yield('body')
   @include('mobile.footer')
   @include('js')
   @yield('js')
</body>

</html>
