@extends('customer.layout.master')

@section('content')
    <div class="container-fluid">
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
                    @forelse ($produk as $data)
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
                                    <a href="#"><i class="fa fa-heart"></i></a>
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
                </div>
                    @empty
                    <div class="alert alert-outline-danger" role="alert">
                        <strong>Maaf </strong> Produk Saat ini Tidak Tersedia.
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
