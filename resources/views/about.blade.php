@extends('layout.main')

@section('navbar')
@include('partial.nav')
@endsection

@section('masuk')
<h1>Halo Saya <?php echo $name; ?></h1>
<p><?= $email; ?></p>
<img src="{{ $image }}" alt="{{ $name }}" width="200px">
@endsection