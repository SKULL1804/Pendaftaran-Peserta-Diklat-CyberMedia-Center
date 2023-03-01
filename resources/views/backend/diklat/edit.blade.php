@extends('layouts.app')

@section('buttons')
<nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('daftar-diklat.index') }}">Back</a></li>
    <li class="breadcrumb-item active">{{ $title }}</li>
    </ol>
</nav>
@endsection

@section('content')
<div class="card shadow">
    <div class="card-body mt-2">
        <div>
            <form method="post" action="{{ route('daftar-diklat.update',$diklat->id) }}">
                @csrf
                <div class="mb-3">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <x-form-label id="name" label="Judul" />
                            <x-form-input id="name" name="name" value="{{ $diklat->name }}" />
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
