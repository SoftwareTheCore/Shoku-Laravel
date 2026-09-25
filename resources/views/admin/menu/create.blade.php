@extends('layouts.app', [
    'title' => 'Tambah Menu'
])

@section('content')

<h3 class="fw-bold mb-4">
    Tambah Menu
</h3>

<div class="card border-0 shadow-sm">

    <div class="card-body">

        <form action="{{ route('admin.menu.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="mb-3">

                <label class="form-label">
                    Nama Menu
                </label>

                <input type="text"
                       name="nama_menu"
                       class="form-control"
                       required>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Deskripsi
                </label>

                <textarea name="deskripsi"
                          class="form-control"
                          rows="4"></textarea>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Harga
                </label>

                <input type="number"
                       name="harga"
                       class="form-control"
                       min="0"
                       required>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Foto Menu
                </label>

                <input type="file"
                       name="foto"
                       class="form-control"
                       accept="image/*">

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Status
                </label>

                <select name="status"
                        class="form-select">

                    <option value="tersedia">
                        Tersedia
                    </option>

                    <option value="habis">
                        Habis
                    </option>

                </select>

            </div>

            <button class="btn btn-dark">
                Simpan
            </button>

            <a href="{{ route('admin.menu.index') }}"
               class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>

</div>

@endsection