<?php
//error_reporting(0);
include 'koneksi.php';

if(isset($_GET['id'])){
    $id_mahasiswa = $_GET['id'];

    $file = mysqli_query($koneksi, "SELECT foto FROM data_mahasiswa where id_mahasiswa = '$id_mahasiswa' ");
    $hasil = mysqli_fetch_array($file);
    $foto_lama = $hasil['foto'];
    unlink("image/".$foto_lama);

    $query = "DELETE from data_mahasiswa where id_mahasiswa = '$id_mahasiswa' ";
    $result = mysqli_query($koneksi, $query);

    if (!$result){
        die("Data gagal dihapus; ".mysqli_errno($koneksi).mysqli_error($koneksi));
    }
    else{
        echo "<script>alert('Data berhasil dihapus');window.location.href='index.php'</script>";
    }
}
?>