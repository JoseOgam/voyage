<!--legit Navbar start-->
<header class="s-header">

    <div class="header-logo">
        <a class="site-logo" href="#">
            <img src="{{('images/header-logo.png')}}" alt="Homepage">
        </a>
    </div>

    <nav class="header-nav">

        <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

        <div class="header-nav__content">
            <h3>Navigation</h3>

            <ul class="header-nav__list">
                <li class="current"><a href="{{route('index.index')}}" title="home">Home</a></li>
                <li><a class="" href="{{route('about-us.index')}}" title="about">About</a></li>
                <li><a href="{{route('services.index')}}" title="services">Services</a></li>
                <li class="menu-has-children"><a  href="{{route('portfolio.index')}}" title="works">Portfolio</a></li>
                <li><a class="smoothscroll" href="#clients" title="clients">Clients</a></li>
                <li><a href="{{route('contact.index')}}" title="contact">Contact</a></li>
            </ul>

            <p>Perspiciatis hic praesentium nesciunt. Et neque a dolorum <a href='#0'>voluptatem</a> porro iusto sequi
                veritatis libero enim. Iusto id suscipit veritatis neque reprehenderit.</p>

            <ul class="header-nav__social">
                <li>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </li>
            </ul>

        </div> <!-- end header-nav__content -->

    </nav>  <!-- end header-nav -->

    <a class="header-menu-toggle" href="#0">
        <span class="header-menu-text">Menu</span>
        <span class="header-menu-icon"></span>
    </a>

</header>
<!--legit Navbar end-->
