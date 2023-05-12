<?php
require_once 'sidebar.php';
require_once 'dbkoneksi.php';
$sql = "SELECT * FROM kategori_produk";
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
                    <h3>Form Kategori</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="kategori_produk.php">Kategori Produk</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Tambah Kategori
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-vertical" method="POST" action="proses_kategori.php">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="nama">Kategori</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="nama" class="form-control" name="nama" />
                                            </div>
                                            <div class="col-sm-12 d-flex justify-content-end">
                                            <input type="submit" name="proses" type="submit" class="btn btn-primary me-1 mb-1" value="Simpan"/>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
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