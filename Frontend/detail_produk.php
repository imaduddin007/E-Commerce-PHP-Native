<?php
require_once 'header.php';
?>
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Belanja Berbagai Produk Secara Online</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">E-Commerce adalah Website Toko Online dimana pelanggan dapat membeli berbagai macam produk secara online</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Lihat Produk</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="assets/img/hero-img.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section>

<div class="container" data-aos="fade-up">

    <header class="section-header">
        <p>Detail Produk</p>
    </header>

    <?php
    require_once 'dbkoneksi.php';
    $_id = $_GET['id'];
    $sql = "SELECT * FROM produk WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    ?>

    <div class="row">
        <div class="col-lg-4 col-12">
            <img src="shop.jpg" width="300">
        </div>
        <div class="col-lg-8 col-12">
        <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>Nama</td>
                        <td><?= $row['nama'] ?></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td><?= $row['harga_jual'] ?></td>
                    </tr>
                    <tr>
                        <td>Stok</td>
                        <td><?= $row['stok'] ?></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td><?= $row['deskripsi'] ?></td>
                    </tr>
                    <tr>
                        <td>Kategori</td>
                        <td><?= $row['kategori_produk_id'] ?></td>
                    </tr>
                </tbody>
            </table>
            <a href="index.php" class="btn btn-danger">Kembali</a>
            <a href="#" class="btn btn-primary">Beli Produk</a>
        </div>
    </div>
</div>

<?php
require_once 'footer.php';
?>