<ul class="list-unstyled topbar-nav float-end mb-0">
  
    <li class="dropdown">
        <a class="nav-link font-14" href="{{ route('login') }}">
            <span><i class="ti ti-user menu-icon"></i>Login</span>
        </a>
    </li>
    <!--end topbar-profile-->
    <li class="menu-item">
        <!-- Mobile menu toggle-->
        <a class="navbar-toggle nav-link" id="mobileToggle" onclick="toggleMenu()" onclick="toggleMenu()">
            <div class="lines">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </a><!-- End mobile menu toggle-->
    </li>
    <!--end menu item-->
</ul>
<!--end topbar-nav-->

<div class="navbar-custom-menu">
    <div id="navigation">
        <!-- Navigation Menu-->
        <ul class="navigation-menu">
            <li class="nav-item dropdown parent-menu-item">
                <a class="nav-link" href="/">
                    <span><i class="ti ti-smart-home menu-icon"></i>Dashboard</span>
                </a>

            </li>

            <li class="nav-item dropdown parent-menu-item">
                <a class="nav-link" href="{{ route('home.produk') }}">
                    <span><i class="ti ti-building-store menu-icon"></i>Produk</span>
                </a>

            </li>
        </ul><!-- End navigation menu -->
    </div> <!-- end navigation -->
</div>
<!-- Navbar -->
