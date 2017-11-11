@extends('layouts.app')

@section('overview')
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
@endsection

@section('content')

    <header class="section__title">
        <h2>What would you like to learn today? </h2>
        <small>select from a variety of categories below</small>
    </header>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card__header card__header--minimal">
                    <h2>Basics</h2>
                    <small>Beginner level</small>
                </div>

                <div class="grid-widget grid-widget--listings">
                    <div class="col-xs-6">
                        <a class="grid-widget__item" href="/">
                            <img src="img/1.jpg" alt="">

                            <div class="grid-widget__info">
                                <h3>Greetings</h3>
                                <small>3 lessons</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6">
                        <a class="grid-widget__item" href="/">
                            <img src="img/1.jpg" alt="">

                            <div class="grid-widget__info">
                                <h3>Directions</h3>
                                <small>6 lessons</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6">
                        <a class="grid-widget__item" href="/">
                            <img src="img/1.jpg" alt="">

                            <div class="grid-widget__info">
                                <h3>Home</h3>
                                <small>9 lessons</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6">
                        <a class="grid-widget__item" href="/">
                            <img src="img/1.jpg" alt="">

                            <div class="grid-widget__info">
                                <h3>Time</h3>
                                <small>5 lessons</small>
                            </div>
                        </a>
                    </div>
                </div>

                <a class="view-more" href="grid-listings.html">
                    Show me more <i class="zmdi zmdi-long-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card__header card__header--minimal">
                    <h2>People</h2>
                    <small>Growth Level</small>
                </div>

                <div class="grid-widget grid-widget--listings">
                    <div class="col-xs-6">
                        <a class="grid-widget__item" href="/">
                            <img src="img/1.jpg" class="img-responsive" alt="">
                            <div class="grid-widget__info">
                                <h3>Family</h3>
                                <small>6 lessons</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6">
                        <a class="grid-widget__item" href="/">
                            <img src="img/1.jpg" alt="">
                            <div class="grid-widget__info">
                                <h3>Work</h3>
                                <small>4 lessons</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6">
                        <a class="grid-widget__item" href="/">
                            <img src="img/1.jpg" alt="">
                            <div class="grid-widget__info">
                                <h3>Community</h3>
                                <small>11 lessons</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6">
                        <a class="grid-widget__item" href="/">
                            <img src="img/1.jpg" alt="">
                            <div class="grid-widget__info">
                                <h3>Conversation</h3>
                                <small>13 lessons</small>
                            </div>
                        </a>
                    </div>
                </div>

                <a class="view-more" href="grid-listings.html">
                    Show me more <i class="zmdi zmdi-long-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

@endsection