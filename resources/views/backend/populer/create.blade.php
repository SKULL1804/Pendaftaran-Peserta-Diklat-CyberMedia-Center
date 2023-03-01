@extends('layouts.app')

@section('buttons')
<nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('populer') }}">Back</a></li>
    <li class="breadcrumb-item active">{{ $title }}</li>
    </ol>
</nav>
@endsection

@section('content')
<div class="card shadow">
    <div class="card-body mt-2">
        <div>
            <form method="post" action="{{ route('populer.store') }}"  enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <x-form-label id="name" label="Nama Diklat" />
                            <x-form-input id="title" name="title"/>
                        </div>
                        <div class="col-md-6">
                            <x-form-label id="name" label="Biaya" />
                            <x-form-input id="price" name="price"/>
                        </div>
                        <div class="col-md-6">
                            <x-form-label id="name" label="Jadwal" />
                            <x-form-input id="schedule" name="schedule"/>
                        </div>
                        <div class="col-md-6">
                            <x-form-label id="name" label="Maksimal Peserta" />
                            <x-form-input id="available_seats" name="available_seats"/>
                        </div>
                        <div class="col-12">
                            <x-form-label id="name" label="Descrption Judul" />
                            <textarea id="description_title"  name="description_title" class="form-control"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label id="name" class="form-label fw-bold">Image</label>
                            <input id="image" class="form-control" name="image" type="file">
                            <div class="pt-2">
                                <img id="showimage" src="{{url('img/no_image.jpg') }}" alt="Profile" style="max-width: 120px;">
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


@endsection
