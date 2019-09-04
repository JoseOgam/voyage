<!doctype html>
<html lang="en">
<head>
    <title>About us</title>
    @include('layouts.head')
</head>
<body id="top">
<!-- nav header-->
@include('layouts.nvbar')
<!--nav header ends-->

<!--content here
==================================================-->
<section id='services' class="s-services" style="background-color: #1b1e21">
    <div class="row section-header has-bottom-sep" data-aos="fade-up">
        <div class="col-full">
            <h3 class="subhead">Who we are</h3>
            <h1 class="display-1 display-2--light">Our Story</h1>
        </div>
    </div> <!-- end section-header -->
    <div style="margin-top:120px"></div>
    <div class="container row section-header has-bottom-sep" data-aos="fade-up">
        <div class="row col-full">
            <div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3 great-achievements-h">
                <p class="">
                    <b class="display-2--light">Legit Design solution LTD </b> is a Kisumu-based full-service digital
                    marketing agency specializing in internet marketing,
                    graphic design, and web design and development. From web strategies and user experience to
                    development and marketing, Legit Design creates value in everything we do. We deliver digital
                    solutions through website design and marketing that include mobile, social, SEO, and paid search
                    campaigns.
                </p>
                <br>
                <p class="">
                    Our team develops and delivers computing
                    solutions, provides systems support, web development, and web-based applications, customized for the
                    business startups, cooperates and individual projects, We building a bridge of innovation
                    that connects different
                    cultures.
                </p>
            </div>
        </div>

        <div style="margin-top:90px"></div>

        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <div class="section" style="margin-top:-70px;z-index:1;position:relative">
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">

                            <div style="margin-top:120px"></div>

                            <p class="header-note display-1--light">Our mission</p>
                            <h1>To build cutting-edge business solutions</h1>
                            <hr>
                            <p class="great-achievements-h">Our mission is to build cutting-edge business applications,
                                which
                                deliver
                                long term commercial benefits and make technology an asset for our clients'
                                business. </p>

                            <div style="margin-top:40px"></div>

                            <p class="header-note display-1--light">Our vision</p>
                            <h1>To become a recognized provider of custom business solutions</h1>
                            <hr>
                            <p class="great-achievements-h">To become a recognized provider of custom solutions to major
                                companies across various verticals in emerging markets.</p>

                            <div style="margin-top:40px"></div>

                            <p class="header-note display-1--light">Our core values</p>
                            <h1>Our partners and employees have a passion for technology</h1>
                            <hr>
                            <p class="great-achievements-h">Legit  conducts its business with honesty and integrity.
                                All
                                staff at Legit are expected to demonstrate professional etiquette by treating the
                                clients,
                                the partners and other employees of the company with respect.</p>

                            <div style="margin-top:65px"></div>

                           <!-- <div class="row box-img">
                                <div class="col-sm-4">
                                    <div>
                                        <img src="" alt="">
                                        <p>Innovation</p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div>
                                        <img src="" alt="">
                                        <p>Integrity</p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div>
                                        <img src="" alt="">
                                        <p>Respect</p>
                                    </div>
                                </div>
                            </div>-->

                            <div style="margin-top:120px"></div>
                            <div class="row section-header has-bottom-sep" data-aos="fade-up">
                                <div class="col-full">
                                    <h3 class="subhead">What inspires you?</h3>
                                    <h5 class=" display-2--light"><a href="{{route('contact.index')}}" class=" btn btn--light">
                                            Get In Touch...
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /container -->

<!--footer-->
@include('layouts.main-footer')
<!--footer ends-->

<!--script-->
@include('layouts.script')
<!--script ends-->
</body>
</html>
