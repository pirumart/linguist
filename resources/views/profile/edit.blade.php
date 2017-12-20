@extends('layouts.master')

@section('content')

    @if(Auth::user()->id != $user->id)
        <h3 class="col-md-12 align-center">You have attempted to unset the balance of nature :( </h3>
    @else
        <div class="main__container">

            @include('partials.status')

            <header class="main__title">
                <h2>Edit Profile</h2>
            </header>

            @include('partials.errors')

            <div class="row">
                <div class="col-md-12">
                    <div class="list-group list-group--block contact-lists">
                        <form method="POST" action={{ "/profile/$user->id" }}>
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="modal-body">
                                <div class="card__sub">
                                    <h4>Languages</h4>
                                    <div class="form-group m-0">
                                        <input type="text" name="languages" class="form-control" placeholder="languages for example English"
                                        value="{{ isset($user->profile->languages) ? $user->profile->languages : ''}}">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                <div class="card__sub">
                                    <h4>About {{ $user->name }}</h4>
                                    <div class="form-group m-0">
                                        <textarea rows="5" name="about" class="form-control" placeholder="Write a short summary about yourself..."
                                        value="{{ isset($user->profile->about) ? $user->profile->about : ''}}">

                                        </textarea>
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                <div class="card__sub">
                                    <h4>Contact Information</h4>

                                    <ul class="rmd-contact-list row">
                                        <li></li>
                                        <li>
                                            <div class="col-md-1"><b>Facebook</b></div>
                                            <div class="col-md-11">
                                                <input type="text" name="facebook" class="form-control" placeholder="Facebook handle"
                                                    value="{{ isset($user->profile->facebook) ? $user->profile->facebook : ''}}">
                                            </div>
                                        </li><br><br>
                                        <li>
                                            <div class="col-md-1"><b>Twitter</b></div>
                                            <div class="col-md-11">
                                                <input type="text" name="twitter" class="form-control" placeholder="Twitter handle"
                                                    value="{{ isset($user->profile->twitter) ? $user->profile->twitter : ''}}">
                                            </div>
                                        </li><br><br>
                                        <li>
                                            <div class="col-md-1"><b>Location</b></div>
                                            <div class="col-md-11">
                                                <input type="text" name="location" class="form-control" placeholder="City or Town"
                                                    value="{{ isset($user->profile->location) ? $user->profile->location : ''}}">
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-link">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection