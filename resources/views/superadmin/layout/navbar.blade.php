    <!-- Left navbar links -->
    <ul class="navbar-nav"">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                    class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item dropdown"">
        <a class="nav-link dropdown-toggle nav-user" data-bs-toggle="dropdown" href="#" role="button"
            aria-haspopup="false" aria-expanded="false">
            <div class="d-flex align-items-center">
                @if (!empty(Auth::user()->foto_profile))
                    <img src="/foto_profile/{{ Auth::user()->foto_profile }}" alt="profile-user"
                        class="rounded-circle me-0 me-md-2 thumb-sm" />
                @else
                    {{-- <img src="/dapuranita/default.jpg" alt="profile-user"
                        class="nav-item dropdown" /> --}}
                @endif
                <div class="user-name">
                    <small class="d-none d-lg-block font-11">{{ Str::upper(Auth::user()->type) }}</small>
                    <span class="d-none d-lg-block fw-semibold font-12">
                        @php
                            $nama = explode(' ', Auth::user()->name);
                            echo Str::title($nama[0]);
                        @endphp
                        <i class="mdi mdi-chevron-down"></i></span>
                </div>
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end">
            <a class="nav-link dropdown-toggle nav-user" data-bs-toggle="dropdown" href="{{ route('admin.profile') }}"><i
                    class="ti ti-user font-16 me-1 align-text-bottom"></i> Profile</a>
            {{-- <a class="dropdown-item" href="#"><i class="ti ti-settings font-16 me-1 align-text-bottom"></i>
                Settings</a> --}}
            <div class="dropdown-divider mb-0"></div>
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();"><i
                    class="ti ti-power font-16 me-1 align-text-bottom"></i> Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </li>
    </ul>