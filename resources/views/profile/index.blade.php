@extends('layouts.master')

@section('content')

    <div class="main__container">

        @include('partials.status')

        <header class="main__title">
            <h2>
                {{ $user->name }}'s Profile

                @if(Auth::user()->id === $user->id)
                    <a href="/profile/{{ $user->id }}/edit" class="btn btn-success btn-md pull-right">Edit Profile</a>
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
                                    <li><span class="label label-warning">{{ $user->role }}</span></li>
                                    <li><i class="zmdi zmdi-calendar"></i>Member since  {{ date('d-M-Y', strtotime($user->created_at)) }}</li>
                                    <li><i class="zmdi zmdi-email"></i>{{ $user->email }}</li>
                                </ul>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card__body">
                                <div class="card__sub">
                                    <h4>About {{ $user->name }}</h4>

                                    <p>
                                        @if(isset($user->profile->about))
                                            {{ $user->profile->about }}
                                        @else
                                            {{ $user->name }} hasn't added any extra information about him/her...
                                        @endif
                                    </p>
                                </div>

                                <div class="card__sub">
                                    <h4>Languages</h4>
                                    <p>
                                        @if(isset($user->profile->languages))
                                            {{ $user->profile->languages }}
                                        @else
                                            no language information
                                        @endif
                                    </p>
                                </div>

                                <div class="card__sub">
                                    <h4>Contact Information</h4>

                                    <ul class="rmd-contact-list">
                                        <li><i class="zmdi zmdi-facebook"></i>{{ isset($user->profile->facebook) ? $user->profile->facebook : '' }}</li>
                                        <li><i class="zmdi zmdi-twitter"></i>{{ isset($user->profile->twitter) ? '@'.$user->profile->twitter : '' }}</li>
                                        <li><i class="zmdi zmdi-pin"></i>{{ isset($user->profile->location) ? $user->profile->location : '' }}</li>
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