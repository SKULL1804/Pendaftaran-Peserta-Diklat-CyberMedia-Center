@extends('layouts.app')

@section('content')

@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="card shadow">
            <div class="card-body">
                <h6 class="fs-6 fw-light m-2">About</h6>
                <h4 class="fw-bold">{{ $aboutCount }}</h4>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow">
            <div class="card-body">
                <h6 class="fs-6 fw-light m-2">Data Pendaftaran</h6>
                <h4 class="fw-bold">{{ $dataCount }}</h4>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow">
            <div class="card-body">
                <h6 class="fs-6 fw-light m-2">Diklat</h6>
                <h4 class="fw-bold">{{ $diklatCount }}</h4>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow">
            <div class="card-body">
                <h6 class="fs-6 fw-light m-2">Message</h6>
                <h4 class="fw-bold">{{ $messageCount }}</h4>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow">
            <div class="card-body">
                <h6 class="fs-6 fw-light m-2">Gallery</h6>
                <h4 class="fw-bold">{{ $galleryCount }}</h4>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow">
            <div class="card-body">
                <h6 class="fs-6 fw-light m-2">Mascot</h6>
                <h4 class="fw-bold">{{ $mascotCount }}</h4>
            </div>
        </div>
    </div>
</div>
@endsection

@endsection
