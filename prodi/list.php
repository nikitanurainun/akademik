    <h1 class='text-center'>List Program Studi Mahasiswa</h1>
    <a href='index.php?page=prodi_create' class="btn btn-primary">+ tambah data</a>
    <br><br>
    <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Program Studi</th>
                <th scope="col">Jenjang</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require 'koneksi.php';
                $tampil = $koneksi->query("SELECT * FROM prodi");
                $no=1;
                //looping data mahasiswa
                //-> merupakan tanda object
                while($data = $tampil->fetch_assoc()){
            ?>  
                    <tr>
                        <th scope="row"><?= $no ?></th>
                        <td><?= $data['nama_prodi'] ?></td>
                        <td><?= $data['jenjang'] ?></td>
                        <td><?= $data['keterangan'] ?></td>
                        <td>
                            <a href="proses.php?prodi_hapus=<?php echo $data['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                            <a href="index.php?id=<?= $data['id'] ?>&page=prodi_update" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
            
            <?php     
                $no++;
            } 
            ?>
            
        </tbody>
    </table>
    