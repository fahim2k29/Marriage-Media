<!DOCTYPE html>
<html lang="en">

<head>
    @if(!empty($info->name))
    <title>{{$info->name}} - {{$info->site_title}}</title>
    @else
        <title> Bismillah Marriage</title>
    @endif
    <meta name="description" content="{{ $info->meta_desc }}" />
    <meta name="keywords" content="{{ $info->meta_key }}" />
    <meta name="title" content="{{ $info->site_title }}" />
    <link rel="canonical" href="https://www.lovemarriage.info/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{$info->name}} - {{$info->site_title}}" />
    <meta property="og:description" content="{{ $info->meta_desc }}" />
    <meta property="og:url" content="https://www.lovemarriage.info/" />
    <meta property="og:site_name" content="{{ $info->name }}" />
    <meta property="og:image" content="https://www.smartsoftware.com.bd/assets/img/logo/software-company-bangladesh.png" />
    <meta property="og:image:secure_url" content="https://www.smartsoftware.com.bd/assets/img/logo/software-company-bangladesh.png" />
    <meta property="og:image:alt" content="software company Bangladesh">
    <meta property="og:image:type" content="image/png" />
    <meta name="twitter:title" content="{{ $info->site_title }}" />
    <meta name="twitter:description" content="{{$info->site_title}}" />
    <meta name="Googlebot" content="all" />
    <meta http-equiv="imagetoolbar" content="yes" />
    <meta name="Author" content="Smart Software Ltd." />
    <meta name="Copyright" content="Smart Software Ltd." />
    <meta name="owner" content="Smart Software Ltd." />
    <meta name="Rating" content="General" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta name="distribution" content="Global" />
    <meta name="classification" content="{{$info->site_title}}" />
    <meta name="robots" content="follow,index" />
    <meta property="og:locale" content="en_US">
    <meta property="article:publisher" content="https://www.facebook.com/loveMarriage">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@SmartSoftwarebd">


