@extends('layouts.app')
@section('page_title')
    Cart | {{ env('APP_NAME') }}
@endsection
@section('page_content')

    <div class="dz-bnr-inr style-1" style="background-image:url('assets/images/banner/shop-2.jpg');">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Cart</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cart</li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <section class="content-inner">
        <div class="container">

            @php
                $orders = session()->has('cart') ? session()->get('cart') : []; $total = 0;
            @endphp

            <div class="table-responsive">
                <table class="table table-sm cart">
                    <thead>
                        <tr>
                            <th colspan="2">Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($orders) > 0)
                            @foreach ($orders as $ord)
                            @php
                                $ord = json_decode(json_encode($ord));
                                $total += $ord->total;
                                $ser = \App\Models\Store::find($ord->id);
                            @endphp
                                <tr>
                                    <td colspan="2">
                                        <h5>{{$ord->item}}</h5>
                                        <small><i>Delivery: </i> <b>{{delivery($ser->on_del)}}</b></small>
                                    </td>
                                    <td>{{money($ord->price)}}</td>
                                    <td>
                                        <div class="quantity btn-quantity style-1">
                                            <input class="quantity-input" type="number" disabled value="{{$ord->qty}}" name="demo_vertical2"/>
                                        </div>
                                    </td>
                                    <td><strong>{{money($ord->total)}}</strong></td>
                                    <td><a href="javascript:void(0);"><i class="flaticon-close"></i></a></td>
                                </tr>
                            @endforeach
                        @endif
                        <tr>
                            <td colspan="5" align="right">Total: <big> <strong>{{money($total)}}</strong></big></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td colspan="6">
                                <div class="row">
                                    <div class="col-12 text-md-end text-start">
                                        <a href="/store" class="btn btn-sm btn-outline-secondary m-r10 mb-md-0 mb-2">Continue Shoping</a>

                                            @if ($total > 0)
                                                <button class="btn btn-sm btn-secondary con_pay" type="button">Check Out</button>
                                            @endif
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>


        </div>
    </section>


    <div class="modal fade" id="checkout">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Billing Details</h4>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/checkout" class="row" id="checkoutform">@csrf
                        <div class="col-md-12 mb-2 form-group">
                            <label>Full Name <span class="text-danger">*</span> </label>
                            <input type="text" name="name" class="form-control" placeholder="Enter your fullname">
                            <input type="hidden" name="total"  value="<?= $total ?>" >
                        </div>
                        <div class="col-md-6 mb-2 form-group">
                            <label>Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="col-md-6 mb-2 form-group">
                            <label>Phone <span class="text-danger">*</span></label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Address/State/Country <span class="text-danger">*</span></label>
                            <textarea name="address" class="form-control" cols="2"></textarea>
                        </div>
                        <div class=" col-md-12 mt-3 d-flex justify-content-end">
                            <button class="btn btn-primary">Continue To Payment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <script>
        $(function() {

            $('.con_pay').on('click', function() {
                $('#checkout').modal('show');
            })

            $('.btn-close').on('click', function() {
                $('#checkout').modal('hide');
            })
        })
    </script>
@endsection
