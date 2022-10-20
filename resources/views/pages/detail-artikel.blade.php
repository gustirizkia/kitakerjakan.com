@extends('pages.layout')

@push('add-style')
<link rel="stylesheet" href="{{ asset('assets/bootstrap-5/blog.css') }}">
@endpush

@section('title')
{{ $item->judul }}
@endsection

@section('meta')
<meta property="og:site_name" content="Kita Kerjakan">
<meta property="og:title" content="{{ $item->judul }}" />
<meta property="og:description" content="{{ $item->deskripsi_singkat }}" />
<meta property="og:image" itemprop="image" content="{{ asset('assets/images/logo.jpg') }}">
<meta property="og:type" content="website" />
<meta property="og:image:width" content="300">
<meta property="og:image:height" content="300">
<meta property="og:url" content="https://kitakerjakan.com/blog/{{ $item->slug }}">
@endsection

@section('content')
<div class="main__blog mt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <img src="{{ url($item->image) }}" alt="BLOG KITA KERJAKAN" class="img-fluid w-100" />
                <div class="title__detail my-3">
                    {{ $item->judul }}
                </div>
                <div class="date">{{ \Carbon\Carbon::parse($item->created_at)->format('d-M-Y') }}</div>
                <div class="my-4"></div>
                <div class="deskripsi">
                    {!! $item->body !!}
                </div>
            </div>
            <div class="col-md-4 rekomendasi">
                <h4>Rekomendasi Artikel</h4>
                @foreach ($artikel_terbaru as $item)
                <a href="{{ route('detailArtikel', $item->slug) }}">
                    <div class="row mb-3">
                        <div class="col-3">
                            <img src="{{ url($item->image) }}" class="img-fluid" alt="detail-blog" />
                        </div>
                        <div class="col-9">
                            @if (strlen($item->judul) > 50)
                            <div class="title">{{ substr($item->judul, 0, 50). "...." }}</div>
                            @else
                            <div class="title">{{ $item->judul }}</div>
                            @endif

                            <div class="date">{{ \Carbon\Carbon::parse($item->created_at)->format('d, M-Y') }}</div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>

    @include('includes.kontak')

</div>
@endsection

@push('add-script')
@endpush
