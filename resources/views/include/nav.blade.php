<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <style>
            navbar-brand {
                font-family: "asset/font/Poppins-Bold.ttf";
            }

        </style>
        <a class="navbar-brand" href="{{ url('beranda') }}">Tropisianimal</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('beranda') }}">HOME</a>
                </li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                        href="{{ url('tentang') }}">TENTANG</a>
                </li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                        href="{{ url('berita') }}">BERITA</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                        href="{{ url('galeri') }}">GALERI</a>
                </li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                        href="{{ url('kontak') }}">KONTAK</a>
                </li>
            </ul>
            <ul>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                            Logout
                        </form>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- Page Header-->
