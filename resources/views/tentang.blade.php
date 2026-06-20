<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tentang Kami - PT Honestly</title>

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

@include('partials.navbar')

<div class="container">

    <!-- TENTANG KAMI -->
    <section class="tentang">

        <div class="tentang-header">

            <h2>PT HONESTLY</h2>
            <h3>INDONESIA SEJAHTERA</h3>

            <div class="tentang-image">
                <img src="{{ asset('images/perusahaan.png') }}"
                     alt="Gedung PT Honestly">
            </div>

            <p>
                PT Honestly Indonesia Sejahtera adalah perusahaan yang bergerak
                di bidang distribusi barang. Kami hadir sebagai mitra strategis dalam
                mendistribusikan berbagai produk unggulan kepada konsumen
                dengan cakupan area yang luas, sistem distribusi yang terintegrasi,
                serta layanan yang profesional.
                <br><br>
                Kami berkomitmen untuk menghadirkan solusi distribusi yang efisien,
                terpercaya, dan bernilai tambah bagi mitra bisnis. Dengan dukungan
                tim yang berpengalaman, sistem manajemen modern, serta jaringan
                distribusi yang luas, kami terus tumbuh dan berinovasi untuk
                menjawab tantangan pasar yang dinamis.

            </p>

        </div>

        </div>

    </section>

    <section class="visi-misi-section">

    <div class="visi-box">
        <h2>VISI</h2>
        <p>
            Menjadi perusahaan distribusi nasional yang terpercaya,
            profesional, dan unggul dalam pelayanan.
        </p>
    </div>

    <div class="divider"></div>

    <div class="misi-box">
        <h2>MISI</h2>

        <div class="misi-grid">

            <div class="misi-item">
                Menyediakan layanan distribusi yang cepat, tepat, dan handal.
            </div>

            <div class="misi-item">
                Menjalin kemitraan jangka panjang dengan prinsip saling menguntungkan.
            </div>

            <div class="misi-item">
                Meningkatkan nilai tambah bagi pelanggan melalui efisiensi dan teknologi distribusi.
            </div>

            <div class="misi-item">
                Mengembangkan sumber daya manusia yang kompeten dan berdedikasi tinggi.
            </div>

            <div class="misi-item">
                Menjaga integritas dan kejujuran sebagai fondasi utama perusahaan.
            </div>

        </div>

    </div>

</section>

    <!-- LAYANAN KAMI -->
    <section class="layanan">

        <h2>Layanan Kami</h2>

        <div class="layanan-grid">

            <div class="card-layanan">
                <i class="fa-solid fa-headset"></i>
                <h4>Konsultasi Produk</h4>
                <p>
                    Konsultasi gratis untuk membantu pelanggan
                    menemukan produk yang sesuai dengan kebutuhan.
                </p>
            </div>

            <div class="card-layanan">
                <i class="fa-solid fa-box"></i>
                <h4>Pemenuhan Pesanan</h4>
                <p>
                    Proses pemesanan produk yang mudah,
                    cepat, dan aman.
                </p>
            </div>

            <div class="card-layanan">
                <i class="fa-solid fa-truck-fast"></i>
                <h4>Pengiriman Cepat</h4>
                <p>
                    Pengiriman produk ke seluruh Indonesia
                    dengan layanan terpercaya.
                </p>
            </div>

            <div class="card-layanan">
                <i class="fa-solid fa-headset"></i>
                <h4>Layanan Purna Jual</h4>
                <p>
                    Dukungan pelanggan setelah pembelian
                    untuk menjaga kepuasan pelanggan.
                </p>
            </div>

        </div>

    </section>

</div>

</body>
</html>