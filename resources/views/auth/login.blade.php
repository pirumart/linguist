@extends('layouts.app')

@section('content')
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="tab-content">
                <form class="tab-pane active in fade" id="top-nav-login" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" 
                                placeholder="Email Address" required autofocus>
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
        
                    <button class="btn btn-primary btn-block m-t-10 m-b-10" type="submit">Login</button>
        
                    <div class="text-center">
                        {{-- <a href="#top-nav-forgot-password" data-toggle="tab"><small>Forgot email/password?</small></a> --}}
                        {{-- <a href="{{ route('password.request') }}" data-toggle="tab"><small>Forgot email/password?</small></a> --}}
                    </div>
                </form>
        
                <form class="tab-pane fade forgot-password" id="top-nav-forgot-password">
                    <a href="#top-nav-login" class="top-nav__back" data-toggle="tab"></a>
        
                    <p>Enter your email address you registered with so that we can forward you a reset link.</p>
        
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Emaill Address">
                        <i class="form-group__bar"></i>
                    </div>
        
                    <button class="btn btn-warning btn-block">Reset Password</button>
                </form>
            </div>
        </div>
    </div>


@endsection
