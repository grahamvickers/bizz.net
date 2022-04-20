@extends('layouts.auth')

@section('content')

<!-- <section class="landing">
    <h2>Find Your Next Venture Capital Project Today!</h2>
    <p>Explore 10,000+ businesses for sale across North America.</p>
</section> -->
<div id="authCon">
    
    <h2>Register a New Account</h2>

    <div id="mainFormCon">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="formItemCon">
                <label for="name" >{{ __('Name*') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="formItemCon">
                <label for="email">{{ __('E-Mail Address*') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="formItemCon">
                <label for="password">{{ __('Password*') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="formItemCon">
                <label for="password-confirm" >{{ __('Confirm Password*') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div>
                <div>
                    <button type="submit" class="button">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
        <br>
        <div id="loginRegister">
            <p>Already have an account? Click <a href="/login">HERE</a> to sign in</p>
        </div>
    </div>
</div>

@include('layouts.partials.footer')

@endsection
