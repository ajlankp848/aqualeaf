<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <h1 class="text-primary"><i class="fas fa-hand-holding-water me-3"></i>AquaLeaf</h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('home') }}" class="nav-item nav-link">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
            <a href="{{ route('services') }}" class="nav-item nav-link">Services</a>
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
            <a href="{{ route('team') }}" class="nav-item nav-link">Team</a>
        </div>
        <div class="d-none d-xl-flex me-3">
            <div class="d-flex flex-column pe-3 border-end border-primary">
                <span class="text-body">Connect Us</span>
                <a href="tel:+4733378901"><span class="text-primary"> +971 0123 456 7890</span></a>
            </div>
        </div>
    </div>
</nav>
