<?php
require 'koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM prodi where id='$id'";
$edit = $koneksi->query($query);
$data = $edit->fetch_assoc();
?>

<h1>Edit Program Studi Mahasiswa</h1>
<form action="proses.php" method="post">
    <div class="mb-3">
        <label for="nama_prodi" class="form-label">Nama Program studi</label>
        <input type="text" class="form-control" id="nama_prodi" name="nama_prodi"
                value="<?= $data['nama_prodi'] ?>">
    </div>
    <div class="mb-3">
        <label for="jenjang" class="form-label">Jenjang</label>
        <select class="form-control" id="jenjang" name="jenjang" required>
            <option value="D2" <?= ($data['jenjang']=='D2') ? 'selected' : ''; ?>>D2</option>
            <option value="D3" <?= ($data['jenjang']=='D3') ? 'selected' : ''; ?>>D3</option>
            <option value="D4" <?= ($data['jenjang']=='D4') ? 'selected' : ''; ?>>D4</option>
            <option value="S2" <?= ($data['jenjang']=='S2') ? 'selected' : ''; ?>>S2</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="keterangan" class="form-label">Keterangan</label>
        <textarea class="form-control" id="keterangan" rows="3" name="keterangan"><?= $data['keterangan'] ?></textarea>
    </div>
    <div>
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <input type="submit" name="prodi_ubah" value="Update" class="btn btn-secondary">
        <a href='index.php?page=prodi' class="btn btn-info">Lihat data</a>
    </div>
</form>
  