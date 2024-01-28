<!doctype html>
<html lang="en">

    <head>
        @include('includes.head')
    </head>

    <body>
        <div class="site-wrap" id="home-section">

        <!-- div start -->
        <div class="site-mobile-menu site-navbar-target">
            @include('includes.div')
        </div>
        <!-- div end -->

        <!-- header start -->
        <header class="site-navbar site-navbar-target" role="banner">
            @include('includes.header')
        </header>
        <!-- header end -->

        <!-- search start -->
        <div class="hero" style="background-image: url('{{ asset('assets/images/hero_1_a.jpg') }}');">
            @include('includes.search')
        </div>
        <!-- search end -->
    

        <!-- how it works start -->
        <div class="site-section">
            @include('includes.howItWorks')
        </div>
        <!-- how it works end -->
        
        <!-- meet them now start -->
        <div class="site-section">
            @include('includes.meetThemNow')
        </div>
        <!-- meet them now end -->

        
        <!-- car listing start -->
        <div class="site-section bg-light">
            @include('includes.carListing')
        </div>
        <!-- car listing end -->

        <!-- features start -->
        <div class="site-section">
            @include('includes.features')
        </div>
        <!-- features end -->

        <!-- testimonials start -->
        <div class="site-section bg-light">
            <div class="container">
            <div class="row">
                <div class="col-lg-7">
                <h2 class="section-heading"><strong>Testimonials</strong></h2>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>    
                </div>
            </div>
            <div class="row">
            @include('includes.testimonials')
            </div>
            </div>
        </div>
        <!-- testimonials end -->

        <!-- waiting for start -->
        <div class="site-section bg-primary py-5">
            @include('includes.waitingFor')
        </div>
        <!-- waiting for end -->

        <!-- footer start -->
        <footer class="site-footer">
            @include('includes.footer')
        </footer>
        <!-- footer end -->

        </div>

        <!-- js start -->
        @include('includes.js')
        <!-- js end -->

    </body>

</html>

