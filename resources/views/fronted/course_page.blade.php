@extends('fronted.main_master')

@php
    $allgallery = App\Models\Gallery::all();
@endphp

@section('content')
<section class="gallery">
    <div class="container" data-aos="fade-up">

        <div class="section-title pt-5">
        <h2>Gallery</h2>
        <p>Gallery CMC</p>
        </div>

        <div class="gallery swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                @foreach ($allgallery as $a )
                <div class="swiper-slide">
                    <img src="{{ asset($a->gallery) }}"  class="card-gallery" alt="">
                </div><!-- End testimonial item -->
                @endforeach

            </div>
        <div class="swiper-pagination"></div>
        </div>

    </div>
</section>
@endsection
