@extends('layouts.admin')
@section('page_title')
    Index | {{ env('APP_NAME') }}
@endsection
@section('page_content')

<div class="dz-bnr-inr style-2" style="background-image:url('{{ asset('assets/images/banner/bnr1.jpg') }}');">
    <div class="container">
        <div class="dz-bnr-inr-entry">
            <h1>Dashboard</h1>
            <nav aria-label="breadcrumb" class="breadcrumb-row">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ul>
            </nav>
        </div>
    </div>
</div>



<div class="mt-3">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-video"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Videos</span>
                            <span class="info-box-number">
                                10
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-wallet"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Audios</span>
                            <span class="info-box-number">41,410</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-user"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Books</span>
                            <span class="info-box-number">7</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Sales</span>
                            <span class="info-box-number">2,000</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">

                    <div class="row">

                        <div class="col-md-6">
                            <div class="card card-secondary ">
                                <div class="card-header p-2">
                                    <h3 class="card-title">Latest Members</h3>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="users-list clearfix">
                                        <li>
                                            <img src="dist/img/user1-128x128.jpg">
                                            <a class="users-list-name" href="#">Alexander Pierce</a>
                                            <span class="users-list-date">Admin</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-secondary">
                                <div class="card-header p-2">
                                    <h3 class="card-title">Latest Members</h3>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="users-list clearfix">
                                        <li>
                                            <img src="dist/img/user1-128x128.jpg" >
                                            <a class="users-list-name" href="#">Alexander Pierce</a>
                                            <span class="users-list-date">Today</span>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card card-secondary">
                        <div class="card-header border-transparent p-2">
                            <h3 class="card-title">Transactions</h3>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>Transaction ID</th>
                                            <th>Item</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                            <td>Call of Duty IV</td>
                                            <td><span class="badge badge-success">Shipped</span></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer clearfix">
                            <a href="/orders/all" class="btn btn-sm btn-secondary float-right">View
                                All Orders</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="info-box mb-3 bg-warning">
                        <span class="info-box-icon"><i class="fas fa-duotone fa-credit-card"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Orders</span>
                            <span class="info-box-number">140</span>
                        </div>
                    </div>
                    <div class="info-box mb-3 bg-success">
                        <span class="info-box-icon"><i class="far fa-user"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">            </span>
                            <span class="info-box-number">8</span>
                        </div>
                    </div>
                    <div class="info-box mb-3 bg-danger">
                        <span class="info-box-icon"><i class="fas fa-calendar-alt"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Events</span>
                            <span class="info-box-number">11</span>
                        </div>
                    </div>
                    <div class="info-box mb-3 bg-info">
                        <span class="info-box-icon"><i class="fa fa-duotone fa-coins"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Testimonials</span>
                            <span class="info-box-number">163</span>
                        </div>
                    </div>
                    <div class="card card-secondary">
                        <div class="card-header p-2">
                            <h3 class="card-title">Recently Added Videos</h3>
                        </div>
                        <div class="card-body p-0">
                            <ul class="products-list product-list-in-card pl-2 pr-2">
                                <li class="item">
                                    <div class="product-img">
                                        <img src="dist/img/default-150x150.png" class="img-size-50">
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">Samsung TV
                                            <span class="badge badge-warning float-right">$1800</span></a>
                                        <span class="product-description">
                                            Samsung 32" 1080p 60Hz LED Smart HDTV.
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <a href="/product/all" class="uppercase">View All Products</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection
