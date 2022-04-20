@extends('layouts.auth')

@section('content')
<section class="landing">
    <h2>Find Your Next Venture Capital Project Today!</h2>
    <p>Explore 10,000+ businesses for sale across North America.</p>
</section>

<div id="authCon">
    <h2>LOGIN</h2>
    <div id="mainFormCon">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="formItemCon">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div>
                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <p><strong>{{ $message }}</strong></p>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="formItemCon">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div>
                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <p><strong>{{ $message }}</strong></p>
                        </span>
                    @enderror
                </div>
            </div>

            
            <div id="rememberCon"> 
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            <br>

            <div >
                <button type="submit" class="button" >{{ __('Login') }}</button>
                <a href="#" class="button">Forgot Password</a>
            </div>

            <br>
            
            
        </form>
        <div id="loginRegister">
            <p>Don't have an account? Click <a href="/register">HERE</a> to create one</p>
        </div>
    </div>
</div>
 


@include('layouts.partials.footer')

@endsection


