<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS Sidebar -->
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">

    <!-- CSS Laporan -->
    <link rel="stylesheet" href="{{ asset('css/laporan.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

<div class="main-layout">

    <!-- SIDEBAR -->
    @include('layouts.sidebar')

    <!-- CONTENT -->
    <div class="laporan-content">

        <h2 class="mb-4 fw-bold">Laporan Penjualan</h2>

        <div class="row g-4">

            <!-- WhatsApp -->
            <div class="col-md-4">
                <div class="card card-custom p-4">
                    <div class="d-flex justify-content-between align-items-center">

                        <div class="d-flex align-items-center gap-3">
                            <div class="icon-box wa">
                                <i class="fa-brands fa-whatsapp"></i>
                            </div>

                            <div>
                                <div class="card-title">WhatsApp</div>
                                <h5>35 Pesanan</h5>
                            </div>
                        </div>

                        <div class="percent-green">45%</div>

                    </div>
                </div>
            </div>

            <!-- Shopee -->
            <div class="col-md-4">
                <div class="card card-custom p-4">
                    <div class="d-flex justify-content-between align-items-center">

                        <div class="d-flex align-items-center gap-3">
                            <div class="icon-box shopee">
                                <i class="fa-solid fa-bag-shopping"></i>
                            </div>

                            <div>
                                <div class="card-title">Shopee</div>
                                <h5>27 Pesanan</h5>
                            </div>
                        </div>

                        <div class="percent-orange">35%</div>

                    </div>
                </div>
            </div>

            <!-- Total Pesanan -->
            <div class="col-md-4">
                <div class="card card-custom p-4">
                    <div class="card-title">Total Pesanan</div>
                    <div class="big-number">78</div>
                </div>
            </div>

            <!-- TikTok -->
            <div class="col-md-4">
                <div class="card card-custom p-4">
                    <div class="d-flex justify-content-between align-items-center">

                        <div class="d-flex align-items-center gap-3">
                            <div class="icon-box tiktok">
                                <i class="fa-brands fa-tiktok"></i>
                            </div>

                            <div>
                                <div class="card-title">TikTok Shop</div>
                                <h5>16 Pesanan</h5>
                            </div>
                        </div>

                        <div class="percent-dark">20%</div>

                    </div>
                </div>
            </div>

            <!-- Total Reseller -->
            <div class="col-md-4">
                <div class="card card-custom p-4">
                    <div class="card-title">Total Reseller</div>
                    <div class="big-number">78</div>
                </div>
            </div>

            <!-- Total Penjualan -->
            <div class="col-md-4">
                <div class="card card-custom p-4">
                    <div class="card-title">Total Penjualan</div>
                    <div class="big-number text-primary">
                        Rp 125.000.000
                    </div>
                </div>
            </div>

        </div>

        <!-- Grafik -->
        <div class="chart-card mt-5">
            <h4>Grafik Penjualan per Hari</h4>

            <canvas id="salesChart"></canvas>
        </div>

    </div>
</div>

<script>
    const ctx = document.getElementById('salesChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                '1','2','3','4','5','6','7','8','9','10',
                '11','12','13','14','15','16','17','18','19','20',
                '21','22','23','24','25','26','27','28','29','30'
            ],
            datasets: [{
                label: 'Penjualan',
                data: [
                    4,7,3,3,6,12,18,10,8,6,
                    10,16,22,16,12,8,6,11,17,10,
                    9,12,6,4,7,11,14,20,10,24
                ],
                borderRadius: 8,
                backgroundColor: '#3b82f6'
            }]
        }
    });
</script>

</body>
</html>