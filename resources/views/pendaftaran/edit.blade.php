@extends('layouts.app')

@section('buttons')
<nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('pendaftaran.index') }}">Back</a></li>
    <li class="breadcrumb-item active">{{ $title }}</li>
    </ol>
</nav>
@endsection

@section('content')
<div class="card shadow">
    <div class="card-body mt-2">
        <div>
            <form method="post" action="{{ route('pendaftaran.update') }}"  enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $pendaftaran->id }}">
                <div class="mb-3">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <x-form-label id="name" label="Nama" />
                            <x-form-input id="nama" name="nama" value="{{ $pendaftaran->nama }}"/>
                        </div>
                        <div class="col-md-6">
                            <x-form-label id="name" label="Usia" />
                            <x-form-input id="usia" name="usia" value="{{ $pendaftaran->usia }}"/>
                        </div>
                        <div class="col-md-6">
                            <x-form-label id="name" label="Email" />
                            <x-form-input id="email" name="email" value="{{ $pendaftaran->email }}"/>
                        </div>
                        <div class="col-md-6">
                            <x-form-label id="name" label="Pendidikan" />
                            <x-form-input id="pendidikan" name="pendidikan" value="{{ $pendaftaran->pendidikan }}"/>
                        </div>
                        <div class="col-md-6">
                            <x-form-label id="name" label="No. Handphone" />
                            <x-form-input id="phone" name="phone" value="{{ $pendaftaran->phone }}"/>
                        </div>
                        <div class="col-md-6">
                            <x-form-label id="name" label="Daftar Diklat" />
                            <select class="form-select" aria-label="Daftar Diklat" name="daftar_diklat_id">
                                <option selected disabled>-- Pilih Diklat --</option>
                                @foreach ($diklat as $d)
                                <option value="{{ $d->id }}"{{$d->id == $pendaftaran->daftar_diklat_id ? 'selected' : '' }}>{{ $d->name}}</option>
                                @endforeach
                            </select>
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
