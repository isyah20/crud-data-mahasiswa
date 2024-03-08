<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'data_mahasiswa');

if(!$koneksi)
{
    die("koneksi dengan database gagal : ".mysqli_connect_errno().mysqli_connect_error());
}
?>