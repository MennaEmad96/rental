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

        <!-- side title -->
        <div class="hero inner-page" style="background-image: url('{{ asset('assets/images/hero_1_a.jpg') }}');"> 
        <div class="container">
          <div class="row align-items-end ">
            @yield('sideTitle')
          </div>
        </div>
        </div>
        <!-- side title -->

        @yield('content')
      
        <!-- footer start -->
        <footer class="site-footer">
            @include('includes.footer')
        </footer>
        <!-- footer end -->

    </div>

    <!-- js start -->
    @include('includes.js')
    <!-- js end -->

    @include('sweetalert::alert')

  </body>

</html>

