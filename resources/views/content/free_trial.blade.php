       <!--====== Page title area Start ======-->
       <section class="page-title-area" style="background-image: url('assets/img/home/banner.png');">
        <div class="container">
            <div class="page-title-content text-center">
                <h1 class="page-title" style="color: white;">Start Your 30 Day FREE Trial</h1>

                <ul class="breadcrumb-nav">
                    <li><a href="/" style="color: white;">Home</a></li>
                    <li class="active" style="color: white;">Free Trial</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== Page title area End ======-->
    <section class="service-section p-t-40 p-b-40" style="background-color: #004685;">
        <div class="container">
            <!-- Common Heading -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="common-heading tagline-boxed heading-white text-center">
                        <h2 class="title"> Enabling People To Truly Change Lives, and Make a Great Living in the Process</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="blog-area p-t-130 p-b-130">
        <div class="container">
            <div class="row justify-content-lg-start justify-content-center">
               
                <div class="col-lg-6 offset-xl-3 col-md-10">
                    <div class="contact-form-area m-t-md-100">

                    <div class="common-heading tagline-boxed m-b-40">
                            <h4 class="title p-b-20">Start Your 30 Day FREE Trial</h4>
                            
                            <div class="col-lg-12 p-b-20">
                            <img src="assets/img/home/step1.png" class="plan-icon">
                            </div>

                            <p>No contracts, downgrade or cancel your account anytime with a single click from your dashboard...</p>
                        </div>
 
                        <div class="contact-form-v2">
                        <form method="POST" id="contactForm2" validate>
                                @csrf
                                <div class="form-group input-field m-b-30">
                                    <input type="text" id="full_name" placeholder="Full Name" name="name" required="" data-error="Please enter your name" required>
                                    <label for="name">Name</label>
                                    <div class="help-block with-errors"></div>
                                <div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div></div>
                                <div class="form-group input-field m-b-30">
                                    <input type="email" id="email" placeholder="Email Address" name="email" required="" data-error="Please enter your Email" required>
                                    <label for="email">Email</label>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group input-field m-b-20">* In the next step you will be asked to enter your billing information. We use Credit Repair to process your application.</div>

                                <div class="form-group input-field m-b-20">* 30 days free from today, then just $179/month. Cancel yourself under My Account or <a href="contact-us">email support</a>. I also agree to the <a href="terms">terms of service</a> and <a href="privacy">privacy policy</a>.
                                </div>



                            <div class="common-heading tagline-boxed m-b-30 hidden" id="hid">
                            <span class="tagline" id="success-message2" style="margin-bottom: 0px;   background-color: #28a745; "></span></div>

                            <div class="form-group mb-0 input-field">
                                    <button type="submit" id="btn2" class="template-btn disabled" style="pointer-events: all; background-color: #de2c63; border: 2px solid #de2c63;">Create My Account <i class="fas fa-arrow-right"></i></button>
                                </div>
                            </form>

                            <div class="col-lg-12 p-t-40">
                            <img src="assets/img/home/reviews.png"class="plan-icon">
                            </div>

                            <div class="col-lg-12 p-t-20">
                            <a target="_blank" href="https://recurly.com/platform/"><img src="assets/img/home/recurly.png"class="plan-icon"></a>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>