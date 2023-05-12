<?php
require_once 'sidebar.php';
require_once 'dbkoneksi.php';
$_id = $_GET['idedit'];
$sql = "SELECT * FROM produk WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
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
                    <h3>Form Produk</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="produk.php">Produk</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Edit Produk
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
                                <form class="form form-vertical" method="POST" action="proses_produk.php">
                                <input type="hidden" name="idedit" value="<?= $_id ?>">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="kode">Kode</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="kode" class="form-control" name="kode" value="<?= $row['kode'] ?>"/>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="nama">Nama Produk</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="nama" class="form-control" name="nama" value="<?= $row['nama'] ?>"/>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="harga_jual">Harga Jual</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="number" id="harga_jual" class="form-control" name="harga_jual" value="<?= $row['harga_jual'] ?>"/>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="harga_beli">Harga Beli</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="number" id="harga_beli" class="form-control" name="harga_beli" value="<?= $row['harga_beli'] ?>"/>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="stok">Stok</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="number" id="stok" class="form-control" name="stok" value="<?= $row['stok'] ?>"/>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="min_stok">Minimal Stok</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="number" id="min_stok" class="form-control" name="min_stok" value="<?= $row['min_stok'] ?>"/>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="deskripsi">Deskripsi</label>
                                            </div>
                                            <div class="col-md-8 form-group mb-1">
                                                <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control" ><?= $row['deskripsi'] ?></textarea>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="produk_id">Produk</label>
                                            </div>
                                            <div class="col-md-8 form-group mb-1" >
                                                <?php
                                                $sqlproduk = "SELECT * FROM kategori_produk";
                                                $rsproduk = $dbh->query($sqlproduk);
                                                ?>
                                                <select id="kategori_produk" name="kategori_produk_id" class="form-select">
                                                    <?php
                                                    foreach ($rsproduk as $rowproduk) {
                                                    ?>
                                                        <option <?php if ($rowproduk['id'] == $row['kategori_produk_id']) { echo 'selected'; }?> value="<?= $rowproduk['id'] ?>"><?= $rowproduk['nama'] ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-sm-12 d-flex justify-content-end">
                                            <input type="submit" name="proses" type="submit" class="btn btn-primary me-1 mb-1" value="Update"/>
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