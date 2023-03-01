@extends('fronted.main_master')
<script src="{{ asset('jquery/jquery-3.6.0.min.js') }}"></script>

@section('content')
<section id="pendaftaran" class="pendaftaran">
    <div class="container" data-aos="fade-up">
        <div class="pt-5">
            @include('partials.alerts')
            <div class="item">
                <h3>{{ $title }}</h3>
                <form action="{{ route('pendaftaran.store') }}" method="post" class="row g-3" enctype="multipart/form-data">
                    @csrf
                    <div class="col-6">
                        <x-form-label id="name" label="Nama Panjang" />
                        <x-form-input id="name" name="nama"/>
                    </div>
                    <div class="col-6">
                        <x-form-label id="name" label="Usia" />
                        <x-form-input id="name" name="usia"/>
                    </div>
                    <div class="col-6">
                        <x-form-label id="name" label="Email" />
                        <x-form-input id="name" name="email"/>
                    </div>
                    <div class="col-6">
                        <x-form-label id="name" label="Pendidikan" />
                        <x-form-input id="name" name="pendidikan"/>
                    </div>
                    <div class="col-6">
                        <x-form-label id="name" label="No. Handphone" />
                        <x-form-input id="name" name="phone"/>
                    </div>
                    <div class="col-6">
                        <x-form-label id="name" label="Daftar Diklat" />
                        <select class="form-select" aria-label="Daftar Diklat" name="daftar_diklat_id">
                            <option selected disabled>-- Pilih Diklat --</option>
                            @foreach ($diklat as $d)
                            <option value="{{ $d->id }}">{{ $d->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6">
                        <x-form-label id="name" label="Foto Ijazah" />
                        <x-form-input id="ijazah" name="ijazah" type="file"/>
                    </div>
                    <div class="col-6">
                        <x-form-label id="name" label="Foto Kartu Keluarga" />
                        <x-form-input id="kartu_keluarga" name="kartu_keluarga" type="file"/>
                    </div>
                    <div class="col-6">
                        <x-form-label id="name" label="Foto KTP" />
                        <x-form-input id="ktp" name="ktp" type="file"/>
                    </div>
                    <div class="col-6">
                        <x-form-label id="name" label="Foto 3x3" />
                        <x-form-input id="foto_3x3" name="foto_3x3" type="file"/>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="flex">Submit</button>
                    </div>
                </for
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('js/upload.js') }}"></script>
@endsection
