@extends('layouts.admin')
@section('content')
<h6 class="mb-0 text-uppercase">DataTable Galeri | Index</h6>
    <div class="card m-4">
        <div class="card-header">
            <div class="float-end">
                <a href="{{ route('galeri.create') }}" class="btn btn-sm btn-primary">Add</a>
            </div>
        </div> <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Images</th>
                        <th style="text-align: center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @forelse ($galeries as $data)
                        <tr class="align-middle">
                            <td>{{ $no++ }}</td>
                            <td>
                                <img src="{{ asset('/storage/galeries/' . $data->img) }}" class="rounded"
                                style="width: 150px; height: 150px; object-fit: cover;">
                            </td>
                            <td class="text-center">
                                <form action="{{ route('galeri.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="action-buttons-grid">
                                        <a href="{{ route('galeri.edit', $data->id) }}"
                                            class="btn btn-sm btn-success">Edit</a>
                                        <a href="{{ route('galeri.destroy', $data->id) }}" class="btn btn-sm btn-danger"
                                            data-confirm-delete="true">Delete</a>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">
                                Data Data Belum Tersedia.
                            </td>
                    @endforelse
                </tbody>
            </table>
            {{-- {!! $galeries->withQueryString()->links('pagination::bootstrap-4') !!} --}}
        </div> <!-- /.card-body -->
    </div> <!-- /.card -->
@endsection
