@extends('layouts.app', [
    'title' => 'Dashboard Admin'
])

@section('content')

<div class="mb-4">

    <h3 class="fw-bold">
        Dashboard Admin
    </h3>

    <p class="text-muted">
        Ringkasan aktivitas restaurant.
    </p>

</div>

<div class="row g-4">

    <div class="col-md-3">

        <div class="card stat-card shadow-sm">

            <div class="card-body">

                <small class="text-muted">
                    Total Karyawan
                </small>

                <h2 class="fw-bold mt-2">
                    {{ $totalKaryawan }}
                </h2>

            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card stat-card shadow-sm">

            <div class="card-body">

                <small class="text-muted">
                    Total Menu
                </small>

                <h2 class="fw-bold mt-2">
                    {{ $totalMenu }}
                </h2>

            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card stat-card shadow-sm">

            <div class="card-body">

                <small class="text-muted">
                    Total Order
                </small>

                <h2 class="fw-bold mt-2">
                    {{ $totalOrder }}
                </h2>

            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card stat-card shadow-sm">

            <div class="card-body">

                <small class="text-muted">
                    Total Reservasi
                </small>

                <h2 class="fw-bold mt-2">
                    {{ $totalReservasi }}
                </h2>

            </div>

        </div>

    </div>

</div>

<div class="row mt-4">

    <div class="col-md-6">

        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <p class="text-muted mb-2">
                    Pemasukan Hari Ini
                </p>

                <h2 class="fw-bold">
                    Rp {{ number_format($pemasukanHariIni, 0, ',', '.') }}
                </h2>

            </div>

        </div>

    </div>

</div>

@endsection