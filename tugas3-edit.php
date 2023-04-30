<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbpegawai";

//create connection
$conn = mysqli_connect ($servername, $username, $password, $dbname);


//check connection
if(!$conn){
    die("Connection failed : " . mysqli_connect_errno());
    exit();
}

if (isset($_POST['simpan'])) {
    $kode_pegawai = $_POST['kode_pegawai'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $kode_divisi = $_POST['kode_divisi'];
    $gaji = $_POST['gaji'];

    $sql = "UPDATE pegawai SET kode_pegawai='$kode_pegawai', nama_pegawai='$nama_pegawai', kode_divisi='$kode_divisi', gaji='$gaji' WHERE kode_pegawai='$kode_pegawai'";
    if (mysqli_query($conn, $sql)) {
        header("Location: tugas3.php");
    } else {
        echo "Edit Data Gagal!";
    }
}

mysqli_close($conn);
?>