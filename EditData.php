<?php
//error_reporting(0);
include 'koneksi.php';

if(isset($_GET["id"])){
    $id = ($_GET["id"]);

    $result = mysqli_query($koneksi, "SELECT * FROM data_mahasiswa WHERE id_mahasiswa = '$id' ");

    while($row = mysqli_fetch_array($result)){
        $id_mahasiswa = $row["id_mahasiswa"];
        $nim = $row["nim"];
        $nama = $row["nama"];
        $gender = $row["gender"];
        $tanggal_lahir= $row["tanggal_lahir"];
        $semester = $row["semester"];
        $foto = $row["foto"];
    }

}else {
    header("location:index.php");
}
?>
<body>
<form action="ProsesEditData.php" method="post" enctype="multipart/form-data" name="form1" id="form1">

<legend><h3>Data Mahasiswa</h3></legend>
<table>
    <tr>
        <td>ID Mahasiswa</td>
        <td>:</td>
        <td>
            <input name="id_mahasiswa" type="number" id="id_mahasiswa" size="20" readonly 
            value="<?php echo $id_mahasiswa; ?>"/>
        </td>
    </tr>
    <tr>
        <td>Nim</td>
        <td>:</td>
        <td>
            <input name="nim" type="text" id="nim" size="20" value="<?php echo $nim; ?>"/>
        </td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>
            <input name="nama" type="text" id="nama" size="50" value="<?php echo $nama; ?>"/>
        </td>
    </tr>
    <tr>
        <td>Gender</td>
        <td>:</td>
        <td>
            <input type="radio" name="gender" value="Laki-laki" <?php echo $gender; ?>/>Laki-laki<br>
            <input type="radio" name="gender" value="Perempuan" <?php echo $gender; ?>/>Perempuan<br>
        </td>
    </tr>
    <tr>
        <td>Tanggal_lahir</td>
        <td>:</td>
        <td>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" <?php echo $tanggal_lahir; ?>/>  
        </td>
    </tr>
    <tr>
        <td>Semester</td>
        <td>:</td>
        <td>
            <input type="checkbox" name="semester" value="1"/>1<br>
            <input type="checkbox" name="semester" value="2"/>2<br>
            <input type="checkbox" name="semester" value="3"/>3<br>
            <input type="checkbox" name="semester" value="4"/>4<br>
            <input type="checkbox" name="semester" value="5"/>5<br>
            <input type="checkbox" name="semester" value="6"/>6<br>
            <?php echo $semester; ?>
        </td>
    </tr>
    <tr>
        <td>Foto</td>
        <td>:</td>
        <td>
            <input type="file" name="foto" id="foto"/><br>
            <?php echo $foto; ?>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><input type="submit" name="edit" id="edit" value="edit"/></td>
    </tr>
</table>
</body>