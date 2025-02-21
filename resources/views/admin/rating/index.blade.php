@extends('layouts.admin')
@section('content')
<h6 class="mb-0 text-uppercase">DataTable Rating | Index</h6>
    <div class="card m-4">
        <div class="card-header">
            <div class="float-end">
            </div>
        </div> <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th class="text-center">User</th>
                        <th class="text-center">Resep</th>
                        <th class="text-center">Rating</th>
                        <th style="text-align: center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @forelse ($ratings as $data)
                        <tr class="align-middle text-center">
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->user->name }}</td>
                            <td>{{ $data->resep->nama_resep}}</td>
                            <td>
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $data->jumlah_rating)
                                        <i class="fa-solid fa-star text-warning"></i>
                                    @else
                                        <i class="fa-regular fa-star text-secondary"></i>
                                    @endif
                                @endfor
                            </td>

                            <td class="text-center">
                                <form action="{{ route('rating.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="action-buttons-grid">
                                        <a href="{{ route('rating.destroy', $data->id) }}" class="btn btn-sm btn-danger"
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
            {{-- {!! $ratinges->withQueryString()->links('pagination::bootstrap-4') !!} --}}
        </div> <!-- /.card-body -->
    </div> <!-- /.card -->
@endsection
