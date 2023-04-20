@extends('layout.main')
@section('navbar')
    @include('partial.nav')
@endsection

@section('masuk')
    <h2 class="mt-3 mb-3 text-center">{{ $title }}</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/blog">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    @if ($post->count())
        <div class="card mb-3 mt-3">
            @if ($post[0]->gambar)
                <img src="{{ asset('storage/' . $post[0]->gambar) }}" class="card-img-top" width="1200px"
                    height="500px" alt="...">
            @else
                <img src="https://source.unsplash.com/random/?{{ $post[0]->category->name }}" class="card-img-top"
                    width="1200px" height="500px" alt="...">
            @endif
            <div class="card-body text-center">
                <h5 class="card-title"><a class="text-decoration-none text-dark"
                        href="/blog/{{ $post[0]->slug }}">{{ $post[0]->judul }}</a></h5>
                <small class="text-muted">
                    <p>By : <a href="/user/{{ $post[0]->user->username }}"
                            class="text-decoration-none">{{ $post[0]->user->name }}</a>
                        In <a href="/categories/{{ $post[0]->category->slug }}"
                            class="text-decoration-none">{{ $post[0]->category->name }}</a>
                        {{ $post[0]->created_at->diffForHumans() }}</p>
                </small>
                <p class="card-text">{!! $post[0]->preview !!}</p>
                <a href="/blog/{{ $post[0]->slug }}" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($post->skip(1) as $perpost)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            @if ($perpost->gambar)
                                <img src="{{ asset('storage/' . $perpost->gambar) }}" class="card-img-top"
                                    width="400px" height="250px" alt="...">
                            @else
                                <img src="https://source.unsplash.com/random/?{{ $perpost->category->name }}"
                                    class="card-img-top" alt="..." width="400px" height="250px">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title"><a href="/blog/{{ $perpost->slug }}">{{ $perpost->judul }}</a></h5>
                                <p>By : <a href="/user/{{ $perpost->user->username }}"
                                        class="text-decoration-none">{{ $perpost->user->name }}</a>
                                    In <a href="/categories/{{ $perpost->category->slug }}"
                                        class="text-decoration-none">{{ $perpost->category->name }}</a></p>
                                <p class="card-text">{!! $perpost->preview !!}</p>
                                <a href="/blog/{{ $perpost->slug }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- {{ $post->links() }} --}}
        </div>
    @else
        <p class="text-center fs-4">No Post Found</p>
    @endif
@endsection
