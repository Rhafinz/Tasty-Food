@extends('layouts.admin')

@section('content')
    <div class="container my-4">
        <div class="card shadow-lg border-0 rounded-4 p-3">
            <div class="card-header bg-primary text-white rounded-3 position-relative">
                <h3 class="card-title mb-0 text-white">Detail Resep</h3>
                <a href="{{ route('resep.index') }}"
                    class="btn btn-light btn-sm shadow-sm position-absolute top-50 end-0 translate-middle-y me-3">
                    <i class="fa-solid fa-arrow-left"></i> Kembali
                </a>
            </div>


            <div class="card-body d-flex flex-column flex-md-row align-items-start gap-4">
                <!-- Gambar Resep -->
                <div class="news-image text-center">
                    <img src="{{ asset('/storage/reseps/' . $reseps->gambar) }}" alt="{{ $reseps->nama_resep }}"
                        class="img-fluid rounded-3 shadow-sm" style="width: 350px; max-width: 100%; height: auto;">
                </div>

                <!-- Konten Resep -->
                <div class="news-content">
                    <h4 class="fw-bold text-primary">{{ $reseps->nama_resep }}</h4>
                    <p class="text-muted"><i class="fa-solid fa-clock"></i> Dibuat pada:
                        {{ $reseps->created_at->format('d F Y') }}</p>
                    <hr>

                    <h5 class="fw-semibold text-dark"><i class="fa-solid fa-info-circle"></i> Deskripsi</h5>
                    <p class="text-secondary">{!! $reseps->deskripsi !!}</p>

                    <h5 class="fw-semibold text-dark mt-3"><i class="fa-solid fa-carrot"></i> Bahan</h5>
                    <p class="text-secondary">{!! $reseps->bahan !!}</p>

                    <h5 class="fw-semibold text-dark mt-3"><i class="fa-solid fa-list-ol"></i> Langkah</h5>
                    <p class="text-secondary">{!! $reseps->langkah !!}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
