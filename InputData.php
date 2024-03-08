<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Input Data Mahasiswa</title>
    </head>
    <body>
        <form action="ProsesInputData.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
            <fieldset>
                <legend><h3>Data Mahasiswa</h3></legend>
                <table>
                    <tr>
                        <td>ID Mahasiswa</td>
                        <td>:</td>
                        <td><input name="id_mahasiswa" type="number" id="id_mahasiswa" size="20" readonly/></td>
                    </tr>
                    <tr>
                        <td>Nim</td>
                        <td>:</td>
                        <td><input name="nim" type="text" id="nim" size="20"/></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input name="nama" type="text" id="nama" size="50"/></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>:</td>
                        <td><input type="radio" name="gender" value="Laki-laki"/>Laki-laki<br>
                        <input type="radio" name="gender" value="Perempuan"/>Perempuan<br></td>
                    </tr>
                    <tr>
                        <td>Tanggal_lahir</td>
                        <td>:</td>
                        <td><input type="date" name="tanggal_lahir"></td>
                    </tr>
                    <tr>
                        <td>Semester</td>
                        <td>:</td>
                        <td><input type="checkbox" name="semester" value="1"/>1<br>
                        <input type="checkbox" name="semester" value="2"/>2<br>
                        <input type="checkbox" name="semester" value="3"/>3<br>
                        <input type="checkbox" name="semester" value="4"/>4<br>
                        <input type="checkbox" name="semester" value="5"/>5<br>
                        <input type="checkbox" name="semester" value="6"/>6<br>
                        </td>
                    </tr>
                    <tr>
                        <td>Foto</td>
                        <td>:</td>
                        <td><input type="file" name="foto" id="foto"/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" name="simpan" id="simpan" value="simpan"/></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>