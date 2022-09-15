<header class="navbar navbar-light sticky-top bg-light flex-md-nowrap p-0 shadow">
    <a class="navbar-brand" href="/">
        <h2 class="gold-text tm-welcome-header-2">
          <span style="color: red">SI</span>
          <span style="color: black">TARUNA</span>
        </h2>
    </a>
    <input class="form-control outline form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
          <a class="nav-link px-3" href="#">Sign out</a>
        </div>
    </div>
    {{-- <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">SI Taruna</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="#">Sign out</a>
      </div>
    </div> --}}
</header>
  
<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
    <a href="{{route('admin.index')}}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-black text-decoration-none">
        <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">Dashboard</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{route('admin.materi')}}" class="nav-link text-black">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                Materi
            </a>
        </li>
        <li>
            <a href="{{route('admin.nilai')}}" class="nav-link text-black">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                Nilai
            </a>
        </li>
        <li>
            <a href="{{route('admin.taruna')}}" class="nav-link text-black">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                Taruna
            </a>
        </li>
        <li>
            <a href="{{route('admin.user')}}" class="nav-link text-black">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                User
            </a>
        </li>
    </ul>
</div>