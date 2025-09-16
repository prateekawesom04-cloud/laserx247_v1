<!DOCTYPE html>
<html lang="en">
@include('head')

<body>
   <div class="app_body">
      <div class="flex flex-col items-center justify-between w-100 h-[100vh]">
         <div class="w-full">
               @include('mobile.header')
               @include('account-sidebar')
         </div>
         <div class="app_body_center w-full h-full">
               @yield('body')
         </div>
         <div class="footer_part w-full">
               @include('mobile.footer')
         </div>
      </div>
   </div>
   @include('js')
   <div class="app_loader bg-white flex items-center justify-center w-full h-[100vh] absolute left-0 top-0 bg-gray-300 z-[1111]" style="display:none;">
      <img src="{{ asset('images/Hourglass.gif') }}" alt="Logo" height="40" width="100" />
   </div>

    @yield('js')
    

</body>

</html>
