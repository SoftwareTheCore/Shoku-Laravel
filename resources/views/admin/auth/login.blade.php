<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Admin Shoku</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;500;600&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">

    <style>
        :root {
            --surface: #fff8f5;
            --surface-low: #faf2ee;
            --surface-high: #eee7e3;
            --surface-lowest: #ffffff;
            --ink: #1e1b19;
            --muted: #5a4138;
            --outline: #8e7166;
            --outline-soft: #e2bfb2;
            --primary: #a33900;
            --primary-dark: #7f2b00;
        }

        * {
            box-sizing: border-box;
        }

        html,
        body {
            min-height: 100%;
            margin: 0;
        }

        body {
            display: grid;
            place-items: center;
            min-height: 100vh;
            padding: 32px 24px;
            color: var(--ink);
            background: var(--surface);
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .login-card {
            width: min(100%, 440px);
            padding: 40px;
            background: var(--surface-lowest);
            border: 1px solid #f4ece8;
            border-radius: 12px;
            box-shadow: 0 18px 42px rgba(115, 55, 27, .08);
        }

        .brand {
            margin-bottom: 28px;
            text-align: center;
        }

        .brand img {
            display: block;
            width: auto;
            height: 80px;
            max-width: 280px;
            margin: 0 auto 16px;
            object-fit: contain;
        }

        h1 {
            margin: 0;
            font-family: 'Noto Serif', serif;
            font-size: 24px;
            font-weight: 600;
            line-height: 32px;
        }

        h1 span {
            color: var(--primary);
            font-weight: 400;
        }

        .subtitle {
            max-width: 290px;
            margin: 6px auto 0;
            color: var(--muted);
            font-size: 13px;
            line-height: 20px;
        }

        .alert {
            margin: 0 0 20px;
            padding: 12px 14px;
            color: #93000a;
            background: #ffdad6;
            border-radius: 8px;
            font-size: 13px;
            line-height: 20px;
        }

        .field {
            margin-bottom: 20px;
        }

        .field-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            margin-bottom: 6px;
        }

        label,
        .forgot-link {
            color: var(--ink);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .06em;
            line-height: 16px;
            text-transform: uppercase;
        }

        .forgot-link {
            color: var(--primary);
            font-size: 10px;
            text-decoration: none;
            white-space: nowrap;
        }

        .input-wrap {
            position: relative;
        }

        .material-symbols-outlined {
            position: absolute;
            top: 50%;
            left: 14px;
            color: var(--muted);
            font-size: 20px;
            transform: translateY(-50%);
            pointer-events: none;
        }

        input {
            width: 100%;
            min-height: 48px;
            padding: 0 44px;
            color: var(--ink);
            background: var(--surface-low);
            border: 1px solid transparent;
            border-radius: 8px;
            outline: none;
            font: inherit;
            font-size: 13px;
            transition: background .15s, border-color .15s, box-shadow .15s;
        }

        input::placeholder {
            color: var(--outline);
        }

        input:focus {
            background: var(--surface-lowest);
            border-color: var(--primary);
            box-shadow: 0 0 0 2px rgba(163, 57, 0, .16);
        }

        .password-toggle {
            position: absolute;
            top: 50%;
            right: 10px;
            display: grid;
            width: 32px;
            height: 32px;
            padding: 0;
            place-items: center;
            color: var(--muted);
            background: transparent;
            border: 0;
            border-radius: 50%;
            cursor: pointer;
            transform: translateY(-50%);
        }

        .password-toggle:hover,
        .password-toggle:focus-visible {
            color: var(--primary);
            background: #f4ece8;
        }

        .password-toggle .material-symbols-outlined {
            position: static;
            transform: none;
            pointer-events: auto;
        }

        .remember-row {
            display: flex;
            align-items: center;
            gap: 8px;
            margin: -4px 0 22px;
            color: var(--muted);
            font-size: 11px;
        }

        .remember-row input {
            width: 14px;
            min-height: 14px;
            padding: 0;
            accent-color: var(--primary);
        }

        .remember-row label {
            color: var(--muted);
            font-size: 11px;
            font-weight: 400;
            letter-spacing: 0;
            text-transform: none;
        }

        .submit-button {
            display: flex;
            width: 100%;
            min-height: 48px;
            align-items: center;
            justify-content: center;
            gap: 8px;
            color: #fff;
            background: var(--primary);
            border: 0;
            border-radius: 8px;
            cursor: pointer;
            font: inherit;
            font-size: 13px;
            font-weight: 700;
            transition: background .15s, transform .15s;
        }

        .submit-button:hover,
        .submit-button:focus-visible {
            background: var(--primary-dark);
            transform: translateY(-1px);
        }

        .submit-button .material-symbols-outlined {
            position: static;
            color: inherit;
            font-size: 18px;
            transform: none;
        }

        .footer {
            margin: 26px -8px -8px;
            padding-top: 18px;
            color: var(--outline);
            border-top: 1px solid var(--outline-soft);
            font-size: 10px;
            line-height: 16px;
            text-align: center;
        }

        .footer strong {
            color: var(--muted);
            font-weight: 700;
        }

        @media (max-width: 520px) {
            body {
                padding: 20px 16px;
            }

            .login-card {
                padding: 32px 24px;
            }
        }
    </style>
