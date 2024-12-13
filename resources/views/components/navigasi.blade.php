<nav class="navbar navbar-expand-lg bg-success">
    <div class="container p-3 m-auto">
        
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center justify-content-center gap-3">
            <img src="gambar/logo.png" class="rounded-pill" widht="50" height="50">
            <h3 class="m-0">BtnKitaKita</h3>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse">
            <ul class="ms-auto navbar-nav gap-1 gap-lg-3">
                <li class="navbar-item mt-3 mt-lg-0">
                    <a href="#" class="navbar-link {{ $beranda }}"><i class="fas fa-home"></i> Rumah</a>
                </li>
                <li class="navbar-item">
                    <a href="#" class="navbar-link {{ $tentang }}"><i class="fas fa-info-circle"></i> Tentang</a>
                </li>
                <li class="navbar-item">
                    <a href="#" class="navbar-link {{ $lokasi }}"><i class="fas fa-map-marker-alt"></i> Lokasi</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
