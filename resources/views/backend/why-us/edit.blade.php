@extends('layouts.app')

@section('content')
@include('partials.alerts')

<div class="card shadow">
    <div class="card-body mt-2">
        <form method="post" action="{{ route('why.update') }}">
            @csrf
            <input type="hidden" name="id" value="{{ $why->id }}">
                <div class="mb-3">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <x-form-label id="name" label="Judul" />
                            <x-form-input id="title" name="title" value="{{ $why->title }}"/>
                        </div>
                        <div class="col-md-6">
                            <x-form-label id="name" label="Descrption Judul" />
                            <textarea id="description_title"  name="description_title" class="form-control">{{ $why->description_title}}</textarea>
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

<div class="card shadow">
    <div class="card-body mt-4">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Deskripsi Judul</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $why->id }}</td>
                        <td>{{ $why->title }}</td>
                        <td>{{ $why->description_title }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
