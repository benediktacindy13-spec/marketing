<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Video Call</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            margin: 0;
            font-family: Arial;
        }

        #jitsi-container {
            width: 100%;
            height: 100vh;
        }
    </style>
</head>
<body>

<div id="jitsi-container"></div>

<script src="https://meet.jit.si/external_api.js"></script>

<!-- INI YANG BARU -->
<script>
    const domain = "meet.jit.si";

    const roomName = "produk_{{ $produk_id }}_user_{{ auth()->id() }}";

    const options = {
        roomName: roomName,
        width: "100%",
        height: "100%",
        parentNode: document.querySelector("#jitsi-container"),
        userInfo: {
            displayName: "{{ auth()->user()->name }}"
        }
    };

    const api = new JitsiMeetExternalAPI(domain, options);
</script>

</body>
</html>