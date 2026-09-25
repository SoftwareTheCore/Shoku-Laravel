@extends('layouts.app', [
    'title' => 'Tambah Karyawan'
])

@section('content')

<div class="mb-4">

    <h3 class="fw-bold">
        Tambah Karyawan
    </h3>

</div>

<div class="card border-0 shadow-sm">

    <div class="card-body">

        <form action="{{ route('admin.karyawan.store') }}"
              method="POST">

            @csrf

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        Nama
                    </label>

                    <input type="text"
                           name="nama"
                           class="form-control"
                           required>

                </div>

                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        Jabatan
                    </label>

                    <select name="jabatan"
                            class="form-select"
                            required>

                        <option value="">Pilih Jabatan</option>
                        <option value="manager">Manager</option>
                        <option value="kasir">Kasir</option>
                        <option value="waiter">Waiter</option>
                        <option value="chef">Chef</option>
                        <option value="admin">Admin</option>

                    </select>

                </div>

                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        No HP
                    </label>

                    <input type="text"
                           name="no_hp"
                           class="form-control">

                </div>

                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        Tanggal Masuk
                    </label>

                    <input type="date"
                           name="tgl_masuk"
                           class="form-control">

                </div>

                <div class="col-12 mb-3">

                    <label class="form-label">
                        Alamat
                    </label>

                    <textarea name="alamat"
                              class="form-control"
                              rows="3"></textarea>

                </div>

                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        Status
                    </label>

                    <select name="status"
                            class="form-select"
                            required>

                        <option value="aktif">
                            Aktif
                        </option>

                        <option value="nonaktif">
                            Nonaktif
                        </option>

                    </select>

                </div>

            </div>

            <div class="mt-3">

                <button class="btn btn-dark">
                    Simpan
                </button>

                <a href="{{ route('admin.karyawan.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>

            </div>

        </form>

    </div>

</div>

@endsection