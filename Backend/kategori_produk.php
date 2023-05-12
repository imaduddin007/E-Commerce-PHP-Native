<?php
require_once 'sidebar.php';
require_once 'dbkoneksi.php';
$sql = "SELECT * FROM kategori_produk ORDER BY id asc";
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
                    <h3>Kategori Produk</h3>
                    <a href="form_kategori.php" class="btn btn-primary mb-3">Tambah Kategori</a>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Kategori Produk
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table Katagori Produk</h4>
                </div>
                <div class="card-body">
                    <div class="row" id="table-bordered">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomor  = 1;
                                        foreach ($rs as $row) {
                                        ?>
                                            <tr>
                                                <td><?= $nomor ?></td>
                                                <td><?= $row['nama'] ?></td>
                                                <td>
                                                    <a class="btn btn-success" href="view_kategori.php?id=<?= $row['id'] ?>">Detail</a>
                                                    <a class="btn btn-danger" href="edit_kategori.php?idedit=<?= $row['id'] ?>">Edit</a>
                                                    <a class="btn btn-warning" href="delete_kategori.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['nama'] ?>?')) {return false}">Delete</a>
                                                </td>
                                            </tr>
                                        <?php
                                            $nomor++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php
    require_once 'footer.php';
    ?>