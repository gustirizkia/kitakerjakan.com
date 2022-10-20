@extends('pages.layout')

@push('add-style')
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
@endpush

@section('title')
{{ $item->nama_layanan }}
@endsection

@section('meta')
<meta property="og:site_name" content="Kita Kerjakan">
<meta property="og:title" content="Kita Kerjakan" />
<meta property="og:description"
    content="KITAKERJAKAN.COM adalah perusahaan yang bergerak dibidang jasa Perpajakan, Keuangan & Legalitas badan usaha. Sejak 2021, KITAKERJAKAN.COM telah membantu lebih dari 500 perusahaan untuk mengurusi perpajakan, keuangan atau pendirian badan usahanya di Indonesia." />
<meta property="og:image" itemprop="image" content="{{ url($item->thumbnail) }}">
<meta property="og:type" content="website" />
<meta property="og:image:width" content="300">
<meta property="og:image:height" content="300">
<meta property="og:url" content="https://kitakerjakan.com">
@endsection

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <img src="{{ url($item->image_banner) }}" alt="Kita kerjakan" class="img-fluid rounded w-100">
            <h4 class="mt-4">{{ $item->nama_layanan }}</h4>
            <div class="my-4">
                {!! $item->deskripsi !!}
            </div>
        </div>
    </div>
</div>

@include('includes.kontak')
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
