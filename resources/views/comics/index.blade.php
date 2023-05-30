@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 position-relative">
                <a href="{{ route('comics.show', $comic) }}">
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
                                    <span class="text-light">{{ $comic->price }} &euro;</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class=" border-0  position-absolute gi-delete"> X</button>
                </form>
            </div>
        @endforeach
    </div>
    <a href="{{ route('comics.create') }}" class="btn btn-danger"> CREATE UR COMIC HERE!!!</a>
@endsection
