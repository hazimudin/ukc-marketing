@extends('layouts.app', ['class' => ''])

@section('content')
    @include('layouts.navbar.nav1', ['title' => 'List Nasabah'])
    <div class="container">
        <!-- Button trigger modal -->


        <!-- No Internet Assets Trigger -->
        <div class="d-none">
            <img src="assets\img\no-internet-logo.png" alt="No Internet">
            <img src="assets\img\page-not-found-character.gif" alt="No Internet gif">
        </div>


        <div class="row mt-4">
            <div class="col-2 m-0">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-person-plus-fill"></i>
                </button>
            </div>

            <div class="col-3 m-0">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ $hari }}
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?filter_hari=senin">Senin</a></li>
                        <li><a class="dropdown-item" href="?filter_hari=selasa">Selasa</a></li>
                        <li><a class="dropdown-item" href="?filter_hari=rabu">Rabu</a></li>
                        <li><a class="dropdown-item" href="?filter_hari=kamis">Kamis</a></li>
                        <li><a class="dropdown-item" href="?filter_hari=jumat">Jum'at</a></li>
                        <li><a class="dropdown-item" href="?filter_hari=semua">Tampilkan Semua</a></li>
                    </ul>
                </div>
            </div>

        </div>

    </div>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">Titipan</th>
                <!-- <th scope="col">No HP</th> -->
                <th scope="col">Desa</th>
                <!-- <th scope="col">Keterangan</th> -->
                <!-- <th scope="col">Action</th> -->
            </tr>
        </thead>
        <tbody>

            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td><a href="/detail-user/{{ $user->id }}">{{ $user->nama }}</a></td>
                    <td>{{ $user->titipan }}</td>
                    <!-- <td>{{ $user->no_hp }}</td> -->
                    <td><a href="{{ $user->koordinat }}" target="_blank">{{ $user->desa }}</a></td>
                    <!-- <td>{{ $user->keterangan }}</td> -->
                    <!-- <td><i class="bi bi-trash-fill"></i> <i class="bi bi-pencil-square"></i></td> -->
                </tr>
            @endforeach
        </tbody>
    </table>
    </ul>


    </div>

    {{-- <div class="card m-2 p-2">
        <form action="/import-nasabah" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="input-group mb-3">
                <input name="data_nasabah" type="file" class="form-control" id="inputGroupFileNasabah"
                    aria-describedby="inputGroupFileNasabah" aria-label="Upload">
            </div>

            <button type="submit" class="btn btn-primary">Import</button>
        </form>
    </div> --}}

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Nasabah</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="/" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="card-body">


                            <div class="input-group mb-3">
                                <div class="input-group flex-nowrap">
                                    <input type="text" class="form-control" placeholder="Nama" name="nama"
                                        aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group flex-nowrap">
                                    <input type="text" class="form-control" placeholder="Titipan" name="titipan">
                                </div>
                            </div>



                            <div class="input-group mb-3">
                                <div class="input-group flex-nowrap">
                                    <input type="text" class="form-control" placeholder="Desa" name="desa"
                                        aria-describedby="addon-wrapping">
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group flex-nowrap">
                                    <input type="text" class="form-control" placeholder="Nomor HP" name="no_hp"
                                        aria-label="Alamat" aria-describedby="addon-wrapping">
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group flex-nowrap">
                                    <input type="text" class="form-control" placeholder="Titik Koordinat"
                                        name="koordinat" aria-label="Alamat" aria-describedby="addon-wrapping">
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <select class="form-select" aria-label="Default select example" name="kelompok">
                                    <option value="senin" selected>Senin</option>
                                    <option value="selasa">Selasa</option>
                                    <option value="rabu">Rabu</option>
                                    <option value="kamis">Kamis</option>
                                    <option value="jumat">Jum'at</option>
                                </select>
                            </div>

                            <div class="input-group mb-3">
                                <select class="form-select" aria-label="Default select example" name="resort">
                                    <option value="1" selected>Resort 1</option>
                                    <option value="2">Resort 2</option>
                                    <option value="3">Resort 3</option>
                                    <option value="4">Resort 4</option>
                                    <option value="5">Resort 5</option>
                                    <option value="6">Resort 6</option>
                                </select>
                            </div>

                            <span class="label">Foto KTP</span>
                            <div class="input-group mb-3">
                                <input name="foto_ktp" type="file" class="form-control" id="inputGroupFile04"
                                    aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            </div>


                            <span class="label">Foto Selfy</span>
                            <div class="input-group mb-3">
                                <input name="foto_selfy" type="file" class="form-control" id="inputGroupFile04"
                                    aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            </div>

                            <span class="label">Foto Rumah</span>
                            <div class="input-group mb-3">
                                <input name="foto_rumah" type="file" class="form-control" id="inputGroupFile04"
                                    aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            </div>


                            <div class="input-group mb-3">
                                <div class="input-group flex-nowrap">
                                    <input type="text" class="form-control" placeholder="Keterangan"
                                        name="keterangan" aria-describedby="addon-wrapping">
                                </div>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
@endsection
