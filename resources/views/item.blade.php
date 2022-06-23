@extends('layouts.app')
@section('page_title')
    Store |  {{$item->item}}
@endsection
@section('page_content')


<style>
    .simg {
        width: 100%;
        height: 700px;
    }

    .simg {
        object-fit: cover;
    }
</style>



<div class="dz-bnr-inr style-2" style="background-image:url('{{ asset('assets/store/'.$item->photo) }}');">
    <div class="container">
        <div class="dz-bnr-inr-entry">
            <h1>Store</h1>
            <!-- Breadcrumb Row -->
            <nav aria-label="breadcrumb" class="breadcrumb-row">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/store">store</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$item->item}}</li>

                </ul>
            </nav>
            <!-- Breadcrum  End -->
        </div>
    </div>
</div>


<section class="content-inner">
    <div class="container">

        <div class="row m-b60 m-sm-b30">
            <div class="col-xl-6 col-lg-6 m-b40">
                <div class="row sticky-top">
                    <div class="col-12">
                        <div class="swiper-container single-image-slider sync1 lightgallery">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="dz-thum-bx">
                                        <img class="simg" src="{{ asset('assets/store/'.$item->photo) }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 m-b40">
                <form method="post" class="cart p-l30 p-md-l0">
                    <div class="dlab-post-title ">
                        <h4 class="post-title">{{$item->item}}</h4>
                        <p class="m-b30">{{$item->description}}</p>
                    </div>
                    <div class="position-relative">
                        <h3 class="m-tb10"> {{money($item->price)}} </h3>
                        <div class="shop-item-rating">
                            <i>File Type </i> <br>
                            <b><span>{{type($item->type)}}</span></b>
                        </div>
                    </div>
                    <div class="shop-item-tage m-b30">
                        <span>Delivery : </span>
                        <a href="javascript:;">{{delivery($item->delivery)}}</a>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-4">
                            <div class="widget">
                                <div class="widget-title mb-3">
                                    <h6 class="title">Select quantity</h6>
                                    <div class="dz-separator bg-primary"></div>
                                </div>
                                <div class="quantity btn-quantity style-1">
                                    <input id="demo_vertical2" type="number" min="1" value="1" name="qty"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary"><i class="ti-shopping-cart m-r10"></i> Add To Cart</button>
                    <br><br>
                    <h4>Description</h4>
                    <p>{{$item->more}}</p>
                </form>


            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="swiper-container related-item-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="item-box">
                                <div class="item-img">
                                    <img src="assets/images/product/item1.jpg" alt="">
                                    <span class="badge bg-success">Sale</span>
                                    <div class="item-info-in">
                                        <ul>
                                            <li><a href="javascript:void(0);"><i class="ti-shopping-cart"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="ti-eye"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="ti-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-info text-center">
                                    <h4 class="item-title"><a href="shop-grid-3.html">Denim Jeans</a></h4>
                                    <ul class="item-review">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <h4 class="item-price">$400</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next-related"></div>
                    <div class="swiper-button-prev-related"></div>
                </div>
            </div>
    </div>
</section>

@endsection
