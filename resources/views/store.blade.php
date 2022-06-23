@extends('layouts.app')
@section('page_title')
    Store | {{ env('APP_NAME') }}
@endsection
@section('page_content')




<div class="dz-bnr-inr style-2" style="background-image:url('{{ asset('assets/images/banner/bnr3.jpg') }}');">
    <div class="container">
        <div class="dz-bnr-inr-entry">
            <h1>Store</h1>
            <!-- Breadcrumb Row -->
            <nav aria-label="breadcrumb" class="breadcrumb-row">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Store</li>
                </ul>
            </nav>
            <!-- Breadcrumb Row End -->
        </div>
    </div>
</div>


<section class="content-inner">
    <div class="container">
        <div class="row">
            @php
                $items = App\Models\Store::orderby('id', 'desc')->paginate(15)
            @endphp

            @foreach ($items as $item)
                <div class="col-lg-4 col-sm-6">
                    <div class="item-box m-b30">
                        <div class="item-img">
                            <img class="simg" style="height: 450px" src="{{asset('assets/store/'.$item->photo) }}" alt="">
                            <span class="badge bg-success">{{type($item->type)}}</span>
                            <div class="item-info-in">
                                <ul>
                                    <li><a href="javascript:void(0);"><i class="ti-shopping-cart"></i></a></li>
                                    <li><a href="/store/{{$item->slug}}"><i class="ti-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item-info text-center">
                            <h4 class="item-title"><a href="/store/{{$item->slug}}">{{$item->item}}</a></h4>
                            <h6 class="item-price">{{money($item->price)}}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
