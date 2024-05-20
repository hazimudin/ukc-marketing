<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>UKC Marketing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Paviccon ico -->
    <link rel="icon" href="{{ asset('assets/icons/mipmap-hdpi/ic_launcher.png') }}" type="image/x-icon" />

    <!-- Styles -->
    <link id="mystyle" href="{{ asset('assets/css/mystyle.css') }}" rel="stylesheet" />

    <!-- PWA  -->
    <meta name="msapplication-TileColor" content="#4CAF50">
    <meta name="theme-color" content="#4CAF50" />
    <link rel="mask-icon" href="{{ asset('assets/icons/mipmap-xxhdpi/ic_launcher.png') }}" color="#4CAF50">
    <link rel="apple-touch-icon" href="{{ asset('logo.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">

</head>

<body>


    <div class="linePreloader d-none"></div>

    <section id="loading">
        <div id="loading-content"></div>
    </section>

    <script>
        function showLoading(delay = 6000) {
            document.querySelector('.linePreloader').classList.remove('d-none');

            setTimeout(function() {
                document.querySelector('.linePreloader').classList.add('d-none');
            }, delay);
        }

        function showClasicLoading() {
            document.querySelector('#loading').classList.add('loading');
            document.querySelector('#loading-content').classList.add('loading-content');
        }
        showLoading();
    </script>
    <div id="app">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script>
        function hideLoading() {
            document.querySelector('.linePreloader').classList.add('d-none');
        }

        function hideClasicLoading() {
            document.querySelector('#loading').classList.remove('loading');
            document.querySelector('#loading-content').classList.remove('loading-content');
        }

        hideLoading();
    </script>

    {{-- <script src="{{ asset('/sw.js') }}"></script> --}}
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
