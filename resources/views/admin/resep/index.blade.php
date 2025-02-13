@extends('layouts.admin')
@section('content')
    <div class="card m-4">
        <div class="card-header">
            <h3 class="card-title">Resep</h3>
            <div class="float-end">
                <a href="{{ route('resep.create') }}" class="btn custom-btn btn-sm btn-primary">
                    <i class="fa-solid fa-plus"></i>Tambah Resep</a>
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
                            <td class="fw-bold">{{ $no++ }}</td>
                            <td>
                                <img src="{{ asset('/storage/reseps/' . $data->gambar) }}"
                                    style="width: 120px; height: 120px; object-fit: cover;">
                            </td>
                            <td>{!! Str::limit($data->nama_resep, 30, '...') !!}</td>
                            <td>{!! Str::limit(strip_tags($data->deskripsi), 30, '...') !!}</td>
                            <td>{!! Str::limit(strip_tags($data->bahan), 30, '...') !!}</td>
                            <td>{!! Str::limit(strip_tags($data->langkah), 30, '...') !!}</td>
                            <td class="text-center">
                                <form action="{{ route('resep.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('resep.edit', $data->id) }}" class="btn custom-btn btn-success d-flex align-items-center">
                                            <i class="fa-solid fa-pen-to-square me-2"></i> Edit
                                        </a>
                                        <a href="{{ route('resep.show', $data->id) }}" class="btn custom-btn btn-warning text-white d-flex align-items-center">
                                            <i class="fa-solid fa-eye me-2"></i> Show
                                        </a>
                                        <button type="submit" class="btn custom-btn btn-danger d-flex align-items-center"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus?')">
                                            <i class="fa-solid fa-trash me-2"></i> Delete
                                        </button>
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

        .custom-btn i {
            margin-right: 5px;
        }

        .table-hover tbody tr:hover {
            background-color: rgba(0, 0, 255, 0.05);
        }

        .table thead {
            border-radius: 12px;
        }

        .table thead th {
            text-transform: uppercase;
            font-size: 13px;
            font-weight: bold;
            text-align: center;
        }
    </style>
@endsection
