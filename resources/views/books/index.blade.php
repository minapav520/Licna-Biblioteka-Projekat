@extends('layout')

@section('content')
<h2 class="mb-5" style="font-style: italic; color: var(--blue);">Moja Polica</h2>

<div class="row">
    @foreach($books as $book)
    <div class="col-md-12">
        <div class="card-custom">
            <div class="row align-items-center">
                <div class="col-md-9">
                    <h3 style="font-style: italic; margin-bottom: 5px;">
                        {{ $book->title }} 
                        @if($book->is_favorite) <span>❤️</span> @endif
                    </h3>
                    
                    <p class="text-muted mb-2">
                        {{ $book->author }} ({{ $book->year }}) 
                        @if($book->pages) | {{ $book->pages }} str. @endif
                        @if($book->genre) 
                            <span class="badge ms-2" style="background-color: var(--header); color: grey; font-weight: normal; border: 1px solid #eaddca;">
                                {{ $book->genre }}
                            </span> 
                        @endif
                    </p>

                    <div class="mb-3" style="color: #f1c40f; font-size: 1.1rem;">
                        @for($i = 1; $i <= 5; $i++)
                            @if($i <= $book->rating)
                                ★
                            @else
                                <span style="color: #ddd;">★</span> 
                            @endif
                        @endfor
                        <span class="text-muted" style="font-size: 0.8rem; margin-left: 5px;">
                            ({{ $book->rating ?? 0 }}/5)
                        </span>
                    </div>

                    @if($book->review)
                    <p style="border-left: 3px solid var(--header); padding-left: 15px; font-style: italic; color: #555; background: #fdfdfd; padding-top: 5px; padding-bottom: 5px;">
                        "{{ $book->review }}"
                    </p>
                    @endif
                </div>

                <div class="col-md-3 text-end">
                    <a href="{{ route('books.edit', $book) }}" class="btn btn-sm btn-outline-dark px-3">Uredi</a>
                    
                    <form action="{{ route('books.destroy', $book) }}" method="POST" class="d-inline">
                        @csrf 
                        @method('DELETE')
                        <button class="btn btn-sm btn-outline-danger px-3" onclick="return confirm('Da li ste sigurni da želite da obrišete knjigu {{ $book->title }}?')">
                            Obriši
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@if($books->isEmpty())
    <div class="text-center mt-5">
        @if(request()->has('favorites'))
            <p class="text-muted">Trenutno nema omiljenih naslova! ❤️</p>
            <a href="{{ route('books.index') }}" class="btn-main">Vrati se na sve knjige</a>
        @else
            <p class="text-muted">Polica je trenutno prazna. Vreme je za novu priču! ✨</p>
            <a href="{{ route('books.create') }}" class="btn-main">Dodaj prvu knjigu</a>
        @endif
    </div>
@endif

@endsection