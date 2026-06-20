<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Chat Admin</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- CSS EKSTERNAL -->
    <link rel="stylesheet" href="{{ asset('css/chat.css') }}">
</head>

<body>

<div class="chat-container">

    <!-- HEADER -->
    <div class="chat-header">
    <h3>
        <i class="fa-solid fa-comments"></i>
        Chat Admin
    </h3>

    <div class="header-icons">

       <a href="{{ url('/video-call/' . $produk_id) }}">
    <i class="fa-solid fa-phone"></i>
</a>

        <a href="{{ url('/') }}">
            <i class="fa-solid fa-house"></i>
        </a>

    </div>
</div>

    <!-- CHAT BOX -->
    <div class="chat-box">

    @if($chat && $chat->messages->count())

        @foreach($chat->messages as $msg)

            <div class="message {{ $msg->sender_id == auth()->id() ? 'user' : 'admin' }}">
                {{ $msg->message }}
            </div>

        @endforeach

    @else
        <p class="empty-text">Belum ada pesan</p>
    @endif

</div>

    <!-- FORM -->
    <form class="chat-form" action="{{ route('chat.store') }}" method="POST">
        @csrf

        <input type="hidden" name="produk_id" value="{{ $produk_id ?? '' }}">

        <input type="text" name="message" placeholder="Tulis pesan..." required>

        <button type="submit">
            <i class="fa-solid fa-paper-plane"></i>
        </button>
    </form>

</div>

<script>
const chatBox = document.querySelector('.chat-box');

window.onload = function () {
    const chatBox = document.querySelector('.chat-box');
    chatBox.scrollTop = chatBox.scrollHeight;
};
</script>

</body>
</html>