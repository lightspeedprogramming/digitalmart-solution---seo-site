<?php
    $title = "Contact Us";
    include "header.php";
?>

        <!--Start Page Content-->
        <section class="page-content">
             <!--Start Page Title-->
            <div class="pg-title breadcrumb-image">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb-inner price-page">
                                <h1 class="page-title">Contact</h1>
                                <div class="breadcrumbs">
                                    <a class="f-weight-700" href="index.html">Home</a>
                                    <span>/ Contact</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Page Title-->

            <!--Start Contact Wrap-->
            <div class="contact-wrap">
                <!--Start Container-->
                <div class="container">
                    <!--Contact Map-->
                    <!--Start Row-->
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <!--Start Contact Form-->
                            <div class="contact-form">
                                <div class="heading-title text-center">
                                    <span class="subtitle">Contact Now</span>
                                    <h2 class="f-weight-700 margin-0">Get In Touch</h2>
                                    <div class="border"></div>
                                </div>
                                <form action="mailsend.php" name="contact-form" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-element">
                                                <input type="text" class="form-control input-field" id="name" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-element">
                                                <input type="text" class="form-control input-field" id="phone" placeholder="Your Phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group form-element">
                                                <input type="email" class="form-control input-field" id="email" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group form-element">
                                                <input type="text" class="form-control input-field" id="subject" placeholder="Your Subject">
                                            </div>
                                            <div class="form-group form-element">
                                                <textarea id="message" cols="30" rows="10" class="form-control input-field" placeholder="Write Your Message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-frm-btn text-center">
                                        <button name="submit" type="submit" class="cont-btn">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <!--End Contact Form-->
                        </div>
                    </div>
                    <!--End Row-->
                </div>
                <!--End Container-->
            </div>
            <!--End Contact Wrap-->
        </section>
        <!--End Page Content-->
        
<?php
    include 'footer.php';
?>