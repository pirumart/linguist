@extends('layouts.master')

@section('content')

    <div class="main__container">

        @include('partials.status')

        <header class="main__title">
            <h2>
                {{ $profile->user->name }}'s Profile

                @if(Auth::user()->id === $profile->user->id)
                    <a href="/profile/{{ $profile->user->id }}/edit" class="btn btn-success btn-md pull-right">Edit Profile</a>
                @endif
            </h2>

        </header>

        <div class="row">
            <div class="col-md-12">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card profile">
                            <div class="profile__img">
                                <img src="{{ asset('img/people/user_empty.png') }}" alt="Profile Photo">
                            </div>

                            <div class="profile__info">

                                <ul class="rmd-contact-list">
                                    <li><span class="label label-warning">{{ $profile->user->role }}</span></li>
                                    <li><i class="zmdi zmdi-calendar"></i>Member since  {{ date('d-M-Y', strtotime($profile->user->created_at)) }}</li>
                                    <li><i class="zmdi zmdi-email"></i>{{ $profile->user->email }}</li>
                                </ul>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card__body">
                                <div class="card__sub">
                                    <h4>About {{ $profile->user->name }}</h4>

                                    <p>
                                        @if(isset($profile->about))
                                            {{ $profile->about }}
                                        @else
                                            {{ $profile->user->name }} hasn't added any extra information about him/her...
                                        @endif
                                    </p>
                                </div>

                                <div class="card__sub">
                                    <h4>Languages</h4>
                                    <p>
                                        @if(isset($profile->languages))
                                            {{ $profile->languages }}
                                        @else
                                            no language information
                                        @endif
                                    </p>
                                </div>

                                <div class="card__sub">
                                    <h4>Contact Information</h4>

                                    <ul class="rmd-contact-list">
                                        <li><i class="zmdi zmdi-facebook"></i>{{ isset($profile->facebook) ? $profile->facebook : '' }}</li>
                                        <li><i class="zmdi zmdi-twitter"></i>{{ isset($profile->twitter) ? '@'.$profile->twitter : '' }}</li>
                                        <li><i class="zmdi zmdi-pin"></i>{{ isset($profile->location) ? $profile->location : '' }}</li>
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