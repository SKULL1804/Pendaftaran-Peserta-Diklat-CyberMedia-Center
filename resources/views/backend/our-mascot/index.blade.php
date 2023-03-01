@extends('layouts.app')

@push('style')
@powerGridStyles
@endpush

@section('buttons')
<nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('mascot.create') }}">Add Our Mascot</a></li>
    <li class="breadcrumb-item active">{{ $title }}</li>
    </ol>
</nav>
@endsection

@section('content')

@include('partials.alerts')
<div class="card shadow">
    <div class="card-body mt-4">
        <div class="table-responsive">
            <table  id="table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Description</th>
                        <th scope="col">Our Mascot</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i = 1)
                    @foreach ( $our as $o )
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $o->title }}</td>
                            <td>{{ $o->description_title }}</td>
                            <td><img src="{{ asset($o->our_mascot) }}" alt="gallery" style="width: 90px; height: 90px;"></td>
                            <td>
                                <a href="{{ route('mascot.edit', $o->id) }}" class="btn btn-primary btn-sm" title="Edit Gallery"><i class="bi bi-pencil-square"></i></a>
                                <a href="{{ route('mascot.delete', $o->id) }}" class="btn btn-danger btn-sm" title="Remove Gallery" id="delete"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div

@endsection
