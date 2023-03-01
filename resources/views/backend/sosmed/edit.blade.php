@extends('layouts.app')

@section('content')

@include('partials.alerts')

<div class="card shadow">
    <div class="card-body mt-2">
        <div>
            <form method="post" action="{{ route('sosmed.update') }}"  enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" value="{{ $sosmed->id }}">
                <div class="mb-3">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <x-form-label id="name" label="Facebook" />
                            <x-form-input id="facebook" name="facebook" value="{{ $sosmed->facebook }}"/>
                        </div>
                        <div class="col-md-4">
                            <x-form-label id="name" label="Whatshapp" />
                            <x-form-input id="whatshapp" name="whatshapp" value="{{ $sosmed->whatshapp }}"/>
                        </div>
                        <div class="col-md-4">
                            <x-form-label id="name" label="Youtube" />
                            <x-form-input id="youtube" name="youtube" value="{{ $sosmed->youtube }}"/>
                        </div>
                        <div class="col-md-4">
                            <x-form-label id="name" label="Instagram" />
                            <x-form-input id="instagram" name="instagram" value="{{ $sosmed->instagram }}"/>
                        </div>
                        <div class="col-md-4">
                            <x-form-label id="name" label="Gmail" />
                            <x-form-input id="gmail" name="gmail" value="{{ $sosmed->gmail }}"/>
                        </div>
                        <div class="col-md-4">
                            <x-form-label id="name" label="TikTok" />
                            <x-form-input id="tiktok" name="tiktok" value="{{ $sosmed->tiktok }}"/>
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
@endsection
