@extends('layout')

@section('content')
<div class="row align-items-center" style="min-height: 630px;">
    <div class="col-md-6">
        <h1 style="font-size: 50px; color: var(--blue); font-style: italic;">Vaša priča počinje ovde.</h1>
        <p style="font-size: 18px; color: #555; margin: 25px 0;">Digitalni dnevnik za sve vaše pročitane naslove i lične utiske.</p>
        <a href="{{ route('books.index') }}" class="btn-main" style="padding: 15px 30px;">Otvori policu</a>
    </div>
    <div class="col-md-6 text-center">
        <img src="../images/pocetna.png" style="max-width: 90%;">
    </div>
</div>
@endsection