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
            <div class="col-lg-6 align-middle m-b30">
                <div class="section-head style-2">
                    <h4>About Life suppport christain counseling ministries</h4>
                    <p>The life support christain counselling ministries started in the heart of the holy land (isreal) in  19996
                        <br><br>
                        Our mission as the name implies is to uitilze our professional skills to provide support, hope and direction to those experiencing emotional or relational difficulties.
                        especially Africans in diaspora, who as a result of relocation to a diffent world and culture are faced with enormous challenge of maintaining the sancity of their marriage
                        <br><br>
                        We create awareness and provides research based information about the pproblem that the contemporary society is having on family and marriages

                    </p>
                </div>


                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <a href="/contact" class="btn btn-primary m-b15 btn-rounded">Contact Us</a>
                    <div class="contact-user m-b15">
                        <img src="{{ asset('assets/images/contact/pic1.jpg') }}" alt="">
                        <div class="info">
                            <h4 class="num m-b0">+91 123 4567 891</h4>
                            <span class="manage text-primary"> Life Support Ministries</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="bg-gray">
    <div class="container">
        <div class="counter-box">
            <div class="col-12 text-center style-2 wow mb-3 fadeInUp">
                <h2>How To Support Our Ministry</h2>
            </div>
            <div class="row m-b20">
                <div class="col-sm-6">
                    <ul class="wow fadeInUp list-check-4" data-wow-delay="1.0s">
                        <li>Become an active partner of the ministry by signing up</li>
                        <li>Tell a freind and bring the friend along to our next family clinic </li>
                        <li>Make a contribution, write a check today to life support Ministries</li>
                        <li>By praying for the work of the minstry </li>

                    </ul>
                </div>
                <div class="col-sm-6">
                    <ul class="wow fadeInUp list-check-4" data-wow-delay="1.0s">
                        <li>Commit to suport us by making financial contributions to our zenith bank account number 1016342094 </li>
                        <li>Buy one or more of our recorded CD's for yourself or as gift to another friend/couple</li>
                        <li>Purchase one or more of our books: How to aviod marital failure or Living well and aging well</li>

                 </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content-inner">
    <div class="container">
        <div class="section-head text-center style-2 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
            <h2>Our Seminars</h2>
        </div>
        <div class="container-fluid">
            <div class="row" style="font-size: 13px">
                <div class="col-lg-3 col-md-6 panel">
                    <div class="dz-box style-2 m-b30">
                        <div class="dz-info">
                            <h4 class="title text-red text-center m-b10">Create</h4>
                            <p class="text-center">
                                We create awareness <br> and provides research based information<br> about the  problem that the
                                contemporary society is <br> having on family and marriages

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 panel">
                    <div class="dz-box style-2 m-b30">
                        <div class="dz-info">
                            <h4 class="title text-red text-center m-b10">Restoration</h4>
                            <p class="text-center">
                               We network with other organization tha provides divorce recovery and greif support programs,
                                which also deals with sexual addictions, for men and their wives.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 panel">
                    <div class="dz-box style-2 m-b30">
                        <div class="dz-info">
                            <h4 class="title text-red text-center m-b10">Consultation</h4>
                            <p class="text-center" >
                                We have opportunity to work with a variety of churches and para church organozations to help
                                strengthens their caring minstries and skills in pastoral <br> counselling
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 panel">
                    <div class="dz-box style-2 m-b30">
                        <div class="dz-info">
                            <h4 class="title text-red text-center m-b10">Collaboration</h4>
                            <p class="text-center">
                                We work together with other organization ro incrase the impact and effectivenes of the services ooffered to the community through partnership arrangements
                            </p>
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

@endsection
