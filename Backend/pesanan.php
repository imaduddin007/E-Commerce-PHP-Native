<?php
require_once 'sidebar.php';
require_once 'dbkoneksi.php';
$sql = "SELECT * FROM pesanan";
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
                    <h3>Pesanan</h3>
                    <!-- <a href="tambah_produk.php" class="btn btn-primary mb-3">Tambah Produk</a> -->
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Table Pesanan
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table Data Pesanan</h4>
                </div>
                <div class="card-body">
                    <div class="row" id="table-bordered">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>No HP</th>
                                            <th>Email</th>
                                            <th>Jumlah</th>
                                            <th>Deskripsi</th>
                                            <th>Produk</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($rs as $row) {
                                        ?>
                                            <tr>
                                                <td><?= $row['id'] ?></td>
                                                <td><?= $row['tanggal'] ?></td>
                                                <td><?= $row['nama_pemesan'] ?></td>
                                                <td><?= $row['alamat_pemesan'] ?></td>
                                                <td><?= $row['no_hp'] ?></td>
                                                <td><?= $row['email'] ?></td>
                                                <td><?= $row['jumlah_pesanan'] ?></td>
                                                <td><?= $row['deskripsi'] ?></td>
                                                <td><?= $row['produk_id'] ?></td>
                                            </tr>
                                        <?php
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