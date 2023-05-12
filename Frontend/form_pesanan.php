<?php
require_once 'header.php';
require_once 'dbkoneksi.php';
$row = [];
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
        <p>Form Pesanan</p>
    </header>
    <div class="card-content">
        <div class="card-body">
            <form class="form form-horizontal" method="POST" action="proses_pesanan.php">
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-4 mb-1">
                            <label for="nama_pemesan">Nama</label>
                        </div>
                        <div class="col-md-8 form-group mb-1">
                            <input type="text" id="nama_pemesan" class="form-control" name="nama_pemesan" placeholder="Nama" />
                        </div>
                        <div class="col-md-4 mb-1">
                            <label for="alamat_pemesan">Alamat</label>
                        </div>
                        <div class="col-md-8 form-group mb-1">
                            <input type="text" id="alamat_pemesan" class="form-control" name="alamat_pemesan" placeholder="Alamat" />
                        </div>
                        <div class="col-md-4 mb-1">
                            <label for="tanggal">Tanggal Pembelian</label>
                        </div>
                        <div class="col-md-8 form-group mb-1">
                            <input type="date" id="tanggal" class="form-control" name="tanggal" placeholder="Tanggal Pembelian" />
                        </div>
                        <div class="col-md-4 mb-1">
                            <label for="produk_id">Produk</label>
                        </div>
                        <div class="col-md-8 form-group mb-1">
                            <?php
                            $sqlproduk = "SELECT * FROM produk";
                            $rsproduk = $dbh->query($sqlproduk);
                            ?>
                            <select id="produk" name="produk_id" class="form-select">
                                <?php
                                foreach ($rsproduk as $rowproduk) {
                                ?>
                                    <option value="<?= $rowproduk['id'] ?>"><?= $rowproduk['nama'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-4 mb-1">
                            <label for="no_hp">Nomor HP</label>
                        </div>
                        <div class="col-md-8 form-group mb-1">
                            <input type="number" id="no_hp" class="form-control" name="no_hp" placeholder="Nomor HP" />
                        </div>
                        <div class="col-md-4 mb-1">
                            <label for="email">Email</label>
                        </div>
                        <div class="col-md-8 form-group mb-1">
                            <input type="email" id="email" class="form-control" name="email" placeholder="Email" />
                        </div>
                        <div class="col-md-4 mb-1">
                            <label for="jumlah_pesanan">Jumlah Pesanan</label>
                        </div>
                        <div class="col-md-8 form-group mb-1">
                            <input type="text" id="jumlah_pesanan" class="form-control" name="jumlah_pesanan" placeholder="Jumlah Pesanan" />
                        </div>
                        <div class="col-md-4 mb-1">
                            <label for="deskripsi">Deskripsi</label>
                        </div>
                        <div class="col-md-8 form-group mb-1">
                            <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control" placeholder="Deskripsi"></textarea>
                            <!-- <input type="text" id="deskripsi" class="form-control" name="deskripsi" placeholder="Deskripsi" /> -->
                        </div>
                        <div class="col-sm-12 d-flex justify-content-end">
                            <input type="submit" name="proses" type="submit" class="btn btn-primary me-1 mb-1" value="Simpan" />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require_once 'footer.php';
?>