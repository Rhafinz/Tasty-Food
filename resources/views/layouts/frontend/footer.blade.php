@php
    $kontak = App\Models\Kontak::first();
@endphp

<section class="content-footer">
    <div class="footer">
        <div class="row">
            <div class="col-md-6">
                <h5>Tasty Food</h5>
                <p class="custom-paragraph">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.
                </p>
                <div class="social-icons mb-3">
                    <a href="#" class="facebook fa-brands fa-facebook"></a>
                    <a href="#" class="twitter fa-brands fa-twitter"></a>
                </div>
            </div>
            <div class="col-md-2">
                <h5>Useful links</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Hewan</a></li>
                    <li><a href="{{ route('galeri') }}">Galeri</a></li>
                    <li><a href="#">Testimonial</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h5>Privacy</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Karir</a></li>
                    <li><a href="{{ route('tentang') }}">Tentang Kami</a></li>
                    <li><a href="{{ route('kontak') }}">Kontak Kami</a></li>
                    <li><a href="#">Servis</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h5>Contact Info</h5>
                <ul class="list-unstyled contact-info contact-infoo">
                    <li><i class="fas fa-envelope"></i> {{ $kontak->email }}</li>
                    <li><i class="fas fa-phone"></i> {{ $kontak->no_telp }}</li>
                    <li><i class="fas fa-map-marker-alt"></i> {{ $kontak->alamat }}</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom"> <br>
            <p>Copyright ©2024 All rights reserved</p>
        </div>
    </div>
</section>
