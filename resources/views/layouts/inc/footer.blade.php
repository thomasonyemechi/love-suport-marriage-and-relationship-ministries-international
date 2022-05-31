<footer class="site-footer style-3" id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row footer-icon-wraper">
                <div class="col-lg-4 col-md-6">
                    <div class="icon-bx-wraper style-6 left m-b30">
                        <div class="icon-bx-sm border border-primary">
                            <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-placeholder"></i></a>
                        </div>
                        <div class="icon-content">
                            <h4 class="dz-tilte text-white">Location</h4>
                            <p>1247/Plot No. 39, 15th Phase, Huab Colony, Kukatpally, Hyderabad</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-bx-wraper style-6 left m-b30">
                        <div class="icon-bx-sm border border-primary">
                            <a href="javascript:void(0);" class="icon-cell"><i class="far fa-clock"></i></a>
                        </div>
                        <div class="icon-content">
                            <h4 class="dz-tilte text-white">Working Hours</h4>
                            <p>Mon To Fri 8am - 10pm <br>Sat 8am - 8pm</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-bx-wraper style-6 left m-b30">
                        <div class="icon-bx-sm border border-primary">
                            <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-email"></i></a>
                        </div>
                        <div class="icon-content">
                            <h4 class="dz-tilte text-white">Contact Us</h4>
                            <p><a href="#" class="__cf_email__">{{ env('EMAIL') }}</a> <br>{{ env('PHONE') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-sm-8">
                    <div class="widget widget_about p-r50 p-sm-r0">
                        <div class="footer-logo logo-white">
                            <a href="index.html"><img src="images/logo-white-3.png" alt=""></a>
                        </div>
                        <p class="m-b30">Integer vitae eleifend risus, in ultricies nulla. Sed euismod molestie massa.</p>

                        <form class="dzSubscribe style-2 m-b30" method="post">
                            <div class="dzSubscribeMsg"></div>
                            <div class="form-group">
                                <div class="input-group mb-0">
                                    <input class="form-control shadow" placeholder="Email Address...">
                                    <div class="input-group-addon">
                                        <button name="submit" value="Submit" type="submit" class="btn btn-primary submit_newsletter"><i class="fas fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="dz-social-icon style-2">
                            <ul>
                                <li><a class="fab fa-facebook-f" target="_blank" href="https://www.facebook.com/"></a></li>
                                <li><a class="fab fa-instagram" target="_blank" href="https://www.instagram.com/?hl=en"></a></li>
                                <li><a class="fab fa-twitter" target="_blank" href="https://twitter.com/?lang=en"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-sm-4 col-6">
                    <div class="widget widget_services">
                        <h4 class="footer-title">Our Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Testimonies</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Store</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-5 col-6">
                    <div class="widget widget_services">
                        <h4 class="footer-title">Other Services</h4>
                        <ul>
                            <li><a href="javascript:void(0);">Love & Relationship</a></li>
                            <li><a href="javascript:void(0);">Plan Your Family</a></li>
                            <li><a href="javascript:void(0);">Powerful Mindset</a></li>
                            <li><a href="javascript:void(0);">Long Relationship</a></li>
                            <li><a href="javascript:void(0);">Kids Relationship</a></li>
                            <li><a href="javascript:void(0);">24x7 Support</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-7">
                    <div class="widget widget_gallery">
                        <h4 class="footer-title">Gallery</h4>
                        <ul class="lightgallery">
                            <li>
                                <div class="dz-post-thum dz-img-effect">
                                    <span data-exthumbimage="images/gallery/pic1.jpg" data-src="images/gallery/pic1.jpg" class="lightimg" title="Image 1 Title will come here">
                                        <img src="{{ asset('assets/images/gallery/pic1.jpg') }}" alt="">
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer bottom part -->
    <div class="footer-bottom">
        <div class="container">
            <span class="copyright-text">Copyright © {{ date('Y') }} <a href="/"> {{ env('APP_NAME') }} </a>. All rights reserved.</span>
        </div>
    </div>
</footer>
