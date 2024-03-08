<?php
error_reporting(0);
include 'koneksi.php';
?>

<!<!DOCTYPE>
<html>
    <head>
        <title> Data Mahasiswa </title>
    </head>
    <body>
        <h1 style="text-align: center;">Data Mahasiswa</h1>
        <center><a href="InputData.php">Tambah Data</a></center>
        <br>
        <table border="1" style="margin: auto;">
        <thead>
            <tr>
                <th>No</th>
                <th>id_mahasiswa</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tanggal_lahir</th>
                <th>Semester</th>
                <th>Foto</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=0;
            $result = mysqli_query($koneksi, "SELECT * FROM data_mahasiswa ORDER BY id_mahasiswa ASC");
            while($row = mysqli_fetch_array($result)){
                $no++
            ?>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $row['id_mahasiswa'];?></td>
                <td><?php echo $row['nim'];?></td>
                <td><?php echo $row['nama'];?></td>
                <td><?php echo $row['gender'];?></td>
                <td><?php echo $row['tanggal_lahir'];?></td>
                <td><?php echo $row['semester'];?></td>
                <td>
                    <center>
                        <img src="image/<?php echo $row['foto'];?>"
                        border="0" width="70px" height="70px"/>
                    </center>
                </td>
                <td>
                    <a href="EditData.php?id=<?php echo $row['id_mahasiswa'];?>">Edit</a>
                </td>
                <td>
                    <a href="HapusData.php?id=<?php echo $row['id_mahasiswa'];?>">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
        </table>
    </body>
</html>