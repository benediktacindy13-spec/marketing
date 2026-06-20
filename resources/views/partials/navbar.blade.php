<nav class="navbar">
  <div class="logo">
    <img src="{{ asset('images/logopt.png') }}">
    <div>
      <h3>PT. HONESTLY</h3>
      <p>INDONESIA SEJAHTERA</p>
    </div>
  </div>

  <ul>
    <li><a href="{{ url('/') }}">Beranda</a></li>
    <li><a href="{{ url('/produk') }}">Produk</a></li>
    <li><a href="{{ url('/tentang') }}">Tentang Kami</a></li>
    <li><a href="{{ url('/kontak') }}">Kontak</a></li>
  </ul>

  <div class="nav-icons">

    <a href="{{ url('/login') }}">
      <i class="fa-solid fa-user"></i>
    </a>
  </div>
</nav>