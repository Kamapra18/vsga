<?php include 'config/koneksi.php';

$query = $conn->query("SELECT * FROM donasi_buku ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lapaoran</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
</head>

<body>
    <section class="bg-warning vh-100">

        <h1 class="text-center mb-5">Bukti Penyumbang Buku</h1>
        <div class="container">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr">
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Donatur</th>
                        </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    while ($row = $query->fetch_assoc()): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td>
                                <?php if (!empty($row['gambar'])): ?>
                                    <img src="upload/<?= htmlspecialchars($row['gambar']) ?>" alt="Cover Buku"
                                        style="height: 80px; width: auto;">
                                <?php else: ?>
                                    <span>Tidak ada gambar</span>
                                <?php endif; ?>
                            </td>
                            <td><?= htmlspecialchars($row['judul_buku']) ?></td>
                            <td><?= htmlspecialchars($row['penulis']) ?></td>
                            <td><?= htmlspecialchars($row['nama_user']) ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        <div class="m-4">
            <a href="index.php" class="btn btn-secondary no-print">kembali</a>
        </div>
    </section>

</body>

<script>
    window.print();
</script>

</html>