@php
$about = App\Models\About::find(1);
@endphp

<div class="container" data-aos="fade-up">

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

