<!doctype html>
<html lang="en">
<head>
    <title>our work</title>
    @include('layouts.head')
</head>
<body id="top">
<!-- nav header-->
@include('layouts.nvbar')
<!--nav header ends-->

<!--content here
============================================-->
<section id='works' class="s-works" style="background-color: #0C0C0C">

    <div class="intro-wrap">

        <div class="row section-header has-bottom-sep light-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Recent Works</h3>
                <h1 class="display-2 display-2--light">We love what we do, check out some of our latest works</h1>
            </div>
        </div> <!-- end section-header -->
        <div class="row section-header has-bottom-sep light-sep" data-aos="fade-up">
            <div class="col-full">
                    <h2 class="subhead">
                        <ol><a href="{{route('web.index')}}" title="services">click to view Our web portfolio</a></ol>
                        <ol><a href="{{route('brand.index')}}" title="services">click to view Our brand portfolio</a></ol>
                    </h2>
            </div>
        </div>
    </div> <!-- end intro-wrap -->
    <div class="row works-content">
        <div class="col-full masonry-wrap">
            <div class="masonry">

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="images/portfolio/gallery/g-shutterbug.jpg" class="thumb-link" title="Shutterbug"
                               data-size="1050x700">
                                <img src="images/portfolio/lady-shutterbug.jpg"
                                     srcset="images/portfolio/lady-shutterbug.jpg 1x, images/portfolio/lady-shutterbug@2x.jpg 2x"
                                     alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Shutterbug
                            </h3>
                            <p class="item-folio__cat">
                                Branding
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            <i class="icon-link"></i>
                        </a>

                        <div class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde
                                dolorem corrupti neque nisi.</p>
                        </div>

                    </div>
                </div> <!-- end masonry__brick -->
                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="images/portfolio/gallery/g-beetle.jpg" class="thumb-link" title="The Beetle Car"
                               data-size="1050x700">
                                <img src="images/portfolio/the-beetle.jpg"
                                     srcset="images/portfolio/the-beetle.jpg 1x, images/portfolio/the-beetle@2x.jpg 2x"
                                     alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                The Beetle
                            </h3>
                            <p class="item-folio__cat">
                                Web Development
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            <i class="icon-link"></i>
                        </a>

                        <div class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde
                                dolorem corrupti neque nisi.</p>
                        </div>

                    </div>
                </div> <!-- end masonry__brick -->
            </div>
        </div>
    </div>

</section>

<!--footer-->
@include('layouts.main-footer')
<!--footer ends-->

<!--script-->
@include('layouts.script')
<!--script ends-->
</body>
</html>
