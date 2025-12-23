<?php 
    //include : jika kode eror kode selanjutnya tetap dijalankan
    //require : jika kode eror kode selanjutnya tidak dijalankan

    require 'koneksi.php';

    //==INSERT MAHASISWA==
    if (isset($_POST['mhs_submit']))
    {
        $nim = $_POST['nim'];
        $nama_mhs = $_POST['nama_mhs'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $alamat = $_POST['alamat'];
        $prodi_id = $_POST['prodi_id'];

        $query = "INSERT INTO mahasiswa(nim, nama_mhs, tgl_lahir, alamat, prodi_id)
                VALUES('$nim','$nama_mhs','$tgl_lahir','$alamat','$prodi_id')";
        $sql = $koneksi->query($query); //eksekusi query

        if($sql){
           header ("Location:index.php?page=mahasiswa");
            exit; 
        }
        else{
            echo "Gagal menyimpan data!";
        }
    }

    //==DELETE MAHASISWA==
    elseif (isset($_GET['mhs_hapus']))
    {
        $nim = $_GET['mhs_hapus'];

        $query = "DELETE FROM mahasiswa WHERE nim ='$nim'";
        $delete = $koneksi->query($query);

        if ($delete) {
            header ("Location:index.php?page=mahasiswa");
            exit;
        } else {
            echo "Gagal menghapus data";
        }
    }
    
    //==UPDATE MAHASISWA==
    elseif (isset($_POST['mhs_ubah'])) 
    {
        $nim = $_POST['nim'];
        $nama_mhs = $_POST['nama_mhs'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $alamat = $_POST['alamat'];
        $prodi_id = $_POST['prodi_id'];

        $query = "UPDATE mahasiswa SET nama_mhs='$nama_mhs', tgl_lahir='$tgl_lahir', prodi_id='$prodi_id', alamat='$alamat' WHERE nim='$nim'";
        $update = $koneksi->query($query);

        if ($update) {
            header("Location:index.php?page=mahasiswa");
            exit;
        } else {
            echo "Maaf, data gagal diubah!";
        }
    }

    //==INSERT PRODI==
    elseif (isset($_POST['prodi_submit']))
    {
        $nama_prodi = $_POST['nama_prodi'];
        $jenjang = $_POST['jenjang'];
        $keterangan = $_POST['keterangan'];

        $query = "INSERT INTO prodi(nama_prodi, jenjang, keterangan)
                VALUES('$nama_prodi','$jenjang','$keterangan')";
        $sql = $koneksi->query($query); //eksekusi query

        if($sql){
           header ("Location:index.php?page=prodi");
            exit; 
        }
        else{
            echo "Gagal menyimpan data!";
        }
    }

    //==DELETE PRODI==
    elseif (isset($_GET['prodi_hapus']))
    {
        $id = $_GET['prodi_hapus'];

        $query = "DELETE FROM prodi WHERE id ='$id'";
        $delete = $koneksi->query($query);

        if ($delete) {
            header ("Location:index.php?page=prodi");
            exit;
        } else {
            echo "Gagal menghapus data";
        }
    }
    
    //==UPDATE PRODI==
    elseif (isset($_POST['prodi_ubah'])) 
    {
        $id = $_POST['id'];
        $nama_prodi = $_POST['nama_prodi'];
        $jenjang = $_POST['jenjang'];
        $keterangan = $_POST['keterangan'];

        $query = "UPDATE prodi SET nama_prodi='$nama_prodi', jenjang='$jenjang', keterangan='$keterangan' WHERE id='$id'";
        $update = $koneksi->query($query);

        if ($update) {
            header("Location:index.php?page=prodi");
            exit;
        } else {
            echo "Maaf, data gagal diubah!";
        }
    }
?>
