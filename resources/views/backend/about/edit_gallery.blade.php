@extends('layouts.app')

@section('buttons')
<nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('all.gallery') }}">Back</a></li>
    <li class="breadcrumb-item active">{{ $title }}</li>
    </ol>
</nav>
@endsection

@section('content')

@include('partials.alerts')

<div class="card shadow">
    <div class="card-body mt-2">
        <form method="post" action="{{ route('update.gallery') }}"  enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $gallery->id }}">
            <div class="mb-3">
                <div class="row g-3">
                    <div class="col-md-6">
                        <x-form-label id="name" class="form-label fw-bold" label="Update Gallery" />
                        <input id="gallery" class="form-control" name="gallery" type="file" multiple>
                        <div class="pt-2">
                            <img id="showimage" src="{{asset($gallery->gallery)}}" alt="Profile" style="max-width: 120px;">
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <button class="btn btn-primary">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
