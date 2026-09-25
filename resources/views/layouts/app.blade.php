<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Admin Restaurant' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f6f8;
        }

        .sidebar {
            width: 250px;
            min-height: 100vh;
            background: #212529;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
        }

        .sidebar .brand {
            padding: 22px;
            font-size: 21px;
            font-weight: bold;
            color: white;
            border-bottom: 1px solid rgba(255,255,255,.1);
        }

        .sidebar a {
            display: block;
            color: #adb5bd;
            text-decoration: none;
            padding: 12px 22px;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: #343a40;
            color: white;
        }

        .content {
            margin-left: 250px;
            min-height: 100vh;
        }

        .topbar {
            background: white;
            padding: 15px 25px;
            border-bottom: 1px solid #dee2e6;
        }

        .page-content {
            padding: 25px;
        }

        .stat-card {
            border: none;
            border-radius: 12px;
        }
    </style>
</head>

<body>

<div class="sidebar">

    <div class="brand">
        Restaurant Admin
    </div>

    <div class="mt-3">

        <a href="{{ route('admin.dashboard') }}"
           class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            Dashboard
        </a>

        <a href="{{ route('admin.karyawan.index') }}"
           class="{{ request()->routeIs('admin.karyawan.*') ? 'active' : '' }}">
            Karyawan
        </a>

        <a href="{{ route('admin.menu.index') }}"
           class="{{ request()->routeIs('admin.menu.*') ? 'active' : '' }}">
            Menu
        </a>

        <hr class="text-secondary">

        <a href="{{ route('admin.pesanan') }}">
            Histori Pesanan
        </a>

        <a href="{{ route('admin.reservasi') }}">
            Histori Reservasi
        </a>

        <a href="{{ route('admin.pemasukan') }}">
            Histori Pemasukan
        </a>

        <hr class="text-secondary">

        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf

            <button class="btn btn-link text-danger text-decoration-none px-4">
                Logout
            </button>
        </form>

    </div>
</div>

<div class="content">

    <div class="topbar d-flex justify-content-between align-items-center">

        <div>
            <strong>{{ $title ?? 'Dashboard' }}</strong>
        </div>

        <div>
            Admin
        </div>

    </div>

    <div class="page-content">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @yield('content')

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@stack('scripts')

</body>
</html>
