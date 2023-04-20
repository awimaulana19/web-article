@extends('layout.main')
@section('navbar')
    @include('partial.nav')
@endsection

@section('masuk')
    <main class="form-signin w-100 m-auto">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('errorLogin'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('errorLogin') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <form action="/login" method="post">
            @csrf
            <div class="d-flex justify-content-center">
                <img class="mb-4 mt-5" src="img/login.png" alt="" width="70" height="70">
            </div>
            <h1 class="h3 mb-3 fw-normal text-center">Masuk</h1>
            <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                <label for="password">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
            <small class="text-center d-block mt-2">Belum Punya Akun? <a href="/register">Daftar</a></small>
        </form>
    </main>
@endsection
