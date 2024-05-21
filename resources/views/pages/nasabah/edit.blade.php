@extends('layouts.app', ['class' => ''])

@section('content')
    @include('layouts.navbar.nav1', ['title' => 'List Nasabah'])
    <div class="container">
        <h1 class="mt-4">{{ $user->nama }} tesssttt</h1>
        <hr>
        <p class="mt-2">Foto KTP</p>
        <img src="/storage/{{ $user->foto_ktp }}" class="img-thumbnail" alt="">
        <hr>
        <p class="mt-2">Foto Selfy </p>
        <img src="/storage/{{ $user->foto_selfy }}" class="img-thumbnail" alt="">
        <hr>
        <p class="mt-2">Foto Rumah</p>
        <img src="/storage/{{ $user->foto_rumah }}" class="img-thumbnail" alt="">
        <hr>
        <p class="mt-2">Hari : {{ $user->kelompok }}</p>
        <hr>
        <p class="mt-2">No HP : {{ $user->no_hp }}</p>
        <hr>
        <p class="mt-2">Keterangan : {{ $user->keterangan }}</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
@endsection
