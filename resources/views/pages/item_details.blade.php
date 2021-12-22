@extends('layouts.default_layout')

@section('content')
<div class="blue_bar"></div>
<div class="details_container">



@dump($item)
@dump($item["artists"])
    <div class="first_description">
        <div class="row">
            <div class="col-8 description">
                <h1>{{ $item["title"] }}</h1>
                <div class="priceANDavailability">
                    <div class=" d-flex border-bottom border-secondary">
                        <span class="ps-4 green_text">U.S. Price: </span><span class="text-white ms-1">{{ $item["price"] }}</span>
                        <span class="green_text ms-auto pe-4">AVAILABLE</span>

                        <span class="px-4 text-white border-start border-secondary">Check Availability</span>
                    </div>
                    

                </div>
                <p class="mt-2">{{ $item["description"] }}</p>

            </div>
            <div class="col-4 adv">
                <h4>ADVERTISEMENT</h4>
                <img src="{{ asset('img/adv.jpg') }}" alt="">
            </div>
        </div>

    </div>

</div>
    <div class="second_description">
        <div class="details_container row">
            <div class="col-6 border">
                <div>
                    <h3>Talent</h3>
                    <div class="row">
                        <div class="col-4"><h5>Art By:</h5></div>
                        <div class="col-8 artist">
                            @foreach ($item["artists"] as $artist)
                                <a>{{ $artist }}, </a>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-6 border">{{-- {{ $item["artists"] }} --}}
                
            </div>
            
        </div>

    </div>


    
@endsection