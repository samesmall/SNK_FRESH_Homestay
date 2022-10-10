<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="/">
            SNK-HomeStay</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active me-2" aria-current="page" href="<?= url('/home'); ?>"><i class="bi bi-house-heart-fill"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="<?= url('/room'); ?>"><i class="bi bi-hospital-fill"></i> Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="<?= url('/facilities'); ?>"><i class="bi bi-hdd-rack-fill"></i> Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="<?= url('/contact us'); ?>"><i class="bi bi-envelope-paper-heart-fill"></i> Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="<?= url('/about'); ?>"><i class="bi bi-exclamation-square-fill"></i> About</a>
                </li>
            </ul>
            @if (Route::has('login'))
            <div class="d-flex">
            @auth
                <a href="{{ url('/dashboard') }}" class="btn btn-outline-dark shadow-none me-lg-2 me-3">
                Dashboard</a>
            @else    
                <a href="{{ route('login') }}" class="btn btn-outline-dark shadow-none" >
                    login
                </a>
                @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-dark shadow-none" >Register</a>
                        @endif
                @endauth
            </div>
        @endif
    </div>
</nav>


