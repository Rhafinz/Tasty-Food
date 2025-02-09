{{-- resources/views/messages/show.blade.php --}}
@extends('layouts.admin')

@section('content')
<div class="card m-4">
    <div class="card-header">
        <h3 class="card-title">Detail Resep</h3>
        <div class="float-end">
            <a href="{{ route('resep.index') }}" class="btn btn-sm btn-primary">Back</a>
        </div>
    </div>

    <div class="card-body d-flex align-items-start">
        <div class="news-image me-3">
            <img src="{{ asset('/storage/reseps/' . $reseps->gambar) }}" alt="{{ $reseps->nama_resep }}" class="img-fluid" style="width: 350px; max-width: 150px; height: auto; border-radius: 18px;">
        </div>
        <div class="news-content d-flex flex-column">
            <h4>Judul: {{ $reseps->nama_resep }}</h4>
            <p><strong>Deskripsi :</strong> {{ $reseps->deskripsi }}</p>
            <p><strong>Bahan :</strong> {{ $reseps->bahan }}</p>
            <p><strong>Langkah :</strong> {{ $reseps->langkah }}</p>
            <div class="mt-auto">
                <hr>
                <p class="reseps-date mb-3"><small>Dibuat pada: {{ $reseps->created_at->format('d F Y') }}</small></p>
            </div>
        </div>
    </div>
</div>

@endsection
