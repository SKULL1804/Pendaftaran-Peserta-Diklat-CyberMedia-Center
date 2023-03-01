<nav id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        @if  (auth()->user()->isAdmin())
        <li class="nav-item">
            <a class="nav-link  {{ request()->routeIs('dashboard.*') ? 'active' : 'collapsed' }}"  aria-current="page" href="{{ route('dashboard.index') }}">
            <i class="bi bi-house-door-fill"></i>
            <span class="align-text-bottom"></span>
            Dashboard
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('hero.*') ? 'active' : 'collapsed' }}" data-bs-target="#home-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-house-door-fill"></i>
                <span class="align-text-bottom"></span>
                Home
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="home-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                <a href="{{ route('hero.edit') }}">
                    <i class="bi bi-circle"></i><span>Home</span>
                </a>
                </li>
                <li>
                <a href="{{ route('why.edit') }}">
                    <i class="bi bi-circle"></i><span>Why Us</span>
                </a>
                </li>
                <li>
                <a href="{{ route('mascot') }}">
                    <i class="bi bi-circle"></i><span>Our Mascot</span>
                </a>
                </li>
            </ul>
        </li><!-- End Hero Nav -->
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('about.*') ? 'active' : 'collapsed' }}" data-bs-target="#about-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-house-door-fill"></i>
                <span class="align-text-bottom"></span>
                Tentang Kami
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="about-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                <a href="{{ route('about.edit') }}">
                    <i class="bi bi-circle"></i><span>Tentang Kami</span>
                </a>
                </li>
                <li>
                <a href="{{ route('all.gallery') }}">
                    <i class="bi bi-circle"></i><span>Gallery</span>
                </a>
                </li>
            </ul>
        </li><!-- End About Nav -->
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('course.*') ? 'active' : 'collapsed' }}" data-bs-target="#course-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-house-door-fill"></i>
                <span class="align-text-bottom"></span>
                Diklat
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>

            <ul id="course-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                <a href="{{ route('daftar-diklat.index') }}">
                    <i class="bi bi-circle"></i><span>Daftar Diklat</span>
                </a>
                </li>
            </ul>
            <ul id="course-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                <a href="{{ route('populer') }}">
                    <i class="bi bi-circle"></i><span>Diklat Populer</span>
                </a>
                </li>
            </ul>
        </li><!-- End About Nav -->
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('course.*') ? 'active' : 'collapsed' }}" data-bs-target="#pendaftaran-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-house-door-fill"></i>
                <span class="align-text-bottom"></span>
                Pendaftaran
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>

            <ul id="pendaftaran-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                <a href="{{ route('pendaftaran.index') }}">
                    <i class="bi bi-circle"></i><span>Data Pendaftaran</span>
                </a>
                </li>
            </ul>
        </li><!-- End About Nav -->
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('course.*') ? 'active' : 'collapsed' }}" data-bs-target="#footer-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-house-door-fill"></i>
                <span class="align-text-bottom"></span>
                Footer
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>

            <ul id="footer-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                <a href="{{ route('alamat.edit') }}">
                    <i class="bi bi-circle"></i><span>Alamat</span>
                </a>
                </li>
                <li>
                <a href="{{ route('sosmed.edit') }}">
                    <i class="bi bi-circle"></i><span>Sosmed</span>
                </a>
                </li>
            </ul>
        </li><!-- End About Nav -->
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('course.*') ? 'active' : 'collapsed' }}" data-bs-target="#contact-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-house-door-fill"></i>
                <span class="align-text-bottom"></span>
                Contact
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>

            <ul id="contact-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                <a href="{{ route('contact.index') }}">
                    <i class="bi bi-circle"></i><span>Contact Message</span>
                </a>
                </li>
            </ul>
        </li><!-- End About Nav -->
        @endif
    </ul>
    <form action="{{ route('auth.logout') }}" method="post"
    onsubmit="return confirm('Apakah anda yakin ingin keluar?')">
    @method('DELETE')
    @csrf
    <button class="w-full mt-4 d-block bg-transparent border-0 fw-bold text-danger px-3">Keluar</button>
    </form>
</nav><!-- End Sidebar-->
