@extends('layouts.admin')
@section('content')
    <div class="card m-4 border-0 shadow-lg rounded-4">
        <div class="card-header bg-success text-white d-flex align-items-center">
            <h3 class="card-title mb-0">Edit Resep</h3>
            <a href="{{ route('resep.index') }}" class="btn btn-light btn-sm shadow-sm ms-auto">
                <i class="fa-solid fa-arrow-left"></i> Back
            </a>
        </div>

        <div class="card-body p-4">
            <form action="{{ route('resep.update', $reseps->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nama_resep" class="form-label fw-bold">Nama Resep</label>
                    <input type="text" name="nama_resep" class="form-control @error('nama_resep') is-invalid @enderror"
                        placeholder="Masukkan Nama Resep" value="{{ old('nama_resep', $reseps->nama_resep) }}">
                    @error('nama_resep')
                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
                        rows="4" placeholder="Tulis deskripsi...">{{ old('deskripsi', $reseps->deskripsi) }}</textarea>
                    @error('deskripsi')
                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="bahan" class="form-label fw-bold">Bahan</label>
                    <textarea name="bahan" class="form-control @error('bahan') is-invalid @enderror"
                        rows="4" placeholder="Tulis bahan-bahan...">{{ old('bahan', $reseps->bahan) }}</textarea>
                    @error('bahan')
                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="langkah" class="form-label fw-bold">Langkah</label>
                    <textarea name="langkah" class="form-control @error('langkah') is-invalid @enderror"
                        rows="4" placeholder="Tulis langkah-langkah...">{{ old('langkah', $reseps->langkah) }}</textarea>
                    @error('langkah')
                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label fw-bold">Gambar</label>
                    <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror">
                    @error('gambar')
                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-success px-4">
                        <i class="fa-solid fa-check"></i> Submit
                    </button>
                    <button type="reset" class="btn btn-warning text-white px-4">
                        <i class="fa-solid fa-undo"></i> Reset
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

<script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>
<script>
    document.querySelectorAll("textarea").forEach((el) => {
        ClassicEditor.create(el).catch(error => console.error(error));
    });
</script>
