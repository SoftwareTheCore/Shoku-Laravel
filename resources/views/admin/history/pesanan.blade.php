@extends('layouts.app', ['title' => 'Histori Pesanan'])

@section('content')
<h3 class="fw-bold mb-4">Histori Pesanan</h3>

<div class="card border-0 shadow-sm">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Menu</th>
                        <th>Tipe</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pesanan as $item)
                        <tr>
                            <td>{{ $loop->iteration + ($pesanan->currentPage() - 1) * $pesanan->perPage() }}</td>
                            <td>{{ $item->id_menu }}</td>
                            <td>{{ ucfirst(str_replace('_', ' ', $item->tipe_order)) }}</td>
                            <td>{{ $item->tgl_order }}</td>
                            <td>{{ ucfirst($item->status_order) }}</td>
                            <td>Rp {{ number_format($item->total_harga, 0, ',', '.') }}</td>
                        </tr>
                    @empty
                        <tr><td colspan="6" class="text-center py-4 text-muted">Belum ada pesanan.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $pesanan->links() }}
    </div>
</div>
@endsection
