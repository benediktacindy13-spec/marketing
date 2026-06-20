<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h3 class="mb-4">Tambah Produk</h3>

    <form action="{{ route('produk.store') }}" method="POST" class="card p-4 shadow-sm">
        @csrf

        <div class="mb-3">
            <label>Nama Produk</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Gambar (nama file)</label>
            <input type="text" name="gambar" class="form-control" placeholder="contoh: hivic.jpeg" required>
        </div>

        <div class="mb-3">
            <label>Kategori</label>
            <select name="kategori" class="form-control" required>
                <option value="minuman">Minuman</option>
                <option value="susukambing">Susu Kambing</option>
                <option value="collagen">Collagen</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Deskripsi Singkat</label>
            <textarea name="deskripsi_singkat" class="form-control" rows="2" required></textarea>
        </div>

        <div class="mb-3">
            <label>Deskripsi Lengkap</label>
            <textarea name="deskripsi_lengkap" class="form-control" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label>Ukuran Gambar Besar?</label>
            <select name="is_besar" class="form-control">
                <option value="0">Normal</option>
                <option value="1">Besar (ENP)</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary w-100">
            Simpan Produk
        </button>

    </form>

</div>

</body>
</html>