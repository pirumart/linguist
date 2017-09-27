@extends('layouts.app')
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