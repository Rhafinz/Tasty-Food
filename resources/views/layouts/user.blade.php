<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DelishFood</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/ASET/DelishFood_Icon.png') }}">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('front/assets/design-style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/navbar-design.css') }}">
</head>

<body>
    {{-- navbar --}}
    @include('layouts.frontend.nav2')

    @yield('content')

    {{-- footer --}}
    @include('layouts.frontend.footer')


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <!-- leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="{{ asset('front/js/map.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- jQuery and other dependencies (if needed) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    @include('sweetalert::alert')
    <script>
        $(document).ready(function() {
            lightbox.option({
                'resizeDuration': 200,
                'wrapAround': true
            });
        });
    </script>
<style>
    .lb-image {
    max-width: 90vw !important; /* Agar gambar tidak terlalu besar */
    max-height: 90vh !important;
    object-fit: contain !important; /* Hindari gambar gepeng */
}

.lb-outerContainer {
    display: flex;
    align-items: center;
    justify-content: center;
}

.lb-container {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

</style>
</body>

</html>
