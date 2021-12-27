@extends('layouts.default_layout')

@section('content')
<div class="blue_bar">
    <div class="details_container">
        <div class="center_div ">
            <img src="{{ $item["thumb"] }}" alt="">
            <div class="overlay">
                <a href="#" class="comic_book">COMIC BOOK</a>
                <a href="/" class="view_gallery">VIEW GALLERY</a>
            </div>
        </div>
    </div>
</div>
<div class="details_container">
   {{--  @dump($item)
    @dump($item["artists"]) --}}
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
<div class="second_description border-top">
    <div class="details_container  row">
        <div class="col-6 ">
            <div>
                <h3 class="border-bottom  m-0 pb-5">Talent</h3>
                <div class="row py-3 m-0 border-bottom ">
                    <div class="col-4"><p>Art By:</p></div>
                    <div class="col-8 artist">
                        @foreach ($item["artists"] as $artist)
                            <a href="#">{{ $artist }}, </a>
                        @endforeach
                    </div>
                    
                </div>
                <div class="row py-3 m-0 border-bottom ">
                    <div class="col-4"><p>Written By:</p></div>
                    <div class="col-8 artist">
                        @foreach ($item["writers"] as $writer)
                            <a href="#">{{ $writer }}, </a>
                        @endforeach
                    </div>

                </div>
            </div>
            
        </div>
        <div class="col-6 ">{{-- {{ $item["artists"] }} --}}
            <div>
                <h3 class="border-bottom  m-0 pb-5">Specs</h3>
                <div class="row py-1 m-0 align-items-center border-bottom ">
                    <div class="col-4"><p>Series:</p></div>
                    <div class="col-8 artist">
                        <a href="#">{{ $item["series"] }} </a>
                    </div>
                    
                </div>
                <div class="row py-1 m-0 border-bottom ">
                    <div class="col-4"><p>U.S. Price:</p></div>
                    <div class="col-8 artist">
                        <span>{{ $item["price"] }} </span>
                    </div>
                    
                </div>
                <div class="row py-1 m-0 border-bottom ">
                    <div class="col-4"><p>On Sale Date:</p></div>
                    <div class="col-8 artist">
                        <span>{{ $item["sale_date"] }} </span>
                    </div>
                    
                </div>
                
            </div>
        </div>
        
    </div>
</div>
<div class="second_description border-top">
    <div class="details_container">
        <div class="row">
            <div class="col-3 border">
                <a href="">DIGITAL COMICS</a>
                {{--<img src="{{ asset('/img/cta-icons.png') }}" alt="">--}}            
            </div>
            <div class="col-3 border">
                <a href="">SHOP DC</a>
                {{--<img src="{{ asset('/img/buy-comics-digital-comics.png') }}" alt="">--}}            
            </div>
            <div class="col-3 border">
                <a href="">COMIC SHOP LOCATOR</a>
                {{--<img src="{{ asset('/img/buy-comics-digital-comics.png') }}" alt="">--}}            
            </div>
            <div class="col-3 border">
                <a href="">SUBSCRIPTIONS</a>
                {{--<img src="{{ asset('/img/buy-comics-digital-comics.png') }}" alt="">--}}            
            </div>
        </div>
    </div>

</div>


    
@endsection