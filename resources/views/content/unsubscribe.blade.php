        <!--====== Page title area Start ======-->
        <section class="page-title-area" style="background-image: url('assets/img/home/banner.png');">
        <div class="container">
            <div class="page-title-content text-center">
                <h1 class="page-title" style="color: white;">Unsubscribe</h1>

                <ul class="breadcrumb-nav">
                    <li><a href="/" style="color: white;">Home</a></li>
                    <li class="active" style="color: white;">Unsubscribe</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== Page title area End ======-->

    

    <section class="blog-area p-t-130 p-b-130">
        <div class="container">
            <div class="row justify-content-lg-start justify-content-center text-center">
               
                <div class="col-lg-6 offset-xl-3 col-md-10">
                    <div class="contact-form-area m-t-md-100">
                        <div class="common-heading tagline-boxed m-b-40">
                            <h2 class="title">Unsubscribe Now</h2>
                        </div>
                        <div class="contact-form-v2">
                                <form method="POST" id="contactForm3" validate>
                                @csrf                            
                                <div class="form-group input-field m-b-30">
                                    <input type="email" id="email" placeholder="Email Address" name="email" required="" data-error="Please enter your Email" required>
                                    <label for="email">Email</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                                
                                <div class="common-heading tagline-boxed m-b-30 hidden" id="hiduns">
                                <span class="tagline" id="success-message3" style="margin-bottom: 0px; background-color: #28a745; "></span></div>

                                <div class="form-group mb-0 input-field">
                                    <button type="submit" class="template-btn disabled" style="pointer-events: all; cursor: pointer;">Unsubscribe <i class="fas fa-arrow-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>