@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/checkout.css')}}">
    <title>EasyE-waste</title>
</head>
<body>
    <!-- Navbar -->
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="aboutUs.html">About Us</a></li>
        <li><a href="ourServices.html">Our Services</a></li>
        <li><a href="contactUs.html">Contact Us</a></li>
    </ul>
@section('content')
<p>Already have an account?<a href="{{ route('register') }}"><button>Sign in</button></a></p>
<div id="loginMainDiv">
        <div id="loginImageDiv">

        </div>

        <div id="loginDiv">
            <h2 id="loginHeader">Login Here</h2>
            <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div>
                        <label for="email">{{ __('Email Address') }}</label>

                        <div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="password">{{ __('Password') }}</label>

                        <div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div>
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
<footer class="footer-distributed">

        <div class="footer-left">
  
          <h3>Error<span>Sage</span></h3>
  
          <p class="footer-links">
            <a href="#" class="link-1">Home</a>
                 
          
            <a href="#">About</a>
            
            <a href="#">Faq</a>
            
            <a href="#">Contact</a>
          </p>
  
          <p class="footer-company-name">ErrorSage © 2023</p>
        </div>
  
        <div class="footer-center">
  
          <div>
            <i class="fa fa-map-marker"></i>
            <p><span>United International University</span> Madani Ave, Dhaka</p>
          </div>
  
  
          <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:support@company.com">error.sage@gmail.com</a></p>
          </div>
  
        </div>
  
        <div class="footer-right">
  
          <p class="footer-company-about">
            <span>About the company</span>
            Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
          </p>
  
  
        </div>
  
      </footer>

      <script src="{{asset('js/script.js')}}"></script>
@endsection
