<h1>Input Prodi Mahasiswa</h1>
    <form action="/pemograman-web/akademik/proses.php" method="post">
        <div class="mb-3">
                <label for="nama_prodi" class="form-label">Nama Program Studi</label>
                <input type="text" class="form-control" id="nama_prodi" name="nama_prodi">
        </div>
        <div class="mb-3">
                <label for="jenjang" class="form-label">Jenjang</label>
                <select class="form-control" id="jenjang" name="jenjang" required>
                    <option value="">-- Pilih Jenjang --</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                    <option value="S2">S2</option>
                </select>
       </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan"></textarea>
        </div> 
        <div>
            <input type="submit" name="prodi_submit" class="btn btn-secondary">
            <input type="reset" name="reset" class="btn btn-secondary">
                <a href='index.php?page=prodi' class="btn btn-info">Lihat data</a>
        </div>
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
