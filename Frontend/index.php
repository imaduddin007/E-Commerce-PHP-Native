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

<main id="main">

    <section id="services" class="services">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>Produk</p>
            </header>

            <?php
            require_once "dbkoneksi.php";
            $sql = "SELECT produk.*, kategori_produk.nama AS kategori FROM produk
          INNER JOIN kategori_produk ON kategori_produk.id = produk.kategori_produk_id";
            $st = $dbh->query($sql);
            $st->execute();
            $row = $st->fetchAll();

            ?>
            <div class="row gy-4">
                <?php foreach ($row as $prod) : ?>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">

                        <div class="service-box blue">
                            <i class="ri-discuss-line icon"></i>
                            <h3><?= $prod['nama'];  ?></h3>
                            <p><?= $prod['kategori'];  ?></p>
                            <a href="detail_produk.php?id=<?= $prod['id'] ?>" class="read-more"><span>Detail</span> <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>

    </section>

</main>

<?php
require_once 'footer.php';
?>