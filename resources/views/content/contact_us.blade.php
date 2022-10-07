       <!--====== Page title area Start ======-->
        <section class="page-title-area" style="background-image: url('assets/img/home/banner.png');">
        <div class="container">
            <div class="page-title-content text-center">
                <h1 class="page-title" style="color: white;">Contact Us</h1>

                <ul class="breadcrumb-nav">
                    <li><a href="/" style="color: white;">Home</a></li>
                    <li class="active" style="color: white;">Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== Page title area End ======-->


    <section class="service-details-area p-t-130 p-b-80">
        <div class="container">
            <div class="service-details-content text-center">
                
                <h2 class="service-title p-b-40">How to Contact Us?</h2>

                <p class="m-b-30 p-l-100 p-r-100">Like most software companies, we handle most inquiries by email. <br>We always reply fast by email during support operating hours Monday-Sunday 9-5 PST.</p>

                <div class="row iconic-boxes-v2">

                    <div class="col-lg-4 col-sm-6" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="iconic-box m-t-50">
                            <div class="icon">
                                <img src="assets/img/icon/cog.png" alt="Business">
                            </div>
                            <h5 class="title"><a href="#">Want to cancel?</a></h5>
                            <p>
                            It's super-easy! Just Log in, click "My Account" and click "Cancel."
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="iconic-box m-t-50">
                            <div class="icon">
                                <img src="assets/img/icon/tax.png" alt="Consulting">
                            </div>
                            <h5 class="title"><a href="#">Have a billing issue?</a></h5>
                            <p>Call us at {{$app->request->get('api_phone')}} or reach out to our team!</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="iconic-box m-t-50">
                            <div class="icon">
                                <img src="assets/img/icon/consulting.png" alt="Finance">
                            </div>
                            <h5 class="title"><a href="#">Have a question?</a></h5>
                            <p>
                             Send us your questions to our team. Fill out the form below.
                            </p>
                        </div>
                    </div>
                   
                </div>

            </div>
        </div>
    </section>















    <section class="blog-area p-t-130 p-b-130">
        <div class="container">
            <div class="row justify-content-lg-start justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7 col-sm-10">
                    <div class="contact-info-boxes-v2">
                        <div class="contact-info-box m-b-30" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                            <div class="icon icon-gradient-1">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="info-body">
                                <h5 class="title">Our Location</h5>
                                <p>{{$app->request->get('api_address')}}</p>
                            </div>
                        </div>
                        <div class="contact-info-box m-b-30" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                            <div class="icon icon-gradient-2">
                                <i class="fal fa-envelope-open-text"></i>
                            </div>
                            <div class="info-body">
                                <h5 class="title">Email Address</h5>
                                <p><a href="mailto:{{$app->request->get('api_email')}}">{{$app->request->get('api_email')}}</a></p>
                                <p><a href="www.{{$app->request->get('api_domain')}}" target="_blank">www.{{$app->request->get('api_domain')}}</a></p>
                            </div>
                        </div>
                        <div class="contact-info-box" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <div class="icon icon-gradient-3">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="info-body">
                                <h5 class="title">Urgent Call</h5>
                                <p><a href="tel:+{{$app->request->get('api_phone')}}">{{$app->request->get('api_phone')}}</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-xl-1 col-md-10">
                    <div class="contact-form-area m-t-md-100">
                        <div class="common-heading tagline-boxed m-b-40">
                            <span class="tagline">Send Us Message</span>
                            <h2 class="title">Have Any Questions ? <br> Let’s Start to Talk</h2>
                        </div>
                        <div class="contact-form-v2">
                                <form method="POST" id="contactForm1" validate>
                                @csrf
                                <div class="form-group input-field m-b-30">
                                    <input type="text" id="full_name" placeholder="Full Name" name="name" required="" data-error="Please enter your name" required>
                                    <label for="name">Name</label>
                                    <div class="help-block with-errors"></div>
                                <div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div></div>
                                <div class="form-group input-field m-b-30">
                                    <input type="text" id="phone" placeholder="Phone Number" name="phone">
                                    <label for="phone">Phone</label>
                                </div>
                                <div class="form-group input-field m-b-30">
                                    <input type="email" id="email" placeholder="Email Address" name="email" required="" data-error="Please enter your Email" required>
                                    <label for="email">Email</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group input-field m-b-30">
                                    <input type="text" id="subject" placeholder="I Would Like To Discuses" name="subject">
                                    <label for="subject">Subject</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group input-field textarea-field m-b-30">
                                    <textarea id="message" placeholder="Message" name="message" required="" data-error="Please enter your Message" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>                       
    
                                <div class="common-heading tagline-boxed m-b-30 hidden" id="hid">
                                <span class="tagline" id="success-message1" style="margin-bottom: 0px;   background-color: #28a745; "></span></div>

                                <div class="form-group mb-0 input-field">
                                    <button type="submit" class="template-btn disabled" style="pointer-events: all; cursor: pointer;">Send Message <i class="fas fa-arrow-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>