<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')

    <main>
        <section class="bg-dark">
            <div class="container py-4">
                {{-- stampino bellino bellino --}}
                @yield('content')
                {{--  --}}
            </div>
        </section>


        <section class="bg-primary p-2">

            <div class="container text-light d-flex align-items-center justify-content-between p-4">
                @foreach ($options as $option)
                    <div class="d-flex align-items-center">
                        <div class="img-option">
                            <img class="" src="/img/{{ $option['path'] }}" alt="{{ $option['alt'] }}">
                        </div>
                        <span class="text-uppercase">{{ $option['description'] }}</span>
                    </div>
                @endforeach
            </div>
        </section>
    </main>

    @include('partials.footer')




</body>

</html>
