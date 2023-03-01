@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('template/css/modal.css') }}">

@push('style')
@powerGridStyles
@endpush

@section('content')
@include('partials.alerts')
<div class="card shadow">
    <div class="card-body mt-4">
        <div class="table-responsive">
            <table id="example" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Usia</th>
                        <th scope="col">Email</th>
                        <th scope="col">Pendidikan</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Daftar Diklat</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @php($i = 1)
                    @foreach ( $pendaftaran as $p )
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->usia }}</td>
                            <td>{{ $p->email }}</td>
                            <td>{{ $p->pendidikan}}</td>
                            <td>{{ $p->phone }}</td>
                            <td>{{ $p['diklat']['name'] }}</td>
                            <td>{{ Carbon\Carbon::parse($p->created_at)->format('d/m/Y H:i:s') }}</td>
                            <td>
                                <a href="{{ route('pendaftaran.edit', $p->id) }}" class="btn btn-primary btn-sm" title="Edit Gallery"><i class="bi bi-pencil-square"></i></a>
                                <a href="{{ route('pendaftaran.delete', $p->id) }}" class="btn btn-danger btn-sm " title="Remove Gallery" id="delete"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="card shadow">
    <div class="card-body mt-4">
        <div class="table-responsive">
            <table id="table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Ijazah</th>
                        <th scope="col">kartu Keluarga</th>
                        <th scope="col">KTP</th>
                        <th scope="col">Foto 3x3</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i = 1)
                    @foreach ( $pendaftaran as $p )
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td><img class="show" src="{{ asset('img/ijazah/'.$p->ijazah) }}" alt="..."  style="max-width: 100%; height: 100px;"></td>
                            <td><img class="show" src="{{ asset('img/kartu_keluarga/'.$p->kartu_keluarga) }}" alt="..."  style="max-width: 100%; height: 100px;"></td>
                            <td><img class="show" src="{{ asset('img/ktp/'.$p->ktp) }}" alt="..."  style="max-width: 100%; height: 100px;"></td>
                            <td><img class="show" src="{{ asset('img/foto_3x3/'.$p->foto_3x3) }}" alt="..."  style="max-width: 100%; height: 100px;"></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content text-center">
        <div class="modal-header">
            <h2 class="modal-title w-100">{{ $title }}</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <img class="img-modal" alt="..." style="max-width: 100%; height: auto;">
        </div>
      </div>
    </div>
  </div>
@endsection

