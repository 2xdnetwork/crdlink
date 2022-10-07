        <!--====== Start Scroll To Top ======-->
        <a href="index.html#" class="back-to-top" id="scroll-top">
        <i class="far fa-angle-up"></i>
    </a>
    <!--====== End Scroll To Top ======-->

    
    <!--====== Start Footer ======-->
    <footer class="template-footer footer-with-image p-t-80 p-b-30">
        <div class="container">
            <div class="footer-widgets">
                <div class="row">
                    <!-- Single Footer Widget -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget text-block-widget">
                         <img src="assets/img/{{$app->request->get('api_shortname')}}-logo.svg" alt="logo" style="width: 200px;">
                            <p>Everything you need to start a life-changing credit repair business. Join the movement. Change lives.</p>
                            <a class="contact-link" href="tel:{{$app->request->get('api_phone')}}"><i class="far fa-phone"></i> {{$app->request->get('api_phone')}}</a>
                            <a class="contact-link" href="mailto:{{$app->request->get('api_email')}}"><i class="far fa-envelope"></i> {{$app->request->get('api_email')}}</a>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="d-lg-flex justify-content-center">
                            <div class="widget nav-widget">
                                <h5 class="widget-title">Resources</h5>
                                <ul>
                                    <li><a href="millionaires-club">Millionaires Club</a></li>
                                    <li><a href="products">Products & Training</a></li>
                                    <li><a href="pricing">Pricing</a></li>
                                    <li><a href="free-trial">Free Trial</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="d-lg-flex justify-content-center">
                            <div class="widget nav-widget">
                                <h5 class="widget-title">Company</h5>
                                <ul>
                                    <li><a href="about-us">About Us</a></li>
                                    <li><a href="culture">Our Culture</a></li>
                                    <li><a href="contact-us">Contact Us</a></li>
                                    <li><a href="terms">Terms and Conditions</a></li>
                                    <li><a href="privacy">Privacy Policy</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget social-widget pl-xl-5">
                            <h5 class="widget-title">Follow On</h5>
                            <p class="copyright-text m-t-20">Address: <a href="/">{{$app->request->get('api_address')}}.</a></p>
                            <p class="copyright-text m-t-20">All Rights Reserved © 2022 {{$app->request->get('api_name')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--====== End Footer ======-->