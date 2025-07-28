@extends('layouts.app') {{-- Ganti ini sesuai layout kamu. Kalau belum ada, hapus saja. --}}

@section('content')
<div class="container py-4">
    <h1 class="mb-4 text-center">🚌 Daftar Bus Tersedia</h1>

    <div class="row">
        @forelse($buses as $bus)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $bus->name }}</h5>
                        <p class="card-text"><strong>Jumlah Kursi:</strong> {{ $bus->seats->count() }}</p>

                        {{-- Nanti bisa tambahkan detail rute, harga, dsb --}}
                        
                        <a href="#" class="btn btn-primary w-100">Lihat Kursi</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p class="text-muted">Tidak ada data bus tersedia.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
