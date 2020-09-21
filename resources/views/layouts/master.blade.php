
<html lang="en">
    <head>
  
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        {{-- <script type="text/javascript" async="" src="/frontend/assets/js/plugins/ec.js"></script>
            <script src="https://connect.facebook.net/signals/config/2251928191696851?v=2.9.22&amp;r=stable" async=""></script>
            <script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
            <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
            <script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/nuX0GNR875hMLA1LR7ayD9tc/recaptcha__en.js"></script>
            <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-NNGBZLJ"></script> --}}
            
            
            <meta name="viewport" content="width=1200" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="/frontend/assets/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
        <meta name="apple-itunes-app" content="app-id=1116597910" />

      
            @if(!empty($info->name))
            <title>{{$info->name}}</title>
            @else
           <title> Bismillah Marriage</title>
            @endif

        

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/frontend/assets/css/less/font-awesome.css">

        <link href="/frontend/assets/css/less/global.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="/frontend/assets/css/less/controller/LandingController.css" media="screen" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="/frontend/assets/js/global.min.js"></script>
        <script type="text/javascript" src="/frontend/assets/js/controller/LandingController.min.js"></script>

        <script>
            //var dataLayer=[];
        </script>
        <!-- Google Tag Manager -->
        <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != "dataLayer" ? "&l=" + l : "";
                j.async = true;
                j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, "script", "dataLayer", "GTM-NNGBZLJ");
        </script>
        <!-- End Google Tag Manager -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Lobster" rel="stylesheet" />
    </head>
    <body id="LandingController" class="hiddenScroll">
        <nav class="navbar navbar-default" id="mainTopnav" style="display: none;">
            <div class="row-fluid">
                <div class="top_loginbar navbar-fixed-top" style="height: 40px; width: 100%; margin: 0px; background-color: #007ea5; border: 0px;">
                    <div class="colwac-xs-3 colwac-md-3 colwac-lg-3 backgorund_white"></div>

                    <div class="container">
                        <div class="col-md-3 col-lg-3 logo_topbar">
                            <div class="abslogo_position2">
                                <a href="/dashboard">
                                    <img src="/frontend/assets/images/header-logo.gif"   />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-9 col-lg-9 logo_topbar">
                            <div class="login_innerbar">
                                <div class="topnav_bar">
                                    <div class="form-group">
                                        <label class="sr-only" for="username_login">Email</label>
                                        <input class="form-control" id="username_login" name="email" placeholder="User Name" autofocus="" required="" />
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="Password">Password</label>
                                        <input type="password" class="form-control" id="Password" name="password" placeholder="Password" required="" />
                                    </div>
                                    <button type="submit" class="btn btn-success">Login</button> <span style="color: white;"> or </span> <a href="/signup" class="btn btn-success">Register</a>
                                    <a href="/forgetpassword" style="padding-left: 10px; color: #ffffff;">Forgotten Password</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </nav>

        <header class="landing-header transition">
            <div class="container">
                <h1 class="landing-header__logo">
                    <a href="/" title=""><img src="/frontend/assets/images/marriageMedia.png" alt="" style="height: 150px; width:232px; margin-top: 5px;" /></a>
                  
                </h1>

                <div class="landing-header__app" style="visibility: hidden;">
                    <a href="#" target="_blank" class="landing-header__app-store-badge" title="">
                        <img src="/frontend/assets/images/app_store.png" width="125" />
                    </a>
                    <a href="#" target="_blank" class="landing-header__app-store-badge" title="">
                        <img src="/frontend/assets/svg/google-play-badge.png" width="125" />
                    </a>
                </div>

                <nav class="landing-header__nav">
                    <ul>
                        <li class="has-dropdown login">
                            <a href="/search" class="has-dropdown" title="Search for your perfect marriage partner">Search </a>
                            <div class="nav--item-dropdown login login-links">
                                <a href="" class="has-dropdown" title="Search for your perfect marriage partner"> </a>
                                <ul class="nav--item-dropdownli">
                                    <a href="" class="has-dropdown" title="Search for your perfect marriage partner"> </a>
                                    <li><a href="" class="has-dropdown" title="Search for your perfect marriage partner"></a><a href="/search" class="navlinks">Search</a></li>
                                    <li><a href="/profession" class="navlinks">Profession Search</a></li>
                                    <li><a href="/search/result" class="navlinks">Photo Gallery</a></li>
                                    <li><a href="/usernamesearch" class="navlinks">Username Search</a></li>
                                </ul>
                            </div>
                        </li>
                            @guest
                                    <li class="login">
                                        <a href="/login" title="" id="btnhomelogins">Login</a>
                                    </li>
                                    <li>
                                        @if (Route::has('register'))
                                        <a href="/signup" title="Register to find your perfect marriage partner">Register</a>
                                        @endif 
                                    </li>
                                @else

                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->UserName }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a
                                        class="dropdown-item"
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                    document.getElementById('logout-form').submit();"
                                    >
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </div>

                            @endguest
                    </ul>
                </nav>
            </div>
        </header>

        <div>
            <main >
                @yield('content')
            </main>
        </div>

        <!-- Footer -->

        <footer class="primary-font-2 relative-position">
            <div class="container">
                <div class="row">
                    <div class="col-xs-3">
                        <ul>
                            <li class="liheader female-text-color">
                                <h4 class="primary-text-color fontsize-14">
                                    About Us
                                </h4>
                            </li>
                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/login">
                                    Login
                                </a>
                            </li>
                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/signup">
                                    Register
                                </a>
                            </li>
                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/search">
                                    Search
                                </a>
                            </li>                        
                        </ul>
                    </div>
                    <div class="col-xs-3">
                        <ul>
                            <li class="liheader male-text-color fontsize-12">
                                <h4 class="primary-text-color fontsize-14">News</h4>
                            </li>
                            
                            @foreach ($pages ->where('section', 2) as $page)
                            {{-- @dd($page); --}}
                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/pages/news/Umrah-Winners/{{$page->id}}"> {{$page->name}} </a>
                            </li>
                            @endforeach
                            
                                
                            {{-- @endforeach --}}

                            {{-- <li class="primary-font-2 light-font fontsize-12">
                            <a href="/pages/news/{{$page->slug}}/{{$page->id}}"> {{$page->name}} </a>
                            </li>
                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/pages/news/Reviews/3"> Reviews </a>
                            </li>
                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/pages/news/In-The-News"> In The News </a>
                            </li>
                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/pages/news/Site-News">
                                    Site News
                                </a>
                            </li>
                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/pages/news/PR">
                                    PR
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                    <div class="col-xs-3">
                        <ul>
                            <li class="liheader female-text-color">
                                <h4 class="primary-text-color fontsize-14">Our Standards</h4>
                            </li>
                            
                            @foreach ($pages->where('section', 3) as $page)
                            {{-- @dd($page); --}}
                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/pages/news/Umrah-Winners/{{$page->id}}"> {{$page->name}} </a>
                            </li>
                            @endforeach

                        </ul>
                    </div>

                    <div class="col-xs-3">
                        <ul>
                            <li class="liheader male-text-color">
                                <h4 class="primary-text-color fontsize-14">Help</h4>
                            </li>
                           @foreach ($pages->where('section', 4) as $page)
                            {{-- @dd($page); --}}
                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/pages/news/Umrah-Winners/{{$page->id}}"> {{$page->name}} </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-xs-12">
                        <div class="col-xs-9">
                            <p style="font-size: 13px;">  <?php echo date("Y"); ?> &copy;  {{$info->name}} </p>
                        </div>
                        

                        <div class="col-xs-3">
                           
                            <a href="https://www.smartsoftware.com.bd/">Developed By:  <b> Smart Software Ltd. </b></a>                               

                            
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        
         
 
         <!-- Global site tag (gtag.js) - Google Analytics -->
 
         <!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108538968-2"></script>-->
         <!---->
         <!--<script>-->
         <!---->
         <!--    window.dataLayer = window.dataLayer || [];-->
         <!---->
         <!--    function gtag(){dataLayer.push(arguments);}-->
         <!---->
         <!--    gtag('js', new Date());-->
         <!---->
         <!---->
         <!---->
         <!--    gtag('config', 'UA-108538968-2');-->
         <!---->
         <!--</script>-->
 
         <script type="text/javascript" id="">
             !(function (b, e, f, g, a, c, d) {
                 b.fbq ||
                     ((a = b.fbq = function () {
                         a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments);
                     }),
                     b._fbq || (b._fbq = a),
                     (a.push = a),
                     (a.loaded = !0),
                     (a.version = "2.0"),
                     (a.queue = []),
                     (c = e.createElement(f)),
                     (c.async = !0),
                     (c.src = g),
                     (d = e.getElementsByTagName(f)[0]),
                     d.parentNode.insertBefore(c, d));
             })(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
             fbq("init", "2251928191696851");
             fbq("trackCustom", "PageViewDesktop");
         </script>
         <noscript><img height="1" width="1" style="display: none;" src="https://www.facebook.com/tr?id=2251928191696851&amp;ev=PageView&amp;noscript=1" /></noscript>
 
         <script type="text/javascript" id="">
             !(function (b, e, f, g, a, c, d) {
                 b.fbq ||
                     ((a = b.fbq = function () {
                         a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments);
                     }),
                     b._fbq || (b._fbq = a),
                     (a.push = a),
                     (a.loaded = !0),
                     (a.version = "2.0"),
                     (a.queue = []),
                     (c = e.createElement(f)),
                     (c.async = !0),
                     (c.src = g),
                     (d = e.getElementsByTagName(f)[0]),
                     d.parentNode.insertBefore(c, d));
             })(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
             fbq("init", "2251928191696851");
             fbq("trackCustom", "PageViewDesktop");
         </script>
         <noscript><img height="1" width="1" style="display: none;" src="https://www.facebook.com/tr?id=2251928191696851&amp;ev=PageView&amp;noscript=1" /></noscript>
         <div style="visibility: hidden; position: absolute; width: 100%; top: -10000px; left: 0px; right: 0px; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0;">
             <div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.5;"></div>
             <div style="margin: 0px auto; top: 0px; left: 0px; right: 0px; position: absolute; border: 1px solid rgb(204, 204, 204); z-index: 2000000000; background-color: rgb(255, 255, 255); overflow: hidden;">
                 <iframe
                     title="recaptcha challenge"
                     src="https://www.google.com/recaptcha/api2/bframe?hl=en&amp;v=nuX0GNR875hMLA1LR7ayD9tc&amp;k=6Ldb-HoUAAAAALVVpryBLPYkK4ldXAmzkMvUl9TH&amp;cb=rz44l09w1f72"
                     name="c-vbmkverz8r0l"
                     frameborder="0"
                     scrolling="no"
                     sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"
                     style="width: 100%; height: 100%;"
                 ></iframe>
             </div>
         </div>

      
           
        
    </body>
</html>