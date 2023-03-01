@extends('layouts.app')

@section('content')

@include('partials.alerts')

<div class="card shadow">
    <div class="card-body mt-2">
        <div>
            <form method="post" action="{{ route('alamat.update') }}"  enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" value="{{ $alamat->id }}">
                <div class="mb-3">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <x-form-label id="name" label="Nama Perusahaan" />
                            <x-form-input id="title" name="title" value="{{ $alamat->title }}"/>
                        </div>
                        <div class="col-md-4">
                            <x-form-label id="name" label="No. Telp" />
                            <x-form-input id="phone" name="phone" value="{{ $alamat->phone }}"/>
                        </div>
                        <div class="col-md-4">
                            <x-form-label id="name" label="Email" />
                            <x-form-input id="email" name="email" value="{{ $alamat->email }}"/>
                        </div>
                        <div class="col-12">
                            <x-form-label id="name" label="Alamat" />
                            <textarea id="description"  name="description" class="form-control">{{ $alamat->description}}</textarea>
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

<div class="card shadow">
    <div class="card-body mt-4">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col-">#</th>
                        <th scope="col">Nama Perusahaan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No. Telp</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $alamat->id }}</td>
                        <td>{{ $alamat->title }}</td>
                        <td>{{ $alamat->description}}</td>
                        <td>{{ $alamat->phone}}</td>
                        <td>{{ $alamat->email}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
