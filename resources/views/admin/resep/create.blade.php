@extends('layouts.admin')
@section('content')
    <div class="card m-4 shadow-sm border-0 rounded-3">
        <div class="card-header bg-primary text-white d-flex align-items-center">
            <h3 class="card-title mb-0">Tambah Resep</h3>
            <a href="{{ route('resep.index') }}" class="btn btn-light btn-sm shadow-sm ms-auto">
                <i class="fa-solid fa-arrow-left"></i> Back
            </a>
        </div> <!-- /.card-header -->

        <div class="card-body">
            <form action="{{ route('resep.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="nama_resep" class="form-label fw-semibold">Nama Resep</label>
                    <input type="text" name="nama_resep" class="form-control @error('nama_resep') is-invalid @enderror"
                        placeholder="Masukkan nama resep">
                    @error('nama_resep')
                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label fw-semibold">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="4"
                        placeholder="Tambahkan deskripsi"></textarea>
                    @error('deskripsi')
                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="bahan" class="form-label fw-semibold">Bahan</label>
                    <textarea name="bahan" class="form-control @error('bahan') is-invalid @enderror" rows="4"
                        placeholder="Masukkan bahan"></textarea>
                    @error('bahan')
                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="langkah" class="form-label fw-semibold">Langkah</label>
                    <textarea name="langkah" class="form-control @error('langkah') is-invalid @enderror" rows="4"
                        placeholder="Tulis langkah-langkah"></textarea>
                    @error('langkah')
                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label fw-semibold">Gambar</label>
                    <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror">
                    @error('gambar')
                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                    <!-- Input Rating -->
                    {{-- <div class="mb-3">
                        <label class="mb-2"><b>Rating</b></label>
                        <div class="rating">
                            <input type="hidden" id="ratingInput" name="rating" value="1">
                            <i class="fa-solid fa-star" value="1"></i>
                            <i class="fa-solid fa-star" value="2"></i>
                            <i class="fa-solid fa-star" value="3"></i>
                            <i class="fa-solid fa-star" value="4"></i>
                            <i class="fa-solid fa-star" value="5"></i>
                        </div>
                        @error('rating')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div> --}}

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary px-4">
                        <i class="fa-solid fa-check"></i> Submit
                    </button>
                    <button type="reset" class="btn btn-warning text-white px-4">
                        <i class="fa-solid fa-undo"></i> Reset
                    </button>
                </div>
            </form>
        </div> <!-- /.card-body -->
    </div> <!-- /.card -->
@endsection

<script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>
<script>
    document.querySelectorAll("textarea").forEach((el) => {
        ClassicEditor.create(el)
            .catch(error => console.error(error));
    });
</script>
