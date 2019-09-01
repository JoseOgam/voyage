<!doctype html>
<html lang="en">
<head>
    <title>contact us</title>
    @include('layouts.head')
</head>
<body id="top">
<!--header starts-->
@include('layouts.nvbar')
<!--header end-->
<section id="contact" class="s-contact">

    <div class="overlay"></div>
    <div class="contact__line"></div>

    <div class="row section-header" data-aos="fade-up">
        <div class="col-full">
            <h3 class="subhead">Contact Us</h3>
            <h1 class="display-2 display-2--light">Reach out for a new project or any inquiry</h1>
        </div>
    </div>
    <div class="row contact-content" data-aos="fade-up">

        <div class="contact-primary">

            <h3 class="h6">Send Us A Message</h3>

            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    <strong>{{ \Session::get('success') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if($errors->any())
                <div>
                    @foreach($errors->all() as $error)
                        <div class="alert alert-warning alert-dismissible fade show">
                            <strong>{{ $error }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endforeach
                </div>
            @endif

            <form name="contactForm" method="post" action="" novalidate="novalidate" enctype="multipart/form-data">

                {{ csrf_field() }}

                <div class="">
                    <label>
                        <input type="text" class="full-width" placeholder="Your name/Company name"
                               name="name" value=""
                               required="" aria-required="true">
                    </label>
                </div>
                <div class="">
                    <label>
                        <input type="email" class="full-width" placeholder="Email address"
                               name="email" value=""
                               required="" aria-required="true">
                    </label>
                </div>
                <div class="">
                    <div class="">
                        <label>
                            <input type="text" class="full-width"
                                   placeholder="Subject "
                                   name="subject" value=""
                                   required="" aria-required="true">
                        </label>
                    </div>
                </div>

                <div class="">
                    <div class="">
                        <label for=""></label><label>
                <textarea name="message"
                          required="" aria-required="true"
                          class="full-width"
                          placeholder="Your I.T solution need.." style="resize:none" cols="num"
                          rows="5"></textarea>
                        </label>
                    </div>
                </div>

                <div class="form-field">
                    <button class="full-width btn--primary">Submit</button>
                    <div class="submit-loader">
                        <div class="text-loader">Sending...</div>
                        <div class="s-loader">
                            <div class="bounce1"></div>
                            <div class="bounce2"></div>
                            <div class="bounce3"></div>
                        </div>
                    </div>
                </div>
            </form>

            <!-- contact-warning -->
            <div class="message-warning">
                Something went wrong. Please try again.
            </div>

            <!-- contact-success -->
            <div class="message-success">
                Your message was sent, thank you!<br>
            </div>

        </div> <!-- end contact-primary -->

        <div class="contact-secondary">
            <div class="contact-info">

                <h3 class="h6 hide-on-fullwidth">Contact Info</h3>

                <div class="cinfo">
                    <h5>Where to Find Us</h5>
                    <p>
                        1600 Amphitheatre Parkway<br>
                        Mountain View, CA<br>
                        94043 US
                    </p>
                </div>

                <div class="cinfo">
                    <h5>Email Us At</h5>
                    <p>
                        contact@glintsite.com<br>
                        info@glintsite.com
                    </p>
                </div>

                <div class="cinfo">
                    <h5>Call Us At</h5>
                    <p>
                        Phone: (+63) 555 1212<br>
                        Mobile: (+63) 555 0100<br>
                        Fax: (+63) 555 0101
                    </p>
                </div>

                <ul class="contact-social">
                    <li>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </li>
                </ul> <!-- end contact-social -->

            </div> <!-- end contact-info -->
        </div> <!-- end contact-secondary -->

    </div> <!-- end contact-content -->

</section> <!-- end s-contact -->

<!-- footer
================================================== -->
@include('layouts.main-footer')
@include('layouts.script')
</body>
</html>
