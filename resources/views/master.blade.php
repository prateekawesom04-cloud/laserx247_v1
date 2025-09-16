<!DOCTYPE html>
<html lang="en">
    <head>
        @include('head')

    <link rel="stylesheet" href="{{asset('css')}}/style.css">
        @yield('head')
    </head>

<body>
    <div class="app_body relative">
        <div class="flex flex-col items-center justify-between w-100 h-[100vh]">
            <div class="w-full">
                @include('header')
                @include('account-sidebar')
                @include('navbar')
            </div>
            <div class="app_body_center w-full">
                @yield('body')
            </div>
            <div class="footer_part w-full">
                @include('footer')
            </div>
        </div>
        @include('js')
    </div>
    <div class="app_loader bg-white flex items-center justify-center w-full h-[100vh] absolute left-0 top-0 bg-gray-300 z-[1111]" style="display:none;">
        <img src="{{ asset('images/Hourglass.gif') }}" alt="Logo" height="40" width="100" />
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
