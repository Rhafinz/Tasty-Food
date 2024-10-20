@extends('layouts.admin')
@section('content')
    <div class="card m-4">
        <div class="card-header">
            <h3 class="card-title">Tentang</h3>
            <div class="float-end">
                <a href="{{ route('tentang.create') }}" class="btn btn-sm btn-primary">Add</a>
            </div>
        </div> <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Judul</th>
                        <th>Konten</th>
                        <th>Deskripsi</th>
                        <th style="text-align: center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @forelse ($tentangs as $data)
                        <tr class="align-middle">
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->judul }}</td>
                            <td>{{ $data->konten }}</td>
                            <td>{{ $data->deskripsi }}</td>
                            <td class="text-center">
                                <form action="{{ route('tentang.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="action-buttons-grid">
                                        <a href="{{ route('tentang.edit', $data->id) }}"
                                            class="btn btn-sm btn-success mb-3">Edit</a>
                                        <a href="{{ route('tentang.destroy', $data->id) }}" class="btn btn-sm btn-danger"
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
