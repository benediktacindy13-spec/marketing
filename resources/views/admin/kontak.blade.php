<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Kontak Pesan</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/kontak.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<!-- SIDEBAR -->
@include('layouts.sidebar')

   <div class="main-content">
        <h2>Pesan Masuk</h2>

        @if(session('success'))
    <div class="alert-success">
        {{ session('success') }}
    </div>
@endif

        <table class="table-kontak">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>WhatsApp</th>
                    <th>Pesan</th>
                </tr>
            </thead>

            <tbody>
                @forelse($pesan as $p)
                    <tr>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->email }}</td>
                        <td>{{ $p->whatsapp }}</td>
                        <td>{{ Str::limit($p->pesan, 50) }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" style="text-align:center; padding:20px;">
                            Belum ada pesan masuk
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</body>
</html>