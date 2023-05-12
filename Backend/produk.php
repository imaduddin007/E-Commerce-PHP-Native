<?php
require_once 'sidebar.php';
require_once 'dbkoneksi.php';
$sql = "SELECT * FROM produk";
$rs = $dbh->query($sql);
?>

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Produk</h3>
                    <a href="form_produk.php" class="btn btn-primary mb-3">Tambah Produk</a>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Produk
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table Data Produk</h4>
                </div>
                <div class="card-body">
                    <div class="row" id="table-bordered">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama Produk</th>
                                            <th>Harga Jual</th>
                                            <th>Harga Beli</th>
                                            <th>Stok</th>
                                            <th>Minimal Stok</th>
                                            <th>Deskripsi</th>
                                            <th>Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomor  = 1;
                                        foreach ($rs as $row) {
                                        ?>
                                            <tr>
                                                <td><?= $row['id'] ?></td>
                                                <td><?= $row['kode'] ?></td>
                                                <td><?= $row['nama'] ?></td>
                                                <td><?= $row['harga_jual'] ?></td>
                                                <td><?= $row['harga_beli'] ?></td>
                                                <td><?= $row['stok'] ?></td>
                                                <td><?= $row['min_stok'] ?></td>
                                                <td><?= $row['deskripsi'] ?></td>
                                                <td><?= $row['kategori_produk_id'] ?></td>
                                                <td>
                                                    <a class="btn btn-success" href="view_produk.php?id=<?= $row['id'] ?>">Detail</a>
                                                    <a class="btn btn-danger" href="edit_produk.php?idedit=<?= $row['id'] ?>">Edit</a>
                                                    <a class="btn btn-warning" href="delete_produk.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['nama'] ?>?')) {return false}">Delete</a>
                                                </td>
                                            </tr>
                                    </tbody>
                                <?php
                                            $nomor++;
                                        }
                                ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>

<?php
require_once 'footer.php';
?>