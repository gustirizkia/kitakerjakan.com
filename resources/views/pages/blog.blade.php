@extends('pages.layout')

@push('add-style')
<link rel="stylesheet" href="{{ asset('assets/bootstrap-5/blog.css') }}">
@livewireStyles
@endpush

@section('meta')
<meta property="og:site_name" content="Kita Kerjakan">
<meta property="og:title" content="Artikel kitakerjakan.com" />
<meta property="og:description"
    content="KITAKERJAKAN.COM adalah perusahaan yang bergerak dibidang jasa Perpajakan, Keuangan & Legalitas badan usaha. Sejak 2021, KITAKERJAKAN.COM telah membantu lebih dari 500 perusahaan untuk mengurusi perpajakan, keuangan atau pendirian badan usahanya di Indonesia." />
<meta property="og:image" itemprop="image" content="{{ asset('assets/images/logo.jpg') }}">
<meta property="og:type" content="website" />
<meta property="og:image:width" content="300">
<meta property="og:image:height" content="300">
<meta property="og:url" content="https://kitakerjakan.com">
@endsection

@section('title')
Blog
@endsection

@section('content')
<div class="main__blog mt-3">
    <div class="container">
        <img src="https://i0.wp.com/teropongbanten.id/wp-content/uploads/2019/11/Banner-Bapenda-Pajak-Kendaraan-2-02.jpg?resize=735%2C217&ssl=1"
            alt="" class="img-fluid w-100 rounded mt-2 mb-5">
        @livewire('artikel-livewire')
    </div>
</div>
@endsection

@push('add-script')
@livewireScripts
@endpush
