@extends('layouts.app')

@section('content')
<body>
<section class="col-10 p-2 bg-white mt-3" style="margin: auto; border: 1px; border-radius:12px;height:540px; opacity:0.7;position: relative;">
</section>
  
<div class="d-flex flex-row" style="position: absolute;top:8%; left:10%">
        <div class="container col-md">

            <div class="row mt-2">
                <div class="col-md">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h1 class="text-center">Register</h1>
                        <div class="form-group d-flex flex-column ">
                            <label for="name" class="col-md col-form-label">{{ __('Name') }}</label>

                            <div class="col-md">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group d-flex flex-column ">
                            <label for="email" class="col-md col-form-label">{{ __('E-Mail Address') }}</label>

                            <div class="col-md">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group d-flex flex-column ">
                            <label for="password" class="col-md col-form-label">{{ __('Password') }}</label>

                            <div class="col-md">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div>

                            <label for="user">Choose Role:</label>
                             <select id="user">
                             <option value="employe">Employe</option>
                             <option value="user">User</option>
                            </select>

                        </div> --}}

                        <div class="form-group d-flex flex-column ">
                            <label for="password-confirm" class="col-md col-form-label">{{ __('Confirm Password') }}</label>

                            <div class="col-md">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group d-flex flex-column">
                            <div class="col-md offset-md-1">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
