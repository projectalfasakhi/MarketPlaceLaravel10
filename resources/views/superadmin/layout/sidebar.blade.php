  <!-- Brand Logo -->
  <a href="https://www.instagram.com/mrasidinn/" class="brand-link">
    <img src="/dapuranita/logo1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Halal.id Store</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('gambar/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Super Admin</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    {{-- <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div> --}}

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
             <li class="nav-item menu-open">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-star"></i>
                <p>
                  Super Admin
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('superadmin.dashboard') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard Super Admin</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('users.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Vendor</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Customer</p>
                  </a>
                </li>
              </ul>
            </li>
        <li class="nav-item menu-open">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Vendor
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('admin.dashboard') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard Vendor</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.pesanan_masuk') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pesanan Masuk</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('produk.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Produk</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('kategori.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Kategori Produk</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.laporan') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Laporan</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Customer
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('customer.dashboard') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard Customer</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('customer.produk') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Produk Customer</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('customer.pesanan_history') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Riwayat Pesanan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('customer.pesanan') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pesanan Customer</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->