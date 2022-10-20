@extends('pages.layout')

@push('add-style')
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
@endpush

@section('title')
Home
@endsection

@section('meta')
<meta property="og:site_name" content="Kita Kerjakan">
<meta property="og:title" content="Kita Kerjakan" />
<meta property="og:description"
    content="KITAKERJAKAN.COM adalah perusahaan yang bergerak dibidang jasa Perpajakan, Keuangan & Legalitas badan usaha. Sejak 2021, KITAKERJAKAN.COM telah membantu lebih dari 500 perusahaan untuk mengurusi perpajakan, keuangan atau pendirian badan usahanya di Indonesia." />
<meta property="og:image" itemprop="image" content="{{ asset('assets/images/logo.jpg') }}">
<meta property="og:type" content="website" />
<meta property="og:image:width" content="300">
<meta property="og:image:height" content="300">
<meta property="og:url" content="https://kitakerjakan.com">
@endsection

@section('content')
<!-- hero -->
<div class="hero bg__primary py-5 text-white position-relative" style="z-index: 100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 d-block d-md-none mb-3">
                <img src="assets/images/hero1.png" alt="kita kerjakan" class="img-fluid" />
            </div>
            <div class="col-md-6">
                <h1>
                    Perfect <span class="gradient-underline">Place For </span> Your
                    <span class="gradient-underline">Business</span> Promotion
                </h1>
                <p class="mt-3">
                    keperluan perpajakan, keuangan dan pendirian badan usaha Anda
                    dapat terselesaikan dengan baik sehingga Anda dapat fokus dalam
                    mengembangkan bisnis menuju masa depan yang cerah.
                </p>

                <a href="#layanan" class="btn btn-lg bg-warning fw-bold mt-3">Layanan Kami</a>
            </div>
            <div class="col-md-6 d-none d-md-block">
                <img src="assets/images/hero1.png" alt="kita kerjakan" class="img-fluid" />
            </div>
        </div>
    </div>
</div>
<!-- endhero -->

