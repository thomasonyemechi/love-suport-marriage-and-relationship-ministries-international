@extends('layouts.app')
@section('page_title')

@endsection
@section('page_content')


<div class="banner-three">
    <div class="follow-info">
        <h6 class="title">Follow Us</h6>
        <ul>
            <li><a class="fab fa-facebook-f" target="_blank" href="https://www.facebook.com/"></a></li>
            <li><a class="fab fa-instagram" target="_blank" href="https://www.instagram.com/?hl=en"></a></li>
            <li><a class="fab fa-twitter" target="_blank" href="https://twitter.com/?lang=en"></a></li>
        </ul>
    </div>
    <div class="container">
        <div class="banner-inner">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7 col-sm-10">
                    <div class="banner-content">
                        <img src="{{ asset('assets/images/pattern/pattern1.png') }}" class="pattern-img" alt="">
                        <h5 class="wow fadeInUp sub-title" data-wow-delay=".5s">Best Relationship Advisor</h5>
                        <h1 class="wow fadeInUp m-b20" data-wow-delay="1s">We Help Make <span class="text-primary">Relationship</span></h1>
                        <p 	class="wow fadeInUp m-b30" data-wow-delay="1.5s">Morbi pharetra fermentum facilisis. Aenean eleifend quam ante, at luctus turpis rhoncus quis. Quisque in est luctus, blandit.</p>
                        <a href="about-us.html" class="wow fadeInUp m-r30 m-b20 btn btn-primary btn-rounded" data-wow-delay="2.5s">Read More</a>
                        <div class="video-bx style-4 wow fadeInUp m-b20" data-wow-delay="2.5s" style="visibility: visible; animation-delay: 2.5s; animation-name: fadeInUp;">
                            <a class="video-btn" href="https://www.youtube.com/watch?v=XKfgdkcIUxw">
                                <span class="popup-youtube"><i class="fa fa-play"></i></span>
                                <span class="text">Presentation</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="content-inner-2">
    <div class="container">
        <div class="section-head style-2 text-center wow fadeInUp"  data-wow-delay="1s">
            <h2>Strengthen Family Relationships</h2>
            <p>
                Establishing strong family ties when schedules are full requires effort and much patience.
                {{env('APP_NAME_SHORT')}} aims to help families build a strong family foundation.
            </p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 wow slideInLeft" data-wow-delay="1.5s">
                <div class="icon-bx-wraper style-5 m-b30 flip-bx">
                    <div class="front overlay-black-middle" style="background-image: url({{ asset('assets/images/services/pic1.jpg') }});">
                        <div class="inner">
                            <div>
                                <div class="badge-top"><i class="fas fa-chevron-right"></i></div>
                                <h4 class="title">Share daily expressions of love and support</h4>
                            </div>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <div>
                                <div class="icon-lg m-b20">
                                    <img src="{{ asset('assets/images/services/ico1.png') }}" alt="">
                                </div>
                                <h4 class="title m-b15"><a href="services-details.html" class="text-white">Share daily expressions of love and support</a></h4>
                                <p>
                                    Greeting each other before leaving and arriving home with a hug or a peck on the cheek are examples to show gestures of love. Make it everyone’s habit. Also, don’t hesitate to complement each family member for jobs well-done.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow slideInLeft"  data-wow-delay="1s">
                <div class="icon-bx-wraper style-5 m-b30 flip-bx">
                    <div class="front overlay-black-middle" style="background-image: url({{ asset('assets/images/services/pic2.jpg') }});">
                        <div class="inner">
                            <div>
                                <div class="badge-top"><i class="fas fa-chevron-right"></i></div>
                                <h4 class="title">Talk together</h4>
                            </div>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <div>
                                <div class="icon-lg m-b20">
                                    <img src="{{ asset('assets/images/services/ico2.png') }}" alt="">
                                </div>
                                <h4 class="title m-b15"><a href="services-details.html" class="text-white">Talk together</a></h4>
                                <p>There are few better ways to get to know the people closest to you than by speaking with them.
                                    Talk to your partner and children regularly about their dreams, hopes and aspirations. You may be surprised what you find</p>
                                {{-- <a href="#" class="btn-link">Read More</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow slideInLeft"  data-wow-delay=".5s">
                <div class="icon-bx-wraper style-5 m-b30 flip-bx">
                    <div class="front overlay-black-middle" style="background-image: url({{ asset('assets/images/services/pic3.jpg') }});">
                        <div class="inner">
                            <div>
                                <div class="badge-top"><i class="fas fa-chevron-right"></i></div>
                                <h4 class="title">Show your appreciation</h4>
                            </div>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <div>
                                <div class="icon-lg m-b20">
                                    <img src="{{ asset('assets/images/services/ico3.png') }}" alt="">
                                </div>
                                <h4 class="title m-b15"><a href="services-details.html" class="text-white">Show your appreciation</a></h4>
                                <p>It’s not enough to feel positively toward your family; you also need to express love and appreciation in words and actions.</p>
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
                    @foreach (App\Models\Testimony::orderby('id', 'desc')->limit(5)->get() as $test)
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
                    <div class="swiper-slide">
                        <div class="dz-media">
                            <img src="images/testimonials/pic1.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="dz-media">
                            <img src="images/testimonials/pic2.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="dz-media">
                            <img src="images/testimonials/pic3.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="dz-media">
                            <img src="images/testimonials/pic4.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="dz-media">
                            <img src="images/testimonials/pic5.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="dz-media">
                            <img src="images/testimonials/pic6.jpg" alt="">
                        </div>
                    </div>
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


<section class="content-inner">
    <div class="container">
        <div class="section-head text-center style-2 wow fadeInUp" data-wow-delay="1s">
            <h2>Latest News Feed</h2>
            <p>Maecenas at massa sit amet sem porta rutrum. Nam ullamcorper mauris eu risus malesuada ultricies. Pellentesque pretium viverra felis, ac laoreet dui. </p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                <div class="dz-card style-5 m-b30 wow fadeIn" data-wow-delay=".2s" data-wow-duration="2s">
                    <div class="dz-media">
                        <img src="images/blog/blog-card/pic1.jpg" alt="">
                    </div>
                    <div class="dz-info">
                        <div class="dz-meta">
                            <ul>
                                <li class="post-date">07 <br> March</li>
                                <li class="post-catagory"><a href="javascript:void(0);">RelationShip</a></li>
                            </ul>
                        </div>
                        <h4 class="dz-title"><a href="blog-details.html">Praesent a venenatis turpis, in lacinia purus.</a></h4>
                        <p>Ut nec eleifend lorem. Nunc interdum arcu et aliquam tempor. </p>
                        <a class="link-icon" href="blog-details.html">Read More<i class="las la-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                <div class="dz-card style-5 m-b30 wow fadeIn" data-wow-delay=".2s" data-wow-duration="2s">
                    <div class="dz-media">
                        <img src="images/blog/blog-card/pic1.jpg" alt="">
                    </div>
                    <div class="dz-info">
                        <div class="dz-meta">
                            <ul>
                                <li class="post-date">07 <br> March</li>
                                <li class="post-catagory"><a href="javascript:void(0);">RelationShip</a></li>
                            </ul>
                        </div>
                        <h4 class="dz-title"><a href="blog-details.html">Praesent a venenatis turpis, in lacinia purus.</a></h4>
                        <p>Ut nec eleifend lorem. Nunc interdum arcu et aliquam tempor. </p>
                        <a class="link-icon" href="blog-details.html">Read More<i class="las la-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                <div class="dz-card style-5 m-b30 wow fadeIn" data-wow-delay=".2s" data-wow-duration="2s">
                    <div class="dz-media">
                        <img src="images/blog/blog-card/pic1.jpg" alt="">
                    </div>
                    <div class="dz-info">
                        <div class="dz-meta">
                            <ul>
                                <li class="post-date">07 <br> March</li>
                                <li class="post-catagory"><a href="javascript:void(0);">RelationShip</a></li>
                            </ul>
                        </div>
                        <h4 class="dz-title"><a href="blog-details.html">Praesent a venenatis turpis, in lacinia purus.</a></h4>
                        <p>Ut nec eleifend lorem. Nunc interdum arcu et aliquam tempor. </p>
                        <a class="link-icon" href="blog-details.html">Read More<i class="las la-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection
