<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Produk Kami - PT. Honestly</title>

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
  @include('partials.navbar')

  <div class="container produk-page">
    <!-- Sidebar kategori -->
 <aside class="sidebar">
  <h3>Kategori Produk</h3>
  <ul>
    <li>
    <a href="{{ route('produk') }}">
        <i class="fa-solid fa-box"></i> Semua Produk
    </a>

<li>
    <a href="{{ route('produk',['kategori'=>'minuman']) }}">
        <i class="fa-solid fa-glass-water-droplet"></i> Minuman
    </a>
</li>

<li>
    <a href="{{ route('produk',['kategori'=>'susukambing']) }}">
        <i class="fa-solid fa-glass-water-droplet"></i> Susu Kambing
    </a>
</li>

<li>
    <a href="{{ route('produk',['kategori'=>'collagen']) }}">
        <i class="fa-solid fa-heart-pulse"></i> Collagen
    </a>
</li>
  </ul>
</aside>

    <!-- Konten utama -->
    <main class="produk-content">
      <div class="produk-header">
        <h1>Produk Kami</h1>

    
         <div class="produk-search">
    <input type="text" id="searchProduk"
           placeholder="Cari produk..."
           class="search-bar">
    <i class="fa-solid fa-magnifying-glass"></i>
</div>
      </div>
      <div class="tambah-produk-container">
  <a href="{{ route('produk.create') }}" class="btn-tambah-produk">
    + Tambah Produk
  </a>
</div>
      <div class="produk-grid">

    @foreach($produk as $item)

    <div class="card">

        <img src="{{ asset('images/' . $item->gambar) }}" alt="{{ $item->nama }}">

        <h4>{{ $item->nama }}</h4>

        <p>{{ $item->deskripsi_singkat }}</p>

        <a href="{{ route('detailproduk', $item->id) }}" class="btn-produk">
            Lihat Detail
        </a>

    </div>

@endforeach
  
</div>
</main>
  <script>
document.getElementById('searchProduk').addEventListener('keyup', function() {

    let keyword = this.value.toLowerCase();

    let cards = document.querySelectorAll('.produk-grid .card');

    cards.forEach(function(card) {

        let namaProduk = card.querySelector('h4').textContent.toLowerCase();

        if (namaProduk.includes(keyword)) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }

    });

});
</script>
</div>
</body>
</html>
