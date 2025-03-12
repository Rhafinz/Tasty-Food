@extends('layouts.user')

@section('content')
    <div class="content text-center">
        <h2><b>RESEP KAMI</b></h2>
    </div>
    <!-- Pesan Error Jika User Belum Login -->
    <section class="bg-light p-4 rounded">
        @guest
            @if (session('error'))
                <div class="alert alert-danger text-center">
                    {!! session('error') !!}
                </div>
            @endif
        @endguest
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
                    {{-- Menampilkan Rating Rata-Rata --}}
                    <div class="mt-3">
                        <span class="fw-bold">Rating: </span>
                        @php
                            $fullStars = floor($averageRating); // Bintang penuh
                            $decimal = $averageRating - $fullStars; // Ambil desimal dari rating (misal 0.8)
                            $emptyStars = 5 - ceil($averageRating); // Hitung sisa bintang kosong
                        @endphp

                        {{-- Bintang penuh --}}
                        @for ($i = 0; $i < $fullStars; $i++)
                            <i class="fas fa-star" style="color: #FF6F00;"></i>
                        @endfor

                        {{-- Bintang terakhir yang terisi sebagian --}}
                        @if ($decimal > 0)
                            <span class="half-star">
                                <i class="fas fa-star" style="color: #ccc;"></i> {{-- Bintang kosong sebagai dasar --}}
                                <i class="fas fa-star star-overlay"
                                    style="color: #FF6F00; width: {{ $decimal * 100 }}%;"></i> {{-- Bintang terisi sebagian --}}
                            </span>
                        @endif

                        {{-- Bintang kosong --}}
                        @for ($i = 0; $i < $emptyStars; $i++)
                            <i class="far fa-star" style="color: #ccc;"></i>
                        @endfor

                        <span class="fw-bold">({{ number_format($averageRating, 1) }}/5)</span>
                    </div>

                    {{-- Form Kirim Rating --}}
                    <div class="mt-3">
                        @php
                            $userRating = $recipe
                                ->ratings()
                                ->where('users_id', auth()->id())
                                ->first(); // Cek apakah user sudah memberi rating
                        @endphp

                        <form
                            action="{{ $userRating ? route('rating.update', $recipe->id) : route('rating.store', $recipe->id) }}"
                            method="POST">
                            @csrf
                            @if ($userRating)
                                @method('PUT') {{-- Ubah method ke PUT jika user sudah memberi rating --}}
                            @endif
                            {{-- Tampilkan teks setelah tombol biar lebih rapi --}}
                            <div class="mt-3">
                                <span class="fw-bold">{{ $userRating ? 'Edit Rating Anda' : 'Beri Rating' }}</span>
                            </div>

                            <div class="rating d-flex flex-row-reverse justify-content-end">
                                @for ($i = 5; $i >= 1; $i--)
                                    <input type="radio" id="star{{ $i }}" name="jumlah_rating"
                                        value="{{ $i }}" required
                                        {{ $userRating && $userRating->jumlah_rating == $i ? 'checked' : '' }}>
                                    <label for="star{{ $i }}" title="{{ $i }} stars">
                                        <i class="fa-solid fa-star"></i>
                                    </label>
                                @endfor
                            </div>
                            <button type="submit" class="btn btn-warning mt-2 w-100 custom-btn">
                                {{ $userRating ? 'Ubah Rating' : 'Kirim Rating' }}
                            </button>
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
    .half-star {
        position: relative;
        display: inline-block;
    }

    .star-overlay {
        position: absolute;
        top: 0;
        left: 0;
        overflow: hidden;
        display: inline-block;
        white-space: nowrap;
    }

    .custom-btn {
        font-size: 18px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        border: none;
        border-radius: 12px;
        padding: 14px;
        background: linear-gradient(90deg, #FFC107, #FF9800);
        color: white;
        transition: all 0.4s ease-in-out;
        box-shadow: 0 5px 15px rgba(255, 152, 0, 0.4);
        position: relative;
        overflow: hidden;
    }

    .custom-btn::before {
        content: "";
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.2);
        transition: all 0.4s ease-in-out;
    }

    .custom-btn:hover::before {
        left: 100%;
    }

    .custom-btn:hover {
        background: linear-gradient(90deg, #FF9800, #FF5722);
        box-shadow: 0 8px 20px rgba(255, 87, 34, 0.5);
        transform: scale(1.05);
    }

    .custom-btn:active {
        transform: scale(0.98);
        box-shadow: 0 3px 10px rgba(255, 87, 34, 0.4);
    }


    /* .rotating-image {
        animation: rotate 10s linear infinite;
    }

    @keyframes rotate {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    } */

    .vr {
        border-left: 2px solid #ccc;
        height: 100%;
    }

    /* Rating Styling */
    .rating {
        display: flex;
        flex-direction: row-reverse;
        justify-content: end;
        /* Tetap di kanan */
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

    .rating input:checked~label i,
    .rating label:hover i,
    .rating label:hover~label i {
        color: #FF6F00;
        /* Warna bintang saat dipilih */
    }
</style>
