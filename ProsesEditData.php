<?php
//error_reporting(0);
include 'koneksi.php';

if (isset($_POST['edit'])){
    $id_mahasiswa = $_POST['id_mahasiswa'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $semester = $_POST['semester'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $path = "image/".$foto;

    if(empty($foto)){
        $query = "UPDATE data_mahasiswa set nim = '$nim', nama = '$nama', gender = '$gender', 
        tanggal_lahir = '$tanggal_lahir', semester = '$semester' where id_mahasiswa = '$id_mahasiswa' ";
    }
    else {
        $file = mysqli_query($koneksi, "SELECT foto FROM data_mahasiswa where data_mahasiswa = '$data_mahasiswa' ");
        $hasil = mysqli_fetch_array($file);
        $foto_lama = $hasil['foto'];
        unlink("image/".$foto_lama);

        if(move_uploaded_file($tmp, $path)){
            $query = "UPDATE data_mahasiswa set nim = '$nim', nama = '$nama', gender = '$gender', 
            tanggal_lahir = '$tanggal_lahir', semester = '$semester', foto = '$foto' where data_mahasiswa = '$data_mahasiswa' "; 
        }
    }

    $result=mysqli_query($koneksi,$query);

    if (!$result)
    {
        die("Data gagal diubah; ".mysqli_errno($koneksi).mysqli_error($koneksi))
        ;
    }
    else
    {
        echo "<script>alert('Data Berhasil Diubah');window.location.href='index.php'</script>";
    }
}
?>