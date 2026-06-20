<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Staff</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

<a href="{{ url('/') }}" class="btn-home">
            <i class="fa-solid fa-arrow-left"></i>
            Kembali
        </a>

<div class="login-container">
    
    <!-- LEFT -->
    <div class="login-left">

        <div class="overlay"></div>

        <div class="logo-content">
            <img src="{{ asset('images/logopt.png') }}" alt="logo">

            <h2>PT. HONESTLY</h2>
            <p>INDONESIA SEJAHTERA</p>
        </div>

    </div>

    <!-- RIGHT -->
    <div class="login-right">

        <div class="login-box">

            <h2>Selamat Datang Kembali 👋</h2>
            <p>Silakan login untuk melanjutkan</p>

            <!-- ERROR LOGIN -->
            @if(session('error'))
                <p class="error-text">
                    {{ session('error') }}
                </p>
            @endif

            <!-- FORM LOGIN -->
            <form action="{{ url('/login') }}" method="POST" autocomplete="on">

                @csrf

                <!-- EMAIL -->
                <div class="input-group">

                    <label>Email</label>

                    <input 
                    type="email" 
                    name="email"
                    placeholder="Masukkan email Anda"
                    required>

                </div>

                <!-- PASSWORD -->
                <div class="input-group">

                    <label>Password</label>

                    <div class="password-box">

                        <input 
                        type="password" 
                        name="password"
                        placeholder="Masukkan password"
                        required>

                        <i class="fa-solid fa-eye"></i>

                    </div>

                </div>

                <!-- OPTION -->
                <div class="login-option">

                    <div class="remember">
                        <input type="checkbox">
                        <span>Ingat saya</span>
                    </div>

                    <a href="#">Lupa password?</a>

                </div>

                <!-- BUTTON -->
                <<button type="submit" class="btn-login">
                <i class="fa fa-right-to-bracket"></i> Masuk
            </button>

            </form>

            <small>
                © PT. Honestly Indonesia Sejahtera
            </small>

        </div>

    </div>

</div>

</body>
</html>