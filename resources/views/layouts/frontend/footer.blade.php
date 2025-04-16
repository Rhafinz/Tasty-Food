@php
    $kontak = App\Models\Kontak::first();
    $judul = App\Models\Tentang::Find(1);
@endphp

<section class="content-footer">
    <div class="footer">
        <div class="row">
            <div class="col-md-5">
                <h5>Delish Food</h5>
                <p class="custom-paragraph">
                    {{ $judul->konten }}
                </p>
                <div class="social-icons mb-3" style="text-decoration: none">
                    <a href="https://www.facebook.com/share/1BNYyVzw5x/" class="facebook fa-brands fa-facebook" style="text-decoration: none"></a>
                    <a href="https://www.instagram.com/kehangrapi/" class="instagram fa-brands fa-instagram" style="text-decoration: none"></a>
                </div>
            </div>
            <div class="col-md-3 offset-md-1">
                <h5>Useful links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('galeri') }}">Galeri</a></li>
                    {{-- <li><a href="#">Testimoni</a></li> --}}
                    <li><a href="{{ route('tentang') }}">Tentang Kami</a></li>
                    <li><a href="{{ route('kontak') }}">Kontak Kami</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Contact Info</h5>
                <ul class="list-unstyled contact-info contact-infoo">
                    <li><i class="fas fa-envelope"></i> {{ $kontak->email }}</li>
                    <li><i class="fas fa-phone"></i> {{ $kontak->no_telp }}</li>
                    <li><i class="fas fa-map-marker-alt"></i> {{ $kontak->alamat }}</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright ©2025 All rights reserved</p>
        </div>
    </div>
</section>
