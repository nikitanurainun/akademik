<h1>List Data Buku Tamu</h1>
    <table class="table">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama Mahasiswa</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require 'koneksi.php';
                $tampil = $koneksi->query("SELECT * FROM mahasiswa ORDER BY nim ASC");
                $no=1;
                //looping data tamu
                //-> merupakan tanda object
                while($data = $tampil->fetch_assoc()){
            ?>  
                    <tr>
                        <th scope="row"><?= $no ?></th>
                        <td><?= $data['nim'] ?></td>
                        <td><?= $data['nama_mhs'] ?></td>
                        <td><?= $data['tgl_lahir'] ?></td>
                        <td><?= $data['alamat'] ?></td>
                        <td>
                            <a href="index.php?nim=<?php echo $data['nim'] ?>&page=hapus" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                            <a href="index.php?nim=<?= $data['nim'] ?>&page=edit" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
            
            <?php     
                $no++;
            } 
            ?>    
        </tbody>
    </table>
    <a href='index.php?page=create' class="btn btn-primary">Input Data Mahasiswa</a>