@extends('layouts.default_layout')




@section('content')

<div class="bg-dark text-white">
    {{-- @dump($comics) --}}
    <div class="container py-5 bg-dark">
        <div class="row">
            @foreach ($comics as $item)
                
            <div class="col">

                <div class="cont_img">
                <img src="{{ $item['thumb'] }}" alt="" />
                </div>
                <p>{{ $item['title'] }}</p>
            </div>
            @endforeach
        </div>

    </div>

</div>
    
@endsection

{{-- per recuperaare la rotta della pagina $variable= Request::route()->getName()   attraverso un if se coincide con la rotta aggiungere classe active--}}