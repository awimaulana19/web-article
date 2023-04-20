@extends('layout.main')
@section('navbar')
    @include('partial.nav')
@endsection

@section('masuk')
    <main class="form-regist w-100 m-auto">
        <form action="/register" method="post">
            @csrf
            <div class="d-flex justify-content-center">
                <img class="mb-4 mt-5" src="img/login.png" alt="" width="70" height="70">
            </div>
            <h1 class="h3 mb-3 fw-normal text-center">Daftar</h1>
            <div class="form-floating">
                <input type="name" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" value="{{ old('name') }}" required>
                <label for="name">Name</label>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="username" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" value="{{ old('username') }}" required>
                <label for="username">Username</label>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email" value="{{ old('email') }}" required>
                <label for="email">Email</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
            <small class="text-center d-block mt-2">Sudah Punya Akun? <a href="/login">Masuk</a></small>
        </form>
    </main>
@endsection
