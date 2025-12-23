    <h1 class='text-center'>List Data Mahasiswa</h1>
        <a href='index.php?page=mahasiswa_create' class="btn btn-primary">+ tambah data</a>
        <br><br>
    <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama Mahasiswa</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Program Studi</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require 'koneksi.php';
                $tampil = $koneksi->query("SELECT m.nim, m.nama_mhs, m.tgl_lahir, m.alamat, p.nama_prodi, p.jenjang 
                                           FROM mahasiswa m LEFT JOIN prodi p ON m.prodi_id = p.id");
                $no=1;
                //looping data mahasiswa
                //-> merupakan tanda object
                while($data = mysqli_fetch_assoc($tampil)){
            ?>  
                    <tr>
                        <th scope="row"><?= $no ?></th>
                        <td><?= $data['nim'] ?></td>
                        <td><?= $data['nama_mhs'] ?></td>
                        <td><?= $data['tgl_lahir'] ?></td>
                        <td><?= $data['nama_prodi'] ?></td>
                        <td><?= $data['alamat'] ?></td>
                        <td>
                            <a href="proses.php?mhs_hapus=<?php echo $data['nim'] ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                            <a href="index.php?nim=<?= $data['nim'] ?>&page=mahasiswa_update" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
            
            <?php     
                $no++;
            } 
            ?>
            
        </tbody>
    </table>
    
    