<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<div class="top-bar">
    <h2>Data Produk</h2>

    <a href="{{ route('produk.create') }}" class="btn">+ Tambah Produk</a>
</div>

<table>
    <tr>
        <th>Nama</th>
        <th>Kategori</th>
        <th>Aksi</th>
    </tr>

    @foreach($produk as $p)
    <tr>
        <td>{{ $p->nama }}</td>
        <td>{{ $p->kategori }}</td>
        <td>
            <a href="/produk/{{ $p->id }}/edit" class="btn-edit">Edit</a>

            <form method="POST" action="/produk/{{ $p->id }}" style="display:inline;">
                @csrf
                @method('DELETE')
                <button class="btn-delete">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>