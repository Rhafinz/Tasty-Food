@extends('layouts.admin')
@section('content')
    <div class="card m-4">
        <div class="card-header">
            <h3 class="card-title">resep</h3>
            <div class="float-end">
                <a href="{{ route('resep.create') }}" class="btn btn-sm btn-primary">Add</a>
            </div>
        </div> <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Images</th>
                        <th>Nama Resep</th>
                        <th>Deskripsi</th>
                        <th>Bahan</th>
                        <th>Langkah</th>
                        <th style="text-align: center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @forelse ($reseps as $data)
                        <tr class="align-middle">
                            <td>{{ $no++ }}</td>
                            <td>
                                <img src="{{ asset('/storage/reseps/' . $data->gambar) }}" class="rounded"
                                    style="width: 150px; height: 150px; object-fit: cover;">
                            </td>
                            <td>
                                <span class="text-toggle" onclick="toggleText(this)">
                                    {{ Str::limit($data->nama_resep, 30, ' ...') }}
                                </span>
                                <span class="full-text" style="display: none;">{{ $data->nama_resep }}</span>
                            </td>
                            <td>
                                <span class="text-toggle" onclick="toggleText(this)">
                                    {!! Str::limit(strip_tags($data->deskripsi), 30, ' ...') !!}
                                </span>
                                <span class="full-text" style="display: none;">{!! $data->deskripsi !!}</span>
                            </td>
                            <td>
                                <span class="text-toggle" onclick="toggleText(this)">
                                    {!! Str::limit(strip_tags($data->bahan), 30, ' ...') !!}
                                </span>
                                <span class="full-text" style="display: none;">{!! $data->bahan !!}</span>
                            </td>
                            <td>
                                <span class="text-toggle" onclick="toggleText(this)">
                                    {!! Str::limit(strip_tags($data->langkah), 30, ' ...') !!}
                                </span>
                                <span class="full-text" style="display: none;">{!! $data->langkah !!}</span>
                            </td>
                            <td class="text-center">
                                <form action="{{ route('resep.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="action-buttons-grid">
                                        <a href="{{ route('resep.edit', $data->id) }}"
                                            class="btn btn-sm btn-success">Edit</a>
                                        <a href="{{ route('resep.show', $data->id) }}"
                                            class="btn btn-sm btn-warning text-white">Show</a>
                                        <a href="{{ route('resep.destroy', $data->id) }}" class="btn btn-sm btn-danger"
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
