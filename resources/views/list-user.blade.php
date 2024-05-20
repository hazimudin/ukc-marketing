<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UKC Marketing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Paviccon ico -->
    <link rel="icon" href="{{ asset('assets/icons/mipmap-hdpi/ic_launcher.png') }}" type="image/x-icon" />
    <!-- PWA  -->
    <meta name="theme-color" content="#4CAF50" />
    <link rel="apple-touch-icon" href="{{ asset('logo.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">

</head>

<body>
    <div class="container">
        <!-- Button trigger modal -->

        <!-- No Internet Assets Trigger -->

        <div class="d-none">
            <img src="assets\img\no-internet-logo.png" alt="No Internet">
            <img src="assets\img\page-not-found-character.gif" alt="No Internet gif">
        </div>


        <div class="row mt-4">
            <div class="col-2 m-0">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-person-plus-fill"></i>
                </button>
            </div>

            <div class="col-3 m-0">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Hari
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?filter_hari=senin">Senin</a></li>
                        <li><a class="dropdown-item" href="?filter_hari=selasa">Selasa</a></li>
                        <li><a class="dropdown-item" href="?filter_hari=rabu">Rabu</a></li>
                        <li><a class="dropdown-item" href="?filter_hari=kamis">Kamis</a></li>
                        <li><a class="dropdown-item" href="?filter_hari=jumat">Jum'at</a></li>
                        <li><a class="dropdown-item" href="/">Tampilkan Semua</a></li>
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

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>


                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
        // Construct URLSearchParams object instance from current URL querystring.
        // var queryParams = new URLSearchParams(window.location.search);

        // // Set new or modify existing parameter value. 
        // queryParams.set("myParam", "myValue");

        // // Replace current querystring with the new one.
        // history.replaceState(null, null, "?" + queryParams.toString());
    </script>

    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if ("serviceWorker" in navigator) {
            // Register a service worker hosted at the root of the
            // site using the default scope.
            navigator.serviceWorker.register("/sw.js").then(
                (registration) => {
                    console.log("Service worker registration succeeded:", registration);
                },
                (error) => {
                    console.error(`Service worker registration failed: ${error}`);
                },
            );
        } else {
            console.error("Service workers are not supported.");
        }
    </script>
</body>

</html>
