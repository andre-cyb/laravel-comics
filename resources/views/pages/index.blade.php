@extends('layouts.default_layout')




@section('content')

<div class="bg-dark text-white">
    {{-- @dump($comics) --}}
    <div class="card_cont_black">
        <div class="container card_section">
            <div class="d-flex flex-wrap justify-content-center">
                @foreach ($comics as $item)
                    <a class="card_cont" href="#">
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
    
@endsection

{{-- per recuperaare la rotta della pagina $variable= Request::route()->getName()   attraverso un if se coincide con la rotta aggiungere classe active--}}