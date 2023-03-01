@extends('layouts.app')

@section('content')
@include('partials.alerts')

<div class="card shadow">
    <div class="card-body mt-4">
        <div>
            <form method="post" action="{{ route('hero.update') }}">
                @csrf

                <input type="hidden" name="id" value="{{ $hero->id }}">
                <div class="mb-3">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <x-form-label id="name" label="Judul" />
                            <x-form-input id="title" name="title" value="{{ $hero->title }}"/>
                        </div>
                        <div class="col-md-6">
                            <x-form-label id="name" label="Judul Ke-2 " />
                            <x-form-input id="two_title" name="two_title" value="{{ $hero->two_title }}"/>
                        </div>
                        <div class="col-md-6">
                            <x-form-label id="name" label="Desription Judul" />
                            <x-form-input id="short_title" name="short_title" value="{{ $hero->short_title }}"/>
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
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Deskripsi 1</th>
                        <th scope="col">List 1</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $hero->id }}</td>
                        <td>{{ $hero->title }}</td>
                        <td>{{ $hero->two_title }}</td>
                        <td>{{ $hero->short_title }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
