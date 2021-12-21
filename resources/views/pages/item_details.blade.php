@extends('layouts.default_layout')

@section('content')
<div class="blue_bar"></div>
<div class="details_container">




    <div class="first_description">
        <div class="row">
            <div class="col-8 description">
                <h1>{{ $item["title"] }}</h1>
                <div class="priceANDavailability">
                    <div class="p-3 d-flex border-bottom border-secondary">
                        <span class="green_text">U.S. Price: </span><span class="text-white ms-1">{{ $item["price"] }}</span>
                        <span class="green_text ms-auto pe-4">AVAILABLE</span>

                        <span class="ps-4 text-white border-start border-secondary">Check Availability</span>
                    </div>
                    

                </div>

            </div>
            <div class="col-4 adv">
                <h4>ADVERTISEMENT</h4>
                <img src="{{ asset('img/adv.jpg') }}" alt="">
            </div>
        </div>

    </div>




    <div class="second_description">

    </div>


</div>
    
@endsection