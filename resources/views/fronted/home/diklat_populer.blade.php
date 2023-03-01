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
                <div class="img-content">
                    <span class="overlay"></span>
                    <div class="card-diklat">
                        <img src="{{ asset($p->image) }}" alt="" class="card-diklat">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">{{ $p->title }}</h2>
                    <p class="description">{{ $p->description_title }}</p>
                    <div class="detail">
                        <a href="{{ route('home.details', $p->id) }}">lihat</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="swiper-button-next swiper-btn"></div>
    <div class="swiper-button-prev swiper-btn"></div>
    <div class="swiper-pagination"></div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content text-center">
        <div class="modal-header">
            <h2 class="modal-title w-100">{{ $title }}</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <img class="img-modal" alt="..." style="max-width: 100%; height: px;">
        </div>
      </div>
    </div>
  </div>
