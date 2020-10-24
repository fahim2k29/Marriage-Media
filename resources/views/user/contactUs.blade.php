@extends('layouts.app2') @section('content')
<section  style="background-color: white">
    <div class="container ">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">


                        <!-- ======= Contact Section ======= -->
                        <section id="contact" class="section-bg">
                            <div class="">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <h3>Contact Us</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row contact-info">
                            {{-- @foreach ($contacts as $contact) --}}
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
                            {{-- @endforeach --}}

                            </div>



                            </div>
                        </section><!-- End Contact Section -->

                </div>
            </div>

        </div>
    </div>
</section>

@endsection
