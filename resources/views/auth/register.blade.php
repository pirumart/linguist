@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="tab-content">
                <form class="tab-pane active in fade" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"
                                placeholder="Name" required autofocus>
                        <i class="form-group__bar"></i>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                                placeholder="Email Address" required>
                        <i class="form-group__bar"></i>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                        <i class="form-group__bar"></i>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            placeholder="Confirm Password" required>
                        <i class="form-group__bar"></i>
                    </div>

                    <p><small>By Signing up with Roost, you're agreeing to our <a href="">terms and conditions</a>.</small></p>

                    <button class="btn btn-primary btn-block m-t-10 m-b-10" type="submit">Register</button>
                </form>
            </div>
        </div>
    </div>

@endsection
