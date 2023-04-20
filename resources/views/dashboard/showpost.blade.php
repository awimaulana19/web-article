@extends('dashboard.MainLayoutAdmin')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <h2>{{ $posts->judul }}</h2>
                <a href="/mypost" class="btn btn-success mb-3"><i class="bi bi-arrow-left"></i> Back to my post</a>
                <a href="/mypost/{{ $posts->slug }}/edit" class="btn btn-warning mb-3"><i class="bi bi-pencil-square"></i>
                    Edit</a>
                <form action="/mypost/{{ $posts->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger mb-3" onclick="return confirm('Yakin Untuk Menghapus?')"><i
                            class="bi bi-x-circle"></i> Delete</button>
                </form>
                @if ($posts->gambar)
                    <img src="{{ asset('storage/' . $posts->gambar) }}" class="card-img-top mb-3" width="1200px"
                        height="400px" alt="...">
                @else
                    <img src="https://source.unsplash.com/random/?{{ $posts->category->name }}" class="card-img-top mb-3"
                        width="1200px" height="400px" alt="...">
                @endif
                <p>{!! $posts->isi !!}</p>
            </div>
        </div>
    </div>
@endsection
