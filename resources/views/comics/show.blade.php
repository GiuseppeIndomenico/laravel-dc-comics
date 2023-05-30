@extends('layouts.app')


@section('content')
    <section class="text-light my-4">
        <a class="mt-4" href="{{ route('comics.index') }}"><button>Indietro</button></a>


        <h1 class="py-2 fw-bold text-center ">{{ $comic['title'] }}</h1>
        <div class="row mt-3">
            <div class="col-6">

                <div class="gi-comic mb-5">
                    <img class="img-fluid" src="{{ $comic->thumbnail_url }}" alt="">
                </div>
                <a class="w-25 btn btn-outline-warning"
                    href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Modifica</a>
            </div>
            <div class="col-6">
                <p class="lh-4 fw-semibold pt-3 ">{{ $comic->description }}</p>
                <div class="row">
                    @php
                        $writers = explode(',', $comic->writers);
                        $artists = explode(',', $comic->artists);
                    @endphp
                    <div class="col-6">
                        <h4 class="lh-4 fw-bold pt-2">Scrittori</h4>
                        @foreach ($writers as $writer)
                            <p class="fw-semibold pt-1">{{ trim($writer, '[]') }}</p>
                        @endforeach
                    </div>
                    <div class="col-6">
                        <h4 class="lh-4 fw-bold pt-2">Fumettisti</h4>
                        @foreach ($artists as $artist)
                            <p class="fw-semibold pt-1">{{ trim($artist, '[]') }}</p>
                        @endforeach
                    </div>

                </div>




            </div>


        </div>
    </section>
@endsection
