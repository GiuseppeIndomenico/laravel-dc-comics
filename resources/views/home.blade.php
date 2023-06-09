@php
    /** @var \App\Models\Comic[] $comics */
@endphp

@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <a class="" href="{{ route('comics.show', $comic) }}">
                    <div class="d-flex flex-column align-content-center justify-content-center py-2">
                        <div class="gi-img mb-2">
                            <img src="{{ $comic->thumbnail_url }}" alt="type">
                        </div>
                        <div class="">
                            <div class="row">
                                <div class="col-8">
                                    <span class="text-light ">{{ $comic->series }}</span>
                                </div>
                                <div class="col-4">
                                    <span class="text-light">{{ $comic->price }}&euro;</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <a href="{{ route('comics.create') }}" class="btn btn-danger"> CREATE UR COMIC HERE!!!</a>
@endsection
