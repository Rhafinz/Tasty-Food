@extends('layouts.user')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Carousel untuk Gambar -->
            <div id="resepCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('/storage/reseps/' . $resep->gambar) }}" class="d-block w-100 rounded shadow-lg" style="height: 400px; object-fit: cover;">
                    </div>
                    <!-- Jika ingin menambahkan lebih banyak gambar -->
                    {{-- @foreach ($resep->gambar_lainnya as $gambar) --}}
                    {{-- <div class="carousel-item">
                        <img src="{{ asset('/storage/reseps/' . $gambar) }}" class="d-block w-100 rounded shadow-lg" style="height: 400px; object-fit: cover;">
                    </div> --}}
                    {{-- @endforeach --}}
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#resepCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#resepCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>

            <!-- Detail Resep -->
            <div class="mt-4">
                <h1 class="fw-bold">{{ $resep->nama_resep }}</h1>
                <p class="text-muted">Dipublikasikan pada {{ $resep->created_at->format('d M Y') }}</p>
                <p class="fs-5">{{ $resep->deskripsi }}</p>

                <h4 class="mt-4 fw-bold">Bahan-Bahan</h4>
                <ul>
                    @foreach (explode("\n", $resep->bahan) as $bahan)
                        <li>{{ $bahan }}</li>
                    @endforeach
                </ul>

                <h4 class="mt-4 fw-bold">Langkah-Langkah</h4>
                <ol>
                    @foreach (explode("\n", $resep->langkah) as $langkah)
                        <li>{{ $langkah }}</li>
                    @endforeach
                </ol>
            </div>

            <!-- Tombol Kembali -->
            <a href="{{ route('resep.index') }}" class="btn btn-primary mt-3">
                <i class="fa-solid fa-arrow-left"></i> Kembali ke Daftar Resep
            </a>
        </div>
    </div>
</div>

<!-- Bootstrap Carousel Auto Play -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let carousel = new bootstrap.Carousel(document.querySelector('#resepCarousel'), {
            interval: 3000, // Ganti gambar setiap 3 detik
            ride: 'carousel'
        });
    });
</script>
@endsection
