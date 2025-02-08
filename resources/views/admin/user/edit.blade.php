@extends('layouts.admin')
@section('content')
    <div class="card m-4 card-success card-outline mb-4">
        <div class="card-header">
            <h3 class="card-title">User</h3>
            <div class="float-end">
                <a href="{{ route('user.index') }}" class="btn btn-sm btn-primary">Back</a>
            </div>
        </div> <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped">
                <div class="ms-auto">
                </div>
        </div>
        <div class="card-body">
            <form action="{{ route('user.update', ['user' => $users->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="foto" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        id="inputUserstatus" placeholder="Name" value="{{old('name', $users->name)}}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        id="inputUserstatus" placeholder="Email" value="{{old('email', $users->email)}}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" placeholder="Password">
                        <span class="input-group-text" id="togglePassword">
                            <i class="fas fa-eye"></i>
                        </span>
                    </div>
                    @error('password')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                    <div class="input-group">
                        <input type="password" name="password_confirmation" class="form-control"
                            id="password_confirmation" placeholder="Ulangi Password">
                        <span class="input-group-text" id="toggleConfirmPassword">
                            <i class="fas fa-eye"></i>
                        </span>
                    </div>
                </div>

                <!-- Tambahkan Font Awesome jika belum ada -->
                <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        let togglePassword = document.getElementById('togglePassword');
                        let passwordField = document.getElementById('password');

                        togglePassword.addEventListener('click', function() {
                            if (passwordField.type === "password") {
                                passwordField.type = "text";
                                togglePassword.innerHTML = '<i class="fas fa-eye-slash"></i>';
                            } else {
                                passwordField.type = "password";
                                togglePassword.innerHTML = '<i class="fas fa-eye"></i>';
                            }
                        });
                    });
                </script>
                <div class="mb-3">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-primary px-4">Submit</button>
                        <button type="reset" class="btn btn-warning  px-4">Reset</button>
                    </div>
                </div>
        </div>
        </form>
        </table>
        {{-- {!! $tentanges->withQueryString()->links('pagination::bootstrap-4') !!} --}}
    </div> <!-- /.card-body -->
    </div> <!-- /.card -->
@endsection
