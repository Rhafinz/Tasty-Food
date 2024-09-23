<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TastyFood</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front/assets/style.css')}}">
    <!-- Include the thin variant -->


</head>

<style>
    body,
    html {
        margin: 0;
        padding: 0;
        height: 100%;
        width: 100%;
        font-family: 'Poppins', sans-serif;
        background-color: #f4f4f4;
    }

    .background-image {
        background-size: cover;
        background-position: center;
        height: 100%;
        width: 100%;
        position: relative;
        color: white;
        overflow-x: hidden;
        overflow-x: hidden;
    }

    .hero {
        background-image: url('{{ asset('assets/ASET/img-4.png') }}');
        background-size: cover;
        height: 125vh;
        width: 125vh;
        position: absolute;
        top: -144px;
        right: -195px;
        color: white;
        z-index: 1;
    }

    .navbar-brand {
        font-size: 1.7rem;
        font-family: Arial, sans-serif;
        margin-left: -80px;
        color: #000000;
    }

    .navbar {
        background: transparent;
        padding: 20px;
    }

    .container h1 {
        font-size: 3em;
        font-weight: bold;
    }

    .navbar-nav .nav-link {
        font-weight: bold;
        margin-right: 20px;
        margin-top: 10px;
    }

    .navbar-nav .nav-link:hover {
        color: #ddd;
    }

    .content {
        position: absolute;
        top: 380px;
        left: 50px;
        /* Adjusted to provide more space on the sides */
        right: 10%;
        /* Adjusted to provide more space on the sides */
        max-width: 655px;
        /* Reduced width to make content smaller */
        transform: translateY(-50%);
        padding: 0 20px;
        /* Optional: Add padding for better spacing inside */
        color: #000000;
    }

    .content h1 {
        font-size: 3em;
        font-weight: 300px;
    }

    .black-line {
        border: 0;
        height: 2px;
        border-top: 3px solid #000000;
        /* Thickness of the line */
        background-color: #000000;
        /* Black color */
        width: 12%;
        /* Fixed width */
        margin: 20px 0;
        /* Margin to center and space out */
        position: relative;
        /* Keeps it in place relative to its container */
    }

    p {
        font-weight: bold;
    }

    .btn-black {
            display: inline-block;
            padding: 15px 30px;
            font-size: 18px;
            font-weight: 600; /* Bold text */
            color: white; /* Teks berwarna putih */
            background-color: black; /* Warna latar belakang tombol hitam */
            border: none; /* Menghapus border default */
            text-align: center;
            text-decoration: none; /* Menghapus garis bawah */
            cursor: pointer; /* Menampilkan pointer saat hover */
            transition: background-color 0.3s ease; /* Efek transisi saat hover */
            width: 300px; /* Lebar tombol */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btn-black:hover {
            background-color: #333; /* Warna latar belakang saat hover */
        }
</style>

<body>
    <div class="background-image">
        <div class="container pt-4">
            <div class="hero"></div>
            <nav class="navbar navbar-expand-lg pe-4">
                <h1><a class="navbar-brand" href="#">TASTY FOOD</a></h1>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">TENTANG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">BERITA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">GALERI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">KONTAK</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="content">
            <div class="black-line mb-3"></div><br>
            <h1 style="'Poppins', sans-serif" class="mb-3">HEALTHY</h1>
            <h1 style="font-family: Arial, sans-serif; font-weight: bold" class="mb-3"><b>TASTY FOOD</b></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui
                diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex.
                Fusce sit amet viverra ante.</p>
            <a href="#" class="btn-black">TENTANG KAMI</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
