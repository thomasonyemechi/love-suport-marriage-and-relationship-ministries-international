@extends('layouts.app')
@section('page_title')
    Store | {{ $item->item }}
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



    @php
    // print_r(session()->get('cart')); exit;
    @endphp



    <div class="dz-bnr-inr style-2" style="background-image:url('{{ asset('assets/store/' . $item->photo) }}');">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Store</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/store">store</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $item->item }}</li>

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
                                            <img class="simg" src="{{ asset('assets/store/' . $item->photo) }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 m-b40">
                    <form id="addtocart" class="cart p-l30 p-md-l0">
                        <div class="dlab-post-title ">
                            <input type="hidden" name="item_id" value="{{$item->id}}">
                            <h4 class="post-title">{{ $item->item }}</h4>
                            <p class="m-b30">{{ $item->description }}</p>
                        </div>
                        <div class="position-relative">
                            <h3 class="m-tb10"> {{ money($item->price) }} </h3>
                            <div class="shop-item-rating">
                                <i>File Type </i> <br>
                                <b><span>{{ type($item->type) }}</span></b>
                            </div>
                        </div>
                        <div class="shop-item-tage m-b30">
                            <span>Delivery : </span>
                            <a href="javascript:;">{{ delivery($item->on_del) }}</a>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-sm-4">
                                <div class="widget">
                                    <div class="widget-title mb-3">
                                        <h6 class="title">Select quantity</h6>
                                        <div class="dz-separator bg-primary"></div>
                                    </div>
                                    <div class="quantity btn-quantity style-1">
                                        <input id="demo_vertical2" {{ ($item->on_del == 1) ? 'disabled' : ''}} type="number" min="1" value="1"
                                            name="qty" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary"><i class="ti-shopping-cart m-r10"></i> Add To Cart</button>
                        <br><br>
                        <h4>Description</h4>
                        <p>{{ $item->more }}</p>
                    </form>


                </div>
            </div>
    </section>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script>
        $(function() {
            $('#addtocart').on('submit', function(e) {
                e.preventDefault();
                form = $(this);
                bt = $(form).find('button');
                qty = $(form).find('input[name="qty"]').val();
                item_id = $(form).find('input[name="item_id"]').val();

                $.ajax({
                    method: 'post',
                    url: '/add_item_to_cart',
                    data: {
                        '_token' : `{{ csrf_token() }}`,
                        item_id: item_id,
                        qty: qty
                    },
                    beforeSend:() => {
                        btn(bt, '', 'before')
                    }
                }).done(function(res) {
                    salat(res.message);
                    console.log(res);
                    btn(bt, '<i class="ti-shopping-cart m-r10"></i> Add To Cart', 'after')
                }).fail(function(res) {
                    concatError(res.responseJSON)
                    btn(bt, '<i class="ti-shopping-cart m-r10"></i> Add To Cart', 'after')
                    console.log(res);
                })
            })
        })
    </script>
@endsection
