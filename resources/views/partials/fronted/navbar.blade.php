<!-- ======= Header ======= -->
    <div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><a href="index.html">CyberMedia Center</a></h1>

    <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
            <li><a class=" {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a></li>
            <li class="dropdown"><a href="{{ route('home') }}"><span>Tentang Kami</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li><a class=" {{ request()->routeIs('home.about') ? 'active' : '' }}" href="{{ route('home.about')}}">Mascot</a></li>
                    <li><a class=" {{ request()->routeIs('home.course') ? 'active' : '' }}" href="{{ route('home.course') }}">Gallery</a></li>
                </ul>
            </li>
            <li><a class=" {{ request()->routeIs('home.contact') ? 'active' : '' }}" href="{{ route('home.contact') }}">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    <a href="{{ route('pendaftaran.create') }}" class="get-started-btn">Pendaftaran</a>

    </div>
<!-- End Header-->
