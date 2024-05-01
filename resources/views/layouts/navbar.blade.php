{{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Oro Lingua</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">FAQs</a>
        </li>
        <li class="nav-item">
        <li class="nav-item">
          <a class="nav-link" href="#">Documentations</a>
        </li>
      </ul>
      <form class="d-flex" role="search" style="margin-right: 20px;">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

      <ul class="navbar-nav mb-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Registration</a>
        </li>
      </ul>
    </div>
  </div>
</nav> --}}

<nav class="">
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
      <div class="col-md-3 mb-2 mb-md-0">
        <a class="navbar-brand" href="{{ route('index') }}">
          <img class="bi" width="150" height="40" role="img" src="{{ asset('images/logo v3.0.png') }}">
        </a>
        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> --}}
      </div>
      {{-- div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
          <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap">
            <img src="{{ asset('images/logo v3.0.png') }}">
          </svg>
        </a>
      </div> --}}

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{ route('index') }}" class="nav-link px-2">Home</a></li>
        <li><a href="{{ route('pagenotfound') }}" class="nav-link px-2">Features</a></li>
        <li><a href="{{ route('faq') }}" class="nav-link px-2">FAQs</a></li>
        <li><a href="{{ route('about') }}" class="nav-link px-2">About</a></li>
        <li><a href="{{ route('pagenotfound') }}" class="nav-link px-2">Documentations</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <a href="{{ route('login') }}">
          <button type="button" class="btn btn-outline-primary me-2">
            <i class="bi bi-person-circle"></i>
          </button>
        </a>
        <a href="{{ route('register') }}">
          <button type="button" class="btn btn-outline-primary">
            <i class="bi bi-pencil-square"></i>
          </button>
        </a>

      </div>
    </header>
  </div>
</nav>