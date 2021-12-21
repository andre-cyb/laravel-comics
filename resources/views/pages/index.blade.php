@extends('layouts.default_layout')




@section('content')

<div class="bg-dark text-white">
    {{-- @dump($comics) --}}
    <div class="card_cont_black">
        <div class="container card_section">
            <div class="d-flex flex-wrap justify-content-center">
                @foreach ($comics as $item)
                    <a class="card_cont" href="{{ route('pages.item_details', ["id"=>$loop->index]) }}">
                        <div class="cont_img">
                            <img src="{{ $item['thumb'] }}" alt="" />
                        </div>
                        <p>{{ $item['title'] }}</p>
                    </a>
                @endforeach
            </div>
            <div class="cont_btn">
                <button class="btn_load_more"><span href="#">LOAD MORE</span></button>
            </div>
        </div>
    </div>

</div>
<div class="blue_section">
    <div class="my_cont_bluebar">
        <ul>
            <li>
                <img src="{{ asset('/img/buy-comics-digital-comics.png') }}" alt="">
                <a href="">DIGITAL COMICS</a>
            </li>
            <li>
                <img src="{{ asset('/img/buy-comics-merchandise.png') }}" alt="">
                <a href="">DC MERCHANDISE</a>
            </li>
            <li>
                <img src="{{ asset('/img/buy-comics-shop-locator.png') }}" alt="">
                <a href="">SUBSCRIPTION</a>
            </li>
            <li>
                <img src="{{ asset('/img/buy-comics-subscription.png') }}" alt="">
                <a href="">COMIC SHOP LOCATOR</a>
            </li>
            <li>
                <img src="{{ asset('/img/buy-dc-power-visa.svg') }}" alt="">
                <a href="">DC POWER VISA</a>
            </li>
        </ul>
    </div>
</div>
    
@endsection

{{-- per recuperaare la rotta della pagina $variable= Request::route()->getName()   attraverso un if se coincide con la rotta aggiungere classe active--}}