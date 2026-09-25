@extends('layouts.app', ['title' => 'Histori Reservasi'])

@section('content')
<h3 class="fw-bold mb-4">Histori Reservasi</h3>

<div class="card border-0 shadow-sm">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Pelanggan</th>
                        <th>ID Meja</th>
                        <th>Tanggal Booking</th>
                        <th>Jumlah Orang</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($reservasi as $item)
                        <tr>
                            <td>{{ $loop->iteration + ($reservasi->currentPage() - 1) * $reservasi->perPage() }}</td>
                            <td>{{ $item->id_pelanggan }}</td>
                            <td>{{ $item->id_meja }}</td>
                            <td>{{ $item->tgl_booking }}</td>
                            <td>{{ $item->jumlah_orang }}</td>
                            <td>{{ ucfirst($item->status) }}</td>
                        </tr>
                    @empty
                        <tr><td colspan="6" class="text-center py-4 text-muted">Belum ada reservasi.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $reservasi->links() }}
    </div>
</div>
@endsection