{{--
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords"> --}}

  <!-- Favicons -->
  <link href="/frontend/newassets/img/favicon.png" rel="icon">
  <link href="/frontend/newassetsassets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/frontend/newassets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/frontend/newassets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="/frontend/newassets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/frontend/newassets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="/frontend/newassets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/frontend/newassets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="/frontend/newassets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/frontend/newassets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/frontend/newassets/css/style.css" rel="stylesheet">


</head>

<body>
    @php
    $id =  Auth::id();
    $photo = App\AddPhoto::whereuser_id($id)->first();
    @endphp
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent" style="background-color: teal">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">
          <h1 class="logo mr-auto">
              @if (Auth::check() && isset($photo))
                <a href="/user/dashboard">
                    @if(!empty($info->name))
                    {{$info->name}}
                    @else
                    BismillahMarriage
                    @endif
                </a>
                @else
                    <a href="/">
                        @if(!empty($info->name))
                        {{$info->name}}
                        @else
                        BismillahMarriage
                        @endif
                    </a>
                @endif

            </h1>
          <nav class="nav-menu d-none d-lg-block">

            @if (Auth::check() && isset($photo))
                <ul>
                    <li class="{{request()->segment(2)=='dashboard' ? 'active' : ''}}"><a href="/user/dashboard">Home</a></li>
                    <li class="{{request()->segment(1)=='search' ? 'active' : ''}}"><a href="/search">Search</a></li>
                    <li><a href="#Messages">Messages</a></li>
                    <li><a href="#portfolio">Profile</a></li>
                    <li class="{{request()->segment(2)=='packages' ? 'active' : ''}}"><a href="/membership/packages">Membership</a></li>
                    <li class="drop-down">
                        @php
                            $photo = App\AddPhoto::where('user_id',auth()->id())->first();
                            $user = App\User::where('id',auth()->id())->first();
                        @endphp
                        <a href="/user/dashboard" style="margin-top:-10px">
                        <img class="rounded-circle" src="{{asset('User_Profile/'.$photo->image) }}" height="38px" width="40px" /></a>
                            <ul>
                                <li><a href="/user/dashboard/profile">Profile</a></li>
                                <li><a href="/editPhoto">My Photos</a></li>
                                <li><a  href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                    </li>
                </ul>
            @else
            <ul>
                <li class="{{request()->segment(1)=='' ? 'active' : ''}}"><a href="/">Home</a></li>
                <li class="{{request()->segment(3)=='all' ? 'active' : ''}}"><a href="/search/result/all">Profile</a></li>
                <li class="{{request()->segment(2)=='list' ? 'active' : ''}}"><a href="/successStory/list">SuccessStory</a>
                <li class="drop-down"><a href="">Search</a>
                  <ul>
                    <li><a href="/search">Quick Search</a></li>
                    <li><a href="/username">Search By Username</a></li>
                    <li><a href="/religion">Religion Search</a></li>
                    <li><a href="/education">Education Search</a></li>
                    <li><a href="/personal">Personal Search</a></li>
                  </ul>
                </li>
                <li class="{{request()->segment(2)=='index' ? 'active' : ''}}"><a href="/contactUs/index">Contact Us</a></li>
              </ul>
            @endif
          </nav><!-- .nav-menu -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->
  <section id="gap" style="background-color: teal">

  </section>

  <div>
    <main id="main">
        @yield('content')
    </main>
  </div>

  <!-- ======= Footer ======= -->
  <footer id="footer" style="background-color: rgb(11, 179, 179)">
    <div class="footer-top" style="background-color: teal">
      <div class="container" style="background-color: teal">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            @if(!empty($info->name))
            <h3>{{$info->name}}</h3>
            @else
                <h3> Bismillah Marriage</h3>
            @endif

            <p>{!! $info->address !!}</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              @foreach ($pages->where('section', 1) as $page)
                  @if($page->status == 1)
                  <li class="primary-font-2 light-font fontsize-12"> <i class="ion-ios-arrow-right"></i>
                      <a href="/pages/{{$page->id}}"> {{$page->name}} </a>
                  </li>
                  @endif
              @endforeach
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            @php
            $contacts = App\ContactUs::all();
            @endphp
            @foreach ($contacts as $contact)
            <p>
                <strong>Phone:</strong> {{ $contact->phone }}<br>
                <strong>Email:</strong>{{ $contact->email }}<br>
                {{ $contact->address }}<br>
                {{ $contact->city }}<br>
                {{ $contact->country }} <br>

            </p>
            @endforeach

            {{-- <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div> --}}
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Help</h4>
            <ul>
              @foreach ($pages->where('section', 2) as $page)
                  @if($page->status == 1)
                  <li class="primary-font-2 light-font fontsize-12"><i class="ion-ios-arrow-right"></i>
                      <a href="/pages/{{$page->id}}"> {{$page->name}} </a>
                  </li>
                  @endif
              @endforeach
              {{-- <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li> --}}
              {{-- <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li> --}}
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        <?php echo date("Y"); ?> &copy; <strong>{{ $info->name }}</strong>. All Rights Reserved
      </div>
      <div class="credits" >

        Developed by <a href="https://www.smartsoftware.com.bd/" style="color: #ffffff; font-weight:900">Smart Software Ltd.</a>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


  <!-- Vendor JS Files -->
  <script src="/frontend/newassets/vendor/jquery/jquery.min.js"></script>
  <script src="/frontend/newassets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/frontend/newassets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="/frontend/newassets/vendor/php-email-form/validate.js"></script>
  <script src="/frontend/newassets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="/frontend/newassets/vendor/counterup/counterup.min.js"></script>
  <script src="/frontend/newassets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/frontend/newassets/vendor/venobox/venobox.min.js"></script>
  <script src="/frontend/newassets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="/frontend/newassets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="/frontend/newassets/js/main.js"></script>

</body>

</html>
