<?php
include '../koneksi.php';
$sql = "SELECT
peminjaman.id_pinjam,
peminjaman.id_anggota,
peminjaman.tgl_pinjam,
peminjaman.tgl_jatuh_tempo,
peminjaman.id_petugas,
detail_pinjam.tgl_kembali,
detail_pinjam.`status`,
detail_pinjam.id_detail,
petugas.id_petugas,
petugas.nama_petugas,
petugas.username,
petugas.`password`,
petugas.telp,
petugas.id_level,
anggota.nama,
anggota.kelas
FROM
peminjaman
INNER JOIN detail_pinjam ON detail_pinjam.id_pinjam = peminjaman.id_pinjam
INNER JOIN petugas ON peminjaman.id_petugas = petugas.id_petugas
INNER JOIN anggota ON peminjaman.id_anggota = anggota.id_anggota
";
$res = mysqli_query($koneksi, $sql);
while ($data = mysqli_fetch_assoc($res)) {
    $pinjam[] = $data;
}
?>
<?php
include '../assets/header.php';
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md"></div>
    </div>

<div class="card">
<div class="card-header">
        <h2 class="card-title"><i class="fas fa-edit"></i> Data Peminjaman</h2>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Peminjam</th>
                <th scope="col">Tanggal Pinjam</th>
                <th scope="col">Tanggal Jatuh Tempo</th>
                <th scope="col">Petugas</th>
                <th scope="col">Status</th>
                <th>Aksi</th>
                </tr>
                </thead>
        <?php
        $no = 1;
        foreach ($pinjam as $p) { ?>
        <tr>
            <th scope="row"><?= $no?></th>
            <td><?= $p['nama'] ?></th>
            <td><?= date('d F Y', strtotime($p['tgl_pinjam'])) ?></th>
            <td><?= date('d F Y', strtotime($p['tgl_jatuh_tempo'])) ?></th>
            <td><?= $p['nama_petugas'] ?></td>
            <td>
        <?php
        if($p['status']=="dipinjam")
        {
            echo '<h5><span class="badge badge-info">Dipinjam</span></h5>';

        }
        else
        {
            echo '<h5><span class="badge badge-secondary">Kembali</span></h5>';
        }
        ?>
        </td>
        <td>
                <a href="detail.php?id_pinjam=<?= $p['id_pinjam'] ?>&nama=<?= $p['nama'] ?>" class="badge badge-success">Detail</a>
                <a href="form-edit.php?id_pinjam=<?= $p['id_pinjam']?>" class="badge badge-warning">Edit</a>
                <a href="hapus.php?id_pinjam=<?= $p['id_pinjam']?>" class="badge badge-danger">Hapus</a>
                <a href="form-pinjam.php" class="badge badge-primary">Tambah</a>
            </td>
    </tr>
        <?php
            $no++;
        }
        ?>
        
        </table>
    </div>
</div>
</div>
<?php
include '../assets/footer.php';
?>