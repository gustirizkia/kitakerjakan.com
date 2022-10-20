<div>
    <div class="row justify-content-center">
        @forelse ($items as $item)
        <div class="col-md-3 mb-3">
            <div class="card card__blog shadow">
                <a href="{{ route('detailArtikel', $item->slug) }}">
                    <img src="{{ url($item->image) }}" alt="BLOG KITA KERJAKAN" class="img-fluid" />
                    <div class="p-2 px-3">
                        <div class="title mt-1">
                            {{-- @php
                            dd(strlen($item->judul));
                            @endphp --}}
                            @if (strlen($item->judul) > 60)
                            {{ substr($item->judul, 0, 65). "...." }}
                            @else
                            {{ $item->judul }}
                            @endif
                        </div>
                        <div class="my-1 d-flex justify-content-between">
                            <span class="badge bg-secondary">{{ $item->kategori->nama_kategori }}</span>
                            <div class="date">{{ \Carbon\Carbon::parse($item->created_at)->format('d-M-Y') }}</div>
                        </div>
                        <div class="deskripsi__singkat">
                            {{ substr($item->deskripsi_singkat, 0, 90). "" }}
                            <div class="mt-4 fw-bold text-primary">Baca selengkapnya ></div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        @empty
        <h1 class="text-center">Tidak ada blog</h1>
        @endforelse
        @if (!$isLast)
        <div class="col-md-12 text-center">
            <div class="btn btn-outline-primary" wire:click="addLimit(6)">
                <div class="spinner-border text-warning spinner-border-sm" role="status" wire:loading
                    wire:target="addLimit">
                    <span class="visually-hidden">Loading...</span>
                </div>
                Lebih Banyak
            </div>
        </div>
        @endif
    </div>
</div>