</head>

<body>
    <main class="login-card">
        <header class="brand">
            <img src="{{ asset('images/logo-shoku.webp') }}" alt="Logo Shoku Japanese Dining">
            <h1>Portal Admin Shoku <span>食</span></h1>
            <p class="subtitle">Sistem Manajemen Operasional &amp; Izakaya Shoku Dining</p>
        </header>

        @if(session('error'))
            <div class="alert" role="alert">{{ session('error') }}</div>
        @endif

        <form action="{{ route('admin.login.process') }}" method="POST">
            @csrf

            <div class="field">
                <div class="field-header">
                    <label for="username">ID Karyawan / Email Admin</label>
                </div>
                <div class="input-wrap">
                    <span class="material-symbols-outlined" aria-hidden="true">badge</span>
                    <input id="username" type="text" name="username" value="{{ old('username') }}"
                            placeholder="cth: ADM-1029 atau admin@shokudining.com"
                            autocomplete="username" required>
                </div>
            </div>

            <div class="field">
                <div class="field-header">
                    <label for="password">Kata Sandi</label>
                </div>
                <div class="input-wrap">
                    <span class="material-symbols-outlined" aria-hidden="true">lock</span>
                    <input id="password" type="password" name="password" placeholder="Masukkan kata sandi"
                            autocomplete="current-password" required>
                    <button class="password-toggle" type="button" aria-label="Tampilkan kata sandi"
                            onclick="togglePasswordVisibility()">
                        <span id="password-icon" class="material-symbols-outlined" aria-hidden="true">visibility</span>
                    </button>
                </div>
            </div>

            <div class="remember-row">
                <input id="remember" type="checkbox" name="remember">
                <label for="remember">Ingat saya di perangkat ini</label>
            </div>

            <button class="submit-button" type="submit">
                Masuk ke Dashboard Admin
                <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span>
            </button>
        </form>

        <footer class="footer">
            <strong>Shoku Admin &amp; Enterprise</strong> v1.0.3<br>
            © 2026 Shoku Management Portal · Bantuan / Support
        </footer>
    </main>

    <script>
        function togglePasswordVisibility() {
            const password = document.getElementById('password');
            const icon = document.getElementById('password-icon');
            const toggle = document.querySelector('.password-toggle');
            const isHidden = password.type === 'password';

            password.type = isHidden ? 'text' : 'password';
            icon.textContent = isHidden ? 'visibility_off' : 'visibility';
            toggle.setAttribute('aria-label', isHidden ? 'Sembunyikan kata sandi' : 'Tampilkan kata sandi');
        }
    </script>
</body>

</html>
