 
<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none">
    @php
        $sintekLogo = 'assets/img/brand/sintek.png';
        $hasSintek = file_exists(public_path($sintekLogo));
    @endphp
    <a class="navbar-brand me-lg-5" href="/index.html" title="SinTek">
        @if ($hasSintek)
            <img class="navbar-brand-dark" src="{{ asset($sintekLogo) }}" alt="SinTek logo" />
            <img class="navbar-brand-light" src="{{ asset($sintekLogo) }}" alt="SinTek logo" />
        @else
            <img class="navbar-brand-dark" src="{{ asset('assets/img/brand/light.svg') }}" alt="Volt logo" />
            <img class="navbar-brand-light" src="{{ asset('assets/img/brand/dark.svg') }}" alt="Volt logo" />
        @endif
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>