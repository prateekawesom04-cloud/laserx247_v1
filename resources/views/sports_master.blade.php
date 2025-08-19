@extends('master')
@section('body')
 <div class="container-fluid">
        <div class="d-flex">
            <!-- Left Sidebar (20%) -->
            <div class="bg-light p-2" style="flex: 0 0 20%;">
                @include('left-sidebar')
            </div>

            <!-- Body (50%) -->
            <div class="p-2" style="flex: 0 0 50%;">
                @yield('sports_body')
            </div>
            <!-- Right Sidebar (30%) -->
            <div class="bg-light p-2" style="flex: 0 0 30%;">
                @include('right-sidebar')
            </div>
        </div>
    </div>
    @endsection