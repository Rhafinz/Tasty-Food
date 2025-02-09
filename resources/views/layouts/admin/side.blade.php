<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="./index.html" class="brand-link">
            <!--begin::Brand Image--> <img src="{{ asset('admin/dist/assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span
                class="brand-text fw-light">DelishFood</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div>
    <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open"> <a href="{{ url('/home') }}" class="nav-link active"> <i
                            class="nav-icon fa-solid fa-gauge-high"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon fa-solid fa-database"></i>
                        <p>
                            Kelola Data
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="{{ route('galeri.index') }}" class="nav-link"> <i
                                    class="nav-icon fa-solid fa-image"></i>
                                <p>Galeri</p>
                            </a>
                        </li>

                        <li class="nav-item"> <a href="{{ route('tentang.index') }}" class="nav-link"> <i
                                    class="nav-icon fas fa-address-card"></i>
                                <p>Tentang</p>
                            </a>
                        </li>
                        <li class="nav-item"> <a href="{{ route('berita.index') }}" class="nav-link"> <i
                                    class="nav-icon fas fa-newspaper"></i>
                                <p>Berita</p>
                            </a>
                        </li>
                        <li class="nav-item"> <a href="{{ route('kontak.index') }}" class="nav-link"> <i
                                    class="nav-icon fas fa-address-book"></i>
                                <p>Kontak</p>
                            </a>
                        </li>
                        <li class="nav-item"> <a href="{{ route('message.index') }}" class="nav-link"> <i
                                    class="nav-icon fas fa-envelope"></i>
                                <p>Pesan</p>
                            </a>
                        </li>
                        <li class="nav-item"> <a href="{{ route('slider.index') }}" class="nav-link"> <i
                                    class="nav-icon bi bi-images"></i>
                                <p>Slider</p>
                            </a>
                        </li>
                        <li class="nav-item"> <a href="{{ route('resep.index') }}" class="nav-link"> <i
                                    class="nav-icon fa-solid fa-bell-concierge"></i>
                                <p>Resep</p>
                            </a>
                        </li>
                        <li class="nav-item"> <a href="{{ route('user.index') }}" class="nav-link"> <i
                                    class="nav-icon fa-solid fa-user"></i>
                                <p>Pengguna</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul> <!--end::Sidebar Menu-->
        </nav>
    </div> <!--end::Sidebar Wrapper-->
</aside>
