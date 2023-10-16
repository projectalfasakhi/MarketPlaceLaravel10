@extends('customer.layout.master')

@section('content')
    {{-- <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col align-self-center">
                            <h4 class="page-title pb-md-0">Produk</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Produk</li>
                            </ol>
                        </div>
                        <!--end col-->
                        <div class="col-auto align-self-center">
                            <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                <span class="day-name" id="Day_Name">Today:</span>&nbsp;
                                <span class="" id="Select_date">
                                    @php
                                        echo date('d M');
                                    @endphp
                                </span>
                                <i data-feather="calendar" class="align-self-center icon-xs ms-1"></i>
                            </a>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>

        <div class="row">
            <div class="col-md-3">
         <div class="card">
                    <div class="card-body">
                        <form action="#">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Cari Produk..."
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-de-warning" type="button" id="button-addon2"><i
                                        class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            <div class="card">
                    <div class="card-body">
                        <h5 style="text-align: center"> Kategori Produk</h5>
                        <hr>
                        @foreach ($kategori as $kategori)
                            <li style="color:goldenrod;text-align:left">
                                <a href="{{ route('customer.produk_kategori', $kategori->id_kategori) }}"
                                    style="color:goldenrod;text-align:left;font-size:15px">{{ Str::title($kategori->nama_kategori) }}</a>
                            </li>
                        @endforeach
                    </div>
                </div>
            </div>

            

            <div class="col-md-9">
                <div class="row">
                    @php
                        function rupiah($angka)
                        {
                            $hasil_rupiah = 'Rp ' . number_format($angka, 2, ',', '.');
                            return $hasil_rupiah;
                        }
                    @endphp
                    @foreach ($produk as $data)
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <!--end ribbon-->
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <br>
                                    <img src="/produk/{{ $data->foto_produk }}" alt="" class="rounded d-block"
                                        height="180" width="285">
                                    <div class="d-flex justify-content-between align-items-center my-4">
                                        
                                        <div>
                                            <p class="text-muted mb-2">{{ Str::title($data->nama_kategori) }}</p>
                                            <a href="{{ route('customer.produk_detail', $data->id_produk) }}" class="header-title">{{ Str::title($data->nama_produk) }}</a>
                                        </div>
                                        <div>
                                            <h5 class="text-dark mt-0 mb-2">{{ rupiah($data->harga_produk) }}</h5>
                                        </div>
                                    </div>
                                    
                                    <div class="d-grid">
                                        <a href="{{ route('customer.produk_detail', $data->id_produk) }}" class="btn btn-de-warning">Lihat Produk</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Breadcrumb Start -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row">
                    <div class="col align-self-center">
                        <div class="container-fluid">
                        <h4 class="page-title pb-md-0">Produk</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Produk</li>
                        </ol>
                        </div>
                    </div>
                    {{-- <div class="col align-self-center">
                        <div class="container-fluid">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#">Produk</a></li>
                            </ul>
                        </div>
                    </div> --}}
                    <!--end col-->
                    <div class="col-auto align-self-center">
                        <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                            <span class="day-name" id="Day_Name">Today:</span>&nbsp;
                            <span class="" id="Select_date">
                                @php
                                    echo date('d M');
                                @endphp
                            </span>
                            <i data-feather="calendar" class="align-self-center icon-xs ms-1"></i>
                        </a>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end page-title-box-->
        </div>
        <!--end col-->
    </div>
    <!-- Product List Start -->
    <div class="product-view">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-view-top">
                                <div class="row"> 
                                    @if(count($produk) > 0)
                                    @else
                                        <p>Tidak ada hasil pencarian.</p>
                                    @endif
                                    <div class="col-md-14">
                                        <div class="product-search">
                                            <form action="{{ route('produk.search') }}" method="GET">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Cari Produk..."
                                                        aria-label="Recipient's username" aria-describedby="button-addon2" name="query">
                                                    <button class="btn btn-de-warning" type="button" id="button-addon2"><i
                                                            class="fas fa-search"></i></button>
                                                        </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php
                        function rupiah($angka)
                        {
                            $hasil_rupiah = 'Rp ' . number_format($angka, 2, ',', '.');
                            return $hasil_rupiah;
                        }
                        @endphp
                        @foreach ($produk as $data)
                    <div class="col-md-4">
                            <div class="row">
                            <div class="product-item">
                                <div class="product-title">
                                    <a href="#">{{ Str::title($data->nama_produk) }}</a>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div class="product-image">
                                    <a href="product-detail.html">
                                        <img src="/produk/{{ $data->foto_produk }}" alt="Product Image">
                                    </a>
                                    <div class="product-action">
                                        <a href="#"><i class="fa fa-cart-plus"></i></a>
                                        <a href="{{ route('customer.produk_detail', $data->id_produk) }}"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <h3>{{ rupiah($data->harga_produk) }}</h3>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>

                                </div>
                                <div class="product-price">
                                    {{-- <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a> --}}
                                </div>
                            </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    

                    <!-- Pagination Start -->
                    <div class="col-md-12">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Pagination Start -->
                </div>

                <!-- Side Bar Start -->
                <div class="col-lg-4 sidebar">
                    <div class="sidebar-widget category">
                        <nav class="navbar bg-light">
                            {{-- <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-female"></i>Fashion & Beauty</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-child"></i>Kids & Babies Clothes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-tshirt"></i>Men & Women Clothes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-mobile-alt"></i>Gadgets & Accessories</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-microchip"></i>Electronics & Accessories</a>
                                </li>
                            </ul> --}}
                    <div class="card-body">
                        <h5 style="text-align: center"> Kategori Produk</h5>
                        <hr>
                        @foreach ($kategori as $kategori)
                            <li class="nav-item">
                                <a href="{{ route('customer.produk_kategori', $kategori->id_kategori) }}"
                                    style="color:rgb(239, 51, 98);text-align:left;font-size:15px">{{ Str::title($kategori->nama_kategori) }}</a>
                            </li>
                        @endforeach
                    </div>
                        </nav>
                    </div>
                    <div class="sidebar-widget brands">
                        <h2 class="title">Our Brands</h2>
                        <ul>
                            <li><a href="#">Nulla </a><span>(45)</span></li>
                            <li><a href="#">Curabitur </a><span>(34)</span></li>
                            <li><a href="#">Nunc </a><span>(67)</span></li>
                            <li><a href="#">Ullamcorper</a><span>(74)</span></li>
                            <li><a href="#">Fusce </a><span>(89)</span></li>
                            <li><a href="#">Sagittis</a><span>(28)</span></li>
                        </ul>
                    </div>

                    <div class="sidebar-widget tag">
                        <h2 class="title">Tags Cloud</h2>
                        <a href="#">Lorem ipsum</a>
                        <a href="#">Vivamus</a>
                        <a href="#">Phasellus</a>
                        <a href="#">pulvinar</a>
                        <a href="#">Curabitur</a>
                        <a href="#">Fusce</a>  
                        <a href="#">Sem quis</a>
                        <a href="#">Mollis metus</a>
                        <a href="#">Sit amet</a>
                        <a href="#">Vel posuere</a>
                        <a href="#">orci luctus</a>
                        <a href="#">Nam lorem</a>
                    </div>
                </div>
                <!-- Side Bar End -->
            </div>
        </div>
    </div>
    <!-- Product List End -->

    <!-- Brand Start -->
    <div class="brand">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <i class="mdi mdi-truck-fast text-success font-30"></i>
                            <h4 class="header-title">Fast Delivery</h4>
                            <p class="text-muted mb-0">
                                Pengiriman Menggunakan Biro Jasa Terpecaya Yaitu JNE
                            </p>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <i class="mdi mdi-refresh text-danger font-30"></i>
                            <h4 class="header-title">Returns in 30 Days</h4>
                            <p class="text-muted mb-0">
                                Jaminan Uang Kembali Apa Bila Barang Tidak Sampai
                            </p>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <i class="mdi mdi-headset text-warning font-30"></i>
                            <h4 class="header-title">Online Support 24/7</h4>
                            <p class="text-muted mb-0">
                                Customer Support Dapur Anita Siap Melayani Pada Jam Kerja 08.00 - 16.00.
                            </p>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <i class="mdi mdi-wallet text-purple font-30"></i>
                            <h4 class="header-title">Secure Payment</h4>
                            <p class="text-muted mb-0">
                                Pembayaran Aman Menggunakan Sistem Transfer Pembayaran Bank Konvensional
                            </p>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div> 
                <!--end col-->
            </div>
        </div>
    </div>
    <!-- Brand End -->

    <!-- Footer Start -->
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h2>Get in Touch</h2>
                        <div class="contact-info">
                            <p><i class="fa fa-map-marker"></i>123 E Store, Los Angeles, USA</p>
                            <p><i class="fa fa-envelope"></i>email@example.com</p>
                            <p><i class="fa fa-phone"></i>+123-456-7890</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h2>Follow Us</h2>
                        <div class="contact-info">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h2>Company Info</h2>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Condition</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h2>Purchase Info</h2>
                        <ul>
                            <li><a href="#">Pyament Policy</a></li>
                            <li><a href="#">Shipping Policy</a></li>
                            <li><a href="#">Return Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row payment align-items-center">
                <div class="col-md-6">
                    <div class="payment-method">
                        <h2>We Accept:</h2>
                        <img src="img/payment-method.png" alt="Payment Method" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="payment-security">
                        <h2>Secured By:</h2>
                        <img src="img/godaddy.svg" alt="Payment Security" />
                        <img src="img/norton.svg" alt="Payment Security" />
                        <img src="img/ssl.svg" alt="Payment Security" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Footer Bottom Start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 copyright">
                    <p>Copyright &copy; <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
                </div>

                <div class="col-md-6 template-by">
                    <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->

    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

@endsection


