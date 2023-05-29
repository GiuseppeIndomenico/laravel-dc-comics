@extends('layouts.app')


@section('content')
    <section class="text-light my-4">
        <a class="mt-4" href="{{ route('comics') }}"><button>Indietro</button></a>


        <h1 class="py-2 fw-bold text-center ">{{ $comic['title'] }}</h1>
        <div class="row mt-3">
            <div class="col-6">

                <div class="gi-comic">
                    <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="">
                </div>
            </div>
            <div class="col-6">
                <p class="lh-4 fw-semibold pt-3 ">{{ $comic['description'] }}</p>
            </div>


        </div>
    </section>
@endsection
