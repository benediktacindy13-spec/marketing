<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Chat Detail</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/chat.css') }}">
</head>

<body>

<div class="chat-container">

    <!-- HEADER -->
    <div class="chat-header">
        <h3>
            <i class="fa-solid fa-comments"></i>
            Chat User
        </h3>

        <div class="header-icons">
            <a href="{{ url('/chat') }}">
                <i class="fa-solid fa-arrow-left"></i>
            </a>

            <a href="{{ url('/') }}">
                <i class="fa-solid fa-house"></i>
            </a>
        </div>
    </div>

    <!-- INFO SINGKAT -->
    <div style="padding: 10px 20px; font-size: 14px; background:#f9fafb;">
        <div><b>User:</b> {{ $chat->user->name }}</div>
        <div><b>Produk:</b> {{ $chat->produk->nama }}</div>
    </div>

    <!-- CHAT BOX -->
    <div class="chat-box">

        @foreach($chat->messages as $msg)

            <div class="message {{ $msg->sender_id == auth()->id() ? 'user' : 'admin' }}">
                {{ $msg->message }}
            </div>

        @endforeach

    </div>

    <!-- FORM -->
    <form class="chat-form" action="{{ route('chat.reply.store') }}" method="POST">
        @csrf

        <input type="hidden" name="chat_id" value="{{ $chat->id }}">

        <div class="chat-input-wrapper">
            <input type="text" name="message" placeholder="Tulis balasan..." required>

            <button type="submit">
                <i class="fa-solid fa-paper-plane"></i>
            </button>
        </div>
    </form>

</div>

<script>
window.onload = function () {
    const chatBox = document.querySelector('.chat-box');
    chatBox.scrollTop = chatBox.scrollHeight;
};
</script>

</body>
</html>