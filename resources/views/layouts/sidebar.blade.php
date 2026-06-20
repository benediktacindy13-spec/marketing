<div class="sidebar">

    <div class="logo-section">
        <img src="{{ asset('images/logopt.png') }}" alt="Logo">
        <div class="company-info">
            <h4>INDONESIA<br>SEJAHTERA</h4>
            <p>PT HONESTLY</p>
        </div>
    </div>

    <a href="/dashboard">Dashboard</a>
    <a href="/produk">Produk</a>
    <a href="/chat" class="active">Chat</a>
    <a href="{{ route('admin.kontak') }}">Kontak</a>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="logout-btn">
            Logout
        </button>
    </form>

</div>