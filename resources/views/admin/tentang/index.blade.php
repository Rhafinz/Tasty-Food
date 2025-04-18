@extends('layouts.admin')
@section('content')
<h6 class="mb-0 text-uppercase">DataTable Tentang | Index</h6>
    <div class="card m-4">
        <div class="card-header">
            <div class="float-end">
                @php
                    $tentangCount = App\Models\Tentang::count(); // Hitung jumlah record
                @endphp

                @if ($tentangCount < 3)
                    <a href="{{ route('tentang.create') }}" class="btn btn-sm btn-primary">Add</a>
                @else
                @endif
            </div>
        </div> <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped" id="dataxxtable">
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
                            <td>
                                <span class="text-toggle" onclick="toggleText(this)">
                                    {{ Str::limit($data->konten, 30, ' ...') }}
                                </span>
                                <span class="full-text" style="display: none;">{{ $data->konten }}</span>
                            </td>
                            <td>
                                <span class="text-toggle" onclick="toggleText(this)">
                                    {{ Str::limit($data->deskripsi, 30, ' ...') }}
                                </span>
                                <span class="full-text" style="display: none;">{{ $data->deskripsi }}</span>
                            </td>
                            <td class="text-center">
                                <form action="{{ route('tentang.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="action-buttons-grid">
                                        <a href="{{ route('tentang.edit', $data->id) }}"
                                            class="btn btn-sm btn-success mb-3">Edit</a>
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
    <script>
        function toggleText(element) {
            const fullTextElement = element.nextElementSibling; // Ambil elemen berikutnya yang merupakan teks penuh
            const isHidden = fullTextElement.style.display === 'none';

            // Tampilkan atau sembunyikan teks penuh
            if (isHidden) {
                fullTextElement.style.display = 'inline'; // Tampilkan teks penuh
                element.style.display = 'none'; // Sembunyikan teks terbatas
            } else {
                fullTextElement.style.display = 'none'; // Sembunyikan teks penuh
                element.style.display = 'inline'; // Tampilkan teks terbatas
            }
        }
    </script>
@endsection
