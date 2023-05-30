@extends('layouts.app')

@section('content')
    <div class="text-light">

        <h1>Update Comic</h1>

        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="thumbnail_url" class="form-label">Thumbnail URL</label>
                        <input type="text" class="form-control" id="thumbnail_url" name="thumbnail_url" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" required></textarea>
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series" required>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" name="type" required>
                    </div>
                </div>


                <div class="col-4">
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" required>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date" required>
                    </div>

                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="artists" class="form-label">Artists</label>
                        <input type="text" class="form-control" id="artists" name="artists" value="Artist 1, Artist 2"
                            required>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="writers" class="form-label">Writers</label>
                        <input type="text" class="form-control" id="writers" name="writers" value="Writer 1, Writer 2"
                            required>
                    </div>
                </div>
            </div>
    </div>
    <div class="">

        <button type="submit" class="btn btn-primary">Update Comic</button>
        <button type="reset" class="btn btn-warning">Reset</button>
    </div>
    </div>
    </form>
@endsection
