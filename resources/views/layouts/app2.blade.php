<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  @if(!empty($info->name))
    <title>{{$info->name}}</title>
  @else
    <title> Bismillah Marriage</title>
  @endif
  <meta content="" name="description">
  <meta content="" name="keywords">

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
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li class="{{request()->segment(2)=='packages' ? 'active' : ''}}"><a href="/membership/packages">Membership</a></li>
                    <li class="drop-down">
                        @php
                            $photo = App\AddPhoto::where('user_id',auth()->id())->first();
                            $user = App\User::where('id',auth()->id())->first();
                        @endphp
                        @if (isset($photo))
                            <a href="/user/dashboard" style="margin-top:-10px">
                                <img class="rounded-circle" src="{{asset($photo->image) }}" height="38px" width="40px" /></a>
                        @else
                            @if ($user->Gender == "Male")
                            <img class="rounded-circle" src="{{asset('assets/images/avatars')}}/profile-pic.jpg" height="32px" width="40px" />
                            @else
                            <img class="rounded-circle" src="{{asset('assets/images/avatars')}}/avatar3.png" height="32px" width="40px" />
                            @endif
                        @endif
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
                <li class="{{request()->segment(3)=='all' ? 'active' : ''}}"><a href="/search/result/all">Portfolio</a></li>
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
            <h3>Bismnillah Marriage</h3>
            <p>Bismillah-Marriage.com brings to you a secure platform where you can meet thousands
                of Muslim singles from around the world who are looking for a deep,
                loving and long lasting marriage</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              @foreach ($pages->where('section', 1) as $page)
                  @if($pages[0]->status == 1)
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
                  @if($pages[1]->status == 1)
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
