@extends('layouts.user')

@section('content')
    <div class="content text-center">
        <h2><b>DETAIL BERITA</b></h2>
    </div>
    <div class="container news-detail my-4">
        <div class="row">
            <!-- Bagian Gambar -->
            <div class="col-12 col-md-6 mb-3">
                <div class="news-image">
                    <img src="{{ asset('/storage/beritas/' . $news->image) }}" alt="{{ $news->judul }}"
                        class="img-fluid rounded shadow">
                </div>
            </div>
            <!-- Bagian Teks -->
            <div class="col-12 col-md-6">
                <div class="news-text">
                    <h1 class="news-title mb-3">{{ $news->judul }}</h1>
                    <hr>
                    <p class="news-description mb-3">{{ $news->deskripsi }}</p>
                    <hr>
                    <p class="news-date mb-3">
                        <small>Dibuat pada: {{ $news->created_at->format('d F Y') }}</small>
                    </p>
                    <hr>
                    <p class="news-date mb-3">
                        <small>Diperbaharui pada: {{ $news->updated_at->format('d F Y') }}</small>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
