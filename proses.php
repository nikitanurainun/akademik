<?php 
    //include : jika kode eror kode selanjutnya tetap dijalankan
    //require : jika kode eror kode selanjutnya tidak dijalankan

    require 'koneksi.php'; 

    //==INSERT==
    if (isset($_POST['submit']))
    {
        $nim = $_POST['nim'];
        $nama_mhs = $_POST['nama_mhs'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $alamat = $_POST['alamat'];

        $query = "INSERT INTO mahasiswa(nim, nama_mhs, tgl_lahir, alamat)
                VALUES('$nim','$nama_mhs','$tgl_lahir','$alamat')";
        $sql = $koneksi->query($query); //eksekusi query

        if($sql){
           header ("Location:index.php?page=mahasiswa");
            exit; 
        }
        else{
            echo "Gagal menyimpan data!";
        }
    }

    //==DELETE==
    if (isset($_GET['nim']))
    {
        $nim = $_GET['nim'];

        $query = "DELETE FROM mahasiswa WHERE nim ='$nim'";
        $delete = $koneksi->query($query);

        if ($delete) {
            header ("Location:index.php?page=mahasiswa");
            exit;
        } else {
            echo "Gagal menghapus data";
        }
    }
    
    //==UPDATE==
    if (isset($_POST['ubah'])) 
    {
        $nim = $_POST['nim'];
        $nama_mhs = $_POST['nama_mhs'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $alamat = $_POST['alamat'];

        $query = "UPDATE mahasiswa SET nama_mhs='$nama_mhs', tgl_lahir='$tgl_lahir', alamat='$alamat' WHERE nim='$nim'";
        $update = $koneksi->query($query);

        if ($update) {
            header("Location:index.php?page=mahasiswa");
            exit;
        } else {
            echo "Maaf, data gagal diubah!";
        }
    }
?>
 <a href ='index.php'><br>Lihat Data</a>