  <!-- Brand Logo -->
  <a href="{{ route('superadmin.dashboard') }}" class="brand-link">
    <img src="{{ asset('gambar/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('gambar/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('superadmin.laporan') }}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Laporan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('superadmin.pesanan_masuk') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pesanan Masuk</p>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarApps" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <span><i class="far fa-circle nav-icon"></i>Toko</span>
              </a>
              <ul class="dropdown-menu animate slideIn" aria-labelledby="navbarApps">
                  <li class="dropdown-submenu dropend">
                      <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#">
                          Produk
                      </a>
                      <ul class="dropdown-menu animate slideIn">
                          <li>
                              <a href="{{ route('produk1.create') }}" class="dropdown-item ">Tambah Produk</a>
                          </li>
                          <li>
                              <a href="{{ route('produk1.index') }}" class="dropdown-item ">Lihat List Produk</a>
                          </li>
                      </ul>
                  </li>
                  <li>
                      <a href="#" class="dropdown-item">
                          Kategori Produk
                      </a>
                  </li>
              </ul>
              <!--end submenu-->
          </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
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
              <a href="pages/tables/jsgrid.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>jsGrid</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->