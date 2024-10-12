<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="./index.html" class="brand-link">
            <!--begin::Brand Image--> <img src="{{ asset('admin/dist/assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span
                class="brand-text fw-light">TastyFood</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div>
    <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open"> <a href="{{ url('/home') }}" class="nav-link active"> <i
                            class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-table"></i>
                        <p>
                            Tables List
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="{{ route('galeri.index') }}" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Galery</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="{{ route('tentang.index') }}" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Tentang</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="{{ route('berita.index') }}" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Berita</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="{{ route('kontak.index') }}" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Kontak</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="{{ route('message.index') }}" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Pesan</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul> <!--end::Sidebar Menu-->
        </nav>
    </div> <!--end::Sidebar Wrapper-->
</aside>
