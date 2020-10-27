@extends('layouts.app2')
@section('content')

<section id="intro">
    <div class="intro-container">
      <div
        id="introCarousel"
        class="carousel slide carousel-fade"
        data-ride="carousel"
      >
        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <div
            class="carousel-item active"style="background-image: url(frontend/newassets/img/intro-carousel/11.jpg)">>
            <div class="carousel-container">
              <div class="container">
                <div class="row">
                  <div class="col-md-4"></div>
                  <div class="col-md-4">
                    <form method="POST" action="{{ route('login') }}" role="form" id="login-form" class="login-form">
                        @csrf
                      <div class="form-group">
                        <label for="email">Email address:</label>
                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      </div>
                      <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input id="password"  type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      </div>
                      <div class="form-group form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" />
                          Remember me
                        </label>
                      </div>

                      <button type="submit" class="btn btn-primary">
                        Submit
                      </button>
                    </form>
                    <div>
                        @if (Route::has('password.request'))
                              <a class="btn btn-link" href="{{ route('password.request') }}">
                                  {{ __('Forgot Your Password?') }}
                              </a>
                          @endif
                   </div>

                  </div>
                  <div class="col-md-4"></div>
              </div>
              <a href="/signup" class="btn-get-started scrollto animate__animated animate__fadeInUp">Register</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