<div class="main position-relative">
    <div class="position-absolute w-100 shape">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0b1a59" fill-opacity="1"
                d="M0,256L80,261.3C160,267,320,277,480,256C640,235,800,181,960,181.3C1120,181,1280,235,1360,261.3L1440,288L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
            </path>
        </svg>
    </div>

    <div class="layanan" id="layanan">
        <div class="container">
            <div class="h3 mb-3 text-center">Layanan Kami</div>
            <div class="row justify-content-center">
                @foreach ($layanan as $item)
                <div class="col-md-2 text-center col-6 mb-2">
                    <a href="{{ route('layanan', $item->id) }}">
                        <img src="{{ url($item->thumbnail) }}" alt="" class="img-fluid" />
                        <h6>{{ $item->nama_layanan }}</h6>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="about mb-5 mt-5 position-relative" id="tentang">
        <div class="container position-relative" style="z-index: 100">
            <div class="row align-items-center">
                <div class="col-md-6 mb-3">
                    <img src="assets/images/Group 11.jpg" alt="Kita kerjakan" class="img-fluid" />
                </div>
                <div class="col-md-6 position-relative">
                    <h1 class="hr">TENTANG PERUSAHAAN</h1>
                    <p class="text-secondary">
                        KITAKERJAKAN.COM adalah perusahaan yang bergerak dibidang jasa
                        Perpajakan, Keuangan & Legalitas badan usaha. Sejak 2021,
                        KITAKERJAKAN.COM telah membantu lebih dari 500 perusahaan untuk
                        mengurusi perpajakan, keuangan atau pendirian badan usahanya di
                        Indonesia. KITAKERJAKAN.COM bertekat untuk menjadi gerbang
                        terdepan untuk siapapun yang ingin memulai dan memperbaiki
                        bisnis di Indonesia.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="cara-kerja position-relative text-center mb-4" style="z-index: 100">
        <h3 class="mb-3">HOW WE WORK</h3>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-2 col-6 mb-4">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <img src="assets/images/icon/consultation.png" alt="Kita Kerjakan" class="img-fluid" />
                            <span class="h5">Konsultasi</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-6 mb-4">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <img src="assets/images/icon/confirmation.png" alt="Kita Kerjakan" class="img-fluid" />
                            <span class="h5">Konfirmasi Layanan</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-6 mb-4">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <img src="assets/images/icon/cashless-payment.png" alt="Kita Kerjakan" class="img-fluid" />
                            <span class="h5">Pembayaran</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="client-kami">
        <div class="py-3">
            <div class="h3 text-center">OUR CLIENTS</div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide slide_1">
                        <div class="card">
                            <div class="card-body">PT SINTESA BERKAH ABADI</div>
                        </div>
                    </div>
                    <div class="swiper-slide slide_2">
                        <div class="card">
                            <div class="card-body">PT BINTANG BERSAMA LANGIT</div>
                        </div>
                    </div>
                    <div class="swiper-slide slide_3">
                        <div class="card">
                            <div class="card-body">PT GUDANG PANGAN INDONESIA</div>
                        </div>
                    </div>
                    <div class="swiper-slide slide_4">
                        <div class="card">
                            <div class="card-body">CV LENTERA HARMONI KREASI</div>
                        </div>
                    </div>
                    <div class="swiper-slide slide_5">
                        <div class="card">
                            <div class="card-body">PT BINTANG CIPTA SINERGI</div>
                        </div>
                    </div>
                    <div class="swiper-slide slide_5">
                        <div class="card">
                            <div class="card-body">PERKUMPULAN KATA RAKYAT INDONESIA</div>
                        </div>
                    </div>
                    <div class="swiper-slide slide_5">
                        <div class="card">
                            <div class="card-body">PERKUMPULAN MELENIAL BERTANI</div>
                        </div>
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <div class="pilih-kami mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 ">
                    <img src="{{ asset('assets/images/about1.png') }}" alt="Kita Kerjakan" class="img-fluid" />
                </div>
                <div class="col-md-6">
                    <h1 class="my-3">KENAPA HARUS KITAKERJAKAN.COM</h1>
                    KITAKERJAKAN.COM memiliki visi untuk memberikan kemudahan,
                    kenyamanan, serta keamanan bagi masyarakat dalam mengurus masalah
                    perpajakan, keuangandan pendiriana badan usaha. Dalam tiap waktu,
                    kami selalu sigap dan responsif. Kami berkomitmen untuk memastikan
                    bahwa tiap output layanan yang akan Anda terima telah melalui
                    validasi yang ketat oleh tim penyusun dan supervisor mitra kerja
                    KITAKERJAKAN.COM Kami akan memberikan dukungan untuk Anda dengan
                    pelayanan yang cepat, aman dan terjangkau berlaku sehingga Anda
                    selalu dapat merasa aman dalam mempercayakan persoalan perpajakan,
                    keuang dan pendirian badan usaha Anda kepada kami. Kami meyakini
                    bersama KITAKERJAKAN.COM, keperluan perpajakan, keuangan dan
                    pendirian badan usaha Anda dapat terselesaikan dengan baik
                    sehingga Anda dapat fokus dalam mengembangkan bisnis menuju masa
                    depan yang cerah.
                </div>
            </div>
        </div>
    </div>

    @include('includes.kontak')

</div>
@endsection

@push('add-script')
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script>
    let swiper = new Swiper(".mySwiper", {
            loop: true,

            autoplay: {
              delay: 3000,
            },

            slidesPerView: 8,
            spaceBetween: 30,

            breakpoints: {
              // when window width is >= 320px
              320: {
                slidesPerView: 3,
                spaceBetween: 20,
              },
              // when window width is >= 480px
              480: {
                slidesPerView: 4,
                spaceBetween: 30,
              },
              // when window width is >= 640px
              640: {
                slidesPerView: 5,
                spaceBetween: 40,
              },
            },
            // If we need pagination
            // pagination: {
            //   el: ".swiper-pagination",
            // },
          });
</script>
@endpush
