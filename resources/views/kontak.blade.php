<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kontak Kami - PT Honestly</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
  @include('partials.navbar')

  <div class="container">
    <section class="kontak">
      <h2>Hubungi Kami</h2>
      <p>Kami siap membantu Anda.</p>

      <div class="kontak-grid">
        <!-- Block putih kiri -->
        <div class="kontak-card">
          <h3><i class="fa-solid fa-location-dot"></i> Alamat</h3>
          <p>Jl. Petung, Demangan Baru, Caturtunggal, Kec. Depok, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55281</p>

          <h3><i class="fa-solid fa-phone"></i> Telepon</h3>
          <p>0812 3848 8324</p>

          <h3><i class="fa-solid fa-envelope"></i> Email</h3>
          <p>honestlysejahtera.sales@gmail.com</p>

          <h3><i class="fa-solid fa-clock"></i> Jam Operasional</h3>
          <p>Senin - Sabtu (08.00 - 17.00)</p>
        </div>

        <!-- Block putih kanan -->
        <div class="kontak-card">

              @if(session('success'))
          <div class="alert-success">
              {{ session('success') }}
          </div>
      @endif

          <form action="{{ route('kontak.store') }}" method="POST">
          @csrf

          <label>Nama Lengkap</label>
          <input type="text" name="nama" placeholder="Masukkan nama lengkap">

          <label>Email</label>
          <input type="email" name="email" placeholder="Masukkan email">

          <label>WhatsApp</label>
          <input type="text" name="whatsapp" placeholder="Masukkan nomor WhatsApp">

          <label>Pesan</label>
          <textarea name="pesan" placeholder="Tulis pesan Anda"></textarea>

          <button type="submit" class="btn-kontak">Kirim</button>
      </form>
        </form>
        </div>
      </div>
    </section>
  </div>
</body>
</html>