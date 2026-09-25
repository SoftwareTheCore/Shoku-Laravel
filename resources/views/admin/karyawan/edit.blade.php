@extends('layouts.app', [
    'title' => 'Edit Karyawan'
])

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h3 class="fw-bold mb-1">
            Edit Karyawan
        </h3>

        <p class="text-muted mb-0">
            Perbarui informasi data karyawan.
        </p>
    </div>

    <a href="{{ route('admin.karyawan.index') }}"
       class="btn btn-secondary">
        Kembali
    </a>

</div>


<div class="card border-0 shadow-sm">

    <div class="card-body p-4">

        <form action="{{ route('admin.karyawan.update', $karyawan->id_karyawan) }}"
              method="POST">

            @csrf
            @method('PUT')

            <div class="row">

                {{-- Nama --}}
                <div class="col-md-6 mb-3">

                    <label for="nama" class="form-label">
                        Nama Karyawan
                    </label>

                    <input type="text"
                           id="nama"
                           name="nama"
                           class="form-control @error('nama') is-invalid @enderror"
                           value="{{ old('nama', $karyawan->nama) }}"
                           placeholder="Masukkan nama karyawan"
                           required>

                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- Jabatan --}}
                <div class="col-md-6 mb-3">

                    <label for="jabatan" class="form-label">
                        Jabatan
                    </label>

                    <select id="jabatan"
                            name="jabatan"
                            class="form-select @error('jabatan') is-invalid @enderror"
                            required>

                        <option value="">
                            Pilih Jabatan
                        </option>

                        <option value="manager"
                            {{ old('jabatan', $karyawan->jabatan) == 'manager' ? 'selected' : '' }}>
                            Manager
                        </option>

                        <option value="kasir"
                            {{ old('jabatan', $karyawan->jabatan) == 'kasir' ? 'selected' : '' }}>
                            Kasir
                        </option>

                        <option value="waiter"
                            {{ old('jabatan', $karyawan->jabatan) == 'waiter' ? 'selected' : '' }}>
                            Waiter
                        </option>

                        <option value="chef"
                            {{ old('jabatan', $karyawan->jabatan) == 'chef' ? 'selected' : '' }}>
                            Chef
                        </option>

                        <option value="admin"
                            {{ old('jabatan', $karyawan->jabatan) == 'admin' ? 'selected' : '' }}>
                            Admin
                        </option>

                    </select>

                    @error('jabatan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- No HP --}}
                <div class="col-md-6 mb-3">

                    <label for="no_hp" class="form-label">
                        No. HP
                    </label>

                    <input type="text"
                           id="no_hp"
                           name="no_hp"
                           class="form-control @error('no_hp') is-invalid @enderror"
                           value="{{ old('no_hp', $karyawan->no_hp) }}"
                           placeholder="Contoh: 081234567890">

                    @error('no_hp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- Tanggal Masuk --}}
                <div class="col-md-6 mb-3">

                    <label for="tgl_masuk" class="form-label">
                        Tanggal Masuk
                    </label>

                    <input type="date"
                           id="tgl_masuk"
                           name="tgl_masuk"
                           class="form-control @error('tgl_masuk') is-invalid @enderror"
                           value="{{ old('tgl_masuk', $karyawan->tgl_masuk) }}">

                    @error('tgl_masuk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- Alamat --}}
                <div class="col-12 mb-3">

                    <label for="alamat" class="form-label">
                        Alamat
                    </label>

                    <textarea id="alamat"
                              name="alamat"
                              class="form-control @error('alamat') is-invalid @enderror"
                              rows="4"
                              placeholder="Masukkan alamat karyawan">{{ old('alamat', $karyawan->alamat) }}</textarea>

                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- Status --}}
                <div class="col-md-6 mb-3">

                    <label for="status" class="form-label">
                        Status
                    </label>

                    <select id="status"
                            name="status"
                            class="form-select @error('status') is-invalid @enderror"
                            required>

                        <option value="aktif"
                            {{ old('status', $karyawan->status) == 'aktif' ? 'selected' : '' }}>
                            Aktif
                        </option>

                        <option value="nonaktif"
                            {{ old('status', $karyawan->status) == 'nonaktif' ? 'selected' : '' }}>
                            Nonaktif
                        </option>

                    </select>

                    @error('status')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

            </div>


            {{-- Tombol --}}
            <div class="mt-4">

                <button type="submit"
                        class="btn btn-dark px-4">
                    Update Karyawan
                </button>

                <a href="{{ route('admin.karyawan.index') }}"
                   class="btn btn-secondary px-4">
                    Batal
                </a>

            </div>

        </form>

    </div>

</div>

@endsection