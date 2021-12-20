
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    @include('partials.the_header')

    <main>
        {{-- @dump($comics) --}}
        <div class="container">
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
    </main>

    @include('partials.the_footer')
</body>
</html>