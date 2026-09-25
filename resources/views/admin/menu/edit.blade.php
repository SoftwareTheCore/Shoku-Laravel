@extends('layouts.app', [
    'title' => 'Edit Menu'
])

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h3 class="fw-bold mb-1">
            Edit Menu
        </h3>

        <p class="text-muted mb-0">
            Perbarui informasi menu restaurant.
        </p>
    </div>

    <a href="{{ route('admin.menu.index') }}"
       class="btn btn-secondary">
        Kembali
    </a>

</div>


<div class="card border-0 shadow-sm">

    <div class="card-body p-4">

        <form action="{{ route('admin.menu.update', $menu->id_menu) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="row">

                {{-- Nama Menu --}}
                <div class="col-md-6 mb-3">

                    <label for="nama_menu" class="form-label">
                        Nama Menu
                    </label>

                    <input type="text"
                           id="nama_menu"
                           name="nama_menu"
                           class="form-control @error('nama_menu') is-invalid @enderror"
                           value="{{ old('nama_menu', $menu->nama_menu) }}"
                           placeholder="Masukkan nama menu"
                           required>

                    @error('nama_menu')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- Harga --}}
                <div class="col-md-6 mb-3">

                    <label for="harga" class="form-label">
                        Harga
                    </label>

                    <input type="number"
                           id="harga"
                           name="harga"
                           class="form-control @error('harga') is-invalid @enderror"
                           value="{{ old('harga', $menu->harga) }}"
                           placeholder="Masukkan harga"
                           min="0"
                           required>

                    @error('harga')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- Deskripsi --}}
                <div class="col-12 mb-3">

                    <label for="deskripsi" class="form-label">
                        Deskripsi
                    </label>

                    <textarea id="deskripsi"
                              name="deskripsi"
                              class="form-control @error('deskripsi') is-invalid @enderror"
                              rows="4"
                              placeholder="Masukkan deskripsi menu">{{ old('deskripsi', $menu->deskripsi) }}</textarea>

                    @error('deskripsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- Foto Lama --}}
                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        Foto Saat Ini
                    </label>

                    <div>

                        @if($menu->foto)

                            <img src="{{ asset('storage/' . $menu->foto) }}"
                                 alt="{{ $menu->nama_menu }}"
                                 class="rounded border"
                                 width="180"
                                 height="180"
                                 style="object-fit: cover;">

                        @else

                            <div class="border rounded d-flex align-items-center justify-content-center text-muted"
                                 style="width:180px; height:180px;">
                                Belum ada foto
                            </div>

                        @endif

                    </div>

                </div>


                {{-- Upload Foto Baru --}}
                <div class="col-md-6 mb-3">

                    <label for="foto" class="form-label">
                        Ganti Foto
                    </label>

                    <input type="file"
                           id="foto"
                           name="foto"
                           class="form-control @error('foto') is-invalid @enderror"
                           accept="image/jpeg,image/png,image/jpg,image/webp">

                    <div class="form-text">
                        Kosongkan jika tidak ingin mengganti foto.
                    </div>

                    @error('foto')
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

                        <option value="tersedia"
                            {{ old('status', $menu->status) == 'tersedia' ? 'selected' : '' }}>
                            Tersedia
                        </option>

                        <option value="habis"
                            {{ old('status', $menu->status) == 'habis' ? 'selected' : '' }}>
                            Habis
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
                    Update Menu
                </button>

                <a href="{{ route('admin.menu.index') }}"
                   class="btn btn-secondary px-4">
                    Batal
                </a>

            </div>

        </form>

    </div>

</div>

@endsection