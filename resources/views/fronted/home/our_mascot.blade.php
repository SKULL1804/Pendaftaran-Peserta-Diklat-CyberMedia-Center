@php
$populer = App\Models\Populer::all();
@endphp

<div class="slide-container swiper">
    <div class="section-title">
        <h2>Diklat</h2>
        <p>Daftar-Daftar Diklat</p>
    </div>
    <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
            @foreach ($populer as $p )
            <div class="card swiper-slide">
                <div class="diklat-content">
                    <span class="overlay"></span>
                    <div class="card-diklat">
                        <img src="{{ asset($p->image) }}" alt="" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">{{ $p->title }}</h2>
                    <p class="description">{{ $p->description_title }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="swiper-button-next swiper-btn"></div>
    <div class="swiper-button-prev swiper-btn"></div>
    <div class="swiper-pagination"></div>
</div>

