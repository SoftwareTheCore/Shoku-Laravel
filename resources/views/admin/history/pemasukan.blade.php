@extends('layouts.app', ['title' => 'Pemasukan'])

@section('content')
<h3 class="fw-bold mb-4">Pemasukan</h3>

<div class="card border-0 shadow-sm">
    <div class="card-body">
        <form method="GET" action="{{ route('admin.pemasukan') }}" class="row g-3 align-items-end">
            <div class="col-md-4">
                <label for="periode" class="form-label">Periode</label>
                <select id="periode" name="periode" class="form-select">
                    <option value="harian" @selected($periode === 'harian')>Harian</option>
                    <option value="mingguan" @selected($periode === 'mingguan')>Mingguan</option>
                    <option value="bulanan" @selected($periode === 'bulanan')>Bulanan</option>
                </select>
            </div>
            <div class="col-md-4">
                <button class="btn btn-dark" type="submit">Tampilkan</button>
            </div>
        </form>

        <div class="mt-4">
            <p class="text-muted mb-1">Total pemasukan periode {{ $periode }}</p>
            <h2 class="fw-bold">Rp {{ number_format($pemasukan, 0, ',', '.') }}</h2>
        </div>
    </div>
</div>
@endsection
