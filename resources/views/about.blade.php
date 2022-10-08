@extends('layouts.app')
@section('page_title')
    About | {{ env('APP_NAME') }}
@endsection
@section('page_content')
    <style>
        .iconDetails {
            margin-left: 2%;
            float: left;
            width: 20%;
            margin-right: 7px;
            border-radius: 50%;
        }

        .container2 {
            width: 100%;
            height: auto;
            padding: 1%;
        }
    </style>
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
                        <h4>Life Support Christian Counseling Ministries</h4>
                        <p>
                            The Life Support Christian Counseling Ministries started in the heart of the holy land (Israel)
                            in 1996. Our mission as the name implies is to utilize our professional skills to provide
                            support, hope and direction to those experiencing emotional or relational difficulties
                            especially Africans in diaspora, who as a result of relocation to a different world and culture
                            are faced with enormous challenge of maintaining the sanity of their marriage
                            <br> We create awareness and provides research based information about the problem that the
                            contemporary society is having on family and marriages.

                        </p>
                    </div>


                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <a href="/contact" class="btn btn-primary m-b15 btn-rounded">Contact Us</a>
                        <div class="contact-user m-b15">
                            <img src="{{ asset('assets/images/pic1.jpg') }}" alt="">
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
                            <li>Tell a friend and bring the friend along to our next family clinic </li>
                            <li>Make a contribution, write a check today to life support Ministries</li>
                            <li>By praying for the work of the ministry</li>

                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="wow fadeInUp list-check-4" data-wow-delay="1.0s">
                            <li>Commit to support us by making financial contributions to our zenith bank account number
                                1016342094</li>
                            <li>Buy and download one or more of our recorded audio and video for yourself or as gift to
                                another friend/couple</li>
                            <li>Purchase one or more of our books (How to avoid marital failure or Living well and aging
                                well) on our Website or Amazon.
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="content-inner">
        <div class="container">
            <div class="row about-bx8">
                <div class="col-lg-12 align-self-center">
                    <div class="section-head style-2">



                        <div class='container2'>


                            <div>
                                <img src="{{ asset('assets/images/pic3.jpg') }}" class="iconDetails">
                            </div>
                            <h5 class="text-primary mb-0 pb-0"> Meet Our Founder</h5>
                            <div style="font-size: 1em">
                                <h3 style="font-size: 2em;">Rev. Albert Tope Ojo <small>(aka Topman)</small> </h3>
                                <p>
                                    an anointed servant of God, born in Nigeria and began ministerial work at a very
                                    youthful age of 17. Having served in various Christian leadership positions in
                                    Fellowships and churches at local, National and International levels, he has started his
                                    unique role in the Lord’s end-time- army Pastor Tope Ojo, has traveled extensively
                                    preaching and planting churches. He has preached and conducts seminars/conferences in
                                    USA, Nigeria, Israel, Canada, Europe and South Africa. He is particularly passionate and
                                    burdened about the families of fellow Africans in diaspora, who are faced with the
                                    enormous challenge of multicultural forces militating against them in foreign land.
                                </p>
                                <p>
                                    He is the CEO of Life Support Christian Counseling Ministries, a ministry that is
                                    engaged in proactive ways of helping couples build and nurture stronger and healthier
                                    relationships. The distinction of this servant of God lies in the provocative candor of
                                    his ideas and his transformation of marriage issues into a practical and joyful
                                    experience. His proactive and unconventional ideas have great implications for
                                    contemporary family relationships, with real life testimonies following his
                                    ministrations as you’re about to witness from this presentation. He is a Board Certified
                                    Pastoral Counselor, a member of the American Association of Christian Counselors (AACC),
                                    and the International Board of Christian Counselors (IBCC).
                                </p>
                                <p>
                                    His areas of specialties include:
                                <div class="row m-b20">
                                    <div class="col-sm-4">
                                        <ul class="wow fadeInUp list-check-4" data-wow-delay="1.0s">
                                            <li>Marriage Enrichment Seminars</li>

                                            <li>Sexual/Alcohol Addiction Restoration</li>
                                            <li>Anger Management</li>

                                            <li>Youths & Young Adults Empowerment</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="wow fadeInUp list-check-4" data-wow-delay="1.0s">
                                            <li>Single Parenting Workshops </li>
                                            <li>Parental Education Seminars</li>

                                            <li>Divorce Prevention & Recovery</li>
                                            <li>Life Coaching & Mentoring</li>

                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="wow fadeInUp list-check-4" data-wow-delay="1.0s">
                                            <li>Pre-Marital Counseling Seminars</li>
                                            <li>Grief Support</li>
                                            <li>Relationship Reconciliation</li>
                                        </ul>
                                    </div>
                                </div>
                                </p>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-6 m-b30">
                    <div class="dz-media">
                        <img src="images/about/pic3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
