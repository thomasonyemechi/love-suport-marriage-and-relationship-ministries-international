@extends('layouts.app')
@section('page_title')
@endsection
@section('page_content')
    <style>
        .lefticon {
            position: absolute;
            /*Needs to be Absolute Positioned to the parent relative div*/
            top: 40%;
            /*50% from the top*/
            left: -13px;
            /*-10px left as the width is 20px*/
        }

        .display-none {
            display: none;
        }

        .display-block {
            display: block;
        }


        .righticon {
            position: absolute;
            /*Needs to be Absolute Positioned to the parent relative div*/
            top: 40%;
            /*50% from the top*/
            right: -15px;
            /*-10px left as the width is 20px*/

        }

        .lefticon,
        .righticon {
            transform: translate(0, -50%);
            /*Moves postion of element*/
            text-align: center;
            /*Aligns icon in center vertically*/
            line-height: 17px;
            /*Aligns icon in center horizontally*/
            width: 30px;
            height: 30px;
            border: 1px solid #ff5269;
            background: #ff5269;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 15px;
            color: #FFFFFF;
        }


        .cicon:hover {
            background: #FFFFFF;
            color: #ff5269;
        }

        .text-ellipsis--2{
            text-overflow:ellipsis;
            overflow:hidden;
            display: -webkit-box !important;
            -webkit-line-clamp: 7;
            -webkit-box-orient: vertical;
            white-space: normal;
        }

        .video-title{
            text-overflow:ellipsis;
            overflow:hidden;
            display: -webkit-box !important;
            -webkit-line-clamp: 7;
            -webkit-box-orient: vertical;
            white-space: normal;
        }

    </style>
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
                            <img src="{{ asset('assets/images/pattern/pattern1.png') }}" class="pattern-img"
                                alt="">
                            <h5 class="wow fadeInUp sub-title" data-wow-delay=".5s">Relationship Support Expert</h5>
                            <h1 class="wow fadeInUp m-b20" style="font-size: 50px" data-wow-delay="1s">We Help Make <span
                                    class="text-primary">Relationship Work</span></h1>
                            <p class="wow fadeInUp m-b30" style="font-size: 25px; " data-wow-delay="1.5s">Our mission as the
                                name implies is to uitilze our professional skills to provide support, hope and direction to
                                those experiencing emotional or relational difficulties.</p>
                            <a href="about" class="wow fadeInUp m-r30 m-b20 btn btn-primary btn-rounded"
                                data-wow-delay="2.5s">Read More</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @php
    $testimonies = App\Models\Testimony::inRandomOrder()
        ->limit(7)
        ->get();
    @endphp


    <section class="content-inner-1 bg-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 wow slideInLeft" data-wow-delay="1.5s">
                    <h3 class="text-center">Testimony</h3>
                    <div class="icon-bx-wraper p-0 style-5 flip-bx">
                        @foreach ($testimonies as $test)
                            <div data-count={{ $loop->iteration }}
                                class="dz-card testimonial-card style-5 pb-0 mb-0 fadeIn {{ $loop->iteration == 1 ? 'display-block' : 'display-none' }}">
                                <div class="dz-info text-center">
                                    <div class="dz-meta mb-0">
                                        <div class="testimonial-3 p-0 ">
                                            <div class="testimonial-pic mt-0">
                                                <img src="{{ asset('assets/images/testimonials/' . $test->photo) }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="mt-0">{{ $test->name }}</h4>
                                    <p class="mb-0 text-ellipsis--2">{{ $test->testimony }}</p>
                                </div>
                            </div>
                        @endforeach
                        <div class="cicon lefticon test-prev"><i class="flaticon-left-arrow"></i></div>
                        <div class="cicon righticon test-next"><i class="flaticon-right-arrow"></i></div>

                        <a href="/testimony">
                            <p class="text-center">See All Testimonies</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow slideInLeft" data-wow-delay="1s">
                    <h3 class="text-center">Our Seminars</h3>
                    <div class="icon-bx-wraper p-0 style-5 flip-bx">
                        <div data-count=1 class="dz-card seminar-card style-5 pb-0 mb-0 fadeIn display-block">
                            <div class="dz-info text-center">
                                <h4 class="title text-primary text-center m-b10">Create</h4>
                                <p class="mb-0 text-ellipsis--2">
                                    We create awareness and provides research based information<br> about the  problem that the
                            contemporary society is <br> having on family and marriages
                                </p>

                                <h4 class="title text-primary text-center mt-3 m-b10">Restoration</h4>
                                <p class="mb-0 text-ellipsis--2">
                                    We network with other organization tha provides divorce
                                    recovery and greif support programs,
                                    which also deals with sexual addictions, for men and their wives.
                                </p>
                            </div>
                        </div>

                        <div data-count=2 class="dz-card seminar-card style-5 pb-0 mb-0 fadeIn display-none">
                            <div class="dz-info text-center">
                                <h4 class="title text-primary text-center m-b10">Consultation</h4>
                                <p class="mb-0 text-ellipsis--2">
                                    We have opportunity to work with a variety of churches and para church organozations to help
                                    strengthens their caring minstries and skills in pastoral counselling
                                </p>
                                <h4 class="title text-primary text-center mt-3 m-b10">Collaboration</h4>
                                <p class="mb-0 text-ellipsis--2">
                                    We work together with other organization to increase the impact and effectivenes of the services offered to the community through partnership arrangements
                                </p>
                            </div>
                        </div>



                        <div class="cicon lefticon sem-prev"><i class="flaticon-left-arrow"></i></div>
                        <div class="cicon righticon sem-next"><i class="flaticon-right-arrow"></i></div>

                        <a href="/about">
                            <p class="text-center">More About Us</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow slideInLeft" data-wow-delay=".5s">
                    <h3 class="text-center">Events</h3>

                    <div class="icon-bx-wraper style-5 m-b30 flip-bx">
                        <div class="front overlay-black-middle" style="background-image: url(images/services/pic3.jpg);">
                            <div class="inner">
                                <div>
                                    <div class="badge-top"><i class="fas fa-chevron-right"></i></div>
                                    <h4 class="title">Powerful Mindset</h4>
                                </div>
                            </div>
                        </div>
                        <div class="back">
                            <div class="inner">
                                <div>
                                    <div class="icon-lg m-b20">
                                        <img src="images/services/ico3.png" alt="">
                                    </div>
                                    <h4 class="title m-b15"><a href="services-details.html" class="text-white">Powerful
                                            Mindset</a></h4>
                                    <p>Integer pretium, nisi at aliquam faucibus, ligula leo sollicitudin ligula, a
                                        scelerisque magna nunc sit amet leo.</p>
                                    <a href="services-details.html" class="btn-link">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="{{ asset('assets/js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->

    <script>
        $(function() {
            $('.test-next').on('click', function() {
                testimonial( '.testimonial-card' ,'next');
            })

            $('.test-prev').on('click', function() {
                testimonial('.testimonial-card','eefnext');
            })

            $('.sem-next').on('click', function(){
                testimonial('.seminar-card','next');
            })

            $('.sem-prev').on('click', function(){
                testimonial('.seminar-card','eefnext');
            })


            function testimonial(selector,action) {
                testimonials = $(selector);
                current = '';
                testimonials.map(test => {
                    test = testimonials[test];
                    clas = $(test).attr("class").split(/\s+/);
                    clas.forEach(cla => {
                        if (cla == 'display-block') {
                            current = test;
                        }
                    });
                    last_placement = $(test).data('count');
                })
                current_placement = $(current).data('count');
                if (action == 'next') {
                    nex_placement = (current_placement + 1 <= last_placement) ? current_placement + 1 : 1;
                } else {
                    nex_placement = (current_placement - 1 >= 1) ? current_placement - 1 : last_placement;
                }

                current.classList.remove('display-block')
                current.classList.add('display-none')

                c_card = $(`${selector}[data-count=${nex_placement}]`);
                c_card.removeClass('display-none');
                c_card.addClass('display-block')
            }

            function slideTestimonail()
            {
                setInterval(() => {
                    testimonial('.testimonial-card','next');
                    testimonial('.seminar-card','next');
                }, 10000);
            }

            slideTestimonail();
        })
    </script>
@endsection
