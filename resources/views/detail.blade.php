<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="card p-4 shadow-sm">
        <h2>Detail Produk</h2>
        <p class="lead">Harga produk yang dipilih adalah: <strong>Rp {{ number_format($harga, 0, ',', '.') }}</strong></p>
        <a href="/product" class="btn btn-primary">Kembali ke Produk</a>
    </div>
</body>
</html>