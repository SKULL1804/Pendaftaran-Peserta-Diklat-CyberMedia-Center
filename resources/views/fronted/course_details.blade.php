@extends('fronted.main_master')

@section('content')
<!-- ======= Cource Details Section ======= -->
<section id="course-details" class="course-details">
<div class="container" data-aos="fade-up">

    <div class="pt-5">
        <div class="row">
            <div class="col-lg-8">
                <img src="{{ asset($populer->image) }}" class="img-detail" alt="">
            </div>
            <div class="col-lg-4">

                <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Diklat Fee</h5>
                <p>{{ $populer->price }}</p>
                </div>

                <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Available Seats</h5>
                <p>{{ $populer->available_seats }}</p>
                </div>

                <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Schedule</h5>
                <p>{{ $populer->schedule }}</p>
                </div>

                <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Daftar</h5>
                <p><a href="{{ route('pendaftaran.create') }}">Pendaftaran </a></p>
                </div>
                <h3>{{ $populer->title }}</h3>
                <p>
                    {{ $populer->description_title }}
                </p>
            </div>
        </div>
    </div>

</div>
</section><!-- End Cource Details Section -->

@endsection
