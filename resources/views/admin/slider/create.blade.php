@extends('layouts.admin')
@section('content')
    <div class="card m-4 card-primary card-outline mb-4">
        <div class="card-header">
            <h3 class="card-title">Slider</h3>
            <div class="float-end">
                <a href="{{ route('slider.index') }}" class="btn btn-sm btn-primary">Back</a>
            </div>
        </div> <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped">
                <div class="ms-auto">
                </div>
            </div>
                <div class="card-body">
                    <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="foto" class="form-label">Slider</label>
                            <input type="file" name="slider" class="form-control @error('slider') is-invalid @enderror"
                                id="inputUserstatus" placeholder="slider">
                            @error('slider')
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
            {{-- {!! $slideres->withQueryString()->links('pagination::bootstrap-4') !!} --}}
        </div> <!-- /.card-body -->
    </div> <!-- /.card -->
@endsection

