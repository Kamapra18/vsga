<?php
include 'config/koneksi.php';

$query = $conn->query("SELECT * FROM donasi_buku ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="icon" type="image/png" href="assets/logo.png">

</head>

<body>
    <section class="bg-warning d-flex flex-column justify-content-center align-items-center text-center vh-100 p-5">
        <h1 class="text-dark fs-1 mb-3 fw-bold">Donasikan Buku Anda ke Perpustakaan Digital Kami</h1>
        <p class="text-dark lead mb-4" style="max-width: 600px;">
            Ayo berbagi ilmu dan wawasan! Donasikan buku layak baca untuk memperkaya koleksi perpustakaan kita.
        </p>

        <div class="d-flex flex-column flex-sm-row gap-2">
            <a href="print.php" class="btn btn-secondary">Lihat Bukti Donasi</a>
            <button class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#modalTambah">
                Donasikan Buku
            </button>
        </div>
    </section>



    <section id="buku" class="container mt-5 mb-5">
        <h2 class="text-center fw-bold mb-4">Daftar Buku Donasi</h2>
        <div class="row">
            <?php while ($row = $query->fetch_assoc()): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <?php if (!empty($row['gambar'])): ?>
                            <img src="upload/<?= htmlspecialchars($row['gambar']) ?>" class="card-img-top" alt="Cover Buku"
                                style="height: 250px; object-fit: cover;">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($row['judul_buku']) ?></h5>
                            <p class="card-text"><strong>Penulis:</strong> <?= htmlspecialchars($row['penulis']) ?></p>
                            <p class="card-text"><strong>Donatur:</strong> <?= htmlspecialchars($row['nama_user']) ?></p>
                        </div>

                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </section>

    <?php include 'partials/footer.php'; ?>

    <?php include 'partials/modal.php'; ?>
</body>

</html>