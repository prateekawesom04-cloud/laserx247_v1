@extends('super-master')
@section('body')

    <div class="container">
        <div class="col-12 col-md-6 mx-auto my-4">
            @if(isset($bonusData) && !empty($bonusData))

                @foreach($bonusData as $key)
                    @include('includes.claimBonus')
                @endforeach

            @endif

            @if(isset($notifications) && !empty($notifications))
            @foreach($notifications as $notification)
                @include('includes.notification')
            @endforeach
            @else
            @foreach([1,2,3,4] as $notification)
                @include('includes.notification')
            @endforeach
            @endif

        </div>
    </div>

@endsection