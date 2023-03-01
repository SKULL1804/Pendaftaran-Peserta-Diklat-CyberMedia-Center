@extends('fronted.main_master')
@php
    $alamat = App\Models\Alamat::find(1);
@endphp

@section('content')
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div data-aos="fade-up">
            <iframe style="border:0; width: 100%; height: 350px;" src="https://maps.google.com/maps?q=cyber%20media%20centre&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="container" data-aos="fade-up">

            <div class="row mt-5">

                <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Location:</h4>
                    <p>{{ $alamat->description }}</p>
                    </div>

                    <div class="email">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p>{{ $alamat->email }}</p>
                    </div>

                    <div class="phone">
                    <i class="bi bi-phone"></i>
                    <h4>Call:</h4>
                    <p>{{ $alamat->phone }}</p>
                    </div>

                </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                <form action="{{ route('contact.store') }}" method="post" role="form" class="php-email-form">

                    @csrf
                    <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="nama" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                    </div>
                    <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                    @include('partials.alerts')
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
@endsection
