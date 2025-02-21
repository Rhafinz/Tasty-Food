@extends('layouts.user')

@section('content')
    <div class="content text-center">
        <h2><b>RESEP</b></h2>
    </div>
    <div class="container mt-5">
        <div class="card p-4 shadow-lg rounded text-center"
            style="background: linear-gradient(135deg, #FFF3E0, #FFE082); border: none; border-left: 10px solid #F9A825;">
            <img src="{{ asset('/storage/reseps/' . $recipe->gambar) }}" class="img-fluid mx-auto d-block"
                style="max-height: 350px; border-radius: 20px; object-fit: cover;" alt="{{ $recipe->nama_resep }}">
            <h2 class="mt-3"
                style="color: #F57F17; font-weight: bold; text-transform: uppercase; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">
                {{ $recipe->nama_resep }}</h2>
            <p class="text-dark" style="font-size: 18px; font-style: italic;">{!! $recipe->deskripsi !!}</p>

            <!-- Menampilkan Rating -->
            <div class="mt-3">
                <h5 class="text-dark">
                    Rating:
                    @for ($i = 1; $i <= 5; $i++)
                        <i class="fas fa-star" style="color: {{ $i <= round($recipe->rating) ? '#FF7043' : '#ccc' }};"></i>
                    @endfor
                    <span style="color: #F57F17; font-weight: bold;">{{ number_format($recipe->rating, 1) }}/5</span>
                </h5>
            </div>
        </div>

        <!-- Menyamakan Tinggi Card Otomatis -->
        <div class="row mt-4 gx-3">
            <div class="col-md-6 d-flex">
                <div class="p-4 rounded shadow-lg d-flex flex-column w-100"
                    style="background: #E8F5E9; border-left: 10px solid #4CAF50;">
                    <h4 class="fw-bold" style="color: #2E7D32;">Bahan-Bahan</h4>
                    <div class="ps-3 flex-grow-1" style="font-size: 16px; line-height: 1.8;">{!! $recipe->bahan !!}</div>
                </div>
            </div>
            <div class="col-md-6 d-flex">
                <div class="p-4 rounded shadow-lg d-flex flex-column w-100"
                    style="background: #E8F5E9; border-left: 10px solid #4CAF50;">
                    <h4 class="fw-bold" style="color: #2E7D32;">Langkah-Langkah</h4>
                    <div class="ps-3 flex-grow-1" style="font-size: 16px; line-height: 1.8;">{!! $recipe->langkah !!}</div>
                </div>
            </div>
        </div>

        <!-- Form untuk User Memberikan Rating -->
        <div class="card mt-4 p-4 shadow-lg rounded" style="background: #FFF8E1; border-left: 10px solid #FF7043;">
            <h4 class="fw-bold" style="color: #D84315;">Beri Rating</h4>
            <form action="{{ route('rating.store', $recipe->id) }}" method="POST">
                @csrf
                <div class="d-flex flex-column">
                    <!-- Rating Bintang -->
                    <div class="rating-stars mb-3">
                        <input type="radio" id="star5" name="jumlah_rating" value="5" required />
                        <label for="star5"><i class="fa-solid fa-star"></i></label>
                        <input type="radio" id="star4" name="jumlah_rating" value="4" />
                        <label for="star4"><i class="fa-solid fa-star"></i></label>
                        <input type="radio" id="star3" name="jumlah_rating" value="3" />
                        <label for="star3"><i class="fa-solid fa-star"></i></label>
                        <input type="radio" id="star2" name="jumlah_rating" value="2" />
                        <label for="star2"><i class="fa-solid fa-star"></i></label>
                        <input type="radio" id="star1" name="jumlah_rating" value="1" />
                        <label for="star1"><i class="fa-solid fa-star"></i></label>
                    </div>

                    <button type="submit" class="btn text-white mt-2"
                        style="background: #FF7043; font-weight: bold; border-radius: 8px; padding: 8px 20px;">
                        Kirim
                    </button>
                </div>
            </form>
        </div>

        <div class="text-center">
            <a href="{{ url('/') }}" class="btn mt-4 text-white"
                style="background: #F57F17; font-size: 18px; padding: 12px 25px; border-radius: 12px; font-weight: bold; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
                <i class="fa-solid fa-arrow-left"></i> Kembali ke Beranda
            </a>
        </div>
    </div>
@endsection
<style>
    .rating-stars {
        display: flex;
        flex-direction: row-reverse; /* Ini bikin urutannya dari kiri ke kanan */
        justify-content: start;
        gap: 5px;
    }
    .rating-stars input {
        display: none;
    }
    .rating-stars label {
        font-size: 2rem;
        color: #ccc;
        cursor: pointer;
        transition: color 0.2s ease-in-out;
    }
    .rating-stars input:checked ~ label {
        color: #FF7043;
    }
</style>
