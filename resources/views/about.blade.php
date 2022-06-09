@extends('layouts.app')
@section('page_title')
    About | {{ env('APP_NAME') }}
@endsection
@section('page_content')

<div class="dz-bnr-inr style-2" style="background-image:url('{{ asset('assets/images/banner/bnr1.jpg') }}');">
    <div class="container">
        <div class="dz-bnr-inr-entry">
            <h1>About Us</h1>
            <nav aria-label="breadcrumb" class="breadcrumb-row">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ul>
            </nav>
        </div>
    </div>
</div>




<section class="content-inner">
    <div class="container">
        <div class="row about-bx6">
            <div class="col-lg-6 m-b30">
                <div class="dz-media">
                    <img src="{{ asset('assets/images/about/pic1.jpg') }}" class="main-img" alt="">
                    <img src="{{ asset('assets/images/about/pic2.jpg') }}" class="ov-img" alt="">
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="section-head style-2">
                    <h2>Get To Know Your Relationship</h2>
                    <p>In hac habitasse platea dictumst. Aliquam rutrum tellus massa, in pellentesque arcu vestibulum vehicula. Vivamus elementum turpis vel porttitor accumsan. Cras imperdiet velit lectus, id malesuada magna vulputate id. </p>
                </div>

                <div class="row m-b20">
                    <div class="col-sm-6">
                        <ul class="wow fadeInUp list-check-4" data-wow-delay="2.0s">
                            <li>Duis laoreet dui at eros  lacinia</li>
                            <li>Quisque a justo libero</li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="wow fadeInUp list-check-4" data-wow-delay="2.0s">
                            <li>Curabitur non nibh</li>
                            <li>Morbi finibus purus eget</li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <a href="contact-us.html" class="btn btn-primary m-b15 btn-rounded">Contact Us</a>
                    <div class="contact-user m-b15">
                        <img src="{{ asset('assets/images/contact/pic1.jpg') }}" alt="">
                        <div class="info">
                            <h4 class="num m-b0">+91 123 4567 891</h4>
                            <span class="manage text-primary">Manager At ConsultZonea</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="bg-gray half-shape-top-w">
    <div class="container">
        <div class="counter-box">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                    <div class="counter-style-3">
                        <div class="counter-num text-primary">
                            <span class="counter">35</span>
                        </div>
                        <span class="counter-text">Years Of<br>Experience</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                    <div class="counter-style-3">
                        <div class="counter-num text-primary">
                            <span class="counter">50</span>+
                        </div>
                        <span class="counter-text">Happy To<br>Relationship</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                    <div class="counter-style-3">
                        <div class="counter-num text-primary">
                            <span class="counter">70</span>+
                        </div>
                        <span class="counter-text">Cup Of<br>Coffee</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                    <div class="counter-style-3">
                        <div class="counter-num text-primary">
                            <span class="counter">90</span>+
                        </div>
                        <span class="counter-text">Our Happy<br>Clients</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="content-inner">
    <div class="container">
        <div class="row about-bx8">
            <div class="col-lg-6 align-self-center">
                <div class="section-head style-2">
                    <h2>Reasons Why We Are Best</h2>
                    <p>Aliquam sem lorem, egestas sed sollicitudin in, tristique sit amet purus risus urna, fringilla sit amet pulvinar vitae, pellentesque ut ante onec pretium finibus fermentum raesent elit nibh, iaculis quis mattis in, tempus sed mauris.</p>
                </div>
                <div class="row icon-row">
                    <div class="col-sm-6">
                        <div class="icon-bx-wraper m-b30">
                            <div class="m-b20">
                                <img src="{{ asset('assets/images/services/ico4.png') }}" alt="">
                            </div>
                            <div class="icon-content">
                                <h4 class="dz-title">The Best User Interface</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="icon-bx-wraper m-b30">
                            <div class="m-b20">
                                <img src="{{ asset('assets/images/services/ico5.png') }}" alt="">
                            </div>
                            <div class="icon-content">
                                <h4 class="dz-title">Get The Best Advice Consultancy</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="dz-media">
                    <img src="{{ asset('assets/images/about/pic3.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="row spno">
        <div class="col-md-5">
            <div class="team-wrapper bg-secondary">
                <div class="section-head style-2 wow fadeInUp" data-wow-delay="1s">
                    <h2 class="text-white">Our Expert Best Advisor</h2>
                    <p class="text-white">Donec ac vehicula lectus, eu sollicitudin enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lacinia nunc nec purus viverra, a fringilla magna vehicula. In vitae odio mauris.</p>
                </div>
                <a href="javascript:void(0);" class="btn btn-primary btn-rounded wow fadeInUp" data-wow-delay="1.5s">View All Team</a>
            </div>
        </div>
        <div class="col-md-7">
            <div class="swiper-container team-swiper-3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="dz-team style-3">
                            <div class="dz-media">
                                <img src="{{ asset('assets/images/team/pic1.jpg') }}" alt="">
                            </div>
                            <div class="dz-content">
                                <div>
                                    <h4 class="dz-name"><a href="#">Sarah Albert</a></h4>
                                    <h6 class="dz-position">Employe</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="content-inner-1 bg-gray">
    <div class="container">
        <div class="section-head text-center style-2 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
            <h2>What Our Client Say’s</h2>
        </div>
        <div class="testimonial-wrapper-2">
            <div class="swiper-container testimonial-swiper-3">
                <div class="swiper-wrapper">
                    @php
                        $testimonies = App\Models\Testimony::orderby('id', 'desc')->limit(7)->get();
                    @endphp
                    @foreach ($testimonies as $test)
                        <div class="swiper-slide">
                            <div class="testimonial-3">
                                <div class="testimonial-pic">
                                    <img src="{{ asset('assets/images/testimonials/'.$test->photo) }}" alt="">
                                </div>
                                <div class="testimonial-info">
                                    <div class="info">
                                        <h4 class="testimonial-name">{{$test->name}}</h4>
                                    </div>
                                    <div class="testimonial-text">
                                        <p> {{$test->testimony}} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="btn-prev swiper-button-prev-test"><i class="flaticon-left-arrow"></i></div>
            <div class="btn-next swiper-button-next-test"><i class="flaticon-right-arrow"></i></div>
            <div class="swiper-container testimonial-swiper-thumb">
                <div class="swiper-wrapper">
                    @foreach ($testimonies as $test)
                        <div class="swiper-slide">
                            <div class="dz-media">
                                <img src="{{ asset('assets/images/testimonials/'.$test->photo) }}" alt="">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>










@endsection
