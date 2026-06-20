<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

<!-- TOP BAR -->
<div class="top-bar">
    <a href="/produk" class="back-btn">← Kembali</a>
</div>

<div class="wrapper">
    <div class="card card-large">

        <h2>Tambah Produk</h2>

        <form method="POST" action="{{ route('produk.store') }}" enctype="multipart/form-data">
            @csrf

            <input class="input" type="text" name="nama" placeholder="Nama Produk" required>

            <select class="input" name="kategori" required>
                <option value="">Pilih Kategori</option>
                <option value="minuman">Minuman</option>
                <option value="susukambing">Susu Kambing</option>
                <option value="collagen">Collagen</option>
            </select>

            <input class="input" type="text" name="deskripsi_singkat" placeholder="Deskripsi Singkat" required>

            <textarea class="input" name="deskripsi_lengkap" placeholder="Deskripsi Lengkap" required></textarea>

            <input class="input" type="file" name="gambar" accept="image/*">

            <button type="submit" class="btn btn-large">Simpan Produk</button>
        </form>

    </div>
</div>

</body>
</html>