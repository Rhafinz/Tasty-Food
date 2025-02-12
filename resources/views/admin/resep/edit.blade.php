@extends('layouts.admin')
@section('content')
    <div class="card m-4 card-success card-outline mb-4">
        <div class="card-header">
            <h3 class="card-title">Resep</h3>
            <div class="float-end">
                <a href="{{ route('resep.index') }}" class="btn btn-sm btn-primary">Back</a>
            </div>
        </div> <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped">
                <div class="ms-auto">
                </div>
        </div>
        <div class="card-body">
            <form action="{{ route('resep.update', $reseps->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="foto" class="form-label">Nama Resep</label>
                    <input type="text" name="nama_resep" class="form-control @error('nama_resep') is-invalid @enderror"
                        id="inputUserstatus" placeholder="Nama Resep" value="{{ old('nama_resep', $reseps->nama_resep) }}">
                    @error('nama_resep')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" rows="4"
                        placeholder="Deskripsi">{{ old('deskripsi', $reseps->deskripsi) }}</textarea>
                    @error('deskripsi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="bahan" class="form-label">Bahan</label>
                    <textarea name="bahan" class="form-control @error('bahan') is-invalid @enderror" id="bahan" rows="4"
                        placeholder="Bahan">{{ old('bahan', $reseps->bahan) }}</textarea>
                    @error('bahan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Langkah</label>
                    <textarea name="langkah" class="form-control @error('langkah') is-invalid @enderror" id="langkah" rows="4"
                        placeholder="Langkah">{{ old('langkah', $reseps->langkah) }}</textarea>
                    @error('langkah')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Gambar</label>
                    <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror"
                        id="inputUserstatus" placeholder="gambar">
                    @error('gambar')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-primary px-4">Submit</button>
                        <button type="reset" class="btn btn-warning  px-4">Reset</button>
                    </div>
                </div>
        </div>
        </form>
        </table>
        {{-- {!! $resepes->withQueryString()->links('pagination::bootstrap-4') !!} --}}
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
