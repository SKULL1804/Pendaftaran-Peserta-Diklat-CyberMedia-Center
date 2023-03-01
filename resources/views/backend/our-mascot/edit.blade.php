@extends('layouts.app')

@section('buttons')
<nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('mascot') }}">Back</a></li>
    <li class="breadcrumb-item active">{{ $title }}</li>
    </ol>
</nav>
@endsection

@section('content')
<div class="card shadow">
    <div class="card-body mt-2">
        <div>
            <form method="post" action="{{ route('mascot.update') }}"  enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $our->id }}">
                <div class="mb-3">
                    <div class="row g-3">
                        <div class="col-md-8">
                            <x-form-label id="name" label="Judul" />
                            <x-form-input id="title" name="title" value="{{ $our->title }}"/>
                        </div>
                        <div class="col-12">
                            <x-form-label id="name"label="Descrption Judul" />
                            <textarea id="description_title"  name="description_title" class="form-control">{{ $our->description_title }}</textarea>
                        </div>
                        <div class="col-md-6">
                            <label id="name" class="form-label fw-bold">Our Mascot</label>
                            <input id="image" class="form-control" name="our_mascot" type="file">
                            <div class="pt-2">
                                <img id="showimage" src="{{ asset($our->our_mascot)}}" alt="Profile" style="max-width: 120px;">
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
