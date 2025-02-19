@extends('layouts.admin')
@section('content')
    <h6 class="mb-0 text-uppercase">DataTable Berita  | Index</h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Images</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th style="text-align: center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @forelse ($beritas as $data)
                            <tr class="align-middle">
                                <td>{{ $no++ }}</td>
                                <td>
                                    <img src="{{ asset('/storage/beritas/' . $data->image) }}" class="rounded"
                                        style="width: 100px; height: 100px; object-fit: cover;">
                                </td>
                                <td>
                                    <span class="text-toggle" onclick="toggleText(this)">
                                        {{ Str::limit($data->judul, 30, ' ...') }}
                                    </span>
                                    <span class="full-text" style="display: none;">{{ $data->judul }}</span>
                                </td>
                                <td>
                                    <span class="text-toggle" onclick="toggleText(this)">
                                        {!! Str::limit(strip_tags($data->deskripsi), 30, ' ...') !!}
                                    </span>
                                    <span class="full-text" style="display: none;">{!! $data->deskripsi !!}</span>
                                </td>
                                <td class="text-center">
                                    <form action="{{ route('berita.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="action-buttons-grid">
                                            <a href="{{ route('berita.edit', $data->id) }}"
                                                class="btn btn-sm btn-success">Edit</a>
                                            <a href="{{ route('berita.show', $data->id) }}"
                                                class="btn btn-sm btn-warning text-white">Show</a>
                                            <a href="{{ route('berita.destroy', $data->id) }}" class="btn btn-sm btn-danger"
                                                data-confirm-delete="true">Delete</a>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">
                                    Data Berita Belum Tersedia.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        function toggleText(element) {
            const fullTextElement = element.nextElementSibling;
            const isHidden = fullTextElement.style.display === 'none';

            if (isHidden) {
                fullTextElement.style.display = 'inline';
                element.style.display = 'none';
            } else {
                fullTextElement.style.display = 'none';
                element.style.display = 'inline';
            }
        }

        $(document).ready(function() {
            $('#example2').DataTable();
        });
    </script>
@endsection
