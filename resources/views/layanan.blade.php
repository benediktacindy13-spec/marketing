<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Layanan Kami - PT Honestly</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
  @include('partials.navbar')

  <div class="container">
    <section class="layanan">
      <h2>Layanan Kami</h2>
      <div class="layanan-grid">
        <div class="card-layanan">
          <i class="fa-solid fa-headset"></i>
          <h4>Konsultasi Produk</h4>
          <p>Konsultasi gratis untuk membantu Anda menemukan produk yang tepat.</p>
        </div>
        <div class="card-layanan">
          <i class="fa-solid fa-box"></i>
          <h4>Pemenuhan Pesanan</h4>
          <p>Proses pesanan mudah dan cepat dengan jaminan terbaik.</p>
        </div>
        <div class="card-layanan">
          <i class="fa-solid fa-truck-fast"></i>
          <h4>Pengiriman Cepat</h4>
          <p>Pengiriman aman dan tepat waktu ke seluruh Indonesia.</p>
        </div>
        <div class="card-layanan">
          <i class="fa-solid fa-headset"></i>
          <h4>Layanan Purna Jual</h4>
          <p>Kami siap membantu setelah pembelian produk.</p>
        </div>
      </div>
    </section>
  </div>
</body>
</html>
