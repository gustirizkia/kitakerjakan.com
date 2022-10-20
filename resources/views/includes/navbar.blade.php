<nav class="navbar navbar-expand-lg bg__primary navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/images/logo.jpg') }}" class="img-fluid" alt="KITA KERJAKAN">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" {{ (request()->is('/')) ? "href=#tentang" : "href=/#tentang" }} >Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" {{ (request()->is('/')) ? "href=#layanan" : "href=/#layanan"
                        }}>Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('blog*')) ? 'active' : '' }}"
                        href="{{ route('listBlog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-warning text-dark px-3" href="#kontak">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
