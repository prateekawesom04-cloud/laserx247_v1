<!DOCTYPE html>
<html lang="en">
@include('head')

<body>
    <div class="app_body">
    @include('header')
    @include('account-sidebar')
    @include('navbar')
    @yield('body')
    @include('footer')
    </div>
    @include('js')
    <div class="app_loader bg-white flex items-center justify-center w-full h-[100vh] absolute left-0 top-0 bg-gray-300 z-[1111]" style="display:none;">
        <img src="{{ asset('images/Hourglass.gif') }}" alt="Logo" height="40" width="100" />
    </div>
    
    <div class="chat_support_btn chat_support absolute right-0 bottom-0 btn rounded-md bg-white text-black">
        Support
    </div>

    @yield('js')
    
    <script>
        // $(document).ready(function(){
        //     setTimeout(() => {
        //         $('.app_body').show();
        //         $('.app_loader').fadeOut(500);
        //     }, 4000);
        // })
    </script>
</body>

</html>
