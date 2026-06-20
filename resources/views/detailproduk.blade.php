<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/detailproduk.css') }}">
</head>
<body>

<div class="container py-4">

    <a href="{{ route('produk') }}" class="back-link">
        <i class="bi bi-arrow-left"></i>
        Kembali ke Produk
    </a>

    <div class="row mt-3 product-card">

        <!-- FOTO PRODUK -->
        <div class="col-lg-6">

            <img src="{{ asset('images/' . $produk->gambar) }}"
            class="{{ $produk->is_besar ? 'product-image-enp' : 'product-image' }}">
        </div>

        <!-- DETAIL PRODUK -->
        <div class="col-lg-6">

            <h1 class="product-title">
                {{ $produk->nama }}
            </h1>

            <input type="hidden" id="produk_id" value="{{ $produk->id }}">

            <div class="rating mb-2">

            <span class="star" data-rating="1">★</span>
            <span class="star" data-rating="2">★</span>
            <span class="star" data-rating="3">★</span>
            <span class="star" data-rating="4">★</span>
            <span class="star" data-rating="5">★</span>

            <span class="review-text">
                Belum ada rating
            </span>

        </div>


            <table class="table table-borderless mt-3">
                <tr>
                    <td width="100"><b>Kategori</b></td>
                    <td>: {{ $produk->kategori }}</td>
                </tr>

            </table>

            <hr>

            <h5>Deskripsi Produk</h5>

            <p class="product-description">
            {!! nl2br(e($produk->deskripsi_lengkap)) !!}
        </p>

            <div class="d-grid gap-3 mt-4">

                <a href="{{ url('/chat-admin/' . $produk->id) }}"
                class="btn btn-chat btn-lg">
                    <i class="bi bi-chat-dots"></i>
                    Tanya Admin
                </a>

            </div>

        </div>

    </div>

</div>

<script>
function changeImage(img){

    document.getElementById('mainImage').src = img.src;

    let thumbs = document.querySelectorAll('.thumbnail');

    thumbs.forEach(item => {
        item.classList.remove('active');
    });

    img.classList.add('active');
}
</script>

<script>
const stars = document.querySelectorAll('.star');
const reviewText = document.querySelector('.review-text');

function updateStars(rating) {
    stars.forEach((star, index) => {
        if (index < rating) {
            star.classList.add('active');
        } else {
            star.classList.remove('active');
        }
    });
}

stars.forEach((star, index) => {
    star.addEventListener('click', function () {

        let rating = index + 1;
        let produkId = document.getElementById('produk_id').value;

        updateStars(rating);

        fetch("/rating", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({
                produk_id: produkId,
                rating: rating
            })
        })
        .then(res => res.json())
        .then(data => {
            reviewText.innerHTML = rating + " dari 5 bintang";
        })
        .catch(err => {
            console.log(err);
        });

    });
});
</script>

</body>
</html>