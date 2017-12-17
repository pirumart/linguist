<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" id="csrf_token" content="{{ csrf_token() }}">
        <title>Ugandan Linguist</title>

        <link rel="shortcut icon" href="/img/favicon.png">

        <link rel="stylesheet" href="{{ asset('/vendors/bower_components/animate.css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/vendors/bower_components/sweetalert2/dist/sweetalert2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/vendors/bower_components/select2/dist/css/select2.min.css') }}">
        <link href="{{ asset('/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/app_1.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app_2.css') }}">
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <body>
        <header id="header-alt">
            <a href="" class="header-alt__trigger hidden-lg" data-rmd-action="block-open" data-rmd-target="#main__sidebar">
                <i class="zmdi zmdi-menu"></i>
            </a>

            <a href="/home" class="header-alt__logo hidden-xs">Ugandan Linguist</a>

            <ul class="header-alt__menu">
                <li>
                    <a href="" data-rmd-action="block-open" data-rmd-target=".header-alt__search-wrap" data-rmd-backdrop-class="backdrop--search">
                        <i class="zmdi zmdi-search"></i>
                    </a>
                </li>
                <li class="hidden-xs">
                    <a href="/home"><i class="zmdi zmdi-home"></i></a>
                </li>
                <li class="header-alt__profile dropdown">
                    <a href="" data-toggle="dropdown">
                        <img src="{{ asset('img/people/user_empty.png') }}" alt="">
                    </a>

                    <ul class="dropdown-menu pull-right">
                        <li><a href="">Profile</a></li>
                        <li><a href="/settings">Settings</a></li>
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
            </ul>

            <div class="header-alt__search-wrap">
                <form class="header-alt__search">
                    <input type="text" placeholder="Search...">

                    <i class="zmdi zmdi-long-arrow-left" data-rmd-action="block-close" data-rmd-target=".header-alt__search-wrap"></i>
                </form>
            </div>
        </header>

        <main id="main">
            <aside id="main__sidebar">
                <a class="hidden-lg main__block-close" href="" data-rmd-action="block-close" data-rmd-target="#main__sidebar">
                    <i class="zmdi zmdi-long-arrow-left"></i>
                </a>

                <ul class="main-menu">
                    <li><a target="_blank" href="/"><i class="zmdi zmdi-home"></i> Home</a></li>
                    <li><a href="/dashboard"><i class="zmdi zmdi-chart"></i> Dashboard</a></li>
                    <li><a href="/topics"><i class="zmdi zmdi-view-list"></i> Topics</a></li>
                    <li><a href=""><i class="zmdi zmdi-assignment "></i> Lessons</a></li>
                    <li><a href="/profile"><i class="zmdi zmdi-settings "></i> Profile</a></li>
                </ul>
            </aside>

            <section id="main__content">

                <div id="app">
                    @yield('content')
                </div>

            </section>

            <footer id="footer-alt">
                Copyright © 2017 Ugandan Linguist

                <ul class="footer-alt__menu">
                    <li><a href="/home">Home</a></li>
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="/topics">Topics</a></li>
                </ul>
            </footer>
        </main>

        <!-- jQuery -->
        <script src="{{ asset('/vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>

        <!-- Bootstrap -->
        <script src="{{ asset('/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/vendors/bower_components/Waves/dist/waves.min.js') }}"></script>
        <script src="{{ asset('/vendors/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
        <script src="{{ asset('/vendors/bower_components/sweetalert2/dist/sweetalert2.min.js') }}"></script>

        <!-- Site functions and actions -->
        <script src="{{ mix('/js/app.js') }}"></script>
        <script src="{{ asset('js/app.min.js') }}"></script>
        <script src="{{ asset('js/demo/demo.js') }}"></script>
    </body>
</html>