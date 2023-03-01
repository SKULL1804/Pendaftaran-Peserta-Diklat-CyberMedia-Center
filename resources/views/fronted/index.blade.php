@extends('fronted.main_master')

@section('hero')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            @include('fronted.home.hero')
        </div>
    </section>
    <!-- End Hero -->
@endsection

@section('content')
<!-- ======= About Section ======= -->
<section id="about" class="about">
    @include('fronted.home.about')
</section><!-- End About Section -->

<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us">
    <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="col-lg-4 d-flex align-items-stretch">
                @include('fronted.home.why_us')
            </div>
            <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                @include('fronted.home.diklat_populer')
            </div>
        </div>

    </div>
</section><!-- End Why Us Section -->

@endsection
