
@extends('layouts.master')

@section('content')


<br>
<br>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <title>Shopee pink</title>
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta content="eCommerce HTML Template Free Download" name="keywords">
      <meta content="eCommerce HTML Template Free Download" name="description">

      <!-- Favicon -->
      <link href="img/favicon.ico" rel="icon">

      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

      <!-- CSS Libraries -->
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
      <link href="{{ asset('ecommerce-html-template/lib/slick/slick.css') }}" rel="stylesheet">
      <link href="{{ asset('ecommerce-html-template/lib/slick/slick-theme.css') }}" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>


      <!-- Template Stylesheet -->
      <link href="{{ asset('ecommerce-html-template/css/style.css') }}" rel="stylesheet">
  </head>
<body>
<div class="header">
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
        <nav class="navbar bg-light ">
            <ul class="navbar-nav">
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
            </ul>
        </nav>
    </div>
      <div class="col-md-6">
          <div class="header-slider normal-slider">
              <div class="header-slider-item">
                  <img src="{{ asset ('img/slider-1.jpg') }}" alt="Slider Image" />
                  <div class="header-slider-caption">
                      <p>Some text goes here that describes the image</p>
                      <a class="btn" href="#"><i class="fa fa-shopping-cart"></i>Shop Now</a>
                  </div>
              </div>
              <div class="header-slider-item">
                  <img src="{{ asset ('img/slider-2.jpg') }}" alt="Slider Image" />
                  <div class="header-slider-caption">
                      <p>Some text goes here that describes the image</p>
                      <a class="btn" href="#"><i class="fa fa-shopping-cart"></i>Shop Now</a>
                  </div>
              </div>
              <div class="header-slider-item">
                  <img src="{{ asset ('img/slider-3.jpg') }}" alt="Slider Image" />
                  <div class="header-slider-caption">
                      <p>Some text goes here that describes the image</p>
                      <a class="btn" href="#"><i class="fa fa-shopping-cart"></i>Shop Now</a>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-3">
          <div class="header-img">
              <div class="img-item">
                  <img src="{{ asset('img/category-1.jpg') }}" />
                  <a class="img-text" href="">
                      <p>Some text goes here that describes the image</p>
                  </a>
              </div>
              <div class="img-item">
                  <img src="{{ asset ('img/category-2.jpg') }}" />
                  <a class="img-text" href="">
                      <p>Some text goes here that describes the image</p>
                  </a>
              </div>
          </div>
      </div>
  </div>
</div>
</div>

<div class="feature"> 
<div class="container-fluid">
<div class="row align-items-center">
    <div class="col-lg-3 col-md-6 feature-col">
        <div class="feature-content">
            <i class="fab fa-cc-mastercard"></i>
            <h2>Secure Payment</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur elit
            </p>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 feature-col">
        <div class="feature-content">
            <i class="fa fa-truck"></i>
            <h2>Worldwide Delivery</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur elit
            </p>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 feature-col">
        <div class="feature-content">
            <i class="fa fa-sync-alt"></i>
            <h2>90 Days Return</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur elit
            </p>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 feature-col">
        <div class="feature-content">
            <i class="fa fa-comments"></i>
            <h2>24/7 Support</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur elit
            </p>
        </div>
    </div>
</div>
</div>
</div>

<div class="category">
<div class="container-fluid">
<div class="row">
    <div class="col-md-3">
        <div class="category-item ch-400">
            <img src="{{ asset('img/category-3.jpg')}}" />
            <a class="category-name" href="">
                <p>Some text goes here that describes the image</p>
            </a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="category-item ch-250">
            <img src="{{ asset('img/category-4.jpg')}}" />
            <a class="category-name" href="">
                <p>Some text goes here that describes the image</p>
            </a>
        </div>
        <div class="category-item ch-150">
            <img src="{{ asset('img/category-5.jpg')}}" />
            <a class="category-name" href="">
                <p>Some text goes here that describes the image</p>
            </a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="category-item ch-150">
            <img src="{{ asset('img/category-6.jpg')}}" />
            <a class="category-name" href="">
                <p>Some text goes here that describes the image</p>
            </a>
        </div>
        <div class="category-item ch-250">
            <img src={{ asset('img/category-7.jpg')}} />
            <a class="category-name" href="">
                <p>Some text goes here that describes the image</p>
            </a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="category-item ch-400">
            <img src="{{ asset('img/category-8.jpg')}}" />
            <a class="category-name" href="">
                <p>Some text goes here that describes the image</p>
            </a>
        </div>
    </div>
