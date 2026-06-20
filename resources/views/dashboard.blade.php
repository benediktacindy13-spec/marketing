<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS External -->
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

<!-- SIDEBAR -->
@include('layouts.sidebar')

<!-- CONTENT -->
<div class="content">

    <h3>Dashboard</h3>

    <!-- CARD RINGKASAN -->
    <div class="row mt-3">

        <div class="col-md-3">
            <div class="card-box">
                <h6>Total Produk</h6>
                <h3>{{ $totalProduk }}</h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-box">
                <h6>Total User</h6>
                <h3>{{ $totalUser }}</h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-box">
                <h6>Total Chat</h6>
                <h3>{{ $totalChat }}</h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-box">
                <h6>Rata-rata Rating</h6>
                <h3>{{ number_format($avgRating, 1) }}</h3>
            </div>
        </div>

    </div>

    <!-- CHART -->
    <div class="row mt-4">

        <div class="col-md-6">
            <div class="card-box">
                <h5>Rating Per Produk</h5>
                <canvas id="ratingProdukChart"></canvas>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card-box">
                <h5>Kepuasan Chat Admin</h5>
                <canvas id="chatChart"></canvas>
            </div>
        </div>

    </div>

</div>

<!-- DATA -->
<script>
const produkLabels = @json($ratingProduk->pluck('produk.nama'));
const produkData = @json($ratingProduk->pluck('avg_rating'));

const chatLabels = @json($kepuasanChat->pluck('tanggal'));
const chatData = @json($kepuasanChat->pluck('avg_rating'));
</script>

<!-- CHART PRODUK -->
<script>
new Chart(document.getElementById('ratingProdukChart'), {
    type: 'bar',
    data: {
        labels: produkLabels,
        datasets: [{
            label: 'Rating Produk',
            data: produkData,
            backgroundColor: '#4CAF50'
        }]
    },
    options: {
        indexAxis: 'y',
        scales: {
            x: { min: 0, max: 5 }
        }
    }
});
</script>

<!-- CHART CHAT -->
<script>
new Chart(document.getElementById('chatChart'), {
    type: 'line',
    data: {
        labels: chatLabels,
        datasets: [{
            label: 'Kepuasan Chat Admin',
            data: chatData,
            borderColor: '#2196F3',
            tension: 0.3,
            fill: false
        }]
    },
    options: {
        scales: {
            y: { min: 0, max: 5 }
        }
    }
});
</script>

</body>
</html>