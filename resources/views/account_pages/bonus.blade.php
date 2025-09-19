@extends('super-master')

@section('body')

    <div class="container">
        <div class="col-12 col-md-6 mx-auto my-4">
            
            @php
            $bonusData = [1,2,3,4,5];
            if(property_exists($userData->additional_data,'bonusData')){
                $bonusData = $userData->additional_data->bonusData;
            }
            @endphp

            @foreach($bonusData as $key)
                @include('includes.claimBonus')
            @endforeach

        </div>
    </div>

@endsection