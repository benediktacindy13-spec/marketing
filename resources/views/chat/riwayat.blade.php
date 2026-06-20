<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Chat</title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS External -->
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/chat-riwayat.css') }}">

</head>

<body>

<!-- SIDEBAR -->
@include('layouts.sidebar')

<!-- CONTENT -->
<div class="content">

    <h3>Riwayat Chat</h3>

    <div class="content-box">

        @if($chats->isEmpty())
        <pre>
    {{ print_r($chats->toArray(), true) }}
    </pre>
                <div class="empty-state">
                Tidak ada percakapan yang tersedia
            </div>
        @else

            <div class="table-responsive">
    <table class="table table-striped table-hover align-middle">

        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>User</th>
                <th>Produk</th>
                <th>Pesan Terakhir</th>
            </tr>
        </thead>

        <tbody>

        @forelse($chats as $chat)
            <tr>
                <td>{{ $loop->iteration }}</td>

                <td>
                    {{ $chat->created_at->format('d M Y H:i') }}
                </td>

                <td>
                    {{ $chat->user->name ?? '-' }}
                </td>

                <td>
                    {{ $chat->produk->nama ?? '-' }}
                </td>

                <td>
                    @if($chat->messages->count())
                        {{ $chat->messages->last()->message }}
                    @else
                        <span class="text-muted">Tidak ada pesan</span>
                    @endif
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center">
                    Tidak ada riwayat chat
                </td>
            </tr>
                @endforelse

        </tbody>

    </table>
</div>

@endif

</div>

</body>
</html>