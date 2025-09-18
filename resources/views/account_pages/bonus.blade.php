@extends('super-master')

@section('body')

    <div class="container">
        <div class="col-12 col-md-6 mx-auto my-4">
            
            @foreach($bonusData as $key)
                @include('includes.claimBonus')
            @endforeach

        </div>
    </div>

@endsection