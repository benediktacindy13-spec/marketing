<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<div class="card">
    <h2>Edit Produk</h2>

    <form method="POST" action="/produk/{{ $produk->id }}">
        @csrf
        @method('PUT')

        <input name="nama" value="{{ $produk->nama }}">
        <input name="gambar" value="{{ $produk->gambar }}">
        <input name="kategori" value="{{ $produk->kategori }}">
        <input name="deskripsi_singkat" value="{{ $produk->deskripsi_singkat }}">
        <textarea name="deskripsi_lengkap">{{ $produk->deskripsi_lengkap }}</textarea>

        <button class="btn">Update</button>
    </form>
</div>

</body>
</html>