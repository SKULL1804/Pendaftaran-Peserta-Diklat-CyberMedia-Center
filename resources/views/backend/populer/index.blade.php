@extends('layouts.app')

@push('style')
@powerGridStyles
@endpush

@section('buttons')
<nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('populer.create') }}">Add Diklat Populer</a></li>
    <li class="breadcrumb-item active">{{ $title }}</li>
    </ol>
</nav>
@endsection

@section('content')
@include('partials.alerts')
<div class="card shadow">
    <div class="card-body mt-4">
        <div class="table-responsive">
            <table id="table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama DIklat</th>
                        <th scope="col">Description</th>
                        <th scope="col">Biaya</th>
                        <th scope="col">Jadwal</th>
                        <th scope="col">Maksimal Peserta</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i = 1)
                    @foreach ( $populer as $p )
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $p->title }}</td>
                            <td>{{ $p->description_title }}</td>
                            <td>{{ $p->price }}</td>
                            <td>{{ $p->schedule}}</td>
                            <td>{{ $p->available_seats }}</td>
                            <td><img src="{{ asset($p->image) }}" alt="gallery" style="width: 90px; height: 90px;"></td>
                            <td>
                                <a href="{{ route('populer.edit', $p->id) }}" class="btn btn-primary btn-sm" title="Edit Gallery"><i class="bi bi-pencil-square"></i></a>
                                <a href="{{ route('populer.delete', $p->id) }}" class="btn btn-danger btn-sm " title="Remove Gallery" id="delete"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div
@endsection
