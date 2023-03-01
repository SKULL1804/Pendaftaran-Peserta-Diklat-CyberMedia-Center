@php
$why = App\Models\WhyUs::find(1);
@endphp

<div class="content">
    <h3>{{ $why->title }}</h3>
    <p>
        {{ $why->description_title }}
    </p>
    <div class="text-center">
        <a href="{{ route('home.about') }}" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
    </div>
</div>
