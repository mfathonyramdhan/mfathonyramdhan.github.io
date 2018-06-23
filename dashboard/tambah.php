<?php

include "../connect.php";

$judul = $_POST['judul'];
$isi = $_POST['isi'];
$gambar = $_POST['gambar'];

$query = "  INSERT INTO posting (judul, gambar. isi) 
            VALUES ('$judul', '$gambar', '$isi')";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if ($num > 0)
{
    echo "Berhasil Tambah Data";
}
else
{
    echo "Gagal Tambah Data";
}
echo "<br><a href='dashboard.php'>Lihat Data</a>"
?>