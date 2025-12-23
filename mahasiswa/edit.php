<?php
require 'koneksi.php';

$nim = $_GET['nim'];
$query = "SELECT * FROM mahasiswa where nim='$nim'";
$edit = $koneksi->query($query);
$data = $edit->fetch_assoc();
$prodi = $koneksi->query("SELECT id, nama_prodi, jenjang FROM prodi");
?>

<h1>Edit Data Mahasiswa</h1>
<form action="/pemograman-web/akademik/proses.php" method="post">
    <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" class="form-control" id="nim" name="nim"
                value="<?= $data['nim'] ?>" disabled>
    </div>
    <div class="mb-3">
        <label for="nama_mhs" class="form-label">Nama Mahasiswa</label>
        <input type="text" class="form-control" id="nama_mhs" name="nama_mhs"
                value="<?= $data['nama_mhs'] ?>">
    </div>
     <div class="mb-3">
        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                value="<?= $data['tgl_lahir'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Program Studi</label>
        <select name="prodi_id" class="form-control" required>
            <option value="">-- Pilih Prodi --</option>
                <?php while($p = mysqli_fetch_assoc($prodi)) : ?>
                        <option value="<?= $p['id']; ?>">
                            <?= $p['nama_prodi']; ?> (<?= $p['jenjang']; ?>)
                        </option>
                <?php endwhile; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" id="alamat" rows="3" name="alamat"><?= $data['alamat'] ?></textarea>
    </div>
    <div>
        <input type="hidden" name="nim" value="<?= $data['nim'] ?>">
        <input type="submit" name="mhs_ubah" value="Update" class="btn btn-secondary">
        <a href='index.php?page=mahasiswa' class="btn btn-info">Lihat data</a>
    </div>
</form>
  