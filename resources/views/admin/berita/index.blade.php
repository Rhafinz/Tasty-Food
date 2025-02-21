@extends('layouts.admin')
@section('content')
    <h6 class="mb-0 text-uppercase">DataTable Berita | Index</h6>
    <div class="card m-4">
        <div class="card-header">
            <div class="float-end">
                <a href="{{ route('berita.create') }}" class="btn custom-btn btn-sm btn-primary">
                    <i class="fa-solid fa-plus"></i> Tambah Berita
                </a>
            </div>
        </div> <!-- /.card-header -->
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-hover text-center align-middle">
                    <thead>
                        <tr>
                            <th style="width: 5%">No</th>
                            <th style="width: 15%">Images</th>
                            <th style="width: 20%">Judul</th>
                            <th style="width: 40%">Deskripsi</th>
                            <th style="width: 10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @forelse ($beritas as $data)
                            <tr class="align-middle">
                                <td class="fw-bold">{{ $no++ }}</td>
                                <td>
                                    <img src="{{ asset('/storage/beritas/' . $data->image) }}"
                                        style="width: 120px; height: 120px; object-fit: cover;">
                                </td>
                                <td>{{ Str::limit($data->judul, 30, '...') }}</td>
                                <td>{{ Str::limit(strip_tags($data->deskripsi), 50, '...') }}</td>
                                <td>
                                    <form action="{{ route('berita.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="d-flex justify-content-center gap-2">
                                            <a href="{{ route('berita.edit', $data->id) }}"
                                                class="btn custom-btn btn-success">
                                                <i class="fa-solid fa-pen-to-square"></i> Edit
                                            </a>
                                            <a href="{{ route('berita.show', $data->id) }}"
                                                class="btn custom-btn btn-warning text-white">
                                                <i class="fa-solid fa-eye"></i> Show
                                            </a>
                                            <a href="{{ route('berita.destroy', $data->id) }}"
                                                class="btn custom-btn btn-danger" data-confirm-delete="true"> <i
                                                    class="fa-solid fa-trash"></i> Delete
                                            </a>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center fw-bold text-muted">
                                    Data belum tersedia.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div> <!-- /.card-body -->
    </div> <!-- /.card -->

    <style>
        .custom-btn {
            border-radius: 10px;
            padding: 8px 16px;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
            border: none;
        }

        .custom-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .table-hover tbody tr:hover {
            background-color: rgba(0, 0, 255, 0.05);
        }

        .table thead th {
            text-transform: uppercase;
            font-size: 13px;
            font-weight: bold;
            text-align: center;
            white-space: nowrap;
        }
    </style>
@endsection
