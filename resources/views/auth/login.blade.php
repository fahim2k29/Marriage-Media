@extends('layouts.master') 
@section('content')

<div class="fullwidthHomepage">
    <section class="sectionHomepage" style="background-position: 0px 0px;">
    <div class="sectionHomeSlider">
        <ul >
            @foreach ($slider as $key => $slide)
            <li  style="background-color: rgb(0, 0, 0);">
                <div class="item{{ $key == 0 ? ' active' : '' }}">
                    <img src="{{ $slide->image }}" height="620px" width="100%" >
                </div>
            </li>
            @endforeach
        </ul>
    </div>

<div class="bottom-absolute right-align storebutton-placement">
    <div class="container-login">
        <a href="#" target="_blank" class="landing-header__app-store-badge" title="" style="cursor: pointer;">
            <img src="/frontend/assets/images/app_store.png" width="125" />
        </a>
        <a href="#" target="_blank" class="landing-header__app-store-badge" title="" style="cursor: pointer;">
            <img src="/frontend/assets/images/android_logo.png" width="125" />
        </a>
    </div>
</div>
<br><br><br><br><br>
<div class="sectionregister galleryGrid">
    <div class="container">
        <div class="registerSection">
            <div class="no-target button-wrapper cell-block-center grid fix-flex wrap padding-box double-padding" style="padding-top: 89%;">
                <div class="loginformPopup" style="margin-bottom: 128px;">
                    <form method="POST" action="{{ route('login') }}" role="form" id="login-form">
                            @csrf

                        

                        <div class="form-group">
                            
                            
                            {{-- <input type="text" class="form-control" id="email" name="email" placeholder="Email" /> --}}
                            

                            <div >
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div>
                                <input id="password"  type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       


                            {{-- <input type="password" class="form-control" id="password" name="password" placeholder="Password" /> --}}

                        </div>

                        <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                         {{ __('||| Remember Me') }}
                                    </label>
                        </div>

                        {{-- <div style="text-align: left; color: #fff;"><input type="checkbox" name="rememberme" value="1" checked="" /> Remember Me  ()</div> --}}
                        
                        <div class="form-group" style="text-align: center; padding-bottom: 0; margin-bottom: 0;">
                            <button
                                id="login-button"
                                type="submit"
                                class="button button__sm--success sm-button landingloginbutton center-align grid fix-flex cell-block-center uppercase-text fontsize-24 sm-color sm-female background-contrast primary-font-2 light-font white-text-color grid-cell cell-100 frame-button-grp rounded-corner landingloginbutton-login"
                            >
                                Login
                            </button>
                        </div>
                        
                         <div>
                              @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                         </div>


                        {{-- <div class="forgetpassword">
                            <a href="/forgetpassword">Forgotten Password</a>
                        </div> --}}
                    </form>
                </div>

                <a class="" href="/signup">
                    <div
                        class="sm-button landingloginbutton center-align grid fix-flex cell-block-center uppercase-text fontsize-24 sm-color sm-male background-contrast lineheight-54 primary-font-2 light-font white-text-color grid-cell cell-100 frame-button-grp rounded-corner"
                        data-name="register"
                    >
                        <span class="grid-cel" data-name="register"> Register</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
    </section>
</div>

@endsection
