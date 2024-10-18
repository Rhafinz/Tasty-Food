@extends('layouts.admin')
@section('content')
    <div class="card m-4">
        <div class="card-header">
            <h3 class="card-title">Kontak</h3>
            <div class="float-end">
                @php
                    $kontakCount = App\Models\Kontak::count(); // Hitung jumlah record
                @endphp

                @if ($kontakCount < 1)
                    <a href="{{ route('kontak.create') }}" class="btn btn-sm btn-primary">Add</a>
                @else
                    <button class="btn btn-sm btn-secondary" disabled>Maksimal Data Hanya Satu</button>
                @endif
            </div>
        </div> <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Email</th>
                        <th>No Telepon</th>
                        <th>Alamat</th>
                        <th style="text-align: center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($kontaks as $data)
                        @if ($loop->first)
                            <tr class="align-middle">
                                <td>{{ $no++ }}</td>
                                <td>
                                    {{ $data->email }}</td>
                                </td>
                                <td>{{ $data->no_telp }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>
                                    <form action="{{ route('kontak.destroy', $data->id) }}" method="POST"
                                        class="float-end">
                                        @csrf
                                        @method('DELETE')
                                        {{-- <a href="{{ route('kontak.show', $data->id) }}" class="btn btn-sm btn-dark">Show</a> | --}}
                                        <a href="{{ route('kontak.edit', $data->id) }}"
                                            class="btn btn-sm btn-success">Edit</a>
                                        |
                                        <button class="btn btn-sm btn-danger" disabled>Can`t Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @else
                            <tr class="align-middle">
                                <td>{{ $no++ }}</td>
                                <td>
                                    {{ $data->email }}</td>
                                </td>
                                <td>{{ $data->no_telp }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>
                                    <form action="{{ route('kontak.destroy', $data->id) }}" method="POST"
                                        class="float-end">
                                        @csrf
                                        @method('DELETE')
                                        {{-- <a href="{{ route('kontak.show', $data->id) }}" class="btn btn-sm btn-dark">Show</a> | --}}
                                        <a href="{{ route('kontak.edit', $data->id) }}"
                                            class="btn btn-sm btn-success">Edit</a>
                                        |
                                        <a href="{{ route('kontak.destroy', $data->id) }}" class="btn btn-sm btn-danger"
                                            data-confirm-delete="true">Delete</a>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            {{-- {!! $kontakes->withQueryString()->links('pagination::bootstrap-4') !!} --}}
        </div> <!-- /.card-body -->
    </div> <!-- /.card -->
@endsection
