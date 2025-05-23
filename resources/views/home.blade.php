@extends('layouts.home')
@section('content')
    {{-- content About --}}
    <section class="aboute mt-3">
        <div class="grid-container p-3 text-center">
            <h2 class="m-3"><b>TENTANG KAMI</b></h2>
            <div class=" abouteText col-6 mx-center my-4 text-center">
                <p class="abouteText">
                    {{ $judul->konten }}
                </p>
            </div>
            <div class="black-line mb-3"></div><br>
        </div>
    </section>

    {{-- content Article --}}
    <section class="content-article">
        <div class="article gap-3">
            @foreach ($reseps as $data)
                <a href="{{ route('recipe.show', $data->slug) }}">
                    <div class="card">
                        <img class="card-image" src="{{ asset('/storage/reseps/' . $data->gambar) }}" alt="">
                </a>
                <h2 class="card1 mb-3">
                    <a href="{{ route('recipe.show', $data->slug) }}" class="article-title">
                        <b>{{ $data->nama_resep }}</b>
                    </a>
                </h2>
                <p class="mb-3 article-text">
                    {!! Str::limit($data->deskripsi, 120, ' ...') !!}
                </p>
        </div>
        @endforeach
        </div>
    </section>
    <style>
        .article a {
            text-decoration: none;
            /* Hilangkan garis bawah */
            color: inherit;
            /* Gunakan warna teks default */
        }

        .article a:hover {
            color: inherit;
            /* Pastikan warna tetap saat hover */
        }
    </style>
    {{-- content News --}}
    <section class="content-news">
        <div class="news p-3">
            <h2 class="m-3"><b>BERITA KAMI</b></h2>
            <div class="container-news">
                <div class="row">
                    <div class="col-md-6">
                        <div class="news-card-big">
                            <div class="aspect-ratio">
                                <img src="{{ asset('/storage/beritas/' . $latestNews->image) }}" class="news-img-top"
                                    alt="{{ $latestNews->title }}">
                            </div>
                            <div class="news-body content-news mb-auto">
                                <h5 class="news-title">{{ $latestNews->judul }}</h5>
                                <p class="news-text-big">{!! Str::limit(strip_tags($latestNews->deskripsi), 550) !!}</p>
                                <a href="{{ route('news.show', $latestNews->slug) }}" class="read-more card-news-big">Baca
                                    selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            @foreach ($otherNews as $news)
                                <div class="col-sm-6">
                                    <div class="news-card mb-4">
                                        <div class="aspect-ratio">
                                            <img src="{{ asset('/storage/beritas/' . $news->image) }}" class="news-img-top"
                                                alt="{{ $news->title }}">
                                        </div>
                                        <div class="news-body">
                                            <h5 class="news-title">{{ Str::limit($news->judul, 15) }}</h5>
                                            <p class="news-text">{!! Str::limit(strip_tags($news->deskripsi), 100) !!}</p>
                                            <a href="{{ route('news.show', $news->slug) }}" class="read-more">Baca
                                                selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Content Galery --}}
    <section class="photo" style="background-color: white">
        <div class="container-img">
            <div class="gallery-title p-3">
                <h2 class="m-3"><b>GALLERI KAMI</b></h2>
            </div>
            <div class="row content-img">
                @php
                    $galery = App\Models\Galery::orderBy('id', 'asc')->get();
                @endphp
                @foreach ($galery->take(6) as $item)
                    <div class="col-12 col-sm-6 col-md-4 p-2">
                        <div class="square">
                            <a href="{{ asset('/storage/galeries/' . $item->img) }}" data-lightbox="photo-gallery"
                                data-title="Gallery Image">
                                <img src="{{ asset('/storage/galeries/' . $item->img) }}" class="img-fluid rounded-img"
                                    alt="Gallery Image" loading="lazy">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="botten text-center">
                <a class="btn-more" href="{{ route('galeri') }}">
                    LIHAT LEBIH BANYAK
                </a>
            </div>
        </div>
    </section>
@endsection
