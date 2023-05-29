@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <a href="{{ route('comic.show', ['id' => $loop->index]) }}">


                    <div class="d-flex flex-column align-content-center justify-content-center py-2">
                        <div class="gi-img mb-2">
                            <img src="{{ $comic['thumb'] }}" alt="type">
                        </div>
                        <div class="">
                            <div class="row">
                                <div class="col-8">
                                    <span class="text-light ">{{ $comic['series'] }}</span>

                                </div>
                                <div class="col-4">
                                    <span class="text-light">{{ $comic['price'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
