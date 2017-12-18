@extends('layouts.master')

@section('content')

    <div class="main__container">

        @include('partials.status')

        <header class="main__title">
            <h2>{{ Auth::user()->name }}'s Profile</h2>
        </header>

        <div class="row">
            <div class="col-md-12">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card profile">
                            <div class="profile__img">
                                <img src="img/people/user_empty.png" alt="">
                            </div>

                            <div class="profile__info">

                                <ul class="rmd-contact-list">
                                    <li><span class="label label-warning">{{ Auth::user()->role }}</span></li>
                                    <li><i class="zmdi zmdi-calendar"></i>Member since  {{ date('d-M-Y', strtotime(Auth::user()->created_at)) }}</li>
                                    <li><i class="zmdi zmdi-email"></i>{{ Auth::user()->email }}</li>
                                </ul>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card__body">
                                <div class="card__sub">
                                    <h4>About {{ Auth::user()->name }}</h4>

                                    <p>Pellentesque vitae quam quis tellus dignissim faucibus. Suspendisse mattis felis at faucibus lobortis. Sed sit amet tellus dolor. Fusce quis sollicitudin velit. Praesent gravida ullamcorper lectus et tincidunt. Phasellus lectus quam, porta pharetra feugiat in, auctor eget dolor.</p>
                                    <p>Vestibulum tincidunt imperdiet egestas. In in nunc vitae elit tincidunt tristique id eu justo. Quisque gravida maximus orci, vulputate pharetra mauris commodo at. Mauris eget fermentum ipsum, quis faucibus neque. Fusce eleifend sapien sit amet convallis rhoncus. Proin commodo lacinia lectus, et tempus turpis.</p>
                                </div>

                                <div class="card__sub">
                                    <h4>Languages</h4>
                                    <p>English, Luganda</p>
                                </div>

                                <div class="card__sub">
                                    <h4>Contact Information</h4>

                                    <ul class="rmd-contact-list">
                                        <li><i class="zmdi zmdi-facebook"></i>pirupius</li>
                                        <li><i class="zmdi zmdi-twitter"></i>@pirupius</li>
                                        <li><i class="zmdi zmdi-pin"></i>Kampala, Uganda</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection