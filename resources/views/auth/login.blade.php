@extends('layouts.auth')

@section("login")
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address')
                                }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password')
                                }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                        old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="select-role">
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn active">
                <input type="radio" name="options" id="admin" />
                <div class="icon">
                    <img src="vendors/images/briefcase.svg" class="svg" alt="" />
                </div>
                <span>I'm</span>
                Manager
            </label>
            <label class="btn">
                <input type="radio" name="options" id="user" />
                <div class="icon">
                    <img src="vendors/images/person.svg" class="svg" alt="" />
                </div>
                <span>I'm</span>
                Employee
            </label>
        </div>
    </div>

    <div class="input-group custom">
        <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
            placeholder="Username@email.com" />
        <div class="input-group-append custom">
            <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
        </div>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="input-group custom">
        <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror"
            name="password" required autocomplete="current-password" placeholder="**********" />
        <div class="input-group-append custom">
            <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
        </div>
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="row pb-30">
        <div class="col-6">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="remember" class="custom-control-input" id="remember" {{ old('remember')
                    ? 'checked' : '' }} />
                <label class="custom-control-label" for="remember">Remember</label>
            </div>
        </div>
        {{-- <div class="col-6">
            <div class="forgot-password">
                <a href="forgot-password.html">Forgot Password</a>
            </div>
        </div> --}}
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="input-group mb-0">
                <!--
                    use code for form submit
                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
                -->
                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign In</button>
            </div>
            {{-- <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">
                OR
            </div>
            <div class="input-group mb-0">
                <a class="btn btn-outline-primary btn-lg btn-block" href="register.html">Register To Create Account</a>
            </div> --}}
        </div>
    </div>
</form>

@endsection