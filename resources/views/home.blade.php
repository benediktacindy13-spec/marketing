<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>PT Honestly Indonesia Sejahtera</title>

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
  <div class="container">

    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Hero -->
    <section class="hero">
      <div class="hero-text">
        <h1>
          Solusi Terbaik<br>
          Untuk Kebutuhan Anda
        </h1>
        <p>
          PT. Honestly Indonesia Sejahtera memberikan
          produk berkualitas dan layanan terbaik
          untuk kepuasan pelanggan.
        </p>
         <div class="btn-group">
        <a href="{{ route('produk') }}" class="btn-produk-home">
            Lihat Produk
        </a>

        <a href="{{ url('/kontak') }}" class="btn-kontak-home">
            Hubungi Kami
        </a>
        </div>
      </div>

      <div class="hero-image">
      </div>
    </section>

    <!-- Fitur -->
    <section class="fitur">
      <div class="card">
        <i class="fa-solid fa-shield"></i>
        <h4>Produk Berkualitas</h4>
        <p>Aman & terpercaya</p>
      </div>

      <div class="card">
        <i class="fa-solid fa-camera"></i>
        <h4>Layanan Profesional</h4>
        <p>Solusi terbaik</p>
      </div>

      <div class="card">
        <i class="fa-solid fa-truck"></i>
        <h4>Pengiriman Cepat</h4>
        <p>Tepat waktu</p>
      </div>

      <div class="card">
        <i class="fa-solid fa-face-smile"></i>
        <h4>Kepuasan Pelanggan</h4>
        <p>Prioritas kami</p>
      </div>
    </section>
  </div>
</body>
</html>
