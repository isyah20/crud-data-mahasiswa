<?php
//error_reporting(0);
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $id_mahasiswa = $_POST['id_mahasiswa'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $semester = $_POST['semester'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $path = "image/".$foto;

    if(move_uploaded_file($tmp, $path)){
        $query = "INSERT INTO data_mahasiswa VALUES ('$id_mahasiswa', '$nim', '$nama', '$gender', '$tanggal_lahir', 
        '$semester', '$foto')";

        $result = mysqli_query($koneksi, $query);

        if(!$result){
            die("Query gagal dijalankan : ".mysqli_errno($koneksi)."_".mysqli_error($koneksi));
        }
        else{
            echo "<script>alert('Data berhasil ditambah');window.location.href='index.php'</script>";
        }
    }
}
?>