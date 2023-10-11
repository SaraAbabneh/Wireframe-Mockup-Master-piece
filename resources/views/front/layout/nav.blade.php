<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0" style="top: 0px;">
    <a href="{{ route('index') }}" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
        <h2 class="mb-2 text-white">Coding</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('index') }}" class="nav-item nav-link">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="{{ route('Team') }}" class="dropdown-item">Our Team</a>
                    <a href="{{ route('Ourgraduate') }}" class="dropdown-item">Our Graduate</a>

                    <!-- Uncomment the cohort links if needed -->
                    <!-- <a href="{{ route('Cohort', 1) }}" class="dropdown-item">Cohort 1</a>
                    <a href="{{ route('Cohort', 2) }}" class="dropdown-item">Cohort 2</a> -->

                    @foreach ($Cohort as $item)
                        @if ($item->number != 3)
                            @continue
                        @else
                            <a href="{{ route('Cohort', $item->number) }}" class="dropdown-item">Cohort {{ $item->number }}</a>
                        @endif
                    @endforeach

                    <a href="{{ route('error') }}" class="dropdown-item" style="display: none;">404 Page</a>
                </div>
            </div>
            <a href="{{ route('show.contact') }}" class="nav-item nav-link">Contact</a>
            <a href="../dashbored/HTML/sing-in-up.html" class="nav-item nav-link"><i class="fa fa-user"></i></a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
