@extends('layouts.app3')

@section('content')

<!-- ======= Intro Section ======= -->
<section id="intro">
    <div class="intro-container mt-5">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
        @foreach ($slider as $key => $slide)
            <div class="carousel-item{{ $key == 0 ? ' active' : '' }}" style="background-image: url({{ $slide->image }})">
                <div class="carousel-container">
                    @if (Auth::check())
                    <div class="container"></div>
                    @else
                    <div class="container">
                        <a href="/login" class="btn-get-started scrollto animate__animated animate__fadeInUp">Login </a> <br>
                        <a href="/signup" class="btn-get-started scrollto animate__animated animate__fadeInUp">Register</a>
                    </div>
                    @endif
                </div>
            </div>
        @endforeach


        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Intro Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>About Us</h3>
          <p>{!! $info->short_desc !!}</p>
        </header>
      </div>
    </section><!-- End About Us Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 class="section-title">Bachleor Profile</h3>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100"">
      <!-- <div class=" col-lg-12">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div> -->
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        @foreach ($users as $us)

        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
                @if (isset($us->addphoto))
                <img src="{{asset('User_Profile/'.$us->addphoto->image) }}" class="img-fluid" style="width: 100%; height:100%" >
                @else
                @if($us->Gender == 'Male')
                    <img src="{{asset('assets/images/avatars')}}/avatar3.png" class="img-fluid" style="width: 100%;height:100%" />
                @else
                    <img src="{{asset('assets/images/avatars')}}/profile-pic.jpg" class="img-fluid" style="width: 100%;height:100%" />
                @endif
                @endif
              <a href="{{ route('showInfo', $us->id) }}" data-lightbox="portfolio" data-title="App 1" class="link-preview"><i class="ion ion-eye"></i></a>
              <a href="{{ route('showInfo', $us->id) }}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>
            <div class="portfolio-info">
              <h4><a href="{{ route('showInfo', $us->id) }}">{{$us->UserName}}   {{ (int)Carbon\Carbon::now()->format('Y') - (int)$us->DOB_year }}</a></h4>
              <p> @if ($us->education) {{ $us->education->Employment }} @endif</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      </div>
    </section>
    <!-- End Portfolio Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Success Stories</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">
            @foreach($stories as $story)
                @if(!empty ($story->video))
                    <div class="testimonial-item">
                        <a href="{{ route('successStory_show', $story->id) }}" class="thumbnail">
                            @foreach(explode('=',$story->video) as $row)
                                @if ($loop->last)
                                    <img src="http://i1.ytimg.com/vi/{{$row}}/default.jpg" class="testimonial-img" alt="">
                                    <h3>{{ $story->title }}</h3>
                                    <p>
                                    <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                                    {!! $story->description !!}
                                    <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                                    </p>
                                @endif
                            @endforeach
                        </a>
                    </div>
                @else
                    <div class="testimonial-item">
                        <a href="{{ route('successStory_show', $story->id) }}">
                            <img src="{{ asset($story->image) }}" class="testimonial-img" alt="">
                            <h3>{{ $story->title }}</h3>
                            <p>
                            <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                            {!! $story->description !!}
                            <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                            </p>
                        </a>
                    </div>
                @endif
            @endforeach


        </div>

      </div>
    </section><!-- End Testimonials Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>
        <div class="row contact-info">
        @foreach ($contacts as $contact)
          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>
                {{ $contact->address }},
                {{ $contact->city }},
                {{ $contact->country }}
               </address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">{{ $contact->phone }}</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">{{ $contact->email }}</a></p>
            </div>
          </div>
        @endforeach

        </div>

        {{-- <div class="form">
          <form action="{{ route('backend.query.messages') }}" method="post" role="form" class="php-email-form">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div> --}}

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  @endsection
