@extends('layouts.base')

{{-- Jquery --}}
<script src="{{ asset('jquery/jquery-3.6.0.min.js') }}"></script>

@push('style')
{{-- Template --}}
<link rel="stylesheet" href="{{ asset('template/css/app.css') }}">
@endpush

@section('base')

@include('partials.navbar')

<div class="container-fluid">
        @include('partials.sidebar')

        <main id="main" class="main">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2 fw-bold">{{ $title }}</h1>


                @yield('buttons')
            </div><!-- End Page Title -->

            <div class="py-2">
                @yield('content')
            </div>
        </main><!-- End #main -->
</div>
    <!-- Template JS File -->
    <script src="{{ asset('template/js/main.js') }}"></script>
    {{-- SweetAlert2 --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('template/js/code.js') }}"></script>
    {{-- Gallery JS --}}
    <script src="{{ asset('fronted/assets/js/gallery.js') }}"></script>
    {{-- Upload JS --}}
    <script src="{{ asset('js/upload.js') }}"></script>
    {{-- DataTable JS --}}
    <script src="{{ asset('template/js/datatable.js') }}"></script>
    <script src="{{ asset('template/js/datatable2.js') }}"></script>

    <script src="{{ asset('template/js/modal.js') }}"></script>

@endsection