</div>
</div>
</div>
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- Recent Product Start -->
<div class="recent-product product">
<div class="container-fluid">
  <div class="section-header">
      <h1>Recent Product</h1>
  </div>
  <div class="row align-items-center product-slider product-slider-4">
            @php
                function rupiah($angka)
                {
                    $hasil_rupiah = 'Rp ' . number_format($angka, 2, ',', '.');
                    return $hasil_rupiah;
                }
            @endphp
            @foreach ($produk as $data)
            <div class="col-lg-3">
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
                            {{-- <a href="#"><i class="fa fa-heart"></i></a> --}}
                            <a href="{{ route('customer.produk_detail', $data->id_produk) }}"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="product-price">
                        <h3>{{ rupiah($data->harga_produk) }}</h3>
                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                    </div>
                </div>
            </div>
      @endforeach
      <div class="col-lg-3">
          <div class="product-item">
              <div class="product-title">
                  <a href="#">Product Name</a>
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
                      <img src="{{ asset('img/product-7.jpg')}}" alt="Product Image">
                  </a>
                  <div class="product-action">
                      <a href="#"><i class="fa fa-cart-plus"></i></a>
                      <a href="#"><i class="fa fa-heart"></i></a>
                      <a href="#"><i class="fa fa-search"></i></a>
                  </div>
              </div>
              <div class="product-price">
                  <h3><span>$</span>99</h3>
                  <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
              </div>
          </div>
      </div>
      <div class="col-lg-3">
          <div class="product-item">
              <div class="product-title">
                  <a href="#">Product Name</a>
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
                      <img src="{{ asset('img/product-8.jpg')}}" alt="Product Image">
                  </a>
                  <div class="product-action">
                      <a href="#"><i class="fa fa-cart-plus"></i></a>
                      <a href="#"><i class="fa fa-heart"></i></a>
                      <a href="#"><i class="fa fa-search"></i></a>
                  </div>
              </div>
              <div class="product-price">
                  <h3><span>$</span>99</h3>
                  <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
              </div>
          </div>
      </div>
      <div class="col-lg-3">
          <div class="product-item">
              <div class="product-title">
                  <a href="#">Product Name</a>
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
                      <img src="{{ asset('img/product-9.jpg')}}" alt="Product Image">
                  </a>
                  <div class="product-action">
                      <a href="#"><i class="fa fa-cart-plus"></i></a>
                      <a href="#"><i class="fa fa-heart"></i></a>
                      <a href="#"><i class="fa fa-search"></i></a>
                  </div>
              </div>
              <div class="product-price">
                  <h3><span>$</span>99</h3>
                  <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
              </div>
          </div>
      </div>
      <div class="col-lg-3">
          <div class="product-item">
              <div class="product-title">
                  <a href="#">Product Name</a>
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
                      <img src="{{ asset('img/product-10.jpg')}}" alt="Product Image">
                  </a>
                  <div class="product-action">
                      <a href="#"><i class="fa fa-cart-plus"></i></a>
                      <a href="#"><i class="fa fa-heart"></i></a>
                      <a href="#"><i class="fa fa-search"></i></a>
                  </div>
              </div>
              <div class="product-price">
                  <h3><span>$</span>99</h3>
                  <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
              </div>
          </div>
      </div>
  </div>
</div>
</div>
<!-- Recent Product End -->
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('ecommerce-html-template/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('ecommerce-html-template/lib/slick/slick.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('ecommerce-html-template/js/main.js')}}"></script>
</body>
</html>
@endsection

