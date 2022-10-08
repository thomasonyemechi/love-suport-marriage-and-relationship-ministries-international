@extends('layouts.app')
@section('page_title')
    Cart | {{ env('APP_NAME') }}
@endsection

@php
$scart = \App\Models\Scart::where('track_id', $track_id)->first();
$item = $scart->items[0];
@endphp
@section('page_content')
    <div class="dz-bnr-inr style-1" style="background-image:url({{ asset('assets/images/banner/shop2.jpg') }});">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1 class="text-primary">Checkout Sucessfull</h1>
            </div>
        </div>
    </div>

    <section class="content-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 col-12">
                    <!-- Card -->
                    <div class="card  mb-3 mb-lg-0">
                        <div class="card-body text-center">
                            <h1 class="mb-0" style="font-size:80px"><i class="fa fa-check-circle text-success"></i></h1>

                            <h1> PAYMENT SUCCESSFUL!</h1>
                            @if ($scart->items[0]->on_del == 1)
                                <h5>An Mail Containing The Download Link Of Purchased Malterial Has Been Seen To Your Email
                                    Account </h5>
                            @endif
                            <a href="/" class="btn btn-primary">Home</a>
                            <a href="/store" class="btn btn-secondary">Continue Shopping</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-12">
                    <div class="card mb-3 mb-4">
                        <div class="card-header">
                            <h3 class="mb-0">Payment Summary</h3>
                        </div>

                        <div class="p-4">
                            <div class="mb-1">
                                <span class="text-dark h4" id="prodprice">
                                    Price: <p
                                        class="d-inline animate__animated animate__flash animate__slow animate__infinite">
                                        {{ money($scart->total) }} </p>
                                </span>
                            </div>
                            <div class="mb-3">
                                <span class="text-dark h5" id="prodtype">
                                    Transaction Type: <p
                                        class="d-inline animate__animated animate__flash animate__slow animate__infinite">
                                        Item Purchase</p>
                                </span>
                            </div>
                            <b>Other Information</b>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1">
                                   <b>Item:</b> {{ $item->item }}
                                </li>
                                <li class="mb-1">
                                    <b>Order Id:</b> {{ $scart->trno }}
                                </li>
                                <li class="mb-1">
                                    <b>Date:</b> {{ $scart->created_at }}
                                </li>
                                <li class="mb-1">
                                    <b>Malterial Can be Downloaded Up To 5 Times</b>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
@endsection
