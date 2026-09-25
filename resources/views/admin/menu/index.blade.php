@extends('layouts.app', [
    'title' => 'Data Menu'
])

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h3 class="fw-bold mb-1">
            Data Menu
        </h3>

        <p class="text-muted mb-0">
            Kelola daftar menu restaurant.
        </p>
    </div>

    <a href="{{ route('admin.menu.create') }}"
       class="btn btn-dark">
        + Tambah Menu
    </a>

</div>

<div class="card border-0 shadow-sm">

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-hover align-middle">

                <thead>

                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama Menu</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th width="160">Aksi</th>
                </tr>

                </thead>

                <tbody>

                @forelse($menu as $item)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td>

                            @if($item->foto)

                                <img src="{{ asset('storage/' . $item->foto) }}"
                                     width="70"
                                     height="70"
                                     class="rounded"
                                     style="object-fit: cover;">

                            @else

                                <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                     style="width:70px;height:70px;">
                                    No Image
                                </div>

                            @endif

                        </td>

                        <td>

                            <strong>
                                {{ $item->nama_menu }}
                            </strong>

                            <div class="text-muted small">
                                {{ Str::limit($item->deskripsi, 50) }}
                            </div>

                        </td>

                        <td>
                            Rp {{ number_format($item->harga, 0, ',', '.') }}
                        </td>

                        <td>

                            @if($item->status == 'tersedia')

                                <span class="badge bg-success">
                                    Tersedia
                                </span>

                            @else

                                <span class="badge bg-secondary">
                                    {{ ucfirst($item->status) }}
                                </span>

                            @endif

                        </td>

                        <td>

                            <a href="{{ route('admin.menu.edit', $item->id_menu) }}"
                               class="btn btn-sm btn-warning">
                                Edit
                            </a>

                            <form action="{{ route('admin.menu.destroy', $item->id_menu) }}"
                                  method="POST"
                                  class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-sm btn-danger"
                                        onclick="return confirm('Hapus menu ini?')">
                                    Hapus
                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="6"
                            class="text-center py-4 text-muted">
                            Belum ada menu.
                        </td>
                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

        {{ $menu->links() }}

    </div>

</div>

@endsection