@extends('layouts.admin')
@section('content')
    <div class="card m-4 card-primary card-outline mb-4">
        <div class="card-header">
            <h3 class="card-title">Berita</h3>
            <div class="float-end">
                <a href="{{ route('berita.index') }}" class="btn btn-sm btn-primary">Back</a>
            </div>
        </div> <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped">
                <div class="ms-auto">
                </div>
            </div>
                <div class="card-body">
                    <form action="{{ route('berita.update', $beritas->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="foto" class="form-label">Judul</label>
                            <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror"
                                id="inputUserstatus" placeholder="judul">
                            @error('judul')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
                                id="inputUserstatus" placeholder="deskripsi">
                            @error('deskripsi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                                id="inputUserstatus" placeholder="image">
                            @error('image')
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
            {{-- {!! $beritaes->withQueryString()->links('pagination::bootstrap-4') !!} --}}
        </div> <!-- /.card-body -->
    </div> <!-- /.card -->
@endsection

