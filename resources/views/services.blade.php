<!doctype html>
<html lang="en">
<head>
    <title>web & branding services kenya</title>@include('layouts.head')
</head>
<body id="top">
<!-- nav header-->
@include('layouts.nvbar')
<!--nav header ends-->

<!--service section-->
<section id='services' class="s-services" style="background-color: #1b1e21">

    <div class="row section-header has-bottom-sep" data-aos="fade-up">
        <div class="col-full">
            <h3 class="subhead">What We Do</h3>
            <h1 class="display-2 display-2--light">We’ve got everything you need to launch and grow your business</h1>
        </div>
    </div> <!-- end section-header -->

    <div class="row services-list block-1-2 block-tab-full">

        <div class="col-block service-item" data-aos="fade-up">
            <div class="service-icon">
                <i class="icon-paint-brush"></i>
            </div>
            <div class="service-text">
                <h3 class="h2">Brand Identity</h3>
                <p class="text-dark">
                    We set guidelines and consistency. Whether the product is a person, image, or an item, consistency
                    exhibits, product leadership, marketing, support, and operation. Consistency in identity projects
                    the corporate culture that surrounds the product.
                </p>
            </div>
        </div>

        <div class="col-block service-item" data-aos="fade-up">
            <div class="service-icon">
                <i class="icon-group"></i>
            </div>
            <div class="service-text">
                <h3 class="h2">Illustration</h3>
                <p class="text-dark">
                    We have experts that can persuade, inform and influence action. They can express emotions and convey
                    brand
                    characteristics. Custom made illustrations can differentiate a product against it's competitors
                    helping it to stand out in a crowded market place.
                </p>
            </div>
        </div>

        <div class="col-block service-item" data-aos="fade-up">
            <div class="service-icon">
                <i class="icon-megaphone"></i>
            </div>
            <div class="service-text">
                <h3 class="h2">Marketing</h3>
                <p class="text-dark">
                    At Legit, we help you create marketing strategies that will enable you identify
                    your target audience and know their needs. This helps you understand your customers better, provide
                    the product or service they need and eventually maximize on your profits.
                </p>
            </div>
        </div>

        <!-- <div class="col-block service-item" data-aos="fade-up">
             <div class="service-icon">
                 <i class="icon-earth"></i>
             </div>
             <div class="service-text">
                 <h3 class="h2">Web Design</h3>
                 <p class="text-dark">Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum
                     laudantium.
                     Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                     Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                 </p>
             </div>
         </div>

         <div class="col-block service-item" data-aos="fade-up">
             <div class="service-icon">
                 <i class="icon-cube"></i>
             </div>
             <div class="service-text">
                 <h3 class="h2">Packaging Design</h3>
                 <p class="text-dark">Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum
                     laudantium.
                     Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                     Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                 </p>
             </div>
         </div> -->

        <div class="col-block service-item" data-aos="fade-up">
            <div class="service-icon"><i class="icon-lego-block"></i></div>
            <div class="service-text">
                <h3 class="h2">Web Development</h3>
                <p class="text-dark">
                    We design and develop professional websites to meet your business needs, our websites are responsive
                    and easy to use on all devices like mobile phones, tablets, laptops and desktops therefore enhancing
                    user experience.
                </p>
            </div>
        </div>
        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">What inspires you?</h3>
                <h5 class=" display-2--light"><a href="{{route('contact.index')}}" class=" btn btn--light">
                        Start a Project...
                    </a>
                </h5>
            </div>
        </div>
    </div> <!-- end services-list -->

</section> <!-- end s-services -->
<!--service section start-->

<!--footer-->
@include('layouts.main-footer')
<!--footer ends-->

<!--script-->
@include('layouts.script')
<!--script ends-->
</body>
</html>
