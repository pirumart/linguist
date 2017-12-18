@extends('layouts.master')

@section('content')

    <div class="main__container">

        @include('partials.status')

        <header class="main__title">
            <h2>Edit Profile</h2>
        </header>

        @include('partials.errors')

        <div class="row">
            <div class="col-md-12">
                <div class="list-group list-group--block contact-lists">
                    <form method="POST" action={{ "/topics/$user->id" }}>
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="card__sub">
                                <h4>Languages</h4>
                                <div class="form-group m-0">
                                    <input type="text" name="languages" class="form-control" placeholder="languages for example English" required
                                    value="{{ isset($user->profile->languages) ? $user->profile->languages : ''}}">
                                    <i class="form-group__bar"></i>
                                </div>
                            </div>
                            <div class="card__sub">
                                <h4>About {{ $user->name }}</h4>
                                <div class="form-group m-0">
                                    <textarea rows="5" name="about" class="form-control" placeholder="Write a short summary about yourself..." required
                                    value="{{ isset($user->profile->about) ? $user->profile->about : ''}}">

                                    </textarea>
                                    <i class="form-group__bar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-link">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card__body">


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