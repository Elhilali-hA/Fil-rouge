@extends('layouts.app')

@section('content')
<body>

<section class="col-10 p-2 bg-white mt-3" style="margin: auto; border: 1px; border-radius:12px;height:540px; opacity:0.7;position: relative;">
</section>
  
<div class="d-flex flex-row" style="position: absolute;top:8%; left:5%">

    <div class="container col-md-6">
        <div class="text-center">
            <img src="/img/logo.png" alt="" width="150px" height="150px">
        </div>
        <div class="row justify-content-center mt-2">
            <div class="col-md">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                           <h1 class="text-center">Login</h1>
                            <div class="form-group d-flex flex-column mt-3">
                                <label for="email" class="col-md col-form-label ">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group d-flex flex-column">
                                <label for="password" class="col-md col-form-label">{{ __('Password') }}</label>
    
                                <div class="col-md">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md offset-md-1">
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
    
    
    <div class="col-md-4">
        <img src="/img/log.png" alt="" width="500px" height="500px" style="opacity: 0.8" >
    </div>

</div>


@endsection

