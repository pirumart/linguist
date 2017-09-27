<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DataGrip</title>

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

        <!-- Page Loader JS -->
        <script src="js/page-loader.min.js" async></script>

    <body>
        <!-- Start page loader -->
        <div id="page-loader">
            <div class="page-loader__spinner"></div>
        </div>
        <!-- End page loader -->

        <header id="header">
            {{-- <div class="header__top">
                <div class="container">
                    <ul class="top-nav">
                        <li class="dropdown top-nav__guest">
                            <a data-toggle="dropdown" href="">Register</a>

                            <form class="dropdown-menu stop-propagate">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email Address">
                                    <i class="form-group__bar"></i>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password">
                                    <i class="form-group__bar"></i>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password">
                                    <i class="form-group__bar"></i>
                                </div>

                                <p><small>By Signing up with Roost, you're agreeing to our <a href="">terms and conditions</a>.</small></p>

                                <button class="btn btn-primary btn-block m-t-10 m-b-10">Register</button>

                                <div class="text-center"><small><a href="">Are you an Agent?</a></small></div>

                                <div class="top-nav__auth">
                                    <span>or</span>

                                    <div>Sign in using</div>

                                    <a href="" class="mdc-bg-blue-500">
                                        <i class="zmdi zmdi-facebook"></i>
                                    </a>

                                    <a href="" class="mdc-bg-cyan-500">
                                        <i class="zmdi zmdi-twitter"></i>
                                    </a>

                                    <a href="" class="mdc-bg-red-400">
                                        <i class="zmdi zmdi-google"></i>
                                    </a>
                                </div>

                            </form>
                        </li>

                        <li class="dropdown top-nav__guest">
                            <a data-toggle="dropdown" href="" data-rmd-action="switch-login">Login</a>

                            <div class="dropdown-menu">
                                <div class="tab-content">
                                    <form class="tab-pane active in fade" id="top-nav-login">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Email Address">
                                            <i class="form-group__bar"></i>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password">
                                            <i class="form-group__bar"></i>
                                        </div>

                                        <button class="btn btn-primary btn-block m-t-10 m-b-10">Login</button>

                                        <div class="text-center">
                                            <a href="#top-nav-forgot-password" data-toggle="tab"><small>Forgot email/password?</small></a>
                                        </div>

                                        <div class="top-nav__auth">
                                            <span>or</span>

                                            <div>Sign in using</div>

                                            <a href="" class="mdc-bg-blue-500">
                                                <i class="zmdi zmdi-facebook"></i>
                                            </a>

                                            <a href="" class="mdc-bg-cyan-500">
                                                <i class="zmdi zmdi-twitter"></i>
                                            </a>

                                            <a href="" class="mdc-bg-red-400">
                                                <i class="zmdi zmdi-google"></i>
                                            </a>
                                        </div>
                                    </form>

                                    <form class="tab-pane fade forgot-password" id="top-nav-forgot-password">
                                        <a href="#top-nav-login" class="top-nav__back" data-toggle="tab"></a>

                                        <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Emaill Address">
                                            <i class="form-group__bar"></i>
                                        </div>

                                        <button class="btn btn-warning btn-block">Reset Password</button>
                                    </form>
                                </div>
                            </div>
                        </li>

                        <li class="pull-right top-nav__icon">
                            <a href=""><i class="zmdi zmdi-facebook"></i></a>
                        </li>
                        <li class="pull-right top-nav__icon">
                            <a href=""><i class="zmdi zmdi-twitter"></i></a>
                        </li>
                        <li class="pull-right top-nav__icon">
                            <a href=""><i class="zmdi zmdi-google"></i></a>
                        </li>

                        <li class="pull-right hidden-xs"><span><i class="zmdi zmdi-email"></i>hello@Roost.com</span></li>
                        <li class="pull-right hidden-xs"><span><i class="zmdi zmdi-phone"></i>001-541-754-3010</span></li>
                    </ul>
                </div>
            </div> --}}

            <div class="header__main">
                <div class="container">
                    <a class="logo" href="/">
                        <img src="img/icon.png" alt="">
                        <div class="logo__text">
                            <span>Data Grip</span>
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

            <div class="header__search container">
                <form>
                    <div class="search">
                        <div class="search__type">
                            <a href="" style="margin-right: 20px;">Search</a>
                        </div>

                        <div class="search__body">
                            <input type="text" class="search__input" placeholder="Enter the phrase you want to translate">
                        </div>
                    </div>
                </form>
            </div>

            <div class="header__recommended">
                <div class="listings-grid">
                    <div class="listings-grid__item">
                        <a href="/">
                            <div class="listings-grid__main">
                                <img src="img/level_hatchling.png" alt="">
                                <div class="listings-grid__price">Hatchling</div>
                            </div>

                            <div class="listings-grid__body">
                                <small>Starter Level</small>
                                <h5>Learn the basics</h5>
                            </div>
                        </a>
                    </div>

                    <div class="listings-grid__item">
                        <a href="/">
                            <div class="listings-grid__main">
                                <img src="img/level_growth.png" alt="">
                                <div class="listings-grid__price">Growth</div>
                            </div>

                            <div class="listings-grid__body">
                                <small>Beginner Level</small>
                                <h5>Learn something new</h5>
                            </div>
                        </a>
                    </div>

                    <div class="listings-grid__item">
                        <a href="/">
                            <div class="listings-grid__main">
                                <img src="img/level_professional.png" alt="">
                                <div class="listings-grid__price">Professional</div>
                            </div>

                            <div class="listings-grid__body">
                                <small>Intermediate Level</small>
                                <h5>Become a Pro</h5>
                            </div>
                        </a>
                    </div>

                    <div class="listings-grid__item">
                        <a href="/">
                            <div class="listings-grid__main">
                                <img src="img/level_proficient.png" alt="">
                                <div class="listings-grid__price">Proficient</div>
                            </div>

                            <div class="listings-grid__body">
                                <small>Expert Level</small>
                                <h5>Become a Guru</h5>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
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
                                    <span>Data Grip</span>
                                    <span>Easy Learning</span>
                                </div>
                            </a>

                            <address class="m-t-20 m-b-20 f-14">
                                Top Floor,
                                Kampala, Uganda
                            </address>

                            <div class="f-20">256-xxxxxxxx</div>
                            <div class="f-14 m-t-5">hello@streetlights.com</div>

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
                                Aenean lacinia bibendum nulla sed
                                <small>On 2017/10/20 at 6:00 PM</small>
                            </a>
                            <a href="">
                                Vestibulum id ligula porta felis euismod semper
                                <small>On 2017/10/18 at 7:12 PM</small>
                            </a>
                            <a href="">
                                Etiam porta sem malesuada magna mollis euismod
                                <small>On 2017/10/10 at 12:59 PM</small>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="footer__block">
                            <div class="footer__title">Disclaimer</div>

                            <div>
                                Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui. Maecenas sed diam eget risus varius blandit sit amet non magna. Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
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
                    <a href="">Contribute</a>
                    <a href="">Login</a>
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