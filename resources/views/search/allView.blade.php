@extends('layouts.app2')

@section('content')



    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
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
                <img src="{{asset($us->addphoto->image) }}" class="img-fluid" style="width: 100%; height:100%" >
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
    
  @endsection
