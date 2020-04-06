<?php
include 'koneksi.php';
$sql = "SELECT * FROM anggota ORDER BY nama";
$res = mysqli_query($koneksi, $sql);
while ($data = mysqli_fetch_assoc($res)) {
    $pinjam[] = $data;
}
?>
<?php
include 'assets/header.php';
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card text-white bg-danger mb-3">
            <div class="card-header">JUMLAH BUKU</div>
                <div class="card-body">
                    <h5 class="card-title">999</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link text-warning">Lihat Detail >></a>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
            <div class="card-header">JUMLAH ANGGOTA</div>
                <div class="card-body">
                    <h5 class="card-title">354</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link text-danger">Lihat Detail >></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
            <div class="card-header">JUMLAH TRANSKASI</div>
                <div class="card-body">
                    <h5 class="card-title">124</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link text-warning">Lihat Detail >></a>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
include 'assets/footer.php';
?>