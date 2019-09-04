<!DOCTYPE html>
<!--[if lt IE 9 ]>
<html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<!--head start-->
<head>
    <title>Legit - Professional Web Designers Kenya</title>
    @include('layouts.head')
</head>
<!--head end-->

<body id="top">

<!-- header
================================================== -->
@include('layouts.nvbar')
<!-- end s-header -->


<!-- home
================================================== -->
<section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="images/hero-bg.jpg"
         data-natural-width=3000 data-natural-height=2000 data-position-y=center>

    <div class="overlay"></div>
    <div class="shadow-overlay"></div>

    <div class="home-content">
        <div class="row home-content__main">

            <h3 class="subhead">Welcome to <span class="display-1"> Legit.</span></h3>

            <h1>
                We are a creative group of people <br>
                who design influential brands, <br>
                websites and digital<br>
                marketing.
            </h1>

            <div class="home-content__buttons">
                <a href="{{route('contact.index')}}" class=" btn btn--stroke">
                    Start a Project
                </a>
                <a href="#about" class="smoothscroll btn btn--stroke">
                    About Us
                </a>
            </div>

        </div>

        <div class="home-content__scroll text-warning">
            <a href="#about" class="scroll-link smoothscroll">
                <span><h3 class="text-warning">Scroll Down</h3></span>
            </a>
        </div>

        <div class="home-content__line"></div>

    </div> <!-- end home-content -->


    <ul class="home-social">
        <li>
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i><span>linkedin</span></a>
        </li>
    </ul>
    <!-- end home-social -->

</section>
<!-- end s-home -->


<!-- about
================================================== -->
<section id='about' class="s-about">

    <div class="row section-header has-bottom-sep" data-aos="fade-up">
        <div class="col-full">
            <h3 class="subhead subhead--dark">Hello There</h3>
            <h1 class="display-1 display-1--light">We Are Legit.</h1>
        </div>
    </div> <!-- end section-header -->

    <div class="row about-desc" data-aos="fade-up">
        <div class="col-full">
            <p>
                Great achievements happen through people and it is the people that make the business
                successful. Our Experts showcase their skills, share their knowledge and learn from the
                like-minded in an open office set up. Within an environment stimulating personal growth,
                self- motivation and creativity, our experts can take ownership of the processes that make
                both our business and our clients' businesses succeed.
            </p>
            <div class="row section-header has-bottom-sep" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead">What inspires you?</h3>
                    <h5 class=" display-2--light"><a href="{{route('about-us.index')}}" class=" btn btn--light">
                            More About Us
                        </a>
                    </h5>
                </div>
            </div>
        </div>
    </div> <!-- end about-desc -->

   <!-- <div class="row about-stats stats block-1-4 block-m-1-2 block-mob-full" data-aos="fade-up">

        <div class="col-block stats__col ">
            <div class="stats__count">127</div>
            <h5>Awards Received</h5>
        </div>
        <div class="col-block stats__col">
            <div class="stats__count">1505</div>
            <h5>Cups of Coffee</h5>
        </div>
        <div class="col-block stats__col">
            <div class="stats__count">109</div>
            <h5>Projects Completed</h5>
        </div>
        <div class="col-block stats__col">
            <div class="stats__count">102</div>
            <h5>Happy Clients</h5>
        </div>

    </div>  end about-stats -->

    <div class="about__line"></div>

</section> <!-- end s-about -->
<!-- clients
================================================== -->
<section id="clients" class="s-clients">

    <div class="row section-header" data-aos="fade-up">
        <div class="col-full">
            <h3 class="subhead">Our Clients</h3>
            <h1 class="display-2"><span class="display-1">Legit.</span> has been honored to
                partner up with these clients</h1>
        </div>
    </div> <!-- end section-header -->

    <div class="row section-header" data-aos="fade-up">
        <div class="col-full">
            <div class="clients">

                <a href="#" title="" class="clients__slide"><img src="{{('images/clients/dala.png')}}" alt=""/></a>
                <a href="#" title="" class="clients__slide"><img src="{{('images/clients/dala.png')}}" alt=""/></a>
                <a href="#" title="" class="clients__slide"><img src="{{('images/clients/dala.png')}}" alt=""/></a>
                <a href="#" title="" class="clients__slide"><img src="{{('images/clients/dala.png')}}" alt=""/></a>
                <a href="#" title="" class="clients__slide"><img src="{{('images/clients/dala.png')}}" alt=""/></a>
                <a href="#" title="" class="clients__slide"><img src="{{('images/clients/dala.png')}}" alt=""/></a>


            </div> <!-- end clients -->
        </div> <!-- end col-full -->
    </div> <!-- end clients-outer -->

    <!--==========================
    <div class="row clients-testimonials" data-aos="fade-up">
        <div class="col-full">
            <div class="testimonials">

                <div class="testimonials__slide">

                    <p>Qui ipsam temporibus quisquam vel. Maiores eos cumque distinctio nam accusantium ipsum.
                        Laudantium quia consequatur molestias delectus culpa facere hic dolores aperiam. Accusantium
                        quos qui praesentium corpori.
                        Excepturi nam cupiditate culpa doloremque deleniti repellat.</p>

                    <img src="{{('images/avatars/user-01.jpg')}}" alt="Author image" class="testimonials__avatar" >
                    <div class="testimonials__info">
                        <span class="testimonials__name">Tim Cook</span>
                        <span class="testimonials__pos">CEO, Apple</span>
                    </div>

                </div>

                <div class="testimonials__slide">

                    <p>Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat voluptas animi
                        adipisci.
                        Nisi eaque consequatur. Quasi voluptas eius distinctio. Atque eos maxime. Qui ipsam temporibus
                        quisquam vel.</p>

                    <img src="{{('images/avatars/user-05.jpg')}}" alt="Author image" class="testimonials__avatar">
                    <div class="testimonials__info">
                        <span class="testimonials__name">Sundar Pichai</span>
                        <span class="testimonials__pos">CEO, Google</span>
                    </div>

                </div>

                <div class="testimonials__slide">

                    <p>Repellat dignissimos libero. Qui sed at corrupti expedita voluptas odit. Nihil ea quia nesciunt.
                        Ducimus aut sed ipsam.
                        Autem eaque officia cum exercitationem sunt voluptatum accusamus. Quasi voluptas eius
                        distinctio.</p>

                    <img src="{{('images/avatars/user-02.jpg')}}" alt="Author image" class="testimonials__avatar">
                    <div class="testimonials__info">
                        <span class="testimonials__name">Satya Nadella</span>
                        <span class="testimonials__pos">CEO, Microsoft</span>
                    </div>

                </div>

            </div><

        </div>
    </div> --->

</section>


<!-- footer
================================================== -->
@include('layouts.main-footer')

<!-- script
================================================== -->
@include('layouts.script')
</body>

</html>
