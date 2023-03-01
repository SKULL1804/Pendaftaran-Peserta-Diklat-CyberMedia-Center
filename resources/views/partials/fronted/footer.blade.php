@php
$alamat = App\Models\Alamat::find(1);
$sosmed = App\Models\Sosmed::find(1);
@endphp
<!-- ======= Footer ======= -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6 footer-contact">
                    <h3>{{ $alamat->title }}</h3>
                    <p>
                        {{{$alamat->description}}}
                    </p>
                    <strong>Phone:</strong>{{$alamat->phone}}
                    <strong>Email:</strong> {{ $alamat->email }}
                </div>
                <div class="col-lg-4 col-md-6 footer-contactt">
                    <div class="copyright">
                        &copy; Copyright <strong><span>CyberMedia Center</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        Designed by <a href="">SMK NURUL ISLAM</a>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="container d-md-flex py-4">
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="{{ $sosmed->youtube }}" class="youtube"><i class="bx bxl-youtube"></i></a>
            <a href="{{ $sosmed->facebook }}" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="{{ $sosmed->instagram }}" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="{{ $sosmed->whatshapp }}" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
            <a href="{{ $sosmed->gmail }}" class="gmail"><i class="bx bxl-gmail"></i></a>
            <a href="{{ $sosmed->tiktok }}" class="tiktok"><i class="bx bxl-tiktok"></i></a>
        </div>
    </div>
<!-- End Footer -->
