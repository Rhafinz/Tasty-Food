@extends('layouts.user')

@section('content')
    <div class="content text-center">
        <h2><b>RESEP KAMI</b></h2>
    </div>
    <section class="bg-light p-4 rounded">
        <div class="container mt-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $recipe->nama_resep }}</li>
                </ol>
            </nav>

            <div class="row mt-3">
                <div class="col-md-6 text-center">
                    <img src="{{ asset('/storage/reseps/' . $recipe->gambar) }}"
                        class="img-fluid rounded-circle shadow-sm rotating-image" alt="{{ $recipe->nama_resep }}">
                </div>
                <div class="col-md-6">
                    <h2 class="fw-bold">{{ $recipe->nama_resep }}</h2>
                    <p class="text-muted">{!! $recipe->deskripsi !!}</p>

                    {{-- Menampilkan Rating Rata-Rata --}}
                    <div class="mt-3">
                        <span class="fw-bold">Rating: </span>
                        @for ($i = 1; $i <= 5; $i++)
                            <i class="fas fa-star"
                                style="color: {{ $i <= round($averageRating) ? '#FF6F00' : '#ccc' }};"></i>
                        @endfor
                        <span class="fw-bold">({{ number_format($averageRating, 1) }}/5)</span>
                    </div>

                    {{-- Form Kirim Rating --}}
                    <div class="mt-3">
                        <form action="{{ route('rating.store', $recipe->id) }}" method="POST">
                            @csrf
                            <span class="fw-bold">Beri Rating:</span>
                            <div class="rating">
                                @for ($i = 5; $i >= 1; $i--)
                                    <input type="radio" id="star{{ $i }}" name="jumlah_rating" value="{{ $i }}" required>
                                    <label for="star{{ $i }}" title="{{ $i }} stars">&#9733;</label>
                                @endfor
                            </div>
                            <button type="submit" class="btn btn-warning mt-2">Kirim Rating</button>
                        </form>
                    </div>

                    <div class="mt-3">
                        <span class="text-muted">Dibuat Pada
                            {{ \Carbon\Carbon::parse($recipe->created_at)->format('M d, Y') }}</span>
                    </div>
                </div>
            </div>
    </section>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-5">
                <h3 class="fw-bold">Bahan</h3>
                <p class="fw-bold">{!! $recipe->bahan !!}</p>
            </div>
            <div class="col-md-1 d-flex justify-content-center">
                <div class="vr"></div>
            </div>
            <div class="col-md-6">
                <h3 class="fw-bold">Cara Membuat</h3>
                <p class="fw-bold">{!! $recipe->langkah !!}</p>
            </div>
        </div>
    </div>
@endsection

<style>
    .rotating-image {
        animation: rotate 10s linear infinite;
    }

    @keyframes rotate {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .vr {
        border-left: 2px solid #ccc;
        height: 100%;
    }

    /* Rating Styling */
    .rating {
        display: flex;
        flex-direction: row-reverse;
        justify-content: center;
    }

    .rating input {
        display: none;
    }

    .rating label {
        font-size: 25px;
        color: #ccc;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .rating input:checked ~ label,
    .rating label:hover,
    .rating label:hover ~ label {
        color: #FF6F00;
    }
</style>
