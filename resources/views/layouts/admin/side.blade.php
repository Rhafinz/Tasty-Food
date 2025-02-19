<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="logo-icon">
            <img src="{{ asset('admin/assets/images/AdminLTELogo.png') }}" class="logo-img" alt="" />
        </div>
        <div class="logo-name flex-grow-1">
            <h5 class="mb-0">DelishFood</h5>
        </div>
        <div class="sidebar-close">
            <span class="material-icons-outlined">close</span>
        </div>
    </div>
    <div class="sidebar-nav">
        <!--navigation-->
        <ul class="metismenu" id="sidenav">
            <li>
                <a href="{{ url('/home') }}" class="">
                    <div class="parent-icon"><i class="material-icons-outlined">home</i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>
            <li class="menu-label">Forms & Tables</li>
            <li>
                <a href="{{ route('berita.index') }}" class="">
                    <div class="parent-icon"><i class="material-icons-outlined">article</i></div>
                    <div class="menu-title">Berita</div>
                </a>
            </li>
            <li>
                <a href="{{ route('tentang.index') }}" class="">
                    <div class="parent-icon"><i class="material-icons-outlined">info</i></div>
                    <div class="menu-title">Tentang</div>
                </a>
            </li>
            <li>
                <a href="{{ route('resep.index') }}" class="">
                    <div class="parent-icon"><i class="material-icons-outlined">restaurant_menu</i></div>
                    <div class="menu-title">Resep</div>
                </a>
            </li>
            <li>
                <a href="{{ route('galeri.index') }}" class="">
                    <div class="parent-icon"><i class="material-icons-outlined">photo_library</i></div>
                    <div class="menu-title">Galeri</div>
                </a>
            </li>
            <li>
                <a href="{{ route('slider.index') }}" class="">
                    <div class="parent-icon"><i class="material-icons-outlined">slideshow</i></div>
                    <div class="menu-title">Slider</div>
                </a>
            </li>
            <li>
                <a href="{{ route('kontak.index') }}" class="">
                    <div class="parent-icon"><i class="material-icons-outlined">contacts</i></div>
                    <div class="menu-title">Kontak</div>
                </a>
            </li>
            <li>
                <a href="{{ route('message.index') }}" class="">
                    <div class="parent-icon"><i class="material-icons-outlined">email</i></div>
                    <div class="menu-title">Pesan</div>
                </a>
            </li>
            <li>
                <a href="{{ route('user.index') }}" class="">
                    <div class="parent-icon"><i class="material-icons-outlined">person</i></div>
                    <div class="menu-title">Pengguna</div>
                </a>
            </li>

        </ul>
        <!--end navigation-->
    </div>
</aside>
