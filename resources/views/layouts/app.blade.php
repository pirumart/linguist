<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" id="csrf_token" content="{{ csrf_token() }}">
        <title>Ugandan Linguist</title>

        <link rel="shortcut icon" href="/img/favicon.png">

        <!-- Material design colors -->
        <link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- CSS animations -->
        <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">

        <!-- Custom Selects -->
        <link rel="stylesheet" href="vendors/bower_components/select2/dist/css/select2.min.css">

        <!-- Slick Carousel -->
        <link rel="stylesheet" href="vendors/bower_components/slick-carousel/slick/slick.css">

        <!-- NoUiSlider - Input Slider -->
        <link rel="stylesheet" href="vendors/bower_components/nouislider/distribute/nouislider.min.css">

        <!-- Site -->
        <link rel="stylesheet" href="css/app_1.css">
        <link rel="stylesheet" href="css/app_2.css">

        {{-- {{ csrf_token() }} --}}

        <!-- Page Loader JS -->
        <script src="js/page-loader.min.js" async></script>

    <body>
        <!-- Start page loader -->
        <div id="page-loader">
            <div class="page-loader__spinner"></div>
        </div>
        <!-- End page loader -->

        <header id="header">
            <div class="header__top">
                <div class="container">
                    <ul class="top-nav">
                        @if(!Auth::check())
                            <li class="dropdown top-nav__guest">
                                <a href="/register"> Register </a>
                            </li>

                            <li class="dropdown top-nav__guest">
                                <a href="/login"> Login </a>
                            </li>
                        @endif

                        @if(Auth::check())
                            <li class="dropdown">
                                <a href="" data-toggle="dropdown">Hi {{ Auth::user()->name }}!</a>

                                <ul class="dropdown-menu">
                                    <li><a href="">Profile</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            <li class="top-nav__icon">
                                <a href="">
                                    <i class="zmdi zmdi-notifications"></i>
                                    <i class="top-nav__alert"></i>
                                </a>
                            </li>
                        @endif

                        <li class="pull-right top-nav__icon">
                            <a href=""><i class="zmdi zmdi-facebook"></i></a>
                        </li>
                        <li class="pull-right top-nav__icon">
                            <a href=""><i class="zmdi zmdi-twitter"></i></a>
                        </li>
                        <li class="pull-right top-nav__icon">
                            <a href=""><i class="zmdi zmdi-google"></i></a>
                        </li>

                        <li class="pull-right hidden-xs"><span><i class="zmdi zmdi-email"></i>hello@streetlights.org</span></li>
                        <li class="pull-right hidden-xs"><span><i class="zmdi zmdi-phone"></i>256-xxx-xxx-xxxx</span></li>
                    </ul>
                </div>
            </div>

            <div class="header__main">
                <div class="container">
                    <a class="logo" href="/">
                        <img src="img/icon.png" alt="">
                        <div class="logo__text">
                            <span>Ugandan Linguist</span>
                            <span>Easy Learning</span>
                        </div>
                    </a>

                    <div class="navigation-trigger visible-xs visible-sm" data-rmd-action="block-open" data-rmd-target=".navigation">
                        <i class="zmdi zmdi-menu"></i>
                    </div>

                    <ul class="navigation">
                        <li class="visible-xs visible-sm"><a class="navigation__close" data-rmd-action="navigation-close" href=""><i class="zmdi zmdi-long-arrow-right"></i></a></li>

                        <li>
                            <a href="/">Home</a>
                        </li>

                        @if(Auth::check())
                        <li>
                            <a href="/dashboard">Dashboard</a>
                        </li>
                        @endif

                        <li class="navigation__dropdown">
                            <a href="" class="prevent-default">Basics</a>

                            <ul class="navigation__drop-menu">
                                <li><a href="/">Colors</a></li>
                                <li><a href="/">Food</a></li>
                                <li><a href="/">House</a></li>
                            </ul>
                        </li>


                        <li class="navigation__dropdown">
                            <a href="">Numbers</a>

                            <ul class="navigation__drop-menu">
                                <li><a href="/">Starter</a></li>
                                <li><a href="/">Money</a></li>
                                <li><a href="/">Test Drive</a></li>
                            </ul>
                        </li>

                        <li class="navigation__dropdown">
                            <a href="agents.html">Animals</a>

                            <ul class="navigation__drop-menu">
                                <li><a href="/">Domestic Animals</a></li>
                                <li><a href="/">Wild Animals</a></li>
                            </ul>
                        </li>

                        <li class="navigation__dropdown">
                            <a href="">People</a>

                            <ul class="navigation__drop-menu">
                                <li><a href="/">Starter</a></li>
                                <li><a href="/">Family</a></li>
                                <li><a href="/">Community</a></li>
                            </ul>
                        </li>

                        <li class="navigation__dropdown">
                            <a href="agents.html">Date & Time</a>

                            <ul class="navigation__drop-menu">
                                <li><a href="/">Days</a></li>
                                <li><a href="/">Time</a></li>
                                <li><a href="/">Test Drive</a></li>
                            </ul>
                        </li>

                        <li class="navigation__dropdown">
                            <a href="" class="prevent-default">Miscellaneous</a>

                            <ul class="navigation__drop-menu navigation__drop-menu--right">
                                <li><a href="/">Sports</a></li>
                                <li><a href="/">Travel</a></li>
                                <li><a href="/">Machines</a></li>
                                <li><a href="/">Materials</a></li>
                                <li><a href="/">Electronics</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            @yield('overview')

        </header>

        <section class="section">
            <div class="container">
        		
        		@yield('content')
                
            </div>
        </section>

        <footer id="footer">
            <div class="container hidden-xs">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="footer__block">
                            <a class="logo clearfix" href="">
                                <div class="logo__text">
                                    <span>Ugandan Linguist</span>
                                    <span>Easy Learning</span>
                                </div>
                            </a>

                            <address class="m-t-20 m-b-20 f-14">
                                Top Floor,
                                Kampala, Uganda
                            </address>

                            <div class="f-20">256-xxxxxxxx</div>
                            <div class="f-14 m-t-5">hello@streetlights.org</div>

                            <div class="f-20 m-t-20">
                                <a href="" class="m-r-10"><i class="zmdi zmdi-google"></i></a>
                                <a href="" class="m-r-10"><i class="zmdi zmdi-facebook"></i></a>
                                <a href=""><i class="zmdi zmdi-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="footer__block footer__block--blog">
                            <div class="footer__title">Latest from our blog</div>

                            <a href="">
                                Launch of MVP scheduled for 31st December, 2017
                                <small>On 2017/10/20 at 6:00 PM</small>
                            </a>
                            <a href="">
                                Call for contributors to this project
                                <small>On 2017/10/18 at 7:12 PM</small>
                            </a>
                            <a href="">
                                You can now learn Uganda's most spoken local language for free
                                <small>On 2017/10/10 at 12:59 PM</small>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="footer__block">
                            <div class="footer__title">Disclaimer</div>

                            <div>
                                This Project is under development and we apologize for any wrong data we 
                                may use during the development process.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer__bottom">
                <div class="container">
                    <span class="footer__copyright">© Street Lights</span>

                    <a href="">About Us</a>
                    <a href="">Terms & Conditions</a>
                    <a href="">Privacy Policy</a>
                    <a href="https://github.com/street-lights/data-collection-tool" target="_blank">
                        Contribute
                    </a>
                </div>

                <div class="footer__to-top" data-rmd-action="scroll-to" data-rmd-target="html">
                    <i class="zmdi zmdi-chevron-up"></i>
                </div>
            </div>
        </footer>

        <!-- jQuery -->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Waves button ripple effects -->
        <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>

        <!-- Select 2 - Custom Selects -->
        <script src="vendors/bower_components/select2/dist/js/select2.full.min.js"></script>

        <!-- Slick Carousel - Custom Alerts -->
        <script src="vendors/bower_components/slick-carousel/slick/slick.min.js"></script>

        <!-- NoUiSlider -->
        <script src="vendors/bower_components/nouislider/distribute/nouislider.min.js"></script>

        <!-- Site functions and actions -->
        <script src="js/app.min.js"></script>

        <!-- Demo only -->
        <script src="js/demo/demo.js"></script>
    </body>
</html>