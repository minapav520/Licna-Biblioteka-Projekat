@extends('layout')

@section('content')
<div class="card-custom" style="max-width: 600px; margin: auto;">
    <h2 style="font-style: italic; margin-bottom: 20px;">Izmeni zapis: {{ $book->title }}</h2>
    <form method="post" action="{{ route('books.update', $book) }}">
        @csrf 
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Naslov</label>
            <input type="text" name="title" value="{{ $book->title }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Autor</label>
            <input type="text" name="author" value="{{ $book->author }}" class="form-control" required>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Godina</label>
                <input type="number" name="year" value="{{ $book->year }}" class="form-control">
            </div>
            <div class="col">
                <label class="form-label">Stranica</label>
                <input type="number" name="pages" value="{{ $book->pages }}" class="form-control">
            </div>
            <div class="col">
                <label class="form-label">Ocena (1-5)</label>
                <input type="number" name="rating" value="{{ $book->rating }}" min="1" max="5" class="form-control">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Žanr</label>
            <input type="text" name="genre" value="{{ $book->genre }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Utisci</label>
            <textarea name="review" class="form-control" rows="3">{{ $book->review }}</textarea>
        </div>
        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" name="is_favorite" value="1" id="f" {{ $book->is_favorite ? 'checked' : '' }}>
            <label class="form-check-label" for="f">
                Sačuvaj u omiljene ❤️
            </label>
        </div>
        <div class="d-flex gap-2">
            <button type="submit" class="btn-main flex-grow-1 border-0 py-2">Sačuvaj izmene</button>
            <a href="{{ route('books.index') }}" class="btn btn-outline-secondary py-2">Otkaži</a>
        </div>
    </form>
</div>
@endsection