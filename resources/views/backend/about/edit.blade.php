@extends('layouts.app')

@section('content')

@include('partials.alerts')

<div class="card shadow">
    <div class="card-body mt-2">
        <div>
            <form method="post" action="{{ route('about.update') }}"  enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" value="{{ $about->id }}">
                <div class="mb-3">
                    <div class="row g-3">
                        <div class="col-12">
                            <x-form-label id="name" label="Judul" />
                            <x-form-input id="title" name="title" value="{{ $about->title }}"/>
                        </div>
                        <div class="col-12">
                            <x-form-label id="name" label="Descrption " />
                            <textarea id="short_descrption"  name="short_descrption" class="form-control">{{ $about->short_descrption}}</textarea>
                        </div>
                        <div class="col-12">
                            <x-form-label id="name" label="Descrption 2" />
                            <textarea id="two_short_descrption"  name="two_short_descrption" class="form-control">{{ $about->two_short_descrption}}</textarea>
                        </div>
                        <div class="col-md-6">
                            <label id="name" class="form-label fw-bold">About Image</label>
                            <input id="image" class="form-control" name="about_image" type="file">
                            <div class="pt-2">
                                <img id="showimage" src="{{ (!empty($about->about_image))? url( $about->about_image):url('img/no_image.jpg') }}" alt="Profile" style="max-width: 120px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <button class="btn btn-primary">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="{{ asset('js/upload.js') }}"></script>
@endsection
