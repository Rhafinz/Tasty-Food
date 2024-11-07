@extends('layouts.admin')
@section('content')
    <div class="card m-4">
        <div class="card-header">
            <h3 class="card-title">Message</h3>
        </div> <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Subject</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Kapan Pesan Dibuat</th>
                        {{-- <th>Status</th> --}}
                        <th style="text-align: center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @forelse ($message as $data)
                        <tr class="align-middle">
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->subject }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->message }}</td>
                            <td>{{ $data->created_at ? $data->created_at->setTimezone('Asia/Jakarta')->format('d M Y H:i') : 'N/A' }}</td>
                            {{-- <td>
                                @if ($data->is_read)
                                    <i class="fa-regular fa-circle-check text-success"></i>
                                    <span class="text-success">Sudah Dibaca</span>
                                @else
                                    <i class="fa-regular fa-circle-xmark text-danger"></i>
                                    <span class="text-danger">Belum Dibaca</span>
                                @endif
                            </td> --}}

                            <td class="text-center">
                                <form action="{{ route('message.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="action-buttons-grid">
                                        {{-- <a href="{{ route('message.edit', $data->id) }}"
                                            class="btn btn-sm btn-success">Edit</a> --}}
                                        {{-- <a href="{{ route('message.show', $data->id) }}"
                                            class="btn btn-sm btn-warning">Show</a> --}}
                                        <a href="{{ route('message.destroy', $data->id) }}" class="btn btn-sm btn-danger"
                                            data-confirm-delete="true">Delete</a>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center">
                                Data Data Belum Tersedia.
                            </td>
                    @endforelse
                </tbody>
            </table>
            {{-- {!! $galeries->withQueryString()->links('pagination::bootstrap-4') !!} --}}
        </div> <!-- /.card-body -->
    </div> <!-- /.card -->
@endsection
