@extends('layouts.app')

@push('style')
@powerGridStyles
@endpush

@section('content')
@include('partials.alerts')
<div class="card shadow">
    <div class="card-body mt-4">
        <div class="table-responsive">
            <table id="table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Pesan</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i = 1)
                    @foreach ( $contact as $c )
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $c->nama }}</td>
                            <td>
                                <a href="mailto:{{ $c->email }}">{{ $c->email }}</a>
                            </td>
                            <td>{{ $c->message }}</td>
                            <td> {{ Carbon\Carbon::parse($c->created_at)->diffForHumans() }} </td>
                            <td>
                                <a href="{{ route('contact.delete', $c->id) }}" class="btn btn-danger btn-sm " title="Remove Gallery" id="delete"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
