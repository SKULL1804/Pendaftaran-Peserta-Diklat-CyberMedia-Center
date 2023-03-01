@php
$hero = App\Models\Hero::find(1);
@endphp

<h1>{{ $hero->title }},<br>{{ $hero->two_title }}</h1>
<h2>{{ $hero->short_title }}</h2>
<a href="{{ route('pendaftaran.create') }}" class="btn-get-started">Pendaftaran</a>
