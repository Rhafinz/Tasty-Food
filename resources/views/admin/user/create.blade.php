@extends('layouts.admin')

@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Dasboard</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Admin</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <a href="{{route('user.index')}}" type="button" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
<h6 class="mb-0 text-uppercase">Add Data User</h6>
<hr>
<div class="card">
    <div class="card-body">
        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="inputUsername" class="form-label">Name</label>
                <input type="text" name="name"
                    class="form-control @error('name') is-invalid @enderror" id="inputUsername"
                    placeholder="Name">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="inputEmailAddress" class="form-label">Email Address</label>
                <input type="email" name="email"
                    class="form-control @error('email') is-invalid @enderror"
                    id="inputEmailAddress" placeholder="name@example.com">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="inputChoosePassword" class="form-label">Password</label>
                <div class="input-group" id="show_hide_password">
                    <input type="password" name="password"
                        class="form-control @error('password') is-invalid @enderror""
                        id="inputChoosePassword" placeholder="Enter Password">
                    <a href="javascript:;" class="input-group-text bg-transparent"><i
                            class="bi bi-eye-slash-fill"></i></a>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3"> <br>
                    <label for="inputRole" class="form-label">Role</label>
                    <select id="isAdmin" name="isAdmin" class="form-select @error('isAdmin') is-invalid @enderror">
                        <option selected="">Choose...</option>
                        <option value="0">User</option>
                        <option value="1">Admin</option>
                    </select>
                    @error('isAdmin')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-grd-primary px-4">Submit</button>
                        <button type="reset" class="btn btn-grd-royal px-4">Reset</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bi-eye-slash-fill");
                    $('#show_hide_password i').removeClass("bi-eye-fill");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bi-eye-slash-fill");
                    $('#show_hide_password i').addClass("bi-eye-fill");
                }
            });
        });
    </script>
@endpush
