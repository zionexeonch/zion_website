@extends("Commission.layouts.template")
@section("content")
<div class="container" style="margin-top: 3rem">
    <div class="row justify-content-center row-cols-1 row-cols-md-1 g-4">
        <div class="col">
            <div class="card border-0 mb-3">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="/img/{{ $rincian->picture }}" class="img-fluid rounded-start"
                            alt="{{ $rincian->judul }}">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h2 class="card-title text-capitalize fw-bold pb-2">{{ $rincian->judul_detail }}</h2>
                            <p class="card-text">{{ $rincian->detail }}</p>
                            <p class="card-text fw-bold fs-5">
                                Rincian : {{ $rincian->rincian }}
                            </p>
                            <h5 class="card-text">Klien : {{ $rincian->klien }}</h5>
                            <h5 class="card-text">Projek : {{ $rincian->apk }}</h5>
                            <span class="fs-5 card-text">Link : <a href="{{ $rincian->link }}"
                                    class="nav-link fw-bold link-detail ">{{ $rincian->link }}</a></span>
                            <a href="/commission/#example" class="btn btn-kembali text-decoration-none mt-3">
                                <- Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#000" fill-opacity="1"
        d="M0,160L48,138.7C96,117,192,75,288,96C384,117,480,203,576,197.3C672,192,768,96,864,85.3C960,75,1056,149,1152,160C1248,171,1344,117,1392,90.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
</svg>
@endsection()