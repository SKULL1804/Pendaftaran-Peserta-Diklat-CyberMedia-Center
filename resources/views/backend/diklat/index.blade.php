@extends('layouts.app')

@push('style')
@powerGridStyles
@endpush

@section('buttons')
<nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{route('daftar-diklat.create')}}">Add Daftar Diklat</a></li>
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
                        <th scope="col">Diklat</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i = 1)
                    @foreach ( $diklat as $d )
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $d->name }}</td>
                            <td>
                                <a href="{{ route('daftar-diklat.edit', $d->id) }}" class="btn btn-primary btn-sm" title="Edit Gallery"><i class="bi bi-pencil-square"></i></a>
                                <a href="{{ route('daftar-diklat.delete', $d->id) }}" class="btn btn-danger btn-sm " title="Remove Gallery" id="delete"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
