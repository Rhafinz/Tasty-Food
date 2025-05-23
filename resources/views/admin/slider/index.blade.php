@extends('layouts.admin')
@section('content')
<h6 class="mb-0 text-uppercase">DataTable Slider | Index</h6>
    <div class="card m-4">
        <div class="card-header">
            <div class="float-end">
                <a href="{{ route('slider.create') }}" class="btn btn-sm btn-primary">Add</a>
            </div>
        </div> <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th class="text-center">Slider</th>
                        <th style="text-align: center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @forelse ($sliders as $data)
                        <tr class="align-middle">
                            <td>{{ $no++ }}</td>
                            <td align="center">
                                <img src="{{ asset('/storage/sliders/' . $data->slider) }}" class="rounded"
                                    style="width: 250px; height: 150px; object-fit: cover;">
                            </td>
                            <td class="text-center">
                                <form action="{{ route('slider.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="action-buttons-grid">
                                        <a href="{{ route('slider.edit', $data->id) }}"
                                            class="btn btn-sm btn-success">Edit</a>
                                        <a href="{{ route('slider.destroy', $data->id) }}" class="btn btn-sm btn-danger"
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
            {{-- {!! $slideres->withQueryString()->links('pagination::bootstrap-4') !!} --}}
        </div> <!-- /.card-body -->
    </div> <!-- /.card -->
@endsection
