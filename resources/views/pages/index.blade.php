@extends('master')

@section('body')
{{ session('user_session') }}
@if(session('login'))
    logged In ----- {{ session('login') }}
@else
    testing login 0
@endif
{{ session('login') }}
@endsection