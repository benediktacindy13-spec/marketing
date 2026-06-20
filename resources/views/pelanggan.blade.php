<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelanggan</title>

    <!-- CSS global sidebar -->
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <!-- CSS khusus halaman pelanggan -->
    <link rel="stylesheet" href="{{ asset('css/pelanggan.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

<div class="dashboard">

    <!-- SIDEBAR INCLUDE -->
    @include('layouts.sidebar')

    <!-- MAIN -->
    <div class="main-content">


        <!-- KONTEN PELANGGAN -->
        <div class="container">
            <h2>📋 DAFTAR PELANGGAN</h2>

            <!-- Search & Actions -->
            <div class="actions">
                <input type="text" placeholder="Cari nama, WhatsApp, email...">
                <button class="btn filter"><i class="fa-solid fa-filter"></i> Filter</button>
                <button class="btn add"><i class="fa-solid fa-user-plus"></i> Tambah Pelanggan</button>
            </div>

            <!-- Table -->
            <table class="customer-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pelanggan</th>
                        <th>No. WhatsApp</th>
                        <th>Email</th>
                        <th>Asal</th>
                        <th>Terakhir Kontak</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td><td>Sarah Amelia</td><td>0812xxxxxxxx</td><td>sarah@gmail.com</td>
                        <td>WhatsApp</td><td>10 Mei 2004</td>
                        <td>
                            <button class="icon-btn"><i class="fa-solid fa-comments"></i></button>
                            <button class="icon-btn"><i class="fa-solid fa-pen"></i></button>
                            <button class="icon-btn"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td><td>Budi Santoso</td><td>0812xxxxxxxx</td><td>budi@gmail.com</td>
                        <td>Shopee</td><td>10 Mei 2004</td>
                        <td>
                            <button class="icon-btn"><i class="fa-solid fa-comments"></i></button>
                            <button class="icon-btn"><i class="fa-solid fa-pen"></i></button>
                            <button class="icon-btn"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td><td>Dewi Lestari</td><td>0812xxxxxxxx</td><td>dewi@gmail.com</td>
                        <td>Tiktok Shop</td><td>10 Mei 2004</td>
                        <td>
                            <button class="icon-btn"><i class="fa-solid fa-comments"></i></button>
                            <button class="icon-btn"><i class="fa-solid fa-pen"></i></button>
                            <button class="icon-btn"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td><td>Andi Pratama</td><td>0812xxxxxxxx</td><td>andi@gmail.com</td>
                        <td>WhatsApp</td><td>9 Mei 2004</td>
                        <td>
                            <button class="icon-btn"><i class="fa-solid fa-comments"></i></button>
                            <button class="icon-btn"><i class="fa-solid fa-pen"></i></button>
                            <button class="icon-btn"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td><td>Rina Fitri</td><td>0812xxxxxxxx</td><td>rina@gmail.com</td>
                        <td>Shopee</td><td>8 Mei 2004</td>
                        <td>
                            <button class="icon-btn"><i class="fa-solid fa-comments"></i></button>
                            <button class="icon-btn"><i class="fa-solid fa-pen"></i></button>
                            <button class="icon-btn"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="pagination">
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <span>...</span>
                <a href="#">25</a>
            </div>

        </div><!-- end .container -->

    </div><!-- end .main-content -->

</div><!-- end .dashboard -->

</body>
</html>
