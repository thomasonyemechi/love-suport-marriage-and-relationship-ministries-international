@extends('layouts.app')
@section('page_title')
    Contact Us | {{ env('APP_NAME') }}
@endsection
@section('page_content')

<div class="dz-bnr-inr style-2" style="background-image:url('{{ asset('assets/images/banner/bnr7.jpg') }}');">
    <div class="container">
        <div class="dz-bnr-inr-entry">
            <h1>Contact Us</h1>
            <!-- Breadcrumb Row -->
            <nav aria-label="breadcrumb" class="breadcrumb-row">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ul>
            </nav>
            <!-- Breadcrumb Row End -->
        </div>
    </div>
</div>


<section class="content-inner">
    <div class="container">
        <div class="row about-bx9">
            <div class="col-lg-6 m-b30">
                <div class="dz-media">
                    <img src="{{ asset('assets/images/about/pic4.jpg') }}" alt="">
                    <div class="widget widget_getintuch style-1 bg-primary">
                        <ul>
                            <li>
                                <i class="flaticon-placeholder"></i>
                                <span>{{ env('LOCATION') }}</span>
                            </li>
                            <li>
                                <i class="flaticon-telephone"></i>
                                <span>{{ env('PHONE') }} <br> {{ env('PHONE_ALT') }}</span>
                            </li>
                            <li>
                                <i class="flaticon-email"></i>
                                <span>{{ env('EMAIL') }} <br> {{ env('EMAIL') }} </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-b30 align-self-center">
                <div class="section-head style-2">
                    <h2 class="title">Get An Adviser</h2>
                    <p>{{env('APP_NAME_SHORT ')}} aims to help families build a strong family foundation. <br> Please complete the form on the right to connect with a member of our team.</p>
                </div>
                <form class="dz-form dzForm" method="POST" action="/sendcontactmessage" >@csrf
                    <div class="row sp10">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <input type="text" class="form-control" name="name" placeholder="Full Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="email" class="form-control" name="email" placeholder="Email Adress">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="text" class="form-control" name="phone" placeholder="Phone No.">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-group">
                                <textarea name="message" rows="5" class="form-control" placeholder="Message"> {{ Session::get('message') }}</textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button name="submit" type="submit" value="submit" class="btn btn-primary btn-rounded">Send Message!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="map-iframe style-2">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.3825624477!2d75.65046970649679!3d26.88544791796718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C+Rajasthan!5e0!3m2!1sen!2sin!4v1500819483219" class="align-self-stretch radius-sm" style="border:0; width:100%; min-height:100%;" allowfullscreen></iframe>
</div>

@endsection
