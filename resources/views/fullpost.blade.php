@extends('layout.main')
@section('navbar')
    @include('partial.nav')
@endsection

@section('masuk')
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <h2>{{ $posting->judul }}</h2>
                <p>By : <a href="/user/{{ $posting->user->username }}"
                        class="text-decoration-none">{{ $posting->user->name }}</a> In <a
                        href="/categories/{{ $posting->category->slug }}"
                        class="text-decoration-none">{{ $posting->category->name }}</a></p>
                @if ($posting->gambar)
                    <img src="{{ asset('storage/' . $posting->gambar) }}" class="card-img-top" width="1200px" height="400px"
                        alt="...">
                @else
                    <img src="https://source.unsplash.com/random/?{{ $posting->category->name }}" class="card-img-top"
                        width="1200px" height="400px" alt="...">
                @endif
                <p>{!! $posting->isi !!}</p>
                <br>
                <a href="/blog">Kembali ke blog</a>
            </div>
        </div>
    </div>
@endsection
