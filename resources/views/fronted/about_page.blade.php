@extends('fronted.main_master')

@section('content')

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="pt-5">
                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="{{$about->about_image }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>{{ $about->title }}</h3>
                        <p class="fst-italic">
                            {{ $about->short_descrption}}
                        </p>
                        <p>
                            {{ $about->two_short_descrption}}
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

<!-- ======= Mascot Section ======= -->
@php
$our = App\Models\OurMascot::all();
@endphp

<div class="slide-container swiper">

<div class="section-title">
    <h2>Mascot</h2>
    <p>Our Mascot</p>
</div>

    <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
            @foreach ($our as $o )
            <div class="card swiper-slide">
                <div class="img-content">
                    <span class="overlay"></span>
                    <div class="card-img">
                        <img src="{{ asset($o->our_mascot) }}" alt="" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">{{ $o->title }}</h2>
                    <p class="description">{{ $o->description_title }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="swiper-button-next swiper-btn"></div>
    <div class="swiper-button-prev swiper-btn"></div>
    <div class="swiper-pagination"></div>
</div>
<!-- End Mascot Section -->

@endsection

