@extends('layouts.app', [
    'title' => 'Data Karyawan'
])

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h3 class="fw-bold mb-1">
            Data Karyawan
        </h3>

        <p class="text-muted mb-0">
            Kelola data karyawan restaurant.
        </p>
    </div>

    <a href="{{ route('admin.karyawan.create') }}"
       class="btn btn-dark">
        + Tambah Karyawan
    </a>

</div>

<div class="card border-0 shadow-sm">

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-hover align-middle">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>No HP</th>
                        <th>Tanggal Masuk</th>
                        <th>Status</th>
                        <th width="150">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                @forelse($karyawan as $item)

                    <tr>

                        <td>
                            {{ $loop->iteration + ($karyawan->currentPage() - 1) * $karyawan->perPage() }}
                        </td>

                        <td class="fw-semibold">
                            {{ $item->nama }}
                        </td>

                        <td>
                            {{ $item->jabatan }}
                        </td>

                        <td>
                            {{ $item->no_hp ?? '-' }}
                        </td>

                        <td>
                            {{ $item->tgl_masuk ?? '-' }}
                        </td>

                        <td>

                            @if($item->status == 'aktif')

                                <span class="badge bg-success">
                                    Aktif
                                </span>

                            @else

                                <span class="badge bg-secondary">
                                    {{ ucfirst($item->status) }}
                                </span>

                            @endif

                        </td>

                        <td>

                            <a href="{{ route('admin.karyawan.edit', $item->id_karyawan) }}"
                               class="btn btn-sm btn-warning">
                                Edit
                            </a>

                            <form action="{{ route('admin.karyawan.destroy', $item->id_karyawan) }}"
                                  method="POST"
                                  class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-sm btn-danger"
                                        onclick="return confirm('Hapus data ini?')">
                                    Hapus
                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="7"
                            class="text-center text-muted py-4">
                            Belum ada data karyawan.
                        </td>
                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

        {{ $karyawan->links() }}

    </div>

</div>

@endsection